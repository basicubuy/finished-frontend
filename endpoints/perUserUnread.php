<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => API_URL.'/unread_cus_pro/'.$_GET['receiver_id'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$_SESSION['access_token']
  ),
));
$response = curl_exec($curl);
curl_close($curl);
$count = json_decode($response, true);
$count = $count['count'];
echo $count;