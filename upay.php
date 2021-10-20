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
                <div class="flex w-full flex-col my-7 lg:pl-7 lg:pr-8 px-4 gap-x-6">
                    <div class="flex flex-row gap-x-5">
                        <div class="max-w-md w-full ubuy-card flex flex-col p-2.5 text-white relative">
                            <div class="flex flex-row w-full justify-between">
                                <span class="text-sm font-semibold">UPay</span>
                                <div>
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.118 9.06781C15.0986 9.03626 15.0479 8.97499 15.0199 8.94292L14.6648 8.39851L14.5033 7.98309C14.4862 7.94439 14.4823 7.93775 14.474 7.89365L14.4213 7.48825C14.4221 7.40876 14.414 7.343 14.4154 7.29252L14.4256 6.88159L14.511 6.50885C14.617 6.18503 14.7576 5.86466 14.9861 5.6094C15.0234 5.56777 15.0546 5.52353 15.0911 5.47683C15.2253 5.30535 15.314 5.26652 15.4445 5.15118C15.5032 5.09934 15.5134 5.09518 15.584 5.05302C15.6857 4.9924 15.7699 4.94081 15.8769 4.88747C16.2485 4.7022 16.351 4.6862 16.7562 4.62915C17.0586 4.58654 17.318 4.61647 17.5978 4.65582C17.7026 4.67059 17.8477 4.72998 17.9513 4.76075C17.981 4.76894 18.0098 4.77994 18.0373 4.7936C18.0655 4.80681 18.0877 4.81546 18.1187 4.83107L18.2981 4.92331C18.3143 4.93183 18.328 4.93736 18.344 4.94536L18.7492 5.21916C18.7811 5.24765 18.7843 5.2446 18.8161 5.27107C18.9087 5.34835 19.0784 5.53967 19.1487 5.63438C19.3618 5.92106 19.5082 6.19531 19.6162 6.54144L19.6876 6.9281C19.7137 7.45547 19.6973 7.83328 19.4921 8.29365C19.4696 8.34419 19.4269 8.41269 19.4156 8.45569C19.3896 8.50317 19.3698 8.53121 19.3404 8.58312C19.3118 8.63367 19.2991 8.66606 19.2687 8.71511L19.0889 8.94266C18.9904 9.05292 18.9367 9.12447 18.8135 9.22732L18.6778 9.34629C18.6626 9.35716 18.6636 9.35469 18.6469 9.36627L18.5599 9.43203C18.3476 9.57976 17.8169 9.8343 17.5449 9.86026L17.174 9.89701C16.9411 9.90384 16.4749 9.86156 16.268 9.78291L15.8286 9.59414C15.5476 9.44231 15.6891 9.51491 15.4545 9.35716C15.3413 9.28111 15.1752 9.10066 15.1182 9.06781H15.118ZM4.27851e-07 14.6355L0.00443049 17.2871L0.156942 18.2882L0.29486 18.812C0.303785 18.843 0.304763 18.8633 0.314014 18.8946C0.33004 18.9489 0.343069 18.973 0.360203 19.0351L0.747443 19.9823C0.8408 20.1957 0.967122 20.4014 1.08791 20.5982C1.27807 20.9081 1.51033 21.193 1.73776 21.4758L1.82857 21.5717C1.95138 21.7041 2.06141 21.8451 2.19529 21.9688L2.46468 22.2086C2.46722 22.211 2.4708 22.2145 2.47341 22.2168L2.60318 22.3247C2.811 22.5188 3.13746 22.7234 3.37753 22.8914C3.42268 22.923 3.46125 22.9324 3.50874 22.9639L3.87415 23.1757C4.11377 23.3026 4.67788 23.5582 4.95574 23.6222L5.40155 23.7538C5.4749 23.7806 5.45816 23.776 5.55191 23.7903L5.87778 23.855C5.95341 23.8749 5.94996 23.8811 6.04553 23.891C6.21205 23.9082 6.3617 23.9471 6.53981 23.9572C6.64385 23.9632 6.60685 23.9863 6.70894 23.9919C7.01507 24.0089 7.3511 23.9942 7.66173 23.9922C7.77554 23.9915 7.75033 23.9756 7.81834 23.962C7.96069 23.9336 8.27379 23.9261 8.50344 23.8658C8.76618 23.7968 9.10175 23.7587 9.35016 23.6597L10.5088 23.1883C10.5295 23.1772 10.5475 23.1658 10.5631 23.1577C10.8697 22.9983 11.1664 22.803 11.4488 22.6005C11.4873 22.5728 11.5111 22.5488 11.5528 22.5177L12.1171 22.0466C12.2802 21.8864 12.4866 21.6898 12.6493 21.4924L13.0672 20.96C13.0982 20.9187 13.1153 20.8926 13.1439 20.8499C13.1742 20.8045 13.1897 20.7869 13.2229 20.7423L13.3764 20.5054C13.3865 20.4884 13.3969 20.4671 13.4061 20.4502L13.5832 20.1353C13.6114 20.0802 13.6209 20.0713 13.6473 20.0126C13.7469 19.791 13.863 19.5676 13.9373 19.3355C13.9829 19.1931 14.0526 19.0561 14.0864 18.9076L14.2439 18.3017C14.3053 18.0349 14.4044 17.3623 14.4044 17.099C14.4044 16.958 14.4217 16.8801 14.4214 16.7319V13.9503C14.4952 13.9675 14.55 13.9944 14.6106 14.0158L15.1226 14.1831C15.3696 14.2367 15.6728 14.3155 15.9063 14.3503C15.9949 14.3635 16.0684 14.3701 16.1388 14.3896C16.237 14.4168 16.2806 14.3987 16.3872 14.413C16.8084 14.4692 17.2368 14.4673 17.6631 14.4226C17.72 14.4166 17.8533 14.4151 17.9165 14.4042C17.9522 14.3981 17.9792 14.3842 18.0249 14.3768L18.356 14.3173C18.4485 14.2946 18.4936 14.3096 18.5877 14.2772L19.0251 14.1712C19.0885 14.149 19.1673 14.1245 19.2306 14.105L19.4343 14.037C19.5975 13.9901 20.2492 13.7232 20.3862 13.6305C20.4355 13.5972 20.4138 13.6102 20.4727 13.5813C20.5039 13.566 20.4949 13.5695 20.5174 13.5581C20.7338 13.4491 21.0359 13.25 21.2234 13.1097L21.4972 12.9082C21.5 12.9061 21.5038 12.9027 21.5066 12.9006C21.5105 12.8975 21.5218 12.8888 21.5258 12.8858C21.5833 12.8435 21.623 12.8095 21.6773 12.7657L21.8236 12.6405C21.8745 12.5935 21.9076 12.5488 21.961 12.5063L22.2396 12.2418C22.2543 12.2266 22.2587 12.2211 22.2721 12.2063L22.575 11.8643C22.5773 11.8616 22.5805 11.8577 22.5827 11.855C22.7037 11.713 22.9718 11.3568 23.0812 11.1825C23.1004 11.1519 23.1207 11.1285 23.1371 11.1026L23.1888 11.0185C23.343 10.7874 23.6327 10.2244 23.7347 9.95231C23.7496 9.91276 23.7512 9.8881 23.7671 9.84901C23.7813 9.8144 23.7892 9.80698 23.8088 9.75488L23.9723 9.23974C23.9816 9.20071 23.994 9.17781 24.0066 9.13833L24.0563 8.91664C24.072 8.85067 24.0832 8.76344 24.1056 8.69462L24.2232 7.99793C24.2253 7.81793 24.2226 7.63579 24.2226 7.45547C24.2226 6.99797 24.2753 6.49253 24.1498 6.05155L24.0686 5.62378C23.9703 5.17031 23.7595 4.56378 23.5546 4.15259L23.388 3.82708C23.3624 3.77489 23.3336 3.72432 23.3019 3.67564L23.1603 3.44387C22.9806 3.16961 22.7923 2.89861 22.58 2.64947C22.4585 2.50681 22.345 2.35277 22.2027 2.22911C22.2 2.22684 22.1962 2.22358 22.1936 2.22124L22.1669 2.19698C22.156 2.18644 22.1433 2.17323 22.1335 2.1625C22.1311 2.1599 22.1279 2.15606 22.1256 2.15346C22.1233 2.15086 22.12 2.14702 22.1177 2.14435C22.1154 2.14168 22.1122 2.13785 22.1099 2.13518L21.8403 1.87855C21.8272 1.86606 21.826 1.86528 21.8136 1.85436L21.7111 1.77005C21.5668 1.66135 21.441 1.54237 21.2936 1.4407C21.2587 1.41663 21.2556 1.42125 21.2211 1.39438C20.8855 1.13262 20.4207 0.87001 20.0293 0.701659C19.9993 0.688714 19.9804 0.676159 19.9493 0.662824L18.5295 0.214756C18.4229 0.200184 18.4206 0.185288 18.3386 0.167984L17.6587 0.0836137C17.4105 0.0494622 16.9594 0.0444533 16.6805 0.0594149C16.5412 0.0668957 16.3732 0.0990957 16.2377 0.109048L15.2888 0.280977C15.2425 0.292166 15.2367 0.298216 15.1988 0.309925C15.1283 0.331782 15.0674 0.347719 15.0012 0.366974C14.636 0.473137 14.2536 0.5927 13.9191 0.779069C13.654 0.926799 13.5665 0.952884 13.2847 1.12937L12.4169 1.75541C12.3671 1.79392 12.3437 1.8217 12.2883 1.8645L11.9679 2.17226C11.942 2.20582 11.93 2.21552 11.9051 2.24524L11.5582 2.64505C11.5169 2.69982 11.4862 2.73449 11.4465 2.78796C11.2699 3.02598 11.0937 3.27044 10.9533 3.53364C10.9258 3.58529 10.8942 3.63798 10.8616 3.69646C10.7426 3.91008 10.6477 4.14433 10.5525 4.37155L10.0289 6.10456C10.0095 6.19804 10.0226 6.23076 9.99376 6.32385L9.85864 7.17269C9.82965 7.34696 9.85213 9.86611 9.85213 10.1707V16.427C9.85213 16.5834 9.86314 16.7839 9.85128 16.935C9.84594 17.0033 9.82744 17.0878 9.81955 17.1577C9.81219 17.2226 9.806 17.3415 9.79095 17.4005L9.47844 18.134C9.46476 18.1942 9.4514 18.1895 9.41583 18.2474C9.34033 18.3703 9.28567 18.4433 9.1854 18.5429L9.01602 18.7131C8.79549 18.9146 8.70194 19.0051 8.40285 19.1523C7.8143 19.4421 7.16517 19.5294 6.50072 19.3494L6.37427 19.3061C6.30958 19.2834 6.31095 19.2941 6.24691 19.2636C6.24215 19.2614 6.22899 19.2546 6.2241 19.2525L5.88038 19.0868C5.84234 19.0637 5.80781 19.0447 5.77439 19.0231L5.694 18.9664C5.67556 18.9556 5.68644 18.9602 5.65647 18.9481C5.63686 18.9279 5.58422 18.8889 5.55679 18.8672C5.51341 18.8328 5.4893 18.8128 5.44487 18.7753L5.15991 18.4832C5.04375 18.3507 4.99222 18.2571 4.9145 18.1176L4.77886 17.8629C4.7001 17.6938 4.61365 17.4327 4.59059 17.2537C4.51814 16.6907 4.55234 14.3002 4.55234 13.686L4.55176 7.79308C4.55182 7.69772 4.57254 7.62402 4.58205 7.55194C4.61417 7.30878 4.55795 7.20132 4.55215 7.08143C4.53534 6.73412 4.55234 5.90271 4.55234 5.5208V3.46853C4.55234 3.15433 4.52179 2.73228 4.57189 2.45341C4.62414 2.1627 4.51404 1.65401 4.39469 1.37013L4.31455 1.19572C4.22152 1.01749 4.06419 0.819863 3.9221 0.671677C3.91969 0.66914 3.91617 0.665563 3.91376 0.663091C3.77376 0.523297 3.59017 0.369257 3.41701 0.277146C3.36463 0.249239 3.31818 0.214437 3.25329 0.186205L3.06671 0.118097C2.9927 0.0920117 2.72957 0.00790136 2.651 0.007446C2.56618 0.0069256 2.48018 0.00855186 2.3951 0.00855186C1.95281 0.00855186 2.02558 -0.0338611 1.67548 0.0702198L1.29885 0.203053C1.12647 0.283651 0.82992 0.493049 0.700536 0.62328C0.644118 0.680069 0.624053 0.705959 0.572455 0.766781C0.45317 0.907486 0.345415 1.05183 0.260592 1.21862L0.174727 1.40428C0.0665816 1.68354 -0.000195016 1.96306 4.27851e-07 2.26444V14.636V14.6355Z"
                                            fill="white" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col flex-grow justify-end pb-6">
                                <span class="text-base font-medium">Available Balance</span>
                                <span class="text-2xl font-medium">NGN  <?php echo isset($userData["upay_account"]) ? number_format($userData["upay_account"], 2) : "0.00"; ?></span>
                            </div>
                        </div>
                        <div class="max-w-md rounded-llg flex-1 bg-white flex-row items-center justify-between p-5 cursor-pointer sm:flex hidden">
                            <div class="rounded-full active-task-icon-wrapper p-4">
                                <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="35" cy="35" r="35" fill="#FFBC1F" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M45.4886 47H41.5234L37.2132 40.5345H29.5929V47H25.6277V40.5345H22V36.2241H25.6277V34.069H22V29.7586H25.6277V23H29.5929L34.1072 29.7586H41.5234V23H45.4886V29.7586H48.087V34.069H45.4886V36.2241H48.087V40.5345H45.4886V47ZM29.5929 36.2241H34.3398L32.9031 34.069H29.5929V36.2241ZM41.3046 40.5345L41.5234 40.8621V40.5345H41.3046ZM41.5234 36.2241H38.4256L36.9861 34.069H41.5234V36.2241ZM29.5929 29.1034L30.0297 29.7586H29.5929V29.1034Z"
                                        fill="#FFBC1F" />
                                </svg>

                            </div>
                            <div class="flex flex-col items-center justify-center gap-y-4 ">
                                <span class="text-3xl text-ubuy-warningDefault font-medium" id="activeTaskFee">N 0.00</span>
                                <span class="text-ubuy-secondary text-sm font-normal w-32 text-center">Active Task Fees</span>
                            </div>
                        </div>
                        <?php if($userData['user_role'] == 'pro'){ ?>
                        <div class="xl:flex flex-col max-w-350 gap-y-6 hidden">
                            <button class="shadow-card text-lg rounded-3xl bg-ubuy-positiveDefault py-7 text-center text-white" style="border-radius: 44px;">
                                Withdraw Funds
                            </button>
                            <!-- <button class="shadow-card text-lg rounded-3xl text-center text-ubuy-positiveDefault bg-white border-2 border-ubuy-positiveDefault py-7" style="border-radius: 44px;">
                                Deposit Funds
                            </button> -->
                        </div>
                        <?php } ?>
                    </div>

                    <div class="w-full flex flex-col mt-10">
                        <div class="mb-5 text-ubuy-black text-xs md:text-base lg:text-lg">
                            <label class="mr-2">Showing:</label>
                            <select class="bg-white rounded px-2 py-1">
                                <option class="" value="" selected>
                                    All Transactions
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
                        <div class="w-full bg-white rounded-llg shadow-card sm:block hidden">
                            <table class="table-auto text-secondary font-normal text-xxs w-full">
                                <thead>
                                    <tr class="border-b border-gray-200">
                                        <th class="text-left w-40 p-5">Transaction ID</th>
                                        <th class="text-left w-36 py-5 pr-5 md:pl-0 pl-5">Transaction Info</th>
                                        <th class="text-left w-52 py-5 pr-5 hidden xl:table-cell">Task</th>
                                        <th class="text-left w-32 py-5 pr-5 hidden xl:table-cell">Concerned Pro</th>
                                        <th class="text-left w-28 py-5 pr-5">Amount</th>
                                        <th class="text-left w-32 py-5 pr-5">Date</th>
                                        <th class="text-left w-32 py-5 pr-5">Status</th>
                                    </tr>
                                </thead>
                                <tbody id="transactionList">
                                    
                                    <tr id="loaderLi">
                                        <td colspan="7" class="text-center">
                                            <button class="text-ubuy-blue py-2">
                                                <img src="assets/images/loader.gif" width="40" height="40" class="" /> 
                                            </button>
                                        </td>
                                    </tr>
                                    


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

                        <div class="flex flex-col w-full sm:hidden">
                            <h1 class="mb-4 text-sm font-medium text-ubuy-black">Recent Tasks</h1>
                            <div class="flex flex-col gap-y-4" id="transactionListMobile">

                                <div class="flex flex-col bg-white w-full text-center justify-center item-center text-center rounded-lg px-4 py-2" style="padding-top: 20px; padding-bottom: 20px;" id="TransMobileLoader">
                                    <button class="flex flex-col text-ubuy-blue py-2 text-center item-center justify-center">
                                        <img src="assets/images/loader.gif" width="40" height="40" class="" /> 
                                    </button>
                                </div>
                                    <!-- Transactions -->
                                    <!-- <div class="flex flex-col w-full items-start flex-nowrap justify-start bg-white rounded-lg px-4 py-2 text-ubuy-secondary">
                                        <div class="text-xs">
                                            TT20200610101850
                                        </div>
                                        <button class="focus:outline-none flex flex-row w-full items-start justify-end -mt-2">
                                            <span class="whitespace-nowrap text-base mr-1 mb-2">-N 45,000.00</span>
                                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 9L12 15L18 9" stroke="#222F54" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            </svg>
                                        </button>
                                        <div class="text-xxs w-full flex flex-row justify-between">
                                            <div class="w-2/3 text-tiny">
                                                06-07-2020 | 11:35:47
                                            </div>
                                            <div class="w-1/3 text-xxxs bg-ubuy-warningDefault rounded px-5 py-1 text-white text-center self-center">
                                                Pending
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- Transactions end-->
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
<script type="text/javascript">
    
        fetch("endpoints/fetchAllTransactions.php").then(
        res => {
            res.json().then(
            data => {
                console.log(data);
                $("#loaderLi").fadeOut().hide();
                $("#TransMobileLoader").fadeOut().hide();
                if (data.upay_transactions.length > 0) {
                    var temp = "";
                    var tempMobile = "";
                    for (const itemData of data.upay_transactions) {
                        var projectStatus;
                        switch(itemData.status){
                            case 1:
                                projectStatus = "On Hold";
                                projectColor = "bg-ubuy-purple200";
                            break;
                            case 2:
                                projectStatus = "In progress";
                                projectColor = "bg-ubuy-blue";
                            break;
                            case 3:
                                projectStatus = "Released";
                                projectColor = "bg-ubuy-positiveDefault";
                            break;
                            case 4:
                                projectStatus = "Declined";
                                projectColor = "bg-ubuy-secondary";
                            break;
                            case 5:
                                projectStatus = "Disputed";
                                projectColor = "bg-ubuy-black";
                            break;
                        };
                        temp += '<tr class="border-b border-gray-200 cursor-pointer hover:bg-ubuy-gray400">';
                        temp += '<td class="text-left w-40 p-5">'+itemData+txref+'</td>';
                        temp += '<td class="text-left w-36 py-5 pr-5 md:pl-0 pl-5 hidden xl:table-cell">'+itemData.transaction_info+'</td>';
                        temp += '<td class="text-left w-52 py-5 pr-5 hidden xl:table-cell">'+itemData.transaction_info+'</td>';
                        temp += '<td class="text-left w-32 py-5 pr-5">John Ayomide</td>';
                        temp += '<td class="text-left w-28 py-5 pr-5">'+itemData.amount+'</td>';
                        temp += '<td class="text-left w-32 py-5 pr-5">'+new Date(itemData.created_at).toDateString()+'</td>';
                        temp += '<td class="text-left w-32 py-5 pr-5"><div class="'+projectColor+' rounded text-xxxs px-5 py-1 text-whitew-full text-center">'+projectStatus+'</div></td>';
                        temp += '</tr>';



                        tempMobile += '<div class="flex flex-col w-full items-start flex-nowrap justify-start bg-white rounded-lg px-4 py-2 text-ubuy-secondary"><div class="text-xs">TT20200610101850</div><button class="focus:outline-none flex flex-row w-full items-start justify-end -mt-2"><span class="whitespace-nowrap text-base mr-1 mb-2">-N 45,000.00</span><svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M6 9L12 15L18 9" stroke="#222F54" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /></svg></button><div class="text-xxs w-full flex flex-row justify-between"><div class="w-2/3 text-tiny">06-07-2020 | 11:35:47</div><div class="w-1/3 text-xxxs bg-ubuy-warningDefault rounded px-5 py-1 text-white text-center self-center">Pending</div></div></div>';


                    }
                    $('#transactionList').html(temp);                    
                    $('#transactionListMobile').html(tempMobile);                    
                }else{
                    $('#transactionList').html('<tr class="border-b border-gray-200"><td colspan="7" class="text-center" style="padding-top: 20px; padding-bottom: 20px;">No record found!</td></tr>');
                    $("#transactionListMobile").html('<div class="flex flex-col bg-white w-full flex-nowrap text-center justify-center rounded-lg px-4 py-2" style="padding-top: 20px; padding-bottom: 20px;">No Record Found!</div>');
                }
            })
        })

        var activeTaskFee = {
            "url": "endpoints/activeTaskFee.php",
            "method": "GET",
            "timeout": 0,
        };
        $.ajax(activeTaskFee).done(function(response) {
            // console.log(response)
            const a = JSON.parse(response);
            $("#activeTaskFee").html(a.active_task_fee);
        });
</script>
