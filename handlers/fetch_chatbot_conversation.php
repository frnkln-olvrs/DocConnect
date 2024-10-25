<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../classes/database.php';

$db = new Database();
$pdo = $db->connect();

if (isset($_GET['account_id'])) {
    $account_id = $_GET['account_id'];

    $stmt = $pdo->prepare("SELECT user_message, bot_response FROM chatbot_conversation WHERE account_id = ? ORDER BY timestamp ASC");
    $stmt->execute([$account_id]);
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($messages);
} else {
    echo json_encode([]);
}
?>