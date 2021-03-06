<?php
include_once("endpoints/generic.php");
$init = new GeneralController();
if(isset($_SESSION['access_token']) && isset($_SESSION['user_role'])){

    $userData = $init->getUser();
    $userData = json_decode($userData, true);
    
    $userBilling = $init->getUserBilling();
    $userBilling = json_decode($userBilling, true);

    $userProfile = $init->getProsProfile();
    $userProfile = json_decode($userProfile, true);

    $userService = $init->getProsServices();
    $userService = json_decode($userService, true);

    $proSkill = $init->proSkills();
    $proSkill = json_decode($proSkill, true);


    $notify = $init->notifications();
    $notify = json_decode($notify, true);
    $notify = !empty($notify['notifications']) ? $notify['notifications'] : "";

    // var_dump($notify);
    // return;
    
    // echo json_encode($singleProject['project']['id']);
    // return;
}else{
    session_destroy();
    unset($_SESSION['access_token']);
    header("Location: sign-in.php?error=You have to login!");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Pro - <?php echo isset($userData['first_name']) ? $userData['first_name'] : "Update profile"; ?></title>
    <meta content="width=device-width" name="viewport">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="assets/styles/tailwind.css" rel="stylesheet">
    <link href="assets/styles/global.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/message.css">
    <link rel="stylesheet" href="assets/css/uearn.css">
    <link rel="stylesheet" href="assets/css/dispute.css">
    <link rel="stylesheet" href="assets/css/pro-task.css">
    <link rel="stylesheet" href="assets/css/customer-task.css">
    <link rel="stylesheet" href="assets/css/review.css">
    <link rel="stylesheet" href="assets/css/review-2.css">
    <link rel="stylesheet" href="assets/css/profile-setting.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhol0N_wyb0oZqcKjaU7afqPRFMfz7X80&v=3.exp&libraries=places"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-scope" content="profile email" />
    <meta name="google-signin-client_id" content="637779005926-ic6j3no78uc24ie2t8u43nhjmmk2f9ba.apps.googleusercontent.com" />
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <style>
.top-100 {top: 100%}
.bottom-100 {bottom: 100%}
.max-h-select {
    max-height: 300px;
}

        #loader {
            position: fixed;
            width: 100%;
            height: 100vh;
            overflow: visible;
            /* background: #fff url('assets/images/loader.gif') no-repeat center center; */
            background-color: #fff;
            z-index: 99999999999;
        }
    </style>
    <style>

        .modal {
            transition: opacity 0.25s ease;
        }
        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }

        ul.ks-cboxtags {
            list-style: none;
            padding: 12px;
        }
        ul.ks-cboxtags li{
        display: inline;
        }
        ul.ks-cboxtags li label{
            display: inline-block;
            border: 1px solid rgb(140 140 140 / 30%);
            color: #827c7c;
            border-radius: 25px;
            white-space: nowrap;
            font-size: 12px;
            margin: 3px 0px;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            transition: all .2s;
        }

        ul.ks-cboxtags li label {
            padding: 8px 12px;
            cursor: pointer;
        }

        ul.ks-cboxtags li label::before {
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            font-size: 12px;
            padding: 2px 6px 2px 2px;
            content: "+";
            transition: transform .3s ease-in-out;
        }

        ul.ks-cboxtags li input[type="checkbox"]:checked + label::before {
            content: "-";
            transform: rotate(-360deg);
            transition: transform .3s ease-in-out;
        }

        ul.ks-cboxtags li input[type="checkbox"]:checked + label {
            border: 1px solid #282829;
            background-color: #119ae2;
            color: #fff;
            transition: all .2s;
        }

        ul.ks-cboxtags li input[type="checkbox"] {
        display: absolute;
        }
        ul.ks-cboxtags li input[type="checkbox"] {
        position: absolute;
        opacity: 0;
        }
        ul.ks-cboxtags li input[type="checkbox"]:focus + label {
        border: 2px solid #e9a1ff;
        }
        .image-upload>input {
            display: none;
        }
        .chosen-container{
            width: 100% !important;
        }
        .min-w-thz {
            min-width: 280px;
        }
    </style>
</head>

<body>
<div id="loader" class="flex items-center justify-center"><img src="assets/images/loader.gif" width="180" height="180" /></div>

    <div class="flex min-h-screen w-full">
        <!-- Header-->
        <header class="fixed top-0 left-0 w-full h-24 z-20 bg-white">
            <div>
                <div class=" h-24 flex flex-row sm:justify-between items-center dashboard-header relative">
                    <button class="md:hidden m-0 appearance-none focus:outline-none self-center ml-4 mr-3 p-3" id="nav-toggle-open" onclick="onSidebarOpen()">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 16H28" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4 8H28" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4 24H28" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <img alt="ubuy-logo" class="w-24 h-auto ml-2" src="assets/images/ubuy_logo.svg" />
                    <a href="u-earn.php" class="h-24 flex flex-row items-center justify-end gap-x-5 pl-40"><img src="assets/images/promo.gif" /></a>
                    <div class="sm:flex-auto justify-end items-center">
                        <div class="h-24 flex flex-row items-center justify-end gap-x-5 pr-8">
                            <div class="hidden sm:flex items-center justify-between">
                                <hr class="transform rotate-90 w-8 text-ubuy-gray-200" />
                                <div class="mr-5">
                                    <div x-data="{ dropdownOpen: false }" class="relative my-32">
                                        <!-- <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
                                            <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button> -->
                                        <button @click="dropdownOpen = !dropdownOpen" class="mr-5">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.2929 16.7071L18.5858 18H5.41421L6.70711 16.7071L7 16.4142V16V11C7 8.26874 8.41437 6.20184 10.7306 5.65306L11.5 5.47075V4.68V4C11.5 3.72228 11.7223 3.5 12 3.5C12.2777 3.5 12.5 3.72228 12.5 4V4.68V5.47011L13.2687 5.65288C15.5762 6.20153 17 8.27963 17 11V16V16.4142L17.2929 16.7071Z"
                                                    fill="white" stroke="#52575C" stroke-width="2" />
                                                <circle cx="17" cy="6" r="4.5" fill="#FB4E4E" stroke="white" />
                                            </svg>
                                        </button>

                                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                                        <!-- <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-80 bg-white shadow-xl z-20" style="height: 400px; scroll-behavior: smooth; overflow-y: scroll;">
                                            <?php // foreach($notify as $item){ ?>
                                                <a href="<?php //echo $item['data']['link']; ?>" class="block px-4 py-2 text-sm capitalize hover:bg-gray-300 hover:text-gray-600 border-b border-gray-200">
                                                    <div class="text-gray-500"><?php //echo $item['data']['subject']; ?></div>
                                                    <div class="text-xxxs text-gray-700"><?php //echo $item['data']['message']; ?></div>
                                                </a>
                                            <?php //} ?>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <button class="mr-5">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.2929 16.7071L18.5858 18H5.41421L6.70711 16.7071L7 16.4142V16V11C7 8.26874 8.41437 6.20184 10.7306 5.65306L11.5 5.47075V4.68V4C11.5 3.72228 11.7223 3.5 12 3.5C12.2777 3.5 12.5 3.72228 12.5 4V4.68V5.47011L13.2687 5.65288C15.5762 6.20153 17 8.27963 17 11V16V16.4142L17.2929 16.7071Z"
                                            fill="white" stroke="#52575C" stroke-width="2" />
                                        <circle cx="17" cy="6" r="4.5" fill="#FB4E4E" stroke="white" />
                                    </svg>
                                </button> -->
                                <span style="display: none;" id="isMessageTrue"><button onclick="window.location.href='message.php'">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z"
                                            stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </svg>
                                </button></span>
                                
                                <span style="display: none;" id="isMessageFalse"><button onclick="window.location.href='message.php'">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z"
                                            stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            
                                        <circle cx="17" cy="6" r="4.5" fill="#FB4E4E" stroke="white" />
                                    </svg>
                                </button></span>
                            </div>
                            <!-- Profile dropdown -->
                            <div class="relative" id="profile-dropdown">
                                <button class="flex items-center focus:outline-none">
                                    <img class="avatar rounded-full" src="<?php echo $userData['public_url'] != 'http://new.ubuy.ng/storage' ? $userData['public_url'] : "assets/images/ubuy_logo.svg" ?>" alt="avatar">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="#222F54" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div id="dropdown" class="text-sm flex flex-col gap-y-3.5 px-6 py-3.5 bg-white absolute -right-1.5 w-60 rounded-lg text-ubuy-gray-500">
                                    <button class="flex items-center h-10 focus:outline-none" onclick="window.location = 'profile-settings.php'">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M19.4 15C19.2669 15.3016 19.2272 15.6362 19.286 15.9606C19.3448 16.285 19.4995 16.5843 19.73 16.82L19.79 16.88C19.976 17.0657 20.1235 17.2863 20.2241 17.5291C20.3248 17.7719 20.3766 18.0322 20.3766 18.295C20.3766 18.5578 20.3248 18.8181 20.2241 19.0609C20.1235 19.3037 19.976 19.5243 19.79 19.71C19.6043 19.896 19.3837 20.0435 19.1409 20.1441C18.8981 20.2448 18.6378 20.2966 18.375 20.2966C18.1122 20.2966 17.8519 20.2448 17.6091 20.1441C17.3663 20.0435 17.1457 19.896 16.96 19.71L16.9 19.65C16.6643 19.4195 16.365 19.2648 16.0406 19.206C15.7162 19.1472 15.3816 19.1869 15.08 19.32C14.7842 19.4468 14.532 19.6572 14.3543 19.9255C14.1766 20.1938 14.0813 20.5082 14.08 20.83V21C14.08 21.5304 13.8693 22.0391 13.4942 22.4142C13.1191 22.7893 12.6104 23 12.08 23C11.5496 23 11.0409 22.7893 10.6658 22.4142C10.2907 22.0391 10.08 21.5304 10.08 21V20.91C10.0723 20.579 9.96512 20.258 9.77251 19.9887C9.5799 19.7194 9.31074 19.5143 9 19.4C8.69838 19.2669 8.36381 19.2272 8.03941 19.286C7.71502 19.3448 7.41568 19.4995 7.18 19.73L7.12 19.79C6.93425 19.976 6.71368 20.1235 6.47088 20.2241C6.22808 20.3248 5.96783 20.3766 5.705 20.3766C5.44217 20.3766 5.18192 20.3248 4.93912 20.2241C4.69632 20.1235 4.47575 19.976 4.29 19.79C4.10405 19.6043 3.95653 19.3837 3.85588 19.1409C3.75523 18.8981 3.70343 18.6378 3.70343 18.375C3.70343 18.1122 3.75523 17.8519 3.85588 17.6091C3.95653 17.3663 4.10405 17.1457 4.29 16.96L4.35 16.9C4.58054 16.6643 4.73519 16.365 4.794 16.0406C4.85282 15.7162 4.81312 15.3816 4.68 15.08C4.55324 14.7842 4.34276 14.532 4.07447 14.3543C3.80618 14.1766 3.49179 14.0813 3.17 14.08H3C2.46957 14.08 1.96086 13.8693 1.58579 13.4942C1.21071 13.1191 1 12.6104 1 12.08C1 11.5496 1.21071 11.0409 1.58579 10.6658C1.96086 10.2907 2.46957 10.08 3 10.08H3.09C3.42099 10.0723 3.742 9.96512 4.0113 9.77251C4.28059 9.5799 4.48572 9.31074 4.6 9C4.73312 8.69838 4.77282 8.36381 4.714 8.03941C4.65519 7.71502 4.50054 7.41568 4.27 7.18L4.21 7.12C4.02405 6.93425 3.87653 6.71368 3.77588 6.47088C3.67523 6.22808 3.62343 5.96783 3.62343 5.705C3.62343 5.44217 3.67523 5.18192 3.77588 4.93912C3.87653 4.69632 4.02405 4.47575 4.21 4.29C4.39575 4.10405 4.61632 3.95653 4.85912 3.85588C5.10192 3.75523 5.36217 3.70343 5.625 3.70343C5.88783 3.70343 6.14808 3.75523 6.39088 3.85588C6.63368 3.95653 6.85425 4.10405 7.04 4.29L7.1 4.35C7.33568 4.58054 7.63502 4.73519 7.95941 4.794C8.28381 4.85282 8.61838 4.81312 8.92 4.68H9C9.29577 4.55324 9.54802 4.34276 9.72569 4.07447C9.90337 3.80618 9.99872 3.49179 10 3.17V3C10 2.46957 10.2107 1.96086 10.5858 1.58579C10.9609 1.21071 11.4696 1 12 1C12.5304 1 13.0391 1.21071 13.4142 1.58579C13.7893 1.96086 14 2.46957 14 3V3.09C14.0013 3.41179 14.0966 3.72618 14.2743 3.99447C14.452 4.26276 14.7042 4.47324 15 4.6C15.3016 4.73312 15.6362 4.77282 15.9606 4.714C16.285 4.65519 16.5843 4.50054 16.82 4.27L16.88 4.21C17.0657 4.02405 17.2863 3.87653 17.5291 3.77588C17.7719 3.67523 18.0322 3.62343 18.295 3.62343C18.5578 3.62343 18.8181 3.67523 19.0609 3.77588C19.3037 3.87653 19.5243 4.02405 19.71 4.21C19.896 4.39575 20.0435 4.61632 20.1441 4.85912C20.2448 5.10192 20.2966 5.36217 20.2966 5.625C20.2966 5.88783 20.2448 6.14808 20.1441 6.39088C20.0435 6.63368 19.896 6.85425 19.71 7.04L19.65 7.1C19.4195 7.33568 19.2648 7.63502 19.206 7.95941C19.1472 8.28381 19.1869 8.61838 19.32 8.92V9C19.4468 9.29577 19.6572 9.54802 19.9255 9.72569C20.1938 9.90337 20.5082 9.99872 20.83 10H21C21.5304 10 22.0391 10.2107 22.4142 10.5858C22.7893 10.9609 23 11.4696 23 12C23 12.5304 22.7893 13.0391 22.4142 13.4142C22.0391 13.7893 21.5304 14 21 14H20.91C20.5882 14.0013 20.2738 14.0966 20.0055 14.2743C19.7372 14.452 19.5268 14.7042 19.4 15V15Z"
                                                stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span class="ml-2.5">Account Settings</span>
                                    </button>
                                    <button class="flex items-center h-10 focus:outline-none">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M20.1776 18.8412C20.1911 18.7319 20.2001 18.6181 20.2001 18.5C20.2001 18.3819 20.1911 18.2681 20.1731 18.1588L20.9336 17.5812C21.0011 17.5287 21.0191 17.4325 20.9786 17.3581L20.2586 16.1463C20.2136 16.0675 20.1191 16.0412 20.0381 16.0675L19.1425 16.4175C18.9535 16.2775 18.7555 16.1638 18.535 16.0763L18.4 15.1487C18.3865 15.0612 18.31 15 18.22 15H16.78C16.69 15 16.618 15.0612 16.6045 15.1487L16.4695 16.0763C16.249 16.1638 16.0465 16.2819 15.862 16.4175L14.9664 16.0675C14.8854 16.0369 14.7909 16.0675 14.7459 16.1463L14.0259 17.3581C13.9809 17.4369 13.9989 17.5287 14.0709 17.5812L14.8314 18.1588C14.8134 18.2681 14.7999 18.3863 14.7999 18.5C14.7999 18.6137 14.8089 18.7319 14.8269 18.8412L14.0664 19.4188C13.9989 19.4713 13.9809 19.5675 14.0214 19.6419L14.7414 20.8538C14.7864 20.9325 14.8809 20.9588 14.9619 20.9325L15.8575 20.5825C16.0465 20.7225 16.2445 20.8362 16.465 20.9237L16.6 21.8512C16.618 21.9387 16.69 22 16.78 22H18.22C18.31 22 18.3865 21.9387 18.3955 21.8512L18.5305 20.9237C18.751 20.8362 18.9535 20.7181 19.138 20.5825L20.0336 20.9325C20.1146 20.9631 20.2091 20.9325 20.2541 20.8538L20.9741 19.6419C21.0191 19.5631 21.0011 19.4713 20.9291 19.4188L20.1776 18.8412ZM17.5 19.8125C16.7575 19.8125 16.15 19.2219 16.15 18.5C16.15 17.7781 16.7575 17.1875 17.5 17.1875C18.2425 17.1875 18.85 17.7781 18.85 18.5C18.85 19.2219 18.2425 19.8125 17.5 19.8125Z"
                                                fill="#707683" />
                                        </svg>
                                        <span class="ml-2.5">Support</span>
                                    </button>
                                    <button class="flex items-center h-10 focus:outline-none" onclick="window.location.href='endpoints/sign-out.php';">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H9" stroke="#FF6262" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16 17L21 12L16 7" stroke="#FF6262" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21 12H9" stroke="#FF6262" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span class="ml-2.5 text-ubuy-negativeDefault">Sign Out</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Profile dropdown End -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Sidebar -->
        <aside class="sidebar-container md:w-full min-h-screen w-0 opacity-0 hidden md:block md:opacity-100 fixed z-30 bg-white transition" id="sidebar">
            <a href="dashboard.php" class="flex-auto flex items-center justify-center py-10">
                <img alt="ubuy-logo" class="w-24 h-auto" src="assets/images/ubuy-logo.png" />
                
            </a>

            <button class="modal-open-verify bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full hidden">Open Modal</button>

            <div class=" w-full flex absolute top-4 justify-between items-center md:hidden">
                <a href="dashboard.php" class="flex-auto flex items-center justify-center">
                    <img alt="ubuy-logo" class="w-24 h-auto" src="assets/images/ubuy-logo.png" />
                </a>

                <button class="flex items-center pr-4" id="nav-toggle-close" onclick="onSidebarClose()">
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>

            <ul class="flex flex-col p-2.5 font-medium gap-y-1 overflow-y-auto pb-20" style="height:90vh">
                <li class="rounded  <?php echo basename($_SERVER['PHP_SELF']) == "dashboard.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="dashboard.php">
                        <div class="mr-4">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.8265 3H4.21782C3.06522 3 2.13086 3.89543 2.13086 5V19C2.13086 20.1046 3.06522 21 4.21782 21H18.8265C19.9791 21 20.9135 20.1046 20.9135 19V5C20.9135 3.89543 19.9791 3 18.8265 3Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <path d="M2.13086 9H20.9135" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M8.3916 21V9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "task.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="task.php">
                        <div class="mr-4">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 7H4C2.89543 7 2 7.89543 2 9V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V9C22 7.89543 21.1046 7 20 7Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M16 7V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H10C9.46957 3 8.96086 3.21071 8.58579 3.58579C8.21071 3.96086 8 4.46957 8 5V7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M2 12H21.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>

                        </div>
                        <span>Tasks</span>
                    </a>
                </li>
                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "bids.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="bids.php">
                        <div class="mr-4">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M14 2V8H20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M16 13H8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M16 17H8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M10 9H9H8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span>Bids</span>
                    </a>
                </li>
                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "message.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3 relative" href="message.php">
                        <div class="mr-4">
                            <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 13C19 13.5304 18.7893 14.0391 18.4142 14.4142C18.0391 14.7893 17.5304 15 17 15H5L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H17C17.5304 1 18.0391 1.21071 18.4142 1.58579C18.7893 1.96086 19 2.46957 19 3V13Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span>Messages</span>
                        <span class="absolute rounded-full text-xs text-white bg-ubuy-negativeDefault right-2 py-1 px-2 unread-box">0</span>
                    </a>
                </li>
                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "upay.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="upay.php">
                        <div class="mr-4">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M11 15H7C6.45 15 6 14.55 6 14C6 13.45 6.45 13 7 13H11C11.55 13 12 13.45 12 14C12 14.55 11.55 15 11 15ZM17 15H15C14.45 15 14 14.55 14 14C14 13.45 14.45 13 15 13H17C17.55 13 18 13.45 18 14C18 14.55 17.55 15 17 15ZM20 16C20 16.551 19.552 17 19 17H5C4.448 17 4 16.551 4 16V11H20V16ZM4 8C4 7.449 4.448 7 5 7H19C19.552 7 20 7.449 20 8V9H4V8ZM19 5H5C3.346 5 2 6.346 2 8V16C2 17.654 3.346 19 5 19H19C20.654 19 22 17.654 22 16V8C22 6.346 20.654 5 19 5Z"
                                    fill="currentColor" fill-rule="evenodd" />
                                <mask height="14" id="mask0" width="20" x="2" y="5">
                                    <path clip-rule="evenodd"
                                        d="M11 15H7C6.45 15 6 14.55 6 14C6 13.45 6.45 13 7 13H11C11.55 13 12 13.45 12 14C12 14.55 11.55 15 11 15ZM17 15H15C14.45 15 14 14.55 14 14C14 13.45 14.45 13 15 13H17C17.55 13 18 13.45 18 14C18 14.55 17.55 15 17 15ZM20 16C20 16.551 19.552 17 19 17H5C4.448 17 4 16.551 4 16V11H20V16ZM4 8C4 7.449 4.448 7 5 7H19C19.552 7 20 7.449 20 8V9H4V8ZM19 5H5C3.346 5 2 6.346 2 8V16C2 17.654 3.346 19 5 19H19C20.654 19 22 17.654 22 16V8C22 6.346 20.654 5 19 5Z"
                                        fill="white" fill-rule="evenodd" />
                                </mask>
                                <g mask="url(#mask0)"></g>
                            </svg>

                        </div>
                        <span>UPay</span>
                    </a>
                </li>
                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "u-coin.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="u-coin.php">
                        <div class="mr-4">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.2415 0C12.819 0 12.4036 0.0314483 11.9939 0.0868966C11.5669 0.0297931 11.161 0 10.7588 0C7.71241 0 4.96524 1.47766 3.03738 3.83338C3.01793 3.85076 3.00386 3.87145 2.98813 3.89214C2.37365 4.6531 1.84565 5.5051 1.41862 6.42703C1.40786 6.44731 1.39834 6.46717 1.39048 6.4891C1.09627 7.13338 0.850893 7.81035 0.662204 8.51545C0.643583 8.55517 0.635307 8.59862 0.629928 8.64372C0.356411 9.70966 0.207031 10.8352 0.207031 12C0.207031 13.8223 0.567859 15.5499 1.20965 17.0983C1.21545 17.1149 1.22082 17.1306 1.22869 17.1463C1.61351 18.0641 2.09765 18.9174 2.66579 19.6891C2.68027 19.709 2.69227 19.7301 2.71007 19.747C3.28524 20.5188 3.94441 21.2061 4.67144 21.792C4.69213 21.8148 4.71696 21.8317 4.74262 21.8495C6.45034 23.2034 8.52386 24 10.7588 24C11.161 24 11.5669 23.9702 11.9939 23.9131C12.4036 23.9686 12.819 24 13.2415 24C19.0599 24 23.7932 18.617 23.7932 12C23.7932 5.38303 19.0599 0 13.2415 0ZM8.87186 1.08166C8.73489 1.15283 8.59958 1.22731 8.46593 1.30469C8.39103 1.34814 8.31572 1.38993 8.24207 1.43545C8.12745 1.50579 8.01531 1.58028 7.90358 1.65517H7.10703C7.712 1.37214 8.34344 1.1491 9.00179 1.01048C8.95751 1.03241 8.91572 1.0589 8.87186 1.08166ZM4.70082 19.0345H3.21696C2.852 18.5189 2.528 17.9648 2.24662 17.3793H3.81407C3.87903 17.5258 3.94565 17.671 4.01558 17.8142C4.04579 17.8759 4.07724 17.9367 4.10869 17.9979C4.19351 18.1643 4.28124 18.3277 4.37269 18.4887C4.40662 18.5487 4.43931 18.6095 4.47448 18.6691C4.54731 18.7928 4.62386 18.9137 4.70082 19.0345ZM2.05586 7.03448H3.63945C3.56703 7.21531 3.49834 7.39821 3.43338 7.58359C3.41558 7.6349 3.39738 7.68579 3.38 7.7371C3.32041 7.91503 3.26496 8.09462 3.21241 8.27586H1.59613C1.72772 7.84924 1.88165 7.43545 2.05586 7.03448ZM1.03462 12C1.03462 11.7211 1.04951 11.4463 1.06689 11.1724H2.71669C2.71627 11.179 2.71627 11.1857 2.71586 11.1923C2.70055 11.4596 2.68979 11.7281 2.68979 12C2.68979 12.1386 2.69476 12.276 2.69889 12.4138H1.05076C1.0462 12.2756 1.03462 12.1394 1.03462 12ZM2.74607 13.2414C2.76179 13.4156 2.78207 13.5886 2.80441 13.7607C2.80607 13.7731 2.80689 13.7859 2.80855 13.7988C2.83917 14.0288 2.87641 14.2568 2.9182 14.4828H1.2862C1.20551 14.0764 1.14179 13.663 1.10082 13.2414H2.74607ZM3.00262 9.10345C2.99186 9.15228 2.98276 9.20193 2.97282 9.25076C2.96165 9.30538 2.95007 9.35959 2.93931 9.41421C2.88882 9.67366 2.84413 9.93559 2.80896 10.2012C2.80731 10.2137 2.80648 10.2265 2.80482 10.2393C2.79986 10.2745 2.79696 10.3097 2.79241 10.3448H1.15007C1.20469 9.92359 1.27379 9.50814 1.36855 9.10345H3.00262ZM3.10151 15.3103C3.11434 15.3608 3.12634 15.4121 3.13958 15.4622C3.14455 15.4804 3.14869 15.4994 3.15365 15.5177C3.22193 15.7697 3.29848 16.0175 3.38041 16.2625C3.39779 16.3142 3.416 16.3647 3.43379 16.416C3.4491 16.4615 3.46441 16.507 3.48055 16.5517H1.8862C1.72938 16.1499 1.59448 15.7353 1.47945 15.3103H3.10151ZM4.47407 5.33131C4.43931 5.39048 4.4062 5.45172 4.37227 5.51172C4.28082 5.67269 4.19269 5.83655 4.10827 6.00248C4.07724 6.06372 4.04538 6.12414 4.01517 6.18621C4.01186 6.19283 4.00814 6.19986 4.00482 6.2069H2.45351C2.76676 5.61641 3.12758 5.064 3.52772 4.55172H4.97724C4.92676 4.62414 4.87586 4.69614 4.82662 4.76979C4.70455 4.9531 4.58703 5.14014 4.47407 5.33131ZM5.68234 2.48276H6.82524C6.72262 2.57255 6.62 2.66276 6.52027 2.75669C6.4371 2.83531 6.35641 2.91683 6.27531 2.99834C6.19338 3.08069 6.11227 3.16428 6.03282 3.2491C5.95627 3.33062 5.87972 3.41172 5.80524 3.49572C5.73903 3.57021 5.67572 3.64759 5.61158 3.72414H4.24524C4.68965 3.26193 5.16924 2.84524 5.68234 2.48276ZM3.85834 19.8621H5.27848C5.32524 19.9233 5.37158 19.9846 5.41958 20.0446C5.54455 20.2018 5.67324 20.3549 5.80524 20.5043C5.87931 20.5883 5.95627 20.6694 6.03282 20.7509C6.11269 20.8361 6.19379 20.9197 6.27613 21.0021C6.30924 21.0352 6.34069 21.0708 6.3742 21.1034H5.12951C4.67476 20.7314 4.24979 20.316 3.85834 19.8621ZM9.00138 22.9895C8.05255 22.7897 7.15586 22.423 6.32413 21.931H7.3251C7.37807 21.972 7.43269 22.0105 7.48607 22.0502C7.57172 22.1139 7.65738 22.1781 7.74469 22.2389C7.90731 22.3523 8.07324 22.4611 8.24165 22.5646C8.31531 22.6097 8.39062 22.6519 8.46551 22.6953C8.59917 22.7727 8.73448 22.8472 8.87144 22.9183C8.91572 22.9411 8.95751 22.9676 9.00138 22.9895ZM13.2415 23.1724C12.9125 23.1724 12.5877 23.153 12.2674 23.1161L12.1073 23.0938C12.085 23.0909 12.063 23.0872 12.0411 23.0843C11.8979 23.064 11.756 23.0404 11.6153 23.0131C11.6033 23.0106 11.5917 23.0081 11.5801 23.0057C11.4432 22.9788 11.3074 22.9486 11.173 22.915C11.1527 22.9101 11.1324 22.9043 11.1121 22.8989C10.9868 22.8666 10.8618 22.8327 10.7385 22.795C10.7008 22.7834 10.6632 22.7702 10.6255 22.7582C10.52 22.7247 10.4149 22.6903 10.311 22.6527C10.2266 22.6221 10.1434 22.5881 10.0603 22.555C10.0036 22.5327 9.94607 22.5116 9.8902 22.488C7.66524 21.5466 5.82014 19.6957 4.69751 17.3297C4.68717 17.3081 4.67765 17.2854 4.66772 17.2639C4.60772 17.1352 4.54938 17.0052 4.49351 16.8737C4.47117 16.8211 4.45048 16.7677 4.42896 16.7148C4.38717 16.6121 4.34579 16.5091 4.30689 16.4048C4.28165 16.3378 4.25807 16.2695 4.23407 16.2017C4.20138 16.1098 4.1691 16.0175 4.13889 15.9244C4.11407 15.8483 4.09048 15.7713 4.06689 15.6948C4.04 15.6074 4.01393 15.5197 3.9891 15.4316C3.96593 15.3509 3.944 15.269 3.92289 15.1874C3.90055 15.101 3.87903 15.0137 3.85834 14.9263C3.83848 14.8428 3.81945 14.7592 3.80124 14.6748C3.7822 14.5866 3.76482 14.4981 3.74786 14.4091C3.73172 14.3243 3.71558 14.2394 3.70069 14.1538C3.68496 14.0623 3.67131 13.9705 3.65765 13.8782C3.64524 13.7946 3.63241 13.7114 3.62165 13.627C3.60882 13.5277 3.59889 13.4272 3.58855 13.327C3.58027 13.2488 3.57117 13.171 3.56455 13.0924C3.55462 12.9774 3.548 12.8615 3.54138 12.7452C3.53765 12.6799 3.53227 12.6153 3.52938 12.5499C3.52193 12.3679 3.51738 12.1846 3.51738 12C3.51738 11.8154 3.52193 11.6321 3.52938 11.4497C3.53227 11.3843 3.53765 11.3193 3.54138 11.2543C3.548 11.1385 3.55462 11.0222 3.56455 10.9072C3.57117 10.8286 3.58027 10.7508 3.58855 10.6726C3.59889 10.5724 3.60924 10.4723 3.62165 10.3726C3.63241 10.2886 3.64524 10.205 3.65765 10.1214C3.67131 10.0291 3.68496 9.93724 3.70069 9.84579C3.71517 9.76014 3.73131 9.67531 3.74786 9.59048C3.76482 9.50152 3.78262 9.41297 3.80124 9.32483C3.81945 9.24041 3.83848 9.15683 3.85834 9.07324C3.87903 8.98593 3.90055 8.89862 3.92289 8.81214C3.944 8.73021 3.96593 8.64869 3.98869 8.56759C4.01351 8.47945 4.03958 8.39172 4.06648 8.30441C4.09007 8.22745 4.11365 8.1509 4.13848 8.07476C4.1691 7.98166 4.20138 7.88938 4.23407 7.7971C4.25807 7.72924 4.28165 7.66138 4.30689 7.59435C4.3462 7.49007 4.38717 7.38703 4.42896 7.28441C4.45048 7.23145 4.47117 7.17807 4.49351 7.12552C4.54938 6.99393 4.60772 6.864 4.66772 6.73531C4.67807 6.71338 4.68717 6.69103 4.69751 6.66952C5.82014 4.30345 7.66524 2.45297 9.8902 1.51117C9.94648 1.48759 10.0036 1.46648 10.0603 1.44414C10.1434 1.41103 10.2266 1.3771 10.311 1.34648C10.4149 1.30883 10.52 1.2749 10.6255 1.24097C10.6632 1.22897 10.7004 1.21572 10.7385 1.20414C10.8618 1.16648 10.9868 1.13214 11.1121 1.10028C11.132 1.09572 11.1523 1.08952 11.1725 1.08455C11.307 1.05103 11.4428 1.02124 11.5797 0.993931C11.5917 0.991448 11.6033 0.988966 11.6149 0.986483C11.7556 0.959172 11.8975 0.935586 12.0407 0.91531C12.0626 0.912 12.085 0.90869 12.1069 0.905793L12.267 0.883448C12.5877 0.847035 12.9125 0.827586 13.2415 0.827586C18.6034 0.827586 22.9657 5.83945 22.9657 12C22.9657 18.1606 18.6034 23.1724 13.2415 23.1724Z"
                                    fill="currentColor" />
                                <path
                                    d="M5.86177 12.0002C5.86177 11.74 5.87211 11.4785 5.89239 11.2227C5.91018 10.9951 5.74052 10.7957 5.51252 10.7775C5.2837 10.7609 5.08549 10.9298 5.06728 11.1573C5.04535 11.4342 5.03418 11.718 5.03418 12.0002V12.0089C5.03418 12.2373 5.21956 12.4182 5.44797 12.4182C5.67639 12.4182 5.86177 12.2287 5.86177 12.0002Z"
                                    fill="currentColor" />
                                <path
                                    d="M20.3314 9.63779C20.3786 9.82566 20.547 9.95062 20.7324 9.95062C20.7659 9.95062 20.7998 9.94648 20.8337 9.93821C21.0551 9.88235 21.1896 9.65766 21.1342 9.43586C21.0646 9.15945 20.9831 8.88386 20.8913 8.61655C20.8172 8.40055 20.5822 8.28428 20.3657 8.35917C20.1497 8.43324 20.0343 8.66869 20.1084 8.88469C20.1924 9.13007 20.2673 9.38373 20.3314 9.63779Z"
                                    fill="currentColor" />
                                <path
                                    d="M18.6303 17.8012C18.4648 18.0048 18.2898 18.1997 18.1102 18.3814C17.9492 18.5436 17.9505 18.8055 18.1127 18.9665C18.1934 19.0463 18.2989 19.0865 18.404 19.0865C18.5103 19.0865 18.6171 19.0455 18.6978 18.964C18.8968 18.7633 19.0901 18.5477 19.2725 18.3234C19.4169 18.1459 19.3896 17.8852 19.2125 17.7412C19.0354 17.5968 18.7747 17.6241 18.6303 17.8012Z"
                                    fill="currentColor" />
                                <path
                                    d="M6.1475 14.346C6.09246 14.1242 5.86695 13.9884 5.64598 14.0443C5.42419 14.0993 5.28929 14.324 5.34432 14.5458C5.41301 14.8218 5.49412 15.0978 5.58557 15.366C5.64433 15.5381 5.80488 15.6465 5.97702 15.6465C6.02129 15.6465 6.06639 15.6391 6.11067 15.6242C6.32667 15.5505 6.44253 15.3155 6.36888 15.0991C6.28529 14.8533 6.21081 14.5996 6.1475 14.346Z"
                                    fill="currentColor" />
                                <path
                                    d="M17.3207 3.90972C17.0791 3.75207 16.8267 3.60683 16.5709 3.47814C16.3665 3.37469 16.1182 3.45786 16.0152 3.66103C15.9122 3.86503 15.9941 4.11414 16.1981 4.21676C16.4269 4.33221 16.6525 4.46214 16.8689 4.60324C16.9384 4.64876 17.017 4.67027 17.0944 4.67027C17.2297 4.67027 17.3621 4.60407 17.4416 4.48241C17.5661 4.29124 17.5123 4.03469 17.3207 3.90972Z"
                                    fill="currentColor" />
                                <path
                                    d="M16.2435 19.7597C16.0134 19.8777 15.7759 19.9832 15.5375 20.073C15.3236 20.1533 15.2156 20.392 15.2963 20.6059C15.3588 20.7719 15.516 20.8741 15.6836 20.8741C15.732 20.8741 15.7812 20.8654 15.8297 20.8472C16.0974 20.7462 16.3639 20.6283 16.6217 20.4959C16.8248 20.3916 16.9055 20.1421 16.8008 19.9389C16.6961 19.7357 16.4466 19.655 16.2435 19.7597Z"
                                    fill="currentColor" />
                                <path
                                    d="M19.7505 6.32137C19.5896 6.08344 19.4166 5.85213 19.2362 5.63323C19.0909 5.45696 18.8298 5.4313 18.6536 5.57696C18.4773 5.7222 18.4521 5.98289 18.5973 6.15958C18.7612 6.35861 18.9184 6.56923 19.0649 6.78523C19.1447 6.90358 19.2751 6.96689 19.4079 6.96689C19.4878 6.96689 19.5685 6.94372 19.6396 6.89572C19.8292 6.76744 19.8788 6.51047 19.7505 6.32137Z"
                                    fill="currentColor" />
                                <path
                                    d="M21.0342 11.5732C20.8058 11.5732 20.6204 11.7719 20.6204 12.0003C20.6204 12.2539 20.6105 12.5101 20.5911 12.7608C20.5737 12.9888 20.7438 13.1879 20.9718 13.2052C20.9825 13.2061 20.9933 13.2065 21.004 13.2065C21.218 13.2065 21.3996 13.0418 21.4162 12.8246C21.4373 12.5523 21.448 12.275 21.448 11.9999V11.973C21.448 11.745 21.2631 11.5732 21.0342 11.5732Z"
                                    fill="currentColor" />
                                <path
                                    d="M20.6491 14.8063C20.4323 14.7335 20.1981 14.8502 20.1248 15.0666C20.0412 15.3145 19.9465 15.5607 19.843 15.7986C19.752 16.008 19.8476 16.2521 20.0574 16.3432C20.1112 16.3668 20.1674 16.3775 20.2225 16.3775C20.3822 16.3775 20.5341 16.2844 20.6019 16.1288C20.7149 15.8694 20.8183 15.6004 20.9094 15.3302C20.9826 15.1138 20.8659 14.8792 20.6491 14.8063Z"
                                    fill="currentColor" />
                                <path
                                    d="M14.0897 2.72942C13.8091 2.69673 13.524 2.68018 13.2418 2.68018H13.2244C12.996 2.68018 12.8193 2.86556 12.8193 3.09397C12.8193 3.32238 13.0134 3.50776 13.2418 3.50776C13.4922 3.50776 13.7454 3.52225 13.9945 3.55121C14.0106 3.55328 14.0268 3.55411 14.0429 3.55411C14.2498 3.55411 14.429 3.39893 14.4534 3.1879C14.4795 2.96073 14.3169 2.75549 14.0897 2.72942Z"
                                    fill="currentColor" />
                                <path
                                    d="M7.40825 17.2002C7.28038 17.0103 7.023 16.9606 6.8339 17.0885C6.64438 17.2164 6.59431 17.4733 6.72218 17.6628C6.88273 17.9008 7.05528 18.1325 7.23487 18.3518C7.3168 18.4515 7.43556 18.5033 7.55514 18.5033C7.64742 18.5033 7.74052 18.4726 7.81749 18.4093C7.99418 18.2641 8.01983 18.0038 7.875 17.8267C7.71156 17.6281 7.55431 17.417 7.40825 17.2002Z"
                                    fill="currentColor" />
                                <path
                                    d="M6.43365 7.64053C6.22386 7.5495 5.98055 7.64426 5.88869 7.85405C5.77489 8.11432 5.67103 8.38288 5.57958 8.65184C5.50634 8.86826 5.6222 9.10329 5.83862 9.17695C5.88248 9.19184 5.92758 9.19888 5.97145 9.19888C6.144 9.19888 6.30496 9.09005 6.36331 8.91791C6.44689 8.67088 6.54248 8.42467 6.64676 8.1855C6.73903 7.97612 6.64345 7.73198 6.43365 7.64053Z"
                                    fill="currentColor" />
                                <path
                                    d="M13.2417 20.4927C12.9843 20.4927 12.7257 20.4774 12.4728 20.4472C12.2473 20.4232 12.04 20.5821 12.0127 20.8093C11.9858 21.036 12.1476 21.2421 12.3748 21.2694C12.6603 21.3034 12.9524 21.3207 13.2421 21.3207H13.2777C13.5061 21.3207 13.6737 21.1354 13.6737 20.9069C13.6737 20.6785 13.4701 20.4927 13.2417 20.4927Z"
                                    fill="currentColor" />
                                <path
                                    d="M7.79892 5.02308C7.59989 5.22377 7.40582 5.43852 7.22334 5.66239C7.07851 5.83949 7.10499 6.10018 7.2821 6.24459C7.35906 6.30749 7.45175 6.33811 7.54361 6.33811C7.66361 6.33811 7.78237 6.28639 7.8643 6.18625C8.03023 5.98308 8.20568 5.78818 8.3861 5.60694C8.54706 5.44473 8.54623 5.1828 8.38444 5.02142C8.22223 4.86046 7.96072 4.8617 7.79892 5.02308Z"
                                    fill="currentColor" />
                                <path
                                    d="M10.6722 3.14561C10.4041 3.24616 10.1372 3.36368 9.87938 3.49526C9.67579 3.59871 9.59469 3.84823 9.69855 4.05182C9.77138 4.1954 9.91662 4.27775 10.0677 4.27775C10.131 4.27775 10.1951 4.26326 10.2551 4.23264C10.4852 4.11554 10.7231 4.01044 10.9619 3.92106C11.1758 3.84078 11.2846 3.60244 11.2043 3.38851C11.1249 3.17375 10.8857 3.06533 10.6722 3.14561Z"
                                    fill="currentColor" />
                                <path
                                    d="M10.2695 19.7754C10.042 19.6599 9.81645 19.5292 9.59962 19.3872C9.40803 19.2623 9.15231 19.3161 9.02651 19.5068C8.90155 19.698 8.95493 19.9546 9.1461 20.0795C9.38817 20.238 9.64017 20.3841 9.89465 20.5132C9.95465 20.5438 10.0188 20.5579 10.0817 20.5579C10.2327 20.5579 10.378 20.4751 10.4512 20.3315C10.5547 20.1279 10.4731 19.8788 10.2695 19.7754Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <span>U-Coin</span>
                    </a>
                </li>
                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "portfolio.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="portfolio.php">
                        <div class="mr-4">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span>Portfolio</span>
                    </a>

                </li>
                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "review.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="review.php">
                        <div class="mr-4">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span>Reviews</span>
                    </a>

                </li>
                <!-- <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "u-reward.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="u-reward.php">
                        <div class="mr-4">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15C15.866 15 19 11.866 19 8C19 4.13401 15.866 1 12 1C8.13401 1 5 4.13401 5 8C5 11.866 8.13401 15 12 15Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M8.21 13.8899L7 22.9999L12 19.9999L17 22.9999L15.79 13.8799" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span>U-Reward</span>
                    </a>
                </li> -->
                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "u-earn.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="u-earn.php">
                        <div class="mr-4">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 12V22H4V12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M22 7H2V12H22V7Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M12 22V7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M12 7H7.5C6.83696 7 6.20107 6.73661 5.73223 6.26777C5.26339 5.79893 5 5.16304 5 4.5C5 3.83696 5.26339 3.20107 5.73223 2.73223C6.20107 2.26339 6.83696 2 7.5 2C11 2 12 7 12 7Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <path d="M12 7H16.5C17.163 7 17.7989 6.73661 18.2678 6.26777C18.7366 5.79893 19 5.16304 19 4.5C19 3.83696 18.7366 3.20107 18.2678 2.73223C17.7989 2.26339 17.163 2 16.5 2C13 2 12 7 12 7Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                        </div>
                        <span>Invite &amp; Earn</span>
                    </a>
                </li>
                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "dispute-resolution.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="dispute-resolution.php">
                        <div class="mr-4">
                            <svg fill="none" height="24" viewBox="0 0 25 24" width="25" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9948 20.0847L12.0857 20.7053L12.684 20.8936C13.0193 20.9991 13.2819 21.2468 13.4046 21.5603H1.07593C1.19892 21.2466 1.46196 20.9986 1.79578 20.8937L2.39374 20.7058L2.48529 20.0858C2.53594 19.7427 2.82628 19.4897 3.16729 19.4897H11.312C11.6552 19.4897 11.9449 19.7441 11.9948 20.0847Z"
                                    stroke="currentColor" stroke-width="2" />
                                <path
                                    d="M13.5541 10.0973L13.2856 10.8769L13.2918 10.8805L12.7979 11.4199C12.7768 11.443 12.7597 11.4634 12.7481 11.4775C12.7417 11.4853 12.7358 11.4927 12.731 11.4987L11.3332 12.9416L11.3332 12.9416L11.3278 12.9472C11.2307 13.049 11.0312 13.1471 10.7951 13.1471C10.6528 13.1471 10.5391 13.1121 10.4595 13.0658L10.4572 13.0645L7.89473 11.5849L7.89341 11.5842C7.63967 11.4382 7.48204 11.0492 7.56325 10.766L7.56349 10.7651L8.12669 8.7943L8.1269 8.79357C8.24841 8.36716 8.62739 7.71082 8.93709 7.39099L8.93785 7.39021L10.362 5.91625L10.3632 5.91508C10.4295 5.84625 10.5746 5.76172 10.7822 5.73239C10.9893 5.70311 11.1531 5.74377 11.2384 5.79308L11.2385 5.79311L13.801 7.27437L13.8022 7.27508C14.0569 7.42184 14.214 7.81146 14.1331 8.09263L14.1326 8.09439L13.5796 10.0294C13.5768 10.0364 13.5735 10.0448 13.5699 10.0543C13.5653 10.066 13.5599 10.0806 13.5541 10.0973ZM17.9386 13.8635L17.8555 13.4759L18.2364 13.3518C18.3609 13.3113 18.4879 13.3231 18.5961 13.3854C18.5962 13.3854 18.5962 13.3854 18.5963 13.3855L22.7767 15.7991L22.7772 15.7994C22.9891 15.9216 23.0641 16.195 22.9396 16.4111L22.9389 16.4124C22.858 16.5531 22.7098 16.635 22.5514 16.635C22.4768 16.635 22.4007 16.6164 22.3272 16.5741C22.3272 16.5741 22.3272 16.5741 22.3271 16.574L18.1475 14.1611L18.1456 14.16C18.0425 14.1008 17.9675 13.9986 17.9386 13.8635ZM13.5913 10.0011L13.591 10.002C13.5922 9.99916 13.5928 9.99768 13.5924 9.99866L13.5913 10.0011ZM14.5129 10.3895C14.52 10.3725 14.5271 10.3554 14.5309 10.34L19.0956 12.519C18.726 12.3061 18.3029 12.2785 17.9267 12.401L14.4996 10.423C14.5033 10.4122 14.5081 10.4009 14.5129 10.3895Z"
                                    stroke="currentColor" stroke-width="2" />
                                <path
                                    d="M10.3998 2.48313C10.1334 2.94513 10.2919 3.53501 10.7538 3.80134L15.7702 6.69843C15.9213 6.78606 16.0872 6.82749 16.2514 6.82749C16.5849 6.82749 16.9095 6.65416 17.0882 6.34447C17.3547 5.88187 17.1961 5.29273 16.7343 5.02536L11.718 2.12902C11.2571 1.86359 10.6672 2.02037 10.3998 2.48313Z"
                                    fill="currentColor" />
                                <path
                                    d="M4.96109 13.8343L9.97642 16.7305C10.1293 16.8182 10.2954 16.8596 10.4594 16.8596C10.793 16.8596 11.1165 16.6863 11.2963 16.3766C11.5627 15.9147 11.4042 15.3257 10.9423 15.0584L5.92609 12.1622C5.46513 11.8948 4.87346 12.0534 4.60699 12.5152C4.34066 12.9771 4.49819 13.5679 4.96109 13.8343Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <span>Dispute Resolution</span>
                    </a>
                </li>
                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "profile-settings.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="profile-settings.php">
                        <div class="mr-4">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path
                                    d="M19.4 15C19.2669 15.3016 19.2272 15.6362 19.286 15.9606C19.3448 16.285 19.4995 16.5843 19.73 16.82L19.79 16.88C19.976 17.0657 20.1235 17.2863 20.2241 17.5291C20.3248 17.7719 20.3766 18.0322 20.3766 18.295C20.3766 18.5578 20.3248 18.8181 20.2241 19.0609C20.1235 19.3037 19.976 19.5243 19.79 19.71C19.6043 19.896 19.3837 20.0435 19.1409 20.1441C18.8981 20.2448 18.6378 20.2966 18.375 20.2966C18.1122 20.2966 17.8519 20.2448 17.6091 20.1441C17.3663 20.0435 17.1457 19.896 16.96 19.71L16.9 19.65C16.6643 19.4195 16.365 19.2648 16.0406 19.206C15.7162 19.1472 15.3816 19.1869 15.08 19.32C14.7842 19.4468 14.532 19.6572 14.3543 19.9255C14.1766 20.1938 14.0813 20.5082 14.08 20.83V21C14.08 21.5304 13.8693 22.0391 13.4942 22.4142C13.1191 22.7893 12.6104 23 12.08 23C11.5496 23 11.0409 22.7893 10.6658 22.4142C10.2907 22.0391 10.08 21.5304 10.08 21V20.91C10.0723 20.579 9.96512 20.258 9.77251 19.9887C9.5799 19.7194 9.31074 19.5143 9 19.4C8.69838 19.2669 8.36381 19.2272 8.03941 19.286C7.71502 19.3448 7.41568 19.4995 7.18 19.73L7.12 19.79C6.93425 19.976 6.71368 20.1235 6.47088 20.2241C6.22808 20.3248 5.96783 20.3766 5.705 20.3766C5.44217 20.3766 5.18192 20.3248 4.93912 20.2241C4.69632 20.1235 4.47575 19.976 4.29 19.79C4.10405 19.6043 3.95653 19.3837 3.85588 19.1409C3.75523 18.8981 3.70343 18.6378 3.70343 18.375C3.70343 18.1122 3.75523 17.8519 3.85588 17.6091C3.95653 17.3663 4.10405 17.1457 4.29 16.96L4.35 16.9C4.58054 16.6643 4.73519 16.365 4.794 16.0406C4.85282 15.7162 4.81312 15.3816 4.68 15.08C4.55324 14.7842 4.34276 14.532 4.07447 14.3543C3.80618 14.1766 3.49179 14.0813 3.17 14.08H3C2.46957 14.08 1.96086 13.8693 1.58579 13.4942C1.21071 13.1191 1 12.6104 1 12.08C1 11.5496 1.21071 11.0409 1.58579 10.6658C1.96086 10.2907 2.46957 10.08 3 10.08H3.09C3.42099 10.0723 3.742 9.96512 4.0113 9.77251C4.28059 9.5799 4.48572 9.31074 4.6 9C4.73312 8.69838 4.77282 8.36381 4.714 8.03941C4.65519 7.71502 4.50054 7.41568 4.27 7.18L4.21 7.12C4.02405 6.93425 3.87653 6.71368 3.77588 6.47088C3.67523 6.22808 3.62343 5.96783 3.62343 5.705C3.62343 5.44217 3.67523 5.18192 3.77588 4.93912C3.87653 4.69632 4.02405 4.47575 4.21 4.29C4.39575 4.10405 4.61632 3.95653 4.85912 3.85588C5.10192 3.75523 5.36217 3.70343 5.625 3.70343C5.88783 3.70343 6.14808 3.75523 6.39088 3.85588C6.63368 3.95653 6.85425 4.10405 7.04 4.29L7.1 4.35C7.33568 4.58054 7.63502 4.73519 7.95941 4.794C8.28381 4.85282 8.61838 4.81312 8.92 4.68H9C9.29577 4.55324 9.54802 4.34276 9.72569 4.07447C9.90337 3.80618 9.99872 3.49179 10 3.17V3C10 2.46957 10.2107 1.96086 10.5858 1.58579C10.9609 1.21071 11.4696 1 12 1C12.5304 1 13.0391 1.21071 13.4142 1.58579C13.7893 1.96086 14 2.46957 14 3V3.09C14.0013 3.41179 14.0966 3.72618 14.2743 3.99447C14.452 4.26276 14.7042 4.47324 15 4.6C15.3016 4.73312 15.6362 4.77282 15.9606 4.714C16.285 4.65519 16.5843 4.50054 16.82 4.27L16.88 4.21C17.0657 4.02405 17.2863 3.87653 17.5291 3.77588C17.7719 3.67523 18.0322 3.62343 18.295 3.62343C18.5578 3.62343 18.8181 3.67523 19.0609 3.77588C19.3037 3.87653 19.5243 4.02405 19.71 4.21C19.896 4.39575 20.0435 4.61632 20.1441 4.85912C20.2448 5.10192 20.2966 5.36217 20.2966 5.625C20.2966 5.88783 20.2448 6.14808 20.1441 6.39088C20.0435 6.63368 19.896 6.85425 19.71 7.04L19.65 7.1C19.4195 7.33568 19.2648 7.63502 19.206 7.95941C19.1472 8.28381 19.1869 8.61838 19.32 8.92V9C19.4468 9.29577 19.6572 9.54802 19.9255 9.72569C20.1938 9.90337 20.5082 9.99872 20.83 10H21C21.5304 10 22.0391 10.2107 22.4142 10.5858C22.7893 10.9609 23 11.4696 23 12C23 12.5304 22.7893 13.0391 22.4142 13.4142C22.0391 13.7893 21.5304 14 21 14H20.91C20.5882 14.0013 20.2738 14.0966 20.0055 14.2743C19.7372 14.452 19.5268 14.7042 19.4 15V15Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>

                        </div>
                        <span>Profile Settings</span>
                    </a>
                </li>
                <!-- <li class="rounded">
                    <a class="flex flex-row items-center py-2.5 px-3" href="../../customer/dashboard/index.html">
                        <div class="mr-4">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 1L21 5L17 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M3 11V9C3 7.93913 3.42143 6.92172 4.17157 6.17157C4.92172 5.42143 5.93913 5 7 5H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M7 23L3 19L7 15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M21 13V15C21 16.0609 20.5786 17.0783 19.8284 17.8284C19.0783 18.5786 18.0609 19 17 19H3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>

                        </div>
                        <span>Switch to Customer</span>
                    </a>
                </li> -->
            </ul>
        </aside>
        <!-- Sidebar end -->
