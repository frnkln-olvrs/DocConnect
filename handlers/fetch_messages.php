<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0); 
error_reporting(E_ALL);

session_start();

require_once('../classes/messages.class.php');
$message = new Message();

$account_id = $_SESSION['account_id'];
$with_account_id = $_POST['chat_with'];

// $db = new Database();
// $pdo = $db->connect();

// $query = "SELECT * FROM messages
//           WHERE (sender_id = :account_id AND receiver_id = :chat_with_id)
//           OR (sender_id = :chat_with_id AND receiver_id = :account_id)
//           ORDER BY timestamp";
// $stmt = $pdo->prepare($query);
// $stmt->execute(['account_id' => $accountId, 'chat_with_id' => $chatWithId]);

$messages = $message->fetch_messages($account_id, $with_account_id);

echo json_encode($messages);
?>