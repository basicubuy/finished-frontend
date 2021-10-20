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

$singleBid = $init->getSingleProject(isset($_GET['project_id']) ? $_GET['project_id'] : "");
$singleBid = json_decode($singleBid, true);
$singleBid = isset($singleBid['bid'][0]) ? $singleBid['bid'][0] : "";

$customer = $init->getSingleProject(isset($_GET['project_id']) ? $_GET['project_id'] : "");
$customer = json_decode($customer, true);
$customer = isset($customer['customer'][0]) ? $customer['customer'][0] : "";
?>
        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex w-full flex-row lg:my-7 my-4 lg:pl-7 pl-4 lg:pr-10 pr-4 gap-x-6">
                    <div class="w-full flex sm:flex-row flex-col gap-4">
                        <div class="flex flex-col w-full gap-y-4 items-stretch">
                            <div class="sm:w-full flex-1">
                                <div class="relative w-full bg-white rounded-llg flex flex-col justify-start p-5 min-h-220">
                                    <h1 class="mb-5 text-base font-medium text-ubuy-black">Task Information</h1>
                                    <?php 
                                        switch($singleProject['status']){
                                            case 0:
                                                $projectStatus = "Pending";
                                                $projectColor = "bg-ubuy-purple200";
                                            break;
                                            case 1:
                                                $projectStatus = "Open";
                                                $projectColor = "bg-ubuy-yellow200";
                                            break;
                                            case 2:
                                                $projectStatus = "In progress";
                                                $projectColor = "bg-ubuy-blue";
                                            break;
                                            case 3:
                                                $projectStatus = "Completed";
                                                $projectColor = "bg-ubuy-positiveDefault";
                                            break;
                                            case 4:
                                                $projectStatus = "Paused";
                                                $projectColor = "bg-ubuy-secondary";
                                            break;
                                            case 5:
                                                $projectStatus = "Paused";
                                                $projectColor = "bg-ubuy-black";
                                            break;
                                        };
                                    ?>
                                    <button class="absolute top-4 right-4 rounded-md text-white <?php echo $projectColor; ?> py-1 px-4 text-xxxs"><?php echo $projectStatus; ?></button>
                                    <h2 class="mb-2.5 text-2xl text-ubuy-blue"><?php echo ucfirst($singleProject['project_title']); ?></h2>
                                    <p class="text-sm font-normal text-left w-11/12">
                                    <?php echo ucfirst($singleProject['project_message']); ?>
                                    </p>
                                    <div class="mt-4">
                                        <span class="text-ubuy-gray500 text-base">Budget:</span>
                                        <span class="text-lg text-ubuy-black">N <?php echo number_format($singleProject['budget'], 2); ?></span>
                                    </div>
                                    <div>
                                        <h2 class="text-lg font-medium text-ubuy-secondary mb-3">Skills & Expertise:</h2>
                                        <div class="flex flex-row flex-wrap gap-1">

                                        <?php 
                                            $skills = json_decode($singleProject['skills_and_expertise'], true);
                                            if (is_array($skills) || is_object($skills)){
                                                foreach($skills as $item){ ?>
                                                <span class="text-white bg-ubuy-blue rounded-llg text-tiny py-1 px-2"><?php echo $item; ?></span>
                                        <?php }}else{ ?>
                                            <span class="text-white bg-ubuy-blue rounded-llg text-tiny py-1 px-2">No preferred skill set.</span>
                                        <?php } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative bg-white rounded-llg sm:flex hidden flex-col <?php echo !empty($singleBid['bid']) ? "justify-between" : ""; ?>  items-center p-5 text-ubuy-black flex-1">
                                <h1 class="text-left self-start text-base mb-5">Bid Information</h1>
                                <!-- Active Bid -->

                                <?php
                                   if (!empty($singleBid)) {
                                ?>
                                <div class="w-full">
                                    <span class="absolute top-4 right-4 rounded-md text-white bg-ubuy-positiveDefault py-1 px-4 text-xxxs">Active</span>

                                    <p class="text-sm">
                                        <?php echo $singleBid['bid_message']; ?>
                                    </p>
                                    <div class="flex flex-col justify-start w-full mt-6">
                                        <div class="text-xl">
                                            <span class="text-ubuy-gray500">Amount:</span>
                                            <span class="text-ubuy-black">N  <?php echo number_format($singleBid['bid_amount'], 2); ?></span>
                                        </div>
                                        <div class="text-ubuy-gray500 text-lg">
                                            <span>Duration:</span>
                                            <span>
                                                <?php 
                                                    $dt=$customer['created_at'];
                                                    
                                                    $timeZone = 'UTC';
                                                    date_default_timezone_set($timeZone); 

                                                    $interval = date_diff(date_create($dt), date_create());
                                                    $out = $interval->format("%d");
                                                    echo $out;
                                                ?> Days</span>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                   }else{
                                ?>
                                    <div>

                                    <div class="text-xl text-ubuy-inactive py-10 px-8 text-center">
                                        You havent submited a bid yet 
                                    </div>
                                        
                                    </div>
                                <?php
                                   }
                                ?>

                            </div>
                        </div>

                        <div class="flex sm:hidden flex-col p-5 rounded-llg items-start justify-start bg-white text-ubuy-secondary gap-y-3">
                            <div class="flex sm:hidden flex-row w-full">
                                <div class="w-14 h-14 mr-2">
                                    <img src="assets/images/avatar.png" alt="">
                                </div>
                                <div class="flex flex-col flex-auto relative">
                                    <div class="flex flex-row items-center justify-between w-full">
                                        <span class="text-base font-medium text-ubuy-blue">John Ayomide</span>
                                        <span class="absolute right-4 top-4">
                                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="22" cy="22" r="22" fill="#D0F9CF" fill-opacity="0.5" />
                                                <path
                                                    d="M31 25C31 25.5304 30.7893 26.0391 30.4142 26.4142C30.0391 26.7893 29.5304 27 29 27H17L13 31V15C13 14.4696 13.2107 13.9609 13.5858 13.5858C13.9609 13.2107 14.4696 13 15 13H29C29.5304 13 30.0391 13.2107 30.4142 13.5858C30.7893 13.9609 31 14.4696 31 15V25Z"
                                                    stroke="#1AB759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="flex flex-col items-start justify-start w-full">
                                        <svg width="70" height="14" viewBox="0 0 70 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.68224 8.57072L11.3706 14L6.98868 10.6227L2.62877 14L4.31713 8.57072L0 5.25818H5.36511L6.98931 0L8.63488 5.25818H14L9.68224 8.57072Z" fill="url(#paint0_linear)" />
                                            <path d="M23.6822 8.57072L25.3706 14L20.9887 10.6227L16.6288 14L18.3171 8.57072L14 5.25818H19.3651L20.9893 0L22.6349 5.25818H28L23.6822 8.57072Z" fill="url(#paint1_linear)" />
                                            <path d="M37.6822 8.57072L39.3706 14L34.9887 10.6227L30.6288 14L32.3171 8.57072L28 5.25818H33.3651L34.9893 0L36.6349 5.25818H42L37.6822 8.57072Z" fill="url(#paint2_linear)" />
                                            <path d="M51.6822 8.57072L53.3706 14L48.9887 10.6227L44.6288 14L46.3171 8.57072L42 5.25818H47.3651L48.9893 0L50.6349 5.25818H56L51.6822 8.57072Z" fill="url(#paint3_linear)" />
                                            <path d="M65.6822 8.57072L67.3706 14L62.9887 10.6227L58.6288 14L60.3171 8.57072L56 5.25818H61.3651L62.9893 0L64.6349 5.25818H70L65.6822 8.57072Z" fill="url(#paint4_linear)" />
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="7" y1="0" x2="7" y2="14" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F6F619" />
                                                    <stop offset="1" stop-color="#ECD123" />
                                                </linearGradient>
                                                <linearGradient id="paint1_linear" x1="21" y1="0" x2="21" y2="14" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F6F619" />
                                                    <stop offset="1" stop-color="#ECD123" />
                                                </linearGradient>
                                                <linearGradient id="paint2_linear" x1="35" y1="0" x2="35" y2="14" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F6F619" />
                                                    <stop offset="1" stop-color="#ECD123" />
                                                </linearGradient>
                                                <linearGradient id="paint3_linear" x1="49" y1="0" x2="49" y2="14" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F6F619" />
                                                    <stop offset="1" stop-color="#ECD123" />
                                                </linearGradient>
                                                <linearGradient id="paint4_linear" x1="63" y1="0" x2="63" y2="14" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F6F619" />
                                                    <stop offset="1" stop-color="#ECD123" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <div class="flex flex-row text-tinyer text-ubuy-secondary mt-2">
                                            <span class="mr-1">Last seen:</span>
                                            <span class=""> 2hrs ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 sm:max-w-xs min-w-thz">
                            <div class="sm:flex hidden flex-col items-center px-5 pt-5 bg-white rounded-llg pb-6 max-w-xs w-full">
                                <img src="<?php echo $customer['public_url']=='http://new.ubuy.ng/storage' ? $customer['public_url'] : "assets/images/ubuy_logo.svg" ?>" alt="avatar" class="rounded-full w-32 h-32" />
                                <div class="flex flex-row items-center">
                                    <span><?php echo ucfirst($customer['last_name']); ?> <?php echo ucfirst($customer['first_name']); ?></span>
                                    <?php if($customer['verify_confirm'] == 2){?>
                                    <span>
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.2705 9.22324C19.6 8.67081 20.4 8.67081 20.7295 9.22324C21.0012 9.67877 21.6192 9.77666 22.0184 9.42738C22.5024 9.00379 23.2633 9.25103 23.406 9.87824C23.5236 10.3954 24.0811 10.6795 24.5687 10.4707C25.1599 10.2174 25.8072 10.6877 25.749 11.3282C25.7011 11.8565 26.1436 12.2989 26.6718 12.251C27.3123 12.1928 27.7826 12.8401 27.5293 13.4313C27.3205 13.9189 27.6046 14.4764 28.1218 14.594C28.749 14.7367 28.9962 15.4976 28.5726 15.9816C28.2233 16.3808 28.3212 16.9988 28.7768 17.2705C29.3292 17.6 29.3292 18.4 28.7768 18.7295C28.3212 19.0012 28.2233 19.6192 28.5726 20.0184C28.9962 20.5024 28.749 21.2633 28.1218 21.406C27.6046 21.5236 27.3205 22.0811 27.5293 22.5687C27.7826 23.1599 27.3123 23.8072 26.6718 23.749C26.1436 23.7011 25.7011 24.1436 25.749 24.6718C25.8072 25.3123 25.1599 25.7826 24.5687 25.5293C24.0811 25.3205 23.5236 25.6046 23.406 26.1218C23.2633 26.749 22.5024 26.9962 22.0184 26.5726C21.6192 26.2233 21.0012 26.3212 20.7295 26.7768C20.4 27.3292 19.6 27.3292 19.2705 26.7768C18.9988 26.3212 18.3808 26.2233 17.9816 26.5726C17.4976 26.9962 16.7367 26.749 16.594 26.1218C16.4764 25.6046 15.9189 25.3205 15.4313 25.5293C14.8401 25.7826 14.1928 25.3123 14.251 24.6718C14.2989 24.1436 13.8565 23.7011 13.3282 23.749C12.6877 23.8072 12.2174 23.1599 12.4707 22.5687C12.6795 22.0811 12.3954 21.5236 11.8782 21.406C11.251 21.2633 11.0038 20.5024 11.4274 20.0184C11.7767 19.6192 11.6788 19.0012 11.2232 18.7295C10.6708 18.4 10.6708 17.6 11.2232 17.2705C11.6788 16.9988 11.7767 16.3808 11.4274 15.9816C11.0038 15.4976 11.251 14.7367 11.8782 14.594C12.3954 14.4764 12.6795 13.9189 12.4707 13.4313C12.2174 12.8401 12.6877 12.1928 13.3282 12.251C13.8564 12.2989 14.2989 11.8564 14.251 11.3282C14.1928 10.6877 14.8401 10.2174 15.4313 10.4707C15.9189 10.6795 16.4764 10.3954 16.594 9.87824C16.7367 9.25103 17.4976 9.00379 17.9816 9.42738C18.3808 9.77666 18.9988 9.67877 19.2705 9.22324Z"
                                                fill="#119AE2" />
                                            <path d="M24 15L18.5 20.5L16 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <?php } ?>
                                </div>

                                <div class="flex flex-row items-center justify-center w-full">
                                    <div class="flex flex-col justify-center items-center mr-4">
                                        <span class="text-xs text-ubuy-secondary">0</span>
                                        <span class="text-tiny text-ubuy-inactive">Jobs Posted</span>
                                    </div>
                                    <div id="profile-rating" class="flex flex-col items-center px-4 relative">
                                        <span class="text-xs text-ubuy-secondary">0</span>
                                        <span class="text-tiny text-ubuy-inactive">Pros Hired</span>
                                    </div>
                                    <div class="flex flex-col justify-center items-center ml-4">
                                        <span class="text-xs text-ubuy-secondary"><?php echo date('M Y', strtotime($customer['created_at'])); ?></span>
                                        <span class="text-tiny text-ubuy-inactive">Date Joined</span>
                                    </div>
                                </div>
                                <div class="flex flex-row w-full justify-between my-3">
                                    <div class="flex flex-row items-center justify-center">
                                        <?php if($customer['is_phone_verified']!=0 || $customer['email_verified_at']!=null){ ?>
                                        <span class="mr-2">
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                    stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="text-tinyer">Identity Verified</span>
                                        <?php }else{ echo '<span class="text-tinyer text-red-500">Identity Not Verified</span>'; }?>
                                    </div>
                                    <div class="flex flex-row items-center justify-center">
                                    <?php if($customer['is_phone_verified']!=0){ ?>
                                        <span class="mr-2">
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                    stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="text-tinyer text-red-500">Phone Verified</span>
                                        <?php }else{ echo '<span class="text-tinyer text-red-500">| Phone Not Verified</span>'; }?>
                                    </div>
                                    <div class="flex flex-row items-center justify-center">
                                    <?php if($customer['email_verified_at']!=null){ ?>
                                        <span class="mr-2">
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                    stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="text-tinyer text-red-500">Email Verified</span>
                                        <?php }else{ echo '<span class="text-tinyer text-red-500">| Email Not Verified</span>'; }?>
                                    </div>
                                </div>
                                <div class="my-3 flex flex-row justify-between items-center text-xs text-ubuy-secondary w-full">
                                    <div class="flex flex-row items-center justify-between ">
                                        <span class="mr-1">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14 6.66675C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66675C2 5.07545 2.63214 3.54933 3.75736 2.42411C4.88258 1.29889 6.4087 0.666748 8 0.666748C9.5913 0.666748 11.1174 1.29889 12.2426 2.42411C13.3679 3.54933 14 5.07545 14 6.66675Z"
                                                    stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8 8.66675C9.10457 8.66675 10 7.77132 10 6.66675C10 5.56218 9.10457 4.66675 8 4.66675C6.89543 4.66675 6 5.56218 6 6.66675C6 7.77132 6.89543 8.66675 8 8.66675Z" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span>Location</span>
                                    </div>
                                    <span><?php echo $customer['city']==null ? "No valid" : $customer['city']; ?></span>
                                </div>
                            </div>

                            <div class="flex flex-col gap-y-4 sm:max-w-xs w-full">
                                <a href="milestone.php?project=<?php echo ucfirst($singleProject['project_title']); ?>&project_id=<?php echo ucfirst($singleProject['id']); ?>">
                                    <div class="bg-white flex flex-row items-center justify-between rounded-llg px-3 py-4 w-full">
                                        <span class="text-base font-medium text-ubuy-black">Milestones</span>
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                                <?php 
                                if (!empty($singleBid)) { ?>
                                <a href="#">
                                    <div class="bg-white flex flex-row items-center justify-between rounded-llg px-3 py-4">
                                        <span>
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="36" height="36" rx="18" fill="#CFEBF9" fill-opacity="0.5" />
                                                <path
                                                    d="M22.6168 9.75252C22.8552 9.5141 23.1383 9.32497 23.4498 9.19594C23.7613 9.0669 24.0952 9.00049 24.4324 9.00049C24.7696 9.00049 25.1035 9.0669 25.415 9.19594C25.7265 9.32497 26.0095 9.5141 26.248 9.75252C26.4864 9.99095 26.6755 10.274 26.8046 10.5855C26.9336 10.897 27 11.2309 27 11.5681C27 11.9053 26.9336 12.2392 26.8046 12.5507C26.6755 12.8622 26.4864 13.1453 26.248 13.3837L13.9928 25.6388L9 27.0005L10.3617 22.0077L22.6168 9.75252Z"
                                                    stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </span>
                                        <span class="text-sm font-medium text-ubuy-black">Edit Task</span>
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                                <!-- Display only when active Bid -->
                                <button onclick="onOpenPopup('cancel-bid')" class="bg-white flex flex-row items-center justify-between rounded-llg px-3 py-4">
                                    <span>
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.1" width="36" height="36" rx="18" fill="#FF6262" />
                                            <path d="M18 28C23.5228 28 28 23.5228 28 18C28 12.4772 23.5228 8 18 8C12.4772 8 8 12.4772 8 18C8 23.5228 12.4772 28 18 28Z" stroke="#FB4E4E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21 15L15 21" stroke="#FB4E4E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15 15L21 21" stroke="#FB4E4E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium text-ubuy-black">Cancel Bid</span>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                                <?php } ?>
                                <?php  if(empty($singleBid)) { ?> 
                                <!-- Display only when no Bid submitted -->
                                <button onclick="onOpenPopup('submit-bid')" class="bg-white sm:flex hidden flex-row items-center justify-between rounded-llg px-3 py-4">
                                    <span class="text-sm font-medium text-ubuy-black">Submit Bid</span>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                                <?php } ?>
                            </div>

                            <div class="relative bg-white rounded-llg sm:hidden flex flex-col justify-between items-center p-5 text-ubuy-black flex-1">
                                <h1 class="text-left self-start text-base mb-5">Bid Information</h1>
                                <!-- Active Bid -->
                                <div>
                                    <span class="absolute top-4 right-4 rounded-md text-white bg-ubuy-positiveDefault py-1 px-4 text-xxxs">Active</span>

                                    <p class="text-xxs">
                                        at enim culpa laboris. Cillum in laborum voluptate minim. Consectetur cupidatat adipisicing ad anim. Ex est irure sint aute mollit laborum duis enim proident elit pariatur. Do sint irure quis sit anim velit. Fugiat ullamco laborum reprehenderit nostrud eu duis
                                        do reprehenderit. Irure eu exercitation magna laborum id aliqua aliquip. Do reprehenderit mollit sint ex do dolore irure nisi nisi. Proident ea mollit tempor id ea minim enim eu sit magna anim. Occaecat voluptate quis adipisicing tempor esse ipsum enim ut
                                        irure.
                                        Cupidatat officia ullamco ipsum enim voluptate aliquip commodo laborum adipisicing pariatur. Qui dolore quis do exercitation culpa. Officia voluptate sint amet voluptate veniam aliqua. Ea sit aliqua duis magna nulla aute labore ipsum velit. Lorem amet anim in
                                        magna qui. Culpa eiusmod do consequat e
                                    </p>
                                    <div class="flex flex-col justify-start w-full mt-6 text-xs text-ubuy-gray500">
                                        <div>
                                            <span>Amount:</span>
                                            <span class="text-ubuy-black">$40,000</span>
                                        </div>
                                        <div>
                                            <span>Duration:</span>
                                            <span>25 Days</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-row text-sm font-semibold justify-between w-3/5 mx-auto mt-6">
                                        <button class="rounded-md py-1 px-3 shadow-card bg-ubuy-blue text-white">Edit Bid</button>
                                        <button onclick="onOpenPopup('cancel-bid')" class="rounded-md py-1 px-3 shadow-card bg-white text-ubuy-negativeDefault border border-ubuy-negativeDefault">Cancel Bid</button>
                                    </div>
                                </div>

                                <!-- <div class="text-xl text-ubuy-inactive py-10 px-8 text-center">
                                    You havent submited a bid yet 
                                </div> -->

                            </div>

                            <?php 
                            if (!empty($singleBid)) { ?> 
                            <!-- Display only when no Bid submitted -->
                            <a href="./submit-bid-mobile.html" class="sm:hidden block w-full rounded-llg  bg-ubuy-blue text-white py-4 px-6 text-center">
                                Submit Bid
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Submit bid Popup -->
<div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6" id="submit-bid" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
    <div class="flex flex-col items-center justify-around md:py-7.5 py-6 md:px-10 px-6 rounded-3xl shadow bg-white relative max-w-xl w-full">
        <button class="absolute right-5 top-5" onclick="onClosePopup('submit-bid')">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <h1 class="font-semibold text-lg text-ubuy-black text-left w-full mb-6">Submit Bid</h1>
      <!-- <form id="submit-bid"> -->
        <div class="flex flex-col items-center justify-center font-medium text-sm">
            <div class="w-full mb-10 flex flex-row gap-x-5">
                <div class="w-full">
                    <label for="amount">Amount</label>
                    <input type="number" name="bid_amount" id="bid_amount" class="mt-2 rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full" />
                </div>
                <div class="w-full">
                    <label for="task-duration">Task Duration (Days)</label>
                    <input type="date" name="due_date" id="due_date" class="mt-2 rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full" />
                </div>
            </div>
            <div class="w-full mb-5">
                <label for="message">Message</label>
                <textarea name="bid_message" id="bid_message" rows="6" class="mt-2 rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full resize-none"></textarea>
            </div>
            <div class="flex flex-row w-full items-start rounded-md bg-yellow-200 py-2.5 px-3 text-ubuy-secondary opacity-75">
                <span class="mr-2"> Note:</span>
                <p class="text-xxs ">
                    <span class="font-bold text-black"><?php echo (0.05 * $singleProject['budget']) / 100; ?></span> U-Credit coins will be deducted from your account on successful bid submission.
                </p>
            </div>
        </div>
        <div class="mt-8 self-start">
          <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $userData['id']; ?>" />
          <input type="hidden" name="project_id" id="project_id" value="<?php echo $_GET['project_id']; ?>" />
          <input type="hidden" name="project_name" id="project_name" value="<?php echo $singleProject['project_title']; ?>" />
          <input type="hidden" name="cus_id" id="cus_id" value="<?php echo empty($customer) ? "" : $customer['id']; ?>" />
          <?php if($userData['ucoin'] >= (0.05 * $singleProject['budget']) / 100){ ?>
            <button type="submit" id="submitBidBtn" class="text-sm text-white rounded-lg bg-ubuy-blue py-4 px-5 font-semibold shadow-card">
                Submit
            </button>
          <?php }else{ ?>
            <span class="text-xxxs">You do not have enough U-Credit coins to bid for this task. <a href="u-coin.php" class="text-green-600 font-semibold text-xxxs">Click here to purchase a coin.</a></span>
          <?php } ?>
        </div>
      <!-- </form> -->
    </div>
</div>
<?php
if($_SESSION['user_role'] == 'customer'){
    require_once 'inc/customer-footer.php';
}elseif($_SESSION['user_role'] == 'pro'){
    require_once 'inc/pro-footer.php';
}
?>

<script type="text/javascript">
    $(document).ready(function(){
      $("#submitBidBtn").on("click", function(e){
        //   e.preventDefault();                
          document.getElementById("submitBidBtn").disabled = true;
          $("#submitBidBtn").html("Please wait...");
          var url = "endpoints/pro_bid.php";
          $.ajax({
              type: "POST",
              url: url,
              dataType: 'json',
              data: {
                bid_amount : $("#bid_amount").val(),
                due_date : $("#due_date").val(),
                bid_message : $("#bid_message").val(),
                pro_id : $("#pro_id").val(),
                project_id : $("#project_id").val(),
                cus_id : $("#cus_id").val(),
              },
              success: function(data)
              {
                //   console.log(data);
                  if(data.error == "Validation Exception"){
                      toastr.error(data.error_message, "Error:", {timeOut: 8000});
                      document.getElementById("submitBidBtn").disabled = false;
                      $("#submitBidBtn").html("Submit");
                  }else{
                      toastr.success("Bid sent!", "Success:", {timeOut: 7000});
                      setTimeout(function(){
                        //   window.location.reload();
                        window.location.href = "milestone.php?project="+$("#project_name").val()+"&project_id=" + $("#project_id").val()
                      }, 3000);
                  }
              }
          });
          return false;
      });
    });
</script>
