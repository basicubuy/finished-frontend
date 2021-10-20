<?php
// var_dump($_POST);
// return;
include_once("constant.php");
$curl = curl_init();
 
// echo $_POST['due_date'];
// return;
$parameters = json_encode(array(
  "pro_id" => $_POST['pro_id'],
  "cus_id" =>  $_POST['cus_id'],
  "bid_message" => $_POST['bid_message'],	
  "bid_amount" => $_POST['bid_amount'],
  "due_date" => $_POST['due_date']
));


curl_setopt_array($curl, array(
  CURLOPT_URL => API_URL.'/projects/'.$_POST['project_id'].'/bids',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $parameters,
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$_SESSION['access_token'],
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
