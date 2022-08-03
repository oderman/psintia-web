<?php
//if(!isset($_GET['text']) or !isset($_GET['phone'])){ die('Not enough data');}

$apiURL = 'https://eu32.chat-api.com/instance58464/';
$token = 'um3ryyegcb8gt3k0';

$message = "Prueba sin conexion 3";
$phone = "573183479394";

$data = json_encode(
    array(
        'chatId'=>$phone.'@c.us',
        'body'=>$message
    )
);
$url = $apiURL.'message?token='.$token;
$options = stream_context_create(
    array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $data
        )
    )
);
$response = file_get_contents($url,false,$options);
echo $response; exit;
?>