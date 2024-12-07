<?php

session_start();

require_once('../vendor/autoload.php');

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = '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';
$open_ai = new OpenAi($open_ai_key);

$list_of_doctors = "No Data";
$list_of_appointments = "No Data";
$list_of_links = "No Data";
$prompt = "";
$user_message = $_POST['user_message'];

$chat = $open_ai->chat([
    'model' => 'gpt-4o-mini',
    'messages' => [
       [
           "role" => "system",
           "content" => $prompt
       ],
       [
           "role" => "user",
           "content" => $user_message
       ],
   ],
    'temperature' => 0.9,
    'max_tokens' => 150,
    'frequency_penalty' => 0,
    'presence_penalty' => 0.6,
]);


 var_dump($chat);
// echo "<br>"; 
// echo "<br>";
// echo "<br>";
// // decode response
// $d = json_decode($chat);
// // Get Content
// echo ($d->choices[0]->message->content);

$response_data = json_decode($chat, true);
$response = $response_data["choices"][0]["message"]["content"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <hr>
    <?= htmlspecialchars($user_message); ?>
    <hr>
    <?= htmlspecialchars($response); ?><hr>
</body>

</html>