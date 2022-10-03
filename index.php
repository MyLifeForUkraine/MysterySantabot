<?php

const TOKEN = '5715192568:AAGim3TY-owmln6yLmyaX6BoZ2oeh3z6OPA';

$getUpdates='getUpdates';
$sendMessage='sendMessage';
$url='https://api.telegram.org/bot'. TOKEN . '/'.  $sendMessage;

$chatL=438896532;
$chatI=789287020;
$chatY=427602579;
$chatM=601838379;
$chatK=789287020;
$chatD=789287020;
$chatN=410124792;
$lastupdate=190436292;

$params=[
    'offset'=>$lastupdate
];
$options=[
    'chat_id'=>$chatM,
    'text'=>'Привіт Майя',
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