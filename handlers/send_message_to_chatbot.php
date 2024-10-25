<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../classes/database.php';

$db = new Database();
$pdo = $db->connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $account_id = $_POST['account_id'] ?? null;
  $user_message = $_POST['messageInput'] ?? null;

  if ($account_id && $user_message) {
    $stmt = $pdo->prepare("INSERT INTO chatbot_conversation (account_id, user_message, sender) VALUES (?, ?, 'user')");
    $stmt->execute([$account_id, $user_message]);

    $chatbot_response = shell_exec("python ../scripts/chatbot.py \"$user_message\" 2>&1");
    if ($chatbot_response === null) {
      echo json_encode(['error' => 'Python script execution failed']);
      exit;
    }
    $chatbot_response = trim($chatbot_response);

    $stmt = $pdo->prepare("INSERT INTO chatbot_conversation (account_id, bot_response, sender) VALUES (?, ?, 'bot')");
    $stmt->execute([$account_id, $chatbot_response]);

    echo json_encode([
      'user_message' => $user_message,
      'chatbot_reply' => $chatbot_response
    ]);
  } else {
    echo json_encode(['error' => 'Invalid input']);
  }
} else {
  echo json_encode(['error' => 'Invalid request method']);
}
?>