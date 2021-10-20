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
?>
        <main class="flex-1 overflow-y-auto overflow-x-hidden pt-24 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="fixed w-full h-56 bg-ubuy-blue xl:-ml-5 bg-no-repeat bg-cover bg-center flex items-center justify-center" style="background-image: url();">
                <span class="text-9xl text-white text-center -ml-64 font-bold">Cover Photo </span>
            </div>
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full ">
                <div class=" mb-36 w-full relative">
                    <span class="right-4 bottom-0 image-upload">
                        <label for="file-input">    
                            <button class="absolute right-10 top-5 rounded-llg border border-ubuy-gray200 p-4 flex flex-row items-center" style="background: rgba(0, 0, 0, 0.2);">
                                <span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.75 4.6875C5.71875 4.6875 4.875 5.53125 4.875 6.5625C4.875 7.59375 5.71875 8.4375 6.75 8.4375C7.78125 8.4375 8.625 7.59375 8.625 6.5625C8.625 5.53125 7.78125 4.6875 6.75 4.6875Z" fill="white" />
                                        <path
                                            d="M11.0625 2.8125H9.5625L8.3625 1.275C8.2875 1.18125 8.175 1.125 8.0625 1.125H5.4375C5.325 1.125 5.2125 1.18125 5.1375 1.275L3.9375 2.8125C3.9375 2.8125 3.31875 2.8125 2.8125 2.8125V2.4375C2.8125 2.23125 2.64375 2.0625 2.4375 2.0625H1.3125C1.10625 2.0625 0.9375 2.23125 0.9375 2.4375V2.8125C0.4125 2.8125 0 3.225 0 3.75V9.75C0 10.275 0.4125 10.6875 0.9375 10.6875H11.0625C11.5875 10.6875 12 10.275 12 9.75V3.75C12 3.225 11.5875 2.8125 11.0625 2.8125ZM6.75 9.5625C5.1 9.5625 3.75 8.2125 3.75 6.5625C3.75 4.9125 5.1 3.5625 6.75 3.5625C8.4 3.5625 9.75 4.9125 9.75 6.5625C9.75 8.2125 8.4 9.5625 6.75 9.5625Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span class="text-white ml-3 font-semibold text-sm">
                                    Change Cover
                                </span>
                            </button>
                        </label>
                        <!-- <form action="" method="PUT" name="uploadPic" id="uploadPic" enctype="multipart/form-data">
                            <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
                            <input id="file-input" type="file" onChange="updateCover(this)" />
                        <!-- </form> -->
                    </span>
                    <!-- <input id='coverPhoto' type='file' name='coverPhoto' hidden/>
                    <button id="cover-photo" onclick="openDialog()" class="absolute right-10 top-5 rounded-llg border border-ubuy-gray200 p-4 flex flex-row items-center" style="background: rgba(0, 0, 0, 0.2);">
                        <span>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.75 4.6875C5.71875 4.6875 4.875 5.53125 4.875 6.5625C4.875 7.59375 5.71875 8.4375 6.75 8.4375C7.78125 8.4375 8.625 7.59375 8.625 6.5625C8.625 5.53125 7.78125 4.6875 6.75 4.6875Z" fill="white" />
                                <path
                                    d="M11.0625 2.8125H9.5625L8.3625 1.275C8.2875 1.18125 8.175 1.125 8.0625 1.125H5.4375C5.325 1.125 5.2125 1.18125 5.1375 1.275L3.9375 2.8125C3.9375 2.8125 3.31875 2.8125 2.8125 2.8125V2.4375C2.8125 2.23125 2.64375 2.0625 2.4375 2.0625H1.3125C1.10625 2.0625 0.9375 2.23125 0.9375 2.4375V2.8125C0.4125 2.8125 0 3.225 0 3.75V9.75C0 10.275 0.4125 10.6875 0.9375 10.6875H11.0625C11.5875 10.6875 12 10.275 12 9.75V3.75C12 3.225 11.5875 2.8125 11.0625 2.8125ZM6.75 9.5625C5.1 9.5625 3.75 8.2125 3.75 6.5625C3.75 4.9125 5.1 3.5625 6.75 3.5625C8.4 3.5625 9.75 4.9125 9.75 6.5625C9.75 8.2125 8.4 9.5625 6.75 9.5625Z"
                                    fill="white" />
                            </svg>
                        </span>
                        <span class="text-white ml-3 font-semibold text-sm">
                            Change Cover
                        </span>
                    </button> -->
                </div>
                <div class="flex w-full sm:flex-row flex-col items-start lg:my-7 my-4 lg:pl-7 lg:pr-10 px-4 gap-4 z-10 relative ">
                    <div class="bg-white rounded-llg w-full flex flex-col pb-20" style="width: 278px">
                        <div class="flex flex-col items-center px-5 pt-5 pb-6">
                            <div class="relative">
                                <img src="<?php echo $userData['public_url'] != 'http://new.ubuy.ng/storage' ? $userData['public_url'] : "assets/images/ubuy_logo.svg" ?>" alt="avatar" class="rounded-full w-32 h-32" style="border: 2px solid var(--ubuy-blue);" />
                                <span class="absolute right-4 bottom-0 image-upload">
                                    <label for="file-input">    
                                        <svg class="image-upload" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="1" y="1" width="26" height="26" rx="13" fill="#119AE2" />
                                            <path d="M14.75 12.6875C13.7188 12.6875 12.875 13.5312 12.875 14.5625C12.875 15.5937 13.7188 16.4375 14.75 16.4375C15.7813 16.4375 16.625 15.5937 16.625 14.5625C16.625 13.5312 15.7813 12.6875 14.75 12.6875Z" fill="white" />
                                            <path
                                                d="M19.0625 10.8125H17.5625L16.3625 9.275C16.2875 9.18125 16.175 9.125 16.0625 9.125H13.4375C13.325 9.125 13.2125 9.18125 13.1375 9.275L11.9375 10.8125C11.9375 10.8125 11.3187 10.8125 10.8125 10.8125V10.4375C10.8125 10.2313 10.6437 10.0625 10.4375 10.0625H9.3125C9.10625 10.0625 8.9375 10.2313 8.9375 10.4375V10.8125C8.4125 10.8125 8 11.225 8 11.75V17.75C8 18.275 8.4125 18.6875 8.9375 18.6875H19.0625C19.5875 18.6875 20 18.275 20 17.75V11.75C20 11.225 19.5875 10.8125 19.0625 10.8125ZM14.75 17.5625C13.1 17.5625 11.75 16.2125 11.75 14.5625C11.75 12.9125 13.1 11.5625 14.75 11.5625C16.4 11.5625 17.75 12.9125 17.75 14.5625C17.75 16.2125 16.4 17.5625 14.75 17.5625Z"
                                                fill="white" />
                                            <rect x="1" y="1" width="26" height="26" rx="13" stroke="white" stroke-width="2" />
                                        </svg>
                                    </label>
                                    <!-- <form action="" method="PUT" name="uploadPic" id="uploadPic" enctype="multipart/form-data">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
                                        <input id="file-input" type="file" onChange="chkFile(this)" />
                                    <!-- </form> -->
                                </span>
                            </div>

                            <div class="flex flex-row items-center">
                                <span class="py-3"><?php echo isset($userData['last_name']) ? ucfirst($userData['last_name']) : "[ Update profile ]"; ?> <?php echo isset($userData['first_name']) ? ucfirst($userData['first_name']) : ""; ?></span>
                                <?php if($userData['verify_confirm'] == 2){?>
                                <span>
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.2705 9.22324C19.6 8.67081 20.4 8.67081 20.7295 9.22324C21.0012 9.67877 21.6192 9.77666 22.0184 9.42738C22.5024 9.00379 23.2633 9.25103 23.406 9.87824C23.5236 10.3954 24.0811 10.6795 24.5687 10.4707C25.1599 10.2174 25.8072 10.6877 25.749 11.3282C25.7011 11.8565 26.1436 12.2989 26.6718 12.251C27.3123 12.1928 27.7826 12.8401 27.5293 13.4313C27.3205 13.9189 27.6046 14.4764 28.1218 14.594C28.749 14.7367 28.9962 15.4976 28.5726 15.9816C28.2233 16.3808 28.3212 16.9988 28.7768 17.2705C29.3292 17.6 29.3292 18.4 28.7768 18.7295C28.3212 19.0012 28.2233 19.6192 28.5726 20.0184C28.9962 20.5024 28.749 21.2633 28.1218 21.406C27.6046 21.5236 27.3205 22.0811 27.5293 22.5687C27.7826 23.1599 27.3123 23.8072 26.6718 23.749C26.1436 23.7011 25.7011 24.1436 25.749 24.6718C25.8072 25.3123 25.1599 25.7826 24.5687 25.5293C24.0811 25.3205 23.5236 25.6046 23.406 26.1218C23.2633 26.749 22.5024 26.9962 22.0184 26.5726C21.6192 26.2233 21.0012 26.3212 20.7295 26.7768C20.4 27.3292 19.6 27.3292 19.2705 26.7768C18.9988 26.3212 18.3808 26.2233 17.9816 26.5726C17.4976 26.9962 16.7367 26.749 16.594 26.1218C16.4764 25.6046 15.9189 25.3205 15.4313 25.5293C14.8401 25.7826 14.1928 25.3123 14.251 24.6718C14.2989 24.1436 13.8565 23.7011 13.3282 23.749C12.6877 23.8072 12.2174 23.1599 12.4707 22.5687C12.6795 22.0811 12.3954 21.5236 11.8782 21.406C11.251 21.2633 11.0038 20.5024 11.4274 20.0184C11.7767 19.6192 11.6788 19.0012 11.2232 18.7295C10.6708 18.4 10.6708 17.6 11.2232 17.2705C11.6788 16.9988 11.7767 16.3808 11.4274 15.9816C11.0038 15.4976 11.251 14.7367 11.8782 14.594C12.3954 14.4764 12.6795 13.9189 12.4707 13.4313C12.2174 12.8401 12.6877 12.1928 13.3282 12.251C13.8564 12.2989 14.2989 11.8564 14.251 11.3282C14.1928 10.6877 14.8401 10.2174 15.4313 10.4707C15.9189 10.6795 16.4764 10.3954 16.594 9.87824C16.7367 9.25103 17.4976 9.00379 17.9816 9.42738C18.3808 9.77666 18.9988 9.67877 19.2705 9.22324Z" fill="#119AE2"></path>
                                        <path d="M24 15L18.5 20.5L16 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <?php } ?>
                            </div>
                            <div class="flex flex-row items-center justify-center w-full">
                                <div class="flex flex-col justify-center items-center mr-4">
                                    <span class="text-xs text-ubuy-secondary">0</span>
                                    <span class="text-tiny text-ubuy-inactive">Jobs Done</span>
                                </div>
                                <div id="profile-rating" class="flex flex-col justify-center px-4 relative">
                                    <div class="text-xs text-ubuy-secondary text-center flex flex-row items-center justify-center">
                                        <small>0.0</small>
                                        <span>
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0L4.89806 2.76393H7.80423L5.45308 4.47214L6.35114 7.23607L4 5.52786L1.64886 7.23607L2.54692 4.47214L0.195774 2.76393H3.10194L4 0Z" fill="#25282B"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <span class="text-tiny text-ubuy-inactive">Pros Hired</span>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-4">
                                    <span class="text-xs text-ubuy-secondary"><?php echo date('M Y', strtotime($userData['created_at']));; ?></span>
                                    <span class="text-tiny text-ubuy-inactive">Date Joined</span>
                                </div>
                            </div>

                        </div>
                        <details class="flex flex-row items-center justify-center w-full px-5 py-1">
                            <summary class="text-ubuy-blue">
                                <div class="flex flex-row items-center text-ubuy-blue text-xs">
                                    <span class="mr-3">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 15.75C9.72188 15.75 10.3125 15.1615 10.3125 14.4423H7.6875C7.6875 15.1615 8.27156 15.75 9 15.75ZM12.9375 11.8269V8.55769C12.9375 6.55038 11.8612 4.87 9.98438 4.42538V3.98077C9.98438 3.43808 9.54469 3 9 3C8.45531 3 8.01562 3.43808 8.01562 3.98077V4.42538C6.13219 4.87 5.0625 6.54385 5.0625 8.55769V11.8269L3.75 13.1346V13.7885H14.25V13.1346L12.9375 11.8269Z" fill="#119AE2"></path>
                                        </svg>
                                    </span>
                                    <span>
                                        Ubuy Services Tips
                                    </span>
                                </div>

                            </summary>
                            <ul>
                                <li class="rounded-llg bg-white list-inside list-disc text-ubuy-blue py-2.5 px-3 mb-3 relative">
                                    <div class="inline-flex items-center">
                                        <span class="text-xs font-medium -ml-2 mr-2 text-ubuy-secondary">
                                            Get 15x more clients with Promos
                                        </span>
                                        <button class="absolute right-4">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 4L4 12" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M4 4L12 12" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </li>
                                <li class="rounded-llg bg-white list-inside list-disc text-ubuy-blue py-2.5 px-3 mb-3 relative">
                                    <div class="inline-flex items-center">
                                        <span class="text-xs font-medium -ml-2 mr-2 text-ubuy-secondary">
                                            Learn how to create a top profile
                                        </span>
                                        <button class="absolute right-4">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 4L4 12" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M4 4L12 12" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </li>
                            </ul>

                        </details>

                        <div class="flex flex-col">
                            <div class="flex flex-row items-center justify-between px-5 py-2.5 w-full border-t border-b border-ubuy-gray200">
                                <div class="text-xs text-ubuy-inactive font-medium">Identity</div>
                                <!-- For Routing TODO: Removed -->
                                <?php if($userData['verify_confirm']== 0) {?>
                                    <a href="#" class="text-tiny text-ubuy-warningDefault font-medium">PENDING</a>
                                <?php }elseif($userData['verify_confirm']== 1){ ?>
                                    <span class='text-ubuy-successDefault'>IN REVIEW</span>
                                <?php }elseif($userData['verify_confirm']== 2){ ?>
                                    <button class="text-white rounded text-xxxs px-4 py-0.5 bg-ubuy-blue" id="verifyBtn" onclick="startVerification()">Verify</button>
                                <?php } ?>
                            </div>
                            <div class="flex flex-row items-center justify-between px-5 py-2.5 w-full border-b border-gray-200">
                                <div class="text-xs text-ubuy-inactive font-medium">Phone Number</div>
                                <div>
                                    <?php echo $userData['is_phone_verified'] == 0 ? '<button class="text-white rounded text-xxxs px-4 py-0.5 bg-ubuy-blue" id="phoneVerifyBtn" onclick="phoneVerify()">Verify</button>' : "<span class='text-xxxs px-4 py-0.5 text-success'>VERIFIED</span>"?>
                                </div>

                            </div>
                            <div class="flex flex-row items-center justify-between px-5 py-2.5 w-full border-b border-ubuy-gray200">
                                <div class="text-xs text-ubuy-inactive font-medium">Email Address</div>
                                <?php echo $userData['email_verified_at'] == null ? '<button class="text-white rounded text-xxxs px-4 py-0.5 bg-ubuy-blue" id="emailVerifyBtn" onclick="verify_email(this.id);">Verify</button>' : '<div class="text-tiny text-ubuy-positiveDefault">VERIFIED</div>'?>
                                
                            </div>
                            <div class="flex flex-row items-center justify-between px-5 py-2.5 w-full border-b border-ubuy-gray200">
                                <div class="text-xs text-ubuy-inactive font-medium">Email Address</div>
                                <div class="text-tiny text-ubuy-positiveDefault">
                                    <label for="email-display" class="relative inline-block w-6 h-4 cursor-pointer">
                                        <input type="checkbox" name="switch" id="email-display" class="opacity-0 h-0 w-0 switch">
                                        <span class="switch-slider relative w-6 h-4 border rounded-2xl bg-ubuy-blue"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="flex flex-row items-center justify-between px-5 py-2.5 w-full border-b border-ubuy-gray200">
                                <div class="text-xs text-ubuy-inactive font-medium">Phone</div>
                                <div class="text-tiny text-ubuy-positiveDefault">
                                    <label for="phone-display" class="relative inline-block w-6 h-4 cursor-pointer">
                                        <input type="checkbox" name="switch" id="phone-display" class="opacity-0 h-0 w-0 switch">
                                        <span class="switch-slider relative w-6 h-4 border rounded-2xl bg-ubuy-blue"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col px-5 mt-10">
                            <a href="public-profile.php?uuid=<?php echo $userData['uuid']; ?>" class="w-full rounded-llg border border-ubuy-blue text-ubuy-blue text-center py-2.5">
                                View Public Profile
                            </a>
                            <div class="flex flex-row items-center mt-5 ">
                                <span class="py-2.5 pl-2.5 rounded-l-llg border border-ubuy-gray200 w-56 flex-1 truncate">
                                    https://ubuy.ng/public_profile.php?uuid=<?php echo $userData['uuid']; ?>
                                </span>
                                <button class="px-2.5 py-2 rounded-r-llg border border-ubuy-gray200 h-full">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 9H11C9.89543 9 9 9.89543 9 11V20C9 21.1046 9.89543 22 11 22H20C21.1046 22 22 21.1046 22 20V11C22 9.89543 21.1046 9 20 9Z" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M5 15H4C3.46957 15 2.96086 14.7893 2.58579 14.4142C2.21071 14.0391 2 13.5304 2 13V4C2 3.46957 2.21071 2.96086 2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H13C13.5304 2 14.0391 2.21071 14.4142 2.58579C14.7893 2.96086 15 3.46957 15 4V5" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-llg h-full relative">
                        <div class="border-b border-ubuy-gray200 py-7 w-full text-center font-semibold">
                            Verify your Identity
                        </div>
                        <!-- STEP-1 -->
                        <div class="w-full" id="step-one">
                            <div class="flex flex-row items-center justify-center mt-5 mb-10">
                                <span class="rounded-full w-10 h-10 flex items-center justify-center text-lg text-white bg-ubuy-blue font-medium">
                                    1
                                </span>
                                <span class="w-6 border border-dashed border-ubuy-blue flex mx-1.5"></span>
                                <span class="rounded-full w-10 h-10 flex items-center justify-center text-lg text-ubuy-inactive bg-ubuy-gray200">
                                    2
                                </span>
                                <span class="w-6 border border-dashed border-ubuy-inactive flex mx-1.5"></span>
                                <span class="rounded-full w-10 h-10 flex items-center justify-center text-lg text-ubuy-inactive bg-ubuy-gray200">
                                    3
                                </span>
                            </div>
                            <div class="flex flex-row items-center justify-center text-ubuy-black mb-5 font-medium">
                                Choose ID Type
                            </div>

                            <div class="sm:grid hidden xl:grid-cols-3 sm:grid-cols-2 xl:px-10 px-5 gap-5 mb-12">
                                <button id="NIN Slip" onclick="goto('step-two', 'step-one', this.id)" class="focus:outline-none rounded-llg border border-ubuy-gray450 hover:border-ubuy-blue hover:text-ubuy-blue">
                                    <div class="w-full border-b text-ubuy-secondary font-medium border-ubuy-gray450 hover:border-ubuy-blue xl:py-4 py-2 flex items-center justify-center">
                                        NIN Slip
                                    </div>
                                    <div class="bg-ubuy-gray400 rounded-llg flex items-center justify-center py-3 px-2 w-full relative h-44">
                                        <span class="absolute left-1/2 transform -translate-x-1/2">
                                            <svg width="156" height="66" viewBox="0 0 156 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.2">
                                                    <path
                                                        d="M16.3528 65.4265C14.3421 65.9678 12.4526 66.1259 10.6842 65.9009C8.91586 65.6759 7.37663 65.0527 6.06652 64.0313C4.78252 63.0029 3.87226 61.5935 3.33572 59.803L10.4646 57.8839C10.8427 58.8757 11.4058 59.5654 12.1538 59.9529C12.8948 60.3143 13.7484 60.3649 14.7146 60.1048C15.7069 59.8377 16.4306 59.4045 16.8857 58.8053C17.3339 58.1799 17.4492 57.4618 17.2316 56.6511C17.0491 55.9711 16.6632 55.4721 16.0738 55.154C15.5106 54.829 14.8509 54.614 14.0947 54.509C13.3647 54.3971 12.3369 54.3233 11.0113 54.2875C9.08823 54.2163 7.49157 54.0573 6.22131 53.8103C4.95106 53.5634 3.76729 53.0128 2.67001 52.1584C1.57273 51.3041 0.792467 50.0139 0.329213 48.2878C-0.358648 45.7249 0.0314082 43.4746 1.49938 41.5371C2.96034 39.5735 5.17925 38.191 8.15612 37.3896C11.1852 36.5742 13.8233 36.6492 16.0704 37.6146C18.3105 38.5539 19.8432 40.3005 20.6687 42.8545L13.4223 44.8052C13.1314 43.9301 12.619 43.3249 11.8851 42.9897C11.1441 42.6283 10.3036 42.5742 9.36351 42.8272C8.55401 43.0451 7.96085 43.4432 7.58402 44.0213C7.20018 44.5733 7.11706 45.2547 7.33464 46.0654C7.57329 46.9546 8.1771 47.5352 9.14608 47.8072C10.115 48.0791 11.5646 48.2638 13.4947 48.3611C15.4318 48.4846 17.0224 48.6733 18.2666 48.9273C19.5368 49.1742 20.7171 49.7118 21.8073 50.5399C22.8976 51.3681 23.6638 52.606 24.106 54.2536C24.5272 55.8228 24.5049 57.3571 24.0394 58.8565C23.5999 60.3488 22.7247 61.6781 21.4137 62.8442C20.1027 64.0104 18.4157 64.8711 16.3528 65.4265Z"
                                                        fill="#119AE2" />
                                                    <path d="M46.3966 51.8283L36.1342 54.591L35.7947 59.8982L28.7833 61.7857L31.3414 31.5687L39.0969 29.4809L56.4369 54.3413L49.3473 56.2499L46.3966 51.8283ZM43.2834 47.1141L37.1698 37.9496L36.5071 48.9383L43.2834 47.1141Z" fill="#119AE2" />
                                                    <path d="M83.3702 17.5624L90.7612 45.1011L84.0633 46.9042L79.6308 30.3889L77.9137 48.5597L72.5083 50.0149L61.8765 35.1263L66.3195 51.6809L59.6216 53.484L52.2306 25.9453L60.1428 23.8153L72.976 40.8033L75.4972 19.6819L83.3702 17.5624Z"
                                                        fill="#119AE2" />
                                                    <path
                                                        d="M111.679 19.448C112.107 21.0433 112.134 22.6063 111.761 24.1369C111.381 25.6414 110.542 27.0028 109.245 28.2213C107.948 29.4397 106.177 30.3512 103.931 30.9558L99.7793 32.0735L102.432 41.9592L95.7345 43.7623L88.3435 16.2236L99.1935 13.3028C101.387 12.7123 103.343 12.5924 105.061 12.9431C106.779 13.2938 108.196 14.0341 109.311 15.164C110.426 16.294 111.215 17.722 111.679 19.448ZM101.99 25.7577C103.27 25.4133 104.142 24.8559 104.607 24.0857C105.073 23.3155 105.158 22.3812 104.863 21.2828C104.568 20.1844 104.027 19.4188 103.239 18.986C102.451 18.5532 101.417 18.509 100.137 18.8534L96.4944 19.8341L98.3474 26.7384L101.99 25.7577Z"
                                                        fill="#119AE2" />
                                                    <path d="M125.642 30.1588L134.416 27.7968L135.806 32.975L120.334 37.1401L112.943 9.60141L119.641 7.79831L125.642 30.1588Z" fill="#119AE2" />
                                                    <path d="M139.907 8.10538L141.402 13.6759L150.371 11.2612L151.761 16.4394L142.791 18.8541L144.413 24.8954L154.558 22.1643L156 27.5387L139.157 32.0728L131.766 4.53413L148.609 0L150.051 5.37436L139.907 8.10538Z" fill="#119AE2" />
                                                </g>
                                            </svg>
                                        </span>
                                        <img src="assets/images/nin-slip.png" />
                                    </div>
                                </button>
                                <button id="National ID Card" onclick="goto('step-two', 'step-one', this.id)" class="focus:outline-none rounded-llg border border-ubuy-gray450 hover:border-ubuy-blue hover:text-ubuy-blue">
                                    <div class="w-full border-b text-ubuy-secondary font-medium border-ubuy-gray450 hover:border-ubuy-blue xl:py-4 py-2 flex items-center justify-center">
                                        National ID Card
                                    </div>
                                    <div class="bg-ubuy-gray400 rounded-llg flex items-center justify-center py-3 px-2 w-full relative xl:h-44 h-36">
                                        <span class="absolute left-1/2 transform -translate-x-1/2">
                                            <svg width="156" height="66" viewBox="0 0 156 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.2">
                                                    <path
                                                        d="M16.3528 65.4265C14.3421 65.9678 12.4526 66.1259 10.6842 65.9009C8.91586 65.6759 7.37663 65.0527 6.06652 64.0313C4.78252 63.0029 3.87226 61.5935 3.33572 59.803L10.4646 57.8839C10.8427 58.8757 11.4058 59.5654 12.1538 59.9529C12.8948 60.3143 13.7484 60.3649 14.7146 60.1048C15.7069 59.8377 16.4306 59.4045 16.8857 58.8053C17.3339 58.1799 17.4492 57.4618 17.2316 56.6511C17.0491 55.9711 16.6632 55.4721 16.0738 55.154C15.5106 54.829 14.8509 54.614 14.0947 54.509C13.3647 54.3971 12.3369 54.3233 11.0113 54.2875C9.08823 54.2163 7.49157 54.0573 6.22131 53.8103C4.95106 53.5634 3.76729 53.0128 2.67001 52.1584C1.57273 51.3041 0.792467 50.0139 0.329213 48.2878C-0.358648 45.7249 0.0314082 43.4746 1.49938 41.5371C2.96034 39.5735 5.17925 38.191 8.15612 37.3896C11.1852 36.5742 13.8233 36.6492 16.0704 37.6146C18.3105 38.5539 19.8432 40.3005 20.6687 42.8545L13.4223 44.8052C13.1314 43.9301 12.619 43.3249 11.8851 42.9897C11.1441 42.6283 10.3036 42.5742 9.36351 42.8272C8.55401 43.0451 7.96085 43.4432 7.58402 44.0213C7.20018 44.5733 7.11706 45.2547 7.33464 46.0654C7.57329 46.9546 8.1771 47.5352 9.14608 47.8072C10.115 48.0791 11.5646 48.2638 13.4947 48.3611C15.4318 48.4846 17.0224 48.6733 18.2666 48.9273C19.5368 49.1742 20.7171 49.7118 21.8073 50.5399C22.8976 51.3681 23.6638 52.606 24.106 54.2536C24.5272 55.8228 24.5049 57.3571 24.0394 58.8565C23.5999 60.3488 22.7247 61.6781 21.4137 62.8442C20.1027 64.0104 18.4157 64.8711 16.3528 65.4265Z"
                                                        fill="#119AE2" />
                                                    <path d="M46.3966 51.8283L36.1342 54.591L35.7947 59.8982L28.7833 61.7857L31.3414 31.5687L39.0969 29.4809L56.4369 54.3413L49.3473 56.2499L46.3966 51.8283ZM43.2834 47.1141L37.1698 37.9496L36.5071 48.9383L43.2834 47.1141Z" fill="#119AE2" />
                                                    <path d="M83.3702 17.5624L90.7612 45.1011L84.0633 46.9042L79.6308 30.3889L77.9137 48.5597L72.5083 50.0149L61.8765 35.1263L66.3195 51.6809L59.6216 53.484L52.2306 25.9453L60.1428 23.8153L72.976 40.8033L75.4972 19.6819L83.3702 17.5624Z"
                                                        fill="#119AE2" />
                                                    <path
                                                        d="M111.679 19.448C112.107 21.0433 112.134 22.6063 111.761 24.1369C111.381 25.6414 110.542 27.0028 109.245 28.2213C107.948 29.4397 106.177 30.3512 103.931 30.9558L99.7793 32.0735L102.432 41.9592L95.7345 43.7623L88.3435 16.2236L99.1935 13.3028C101.387 12.7123 103.343 12.5924 105.061 12.9431C106.779 13.2938 108.196 14.0341 109.311 15.164C110.426 16.294 111.215 17.722 111.679 19.448ZM101.99 25.7577C103.27 25.4133 104.142 24.8559 104.607 24.0857C105.073 23.3155 105.158 22.3812 104.863 21.2828C104.568 20.1844 104.027 19.4188 103.239 18.986C102.451 18.5532 101.417 18.509 100.137 18.8534L96.4944 19.8341L98.3474 26.7384L101.99 25.7577Z"
                                                        fill="#119AE2" />
                                                    <path d="M125.642 30.1588L134.416 27.7968L135.806 32.975L120.334 37.1401L112.943 9.60141L119.641 7.79831L125.642 30.1588Z" fill="#119AE2" />
                                                    <path d="M139.907 8.10538L141.402 13.6759L150.371 11.2612L151.761 16.4394L142.791 18.8541L144.413 24.8954L154.558 22.1643L156 27.5387L139.157 32.0728L131.766 4.53413L148.609 0L150.051 5.37436L139.907 8.10538Z" fill="#119AE2" />
                                                </g>
                                            </svg>
                                        </span>
                                        <img src="assets/images/id-card.png" />
                                    </div>
                                </button>

                                <button id="Voters Card" onclick="goto('step-two', 'step-one', this.id)" class="focus:outline-none rounded-llg border border-ubuy-gray450 hover:border-ubuy-blue hover:text-ubuy-blue">
                                    <div class="w-full border-b text-ubuy-secondary font-medium border-ubuy-gray450 hover:border-ubuy-blue xl:py-4 py-2 flex items-center justify-center">
                                        Voter’s Card
                                    </div>
                                    <div class="bg-ubuy-gray400 rounded-llg flex items-center justify-center py-3 px-2 w-full relative xl:h-44 h-36">
                                        <span class="absolute left-1/2 transform -translate-x-1/2">
                                            <svg width="156" height="66" viewBox="0 0 156 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.2">
                                                    <path
                                                        d="M16.3528 65.4265C14.3421 65.9678 12.4526 66.1259 10.6842 65.9009C8.91586 65.6759 7.37663 65.0527 6.06652 64.0313C4.78252 63.0029 3.87226 61.5935 3.33572 59.803L10.4646 57.8839C10.8427 58.8757 11.4058 59.5654 12.1538 59.9529C12.8948 60.3143 13.7484 60.3649 14.7146 60.1048C15.7069 59.8377 16.4306 59.4045 16.8857 58.8053C17.3339 58.1799 17.4492 57.4618 17.2316 56.6511C17.0491 55.9711 16.6632 55.4721 16.0738 55.154C15.5106 54.829 14.8509 54.614 14.0947 54.509C13.3647 54.3971 12.3369 54.3233 11.0113 54.2875C9.08823 54.2163 7.49157 54.0573 6.22131 53.8103C4.95106 53.5634 3.76729 53.0128 2.67001 52.1584C1.57273 51.3041 0.792467 50.0139 0.329213 48.2878C-0.358648 45.7249 0.0314082 43.4746 1.49938 41.5371C2.96034 39.5735 5.17925 38.191 8.15612 37.3896C11.1852 36.5742 13.8233 36.6492 16.0704 37.6146C18.3105 38.5539 19.8432 40.3005 20.6687 42.8545L13.4223 44.8052C13.1314 43.9301 12.619 43.3249 11.8851 42.9897C11.1441 42.6283 10.3036 42.5742 9.36351 42.8272C8.55401 43.0451 7.96085 43.4432 7.58402 44.0213C7.20018 44.5733 7.11706 45.2547 7.33464 46.0654C7.57329 46.9546 8.1771 47.5352 9.14608 47.8072C10.115 48.0791 11.5646 48.2638 13.4947 48.3611C15.4318 48.4846 17.0224 48.6733 18.2666 48.9273C19.5368 49.1742 20.7171 49.7118 21.8073 50.5399C22.8976 51.3681 23.6638 52.606 24.106 54.2536C24.5272 55.8228 24.5049 57.3571 24.0394 58.8565C23.5999 60.3488 22.7247 61.6781 21.4137 62.8442C20.1027 64.0104 18.4157 64.8711 16.3528 65.4265Z"
                                                        fill="#119AE2" />
                                                    <path d="M46.3966 51.8283L36.1342 54.591L35.7947 59.8982L28.7833 61.7857L31.3414 31.5687L39.0969 29.4809L56.4369 54.3413L49.3473 56.2499L46.3966 51.8283ZM43.2834 47.1141L37.1698 37.9496L36.5071 48.9383L43.2834 47.1141Z" fill="#119AE2" />
                                                    <path d="M83.3702 17.5624L90.7612 45.1011L84.0633 46.9042L79.6308 30.3889L77.9137 48.5597L72.5083 50.0149L61.8765 35.1263L66.3195 51.6809L59.6216 53.484L52.2306 25.9453L60.1428 23.8153L72.976 40.8033L75.4972 19.6819L83.3702 17.5624Z"
                                                        fill="#119AE2" />
                                                    <path
                                                        d="M111.679 19.448C112.107 21.0433 112.134 22.6063 111.761 24.1369C111.381 25.6414 110.542 27.0028 109.245 28.2213C107.948 29.4397 106.177 30.3512 103.931 30.9558L99.7793 32.0735L102.432 41.9592L95.7345 43.7623L88.3435 16.2236L99.1935 13.3028C101.387 12.7123 103.343 12.5924 105.061 12.9431C106.779 13.2938 108.196 14.0341 109.311 15.164C110.426 16.294 111.215 17.722 111.679 19.448ZM101.99 25.7577C103.27 25.4133 104.142 24.8559 104.607 24.0857C105.073 23.3155 105.158 22.3812 104.863 21.2828C104.568 20.1844 104.027 19.4188 103.239 18.986C102.451 18.5532 101.417 18.509 100.137 18.8534L96.4944 19.8341L98.3474 26.7384L101.99 25.7577Z"
                                                        fill="#119AE2" />
                                                    <path d="M125.642 30.1588L134.416 27.7968L135.806 32.975L120.334 37.1401L112.943 9.60141L119.641 7.79831L125.642 30.1588Z" fill="#119AE2" />
                                                    <path d="M139.907 8.10538L141.402 13.6759L150.371 11.2612L151.761 16.4394L142.791 18.8541L144.413 24.8954L154.558 22.1643L156 27.5387L139.157 32.0728L131.766 4.53413L148.609 0L150.051 5.37436L139.907 8.10538Z" fill="#119AE2" />
                                                </g>
                                            </svg>
                                        </span>
                                        <img src="assets/images/voter-card.png" />
                                    </div>
                                </button>

                                <button id="Drivers License" onclick="goto('step-two', 'step-one', this.id)" class="focus:outline-none rounded-llg border border-ubuy-gray450 hover:border-ubuy-blue hover:text-ubuy-blue">
                                    <div class="w-full border-b text-ubuy-secondary font-medium border-ubuy-gray450 hover:border-ubuy-blue xl:py-4 py-2 flex items-center justify-center">
                                        Driver’s License
                                    </div>
                                    <div class="bg-ubuy-gray400 rounded-llg flex items-center justify-center py-3 px-2 w-full relative xl:h-44 h-36">
                                        <span class="absolute left-1/2 transform -translate-x-1/2">
                                            <svg width="156" height="66" viewBox="0 0 156 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.2">
                                                    <path
                                                        d="M16.3528 65.4265C14.3421 65.9678 12.4526 66.1259 10.6842 65.9009C8.91586 65.6759 7.37663 65.0527 6.06652 64.0313C4.78252 63.0029 3.87226 61.5935 3.33572 59.803L10.4646 57.8839C10.8427 58.8757 11.4058 59.5654 12.1538 59.9529C12.8948 60.3143 13.7484 60.3649 14.7146 60.1048C15.7069 59.8377 16.4306 59.4045 16.8857 58.8053C17.3339 58.1799 17.4492 57.4618 17.2316 56.6511C17.0491 55.9711 16.6632 55.4721 16.0738 55.154C15.5106 54.829 14.8509 54.614 14.0947 54.509C13.3647 54.3971 12.3369 54.3233 11.0113 54.2875C9.08823 54.2163 7.49157 54.0573 6.22131 53.8103C4.95106 53.5634 3.76729 53.0128 2.67001 52.1584C1.57273 51.3041 0.792467 50.0139 0.329213 48.2878C-0.358648 45.7249 0.0314082 43.4746 1.49938 41.5371C2.96034 39.5735 5.17925 38.191 8.15612 37.3896C11.1852 36.5742 13.8233 36.6492 16.0704 37.6146C18.3105 38.5539 19.8432 40.3005 20.6687 42.8545L13.4223 44.8052C13.1314 43.9301 12.619 43.3249 11.8851 42.9897C11.1441 42.6283 10.3036 42.5742 9.36351 42.8272C8.55401 43.0451 7.96085 43.4432 7.58402 44.0213C7.20018 44.5733 7.11706 45.2547 7.33464 46.0654C7.57329 46.9546 8.1771 47.5352 9.14608 47.8072C10.115 48.0791 11.5646 48.2638 13.4947 48.3611C15.4318 48.4846 17.0224 48.6733 18.2666 48.9273C19.5368 49.1742 20.7171 49.7118 21.8073 50.5399C22.8976 51.3681 23.6638 52.606 24.106 54.2536C24.5272 55.8228 24.5049 57.3571 24.0394 58.8565C23.5999 60.3488 22.7247 61.6781 21.4137 62.8442C20.1027 64.0104 18.4157 64.8711 16.3528 65.4265Z"
                                                        fill="#119AE2" />
                                                    <path d="M46.3966 51.8283L36.1342 54.591L35.7947 59.8982L28.7833 61.7857L31.3414 31.5687L39.0969 29.4809L56.4369 54.3413L49.3473 56.2499L46.3966 51.8283ZM43.2834 47.1141L37.1698 37.9496L36.5071 48.9383L43.2834 47.1141Z" fill="#119AE2" />
                                                    <path d="M83.3702 17.5624L90.7612 45.1011L84.0633 46.9042L79.6308 30.3889L77.9137 48.5597L72.5083 50.0149L61.8765 35.1263L66.3195 51.6809L59.6216 53.484L52.2306 25.9453L60.1428 23.8153L72.976 40.8033L75.4972 19.6819L83.3702 17.5624Z"
                                                        fill="#119AE2" />
                                                    <path
                                                        d="M111.679 19.448C112.107 21.0433 112.134 22.6063 111.761 24.1369C111.381 25.6414 110.542 27.0028 109.245 28.2213C107.948 29.4397 106.177 30.3512 103.931 30.9558L99.7793 32.0735L102.432 41.9592L95.7345 43.7623L88.3435 16.2236L99.1935 13.3028C101.387 12.7123 103.343 12.5924 105.061 12.9431C106.779 13.2938 108.196 14.0341 109.311 15.164C110.426 16.294 111.215 17.722 111.679 19.448ZM101.99 25.7577C103.27 25.4133 104.142 24.8559 104.607 24.0857C105.073 23.3155 105.158 22.3812 104.863 21.2828C104.568 20.1844 104.027 19.4188 103.239 18.986C102.451 18.5532 101.417 18.509 100.137 18.8534L96.4944 19.8341L98.3474 26.7384L101.99 25.7577Z"
                                                        fill="#119AE2" />
                                                    <path d="M125.642 30.1588L134.416 27.7968L135.806 32.975L120.334 37.1401L112.943 9.60141L119.641 7.79831L125.642 30.1588Z" fill="#119AE2" />
                                                    <path d="M139.907 8.10538L141.402 13.6759L150.371 11.2612L151.761 16.4394L142.791 18.8541L144.413 24.8954L154.558 22.1643L156 27.5387L139.157 32.0728L131.766 4.53413L148.609 0L150.051 5.37436L139.907 8.10538Z" fill="#119AE2" />
                                                </g>
                                            </svg>
                                        </span>
                                        <img src="assets/images/driver-licence.png" />
                                    </div>
                                </button>

                                <button id="International Passport" onclick="goto('step-two', 'step-one', this.id)" class="focus:outline-none rounded-llg border border-ubuy-gray450 hover:border-ubuy-blue hover:text-ubuy-blue">
                                    <div class="w-full border-b text-ubuy-secondary font-medium border-ubuy-gray450 hover:border-ubuy-blue xl:py-4 py-2 flex items-center justify-center">
                                        International Passport
                                    </div>
                                    <div class="bg-ubuy-gray400 rounded-llg flex items-center justify-center py-3 px-2 w-full relative xl:h-44 h-36">
                                        <span class="absolute left-1/2 transform -translate-x-1/2">
                                            <svg width="156" height="66" viewBox="0 0 156 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.2">
                                                    <path
                                                        d="M16.3528 65.4265C14.3421 65.9678 12.4526 66.1259 10.6842 65.9009C8.91586 65.6759 7.37663 65.0527 6.06652 64.0313C4.78252 63.0029 3.87226 61.5935 3.33572 59.803L10.4646 57.8839C10.8427 58.8757 11.4058 59.5654 12.1538 59.9529C12.8948 60.3143 13.7484 60.3649 14.7146 60.1048C15.7069 59.8377 16.4306 59.4045 16.8857 58.8053C17.3339 58.1799 17.4492 57.4618 17.2316 56.6511C17.0491 55.9711 16.6632 55.4721 16.0738 55.154C15.5106 54.829 14.8509 54.614 14.0947 54.509C13.3647 54.3971 12.3369 54.3233 11.0113 54.2875C9.08823 54.2163 7.49157 54.0573 6.22131 53.8103C4.95106 53.5634 3.76729 53.0128 2.67001 52.1584C1.57273 51.3041 0.792467 50.0139 0.329213 48.2878C-0.358648 45.7249 0.0314082 43.4746 1.49938 41.5371C2.96034 39.5735 5.17925 38.191 8.15612 37.3896C11.1852 36.5742 13.8233 36.6492 16.0704 37.6146C18.3105 38.5539 19.8432 40.3005 20.6687 42.8545L13.4223 44.8052C13.1314 43.9301 12.619 43.3249 11.8851 42.9897C11.1441 42.6283 10.3036 42.5742 9.36351 42.8272C8.55401 43.0451 7.96085 43.4432 7.58402 44.0213C7.20018 44.5733 7.11706 45.2547 7.33464 46.0654C7.57329 46.9546 8.1771 47.5352 9.14608 47.8072C10.115 48.0791 11.5646 48.2638 13.4947 48.3611C15.4318 48.4846 17.0224 48.6733 18.2666 48.9273C19.5368 49.1742 20.7171 49.7118 21.8073 50.5399C22.8976 51.3681 23.6638 52.606 24.106 54.2536C24.5272 55.8228 24.5049 57.3571 24.0394 58.8565C23.5999 60.3488 22.7247 61.6781 21.4137 62.8442C20.1027 64.0104 18.4157 64.8711 16.3528 65.4265Z"
                                                        fill="#119AE2" />
                                                    <path d="M46.3966 51.8283L36.1342 54.591L35.7947 59.8982L28.7833 61.7857L31.3414 31.5687L39.0969 29.4809L56.4369 54.3413L49.3473 56.2499L46.3966 51.8283ZM43.2834 47.1141L37.1698 37.9496L36.5071 48.9383L43.2834 47.1141Z" fill="#119AE2" />
                                                    <path d="M83.3702 17.5624L90.7612 45.1011L84.0633 46.9042L79.6308 30.3889L77.9137 48.5597L72.5083 50.0149L61.8765 35.1263L66.3195 51.6809L59.6216 53.484L52.2306 25.9453L60.1428 23.8153L72.976 40.8033L75.4972 19.6819L83.3702 17.5624Z"
                                                        fill="#119AE2" />
                                                    <path
                                                        d="M111.679 19.448C112.107 21.0433 112.134 22.6063 111.761 24.1369C111.381 25.6414 110.542 27.0028 109.245 28.2213C107.948 29.4397 106.177 30.3512 103.931 30.9558L99.7793 32.0735L102.432 41.9592L95.7345 43.7623L88.3435 16.2236L99.1935 13.3028C101.387 12.7123 103.343 12.5924 105.061 12.9431C106.779 13.2938 108.196 14.0341 109.311 15.164C110.426 16.294 111.215 17.722 111.679 19.448ZM101.99 25.7577C103.27 25.4133 104.142 24.8559 104.607 24.0857C105.073 23.3155 105.158 22.3812 104.863 21.2828C104.568 20.1844 104.027 19.4188 103.239 18.986C102.451 18.5532 101.417 18.509 100.137 18.8534L96.4944 19.8341L98.3474 26.7384L101.99 25.7577Z"
                                                        fill="#119AE2" />
                                                    <path d="M125.642 30.1588L134.416 27.7968L135.806 32.975L120.334 37.1401L112.943 9.60141L119.641 7.79831L125.642 30.1588Z" fill="#119AE2" />
                                                    <path d="M139.907 8.10538L141.402 13.6759L150.371 11.2612L151.761 16.4394L142.791 18.8541L144.413 24.8954L154.558 22.1643L156 27.5387L139.157 32.0728L131.766 4.53413L148.609 0L150.051 5.37436L139.907 8.10538Z" fill="#119AE2" />
                                                </g>
                                            </svg>
                                        </span>
                                        <img src="assets/images/passport.png" />
                                    </div>
                                </button>
                                <!-- <form id="identity-form" style="display: none;"  method="post" enctype="multipart/form-data">
                                    <div class="flex flex-col items-start self-start">
                                        <input type="text" id="select-id" name="licence_type" class="hidden"/>
                                        <label for="files" class="flex flex-row items-center border bg-ubuy-gray400 border-ubuy-gray200 rounded-llg px-4 py-3">
                                            <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M14.2934 7.36678L8.1667 13.4934C7.41613 14.244 6.39815 14.6657 5.3367 14.6657C4.27524 14.6657 3.25726 14.244 2.5067 13.4934C1.75613 12.7429 1.33447 11.7249 1.33447 10.6634C1.33447 9.60199 1.75613 8.584 2.5067 7.83344L8.63336 1.70678C9.13374 1.2064 9.81239 0.925293 10.52 0.925293C11.2277 0.925293 11.9063 1.2064 12.4067 1.70678C12.9071 2.20715 13.1882 2.8858 13.1882 3.59344C13.1882 4.30108 12.9071 4.97973 12.4067 5.48011L6.27336 11.6068C6.02318 11.857 5.68385 11.9975 5.33003 11.9975C4.97621 11.9975 4.63688 11.857 4.3867 11.6068C4.13651 11.3566 3.99596 11.0173 3.99596 10.6634C3.99596 10.3096 4.13651 9.9703 4.3867 9.72011L10.0467 4.06678"
                                                        stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span class="text-sm text-ubuy-secondary">Attach files</span>
                                        </label>
                                        <input type="file" name="files" id="files" class="hidden" />
                                    </div>
                                    <div class="flex items-start justify-start w-full mt-20 pb-14">
                                        <button type="submit" id="stepOneBtn" class="text-sm font-medium text-white rounded-lg bg-ubuy-blue py-2 px-6">Continue</button>
                                    </div>
                                </form> -->
                            </div>

                        </div>

                        <!-- STEP 2 -->
                        <div class="w-full hidden" id="step-two">
                            <div class="flex flex-row items-center justify-center mt-5 mb-10">
                                <span class="rounded-full w-10 h-10 flex items-center justify-center text-lg text-white bg-ubuy-blue font-medium">
                                    1
                                </span>
                                <span class="w-6 border border-dashed border-ubuy-blue flex mx-1.5"></span>
                                <span class="rounded-full w-10 h-10 flex items-center justify-center text-lg text-white bg-ubuy-blue font-medium">
                                    2
                                </span>
                                <span class="w-6 border border-dashed border-ubuy-blue flex mx-1.5"></span>
                                <span class="rounded-full w-10 h-10 flex items-center justify-center text-lg text-ubuy-inactive bg-ubuy-gray200">
                                    3
                                </span>
                            </div>
                            <div class="flex flex-row text-lg items-center justify-center text-ubuy-black mb-5 font-medium">
                                Upload ID
                            </div>
                            <div class="px-10 text-center text-ubuy-secondary mb-10">
                                Take and upload a clear & centered photo of your NIN Slip. Make sure all informations on it are visible and easy to read
                            </div>
                            <form id="identity-form"  method="post" enctype="multipart/form-data">

                            <div class="mx-auto max-w-2xl rounded-llg bg-ubuy-gray400 border border-ubuy-shade100 pt-6">
                                <div class="flex xl:flex-row flex-col gap-x-2.5 pb-14">
                                    <div class="xl:w-1/2 w-full relative flex flex-row items-center justify-center xl:mb-0 mb-9">
                                        <img src="assets/images/nin-slip.png" class="w-full" />

                                        <div class="absolute left-1/2 transform -translate-x-1/2 -bottom-4">
                                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="60" height="60" rx="30" fill="url(#paint0_linear)" />
                                                <path d="M43.3327 20L24.9993 38.3333L16.666 30" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint0_linear" x1="30" y1="0" x2="30" y2="60" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#40DD7F" />
                                                        <stop offset="1" stop-color="#1AB759" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="xl:w-1/2 w-full relative flex flex-row items-center justify-center">
                                        <img src="assets/images/nin-slip.png" class="filter w-full" style="--tw-blur: blur(1px)" />
                                        <div class="absolute left-1/2 transform -translate-x-1/2 -bottom-4">
                                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="60" height="60" rx="30" fill="url(#paint1_linear)" />
                                                <path d="M40 20L20 40" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M20 20L40 40" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                                <defs>
                                                    <linearGradient id="paint1_linear" x1="30" y1="0" x2="30" y2="60" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#FF6262" />
                                                        <stop offset="1" stop-color="#E93C3C" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                </div>






















                                <div class="border-t border-ubuy-shade100 bg-white flex flex-row items-center justify-center px-5 py-5">
                                    <div x-data="showImage()" class="bg-white rounded-lg shadow-xl w-full">
                                        <div class="m-4">

                                            <label class="inline-block mb-2 text-gray-500">Note: Document should be clear and readable</label>
                                            <div class="flex items-center justify-center w-full">
                                                <label class="flex flex-col w-full h-72 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                    <div class="relative flex flex-col items-center justify-center pt-7">
                                                        <img id="preview" class="absolute inset-0 w-full h-72">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                        Upload Image(jpg,png) </p>
                                                    </div>
                                                    <input type="hidden" id="select-id" name="licence_type"/>
                                                    <input type="file" id="upload-id" name="files" class="opacity-0" accept="image/*" @change="showPreview(event)" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center w-full mt-20 pb-14">
                                <button type="submit" id="stepOneBtn" class="text-sm font-medium text-white rounded-lg bg-ubuy-blue py-3 px-6">Save & Continue</button>
                            </div>
                            </form>
                        </div>

                        <!-- STEP 3 -->
                        <div class="w-full hidden" id="step-three">
                            <div class="flex flex-row items-center justify-center mt-5 mb-10">
                                <span class="rounded-full w-10 h-10 flex items-center justify-center text-lg text-white bg-ubuy-blue font-medium">
                                    1
                                </span>
                                <span class="w-6 border border-dashed border-ubuy-blue flex mx-1.5"></span>
                                <span class="rounded-full w-10 h-10 flex items-center justify-center text-lg text-white bg-ubuy-blue font-medium">
                                    2
                                </span>
                                <span class="w-6 border border-dashed border-ubuy-blue flex mx-1.5"></span>
                                <span class="rounded-full w-10 h-10 flex items-center justify-center text-lg text-white bg-ubuy-blue">
                                    3
                                </span>
                            </div>
                            <div class="flex flex-row text-lg items-center justify-center text-ubuy-black mb-5 font-medium">
                                Upload a Selfie
                            </div>
                            <div class="px-10 text-center text-ubuy-secondary mb-10">
                                Upload a selfie with the code 123456.<br>
                                Write down the code on a plain paper, snap a selfie with it and upload it for verification
                            </div>
                            <div class="px-10 text-center text-ubuy-secondary mb-10">
                                Your Code is: <span class="font-bold text-3xl"><?php echo $userData['confirmation_code']; ?></span>
                            </div>
                            <form id="selfie-form"  method="post" enctype="multipart/form-data">
                                <input type="hidden" id="verification_code" name="verification_code" value="<?php echo $userData['confirmation_code']; ?>" />
                                <div class="mx-auto max-w-2xl rounded-llg bg-ubuy-gray400 border border-ubuy-shade100 pt-6">
                                    <div class="flex flex-row gap-x-2.5 pb-14 px-10">
                                        <div class="w-1/2 relative flex flex-row items-center justify-center">
                                            <img src="assets/images/selfie-good.png" class="w-full h-60" />

                                            <div class="absolute left-1/2 transform -translate-x-1/2 -bottom-4">
                                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="60" height="60" rx="30" fill="url(#paint2_linear)" />
                                                    <path d="M43.3327 20L24.9993 38.3333L16.666 30" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <defs>
                                                        <linearGradient id="paint2_linear" x1="30" y1="0" x2="30" y2="60" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#40DD7F" />
                                                            <stop offset="1" stop-color="#1AB759" />
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="w-1/2 flex flex-col items-center justify-center gap-y-4">
                                            <div class="w-full flex flex-row justify-center relative">
                                                <img src="assets/images/selfie-bad-1.png" class=" w-auto h-28" />
                                                <div class="absolute left-1/2 transform -translate-x-1/2 -bottom-2 ml-2">
                                                    <svg class="w-10 h-10" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="60" height="60" rx="30" fill="url(#paint3_linear)" />
                                                        <path d="M40 20L20 40" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 20L40 40" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <defs>
                                                            <linearGradient id="paint3_linear" x1="30" y1="0" x2="30" y2="60" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#FF6262" />
                                                                <stop offset="1" stop-color="#E93C3C" />
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="w-full flex flex-row justify-center relative">
                                                <img src="assets/images/selfie-bad-2.png" class="w-auto h-28" />
                                                <div class="absolute left-1/2 transform -translate-x-1/2 -bottom-2 ml-2">
                                                    <svg class="w-10 h-10" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="60" height="60" rx="30" fill="url(#paint4_linear)" />
                                                        <path d="M40 20L20 40" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 20L40 40" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <defs>
                                                            <linearGradient id="paint4_linear" x1="30" y1="0" x2="30" y2="60" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#FF6262" />
                                                                <stop offset="1" stop-color="#E93C3C" />
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-t border-ubuy-shade100 bg-white flex flex-row justify-center items-center px-5 py-5">
                                        <div x-data="showImage()" class="bg-white rounded-lg shadow-xl w-full">
                                            <div class="m-4">

                                                <label class="inline-block mb-2 text-gray-500">Note: Document should be clear and readable</label>
                                                <div class="flex items-center justify-center w-full">
                                                    <label class="flex flex-col w-full h-72 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                        <div class="relative flex flex-col items-center justify-center pt-7">
                                                            <img id="preview" class="absolute inset-0 w-full h-72">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                            Upload Image(jpg,png) </p>
                                                        </div>
                                                        <input type="file" id="selfie-image" name="filer" class="opacity-0" accept="image/*" @change="showPreview(event)" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="xl:block hidden rounded border border-ubuy-warningDefault bg-ubuy-yellow200 py-3 px-2.5 text-sm flex-1 mr-9" style="--tw-bg-opacity: .4;">
                                            Note: Document should be clear and readable
                                        </div>
                                        <label class="border border-ubuy-blue text-ubuy-blue font-medium py-2 px-3 rounded cursor-pointer"  id="upload-selfie">
                                            <div class="flex flex-row items-center text-base">
                                                <span class="mr-1">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.00065 14.6666C11.6825 14.6666 14.6673 11.6819 14.6673 7.99998C14.6673 4.31808 11.6825 1.33331 8.00065 1.33331C4.31875 1.33331 1.33398 4.31808 1.33398 7.99998C1.33398 11.6819 4.31875 14.6666 8.00065 14.6666Z" stroke="#119AE2"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8 5.33331V10.6666" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M5.33398 8H10.6673" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                <span>
                                                    Upload
                                                </span>
                                            </div>
                                            <input id="selfie-image" name="filer" type="file" class=" opacity-0 fixed" style="z-index: -1100;" />
                                        </label> -->
                                    </div>
                                </div>
                                <div class="flex items-center justify-center w-full mt-20 pb-14">
                                    <button id="stepThreeBtn"  class="text-sm font-medium text-white rounded-lg bg-ubuy-blue py-3 px-6">Save & Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- End Identity Verification Docs Submission-->
        <div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6" id="docs-submit-end" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
            <div class="flex flex-col items-center justify-around md:py-10 py-6 md:px-10 px-6 rounded-3xl shadow bg-white relative max-w-xl w-full">
                <button class="absolute right-5 top-5" onclick="onClosePopup('docs-submit-end')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-3xl text-center font-semibold text-ubuy-blue">Great Job !</h1>
                    <span class="text-base text-ubuy-gray500 max-w-md text-center mt-5 mb-8">
                        <svg width="81" height="81" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M0.5 80.6H80.5V0.599999H0.5V80.6Z" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="scale(0.015625)" />
                                </pattern>
                                <image id="image0" width="64" height="64"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </span>
                </div>
                <div class="text-base text-center max-w-sm">
                    Your verification information has been submitted successfully and is pending a review.
                    You’ll be notified of its result in 1-2 business days
                </div>
                <div class="mt-14">
                    <a href="dashboard.php" class="text-sm text-white rounded-llg bg-ubuy-blue py-4 px-5 font-semibold shadow-card">
                        Continue
                    </a>
                </div>
            </div>
        </div>

<?php
if($_SESSION['user_role'] == 'customer'){
    require_once 'inc/customer-footer.php';
}elseif($_SESSION['user_role'] == 'pro'){
    require_once 'inc/pro-footer.php';
}
?>
<script>
    function showImage() {
        return {
            showPreview(event) {
                if (event.target.files.length > 0) {
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("preview");
                    preview.src = src;
                    preview.style.display = "block";
                }
            }
        }
    }
    var loadFile = function(event) {
        console.log("working fine");
        return;
        var output = document.getElementById('license-review');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

    function setup() {
        // document.getElementById('cover-photo').addEventListener('click', openDialog);
       
        document.getElementById('coverPhoto').addEventListener('change', submitForm);
        function submitForm() {
            alert("uploading...")
            // document.getElementById('formid').submit();
        }
    }
    function openDialog() {
        document.getElementById('coverPhoto').click();
    }
    function goto(go, from, id){
        
        $("#select-id").val(id);
        $("#"+go).show();
        $("#"+from).hide();

    }

    $(document).ready(function(){


        $("#upload-selfie").on("click", function(){
            $("#selfie-image").click();
        });
        
        $("#identity-form").submit(function(e){
            e.preventDefault();
            document.getElementById("stepOneBtn").disabled = true;
            $("#stepOneBtn").html("Please wait...");
            toastr.info("Uploading license...", "Please wait", {timeOut: 30000});
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "endpoints/identification.php",    
                contentType: false,
                processData: false,
                dataType: 'json',
                data: formData,
                success: function (data) {
                    console.log(data);
                    if(data.status == true){
                        toastr.success("License uploaded successfully!", "Success", {timeOut: 20000});
                        $("#step-one").hide();
                        $("#step-two").hide();
                        $("#step-three").show();
                    }else if(data.status == false){
                        toastr.info(data.error_message, "Error:", {timeOut: 20000});
                        document.getElementById("stepOneBtn").disabled = false;
                        $("#step-one").hide();
                        $("#step-two").hide();
                        $("#step-three").show();
                    }else if(data.status ){

                    }else if(data.info == "Validation Exception"){
                        let p = data.info_message;
                        for (var key in p) {
                            toastr.info(p[key], "Error:", {timeOut: 20000});
                        }
                        document.getElementById("stepOneBtn").disabled = false;
                        $("#stepOneBtn").html("Continue");
                    }
                }
            });

        });

        $("#selfie-form").submit(function(e){
            e.preventDefault();
            document.getElementById("stepThreeBtn").disabled = true;
            $("#stepThreeBtn").html("Please wait...");
            toastr.info("Uploadig verification picture...", "Please wait", {timeOut: 20000});
            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "endpoints/upload-selfie.php",    
                contentType: false,
                processData: false,
                dataType: 'json',
                data: formData,
                success: function (data) {
                    console.log(data);
                    if(data.error == "Validation Exception"){
                        let p = data.error_message;
                        for (var key in p) {
                            toastr.info(p[key], "Error:", {timeOut: 8000});
                        }
                        document.getElementById("stepThreeBtn").disabled = false;
                        $("#stepThreeBtn").html("Save &amp; Continue");
                    }else if(data.success == true){
                        toastr.success("License uploaded successfully!", "Success", {timeOut: 7000});
                        $("#step-one").hide();
                        $("#step-two").hide();
                        $("#step-three").hide();
                        onOpenPopup('docs-submit-end')
                    }else if(data.success == false){
                        toastr.info(data.error_message, "Error:", {timeOut: 8000});
                        document.getElementById("stepThreeBtn").disabled = false;
                        $("#step-one").hide();
                        $("#step-two").hide();
                        $("#step-three").hide();
                        onOpenPopup('docs-submit-end')
                    }
                }
            });

        });
        // onclick="onOpenPopup('docs-submit-end')"

    });
</script> 