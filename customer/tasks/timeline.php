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
        <main class="flex-1 overflow-auto sm:pt-24 pt-20 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex w-full flex-col lg:my-7 my-4 lg:pl-7 pl-4 lg:pr-10 pr-4 gap-y-6 h-full">
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
                                Milestones
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
                    <div class="timeline w-full relative h-full">
                        <div>
                            <div class="timeline-content-wrapper flex flex-row items-start sm:gap-x-16 gap-x-10">
                                <div class="timeline-date completed box-content rounded-llg bg-white text-xs flex items-center justify-center text-center relative p-3 sm:min-w-max min-w-otpx text-ubuy-secondary">
                                    Wed | May 6, 2020
                                </div>
                                <div class="relative flex-auto">
                                    <details class="text-ubuy-black bg-white rounded-llg sm:p-4 p-2">
                                        <summary class="w-full">
                                            <div class="flex flex-row items-center justify-between w-full pr-7">
                                                <span class="text-xs">Task Published</span>
                                                <small class="whitespace-nowrap pr-3 text-xxs">3:30 PM</small>
                                            </div>
                                            <h1 class="sm:text-lg text-xs font-medium text-ubuy-black"></h1>
                                        </summary>
                                        <div class="w-auto">
                                            <div class="text-sm text-left">
                                                Id magna adipisicing adipisicing sint tempor. Velit proident minim eu Lorem deserunt velit ipsum mollit minim labore amet. Adipisicing duis voluptate dolor nisi velit ullamco eiusmod quis aliquip deserunt irure labore exercitation occaecat. Proident
                                                dolore ut fugiat proident. Et amet eiusmod elit ut dolore pariatur.
                                            </div>
                                            <div>
                                                <span class="text-base text-ubuy-gray500">Amount due:</span>
                                                <span class="text-sm font-medium">$2000</span>
                                            </div>
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>

                        <div class="my-5">
                            <div class="timeline-content-wrapper flex flex-row items-start sm:gap-x-16 gap-x-10 text-ubuy-inactive">
                                <div class="box-content rounded-llg bg-white text-xs flex items-center justify-center text-center timeline-date relative p-3 sm:min-w-max min-w-otpx text-ubuy-secondary">
                                    Wed | May 6, 2020
                                </div>
                                <div class="relative flex-auto">
                                    <details class="text-ubuy-black bg-white rounded-llg sm:p-4 p-2">
                                        <summary class="w-full">
                                            <div class="flex flex-row items-center justify-between w-full pr-7">
                                                <span class="text-xs">Task Edited</span>
                                                <small class="whitespace-nowrap pr-3 text-xxs">3:30 PM</small>
                                            </div>
                                            <h1 class="sm:text-lg text-xs font-medium text-ubuy-black"></h1>
                                        </summary>
                                        <div class="w-auto">
                                            <div class="text-sm text-left">

                                            </div>
                                            <div>
                                                <span class="text-base text-ubuy-gray500">Amount due:</span>
                                                <span class="text-sm font-medium">$2000</span>
                                            </div>
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="timeline-content-wrapper completed flex flex-row items-start sm:gap-x-16 gap-x-10">
                                <div class="completed box-content rounded-llg bg-white text-xs flex items-center justify-center text-center timeline-date relative p-3 sm:min-w-max min-w-otpx text-ubuy-secondary">
                                    Wed | May 6, 2020
                                </div>
                                <div class="relative flex-auto">
                                    <details class="text-ubuy-black bg-white rounded-llg sm:p-4 p-2">
                                        <summary class="w-full">
                                            <div class="flex flex-row items-center justify-between w-full pr-7">
                                                <span class="text-xs">2 New Bids Recieved</span>
                                                <small class="whitespace-nowrap pr-3 text-xxs">3:30 PM</small>
                                            </div>
                                            <h1 class="sm:text-lg text-xs font-medium text-ubuy-black"></h1>
                                        </summary>
                                        <div class="w-auto flex flex-col gap-y-2">
                                            <div class="">
                                                <div class="flex text-sm text-left flex-row items-center w-4/5 gap-x-4">
                                                    <div class="relative">
                                                        <img class="rounded-full w-10 h-10" src="../../assets/images/avatar-small-rounded.png" alt="avatar" />
                                                        <svg class="absolute bottom-0 right-2" width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="3.09092" cy="3.27268" r="2.22727" fill="#2AC769" stroke="white" />
                                                        </svg>
                                                    </div>
                                                    <div class="flex flex-col text-ubuy-blue text-tiny">
                                                        <span>John Ayomide</span>
                                                        <span class="text-ubuy-secondary">UI/UX Specialist</span>
                                                    </div>
                                                    <div class="ml-8 text-tiny">
                                                        <span class="text-ubuy-gray500"> Bid:</span>
                                                        <span class="text-ubuy-black">$35,000</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div>
                                                <div class="flex text-sm text-left flex-row items-center w-4/5 gap-x-4">
                                                    <div class="relative">
                                                        <img class="rounded-full w-10 h-10" src="../../assets/images/avatar-small-rounded.png" alt="avatar" />
                                                        <svg class="absolute bottom-0 right-2" width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="3.09092" cy="3.27268" r="2.22727" fill="#2AC769" stroke="white" />
                                                        </svg>
                                                    </div>
                                                    <div class="flex flex-col text-ubuy-blue text-tiny">
                                                        <span>John Ayomide</span>
                                                        <span class="text-ubuy-secondary">UI/UX Specialist</span>
                                                    </div>
                                                    <div class="ml-8 text-tiny">
                                                        <span class="text-ubuy-gray500"> Bid:</span>
                                                        <span class="text-ubuy-black">$35,000</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>

                        <div class="my-5">
                            <div class="timeline-content-wrapper flex flex-row items-start sm:gap-x-16 gap-x-10 text-ubuy-inactive">
                                <div class="completed box-content rounded-llg bg-white text-xs flex items-center justify-center text-center timeline-date relative p-3 sm:min-w-max min-w-otpx text-ubuy-secondary">
                                    Wed | May 6, 2020
                                </div>
                                <div class="relative flex-auto">
                                    <details class="text-ubuy-black bg-white rounded-llg sm:p-4 p-2">
                                        <summary class="w-full">
                                            <div class="flex flex-row items-center justify-between w-full pr-7">
                                                <span class="text-xs">Bid Accepted</span>
                                                <small class="whitespace-nowrap pr-3 text-xxs">3:30 PM</small>
                                            </div>
                                            <h1 class="sm:text-lg text-xs font-medium text-ubuy-black"></h1>
                                        </summary>
                                        <div class="w-auto">
                                            <div class="text-sm text-left">

                                            </div>
                                        
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="timeline-content-wrapper flex flex-row items-start sm:gap-x-16 gap-x-10 text-ubuy-inactive">
                                <div class="invisible box-content rounded-llg bg-white text-xs flex items-center justify-center text-center timeline-date relative p-3 pr-4 sm:min-w-max min-w-otpx text-ubuy-secondary">
                                    Wed | May 6, 2020
                                </div>
                                <div class="relative flex-auto">
                                    <details class="text-ubuy-black bg-white rounded-llg sm:p-4 p-2">
                                        <summary class="w-full">
                                            <div class="flex flex-row items-center justify-between w-full pr-7">
                                                <span class="text-xs">Job Started</span>
                                                <small class="whitespace-nowrap  pr-3 text-xxs">3:30 PM</small>
                                            </div>
                                            <h1 class="sm:text-lg text-xs font-medium text-ubuy-black"></h1>
                                        </summary>
                                        <div class="w-auto">
                                            <div class="text-sm text-left">

                                            </div>
                                        
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>

                        <div class="my-5">
                            <div class="timeline-content-wrapper flex flex-row items-start sm:gap-x-16 gap-x-10 text-ubuy-inactive">
                                <div class="completed box-content rounded-llg bg-white text-xs flex items-center justify-center text-center timeline-date relative p-3 sm:min-w-max min-w-otpx text-ubuy-secondary">
                                    Wed | May 6, 2020
                                </div>
                                <div class="relative flex-auto">
                                    <details class="text-ubuy-black bg-white rounded-llg sm:p-4 p-2">
                                        <summary class="w-full">
                                            <div class="flex flex-row items-center justify-between w-full pr-7">
                                                <span class="text-xs">Milestone logged</span>
                                                <small class="pr-3 whitespace-nowrap text-xxs">3:30 PM</small>
                                            </div>
                                            <h1 class="sm:text-lg text-xs font-medium text-ubuy-black"></h1>
                                        </summary>
                                        <div class="w-auto">
                                            <div class="text-sm text-left">

                                            </div>
                                        
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="timeline-content-wrapper flex flex-row items-start sm:gap-x-16 gap-x-10 text-ubuy-inactive">
                                <div class="box-content rounded-llg bg-white text-xs flex items-center justify-center text-center timeline-date relative p-3 sm:min-w-max min-w-otpx text-ubuy-secondary">
                                    Wed | May 6, 2020
                                </div>
                                <div class="relative flex-auto">
                                    <details class="text-ubuy-black bg-white rounded-llg sm:p-4 p-2">
                                        <summary class="w-full">
                                            <div class="flex flex-row items-center justify-between w-full pr-7">
                                                <span class="text-xs">Milestone Confirmed</span>
                                                <small class="whitespace-nowrap pr-3 text-xxs">3:30 PM</small>
                                            </div>
                                            <h1 class="sm:text-lg text-xs font-medium text-ubuy-black"></h1>
                                        </summary>
                                        <div class="w-auto">
                                            <div class="text-sm text-left">

                                            </div>
                                        
                                        </div>
                                    </details>
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
