<?php
include_once("constant.php");
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => API_URL.'/pros/add-portfolio',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('caption' => $_POST['caption'],'portfolio_details' => $_POST['portfolio_details'],'files'=> new CURLFILE($_FILES['files']['tmp_name'], $_FILES['files']['type'], $_FILES['files']['name'])),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$_SESSION['access_token']
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
