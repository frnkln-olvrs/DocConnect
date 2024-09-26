<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
require_once '../classes/chat.class.php';

$chat = new Chat();
$user_id = $_POST['user_id'];
$doctor_id = $_POST['doctor_id'];

$messages = $chat->fetchMessages($user_id, $doctor_id);

// Debug: Print the fetched messages
echo "<pre>";
print_r($messages);
echo "</pre>";

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
?>
