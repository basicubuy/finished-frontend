<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => '127.0.0.1:8000/api/sub-categories/1/projects',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "project_title": "'.$_POST['project_title'].'",
    "user_role": '.$_POST['user_role'].',
    "project_message": '.$_POST['project_message'].',
    "phone_number": "'.$_POST['phone_number'].'",
    "state": "'.$_POST['state'].'",
    "nearest_landmark": "'.$_POST['nearest_landmark'].'",
    "due_date": "'.$_POST['due_date'].'",
    "budget": '.$_POST['budget'].',
    "user_id": '.$_POST['user_id'].'
}',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Authorization: Bearer '.$_SESSION['access_token'],
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
