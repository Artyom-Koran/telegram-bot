<?php
// Токен бота: 2105487870:AAGOOToNtTEY-5rTZLhztPC0_zlPtU70u0k
// Токен погоды: d5f276ef29cc73577588d454af258bf2

// 669934882 номер чата


const TOKEN = '2105487870:AAGOOToNtTEY-5rTZLhztPC0_zlPtU70u0k';

$url = 'https://api.telegram.org/bot'. TOKEN . '/getUpdates';

$lastupdate = 857279948;

$params = [
  'offset' => $lastupdate+1
];

echo $url = $url . '?' . http_build_query($params);
die;

$response = json_decode(
    file_get_contents($url),
    JSON_OBJECT_AS_ARRAY
);

if ($response['ok']) {
    foreach ($response['result'] as $update) {
      echo @$update['message']['text'];
      ?><br><?php
    }

}

var_dump($response);
?>
