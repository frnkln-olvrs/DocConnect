<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0); 
error_reporting(E_ALL);

session_start();
require_once('../classes/database.php');

$accountId = $_SESSION['account_id'];
$chatWithId = $_POST['chat_with'];

$db = new Database();
$pdo = $db->connect();

$query = "SELECT * FROM messages
          WHERE (sender_id = :account_id AND receiver_id = :chat_with_id)
          OR (sender_id = :chat_with_id AND receiver_id = :account_id)
          ORDER BY timestamp";
$stmt = $pdo->prepare($query);
$stmt->execute(['account_id' => $accountId, 'chat_with_id' => $chatWithId]);

$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($messages);
?>
