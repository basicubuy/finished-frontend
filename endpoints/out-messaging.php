<?php
require_once 'constant.php';
$curl = curl_init();

$parameters = json_encode(array(
  "message" => $_POST['input-message'],
  "bid_id" => $_POST['bid_id'],
  "project_id" => $_POST['project_id'],
));
curl_setopt_array($curl, array(
  CURLOPT_URL => API_URL.'/send_message/'.$_POST['user_id'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $parameters,
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Content-Type: application/json',
    'Authorization: Bearer '.$_SESSION['access_token']
  ),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;
