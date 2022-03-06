<?php
const TOKEN = '2105487870:AAGOOToNtTEY-5rTZLhztPC0_zlPtU70u0k';
const BASE_URL = 'https://api.telegram.org/bot'. TOKEN . '/';

$update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);

echo "test";

function sendRequest($method, $params = []){
    if(!empty($params)){
      $url = BASE_URL . $method . '?'. http_build_query($params);
    } else {
      $url = BASE_URL . $method;
    }
    return json_decode(
        file_get_contents($url),
        JSON_OBJECT_AS_ARRAY
    );

}


//$updates = sendRequest('getUpdates');

$time = date('H:m:s');

@$chat_id = $update['message']['chat']['id'];
sendRequest('sendMessage', ["chat_id" => $chat_id, "text"=> $time . " - время"]);


 //var_dump( sendRequest('sendMessage', ["chat_id" => $chat_id, "text"=>"Ответ"]) );

 ?>
