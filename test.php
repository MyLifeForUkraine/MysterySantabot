<?php

const TOKEN = '5715192568:AAGim3TY-owmln6yLmyaX6BoZ2oeh3z6OPA';

const BASE_URL = 'https://api.telegram.org/bot'. TOKEN . '/';

$par=[
'offset'=>190436292
];
function sendRequest($method,$params=[]){
    if(!empty($params)){
        $url=BASE_URL . $method.'?'. http_build_query($params);
        #echo  $url;
    }
    else{
        $url=BASE_URL . $method;
    }
    return json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);
}
$time=date('Y:m:d-H:m:s');

$updates=sendRequest('getUpdates');
foreach($updates['result'] as $update){
    echo $chat_id=$update['message']['chat']['id'];
    echo '<br>';
    var_dump(sendRequest('sendMessage',['chat_id'=>$chat_id,'text'=>$time]));
    echo '<br>';
}
echo '<pre>';

var_dump(sendRequest('getUpdates',['chat_id'=>789287020,'text'=>'hihi hahaha']));

echo '</pre>';
?>