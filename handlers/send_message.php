<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '../errors.log');
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once('../classes/database.php');
require_once('../vendor/autoload.php'); 

if (!isset($_SESSION['account_id'])) {
  echo json_encode(['error' => 'User not authenticated']);
  exit;
}

$senderId = $_SESSION['account_id'];
$receiverId = $_POST['receiver_id'] ?? null;
$message = $_POST['message'] ?? null;

$chatgptAccountId = 1;

if (!$receiverId || !$message) {
  echo json_encode(['error' => 'Invalid input']);
  exit;
}

$db = new Database();
$pdo = $db->connect();

if (!$pdo) {
  echo json_encode(['error' => 'Database connection failed']);
  exit;
}

// Check if the message is being sent to ChatGPT
if ($receiverId == $chatgptAccountId) {
  // Send the message to the Python server (Flask API)
  $api_url = 'http://localhost:5000/chat'; // Flask server URL
  $curl = curl_init();

  $data = json_encode(['message' => $message]);

  curl_setopt_array($curl, [
    CURLOPT_URL => $api_url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
      'Content-Type: application/json',
    ],
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data,
  ]);

  $response = curl_exec($curl);
  $error = curl_error($curl);

  curl_close($curl);

  if ($error) {
    echo json_encode(['error' => 'Error connecting to AI server: ' . $error]);
    exit;
  }

  $chatgptResponse = json_decode($response, true)['message'];

  error_log("ChatGPT Response: " . $chatgptResponse);

  // Insert ChatGPT response into the database
  $query = "INSERT INTO messages (sender_id, receiver_id, message, status, is_read) VALUES (?, ?, ?, 'sent', 0)";
  $stmt = $pdo->prepare($query);
  if ($stmt->execute([$chatgptAccountId, $senderId, $chatgptResponse])) {
    echo json_encode(['success' => true, 'message' => $chatgptResponse]);
  } else {
    error_log("Failed to insert ChatGPT response into database");
    echo json_encode(['error' => 'Failed to insert ChatGPT response']);
  }
  exit;
}

try {
  // Insert user message into the database
  $query = "INSERT INTO messages (sender_id, receiver_id, message, status, is_read) VALUES (?, ?, ?, 'sent', 0)";
  $stmt = $pdo->prepare($query);
  $stmt->execute([$senderId, $receiverId, $message]);

  echo json_encode(['success' => true, 'message_id' => $pdo->lastInsertId()]);
} catch (Exception $e) {
  error_log($e->getMessage());
  echo json_encode(['error' => 'Failed to send message']);
}
?>