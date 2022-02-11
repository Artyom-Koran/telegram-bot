<?php
// Токен бота: 2105487870:AAGOOToNtTEY-5rTZLhztPC0_zlPtU70u0k
// Токен погоды: d5f276ef29cc73577588d454af258bf2

// 669934882 номер чата


const TOKEN = '2105487870:AAGOOToNtTEY-5rTZLhztPC0_zlPtU70u0k';

$url = 'https://api.telegram.org/bot'. TOKEN . '/sendMessage';


$params = [
  'chat_id' => 669934882,
  'text' => "Что надо?"
];

$url = $url . '?' . http_build_query($params);

$response = json_decode(
    file_get_contents($url),
    JSON_OBJECT_AS_ARRAY
);

var_dump($response);
?>
