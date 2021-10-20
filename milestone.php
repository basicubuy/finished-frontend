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

$mile = $init->getMilestone($_GET['project_id']);
$mile = json_decode($mile, true);
$mile = isset($mile['milestones']) ? $mile['milestones'] : "";

?>
    <?php if($_SESSION['user_role'] == 'customer'){ ?>
        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex w-full flex-col lg:my-7 my-4 lg:pl-7 pl-4 lg:pr-10 pr-4 gap-y-6">
                    <div class="sm:flex hidden flex-row items-center justify-between w-full text-sm text-ubuy-secondary gap-4">
                        <div class="sm:flex hidden flex-row items-center gap-x-4 rounded-llg bg-white px-6 py-4">
                            <span class="whitespace-nowrap truncate">
                                <?php echo $_GET['project']; ?>
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
                        <a href="task-details.php?project_id=<?php echo $_GET['project_id']; ?>" class="flex flex-row items-center gap-x-4 rounded-llg bg-white px-6 py-4">
                            <span>
                                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 9L1 5L5 1" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="milestone-timeline w-full">


                        <!-- <div class="milestone-timeline-content-wrapper xl:pl-16 pl-7 completed">
                            <div class="content">
                                <details class="text-ubuy-black">
                                    <summary>
                                        <h1 class="text-lg font-medium text-ubuy-black">Landing Page Completed </h1>
                                    </summary>
                                    <div>
                                        <p class="text-sm text-left w-4/5">
                                            Id magna adipisicing adipisicing sint tempor. Velit proident minim eu Lorem deserunt velit ipsum mollit minim labore amet. Adipisicing duis voluptate dolor nisi velit ullamco eiusmod quis aliquip deserunt irure labore exercitation occaecat. Proident fugiat
                                            dolore ut fugiat proident. Et amet eiusmod elit ut dolore pariatur.
                                        </p>
                                        <div>
                                            <span class="text-base text-ubuy-gray500">Amount due:</span>
                                            <span class="text-sm font-medium">$2000</span>
                                        </div>
                                    </div>
                                </details>
                            </div>
                        </div>

                        <div class="milestone-timeline-content-wrapper xl:pl-16 pl-7 completed">
                            <div class="content">
                                <details class="text-ubuy-black">
                                    <summary>
                                        <h1 class="text-lg font-medium text-ubuy-black">Landing Page Completed </h1>
                                    </summary>
                                    <div>
                                        <p class="text-sm text-left w-4/5">
                                            Id magna adipisicing adipisicing sint tempor. Velit proident minim eu Lorem deserunt velit ipsum mollit minim labore amet. Adipisicing duis voluptate dolor nisi velit ullamco eiusmod quis aliquip deserunt irure labore exercitation occaecat. Proident fugiat
                                            dolore ut fugiat proident. Et amet eiusmod elit ut dolore pariatur.
                                        </p>
                                        <div>
                                            <span class="text-base text-ubuy-gray500">Amount due:</span>
                                            <span class="text-sm font-medium">$2000</span>
                                        </div>
                                    </div>
                                </details>
                            </div>
                        </div> -->

                        <?php foreach($mile as $item){ ?>


                        <div class="milestone-timeline-content-wrapper xl:pl-16 pl-7 <?php $item['is_completed']==0 ? 'text-ubuy-blue' : 'completed'; ?>">
                            <div class="content">
                                <details class="text-ubuy-black">
                                    <summary>
                                        <h1 class="text-lg font-medium text-ubuy-black text-xxs"><?php echo ucfirst($item['title']); ?> </h1>
                                    </summary>
                                    <div>
                                        <p class="text-sm text-left w-4/5">
                                            <?php echo $item['description']; ?>
                                        </p>
                                        <div>
                                            <span class="text-base text-ubuy-gray500 text-xxxs">Amount due:</span>
                                            <span class="text-sm font-medium">N <?php echo number_format($item['amount']); ?></span>
                                        </div>
                                    </div>
                                    <?php if($item['is_completed'] == 0){ ?>
                                        <div class="flex flex-row items-end justify-end gap-3">
                                            <button class="text-white text-tinyer rounded px-3 py-1 bg-ubuy-positiveDefault">Confirm</button>
                                            <button class="text-white text-tinyer rounded px-3 py-1 bg-ubuy-negativeDefault">Decline</button>
                                        </div>
                                    <?php } ?>
                                </details>
                            </div>
                        </div>

                        <?php } ?>

                        <div class="milestone-timeline-content-wrapper xl:pl-16 pl-7 text-ubuy-gray500">
                            <div class="content text-ubuy-secondary">
                                <h1>Next Milestone</h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </main>
    <?php }elseif($_SESSION['user_role'] == 'pro'){ ?>
        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex w-full flex-col my-7 xl:pl-7 xl:pr-10 px-4 gap-y-6">
                        <div class="sm:flex hidden flex-row items-center justify-between w-full text-sm text-ubuy-secondary gap-4">
                            <div class="flex flex-row items-center gap-x-4 rounded-llg bg-white px-6 py-4">
                                <span class="whitespace-nowrap truncate">
                                    <?php echo $_GET['project']; ?>
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
                            <a href="bid-details.php?project_id=<?php echo $_GET['project_id']; ?>" class="flex flex-row items-center gap-x-4 rounded-llg bg-white px-6 py-4">
                                <span>
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 9L1 5L5 1" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="milestone-timeline w-full">

                            <?php 

                                foreach($mile as $item){ ?>

                                    <div class="milestone-timeline-content-wrapper xl:pl-16 pl-7 <?php $item['is_completed']==0 ? 'text-ubuy-blue' : 'completed'; ?>">
                                        <div class="content">
                                            <details class="text-ubuy-black">
                                                <summary>
                                                    <h1 class="text-lg font-medium text-ubuy-black text-xxs"><?php echo ucfirst($item['title']); ?> </h1>
                                                </summary>
                                                <div>
                                                    <p class="text-sm text-left w-4/5">
                                                        <?php echo $item['description']; ?>
                                                    </p>
                                                    <div>
                                                        <span class="text-base text-ubuy-gray500 text-xxxs">Amount due:</span>
                                                        <span class="text-sm font-medium">N<?php echo number_format($item['amount']); ?></span>
                                                    </div>
                                                </div>
                                                <?php if($item['is_completed'] == 0){ ?>
                                                <div class="flex flex-row items-end justify-end gap-3">
                                                    <button class="text-white text-xxxs rounded px-3 py-1 bg-ubuy-negativeDefault">Cancel</button>
                                                    <button class="text-white text-xxxs rounded px-3 py-1 bg-ubuy-blue">Edit</button>
                                                    <button class="text-white text-xxxs rounded px-3 py-1 bg-ubuy-positiveDefault">Done</button>
                                                </div>
                                                <?php } ?>
                                            </details>
                                        </div>
                                    </div>

                            <?php } ?>

                            

                            <!-- <div class="milestone-timeline-content-wrapper xl:pl-16 pl-7 text-ubuy-blue">
                                <div class="content">
                                    <details class="text-ubuy-black">
                                        <summary>
                                            <h1 class="text-lg font-medium text-ubuy-black">Landing Page Completed </h1>
                                        </summary>
                                        <div>
                                            <p class="text-sm text-left w-4/5">
                                                Id magna adipisicing adipisicing sint tempor. Velit proident minim eu Lorem deserunt velit ipsum mollit minim labore amet. Adipisicing duis voluptate dolor nisi velit ullamco eiusmod quis aliquip deserunt irure labore exercitation occaecat. Proident fugiat
                                                dolore ut fugiat proident. Et amet eiusmod elit ut dolore pariatur.
                                            </p>
                                            <div>
                                                <span class="text-base text-ubuy-gray500">Amount due:</span>
                                                <span class="text-sm font-medium">$2000</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-row items-end justify-end gap-3">
                                            <button class="text-ubuy-blue text-tinyer rounded px-3 py-1 bg-ubuy-gray400">Cancel</button>
                                            <button class="text-white text-tinyer rounded px-3 py-1 bg-ubuy-blue">Edit</button>
                                        </div>
                                    </details>
                                </div>
                            </div> -->

                            <div class="milestone-timeline-content-wrapper xl:pl-16 pl-7 text-ubuy-gray500">
                                    <button class="modal-open flex flex-row text-xxs text-white rounded-llg bg-ubuy-blue p-2">
                                        <span class="mr-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 5V19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span>Add Milestone</span>
                                    </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--Modal-->
        <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center" style="background-color: rgba(0, 0, 0, .7); z-index: 999999">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
            
            <div class="modal-container bg-white max-w-xl w-full md:max-w-xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
            
                <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                    <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                    <span class="text-sm">(Esc)</span>
                </div>

                <!-- Add margin if you want to see some of the overlay behind the modal-->
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-4 border-bottom">
                        <p class="text-2xl font-bold">Log a New Milestone</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                            </svg>
                        </div>
                    </div>
                    <hr>

                    <!--Body-->
                    <div class="flex flex-col items-center justify-center font-medium text-sm mt-5">
                        <form id="milestone-form" class="w-full">
                            <div class="w-full mb-10">
                                <label for="coin-quantity">Title</label>
                                <input type="text" name="milestone-title" id="milestone-title" class="mt-1.5 rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full" />
                            </div>
                            <div class="flex flex-col w-full mb-10">
                                <label for="dispute-details" class="text-sm font-medium text-ubuy-secondary mb-2.5">
                                    Description:
                                </label>
                                <textarea class="border bg-ubuy-gray400 border-ubuy-gray200 rounded-md p-5 resize-none text-sm h-36" type="text" name="milestone-description" id="milestone-description" placeholder="Enter the details of this milestone" spellcheck="false"></textarea>
                            </div>
                            <div class="flex md:flex-row flex-col w-full justify-between mb-10 gap-6">
                                <div class="flex flex-col md:w-1/2 w-full">
                                    <label for="task-budget">Amount (N)</label>
                                    <input type="number" id="milestone-amount" name="milestone-amount" class="w-full border rounded-md py-3 px-5 text-sm task-form-input" placeholder="10,000">
                                </div>
                                <div class="flex flex-col md:w-1/2 w-full">
                                    <label for="task-category">Due Date</label>
                                    <input type="date" name="milestone-due_date" id="milestone-due_date" class="w-full border border-gray-200 rounded-tr-md rounded-br-md appearance-none py-3 px-5 text-sm task-form-input" placeholder="26/10/2020">
                                </div>
                            </div>
                            <div class="mt-8 self-start">
                                <input type="hidden" name="project_id" id="project_id" value="<?php echo $_GET['project_id']; ?>" />
                                <button type="submit" class="text-sm text-white rounded-lg bg-ubuy-blue py-4 px-5 font-semibold shadow-card" id="addMilestoneBtn" >
                                    Add
                                </button>
                            </div>
                        </form>
                    </div>

                    <!--Footer-->
                    <!-- <div class="flex justify-end pt-2">
                    <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
                    <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
                    </div> -->
                    
                </div>
            </div>
        </div>
    <?php } ?>
<?php
    if($_SESSION['user_role'] == 'customer'){
        require_once 'inc/customer-footer.php';
    }elseif($_SESSION['user_role'] == 'pro'){
        require_once 'inc/pro-footer.php';
    }
?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#milestone-form").on("submit", function(e){
            e.preventDefault();
            var id = "addMilestoneBtn";
            $("#"+id).html("Please wait...");
            document.getElementById(id).disabled = true;
            $.ajax({
                type: "POST",
                url: "endpoints/log-milestone.php",
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                data: new FormData(this),
                beforeSend: function(){
                    $('#'+id).attr("disabled","disabled");
                    $('#'+id).css("opacity",".5");
                },
                success: function(data)
                {
                    console.log(data);
                    if(data.success == true){
                        toastr.success(data.message, "Success:", {timeOut: 7000});
                        setTimeout(function(){
                             window.location.reload();
                        }, 6000);
                       
                    }else{
                        let p = data.message;
                        toastr.error(p, "Error:", {timeOut: 8000});
                        document.getElementById(id).disabled = false;
                        $("#"+id).html("Verify");
                        $('#'+id).attr("disabled","");
                        $('#'+id).css("opacity","");
                    }
                }
            });
            return false;
        });
    });
</script>