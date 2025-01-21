<?php
require_once '../classes/database.php';
require_once '../classes/chat.class.php';

// Fetch user and doctor IDs from the POST request
$user_id = $_POST['user_id'] ?? null;
$doctor_id = $_POST['doctor_id'] ?? null;

if ($user_id && $doctor_id) {
  $chat = new Chat();
  $messages = $chat->fetchMessages($user_id, $doctor_id);

  foreach ($messages as $message) {
    $is_sender = $message['sender_id'] == $user_id;
    $message_class = $is_sender ? 'justify-content-end' : 'justify-content-start';
    $message_bg = $is_sender ? 'bg-primary' : 'bg-secondary';
    $profile_img = $is_sender ? 'user.png' : 'doctor.png'; // Replace with correct paths

    echo "<div class='d-flex align-items-end $message_class mb-3'>
            <img src='../assets/images/$profile_img' alt='Profile' class='rounded-circle me-3' height='30' width='30'>
            <div class='$message_bg text-light p-2 rounded-3'>{$message['message']}</div>
          </div>";
  }
} else {
    echo "Invalid user or doctor ID.";
}
?>
