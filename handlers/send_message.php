<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
require_once '../classes/chat.class.php';

$chat = new Chat();
$sender_id = $_POST['sender_id'];
$receiver_id = $_POST['receiver_id'];
$message = $_POST['message'];

$chat->sendMessage($sender_id, $receiver_id, $message);
?>
