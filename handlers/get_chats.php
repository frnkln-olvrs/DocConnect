<?php 
require_once('../classes/database.php');

$accountId = $_SESSION['account_id'];

$query = "SELECT DISTINCT a.account_id, a.firstname, a.lastname, a.account_image
          FROM account a
          JOIN messages m ON (a.account_id = m.sender_id OR a.account_id = m.receiver_id)
          WHERE (m.sender_id = ? OR m.receiver_id = ?)
          AND a.account_id != ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$accountId, $accountId, $accountId]);
$chatList = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($chatList);

?>