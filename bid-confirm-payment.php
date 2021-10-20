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


$singleProj = $init->getSingleProjectPro($_GET['project-id'], $_GET['pro-id']);
$singleP = json_decode($singleProj, true);
$singleProject = isset($singleP['project'][0]) ? $singleP['project'][0] : "";

$singleBid = isset($singleP['bid']) ? $singleP['bid'] : "";

$pro = isset($singleP['pro'][0]) ? $singleP['pro'][0] : "";

$fav = $init->countFavorite($_GET['pro-id']);
$fav = json_decode($fav, true);

?>
        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full sm:bg-transparent bg-white">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="flex w-full flex-col lg:my-7 my-4 xl:pl-7 xl:pr-10 px-4 sm:gap-y-6">

                    <div class="sm:flex hidden flex-row items-center justify-between w-full text-sm text-ubuy-secondary gap-4">
                        <div class="flex flex-row items-center gap-x-4 rounded-llg bg-white px-6 py-4">
                            <span class="whitespace-nowrap truncate">
                                <?php echo ucfirst($singleProject['project_title']); ?>
                            </span>
                            <span>
                                <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1.12134C-1.2258e-08 0.259419 0.520833 -0.279284 0.9375 0.151678L4.6875 4.03034C5.10417 4.4613 5.10417 5.5387 4.6875 5.96966L0.9375 9.84832C0.520834 10.2793 1.2258e-07 9.74058 1.10322e-07 8.87866L0 1.12134Z" fill="#A0A4A8" />
                                </svg>

                            </span>
                            <span class="whitespace-nowrap truncate">
                                <?php echo $pro['last_name']; ?>’s Bid
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

                    <div class="sm:hidden flex flex-col">
                        <h2 class="text-sm text-ubuy-inactive text-left mb-4">Task Summary</h2>
                        <details class="rounded-llg bg-white shadow-card p-5">
                            <summary>
                                <h1 class="text-base text-ubuy-secondary font-medium"> <?php echo ucfirst($singleProject['project_title']); ?></h1>
                                <div class="flex flex-row items-center gap-x-1">
                                    <span class="text-tiny">Deadline:</span>
                                    <span class="text-sm font-medium text-ubuy-secondary"><?php echo ucfirst($singleProject['due_date']); ?></span>
                                </div>
                            </summary>
                            <div class="flex flex-col justify-start text-xs text-ubuy-secondary">
                                <small>Details:</small>
                                <?php echo ucfirst($singleProject['project_message']); ?>
                            </div>
                        </details>
                    </div>

                    <div class="flex sm:hidden flex-col items-start justify-between w-full text-sm text-ubuy-secondary gap-4 mt-4">
                        <h2 class="text-sm text-ubuy-inactive text-left">Bid Info</h2>
                        <div class="flex flex-row gap-x-3 p-5 relative items-center text-ubuy-secondary bg-white rounded-llg shadow-card w-full">
                            <div>
                                <img src="<?php echo $pro['public_url']; ?>" alt="avatar" class="avatar rounded-full" />
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-ubuy-black text-sm"> <?php echo $pro['first_name'].' '.ucfirst($pro['last_name'][0]); ?>.</h1>
                                <span class="text-tiny "><?php echo $singleProject['sub_category_name']; ?></span>
                                <div class="flex flex-row items-center gap-1">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)" />
                                        <defs>
                                            <linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFDD00" />
                                                <stop offset="1" stop-color="#FBB034" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)" />
                                        <defs>
                                            <linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFDD00" />
                                                <stop offset="1" stop-color="#FBB034" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)" />
                                        <defs>
                                            <linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFDD00" />
                                                <stop offset="1" stop-color="#FBB034" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)" />
                                        <defs>
                                            <linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFDD00" />
                                                <stop offset="1" stop-color="#FBB034" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)" />
                                        <defs>
                                            <linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFDD00" />
                                                <stop offset="1" stop-color="#FBB034" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <span class="text-xs">15</span>

                                </div>
                                <div class="text-tiny mt-2">
                                    <span>0</span>
                                    <span>jobs completed</span>
                                </div>
                                <div class="mt-2">
                                    <span>Bid: </span>
                                    <span class="text-ubuy-blue font-semibold">N<?php echo ucfirst($singleProject['budget']); ?></span>
                                </div>
                            </div>
                            <button class="absolute right-5 top-5">
                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.8406 2.61012C19.3299 2.09912 18.7234 1.69376 18.056 1.4172C17.3885 1.14064 16.6731 0.998291 15.9506 0.998291C15.2281 0.998291 14.5127 1.14064 13.8453 1.4172C13.1778 1.69376 12.5714 2.09912 12.0606 2.61012L11.0006 3.67012L9.94061 2.61012C8.90892 1.57842 7.50964 0.998826 6.05061 0.998826C4.59157 0.998826 3.1923 1.57842 2.16061 2.61012C1.12892 3.64181 0.549316 5.04108 0.549316 6.50012C0.549316 7.95915 1.12892 9.35842 2.16061 10.3901L3.22061 11.4501L11.0006 19.2301L18.7806 11.4501L19.8406 10.3901C20.3516 9.87936 20.757 9.27293 21.0335 8.60547C21.3101 7.93801 21.4524 7.2226 21.4524 6.50012C21.4524 5.77763 21.3101 5.06222 21.0335 4.39476C20.757 3.7273 20.3516 3.12087 19.8406 2.61012Z"
                                        fill="#FB4E4E" />
                                </svg>

                            </button>
                        </div>
                        <h2 class="text-sm text-ubuy-inactive text-left">Payment info</h2>
                    </div>



                    <div class="flex xl:flex-row flex-col w-full xl:gap-x-5 gap-y-5">
                        <div class="flex flex-col xl:w-2/3 w-full">
                            <div class="hidden sm:flex flex-row">
                                <div class="relative w-full bg-white rounded-llg flex flex-col justify-start p-5 min-h-220">
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
                                    <p class="text-sm font-normal text-left w-11/12">
                                    <?php echo ucfirst($singleProject['project_message']); ?>
                                    </p>
                                </div>
                            </div>


                            <div class="sm:flex flex-row gap-x-6 my-6 w-full hidden">
                                <div class="flex flex-row gap-x-3 p-5 relative items-center text-ubuy-secondary bg-white rounded-llg shadow-card">
                                    <div>
                                        <img src="<?php echo $pro['public_url']; ?>" alt="avatar" class="avatar rounded-full" />
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="text-ubuy-black text-sm"><?php echo $pro['last_name'].' '.$pro['first_name'][0]; ?>.</h1>
                                        <span class="text-tiny "><?php echo $singleProject['sub_category_name']; ?></span>
                                        <div class="flex flex-row items-start gap-1">
                                            <div class="ratings text-xs xl:text-sm">
                                                <div class="empty-stars mx-auto"></div>
                                                <!-- Add the ratings percentage as the width -->
                                                <?php 
                                                    $rate = ($pro['average_rating']*100)/5;
                                                ?>
                                                <div class="full-stars" style="width:<?php echo $rate; ?>%"></div>
                                            </div>

                                        </div>
                                        <div class="text-tiny mt-2">
                                            <span>0</span>
                                            <span>jobs completed</span>
                                        </div>
                                    </div>
                                    
                                        <?php if($fav['count'] == 1){ ?>
                                        <button class="absolute right-5 top-5">
                                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.8406 2.61012C19.3299 2.09912 18.7234 1.69376 18.056 1.4172C17.3885 1.14064 16.6731 0.998291 15.9506 0.998291C15.2281 0.998291 14.5127 1.14064 13.8453 1.4172C13.1778 1.69376 12.5714 2.09912 12.0606 2.61012L11.0006 3.67012L9.94061 2.61012C8.90892 1.57842 7.50964 0.998826 6.05061 0.998826C4.59157 0.998826 3.1923 1.57842 2.16061 2.61012C1.12892 3.64181 0.549316 5.04108 0.549316 6.50012C0.549316 7.95915 1.12892 9.35842 2.16061 10.3901L3.22061 11.4501L11.0006 19.2301L18.7806 11.4501L19.8406 10.3901C20.3516 9.87936 20.757 9.27293 21.0335 8.60547C21.3101 7.93801 21.4524 7.2226 21.4524 6.50012C21.4524 5.77763 21.3101 5.06222 21.0335 4.39476C20.757 3.7273 20.3516 3.12087 19.8406 2.61012Z"
                                                fill="#FB4E4E" />
                                            </svg> 
                                        </button>
                                        <?php }else{ ?>
                                            <button class="absolute right-5 top-5" id="addFavBtn" onclick="addProFav(<?php echo $pro['id']; ?>)"><img src="assets/images/heart.svg" width="18" height="18" /></button>
                                        <?php } ?>

                                   
                                </div>

                                <div class="bg-white xl:p-10 p-5 flex flex-col justify-between items-start rounded-llg flex-auto">
                                    <h2 class="text-ubuy-black text-2xl">N<?php echo number_format($singleBid[0]['bid_amount'], 2); ?></h2>
                                    <span class="text-ubuy-gray500 text-sm">Amount</span>
                                </div>
                                <div class="bg-white xl:p-10 p-5 flex flex-col justify-between items-start rounded-llg flex-auto">
                                    <h2 class="text-ubuy-black text-2xl"><?php 
                                            $now = time(); // or your date as well
                                            $your_date = strtotime($singleBid[0]['due_date']);
                                            $datediff = $now - $your_date;
                                            
                                            echo -(round($datediff / (60 * 60 * 24)));
                                            //echo (strtotime($bid['due_date']) - strtotime(date("Y/m/d"))) / (60 * 60 * 24); ?> Days</h2>
                                    <span class="text-ubuy-gray500 text-sm">Task Duration</span>
                                </div>
                            </div>

                            <div class="bg-white rounded-llg sm:flex hidden flex-col justify-between items-center p-5 text-ubuy-black w-full">

                                <h1 class="text-left self-start text-base mb-5">Bid Information</h1>
                                <p class="text-sm">
                                    <?php echo $singleBid[0]['bid_message']; ?>
                                </p>
                            </div>

                        </div>
                        <div class="xl:w-1/3 w-full flex flex-col gap-5">
                            <button onclick="onOpenPopup('apply-promo-code-popup')" class="w-full text-sm font-semibold text-center sm:rounded-llg rounded-3xl text-ubuy-blue bg-white border border-ubuy-blue sm:py-4 py-3 focus:outline-none sm:shadow-none shadow-card">Apply Coupon</button>


                            <div class="flex flex-row items-center justify-between rounded-llg p-5 bg-white text-sm text-ubuy-black">
                                <!-- <span class="font-semibold">UBUY-10</span>
                                <span>10% off entire task fee</span> -->
                                <span>No coupon available</span>
                            </div>
                            <div class="flex flex-col rounded-llg bg-white px-5 py-9 text-ubuy-gray500 sm:shadow-none shadow-card">
                                <ul class="flex flex-col gap-3 text-sm">
                                    <li class="flex flex-row justify-between w-full items-center">
                                        <span>Payment Total</span>
                                        <span>N<?php echo number_format($singleBid[0]['bid_amount'], 2); ?></span>
                                    </li>
                                    <li class="flex flex-row justify-between w-full items-center">
                                        <span>UPay Balance</span>
                                        <span>N<?php echo number_format($pro['upay_account'], 2); ?></span>
                                    </li>
                                    <li class="flex flex-row justify-between w-full items-center">
                                        <span>Promo Discount</span>
                                        <span>N0.00</span>
                                    </li>
                                    <li class="flex flex-row justify-between w-full items-center text-ubuy-negativeDefault">
                                        <span>Transaction Fee(2.5% +N100)</span>
                                        <span>N<?php echo number_format(($singleBid[0]['bid_amount'] * 0.025) + 100, 2);?></span>
                                    </li>
                                </ul>
                                <hr class="w-full my-5" />
                                <div class="flex flex-row justify-between items-center">
                                    <span>Total amount to pay</span>
                                    <span class="text-base text-ubuy-blue font-medium">N<?php echo number_format($singleBid[0]['bid_amount'] + (($singleBid[0]['bid_amount'] * 0.025) + 100), 2); ?></span>
                                    <input type="hidden" id="taskTotalAmt" name="taskTotalAmt" value="<?php echo $singleBid[0]['bid_amount'] + (($singleBid[0]['bid_amount'] * 0.025) + 100); ?>" />
                                </div>
                            </div>
                            <button class="w-full text-center sm:rounded-llg rounded-3xl text-white bg-ubuy-positiveDefault sm:py-4 py-3 focus:outline-none" id="makePaymentBtn" onclick="makePayment(this.id)">Pay Now</button>

                        </div>


                    </div>
                </div>
            </div>
        </main>
        <!-- Apply Promo code Popup -->
        <div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6" id="apply-promo-code-popup" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
            <div class="ubuy-post-task-form-container flex flex-col items-center justify-around py-16 px-20 rounded-3xl shadow bg-white relative max-w-lg w-full">
                <button class="absolute right-5 top-5" onclick="onClosePopup('apply-promo-code-popup')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div>
                    <img src="assets/images/promo-code-icon.png" alt="">
                </div>
                <div class="flex flex-col mt-10 items-center justify-center gap-y-3">
                    <input type="text" name="promo-code" id="promo-code" class="text-lg border bg-ubuy-gray400 border-ubuy-gray200  rounded-md py-3 px-5 w-full text-center" placeholder="Type Code here">
                    <span class="text-ubuy-gray500">This promo code is invalid</span>
                    <!-- Conditionnal display -->
                    <!-- <span class="text-ubuy-blue">10% off entire task fee</span> -->
                </div>
                <div class="mt-8 w-full flex flex-col items-center justify-center">

                    <button class="w-2/5 text-sm text-white rounded-3xl bg-ubuy-blue py-4 px-5 font-semibold shadow-card">
                        Apply
                    </button>


                </div>
            </div>
        </div>
        <!-- End  Apply Promo code Popup -->
        <?php
if($_SESSION['user_role'] == 'customer'){
    require_once 'inc/customer-footer.php';
}elseif($_SESSION['user_role'] == 'pro'){
    require_once 'inc/pro-footer.php';
}
?>
<script src="https://checkout.flutterwave.com/v3.js"></script>
<script type="text/javascript">
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
    });

    function makePayment(id){
        $("#"+id).html("Processing...");
        document.getElementById(id).disabled = true;
        FlutterwaveCheckout({
            public_key: "FLWPUBK_TEST-21aa76d64f8121e5fd4548c0ee6a753d-X",
            tx_ref: "<?php echo rand(000000000, 999999999); ?>",
            amount: $("#taskTotalAmt").val(),
            currency: "NGN",
            country: "NG",
            payment_options: " ",
            customer: {
                email: "<?php echo $userData['email']; ?>",
                phone_number: "<?php echo $userData['number']; ?>",
                name: "<?php echo $userData['first_name']; ?>",
            },
            callback: function (data) { // specified callback function
                console.log(data);

                if(data.status == "successful"){
                    finalizePayment(<?php echo $singleBid[0]['id']; ?>);
                }else{
                    toastr.error("Transaction could not be completed, try again!", {timeOut: 5000});
                    window.location.reload();
                }
            },
            customizations: {
                title: "UBUY NG",
                description: "Payment for task",
                logo: "https://ubuy.ng/mvp_ui/images/logo.png",
            },
        });
    }

    function finalizePayment(bid_id){
        var url = "endpoints/pay_task.php";
        $.ajax({
            type: "POST",
            url: url,
            dataType: 'json',
            data: {
                "bid_id" : bid_id
            },
            success: function(data)
            {
                console.log(data);
                if(data.success == true){
                    toastr.success("You have successfully hired <?php echo $pro['last_name']; ?>!", "Success:", {timeOut: 7000});
                    setTimeout(function(){
                        window.location.href = "task.php";
                    }, 5000);
                }else{
                    let p = data.error_message;
                    for (var key in p) {
                        toastr.error(p[key], "Error:", {timeOut: 8000});
                    }
                    document.getElementById(id).disabled = false;
                    $("#updateBtn").html("Post Task");
                }
            }
        });
        return false;
    }

    function addProFav(pro_id){
        toastr.warning("please wait...");
        document.getElementById("addFavBtn").disabled = true;
        var url = "endpoints/add-fav.php";
        $.ajax({
            type: "POST",
            url: url,
            dataType: 'json',
            data: {
                "pro_id" : pro_id
            },
            success: function(data)
            {
                console.log(data);
                if(data.success == true){
                    toastr.success("You added this professional to your favourite!", "Success:", {timeOut: 7000});
                    setTimeout(function(){
                        window.location.reload();
                    }, 5000);
                }else{
                    let p = data.error_message;
                    for (var key in p) {
                        toastr.error(p[key], "Error:", {timeOut: 8000});
                    }
                    document.getElementById("addFavBtn").disabled = false;
                }
            }
        });
        return false;
    }
    
</script>
