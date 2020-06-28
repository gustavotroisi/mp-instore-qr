<?php

header('Content-type: application/json');

include_once '../../global/functions.php';
global $access_token,$collector_id,$notificationJSON;


// Este servicio llama a la URL recibida en la notificación
// Para ver el estado del pago.

$lastResource = file_get_contents('../notifications.txt');


$url= "https://api.mercadopago.com/merchant_orders/$lastResource";
//$url = "https://api.mercadopago.com/v1/payments/".$collector_id."?access_token=".$access_token;
//$url = "https://api.mercadopago.com/merchant_orders?access_token=".$access_token;


// REVISAR AQUÍ:
// Agrega la $url necesaria para revisar el estado del pago en base al recurso recibido de la notificación

// Sustituye el método por su correspondiente: get, put, post, delete

//https://www.mercadopago.cl/developers/es/reference/payments/_payments_id/get/  no


//$json = '{"collector_id":$collector_id}';
//$json->collector_id = $collector_id;
//$json = json_encode($json);

//curl_call("GET",$url,$json);
//curl_call("POST", $url, $json);
curl_call("get",$url,"");

 ?>