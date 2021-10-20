<?php require_once 'inc/home-header.php'; 
$split = explode("~", $_GET['uuid']);
$pub = $init->singleUserUUID($split[0]);
if(!empty($pub)){
    $pub = json_decode($pub, true);
    $pub = $pub['professional'];
}else{
    $pub = $init->singleUser($split[1]);
    $pub = json_decode($pub, true);
    $pub = $pub['professional'];
}

?>

    <main class="w-full bg-white relative" id="main-content">
        <section class="w-full relative top-0 h-80 bg-ubuy-blue flex items-center justify-center bg-left bg-no-repeat bg-contain hidden" style="background-image: url('assets/images/pattern-pro-profile.png');">
            <img src="assets/images/tag-pro-profile.png" alt="" class="absolute top-0 right-4">
            <div class="text-9xl text-white">
                Cover Photo
            </div>
        </section>
        <section class="relative">
            <div class="absolute w-full h-56 bg-ubuy-blue xl:-ml-5 bg-no-repeat bg-cover bg-center sm:flex hidden items-center justify-center" style="background-image: url('assets/images/pattern-pro-profile.png');">
                <img src="assets/images/tag-pro-profile.png" alt="" class="absolute top-0 right-4">
                <div class="text-9xl text-white">
                    Cover Photo
                </div>
            </div>
            <div class="wrapper mx-auto flex flex-col">
                <div class="grid grid-cols-3 gap-4">
                    <div class="" style="z-index: 999;">
                        <div class="relative flex flex-col items-center px-5 pt-5 lg:mr-6 bg-white rounded-20 shadow-card pb-6 max-w-sm  top-40">
                            <img src="<?php echo $pub['public_url']; ?>" alt="avatar" class="rounded-full w-32 h-32" />
                            <div class="flex flex-row items-center">
                                <span><?php echo ucfirst($pub['last_name']).' '.ucfirst($pub['first_name'][0]); ?></span>
                                <span>
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.2705 9.22324C19.6 8.67081 20.4 8.67081 20.7295 9.22324C21.0012 9.67877 21.6192 9.77666 22.0184 9.42738C22.5024 9.00379 23.2633 9.25103 23.406 9.87824C23.5236 10.3954 24.0811 10.6795 24.5687 10.4707C25.1599 10.2174 25.8072 10.6877 25.749 11.3282C25.7011 11.8565 26.1436 12.2989 26.6718 12.251C27.3123 12.1928 27.7826 12.8401 27.5293 13.4313C27.3205 13.9189 27.6046 14.4764 28.1218 14.594C28.749 14.7367 28.9962 15.4976 28.5726 15.9816C28.2233 16.3808 28.3212 16.9988 28.7768 17.2705C29.3292 17.6 29.3292 18.4 28.7768 18.7295C28.3212 19.0012 28.2233 19.6192 28.5726 20.0184C28.9962 20.5024 28.749 21.2633 28.1218 21.406C27.6046 21.5236 27.3205 22.0811 27.5293 22.5687C27.7826 23.1599 27.3123 23.8072 26.6718 23.749C26.1436 23.7011 25.7011 24.1436 25.749 24.6718C25.8072 25.3123 25.1599 25.7826 24.5687 25.5293C24.0811 25.3205 23.5236 25.6046 23.406 26.1218C23.2633 26.749 22.5024 26.9962 22.0184 26.5726C21.6192 26.2233 21.0012 26.3212 20.7295 26.7768C20.4 27.3292 19.6 27.3292 19.2705 26.7768C18.9988 26.3212 18.3808 26.2233 17.9816 26.5726C17.4976 26.9962 16.7367 26.749 16.594 26.1218C16.4764 25.6046 15.9189 25.3205 15.4313 25.5293C14.8401 25.7826 14.1928 25.3123 14.251 24.6718C14.2989 24.1436 13.8565 23.7011 13.3282 23.749C12.6877 23.8072 12.2174 23.1599 12.4707 22.5687C12.6795 22.0811 12.3954 21.5236 11.8782 21.406C11.251 21.2633 11.0038 20.5024 11.4274 20.0184C11.7767 19.6192 11.6788 19.0012 11.2232 18.7295C10.6708 18.4 10.6708 17.6 11.2232 17.2705C11.6788 16.9988 11.7767 16.3808 11.4274 15.9816C11.0038 15.4976 11.251 14.7367 11.8782 14.594C12.3954 14.4764 12.6795 13.9189 12.4707 13.4313C12.2174 12.8401 12.6877 12.1928 13.3282 12.251C13.8564 12.2989 14.2989 11.8564 14.251 11.3282C14.1928 10.6877 14.8401 10.2174 15.4313 10.4707C15.9189 10.6795 16.4764 10.3954 16.594 9.87824C16.7367 9.25103 17.4976 9.00379 17.9816 9.42738C18.3808 9.77666 18.9988 9.67877 19.2705 9.22324Z"
                                            fill="#119AE2" />
                                        <path d="M24 15L18.5 20.5L16 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="flex flex-row items-center justify-center w-full">
                                <div class="flex flex-col justify-center items-center mr-4">
                                    <span class="text-xs text-ubuy-secondary">0</span>
                                    <span class="text-tiny text-ubuy-inactive"> Jobs Done</span>
                                </div>
                                <div id="profile-rating" class="flex flex-col px-4 relative">
                                    <div class="text-xs text-ubuy-secondary flex flex-row items-center justify-center">
                                        <span><?php echo $pub['average_rating']; ?></span>
                                        <span>
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0L4.89806 2.76393H7.80423L5.45308 4.47214L6.35114 7.23607L4 5.52786L1.64886 7.23607L2.54692 4.47214L0.195774 2.76393H3.10194L4 0Z" fill="#25282B" />
                                            </svg>
                                        </span>
                                    </div>
                                    <span class="text-tiny text-ubuy-inactive"><?php echo $pub['rating']; ?> Ratings</span>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-4">
                                    <span class="text-xs text-ubuy-secondary"><?php echo date('M Y', strtotime($pub['created_at'])); ?></span>
                                    <span class="text-tiny text-ubuy-inactive">Date Joined</span>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-between my-3">
                                <div class="flex flex-row items-center justify-center">
                                    <span class="mr-2">
                                        <?php echo $pub['verify_confirm'] == 3 ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>' : '<img src="assets/images/cancel.svg" width="8" height="8" />'; ?>
                                    </span>
                                    <span class="text-tinyer">Identity Verified</span>
                                </div>
                                <div class="flex flex-row items-center justify-center">
                                    <span class="mr-2">
                                        <?php echo $pub['is_phone_verified'] == 1 ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>' : '<img src="assets/images/cancel.svg" width="8" height="8" />'; ?>
                                    </span>
                                    <span class="text-tinyer">Phone Verified</span>
                                </div>
                                <div class="flex flex-row items-center justify-center">
                                    <span class="mr-2">
                                        <?php echo $pub['email_verified_at'] != null ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>' : '<img src="assets/images/cancel.svg" width="8" height="8" />'; ?>
                                    </span>
                                    <span class="text-tinyer">Email Verified</span>
                                </div>
                            </div>
                            <div class="text-sm text-ubuy-secondary my-3">
                                <?php echo $pub['profile']['about_profile']; ?>
                            </div>
                            <div class="my-3 flex flex-row justify-between items-center w-11/12 mx-auto">
                                <button class="rounded-2xl py-2 px-5 bg-ubuy-blue shadow-card text-xs text-white">Contact</button>
                                <button class="rounded-2xl py-2 px-5 bg-white shadow-card text-xs text-ubuy-blue flex flex-row items-center">
                                    <span class="mr-3">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.5 6C14.7426 6 15.75 4.99264 15.75 3.75C15.75 2.50736 14.7426 1.5 13.5 1.5C12.2574 1.5 11.25 2.50736 11.25 3.75C11.25 4.99264 12.2574 6 13.5 6Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M4.5 11.25C5.74264 11.25 6.75 10.2426 6.75 9C6.75 7.75736 5.74264 6.75 4.5 6.75C3.25736 6.75 2.25 7.75736 2.25 9C2.25 10.2426 3.25736 11.25 4.5 11.25Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M13.5 16.5C14.7426 16.5 15.75 15.4926 15.75 14.25C15.75 13.0074 14.7426 12 13.5 12C12.2574 12 11.25 13.0074 11.25 14.25C11.25 15.4926 12.2574 16.5 13.5 16.5Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6.44141 10.1325L11.5639 13.1175" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.5564 4.88251L6.44141 7.86751" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Share
                                    </span>
                                </button>
                                <button>
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.1" width="34" height="34" rx="17" fill="#FB4E4E" />
                                        <path
                                            d="M23.6311 11.4569C23.248 11.0737 22.7932 10.7697 22.2926 10.5622C21.792 10.3548 21.2554 10.248 20.7136 10.248C20.1717 10.248 19.6351 10.3548 19.1346 10.5622C18.634 10.7697 18.1791 11.0737 17.7961 11.4569L17.0011 12.2519L16.2061 11.4569C15.4323 10.6831 14.3828 10.2484 13.2886 10.2484C12.1943 10.2484 11.1448 10.6831 10.3711 11.4569C9.5973 12.2307 9.1626 13.2801 9.1626 14.3744C9.1626 15.4687 9.5973 16.5181 10.3711 17.2919L11.1661 18.0869L17.0011 23.9219L22.8361 18.0869L23.6311 17.2919C24.0143 16.9088 24.3183 16.454 24.5258 15.9534C24.7332 15.4528 24.8399 14.9163 24.8399 14.3744C24.8399 13.8326 24.7332 13.296 24.5258 12.7954C24.3183 12.2948 24.0143 11.84 23.6311 11.4569Z"
                                            fill="#FB4E4E" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex flex-row items-center w-full justify-between text-ubuy-secondary my-3">
                                <div class="flex flex-row items-center">
                                    <span class="mr-2">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61308 3.94821 5.3239 5.63604 3.63607C7.32387 1.94824 9.61305 1.00003 12 1.00003C14.3869 1.00003 16.6761 1.94824 18.364 3.63607C20.0518 5.3239 21 7.61308 21 10Z" stroke="#52575C" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34318 13.6569 7.00003 12 7.00003C10.3431 7.00003 9 8.34318 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="text-xxs">
                                        Location
                                    </span>
                                </div>
                                <div class="font-medium text-xxs">
                                <?php echo $pub['city']; ?>
                                </div>
                            </div><hr>
                            <div class="flex flex-row items-center w-full justify-between text-ubuy-secondary my-3">
                                <div class="flex flex-row items-center">
                                    <span class="mr-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88" stroke="#52575C" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="text-xxs">
                                        Number of Employees:
                                    </span>
                                </div>
                                <div class="font-medium text-xxs">
                                <?php echo $pub['profile']['number_of_empolyees']; ?> Employee(s)
                                </div>
                            </div>
                            <div class="flex flex-row items-start justify-start w-full text-ubuy-secondary  my-3">
                                <div class="flex flex-row items-start justify-start mb-4">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15C15.866 15 19 11.866 19 8C19 4.13401 15.866 1 12 1C8.13401 1 5 4.13401 5 8C5 11.866 8.13401 15 12 15Z" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.21 13.89L7 23L12 20L17 23L15.79 13.88" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="text-xxs">
                                        Skills:
                                    </span>
                                </div>
                                <div class="flex flex-row flex-wrap gap-1 text-tiny ml-2">
                                    <?php 
                                    foreach($pub['pro_skill'] as $item){ ?>
                                        <span class="text-white bg-ubuy-blue rounded-llg py-1 px-2 text-xxxs"><?php echo $item['skill_title']; ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col lg:mr-6 flex-1 mt-5" style="z-index: 9999; margin-top: 150px;">
                            <div class="overlay mt-6 rounded-20 ubuy-pro bg-cover bg-center bg-no-repeat max-w-sm w-auto text-white py-8 px-10" style="background-image: url('assets/images/pp_bg1.png');">
                                    <img src="assets/images/ubuy-pro-plus.svg" alt="" />
                                    <div class="text-sm font-medium">
                                        <p class="mb-8">
                                            Find more verified professionals on Ubuy Services for quality and affordable service.
                                        </p>
                                        <a href="" class="text-ubuy-blue">Learn More about UbuyPro</a>
                                    </div>
                                    <hr class="border-ubuy-secondary mt-5 mb-2.5" />
                                    <div class="text-sm">
                                        <h2>
                                            This PRO is verified in
                                        </h2>
                                        <ul>
                                            <?php foreach ($pub['sub_categories'] as $item) { ?>
                                            <li>- <?php echo $item['name']; ?></li>
                                            <?php } ?>
                                        </ul>
                                    </div>

                            </div>

                            <div class="mt-10">
                                <div>
                                    <h1 class="text-ubuy-black font-medium text-lg mb-2.5">Why Hire <?php echo ucfirst($pub['last_name']).' '.ucfirst($pub['first_name'][0]); ?> or any other professional on Ubuy Services</h1>
                                    <p class="text-sm text-ubuy-secondary mb-5">Pros nearby like <?php echo ucfirst($pub['last_name']); ?> are local business owners, craftsmen and individuals who are ready to assist you.</p>
                                    <p class="text-sm text-ubuy-secondary mb-5">Watch the video to see why choosing professionals from Ubuy Services can help you complete daily tasks.
                                    </p>
                                </div>
                                <div class="w-full">
                                    <div class="flex flex-row items-center border-b border-ubuy-gray450 bg-white rounded-t-3xl py-4 px-5">
                                        <div class="flex flex-row items-center mr-5">
                                            <div class="w-5 h-5 rounded-full bg-ubuy-negativeDefault"></div>
                                            <div class="w-5 h-5 rounded-full bg-ubuy-warningDefault mx-2.5"></div>
                                            <div class="w-5 h-5 rounded-full bg-ubuy-positiveDefault"></div>
                                        </div>
                                        <div class="rounded-md border border-ubuy-gray450 w-4/5 py-1">
                                            <span class="text-sm px-2.5">
                                                <span class="-mr-1">https://</span>
                                                <span class="font-medium text-ubuy-gray450">Ubuy Services</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="60" height="60" rx="30" fill="black" fill-opacity="0.6" />
                                                <path d="M42 30L24 40.3923V19.6077L42 30Z" fill="white" />
                                            </svg>
                                        </button>
                                        <img src="assets/images/sample-video.png" alt="" class="rounded-b-3xl w-full" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        
                        <div class="relative flex-2 top-40">
                            <div class="bg-white rounded-llg shadow-card">
                                <div class="border-b border-ubuy-gray200  overflow-y-visible overflow-x-auto h-20 w-full flex flex-col items-start">
                                    <div class="flex flex-row items-center justify-start flex-nowrap h-full sm:max-w-fttx lg:w-full font-medium">
                                        <button onclick="openTabOtherer(event, 'services')" class="h-0 pt-0 px-7 pb-2 tab-menu-item tab-menu-active focus:outline-none whitespace-nowrap">
                                            Services
                                        </button>
                                        <button onclick="openTabOtherer(event, 'work-hour')" class="h-0 pt-0 px-7 pb-2 tab-menu-item focus:outline-none whitespace-nowrap">
                                            Work Hours
                                        </button>
                                    </div>
                                </div>

                                <div class="p-5 mt-5">
                                    <div id="services" class="flex flex-row flex-wrap gap-6 mb-8 tab-content">


                                        <?php 
                                        foreach($pub['sub_categories'] as $item){ ?>
                                        <div class="overlay rounded-llg bg-no-repeat bg-cover bg-center  relative flex items-start justify-end flex-col px-5 py-7 text-white" style="background-image: url('<?php echo $item['public_bg_image']; ?>'); height: 220px; width: 218px;">
                                            <h1 class="text-2xl font-semibold"><?php echo $item['name']; ?></h1>
                                            <div class="flex flex-row items-center">
                                                <span class="text-sm font-medium mr-2">Submit related task</span>
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        


                                    </div>
                                    <div id="work-hour" class="flex-col gap-y-6 hidden mb-8 tab-content">
                                        <ul class="flex flex-col w-full text-sm">
                                            <li class="flex flex-row items-center justify-between font-medium text-base">
                                                <span>Day</span>
                                                <span>Hours</span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between text-ubuy-secondary border-dashed border-b py-2">
                                                <span>Monday</span>
                                                <span>8am - 4pm</span>
                                            </li>
                                            <li class="flex flex-row items-center justify-between text-ubuy-secondary border-dashed border-b py-2">
                                                <span>Tuesday</span>
                                                <span>8am - 4pm</span>
                                            </li>

                                            <li class="flex flex-row items-center justify-between text-ubuy-secondary border-dashed border-b py-2">
                                                <span>Wednesday</span>
                                                <span>8am - 4pm</span>
                                            </li>

                                            <li class="flex flex-row items-center justify-between text-ubuy-secondary border-dashed border-b py-2">
                                                <span>Thursday</span>
                                                <span>8am - 4pm</span>
                                            </li>

                                            <li class="flex flex-row items-center justify-between text-ubuy-secondary border-dashed border-b py-2">
                                                <span>Friday</span>
                                                <span>8am - 4pm</span>
                                            </li>

                                            <li class="flex flex-row items-center justify-between text-ubuy-secondary border-dashed border-b py-2">
                                                <span>Saturday</span>
                                                <span>8am - 4pm</span>
                                            </li>

                                            <li class="flex flex-row items-center justify-between text-ubuy-secondary border-dashed border-b py-2">
                                                <span>Sunday</span>
                                                <span>Closed</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex-2 relative top-40 mt-5" id="portfolio-review-tab">
                            <div class="bg-white rounded-llg shadow-card">
                                <div class="border-b border-ubuy-gray200  overflow-y-visible overflow-x-auto h-20 w-full flex flex-col items-start">
                                    <div class="flex flex-row items-center justify-start flex-nowrap h-full sm:max-w-fttx lg:w-full font-medium">
                                        <button onclick="openTabOtherers(event, 'portfolio')" class="h-0 pt-0 px-7 pb-2 tab-menu-item tab-menu-active focus:outline-none whitespace-nowrap">
                                            Portfolio
                                        </button>
                                        <button onclick="openTabOtherers(event, 'reviews')" class="h-0 pt-0 px-7 pb-2 tab-menu-item focus:outline-none whitespace-nowrap">
                                            Reviews
                                        </button>
                                    </div>
                                </div>

                                <div class="p-5 mt-5">
                                    <div id="portfolio" class="flex flex-row flex-wrap gap-4 mb-8 tab-content">


                                        <?php foreach ($pub['portfolio'] as $item) { ?>
                                            <div class="rounded-llg bg-no-repeat bg-cover bg-center how-hero relative flex items-start justify-end flex-col px-5 py-7 text-white" style="background-image: url('<?php echo $item['public_url']; ?>'); height: 172px; width: 220px;">
                                                <h1 class="text-sm font-semibold "><?php echo $item['caption']; ?></h1>
                                                <span class="text-xs "><?php echo ucfirst($pub['last_name']).' '.ucfirst($pub['first_name'])[0]; ?>.</span>
                                            </div>
                                        <?php } ?>                                   
                                        

                                    </div>
                                    <div id="reviews" class="flex-col gap-y-6 hidden mb-8 tab-content">

                                        <table class="table-auto text-secondary font-normal text-xxs w-full">
                                            <thead>
                                                <tr class="border-b border-gray-200">
                                                    <th class="text-left xl:w-40 w-36 p-5">Date</th>
                                                    <th class="text-left xl:w-40 w-36 py-5 pr-5 md:pl-0 pl-5">Customer Info</th>
                                                    <th class="text-left xl:w-28 w-24 py-5 pr-5">Location</th>
                                                    <th class="text-center xl:w-36 w-32 py-5 pr-5">Ratings</th>
                                                    <th class="text-left py-5 pr-5 xl:w-60 w-72">Review</th>
                                                </tr>
                                            </thead>
                                            <tbody class="h-80 overflow-y-auto">

                                            <?php 
                                                foreach($pub['ratings'] as $item){ 
                                            ?>
                                            
                                                <tr class="border-b border-gray-200 cursor-pointer hover:bg-ubuy-gray400">
                                                    <td class="text-left w-40 p-5 xl:align-top"><?php echo date('l M j, Y', strtotime($item['pivot']['created_at'])); ?></td>
                                                    <td class="text-left w-40 py-5 pr-5 xl:align-top"><?php echo $item['last_name'].' '.$item['first_name'][0]; ?>.</td>
                                                    <td class="text-left w-28 py-5 pr-5 xl:align-top"><?php echo $item['city']; ?></td>
                                                    <td class="text-center w-36 py-5 pr-5 xl:align-top">
                                                        <div class="ratings text-xs xl:text-sm">
                                                            <div class="empty-stars mx-auto"></div>
                                                            <!-- Add the ratings percentage as the width -->
                                                            <?php 
                                                                $rate = ($item['pivot']['rating']*100)/5;
                                                            ?>
                                                            <div class="full-stars" style="width:<?php echo $rate; ?>%"></div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left py-5 pr-5 text-ubuy-secondary">
                                                        <!-- <h1 class="text-sm font-medium">Highly Recommended Artisan</h1> -->
                                                        <p class="text-xxs">
                                                            <?php echo $item['pivot']['comment']; ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                            
                                            <?php } ?>
                                                

                                                <tr>
                                                    <td colspan="7" class="text-center">
                                                        <button class="text-ubuy-blue py-2">
                                                            Load More
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>









                
            </div>
        </section>
        <section class="my-40 hidden">
            <div class="wrapper mx-auto">
                <div class="similar-pro-slider relative">
                <div class="splide__track min-w-ttft">
                    <div class="flex flex-row max-w-6xl mx-auto splide__list">
                        <div class="splide__slide">
                            <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-8 flex flex-col items-center justify-center" style="width: 334px;">
                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center">
                                        <div class="w-16 h-16 bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('assets/images/profile.png');"></div>
                                        <div class="flex flex-col text-ubuy-black">
                                            <h2 class="text-2xl font-medium ">
                                                Dwayne Alade
                                            </h2>
                                            <h3 class="text-base">
                                                House Cleaner
                                            </h3>
                                            <div class="flex flex-row items-center">
                                                <div class="flex flex-row items-center">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                </div>
                                                <span class="text-sm ml-1.5">
                                                    (15)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row w-full justify-between my-3">
                                        <div class="flex flex-row items-center justify-center">
                                            <span class="mr-2">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                        stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            <span class="text-tinyer">Identity Verified</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-center mx-2">
                                            <span class="mr-2">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                        stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            <span class="text-tinyer">Phone Verified</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-center">
                                            <span class="mr-2">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                        stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            <span class="text-tinyer">Email Verified</span>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border-color:rgba(17, 154, 226, 0.4); width: 248px;" class="my-5" />

                                <div class="flex flex-col items-center">
                                    <h5 class="text-ubuy-inactive font-semibold text-base text-center mb-2.5">Latest Review</h5>
                                    <p class="text-center text-sm text-ubuy-secondary mb-6">
                                        “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                                    </p>
                                    <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2">
                                        Contact Pro
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-8 flex flex-col items-center justify-center" style="width: 334px;">
                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center">
                                        <div class="w-16 h-16 bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('assets/images/profile.png');"></div>
                                        <div class="flex flex-col text-ubuy-black">
                                            <h2 class="text-2xl font-medium ">
                                                Dwayne Alade
                                            </h2>
                                            <h3 class="text-base">
                                                House Cleaner
                                            </h3>
                                            <div class="flex flex-row items-center">
                                                <div class="flex flex-row items-center">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                </div>
                                                <span class="text-sm ml-1.5">
                                                    (15)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row w-full justify-between my-3">
                                        <div class="flex flex-row items-center justify-center">
                                            <span class="mr-2">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                        stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            <span class="text-tinyer">Identity Verified</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-center mx-2">
                                            <span class="mr-2">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                        stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            <span class="text-tinyer">Phone Verified</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-center">
                                            <span class="mr-2">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                        stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            <span class="text-tinyer">Email Verified</span>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border-color:rgba(17, 154, 226, 0.4); width: 248px;" class="my-5" />

                                <div class="flex flex-col items-center">
                                    <h5 class="text-ubuy-inactive font-semibold text-base text-center mb-2.5">Latest Review</h5>
                                    <p class="text-center text-sm text-ubuy-secondary mb-6">
                                        “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                                    </p>
                                    <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2">
                                        Contact Pro
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-8 flex flex-col items-center justify-center" style="width: 334px;">
                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center">
                                        <div class="w-16 h-16 bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('assets/images/profile.png');"></div>
                                        <div class="flex flex-col text-ubuy-black">
                                            <h2 class="text-2xl font-medium ">
                                                Dwayne Alade
                                            </h2>
                                            <h3 class="text-base">
                                                House Cleaner
                                            </h3>
                                            <div class="flex flex-row items-center">
                                                <div class="flex flex-row items-center">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                                    </svg>
                                                </div>
                                                <span class="text-sm ml-1.5">
                                                    (15)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row w-full justify-between my-3">
                                        <div class="flex flex-row items-center justify-center">
                                            <span class="mr-2">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                        stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            <span class="text-tinyer">Identity Verified</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-center mx-2">
                                            <span class="mr-2">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                        stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            <span class="text-tinyer">Phone Verified</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-center">
                                            <span class="mr-2">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                        stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            <span class="text-tinyer">Email Verified</span>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border-color:rgba(17, 154, 226, 0.4); width: 248px;" class="my-5" />

                                <div class="flex flex-col items-center">
                                    <h5 class="text-ubuy-inactive font-semibold text-base text-center mb-2.5">Latest Review</h5>
                                    <p class="text-center text-base text-ubuy-secondary mb-6">
                                        “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                                    </p>
                                    <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2">
                                        Contact Pro
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> 
            </div>
        </section>
        
        <?php require_once 'inc/faq-section.php'; ?>
    </main>
<?php require_once 'inc/home-footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        new Splide('.similar-pro-slider', {
            type: 'loop',
            perPage: 3,
            focus: 'center',
            autoplay: true,
            pauseOnHover: true,
        }).mount();
    });
</script>
    