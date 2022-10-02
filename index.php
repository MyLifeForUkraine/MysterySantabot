<?php

const TOKEN = '5715192568:AAGim3TY-owmln6yLmyaX6BoZ2oeh3z6OPA';

$getUpdates='getUpdates';
$sendMessage='sendMessage';
$url='https://api.telegram.org/bot'. TOKEN . '/'.  $sendMessage;

$chat1=438896532;
$chat2=789287020;
$lastupdate=190436292;

$params=[
    'offset'=>$lastupdate
];
$options=[
    'chat_id'=>$chat1,
    'text'=>'Purr! purr! purr!',
];
// Soft kitty, warm kitty,
// Little ball of fur,
// Sleepy kitty, happy kitty,
// Purr! purr! purr!
echo $url=$url . '?' . http_build_query($options);

$response=json_decode(file_get_contents($url),JSON_OBJECT_AS_ARRAY);
echo '<pre>';


var_dump($response);




echo '</pre>';

?>