<?php
session_start();

require_once('../vendor/autoload.php');
require_once('../classes/account.class.php');

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = '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';
$open_ai = new OpenAi($open_ai_key);



$list_of_appointments = [];
$list_of_links = [];

// Doctor's Data
$account = new Account();
$accountArray = $account->show_doc();

$doctorArray = array();
foreach ($accountArray as $key => $item) {
    $doctorArray[$key] = array(
        "id" => $item['account_id'],
        "name" => (isset($item['middlename'])) ? ucwords(strtolower($item['firstname'] . ' ' . $item['middlename'] . ' ' . $item['lastname'])) : ucwords(strtolower($item['firstname'] . ' ' . $item['lastname'])),
        "specialty" => $item['specialty'],
        "working_days" => $item['start_day'] . ' to ' . $item['end_day'],
        "working_time" => date('h:i A', strtotime($item['start_wt'])) . ' - ' . date('h:i A', strtotime($item['end_wt'])),
        "contact" => $item['contact'],
        "email" => $item['email']
    );
}

if (empty($doctorArray)) {
    $list_of_doctor = "There are no doctors available in the system.";
} else {
    $list_of_doctor = "";
    foreach ($doctorArray as $doctorKey => $doctorItem) {
        $list_of_doctor .= $doctorKey + 1 . ". " . $doctorItem['name'] . " - " . $doctorItem['specialty'] . "( " . $doctorItem['working_days'] . " " . $doctorItem["working_time"] . " )" . "\n";
    }
}

if (empty($list_of_appointments)) {
    $appointment_message = "Currently, there are no appointments available in the system.";
} else {
    $appointment_message = "I can provide available dates and times for the next 7 days.";
}

// if ($list_of_links === "No Data") {
//     $links_message = "Currently, no links are available.";
// } else {
//     $links_message = "Here are some useful links: $list_of_links.";
// }

$prompt = "You are an assistant bot for a clinic website. Your responsibilities are as follows:

1. Answer only simple medical questions related to the user's symptoms without giving any medical conclusions.
2. Provide this list of available doctors: \n" . $list_of_doctor . "
3. Recommend a doctor from ///list_of_doctors based on the symptoms provided by the user, provide the available date and time of the recommended doctor for the next 7 days based on the ////list_of_appointments.
4. Provide links to the appointment page or other related pages (if available), but no other pages.

Only provide given data or information, don't make random information.
If the user asks anything outside of these responsibilities, politely inform them that you are unable to assist with that request. Additionally, if the answer to the user's query is not provided in the available data, politely inform them that there is no data available for their query.";

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
    <?= htmlspecialchars($response); ?>
    <hr>
</body>

</html>