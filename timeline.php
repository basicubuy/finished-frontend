<?php
include_once("endpoints/constant.php");
if(isset($_SESSION['user_role'])){
    if($_SESSION['user_role'] == 'customer'){
        require_once 'inc/customer-header.php';
    }elseif($_SESSION['user_role'] == 'pro'){
        require_once 'inc/pro-header.php';
    }

    $timeline = $init->project_timeline($_GET['project_id']);
    $timeline = json_decode($timeline, true);
    $timeline = isset($timeline['projectTimeline']) ? $timeline['projectTimeline'] : "";
}else{
    session_destroy();
    unset($_SESSION['access_token']);
    header("Location: sign-in.php?error=You have to login!");
}

?>

            <main class="flex-1 overflow-auto sm:pt-24 pt-20 flex items-stretch md:pl-64 pl-0 max-w-full">
                <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                    <div class="flex w-full flex-col lg:my-7 my-4 lg:pl-7 pl-4 lg:pr-10 pr-4 gap-y-6 h-full">
                        <div class="sm:flex hidden flex-row items-center justify-between w-full text-sm text-ubuy-secondary gap-4">
                            <div class="flex flex-row items-center gap-x-4 rounded-llg bg-white px-6 py-4">
                                <span class="whitespace-nowrap truncate">
                                    <?php echo $_GET['project']; ?>
                                </span>
                                <span>
                                    <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 1.12134C-1.2258e-08 0.259419 0.520833 -0.279284 0.9375 0.151678L4.6875 4.03034C5.10417 4.4613 5.10417 5.5387 4.6875 5.96966L0.9375 9.84832C0.520834 10.2793 1.2258e-07 9.74058 1.10322e-07 8.87866L0 1.12134Z"
                                            fill="#A0A4A8"
                                        />
                                    </svg>
                                </span>
                                <span class="whitespace-nowrap truncate">
                                    Project Timeline
                                </span>
                            </div>
                            <a href="task-details.php?project_id=<?php echo $_GET['project_id']; ?>" class="flex flex-row items-center gap-x-4 rounded-llg bg-white px-6 py-4">
                                <span>
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 9L1 5L5 1" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="timeline w-full relative h-full">

                        <?php foreach($timeline as $item){ ?>

                            
                            <div class="my-5">
                                <div class="timeline-content-wrapper flex flex-row items-start sm:gap-x-16 gap-x-10 text-ubuy-inactive">
                                    <div class="box-content rounded-llg bg-white text-xxxs flex items-center justify-center text-center timeline-date relative p-3 sm:min-w-max min-w-otpx text-ubuy-secondary mt-2">
                                        <?php echo date('l M j, Y', strtotime($item['created_at'])); ?>
                                    </div>
                                    <div class="relative flex-auto">
                                        <details class="text-ubuy-black bg-white rounded-llg sm:p-4 p-2">
                                            <summary class="w-full">
                                                <div class="flex flex-row items-center justify-between w-full pr-7">
                                                    <span class="text-xs"><?php echo $item['type']; ?></span>
                                                    <small class="whitespace-nowrap pr-3 text-xxs"><?php echo date('H:i', strtotime($item['created_at'])); ?></small>
                                                </div>
                                                <h1 class="sm:text-lg text-xs font-medium text-ubuy-black"></h1>
                                            </summary>
                                            <div class="w-auto">
                                                <div class="text-sm text-left"></div>
                                                <div>
                                                    <span class="text-base text-ubuy-gray500">Details:</span>
                                                    <span class="text-sm font-medium"><?php echo isset($item['extra']) ? $item['extra'] : "Not set"; ?></span>
                                                </div>
                                            </div>
                                        </details>
                                    </div>
                                </div>
                            </div>

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