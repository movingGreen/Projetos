<?php
require_once("nusoap/nusoap.php");

$client = new nusoap_client('https://www.fruityvice.com/api/fruit/all');

echo $client;