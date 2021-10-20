<?php 
include_once("constant.php");

$subCat = explode("~", $_POST['sub_category']);

$phone_number = str_replace("+", "", $_POST['phone_number']);

$postfields= json_encode(array(
    "project_title" => $_POST['project_title'],
    "user_role" => "customer",
    "project_message" =>  $_POST['project_message'],
    "phone_number" =>  $phone_number,
    "state" =>  $_POST['state'],
    "nearest_landmark" =>  $_POST['landmark'],
    "due_date" =>  $_POST['due_date'],
    "budget" =>  $_POST['budget'],
    "user_id" =>  $_POST['user_id'],
    "skills_and_expertise" => isset($_POST['skillsRequired']) ? $_POST['skillsRequired'] : ""
));


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => API_URL.'/sub-categories/'.$subCat[1].'/projects',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $postfields,
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
