<?php
include_once("constant.php");

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => API_URL.'/login',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "email":"'.$_POST['email'].'",
    "password":"'.$_POST['password'].'",
    "device_name" : "'.$_POST['device_name'].'"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$result = json_decode($response, TRUE);
if(isset($result['success']) && $result['success'] == true){
    $_SESSION['access_token'] = $result['token'];
    $_SESSION['number'] = $result['user']['number'];
    $_SESSION['email'] = $result['user']['number'];
    $_SESSION['user_role'] = $result['user']['user_role'];
    $_SESSION['phone_verified'] = $result['user']['is_phone_verified'];
    $_SESSION['email_verify'] = $result['user']['email_verified_at'];
    $_SESSION['profile_approved'] = $result['user']['profile_approved'];
    // set the cookies
    setcookie("cookie[number]", $result['user']['number']);
    setcookie("cookie[email]", $result['user']['number']);
    setcookie("cookie[user_role]", $result['user']['user_role']);
    setcookie("cookie[phone_verified]", $result['user']['is_phone_verified']);
    setcookie("cookie[email_verify]", $result['user']['email_verified_at']);
    setcookie("cookie[profile_approved]", $result['user']['profile_approved']);

    // after the page reloads, print them out
    // if (isset($_COOKIE['cookie'])) {
    //     foreach ($_COOKIE['cookie'] as $name => $value) {
    //         $name = htmlspecialchars($name);
    //         $value = htmlspecialchars($value);
    //         echo "$name : $value <br />\n";
    //     }
    // }
    echo $response;
}else{
    echo $response;
}

// string(1193) "{"success":true,"token_type":"Bearer","token":"5|bKyy27F7wx4FTz7wfl4jXzXc0NaMS8FCNKGxZ7Sq","user":{"id":9,"uuid":null,"upay_account":null,"user_token":null,"player_id":null,"first_name":"josimar","last_name":"akpomudia","number":"+2347065732256","email":"renownjosimar21dd42e@gmail.com","email_verified_at":null,"is_phone_verified":0,"user_role":"pro","pro_onboard":null,"pro_level":1,"avatar_type":"gravatar","avatar_location":null,"admin_message":null,"password_changed_at":null,"active":1,"confirmation_code":null,"confirmed":false,"profile_approved":false,"licence_approved":false,"enable_text_message":true,"timezone":"UTC","user_slug":"josimar-akpomudia","last_login_at":null,"last_login_ip":null,"dob":null,"address":null,"address2":null,"city":null,"state_id":null,"zip":null,"lat":null,"lng":null,"rating":0,"referral_code":null,"bonus":null,"accept_terms":0,"verify_code":null,"verify_image":null,"verify_confirm":0,"licence_verify":null,"facebook_auth":null,"google_token":null,"created_at":"2021-07-28T08:55:37.000000Z","updated_at":"2021-07-28T08:55:37.000000Z","deleted_at":null,"staff_role":0,"staff_auth_token":null,"public_url":"http:\/\/127.0.0.1:8000\/","average_rating":0}}"

