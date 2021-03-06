<?php
include_once("endpoints/generic.php");
$init = new GeneralController();
if(isset($_SESSION['access_token']) && isset($_SESSION['user_role'])){

    $userData = $init->getUser();
    $userData = json_decode($userData, true);
    
    $userBilling = $init->getUserBilling();
    $userBilling = json_decode($userBilling, true);

    $notify = $init->notifications();
    $notify = json_decode($notify, true);
    $notify = !empty($notify['notifications']) ? $notify['notifications'] : "";
    
}else{
    session_destroy();
    unset($_SESSION['access_token']);
    header("Location: sign-in.php?error=You have to login!");
}

if(isset($_GET['post-task'])){
    echo "<script type='text/javascript'>toggleSubmitTaskForm()</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Customer - <?php echo isset($userData['first_name']) ? $userData['first_name'] : "Update profile"; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="assets/styles/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/global.css">
    <link rel="stylesheet" href="assets/css/customer-css.css">
    <link rel="stylesheet" href="assets/css/message.css">
    <link rel="stylesheet" href="assets/css/uearn.css">
    <link rel="stylesheet" href="assets/css/dispute.css">
    <link rel="stylesheet" href="assets/css/customer-task.css">
    <link rel="stylesheet" href="assets/css/pro-task.css">
    <link rel="stylesheet" href="assets/css/task.css">
    <link rel="stylesheet" href="assets/css/review.css">
    <link href="post-task-form/task-form-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhol0N_wyb0oZqcKjaU7afqPRFMfz7X80&v=3.exp&libraries=places"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-scope" content="profile email" />
    <meta name="google-signin-client_id" content="637779005926-ic6j3no78uc24ie2t8u43nhjmmk2f9ba.apps.googleusercontent.com" />
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style type="text/css">
        #loader {
            position: fixed;
            width: 100%;
            height: 100vh;
            overflow: visible;
            /* background: #fff url('assets/images/loader.gif') no-repeat center center; */
            background-color: #fff;
            z-index: 99999999999;
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
                                        <button @click="dropdownOpen = !dropdownOpen" class="mr-5">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.2929 16.7071L18.5858 18H5.41421L6.70711 16.7071L7 16.4142V16V11C7 8.26874 8.41437 6.20184 10.7306 5.65306L11.5 5.47075V4.68V4C11.5 3.72228 11.7223 3.5 12 3.5C12.2777 3.5 12.5 3.72228 12.5 4V4.68V5.47011L13.2687 5.65288C15.5762 6.20153 17 8.27963 17 11V16V16.4142L17.2929 16.7071Z"
                                                    fill="white" stroke="#52575C" stroke-width="2" />
                                                <circle cx="17" cy="6" r="4.5" fill="#FB4E4E" stroke="white" />
                                            </svg>
                                        </button>

                                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                                        <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-80 bg-white shadow-xl z-20" style="height: 400px; scroll-behavior: smooth; overflow-y: scroll;">

                                            <?php

                                            if(!empty($notify)){                                           
                                            foreach($notify as $item){ ?>
                                                <a href="<?php echo $item['data']['link']; ?>" class="block px-4 py-2 text-sm capitalize hover:bg-gray-300 hover:text-gray-600 border-b border-gray-200">
                                                    <div class="text-gray-500"><?php echo $item['data']['message']; ?></div>
                                                    <div class="flex text-xxxs text-gray-700 justify-end item-end"><?php echo date('l M j, Y', strtotime($item['created_at'])); ?></div>
                                                </a>
                                            <?php } } ?>
                                        </div>
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
                                
                                <span style="display: none;" id="isMessageFalse"><button onclick="window.location.href='message.php'">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </svg>
                                </button></span>
                                
                                <span style="display: none;" id="isMessageTrue"><button onclick="window.location.href='message.php'">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
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
        <aside class="sidebar-container md:w-full min-h-screen w-0 opacity-0 hidden md:block md:opacity-100 fixed z-50 bg-white transition" id="sidebar">
            <div class="flex-auto flex items-center justify-center py-10">
                <img alt="ubuy-logo" class="w-24 h-auto" src="assets/images/ubuy-logo.png" />
            </div>
            <div class=" w-full flex absolute top-4 justify-between items-center md:hidden">
                <button id="nav-toggle-close" onclick="onSidebarClose()" class="flex items-center pr-4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <ul class="flex flex-col p-2.5 font-medium overflow-y-auto">

                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "dashboard.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="dashboard.php">
                        <div class="mr-4">
                            <svg width="24" fill="none" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentColor" d="M18.8265 3H4.21782C3.06522 3 2.13086 3.89543 2.13086 5V19C2.13086 20.1046 3.06522 21 4.21782 21H18.8265C19.9791 21 20.9135 20.1046 20.9135 19V5C20.9135 3.89543 19.9791 3 18.8265 3Z" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <path stroke="currentColor" d="M2.13086 9H20.9135" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path stroke="currentColor" d="M8.3916 21V9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "task.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="task.php">
                        <div class="mr-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentColor" d="M20 7H4C2.89543 7 2 7.89543 2 9V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V9C22 7.89543 21.1046 7 20 7Z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path stroke="currentColor" d="M16 7V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H10C9.46957 3 8.96086 3.21071 8.58579 3.58579C8.21071 3.96086 8 4.46957 8 5V7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path stroke="currentColor" d="M2 12H21.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <span>Tasks</span>
                    </a>
                </li>

                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "message.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3 relative" href="message.php">
                        <div class="mr-4">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentColor"
                                    d="M19 13C19 13.5304 18.7893 14.0391 18.4142 14.4142C18.0391 14.7893 17.5304 15 17 15H5L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H17C17.5304 1 18.0391 1.21071 18.4142 1.58579C18.7893 1.96086 19 2.46957 19 3V13Z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span>Messages</span>
                        <span class="absolute rounded-full text-xs text-white bg-ubuy-negativeDefault right-2 py-1 px-2 unread-box">0</span>
                    </a>

                </li>

                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "upay.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="upay.php">
                        <div class="mr-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11 15H7C6.45 15 6 14.55 6 14C6 13.45 6.45 13 7 13H11C11.55 13 12 13.45 12 14C12 14.55 11.55 15 11 15ZM17 15H15C14.45 15 14 14.55 14 14C14 13.45 14.45 13 15 13H17C17.55 13 18 13.45 18 14C18 14.55 17.55 15 17 15ZM20 16C20 16.551 19.552 17 19 17H5C4.448 17 4 16.551 4 16V11H20V16ZM4 8C4 7.449 4.448 7 5 7H19C19.552 7 20 7.449 20 8V9H4V8ZM19 5H5C3.346 5 2 6.346 2 8V16C2 17.654 3.346 19 5 19H19C20.654 19 22 17.654 22 16V8C22 6.346 20.654 5 19 5Z"
                                    fill="currentColor" />
                                <mask id="mask0" x="2" y="5" width="20" height="14">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11 15H7C6.45 15 6 14.55 6 14C6 13.45 6.45 13 7 13H11C11.55 13 12 13.45 12 14C12 14.55 11.55 15 11 15ZM17 15H15C14.45 15 14 14.55 14 14C14 13.45 14.45 13 15 13H17C17.55 13 18 13.45 18 14C18 14.55 17.55 15 17 15ZM20 16C20 16.551 19.552 17 19 17H5C4.448 17 4 16.551 4 16V11H20V16ZM4 8C4 7.449 4.448 7 5 7H19C19.552 7 20 7.449 20 8V9H4V8ZM19 5H5C3.346 5 2 6.346 2 8V16C2 17.654 3.346 19 5 19H19C20.654 19 22 17.654 22 16V8C22 6.346 20.654 5 19 5Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#mask0)"></g>
                            </svg>
                        </div>
                        <span>UPay</span>
                    </a>
                </li>

                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "favourite-pro.php" ? "menu-active" : ""; ?>">
                    <a href="favourite-pro.php" class="flex flex-row items-center py-2.5 px-3">
                        <div class="mr-4">
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.8401 3.60987C20.3294 3.09888 19.7229 2.69352 19.0555 2.41696C18.388 2.14039 17.6726 1.99805 16.9501 1.99805C16.2276 1.99805 15.5122 2.14039 14.8448 2.41696C14.1773 2.69352 13.5709 3.09888 13.0601 3.60987L12.0001 4.66987L10.9401 3.60987C9.90843 2.57818 8.50915 1.99858 7.05012 1.99858C5.59109 1.99858 4.19181 2.57818 3.16012 3.60987C2.12843 4.64156 1.54883 6.04084 1.54883 7.49987C1.54883 8.95891 2.12843 10.3582 3.16012 11.3899L4.22012 12.4499L12.0001 20.2299L19.7801 12.4499L20.8401 11.3899C21.3511 10.8791 21.7565 10.2727 22.033 9.60523C22.3096 8.93777 22.4519 8.22236 22.4519 7.49987C22.4519 6.77738 22.3096 6.06198 22.033 5.39452C21.7565 4.72706 21.3511 4.12063 20.8401 3.60987V3.60987Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <span>Favorite Pros</span>
                    </a>
                </li>

                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "u-reward.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="u-reward.php">
                        <div class="mr-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15C15.866 15 19 11.866 19 8C19 4.13401 15.866 1 12 1C8.13401 1 5 4.13401 5 8C5 11.866 8.13401 15 12 15Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M8.21 13.8899L7 22.9999L12 19.9999L17 22.9999L15.79 13.8799" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span>U-Reward</span>
                    </a>
                </li>

                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "u-earn.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="u-earn.php">
                        <div class="mr-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 12V22H4V12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M22 7H2V12H22V7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 22V7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 7H7.5C6.83696 7 6.20107 6.73661 5.73223 6.26777C5.26339 5.79893 5 5.16304 5 4.5C5 3.83696 5.26339 3.20107 5.73223 2.73223C6.20107 2.26339 6.83696 2 7.5 2C11 2 12 7 12 7Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <path d="M12 7H16.5C17.163 7 17.7989 6.73661 18.2678 6.26777C18.7366 5.79893 19 5.16304 19 4.5C19 3.83696 18.7366 3.20107 18.2678 2.73223C17.7989 2.26339 17.163 2 16.5 2C13 2 12 7 12 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span>Invite &amp; Earn</span>
                    </a>
                </li>

                <li class="rounded <?php echo basename($_SERVER['PHP_SELF']) == "dispute-resolution.php" ? "menu-active" : ""; ?>">
                    <a class="flex flex-row items-center py-2.5 px-3" href="dispute-resolution.php">
                        <div class="mr-4">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path
                                    d="M19.4 15C19.2669 15.3016 19.2272 15.6362 19.286 15.9606C19.3448 16.285 19.4995 16.5843 19.73 16.82L19.79 16.88C19.976 17.0657 20.1235 17.2863 20.2241 17.5291C20.3248 17.7719 20.3766 18.0322 20.3766 18.295C20.3766 18.5578 20.3248 18.8181 20.2241 19.0609C20.1235 19.3037 19.976 19.5243 19.79 19.71C19.6043 19.896 19.3837 20.0435 19.1409 20.1441C18.8981 20.2448 18.6378 20.2966 18.375 20.2966C18.1122 20.2966 17.8519 20.2448 17.6091 20.1441C17.3663 20.0435 17.1457 19.896 16.96 19.71L16.9 19.65C16.6643 19.4195 16.365 19.2648 16.0406 19.206C15.7162 19.1472 15.3816 19.1869 15.08 19.32C14.7842 19.4468 14.532 19.6572 14.3543 19.9255C14.1766 20.1938 14.0813 20.5082 14.08 20.83V21C14.08 21.5304 13.8693 22.0391 13.4942 22.4142C13.1191 22.7893 12.6104 23 12.08 23C11.5496 23 11.0409 22.7893 10.6658 22.4142C10.2907 22.0391 10.08 21.5304 10.08 21V20.91C10.0723 20.579 9.96512 20.258 9.77251 19.9887C9.5799 19.7194 9.31074 19.5143 9 19.4C8.69838 19.2669 8.36381 19.2272 8.03941 19.286C7.71502 19.3448 7.41568 19.4995 7.18 19.73L7.12 19.79C6.93425 19.976 6.71368 20.1235 6.47088 20.2241C6.22808 20.3248 5.96783 20.3766 5.705 20.3766C5.44217 20.3766 5.18192 20.3248 4.93912 20.2241C4.69632 20.1235 4.47575 19.976 4.29 19.79C4.10405 19.6043 3.95653 19.3837 3.85588 19.1409C3.75523 18.8981 3.70343 18.6378 3.70343 18.375C3.70343 18.1122 3.75523 17.8519 3.85588 17.6091C3.95653 17.3663 4.10405 17.1457 4.29 16.96L4.35 16.9C4.58054 16.6643 4.73519 16.365 4.794 16.0406C4.85282 15.7162 4.81312 15.3816 4.68 15.08C4.55324 14.7842 4.34276 14.532 4.07447 14.3543C3.80618 14.1766 3.49179 14.0813 3.17 14.08H3C2.46957 14.08 1.96086 13.8693 1.58579 13.4942C1.21071 13.1191 1 12.6104 1 12.08C1 11.5496 1.21071 11.0409 1.58579 10.6658C1.96086 10.2907 2.46957 10.08 3 10.08H3.09C3.42099 10.0723 3.742 9.96512 4.0113 9.77251C4.28059 9.5799 4.48572 9.31074 4.6 9C4.73312 8.69838 4.77282 8.36381 4.714 8.03941C4.65519 7.71502 4.50054 7.41568 4.27 7.18L4.21 7.12C4.02405 6.93425 3.87653 6.71368 3.77588 6.47088C3.67523 6.22808 3.62343 5.96783 3.62343 5.705C3.62343 5.44217 3.67523 5.18192 3.77588 4.93912C3.87653 4.69632 4.02405 4.47575 4.21 4.29C4.39575 4.10405 4.61632 3.95653 4.85912 3.85588C5.10192 3.75523 5.36217 3.70343 5.625 3.70343C5.88783 3.70343 6.14808 3.75523 6.39088 3.85588C6.63368 3.95653 6.85425 4.10405 7.04 4.29L7.1 4.35C7.33568 4.58054 7.63502 4.73519 7.95941 4.794C8.28381 4.85282 8.61838 4.81312 8.92 4.68H9C9.29577 4.55324 9.54802 4.34276 9.72569 4.07447C9.90337 3.80618 9.99872 3.49179 10 3.17V3C10 2.46957 10.2107 1.96086 10.5858 1.58579C10.9609 1.21071 11.4696 1 12 1C12.5304 1 13.0391 1.21071 13.4142 1.58579C13.7893 1.96086 14 2.46957 14 3V3.09C14.0013 3.41179 14.0966 3.72618 14.2743 3.99447C14.452 4.26276 14.7042 4.47324 15 4.6C15.3016 4.73312 15.6362 4.77282 15.9606 4.714C16.285 4.65519 16.5843 4.50054 16.82 4.27L16.88 4.21C17.0657 4.02405 17.2863 3.87653 17.5291 3.77588C17.7719 3.67523 18.0322 3.62343 18.295 3.62343C18.5578 3.62343 18.8181 3.67523 19.0609 3.77588C19.3037 3.87653 19.5243 4.02405 19.71 4.21C19.896 4.39575 20.0435 4.61632 20.1441 4.85912C20.2448 5.10192 20.2966 5.36217 20.2966 5.625C20.2966 5.88783 20.2448 6.14808 20.1441 6.39088C20.0435 6.63368 19.896 6.85425 19.71 7.04L19.65 7.1C19.4195 7.33568 19.2648 7.63502 19.206 7.95941C19.1472 8.28381 19.1869 8.61838 19.32 8.92V9C19.4468 9.29577 19.6572 9.54802 19.9255 9.72569C20.1938 9.90337 20.5082 9.99872 20.83 10H21C21.5304 10 22.0391 10.2107 22.4142 10.5858C22.7893 10.9609 23 11.4696 23 12C23 12.5304 22.7893 13.0391 22.4142 13.4142C22.0391 13.7893 21.5304 14 21 14H20.91C20.5882 14.0013 20.2738 14.0966 20.0055 14.2743C19.7372 14.452 19.5268 14.7042 19.4 15V15Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span>Profile Settings</span>
                    </a>
                </li>
            </ul>
            <div class="mt-16 flex flex-row items-center justify-center w-full">
                <button class="flex flex-row items-center bg-ubuy-blue text-white rounded-lg px-7 py-3" onclick="toggleSubmitTaskForm()">
                    <span class="mr-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 7H4C2.89543 7 2 7.89543 2 9V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V9C22 7.89543 21.1046 7 20 7Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <path d="M16 7V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H10C9.46957 3 8.96086 3.21071 8.58579 3.58579C8.21071 3.96086 8 4.46957 8 5V7" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <path d="M12 11V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9 14H15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <span class="text-sm">Submit Task</span>
                </button>
            </div>

        </aside>
        <!-- Sidebar end -->