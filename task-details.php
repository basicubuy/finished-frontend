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

// $customer = $init->getSingleProject(isset($_GET['project_id']) ? $_GET['project_id'] : "");
// $customer = json_decode($customer, true);
// $customer = isset($customer['customer'][0]) ? $customer['customer'][0] : "";

// $pro_services = $init->getSingleProject(isset($_GET['project_id']) ? $_GET['project_id'] : "");
// $pro_services = json_decode($pro_services, true);
// $pro_services = isset($pro_services['pro_services']) ? $pro_services['pro_services'] : "";

?>
        <main class="flex-1 overflow-auto sm:pt-24 pt-20 flex items-stretch lg:pl-64 pl-0 max-w-full" id="main-content">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex w-full flex-col lg:my-7 my-4 xl:pl-7 xl:pr-10 px-4 gap-y-6">

                    <?php if($singleProject['status'] == 0 || $singleProject['status'] == 1){ ?>

                        <div class="flex sm:flex-row flex-col gap-5">

                            <div class="relative w-full bg-white rounded-llg flex flex-col justify-start p-5 min-h-220">
                                <!-- sub menu -->
                                <div class="relative" id="task-card-floating-menu">
                                    <button class="absolute right-4">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="40" rx="20" fill="#119AE2" fill-opacity="0.05" />
                                            <path d="M20 21C20.5523 21 21 20.5523 21 20C21 19.4477 20.5523 19 20 19C19.4477 19 19 19.4477 19 20C19 20.5523 19.4477 21 20 21Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M20 14C20.5523 14 21 13.5523 21 13C21 12.4477 20.5523 12 20 12C19.4477 12 19 12.4477 19 13C19 13.5523 19.4477 14 20 14Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M20 28C20.5523 28 21 27.5523 21 27C21 26.4477 20.5523 26 20 26C19.4477 26 19 26.4477 19 27C19 27.5523 19.4477 28 20 28Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <div id="task-card-floating-dropdown" class="text-sm hidden flex-col gap-y-3.5 px-6 py-3.5 bg-white absolute -right-1.5 top-2 w-60 rounded-lg text-ubuy-secondary font-medium">
                                        <button class="flex items-center h-10 focus:outline-none hover:bg-ubuy-gray400">
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="18" cy="18" r="18" fill="#119AE2" fill-opacity="0.2" />
                                                <path d="M24 14C25.6569 14 27 12.6569 27 11C27 9.34315 25.6569 8 24 8C22.3431 8 21 9.34315 21 11C21 12.6569 22.3431 14 24 14Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 21C13.6569 21 15 19.6569 15 18C15 16.3431 13.6569 15 12 15C10.3431 15 9 16.3431 9 18C9 19.6569 10.3431 21 12 21Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M24 28C25.6569 28 27 26.6569 27 25C27 23.3431 25.6569 22 24 22C22.3431 22 21 23.3431 21 25C21 26.6569 22.3431 28 24 28Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14.5898 19.5098L21.4198 23.4898" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21.4098 12.5103L14.5898 16.4903" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <span class="ml-2.5 ">Share Task</span>
                                        </button>
                                        <button class="flex items-center h-10 focus:outline-none hover:bg-ubuy-gray400">
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="18" cy="18" r="18" fill="#FB4E4E" fill-opacity="0.1" />
                                                <path d="M17 10H10C9.46957 10 8.96086 10.2107 8.58579 10.5858C8.21071 10.9609 8 11.4696 8 12V26C8 26.5304 8.21071 27.0391 8.58579 27.4142C8.96086 27.7893 9.46957 28 10 28H24C24.5304 28 25.0391 27.7893 25.4142 27.4142C25.7893 27.0391 26 26.5304 26 26V19"
                                                    stroke="#F6A609" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M24.5 8.50023C24.8978 8.1024 25.4374 7.87891 26 7.87891C26.5626 7.87891 27.1022 8.1024 27.5 8.50023C27.8978 8.89805 28.1213 9.43762 28.1213 10.0002C28.1213 10.5628 27.8978 11.1024 27.5 11.5002L18 21.0002L14 22.0002L15 18.0002L24.5 8.50023Z"
                                                    stroke="#F6A609" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <span class="ml-2.5">Log Dispute</span>
                                        </button>
                                        <button onclick="onOpenPopup('cancel-task-popup')" class="flex items-center h-10 focus:outline-none hover:bg-ubuy-gray400">
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="18" cy="18" r="18" fill="#FB4E4E" fill-opacity="0.1" />
                                                <path d="M18 28C23.5228 28 28 23.5228 28 18C28 12.4772 23.5228 8 18 8C12.4772 8 8 12.4772 8 18C8 23.5228 12.4772 28 18 28Z" stroke="#FB4E4E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 15L15 21" stroke="#FB4E4E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M15 15L21 21" stroke="#FB4E4E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <span class="ml-2.5">Cancel Task</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- Sub Menu End -->
                                <h1 class="mb-5 text-base font-medium text-ubuy-black">Task Information</h1>
                                <h2 class="mb-2.5 text-2xl text-ubuy-blue"><?php echo ucfirst($singleProject['project_title']); ?></h2>
                                <p class="text-sm font-normal text-left w-11/12" style="height: 100px;">
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

                            <div class="sm:flex hidden flex-col flex-auto gap-y-4 w-72">
                                <a href="edit-task.php?project_id=<?php echo $_GET['project_id']; ?>">
                                    <div class="bg-white flex flex-row items-center justify-between rounded-llg p-3">
                                        <span>
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="36" height="36" rx="18" fill="#CFEBF9" fill-opacity="0.2" />
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
                                <a href="#">
                                    <div class="bg-white flex flex-row items-center justify-between rounded-llg p-3">
                                        <span>
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="18" cy="18" r="18" fill="#FFBC1F" fill-opacity="0.2" />
                                                <path d="M20 21H14C12.9391 21 11.9217 21.4214 11.1716 22.1716C10.4214 22.9217 10 23.9391 10 25V27" stroke="#F6A609" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M18 17C20.2091 17 22 15.2091 22 13C22 10.7909 20.2091 9 18 9C15.7909 9 14 10.7909 14 13C14 15.2091 15.7909 17 18 17Z" stroke="#F6A609" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M26.1776 24.8412C26.1911 24.7319 26.2001 24.6181 26.2001 24.5C26.2001 24.3819 26.1911 24.2681 26.1731 24.1588L26.9336 23.5812C27.0011 23.5287 27.0191 23.4325 26.9786 23.3581L26.2586 22.1463C26.2136 22.0675 26.1191 22.0412 26.0381 22.0675L25.1425 22.4175C24.9535 22.2775 24.7555 22.1638 24.535 22.0763L24.4 21.1487C24.3865 21.0612 24.31 21 24.22 21H22.78C22.69 21 22.618 21.0612 22.6045 21.1487L22.4695 22.0763C22.249 22.1638 22.0465 22.2819 21.862 22.4175L20.9664 22.0675C20.8854 22.0369 20.7909 22.0675 20.7459 22.1463L20.0259 23.3581C19.9809 23.4369 19.9989 23.5287 20.0709 23.5812L20.8314 24.1588C20.8134 24.2681 20.7999 24.3863 20.7999 24.5C20.7999 24.6137 20.8089 24.7319 20.8269 24.8412L20.0664 25.4188C19.9989 25.4713 19.9809 25.5675 20.0214 25.6419L20.7414 26.8538C20.7864 26.9325 20.8809 26.9588 20.9619 26.9325L21.8575 26.5825C22.0465 26.7225 22.2445 26.8362 22.465 26.9237L22.6 27.8512C22.618 27.9387 22.69 28 22.78 28H24.22C24.31 28 24.3865 27.9387 24.3955 27.8512L24.5305 26.9237C24.751 26.8362 24.9535 26.7181 25.138 26.5825L26.0336 26.9325C26.1146 26.9631 26.2091 26.9325 26.2541 26.8538L26.9741 25.6419C27.0191 25.5631 27.0011 25.4713 26.9291 25.4188L26.1776 24.8412ZM23.5 25.8125C22.7575 25.8125 22.15 25.2219 22.15 24.5C22.15 23.7781 22.7575 23.1875 23.5 23.1875C24.2425 23.1875 24.85 23.7781 24.85 24.5C24.85 25.2219 24.2425 25.8125 23.5 25.8125Z"
                                                    fill="#F6A609" />
                                            </svg>

                                        </span>
                                        <span class="text-sm font-medium text-ubuy-black">Support</span>
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                                <a href="timeline.php?project=<?php echo ucfirst($singleProject['project_title']); ?>&project_id=<?php echo $_GET['project_id']; ?>">
                                    <div class="bg-white flex flex-row items-center justify-between rounded-llg p-3">
                                        <span>
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="18" cy="18" r="18" fill="#BB6BD9" fill-opacity="0.2" />
                                                <path
                                                    d="M18.636 13.6064C18.3305 13.6064 18.0376 13.7278 17.8217 13.9437C17.6057 14.1597 17.4844 14.4526 17.4844 14.758C17.4844 15.0635 17.6057 15.3564 17.8217 15.5723C18.0376 15.7883 18.3305 15.9096 18.636 15.9096H23.2423C23.5478 15.9096 23.8407 15.7883 24.0566 15.5723C24.2726 15.3564 24.3939 15.0635 24.3939 14.758C24.3939 14.4526 24.2726 14.1597 24.0566 13.9437C23.8407 13.7278 23.5478 13.6064 23.2423 13.6064H18.636Z"
                                                    fill="#9B51E0" fill-opacity="0.5" />
                                                <path
                                                    d="M18.636 23.9707C18.3305 23.9707 18.0376 24.092 17.8217 24.308C17.6057 24.524 17.4844 24.8169 17.4844 25.1223C17.4844 25.4277 17.6057 25.7206 17.8217 25.9366C18.0376 26.1526 18.3305 26.2739 18.636 26.2739H23.2423C23.5478 26.2739 23.8407 26.1526 24.0566 25.9366C24.2726 25.7206 24.3939 25.4277 24.3939 25.1223C24.3939 24.8169 24.2726 24.524 24.0566 24.308C23.8407 24.092 23.5478 23.9707 23.2423 23.9707H18.636Z"
                                                    fill="#9B51E0" fill-opacity="0.5" />
                                                <path
                                                    d="M18.636 10.1514C18.3305 10.1514 18.0376 10.2727 17.8217 10.4887C17.6057 10.7046 17.4844 10.9975 17.4844 11.303C17.4844 11.6084 17.6057 11.9013 17.8217 12.1173C18.0376 12.3332 18.3305 12.4545 18.636 12.4545H27.8487C28.1541 12.4545 28.447 12.3332 28.663 12.1173C28.879 11.9013 29.0003 11.6084 29.0003 11.303C29.0003 10.9975 28.879 10.7046 28.663 10.4887C28.447 10.2727 28.1541 10.1514 27.8487 10.1514H18.636Z"
                                                    fill="#9B51E0" fill-opacity="0.8" />
                                                <path
                                                    d="M18.636 20.5161C18.3305 20.5161 18.0376 20.6374 17.8217 20.8534C17.6057 21.0694 17.4844 21.3623 17.4844 21.6677C17.4844 21.9731 17.6057 22.266 17.8217 22.482C18.0376 22.698 18.3305 22.8193 18.636 22.8193H27.8487C28.1541 22.8193 28.447 22.698 28.663 22.482C28.879 22.266 29.0003 21.9731 29.0003 21.6677C29.0003 21.3623 28.879 21.0694 28.663 20.8534C28.447 20.6374 28.1541 20.5161 27.8487 20.5161H18.636Z"
                                                    fill="#9B51E0" fill-opacity="0.8" />
                                                <path
                                                    d="M8.15159 9C7.84617 9 7.55326 9.12133 7.33729 9.33729C7.12133 9.55326 7 9.84617 7 10.1516V15.9095C7 16.215 7.12133 16.5079 7.33729 16.7238C7.55326 16.9398 7.84617 17.0611 8.15159 17.0611H13.9095C14.215 17.0611 14.5079 16.9398 14.7238 16.7238C14.9398 16.5079 15.0611 16.215 15.0611 15.9095V10.1516C15.0611 9.84617 14.9398 9.55326 14.7238 9.33729C14.5079 9.12133 14.215 9 13.9095 9H8.15159Z"
                                                    fill="#9B51E0" />
                                                <path
                                                    d="M8.15159 19.3643C7.84617 19.3643 7.55326 19.4856 7.33729 19.7016C7.12133 19.9175 7 20.2104 7 20.5158V26.2738C7 26.5792 7.12133 26.8721 7.33729 27.0881C7.55326 27.3041 7.84617 27.4254 8.15159 27.4254H13.9095C14.215 27.4254 14.5079 27.3041 14.7238 27.0881C14.9398 26.8721 15.0611 26.5792 15.0611 26.2738V20.5158C15.0611 20.2104 14.9398 19.9175 14.7238 19.7016C14.5079 19.4856 14.215 19.3643 13.9095 19.3643H8.15159Z"
                                                    fill="#9B51E0" />
                                            </svg>

                                        </span>
                                        <span class="text-sm font-medium text-ubuy-black">Timeline</span>
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                                <a href="sponsor-task.php?project=<?php echo ucfirst($singleProject['project_title']); ?>&project_id=<?php echo $_GET['project_id']; ?>">
                                    <div class="bg-white flex flex-row items-center justify-between rounded-llg p-3">
                                        <span>
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="18" cy="18" r="18" fill="#FFBC1F" fill-opacity="0.2" />
                                                <path d="M19 8L9 20H18L17 28L27 16H18L19 8Z" stroke="#F6A609" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </span>

                                        <span class="text-sm font-medium text-ubuy-black">Sponsor Task</span>
                                        <button>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </a>
                                <a href="invite-professional.php?project_id=<?php echo $_GET['project_id']; ?>&subcategory_id=<?php echo $singleProject['sub_category_id'] ?>">
                                    <div class="bg-white flex flex-row items-center justify-between rounded-llg p-3">
                                        <span>
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="18" cy="18" r="18" fill="#119AE2" fill-opacity="0.2" />
                                                <path d="M22 27V25C22 23.9391 21.5786 22.9217 20.8284 22.1716C20.0783 21.4214 19.0609 21 18 21H11C9.93913 21 8.92172 21.4214 8.17157 22.1716C7.42143 22.9217 7 23.9391 7 25V27" stroke="#119AE2" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M14.5 17C16.7091 17 18.5 15.2091 18.5 13C18.5 10.7909 16.7091 9 14.5 9C12.2909 9 10.5 10.7909 10.5 13C10.5 15.2091 12.2909 17 14.5 17Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M26 14V20" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M29 17H23" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>

                                        <span class="text-sm font-medium text-ubuy-black">Invite Pro to Task</span>
                                        <button>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-row justify-between items-center text-sm text-ubuy-secondary">
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

                    
                        <?php
                        if(isset($allBids['bids'])){ ?>
                        
                        <div class="w-full grid xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 grid-flow-row gap-6">
                        <?php foreach($allBids['bids'] as $bid){ ?>

                            <div class="flex flex-col p-5 rounded-llg items-start justify-start bg-white text-ubuy-secondary gap-y-3">
                                <div class="flex flex-row w-full">
                                    <div class="w-14 h-14 mr-2">
                                        <img class="avatar rounded-full" src="<?php echo $bid['pro'][0]['public_url'] != 'http://new.ubuy.ng/storage' ? $bid['pro'][0]['public_url'] : "assets/images/ubuy_logo.svg" ?>" alt="">
                                    </div>
                                    <div class="flex flex-col flex-auto">
                                        <div class="flex flex-row items-center justify-between w-full">
                                            
                                            <span class="text-base font-medium text-ubuy-blue"><?php echo $bid['pro'][0]['last_name'].' '.$bid['pro'][0]['first_name'][0]; ?>.</span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z"
                                                    stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" />
                                                <circle cx="19" cy="5" r="5" fill="#FB4E4E" />
                                            </svg>
                                        </div>
                                        <span class="text-xs font-medium text-left"><?php echo $singleProject['sub_category_name']; ?></span>
                                        <div class="flex flex-row items-center justify-between w-full">
                                            <div class="ratings text-xs xl:text-sm">
                                                <div class="empty-stars mx-auto"></div>
                                                <!-- Add the ratings percentage as the width -->
                                                <?php 
                                                    $rate = ($bid['pro'][0]['average_rating']*100)/5;
                                                ?>
                                                <div class="full-stars" style="width:<?php echo $rate; ?>%"></div>
                                            </div>
                                            <div>
                                                <a href="message.php?project_id=<?php echo $_GET['project_id']; ?>&pro_id=<?php echo $bid['pro'][0]['id']; ?>" class="rounded bg-ubuy-blue text-white text-xs font-medium px-3 py-1">Chat Pro</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="text-sm text-ubuy-secondary">
                                    <?php echo $bid['bid_message']; ?>
                                </div>
                                <div class="flex flex-row items-center justify-between w-full">
                                    <div>
                                        <span class="text-base text-ubuy-secondary font-medium">Bid:</span>
                                        <span class="text-base text-ubuy-secondary">N<?php echo number_format($bid['bid_amount']); ?></span>
                                    </div>
                                    <div>
                                        <span class="text-base text-ubuy-secondary font-medium">Duration:</span>
                                        <span class="text-base text-ubuy-secondary">
                                            <?php 
                                            $now = time(); // or your date as well
                                            $your_date = strtotime($bid['due_date']);
                                            $datediff = $now - $your_date;
                                            
                                            echo -(round($datediff / (60 * 60 * 24)));
                                            //echo (strtotime($bid['due_date']) - strtotime(date("Y/m/d"))) / (60 * 60 * 24); ?> days</span>
                                    </div>
                                </div>
                                <div class="flex flex-row items-center">
                                    <span class="mr-1">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9 4.5V9L12 10.5" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="text-xs text-ubuy-secondary"><?php echo $bid['created']; ?> </span>
                                </div>
                                <div class="flex flex-row items-center justify-between w-full">
                                    <div class="flex flex-row gap-5">
                                        <button onclick="onOpenPopupAttach('accept-bid-popup', '<?php echo $bid['pro'][0]['last_name'].'~'.$bid['pro'][0]['id']; ?>')" class="rounded bg-ubuy-positiveDefault text-white text-xs font-medium px-3 py-1">
                                            Accept
                                        </button>
                                        <button onclick="onOpenPopup('reject-bid-popup')" id="<?php echo $bid['pro'][0]['last_name']; ?>" class="rounded bg-ubuy-negativeDefault text-white text-xs font-medium px-3 py-1">
                                            Decline
                                        </button>
                                    </div>
                                    <a href="bid-confirm-payment.php?pro-id=<?php echo $bid['pro'][0]['id']; ?>&project-id=<?php echo $_GET['project_id']; ?>">
                                        <button class="rounded bg-transparent border border-ubuy-blue text-ubuy-blue text-xs font-medium px-3 py-1">
                                            View Bid
                                        </button>
                                    </a>

                                </div>

                            </div>
                        <?php }
                            }else{ ?>
                            <div class="w-full flex flex-col p-5 rounded-llg items-start justify-center align-center text-center bg-white text-ubuy-secondary gap-y-3">
                                No bids yet!
                            </div>
                        <?php } ?>

                        </div>
                    <?php }elseif($singleProject['status'] == 2){ 

                            $pro = $init->getSingleProjectPro($singleProject['id'], $singleProject['pro_id']);
                            $pro = json_decode($pro, true);

                            $pro_bid = $pro['bid'][0];

                            $pro_data = $pro['pro'][0];
                
                        ?>

                        
                    
                        <div class="w-full flex flex-col gap-4">
                            <div class="flex flex-row w-full gap-x-4">
                                <div class="sm:w-full flex-1">
                                    <div class="relative w-full bg-white rounded-llg flex flex-col justify-start p-5 min-h-220 h-full xl:h-auto">
                                        <button class="absolute right-4">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#119AE2" fill-opacity="0.05" />
                                                <path d="M20 21C20.5523 21 21 20.5523 21 20C21 19.4477 20.5523 19 20 19C19.4477 19 19 19.4477 19 20C19 20.5523 19.4477 21 20 21Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M20 14C20.5523 14 21 13.5523 21 13C21 12.4477 20.5523 12 20 12C19.4477 12 19 12.4477 19 13C19 13.5523 19.4477 14 20 14Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M20 28C20.5523 28 21 27.5523 21 27C21 26.4477 20.5523 26 20 26C19.4477 26 19 26.4477 19 27C19 27.5523 19.4477 28 20 28Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <h1 class="mb-5 text-base font-medium text-ubuy-black">Task Information</h1>
                                        <h2 class="mb-2.5 text-2xl text-ubuy-blue"><?php echo ucfirst($singleProject['project_title']); ?></h2>
                                        <p class="text-sm font-normal text-left w-11/12 flex-grow flex items-center text-ubuy-secondary">
                                            <?php echo ucfirst($singleProject['project_message']); ?>
                                        </p>
                                        <div class="sm:hidden flex flex-col text-xs mt-2 gap-y-2 text-ubuy-secondary">
                                            <div>
                                                <span>Agreed Price:</span>
                                                <span class="font-bold">N <?php echo number_format($pro_bid['bid_amount'], 2); ?></span>
                                            </div>
                                            <div>
                                                <span>Started:</span>
                                                <span style="text-xxs"><?php echo date("F d, Y", strtotime($singleProject['started_at'])); ?></span>
                                            </div>
                                            <div>
                                                <span>Deadline:</span>
                                                <span style="text-xxs"><?php echo date("F d, Y", strtotime($pro_bid['due_date'])); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:flex hidden flex-col items-center px-5 pt-5 bg-white rounded-llg pb-6 max-w-xs" style="z-index: 9999 !important;">
                                    <img src="<?php echo $pro_data['public_url'] != 'http://new.ubuy.ng/storage' ? $pro_data['public_url'] : 'assets/images/ubuy_logo.svg'; ?>" alt="avatar" class="rounded-full w-32 h-32" />
                                    <div class="flex flex-row items-center">
                                        <span><?php echo ucfirst($pro_data['last_name']).' '.ucfirst($pro_data['first_name'][0]); ?>.</span>
                                        <?php echo $pro_data['verify_confirm'] == 3 ? '<span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.2705 9.22324C19.6 8.67081 20.4 8.67081 20.7295 9.22324C21.0012 9.67877 21.6192 9.77666 22.0184 9.42738C22.5024 9.00379 23.2633 9.25103 23.406 9.87824C23.5236 10.3954 24.0811 10.6795 24.5687 10.4707C25.1599 10.2174 25.8072 10.6877 25.749 11.3282C25.7011 11.8565 26.1436 12.2989 26.6718 12.251C27.3123 12.1928 27.7826 12.8401 27.5293 13.4313C27.3205 13.9189 27.6046 14.4764 28.1218 14.594C28.749 14.7367 28.9962 15.4976 28.5726 15.9816C28.2233 16.3808 28.3212 16.9988 28.7768 17.2705C29.3292 17.6 29.3292 18.4 28.7768 18.7295C28.3212 19.0012 28.2233 19.6192 28.5726 20.0184C28.9962 20.5024 28.749 21.2633 28.1218 21.406C27.6046 21.5236 27.3205 22.0811 27.5293 22.5687C27.7826 23.1599 27.3123 23.8072 26.6718 23.749C26.1436 23.7011 25.7011 24.1436 25.749 24.6718C25.8072 25.3123 25.1599 25.7826 24.5687 25.5293C24.0811 25.3205 23.5236 25.6046 23.406 26.1218C23.2633 26.749 22.5024 26.9962 22.0184 26.5726C21.6192 26.2233 21.0012 26.3212 20.7295 26.7768C20.4 27.3292 19.6 27.3292 19.2705 26.7768C18.9988 26.3212 18.3808 26.2233 17.9816 26.5726C17.4976 26.9962 16.7367 26.749 16.594 26.1218C16.4764 25.6046 15.9189 25.3205 15.4313 25.5293C14.8401 25.7826 14.1928 25.3123 14.251 24.6718C14.2989 24.1436 13.8565 23.7011 13.3282 23.749C12.6877 23.8072 12.2174 23.1599 12.4707 22.5687C12.6795 22.0811 12.3954 21.5236 11.8782 21.406C11.251 21.2633 11.0038 20.5024 11.4274 20.0184C11.7767 19.6192 11.6788 19.0012 11.2232 18.7295C10.6708 18.4 10.6708 17.6 11.2232 17.2705C11.6788 16.9988 11.7767 16.3808 11.4274 15.9816C11.0038 15.4976 11.251 14.7367 11.8782 14.594C12.3954 14.4764 12.6795 13.9189 12.4707 13.4313C12.2174 12.8401 12.6877 12.1928 13.3282 12.251C13.8564 12.2989 14.2989 11.8564 14.251 11.3282C14.1928 10.6877 14.8401 10.2174 15.4313 10.4707C15.9189 10.6795 16.4764 10.3954 16.594 9.87824C16.7367 9.25103 17.4976 9.00379 17.9816 9.42738C18.3808 9.77666 18.9988 9.67877 19.2705 9.22324Z"
                                                    fill="#119AE2" />
                                                <path d="M24 15L18.5 20.5L16 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>' : ""; ?>
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
                                                <span><?php echo $pro_data['average_rating']; ?></span>
                                                <span>
                                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 0L4.89806 2.76393H7.80423L5.45308 4.47214L6.35114 7.23607L4 5.52786L1.64886 7.23607L2.54692 4.47214L0.195774 2.76393H3.10194L4 0Z" fill="#25282B" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <span class="text-tiny text-ubuy-inactive"><?php echo $pro_data['rating']; ?> Ratings</span>
                                        </div>
                                        <div class="flex flex-col justify-center items-center ml-4">
                                            <span class="text-xs text-ubuy-secondary"><?php echo date('M Y', strtotime($pro_data['created_at'])); ?></span>
                                            <span class="text-tiny text-ubuy-inactive">Date Joined</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-row w-full justify-between my-3">
                                        <div class="flex flex-row items-center justify-center">
                                            <span class="mr-2">
                                                <?php echo $pro_data['verify_confirm'] == 3 ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                <?php echo $pro_data['is_phone_verified'] == 1 ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                <?php echo $pro_data['email_verified_at'] != null ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <a href="message.php?pro_id=<?php echo $pro_data['id']; ?>" class="rounded-2xl p-2 bg-ubuy-blue shadow-card text-xxxs text-white">Message</a>
                                        <a href="public-profile.php?uuid=<?php echo $pro_data['uuid']; ?>" class="rounded-2xl p-2 bg-white shadow-card text-xxxs text-ubuy-blue">View Profile</a>
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
                            </div>

                            <div class="flex sm:hidden flex-col p-5 rounded-llg items-start justify-start bg-white text-ubuy-secondary gap-y-3">
                                <div class="flex sm:hidden flex-row w-full">
                                    <div class="w-14 h-14 mr-2">
                                        <img src="<?php echo $pro_data['public_url'] != 'http://new.ubuy.ng/storage' ? $pro_data['public_url'] : 'assets/images/ubuy_logo.svg'; ?>" alt="">
                                    </div>
                                    <div class="flex flex-col flex-auto relative">
                                        <div class="flex flex-row items-center justify-between w-full">
                                            <span class="text-base font-medium text-ubuy-blue"><?php echo ucfirst($pro_data['last_name']).' '.ucfirst($pro_data['first_name'][0]); ?>.</span>
                                            <span class="absolute right-4 top-4">
                                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="22" cy="22" r="22" fill="#D0F9CF" fill-opacity="0.5" />
                                                    <path d="M31 25C31 25.5304 30.7893 26.0391 30.4142 26.4142C30.0391 26.7893 29.5304 27 29 27H17L13 31V15C13 14.4696 13.2107 13.9609 13.5858 13.5858C13.9609 13.2107 14.4696 13 15 13H29C29.5304 13 30.0391 13.2107 30.4142 13.5858C30.7893 13.9609 31 14.4696 31 15V25Z"
                                                        stroke="#1AB759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>
                                        <span class="text-xs font-medium text-left">UI/UX Specialist</span>
                                        <div class="flex flex-col items-start justify-start w-full">
                                            <div class="ratings text-xs xl:text-sm">
                                                <div class="empty-stars mx-auto"></div>
                                                <!-- Add the ratings percentage as the width -->
                                                <?php 
                                                    $rate = ($pro_data['average_rating']*100)/5;
                                                ?>
                                                <div class="full-stars" style="width:<?php echo $rate; ?>%"></div>
                                            </div>
                                            <div class="flex flex-row text-tinyer text-ubuy-secondary mt-2">
                                                <span class="mr-1">Last seen:</span>
                                                <span class=""> 
                                                    <?php

                                                    function time_elapsed_string($datetime, $full = false) {
                                                        $now = new DateTime;
                                                        $ago = new DateTime($datetime);
                                                        $diff = $now->diff($ago);

                                                        $diff->w = floor($diff->d / 7);
                                                        $diff->d -= $diff->w * 7;

                                                        $string = array(
                                                            'y' => 'year',
                                                            'm' => 'month',
                                                            'w' => 'week',
                                                            'd' => 'day',
                                                            'h' => 'hour',
                                                            'i' => 'minute',
                                                            's' => 'second',
                                                        );
                                                        foreach ($string as $k => &$v) {
                                                            if ($diff->$k) {
                                                                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                                                            } else {
                                                                unset($string[$k]);
                                                            }
                                                        }

                                                        if (!$full) $string = array_slice($string, 0, 1);
                                                        return $string ? implode(', ', $string) . ' ago' : 'just now';
                                                    }
                                                
                                                
                                                
                                                
                                                echo time_elapsed_string($pro_data['updated_at']); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:flex hidden flex-row gap-x-6 xl:pr-72 xl:-mt-36 w-full">
                                <div class="bg-white p-10 flex flex-col justify-between items-start rounded-llg flex-auto">
                                    <h2 class="text-ubuy-black text-2xl">N <?php echo number_format($pro_bid['bid_amount'], 2); ?></h2>
                                    <span class="text-ubuy-gray500 text-sm">Amount</span>
                                </div>
                                <div class="bg-white p-10 flex flex-col justify-between items-start rounded-llg flex-auto">
                                    <h2 class="text-ubuy-black text-2xl"><?php $dt = date_create($singleProject['started_at']); echo date_format($dt,"F d, Y"); ?></h2>
                                    <span class="text-ubuy-gray500 text-sm">Date Started</span>
                                </div>
                                <div class="bg-white p-10 flex flex-col justify-between items-start rounded-llg flex-auto">
                                    <h2 class="text-ubuy-black text-2xl"><?php $dt = date_create($pro_bid['due_date']); echo date_format($dt,"F d, Y"); ?></h2>
                                    <span class="text-ubuy-gray500 text-sm">Deadline</span>
                                </div>
                            </div>

                            <div class="flex flex-row gap-3 justify-between w-full sm:w-auto">
                                <div class="bg-white rounded-llg xl:flex hidden flex-col justify-between items-center p-5 max-w-sm w-full">
                                    <h1 class="text-left self-start text-base text-ubuy-black">Task Progress</h1>
                                    <div class="task-progress-wrapper text-ubuy-blue" style="--progress: <?php echo $singleProject['progress']; ?>">
                                        <div class="relative">
                                            <svg class="w-52 h-52">
                                                <circle cx="<?php echo $singleProject['progress']; ?>" cy="<?php echo $singleProject['progress']; ?>" r="<?php echo $singleProject['progress']; ?>"></circle>
                                                <circle cx="<?php echo $singleProject['progress']; ?>" cy="<?php echo $singleProject['progress']; ?>" r="<?php echo $singleProject['progress']; ?>"></circle>
                                            </svg>
                                            <div class="absolute transform top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                                                <span class="text-2xl text-ubuy-black font-medium"><?php echo $singleProject['progress']; ?>%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="self-end">
                                        <span class="text-sm text-ubuy-gray500">Due in:</span>
                                        <span class="text-base text-ubuy-black">

                                        <?php

                                        $future = strtotime($pro_bid['due_date']); //Future date.
                                        $timefromdb = time();
                                        $timeleft = $future-$timefromdb;
                                        $daysleft = round((($timeleft/24)/60)/60); 
                                        echo $daysleft; ?>
                                            
                                        
                                        Days</span>
                                    </div>
                                </div>
                                <div class="bg-white rounded-llg flex-auto sm:block hidden w-4/5">
                                    <ul class="text-xxs">
                                        <li class="text-base px-5 py-4 border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                            Task Updates
                                        </li>
                                        <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                            <div class="px-5 py-4">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19 13C19 13.5304 18.7893 14.0391 18.4142 14.4142C18.0391 14.7893 17.5304 15 17 15H5L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H17C17.5304 1 18.0391 1.21071 18.4142 1.58579C18.7893 1.96086 19 2.46957 19 3V13Z"
                                                        fill="#2AC769" fill-opacity="0.1" stroke="#2AC769" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="text-left pr-5 py-4 flex-grow">
                                                2 New Messages from John
                                            </div>
                                            <div class="pr-5 py-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                            </div>
                                        </li>

                                        <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                            <div class="px-5 py-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19 21L12 16L5 21V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H17C17.5304 3 18.0391 3.21071 18.4142 3.58579C18.7893 3.96086 19 4.46957 19 5V21Z" fill="#FFBC1F" fill-opacity="0.1" stroke="#F6A609" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                            </div>
                                            <div class="text-left pr-5 py-4 flex-grow">
                                                New Milestone logged
                                            </div>
                                            <div class="pr-5 py-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>

                                        <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                            <div class="px-5 py-4">
                                                <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V8L10 1Z"
                                                        fill="#119AE2" fill-opacity="0.1" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                            </div>
                                            <div class="text-left pr-5 py-4 flex-grow">
                                                New Documents from John
                                            </div>
                                            <div class="pr-5 py-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>

                                        <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                            <div class="px-5 py-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19 21L12 16L5 21V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H17C17.5304 3 18.0391 3.21071 18.4142 3.58579C18.7893 3.96086 19 4.46957 19 5V21Z" fill="#FFBC1F" fill-opacity="0.1" stroke="#F6A609" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>


                                            </div>
                                            <div class="text-left pr-5 py-4 flex-grow">
                                                New Milestone logged
                                            </div>
                                            <div class="pr-5 py-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>
                                        <li class="cursor-pointer text-center items-center justify-center flex-row flex">
                                            <button class="text-ubuy-blue py-2">
                                                See all Tasks
                                            </button>
                                        </li>
                                    </ul>
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
                                    <?php $singleProject['sub_category']['grouping_name'] == 'Freelancer' ? "" : '<a href="safety-toolkit.php?project_id='.$singleProject['id'].'">
                                        <div class="bg-white flex flex-row items-center justify-between rounded-llg px-3 py-4">
                                            <span>
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.1">
                                                        <circle cx="18" cy="18" r="18" fill="#FFBC1F" />
                                                    </g>
                                                    <path d="M18 28C18 28 26 24 26 18V11L18 8L10 11V18C10 24 18 28 18 28Z" stroke="#F6A609" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M22 15L16.5 20.5L14 18" stroke="#F6A609" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <span class="text-sm font-medium text-ubuy-black">Safety Toolkit</span>
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>
                                    </a>'; ?>

                                    <a href="dispute-resolution.php" class="bg-white flex flex-row items-center justify-between rounded-llg px-3 py-4">
                                        <span>
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.1">
                                                    <circle cx="18" cy="18" r="18" fill="#119AE2" />
                                                </g>
                                                <path d="M18.9842 25.9397C18.8644 25.1222 18.1657 24.4897 17.312 24.4897H9.16729C8.31541 24.4897 7.61688 25.1211 7.49601 25.9397C6.63325 26.2108 6 27.009 6 27.963V28.5603H20.4802V27.963C20.4802 27.009 19.8489 26.2118 18.9842 25.9397Z" fill="#119AE2" />
                                                <path
                                                    d="M20.4996 16.423C20.5089 16.3962 20.5245 16.3658 20.5309 16.34L21.0941 14.3692C21.3023 13.6456 20.954 12.7846 20.3014 12.4086L17.7389 10.9273C17.1076 10.5624 16.1444 10.7007 15.6429 11.2214L14.2187 12.6953C13.7947 13.1332 13.332 13.9343 13.1652 14.5195L12.602 16.4904C12.3945 17.2139 12.7412 18.0749 13.3947 18.4509L15.9572 19.9305C16.2015 20.0724 16.4909 20.1471 16.7951 20.1471C17.2754 20.1471 17.7464 19.9572 18.0514 19.6374L19.4784 18.1643C19.4968 18.1439 19.5161 18.1163 19.5355 18.0952L22.9608 20.0732C23.0438 20.4604 23.277 20.8143 23.6475 21.0271L27.8278 23.4405C28.0564 23.5722 28.3053 23.635 28.5514 23.635C29.0511 23.635 29.5386 23.3759 29.806 22.9105C30.2051 22.2181 29.9692 21.3324 29.2767 20.9331L25.0956 18.519C24.726 18.3061 24.3029 18.2785 23.9267 18.401L20.4996 16.423Z"
                                                    fill="#119AE2" />
                                                <path
                                                    d="M16.3998 8.48313C16.1334 8.94513 16.2919 9.53501 16.7538 9.80134L21.7702 12.6984C21.9213 12.7861 22.0872 12.8275 22.2514 12.8275C22.5849 12.8275 22.9095 12.6542 23.0882 12.3445C23.3547 11.8819 23.1961 11.2927 22.7343 11.0254L17.718 8.12902C17.2571 7.86359 16.6672 8.02037 16.3998 8.48313Z"
                                                    fill="#119AE2" />
                                                <path
                                                    d="M10.9611 19.8341L15.9764 22.7303C16.1293 22.8179 16.2954 22.8594 16.4594 22.8594C16.793 22.8594 17.1165 22.686 17.2963 22.3763C17.5627 21.9145 17.4042 21.3255 16.9423 21.0581L11.9261 18.1619C11.4651 17.8946 10.8735 18.0531 10.607 18.515C10.3407 18.9769 10.4982 19.5676 10.9611 19.8341Z"
                                                    fill="#119AE2" />
                                            </svg>

                                        </span>
                                        <span class="text-sm font-medium text-ubuy-black">Dispute Resolution</span>
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="timeline.php?project=<?php echo ucfirst($singleProject['project_title']); ?>&project_id=<?php echo $_GET['project_id']; ?>" class="bg-white flex flex-row items-center justify-between rounded-llg px-3 py-4">
                                        <span>
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.1">
                                                    <circle cx="18" cy="18" r="18" fill="#BB6BD9" />
                                                </g>
                                                <path
                                                    d="M18.636 13.6067C18.3305 13.6067 18.0376 13.728 17.8217 13.944C17.6057 14.1599 17.4844 14.4529 17.4844 14.7583C17.4844 15.0637 17.6057 15.3566 17.8217 15.5726C18.0376 15.7885 18.3305 15.9099 18.636 15.9099H23.2423C23.5478 15.9099 23.8407 15.7885 24.0566 15.5726C24.2726 15.3566 24.3939 15.0637 24.3939 14.7583C24.3939 14.4529 24.2726 14.1599 24.0566 13.944C23.8407 13.728 23.5478 13.6067 23.2423 13.6067H18.636Z"
                                                    fill="#9B51E0" fill-opacity="0.5" />
                                                <path
                                                    d="M18.636 23.9707C18.3305 23.9707 18.0376 24.092 17.8217 24.308C17.6057 24.524 17.4844 24.8169 17.4844 25.1223C17.4844 25.4277 17.6057 25.7206 17.8217 25.9366C18.0376 26.1526 18.3305 26.2739 18.636 26.2739H23.2423C23.5478 26.2739 23.8407 26.1526 24.0566 25.9366C24.2726 25.7206 24.3939 25.4277 24.3939 25.1223C24.3939 24.8169 24.2726 24.524 24.0566 24.308C23.8407 24.092 23.5478 23.9707 23.2423 23.9707H18.636Z"
                                                    fill="#9B51E0" fill-opacity="0.5" />
                                                <path
                                                    d="M18.636 10.1516C18.3305 10.1516 18.0376 10.2729 17.8217 10.4889C17.6057 10.7049 17.4844 10.9978 17.4844 11.3032C17.4844 11.6086 17.6057 11.9015 17.8217 12.1175C18.0376 12.3335 18.3305 12.4548 18.636 12.4548H27.8487C28.1541 12.4548 28.447 12.3335 28.663 12.1175C28.879 11.9015 29.0003 11.6086 29.0003 11.3032C29.0003 10.9978 28.879 10.7049 28.663 10.4889C28.447 10.2729 28.1541 10.1516 27.8487 10.1516H18.636Z"
                                                    fill="#9B51E0" fill-opacity="0.8" />
                                                <path
                                                    d="M18.636 20.5161C18.3305 20.5161 18.0376 20.6374 17.8217 20.8534C17.6057 21.0694 17.4844 21.3623 17.4844 21.6677C17.4844 21.9731 17.6057 22.266 17.8217 22.482C18.0376 22.698 18.3305 22.8193 18.636 22.8193H27.8487C28.1541 22.8193 28.447 22.698 28.663 22.482C28.879 22.266 29.0003 21.9731 29.0003 21.6677C29.0003 21.3623 28.879 21.0694 28.663 20.8534C28.447 20.6374 28.1541 20.5161 27.8487 20.5161H18.636Z"
                                                    fill="#9B51E0" fill-opacity="0.8" />
                                                <path
                                                    d="M8.15159 9C7.84617 9 7.55326 9.12133 7.33729 9.33729C7.12133 9.55326 7 9.84617 7 10.1516V15.9095C7 16.215 7.12133 16.5079 7.33729 16.7238C7.55326 16.9398 7.84617 17.0611 8.15159 17.0611H13.9095C14.215 17.0611 14.5079 16.9398 14.7238 16.7238C14.9398 16.5079 15.0611 16.215 15.0611 15.9095V10.1516C15.0611 9.84617 14.9398 9.55326 14.7238 9.33729C14.5079 9.12133 14.215 9 13.9095 9H8.15159Z"
                                                    fill="#9B51E0" />
                                                <path
                                                    d="M8.15159 19.364C7.84617 19.364 7.55326 19.4853 7.33729 19.7013C7.12133 19.9173 7 20.2102 7 20.5156V26.2736C7 26.579 7.12133 26.8719 7.33729 27.0879C7.55326 27.3038 7.84617 27.4251 8.15159 27.4251H13.9095C14.215 27.4251 14.5079 27.3038 14.7238 27.0879C14.9398 26.8719 15.0611 26.579 15.0611 26.2736V20.5156C15.0611 20.2102 14.9398 19.9173 14.7238 19.7013C14.5079 19.4853 14.215 19.364 13.9095 19.364H8.15159Z"
                                                    fill="#9B51E0" />
                                            </svg>
                                        </span>
                                        <span class="text-sm font-medium text-ubuy-black">Timeline</span>
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                    <?php if($userData['user_role'] == 'pro'){ ?>
                                    <div class="bg-white flex flex-row items-center justify-between rounded-llg p-3">
                                        <span>
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.1">
                                                    <circle cx="18" cy="18" r="18" fill="#40DD7F" />
                                                </g>
                                                <path
                                                    d="M28 17.0801V18.0001C27.9988 20.1565 27.3005 22.2548 26.0093 23.9819C24.7182 25.7091 22.9033 26.9726 20.8354 27.584C18.7674 28.1954 16.5573 28.122 14.5345 27.3747C12.5117 26.6274 10.7847 25.2462 9.61096 23.4372C8.43727 21.6281 7.87979 19.4882 8.02168 17.3364C8.16356 15.1847 8.99721 13.1364 10.3983 11.4972C11.7994 9.85793 13.6928 8.71549 15.7962 8.24025C17.8996 7.76502 20.1003 7.98245 22.07 8.86011"
                                                    stroke="#2AC769" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M28 10L18 20.01L15 17.01" stroke="#2AC769" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </span>

                                        <span class="text-sm font-medium text-ubuy-black">Mark Job as done</span>
                                        <button  onclick="onOpenPopup('mark-job-completed')">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            </span>
                                    </div>
                                    <?php }elseif($userData['user_role']== 'customer' && $singleProject['pro_status'] == 1){ ?>
                                        
                                    <div class="bg-white flex flex-row items-center justify-between rounded-llg p-3">
                                        <span>
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.1">
                                                    <circle cx="18" cy="18" r="18" fill="#40DD7F" />
                                                </g>
                                                <path
                                                    d="M28 17.0801V18.0001C27.9988 20.1565 27.3005 22.2548 26.0093 23.9819C24.7182 25.7091 22.9033 26.9726 20.8354 27.584C18.7674 28.1954 16.5573 28.122 14.5345 27.3747C12.5117 26.6274 10.7847 25.2462 9.61096 23.4372C8.43727 21.6281 7.87979 19.4882 8.02168 17.3364C8.16356 15.1847 8.99721 13.1364 10.3983 11.4972C11.7994 9.85793 13.6928 8.71549 15.7962 8.24025C17.8996 7.76502 20.1003 7.98245 22.07 8.86011"
                                                    stroke="#2AC769" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M28 10L18 20.01L15 17.01" stroke="#2AC769" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </span>

                                        <span class="text-sm font-medium text-ubuy-black">Mark Job as done</span>
                                        <button  onclick="onOpenPopup('mark-job-completed')">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            </span>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                    <?php }elseif($singleProject['status'] == 3){

                            $pro = $init->getSingleProjectPro($singleProject['id'], $singleProject['pro_id']);
                            $pro = json_decode($pro, true);

                            $pro_bid = $pro['bid'][0];

                            $pro_data = $pro['pro'][0]; ?>
                        
                        <div class="w-full flex flex-col gap-4">
                            <div class="flex flex-row w-full gap-x-4">
                                <div class="sm:w-full flex-1">
                                    <div class="relative w-full bg-white rounded-llg flex flex-col justify-start p-5 min-h-220 h-full xl:h-auto">
                                        <button class="absolute right-4">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#119AE2" fill-opacity="0.05" />
                                                <path d="M20 21C20.5523 21 21 20.5523 21 20C21 19.4477 20.5523 19 20 19C19.4477 19 19 19.4477 19 20C19 20.5523 19.4477 21 20 21Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M20 14C20.5523 14 21 13.5523 21 13C21 12.4477 20.5523 12 20 12C19.4477 12 19 12.4477 19 13C19 13.5523 19.4477 14 20 14Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M20 28C20.5523 28 21 27.5523 21 27C21 26.4477 20.5523 26 20 26C19.4477 26 19 26.4477 19 27C19 27.5523 19.4477 28 20 28Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <h1 class="mb-5 text-base font-medium text-ubuy-black">Task Information</h1>
                                        <h2 class="mb-2.5 text-2xl text-ubuy-blue"><?php echo ucfirst($singleProject['project_title']); ?></h2>
                                        <p class="text-sm font-normal text-left w-11/12 flex-grow flex items-center text-ubuy-secondary">
                                            <?php echo ucfirst($singleProject['project_message']); ?>
                                        </p>
                                        <div class="sm:hidden flex flex-col text-xs mt-2 gap-y-2 text-ubuy-secondary">
                                            <div>
                                                <span>Agreed Price:</span>
                                                <span class="font-bold">N <?php echo number_format($pro_bid['bid_amount'], 2); ?></span>
                                            </div>
                                            <div>
                                                <span>Started:</span>
                                                <span style="text-xxs"><?php echo date("F d, Y", strtotime($singleProject['started_at'])); ?></span>
                                            </div>
                                            <div>
                                                <span>Deadline:</span>
                                                <span style="text-xxs"><?php echo date("F d, Y", strtotime($pro_bid['due_date'])); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:flex hidden flex-col items-center px-5 pt-5 bg-white rounded-llg pb-6 max-w-xs" style="z-index: 9999 !important;">
                                    <img src="<?php echo $pro_data['public_url'] != 'http://new.ubuy.ng/storage' ? $pro_data['public_url'] : 'assets/images/ubuy_logo.svg'; ?>" alt="avatar" class="rounded-full w-32 h-32" />
                                    <div class="flex flex-row items-center">
                                        <span><?php echo ucfirst($pro_data['last_name']).' '.ucfirst($pro_data['first_name'][0]); ?>.</span>
                                        <?php echo $pro_data['verify_confirm'] == 3 ? '<span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.2705 9.22324C19.6 8.67081 20.4 8.67081 20.7295 9.22324C21.0012 9.67877 21.6192 9.77666 22.0184 9.42738C22.5024 9.00379 23.2633 9.25103 23.406 9.87824C23.5236 10.3954 24.0811 10.6795 24.5687 10.4707C25.1599 10.2174 25.8072 10.6877 25.749 11.3282C25.7011 11.8565 26.1436 12.2989 26.6718 12.251C27.3123 12.1928 27.7826 12.8401 27.5293 13.4313C27.3205 13.9189 27.6046 14.4764 28.1218 14.594C28.749 14.7367 28.9962 15.4976 28.5726 15.9816C28.2233 16.3808 28.3212 16.9988 28.7768 17.2705C29.3292 17.6 29.3292 18.4 28.7768 18.7295C28.3212 19.0012 28.2233 19.6192 28.5726 20.0184C28.9962 20.5024 28.749 21.2633 28.1218 21.406C27.6046 21.5236 27.3205 22.0811 27.5293 22.5687C27.7826 23.1599 27.3123 23.8072 26.6718 23.749C26.1436 23.7011 25.7011 24.1436 25.749 24.6718C25.8072 25.3123 25.1599 25.7826 24.5687 25.5293C24.0811 25.3205 23.5236 25.6046 23.406 26.1218C23.2633 26.749 22.5024 26.9962 22.0184 26.5726C21.6192 26.2233 21.0012 26.3212 20.7295 26.7768C20.4 27.3292 19.6 27.3292 19.2705 26.7768C18.9988 26.3212 18.3808 26.2233 17.9816 26.5726C17.4976 26.9962 16.7367 26.749 16.594 26.1218C16.4764 25.6046 15.9189 25.3205 15.4313 25.5293C14.8401 25.7826 14.1928 25.3123 14.251 24.6718C14.2989 24.1436 13.8565 23.7011 13.3282 23.749C12.6877 23.8072 12.2174 23.1599 12.4707 22.5687C12.6795 22.0811 12.3954 21.5236 11.8782 21.406C11.251 21.2633 11.0038 20.5024 11.4274 20.0184C11.7767 19.6192 11.6788 19.0012 11.2232 18.7295C10.6708 18.4 10.6708 17.6 11.2232 17.2705C11.6788 16.9988 11.7767 16.3808 11.4274 15.9816C11.0038 15.4976 11.251 14.7367 11.8782 14.594C12.3954 14.4764 12.6795 13.9189 12.4707 13.4313C12.2174 12.8401 12.6877 12.1928 13.3282 12.251C13.8564 12.2989 14.2989 11.8564 14.251 11.3282C14.1928 10.6877 14.8401 10.2174 15.4313 10.4707C15.9189 10.6795 16.4764 10.3954 16.594 9.87824C16.7367 9.25103 17.4976 9.00379 17.9816 9.42738C18.3808 9.77666 18.9988 9.67877 19.2705 9.22324Z"
                                                    fill="#119AE2" />
                                                <path d="M24 15L18.5 20.5L16 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>' : ""; ?>
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
                                                <span><?php echo $pro_data['average_rating']; ?></span>
                                                <span>
                                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 0L4.89806 2.76393H7.80423L5.45308 4.47214L6.35114 7.23607L4 5.52786L1.64886 7.23607L2.54692 4.47214L0.195774 2.76393H3.10194L4 0Z" fill="#25282B" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <span class="text-tiny text-ubuy-inactive"><?php echo $pro_data['rating']; ?> Ratings</span>
                                        </div>
                                        <div class="flex flex-col justify-center items-center ml-4">
                                            <span class="text-xs text-ubuy-secondary"><?php echo date('M Y', strtotime($pro_data['created_at'])); ?></span>
                                            <span class="text-tiny text-ubuy-inactive">Date Joined</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-row w-full justify-between my-3">
                                        <div class="flex flex-row items-center justify-center">
                                            <span class="mr-2">
                                                <?php echo $pro_data['verify_confirm'] == 3 ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                <?php echo $pro_data['is_phone_verified'] == 1 ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                <?php echo $pro_data['email_verified_at'] != null ? '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <a href="message.php?pro_id=<?php echo $pro_data['id']; ?>" class="rounded-2xl p-2 bg-ubuy-blue shadow-card text-xxxs text-white">Message</a>
                                        <a href="public-profile.php?uuid=<?php echo $pro_data['uuid']; ?>" class="rounded-2xl p-2 bg-white shadow-card text-xxxs text-ubuy-blue">View Profile</a>
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
                            </div>

                            <div class="flex sm:hidden flex-col p-5 rounded-llg items-start justify-start bg-white text-ubuy-secondary gap-y-3">
                                <div class="flex sm:hidden flex-row w-full">
                                    <div class="w-14 h-14 mr-2">
                                        <img src="<?php echo $pro_data['public_url'] != 'http://new.ubuy.ng/storage' ? $pro_data['public_url'] : 'assets/images/ubuy_logo.svg'; ?>" alt="">
                                    </div>
                                    <div class="flex flex-col flex-auto relative">
                                        <div class="flex flex-row items-center justify-between w-full">
                                            <span class="text-base font-medium text-ubuy-blue"><?php echo ucfirst($pro_data['last_name']).' '.ucfirst($pro_data['first_name'][0]); ?>.</span>
                                            <span class="absolute right-4 top-4">
                                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="22" cy="22" r="22" fill="#D0F9CF" fill-opacity="0.5" />
                                                    <path d="M31 25C31 25.5304 30.7893 26.0391 30.4142 26.4142C30.0391 26.7893 29.5304 27 29 27H17L13 31V15C13 14.4696 13.2107 13.9609 13.5858 13.5858C13.9609 13.2107 14.4696 13 15 13H29C29.5304 13 30.0391 13.2107 30.4142 13.5858C30.7893 13.9609 31 14.4696 31 15V25Z"
                                                        stroke="#1AB759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>
                                        <span class="text-xs font-medium text-left">UI/UX Specialist</span>
                                        <div class="flex flex-col items-start justify-start w-full">
                                            <div class="ratings text-xs xl:text-sm">
                                                <div class="empty-stars mx-auto"></div>
                                                <!-- Add the ratings percentage as the width -->
                                                <?php 
                                                    $rate = ($pro_data['average_rating']*100)/5;
                                                ?>
                                                <div class="full-stars" style="width:<?php echo $rate; ?>%"></div>
                                            </div>
                                            <div class="flex flex-row text-tinyer text-ubuy-secondary mt-2">
                                                <span class="mr-1">Last seen:</span>
                                                <span class=""> 
                                                    <?php

                                                    function time_elapsed_string($datetime, $full = false) {
                                                        $now = new DateTime;
                                                        $ago = new DateTime($datetime);
                                                        $diff = $now->diff($ago);

                                                        $diff->w = floor($diff->d / 7);
                                                        $diff->d -= $diff->w * 7;

                                                        $string = array(
                                                            'y' => 'year',
                                                            'm' => 'month',
                                                            'w' => 'week',
                                                            'd' => 'day',
                                                            'h' => 'hour',
                                                            'i' => 'minute',
                                                            's' => 'second',
                                                        );
                                                        foreach ($string as $k => &$v) {
                                                            if ($diff->$k) {
                                                                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                                                            } else {
                                                                unset($string[$k]);
                                                            }
                                                        }

                                                        if (!$full) $string = array_slice($string, 0, 1);
                                                        return $string ? implode(', ', $string) . ' ago' : 'just now';
                                                    }
                                                
                                                
                                                
                                                
                                                echo time_elapsed_string($pro_data['updated_at']); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:flex hidden flex-row gap-x-6 xl:pr-72 xl:-mt-36 w-full">
                                <div class="bg-white p-10 flex flex-col justify-between items-start rounded-llg flex-auto">
                                    <h2 class="text-ubuy-black text-2xl">N <?php echo number_format($pro_bid['bid_amount'], 2); ?></h2>
                                    <span class="text-ubuy-gray500 text-sm">Amount</span>
                                </div>
                                <div class="bg-white p-10 flex flex-col justify-between items-start rounded-llg flex-auto">
                                    <h2 class="text-ubuy-black text-2xl"><?php $dt = date_create($singleProject['started_at']); echo date_format($dt,"F d, Y"); ?></h2>
                                    <span class="text-ubuy-gray500 text-sm">Date Started</span>
                                </div>
                                <div class="bg-white p-10 flex flex-col justify-between items-start rounded-llg flex-auto">
                                    <h2 class="text-ubuy-black text-2xl"><?php $dt = date_create($pro_bid['due_date']); echo date_format($dt,"F d, Y"); ?></h2>
                                    <span class="text-ubuy-gray500 text-sm">Deadline</span>
                                </div>
                            </div>
                        
                            <div class="flex flex-row gap-3 justify-between w-full sm:w-auto">
                                <div class="bg-white rounded-llg xl:flex hidden flex-col justify-between items-center p-5 max-w-sm w-full">
                                    <h1 class="text-left self-start text-base text-ubuy-black">Task Progress</h1>
                                    <div class="task-progress-wrapper text-ubuy-positiveDefault" style="--progress: 100">
                                        <div class="relative">
                                            <svg class="w-52 h-52">
                                                <circle cx="70" cy="70" r="70"></circle>
                                                <circle cx="70" cy="70" r="70"></circle>
                                            </svg>
                                            <div class="absolute transform top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                                                <span class="text-2xl text-ubuy-black font-medium">70%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="self-end">
                                        <span class="text-sm text-ubuy-gray500">Due in:</span>
                                        <span class="text-base text-ubuy-black">15 Days</span>
                                    </div>
                                </div>
                                <div class="bg-white rounded-llg flex-auto sm:block hidden w-4/5">
                                    <ul class="text-xxs">
                                        <li class="text-base px-5 py-4 border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                            Task Updates
                                        </li>
                                        <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                            <div class="px-5 py-4">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19 13C19 13.5304 18.7893 14.0391 18.4142 14.4142C18.0391 14.7893 17.5304 15 17 15H5L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H17C17.5304 1 18.0391 1.21071 18.4142 1.58579C18.7893 1.96086 19 2.46957 19 3V13Z"
                                                        fill="#2AC769" fill-opacity="0.1" stroke="#2AC769" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="text-left pr-5 py-4 flex-grow">
                                                2 New Messages from John
                                            </div>
                                            <div class="pr-5 py-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                            </div>
                                        </li>

                                        <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                            <div class="px-5 py-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19 21L12 16L5 21V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H17C17.5304 3 18.0391 3.21071 18.4142 3.58579C18.7893 3.96086 19 4.46957 19 5V21Z" fill="#FFBC1F" fill-opacity="0.1" stroke="#F6A609" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                            </div>
                                            <div class="text-left pr-5 py-4 flex-grow">
                                                New Milestone logged
                                            </div>
                                            <div class="pr-5 py-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>

                                        <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                            <div class="px-5 py-4">
                                                <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V8L10 1Z"
                                                        fill="#119AE2" fill-opacity="0.1" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                            </div>
                                            <div class="text-left pr-5 py-4 flex-grow">
                                                New Documents from John
                                            </div>
                                            <div class="pr-5 py-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>

                                        <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                            <div class="px-5 py-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19 21L12 16L5 21V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H17C17.5304 3 18.0391 3.21071 18.4142 3.58579C18.7893 3.96086 19 4.46957 19 5V21Z" fill="#FFBC1F" fill-opacity="0.1" stroke="#F6A609" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>


                                            </div>
                                            <div class="text-left pr-5 py-4 flex-grow">
                                                New Milestone logged
                                            </div>
                                            <div class="pr-5 py-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </li>
                                        <li class="cursor-pointer text-center items-center justify-center flex-row flex">
                                            <button class="text-ubuy-blue py-2">
                                                See all Tasks
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex flex-col gap-y-4 sm:max-w-xs w-full">
                                    <a href="milestone.php?project=<?php echo ucfirst($singleProject['project_title']); ?>&project_id=<?php echo ucfirst($singleProject['id']); ?>" class="bg-white flex flex-row items-center justify-between rounded-llg px-3 py-4 w-full">
                                        <span class="text-base font-medium text-ubuy-black">Milestones</span>
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                                                        
                                    <a href="timeline.php?project=<?php echo ucfirst($singleProject['project_title']); ?>&project_id=<?php echo $_GET['project_id']; ?>" class="bg-white flex flex-row items-center justify-between rounded-llg px-3 py-4">
                                        <span>
                                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.1" cx="22" cy="22" r="22" fill="#BB6BD9"/>
                                                <path d="M22.6357 17.6066C22.3303 17.6066 22.0374 17.7279 21.8214 17.9439C21.6055 18.1598 21.4841 18.4527 21.4841 18.7582C21.4841 19.0636 21.6055 19.3565 21.8214 19.5725C22.0374 19.7884 22.3303 19.9097 22.6357 19.9097H27.2421C27.5475 19.9097 27.8404 19.7884 28.0564 19.5725C28.2724 19.3565 28.3937 19.0636 28.3937 18.7582C28.3937 18.4527 28.2724 18.1598 28.0564 17.9439C27.8404 17.7279 27.5475 17.6066 27.2421 17.6066H22.6357Z" fill="#9B51E0" fill-opacity="0.5"/>
                                                <path d="M22.6357 27.9707C22.3303 27.9707 22.0374 28.092 21.8214 28.308C21.6055 28.524 21.4841 28.8169 21.4841 29.1223C21.4841 29.4277 21.6055 29.7206 21.8214 29.9366C22.0374 30.1526 22.3303 30.2739 22.6357 30.2739H27.2421C27.5475 30.2739 27.8404 30.1526 28.0564 29.9366C28.2724 29.7206 28.3937 29.4277 28.3937 29.1223C28.3937 28.8169 28.2724 28.524 28.0564 28.308C27.8404 28.092 27.5475 27.9707 27.2421 27.9707H22.6357Z" fill="#9B51E0" fill-opacity="0.5"/>
                                                <path d="M22.6357 14.1515C22.3303 14.1515 22.0374 14.2728 21.8214 14.4888C21.6055 14.7047 21.4841 14.9977 21.4841 15.3031C21.4841 15.6085 21.6055 15.9014 21.8214 16.1174C22.0374 16.3333 22.3303 16.4547 22.6357 16.4547H31.8484C32.1539 16.4547 32.4468 16.3333 32.6627 16.1174C32.8787 15.9014 33 15.6085 33 15.3031C33 14.9977 32.8787 14.7047 32.6627 14.4888C32.4468 14.2728 32.1539 14.1515 31.8484 14.1515H22.6357Z" fill="#9B51E0" fill-opacity="0.8"/>
                                                <path d="M22.6357 24.5161C22.3303 24.5161 22.0374 24.6374 21.8214 24.8534C21.6055 25.0694 21.4841 25.3623 21.4841 25.6677C21.4841 25.9731 21.6055 26.266 21.8214 26.482C22.0374 26.698 22.3303 26.8193 22.6357 26.8193H31.8484C32.1539 26.8193 32.4468 26.698 32.6627 26.482C32.8787 26.266 33 25.9731 33 25.6677C33 25.3623 32.8787 25.0694 32.6627 24.8534C32.4468 24.6374 32.1539 24.5161 31.8484 24.5161H22.6357Z" fill="#9B51E0" fill-opacity="0.8"/>
                                                <path d="M12.1512 13C11.8458 13 11.5529 13.1213 11.3369 13.3373C11.121 13.5533 10.9996 13.8462 10.9996 14.1516V19.9095C10.9996 20.215 11.121 20.5079 11.3369 20.7238C11.5529 20.9398 11.8458 21.0611 12.1512 21.0611H17.9092C18.2146 21.0611 18.5075 20.9398 18.7235 20.7238C18.9394 20.5079 19.0608 20.215 19.0608 19.9095V14.1516C19.0608 13.8462 18.9394 13.5533 18.7235 13.3373C18.5075 13.1213 18.2146 13 17.9092 13H12.1512Z" fill="#9B51E0"/>
                                                <path d="M12.1512 23.3641C11.8458 23.3641 11.5529 23.4855 11.3369 23.7014C11.121 23.9174 10.9996 24.2103 10.9996 24.5157V30.2737C10.9996 30.5791 11.121 30.872 11.3369 31.088C11.5529 31.3039 11.8458 31.4253 12.1512 31.4253H17.9092C18.2146 31.4253 18.5075 31.3039 18.7235 31.088C18.9394 30.872 19.0608 30.5791 19.0608 30.2737V24.5157C19.0608 24.2103 18.9394 23.9174 18.7235 23.7014C18.5075 23.4855 18.2146 23.3641 17.9092 23.3641H12.1512Z" fill="#9B51E0"/>
                                            </svg>   
                                        </span>
                                        <span class="text-sm font-medium text-ubuy-black">Timeline</span>
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                    <input type="hidden" id="rating-input" name="rating-input" value="<?php echo  $pro_data['first_name'].'~'.$pro_data['last_name'].'~'.$pro_data['public_url'].'~'.$singleProject['project_title'].'~'.$pro_data['id']; ?>" />
                                    <?php if($pro_data['user_role'] == 'customer'){ ?>
                                    <div class="bg-white flex flex-row items-center justify-between rounded-llg px-3 py-4">
                                        <span>
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="18" cy="18" r="18" fill="#FFBC1F" class="opacity-10" />
                                                <path d="M18 8L21.09 14.26L28 15.27L23 20.14L24.18 27.02L18 23.77L11.82 27.02L13 20.14L8 15.27L14.91 14.26L18 8Z" stroke="#F6A609" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="text-sm font-medium text-ubuy-black">Rate Professional</span>
                                        <button id="ratingBtn" onclick="onOpenPopuper('rate-professionnal')" class="sm:block hidden">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <button id="" onclick="onOpenPopuper('rate-professionnal-mobile')" class="sm:hidden block">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php }elseif($singleProject['status'] == 5){ ?>
                    <?php }elseif($singleProject['status'] == 4){ ?>
                        <div class="flex flex-row gap-3 justify-between w-full sm:w-auto">
                            <div class="bg-white rounded-llg sm:flex hidden flex-col justify-between items-center p-5 max-w-sm w-full">
                                <h1 class="text-left self-start text-base text-ubuy-black">Task Progress</h1>
                                <div class="task-progress-wrapper text-ubuy-gray500" style="--progress: 70">
                                    <div class="relative">
                                        <svg class="w-52 h-52">
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                        </svg>
                                        <div class="absolute transform top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                                            <span class="text-2xl text-ubuy-black font-medium">70%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="self-end">
                                    <span class="text-sm text-ubuy-gray500">Due in:</span>
                                    <span class="text-base text-ubuy-black">15 Days</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-llg flex-auto xl:block hidden w-4/5">
                                <ul class="text-xxs">
                                    <li class="text-base px-5 py-4 border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                        Task Updates
                                    </li>
                                    <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                        <div class="px-5 py-4">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19 13C19 13.5304 18.7893 14.0391 18.4142 14.4142C18.0391 14.7893 17.5304 15 17 15H5L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H17C17.5304 1 18.0391 1.21071 18.4142 1.58579C18.7893 1.96086 19 2.46957 19 3V13Z"
                                                    fill="#2AC769" fill-opacity="0.1" stroke="#2AC769" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="text-left pr-5 py-4 flex-grow">
                                            2 New Messages from John
                                        </div>
                                        <div class="pr-5 py-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                    </li>

                                    <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                        <div class="px-5 py-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19 21L12 16L5 21V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H17C17.5304 3 18.0391 3.21071 18.4142 3.58579C18.7893 3.96086 19 4.46957 19 5V21Z" fill="#FFBC1F" fill-opacity="0.1" stroke="#F6A609" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <div class="text-left pr-5 py-4 flex-grow">
                                            New Milestone logged
                                        </div>
                                        <div class="pr-5 py-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </li>

                                    <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                        <div class="px-5 py-4">
                                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 1H3C2.46957 1 1.96086 1.21071 1.58579 1.58579C1.21071 1.96086 1 2.46957 1 3V19C1 19.5304 1.21071 20.0391 1.58579 20.4142C1.96086 20.7893 2.46957 21 3 21H15C15.5304 21 16.0391 20.7893 16.4142 20.4142C16.7893 20.0391 17 19.5304 17 19V8L10 1Z"
                                                    fill="#119AE2" fill-opacity="0.1" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <div class="text-left pr-5 py-4 flex-grow">
                                            New Documents from John
                                        </div>
                                        <div class="pr-5 py-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </li>

                                    <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                        <div class="px-5 py-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19 21L12 16L5 21V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H17C17.5304 3 18.0391 3.21071 18.4142 3.58579C18.7893 3.96086 19 4.46957 19 5V21Z" fill="#FFBC1F" fill-opacity="0.1" stroke="#F6A609" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>


                                        </div>
                                        <div class="text-left pr-5 py-4 flex-grow">
                                            New Milestone logged
                                        </div>
                                        <div class="pr-5 py-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="cursor-pointer text-center items-center justify-center flex-row flex">
                                        <button class="text-ubuy-blue py-2">
                                            See all Tasks
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex flex-col gap-y-4 sm:max-w-xs w-full">
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
                                <div onclick="onOpenPopup('repost-task-popup')" class="bg-white flex flex-row items-center justify-between rounded-llg px-3 py-4 cursor-pointer">
                                    <span>
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="18" cy="18" r="18" fill="#2AC769" class="opacity-10" />
                                            <path d="M29 13L25 9L21 13" stroke="#2AC769" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19 27H21C22.0609 27 23.0783 26.5786 23.8284 25.8284C24.5786 25.0783 25 24.0609 25 23V9" stroke="#2AC769" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7 23L11 27L15 23" stroke="#2AC769" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17 9H15C13.9391 9 12.9217 9.42143 12.1716 10.1716C11.4214 10.9217 11 11.9391 11 13V27" stroke="#2AC769" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
    
                                    </span>
                                    <span class="text-sm font-medium text-ubuy-black">Repost Task</span>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="bg-white flex flex-row items-center justify-between rounded-llg px-3 py-4">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.636 7.60669C12.3305 7.60669 12.0376 7.72802 11.8217 7.94398C11.6057 8.15995 11.4844 8.45286 11.4844 8.75828C11.4844 9.0637 11.6057 9.35661 11.8217 9.57258C12.0376 9.78854 12.3305 9.90987 12.636 9.90987H17.2423C17.5478 9.90987 17.8407 9.78854 18.0566 9.57258C18.2726 9.35661 18.3939 9.0637 18.3939 8.75828C18.3939 8.45286 18.2726 8.15995 18.0566 7.94398C17.8407 7.72802 17.5478 7.60669 17.2423 7.60669H12.636Z"
                                                fill="#9B51E0" fill-opacity="0.5" />
                                            <path
                                                d="M12.636 17.9707C12.3305 17.9707 12.0376 18.092 11.8217 18.308C11.6057 18.524 11.4844 18.8169 11.4844 19.1223C11.4844 19.4277 11.6057 19.7206 11.8217 19.9366C12.0376 20.1526 12.3305 20.2739 12.636 20.2739H17.2423C17.5478 20.2739 17.8407 20.1526 18.0566 19.9366C18.2726 19.7206 18.3939 19.4277 18.3939 19.1223C18.3939 18.8169 18.2726 18.524 18.0566 18.308C17.8407 18.092 17.5478 17.9707 17.2423 17.9707H12.636Z"
                                                fill="#9B51E0" fill-opacity="0.5" />
                                            <path
                                                d="M12.636 4.15161C12.3305 4.15161 12.0376 4.27294 11.8217 4.4889C11.6057 4.70487 11.4844 4.99778 11.4844 5.3032C11.4844 5.60862 11.6057 5.90154 11.8217 6.1175C12.0376 6.33347 12.3305 6.45479 12.636 6.45479H21.8487C22.1541 6.45479 22.447 6.33347 22.663 6.1175C22.879 5.90154 23.0003 5.60862 23.0003 5.3032C23.0003 4.99778 22.879 4.70487 22.663 4.4889C22.447 4.27294 22.1541 4.15161 21.8487 4.15161H12.636Z"
                                                fill="#9B51E0" fill-opacity="0.8" />
                                            <path
                                                d="M12.636 14.5161C12.3305 14.5161 12.0376 14.6374 11.8217 14.8534C11.6057 15.0694 11.4844 15.3623 11.4844 15.6677C11.4844 15.9731 11.6057 16.266 11.8217 16.482C12.0376 16.698 12.3305 16.8193 12.636 16.8193H21.8487C22.1541 16.8193 22.447 16.698 22.663 16.482C22.879 16.266 23.0003 15.9731 23.0003 15.6677C23.0003 15.3623 22.879 15.0694 22.663 14.8534C22.447 14.6374 22.1541 14.5161 21.8487 14.5161H12.636Z"
                                                fill="#9B51E0" fill-opacity="0.8" />
                                            <path
                                                d="M2.15159 3C1.84617 3 1.55326 3.12133 1.33729 3.33729C1.12133 3.55326 1 3.84617 1 4.15159V9.90955C1 10.215 1.12133 10.5079 1.33729 10.7238C1.55326 10.9398 1.84617 11.0611 2.15159 11.0611H7.90955C8.21497 11.0611 8.50788 10.9398 8.72384 10.7238C8.93981 10.5079 9.06114 10.215 9.06114 9.90955V4.15159C9.06114 3.84617 8.93981 3.55326 8.72384 3.33729C8.50788 3.12133 8.21497 3 7.90955 3H2.15159Z"
                                                fill="#9B51E0" />
                                            <path
                                                d="M2.15159 13.364C1.84617 13.364 1.55326 13.4853 1.33729 13.7013C1.12133 13.9173 1 14.2102 1 14.5156V20.2736C1 20.579 1.12133 20.8719 1.33729 21.0879C1.55326 21.3038 1.84617 21.4251 2.15159 21.4251H7.90955C8.21497 21.4251 8.50788 21.3038 8.72384 21.0879C8.93981 20.8719 9.06114 20.579 9.06114 20.2736V14.5156C9.06114 14.2102 8.93981 13.9173 8.72384 13.7013C8.50788 13.4853 8.21497 13.364 7.90955 13.364H2.15159Z"
                                                fill="#9B51E0" />
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium text-ubuy-black">Timeline</span>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12H19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 5L19 12L12 19" stroke="#A0A4A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                    

                </div>
            </div>
        </main>

        
        <!-- Accept Bid Popup -->
        <div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6" id="accept-bid-popup" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
            <div class="ubuy-post-task-form-container flex flex-col items-center justify-around py-16 px-20 rounded-3xl shadow bg-white relative">
                <button class="absolute right-5 top-5" onclick="onClosePopup('accept-bid-popup')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div>
                    <img src="assets/images/accept-bid-icon.png" alt="">
                </div>
                <div class="flex flex-col mt-10 items-center justify-center">
                    <h1 class="text-3xl text-ubuy-positiveDefault mb-2">Accept <span class="pro_name">John</span>’s Bid</h1>
                    <span class="text-base text-ubuy-gray500 max-w-md text-center px-8">Please confirm that you are about to Accept <span class="pro_name">John</span>’s bid and continue to pay ?</span>
                </div>
                <div class="mt-8 w-full flex flex-col items-center justify-center gap-y-8">
                    <form method="get" action="bid-confirm-payment.php">
                        <input type="hidden" id="pro-id" name="pro-id" />
                        <input type="hidden" id="project-id" name="project-id" value="<?php echo $_GET['project_id']; ?>" />
                        <button type="submit" class="text-sm text-white rounded-3xl bg-ubuy-positiveDefault py-4 px-5 font-semibold shadow-card">
                            Continue
                        </button>
                    </form>
                <!-- 
                    <div class="flex flex-row w-full items-center">
                        <hr class="flex-auto" />
                        <span class="mx-4 text-base text-ubuy-secondary">or</span>
                        <hr class="flex-auto" />
                    </div>
                    <button class="w-2/3 text-sm text-ubuy-positiveDefault rounded-3xl bg-white border border-ubuy-positiveDefault py-4 px-5 font-semibold shadow-card">
                        Pay Artisan yourself
                    </button> -->
                </div>
            </div>
        </div>
        <!-- End Accept Bid Popup -->
        <!-- Reject Bid Popup -->
        <div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6" id="reject-bid-popup" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
            <div class="ubuy-post-task-form-container flex flex-col items-center justify-around py-16 px-20 rounded-3xl shadow bg-white relative">
                <button class="absolute right-5 top-5" onclick="onClosePopup('reject-bid-popup')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div>
                    <img src="assets/images/reject-bid-icon.png" alt="">
                </div>
                <div class="flex flex-col mt-10 items-center justify-center">
                    <h1 class="text-3xl text-ubuy-negativeDefault mb-2">Accept John’s Bid</h1>
                    <span class="text-base text-ubuy-gray500 max-w-md text-center px-8">Please confirm that you are about to Accept John’s bid and continue to pay ?</span>
                </div>
                <div class="mt-12 w-full flex flex-col items-center justify-center">
                    <button class="w-2/5 text-sm text-white rounded-3xl bg-ubuy-negativeDefault py-4 px-5 font-semibold shadow-card">
                        Continue
                    </button>
                </div>
            </div>
        </div>
        <!-- End Reject Bid Popup -->
        <!-- Completed Task Popup -->
        <div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6" id="mark-job-completed" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
            <div class="ubuy-post-task-form-container flex flex-col items-center justify-around md:py-16 py-4 md:px-20 px-5 rounded-3xl shadow bg-white relative">
                <button class="absolute right-5 top-5" onclick="onClosePopup('mark-job-completed')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div>
                    <img class="md:min-w-full w-4/5 mx-auto h-auto" src="assets/images/completed-task-icon.png" alt="">
                </div>
                <div class="flex flex-col mt-10 items-center justify-center">
                    <h1 class="text-3xl text-ubuy-positiveDefault mb-2 text-center">Job Completed</h1>
                    <?php echo $userData['user_role'] == 'pro' ? '<span class="text-xxs text-ubuy-gray500 max-w-md text-center md:px-8">You are about to mark this job as completed and request payment from the concerned customer.</span>' : '<span class="text-xxs text-ubuy-gray500 max-w-md text-center md:px-8">You are about to mark this job as completed and approve payment to the concerned pro.</span>'; ?>
                </div>
                <div class="mt-14">
                    <!-- TEMP FOR FAKE ROUTING -->
                    <button id="completeJobBtn" onclick="completeJob(this.id)" class="text-sm text-white rounded-3xl bg-ubuy-positiveDefault py-4 px-5 font-semibold shadow-card">
                        Job Completed
                    </button>
                </div>
            </div>
        </div>
        <!-- End Completed Task Popup -->

        <!-- Rate Pro Popup -->

        <div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6 overflow-y-auto" id="rate-professionnal" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
            <div class="ubuy-post-task-form-container flex flex-col items-center justify-around py-10 px-10 rounded-3xl shadow bg-white relative max-w-2xl w-full">
                <button class="absolute right-5 top-5" onclick="onClosePopup('rate-professionnal')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="pro-pic">
                    
                </div>
                <div class="flex flex-col mt-10 items-center justify-center mx-10">
                    <h1 class="text-3xl text-ubuy-blue font-semibold mb-2 pro-names">John Ayomide</h1>
                    <h2 class="text-2xl text-ubuy-secondary mb-7 pro-service">Web Developer</h2>
                    <span class="text-2xl text-ubuy-inactive font-medium mb-3">Rate <span class="pro-firstname"></span>’s Performance</span>
                    <!-- May Improve -->
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
                <input type="hidden" id="prof-id" name="prof-id" />
                <div class="w-full mt-6">
                    <textarea rows="6" id="comment" name="comment" class="text-sm w-full py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg resize-none" placeholder="Write a comment on this pro's performance"></textarea>
                </div>
                <div class="self-start mt-14">
                    <button id="rateProBtn" class="text-sm text-white rounded-3xl bg-ubuy-blue py-4 px-5 font-semibold shadow-card">Submit</button>
                </div>
            </div>
        </div>

        <!-- End Rate Pro Popup -->

        <!-- Rate Pro Popup Mobile -->


        <div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden px-6 pt-12 overflow-y-auto" id="rate-professionnal-mobile" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
            <div class="ubuy-post-task-form-container flex flex-col items-center justify-around pt-0 pb-5 px-5 rounded-3xl shadow bg-white relative max-w-2xl w-full">
                <div class="-mt-10">
                    <img src="assets//images/avatar.png" class="rounded-full border-4 border-white" alt="">
                </div>
                <div class="flex flex-col items-center justify-center mx-auto">
                    <h1 class="text-lg text-ubuy-blue font-semibold mb-2">John Ayomide</h1>
                    <h2 class="text-sm text-ubuy-secondary mb-3">Web Developer</h2>
                    <span class="text-sm text-ubuy-inactive font-medium mb-2">Rate John’s Performance</span>
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
                <div class="w-full mt-6">
                    <textarea rows="6" class="text-sm w-full py-3.5 px-5 border border-ubuy-gray200 bg-ubuy-gray400 rounded-llg resize-none" placeholder="Write a comment on John’s performance"></textarea>
                </div>
                <div class="flex flex-row items-center mt-6 w-4/5 mx-auto justify-between">
                    <button onclick="onClosePopup('rate-professionnal-mobile')" class="text-sm text-ubuy-secondary rounded-3xl bg-white py-2 px-6 font-semibold shadow-card mt-10">
                        Cancel
                    </button>
                    <button onclick="onClosePopup('rate-professionnal-mobile')" class="text-sm text-white rounded-3xl bg-ubuy-blue py-2 px-6 font-semibold shadow-card mt-10">
                       Submit
                    </button>
                </div>
            </div>
        </div>


        <!-- End Rate Pro Popup -->

<?php
if($_SESSION['user_role'] == 'customer'){
    require_once 'inc/customer-footer.php';
}elseif($_SESSION['user_role'] == 'pro'){
    require_once 'inc/pro-footer.php';
}
?>

<script type="text/javascript">
function completeJob(id){
    document.getElementById(id).disabled = true;
    $("#"+id).html("Please wait...");
    var url = "endpoints/mark-job-completed.php";
    $.ajax({
        type: "POST",
        url: url,
        dataType: 'json',
        data: {
            'project_id' : "<?php echo $_GET['project_id']; ?>"
        },
        success: function(data)
        {
            console.log(data);
            if(data.error == "Validation Exception"){
                let p = data.error_message;
                for (var key in p) {
                    toastr.error(p[key], "Error:", {timeOut: 8000});
                }
                document.getElementById(id).disabled = false;
                $("#"+id).html("Job Completed");
            }else{
                toastr.success(data.message, "Success:", {timeOut: 7000});
                setTimeout(function(){
                    window.location.reload();
                }, 3000);
            }
        }
    });
    return false;

}
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
                bid_duration : $("#bid_duration").val(),
                bid_message : $("#bid_message").val(),
                pro_id : $("#pro_id").val(),
                project_id : $("#project_id").val(),
                cus_id : $("#cus_id").val(),
              },
              success: function(data)
              {
                  console.log(data);
                  if(data.error == "Validation Exception"){
                      let p = data.error_message;
                      for (var key in p) {
                          toastr.error(p[key], "Error:", {timeOut: 8000});
                      }
                      document.getElementById("submitBidBtn").disabled = false;
                      $("#submitBidBtn").html("Create an account");
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

      $("#rateProBtn").on("click", function(e){
        document.getElementById("rateProBtn").disabled = true;
          $("#rateProBtn").html("Please wait...");
          var url = "endpoints/rate-pro.php";
          $.ajax({
              type: "POST",
              url: url,
              dataType: 'json',
              data: {
                  pro_id : $("#prof-id").val(),
                  rating : $("input[type='radio'][name='rate']:checked").val(),
                  comment : $("#comment").val()
              },
              success: function(data)
              {
                  console.log(data);
                  if(data.success == true){
                    toastr.success(data.message, "Success:", {timeOut: 7000});
                      setTimeout(function(){
                          window.location.reload();
                      }, 3000);
                  }else{
                      let p = data.error_message;
                      for (var key in p) {
                          toastr.error(p[key], "Error:", {timeOut: 8000});
                      }
                      document.getElementById("rateProBtn").disabled = false;
                      $("#rateProBtn").html("Submit");
                  }
              }
          });
          return false;
      });
    });
</script>
