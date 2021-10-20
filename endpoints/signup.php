<?php
include_once("constant.php");

if($_POST['user_role'] == "customer"){

  $curl = curl_init();

  $number = preg_replace('/^0/', '+234', $_POST['cus_phone']);
  // echo $number;
  // return;

  curl_setopt_array($curl, array(
    CURLOPT_URL => API_URL.'/register',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
      "email": "'.$_POST['cus_email'].'",
      "password": "'.$_POST['cus_password'].'",
      "password_confirmation": "'.$_POST['cus_passwordconfirmation'].'",
      "number": "'.$number.'",
      "profile_approved": false,
      "licence_approved": false,
      "enable_text_message": false,
      "accept_terms": true,
      "user_role": "customer"
  }',
    CURLOPT_HTTPHEADER => array(
      'Accept: application/json',
      'Content-Type: application/json'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;



}else if($_POST['user_role'] == "pro"){

  $curl = curl_init();

  $number = preg_replace('/^0/', '+234', $_POST['pro_phone']);
  

  curl_setopt_array($curl, array(
    CURLOPT_URL => API_URL.'/register',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
      "user_role":"pro",
      "number":"'.$number.'",
      "email":"'.$_POST['email'].'",
      "password":"'.$_POST['password'].'",
      "password_confirmation":"'.$_POST['password_confirmation'].'",
      "first_name":"'.$_POST['first_name'].'",
      "last_name":"'.$_POST['last_name'].'",
      "service_name":"'.$_POST['service_name'].'",
      "pro_address":"'.$_POST['locality'].'",
      "pro_city":"'.$_POST['city'].'",
      "pro_state":"'.$_POST['state'].'",
      "lat":"'.$_POST['lat'].'",
      "lng":"'.$_POST['lng'].'",
      "business_name":"'.$_POST['business_name'].'",
      "about_profile":"'.$_POST['about_profile'].'",
      "profile_approved": false,
      "licence_approved": false,
      "enable_text_message": true,
      "accept_terms": false
  }',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;



}

