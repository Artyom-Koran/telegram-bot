<?php
// подключён git, heroku
const TOKEN ="2105487870:AAGOOToNtTEY-5rTZLhztPC0_zlPtU70u0k";
$method = 'setWebhook';

$url = 'https://api.telegram.org/bot' . TOKEN . '/'  . $method;
$options = [
  'url' => 'https://git.heroku.com/telegrambotgopnick.git',
];

$response = file_get_contents($url . '?' . http_build_query($options));

var_dump($response);




 ?>
