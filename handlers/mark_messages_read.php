<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '../errors.log');
error_reporting(E_ALL);

session_start();

require_once('../classes/message.class.php');
$message = new Message();

if (!isset($_SESSION['account_id'])) {
  echo json_encode(['error' => 'User not authenticated']);
  exit;
}

$account_id = $_SESSION['account_id'];
$chat_with_id = $_POST['chat_with'] ?? null;

if (!$chatWith) {
  echo json_encode(['error' => 'Invalid input']);
  exit;
}

try {

  // $query = "UPDATE messages SET is_read = 1 WHERE receiver_id = :account_id AND sender_id = :chat_with AND is_read = 0";
  // $stmt = $pdo->prepare($query);
  // $stmt->execute(['account_id' => $accountId, 'chat_with' => $chatWith]);
  if ($message->mark_messages_read($chat_with_id, $account_id)) {
    echo json_encode(['success' => true]);
  }
} catch (Exception $e) {
  error_log($e->getMessage());
  echo json_encode(['error' => 'Failed to mark messages as read']);
}
