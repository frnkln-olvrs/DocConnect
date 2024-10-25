<?php
require_once '../classes/database.php';

$db = new Database();
$pdo = $db->connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents('php://input'), true);

  if (isset($data['account_id']) && isset($data['message'])) {
    $account_id = $data['account_id'];
    $user_message = $data['message'];

    // Insert the user message into the user_message column
    $stmt = $pdo->prepare("INSERT INTO chatbot_conversation (account_id, user_message, sender) VALUES (?, ?, 'user')");
    $stmt->execute([$account_id, $user_message]);

    // Call the Python script to get the chatbot's response
    $chatbot_response = shell_exec("python ../scripts/chatbot.py \"$user_message\" 2>&1");

    // Clean up the response from the chatbot
    $chatbot_response = trim($chatbot_response); // Remove any trailing whitespace or newlines

    // Insert the chatbot's response into the bot_response column
    $stmt = $pdo->prepare("UPDATE chatbot_conversation SET bot_response = ? WHERE account_id = ? AND user_message = ?");
    $stmt->execute([$chatbot_response, $account_id, $user_message]);

    // Return both user's message and chatbot's response
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