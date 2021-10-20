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
        <?php if($_SESSION['user_role'] == "customer"){ ?>
        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex w-full sm:flex-row flex-col lg:my-7 my-4 lg:pl-7 lg:pr-10 px-4 gap-4">
                    <div class="bg-white rounded-llg h-full pb-10 flex-1/4 min-w-max">
                        <div class="flex flex-col items-center px-5 pt-5 pb-6">
                            <div class="relative">
                                <img src="<?php echo $userData['public_url'] != 'http://new.ubuy.ng/storage' ? $userData['public_url'] : "assets/images/ubuy_logo.svg" ?>" alt="avatar" class="rounded-full w-32 h-32" style="border: 2px solid var(--ubuy-blue);" />
                                <span class="absolute right-4 bottom-0 image-upload">
                                    <label for="file-input">    
                                        <svg class="image-upload" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="1" y="1" width="26" height="26" rx="13" fill="#119AE2" />
                                            <path d="M14.75 12.6875C13.7188 12.6875 12.875 13.5312 12.875 14.5625C12.875 15.5937 13.7188 16.4375 14.75 16.4375C15.7813 16.4375 16.625 15.5937 16.625 14.5625C16.625 13.5312 15.7813 12.6875 14.75 12.6875Z" fill="white" />
                                            <path d="M19.0625 10.8125H17.5625L16.3625 9.275C16.2875 9.18125 16.175 9.125 16.0625 9.125H13.4375C13.325 9.125 13.2125 9.18125 13.1375 9.275L11.9375 10.8125C11.9375 10.8125 11.3187 10.8125 10.8125 10.8125V10.4375C10.8125 10.2313 10.6437 10.0625 10.4375 10.0625H9.3125C9.10625 10.0625 8.9375 10.2313 8.9375 10.4375V10.8125C8.4125 10.8125 8 11.225 8 11.75V17.75C8 18.275 8.4125 18.6875 8.9375 18.6875H19.0625C19.5875 18.6875 20 18.275 20 17.75V11.75C20 11.225 19.5875 10.8125 19.0625 10.8125ZM14.75 17.5625C13.1 17.5625 11.75 16.2125 11.75 14.5625C11.75 12.9125 13.1 11.5625 14.75 11.5625C16.4 11.5625 17.75 12.9125 17.75 14.5625C17.75 16.2125 16.4 17.5625 14.75 17.5625Z" fill="white" />
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
                            </div>
                            <div class="flex flex-row items-center justify-center w-full">
                                <div class="flex flex-col justify-center items-center mr-4">
                                    <span class="text-xs text-ubuy-secondary">0</span>
                                    <span class="text-tiny text-ubuy-inactive">Jobs Posted</span>
                                </div>
                                <div id="profile-rating" class="flex flex-col justify-center px-4 relative">
                                    <span class="text-xs text-ubuy-secondary text-center">0</span>
                                    <span class="text-tiny text-ubuy-inactive">Pros Hired</span>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-4">
                                    <span class="text-xs text-ubuy-secondary"><?php echo date('M Y', strtotime($userData['created_at'])); ?></span>
                                    <span class="text-tiny text-ubuy-inactive">Date Joined</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center justify-between px-5 py-2.5 w-full border-t border-b border-ubuy-gray200">
                                <div class="text-xs text-ubuy-inactive font-medium">Identity</div>
                                <div class="text-tiny font-medium">
                                    <?php if($userData["is_phone_verified"] != 1 && $userData['email_verified_at'] == null){  ?>
                                        <span class='text-red-600 text-xxxs p-2'>Not verified</span>
                                    <?php }else{ ?>
                                        <svg width="15" height="15" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    <?php }; ?>
                                </div>
                            </div>
                            <div class="flex flex-row items-center justify-between px-5 py-2.5 w-full border-b border-gray-200">
                                <div class="text-xs text-ubuy-inactive font-medium">Phone Number</div>
                                <div class="text-sm" id="verifyFirst"><?php echo $userData["is_phone_verified"] == 1 ? '<svg width="15" height="15" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /></svg>' : "<button id='phone-verify-btn' onclick='verifyPhone(this.id)' class='rounded text-xxxs px-4 py-0.5 bg-ubuy-blue text-white'>Verify</button>"; ?></div>
                                <!-- <div><button class="text-white rounded text-xxxs px-4 py-0.5 bg-ubuy-blue">Verify</button></div> -->
                                <div class="text-sm flex flex-row hidden" id="verifyLast">
                                    <form id="verifyPhoneFinal" method="post">
                                        <input type="number" name="verification_code_input" id="verification_code_input" class="text-xs py-1.5 px-3 border border-ubuy-gray200 bg-ubuy-gray400" style="width: 120px;">
                                        <button type="submit" id='phone-final-verify-btn' class='text-xxxs p-2 bg-ubuy-blue text-white'>Confirm</button>
                                    </form>
                                </div>

                            </div>
                            <div class="flex flex-row items-center justify-between px-5 py-2.5 w-full border-b border-ubuy-gray200">
                                <div class="text-xs text-ubuy-inactive font-medium">Email Address</div>
                                <div class="text-tiny"><?php echo $userData['email_verified_at']!=null ? '<svg width="15" height="15" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /></svg>' : "<span class='text-ubuy-negativeDefault'>Unverified</span>"; ?></div>
                            </div>

                        </div>
                    </div>
                    <div class="bg-white rounded-llg h-full relative flex-3/4">
                        <div class="border-b border-ubuy-gray200">
                            <button onclick="onTabSwitch('account-settings')" class="px-5 py-7 focus:outline-none  border-ubuy-blue border-b-4" id="account-settings-btn">
                                Account Settings
                            </button>
                            <button onclick="onTabSwitch('billing')" class="px-5 py-7 focus:outline-none border-ubuy-blue" id="billing-btn">
                                Billing Info
                            </button>
                        </div>
                        <div class="p-5 mt-5">
                            <form id="account-settings" class="flex flex-col gap-y-6 mb-8">
                                <div class="flex xl:flex-row xl:gap-y-0 gap-y-5 flex-col items-center justify-start gap-x-10 w-full ">
                                    <div class="flex flex-col w-full xl:w-1/2">
                                        <label for="first-name" class="text-sm text-ubuy-secondary font-medium mb-2.5">First Name</label>
                                        <input type="text" name="first_name" id="first-name" placeholder="John" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userData['first_name']) ? $userData['first_name'] : 'Please set'; ?>"/>
                                    </div>
                                    <div class="flex flex-col w-full xl:w-1/2">
                                        <label for="last-name" class="text-sm text-ubuy-secondary font-medium mb-2.5">Last Name</label>
                                        <input type="text" name="last_name" id="last-name" placeholder="Ayomide" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userData['last_name']) ? $userData['last_name'] : 'Please set'; ?>" />
                                    </div>
                                </div>
                                <div class="flex xl:flex-row  xl:gap-y-0 gap-y-5 flex-col items-center justify-start gap-x-10 w-full">
                                    <div class="flex flex-col w-full xl:w-1/2">
                                        <label for="phone" class="text-sm text-ubuy-secondary font-medium mb-2.5">Phone Number</label>
                                        <input type="tel" name="phone" id="phone" placeholder="234 810 727 075" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userData['number']) ? $userData['number'] : 'Please set'; ?>" disabled/>
                                    </div>
                                    <div class="flex flex-col w-full xl:w-1/2">
                                        <label for="email" class="text-sm text-ubuy-secondary font-medium mb-2.5">Email Address</label>
                                        <input type="email" name="email" id="email" placeholder="John" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userData['email']) ? $userData['email'] : 'Please set'; ?>" disabled />
                                    </div>
                                </div>
                                <div class="flex xl:flex-row xl:gap-y-0 gap-y-5 flex-col items-center justify-start gap-x-10 w-full">
                                    <label for="locality" id="location-label" class="w-full relative">
                                        <div class="text-base">Location</div>
                                        <input type="text" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-base w-full" onFocus="initializeAutocomplete()" id="locality" name="address" placeholder="What's your nearest location"  value="<?php echo isset($userData['address']) ? $userData['address'] : ''; ?>" />
                                    </label>
                                    <input type="hidden" name="city" id="city" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-base w-full" value="<?php echo isset($userData['city']) ? $userData['city'] : 'Please set'; ?>"/>
                                    <input type="hidden" name="state" id="state" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-base w-full" value="<?php echo isset($userData['state']) ? $userData['state'] : 'Please set'; ?>"/>
                                    <input type="hidden" name="lat" id="lat" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-base w-full" value="<?php echo isset($userData['lat']) ? $userData['lat'] : 'Please set'; ?>"/>
                                    <input type="hidden" name="lng" id="lng" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-base w-full" value="<?php echo isset($userData['lng']) ? $userData['lng'] : 'Please set'; ?>"/>
                                </div>
                                <div class="ml-4 mb-4">
                                    <button class="text-sm font-medium text-white rounded-lg bg-ubuy-blue py-2 px-6" type="submit" id="updateBtn">Update</button>
                                </div>
                            </form>

                            <form id="billing" class="flex-col gap-y-6 mb-8 flex hidden">

                                <div class="flex flex-col w-full">
                                    <label for="holder-name" class="text-sm text-ubuy-secondary font-medium mb-2.5">Account Holder’s Name</label>
                                    <input type="text" name="account_name" id="account_name" placeholder="John Ayomide" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userData['first_name']) ? $userData['first_name'].' '.$userData['last_name'] : 'Update your profile'; ?>" disabled/>
                                </div>
                                <div class="flex xl:flex-row flex-col items-center justify-start gap-10 w-full">
                                    <div class="flex flex-col w-full lg:w-1/2">
                                        <label for="account-number" class="text-sm text-ubuy-secondary font-medium mb-2.5">Account Number</label>
                                        <input type="number" name="account_number" id="account_number" placeholder="1234567890" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userBilling['billing']['account_number']) ? $userBilling['billing']['account_number'] : ''; ?>" <?php echo isset($userBilling['billing']['account_number']) ? "disabled" : ''; ?>/>
                                    </div>
                                    <div class="flex flex-col w-full lg:w-1/2">
                                        <label for="location" class="text-sm text-ubuy-secondary font-medium mb-2.5">Bank Name</label>
                                        <select id="bank" name="bank" class="text-sm text-ubuy-secondary py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg appearance-none" <?php echo isset($userBilling['billing']['bank']) ? "disabled": ''; ?>>
                                            <option <?php echo isset($userBilling['billing']['bank']) ? "selected" : ''; ?>><?php echo isset($userBilling['billing']['bank']) ? ucfirst($userBilling['billing']['bank']) : 'Choose'; ?></option>
                                            <option value="access">Access Bank</option>
                                            <option value="citibank">Citibank</option>
                                            <option value="diamond">Diamond Bank</option>
                                            <option value="ecobank">Ecobank</option>
                                            <option value="fidelity">Fidelity Bank</option>
                                            <option value="firstbank">First Bank</option>
                                            <option value="fcmb">First City Monument Bank (FCMB)</option>
                                            <option value="gtb">Guaranty Trust Bank (GTB)</option>
                                            <option value="heritage">Heritage Bank</option>
                                            <option value="keystone">Keystone Bank</option>
                                            <option value="polaris">Polaris Bank</option>
                                            <option value="providus">Providus Bank</option>
                                            <option value="stanbic">Stanbic IBTC Bank</option>
                                            <option value="standard">Standard Chartered Bank</option>
                                            <option value="sterling">Sterling Bank</option>
                                            <option value="suntrust">Suntrust Bank</option>
                                            <option value="union">Union Bank</option>
                                            <option value="uba">United Bank for Africa (UBA)</option>
                                            <option value="unity">Unity Bank</option>
                                            <option value="wema">Wema Bank</option>
                                            <option value="zenith">Zenith Bank</option>
                                        </select>
                                    </div>
                                </div>
                                <?php if(empty($userBilling['billing'])){ ?>
                                <div class="ml-4 mb-4">
                                    <button class="text-sm font-medium text-white rounded-lg bg-ubuy-blue py-2 px-6" type="submit" id="billingBtn">Save</button>
                                </div>
                                <?php } ?>
                                <p class="p-2 bg-yellow-200 text-xs font-medium bottom-16 text-ubuy-secondary rounded-lg w-full">
                                    Note: Account Holder’s Name has to be the same with the name on the legal document used for identity verification for any payment to be processed by Ubuy Services
                                </p>
                            </form>
                        
                            <!-- <form id="billing" class="flex-col gap-y-6 hidden mb-8">
                                <div class="flex flex-col w-full">
                                    <label for="holder-name" class="text-sm text-ubuy-secondary font-medium mb-2.5">Account Holder’s Name</label>
                                    <input type="text" name="account_name" id="account_name" placeholder="John Ayomide" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userData['first_name']) ? $userData['first_name'].' '.$userData['last_name'] : 'Update your profile'; ?>" disabled/>
                                </div>
                                <div class="flex xl:flex-row flex-col items-center justify-start gap-10 w-full">
                                    <div class="flex flex-col w-full lg:w-1/2">
                                        <label for="account-number" class="text-sm text-ubuy-secondary font-medium mb-2.5">Account Number</label>
                                        <input type="number" name="account_number" id="account_number" placeholder="1234567890" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userBilling['billing']['account_number']) ? $userBilling['billing']['account_number'] : ''; ?>" />
                                    </div>
                                    <div class="flex flex-col w-full lg:w-1/2">
                                        <label for="location" class="text-sm text-ubuy-secondary font-medium mb-2.5">Bank Name</label>
                                        <select id="bank" name="bank" class="text-sm text-ubuy-secondary py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg appearance-none">
                                            <option >Choose</option>
                                            <option value="access" <?php echo $userBilling['billing']['bank']=='Access' ? "selected" : ''; ?>>Access Bank</option>
                                            <option value="citibank" <?php echo $userBilling['billing']['bank']=='Citibank' ? "selected" : ''; ?>>Citibank</option>
                                            <option value="diamond" <?php echo $userBilling['billing']['bank']=='Diamond' ? "selected" : ''; ?>>Diamond Bank</option>
                                            <option value="ecobank" <?php echo $userBilling['billing']['bank']=='Ecobank' ? "selected" : ''; ?>>Ecobank</option>
                                            <option value="fidelity" <?php echo $userBilling['billing']['bank']=='Fidelity' ? "selected" : ''; ?>>Fidelity Bank</option>
                                            <option value="firstbank" <?php echo $userBilling['billing']['bank']=='Firstbank' ? "selected" : ''; ?>>First Bank</option>
                                            <option value="fcmb" <?php echo $userBilling['billing']['bank']=='Fcmb' ? "selected" : ''; ?>>First City Monument Bank (FCMB)</option>
                                            <option value="gtb" <?php echo $userBilling['billing']['bank']=='Gtb' ? "selected" : ''; ?>>Guaranty Trust Bank (GTB)</option>
                                            <option value="heritage" <?php echo $userBilling['billing']['bank']=='Heritage' ? "selected" : ''; ?>>Heritage Bank</option>
                                            <option value="keystone" <?php echo $userBilling['billing']['bank']=='Keystone' ? "selected" : ''; ?>>Keystone Bank</option>
                                            <option value="polaris" <?php echo $userBilling['billing']['bank']=='Polaris' ? "selected" : ''; ?>>Polaris Bank</option>
                                            <option value="providus" <?php echo $userBilling['billing']['bank']=='Providus' ? "selected" : ''; ?>>Providus Bank</option>
                                            <option value="stanbic" <?php echo $userBilling['billing']['bank']=='Stanbic' ? "selected" : ''; ?>>Stanbic IBTC Bank</option>
                                            <option value="standard" <?php echo $userBilling['billing']['bank']=='Standard' ? "selected" : ''; ?>>Standard Chartered Bank</option>
                                            <option value="sterling" <?php echo $userBilling['billing']['bank']=='Sterling' ? "selected" : ''; ?>>Sterling Bank</option>
                                            <option value="suntrust" <?php echo $userBilling['billing']['bank']=='Suntrust' ? "selected" : ''; ?>>Suntrust Bank</option>
                                            <option value="union" <?php echo $userBilling['billing']['bank']=='Union' ? "selected" : ''; ?>>Union Bank</option>
                                            <option value="uba" <?php echo $userBilling['billing']['bank']=='Uba' ? "selected" : ''; ?>>United Bank for Africa (UBA)</option>
                                            <option value="unity" <?php echo $userBilling['billing']['bank']=='Unity' ? "selected" : ''; ?>>Unity Bank</option>
                                            <option value="wema" <?php echo $userBilling['billing']['bank']=='Wema' ? "selected" : ''; ?>>Wema Bank</option>
                                            <option value="zenith" <?php echo $userBilling['billing']['bank']=='Zenith' ? "selected" : ''; ?>>Zenith Bank</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="ml-4 mb-4">
                                    <button class="text-sm font-medium text-white rounded-lg bg-ubuy-blue py-2 px-6" type="submit" id="billingBtn">Update</button>
                                </div>
                                <p class="p-2 bg-yellow-200 text-xs font-medium bottom-16 text-ubuy-secondary rounded-lg w-full">
                                    Note: Account Holder’s Name has to be the same with the name on the legal document used for identity verification for any payment to be processed by Ubuy Services
                                </p>
                            </form> -->
                        

                        </div>
                        
                    </div>
                </div>
            </div>
        </main>
        <?php }elseif($_SESSION['user_role'] == "pro"){ ?>
        <main class="flex-1 overflow-y-auto overflow-x-hidden pt-24 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="fixed w-full h-56 bg-ubuy-blue xl:-ml-5 bg-no-repeat bg-cover bg-center sm:flex hidden items-center justify-center" style="background-image: url();">
                <span class="xl:text-9xl text-7xl text-white text-center xl:-ml-64 font-bold">Cover Photo</span>
            </div>
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full ">
                <div class="mb-36 w-full relative sm:block hidden image-upload">
                    <label for="file-input">   
                        <button class="absolute right-10 top-5 rounded-llg border border-ubuy-gray200 p-4 flex flex-row items-center" style="background: rgba(0, 0, 0, 0.2);">
                            <span>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.75 4.6875C5.71875 4.6875 4.875 5.53125 4.875 6.5625C4.875 7.59375 5.71875 8.4375 6.75 8.4375C7.78125 8.4375 8.625 7.59375 8.625 6.5625C8.625 5.53125 7.78125 4.6875 6.75 4.6875Z" fill="white"></path>
                                    <path d="M11.0625 2.8125H9.5625L8.3625 1.275C8.2875 1.18125 8.175 1.125 8.0625 1.125H5.4375C5.325 1.125 5.2125 1.18125 5.1375 1.275L3.9375 2.8125C3.9375 2.8125 3.31875 2.8125 2.8125 2.8125V2.4375C2.8125 2.23125 2.64375 2.0625 2.4375 2.0625H1.3125C1.10625 2.0625 0.9375 2.23125 0.9375 2.4375V2.8125C0.4125 2.8125 0 3.225 0 3.75V9.75C0 10.275 0.4125 10.6875 0.9375 10.6875H11.0625C11.5875 10.6875 12 10.275 12 9.75V3.75C12 3.225 11.5875 2.8125 11.0625 2.8125ZM6.75 9.5625C5.1 9.5625 3.75 8.2125 3.75 6.5625C3.75 4.9125 5.1 3.5625 6.75 3.5625C8.4 3.5625 9.75 4.9125 9.75 6.5625C9.75 8.2125 8.4 9.5625 6.75 9.5625Z" fill="white"></path>
                                </svg>

                            </span>
                            <span class="text-white ml-3 font-semibold text-sm">
                                Change Cover
                            </span>
                        </button>
                    </label>
                    <input id="file-input" type="file" onChange="chkFile(this)" />
                </div>
                <!-- Desktop and Tablet View -->
                <div class="sm:flex hidden w-full sm:flex-row flex-col items-stretch justify-items-stretch lg:my-7 my-4 lg:pl-7 lg:pr-10 px-4 gap-4 z-10 relative ">
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
                                <?php if($userData['verify_confirm'] == 3){?>
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
                                        <small><?php echo $userData['average_rating']; ?></small>
                                        <span>
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0L4.89806 2.76393H7.80423L5.45308 4.47214L6.35114 7.23607L4 5.52786L1.64886 7.23607L2.54692 4.47214L0.195774 2.76393H3.10194L4 0Z" fill="#25282B"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <span class="text-tiny text-ubuy-inactive"><?php echo $userData['rating']; ?> Rating</span>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-4">
                                    <span class="text-xs text-ubuy-secondary"><?php echo date('M Y', strtotime($userData['created_at'])); ?></span>
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
                                        <span class="text-xxxs font-medium -ml-2 mr-2 text-ubuy-secondary">
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
                                        <span class="text-xxxs font-medium -ml-2 mr-2 text-ubuy-secondary">
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
                                    <span class='text-ubuy-successDefault text-xxxs'>In Review</span>
                                <?php }elseif($userData['verify_confirm']== 2){ ?>
                                    <button class="text-white rounded text-xxxs px-4 py-0.5 bg-ubuy-blue" id="verifyBtn" onclick="startVerification()">Verify</button>
                                <?php }else{ ?>
                                    <svg width="15" height="15" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                <?php } ?>
                            </div>
                            <div class="flex flex-row items-center justify-between px-5 py-2.5 w-full border-b border-gray-200">
                                <div class="text-xs text-ubuy-inactive font-medium">Phone Number</div>
                                <div>
                                    <?php echo $userData['is_phone_verified'] == 0 ? '<button class="text-white rounded text-xxxs px-4 py-0.5 bg-ubuy-blue" id="phoneVerifyBtn" onclick="phoneVerify()">Verify</button>' : '<svg width="15" height="15" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /></svg>'; ?>
                                </div>

                            </div>
                            <div class="flex flex-row items-center justify-between px-5 py-2.5 w-full border-b border-ubuy-gray200">
                                <div class="text-xs text-ubuy-inactive font-medium">Email Address</div>
                                <?php echo $userData['email_verified_at'] == null ? '<button class="text-white rounded text-xxxs px-4 py-0.5 bg-ubuy-blue" id="emailVerifyBtn" onclick="verify_email(this.id);">Verify</button>' : '<svg width="15" height="15" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /></svg>'?>
                                
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
                                <button class="px-2.5 rounded-r-llg border border-ubuy-gray200 h-full">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 9H11C9.89543 9 9 9.89543 9 11V20C9 21.1046 9.89543 22 11 22H20C21.1046 22 22 21.1046 22 20V11C22 9.89543 21.1046 9 20 9Z" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M5 15H4C3.46957 15 2.96086 14.7893 2.58579 14.4142C2.21071 14.0391 2 13.5304 2 13V4C2 3.46957 2.21071 2.96086 2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H13C13.5304 2 14.0391 2.21071 14.4142 2.58579C14.7893 2.96086 15 3.46957 15 4V5" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-llg h-full relative flex-2">
                        <div class="border-b border-ubuy-gray200  overflow-y-visible overflow-x-auto h-20 w-full flex flex-col items-start">
                            <div class="flex flex-row items-center justify-start flex-nowrap h-full sm:max-w-fttx lg:w-full font-medium">
                                <button onclick="openTab(event, 'account-settings')" class="h-0 pt-0 px-7 pb-2 task-menu-item task-menu-active focus:outline-none whitespace-nowrap">
                                    Account Settings
                                </button>
                                <button onclick="openTab(event, 'skills-services')" class="h-0 pt-0 px-7 pb-2 task-menu-item focus:outline-none whitespace-nowrap">
                                    Skills &amp; Services
                                </button>
                                <button onclick="openTab(event, 'working-hours')" class="h-0 pt-0 px-7 pb-2 task-menu-item focus:outline-none whitespace-nowrap">
                                    Working Hours
                                </button>
                                <button onclick="openTab(event, 'billings')" class="h-0 pt-0 px-7 pb-2 task-menu-item focus:outline-none whitespace-nowrap">
                                    Billing Info
                                </button>
                            </div>
                        </div>
                        <div class="p-5 mt-5">
                            <form id="account-settings" class="flex flex-col gap-y-6 mb-8 task-tab">
                                <div class="flex xl:flex-row xl:gap-y-0 gap-y-5 flex-col items-center justify-start gap-x-10 w-full ">
                                    <div class="flex flex-col w-full xl:w-1/2 xl:mb-0 mb-5">
                                        <label for="first-name" class="text-sm text-ubuy-secondary font-medium mb-2.5">First Name</label>
                                        <input type="text" name="first_name" id="first_name" placeholder="John" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userData['first_name']) ? $userData['first_name'] : 'Not set'; ?>">
                                    </div>
                                    <div class="flex flex-col w-full xl:w-1/2">
                                        <label for="last-name" class="text-sm text-ubuy-secondary font-medium mb-2.5">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userData['last_name']) ? $userData['last_name'] : 'Not set'; ?>">
                                    </div>
                                </div>
                                <div class="flex xl:flex-row  xl:gap-y-0 gap-y-5 flex-col items-center justify-start gap-x-10 w-full">
                                    <div class="flex flex-col w-full xl:w-1/2">
                                        <label for="phone" class="text-sm text-ubuy-secondary font-medium mb-2.5">Phone Number</label>
                                        <input type="tel" name="phone" id="phone" placeholder="+234 810 727 075" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userData['number']) ? $userData['number'] : 'Not set'; ?>" readonly>
                                    </div>
                                    <div class="flex flex-col w-full xl:w-1/2">
                                        <label for="email" class="text-sm text-ubuy-secondary font-medium mb-2.5">Email Address</label>
                                        <input type="email" name="email" id="email" placeholder="John" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userData['email']) ? $userData['email'] : 'Not set'; ?>" readonly>
                                    </div>
                                </div>
                                <div class="flex xl:flex-row text-2xl font-bold pt-4">Business Details</div>
                                <div class="flex xl:flex-row  xl:gap-y-0 gap-y-5 flex-col items-center justify-start gap-x-10 w-full">
                                    <div class="flex flex-col w-full xl:w-1/2">
                                        <label for="business_name" class="text-sm text-ubuy-secondary font-medium mb-2.5">Business Name</label>
                                        <input type="text" name="business_name" id="business_name" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userProfile['profile']['business_name']) ? $userProfile['profile']['business_name'] : 'Not set'; ?>" />
                                    </div>
                                    <div class="flex flex-col w-full xl:w-1/2">
                                        <label for="website" class="text-sm text-ubuy-secondary font-medium mb-2.5">Website</label>
                                        <input type="text" name="website" id="website"  class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userProfile['profile']['website']) ? $userProfile['profile']['website'] : 'Not set'; ?>">
                                    </div>
                                </div>
                                <div class="flex flex-col w-full mb-5">
                                    <label for="about-me" class="text-sm text-ubuy-secondary font-medium mb-2.5">About Me</label>
                                    <textarea name="about-me" id="about-me" rows="8" class="resize-none text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg"><?php echo isset($userProfile['profile']['about_profile']) ? $userProfile['profile']['about_profile'] : 'Not set'; ?></textarea>
                                </div>
                                <div class="flex xl:flex-row xl:gap-y-0 gap-y-5 flex-col items-center justify-start gap-x-10 w-full">

                                    <div class="flex flex-col w-full xl:w-1/2">
                                        <label for="location" class="text-sm text-ubuy-secondary font-medium mb-2.5">Location</label>
                                        <input type="text" name="address" id="address" onFocus="initializeAutocompletePro();" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userProfile['profile']['pro_address']) ? $userProfile['profile']['pro_address'] : 'Set your location'; ?>">
                                        <input type="hidden" name="city" id="city" value="<?php echo isset($userProfile['profile']['pro_city']) ? $userProfile['profile']['pro_city'] : ''; ?>">
                                        <input type="hidden" name="state" id="state" value="<?php echo isset($userProfile['profile']['pro_state']) ? $userProfile['profile']['pro_state'] : ''; ?>">
                                        <input type="hidden" name="lat" id="lat" value="<?php echo isset($userProfile['profile']['lat']) ? $userProfile['profile']['lat'] : ''; ?>">
                                        <input type="hidden" name="lng" id="lng" value="<?php echo isset($userProfile['profile']['lng']) ? $userProfile['profile']['lng'] : ''; ?>">
                                    </div>
                                    <div class="flex flex-col w-full lg:w-1/2">
                                        <label for="num-employee" class="text-sm text-ubuy-secondary font-medium mb-2.5">Number of Employees</label>
                                        <input type="text" name="number_of_empolyees" id="number_of_empolyees" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userProfile['profile']['number_of_empolyees']) ? $userProfile['profile']['number_of_empolyees'] : ''; ?>">
                                    </div>
                                </div>
                                <div class="ml-4 mb-4">
                                    <button class="text-sm font-medium text-white rounded-lg bg-ubuy-blue py-2 px-6" type="submit" id="updateBtn">Update</button>
                                </div>
                            </form>
                            <div id="billings" class="flex-col gap-y-6 hidden mb-8 task-tab">
                                <div class="flex flex-col w-full">
                                    <label for="holder-name" class="text-sm text-ubuy-secondary font-medium mb-2.5">Account Holder’s Name</label>
                                    <input type="text" name="account_name" id="account_name" placeholder="John Ayomide" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userData['first_name']) ? $userData['first_name'].' '.$userData['last_name'] : 'Update your profile'; ?>" disabled/>
                                </div>
                                <div class="flex xl:flex-row flex-col items-center justify-start gap-10 w-full">
                                    <div class="flex flex-col w-full lg:w-1/2">
                                        <label for="account-number" class="text-sm text-ubuy-secondary font-medium mb-2.5">Account Number</label>
                                        <input type="number" name="account_number" id="account_number" placeholder="1234567890" class="text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg" value="<?php echo isset($userBilling['billing']['account_number']) ? $userBilling['billing']['account_number'] : ''; ?>" <?php echo isset($userBilling['billing']['account_number']) ? 'disabled' : ''; ?>/>
                                    </div>
                                    <div class="flex flex-col w-full lg:w-1/2">
                                        <label for="location" class="text-sm text-ubuy-secondary font-medium mb-2.5">Bank Name</label>
                                        <select id="bank" name="bank" class="text-sm text-ubuy-secondary py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg appearance-none">
                                            <option value="<?php echo isset($userBilling['billing']['bank']) ? $userBilling['billing']['bank'] : ''; ?>" <?php echo isset($userBilling['billing']['bank']) ? 'disabled' : ''; ?>><?php echo isset($userBilling['billing']['bank']) ? $userBilling['billing']['bank'] : 'Choose'; ?></option>
                                            <option value="access">Access Bank</option>
                                            <option value="citibank">Citibank</option>
                                            <option value="diamond">Diamond Bank</option>
                                            <option value="ecobank">Ecobank</option>
                                            <option value="fidelity">Fidelity Bank</option>
                                            <option value="firstbank">First Bank</option>
                                            <option value="fcmb">First City Monument Bank (FCMB)</option>
                                            <option value="gtb">Guaranty Trust Bank (GTB)</option>
                                            <option value="heritage">Heritage Bank</option>
                                            <option value="keystone">Keystone Bank</option>
                                            <option value="polaris">Polaris Bank</option>
                                            <option value="providus">Providus Bank</option>
                                            <option value="stanbic">Stanbic IBTC Bank</option>
                                            <option value="standard">Standard Chartered Bank</option>
                                            <option value="sterling">Sterling Bank</option>
                                            <option value="suntrust">Suntrust Bank</option>
                                            <option value="union">Union Bank</option>
                                            <option value="uba">United Bank for Africa (UBA)</option>
                                            <option value="unity">Unity Bank</option>
                                            <option value="wema">Wema Bank</option>
                                            <option value="zenith">Zenith Bank</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="ml-4 mb-4">
                                    <button class="text-sm font-medium text-white rounded-lg bg-ubuy-blue py-2 px-6" type="submit" id="billingBtn">Update</button>
                                </div>
                                <p class="p-2 bg-yellow-200 text-xs font-medium mt-16 text-ubuy-secondary rounded-lg w-full">
                                    Note: Account Holder’s Name has to be the same with the name on the legal document used for identity verification for any payment to be processed by Ubuy Services
                                </p>

                            </div>
                            <div class="task-tab hidden flex-col gap-y-6" id="skills-services">
                                <div class="lg:w-1/2 w-full mb-5">
                                    <div class="relative">
                                        <div class="flex items-center border-b rounded-llg border border-ubuy-gray200 py-2">
                                            <input name="service_name" id="pro_service" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Add service" aria-label="Add service" autocomplete="off">
                                            <input type="hidden" name="user_subcategory_id" id="user_subcategory_id" value="" />
                                            
                                            <button id="createSubCatBtn" onclick="addSubcategoryUser(this.id);" class="flex-shrink-0 bg-ubuy-blue hover:bg-teal-700 hover:border-teal-700 text-sm border-1 text-white py-3 px-2 rounded absolute right-0" type="button">Add</button>
                                        </div>
                                        <span id="serviceList" class="flex w-full absolute top-12 bg-white"></span>
                                    </div>
                                </div>
                                <div class="grid grid-flow-row lg:grid-cols-4 grid-cols-1 gap-5">
                                    <?php foreach($userService['subcategories'] as $us){
                                        
                                        $subDetails = $init->fetchSingleSubcategory($us['sub_category_id']);
                                        $subDetails = json_decode($subDetails, true);
                                        
                                        // var_dump($subDetails);
                                        
                                    ?>

                                        
                                        <div class="rounded-llg w-full h-28 flex items-center justify-center p-4 relative how-hero" 
                                        style="background-image: url('<?php echo $subDetails['subCategory']['public_bg_image']; ?>'); background-size: cover; background-position: center;">
                                            <button class="absolute right-4 top-4">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.5 4.5L4.5 13.5" stroke="#E5E5E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M4.5 4.5L13.5 13.5" stroke="#E5E5E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>
                                                <span class="font-medium text-lg text-white" style="background: #000000a6; padding: 5px 9px; border-radius: 10px;">
                                                    <?php echo $subDetails['subCategory']['name']; ?>
                                                </span>
                                        </div>

                                    <?php } ?>

                                </div>
                                <div class="flex flex-col w-full mt-10">
                                    <div class="lg:w-1/2 w-full flex flex-col">
                                        <!-- <div class="flex items-center border-b rounded-llg border border-ubuy-gray200 py-2 relative">
                                            <input name="skill-name" id="skill-name" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Add skill" aria-label="Add Skill" autocomplete="off">
                                            <button id="addSkillBtn" onclick="addSkill(this.id);" class="flex-shrink-0  bg-ubuy-blue hover:bg-teal-700 hover:border-teal-700 text-sm border-1 text-white py-3 px-2 rounded absolute right-0" type="button">Add</button>
                                        </div> -->
                                        <div class="relative">
                                            <div class="flex items-center border-b rounded-llg border border-ubuy-gray200 py-2">
                                                <input name="skill-name" id="skill-name" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Add service" aria-label="Add service" autocomplete="off">
                                                <input type="hidden" name="user_skill_id" id="user_skill_id" value="" />
                                                
                                                <button id="addSkillBtn" onclick="addSkill(this.id);" class="flex-shrink-0 bg-ubuy-blue hover:bg-teal-700 hover:border-teal-700 text-sm border-1 text-white py-3 px-2 rounded absolute right-0" type="button">Add</button>
                                            </div>
                                            <span id="skillList" class="flex w-full absolute top-12 bg-white"></span>
                                        </div>

                                    </div>
                                    <div class="flex flex-row flex-wrap mt-2.5 text-xs gap-2">

                                    <?php 

                                        foreach($proSkill['skills'] as $item){ ?>


                                        <div class="flex flex-row items-center rounded-3xl text-white py-1 px-2 bg-ubuy-blue">
                                            <span><?php echo $item['skill_title']; ?></span>
                                            <button class="ml-2">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.5 4.5L4.5 13.5" stroke="#E5E5E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M4.5 4.5L13.5 13.5" stroke="#E5E5E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>

                                        <?php } ?>
                                        



                                        

                                    </div>
                                </div>
                            </div>
                            <div class="task-tab hidden" id="working-hours">
                                <div class="w-full xl:block hidden">
                                    <table class="table-auto text-secondary font-normal text-xxs text-center w-full">
                                        <thead>
                                            <tr class="text-ubuy-inactive font-medium text-base">
                                                <th class="w-3/12 pl-5 pb-2.5"></th>
                                                <th class="w-4/12 pb-2.5">From</th>
                                                <th class="w-3/12 pb-2.5">Till</th>
                                                <th class="w-2/12 pb-2.5">Closed ?</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-4 text-base font-medium">
                                                    <span>Monday</span>
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00:00" type="time" name="start-time-monday" id="start-time-monday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00" type="time" name="end-time-monday" id="end-time-monday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                                </td>
                                                <td class="py-4">
                                                    <label for="is-monday-closed" class="close-check">
                                                        <input type="checkbox" class="hidden" id="is-monday-closed">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-4 text-base font-medium">
                                                    <span>Tuesday</span>
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00:00" type="time" name="start-time-tuesday" id="start-time-tuesday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00" type="time" name="end-time-tuesday" id="end-time-tuesday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                                </td>
                                                <td class="py-4">
                                                    <label for="is-tuesday-closed" class="close-check">
                                                        <input type="checkbox" class="hidden" id="is-tuesday-closed">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-4 text-base font-medium">
                                                    <span>Wednesday</span>
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00:00" type="time" name="start-time-wednesday" id="start-time-wednesday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00" type="time" name="end-time-wednesday" id="end-time-wednesday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                                </td>
                                                <td class="py-4">
                                                    <label for="is-wednesday-closed" class="close-check">
                                                        <input type="checkbox" class="hidden" id="is-wednesday-closed">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-4 text-base font-medium">
                                                    <span>Thursday</span>
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00:00" type="time" name="start-time-thursday" id="start-time-thursday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00" type="time" name="end-time-thursday" id="end-time-thursday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                                </td>
                                                <td class="py-4">
                                                    <label for="is-thursday-closed" class="close-check">
                                                        <input type="checkbox" class="hidden" id="is-thursday-closed">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-4 text-base font-medium">
                                                    <span>Friday</span>
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00:00" type="time" name="start-time-friday" id="start-time-friday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00" type="time" name="end-time-friday" id="end-time-friday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                                </td>
                                                <td class="py-4">
                                                    <label for="is-friday-closed" class="close-check">
                                                        <input type="checkbox" class="hidden" id="is-friday-closed">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-4 text-base font-medium">
                                                    <span>Saturday</span>
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00:00" type="time" name="start-time-saturday" id="start-time-saturday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00" type="time" name="end-time-saturday" id="end-time-saturday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                                </td>
                                                <td class="py-4">
                                                    <label for="is-saturday-closed" class="close-check">
                                                        <input type="checkbox" class="hidden" id="is-saturday-closed">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-4 text-base font-medium">
                                                    <span>Sunday</span>
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00:00" type="time" name="start-time-sunday" id="start-time-sunday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input opacity-75" disabled="">
                                                </td>
                                                <td class="py-4">
                                                    <input value="12:00" type="time" name="end-time-sunday" id="end-time-sunday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input opacity-75" disabled="">
                                                </td>
                                                <td class="py-4">
                                                    <label for="is-sunday-closed" class="close-check">
                                                        <input type="checkbox" class="hidden" id="is-sunday-closed" checked="">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="xl:hidden flex flex-col items-center  justify-center px-4 bg-white w-full">
                                    <div class="flex w-full justify-end">
                                        Closed ?
                                    </div>
                                    <div class="flex flex-row items-start w-full mt-5 justify-between">
                                        <div class="w-24 mr-2 mt-3 text-sm">
                                            Monday
                                        </div>
                                        <div class="flex flex-col flex-1">
                                            <div class="flex flex-row items-center mb-4">
                                                <div class="w-8 text-tiny">From</div>
                                                <input value="12:00:00" type="time" name="start-time-monday" id="start-time-monday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                            </div>
                                            <div class="flex flex-row items-center">
                                                <div class="w-8 text-tiny">Till</div>
                                                <input value="12:00" type="time" name="end-time-monday" id="end-time-monday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                            </div>
                                        </div>
                                        <div class="w-16 h-8 relative">
                                            <label for="is-monday-closed" class="close-check" style="top: 0; left: 18px;">
                                                <input type="checkbox" class="hidden" id="is-monday-closed">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-start w-full mt-5 justify-between">
                                        <div class="w-24 mr-2 mt-3 text-sm">
                                            Tuesday
                                        </div>
                                        <div class="flex flex-col flex-1">
                                            <div class="flex flex-row items-center mb-4">
                                                <div class="w-8 text-tiny">From</div>
                                                <input value="12:00:00" type="time" name="start-time-tuesday" id="start-time-tuesday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                            </div>
                                            <div class="flex flex-row items-center">
                                                <div class="w-8 text-tiny">Till</div>
                                                <input value="12:00" type="time" name="end-time-tuesday" id="end-time-tuesday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                            </div>
                                        </div>
                                        <div class="w-16 h-8 relative">
                                            <label for="is-tuesday-closed" class="close-check" style="top: 0; left: 18px;">
                                                <input type="checkbox" class="hidden" id="is-tuesday-closed">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-start w-full mt-5 justify-between">
                                        <div class="w-24 mr-2 mt-3 text-sm">
                                            Wednesday
                                        </div>
                                        <div class="flex flex-col flex-1">
                                            <div class="flex flex-row items-center mb-4">
                                                <div class="w-8 text-tiny">From</div>
                                                <input value="12:00:00" type="time" name="start-time-wednesday" id="start-time-wednesday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                            </div>
                                            <div class="flex flex-row items-center">
                                                <div class="w-8 text-tiny">Till</div>
                                                <input value="12:00" type="time" name="end-time-wednesday" id="end-time-wednesday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                            </div>
                                        </div>
                                        <div class="w-16 h-8 relative">
                                            <label for="is-wednesday-closed" class="close-check" style="top: 0; left: 18px;">
                                                <input type="checkbox" class="hidden" id="is-wednesday-closed">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-start w-full mt-5 justify-between">
                                        <div class="w-24 mr-2 mt-3 text-sm">
                                            Thursday
                                        </div>
                                        <div class="flex flex-col flex-1">
                                            <div class="flex flex-row items-center mb-4">
                                                <div class="w-8 text-tiny">From</div>
                                                <input value="12:00:00" type="time" name="start-time-thursday" id="start-time-thursday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                            </div>
                                            <div class="flex flex-row items-center">
                                                <div class="w-8 text-tiny">Till</div>
                                                <input value="12:00" type="time" name="end-time-thursday" id="end-time-thursday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                            </div>
                                        </div>
                                        <div class="w-16 h-8 relative">
                                            <label for="is-thursday-closed" class="close-check" style="top: 0; left: 18px;">
                                                <input type="checkbox" class="hidden" id="is-thursday-closed">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-start w-full mt-5 justify-between">
                                        <div class="w-24 mr-2 mt-3 text-sm">
                                            Friday
                                        </div>
                                        <div class="flex flex-col flex-1">
                                            <div class="flex flex-row items-center mb-4">
                                                <div class="w-8 text-tiny">From</div>
                                                <input value="12:00:00" type="time" name="start-time-friday" id="start-time-friday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                            </div>
                                            <div class="flex flex-row items-center">
                                                <div class="w-8 text-tiny">Till</div>
                                                <input value="12:00" type="time" name="end-time-friday" id="end-time-friday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                            </div>
                                        </div>
                                        <div class="w-16 h-8 relative">
                                            <label for="is-friday-closed" class="close-check" style="top: 0; left: 18px;">
                                                <input type="checkbox" class="hidden" id="is-friday-closed">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-start w-full mt-5 justify-between">
                                        <div class="w-24 mr-2 mt-3 text-sm">
                                            Saturday
                                        </div>
                                        <div class="flex flex-col flex-1">
                                            <div class="flex flex-row items-center mb-4">
                                                <div class="w-8 text-tiny">From</div>
                                                <input value="12:00:00" type="time" name="start-time-saturday" id="start-time-saturday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                            </div>
                                            <div class="flex flex-row items-center">
                                                <div class="w-8 text-tiny">Till</div>
                                                <input value="12:00" type="time" name="end-time-saturday" id="end-time-saturday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input">
                                            </div>
                                        </div>
                                        <div class="w-16 h-8 relative">
                                            <label for="is-saturday-closed" class="close-check" style="top: 0; left: 18px;">
                                                <input type="checkbox" class="hidden" id="is-saturday-closed">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-start w-full mt-5 justify-between">
                                        <div class="w-24 mr-2 mt-3 text-sm">
                                            Sunday
                                        </div>
                                        <div class="flex flex-col flex-1">
                                            <div class="flex flex-row items-center mb-4">
                                                <div class="w-8 text-tiny">From</div>
                                                <input value="12:00:00" type="time" name="start-time-sunday" id="start-time-sunday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input opacity-75" disabled="">
                                            </div>
                                            <div class="flex flex-row items-center">
                                                <div class="w-8 text-tiny">Till</div>
                                                <input value="12:00" type="time" name="end-time-sunday" id="end-time-sunday" class="relative text-ubuy-secondary text-sm py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg time-input opacity-75" disabled="">
                                            </div>
                                        </div>
                                        <div class="w-16 h-8 relative">
                                            <label for="is-sunday-closed" class="close-check" style="top: 0; left: 18px;">
                                                <input type="checkbox" class="hidden" id="is-sunday-closed" checked="">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="ml-6 mb-4">
                            <button class="text-sm font-medium text-white rounded-lg bg-ubuy-blue py-2 px-6">Update</button>
                        </div> -->
                    </div>
                </div>

















                <!-- Mobile view -->
                <div class="px-4 mt-4 sm:hidden flex flex-col pb-12">
                    <div>
                        <div class="w-full h-32 rounded-llg bg-ubuy-blue relative flex items-start pt-6 justify-center">
                            <span class="absolute right-4 top-0">
                                <svg width="50" height="72" viewBox="0 0 50 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M40 0H10V60H10.019L25 37.5L40 60V0Z" fill="#F1B974"></path>
                                        <path d="M25 15L26.7961 20.5279H32.6085L27.9062 23.9443L29.7023 29.4721L25 26.0557L20.2977 29.4721L22.0938 23.9443L17.3915 20.5279H23.2039L25 15Z" fill="white"></path>
                                    </g>
                                    <defs>
                                        <filter id="filter0_d" x="0" y="-8" width="50" height="80" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                            <feOffset dy="2"></feOffset>
                                            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                        </filter>
                                    </defs>
                                </svg>
                            </span>
                            <span class="text-2xl text-white text-center">Cover Photo</span>
                        </div>
                        <div class="flex flex-col items-center -mt-14">
                            <div class="relative">
                                <img src="assets/images/avatar.png" alt="avatar" class="rounded-full w-32 h-32">
                                <img src="<?php echo $userData['public_url'] != 'http://new.ubuy.ng/storage' ? $userData['public_url'] : "assets/images/ubuy_logo.svg" ?>" alt="avatar" class="rounded-full w-32 h-32" style="border: 2px solid var(--ubuy-blue);" />
                            </div>

                            <div class="flex flex-row items-center">
                                <span>John Ayomide</span>
                                <span>
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.2705 9.22324C19.6 8.67081 20.4 8.67081 20.7295 9.22324C21.0012 9.67877 21.6192 9.77666 22.0184 9.42738C22.5024 9.00379 23.2633 9.25103 23.406 9.87824C23.5236 10.3954 24.0811 10.6795 24.5687 10.4707C25.1599 10.2174 25.8072 10.6877 25.749 11.3282C25.7011 11.8565 26.1436 12.2989 26.6718 12.251C27.3123 12.1928 27.7826 12.8401 27.5293 13.4313C27.3205 13.9189 27.6046 14.4764 28.1218 14.594C28.749 14.7367 28.9962 15.4976 28.5726 15.9816C28.2233 16.3808 28.3212 16.9988 28.7768 17.2705C29.3292 17.6 29.3292 18.4 28.7768 18.7295C28.3212 19.0012 28.2233 19.6192 28.5726 20.0184C28.9962 20.5024 28.749 21.2633 28.1218 21.406C27.6046 21.5236 27.3205 22.0811 27.5293 22.5687C27.7826 23.1599 27.3123 23.8072 26.6718 23.749C26.1436 23.7011 25.7011 24.1436 25.749 24.6718C25.8072 25.3123 25.1599 25.7826 24.5687 25.5293C24.0811 25.3205 23.5236 25.6046 23.406 26.1218C23.2633 26.749 22.5024 26.9962 22.0184 26.5726C21.6192 26.2233 21.0012 26.3212 20.7295 26.7768C20.4 27.3292 19.6 27.3292 19.2705 26.7768C18.9988 26.3212 18.3808 26.2233 17.9816 26.5726C17.4976 26.9962 16.7367 26.749 16.594 26.1218C16.4764 25.6046 15.9189 25.3205 15.4313 25.5293C14.8401 25.7826 14.1928 25.3123 14.251 24.6718C14.2989 24.1436 13.8565 23.7011 13.3282 23.749C12.6877 23.8072 12.2174 23.1599 12.4707 22.5687C12.6795 22.0811 12.3954 21.5236 11.8782 21.406C11.251 21.2633 11.0038 20.5024 11.4274 20.0184C11.7767 19.6192 11.6788 19.0012 11.2232 18.7295C10.6708 18.4 10.6708 17.6 11.2232 17.2705C11.6788 16.9988 11.7767 16.3808 11.4274 15.9816C11.0038 15.4976 11.251 14.7367 11.8782 14.594C12.3954 14.4764 12.6795 13.9189 12.4707 13.4313C12.2174 12.8401 12.6877 12.1928 13.3282 12.251C13.8564 12.2989 14.2989 11.8564 14.251 11.3282C14.1928 10.6877 14.8401 10.2174 15.4313 10.4707C15.9189 10.6795 16.4764 10.3954 16.594 9.87824C16.7367 9.25103 17.4976 9.00379 17.9816 9.42738C18.3808 9.77666 18.9988 9.67877 19.2705 9.22324Z" fill="#119AE2"></path>
                                        <path d="M24 15L18.5 20.5L16 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex flex-row items-center justify-center w-full">
                                <div class="flex flex-col justify-center items-center mr-4">
                                    <span class="text-xs text-ubuy-secondary">10</span>
                                    <span class="text-tiny text-ubuy-inactive">Jobs Done</span>
                                </div>
                                <div id="profile-rating" class="flex flex-col justify-center px-4 relative">
                                    <div class="text-xs text-ubuy-secondary text-center flex flex-row items-center justify-center">
                                        <small>4.5</small>
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
                    </div>
                    <div class="flex flex-col mt-5 gap-y-2.5">
                        <div class="rounded-llg bg-white flex flex-row px-5 py-3 items-center font-medium">
                            <span class="mr-5">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="22" cy="22" r="22" fill="#F9F0CF" fill-opacity="0.5"></circle>
                                    <path d="M22 32C22 32 30 28 30 22V15L22 12L14 15V22C14 28 22 32 22 32Z" stroke="#F6A609" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M26 19L20.5 24.5L18 22" stroke="#F6A609" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <!-- To be removed Routing test -->
                            <a href="./identity-verification-mobile-step-1.html" class="flex-1 text-sm">
                                Verification
                            </a>
                            <span class="text-xs text-ubuy-positiveDefault">Completed</span>
                        </div>

                        <a href="../u-reward/index.html" class="rounded-llg bg-white flex flex-row px-5 py-3 items-center font-medium">
                            <span class="mr-5">
                                <svg width="33" height="44" viewBox="0 0 33 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7647 12.6216L12.1049 14.9034L20.0328 44L20.033 43.9999L22.7746 37.0405L28.6926 41.718L20.7647 12.6216Z" fill="#E93C3C"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4106 12.6216L21.0704 14.9034L13.1424 44L13.1419 43.9998L10.4004 37.0405L4.48276 41.7177L12.4106 12.6216Z" fill="#E93C3C"></path>
                                    <path d="M15.2373 2.01057C15.7788 1.10256 17.0939 1.10256 17.6354 2.01057C18.0819 2.75928 19.0978 2.92018 19.7538 2.34609C20.5494 1.64986 21.8001 2.05624 22.0345 3.08714C22.2278 3.93719 23.1443 4.40414 23.9456 4.06087C24.9174 3.64457 25.9813 4.41755 25.8857 5.47043C25.8068 6.3386 26.5341 7.0659 27.4023 6.98705C28.4552 6.89143 29.2282 7.95534 28.8119 8.92714C28.4686 9.72845 28.9355 10.6449 29.7856 10.8382C30.8165 11.0726 31.2229 12.3233 30.5266 13.1189C29.9525 13.7749 30.1134 14.7908 30.8622 15.2373C31.7702 15.7788 31.7702 17.0939 30.8622 17.6354C30.1134 18.0819 29.9525 19.0978 30.5266 19.7538C31.2229 20.5494 30.8165 21.8001 29.7856 22.0345C28.9355 22.2278 28.4686 23.1443 28.8119 23.9456C29.2282 24.9174 28.4552 25.9813 27.4023 25.8857C26.5341 25.8068 25.8068 26.5341 25.8857 27.4023C25.9813 28.4552 24.9174 29.2282 23.9456 28.8119C23.1443 28.4686 22.2278 28.9355 22.0345 29.7856C21.8001 30.8165 20.5494 31.2229 19.7538 30.5266C19.0978 29.9525 18.0819 30.1134 17.6354 30.8622C17.0939 31.7702 15.7788 31.7702 15.2373 30.8622C14.7908 30.1134 13.7749 29.9525 13.1189 30.5266C12.3233 31.2229 11.0726 30.8165 10.8382 29.7856C10.6449 28.9355 9.72845 28.4686 8.92714 28.8119C7.95534 29.2282 6.89143 28.4552 6.98705 27.4023C7.0659 26.5341 6.3386 25.8068 5.47043 25.8857C4.41755 25.9813 3.64457 24.9174 4.06087 23.9456C4.40414 23.1443 3.93719 22.2278 3.08714 22.0345C2.05624 21.8001 1.64986 20.5494 2.34609 19.7538C2.92018 19.0978 2.75928 18.0819 2.01057 17.6354C1.10256 17.0939 1.10256 15.7788 2.01057 15.2373C2.75928 14.7908 2.92018 13.7749 2.34609 13.1189C1.64986 12.3233 2.05624 11.0726 3.08714 10.8382C3.93719 10.6449 4.40414 9.72845 4.06087 8.92714C3.64457 7.95534 4.41755 6.89143 5.47043 6.98705C6.3386 7.0659 7.0659 6.3386 6.98705 5.47043C6.89143 4.41755 7.95534 3.64457 8.92714 4.06087C9.72845 4.40414 10.6449 3.93719 10.8382 3.08714C11.0726 2.05624 12.3233 1.64986 13.1189 2.34609C13.7749 2.92018 14.7908 2.75928 15.2373 2.01057Z" fill="#F1B974"></path>
                                    <circle cx="16.3398" cy="16.34" r="11.2066" fill="#D08230"></circle>
                                    <path d="M16.1335 10.2666L17.4507 14.3204H21.7131L18.2647 16.8257L19.5819 20.8795L16.1335 18.3741L12.6852 20.8795L14.0023 16.8257L10.554 14.3204H14.8164L16.1335 10.2666Z" fill="white"></path>
                                </svg>
                            </span>
                            <span class="flex-1 text-sm" style="color: #D08230;">
                                UReward
                            </span>
                            <small class="text-tiny text-ubuy-secondary mr-6">78 Points</small>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>

                        <a href="./account-settings-mobile.html" class="rounded-llg bg-white flex flex-row px-5 py-3 items-center font-medium">
                            <span class="mr-5">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="22" cy="22" r="22" fill="#D0F9CF" fill-opacity="0.5"></circle>
                                    <path d="M22 25C23.6569 25 25 23.6569 25 22C25 20.3431 23.6569 19 22 19C20.3431 19 19 20.3431 19 22C19 23.6569 20.3431 25 22 25Z" stroke="#1AB759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M29.4 25C29.2669 25.3016 29.2272 25.6362 29.286 25.9606C29.3448 26.285 29.4995 26.5843 29.73 26.82L29.79 26.88C29.976 27.0657 30.1235 27.2863 30.2241 27.5291C30.3248 27.7719 30.3766 28.0322 30.3766 28.295C30.3766 28.5578 30.3248 28.8181 30.2241 29.0609C30.1235 29.3037 29.976 29.5243 29.79 29.71C29.6043 29.896 29.3837 30.0435 29.1409 30.1441C28.8981 30.2448 28.6378 30.2966 28.375 30.2966C28.1122 30.2966 27.8519 30.2448 27.6091 30.1441C27.3663 30.0435 27.1457 29.896 26.96 29.71L26.9 29.65C26.6643 29.4195 26.365 29.2648 26.0406 29.206C25.7162 29.1472 25.3816 29.1869 25.08 29.32C24.7842 29.4468 24.532 29.6572 24.3543 29.9255C24.1766 30.1938 24.0813 30.5082 24.08 30.83V31C24.08 31.5304 23.8693 32.0391 23.4942 32.4142C23.1191 32.7893 22.6104 33 22.08 33C21.5496 33 21.0409 32.7893 20.6658 32.4142C20.2907 32.0391 20.08 31.5304 20.08 31V30.91C20.0723 30.579 19.9651 30.258 19.7725 29.9887C19.5799 29.7194 19.3107 29.5143 19 29.4C18.6984 29.2669 18.3638 29.2272 18.0394 29.286C17.715 29.3448 17.4157 29.4995 17.18 29.73L17.12 29.79C16.9343 29.976 16.7137 30.1235 16.4709 30.2241C16.2281 30.3248 15.9678 30.3766 15.705 30.3766C15.4422 30.3766 15.1819 30.3248 14.9391 30.2241C14.6963 30.1235 14.4757 29.976 14.29 29.79C14.104 29.6043 13.9565 29.3837 13.8559 29.1409C13.7552 28.8981 13.7034 28.6378 13.7034 28.375C13.7034 28.1122 13.7552 27.8519 13.8559 27.6091C13.9565 27.3663 14.104 27.1457 14.29 26.96L14.35 26.9C14.5805 26.6643 14.7352 26.365 14.794 26.0406C14.8528 25.7162 14.8131 25.3816 14.68 25.08C14.5532 24.7842 14.3428 24.532 14.0745 24.3543C13.8062 24.1766 13.4918 24.0813 13.17 24.08H13C12.4696 24.08 11.9609 23.8693 11.5858 23.4942C11.2107 23.1191 11 22.6104 11 22.08C11 21.5496 11.2107 21.0409 11.5858 20.6658C11.9609 20.2907 12.4696 20.08 13 20.08H13.09C13.421 20.0723 13.742 19.9651 14.0113 19.7725C14.2806 19.5799 14.4857 19.3107 14.6 19C14.7331 18.6984 14.7728 18.3638 14.714 18.0394C14.6552 17.715 14.5005 17.4157 14.27 17.18L14.21 17.12C14.024 16.9343 13.8765 16.7137 13.7759 16.4709C13.6752 16.2281 13.6234 15.9678 13.6234 15.705C13.6234 15.4422 13.6752 15.1819 13.7759 14.9391C13.8765 14.6963 14.024 14.4757 14.21 14.29C14.3957 14.104 14.6163 13.9565 14.8591 13.8559C15.1019 13.7552 15.3622 13.7034 15.625 13.7034C15.8878 13.7034 16.1481 13.7552 16.3909 13.8559C16.6337 13.9565 16.8543 14.104 17.04 14.29L17.1 14.35C17.3357 14.5805 17.635 14.7352 17.9594 14.794C18.2838 14.8528 18.6184 14.8131 18.92 14.68H19C19.2958 14.5532 19.548 14.3428 19.7257 14.0745C19.9034 13.8062 19.9987 13.4918 20 13.17V13C20 12.4696 20.2107 11.9609 20.5858 11.5858C20.9609 11.2107 21.4696 11 22 11C22.5304 11 23.0391 11.2107 23.4142 11.5858C23.7893 11.9609 24 12.4696 24 13V13.09C24.0013 13.4118 24.0966 13.7262 24.2743 13.9945C24.452 14.2628 24.7042 14.4732 25 14.6C25.3016 14.7331 25.6362 14.7728 25.9606 14.714C26.285 14.6552 26.5843 14.5005 26.82 14.27L26.88 14.21C27.0657 14.024 27.2863 13.8765 27.5291 13.7759C27.7719 13.6752 28.0322 13.6234 28.295 13.6234C28.5578 13.6234 28.8181 13.6752 29.0609 13.7759C29.3037 13.8765 29.5243 14.024 29.71 14.21C29.896 14.3957 30.0435 14.6163 30.1441 14.8591C30.2448 15.1019 30.2966 15.3622 30.2966 15.625C30.2966 15.8878 30.2448 16.1481 30.1441 16.3909C30.0435 16.6337 29.896 16.8543 29.71 17.04L29.65 17.1C29.4195 17.3357 29.2648 17.635 29.206 17.9594C29.1472 18.2838 29.1869 18.6184 29.32 18.92V19C29.4468 19.2958 29.6572 19.548 29.9255 19.7257C30.1938 19.9034 30.5082 19.9987 30.83 20H31C31.5304 20 32.0391 20.2107 32.4142 20.5858C32.7893 20.9609 33 21.4696 33 22C33 22.5304 32.7893 23.0391 32.4142 23.4142C32.0391 23.7893 31.5304 24 31 24H30.91C30.5882 24.0013 30.2738 24.0966 30.0055 24.2743C29.7372 24.452 29.5268 24.7042 29.4 25V25Z" stroke="#1AB759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>

                            </span>
                            <span class="flex-1 text-sm text-ubuy-black">
                                Account Settings
                            </span>

                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>

                        <a href="./working-hour-mobile.html" class="rounded-llg bg-white flex flex-row px-5 py-3 items-center font-medium">
                            <span class="mr-5">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="22" cy="22" r="22" fill="#FFBC1F"></circle>
                                    <path d="M29 32H15C13.8954 32 13 31.1046 13 30V16C13 14.8954 13.8954 14 15 14H17V12H19V14H25V12H27V14H29C30.1046 14 31 14.8954 31 16V30C31 31.1046 30.1046 32 29 32ZM15 20V30H29V20H15ZM15 16V18H29V16H15ZM23 28H17V22H23V28Z" fill="#FFBC1F"></path>
                                </svg>

                            </span>
                            <span class="flex-1 text-sm text-ubuy-black">
                                Working Hours
                            </span>

                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>

                        <a href="./skills-expertise-mobile.html" class="rounded-llg bg-white flex flex-row px-5 py-3 items-center font-medium">
                            <span class="mr-5">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="22" cy="22" r="22" fill="#9B51E0"></circle>
                                    <path d="M22.8971 31.968C22.366 31.9696 21.8565 31.7586 21.4821 31.382L13.6481 23.547C13.2346 23.1348 13.0227 22.5621 13.0681 21.98L13.5681 15.414C13.6394 14.4264 14.4262 13.6416 15.4141 13.573L21.9801 13.073C22.0311 13.062 22.0831 13.062 22.1341 13.062C22.6639 13.0634 23.1718 13.274 23.5471 13.648L31.3821 21.482C31.7573 21.8571 31.9681 22.3659 31.9681 22.8965C31.9681 23.4271 31.7573 23.9359 31.3821 24.311L24.3111 31.382C23.9369 31.7583 23.4277 31.9693 22.8971 31.968ZM22.1331 15.062L15.5621 15.562L15.0621 22.133L22.8971 29.968L29.9671 22.898L22.1331 15.062ZM18.6541 20.654C17.6999 20.6542 16.8785 19.9804 16.6921 19.0446C16.5058 18.1088 17.0065 17.1717 17.8879 16.8064C18.7694 16.4411 19.7861 16.7493 20.3164 17.5426C20.8466 18.3359 20.7426 19.3932 20.0681 20.068C19.6939 20.4443 19.1847 20.6553 18.6541 20.654Z" fill="#9B51E0"></path>
                                </svg>
                            </span>
                            <span class="flex-1 text-sm text-ubuy-black">
                                Skills and Expertise
                            </span>

                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>

                        <a href="./billing-info-mobile.html" class="rounded-llg bg-white flex flex-row px-5 py-3 items-center font-medium">
                            <span class="mr-5">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="22" cy="22" r="22" fill="#2AC769"></circle>
                                    <path d="M30 30H14C12.8954 30 12 29.1046 12 28V16C12 14.8954 12.8954 14 14 14H30C31.1046 14 32 14.8954 32 16V28C32 29.1046 31.1046 30 30 30ZM14 22V28H30V22H14ZM14 16V18H30V16H14ZM23 26H16V24H23V26Z" fill="#2AC769"></path>
                                </svg>
                            </span>
                            <span class="flex-1 text-sm text-ubuy-black">
                                Billing Information
                            </span>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>

                        <div class="rounded-llg bg-white flex flex-row px-5 py-6 items-center font-medium">
                            <span class="flex-1 text-sm text-ubuy-black">
                                Email Notifications
                            </span>
                            <span>
                                <div class="text-tiny text-ubuy-positiveDefault">
                                    <label for="email-notif" class="relative inline-block w-6 h-4 cursor-pointer">
                                        <input type="checkbox" name="switch" id="email-notif" class="opacity-0 h-0 w-0 switch">
                                        <span class="switch-slider relative w-6 h-4 border rounded-2xl bg-ubuy-blue"></span>
                                    </label>
                                </div>
                            </span>
                        </div>

                        <div class="rounded-llg bg-white flex flex-row px-5 py-6 items-center font-medium">
                            <span class="flex-1 text-sm text-ubuy-black">
                                SMS Notifications
                            </span>
                            <span>
                                <div class="text-tiny text-ubuy-positiveDefault">
                                    <label for="sms-notif" class="relative inline-block w-6 h-4 cursor-pointer">
                                        <input type="checkbox" name="switch" id="sms-notif" class="opacity-0 h-0 w-0 switch">
                                        <span class="switch-slider relative w-6 h-4 border rounded-2xl bg-ubuy-blue"></span>
                                    </label>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php } ?>

<?php
if($_SESSION['user_role'] == 'customer'){
    require_once 'inc/customer-footer.php';
}elseif($_SESSION['user_role'] == 'pro'){
    require_once 'inc/pro-footer.php';
}
?>
<script type="text/javascript">
    function initializeAutocompletePro(){
        var input = document.getElementById('address');
        var options = {
            types: ['(regions)'],
            componentRestrictions: {country: "NG"}
        };
        var autocomplete = new google.maps.places.Autocomplete(input, options);
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            // console.log(place);
            $("#lat").val(place.geometry.location.lat());
            $("#lng").val(place.geometry.location.lng());
            // var placeId = place.place_id;
            $("#city").val(place.address_components[0].long_name);
            $("#state").val(place.address_components[3].long_name);

        });
    }
    function initializeAutocomplete(){
        var input = document.getElementById('locality');
        var options = {
            types: ['(regions)'],
            componentRestrictions: {country: "NG"}
        };
        var autocomplete = new google.maps.places.Autocomplete(input, options);
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            // console.log(place);
            $("#lat").val(place.geometry.location.lat());
            $("#lng").val(place.geometry.location.lng());
            // var placeId = place.place_id;
            $("#city").val(place.address_components[0].long_name);
            $("#state").val(place.address_components[3].long_name);

        });
    }

    $(document).ready(function(){                    
        
        $('#skill-name').keydown(function(){ 
            var query = $(this).val();
            if(query != '')
            {
                $.ajax({
                    url:"endpoints/skills.php",
                    method:"POST",
                    data:{query:query},
                    success:function(data){
                        console.log(data);
                        $('#skillList').fadeIn();
                        $('#skillList').html(data);
                    }
                });
            }
        });
        $(document).on('click', 'li', function(){
            $('#skill-name').val($(this).text());  
            $("#user_skill_id").val($(this).attr("id"));
            $('#pro_service')[0].reset();
            $('#skillList').hide();  
        });       
        
        $('#pro_service').keydown(function(){ 
            var query = $(this).val();
            if(query != '')
            {
                $.ajax({
                    url:"endpoints/sub-category.php",
                    method:"POST",
                    data:{query:query},
                    success:function(data){
                        $('#serviceList').fadeIn();
                        $('#serviceList').html(data);
                    }
                });
            }
        });
        $(document).on('click', 'li', function(){  
            $('#pro_service').val($(this).text()); 
            $("#user_subcategory_id").val($(this).attr("id"));
            
            $('#serviceList').hide();  
        }); 

        $("#account-settings").on("submit", function(e){
            e.preventDefault();                
            document.getElementById("updateBtn").disabled = true;
            $("#updateBtn").html("Please wait...");
            var url = "endpoints/update-account.php";
            $.ajax({
                type: "POST",
                url: url,
                dataType: 'json',
                data: $("#account-settings").serialize(),
                success: function(data)
                {
                    console.log(data);
                    if(data.error == "Validation Exception"){
                        let p = data.error_message;
                        for (var key in p) {
                            toastr.error(p[key], "Error:", {timeOut: 8000});
                        }
                        document.getElementById("updateBtn").disabled = false;
                        $("#updateBtn").html("Create an account");
                    }else{
                        toastr.success(data.message, "Success:", {timeOut: 7000});
                        setTimeout(function(){
                            window.location.reload();
                        }, 3000);
                    }
                }
            });
            return false;
        });

        $("#billing").on("submit", function(e){
            e.preventDefault();                
            document.getElementById("billingBtn").disabled = true;
            $("#billingBtn").html("Please wait...");
            var url = "endpoints/update-billing.php";
            $.ajax({
                type: "POST",
                url: url,
                dataType: 'json',
                data: $("#billing").serialize(),
                success: function(data)
                {
                    // console.log(data);
                    if(data.error == "Validation Exception"){
                        let p = data.error_message;
                        for (var key in p) {
                            toastr.error(p[key], "Error:", {timeOut: 8000});
                        }
                        document.getElementById("billingBtn").disabled = false;
                        $("#billingBtn").html("Update");
                    }else{
                        document.getElementById("billingBtn").disabled = false;
                        $("#billingBtn").html("Update");
                        toastr.success("Billing account updated successfully!", {timeOut: 7000});
                        // setTimeout(function(){
                        //     window.location.reload();
                        // }, 3000);
                    }
                }
            });
            return false;
        });
    });

    function addSubcategoryUser(id){
        document.getElementById(id).disabled = true;
        $("#"+id).html('<span class="text-xxxs">Wait...</span>');
        var url = "endpoints/pro-add-subcategory.php";
        $.ajax({
            type: "POST",
            url: url,
            dataType: 'json',
            data: {
                'subcategory_id' : $("#user_subcategory_id").val(),
                'user_id' : <?php echo $userData['id']; ?>
            },
            success: function(data)
            {
                console.log(data);
                toastr.success(data.message, {timeOut: 7000});
            }
        });
        return false;
    }

    function addSkill(id){
        document.getElementById(id).disabled = true;
        $("#"+id).html('<span class="text-xxxs">Wait...</span>');
        var url = "endpoints/pro-add-skill.php";
        $.ajax({
            type: "POST",
            url: url,
            dataType: 'json',
            data: {
                'skill_title' : $("#skill-name").val(),
                'skill_id' : $("#user_skill_id").val()
            },
            success: function(data)
            {
                console.log(data);
                toastr.success(data.message, {timeOut: 7000});
            }
        });
        return false;
    }


    function chkFile(file1) {
        toastr.error("Profile picture uploading...", "Please wait", {timeOut: 12000});
        var file = file1.files[0];
        var formData = new FormData();
        formData.append('formData', file);
        $.ajax({
            type: "POST",
            url: "endpoints/upload-pic.php",    
            contentType: false,
            processData: false,
            dataType: 'json',
            data: formData,
            success: function (data) {
                console.log(data);
                if(data.success == true){
                    toastr.success("Profile picture updated!", "Success", {timeOut: 7000});
                    setTimeout(function(){
                        window.location.reload();
                    }, 3000);
                }else{
                    let p = data.error_message;
                    for (var key in p) {
                        toastr.error(p[key], "Error:", {timeOut: 8000});
                    }
                    document.getElementById("updateBtn").disabled = false;
                    $("#updateBtn").html("Update");
                }
            }
        });
    }
</script>