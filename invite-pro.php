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

// $sub_id = explode("~", $_GET['subcategory_id']);
// $invite_pro = $init->invitePros($_GET['subcategory_id']);
// $invite_pro = json_decode($invite_pro, true);
// $invite_pro = isset($invite_pro['pros']) ? $invite_pro['pros']: "";
?>

        <main class="flex-1 overflow-auto sm:pt-24 pt-20 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex w-full flex-col lg:my-7 my-4 lg:pl-7 lg:pr-10 px-4 gap-y-6">
                    <div class="sm:flex hidden flex-row items-center justify-between w-full text-sm text-ubuy-secondary gap-4">
                        <div class="flex flex-row items-center gap-x-4 rounded-llg bg-white px-6 py-4">
                            <span class="whitespace-nowrap truncate">
                                My Company’s Website Redesign
                            </span>
                            <span>
                                <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1.12134C-1.2258e-08 0.259419 0.520833 -0.279284 0.9375 0.151678L4.6875 4.03034C5.10417 4.4613 5.10417 5.5387 4.6875 5.96966L0.9375 9.84832C0.520834 10.2793 1.2258e-07 9.74058 1.10322e-07 8.87866L0 1.12134Z" fill="#A0A4A8" />
                                </svg>

                            </span>
                            <span class="whitespace-nowrap truncate">
                                Invite Pro to Task
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between items-center text-sm text-ubuy-secondary">
                        <!-- TODO: Style Mobile -->
                        <div class="flex flex-row items-center gap-x-5">
                            <div class="bg-white rounded-llg py-3 px-5 flex flex-row items-center">
                                <label for="filter-pros" class="flex flex-row">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.1554 0H0.84473C0.0952696 0 -0.282906 0.909351 0.248129 1.44039L6.74999 7.94324V15.1875C6.74999 15.4628 6.88433 15.7208 7.10989 15.8787L9.92239 17.8468C10.4773 18.2352 11.25 17.8415 11.25 17.1555V7.94324L17.752 1.44039C18.282 0.910406 17.9064 0 17.1554 0Z"
                                            fill="#52575C" />
                                    </svg>
                                    <span class="ml-3 sm:inline hidden">Filter</span>
                                </label>
                                <select name="filter-pro" id="filter-pro" class="px-3 py-2 bg-transparent appearance-none">
                                    <option value=""></option>
                                </select>

                            </div>
                            <div class="bg-white rounded-llg py-3 px-5 flex flex-row items-center sm:w-52">
                                <label for="sort-by" class="flex flex-row items-center mr-2 relative w-full">
                                    <div class="absolute flex flex-row">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.69285 6.40258L4.97345 3.18822C5.22971 2.93722 5.64541 2.9373 5.90151 3.18822L9.18198 6.40258C9.59501 6.80718 9.30088 7.50002 8.71793 7.50002H6.75V20.3571C6.75 20.7122 6.4562 21 6.09375 21H4.78125C4.41879 21 4.125 20.7122 4.125 20.3571V7.50002H2.1569C1.5728 7.50002 1.28069 6.80637 1.69285 6.40258ZM11.3437 5.57145H21.8438C22.2062 5.57145 22.5 5.28365 22.5 4.92859V3.64288C22.5 3.28782 22.2062 3.00002 21.8438 3.00002H11.3437C10.9813 3.00002 10.6875 3.28782 10.6875 3.64288V4.92859C10.6875 5.28365 10.9813 5.57145 11.3437 5.57145ZM10.6875 10.0714V8.78573C10.6875 8.43067 10.9813 8.14287 11.3437 8.14287H19.2188C19.5812 8.14287 19.875 8.43067 19.875 8.78573V10.0714C19.875 10.4265 19.5812 10.7143 19.2188 10.7143H11.3437C10.9813 10.7143 10.6875 10.4265 10.6875 10.0714ZM10.6875 20.3571V19.0714C10.6875 18.7164 10.9813 18.4286 11.3437 18.4286H13.9687C14.3312 18.4286 14.625 18.7164 14.625 19.0714V20.3571C14.625 20.7122 14.3312 21 13.9687 21H11.3437C10.9813 21 10.6875 20.7122 10.6875 20.3571ZM10.6875 15.2143V13.9286C10.6875 13.5735 10.9813 13.2857 11.3437 13.2857H16.5937C16.9562 13.2857 17.25 13.5735 17.25 13.9286V15.2143C17.25 15.5693 16.9562 15.8571 16.5937 15.8571H11.3437C10.9813 15.8571 10.6875 15.5693 10.6875 15.2143Z"
                                                    fill="#222F54" />
                                            </svg>
                                        </span>
                                        <span class="hidden sm:inline whitespace-nowrap mt-1">
                                            Sort by: Date Joined
                                        </span>
                                    </div>

                                    <select name="sort-by" id="sort-by" class="bg-transparent text-ubuy-black py-2 px-3 appearance-none w-full">
                                        <option value=""></option>
                                    </select>
                                </label>

                            </div>
                        </div>
                        <div class="bg-white relative rounded-llg py-3 px-5 max-w-md flex-auto ml-5">
                            <label for="search" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                <button class="rounded bg-ubuy-blue p-2 shadow-card">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </label>
                            <input class="py-2 px-3 w-full focus:outline-none" id="search" type="text" placeholder="Find Professional.." />
                        </div>
                    </div>
                    <!-- Pro List Mobile -->
                    <div class="sm:hidden flex flex-col w-full gap-y-4" id="inviteProListMobile">

                    <!-- <button onclick='onOpenPopupAttachTwo("invite-pro", "<?php echo $item["user"]["first_name"]." ".$item["user"]["last_name"][0]."~".$item["service_name"]."~0~".$item["user"]["average_rating"]."~".date("M Y", strtotime($item["user"]["created_at"]))."~".$item["user"]["id"]."~".$item["user"]["public_url"]; ?>")' class="rounded-llg py-2 px-3 bg-ubuy-blue shadow-card text-xs text-white">Invite to Task</button> -->


                    </div>
                    <!-- End pro List Mobile -->

                    <div class="hidden sm:inline-grid grid-flow-row grid-cols-2 xl:grid-cols-3 gap-6 place-items-center" id="inviteProList">




                    </div>
                </div>
            </div>
        </main>
        <!-- Invite Pro Popup -->
        <div class="min-h-screen min-w-screen w-screen h-full hidden fixed place-items-center p-6" id="invite-pro" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
            <div class="ubuy-post-task-form-container flex flex-col items-center justify-around py-16 px-10 rounded-3xl shadow bg-white relative w-full max-w-xl">
                <button class="absolute right-5 top-5" onclick="onClosePopup('invite-pro')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <span id="pro_img"></span>
                <div class="flex flex-row items-center">
                    <span class="pro_name">John Ayomide</span>
                    <!-- <span>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.2705 9.22324C19.6 8.67081 20.4 8.67081 20.7295 9.22324C21.0012 9.67877 21.6192 9.77666 22.0184 9.42738C22.5024 9.00379 23.2633 9.25103 23.406 9.87824C23.5236 10.3954 24.0811 10.6795 24.5687 10.4707C25.1599 10.2174 25.8072 10.6877 25.749 11.3282C25.7011 11.8565 26.1436 12.2989 26.6718 12.251C27.3123 12.1928 27.7826 12.8401 27.5293 13.4313C27.3205 13.9189 27.6046 14.4764 28.1218 14.594C28.749 14.7367 28.9962 15.4976 28.5726 15.9816C28.2233 16.3808 28.3212 16.9988 28.7768 17.2705C29.3292 17.6 29.3292 18.4 28.7768 18.7295C28.3212 19.0012 28.2233 19.6192 28.5726 20.0184C28.9962 20.5024 28.749 21.2633 28.1218 21.406C27.6046 21.5236 27.3205 22.0811 27.5293 22.5687C27.7826 23.1599 27.3123 23.8072 26.6718 23.749C26.1436 23.7011 25.7011 24.1436 25.749 24.6718C25.8072 25.3123 25.1599 25.7826 24.5687 25.5293C24.0811 25.3205 23.5236 25.6046 23.406 26.1218C23.2633 26.749 22.5024 26.9962 22.0184 26.5726C21.6192 26.2233 21.0012 26.3212 20.7295 26.7768C20.4 27.3292 19.6 27.3292 19.2705 26.7768C18.9988 26.3212 18.3808 26.2233 17.9816 26.5726C17.4976 26.9962 16.7367 26.749 16.594 26.1218C16.4764 25.6046 15.9189 25.3205 15.4313 25.5293C14.8401 25.7826 14.1928 25.3123 14.251 24.6718C14.2989 24.1436 13.8565 23.7011 13.3282 23.749C12.6877 23.8072 12.2174 23.1599 12.4707 22.5687C12.6795 22.0811 12.3954 21.5236 11.8782 21.406C11.251 21.2633 11.0038 20.5024 11.4274 20.0184C11.7767 19.6192 11.6788 19.0012 11.2232 18.7295C10.6708 18.4 10.6708 17.6 11.2232 17.2705C11.6788 16.9988 11.7767 16.3808 11.4274 15.9816C11.0038 15.4976 11.251 14.7367 11.8782 14.594C12.3954 14.4764 12.6795 13.9189 12.4707 13.4313C12.2174 12.8401 12.6877 12.1928 13.3282 12.251C13.8564 12.2989 14.2989 11.8564 14.251 11.3282C14.1928 10.6877 14.8401 10.2174 15.4313 10.4707C15.9189 10.6795 16.4764 10.3954 16.594 9.87824C16.7367 9.25103 17.4976 9.00379 17.9816 9.42738C18.3808 9.77666 18.9988 9.67877 19.2705 9.22324Z"
                                fill="#119AE2" />
                            <path d="M24 15L18.5 20.5L16 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span> -->
                </div>
                <div class="-mt-3 mb-3">
                    <span class="text-ubuy-inactive text-xs" id="pro_service">Professional Cleaner</span>
                </div>
                <div class="flex flex-row items-center justify-center w-full">
                    <div class="flex flex-col justify-center items-center mr-4">
                        <span class="text-xs text-ubuy-secondary" id="pro_job_done">0</span>
                        <span class="text-tiny text-ubuy-inactive"> Jobs Done</span>
                    </div>
                    <div id="profile-rating" class="flex flex-col px-4 relative">
                        <div class="text-xs text-ubuy-secondary flex flex-row items-center justify-center">
                            <span id="pro_rating"></span>
                            <span>
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0L4.89806 2.76393H7.80423L5.45308 4.47214L6.35114 7.23607L4 5.52786L1.64886 7.23607L2.54692 4.47214L0.195774 2.76393H3.10194L4 0Z" fill="#25282B" />
                                </svg>
                            </span>
                        </div>
                        <span class="text-tiny text-ubuy-inactive">Ratings</span>
                    </div>
                    <div class="flex flex-col justify-center items-center ml-4">
                        <span class="text-xs text-ubuy-secondary" id="pro_date_joined"></span>
                        <span class="text-tiny text-ubuy-inactive">Date Joined</span>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center mt-4 gap-y-2">
                    <span class="text-lg font-semibold text-center">Send <span class="pro_name"></span> an Invite </span>
                    <p class="text-sm text-ubuy-gray500 max-w-sm text-center">You are about to personally invite <span class="pro_name"></span> to review and bid on your task</p>
                </div>
                <input type="hidden" name="pro_id" id="pro_id" />
                <input type="hidden" name="project_id" id="project_id" value="" />
                <button type="button" id="inviteProTaskBtn" onclick="submitInvite(this.id)" class="text-sm text-white rounded-3xl bg-ubuy-blue py-4 px-8 font-semibold shadow-card mt-10">
                    Invite John
                </button>
            </div>
        </div>
        <!-- End Invite Pro Popup -->
        <!-- Mobile Invite Pro Popup -->
        <div class="min-h-screen min-w-screen w-screen h-full hidden fixed place-items-center p-6" id="invite-pro-mobile" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
            <div class="ubuy-post-task-form-container flex flex-col items-center justify-around py-8 px-5 rounded-3xl shadow bg-white relative w-full max-w-xl">
                <button class="absolute right-5 top-5" onclick="onClosePopup('invite-pro-mobile')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                
                <span id="pro_img_mobile"></span>

                <div class="flex flex-col items-center justify-center mt-4 gap-y-2">
                    <span class="text-lg font-semibold text-center text-ubuy-secondary">Please Confirm</span>
                    <p class="text-sm text-ubuy-gray500 max-w-sm text-center px-5">You are about to personally invite <span class="pro_name"></span> to review and bid on your task</p>
                </div>

                <div class="flex flex-row items-center gap-x-5">
                    <button class="text-sm text-ubuy-secondary rounded-3xl bg-white py-2 px-5 font-semibold shadow-card mt-10">
                        Cancel
                    </button>
                    <button type="button" id="inviteProFinalBtn" onclick="submitInvite(this.id)" class="text-sm text-white rounded-3xl bg-ubuy-blue py-2 px-5 font-semibold shadow-card mt-10">
                        Invite
                    </button>
                </div>
            </div>
        </div>
        <!-- End Mobile Invite Pro Popup -->


<?php
if($_SESSION['user_role'] == 'customer'){
    require_once 'inc/customer-footer.php';
}elseif($_SESSION['user_role'] == 'pro'){
    require_once 'inc/pro-footer.php';
}
?>


<script type="text/javascript">

console.log(JSON.parse(window.localStorage.getItem("project_details")));
console.log(JSON.parse(window.localStorage.getItem("verified_pros")));

const pDetails = JSON.parse(window.localStorage.getItem("project_details"));

const verified_pro = JSON.parse(window.localStorage.getItem("verified_pros"));
if(verified_pro.length < 1){
    console.log("No record found");
}else{
    var temp = "";
    var tempMobile = "";
    for (var i = 0; i < verified_pro.length; i++) {

        console.log(verified_pro[i])

        // const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        // var d = new Date(verified_pro[i].created_at);
        // document.getElementById("demo").innerHTML = monthNames[d.getMonth()];
        // document.getElementById("demo").innerHTML += d.getDay();

        const formatter = new Intl.DateTimeFormat('en', { month: 'short' });
        const month = formatter.format(new Date(verified_pro[i].created_at));
        const day = new Date(verified_pro[i].created_at).getDay();

        if(verified_pro[i].public_url == "http://new.ubuy.ng/storage" || verified_pro[i].public_url == "http://127.0.0.1:8000/storage"){
            var default_img = "assets/images/ubuy_logo.svg";
        }else{
            var default_img = verified_pro[i].public_url;
        }
        

        temp += '<div class="flex flex-col items-center px-5 pt-5 bg-white rounded-llg pb-6 max-w-sm w-full">';
        temp += '<img src="'+ default_img +'" alt="avatar" class="rounded-full w-32 h-32" />';
        temp += '<div class="flex flex-row items-center">';
        temp += '<span>'+verified_pro[i].last_name+' '+verified_pro[i].first_name[0]+'.</span>';
        temp += verified_pro[i].verify_confirm == 2 ? '<span><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.2705 9.22324C19.6 8.67081 20.4 8.67081 20.7295 9.22324C21.0012 9.67877 21.6192 9.77666 22.0184 9.42738C22.5024 9.00379 23.2633 9.25103 23.406 9.87824C23.5236 10.3954 24.0811 10.6795 24.5687 10.4707C25.1599 10.2174 25.8072 10.6877 25.749 11.3282C25.7011 11.8565 26.1436 12.2989 26.6718 12.251C27.3123 12.1928 27.7826 12.8401 27.5293 13.4313C27.3205 13.9189 27.6046 14.4764 28.1218 14.594C28.749 14.7367 28.9962 15.4976 28.5726 15.9816C28.2233 16.3808 28.3212 16.9988 28.7768 17.2705C29.3292 17.6 29.3292 18.4 28.7768 18.7295C28.3212 19.0012 28.2233 19.6192 28.5726 20.0184C28.9962 20.5024 28.749 21.2633 28.1218 21.406C27.6046 21.5236 27.3205 22.0811 27.5293 22.5687C27.7826 23.1599 27.3123 23.8072 26.6718 23.749C26.1436 23.7011 25.7011 24.1436 25.749 24.6718C25.8072 25.3123 25.1599 25.7826 24.5687 25.5293C24.0811 25.3205 23.5236 25.6046 23.406 26.1218C23.2633 26.749 22.5024 26.9962 22.0184 26.5726C21.6192 26.2233 21.0012 26.3212 20.7295 26.7768C20.4 27.3292 19.6 27.3292 19.2705 26.7768C18.9988 26.3212 18.3808 26.2233 17.9816 26.5726C17.4976 26.9962 16.7367 26.749 16.594 26.1218C16.4764 25.6046 15.9189 25.3205 15.4313 25.5293C14.8401 25.7826 14.1928 25.3123 14.251 24.6718C14.2989 24.1436 13.8565 23.7011 13.3282 23.749C12.6877 23.8072 12.2174 23.1599 12.4707 22.5687C12.6795 22.0811 12.3954 21.5236 11.8782 21.406C11.251 21.2633 11.0038 20.5024 11.4274 20.0184C11.7767 19.6192 11.6788 19.0012 11.2232 18.7295C10.6708 18.4 10.6708 17.6 11.2232 17.2705C11.6788 16.9988 11.7767 16.3808 11.4274 15.9816C11.0038 15.4976 11.251 14.7367 11.8782 14.594C12.3954 14.4764 12.6795 13.9189 12.4707 13.4313C12.2174 12.8401 12.6877 12.1928 13.3282 12.251C13.8564 12.2989 14.2989 11.8564 14.251 11.3282C14.1928 10.6877 14.8401 10.2174 15.4313 10.4707C15.9189 10.6795 16.4764 10.3954 16.594 9.87824C16.7367 9.25103 17.4976 9.00379 17.9816 9.42738C18.3808 9.77666 18.9988 9.67877 19.2705 9.22324Z" fill="#119AE2" /> <path d="M24 15L18.5 20.5L16 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg></span>' : "";
        temp += '</div>';
        temp += '<div class="my-2"><span class="py-1 px-2 rounded-2xl border border-ubuy-inactive text-ubuy-inactive text-tiny">Out of Work</span></div><div class="flex flex-row items-center justify-center w-full"><div class="flex flex-col justify-center items-center mr-4"><span class="text-xs text-ubuy-secondary">0</span><span class="text-tiny text-ubuy-inactive"> Jobs Done</span></div><div id="profile-rating" class="flex flex-col px-4 relative"><div class="text-xs text-ubuy-secondary flex flex-row items-center justify-center"><span>'+verified_pro[i].average_rating+'</span>';
        temp += '<span><svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 0L4.89806 2.76393H7.80423L5.45308 4.47214L6.35114 7.23607L4 5.52786L1.64886 7.23607L2.54692 4.47214L0.195774 2.76393H3.10194L4 0Z" fill="#25282B" /></svg></span>';
        temp += '</div>';
        temp += '<span class="text-tiny text-ubuy-inactive">Ratings</span>';
        temp += '</div>';
        temp += '<div class="flex flex-col justify-center items-center ml-4"><span class="text-xs text-ubuy-secondary">'+month+'. '+day+'</span><span class="text-tiny text-ubuy-inactive">Date Joined</span></div>';
        temp += '</div>';
        temp += '<div class="flex flex-row w-full justify-between my-3"><div class="flex flex-row items-center justify-center">';
        temp += verified_pro[i].verify_confirm == 2 ? '<span class="mr-2"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /></svg></span>'  : '<img src="assets/images/cancel.svg" width="12" height="12" />';
        temp += '<span class="text-tinyer"> Identity Verified</span>';
        temp += '</div>';
        temp += '<div class="flex flex-row items-center justify-center">';
        temp += verified_pro[i].is_phone_verified != 0 ? '<span class="mr-2"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" /></svg></span>' : '<img src="assets/images/cancel.svg"  width="12" height="12" />';
        temp += '<span class="text-tinyer">Phone Verified</span>';
        temp += '</div>';
        temp += '<div class="flex flex-row items-center justify-center">';
        temp += verified_pro[i].email_verified_at != null ? '<span class="mr-2"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" /> <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" /></svg></span>' : '<img src="assets/images/cancel.svg" width="12" height="12" />';
        temp += '<span class="text-tinyer">Email Verified</span>';
        temp += '</div></div>';
        temp += '<div class="flex flex-row justify-between text-xs w-full text-ubuy-secondary"><div class="flex flex-row">';
        temp += '<span class="mr-2"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54926 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54926 14 5.07539 14 6.66669Z" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /><path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg></span>';
        temp += '<span>Location</span>';
        temp += '</div>';
        temp += '<span>'+ verified_pro[i].city == null ? "" : verified_pro[i].city +'</span>';
        temp += '</div>';
        temp += '<div class="my-3 flex flex-row justify-center items-center w-11/12 mx-auto">';
        temp += '<button onclick="onOpenPopupAttachTwo(\'invite-pro\', \''+verified_pro[i].first_name+' '+verified_pro[i].last_name+'~'+pDetails.sub_category_name+'~0~'+verified_pro[i].average_rating+'~'+month +' '+day+'~'+verified_pro[i].id+'~'+verified_pro[i].public_url+'~'+pDetails.id+'\')" class="rounded-llg py-2 px-3 bg-ubuy-blue shadow-card text-xs text-white">Invite to Task</button>';
        temp += '</div></div>';




        tempMobile += '<div class="flex flex-row gap-x-3 p-5 relative items-center text-ubuy-secondary bg-white rounded-llg">';
        tempMobile += '<div><img src="assets/images/avatar-small-rounded.png" alt="avatar" class="" /></div>';
        tempMobile += '<div class="flex flex-col">';
        tempMobile += '<h1 class="text-ubuy-black text-sm">John Ayomide</h1>';
        tempMobile += '<span class="text-tiny ">Web Developer</span>';
        tempMobile += '<div class="flex flex-row items-center gap-1">';
        tempMobile += '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)" /><defs><linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse"><stop stop-color="#FFDD00" /><stop offset="1" stop-color="#FBB034" /></linearGradient></defs></svg>';
        tempMobile += '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)" /><defs><linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse"><stop stop-color="#FFDD00" /><stop offset="1" stop-color="#FBB034" /></linearGradient></defs></svg>';
        tempMobile += '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)" /><defs><linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse"><stop stop-color="#FFDD00" /><stop offset="1" stop-color="#FBB034" /></linearGradient></defs></svg>';
        tempMobile += '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)" /><defs><linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse"><stop stop-color="#FFDD00" /><stop offset="1" stop-color="#FBB034" /></linearGradient></defs></svg>';
        tempMobile += '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)" /><defs><linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse"><stop stop-color="#FFDD00" /><stop offset="1" stop-color="#FBB034" /></linearGradient></defs></svg>';
        tempMobile += '<span class="text-xs">15</span></div>';
        tempMobile += '<div class="flex flex-row flex-wrap items-start w-full justify-between my-1 gap-y-1">';
        tempMobile += '<div class="flex flex-row items-center justify-center">';
        tempMobile += '<span class="mr-2"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /></svg></span>';
        tempMobile += '<span class="text-tinyer">Identity Verified</span>';
        tempMobile += '</div>';
        tempMobile += '<div class="flex flex-row items-center justify-center">';
        tempMobile += '<span class="mr-2"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" /></svg></span>';
        tempMobile += '<span class="text-tinyer">Phone Verified</span>';
        tempMobile += '</div>';
        tempMobile += '<div class="flex flex-row items-center justify-center">';
        tempMobile += '<span class="mr-2"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" /></svg></span>';
        tempMobile += '<span class="text-tinyer">Email Verified</span>';
        tempMobile += '</div>';
        tempMobile += '</div>';
        tempMobile += '<div class="self-end "><button onclick=onOpenPopupAttachTwo("invite-pro-mobile", "") class="text-xs bg-ubuy-blue rounded shadow-card text-white text-tiny py-1 px-2">Invite to task</button></div>';
        tempMobile += '</div>';
        tempMobile += '<button class="absolute right-5 top-5"><svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.8406 2.61012C19.3299 2.09912 18.7234 1.69376 18.056 1.4172C17.3885 1.14064 16.6731 0.998291 15.9506 0.998291C15.2281 0.998291 14.5127 1.14064 13.8453 1.4172C13.1778 1.69376 12.5714 2.09912 12.0606 2.61012L11.0006 3.67012L9.94061 2.61012C8.90892 1.57842 7.50964 0.998826 6.05061 0.998826C4.59157 0.998826 3.1923 1.57842 2.16061 2.61012C1.12892 3.64181 0.549316 5.04108 0.549316 6.50012C0.549316 7.95915 1.12892 9.35842 2.16061 10.3901L3.22061 11.4501L11.0006 19.2301L18.7806 11.4501L19.8406 10.3901C20.3516 9.87936 20.757 9.27293 21.0335 8.60547C21.3101 7.93801 21.4524 7.2226 21.4524 6.50012C21.4524 5.77763 21.3101 5.06222 21.0335 4.39476C20.757 3.7273 20.3516 3.12087 19.8406 2.61012Z" fill="#FB4E4E" /></svg></button>';
        tempMobile += '</div>';
    }

    $("#inviteProList").html(temp);
    $("#inviteProListMobile").html(tempMobile);
    
}


    function submitInvite(id){

        $("#"+id).html("Please wait...");
        document.getElementById(id).disabled = true;
        var url = "endpoints/invite-pro.php";
        $.ajax({
            type: "POST",
            url: url,
            dataType: 'json',
            data: {
                "project_id" :  $("#project_id").val(),
                "pro_id" : $("#pro_id").val(),
            },
            success: function(data)
            {
                console.log(data);
                if(data.success == true){
                    toastr.success(data.message, "Success:", {timeOut: 7000});
                    $("#"+id).html("Invite Pro");
                    document.getElementById(id).disabled = true;
                    document.getElementById("invite-pro-mobile").style.display = 'none';
                    document.getElementById("invite-pro").style.display = 'none';
                }else{
                    document.getElementById(id).disabled = false;
                    $("#"+id).html("Invite Pro");
                    let p = data.error_message;
                    for (var key in p) {
                        toastr.error(p[key], "Error:", {timeOut: 8000});
                    }
                    document.getElementById("invite-pro-mobile").style.display = 'none';
                    document.getElementById("invite-pro").style.display = 'none';
                }
            }
        });
        return false;



        // setTimeout(function(){
        //     // document.getElementById(id).style.display = 'none';
        //     document.getElementById(id).fadeOut();
        //     document.getElementById("")

        // }, 5000);

    }


</script>