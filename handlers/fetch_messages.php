<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0); 
error_reporting(E_ALL);

session_start();
require_once('../classes/database.php');

// Get the current account ID from the session
$accountId = $_SESSION['account_id'];
$chatWithId = $_POST['chat_with'];

// Get the last message ID from the POST request, default to 0 if not set
$lastMessageId = isset($_POST['last_message_id']) ? (int)$_POST['last_message_id'] : 0;

// Connect to the database
$db = new Database();
$pdo = $db->connect();

// Prepare the SQL query to fetch new messages after the last message ID
$query = "SELECT * FROM messages
          WHERE ((sender_id = :account_id AND receiver_id = :chat_with_id)
          OR (sender_id = :chat_with_id AND receiver_id = :account_id))
          AND id > :last_message_id
          ORDER BY timestamp";

$stmt = $pdo->prepare($query);
$stmt->execute([
    'account_id' => $accountId,
    'chat_with_id' => $chatWithId,
    'last_message_id' => $lastMessageId
]);

// Fetch new messages
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return the new messages as JSON
echo json_encode($messages);
?>
