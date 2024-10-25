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

try {
  // Get the chatbot's response from the Python script
  $command = escapeshellcmd("python ../scripts/chatbot.py " . escapeshellarg($message));
  $response = shell_exec($command);

  if ($response) {
    $stmt = $pdo->prepare("INSERT INTO chatbot_conversation (user_message, bot_response) VALUES (:user_message, :bot_response)");
    $stmt->execute([
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
?>