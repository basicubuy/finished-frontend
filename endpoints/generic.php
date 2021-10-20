<?php
include_once('constant.php');

class GeneralController{

    public function getUser(){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/user',
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
      return $response;

    }

    public function getUserBilling(){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/get_billing',
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
      return $response;

    }

    public function getProsProfile(){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/pros/profile',
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
      return $response;

    }

    public function getProsServices(){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/pros/services',
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
      return $response;

    }

    public function getSingleProject($project_id){
      
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/single-project/'.$project_id,
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
      return $response;


    }

    public function getActiveProject($project_id){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => '127.0.0.1:8000/api/active-project/'.$project_id,
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
      return $response;

    }

    public function getAllBids($project_id){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/projects/'.$project_id.'/bids',
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
      return $response;

    }

    public function getAllCategories(){
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/categories',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Accept: application/json'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      return $response;
    }

    public function getSubcategoryCategory($category_id){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/categories/'.$category_id.'/sub-categories',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Accept: application/json'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      return $response;

    }

    public function fetchSingleCategory($category_id){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/categories/'.$category_id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Accept: application/json'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      return $response;

    }

    public function fetchSingleSubcategory($subcategory_id){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/sub-categories/'.$subcategory_id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Accept: application/json'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      return $response;

    }

    public function getSingleProfile($pro_id){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/single_pro/'.$pro_id,
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
      return $response;

    }

    public function getSingleProjectPro($project_id, $pro_id){

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/singleProject/'.$project_id.'/'.$pro_id,
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
      return $response;

    }

    public function invitePros($subcategory_id){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/invite-pro/'.$subcategory_id,
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
      return $response;

    }

    public function referrerList(){
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/referrer-list',
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
      return $response;

    }

    public function referrerListCount(){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/count-referred',
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
      return $response;

    }

    public function proBidList(){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/pros/all-bids',
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
      return $response;

    }

    public function fetchReviews(){
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/pros/rating-list',
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
      return $response;
    }

    public function singleUser($user_id){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/pros/userdetail/'.$user_id,
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
      return $response;

    }

    public function singleUserUUID($uuid){
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/public_profile/'.$uuid,
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
      return $response;

    }

    public function notifications(){
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/notifications',
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
      return $response;
    }

    public function sponsor_list(){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/sponsors',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      return $response;

    }

    public function project_timeline($project_id){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => '127.0.0.1:8000/api/project_timeline/15',
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
      return $response;

    }

    public function getMilestone($project_id){

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/projects/'.$project_id.'/milestones',
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
      return $response;

    }

    public function countFavorite($pro_id){

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/favourite-check/'.$pro_id,
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
      return $response;

    }

    public function getAllMessages(){

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
      return $response;

    }

    public function getUserDispute($userid){
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/dispute/categories/'.$userid.'/disputes',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Accept: application/json',
          'Content-Type: application/json',
          'Authorization: Bearer '.$_SESSION['access_token']
        ),
      ));
      $response = curl_exec($curl);
      curl_close($curl);
      return $response;
    }

    public function getDisputeComment($dispute_id){
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/dispute/disputes/'.$dispute_id.'/comments',
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
      return $response;
    }

    public function getSingleDispute($dispute_id){
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/dispute/singleDispute/'.$dispute_id,
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
      return $response;

    }

    public function proSkills(){

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/pros/skills',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Authorization: Bearer '.$_SESSION['access_token'],
        ),
      ));
      $response = curl_exec($curl);
      curl_close($curl);
      return $response;

    }

    public function getBid($project_id, $pro_id){

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/get_bid/'.$project_id.'/'.$pro_id,
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
      return $response;

    }

    public function unreadMessage($user_id){
      
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/unread_cus_pro/'.$user_id,
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
      return $response;

    }

    public function allActiveTask(){
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => API_URL.'/active-task-list',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Accept: application/json'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      return $response;
    }
}


