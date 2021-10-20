<?php
include_once("constant.php");
$curl = curl_init();

if(!empty($_FILES)){
    $files = new CURLFILE($_FILES['files']['tmp_name'], $_FILES['files']['type'], $_FILES['files']['name']);
}else{
    $files = new CURLFILE('','','');
}

curl_setopt_array($curl, array(
    CURLOPT_URL => API_URL.'/dispute/categories/'.$_POST['category'].'/disputes',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('app_job_id' => $_POST['app_job_id'],'submitted_by' => $_POST['submitted_by'],'reason' => $_POST['reason'],'subject' => $_POST['category'],'description' => $_POST['dispute-details'],'files'=> $files),
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '.$_SESSION['access_token']
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;