<?php
session_start();
require_once('../classes/database.php');

$senderId = $_SESSION['account_id'];
$receiverId = $_POST['receiver_id'];
$message = $_POST['message'];

$db = new Database();
$pdo = $db->connect();

$query = "INSERT INTO messages (sender_id, receiver_id, message, status) VALUES (?, ?, ?, 'sent')";
$stmt = $pdo->prepare($query);
$stmt->execute([$senderId, $receiverId, $message]);

echo json_encode(['success' => true, 'message_id' => $pdo->lastInsertId()]);
?>
