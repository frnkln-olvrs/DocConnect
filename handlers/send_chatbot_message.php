<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $message = $_POST['message'] ?? null;

  if ($message) {
    // Call Python script to get chatbot response
    $command = escapeshellcmd("python3 ../scripts/chatbot.py " . escapeshellarg($message));
    $output = shell_exec($command);

    // Send response back as JSON
    echo json_encode(['reply' => $output]);
  } else {
    echo json_encode(['error' => 'Invalid input']);
  }
} else {
  echo json_encode(['error' => 'Invalid request method']);
}
