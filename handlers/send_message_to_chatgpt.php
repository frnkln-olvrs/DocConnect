<?php
require_once('../vendor/autoload.php');

function sendToChatGPT($message) {
  $apiKey = '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';
  $endpoint = 'https://api.openai.com/v1/completions';

  $data = [
    'model' => 'gpt-3.5-turbo',
    'messages' => [
      ['role' => 'system', 'content' => 'You are a helpful assistant.'],
      ['role' => 'user', 'content' => $message]
    ]
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
