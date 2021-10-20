<?php
include_once 'endpoints/constant.php';
if (isset($_SESSION['user_role'])) {
    if ($_SESSION['user_role'] == 'customer') {
        require_once 'inc/customer-header.php';
    } elseif ($_SESSION['user_role'] == 'pro') {
        require_once 'inc/pro-header.php';
    }

    $sponsor_list = $init->sponsor_list();
    $sponsor_list = json_decode($sponsor_list, true);
    $sponsor_list = isset($sponsor_list['sponsor_plans']) ? $sponsor_list['sponsor_plans']: "";

} else {
    session_destroy();
    unset($_SESSION['access_token']);
    header('Location: sign-in.php?error=You have to login!');
}
?>
        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex w-full flex-col my-7 pl-7 pr-10 gap-y-6">
                    <div class="flex flex-row items-center justify-between w-full text-sm text-ubuy-secondary gap-4">
                        <div class="flex flex-row items-center gap-x-4 rounded-llg bg-white px-6 py-4">
                            <span class="whitespace-nowrap truncate w-60">
                                <?php echo $_GET['project']; ?>
                            </span>
                            <span>
                                <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1.12134C-1.2258e-08 0.259419 0.520833 -0.279284 0.9375 0.151678L4.6875 4.03034C5.10417 4.4613 5.10417 5.5387 4.6875 5.96966L0.9375 9.84832C0.520834 10.2793 1.2258e-07 9.74058 1.10322e-07 8.87866L0 1.12134Z" fill="#A0A4A8" />
                                </svg>

                            </span>
                            <span class="whitespace-nowrap truncate">
                                Sponsor Task
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
                    <div class="flex flex-col gap-y-1 items-center justify-center my-5">
                        <h1 class="text-5xl text-ubuy-blue font-medium">Sponsor Tasks and Hire Faster</h1>
                        <span class="text-sm text-ubuy-secondary max-w-md text-center">Your Task will be more visible to Pros on top of the page with the sponsored task tags.</span>
                    </div>

                    <div class="hidden sm:inline-grid grid-flow-row gap-6 place-items-center text-center">
                        <div class="w-full bg-blue pt-8">
                            <div class="flex flex-col sm:flex-row justify-center mb-6 sm:mb-0">
                                <div class="sm:flex-1 lg:flex-initial lg:w-1/4 rounded-t-lg rounded-tr-none bg-white mt-4 flex flex-col">
                                    <div class="p-8 text-3xl font-bold text-center"><?php echo $sponsor_list[0]['name']; ?></div>
                                    <div class="border-0 border-grey-light border-t border-solid text-sm">

                                        <?php 

                                        $desc = json_decode($sponsor_list[0]['description'], true);

                                        foreach($desc as $item){ ?>
                                        <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                                            <?php echo $item; ?>
                                        </div>
                                        <?php } ?>
                                        <!-- <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                                            Email Broadcast
                                        </div>
                                        <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                                            U-assistant
                                        </div> -->
                                    </div>
                                    <div class="w-full text-center px-8 pt-8 text-xl mt-auto">
                                            N<?php echo number_format($sponsor_list[0]['amount']); ?>
                                        <span class="text-grey-light italic line-through text-xxs">
                                            N5,000
                                        </span>
                                    </div>
                                    <div class="text-center mt-10 mb-8 mt-auto">
                                        <div class="flex flex-row items-center justify-center">
                                            <button class="text-lg py-2 px-4 text-white bg-ubuy-blue rounded-llg text-xxs regularBtn" id="<?php echo $sponsor_list[0]['amount']; ?>~<?php echo $sponsor_list[0]['id']; ?>" onclick="sponsor_task(this.id)">Proceed to Pay</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 lg:flex-initial lg:w-1/4 rounded-t-lg bg-white mt-4 sm:-mt-4 shadow-lg z-30 flex flex-col">
                                <div class="w-full p-8 text-3xl font-bold text-center"><?php echo $sponsor_list[1]['name']; ?></div>
                                <div class="w-full border-0 border-grey-light border-t border-solid text-sm">
                                        <?php 

                                        $desc = json_decode($sponsor_list[1]['description'], true);

                                        foreach($desc as $item){ ?>
                                        <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                                            <?php echo $item; ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                <div class="w-full text-center px-8 pt-8 text-xl mt-auto">
                                        N<?php echo number_format($sponsor_list[1]['amount']); ?>
                                    <span class="text-grey-light italic line-through text-xxs">
                                        N7,500
                                    </span>
                                </div>
                                <div class="text-center mt-8 mb-8 mt-auto">
                                    <div class="flex flex-row items-center justify-center">
                                        <button class="text-lg py-2 px-4 text-white bg-ubuy-negativeDefault rounded-llg text-xxs premiumBtn" id="<?php echo $sponsor_list[1]['amount']; ?>~<?php echo $sponsor_list[1]['id']; ?>" onclick="sponsor_task(this.id)">Proceed to Pay</button>
                                    </div>
                                </div>
                                </div>
                                <div class="flex-1 lg:flex-initial lg:w-1/4 rounded-t-lg rounded-tl-none bg-white mt-4 flex flex-col">
                                    <div class="p-8 text-3xl font-bold text-center"><?php echo $sponsor_list[2]['name']; ?></div>
                                    <div class="border-0 border-grey-light border-t border-solid text-sm">
                                    <?php 

                                        $desc = json_decode($sponsor_list[2]['description'], true);

                                    foreach($desc as $item){ ?>
                                    <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                                        <?php echo $item; ?>
                                    </div>
                                    <?php } ?>

                                </div>
                                <div class="w-full text-center px-8 pt-8 text-xl mt-auto">
                                        N<?php echo number_format($sponsor_list[2]['amount']); ?>
                                    <span class="text-grey-light italic line-through text-xxs">
                                        N12,000
                                    </span>
                                </div>
                                <div class="text-center mt-8 mb-8 mt-auto">
                                    <div class="flex flex-row items-center justify-center">
                                        <button class="text-lg py-2 px-4 text-white bg-ubuy-positiveDefault rounded-llg text-xxs ultimateBtn" id="<?php echo $sponsor_list[2]['amount']; ?>~<?php echo $sponsor_list[2]['id']; ?>" onclick="sponsor_task(this.id)">Proceed to Pay</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                    </div>
                    
                </div>
            </div>
        </main>
        

<?php if ($_SESSION['user_role'] == 'customer') {
    require_once 'inc/customer-footer.php';
} elseif ($_SESSION['user_role'] == 'pro') {
    require_once 'inc/pro-footer.php';
}
?>
<script src="https://checkout.flutterwave.com/v3.js"></script>
<script type="text/javascript">
    function sponsor_task(dat){

        var data = dat.split("~");
        var amt = data[0];
        var sponsor_id = data[1];

        FlutterwaveCheckout({
            public_key: "FLWPUBK_TEST-21aa76d64f8121e5fd4548c0ee6a753d-X",
            tx_ref: "<?php echo rand(000000000, 999999999); ?>",
            amount: amt,
            currency: "NGN",
            country: "NG",
            payment_options: " ",
            customer: {
                email: "<?php echo $userData['email']; ?>",
                phone_number: "<?php echo $userData['number']; ?>",
                name: "<?php echo $userData['first_name']; ?>",
            },
            callback: function (data) { // specified callback function
                console.log(data.flw_ref);
                if(data.status == "successful"){
                    $.ajax({
                        type: "POST",
                        url: "endpoints/sponsor-task.php",
                        dataType: 'json',
                        data: {
                            project_id : <?php echo $_GET['project_id']; ?>,
                            sponsor_id : sponsor_id
                        },
                        success: function(data)
                        {
                            console.log(data);
                            if(data.success == true){
                                toastr.success("Successful!", "Success:", {timeOut: 7000});
                                setTimeout(function(){
                                    window.location.href = "dashboard.php";
                                }, 3000);
                            }else if(data.error == "Validation Exception"){
                                let p = data.error_message;
                                for (var key in p) {
                                    toastr.error(p[key], "Error:", {timeOut: 8000});
                                }
                                document.getElementById("submitBidBtn").disabled = false;
                                $("#submitBidBtn").html("Create an account");
                            }
                        }
                    });
                    return false;                    
                }else{
                    toastr.error("Transaction could not be completed, try again!", {timeOut: 5000});
                    setTimeout(function(){
                        window.location.reload();
                    }, 5000);
                }
            },
            customizations: {
                title: "UBUY NG",
                description: "Payment for task",
                logo: "https://ubuy.ng/mvp_ui/images/logo.png",
            },
        });
    }
</script>