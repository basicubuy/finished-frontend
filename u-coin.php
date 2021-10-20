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
?>
        <!-- Sidebar end -->
        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="my-0 mx-auto w-full xl:pl-6 py-6 xl:pr-8 sm:px-5 px-4 flex flex-col xl:gap-y-5 gap-y-4">
                    <div class="hidden sm:flex flex-row flex-wrap sm:flex-nowrap xl:gap-x-6 gap-x-4">
                        <div class="flex flex-row items-center sm:w-2/3 w-full bg-white shadow-card px-9 py-5 mb-5 sm:mb-0 rounded-lg">
                            <div class="w-7/12">
                                <h1 class="text-2xl font-medium mb-2">U-Credit</h1>
                                <p class="text-ubuy-black xl:text-sm text-xs">
                                    UCredit coins grants you access to submit bids to all kinds of tasks available on Ubuy Services so you can earn without limits .
                                </p>
                                <button onclick="onOpenPopup('buy-ucoin')" class="flex flex-row items-center bg-ubuy-blue py-2 px-3.5 gap-x-6 rounded-md mt-6">
                                    <span class="text-base font-semibold text-white">Buy Coins</span>
                                </button>
                            </div>
                            <div class="w-5/12 flex items-center justify-end">
                                <img alt="u-credit-hero" src="assets/images/u-credit-hero.jpeg">
                            </div>
                        </div>
                        <div class="sm:w-1/3 w-full flex flex-col text-white relative">
                            <div class="rounded-llg flex-1 bg-white sm:flex-1/2 md:flex-1/4 flex flex-row items-center justify-between sm:p-5 p-3 cursor-pointer border hover:border-ubuy-yellow300">
                                <div class="rounded-full flex-shrink">
                                    <svg class="w-12 sm:w-16" width="71" height="70" viewBox="0 0 71 70" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <path
                                            d="M0.499519 45.7529V53.7228C0.499519 56.4296 7.71749 58.6853 16.5896 58.6853C25.4617 58.6853 32.5293 56.5048 32.5293 53.7981V52.8959L32.6797 46.5801H32.6046C31.4016 48.911 24.785 50.7155 16.8153 50.7155C8.84548 50.7155 0.649906 48.4599 0.649906 45.7531H0.499519V45.7529Z"
                                            fill="#E2A63B" />
                                        <path
                                            d="M17.0415 16.1289V24.0236H17.1919C17.1919 26.8055 24.6354 28.986 33.4324 28.986C36.8158 29.0611 40.2745 28.6852 43.5827 27.8581L43.7331 28.0085C45.3873 26.6552 47.2669 25.6026 49.2969 24.9259V24.7755L49.5225 16.4297C48.9962 18.986 42.0037 21.0161 33.5075 21.0161C25.0113 21.0161 17.1919 18.8356 17.1919 16.1289H17.0415Z"
                                            fill="#F4B844" />
                                        <path
                                            d="M17.0417 16.2792C17.0417 18.9859 24.4852 21.1663 33.3573 21.1663C42.2294 21.1663 48.921 19.1363 49.4473 16.58C49.4473 16.5048 49.5225 16.3544 49.5225 16.2792C49.5225 13.5725 42.3045 11.3168 33.3571 11.3168C24.41 11.2416 17.0417 13.4972 17.0417 16.2792Z"
                                            fill="#FEDB41" />
                                        <path
                                            d="M32.6055 46.5802L32.6807 44.926L32.8311 38.1592C32.3048 40.7156 25.3123 42.7456 16.8161 42.7456C8.3199 42.7456 0.801147 40.5652 0.575634 37.9336H0.500511V45.7531H0.650898C0.650898 48.4598 7.94413 50.7155 16.8162 50.7155C25.6882 50.7154 31.4024 48.911 32.6055 46.5802Z"
                                            fill="#F4B844" />
                                        <path d="M43.3564 51.6174C41.3264 49.7377 39.7474 47.3317 38.9205 44.7002H38.5446C36.8904 44.8506 35.2363 44.9257 33.4317 44.9257H32.6799V46.5798L32.5296 52.8956H33.3566C36.6649 52.9708 39.8979 52.5948 43.1309 51.843L43.3564 51.6174Z" fill="#E2A63B" />
                                        <path
                                            d="M32.6052 37.5574V37.9333L32.4548 44.9258H33.2067C35.0864 44.9258 36.8158 44.8506 38.4698 44.7002H38.8457C38.3194 43.1214 38.0939 41.4672 38.0939 39.8131C38.0939 38.6852 38.2443 37.6327 38.4698 36.5801H38.0939C36.515 36.7305 34.936 36.8056 33.2067 36.8056L32.5301 37.1815C32.6052 37.3317 32.6052 37.4821 32.6052 37.5574Z"
                                            fill="#F4B844" />
                                        <path
                                            d="M43.5822 27.858C40.2739 28.6851 36.8154 29.061 33.4318 28.9859C24.635 28.9859 17.1914 26.8054 17.1914 24.0234H17.041V32.8955C25.2364 32.8955 31.9281 34.8505 32.7552 37.3315L33.4318 36.9556C35.086 36.9556 36.6648 36.8805 38.1686 36.7301H38.5445C39.2212 33.2714 41.0257 30.1888 43.7324 27.9331L43.5822 27.858Z"
                                            fill="#E2A63B" />
                                        <path
                                            d="M39.1141 35.4522C39.8659 31.9936 41.7457 28.8358 44.4524 26.505C46.1066 25.0013 48.0615 23.9487 50.1666 23.3471C51.6704 22.8208 53.3245 22.5953 54.9034 22.5953C63.8508 22.5199 71.144 29.6628 71.2191 38.61C71.2943 47.5572 64.1516 54.8504 55.2042 54.9256C51.0688 54.9256 47.1591 53.4218 44.0765 50.6398C41.9712 48.6849 40.3923 46.2039 39.5653 43.497C39.039 41.9181 38.8135 40.3391 38.8135 38.685C38.8133 37.6327 39.1141 36.5048 39.1141 35.4522Z"
                                            fill="#FEDB41" />
                                        <path
                                            d="M0.575634 37.783V37.9334C0.801144 40.565 8.09438 42.7454 16.8161 42.7454C25.5378 42.7454 32.3048 40.7154 32.8311 38.1591V37.7831C32.8311 37.6328 32.8311 37.4824 32.7559 37.332C31.9289 34.8508 25.2372 32.896 17.0418 32.896H16.8162C7.94399 32.8959 0.575634 35.0763 0.575634 37.783Z"
                                            fill="#FEDB41" />
                                        <path
                                            d="M58.5476 30.6538V40.7345C58.5476 41.933 58.2361 42.8356 57.6131 43.4424C56.9749 44.0492 56.0935 44.3526 54.9691 44.3526C53.8294 44.3526 52.9481 44.0492 52.3251 43.4424C51.6869 42.8356 51.3678 41.933 51.3678 40.7345V30.6538H48.7694V33.5321H45.1716V36.2664H48.7694V39.1447H45.1716V41.879H48.8577C48.9808 42.6648 49.2325 43.3604 49.6127 43.9658C50.175 44.8608 50.9271 45.5283 51.8692 45.9683C52.8113 46.4082 53.8522 46.6282 54.9919 46.6282C56.1315 46.6282 57.1724 46.4082 58.1145 45.9683C59.0414 45.5283 59.7784 44.8608 60.3254 43.9658C60.6954 43.3604 60.9403 42.6648 61.06 41.879H64.8877V39.1447H61.146V36.2664H64.8877V33.5321H61.146V30.6538H58.5476Z"
                                            fill="#F4B844" />
                                    </svg>

                                </div>
                                <div class="flex flex-col items-center justify-center gap-y-4">
                                    <span class="text-ubuy-yellow300 md:text-3xl text-2xl font-medium"><?php echo isset($userData["ucoin"]) ? $userData["ucoin"] : "0"; ?></span>
                                    <span class="text-ubuy-secondary md:text-sm text-xs font-normal text-center">Available Coins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:hidden flex flex-col justify-center items-center rounded-llg bg-white p-4">
                        <div class="flex flex-row">
                            <div class="mr-4">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M-0.000110626 39.2168V46.0482C-0.000110626 48.3682 6.18672 50.3017 13.7914 50.3017C21.3961 50.3017 27.454 48.4327 27.454 46.1127V45.3394L27.5829 39.9258H27.5185C26.4874 41.9237 20.816 43.4704 13.9848 43.4704C7.15357 43.4704 0.128792 41.5371 0.128792 39.2169H-0.000110626V39.2168Z"
                                        fill="#E2A63B" />
                                    <path
                                        d="M14.178 13.8247V20.5916H14.3069C14.3069 22.9761 20.687 24.8451 28.2273 24.8451C31.1274 24.9094 34.0919 24.5872 36.9276 23.8783L37.0565 24.0072C38.4743 22.8472 40.0855 21.945 41.8255 21.365V21.2361L42.0188 14.0825C41.5677 16.2737 35.5742 18.0137 28.2917 18.0137C21.0092 18.0137 14.3069 16.1448 14.3069 13.8247H14.178Z"
                                        fill="#F4B844" />
                                    <path d="M14.1782 13.9538C14.1782 16.2738 20.5584 18.1428 28.163 18.1428C35.7677 18.1428 41.5034 16.4027 41.9545 14.2116C41.9545 14.1472 42.0189 14.0183 42.0189 13.9538C42.0189 11.6337 35.8321 9.70029 28.1629 9.70029C20.494 9.6359 14.1782 11.5692 14.1782 13.9538Z"
                                        fill="#FEDB41" />
                                    <path
                                        d="M27.5187 39.9255L27.5831 38.5077L27.712 32.7076C27.2609 34.8987 21.2674 36.6388 13.9849 36.6388C6.70247 36.6388 0.257832 34.7698 0.064537 32.5142H0.000144958V39.2166H0.129047C0.129047 41.5367 6.38039 43.4701 13.9851 43.4701C21.5896 43.47 26.4875 41.9234 27.5187 39.9255Z"
                                        fill="#F4B844" />
                                    <path d="M36.7344 44.2435C34.9943 42.6323 33.6409 40.57 32.9321 38.3145H32.6099C31.1921 38.4434 29.7742 38.5077 28.2275 38.5077H27.5831V39.9256L27.4542 45.3391H28.1631C30.9988 45.4035 33.7699 45.0813 36.5411 44.4369L36.7344 44.2435Z" fill="#E2A63B" />
                                    <path
                                        d="M27.5187 32.1922V32.5144L27.3898 38.5079H28.0343C29.6454 38.5079 31.1278 38.4435 32.5455 38.3146H32.8677C32.4166 36.9613 32.2233 35.5435 32.2233 34.1256C32.2233 33.1589 32.3522 32.2567 32.5455 31.3545H32.2233C30.87 31.4834 29.5165 31.5478 28.0343 31.5478L27.4543 31.87C27.5187 31.9988 27.5187 32.1277 27.5187 32.1922Z"
                                        fill="#F4B844" />
                                    <path
                                        d="M36.9277 23.8786C34.0921 24.5875 31.1276 24.9097 28.2274 24.8453C20.6873 24.8453 14.307 22.9764 14.307 20.5918H14.1781V28.1965C21.2028 28.1965 26.9385 29.8721 27.6474 31.9987L28.2274 31.6765C29.6453 31.6765 30.9986 31.6121 32.2875 31.4832H32.6097C33.1897 28.5187 34.7365 25.8764 37.0565 23.943L36.9277 23.8786Z"
                                        fill="#E2A63B" />
                                    <path
                                        d="M33.0977 30.3874C33.7421 27.4229 35.3534 24.7162 37.6734 22.7184C39.0913 21.4294 40.7669 20.5272 42.5713 20.0116C43.8603 19.5605 45.2781 19.3672 46.6314 19.3672C54.3006 19.3026 60.5519 25.425 60.6163 33.0941C60.6807 40.7631 54.5584 47.0145 46.8892 47.0788C43.3446 47.0788 39.9935 45.7899 37.3512 43.4054C35.5467 41.7297 34.1933 39.6031 33.4844 37.2829C33.0333 35.9296 32.84 34.5762 32.84 33.1583C32.8399 32.2564 33.0977 31.2896 33.0977 30.3874Z"
                                        fill="#FEDB41" />
                                    <path
                                        d="M0.0644112 32.3852V32.5141C0.257708 34.7697 6.50905 36.6387 13.9848 36.6387C21.4606 36.6387 27.2608 34.8986 27.7119 32.7075V32.3853C27.7119 32.2564 27.7119 32.1275 27.6475 31.9986C26.9386 29.8718 21.2029 28.1963 14.1782 28.1963H13.9849C6.38014 28.1962 0.0644112 30.0651 0.0644112 32.3852Z"
                                        fill="#FEDB41" />
                                    <path
                                        d="M49.7548 26.2744V34.915C49.7548 35.9423 49.4878 36.7159 48.9538 37.2361C48.4068 37.7562 47.6514 38.0163 46.6875 38.0163C45.7107 38.0163 44.9553 37.7562 44.4213 37.2361C43.8742 36.7159 43.6007 35.9423 43.6007 34.915V26.2744H41.3735V28.7415H38.2897V31.0852H41.3735V33.5523H38.2897V35.896H41.4493C41.5547 36.5696 41.7705 37.1658 42.0964 37.6847C42.5783 38.4519 43.223 39.024 44.0305 39.4011C44.8381 39.7782 45.7302 39.9667 46.7071 39.9667C47.6839 39.9667 48.5761 39.7782 49.3836 39.4011C50.1781 39.024 50.8098 38.4519 51.2787 37.6847C51.5958 37.1658 51.8057 36.5696 51.9083 35.896H55.1892V33.5523H51.982V31.0852H55.1892V28.7415H51.982V26.2744H49.7548Z"
                                        fill="#F4B844" />
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-ubuy-yellow300 text-3xl font-medium">10</span>
                                <span class="text-xs">
                                    Available Coins
                                </span>
                            </div>
                        </div>
                        <div class="p-3 text-ubuy-gray500 border-t border-ubuy-gray300 text-center w-4/5 mx-auto">
                            UCredit coins grants you access to submit bids to all kinds of tasks available on Ubuy Services so you can earn without limits .
                        </div>
                        <a href="/" class="text-ubuy-blue text-sm">learn more</a>
                    </div>

                    <div>
                        <div class="w-full flex flex-col mt-10">
                            <div class="mb-5 text-ubuy-black text-xs md:text-base lg:text-lg">
                                <label class="mr-2">Showing:</label>
                                <select class="bg-white rounded px-2 py-1">
                                    <option class="" value="" selected>
                                        All Credit History
                                    </option>
                                </select>
                            </div>
                            <div class="hidden sm:flex flex-row flex-wrap sm:flex-nowrap xl:gap-x-6 gap-x-4">
                                <div class="w-full xl:w-3/5 bg-white rounded-llg shadow-card sm:block hidden">
                                    <table class="table-auto text-secondary font-normal text-xxs w-full">
                                        <thead>
                                            <tr class="border-b border-gray-200">
                                                <th class="text-left w-40 p-5">Transaction Info</th>
                                                <th class="text-left w-52 py-5 pr-5">Task Details</th>
                                                <th class="text-left w-28 py-5 pr-5">Amount</th>
                                                <th class="text-left w-32 py-5 pr-5">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody id="upayBody">

                                            <tr id="loadLi">
                                                <td colspan="7" class="text-center">
                                                    <button class="text-ubuy-blue py-2">
                                                        <img src="assets/images/loader.gif" width="40" height="40" class="" /> 
                                                    </button>
                                                </td>
                                            </tr>


                                            <!-- <tr class="border-b border-gray-200 cursor-pointer hover:bg-ubuy-gray400">
                                                <td class="text-left w-40 p-5">Submitted task bid</td>
                                                <td class="text-left w-52 py-5 pr-5">My Website Redesign and Redevelopment</td>
                                                <td class="text-left w-28 py-5 pr-5 text-ubuy-negativeDefault">-10 Coins</td>
                                                <td class="text-left w-32 py-5 pr-5">Wed | May 6, 2020 8.45AM</td>
                                            </tr> -->
                                            

                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    <button class="text-ubuy-blue py-2">
                                                        Load More
                                                    </button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>

                                <div class="hidden xl:flex flex-col rounded-llg bg-white px-5 py-4 shadow-card w-2/5 items-start">
                                    <h1 class="font-medium text-ubuy-blue text-left mb-4">About U-Credit</h1>
                                    <p class="text-sm text-ubuy-secondary mb-6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec dolor, volutpat accumsan et velit porta etiam in. Praesent turpis non volutpat feugiat quam odio pharetra, erat. Elementum porttitor tortor tellus vitae leo scelerisque aenean sagittis in. Hendrerit
                                        enim, quisque eget elit fermentum Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec dolor, volutpat accumsan et velit porta etiam in. Praesent turpis non volutpat feugiat quam odio pharetra, erat. Elementum porttitor tortor tellus vitae leo
                                        scelerisque aenean sagittis in. Hendrerit enim, quisque eget elit fermentum Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec dolor, volutpator tortor tellus vitaortor tellus vite leo scelerisque aenean sagittirit ortor tellus vitortor tellus
                                        vitenim, quisque eget elit fermentum....
                                    </p>

                                    <a href="/" class="font-semibold text-sm border border-ubuy-blue text-ubuy-blue rounded px-4 py-1">
                                        learn more
                                    </a>

                                </div>
                            </div>
                            <div class="flex sm:hidden flex-col w-full gap-y-2.5" id="ucoinMobileBody">

                                <div class="flex flex-col w-full items-center flex-nowrap justify-center rounded-lg px-4 py-20" id="mobileLoader">
                                    <button class="text-ubuy-blue py-2">
                                        <img src="assets/images/loader.gif" width="40" height="40" class="" /> 
                                    </button>
                                </div>


                                <!-- <div class="bg-white rounded-llg px-5 py-2.5 flex flex-row items-center justify-between">
                                    <div class="flex flex-col text-ubuy-secondary gap-y-1.5">
                                        <span class="font-semibold text-xxs">U-Coin Purchase</span>
                                        <small>06-07-2020 | 11:35:47</small>
                                    </div>
                                    <div class="text-ubuy-positiveDefault">
                                        +10 Coins
                                    </div>
                                </div> -->
                                

                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="sm:hidden flex flex-row items-center py-4 px-5 fixed right-4 bottom-5 bg-ubuy-blue text-white" style="border-radius: 30px;">
                    <span class="mr-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <span>Buy U-Coins</span>
                </a>
            </div>
        </main>

        <!-- Buy U-Coin Popup -->
        <div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6" id="buy-ucoin" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
            <div class="flex flex-col items-center justify-around md:py-10 py-6 md:px-10 px-6 rounded-3xl shadow bg-white relative max-w-xl w-full">
                <button class="absolute right-5 top-5" onclick="onClosePopup('buy-ucoin')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <h1 class="font-semibold text-lg text-ubuy-black mb-16">Top-up your U-Coins</h1>

                <div class="flex flex-col items-center justify-center font-medium text-sm">
                    <div class="w-full mb-10">
                        <label for="coin-quantity">Quantity</label>
                        <input type="number" name="coin-quantity" id="coin-quantity" onkeyup="calCoin(this.id)" class="mt-1.5 rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full" />
                    </div>
                    <div class="w-full mb-10">
                        <span>
                            Amount ( N100 per U-Coin): 
                        </span>
                        <div class="w-full border-t border-b border-gray-200 py-2.5 mt-1.5 text-lg" id="total-buying">
                            N0.00
                        </div>

                    </div>

                    <div class="flex flex-row w-full items-start rounded-md bg-yellow-200 py-2.5 px-3 text-ubuy-secondary">
                        <span class="mr-2"> Note:</span>
                        <p class="text-xxs ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec psum dolor sit amet, consectetur adipiscing </p>
                    </div>
                </div>
                <div class="mt-14 self-start">
                    <input type="hidden" name="amt-paying" id="amt-paying" value="" />
                    <input type="hidden" name="fname" id="fname" value="<?php echo $userData['last_name'].' '.$userData['first_name']; ?>" />
                    <input type="hidden" name="user_id" id="user_id" value="<?php $_SESSION['access_token']; ?>" />
                    <button class="text-sm text-white rounded-lg bg-ubuy-blue py-4 px-5 font-semibold shadow-card" id="byCoinBtn" onclick="buyCoin(this.id);">
                        Proceed to pay
                    </button>
                </div>
            </div>
        </div>      
<?php
if($_SESSION['user_role'] == 'customer'){
    require_once 'inc/customer-footer.php';
}elseif($_SESSION['user_role'] == 'pro'){
    require_once 'inc/pro-footer.php';
}
?>
<script src="https://checkout.flutterwave.com/v3.js"></script>
<script type="text/javascript">
    function calCoin(id){
        $("#total-buying").html("N " + $("#"+id).val() * 100);
        $("#amt-paying").val($("#"+id).val() * 100);
    }


    function buyCoin(id){
        FlutterwaveCheckout({
            public_key: "FLWPUBK_TEST-21aa76d64f8121e5fd4548c0ee6a753d-X",
            tx_ref: "<?php echo rand(000000000, 999999999); ?>",
            amount: $("#amt-paying").val(),
            currency: "NGN",
            country: "NG",
            payment_options: " ",
            customer: {
                email: "<?php echo $userData['email']; ?>",
                phone_number: "<?php echo $userData['number']; ?>",
                name: $("#fname").val(),
            },
            callback: function (data) { // specified callback function
                console.log(data);

                if(data.status == "successful"){
                    finalizeFunding(data.flw_ref, data.amount);
                }else{
                    toastr.error("Transaction could not be completed, try again!", {timeOut: 5000});
                    window.location.reload();
                }
            },
            customizations: {
                title: "UBUY NG",
                description: "Purchase of U-Coin",
                logo: "https://ubuy.ng/mvp_ui/images/logo.png",
            },
        });
    }

    
    function finalizeFunding(txref, amount){
        var url = "endpoints/ucoin-transaction.php";
        $.ajax({
            type: "POST",
            url: url,
            dataType: 'json',
            data: {
                "pro_id" : "<?php echo $userData['id']; ?>",
                "txref" : txref,
                "transaction_info" : "Ucoin funding",
                "amount" : $("#coin-quantity").val()
            },
            success: function(data)
            {
                console.log(data);
                if(data.success == true){
                    toastr.success("Transaction successfully!", "Success:", {timeOut: 7000});
                    setTimeout(function(){
                        window.location.reload();
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
    
    
    fetch("endpoints/fetch-ucoin-transactions.php").then(
    res => {
        res.json().then(
        data => {
            console.log(data.ucoin_transactions);
            $("#loadLi").fadeOut().hide();
            $("#mobileLoader").fadeOut().hide();
            console.log(data.ucoin_transactions.length);
            if (data.ucoin_transactions.length > 0) {
                var temp = "";
                var tempMobile = "";
                for (const itemData of data.ucoin_transactions) {
                    
                    temp += '<tr class="border-b border-gray-200 cursor-pointer hover:bg-ubuy-gray400">';
                    temp += '<td class="text-left w-40 p-5">'+itemData.txref+'</td>';
                    temp += '<td class="text-left w-52 py-5 pr-5">'+itemData.transaction_info+'</td>';
                    temp += '<td class="text-left w-28 py-5 pr-5 text-ubuy-positiveDefault">'+itemData.amount+' Coins</td>';
                    temp += '<td class="text-left w-32 py-5 pr-5">'+new Date(itemData.created_at).toDateString()+'</td>';
                    temp += '</tr>';

                    tempMobile += '<div class="bg-white rounded-llg px-5 py-2.5 flex flex-row items-center justify-between"><div class="flex flex-col text-ubuy-secondary gap-y-1.5"><span class="font-semibold text-xxs">'+itemData.transaction_info+'</span><small>'+new Date(itemData.created_at).toDateString()+'</small></div><div class="text-ubuy-positiveDefault">'+itemData.amount+' Coins</div></div>';
                }
                $('#upayBody').html(temp);                    
                $('#ucoinMobileBody').html(tempMobile);
            }
        })
    })
</script>