<?php
require_once '../classes/database.php';
require_once '../classes/chat.class.php';

// Fetch POST data
$sender_id = $_POST['sender_id'] ?? null;
$receiver_id = $_POST['receiver_id'] ?? null;
$message = $_POST['message'] ?? '';

if ($sender_id && $receiver_id && !empty($message)) {
  $chat = new Chat();
  $chat->sendMessage($sender_id, $receiver_id, $message);
  echo "Message sent successfully!";
} else {
  echo "Failed to send message. Please check your inputs.";
}
?>
