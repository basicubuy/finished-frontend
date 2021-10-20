<?php
include_once("constant.php");
$curl = curl_init();

$parameters = json_encode(array(
    "pro_id" => $_POST['pro_id'],
    "txref" => $_POST['txref'],
    "transaction_info" => $_POST['transaction_info'],
    "amount" => $_POST['amount']
));


curl_setopt_array($curl, array(
  CURLOPT_URL => API_URL.'/pros/fund-ucoin',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $parameters,
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer 35|zMdY9C6okqnTVy1itpSZmjlhtqqdNwHZxxcawdON',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
