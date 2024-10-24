<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '../errors.log');
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once('../classes/database.php');
require_once('../vendor/autoload.php');

// Check if user is authenticated
if (!isset($_SESSION['account_id'])) {
    echo json_encode(['error' => 'User not authenticated']);
    exit;
}

$senderId = $_SESSION['account_id'];
$receiverId = $_POST['receiver_id'] ?? null;
$message = $_POST['message'] ?? null;

if (!$message) {
    echo json_encode(['error' => 'Invalid input']);
    exit;
}

$db = new Database();
$pdo = $db->connect();

if (!$pdo) {
    echo json_encode(['error' => 'Database connection failed']);
    exit;
}

// Check if the receiver is a chatbot
if ($receiverId === 'chatbot') { // Change this to whatever identifier you use for the chatbot
  try {
    // Insert the user's message to the bot into the database
    $query = "INSERT INTO messages (sender_id, receiver_id, message, status, is_read) VALUES (?, ?, ?, 'sent', 1)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$senderId, $receiverId, $message]);

    // Get the chatbot's response by executing the Python script
    $command = escapeshellcmd("python ../scripts/chatbot.py " . escapeshellarg($message));
    $output = shell_exec($command);

    if ($output) {
      // Insert the bot's response into the database
      $query = "INSERT INTO messages (sender_id, receiver_id, message, status, is_read) VALUES (?, ?, ?, 'received', 1)";
      $stmt = $pdo->prepare($query);
      $stmt->execute([$receiverId, $senderId, $output]); // Save bot's response

      // Also insert the message into the chatbot_conversation table
      $stmt = $pdo->prepare("INSERT INTO chatbot_conversation (account_id, message, sender) VALUES (?, ?, ?)");
      $stmt->execute([$senderId, $message, 'user']);
      $stmt->execute([$receiverId, $output, 'bot']); // Save bot's response

      echo json_encode(['reply' => $output]);
    } else {
      echo json_encode(['error' => 'Chatbot response failed']);
    }
  } catch (Exception $e) {
    error_log($e->getMessage());
    echo json_encode(['error' => 'Chatbot error']);
  }
} else {
  // Process human-to-human message
  if (!$receiverId) {
    echo json_encode(['error' => 'Invalid receiver']);
    exit;
  }

  try {
    // Insert user message into the database
    $query = "INSERT INTO messages (sender_id, receiver_id, message, status, is_read) VALUES (?, ?, ?, 'sent', 0)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$senderId, $receiverId, $message]);

    // $stmt = $pdo->prepare("INSERT INTO chatbot_conversation (account_id, message, sender) VALUES (?, ?, ?)");
    // $stmt->execute([$receiverId, $message, 'user']);

    echo json_encode(['success' => true, 'message_id' => $pdo->lastInsertId()]);
  } catch (Exception $e) {
    error_log($e->getMessage());
    echo json_encode(['error' => 'Failed to send message']);
  }
}
?>