<?php
require_once '../classes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents('php://input'), true);

  if (isset($data['account_id']) && isset($data['message'])) {
    $account_id = $data['account_id'];
    $user_message = $data['message'];

    // Insert user's message into the database
    $stmt = $pdo->prepare("INSERT INTO chatbot_conversation (account_id, message, sender) VALUES (?, ?, 'user')");
    $stmt->execute([$account_id, $user_message]);

    // Call the Python chatbot service to get a response
    $chatbot_response = shell_exec("python3 ../scripts/chatbot.py \"$user_message\" 2>&1");

    // Clean up the response from the chatbot
    $chatbot_response = trim($chatbot_response); // Remove any trailing whitespace or newlines

    // Insert chatbot's response into the database
    $stmt = $pdo->prepare("INSERT INTO chatbot_conversation (account_id, message, sender) VALUES (?, ?, 'chatbot')");
    $stmt->execute([$account_id, $chatbot_response]);

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
