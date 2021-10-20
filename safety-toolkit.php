<?php
include_once("endpoints/constant.php");
if(isset($_SESSION['user_role'])){
    if($_SESSION['user_role'] == 'customer'){
        require_once 'inc/customer-header.php';
    }elseif($_SESSION['user_role'] == 'pro'){
        require_once 'inc/pro-header.php';
    }
}else{
    session_destroy();
    unset($_SESSION['access_token']);
    header("Location: sign-in.php?error=You have to login!");
}


$singleProject = $init->getSingleProject(isset($_GET['project_id']) ? $_GET['project_id'] : "");
$singleProject = json_decode($singleProject, true);
$singleProject = isset($singleProject['project'][0]) ? $singleProject['project'][0] : "";

$allBids = $init->getAllBids($_GET['project_id']);
$allBids = json_decode($allBids, true);
// $allBids = isset($allBids['bid'][0]) ? $allBids['bid'][0] : "";

$customer = $init->getSingleProject(isset($_GET['project_id']) ? $_GET['project_id'] : "");
$customer = json_decode($customer, true);
$customer = isset($customer['customer'][0]) ? $customer['customer'][0] : "";

$pro_services = $init->getSingleProject(isset($_GET['project_id']) ? $_GET['project_id'] : "");
$pro_services = json_decode($pro_services, true);
$pro_services = isset($pro_services['pro_services']) ? $pro_services['pro_services'] : "";

?>

        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex w-full flex-col my-7 xl:pl-7 xl:pr-10 px-4 gap-y-6">
                    <div class="sm:flex hidden flex-row items-center justify-between w-full text-sm text-ubuy-secondary gap-x-4">
                        <div class="flex flex-row items-center gap-x-4 rounded-llg bg-white px-6 py-4">
                            <span class="whitespace-nowrap w-56 truncate">
                                My Company’s Website Redesign
                            </span>
                            <span>
                                <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1.12134C-1.2258e-08 0.259419 0.520833 -0.279284 0.9375 0.151678L4.6875 4.03034C5.10417 4.4613 5.10417 5.5387 4.6875 5.96966L0.9375 9.84832C0.520834 10.2793 1.2258e-07 9.74058 1.10322e-07 8.87866L0 1.12134Z" fill="#A0A4A8" />
                                </svg>

                            </span>
                            <span class="whitespace-nowrap w-24 truncate">
                                Safety Toolkit
                            </span>
                        </div>
                        <div class="flex flex-row items-center gap-x-4 rounded-llg bg-white px-6 py-4">
                            <span>
                                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 9L1 5L5 1" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>Back</span>
                        </div>
                    </div>

                    <div class="flex w-full sm:flex-row flex-col gap-x-6">
                        <div class="flex flex-col w-full gap-y-6">
                            <div class="sm:flex hidden flex-row">
                                <div class="">
                                    <div class="relative w-full bg-white rounded-llg flex flex-col justify-start p-5 min-h-220">
                                        <button class="absolute right-4">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#119AE2" fill-opacity="0.05" />
                                                <path d="M20 21C20.5523 21 21 20.5523 21 20C21 19.4477 20.5523 19 20 19C19.4477 19 19 19.4477 19 20C19 20.5523 19.4477 21 20 21Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M20 14C20.5523 14 21 13.5523 21 13C21 12.4477 20.5523 12 20 12C19.4477 12 19 12.4477 19 13C19 13.5523 19.4477 14 20 14Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M20 28C20.5523 28 21 27.5523 21 27C21 26.4477 20.5523 26 20 26C19.4477 26 19 26.4477 19 27C19 27.5523 19.4477 28 20 28Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <h1 class="mb-5 text-base font-medium text-ubuy-black">Task Information</h1>
                                        <h2 class="mb-2.5 text-2xl text-ubuy-blue">My Company’s Website Design</h2>
                                        <p class="text-sm font-normal text-left w-11/12 text-ubuy-black mb-12">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec dolor,
                                            volutpat accumsan et velit porta etiam in. Praesent turpis non volutpat
                                            feugiat quam odio pharetra, erat. Elementum porttitor tortor tellus vitae
                                            leo scelerisque aenean sagittis in. Hendrerit enim, quisque eget elit fermentum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:hidden flex flex-col p-3 relative text-ubuy-secondary bg-white rounded-llg w-full">
                                <div class="text-sm text-ubuy-secondary">
                                    Pro’s Information
                                </div>

                                <div class="flex flex-row gap-x-3">
                                    <div class="flex items-center w-2/6">
                                        <img src="assets/images/avatar-small-rounded.png" alt="avatar" class="rounded-xl min-w-full h-auto"/>
                                    </div>
                                    <div class="flex flex-col w-full">
                                        <h1 class="text-ubuy-black text-sm">John Ayomide</h1>
                                        <span class="text-tiny ">Web Developer</span>
                                        <div class="flex flex-row items-center gap-1">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)"/>
                                                <defs>
                                                <linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFDD00"/>
                                                <stop offset="1" stop-color="#FBB034"/>
                                                </linearGradient>
                                                </defs>
                                            </svg>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)"/>
                                                <defs>
                                                <linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFDD00"/>
                                                <stop offset="1" stop-color="#FBB034"/>
                                                </linearGradient>
                                                </defs>
                                            </svg>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)"/>
                                                <defs>
                                                <linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFDD00"/>
                                                <stop offset="1" stop-color="#FBB034"/>
                                                </linearGradient>
                                                </defs>
                                            </svg>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)"/>
                                                <defs>
                                                <linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFDD00"/>
                                                <stop offset="1" stop-color="#FBB034"/>
                                                </linearGradient>
                                                </defs>
                                            </svg>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)"/>
                                                <defs>
                                                <linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFDD00"/>
                                                <stop offset="1" stop-color="#FBB034"/>
                                                </linearGradient>
                                                </defs>
                                            </svg>
                                            <span class="text-xs">15</span>
                                                
                                        </div>
                                        <div class="flex flex-col flex-wrap items-start w-full justify-between mt-2 gap-y-1">
                                            <div class="flex flex-row items-center justify-center">
                                                <span class="mr-2">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                            stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                <span class="text-tinyer">Identity Verified</span>
                                            </div>
                                           
                                            <div class="flex flex-row items-center justify-center">
                                                <span class="mr-2">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                            stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                <span class="text-tinyer">Email Verified</span>
                                            </div>
                                            <div class="flex flex-row items-center justify-center">
                                                <span class="mr-2">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                            stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                <span class="text-tinyer">Phone Verified</span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="absolute right-5 top-5">
                                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.8406 2.61012C19.3299 2.09912 18.7234 1.69376 18.056 1.4172C17.3885 1.14064 16.6731 0.998291 15.9506 0.998291C15.2281 0.998291 14.5127 1.14064 13.8453 1.4172C13.1778 1.69376 12.5714 2.09912 12.0606 2.61012L11.0006 3.67012L9.94061 2.61012C8.90892 1.57842 7.50964 0.998826 6.05061 0.998826C4.59157 0.998826 3.1923 1.57842 2.16061 2.61012C1.12892 3.64181 0.549316 5.04108 0.549316 6.50012C0.549316 7.95915 1.12892 9.35842 2.16061 10.3901L3.22061 11.4501L11.0006 19.2301L18.7806 11.4501L19.8406 10.3901C20.3516 9.87936 20.757 9.27293 21.0335 8.60547C21.3101 7.93801 21.4524 7.2226 21.4524 6.50012C21.4524 5.77763 21.3101 5.06222 21.0335 4.39476C20.757 3.7273 20.3516 3.12087 19.8406 2.61012Z" fill="#FB4E4E"/>
                                        </svg>   
                                    </button>

                                </div>

                               
                            </div>
                            <div class="flex flex-col bg-white rounded-llg p-5">
                                <h1 class="text-base text-ubuy-black text-left">Confirmation</h1>

                                <div class="flex flex-col lg:my-24 my-6 justify-center items-center">
                                    <h2 class="xl:text-8xl lg:text-7xl md:text-6xl text-5xl font-bold text-center text-ubuy-blue mb-7">
                                        F3G8R2
                                    </h2>

                                    <p class="text-base text-ubuy-gray500 text-center max-w-lg">
                                        Verify that the artisan has this exact unique code to confirm his/her identity before granting access into your home or office space.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <div class="sm:flex hidden flex-col items-center px-5 pt-5 bg-white rounded-llg pb-6 w-72 ">
                                <img src="assets/images/avatar.png" alt="avatar" class="rounded-full w-32 h-32" />
                                <div class="flex flex-row items-center">
                                    <span>John Ayomide</span>
                                    <span>
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.2705 9.22324C19.6 8.67081 20.4 8.67081 20.7295 9.22324C21.0012 9.67877 21.6192 9.77666 22.0184 9.42738C22.5024 9.00379 23.2633 9.25103 23.406 9.87824C23.5236 10.3954 24.0811 10.6795 24.5687 10.4707C25.1599 10.2174 25.8072 10.6877 25.749 11.3282C25.7011 11.8565 26.1436 12.2989 26.6718 12.251C27.3123 12.1928 27.7826 12.8401 27.5293 13.4313C27.3205 13.9189 27.6046 14.4764 28.1218 14.594C28.749 14.7367 28.9962 15.4976 28.5726 15.9816C28.2233 16.3808 28.3212 16.9988 28.7768 17.2705C29.3292 17.6 29.3292 18.4 28.7768 18.7295C28.3212 19.0012 28.2233 19.6192 28.5726 20.0184C28.9962 20.5024 28.749 21.2633 28.1218 21.406C27.6046 21.5236 27.3205 22.0811 27.5293 22.5687C27.7826 23.1599 27.3123 23.8072 26.6718 23.749C26.1436 23.7011 25.7011 24.1436 25.749 24.6718C25.8072 25.3123 25.1599 25.7826 24.5687 25.5293C24.0811 25.3205 23.5236 25.6046 23.406 26.1218C23.2633 26.749 22.5024 26.9962 22.0184 26.5726C21.6192 26.2233 21.0012 26.3212 20.7295 26.7768C20.4 27.3292 19.6 27.3292 19.2705 26.7768C18.9988 26.3212 18.3808 26.2233 17.9816 26.5726C17.4976 26.9962 16.7367 26.749 16.594 26.1218C16.4764 25.6046 15.9189 25.3205 15.4313 25.5293C14.8401 25.7826 14.1928 25.3123 14.251 24.6718C14.2989 24.1436 13.8565 23.7011 13.3282 23.749C12.6877 23.8072 12.2174 23.1599 12.4707 22.5687C12.6795 22.0811 12.3954 21.5236 11.8782 21.406C11.251 21.2633 11.0038 20.5024 11.4274 20.0184C11.7767 19.6192 11.6788 19.0012 11.2232 18.7295C10.6708 18.4 10.6708 17.6 11.2232 17.2705C11.6788 16.9988 11.7767 16.3808 11.4274 15.9816C11.0038 15.4976 11.251 14.7367 11.8782 14.594C12.3954 14.4764 12.6795 13.9189 12.4707 13.4313C12.2174 12.8401 12.6877 12.1928 13.3282 12.251C13.8564 12.2989 14.2989 11.8564 14.251 11.3282C14.1928 10.6877 14.8401 10.2174 15.4313 10.4707C15.9189 10.6795 16.4764 10.3954 16.594 9.87824C16.7367 9.25103 17.4976 9.00379 17.9816 9.42738C18.3808 9.77666 18.9988 9.67877 19.2705 9.22324Z"
                                                fill="#119AE2" />
                                            <path d="M24 15L18.5 20.5L16 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="my-2">
                                    <span class="py-1 px-2 rounded-2xl border border-ubuy-inactive text-ubuy-inactive text-tiny">Out of Work</span>
                                </div>
                                <div class="flex flex-row items-center justify-center w-full">
                                    <div class="flex flex-col justify-center items-center mr-4">
                                        <span class="text-xs text-ubuy-secondary">10</span>
                                        <span class="text-tiny text-ubuy-inactive"> Jobs Done</span>
                                    </div>
                                    <div id="profile-rating" class="flex flex-col px-4 relative">
                                        <div class="text-xs text-ubuy-secondary flex flex-row items-center justify-center">
                                            <span>4.5</span>
                                            <span>
                                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 0L4.89806 2.76393H7.80423L5.45308 4.47214L6.35114 7.23607L4 5.52786L1.64886 7.23607L2.54692 4.47214L0.195774 2.76393H3.10194L4 0Z" fill="#25282B" />
                                                </svg>
                                            </span>
                                        </div>
                                        <span class="text-tiny text-ubuy-inactive">72 Ratings</span>
                                    </div>
                                    <div class="flex flex-col justify-center items-center ml-4">
                                        <span class="text-xs text-ubuy-secondary">Aug’ 20</span>
                                        <span class="text-tiny text-ubuy-inactive">Date Joined</span>
                                    </div>
                                </div>
                                <div class="flex flex-row w-full justify-between my-3">
                                    <div class="flex flex-row items-center justify-center">
                                        <span class="mr-2">
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                    stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="text-tinyer">Identity Verified</span>
                                    </div>
                                    <div class="flex flex-row items-center justify-center">
                                        <span class="mr-2">
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                    stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="text-tinyer">Phone Verified</span>
                                    </div>
                                    <div class="flex flex-row items-center justify-center">
                                        <span class="mr-2">
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                    stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="text-tinyer">Email Verified</span>
                                    </div>
                                </div>
                                <div class="my-3 flex flex-row justify-between items-center w-11/12 mx-auto">
                                    <button class="rounded-2xl py-2 px-3 bg-ubuy-blue shadow-card text-xs text-white">Message</button>
                                    <button class="rounded-2xl py-2 px-3 bg-white shadow-card text-xs text-ubuy-blue">View Profile</button>
                                    <button>
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.1" width="34" height="34" rx="17" fill="#FB4E4E" />
                                            <path
                                                d="M23.6311 11.4569C23.248 11.0737 22.7932 10.7697 22.2926 10.5622C21.792 10.3548 21.2554 10.248 20.7136 10.248C20.1717 10.248 19.6351 10.3548 19.1346 10.5622C18.634 10.7697 18.1791 11.0737 17.7961 11.4569L17.0011 12.2519L16.2061 11.4569C15.4323 10.6831 14.3828 10.2484 13.2886 10.2484C12.1943 10.2484 11.1448 10.6831 10.3711 11.4569C9.5973 12.2307 9.1626 13.2801 9.1626 14.3744C9.1626 15.4687 9.5973 16.5181 10.3711 17.2919L11.1661 18.0869L17.0011 23.9219L22.8361 18.0869L23.6311 17.2919C24.0143 16.9088 24.3183 16.454 24.5258 15.9534C24.7332 15.4528 24.8399 14.9163 24.8399 14.3744C24.8399 13.8326 24.7332 13.296 24.5258 12.7954C24.3183 12.2948 24.0143 11.84 23.6311 11.4569Z"
                                                fill="#FB4E4E" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex flex-row w-full justify-between my-3 text-tiny text-ubuy-secondary">
                                    <span>Phone Number:</span>
                                    <span>08107270757</span>
                                </div>
                            </div>

                            <div class=" mt-6 bg-white rounded-llg p-5 sm:w-72 w-full">
                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center justify-center">
                                        <span class="mr-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.2898 3.85996L1.81978 18C1.64514 18.3024 1.55274 18.6453 1.55177 18.9945C1.55079 19.3437 1.64127 19.6871 1.8142 19.9905C1.98714 20.2939 2.2365 20.5467 2.53748 20.7238C2.83847 20.9009 3.18058 20.9961 3.52978 21H20.4698C20.819 20.9961 21.1611 20.9009 21.4621 20.7238C21.7631 20.5467 22.0124 20.2939 22.1854 19.9905C22.3583 19.6871 22.4488 19.3437 22.4478 18.9945C22.4468 18.6453 22.3544 18.3024 22.1798 18L13.7098 3.85996C13.5315 3.56607 13.2805 3.32308 12.981 3.15444C12.6814 2.98581 12.3435 2.89722 11.9998 2.89722C11.656 2.89722 11.3181 2.98581 11.0186 3.15444C10.7191 3.32308 10.468 3.56607 10.2898 3.85996V3.85996Z"
                                                    stroke="#E93C3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.0005 9V13" stroke="#E93C3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.0005 17H12.0105" stroke="#E93C3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="text-negative-darker font-medium text-base">Something wrong ?</span>
                                    </div>

                                    <div class="text-sm text-ubuy-secondary text-center my-5">
                                        If anything looks suspicious, tap the button to alert us
                                    </div>

                                    <button class="shadow-card rounded-lg text-ubuy-negativeDefault border border-ubuy-negativeDefault py-2.5 px-8 w-max mx-auto font-semibold">
                                        Alert
                                    </button>

                                    <div class="text-sm text-ubuy-secondary text-center my-5">
                                        or in case of any emergency
                                    </div>

                                    <button class="text-ubuy-negativeDefault text-lg">
                                        Call 911
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php
if($_SESSION['user_role'] == 'customer'){
    require_once 'inc/customer-footer.php';
}elseif($_SESSION['user_role'] == 'pro'){
    require_once 'inc/pro-footer.php';
}
?>
