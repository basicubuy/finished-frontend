<?php
include_once("endpoints/constant.php");
if(isset($_SESSION['user_role'])){
    if($_SESSION['user_role'] == 'customer'){
        require_once 'inc/customer-header.php';
    }elseif($_SESSION['user_role'] == 'pro'){
        require_once 'inc/pro-header.php';
    }


    $refer = $init->referrerList();
    $refer = json_decode($refer, true);
    $refer = isset($refer['referrer_list']) ? $refer['referrer_list']: "";

    
    $rl = $init->referrerListCount();
    $rl = json_decode($rl, true);
    $rl = isset($rl['count']) ? $rl['count']: "";

}else{
    session_destroy();
    unset($_SESSION['access_token']);
    header("Location: sign-in.php?error=You have to login!");
}
?>
       <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full" onload="generateLink()">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex w-full flex-col my-7 lg:pl-7 lg:pr-8 px-4 gap-6">

                
                    <div class="flex flex-col xl:flex-row gap-x-6 gap-y-6 xl:gap-y-0 justify-center">
                        <div class="flex flex-2 flex-row items-center xl:shadow-card xl:w-2/3 w-full bg-white xl:px-9 py-5 px-5 rounded-lg gap-x-7">
                            <div class="w-7/12">
                                <h1 class="text-lg lg:text-2xl font-semibold">Get 200 UReward Points</h1>
                                <h2 class="text-base text-ubuy-secondary mb-2.5">for every new user you refer</h2>
                                <p class="text-xs text-ubuy-inactive mb-5 sm:block hidden">Share your link with a friend and you both could be eligible for 200 UReward points under our referal program</p>
                                <div class="flex flex-row w-full gap-x-4">
                                    <div class="flex flex-row items-center justify-between rounded-llg bg-ubuy-gray400 gap-x-2 p-4 flex-auto">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 7H18C18.6566 7 19.3068 7.12933 19.9134 7.3806C20.52 7.63188 21.0712 8.00017 21.5355 8.46447C21.9998 8.92876 22.3681 9.47996 22.6194 10.0866C22.8707 10.6932 23 11.3434 23 12C23 12.6566 22.8707 13.3068 22.6194 13.9134C22.3681 14.52 21.9998 15.0712 21.5355 15.5355C21.0712 15.9998 20.52 16.3681 19.9134 16.6194C19.3068 16.8707 18.6566 17 18 17H15M9 17H6C5.34339 17 4.69321 16.8707 4.08658 16.6194C3.47995 16.3681 2.92876 15.9998 2.46447 15.5355C1.52678 14.5979 1 13.3261 1 12C1 10.6739 1.52678 9.40215 2.46447 8.46447C3.40215 7.52678 4.67392 7 6 7H9"
                                                stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 12H16" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span class="flex-auto text-ubuy-secondary text-center text-sm h-5 w-60 overflow-hidden" id="generatedLink"></span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 9H11C9.89543 9 9 9.89543 9 11V20C9 21.1046 9.89543 22 11 22H20C21.1046 22 22 21.1046 22 20V11C22 9.89543 21.1046 9 20 9Z" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5 15H4C3.46957 15 2.96086 14.7893 2.58579 14.4142C2.21071 14.0391 2 13.5304 2 13V4C2 3.46957 2.21071 2.96086 2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H13C13.5304 2 14.0391 2.21071 14.4142 2.58579C14.7893 2.96086 15 3.46957 15 4V5"
                                                stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="relative" id="profile-dropdown">
                                        <button class="py-2 px-2 rounded-llg shadow-card bg-ubuy-blue font-semibold text-white text-sm" >Share</button>
                                        <div id="dropdown" class="text-sm flex grid grid-cols-3 gap-4 bg-white absolute -right-1.5 w-60 rounded-lg text-ubuy-gray-500 justify-center align-center">
                                            <div class="p-4"><img src="assets/images/whatsapp.svg" width="50" height="50" /></div>
                                            <div class="p-4"><img src="assets/images/messenger.svg" width="50" height="50" /></div>
                                            <div class="p-4"><img src="assets/images/facebook.svg" width="50" height="50" /></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-5/12 sm:block hidden">
                                <img alt="welcome" class="min-w-full h-auto" src="assets/images/refer.png">
                            </div>
                        </div>
                        <div class="xl:shadow-card flex-1 xl:bg-white w-full xl:flex-col flex-row items-center xl:justify-center justify-between xl:p-10 flex xl:gap-y-10 rounded-llg gap-x-5">
                            <div class="relative bg-white xl:w-auto sm:w-1/2 p-5 xl:p-0 rounded-llg flex flex-col items-center">
                                <div class="flex flex-row items-center justify-center">
                                    <div class="xl:static items-center absolute left-6 xl:left-0 xl:mr-3 mr-0 top-1/2 xl:top-0 transform xl:translate-y-0 -translate-y-1/2 xl:scale-100 scale-150">
                                        <svg width="27" height="36" viewBox="0 0 27 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9896 10.3269L9.9043 12.1939L16.3909 36.0003L16.3912 36.0002L18.6342 30.3062L23.4761 34.1331L16.9896 10.3269Z" fill="#E93C3C" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1539 10.3269L17.2393 12.1939L10.7527 36.0003L10.7503 35.9997L8.50749 30.3062L3.66792 34.1313L10.1539 10.3269Z" fill="#E93C3C" />
                                            <path d="M12.467 1.64502C12.91 0.9021 13.986 0.9021 14.429 1.64502C14.7944 2.2576 15.6255 2.38925 16.1623 1.91954C16.8132 1.34989 17.8365 1.68239 18.0283 2.52585C18.1865 3.22135 18.9363 3.6034 19.5919 3.32254C20.387 2.98193 21.2575 3.61437 21.1793 4.47582C21.1148 5.18615 21.7098 5.78121 22.4202 5.7167C23.2816 5.63846 23.914 6.50894 23.5734 7.30405C23.2926 7.95968 23.6746 8.7095 24.3701 8.86765C25.2136 9.05944 25.5461 10.0827 24.9764 10.7337C24.5067 11.2704 24.6384 12.1016 25.251 12.467C25.9939 12.91 25.9939 13.986 25.251 14.429C24.6384 14.7944 24.5067 15.6255 24.9764 16.1623C25.5461 16.8132 25.2136 17.8365 24.3701 18.0283C23.6746 18.1865 23.2926 18.9363 23.5734 19.5919C23.914 20.387 23.2816 21.2575 22.4202 21.1793C21.7098 21.1148 21.1148 21.7098 21.1793 22.4202C21.2575 23.2816 20.387 23.914 19.5919 23.5734C18.9363 23.2926 18.1865 23.6746 18.0283 24.3701C17.8365 25.2136 16.8132 25.5461 16.1623 24.9764C15.6255 24.5067 14.7944 24.6384 14.429 25.251C13.986 25.9939 12.91 25.9939 12.467 25.251C12.1016 24.6384 11.2704 24.5067 10.7337 24.9764C10.0827 25.5461 9.05944 25.2136 8.86765 24.3701C8.7095 23.6746 7.95968 23.2926 7.30405 23.5734C6.50894 23.914 5.63846 23.2816 5.7167 22.4202C5.78121 21.7098 5.18615 21.1148 4.47582 21.1793C3.61437 21.2575 2.98193 20.387 3.32254 19.5919C3.6034 18.9363 3.22135 18.1865 2.52585 18.0283C1.68239 17.8365 1.34989 16.8132 1.91954 16.1623C2.38925 15.6255 2.2576 14.7944 1.64502 14.429C0.9021 13.986 0.9021 12.91 1.64502 12.467C2.2576 12.1016 2.38925 11.2704 1.91954 10.7337C1.34989 10.0827 1.68239 9.05944 2.52585 8.86765C3.22135 8.7095 3.6034 7.95968 3.32254 7.30405C2.98193 6.50894 3.61437 5.63846 4.47582 5.7167C5.18615 5.78121 5.78121 5.18615 5.7167 4.47582C5.63846 3.61437 6.50894 2.98193 7.30405 3.32254C7.95968 3.6034 8.7095 3.22135 8.86765 2.52585C9.05944 1.68239 10.0827 1.34989 10.7337 1.91954C11.2704 2.38925 12.1016 2.2576 12.467 1.64502Z" fill="#F1B974" />
                                            <circle cx="13.3693" cy="13.3692" r="9.16908" fill="#D08230" /><path d="M13.2014 8.39981L14.2791 11.7166H17.7665L14.9451 13.7664L16.0228 17.0832L13.2014 15.0333L10.38 17.0832L11.4577 13.7664L8.6363 11.7166H12.1237L13.2014 8.39981Z" fill="white" />
                                        </svg>


                                    </div>

                                    <span class="text-ubuy-yellow200 font-normal text-3xl xl:ml-0 ml-14"><?php echo isset($userData["ucoin"]) ? $userData["ucoin"] : "0"; ?></span>
                                </div>
                                <span class="text-ubuy-secondary text-xs font-normal mt-3 xl:ml-0 ml-14 text-center">UReward Points Earned</span>
                            </div>
                            <div class="relative bg-white xl:w-auto sm:w-1/2 p-5 xl:p-0 rounded-llg flex flex-col items-center justify-center">

                                <div class="flex xl:flex-row flex-col items-center justify-center">
                                    <div class="xl:flex items-center justify-center absolute left-6 xl:left-0 xl:mr-3 xl:mt-2 mr-0 top-1/2 xl:top-0 transform xl:translate-y-0  -translate-y-1/2 xl:scale-100 scale-150 my-auto">
                                        <svg width="28" height="20" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.0003 10C21.8403 10 23.3203 8.50666 23.3203 6.66666C23.3203 4.82666 21.8403 3.33333 20.0003 3.33333C18.1603 3.33333 16.667 4.82666 16.667 6.66666C16.667 8.50666 18.1603 10 20.0003 10ZM10.0003 8.66666C12.2137 8.66666 13.987 6.88 13.987 4.66666C13.987 2.45333 12.2137 0.666664 10.0003 0.666664C7.78699 0.666664 6.00033 2.45333 6.00033 4.66666C6.00033 6.88 7.78699 8.66666 10.0003 8.66666ZM20.0003 12.6667C17.5603 12.6667 12.667 13.8933 12.667 16.3333V19.3333H27.3337V16.3333C27.3337 13.8933 22.4403 12.6667 20.0003 12.6667ZM10.0003 11.3333C6.89366 11.3333 0.666992 12.8933 0.666992 16V19.3333H10.0003V16.3333C10.0003 15.2 10.4403 13.2133 13.1603 11.7067C12.0003 11.4667 10.8803 11.3333 10.0003 11.3333Z" fill="#119AE2" />
                                        </svg>
                                    </div>
                                    <span class="text-3xl text-ubuy-blue font-semibold xl:ml-0 ml-14"><?php echo $rl; ?></span>
                                </div>
                                <span class="text-ubuy-secondary xl:text-sm text-xs font-normal text-center mt-3 xl:ml-0 ml-14">Users Referred</span>
                            </div>
                        </div>
                    </div>
                    <div class="sm:hidden flex flex-col w-full gap-y-2.5">
                        <h2 class="text-ubuy-black mb-1.5">Referred Users</h2>

                        <?php 
                                if(!empty($refer)){ 
                                    foreach($refer as $ref){ 
                                ?>

                        <div class="rounded-llg flex flex-col items-center justify-between bg-white p-5 text-ubuy-secondary">
                            <div class="flex flex-row items-center justify-between w-full">
                                <span class="font-medium"><?php echo ucfirst($ref['user']['last_name']).' '.ucfirst($ref['user']['first_name']); ?></span>
                                <span class="text-xxs">Status:</span>
                            </div>
                            <div class="flex flex-row items-center justify-between w-full">
                                <span class="text-tiny"><?php echo $ref['user']['email']; ?></span>
                                <span class="rounded px-2 py-1 text-tiny bg-ubuy-blue text-white">
                                <?php 
                                    if($ref['claimed'] == 0){
                                        echo "Pending";
                                    }elseif($ref['claimed'] == 1){
                                        echo "Joined";
                                    }elseif($ref['claimed'] == 2){
                                        echo "Posted Task";
                                    }elseif($ref['claimed'] == 3){
                                        echo "Completed";
                                    }
                                ?>
                                </span>
                            </div>
                        </div>

                        <?php } }else{ ?>
                            <div class="rounded-llg flex flex-col items-center justify-between bg-white p-5 text-ubuy-secondary">
                                <div class="flex flex-row items-center justify-between w-full">
                                    <span class="font-medium">No record found!</span>
                                </div>
                            </div>
                        <?php } ?>
                        



                    </div>
                    <div class="w-full bg-white rounded-llg shadow-card sm:block hidden">
                        <h1 class="mt-5 ml-5 text-base text-ubuy-black">Refered Users</h1>
                        <table class="table-auto text-secondary font-normal text-xxs w-full">
                            <thead>
                                <tr class="border-b border-gray-200">
                                    <th class="text-left text-ubuy-secondary font-normal w-40 p-5 hidden xl:table-cell">Name</th>
                                    <th class="text-left text-ubuy-secondary font-normal w-40 py-5 pr-5 pl-5 xl:pl-0">Email Address</th>
                                    <th class="text-left text-ubuy-secondary font-normal w-40 py-5 pr-5 hidden xl:table-cell">Date Joined</th>
                                    <th class="text-left text-ubuy-secondary font-normal py-5 pr-5"></th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                                if(!empty($refer)){ 

                                    foreach($refer as $ref){ 
                                    
                                    
                                    ?>
                                
                                <tr class="border-b border-gray-200 cursor-pointer hover:bg-ubuy-gray400">
                                    <td class="text-left w-40 p-5 hidden xl:table-cell"><?php echo ucfirst($ref['user']['last_name']).' '.ucfirst($ref['user']['first_name']); ?></td>
                                    <td class="text-left w-40 py-5 pr-5 pl-5 xl:pl-0"><?php echo $ref['user']['email']; ?></td>
                                    <td class="text-left w-40 py-5 pr-5 hidden xl:table-cell">
                                        <?php echo date('l | M j, Y', strtotime($ref['user']['created_at'])); ?></td>
                                    <td class="text-left py-5 pr-5">
                                        <div class="relative">
                                            <progress class="w-full rounded-full refer-progress" value="50" max="100" min="0" status="joined"></progress>
                                            <div class="refer-joined absolute -top-2">
                                                <div class="icon rounded-full p-2 w-9 h-9 flex items-center justify-center bg-ubuy-gray200">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="refer-<?php $ref['claimed'] == false ? 'completed' : 'posted'; ?>-task absolute left-1/2 transform -translate-x-1/2 -top-2">
                                                <div class="icon rounded-full p-2 bg-ubuy-gray200 w-9 h-9 flex items-center justify-center">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M20 7H4C2.89543 7 2 7.89543 2 9V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V9C22 7.89543 21.1046 7 20 7Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M16 7V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H10C9.46957 3 8.96086 3.21071 8.58579 3.58579C8.21071 3.96086 8 4.46957 8 5V7" stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M2 12H21.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <rect x="0.5" y="0.5" width="23" height="23" stroke="#119AE2" stroke-opacity="0.1" />
                                                        </svg>

                                                    </span>
                                                </div>

                                            </div>
                                            <div class="refer-<?php $ref['claimed'] == false ? 'completed' : 'posted'; ?>-task absolute right-0 -top-2">
                                                <div class="icon rounded-full p-2 bg-ubuy-gray200 w-9 h-9 flex items-center justify-center">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999"
                                                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M22 4L12 14.01L9 11.01" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>

                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } }else{ ?>
                                <tr class="border-b border-gray-200 cursor-pointer hover:bg-ubuy-gray400">
                                    <td class="text-center w-40 p-5 hidden xl:table-cell">No record found!</td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>

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
    window.onload = ()=>{
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "endpoints/generate-refer-code.php", true);
        xhr.onload = ()=>{
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    let data = xhr.response;
                    $("#generatedLink").html(data);

                }
            }
        }
        xhr.send();
    }
</script>