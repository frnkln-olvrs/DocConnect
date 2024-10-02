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

$senderId = $_SESSION['account_id'];
$receiverId = $_POST['receiver_id'] ?? null;
$message = $_POST['message'] ?? null;

$chatgptAccountId = 1;

if (!$receiverId || !$message) {
  echo json_encode(['error' => 'Invalid input']);
  exit;
}

$db = new Database();
$pdo = $db->connect();

if (!$pdo) {
  echo json_encode(['error' => 'Database connection failed']);
  exit;
}

// Check if the message is being sent to ChatGPT
if ($receiverId == $chatgptAccountId) { 
  $chatgptResponse = sendToChatGPT($message);

  error_log("ChatGPT Response: " . $chatgptResponse);

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