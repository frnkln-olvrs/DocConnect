<?php
require_once('../classes/database.php');

$accountId = $_SESSION['account_id'];
$chatWithId = $_POST['chat_with'];

$query = "SELECT * FROM messages
          WHERE (sender_id = ? AND receiver_id = ?)
          OR (sender_id = ? AND receiver_id = ?)
          ORDER BY timestamp";
$stmt = $pdo->prepare($query);
$stmt->execute([$accountId, $chatWithId, $chatWithId, $accountId]);
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($messages);

?>
