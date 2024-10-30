<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '../errors.log');
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once('../classes/database.php');
require_once('../vendor/autoload.php');

if (!isset($_SESSION['account_id'])) {
  echo json_encode(['error' => 'User not authenticated']);
  exit;
}

$senderId = $_SESSION['account_id'];
$message = trim($_POST['message'] ?? '');
$receiverId = trim($_POST['receiver_id'] ?? '');

if (!$message) {
  echo json_encode(['error' => 'Message content is required']);
  exit;
}

$db = new Database();
$pdo = $db->connect();

if (!$pdo) {
  echo json_encode(['error' => 'Database connection failed']);
  exit;
}

// Check if receiver ID is provided
if (!$receiverId) {
  // Process the message for the chatbot
  try {
    $command = escapeshellcmd("node ../scripts/chatbot.js" . escapeshellarg($message));
    $response = shell_exec($command);

    if ($response) {
      $stmt = $pdo->prepare("INSERT INTO chatbot_conversation (account_id, user_message, bot_response) VALUES (:account_id, :user_message, :bot_response)");
      $stmt->execute([
        ':account_id' => $senderId,
        ':user_message' => $message,
        ':bot_response' => $response
      ]);

      echo json_encode(['message_id' => $pdo->lastInsertId(), 'reply' => $response]);
    } else {
      echo json_encode(['error' => 'Failed to get a response from the chatbot']);
    }
  } catch (PDOException $e) {
    error_log($e->getMessage());
    echo json_encode(['error' => 'Database query failed: ' . $e->getMessage()]);
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

    echo json_encode(['success' => true, 'message_id' => $pdo->lastInsertId()]);
  } catch (Exception $e) {
    error_log($e->getMessage());
    echo json_encode(['error' => 'Failed to send message']);
  }
}
?>