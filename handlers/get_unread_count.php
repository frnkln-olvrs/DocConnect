<?php
header('Content-Type: application/json');
session_start();
require_once('../classes/database.php');

if (!isset($_SESSION['account_id'])) {
  echo json_encode(['error' => 'User not authenticated']);
  exit;
}

function getUnreadCount($chat_id) {
  $db = new Database();
  $pdo = $db->connect();

  if (!$pdo) {
    echo json_encode(['error' => 'Database connection failed']);
    exit;
  }

  try {
    $stmt = $pdo->prepare("SELECT COUNT(*) as unread_count FROM messages WHERE chat_id = :chat_id AND is_read = 0");
    $stmt->execute(['chat_id' => $chat_id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['unread_count'];
  } catch (Exception $e) {
    error_log($e->getMessage());
    echo json_encode(['error' => 'Failed to fetch unread count']);
    exit;
  }
}

$chat_id = isset($_GET['chat_id']) ? (int)$_GET['chat_id'] : 0;

if ($chat_id <= 0) {
  echo json_encode(['error' => 'Invalid chat ID']);
  exit;
}

$unreadCount = getUnreadCount($chat_id);

echo json_encode([$chat_id => $unreadCount]);
?>
