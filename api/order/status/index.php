<?php

// Consulta estado de la Merchant_order

header('Content-type: application/json');

include_once '../../global/functions.php';
global $access_token, $collector_id;

$external_reference = $_REQUEST["external_reference"];
$preference_id = $_REQUEST["preference_id"];

//$url = "https://api.mercadopago.com/merchant_orders/search?access_token=".$access_token;
//$url = "https://api.mercadopago.com/merchant_orders?access_token=".$access_token;
$url = "https://api.mercadopago.com/merchant_orders?external_reference=$external_reference&access_token=".$access_token;
 
 // REVISA AQUÍ:
 // Qué método y endpoint de la API de Mercado Pago deberías poner aquí para poder hacer un get 
 // de una merchant_order en base al external_reference recibido?
 // Pista... revísalo bien...
 // Sustituye el método por su correspondiente: get, put, post, delete
 
//https://www.mercadopago.com.ar/developers/es/reference/merchant_orders/_merchant_orders_id/get/
 
//$json = $_POST["json"];
/*
$json->external_reference = $external_reference;
$json->preference_id = $preference_id;
$json = json_encode($json);
*/
//curl_call("GET", $url, $json);
curl_call("GET", $url, "");

?>