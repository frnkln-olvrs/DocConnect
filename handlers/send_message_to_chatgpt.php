<?php
require_once('../vendor/autoload.php');

function sendToChatGPT($message, $history = []) {
  $apiKey = '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';
  $endpoint = 'https://api.openai.com/v1/chat/completions';

  $data = [
    'model' => 'gpt-3.5-turbo',
    'messages' => array_merge(
      [['role' => 'system', 'content' => 'You are a helpful assistant.']],
      $history,  // Add the conversation history
      [['role' => 'user', 'content' => $message]]
    )
  ];

  $ch = curl_init($endpoint);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
  ]);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

  $response = curl_exec($ch);
  if (curl_errno($ch)) {
    error_log('Curl error: ' . curl_error($ch));
    return 'Error: Could not reach ChatGPT';
  }
  curl_close($ch);

  $result = json_decode($response, true);
  if (isset($result['choices'][0]['message']['content'])) {
    return $result['choices'][0]['message']['content'];
  } else {
    error_log('ChatGPT API error: ' . json_encode($result));
    return 'Error: No response from ChatGPT';
  }
}
?>