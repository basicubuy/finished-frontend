<?php
require_once "constant.php";
$curl = curl_init();

$parameters = json_encode(array(
    "title" => $_POST['milestone-title'],
    "description" => $_POST['milestone-description'],
    "amount" => $_POST['milestone-amount'],
    "due_date" => $_POST['milestone-due_date']
));


// echo json_encode($_POST);
// return;

curl_setopt_array($curl, array(
  CURLOPT_URL => API_URL.'/projects/'.$_POST['project_id'].'/milestones',
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
