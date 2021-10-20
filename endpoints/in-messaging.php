<?php
require_once 'constant.php';
$curl = curl_init();

if($_GET['pro_id'] == ''){
  return 0;
}
curl_setopt_array($curl, array(
  CURLOPT_URL => API_URL.'/fetch_messages/'.$_GET['pro_id'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Authorization: Bearer '.$_SESSION['access_token']
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$messages = json_decode($response, true);
$messages = isset($messages['messages']) ? $messages['messages'] : "";

// var_dump($messages);
// return;

foreach($messages as $item){
  if($item['sender_id'] == $_GET['pro_id']){
    echo '<div class="messages-sender relative p-4 rounded-r-llg rounded-b-llg w-60">
        <h1 class="text-tiny -mt-2 mb-2">'.$item['sender_user']['last_name'].' '.$item['sender_user']['first_name'][0].'.</h1>
        <p class="text-sm text-ubuy-secondary">
            '.$item['message'].'
        </p>
      </div>';
  }else{
    echo '<div class="messages-receiver relative p-4 rounded-l-llg rounded-b-llg w-60 self-end">
          <p class="text-sm text-ubuy-black">
            '.$item['message'].'
          </p>
        </div>';
  }
}