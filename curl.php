<?php
require_once 'database.php';
/*
$form = array(
	'Authorization string' => array('type'=> 'text', 'id' => 'authorization_string', 'name' => 'authorization_string', 'placeholder' => 'Example String','validation_callback' => 'stringlength|query_injection'),
	'Method' => array('type'=> 'text', 'id' => 'method', 'name' => 'method_name', 'placeholder' => 'POST or GET','validation_callback' => 'method_post|query_injection'),
	'Content-Type' => array('type'=> 'text', 'id' => 'content_type', 'name' => 'content_type', 'placeholder' => 'application/x-www-form-urlencoded','validation_callback' => 'query_injection')
	);

	$form = array(
	'Authorization token' => array('type'=> 'text', 'id' => 'authorization_token', 'name' => 'authorization_token', 'placeholder' => 'Example String','validation_callback' => 'stringlength|query_injection')
	);

echo json_encode($form);
echo "<pre>";
print_r($form);
exit; 
*/ 
$built_header =  array();

$api_server_curl_init = curl_init();
curl_setopt($api_server_curl_init, CURLOPT_URL, getenv('api_server'));
curl_setopt($api_server_curl_init, $built_header);