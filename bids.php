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


$pro_bid = $init->proBidList();
$pro_bid = json_decode($pro_bid, true);
$pro_bid = $pro_bid['bids'];

?>
        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex flex-col w-full px-4 lg:px-6 mt-5">
                    <div class="flex flex-row w-full justify-between">
                        <div>
                            <div class="mb-5 text-xs md:text-base lg:text-lg text-ubuy-black">
                                <label>Showing:</label>
                                <select class="rounded-lg bg-white font-medium ml-2 px-2 py-1">
                                    <option class="" value="" selected>
                                        All Bids
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-row items-start gap-x-2">
                            <span>1 - 7</span>
                            <span>of</span>
                            <span>420</span>
                            <button>
                                <svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.2396 18L10.8179 12.0735C10.775 12.0339 10.775 11.9661 10.8179 11.9265L17.2396 6" stroke="#52575C" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </button>
                            <button>
                                <svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.7461 18L17.1678 12.0735C17.2107 12.0339 17.2107 11.9661 17.1678 11.9265L10.7461 6" stroke="#52575C" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>


                    </div>
                    <div class="w-full grid xl:grid-cols-2 grid-cols-1 grid-flow-row gap-6 pb-5">

                    <?php 

                        foreach($pro_bid as $bids){ ?>
                        <?php 
                            switch($bids['project']['status']){
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

                            
                            switch($bids['bid_status']){
                                case 0:
                                    $bidStatus = "Pending";
                                    $bidColor = "bg-ubuy-purple200";
                                break;
                                case 1:
                                    $bidStatus = "Inactive";
                                    $bidColor = "bg-ubuy-secondary";
                                break;
                                case 2:
                                    $bidStatus = "Active";
                                    $bidColor = "bg-ubuy-positiveDefault";
                                break;
                            };
                        ?>
                        <!-- Task Card -->
                        <div class="flex flex-col rounded-llg items-start justify-start bg-white text-ubuy-secondary gap-y-3">
                            <div class="flex flex-col w-full border-b p-4">
                                <div class="flex flex-row w-full items-center justify-between mb-4">
                                    <div class="w-24 text-xs">
                                        Task:
                                    </div>
                                    <div class="flex-1 text-ubuy-black max-w-xs text-base">
                                        <?php echo $bids['project']['project_title']; ?>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <div class="text-tiny mr-2">
                                            Status:
                                        </div>
                                        <div class="rounded text-center text-white font-medium <?php echo $projectColor; ?> py-1 px-2 text-xxxs">
                                            <?php echo $projectStatus; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-row items-center justify-between w-full">
                                    <div class="w-24 text-xs">
                                        Catagory:
                                    </div>
                                    <div class="flex-1 text-sm mr-3">
                                        <h2>
                                            <?php echo $bids['project']['sub_category_name']; ?>
                                        </h2>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <div class="text-tiny mr-1">
                                            Bid:
                                        </div>
                                        <div class="rounded text-center text-white font-medium <?php echo $bidColor; ?> py-1 px-2 text-xxxs">
                                            <?php echo $bidStatus; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-row w-full items-center justify-between px-4">
                                <div class="w-24 text-xs" style="height: 60px;">
                                    Bid Info:
                                </div>
                                <div class="flex-1 text-xs" style="height: 60px;">
                                    <?php echo $bids['bid_message']; ?>
                                </div>
                            </div>
                            <div class="flex flex-row w-full items-center justify-between px-4 pb-4">
                                <div class="w-24 text-xs">
                                    Bid Amount:
                                </div>
                                <div class="flex-1 flex flex-row">N <?php echo number_format($bids['bid_amount'], 2); ?></div>
                                <div class="flex flex-row gap-x-5 text-xs font-medium">
                                    <button class="rounded-md px-2.5 py-1 border border-ubuy-blue text-ubuy-blue <?php echo $bids['bid_status'] == 2 ? "disabled" : "" ?>">Edit</button>
                                    <a href="bid-details.php?project_id=<?php echo $bids['project']['id']; ?>">
                                        <button class="bg-ubuy-blue rounded-md py-1 px-3 text-white">View</button>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!--End Task Card -->

                    <?php } ?>
                        

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