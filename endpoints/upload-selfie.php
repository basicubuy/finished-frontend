<?php
require_once "constant.php";
$curl = curl_init();

// echo json_encode($_FILES);
// return;

curl_setopt_array($curl, array(
  CURLOPT_URL => API_URL.'/pros/verification/selfie_code',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('verification_code' => $_POST['verification_code'],'image'=> new CURLFILE($_FILES['filer']['tmp_name'], $_FILES['filer']['type'], $_FILES['filer']['name'])),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$_SESSION['access_token']
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
