<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '../errors.log');
error_reporting(E_ALL);

session_start();
require_once('../classes/database.php');

if (!isset($_SESSION['account_id'])) {
  echo json_encode(['error' => 'User not authenticated']);
  exit;
}

$accountId = $_SESSION['account_id'];
$chatWith = $_POST['chat_with'] ?? null;

if (!$chatWith) {
  echo json_encode(['error' => 'Invalid input']);
  exit;
}

if ($chatWith == '9999') {
  echo json_encode(['success' => true]);
  exit;
}

$db = new Database();
$pdo = $db->connect();

if (!$pdo) {
  echo json_encode(['error' => 'Database connection failed']);
  exit;
}

try {
  $query = "UPDATE messages SET is_read = 1 WHERE receiver_id = :account_id AND sender_id = :chat_with AND is_read = 0";
  $stmt = $pdo->prepare($query);
  $stmt->execute(['account_id' => $accountId, 'chat_with' => $chatWith]);

  echo json_encode(['success' => true]);
} catch (Exception $e) {
  error_log($e->getMessage());
  echo json_encode(['error' => 'Failed to mark messages as read']);
}
?>
