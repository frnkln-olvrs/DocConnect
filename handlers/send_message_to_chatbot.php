<?php
require_once '../classes/database.php';

$db = new Database();
$pdo = $db->connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents('php://input'), true);

  if (isset($data['account_id']) && isset($data['message'])) {
    $account_id = $data['account_id'];
    $user_message = $data['message'];
    $stmt = $pdo->prepare("INSERT INTO chatbot_conversation (account_id, user_message, sender) VALUES (?, ?, 'user')");
    $stmt->execute([$account_id, $user_message]);

    $chatbot_response = shell_exec("python ../scripts/chatbot.py \"$user_message\" 2>&1");

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