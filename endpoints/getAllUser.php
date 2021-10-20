<?php
include_once "constant.php";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => API_URL.'/get_all_messages',
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

foreach ($messages as $value) {
    if($value['receiver_user']['active'] == 1){
        $sta = "Online";
        $staColor = "text-green-600";
    }else{
        $sta = "Offline";
        $staColor = "text-red-600";
    }
    echo '<a onclick="loadUserMessage('.$value['bid_id'].', '.$value['project_id'].', '.$value['receiver_id'].')" class="bg-ubuy-gray400 rounded-llg flex flex-row cursor-pointer sm:mb-8 mb-2.5 p-2.5">
        <div class="mr-4">
            <img class="w-12 h-12 rounded-full" src="'.$value['receiver_user']['public_url'].'" alt="avatar" />
        </div>
        <div class="flex-auto flex flex-col justify-between text-ubuy-secondary">
            <div class="flex flex-row justify-between items-center">
                <span class="text-base">'.$value['receiver_user']['last_name'].' '.$value['receiver_user']['first_name'][0].'.</span>
                <span class="text-xxxs"><span class="'.$staColor.' font-semibold">'.$sta.'</span></span>
            </div>
            <div class="flex flex-row justify-between items-center">
                <span class="text-tiny whitespace-nowrap truncate w-44">'.$value['message'].'</span>
                <span class="rounded-full text-white p-1 bg-ubuy-blue text-tiny">24</span>
            </div>
        </div>
    </a>';
}
