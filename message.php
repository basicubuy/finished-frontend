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

$messages = $init->getAllMessages();
$messag = json_decode($messages, true);
$messages = isset($messag['messages']) ? $messag['messages'] : "";




?>
        <main class="flex-1 h-full pt-24 flex items-stretch md:pl-64 pl-0 max-w-full" id="main-content">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex w-full lg:flex-row flex-col sm:my-7 my-4 lg:pl-7 lg:pr-8 px-4 gap-x-6">
                    <div class="sm:rounded-llg sm:bg-white xl:w-5/12 w-full" style="height: 100vh;">
                        <div class="sm:px-5 sm:pt-6 sm:mb-12 mb-4">
                            <div class="relative bg-ubuy-gray400 rounded-llg">
                                <label for="search" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                    <button class="rounded bg-ubuy-blue p-2 shadow-card">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </label>
                                <input class="py-4 px-3 w-full rounded-llg bg-ubuy-gray400" id="search" type="text" placeholder="Search" />
                            </div>
                        </div>
                        <div class="h-full w-full sm:pl-3 sm:pr-5 overflow-y-auto max-h-724">

                        <?php 
                        if(!empty($messages)){
                        foreach ($messages as $value) { 
                            
                            ?>
                            <a onclick="loadUserMessage(<?php echo $value['bid_id']; ?>, <?php echo $value['project_id']; ?>, <?php echo $value['receiver_id']; ?>)" class="bg-ubuy-gray400 rounded-llg flex flex-row cursor-pointer sm:mb-8 mb-2.5 p-2.5">
                                <div class="mr-4">
                                    <img class="w-12 h-12 rounded-full" src="<?php echo $value['receiver_user']['public_url']; ?>" alt="avatar" />
                                </div>
                                <div class="flex-auto flex flex-col justify-between text-ubuy-secondary">
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="text-base"><?php echo $value['receiver_user']['last_name'].' '.$value['receiver_user']['first_name'][0]; ?>.</span>
                                        <span class="text-xxxs"><?php echo $value['receiver_user']['active']==1 ? '<span class="text-green-600 font-semibold">Online</span>' : '<span class="text-red-600 font-semibold">Offline</span>'; ?></span>
                                    </div>
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="text-tiny whitespace-nowrap truncate w-44"><?php echo $value['message']; ?></span>
                                        <span class="rounded-full text-white p-1 bg-ubuy-blue text-tiny" onload="loadUnread(<?php echo $value['receiver_user']['id']; ?>)"><?php //echo $count; ?></span>
                                    </div>
                                </div>
                            </a>
                            <input type="hidden" id="check-messages" value="1" />
                        <?php } }else{ ?>
                            <input type="hidden" id="check-messages" value="0" />
                            <div class="flex justify-center items-center w-full">
                                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                                    <div class="flex">
                                        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                        <div>
                                        <p class="font-bold">No message yet!</p>
                                        <!-- <p class="text-sm">Post a task to get started.</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        
                           
                        </div>
                    </div>
                    <div class="rounded-llg bg-white relative pb-5 flex-col justify-center items-center w-full hidden xl:block no-messages">
                        <div class="flex justify-center items-center w-full mt-12"><img src="assets/images/empty-email.svg" class="" width="80" height="80" /></div>
                        <span class="flex justify-center mt-4 w-full text-center font-semibold text-2xl">No messages yet!</span>
                        <?php if($userData['user_role'] == "pro"){ ?>
                            <span class="flex justify-center mt-4 w-full text-center text-sm">Once you are hired by a customer, your messages will be displayed here.</span>
                            <span class="flex justify-center mt-2 w-full text-center text-sm">To get started, 
                                
                                <a href="bids.php">
                                    <span class="text-ubuy-positiveDefault font-semibold"> Bid for a task</span>
                                </a>
                                
                            </span>
                        <?php } else{ ?>
                        <span class="flex justify-center mt-4 w-full text-center text-sm">Once you connect with a professional, your messages will be displayed here.</span>
                        <span class="flex justify-center mt-2 w-full text-center text-sm">To get started, 

                            <a href="#" onclick="toggleSubmitTaskForm()">
                                <span class="text-ubuy-positiveDefault font-semibold"> Submit Task</span>
                            </a>
                            
                        </span>
                        <?php } ?>
                        <span class="flex justify-center mt-12 w-full text-center font-semibold text-base">Use Ubuy Messages to stay connected:</span>
                        <div class="flex justify-center items-center mt-12 grid grid-cols-3 gap-4">
                            <div class="flex items-center justify-center col-span-1">
                                <span class="flex flex-col justify-center items-center">
                                    <img src="assets/images/chat.png" width="40" height="40" />
                                    <div class="font-semibold">Real-Time Chat</div>
                                    <div class="text-sm text-center">Hit the Enter key to send a message instantly</div>
                                </span>
                            </div>
                            <div class="flex items-center justify-center col-span-1">
                                <span class="flex flex-col justify-center items-center">
                                    <img src="assets/images/management.png" width="40" height="40" />
                                    <div class="font-semibold">Organized Conversations</div>
                                    <div class="text-sm text-center">Contract-related messages at your fingertips</div>
                                </span>
                            </div>
                            <div class="flex items-center justify-center col-span-1">
                                <span class="flex flex-col justify-center items-center">
                                    <img src="assets/images/user.png" width="40" height="40" />
                                    <div class="font-semibold">Online Status</div>
                                    <div  class="text-sm text-center">See your customer/professional's availability</div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-llg bg-white relative pb-5 xl:w-6/12 w-full hidden xl:block yes-messages" style="height: 100vh; display: none">
                        <button class="absolute right-5 top-6">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="20" fill="#119AE2" fill-opacity="0.05" />
                                <path d="M20 21C20.5523 21 21 20.5523 21 20C21 19.4477 20.5523 19 20 19C19.4477 19 19 19.4477 19 20C19 20.5523 19.4477 21 20 21Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20 14C20.5523 14 21 13.5523 21 13C21 12.4477 20.5523 12 20 12C19.4477 12 19 12.4477 19 13C19 13.5523 19.4477 14 20 14Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20 28C20.5523 28 21 27.5523 21 27C21 26.4477 20.5523 26 20 26C19.4477 26 19 26.4477 19 27C19 27.5523 19.4477 28 20 28Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="flex flex-col p-5 ">
                            <div class="flex flex-row">
                                <div class="mr-4 relative" id="user_pic">
                                </div>
                                <div>
                                    <h1 class="text-lg text-ubuy-black" id="user_name"></h1>
                                    <div class="text-tiny text-ubuy-inactive" id="last_seen">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 px-4 overflow-y-scroll w-full" id="chatBoxMain" style="height: 65vh !important;">
                                <div class="flex flex-col gap-y-3" id="chatBox">
                                    <div class="flex w-full justify-center align-content-center items-center hidden text-sm" id="message-loading">
                                        Loading messages...
                                    </div>


                                </div>
                            </div>
                            <div class="absolute bottom-0 bg-white" style="z-index: 99999999999999999999999 !important;">
                                <div class="flex items-center rounded-lg py-1 px-2 w-min h-8 my-4 text-ubuy-gray450 text-tinyer" style="background: rgba(17, 154, 226, 0.05); display: none;">
                                    <span class="w-1 h-1 p-1 mr-1 rounded-full bg-ubuy-inactive"></span>
                                    <span class="w-1 h-1 p-1 mr-1 rounded-full bg-ubuy-inactive"></span>
                                    <span class="w-1 h-1 p-1 rounded-full bg-ubuy-inactive mr-4"></span> typing...
                                </div>
                                <div class="mr-5">
                                    <div class="flex flex-col text-tiny rounded-llg text-ubuy-secondary bg-warning-light px-3 py-2">
                                        <span class="w">Please Note: This chat is being monitored to ensure compliance to Ubuy’s </span>
                                        <a href="/" class="text-ubuy-warningDefault">Terms and Conditions</a>
                                    </div>
                                </div>
                                <form id="message-form" enctype="multipart/form-data" autocomplete="off">
                                    <div class="flex flex-row items-center rounded-llg bg-ubuy-gray400 mb-5 mr-5 py-2 px-3">
                                            <div class="mr-3">
                                                <button>
                                                    <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.4413 11.0497L11.2513 20.2397C10.1254 21.3655 8.59845 21.998 7.00627 21.998C5.41408 21.998 3.88711 21.3655 2.76127 20.2397C1.63542 19.1138 1.00293 17.5869 1.00293 15.9947C1.00293 14.4025 1.63542 12.8755 2.76127 11.7497L11.9513 2.55968C12.7018 1.80911 13.7198 1.38745 14.7813 1.38745C15.8427 1.38745 16.8607 1.80911 17.6113 2.55968C18.3618 3.31024 18.7835 4.32822 18.7835 5.38968C18.7835 6.45113 18.3618 7.46911 17.6113 8.21968L8.41127 17.4097C8.03598 17.785 7.52699 17.9958 6.99627 17.9958C6.46554 17.9958 5.95655 17.785 5.58127 17.4097C5.20598 17.0344 4.99515 16.5254 4.99515 15.9947C4.99515 15.4639 5.20598 14.955 5.58127 14.5797L14.0713 6.09968"
                                                            stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="mr-3">
                                                <button>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 1.00024C11.2044 1.00024 10.4413 1.31631 9.87868 1.87892C9.31607 2.44153 9 3.20459 9 4.00024V12.0002C9 12.7959 9.31607 13.559 9.87868 14.1216C10.4413 14.6842 11.2044 15.0002 12 15.0002C12.7956 15.0002 13.5587 14.6842 14.1213 14.1216C14.6839 13.559 15 12.7959 15 12.0002V4.00024C15 3.20459 14.6839 2.44153 14.1213 1.87892C13.5587 1.31631 12.7956 1.00024 12 1.00024V1.00024Z"
                                                            stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M18.999 10.0002V12.0002C18.999 13.8568 18.2615 15.6372 16.9488 16.95C15.636 18.2627 13.8555 19.0002 11.999 19.0002C10.1425 19.0002 8.36203 18.2627 7.04928 16.95C5.73652 15.6372 4.99902 13.8568 4.99902 12.0002V10.0002" stroke="#119AE2"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12 19.0002V23.0002" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M7.99902 22.9998H15.999" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="flex-auto flex flex-row items-center relative">
                                                <input class="py-4 px-3 w-full rounded-llg bg-ubuy-gray400" id="project_id" name="project_id" type="hidden" value="" />
                                                <input class="py-4 px-3 w-full rounded-llg bg-ubuy-gray400" id="bid_id" name="bid_id" type="hidden" value="" />
                                                <input class="py-4 px-3 w-full rounded-llg bg-ubuy-gray400" id="pro_id" name="user_id" type="hidden" value="" />
                                                <input class="w-full py-3 text-xs px-2 bg-ubuy-gray400 input-message" type="text" id="message" name="input-message" placeholder="Type a message">
                                                <button type="submit" class="absolute right-2" id="sendMessageBtn">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M22.2821 12.0487H6.72573" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M22.2828 12.1421L3.19088 21.3345L6.72641 12.1421L3.19088 2.94975L22.2828 12.1421Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php if($userData['user_role'] == "pro"){ ?>
                        <div class="flex-col gap-y-6 hidden xl:flex yes-messages" style="display: none;">
                            <div class="flex flex-col items-center justify-center px-5 pt-5 bg-white rounded-llg pb-6 w-72"  style="height: 48vh;">No user selected.</div>
                        </div>
                    <?php }else{ ?>
                        <div class="flex-col gap-y-6 hidden xl:flex yes-messages" style="display: none;">
                            <div class="flex flex-col items-center px-5 pt-5 bg-white rounded-llg pb-6 w-72" id="userDetails"  style="height: 48vh;">

                                No user selected.
                                
                            </div>
                            <div class="flex flex-col items-start px-5 pt-5 bg-white rounded-llg pb-6 w-72"  style="height: 46vh;" id="bidDetails">
                                
                                <div class="items-center">Project not selected.</div>

                            </div>
                        </div>
                    <?php } ?>
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

checkIfMessages();

    chatBox = document.querySelector(".chatBox");
    inputField = document.querySelector(".input-message");


    inputField.onkeyup = ()=>{
        $("#typingIndicator").show();
    }

    


    $("#project_id").val(<?php echo isset($_GET['project_id']) ? $_GET['project_id'] : ''; ?>);
    $("#pro_id").val(<?php echo isset($_GET['pro_id']) ? $_GET['pro_id'] : ''; ?>);

    function loadUserMessage(bid_id, project_id, receiver_id){
        $("#message-loading").show();
        $("#project_id").val(project_id);
        $("#pro_id").val(receiver_id);
        $("#bid_id").val(bid_id);

        userDetails(receiver_id);
        bidDetails(receiver_id, project_id);
        getMessages(receiver_id);
        
    }

    function userDetails(receiver_id){
        fetch("endpoints/getUser.php?pro_id="+receiver_id).then(
        res => {
            res.json().then(
            data => {
                console.log(data);
                $("#loadNewLi").fadeOut().hide();
                var temp = "";

                var one_day = 1000 * 60 * 60 * 24;
                var present_date = new Date();
                var dueDate = new Date(data.updated_at);

                if (present_date.getMonth() == 11 && present_date.getdate() > 25) dueDate.setFullYear(dueDate.getFullYear() + 1)
                    var Result = Math.round(dueDate.getTime() - present_date.getTime()) / (one_day);
                    var Final_Result = -(Result.toFixed(0)) +" days ago";

                if(data.verify_confirm == 2){
                    var verify_badge = '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.2705 9.22324C19.6 8.67081 20.4 8.67081 20.7295 9.22324C21.0012 9.67877 21.6192 9.77666 22.0184 9.42738C22.5024 9.00379 23.2633 9.25103 23.406 9.87824C23.5236 10.3954 24.0811 10.6795 24.5687 10.4707C25.1599 10.2174 25.8072 10.6877 25.749 11.3282C25.7011 11.8565 26.1436 12.2989 26.6718 12.251C27.3123 12.1928 27.7826 12.8401 27.5293 13.4313C27.3205 13.9189 27.6046 14.4764 28.1218 14.594C28.749 14.7367 28.9962 15.4976 28.5726 15.9816C28.2233 16.3808 28.3212 16.9988 28.7768 17.2705C29.3292 17.6 29.3292 18.4 28.7768 18.7295C28.3212 19.0012 28.2233 19.6192 28.5726 20.0184C28.9962 20.5024 28.749 21.2633 28.1218 21.406C27.6046 21.5236 27.3205 22.0811 27.5293 22.5687C27.7826 23.1599 27.3123 23.8072 26.6718 23.749C26.1436 23.7011 25.7011 24.1436 25.749 24.6718C25.8072 25.3123 25.1599 25.7826 24.5687 25.5293C24.0811 25.3205 23.5236 25.6046 23.406 26.1218C23.2633 26.749 22.5024 26.9962 22.0184 26.5726C21.6192 26.2233 21.0012 26.3212 20.7295 26.7768C20.4 27.3292 19.6 27.3292 19.2705 26.7768C18.9988 26.3212 18.3808 26.2233 17.9816 26.5726C17.4976 26.9962 16.7367 26.749 16.594 26.1218C16.4764 25.6046 15.9189 25.3205 15.4313 25.5293C14.8401 25.7826 14.1928 25.3123 14.251 24.6718C14.2989 24.1436 13.8565 23.7011 13.3282 23.749C12.6877 23.8072 12.2174 23.1599 12.4707 22.5687C12.6795 22.0811 12.3954 21.5236 11.8782 21.406C11.251 21.2633 11.0038 20.5024 11.4274 20.0184C11.7767 19.6192 11.6788 19.0012 11.2232 18.7295C10.6708 18.4 10.6708 17.6 11.2232 17.2705C11.6788 16.9988 11.7767 16.3808 11.4274 15.9816C11.0038 15.4976 11.251 14.7367 11.8782 14.594C12.3954 14.4764 12.6795 13.9189 12.4707 13.4313C12.2174 12.8401 12.6877 12.1928 13.3282 12.251C13.8564 12.2989 14.2989 11.8564 14.251 11.3282C14.1928 10.6877 14.8401 10.2174 15.4313 10.4707C15.9189 10.6795 16.4764 10.3954 16.594 9.87824C16.7367 9.25103 17.4976 9.00379 17.9816 9.42738C18.3808 9.77666 18.9988 9.67877 19.2705 9.22324Z" fill="#119AE2" /><path d="M24 15L18.5 20.5L16 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>';
                }else{
                    var verify_badge = "";
                }

                if(data.active == 1){
                    let active = '<span class="absolute w-2 h-2 rounded-full bg-ubuy-positiveDefault p-1 right-1 bottom-1"></span>';
                }else{
                    let active = '<span class="absolute w-2 h-2 rounded-full bg-ubuy-negativeDefault p-1 right-1 bottom-1"></span>';
                }


                $("#user_pic").html(active + '<span><img class="w-12 h-12 rounded-full" src="'+data.public_url+'" alt="avatar" /></span>');
                $("#user_name").html(data.last_name+' '+data.first_name[0]+".");
                $("#last_seen").html('<span>Last Seen:</span><span>'+Final_Result+'</span>');
            
                temp += '<img src="'+data.public_url+'" alt="avatar" class="rounded-full w-32 h-32" />';
                temp += '<div class="flex flex-row items-center">';
                temp += '<span>'+data.last_name +' '+ data.first_name+'</span>';
                temp += '<span>'+verify_badge+'</span>';
                temp += '</div>';
                temp += '<div class="my-2"><span class="py-1 px-2 rounded-2xl border border-ubuy-inactive text-ubuy-inactive text-tiny">Out of Work</span></div>';
                temp += '<div class="flex flex-row items-center justify-center w-full"><div class="flex flex-col justify-center items-center mr-4"><span class="text-xs text-ubuy-secondary">0</span><span class="text-tiny text-ubuy-inactive"> Jobs Done</span></div><div id="profile-rating" class="flex flex-col px-4 relative"><div class="text-xs text-ubuy-secondary flex flex-row items-center justify-center"><span>'+data.average_rating+'</span><span><svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 0L4.89806 2.76393H7.80423L5.45308 4.47214L6.35114 7.23607L4 5.52786L1.64886 7.23607L2.54692 4.47214L0.195774 2.76393H3.10194L4 0Z" fill="#25282B" /></svg></span></div><span class="text-tiny text-ubuy-inactive">'+data.rating+' Ratings</span></div><div class="flex flex-col justify-center items-center ml-4"><span class="text-xs text-ubuy-secondary">Aug’ 20</span><span class="text-tiny text-ubuy-inactive">Date Joined</span></div></div>';
                temp += '<div class="flex flex-row w-full justify-between my-3">';
                temp += '<div class="flex flex-row items-center justify-center"><span class="mr-2"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" /></svg>';
                temp += '</span><span class="text-tinyer">Identity Verified</span></div>';
                temp += '<div class="flex flex-row items-center justify-center"><span class="mr-2"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" /></svg></span><span class="text-tinyer">Phone Verified</span></div>';
                temp += '<div class="flex flex-row items-center justify-center"><span class="mr-2"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" /></svg></span><span class="text-tinyer">Email Verified</span></div></div>';
                temp += '<div class="my-3 flex flex-row justify-between items-center w-11/12 mx-auto"><a href="public-profile.php?uuid='+data.uuid+'" class="rounded-2xl py-2 px-3 bg-ubuy-blue shadow-card text-xs text-white">View Profile</a><button><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><rect opacity="0.1" width="34" height="34" rx="17" fill="#FB4E4E" /><path d="M23.6311 11.4569C23.248 11.0737 22.7932 10.7697 22.2926 10.5622C21.792 10.3548 21.2554 10.248 20.7136 10.248C20.1717 10.248 19.6351 10.3548 19.1346 10.5622C18.634 10.7697 18.1791 11.0737 17.7961 11.4569L17.0011 12.2519L16.2061 11.4569C15.4323 10.6831 14.3828 10.2484 13.2886 10.2484C12.1943 10.2484 11.1448 10.6831 10.3711 11.4569C9.5973 12.2307 9.1626 13.2801 9.1626 14.3744C9.1626 15.4687 9.5973 16.5181 10.3711 17.2919L11.1661 18.0869L17.0011 23.9219L22.8361 18.0869L23.6311 17.2919C24.0143 16.9088 24.3183 16.454 24.5258 15.9534C24.7332 15.4528 24.8399 14.9163 24.8399 14.3744C24.8399 13.8326 24.7332 13.296 24.5258 12.7954C24.3183 12.2948 24.0143 11.84 23.6311 11.4569Z" fill="#FB4E4E" /></svg></button></div>';

                $('#userDetails').html(temp);
            })
        });
    }

    function bidDetails(receiver_id, project_id){
        fetch("endpoints/getBidDetails.php?pro_id="+receiver_id+"&project_id="+project_id).then(
        res => {
            res.json().then(
            data => {
                // console.log(data);
                $("#loadNewLi").fadeOut().hide();
                $("#mobileNewLoader").fadeOut().hide();
                console.log(data.bid);
                var temp = "";
                var one_day = 1000 * 60 * 60 * 24;
                var present_date = new Date();
                var dueDate = new Date(data.bid[0].due_date);

                if (present_date.getMonth() == 11 && present_date.getdate() > 25) dueDate.setFullYear(dueDate.getFullYear() + 1)
                    var Result = Math.round(dueDate.getTime() - present_date.getTime()) / (one_day);
                    var Final_Result = Result.toFixed(0) +" days";
            
                temp += '<h1 class="text-xs text-ubuy-inactive self-start">Task info</h1>';
                temp += '<h2 class="text-sm text-ubuy-black my-3">'+data.project[0].project_title+'</h2>';
                temp += '<p class="mb-3 text-tinyer text-ubuy-secondary tracking-wide leading-6">'+data.project[0].project_message+'</p>';
                temp += '<div class="text-xs text-ubuy-gray500"><span>Budget:</span><span>N'+data.bid[0].bid_amount+'</span></div>';
                temp += '<div class="text-xs text-ubuy-gray500 mt-1"><span>Category: </span><span>'+data.project[0].sub_category_name+'</span></div>';
                temp += '<div class="text-xs text-ubuy-gray500 flex flex-row items-center my-1"><span class="mr-2"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 13.75C10.9518 13.75 13.75 10.9518 13.75 7.5C13.75 4.04822 10.9518 1.25 7.5 1.25C4.04822 1.25 1.25 4.04822 1.25 7.5C1.25 10.9518 4.04822 13.75 7.5 13.75Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /><path d="M7.5 3.75V7.5L10 8.75" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /></svg></span><span>Due time:</span><span> '+Final_Result+'</span></div>';
                temp += '<div class="self-end mt-10"><a href="task-details.php?project_id='+data.project[0].id+'" class="px-5 py-2 rounded-md bg-ubuy-blue text-white font-medium text-xs">View Task Details</a></div>';
                $('#bidDetails').html(temp);
                    
            })
        });
    }

    function getMessages(receiver_id){
        setInterval(()=>{
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "endpoints/in-messaging.php?pro_id="+receiver_id, true);
            xhr.onload = ()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status === 200){
                        let data = xhr.response;
                        $("#message-loading").hide();
                        console.log(data);
                        // $("#ChatBoxLoader").hide();
                        document.getElementById('chatBox').innerHTML = data;
                        scrollToBottom();
                    }
                }
            }
            xhr.send();
        }, 500);
    }

    function checkIfMessages(){
        if($("#check-messages").val() == 1){
            $(".yes-messages").show();
            $(".no-messages").hide();
        }else if($("#check-messages").val() == 0){
            $(".yes-messages").hide();
            $(".no-messages").show();
        }
    }

    function loadUnread(receiver_id){
        setInterval(()=>{
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "endpoints/perUserUnread.php?receiver_id="+receiver_id, true);
            xhr.onload = ()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status === 200){
                        let data = xhr.response;
                        $("#message-loading").hide();
                        console.log(data);
                        $("#ChatBoxLoader").hide();
                        document.getElementById('uread').innerHTML = data;
                    }
                }
            }
            xhr.send();
        }, 500);
    }

    $(document).ready(function(){
        $("#message-form").on("submit", function(e){
            e.preventDefault();
            // $("#sendMessageBtn").html("Please wait...");
            $.ajax({
                type: "POST",
                url: "endpoints/out-messaging.php",
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                data: new FormData(this),
                beforeSend: function(){
                    $('#message-form').attr("disabled","disabled");
                    $('#message-form').css("opacity",".3");
                },
                success: function(data)
                {
                    // console.log(data);
                    toastr.success("Message sent!", {timeOut: 7000});
                    getMessages($("#pro_id").val());                    
                    $('#message-form').attr("disabled","");
                    $('#message-form').css("opacity","");
                    $("#message-form")[0].reset();
                }
            });
            return false;
        });
    });

    function scrollToBottom(){
        var objDiv = document.getElementById("chatBoxMain");
        objDiv.scrollToBottom = objDiv.scrollHeight;
        // $("#chatBox").scrollTop($("#chatBox")[0].scrollHeight);
    }


        
</script>