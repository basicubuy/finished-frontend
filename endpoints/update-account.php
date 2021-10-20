<?php
include_once('constant.php');

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
  CURLOPT_POSTFIELDS => array('_method' => 'PUT','first_name' => $_POST['first_name'],'last_name' => $_POST['last_name'],'address' => $_POST['address'],'city' => $_POST['city'],'state' => $_POST['state'],'lat' => $_POST['lat'],'lng' => $_POST['lng'],'business_name' => isset($_POST['business_name']) ? $_POST['business_name'] : "",'website' => isset($_POST['website']) ? $_POST['website'] : "",'number_of_empolyees' => isset($_POST['number_of_empolyees']) ? $_POST['number_of_empolyees'] : ""),
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Authorization: Bearer '.$_SESSION['access_token']
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
