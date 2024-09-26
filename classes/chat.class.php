<?php
require_once 'database.php';

class Chat extends Database {
    public function fetchMessages($user_id, $doctor_id)
    {
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM messages WHERE (sender_id = :user_id AND receiver_id = :doctor_id) OR (sender_id = :doctor_id AND receiver_id = :user_id) ORDER BY created_at ASC");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':doctor_id', $doctor_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function sendMessage($sender_id, $receiver_id, $message)
    {
        $conn = $this->connect();
        $stmt = $conn->prepare("INSERT INTO messages (sender_id, receiver_id, message, created_at) VALUES (:sender_id, :receiver_id, :message, NOW())");
        $stmt->bindParam(':sender_id', $sender_id);
        $stmt->bindParam(':receiver_id', $receiver_id);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
    }
}
?>
