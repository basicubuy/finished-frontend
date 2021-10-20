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

$disputes = $init->getUserDispute($userData['id']);
$disput = json_decode($disputes, true);
$disputes = $disput['disputes'];
$count = $disput['count'];

// var_dump($disputes);
// return;
?>

        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="mx-auto w-full lg:my-7 my-4 lg:pl-7 lg:pr-10 px-4 flex flex-col gap-y-5">
                    <div class="flex flex-row flex-wrap sm:flex-nowrap gap-x-6">
                        <div class="flex flex-row items-center sm:w-2/3 w-full bg-white shadow-card md:px-9 px-5 py-5 mb-0 rounded-lg">
                            <div class="sm:w-7/12 w-full">
                                <h1 class="text-2xl font-medium mb-2">Dispute Resolution</h1>
                                <h2 class="text-ubuy-black text-sm">File a dispute on any of your active tasks or check the status of your dispute.</h2>
                                <button onclick="onOpenPopup('log-dispute-popup')" class="flex flex-row items-center bg-ubuy-blue py-2 px-3.5 gap-x-6 rounded-md mt-6">
                                    <span class="text-base font-semibold text-white">Submit a Dispute</span>
                                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79199 12H18.2087" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M11.5 5L18.2083 12L11.5 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="w-5/12 sm:block hidden">
                                <img alt="welcome" class="min-w-full h-auto" src="assets/images/dispute-hero.png">
                            </div>
                        </div>
                        <div class="sm:w-1/3 w-full flex-1 flex flex-col text-white relative">
                            <div class="rounded-llg flex-1 bg-white flex-row items-center justify-between p-5 cursor-pointer sm:flex hidden">
                                <div class="rounded-full xl:p-4 p-1">
                                    <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle opacity="0.2" cx="35" cy="35" r="35" fill="#2AC769" />
                                        <path d="M38 20L47 29L47 47C47 48.65 45.65 50 44 50L25.985 50C24.335 50 23 48.65 23 47L23.015 23C23.015 21.35 24.35 20 26 20L38 20ZM44.75 30.5L36.5 22.25L36.5 30.5L44.75 30.5Z" fill="#2AC769" />
                                    </svg>
                                </div>
                                <div class="flex flex-col items-center justify-center gap-y-3">
                                    <span class="text-3xl text-ubuy-black font-medium" id="disputeCount"><?php echo $count; ?></span>
                                    <span class="text-ubuy-gray500 text-sm font-normal w-32 text-center">Disputes Resolved</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sm:flex hidden flex-row justify-between items-center text-sm text-ubuy-secondary">
                        <div class="flex flex-row items-center gap-x-5">
                            <div class="bg-white rounded-llg py-3 px-5 flex flex-row items-center">
                                <label for="filter-pros" class="flex flex-row">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.1554 0H0.84473C0.0952696 0 -0.282906 0.909351 0.248129 1.44039L6.74999 7.94324V15.1875C6.74999 15.4628 6.88433 15.7208 7.10989 15.8787L9.92239 17.8468C10.4773 18.2352 11.25 17.8415 11.25 17.1555V7.94324L17.752 1.44039C18.282 0.910406 17.9064 0 17.1554 0Z"
                                            fill="#52575C" />
                                    </svg>
                                    <span class="ml-3 sm:inline hidden  text-xxxs">Filter</span>
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
                                        <span class="hidden sm:inline whitespace-nowrap mt-1 text-xxxs">
                                            Sort by: Date Submitted
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
                            <input class="py-2 px-3 w-full" id="search" type="text" placeholder="Find Professional.." />
                        </div>
                    </div>
                    <!-- Dispute Cards Mobile -->

                    <div class="flex flex-col w-full sm:hidden">
                        <div class="mb-4 text-sm font-medium text-ubuy-black">

                            <label>Showing:</label>
                            <select class="rounded-lg bg-white font-medium ml-2 px-1">
                                <option class="" value="" selected>
                                    All Disputes
                                </option>
                                <option class="" value="">
                                    In Progress
                                </option>
                                <option class="" value="">
                                    Pending
                                </option>
                                <option class="" value="">
                                    Completed
                                </option>
                                <option class="" value="">
                                    Archived
                                </option>
                            </select>

                        </div>
                        <div class="flex flex-col gap-y-4 w-full">


                        <?php foreach($disputes as $dispute){ 
                             $sp = $dispute['project'];
                            ?>

                            <!-- Card -->
                            <div class="flex flex-row gap-x-2 w-full items-center flex-nowrap justify-start bg-white rounded-lg px-4 py-2 text-xs">
                                <div class="text-ubuy-secondary">
                                    #<?php echo $dispute['id']; ?>
                                </div>
                                <div class="flex flex-col flex-auto gap-y-2">
                                    <div class="flex flex-row w-full items-center justify-between">
                                        <span class="whitespace-nowrap text-xxxs mr-1 text-ubuy-secondary"><?php echo $dispute['subject']; ?></span>
                                        <small class="text-ubuy-inactive">
                                        <?php
                                        
                                        $start  = date_create($dispute['created_at']);
                                        $end    = date_create(); // Current time and date
                                        $diff   = date_diff( $start, $end );

                                        echo $diff->d;

                                        ?> days ago
                                        </small>
                                    </div>

                                    <div class="text-xxs w-full flex flex-row justify-between">
                                        <div class="text-ubuy-inactive">
                                        <?php echo $sp['project_title']; ?>
                                        </div>
                                        <a href="dispute-resolution-details.php?dispute_id=<?php echo $dispute['id']; ?>" class="w-1/3 text-xxxs <?php echo $dispute['status'] == "open" ? "bg-ubuy-warningDefault" : "bg-ubuy-positiveDefault"; ?> rounded px-5 py-1 text-white text-center self-center">
                                            <?php echo ucfirst($dispute['assigned_status']); ?>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <!-- Card end-->
                        <?php } ?>


                        </div>
                    </div>
                    <!--End  Dispute Cards Mobile -->

                    <div class="w-full hidden sm:grid xl:grid-cols-2 grid-cols-1 grid-flow-row gap-6">

                    <?php foreach($disputes as $dispute){ 
                         $sp = $dispute['project'];
                         $submitted = $dispute['user_submitted'];
                         $against = $dispute['user_against'];
                    ?>
                        <div class="flex flex-col p-5 rounded-llg items-start justify-start bg-white text-ubuy-secondary gap-y-3">
                            <div class="flex flex-row w-full items-center">
                                <div class="w-24 text-xs">
                                    Dispute ID:
                                </div>
                                <div class="flex-1 text-ubuy-black text-sm">
                                    #<?php echo $dispute['id']; ?>
                                </div>
                                <div class="flex flex-row items-center">
                                    <div class="text-tiny mr-1">
                                        Status:
                                    </div>
                                    <a href="dispute-resolution-details.php?dispute_id=<?php echo $dispute['id']; ?>" class="rounded text-center text-white font-medium <?php echo $dispute['assigned_status'] == "unassigned" ? "bg-ubuy-warningDefault" : "bg-ubuy-positiveDefault"; ?> py-1 px-2 text-xxxs">
                                        <?php echo ucfirst($dispute['assigned_status']); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="flex flex-row items-center w-full">
                                <div class="w-24 text-xs">
                                    Task Title:
                                </div>
                                <div class="flex-1 text-sm">
                                    <h2 class="w-64">
                                        <?php echo $sp['project_title']; ?>
                                    </h2>

                                </div>
                                <div class="flex flex-row">
                                    <div class="flex flex-row items-center ">
                                        <span class="mr-1">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.99968 14.6668C11.6816 14.6668 14.6663 11.6821 14.6663 8.00016C14.6663 4.31826 11.6816 1.3335 7.99968 1.3335C4.31778 1.3335 1.33301 4.31826 1.33301 8.00016C1.33301 11.6821 4.31778 14.6668 7.99968 14.6668Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M8 4V8L10.6667 9.33333" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        <span class="text-xs mr-1">
                                            Time:
                                        </span>
                                    </div>
                                    <div class="text-xs">
                                        <?php
                                        
                                        $start  = date_create($dispute['created_at']);
                                        $end    = date_create(); // Current time and date
                                        $diff   = date_diff( $start, $end );

                                        echo $diff->d;

                                        ?> days ago
                                        <!-- 2 weeks ago -->
                                    </div>
                                </div>

                            </div>
                            <div class="flex flex-row w-full">
                                <div class="w-24 text-xs">
                                    Details:
                                </div>
                                <div class="flex-1 text-xs" style="height: 80px;">
                                    <?php echo $sp['project_message']; ?>
                                </div>
                            </div>
                            <div class="flex flex-row w-full items-center">
                                <div class="w-24 text-xs">
                                    Pro:
                                </div>
                                <div class="flex-1 flex flex-row">
                                    <div class="w-14 h-14 mr-2">
                                        <img class="avatar rounded-full" src="<?php echo $against['public_url']; ?>" alt="">
                                    </div>
                                    <div>
                                        <div class="text-base text-ubuy-blue font-medium"><?php echo $against['last_name'].' '.$against['first_name'][0]; ?>.</div>
                                        <div class="text-xs mt-2"><?php echo $sp['sub_category_name']; ?></div>
                                        <div class="mt-1"> 
                                            <div class="ratings text-3xl">
                                                <div class="empty-stars mx-auto"></div>
                                                <?php 
                                                    $rate = ($against['average_rating']*100)/5;
                                                ?>
                                                <!-- Add the ratings percentage as the width -->
                                                <div class="full-stars" style="width:<?php echo $rate; ?>%"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <a href="dispute-resolution-details.php?dispute_id=<?php echo $dispute['id']; ?>" class="text-xs bg-ubuy-blue rounded-md py-1 px-3 text-white w-16">View</a>
                                </div>
                            </div>

                        </div>
                    <?php } ?>

                        <!-- <div class="flex flex-col w-full items-center flex-nowrap justify-center rounded-lg px-4 py-20" id="disputeLoader">
                            <button class="text-ubuy-blue py-2">
                                <img src="assets/images/loader.gif" width="40" height="40" class="" /> 
                            </button>
                        </div> -->


                        <!-- Dispute summary Card -->
                        
                        <!--End Dispute summary Card -->


                    </div>
                </div>
            </div>
        </main>
        <!-- Log Dispute Popup -->
        <div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6" id="log-dispute-popup" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
            <div class="ubuy-post-task-form-container flex flex-col items-center justify-around p-5 rounded-3xl shadow bg-white relative max-w-2xl w-full">
                <button class="absolute right-5 top-5" onclick="onClosePopup('log-dispute-popup')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <h1 class="text-lg font-semibold mb-2.5">Log a New Dispute</h1>
                <form id="dispute-form"  enctype="multipart/form-data" class="w-full">
                    <div class="flex flex-col mt-10 items-center justify-center w-full px-5 gap-y-5">
                        <div class="flex flex-col w-full">
                            <label for="category" class="text-sm font-medium text-ubuy-secondary mb-2.5">
                                Why are you filing this dispute?
                            </label>
                            <input type="text" name="reason" id="reason" placeholder="I got delayed" class="border bg-ubuy-gray400 border-ubuy-gray200 rounded-md py-3 px-5 text-sm" />
                        </div>
                        <div class="flex flex-col w-full">
                            <label for="category" class="text-sm font-medium text-ubuy-secondary mb-2.5">
                                Whats the category of this dispute ?
                            </label>
                            <!-- <input type="text" name="category" id="category" placeholder="Refund Request" class="border bg-ubuy-gray400 border-ubuy-gray200 rounded-md py-3 px-5 text-sm" /> -->
                            <select name="category" id="category" class="border bg-ubuy-gray400 border-ubuy-gray200  rounded-md py-3 px-5 text-sm">
                                <option selected>Select refund category</option>
                            </select>

                        </div>
                        <div class="flex flex-col w-full">
                            <label for="related-to" class="text-sm font-medium text-ubuy-secondary mb-2.5">
                                Whats Task is this dispute related to ?
                            </label>
                            <select name="app_job_id" id="app_job_id" class="border bg-ubuy-gray400 border-ubuy-gray200  rounded-md py-3 px-5 text-sm">
                                <option selected>Select task related</option>
                            </select>
                            <!-- <input type="text" name="related-to" id="related-to" placeholder="My Company’s Website Design" class="border bg-ubuy-gray400 border-ubuy-gray200  rounded-md py-3 px-5 text-sm" /> -->
                        </div>
                        <div class="flex flex-col w-full">
                            <label for="dispute-details" class="text-sm font-medium text-ubuy-secondary mb-2.5">
                                Tell Us about this dispute
                            </label>
                            <textarea class="border bg-ubuy-gray400 border-ubuy-gray200  rounded-md p-5 resize-none text-sm h-36" type="text" name="dispute-details" id="dispute-details" placeholder="Enter the details of this dispute"></textarea>
                        </div>
                        <div class="flex flex-row items-center self-start">
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
                            <input type="file" name="files" id="files" class="hidden" multiple />
                        </div>
                        <div class="mt-6">
                            <input  type="hidden" id="submitted_by" name="submitted_by" value="<?php echo $userData['id']; ?>" />
                            <input  type="hidden" id="submitted_by" name="submitted_by" value="<?php echo $userData['id']; ?>" />
                            <button type="submit" id="disputeBtn" class="text-sm text-white rounded-lg bg-ubuy-blue py-3 px-8 font-semibold shadow-card">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


<?php
if($_SESSION['user_role'] == 'customer'){
    require_once 'inc/customer-footer.php';
}elseif($_SESSION['user_role'] == 'pro'){
    require_once 'inc/pro-footer.php';
}
?>

<script type="text/javascript">

    fetch("endpoints/fetchAllProjects.php").then(
    res => {
        res.json().then(
        data => {
            if (data.projects.length > 0) {
                for (const itemData of data.projects) {
                    $('#app_job_id').append('<option value="'+itemData.id+'">'+itemData.project_title+'</option>'); 
                }
            }
        })
    })

    fetch("endpoints/dispute-category.php").then(
    res => {
        res.json().then(
        data => {
            if (data.categories.length > 0) {
                for (const itemData of data.categories) {
                    $('#category').append('<option value="'+itemData.id+'">'+itemData.name+'</option>'); 
                }
            }
        })
    })

    $(document).ready(function(){
        
        $("#dispute-form").on("submit", function(e){
            e.preventDefault();
            // document.getElementById("disputeBtn").disabled = true;
            $("#disputeBtn").html("Please wait...");
            $.ajax({
                type: "POST",
                url: "endpoints/post-dispute.php",
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                data: new FormData(this),
                beforeSend: function(){
                    $('#disputeBtn').attr("disabled","disabled");
                    $('#portfolio-form').css("opacity",".5");
                },
                success: function(data)
                {
                    console.log(data);
                    if(data.success == true){
                        toastr.success("Dispute has been logged/reported. One of agent will be assigned shortly!", "Success:", {timeOut: 7000});
                        setTimeout(function(){
                            window.location.reload();
                        }, 5000);
                    }else{
                        let p = data.error_message;
                        for (var key in p) {
                            toastr.error(p[key], "Error:", {timeOut: 8000});
                        }
                        document.getElementById(id).disabled = false;
                        $("#disputeBtn").html("Submit");
                    }
                }
            });
            return false;
        });

    });
</script>