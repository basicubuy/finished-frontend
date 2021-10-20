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


    $dispute = $init->getSingleDispute($_GET['dispute_id']);
    $spi = json_decode($dispute, true);
    $dispute = $spi['dispute'];
    $sp = $dispute['project'];
    $submitted = $dispute['user_submitted'];
    $against = $dispute['user_against'];
    $comments = $dispute['comments'];

?>
        <main class="flex-1 overflow-auto sm:pt-24 pt-20 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="my-0 mx-auto w-full lg:pl-6 sm:py-6 pt-6 py-2 lg:pr-8 px-4 flex flex-row gap-x-5">

                    <div class="flex flex-col flex-1 sm:gap-y-5 gap-y-2.5">
                        <div class=" w-full bg-white rounded-llg flex flex-col justify-start p-5 min-h-220">
                            <div class="flex flex-row items-center justify-between mb-5">
                                <h1 class="text-base font-medium text-ubuy-black">Dispute Information</h1>
                                <button class="rounded text-center text-white font-medium <?php echo $dispute['status'] == "open" ? "bg-ubuy-warningDefault" : "bg-ubuy-positiveDefault" ?> py-1 px-2 text-xxxs">
                                    <?php echo ucfirst($dispute['assigned_status']); ?>
                                </button>
                            </div>
                            <div class="text-lg mb-2.5">
                                <span class="text-ubuy-gray500 fo">Category:</span>
                                <span class="text-ubuy-black font-medium"><?php echo $dispute['subject']; ?></span>
                            </div>

                            <p class="text-sm font-normal text-left w-11/12 mb-5">
                            <?php echo $dispute['description']; ?>
                            </p>
                            <div class="hidden">
                                <h1 class="text-lg font-medium text-left text-ubuy-secondary mb-2">Attached Files</h1>
                                <div class="grid grid-flow-row lg:grid-cols-2 grid-cols-1 gap-5 text-sm">

                                    <div class="border border-ubuy-gray200 rounded-llg px-5 py-3 flex flex-row justify-between">
                                        <span>
                                            File001.jpg
                                        </span>
                                        <button>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6L6 18" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6 6L18 18" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="border border-ubuy-gray200 rounded-llg px-5 py-3 flex flex-row justify-between">
                                        <span>
                                            File001.jpg
                                        </span>
                                        <button>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6L6 18" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6 6L18 18" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="border border-ubuy-gray200 rounded-llg px-5 py-3 flex flex-row justify-between">
                                        <span>
                                            File001.jpg
                                        </span>
                                        <button>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6L6 18" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6 6L18 18" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="border border-ubuy-gray200 rounded-llg px-5 py-3 flex flex-row justify-between">
                                        <span>
                                            File001.jpg
                                        </span>
                                        <button>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6L6 18" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6 6L18 18" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="xl:hidden flex">
                            <div class="flex flex-row gap-x-3 p-5 relative text-ubuy-secondary bg-white rounded-llg w-full">
                                <div>
                                    <img src="<?php echo $pro['public_url']; ?>" alt="avatar" class="rounded-full" />
                                </div>
                                <div class="flex flex-col w-full">
                                    <h1 class="text-ubuy-black text-sm"><?php echo $pro['last_name'].' '.$pro['first_name'][0]; ?>.</h1>
                                    <span class="text-tiny "><?php echo $pro_services['service_name']; ?></span>
                                    <div class="flex flex-row items-center gap-1">
                                        <div class="ratings text-3xl">
                                                <div class="empty-stars mx-auto"></div>
                                                <?php 
                                                    $rate = ($pro['average_rating']*100)/5;
                                                ?>
                                                <!-- Add the ratings percentage as the width -->
                                                <div class="full-stars" style="width:<?php echo $rate; ?>%"></div>
                                            </div>
                                        <span class="text-xs"><?php echo $pro['rating']; ?></span>

                                    </div>
                                    <div class="flex flex-row flex-wrap items-start w-full justify-between my-1 gap-y-1">
                                        <div class="flex flex-row items-center justify-center">
                                            <span class="mr-2">
                                                <?php echo $pro['verify_confirm'] == 3 ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                <?php echo $pro['is_phone_verified'] == 1 ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                <?php echo $pro['email_verified_at'] != null ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                        stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>' : '<img src="assets/images/cancel.svg" width="8" height="8" />'; ?>
                                            </span>
                                            <span class="text-tinyer">Email Verified</span>
                                        </div>
                                    </div>
                                    <!-- <div class="self-end text-tiny text-ubuy-blue mt-2">
                                        <button class="text-white rounded  bg-ubuy-blue px-2 py-1">Invite to Task</button>
                                    </div> -->
                                </div>
                                <button class="absolute right-5 top-5">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.8406 2.61012C19.3299 2.09912 18.7234 1.69376 18.056 1.4172C17.3885 1.14064 16.6731 0.998291 15.9506 0.998291C15.2281 0.998291 14.5127 1.14064 13.8453 1.4172C13.1778 1.69376 12.5714 2.09912 12.0606 2.61012L11.0006 3.67012L9.94061 2.61012C8.90892 1.57842 7.50964 0.998826 6.05061 0.998826C4.59157 0.998826 3.1923 1.57842 2.16061 2.61012C1.12892 3.64181 0.549316 5.04108 0.549316 6.50012C0.549316 7.95915 1.12892 9.35842 2.16061 10.3901L3.22061 11.4501L11.0006 19.2301L18.7806 11.4501L19.8406 10.3901C20.3516 9.87936 20.757 9.27293 21.0335 8.60547C21.3101 7.93801 21.4524 7.2226 21.4524 6.50012C21.4524 5.77763 21.3101 5.06222 21.0335 4.39476C20.757 3.7273 20.3516 3.12087 19.8406 2.61012Z"
                                            fill="#FB4E4E" />
                                    </svg>

                                </button>
                            </div>

                        </div>
                        <div class="bg-white rounded-llg flex-1 p-5">
                            <h1 class="text-ubuy-black text-base text-left font-medium">Comments</h1>
                            <div class="w-full max-h-724 overflow-y-auto px-5 py-4" id="comment-section">

                            <?php foreach ($comments as $comment) { 

                                if($comment['user_id'] == $submitted['id']){
                                    $sector = "comment-sender";
                                }else{
                                    $sector = "comment-receiver";
                                }
                                ?>

                                <div class="<?php echo $sector; ?> relative p-4 rounded-r-llg rounded-tr-llg rounded-b-llg mt-5">
                                    <p class="text-sm text-ubuy-secondary">
                                        <?php echo $comment['comment']; ?>
                                    </p>
                                </div>


                            <?php } ?>

                            </div>
                            <div>
                                <div class="flex flex-row items-center w-full rounded-llg bg-ubuy-gray400 py-2 px-4">
                                    <form id="comment_dispute_form" class="flex w-full">
                                        <input type="hidden" id="dispute_id" name="dispute_id" value="<?php echo $_GET['dispute_id']; ?>" />
                                        <input type="text" id="dispute_comment" name="dispute_comment" class="flex-1 py-2 px-2 bg-ubuy-gray400 mr-3 focus:outline-none" placeholder="|Type a message" />
                                        <button id="sendCommentBtn">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.2821 12.0487H6.72573" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M22.2828 12.1421L3.19088 21.3345L6.72641 12.1421L3.19088 2.94975L22.2828 12.1421Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-col gap-y-6 hidden xl:flex">
                        <?php if($submitted['user_role'] == "pro" || $against['user_role'] == "pro"){ ?>
                        <div class="flex flex-col items-center px-5 pt-5 bg-white rounded-llg pb-6 w-72">
                            <img src="<?php echo $against['public_url']; ?>" alt="avatar" class="rounded-full w-32 h-32" />
                            <div class="flex flex-row items-center">
                                <span><?php echo $against['last_name'].' '.$against['first_name'][0]; ?>.</span>
                                <span>
                                    <?php echo $against['verify_confirm'] == 3 ? '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.2705 9.22324C19.6 8.67081 20.4 8.67081 20.7295 9.22324C21.0012 9.67877 21.6192 9.77666 22.0184 9.42738C22.5024 9.00379 23.2633 9.25103 23.406 9.87824C23.5236 10.3954 24.0811 10.6795 24.5687 10.4707C25.1599 10.2174 25.8072 10.6877 25.749 11.3282C25.7011 11.8565 26.1436 12.2989 26.6718 12.251C27.3123 12.1928 27.7826 12.8401 27.5293 13.4313C27.3205 13.9189 27.6046 14.4764 28.1218 14.594C28.749 14.7367 28.9962 15.4976 28.5726 15.9816C28.2233 16.3808 28.3212 16.9988 28.7768 17.2705C29.3292 17.6 29.3292 18.4 28.7768 18.7295C28.3212 19.0012 28.2233 19.6192 28.5726 20.0184C28.9962 20.5024 28.749 21.2633 28.1218 21.406C27.6046 21.5236 27.3205 22.0811 27.5293 22.5687C27.7826 23.1599 27.3123 23.8072 26.6718 23.749C26.1436 23.7011 25.7011 24.1436 25.749 24.6718C25.8072 25.3123 25.1599 25.7826 24.5687 25.5293C24.0811 25.3205 23.5236 25.6046 23.406 26.1218C23.2633 26.749 22.5024 26.9962 22.0184 26.5726C21.6192 26.2233 21.0012 26.3212 20.7295 26.7768C20.4 27.3292 19.6 27.3292 19.2705 26.7768C18.9988 26.3212 18.3808 26.2233 17.9816 26.5726C17.4976 26.9962 16.7367 26.749 16.594 26.1218C16.4764 25.6046 15.9189 25.3205 15.4313 25.5293C14.8401 25.7826 14.1928 25.3123 14.251 24.6718C14.2989 24.1436 13.8565 23.7011 13.3282 23.749C12.6877 23.8072 12.2174 23.1599 12.4707 22.5687C12.6795 22.0811 12.3954 21.5236 11.8782 21.406C11.251 21.2633 11.0038 20.5024 11.4274 20.0184C11.7767 19.6192 11.6788 19.0012 11.2232 18.7295C10.6708 18.4 10.6708 17.6 11.2232 17.2705C11.6788 16.9988 11.7767 16.3808 11.4274 15.9816C11.0038 15.4976 11.251 14.7367 11.8782 14.594C12.3954 14.4764 12.6795 13.9189 12.4707 13.4313C12.2174 12.8401 12.6877 12.1928 13.3282 12.251C13.8564 12.2989 14.2989 11.8564 14.251 11.3282C14.1928 10.6877 14.8401 10.2174 15.4313 10.4707C15.9189 10.6795 16.4764 10.3954 16.594 9.87824C16.7367 9.25103 17.4976 9.00379 17.9816 9.42738C18.3808 9.77666 18.9988 9.67877 19.2705 9.22324Z"
                                            fill="#119AE2" />
                                        <path d="M24 15L18.5 20.5L16 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>' : ''; ?>
                                </span>
                            </div>
                            <div class="my-2">
                                <span class="py-1 px-2 rounded-2xl border border-ubuy-inactive text-ubuy-inactive text-tiny">Out of Work</span>
                            </div>
                            <div class="flex flex-row items-center justify-center w-full">
                                <div class="flex flex-col justify-center items-center mr-4">
                                    <span class="text-xs text-ubuy-secondary">0</span>
                                    <span class="text-tiny text-ubuy-inactive"> Jobs Done</span>
                                </div>
                                <div id="profile-rating" class="flex flex-col px-4 relative">
                                    <div class="text-xs text-ubuy-secondary flex flex-row items-center justify-center">
                                        <span><?php echo $against['average_rating']; ?></span>
                                        <span>
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0L4.89806 2.76393H7.80423L5.45308 4.47214L6.35114 7.23607L4 5.52786L1.64886 7.23607L2.54692 4.47214L0.195774 2.76393H3.10194L4 0Z" fill="#25282B" />
                                            </svg>
                                        </span>
                                    </div>
                                    <span class="text-tiny text-ubuy-inactive"><?php echo $against['rating']; ?> Ratings</span>
                                </div>
                                <div class="flex flex-col justify-center items-center ml-4">
                                    <span class="text-xs text-ubuy-secondary"><?php echo date('M Y', strtotime($against['created_at'])); ?></span>
                                    <span class="text-tiny text-ubuy-inactive">Date Joined</span>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-between my-3">
                                <div class="flex flex-row items-center justify-center">
                                    <span class="mr-2">
                                        <?php echo $against['verify_confirm'] == 3 ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <?php echo $against['is_phone_verified'] == 1 ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <?php echo $against['email_verified_at'] != null ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>' : '<img src="assets/images/cancel.svg" width="8" height="8" />'; ?>
                                    </span>
                                    <span class="text-tinyer">Email Verified</span>
                                </div>
                            </div>
                            <div class="my-3 flex flex-row justify-between items-center w-11/12 mx-auto">
                                <a href="message.php?pro_id=<?php echo $against['id'] ?>" class="rounded-2xl py-2 px-3 bg-ubuy-blue shadow-card text-xs text-white">Message</a>
                                <a href="public-profile.php?uuid=<?php echo $against['uuid'] ?>~<?php echo $against['id']; ?>" class="rounded-2xl py-2 px-3 bg-white shadow-card text-xs text-ubuy-blue">View Profile</a>
                                <button>
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.1" width="34" height="34" rx="17" fill="#FB4E4E" />
                                        <path
                                            d="M23.6311 11.4569C23.248 11.0737 22.7932 10.7697 22.2926 10.5622C21.792 10.3548 21.2554 10.248 20.7136 10.248C20.1717 10.248 19.6351 10.3548 19.1346 10.5622C18.634 10.7697 18.1791 11.0737 17.7961 11.4569L17.0011 12.2519L16.2061 11.4569C15.4323 10.6831 14.3828 10.2484 13.2886 10.2484C12.1943 10.2484 11.1448 10.6831 10.3711 11.4569C9.5973 12.2307 9.1626 13.2801 9.1626 14.3744C9.1626 15.4687 9.5973 16.5181 10.3711 17.2919L11.1661 18.0869L17.0011 23.9219L22.8361 18.0869L23.6311 17.2919C24.0143 16.9088 24.3183 16.454 24.5258 15.9534C24.7332 15.4528 24.8399 14.9163 24.8399 14.3744C24.8399 13.8326 24.7332 13.296 24.5258 12.7954C24.3183 12.2948 24.0143 11.84 23.6311 11.4569Z"
                                            fill="#FB4E4E" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <?php } ?>


                        <?php 

                            if($submitted['user_role'] == 'pro'){
                                $pro_id = $submitted['id'];
                            }elseif($against['user_role'] == 'pro'){
                                $pro_id = $against['id'];
                            }
                            $bid = $init->getBid($sp['id'], $pro_id);
                            $bid = json_decode($bid, true);

                            // var_dump($bid);
                            // return;

                            ?>
                        <div class="flex flex-col items-start px-5 pt-5 bg-white rounded-llg pb-6 w-72">
                            <h1 class="text-xs text-ubuy-inactive self-start">Task info</h1>
                            <h2 class="text-sm text-ubuy-black my-3">
                                <?php echo $sp['project_title']; ?>
                            </h2>
                            <p class="mb-3 text-tinyer text-ubuy-secondary tracking-wide leading-6">
                            <?php echo $sp['project_message']; ?>
                            </p>
                            <div class="text-xs text-ubuy-gray500">
                                <span>Budget:</span>
                                <span>N <?php echo number_format($bid['bid_amount']); ?></span>
                            </div>
                            <div class="text-xs text-ubuy-gray500 mt-1">
                                <span>Category: </span>
                                <span><?php echo $sp['sub_category_name']; ?></span>
                            </div>
                            <div class="text-xs text-ubuy-gray500 flex flex-row items-center my-1">
                                <span class="mr-2">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 13.75C10.9518 13.75 13.75 10.9518 13.75 7.5C13.75 4.04822 10.9518 1.25 7.5 1.25C4.04822 1.25 1.25 4.04822 1.25 7.5C1.25 10.9518 4.04822 13.75 7.5 13.75Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.5 3.75V7.5L10 8.75" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span>Due time:</span>
                                <span>
                                <?php
                                    $start  = date_create();
                                    $end    = date_create($bid['due_date']); // Current time and date
                                    $diff   = date_diff( $start, $end );
                                    echo $diff->days;
                                ?>  days
                                </span>
                            </div>

                            <div class="self-end mt-10">
                                <a href="task-details.php?project_id=<?php echo $sp['id']; ?>" class="px-5 py-2 rounded-md bg-ubuy-blue text-white font-medium text-xs">
                                    View Task Details
                                </a>
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

<script type="text/javascript">
    $(document).ready(function(){
        
        $("#comment_dispute_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "endpoints/comment_dispute.php",
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                data: new FormData(this),
                beforeSend: function(){
                    $('#sendCommentBtn').attr("disabled","disabled");
                    $('#comment_dispute_form').css("opacity",".3");
                },
                success: function(data)
                {
                    console.log(data.comment.comment);
                    if(data.success == true){
                        if(data.comment.user_id == '<?php echo $submitted['id']; ?>'){
                            var secto = "comment-sender";
                        }else{
                            var secto = "comment-receiver";
                        }
                        toastr.success("Comment shared!", "Success:", {timeOut: 7000});
                        $("#comment-section").append('<div class="'+ secto +' relative p-4 rounded-r-llg rounded-tr-llg rounded-b-llg mt-5"><p class="text-sm text-ubuy-secondary">'+data.comment.comment+'</p></div>');
                        
                        $('#sendCommentBtn').attr("disabled","");
                        $('#comment_dispute_form').css("opacity","");
                        $("#comment_dispute_form")[0].reset();
                            
                    }else{
                        let p = data.error_message;
                        for (var key in p) {
                            toastr.error(p[key], "Error:", {timeOut: 8000});
                        }
                            
                        $('#sendCommentBtn').attr("disabled","");
                        $('#comment_dispute_form').css("opacity","");
                    }
                }
            });
            return false;
        });

    });
</script>