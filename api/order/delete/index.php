<?php

// Borrar o cancelar una orden creada

header('Content-type: application/json');

include_once '../../global/functions.php';
global $access_token, $collector_id;

$external_id = $_REQUEST["external_id"];
 
 // REVISA AQUÍ:
 // Qué método y endpoint de la API de Mercado Pago deberías poner aquí para poder eliminar una orden
 // en base al external_id, collector_id recibidos
 // Pista... revísalo bien...
 // Sustituye el método por su correspondiente: get, put, post, delete
 
 //https://www.mercadopago.cl/developers/es/guides/qr-code/qr-attended/qr-attended-part-b/
 //https://www.mercadopago.cl/developers/es/reference/instore_orders/_mpmobile_instore_qr_user_id_external_id/delete/

curl_call("DELETE","https://api.mercadopago.com/mpmobile/instore/qr/".$collector_id."/".$external_id."?access_token=".$access_token, "");

?>