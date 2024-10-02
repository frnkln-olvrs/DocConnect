<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '../errors.log');
error_reporting(E_ALL);

session_start();
require_once('../classes/database.php');
require_once('../vendor/autoload.php'); 

if (!isset($_SESSION['account_id'])) {
  echo json_encode(['error' => 'User not authenticated']);
  exit;
}

// Retrieve the sender ID
$senderId = $_SESSION['account_id'];
$receiverId = $_POST['receiver_id'] ?? null;
$message = $_POST['message'] ?? null;

// Check for valid input
if (!$receiverId || !$message) {
  echo json_encode(['error' => 'Invalid input']);
  exit;
}

// Establish database connection
$db = new Database();
$pdo = $db->connect();

if (!$pdo) {
  echo json_encode(['error' => 'Database connection failed']);
  exit;
}

// Get the ChatGPT account ID
$query = "SELECT id FROM accounts WHERE username = 'ChatGPT'";
$result = $pdo->query($query);
if ($result && $row = $result->fetch(PDO::FETCH_ASSOC)) {
  $chatgptAccountId = $row['id'];
} else {
  echo json_encode(['error' => 'ChatGPT account not found']);
  exit;
}

// Check if the message is to ChatGPT
if ($receiverId == $chatgptAccountId) { 
  // Send message to ChatGPT
  $chatgptResponse = sendToChatGPT($message);

  error_log("ChatGPT Response: " . $chatgptResponse);

  // Store the response in the messages table
  $query = "INSERT INTO messages (sender_id, receiver_id, message, status, is_read) VALUES (?, ?, ?, 'sent', 0)";
  $stmt = $pdo->prepare($query);
  
  if ($stmt->execute([$chatgptAccountId, $senderId, $chatgptResponse])) {
    echo json_encode(['success' => true, 'message' => $chatgptResponse]);
  } else {
    error_log("Failed to insert ChatGPT response into database");
    echo json_encode(['error' => 'Failed to insert ChatGPT response']);
  }
  exit;
}

// Handle normal message sending
try {
  $query = "INSERT INTO messages (sender_id, receiver_id, message, status, is_read) VALUES (?, ?, ?, 'sent', 0)";
  $stmt = $pdo->prepare($query);
  $stmt->execute([$senderId, $receiverId, $message]);

  echo json_encode(['success' => true, 'message_id' => $pdo->lastInsertId()]);
} catch (Exception $e) {
  error_log($e->getMessage());
  echo json_encode(['error' => 'Failed to send message']);
}
?>
