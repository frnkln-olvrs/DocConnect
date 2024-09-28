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

$db = new Database();
$pdo = $db->connect();

if (!$pdo) {
  echo json_encode(['error' => 'Database connection failed']);
  exit;
}

try {
  $query = "SELECT DISTINCT a.account_id, a.firstname, a.lastname, a.account_image
            FROM account a
            JOIN messages m ON (a.account_id = m.sender_id OR a.account_id = m.receiver_id)
            WHERE (m.sender_id = ? OR m.receiver_id = ?)
            AND a.account_id != ?";
  $stmt = $pdo->prepare($query);
  $stmt->execute([$accountId, $accountId, $accountId]);
  $chatList = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  echo json_encode($chatList);
} catch (Exception $e) {
  error_log($e->getMessage());
  echo json_encode(['error' => 'Failed to retrieve chats']);
}
?>