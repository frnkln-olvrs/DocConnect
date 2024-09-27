<?php
require_once('../classes/database.php');

$userId = $_SESSION['user_id'];
$chatWithId = $_POST['chat_with'];

$query = "SELECT * FROM messages
          WHERE (sender_id = ? AND receiver_id = ?)
          OR (sender_id = ? AND receiver_id = ?)
          ORDER BY timestamp";
$stmt = $pdo->prepare($query);
$stmt->execute([$userId, $chatWithId, $chatWithId, $userId]);
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($messages);

?>
