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
       

       <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="my-0 mx-auto w-full lg:pl-6 py-6 lg:pr-8 px-4 flex flex-col gap-y-5">
                    <div class="flex flex-row flex-nowrap gap-x-6 justify-center">
                        <div class="hidden sm:flex flex-row flex-2 items-center shadow-card sm:w-2/3 w-full bg-white px-9 py-5 mb-5 sm:mb-0 rounded-lg">
                            <div class="w-7/12">
                                <h1 class="text-lg lg:text-2xl font-semibold">Convert UReward Points to Gift and Discount Coupons</h1>
                            </div>
                            <div class="w-5/12">
                                <img alt="welcome" class="min-w-full h-auto" src="assets/images/big-sale.png">
                            </div>
                        </div>
                        <div class="rounded-llg flex-1 md:shadow-card bg-white w-full flex-col items-center justify-center p-5 flex border hover:border-ubuy-yellow200">
                            <div class="flex flex-row items-center">
                                <div class="rounded-full active-task-icon-wrapper p-4">
                                    <svg width="25" height="25" viewBox="0 0 48 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.2034 18.3594L17.6074 21.6785L29.139 64.0006L29.1397 64.0004L33.1271 53.8782L41.7349 60.6815L41.735 60.6815L30.2034 18.3594Z" fill="#E93C3C" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0495 18.3594L30.6455 21.6785L19.1139 64.0006L19.1084 63.9991L15.1215 53.8782L6.51903 60.6774L18.0495 18.3594Z" fill="#E93C3C" />
                                        <path
                                            d="M22.1896 2.88032C22.9654 1.57952 24.8493 1.57952 25.6251 2.88032L25.6702 2.95602C26.3099 4.02863 27.7652 4.25913 28.7051 3.43669L28.7714 3.37865C29.9111 2.38123 31.7029 2.96341 32.0387 4.44026L32.0582 4.52621C32.3352 5.74399 33.6481 6.41294 34.796 5.92117L34.877 5.88646C36.2692 5.29007 37.7934 6.39743 37.6564 7.90578L37.6484 7.99356C37.5354 9.2373 38.5774 10.2792 39.8211 10.1663L39.9089 10.1583C41.4172 10.0213 42.5246 11.5454 41.9282 12.9376L41.8935 13.0187C41.4017 14.1666 42.0707 15.4795 43.2885 15.7564L43.3744 15.776C44.8513 16.1118 45.4334 17.9035 44.436 19.0433L44.378 19.1096C43.5555 20.0494 43.786 21.5048 44.8587 22.1445L44.9344 22.1896C46.2352 22.9654 46.2352 24.8493 44.9344 25.6251L44.8587 25.6702C43.786 26.3099 43.5555 27.7652 44.378 28.7051L44.436 28.7714C45.4334 29.9111 44.8513 31.7029 43.3744 32.0387L43.2885 32.0582C42.0707 32.3352 41.4017 33.6481 41.8935 34.796L41.9282 34.877C42.5246 36.2692 41.4172 37.7934 39.9089 37.6564L39.8211 37.6484C38.5774 37.5354 37.5354 38.5774 37.6484 39.8211L37.6564 39.9089C37.7934 41.4172 36.2692 42.5246 34.877 41.9282L34.796 41.8935C33.648 41.4017 32.3352 42.0707 32.0582 43.2885L32.0387 43.3744C31.7029 44.8513 29.9111 45.4334 28.7714 44.436L28.705 44.378C27.7652 43.5555 26.3099 43.786 25.6702 44.8587L25.6251 44.9344C24.8493 46.2352 22.9654 46.2352 22.1896 44.9344L22.1445 44.8587C21.5048 43.786 20.0494 43.5555 19.1096 44.378L19.0433 44.436C17.9035 45.4334 16.1118 44.8513 15.776 43.3744L15.7564 43.2885C15.4795 42.0707 14.1666 41.4017 13.0187 41.8935L12.9376 41.9282C11.5454 42.5246 10.0213 41.4172 10.1583 39.9089L10.1663 39.8211C10.2792 38.5774 9.2373 37.5354 7.99356 37.6484L7.90578 37.6564C6.39743 37.7934 5.29007 36.2692 5.88646 34.877L5.92117 34.796C6.41294 33.648 5.74399 32.3352 4.52621 32.0582L4.44026 32.0387C2.96341 31.7029 2.38123 29.9111 3.37865 28.7714L3.43669 28.7051C4.25913 27.7652 4.02863 26.3099 2.95602 25.6702L2.88032 25.6251C1.57952 24.8493 1.57952 22.9654 2.88032 22.1896L2.95602 22.1445C4.02863 21.5048 4.25913 20.0494 3.43669 19.1096L3.37865 19.0433C2.38123 17.9035 2.96341 16.1118 4.44026 15.776L4.52621 15.7564C5.74399 15.4795 6.41294 14.1666 5.92117 13.0187L5.88646 12.9376C5.29007 11.5454 6.39743 10.0213 7.90578 10.1583L7.99356 10.1663C9.2373 10.2792 10.2792 9.2373 10.1663 7.99356L10.1583 7.90578C10.0213 6.39743 11.5454 5.29007 12.9376 5.88646L13.0187 5.92117C14.1666 6.41294 15.4795 5.74399 15.7564 4.52621L15.776 4.44026C16.1118 2.96341 17.9035 2.38123 19.0433 3.37865L19.1096 3.43669C20.0494 4.25913 21.5048 4.02863 22.1445 2.95602L22.1896 2.88032Z"
                                            fill="#F1B974" />
                                        <circle cx="23.7653" cy="23.7674" r="16.3005" fill="#D08230" />
                                        <path d="M23.4669 14.933L25.3828 20.8294H31.5826L26.5668 24.4736L28.4827 30.37L23.4669 26.7258L18.4512 30.37L20.367 24.4736L15.3512 20.8294H21.5511L23.4669 14.933Z" fill="white" />
                                    </svg>
                                </div>
                                <div class="flex flex-col flex-auto lg:items-start items-center justify-start text-left w-full ml-2">
                                    <span class="text-lg lg:text-3xl text-ubuy-warningDefault font-medium"><?php echo isset($userData["ucoin"]) ? $userData["ucoin"] : "0"; ?></span>
                                    <span class="text-ubuy-secondary text-sm font-normal">UReward Points Available</span>
                                </div>

                            </div>
                            <div class="sm:hidden block text-sm text-center text-ubuy-secondary">
                                Convert UReward Points to Gift and Discount Coupons
                            </div>
                        </div>
                        <div class="rounded-llg flex-1 md:shadow-card bg-white w-full flex-col items-center justify-center p-5 flex border hover:border-ubuy-yellow200">
                            <div class="flex flex-row">
                                <div class="rounded-full active-task-icon-wrapper p-4">
                                    <svg width="35" height="35" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle opacity="0.1" cx="35" cy="35" r="35" fill="#FFBC1F" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M45.4886 47H41.5234L37.2132 40.5345H29.5929V47H25.6277V40.5345H22V36.2241H25.6277V34.069H22V29.7586H25.6277V23H29.5929L34.1072 29.7586H41.5234V23H45.4886V29.7586H48.087V34.069H45.4886V36.2241H48.087V40.5345H45.4886V47ZM29.5929 36.2241H34.3398L32.9031 34.069H29.5929V36.2241ZM41.3046 40.5345L41.5234 40.8621V40.5345H41.3046ZM41.5234 36.2241H38.4256L36.9861 34.069H41.5234V36.2241ZM29.5929 29.1034L30.0297 29.7586H29.5929V29.1034Z"
                                            fill="#FFBC1F" />
                                    </svg>
                                </div>
                                <div class="flex flex-col flex-auto lg:items-start items-center justify-start text-left w-full ml-2">
                                    <span class="text-lg lg:text-3xl text-ubuy-warningDefault font-medium"><?php echo isset($userData["bonus"]) ? $userData["bonus"] : "0"; ?></span>
                                    <span class="text-ubuy-secondary text-sm font-normal">Bonus Account</span>
                                </div>

                            </div>
                            <span class="text-xxxs font-normal text-red-600 mt-6">NB: This bonus last for three(3) days</span>
                            <span class=""></span>
                        </div>
                    </div>
                    <div class="sm:flex hidden flex-row justify-between items-center text-sm text-ubuy-secondary mt-5">
                    
                        <div class="flex flex-row  justify-between w-full items-center gap-x-5">

                            <div class="bg-white rounded-llg py-3 px-5 flex flex-row gap-1 items-center">
                                <label>Showing:</label>
                                <select class="bg-transparent">
                                    <option class="" value="" selected>
                                        My Coupon Wallet
                                    </option>
                                </select>
                            </div>

                            <div class="flex flex-row items-center gap-x-4">
                                <div class="bg-white rounded-llg py-3 px-5 flex flex-row items-center">
                                    <label for="filter-pros" class="flex flex-row">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.1554 0H0.84473C0.0952696 0 -0.282906 0.909351 0.248129 1.44039L6.74999 7.94324V15.1875C6.74999 15.4628 6.88433 15.7208 7.10989 15.8787L9.92239 17.8468C10.4773 18.2352 11.25 17.8415 11.25 17.1555V7.94324L17.752 1.44039C18.282 0.910406 17.9064 0 17.1554 0Z"
                                                fill="#52575C" />
                                        </svg>
                                        <span class="ml-3 sm:inline hidden">Filter</span>
                                    </label>
                                    <select name="filter-pro" id="filter-pro" class="bg-transparent appearance-none">
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
                                                Sort by: Recent
                                            </span>
                                        </div>

                                        <select name="sort-by" id="sort-by" class="bg-transparent text-ubuy-black appearance-none w-full">
                                            <option value=""></option>
                                        </select>
                                    </label>

                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="sm:hidden flex text-xs items-center">
                        <label for="" class="mr-5">Showing:</label>
                        <select name="fliter-reward" id="filter-reward" class="rounded bg-white px-2 py-1">
                            <option value="" selected>My Coupon Wallet</option>
                        </select>
                    </div>

                    <div class="grid grid-flow-row xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">


                    
                        <div class="bg-white rounded-llg px-4 py-5 relative flex flex-row items-center gap-x-4 w-full">
                            <div class="">
                                <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M119.969 0H107.999C107.999 3.31363 105.313 5.99983 101.999 5.99983C98.6857 5.99983 95.9994 3.31363 95.9993 0H84.0003C84.0002 3.31363 81.314 5.99983 78.0003 5.99983C74.6867 5.99983 72.0004 3.31363 72.0003 0H59.9997C59.9996 3.31363 57.3133 5.99983 53.9997 5.99983C50.686 5.99983 47.9998 3.31363 47.9997 0H36.0007C36.0006 3.31363 33.3143 5.99983 30.0007 5.99983C26.687 5.99983 24.0008 3.31363 24.0007 0H12C11.9999 3.31359 9.31362 5.99973 6 5.99973C2.68638 5.99973 0.000143999 3.31359 0 0V11.9998H0.00121689C2.65219 11.9998 4.80122 14.6861 4.80122 17.9998C4.80122 21.3135 2.65219 23.9998 0.00121689 23.9998H0V36.0001H0.00121689C2.65219 36.0001 4.80122 38.6864 4.80122 42.0001C4.80122 45.3138 2.65219 48.0001 0.00121689 48.0001H0V59.9999H0.00121689C2.65219 59.9999 4.80122 62.6862 4.80122 65.9999C4.80122 69.3136 2.65219 71.9999 0.00121689 71.9999H0V84.0002H0.00121689C2.65219 84.0002 4.80122 86.6865 4.80122 90.0002C4.80122 93.3139 2.65219 96.0002 0.00121689 96.0002H0V108H0.00116806C2.65214 108 4.80117 110.686 4.80117 114C4.80117 117.314 2.65214 120 0.00116806 120H12.0003C12.0003 116.686 14.6866 114 18.0003 114C21.314 114 24.0003 116.686 24.0003 120H35.9997C35.9997 116.686 38.686 114 41.9997 114C45.3134 114 47.9997 116.686 47.9997 120H60.0003C60.0003 116.686 62.6866 114 66.0003 114C69.314 114 72.0003 116.686 72.0003 120H84.001C84.001 116.686 86.6873 114 90.001 114C93.3147 114 96.001 116.686 96.001 120H108C108 116.686 110.686 114 114 114C117.314 114 120 116.686 120 120V108C116.687 108 114.001 105.313 114.001 102C114.001 98.6865 116.687 96.0004 120 96V83.9998C116.687 83.9995 114.001 81.3133 114.001 77.9998C114.001 74.6863 116.687 72.0002 120 71.9998V60C116.687 59.9996 114.001 57.3135 114.001 54C114.001 50.6865 116.687 48.0004 120 48V36.0002C116.687 35.9998 114.001 33.3137 114.001 30.0002C114.001 26.6867 116.687 24.0005 120 24.0002V11.9999C116.687 11.9996 114.001 9.3134 114.001 5.99992C114.001 2.69691 116.67 0.0172673 119.969 0Z"
                                        fill="#F9F9FA" />
                                    <rect x="15" y="15" width="90" height="90" rx="5" fill="#1F4D65" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M67.145 54.9327L54.1553 58.3555L66.0469 101.999L70.1585 91.5612L79.0359 98.5776L66.0472 102L66.0473 102L79.037 98.5775L67.145 54.9327Z" fill="#E93C3C" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M54.6148 54.9327L67.6045 58.3555L55.7125 102L55.7099 102L51.5979 91.5612L42.7234 98.5754L54.6148 54.9327Z" fill="#E93C3C" />
                                    <path
                                        d="M58.9358 38.8803C59.7116 37.5795 61.5955 37.5795 62.3713 38.8803L62.51 39.1128C63.1496 40.1854 64.605 40.4159 65.5448 39.5935L65.7485 39.4152C66.8883 38.4178 68.68 39 69.0158 40.4768L69.0759 40.7408C69.3528 41.9586 70.6657 42.6275 71.8136 42.1358L72.0625 42.0292C73.4547 41.4328 74.9788 42.5401 74.8418 44.0485L74.8173 44.3181C74.7044 45.5618 75.7463 46.6037 76.99 46.4908L77.2596 46.4663C78.768 46.3293 79.8753 47.8535 79.2789 49.2457L79.1723 49.4945C78.6806 50.6425 79.3495 51.9553 80.5673 52.2323L80.8313 52.2923C82.3081 52.6281 82.8903 54.4198 81.8929 55.5596L81.7146 55.7633C80.8922 56.7031 81.1227 58.1585 82.1953 58.7982L82.4278 58.9368C83.7286 59.7126 83.7286 61.5965 82.4278 62.3723L82.1953 62.5109C81.1227 63.1506 80.8922 64.606 81.7146 65.5458L81.8929 65.7495C82.8903 66.8892 82.3081 68.681 80.8313 69.0168L80.5673 69.0768C79.3495 69.3537 78.6806 70.6666 79.1723 71.8146L79.2789 72.0634C79.8753 73.4556 78.768 74.9798 77.2596 74.8428L76.99 74.8183C75.7463 74.7053 74.7044 75.7473 74.8173 76.991L74.8418 77.2606C74.9788 78.769 73.4547 79.8763 72.0625 79.2799L71.8136 79.1733C70.6657 78.6816 69.3528 79.3505 69.0759 80.5683L69.0158 80.8323C68.68 82.3091 66.8883 82.8913 65.7485 81.8939L65.5448 81.7156C64.605 80.8932 63.1496 81.1237 62.51 82.1963L62.3713 82.4288C61.5955 83.7296 59.7116 83.7296 58.9358 82.4288L58.7972 82.1963C58.1575 81.1237 56.7022 80.8932 55.7623 81.7156L55.5586 81.8939C54.4189 82.8913 52.6271 82.3091 52.2913 80.8323L52.2313 80.5683C51.9544 79.3505 50.6415 78.6816 49.4935 79.1733L49.2447 79.2799C47.8525 79.8763 46.3283 78.769 46.4653 77.2606L46.4898 76.991C46.6028 75.7473 45.5608 74.7053 44.3171 74.8183L44.0475 74.8428C42.5392 74.9798 41.4318 73.4556 42.0282 72.0634L42.1348 71.8146C42.6266 70.6666 41.9576 69.3537 40.7398 69.0768L40.4759 69.0168C38.999 68.681 38.4168 66.8892 39.4142 65.7495L39.5925 65.5458C40.415 64.606 40.1844 63.1506 39.1118 62.5109L38.8793 62.3723C37.5785 61.5965 37.5785 59.7126 38.8793 58.9368L39.1118 58.7982C40.1845 58.1585 40.415 56.7031 39.5925 55.7633L39.4142 55.5596C38.4168 54.4198 38.999 52.6281 40.4759 52.2923L40.7398 52.2323C41.9576 51.9553 42.6266 50.6425 42.1348 49.4945L42.0282 49.2456C41.4318 47.8535 42.5392 46.3293 44.0475 46.4663L44.3171 46.4908C45.5609 46.6037 46.6028 45.5618 46.4898 44.3181L46.4653 44.0485C46.3283 42.5401 47.8525 41.4328 49.2447 42.0292L49.4935 42.1358C50.6415 42.6275 51.9544 41.9586 52.2313 40.7408L52.2913 40.4768C52.6271 39 54.4189 38.4178 55.5586 39.4152L55.7623 39.5935C56.7022 40.4159 58.1575 40.1854 58.7972 39.1128L58.9358 38.8803Z"
                                        fill="#F1B974" />
                                    <circle cx="60.5091" cy="60.5101" r="16.8099" fill="#D08230" />
                                    <path d="M59.999 52L62.0196 58.2188H68.5585L63.2685 62.0623L65.2891 68.2812L59.999 64.4377L54.709 68.2812L56.7296 62.0623L51.4395 58.2188H57.9784L59.999 52Z" fill="#F9F9FA" />
                                    <circle cx="34.5" cy="25.5" r="1.5" fill="#F1B974" />
                                    <circle cx="59.999" cy="31.5" r="1.5" fill="#F1B974" />
                                    <circle cx="82.499" cy="28.5" r="1.5" fill="#F1B974" />
                                    <circle cx="94.5" cy="45" r="1.5" fill="#F1B974" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-ubuy-secondary mb-2">
                                    10% off your next task
                                </div>
                                <div class="text-xs text-ubuy-inactive mb-2">
                                    Sign Up Reward Coupon
                                </div>
                                <div>
                                    <div class="border-2 border-dotted rounded p-1 border-ubuy-blue flex items-center justify-start w-min">
                                        <span class="text-sm text-ubuy-blue mr-2">
                                            INUB15
                                        </span>
                                        <button>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.3333 6H7.33333C6.59695 6 6 6.59695 6 7.33333V13.3333C6 14.0697 6.59695 14.6667 7.33333 14.6667H13.3333C14.0697 14.6667 14.6667 14.0697 14.6667 13.3333V7.33333C14.6667 6.59695 14.0697 6 13.3333 6Z" stroke="#119AE2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M3.33301 10H2.66634C2.31272 10 1.97358 9.85953 1.72353 9.60949C1.47348 9.35944 1.33301 9.0203 1.33301 8.66668V2.66668C1.33301 2.31305 1.47348 1.97392 1.72353 1.72387C1.97358 1.47382 2.31272 1.33334 2.66634 1.33334H8.66634C9.01996 1.33334 9.3591 1.47382 9.60915 1.72387C9.8592 1.97392 9.99967 2.31305 9.99967 2.66668V3.33334"
                                                    stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute right-4 bottom-4 text-tiny text-ubuy-inactive">
                                Expired: 08 Sep
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