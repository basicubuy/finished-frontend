<?php
include_once("constant.php");

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => API_URL.'/update-profile',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('_method' => 'PUT','image'=> new CURLFILE($_FILES['formData']['tmp_name'], $_FILES['formData']['type'], $_FILES['formData']['name'])),
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Content-Type: multipart/form-data',
    'Authorization: Bearer '.$_SESSION['access_token']
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
