<?php
require_once('../classes/database.php');

$senderId = $_SESSION['account_id'];
$receiverId = $_POST['receiver_id'];
$message = $_POST['message'];

$query = "INSERT INTO messages (sender_id, receiver_id, message, chat_thread_id, status)
          VALUES (?, ?, ?, NULL, 'sent')";
$stmt = $pdo->prepare($query);
$stmt->execute([$senderId, $receiverId, $message]);

echo json_encode(['success' => true, 'message_id' => $pdo->lastInsertId()]);

?>
