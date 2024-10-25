<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../classes/database.php';

// Initialize the database connection
$db = new Database();
$pdo = $db->connect();

if (isset($_GET['account_id'])) {
    $account_id = $_GET['account_id'];

    // Prepare and execute the query to fetch chatbot conversation
    $stmt = $pdo->prepare("SELECT user_message, bot_response FROM chatbot_conversation WHERE account_id = ? ORDER BY timestamp ASC");
    $stmt->execute([$account_id]);
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return the messages as a JSON response
    echo json_encode($messages);
} else {
    // Return an empty array if no account_id is provided
    echo json_encode([]);
}
?>