<?php
include_once("endpoints/generic.php");
$init = new GeneralController();
if(isset($_SESSION['access_token']) && isset($_SESSION['user_role'])){
    $userData = $init->getUser();
    $userData = json_decode($userData, true);
}

    $category = $init->getAllCategories();
    $category = json_decode($category, true);
    $category = !empty($category['categories']) ? $category['categories'] : "";

    $allActiveTask = $init->allActiveTask();
    $allActiveTask = json_decode($allActiveTask, true);
    $allActiveTask = !empty($allActiveTask['active_tasks']) ? $allActiveTask['active_tasks'] : "";    


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhol0N_wyb0oZqcKjaU7afqPRFMfz7X80&v=3.exp&libraries=places"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-scope" content="profile email" />
    <meta name="google-signin-client_id" content="637779005926-ic6j3no78uc24ie2t8u43nhjmmk2f9ba.apps.googleusercontent.com" />
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
    <link href="assets/styles/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom-style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/faq.css">
    <link rel="stylesheet" href="assets/css/category.css">
    <link rel="stylesheet" href="assets/css/career.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/how-it-works.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/legal.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/states.css">

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
        
        .dropdown-menu{
            position: absolute !important;
            border: #e5e7eb solid 1px !important;
            padding: 12px 25px !important;
            box-shadow: 1px 1px 1px #e5e7eb !important;
            z-index: 999999 !important;
            background-color: white !important;
        }
        .dropdown-menu > li{
            font-size: 13px;
            padding: 5px 0px;
            border-bottom: 1px solid #efefef;
        }

        input[type="search"] {
            text-align: left !important;
        }
    </style>
</head>

<body class="bg-white">
<div id="loader" class="flex items-center justify-center"><img src="assets/images/loader.gif" width="180" height="180" /></div>
    <header class="w-full py-5">
        <nav class="max-w-7xl px-5 mx-auto w-full flex flex-row items-center justify-between relative text-sm">
            <input class="hidden" type="checkbox" id="toggle-mob-menu" />
            <label for="toggle-mob-menu" class="lg:hidden block">
                <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.58203H21M1 8.58203H21M1 15.582H21" stroke="currentColor" strokeWidth="2"
                        strokeLinecap="round" />
                </svg>
            </label>
            <a href="index.php" class="px-4 py-2.5 flex-1 flex flex-row items-center lg:justify-start justify-center">
                <img src="assets/images/logo.png" alt="logo" />
            </a>
            <div class="flex flex-row items-center text-base font-medium relative" id="menu">
                <ul class="lg:flex hidden flex-row items-center">
                    <li class="hide-menu-btn hidden w-full flex-row justify-between">
                        <a href="index.php" class="flex flex-row items-center justify-center">
                            <img src="assets/images/logo.png" alt="logo" />
                        </a>
                        <label for="toggle-mob-menu">
                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.778.808l1.414 1.414L11.414 10l7.778 7.778-1.414 1.414L10 11.414l-7.778 7.778-1.414-1.414L8.586 10 .808 2.222 2.222.808 10 8.586 17.778.808z"
                                    fill="#000" fillRule="evenodd" />
                            </svg>
                        </label>
                    </li>
                    <li class="mr-10 px-4 py-2.5 relative" x-data="{ dropdownOpen: false }">
                        <button @click="dropdownOpen = !dropdownOpen" class="cursor-pointer focus:outline-none flex flex-row items-center lg:px-4 lg:py-2.5">
                            <span class="mr-2 font-medium text-xxs">Categories</span>
                            <span>
                                <svg width="9" height="6" viewBox="0 0 9 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.891602 1.12842L4.73269 4.96773L8.572 1.12842" stroke="currentColor" />
                                </svg>
                            </span>
                        </button>
                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                        <div x-show="dropdownOpen" class="absolute left-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                        <?php 
                            foreach($category as $cat){
                        ?>

                            <a href="category.php?cat-id=<?php echo $cat['id']; ?>" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white text-xxs">
                                <?php echo $cat['name']; ?>
                            </a>

                        <?php } ?>


                        </div>
                    </li>
                    <li class="mr-12 rounded-md hover:bg-yellow-dark px-4 py-2.5 text-xxs">
                        <a href="contact.php">U-Assistant</a>
                    </li>

                    <li class="mr-12 rounded-md hover:bg-yellow-dark px-4 py-2.5 text-xxs">
                        <a href="how-it-work.php">How it works</a>
                    </li>
                </ul>
                
                    <?php 
                    if(isset($_SESSION['access_token'])){ ?>
                        <hr class="transform rotate-90 w-11 border-ubuy-gray200" />
                        <a href="profile-settings.php" class="xl:flex hidden p-2 mr-10 rounded-md bg-ubuy-blue text-white text-xxxs">Acount Setting</a>
                        <div class="lg:flex hidden flex-row items-center action-wrapper relative" x-data="{ dropdownOpen: false }">
                            <button @click="dropdownOpen = !dropdownOpen" class="cursor-pointer focus:outline-none flex flex-row items-center lg:px-4 lg:py-2.5">
                                <img class="avatar rounded-full" src="<?php echo $userData['public_url'] != 'http://new.ubuy.ng/storage' ? $userData['public_url'] : "assets/images/ubuy_logo.svg" ?>" alt="avatar" style="width: 40px; height: 40px !important;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="#222F54" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                            <div x-show="dropdownOpen" class="absolute left-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20 top-10">

                                <a href="dashboard.php" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white text-xxs">
                                    Dashboard
                                </a>
                                <a href="task.php" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white text-xxs">
                                    Task
                                </a>
                                <a href="profile-settings.php" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white text-xxs">
                                    Profile Setting
                                </a>
                                <a href="dispute-resolution.php" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white text-xxs">
                                    Dispute Resolution
                                </a>
                                <a href="endpoints/sign-out.php" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white text-xxs">
                                    Sign Out
                                </a>
                            </div>
                        </div>
                    <?php }else{ ?>
                        <div class="lg:flex hidden flex-row items-center action-wrapper">
                            <hr class="transform rotate-90 w-11 border-ubuy-gray200" />
                            <a href="sign-up.php" class="px-4 py-2.5 mr-12 text-ubuy-blue text-xxs">Sign Up</a>
                            <a href="sign-in.php" class="px-4 py-2.5 rounded-md bg-ubuy-blue text-white text-xxs">Sign In</a>
                        </div>
                    <?php } ?>
                
            </div>
            <?php 
            if(!isset($_SESSION['access_token'])){ ?>
                <a href="sign-in.php" class="px-2 py-2.5 text-ubuy-blue lg:hidden block text-xxs">Sign In</a>
            <?php }else{ ?>
                <a href="dashboard.php" class="px-2 py-2.5 text-ubuy-blue lg:hidden block text-xxs">Account</a>
            <?php } ?>
        </nav>
    </header>