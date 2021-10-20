        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 max-w-full" id="main-content">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <div class="my-0 mx-auto w-full xl:pl-6 py-6 xl:pr-8 sm:px-5 px-4 flex flex-col xl:gap-y-5 gap-y-4">
                    <!-- Welcome card and Ubuy Balance -->
                    <div class="hidden sm:flex flex-row flex-wrap sm:flex-nowrap xl:gap-x-6 gap-x-4">
                        <div class="flex flex-row items-center sm:w-2/3 w-full bg-white shadow-card px-9 py-5 mb-5 sm:mb-0 rounded-lg">
                            <div class="w-7/12">
                                <h1 class="text-2xl font-medium mb-2">Welcome back <?php echo isset($userData['first_name']) ? ucfirst($userData['first_name']) : "<a class='text-xs p-1' href='profile-settings.php'><small class='text-xs text-primary'>[ Update Your Profile ]</small></a>"; ?></h1>
                                <h2 class="text-ubuy-black xl:text-sm text-xs">We are glad to see you again!</h2>
                                <a href="task.php"><button class="flex flex-row items-center bg-ubuy-blue py-2 px-3.5 gap-x-6 rounded-md mt-6">
                                    <span class="text-base font-semibold text-white">Find Tasks</span>
                                    <svg fill="none" height="24" viewBox="0 0 23 24" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79199 12H18.2087" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <path d="M11.5 5L18.2083 12L11.5 19" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </svg>
                                </button></a>
                            </div>
                            <div class="w-5/12 flex items-center justify-end">
                                <img alt="welcome" src="assets/images/work-from-home-pro.png">
                            </div>
                        </div>
                        <div class="sm:w-1/3 w-full ubuy-card flex flex-col p-2.5 text-white relative">
                            <div class="flex flex-row w-full justify-between">
                                <span class="xl:text-base text-sm font-semibold">UPay</span>
                                <div>
                                    <svg fill="none" height="24" viewBox="0 0 25 24" width="25" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd"
                                            d="M15.118 9.06781C15.0986 9.03626 15.0479 8.97499 15.0199 8.94292L14.6648 8.39851L14.5033 7.98309C14.4862 7.94439 14.4823 7.93775 14.474 7.89365L14.4213 7.48825C14.4221 7.40876 14.414 7.343 14.4154 7.29252L14.4256 6.88159L14.511 6.50885C14.617 6.18503 14.7576 5.86466 14.9861 5.6094C15.0234 5.56777 15.0546 5.52353 15.0911 5.47683C15.2253 5.30535 15.314 5.26652 15.4445 5.15118C15.5032 5.09934 15.5134 5.09518 15.584 5.05302C15.6857 4.9924 15.7699 4.94081 15.8769 4.88747C16.2485 4.7022 16.351 4.6862 16.7562 4.62915C17.0586 4.58654 17.318 4.61647 17.5978 4.65582C17.7026 4.67059 17.8477 4.72998 17.9513 4.76075C17.981 4.76894 18.0098 4.77994 18.0373 4.7936C18.0655 4.80681 18.0877 4.81546 18.1187 4.83107L18.2981 4.92331C18.3143 4.93183 18.328 4.93736 18.344 4.94536L18.7492 5.21916C18.7811 5.24765 18.7843 5.2446 18.8161 5.27107C18.9087 5.34835 19.0784 5.53967 19.1487 5.63438C19.3618 5.92106 19.5082 6.19531 19.6162 6.54144L19.6876 6.9281C19.7137 7.45547 19.6973 7.83328 19.4921 8.29365C19.4696 8.34419 19.4269 8.41269 19.4156 8.45569C19.3896 8.50317 19.3698 8.53121 19.3404 8.58312C19.3118 8.63367 19.2991 8.66606 19.2687 8.71511L19.0889 8.94266C18.9904 9.05292 18.9367 9.12447 18.8135 9.22732L18.6778 9.34629C18.6626 9.35716 18.6636 9.35469 18.6469 9.36627L18.5599 9.43203C18.3476 9.57976 17.8169 9.8343 17.5449 9.86026L17.174 9.89701C16.9411 9.90384 16.4749 9.86156 16.268 9.78291L15.8286 9.59414C15.5476 9.44231 15.6891 9.51491 15.4545 9.35716C15.3413 9.28111 15.1752 9.10066 15.1182 9.06781H15.118ZM4.27851e-07 14.6355L0.00443049 17.2871L0.156942 18.2882L0.29486 18.812C0.303785 18.843 0.304763 18.8633 0.314014 18.8946C0.33004 18.9489 0.343069 18.973 0.360203 19.0351L0.747443 19.9823C0.8408 20.1957 0.967122 20.4014 1.08791 20.5982C1.27807 20.9081 1.51033 21.193 1.73776 21.4758L1.82857 21.5717C1.95138 21.7041 2.06141 21.8451 2.19529 21.9688L2.46468 22.2086C2.46722 22.211 2.4708 22.2145 2.47341 22.2168L2.60318 22.3247C2.811 22.5188 3.13746 22.7234 3.37753 22.8914C3.42268 22.923 3.46125 22.9324 3.50874 22.9639L3.87415 23.1757C4.11377 23.3026 4.67788 23.5582 4.95574 23.6222L5.40155 23.7538C5.4749 23.7806 5.45816 23.776 5.55191 23.7903L5.87778 23.855C5.95341 23.8749 5.94996 23.8811 6.04553 23.891C6.21205 23.9082 6.3617 23.9471 6.53981 23.9572C6.64385 23.9632 6.60685 23.9863 6.70894 23.9919C7.01507 24.0089 7.3511 23.9942 7.66173 23.9922C7.77554 23.9915 7.75033 23.9756 7.81834 23.962C7.96069 23.9336 8.27379 23.9261 8.50344 23.8658C8.76618 23.7968 9.10175 23.7587 9.35016 23.6597L10.5088 23.1883C10.5295 23.1772 10.5475 23.1658 10.5631 23.1577C10.8697 22.9983 11.1664 22.803 11.4488 22.6005C11.4873 22.5728 11.5111 22.5488 11.5528 22.5177L12.1171 22.0466C12.2802 21.8864 12.4866 21.6898 12.6493 21.4924L13.0672 20.96C13.0982 20.9187 13.1153 20.8926 13.1439 20.8499C13.1742 20.8045 13.1897 20.7869 13.2229 20.7423L13.3764 20.5054C13.3865 20.4884 13.3969 20.4671 13.4061 20.4502L13.5832 20.1353C13.6114 20.0802 13.6209 20.0713 13.6473 20.0126C13.7469 19.791 13.863 19.5676 13.9373 19.3355C13.9829 19.1931 14.0526 19.0561 14.0864 18.9076L14.2439 18.3017C14.3053 18.0349 14.4044 17.3623 14.4044 17.099C14.4044 16.958 14.4217 16.8801 14.4214 16.7319V13.9503C14.4952 13.9675 14.55 13.9944 14.6106 14.0158L15.1226 14.1831C15.3696 14.2367 15.6728 14.3155 15.9063 14.3503C15.9949 14.3635 16.0684 14.3701 16.1388 14.3896C16.237 14.4168 16.2806 14.3987 16.3872 14.413C16.8084 14.4692 17.2368 14.4673 17.6631 14.4226C17.72 14.4166 17.8533 14.4151 17.9165 14.4042C17.9522 14.3981 17.9792 14.3842 18.0249 14.3768L18.356 14.3173C18.4485 14.2946 18.4936 14.3096 18.5877 14.2772L19.0251 14.1712C19.0885 14.149 19.1673 14.1245 19.2306 14.105L19.4343 14.037C19.5975 13.9901 20.2492 13.7232 20.3862 13.6305C20.4355 13.5972 20.4138 13.6102 20.4727 13.5813C20.5039 13.566 20.4949 13.5695 20.5174 13.5581C20.7338 13.4491 21.0359 13.25 21.2234 13.1097L21.4972 12.9082C21.5 12.9061 21.5038 12.9027 21.5066 12.9006C21.5105 12.8975 21.5218 12.8888 21.5258 12.8858C21.5833 12.8435 21.623 12.8095 21.6773 12.7657L21.8236 12.6405C21.8745 12.5935 21.9076 12.5488 21.961 12.5063L22.2396 12.2418C22.2543 12.2266 22.2587 12.2211 22.2721 12.2063L22.575 11.8643C22.5773 11.8616 22.5805 11.8577 22.5827 11.855C22.7037 11.713 22.9718 11.3568 23.0812 11.1825C23.1004 11.1519 23.1207 11.1285 23.1371 11.1026L23.1888 11.0185C23.343 10.7874 23.6327 10.2244 23.7347 9.95231C23.7496 9.91276 23.7512 9.8881 23.7671 9.84901C23.7813 9.8144 23.7892 9.80698 23.8088 9.75488L23.9723 9.23974C23.9816 9.20071 23.994 9.17781 24.0066 9.13833L24.0563 8.91664C24.072 8.85067 24.0832 8.76344 24.1056 8.69462L24.2232 7.99793C24.2253 7.81793 24.2226 7.63579 24.2226 7.45547C24.2226 6.99797 24.2753 6.49253 24.1498 6.05155L24.0686 5.62378C23.9703 5.17031 23.7595 4.56378 23.5546 4.15259L23.388 3.82708C23.3624 3.77489 23.3336 3.72432 23.3019 3.67564L23.1603 3.44387C22.9806 3.16961 22.7923 2.89861 22.58 2.64947C22.4585 2.50681 22.345 2.35277 22.2027 2.22911C22.2 2.22684 22.1962 2.22358 22.1936 2.22124L22.1669 2.19698C22.156 2.18644 22.1433 2.17323 22.1335 2.1625C22.1311 2.1599 22.1279 2.15606 22.1256 2.15346C22.1233 2.15086 22.12 2.14702 22.1177 2.14435C22.1154 2.14168 22.1122 2.13785 22.1099 2.13518L21.8403 1.87855C21.8272 1.86606 21.826 1.86528 21.8136 1.85436L21.7111 1.77005C21.5668 1.66135 21.441 1.54237 21.2936 1.4407C21.2587 1.41663 21.2556 1.42125 21.2211 1.39438C20.8855 1.13262 20.4207 0.87001 20.0293 0.701659C19.9993 0.688714 19.9804 0.676159 19.9493 0.662824L18.5295 0.214756C18.4229 0.200184 18.4206 0.185288 18.3386 0.167984L17.6587 0.0836137C17.4105 0.0494622 16.9594 0.0444533 16.6805 0.0594149C16.5412 0.0668957 16.3732 0.0990957 16.2377 0.109048L15.2888 0.280977C15.2425 0.292166 15.2367 0.298216 15.1988 0.309925C15.1283 0.331782 15.0674 0.347719 15.0012 0.366974C14.636 0.473137 14.2536 0.5927 13.9191 0.779069C13.654 0.926799 13.5665 0.952884 13.2847 1.12937L12.4169 1.75541C12.3671 1.79392 12.3437 1.8217 12.2883 1.8645L11.9679 2.17226C11.942 2.20582 11.93 2.21552 11.9051 2.24524L11.5582 2.64505C11.5169 2.69982 11.4862 2.73449 11.4465 2.78796C11.2699 3.02598 11.0937 3.27044 10.9533 3.53364C10.9258 3.58529 10.8942 3.63798 10.8616 3.69646C10.7426 3.91008 10.6477 4.14433 10.5525 4.37155L10.0289 6.10456C10.0095 6.19804 10.0226 6.23076 9.99376 6.32385L9.85864 7.17269C9.82965 7.34696 9.85213 9.86611 9.85213 10.1707V16.427C9.85213 16.5834 9.86314 16.7839 9.85128 16.935C9.84594 17.0033 9.82744 17.0878 9.81955 17.1577C9.81219 17.2226 9.806 17.3415 9.79095 17.4005L9.47844 18.134C9.46476 18.1942 9.4514 18.1895 9.41583 18.2474C9.34033 18.3703 9.28567 18.4433 9.1854 18.5429L9.01602 18.7131C8.79549 18.9146 8.70194 19.0051 8.40285 19.1523C7.8143 19.4421 7.16517 19.5294 6.50072 19.3494L6.37427 19.3061C6.30958 19.2834 6.31095 19.2941 6.24691 19.2636C6.24215 19.2614 6.22899 19.2546 6.2241 19.2525L5.88038 19.0868C5.84234 19.0637 5.80781 19.0447 5.77439 19.0231L5.694 18.9664C5.67556 18.9556 5.68644 18.9602 5.65647 18.9481C5.63686 18.9279 5.58422 18.8889 5.55679 18.8672C5.51341 18.8328 5.4893 18.8128 5.44487 18.7753L5.15991 18.4832C5.04375 18.3507 4.99222 18.2571 4.9145 18.1176L4.77886 17.8629C4.7001 17.6938 4.61365 17.4327 4.59059 17.2537C4.51814 16.6907 4.55234 14.3002 4.55234 13.686L4.55176 7.79308C4.55182 7.69772 4.57254 7.62402 4.58205 7.55194C4.61417 7.30878 4.55795 7.20132 4.55215 7.08143C4.53534 6.73412 4.55234 5.90271 4.55234 5.5208V3.46853C4.55234 3.15433 4.52179 2.73228 4.57189 2.45341C4.62414 2.1627 4.51404 1.65401 4.39469 1.37013L4.31455 1.19572C4.22152 1.01749 4.06419 0.819863 3.9221 0.671677C3.91969 0.66914 3.91617 0.665563 3.91376 0.663091C3.77376 0.523297 3.59017 0.369257 3.41701 0.277146C3.36463 0.249239 3.31818 0.214437 3.25329 0.186205L3.06671 0.118097C2.9927 0.0920117 2.72957 0.00790136 2.651 0.007446C2.56618 0.0069256 2.48018 0.00855186 2.3951 0.00855186C1.95281 0.00855186 2.02558 -0.0338611 1.67548 0.0702198L1.29885 0.203053C1.12647 0.283651 0.82992 0.493049 0.700536 0.62328C0.644118 0.680069 0.624053 0.705959 0.572455 0.766781C0.45317 0.907486 0.345415 1.05183 0.260592 1.21862L0.174727 1.40428C0.0665816 1.68354 -0.000195016 1.96306 4.27851e-07 2.26444V14.636V14.6355Z"
                                            fill="white" fill-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col flex-grow justify-end pb-6">
                                <span class="xl:text-base text-sm font-medium">Available Balance</span>
                                <span class="xl:text-2xl text-lg font-medium">NGN <?php echo isset($userData["upay_account"]) ? number_format($userData["upay_account"], 2) : "0.00"; ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Statistic cards -->
                    <div class="grid grid-cols-2 sm:grid-cols-2 xl:grid-cols-4 xl:gap-4 sm:gap-3 gap-2.5">
                        <!-- Active Tasks -->
                        <div class="rounded-llg flex-1 bg-white sm:flex-1/2 md:flex-1/4 flex flex-row items-center justify-between sm:p-5 p-3 cursor-pointer border hover:border-ubuy-blue300">
                            <div class="rounded-full flex-shrink">
                                <svg class="w-12 sm:w-16" width="71" height="70" viewBox="0 0 71 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="35.5" cy="35" r="35" fill="#56CCF2" />
                                    <path d="M47.5 27.5H23.5C21.8431 27.5 20.5 28.8431 20.5 30.5V45.5C20.5 47.1569 21.8431 48.5 23.5 48.5H47.5C49.1569 48.5 50.5 47.1569 50.5 45.5V30.5C50.5 28.8431 49.1569 27.5 47.5 27.5Z" stroke="#56CCF2" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M41.5 27.5V24.5C41.5 23.7044 41.1839 22.9413 40.6213 22.3787C40.0587 21.8161 39.2956 21.5 38.5 21.5H32.5C31.7044 21.5 30.9413 21.8161 30.3787 22.3787C29.8161 22.9413 29.5 23.7044 29.5 24.5V27.5" stroke="#56CCF2" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M20.5 35H49.75" stroke="#56CCF2" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="flex flex-col items-center justify-center gap-y-4">
                                <span class="md:text-3xl text-2xl text-ubuy-blue300 font-medium activeProjectCount">0</span>
                                <span class="text-ubuy-secondary md:text-sm text-xs font-normal text-center">Active Tasks</span>
                            </div>
                        </div>
                        <!-- Active Bids -->
                        <div class="rounded-llg flex-1 bg-white sm:flex-1/2 md:flex-1/4 flex flex-row items-center sm:p-5 p-3 justify-between cursor-pointer border hover:border-ubuy-purple200">
                            <div class="rounded-full flex-shrink">
                                <svg class="w-12 sm:w-16" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="35" cy="35" r="35" fill="#BB6BD9" />
                                    <path d="M38 20H26C25.2044 20 24.4413 20.3161 23.8787 20.8787C23.3161 21.4413 23 22.2044 23 23V47C23 47.7956 23.3161 48.5587 23.8787 49.1213C24.4413 49.6839 25.2044 50 26 50H44C44.7956 50 45.5587 49.6839 46.1213 49.1213C46.6839 48.5587 47 47.7956 47 47V29L38 20Z"
                                        stroke="#BB6BD9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M38 20V29H47" stroke="#BB6BD9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M41 36.5H29" stroke="#BB6BD9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M41 42.5H29" stroke="#BB6BD9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M32 30.5H30.5H29" stroke="#BB6BD9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="flex flex-col items-center justify-center gap-y-4">
                                <span class="text-ubuy-purple200 md:text-3xl text-2xl font-medium">0</span>
                                <span class="text-ubuy-secondary md:text-sm text-xs font-normal text-center">Active Bids</span>

                            </div>
                        </div>
                        <!-- Ratings -->
                        <div class="rounded-llg flex-1 bg-white sm:flex-1/2 md:flex-1/4 flex flex-row items-center justify-between sm:p-5 p-3 cursor-pointer border hover:border-ubuy-yellow200">
                            <div class="rounded-full flex-shrink">
                                <svg class="w-12 sm:w-16" width="71" height="70" viewBox="0 0 71 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="35.5" cy="35" r="35" fill="#FFBC1F" />
                                    <path d="M35.5 20L40.135 29.39L50.5 30.905L43 38.21L44.77 48.53L35.5 43.655L26.23 48.53L28 38.21L20.5 30.905L30.865 29.39L35.5 20Z" stroke="#FFBC1F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="flex flex-col items-center justify-center gap-y-4">
                                <span class="md:text-3xl text-2xl text-ubuy-yellow200 font-medium"><?php echo isset($userData["average_rating"]) ? $userData["average_rating"] : "0"; ?></span>
                                <span class="text-ubuy-secondary md:text-sm text-xs font-normal text-center">Ratings</span>
                            </div>
                        </div>
                        <!-- Available Coins -->
                        <div class="rounded-llg flex-1 bg-white sm:flex-1/2 md:flex-1/4 flex flex-row items-center justify-between sm:p-5 p-3 cursor-pointer border hover:border-ubuy-yellow300">
                            <div class="rounded-full flex-shrink">
                                <svg class="w-12 sm:w-16" width="71" height="70" viewBox="0 0 71 70" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path
                                        d="M0.499519 45.7529V53.7228C0.499519 56.4296 7.71749 58.6853 16.5896 58.6853C25.4617 58.6853 32.5293 56.5048 32.5293 53.7981V52.8959L32.6797 46.5801H32.6046C31.4016 48.911 24.785 50.7155 16.8153 50.7155C8.84548 50.7155 0.649906 48.4599 0.649906 45.7531H0.499519V45.7529Z"
                                        fill="#E2A63B" />
                                    <path
                                        d="M17.0415 16.1289V24.0236H17.1919C17.1919 26.8055 24.6354 28.986 33.4324 28.986C36.8158 29.0611 40.2745 28.6852 43.5827 27.8581L43.7331 28.0085C45.3873 26.6552 47.2669 25.6026 49.2969 24.9259V24.7755L49.5225 16.4297C48.9962 18.986 42.0037 21.0161 33.5075 21.0161C25.0113 21.0161 17.1919 18.8356 17.1919 16.1289H17.0415Z"
                                        fill="#F4B844" />
                                    <path d="M17.0417 16.2792C17.0417 18.9859 24.4852 21.1663 33.3573 21.1663C42.2294 21.1663 48.921 19.1363 49.4473 16.58C49.4473 16.5048 49.5225 16.3544 49.5225 16.2792C49.5225 13.5725 42.3045 11.3168 33.3571 11.3168C24.41 11.2416 17.0417 13.4972 17.0417 16.2792Z"
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

                    <div class="flex flex-row w-full gap-x-6">
                        <!-- Task update: Displayed only on mobile -->
                        <div class="flex flex-col w-full sm:hidden">
                            <h1 class="mb-4 text-sm font-medium text-ubuy-black">Recent Tasks</h1>
                            <tbody id="dashboardListMobile">

                                <tr id="loadLi">
                                    <td colspan="7" class="text-center">
                                        <button class="text-ubuy-blue py-2">
                                            <img src="assets/images/loader.gif" width="80" height="80" class="" /> 
                                        </button>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td colspan="4" class="text-center">
                                        <a href="task.php" class="text-ubuy-blue py-2">
                                            See all Tasks
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </div>
                        <!-- Task update: Displayed only on mobile End -->

                        <!-- Recent Task Table -->
                        <div class="rounded-llg flex-1 xl:w-4/6 w-full sm:block bg-white">
                            <h1 class="text-base mb-5 px-5 py-4">Recent Tasks</h1>
                            <table class="w-full recent-task-table table-auto text-secondary font-normal text-xxs">
                                <thead>
                                    <tr class="border-b border-gray-200 ">
                                        <th class="w-3/12 text-left pl-5 pb-2.5">Date Posted</th>
                                        <th class="w-4/12 text-left pb-2.5">Title</th>
                                        <th class="w-3/12 text-left pb-2.5">Category</th>
                                        <th class="w-2/12 text-left pb-2.5">Status</th>
                                    </tr>
                                </thead>
                                <tbody id="dashboardList">
                                    <tr id="loadLi">
                                        <td colspan="7" class="text-center">
                                            <button class="text-ubuy-blue py-2">
                                                <img src="assets/images/loader.gif" width="80" height="80" class="" /> 
                                            </button>
                                        </td>
                                    </tr>                                    
                                </tbody>
                            </table>

                        </div>
                        <!-- Recent Task Table End -->
                        <!-- To-do table -->
                        <div class="rounded-llg flex-1 w-2/6 hidden xl:block bg-white">
                            <ul class="text-xxs">
                                <li class="text-base px-5 py-4 border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                    To-Do
                                </li>
                                <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                    <div class="px-5 py-4">
                                        <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z" fill="#119AE2" fill-opacity="0.1" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path d="M8.5 10C9.32843 10 10 9.32843 10 8.5C10 7.67157 9.32843 7 8.5 7C7.67157 7 7 7.67157 7 8.5C7 9.32843 7.67157 10 8.5 10Z" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path d="M21 15L16 10L5 21" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <div class="text-left pr-5 py-4 flex-grow">
                                        Upload Profile Cover Photo
                                    </div>
                                    <div class="pr-5 py-4/4">
                                    <?php 
                                    if($userData['public_url'] != null || $userData['public_url'] != '') { ?>
                                        <span class="bg-ubuy-positiveDefault rounded px-5 py-1 text-white w-24 text-center text-xxxs">Uploaded</span>
                                    <?php }else{ ?>
                                        <a href="profile-settings.php"><span class="bg-ubuy-negativeDefault rounded px-5 py-1 text-white w-24 text-center">Pending</span></a>
                                    <?php } ?>
                                    </div>
                                </li>

                                <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                    <div class="px-5 py-4">
                                        <svg fill="none" height="22" viewBox="0 0 18 22" width="18" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 21C9 21 17 17 17 11V4L9 1L1 4V11C1 17 9 21 9 21Z" fill="#2AC769" fill-opacity="0.1" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <div class="text-left pr-5 py-4 flex-grow">
                                        Verify Identity
                                    </div>
                                    <div class="pr-5 py-4">
                                        <?php if($userData['verify_confirm'] == 2 ) { ?>
                                            <div class="bg-ubuy-positiveDefault rounded p-2 text-white w-24 text-center text-xxxs">
                                                Verified
                                            </div>
                                        <?php }else{ ?>
                                            <div class="bg-ubuy-negativeDefault rounded p-2 text-white w-24 text-center text-xxxs">
                                                Not Verified
                                            </div>
                                        <?php } ?>
                                    </div>
                                </li>

                                <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                    <div class="px-5 py-4">
                                        <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" fill="#F6A609" fill-opacity="0.1" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path d="M22 6L12 13L2 6" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <div class="text-left pr-5 py-4 flex-grow">
                                        Verify Email Address
                                    </div>
                                    <div class="pr-5 py-4">
                                        <?php if($userData['email_verified_at'] != null ) { ?>
                                            <div class="bg-ubuy-positiveDefault rounded p-2 text-white w-24 text-center text-xxxs">
                                                Verified
                                            </div>
                                        <?php }else{ ?>
                                            <div class="bg-ubuy-negativeDefault rounded p-2 text-white w-24 text-center text-xxxs">
                                                Not Verified
                                            </div>
                                        <?php } ?>
                                    </div>
                                </li>

                                <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                    <div class="px-5 py-4">
                                        <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.5996 6.3999C14.5996 8.05762 13.2573 9.3999 11.5996 9.3999C9.94189 9.3999 8.59961 8.05762 8.59961 6.3999C8.59961 4.74219 9.94189 3.3999 11.5996 3.3999C13.2573 3.3999 14.5996 4.74219 14.5996 6.3999ZM4.59961 16.3999C4.59961 16.1022 4.74081 15.7674 5.15237 15.3876C5.57072 15.0015 6.19814 14.64 6.97023 14.3307C8.51603 13.7114 10.3896 13.3999 11.5996 13.3999C12.8096 13.3999 14.6832 13.7114 16.229 14.3307C17.0011 14.64 17.6285 15.0015 18.0469 15.3876C18.4584 15.7674 18.5996 16.1022 18.5996 16.3999V17.3999H4.59961V16.3999Z"
                                                fill="#BB6BD9" fill-opacity="0.1" stroke="#BB6BD9" stroke-width="2" />
                                            <path
                                                d="M21.5933 17.3225L21.5934 17.3225L21.6002 17.3171C21.9661 17.0244 22.0417 16.524 21.8408 16.1444L21.8343 16.1322L21.8274 16.1202L21.0889 14.8417C20.8409 14.4039 20.3457 14.2943 19.9734 14.4184L19.9519 14.4255L19.9308 14.434L19.3769 14.6567C19.3685 14.6518 19.3601 14.647 19.3517 14.6421L19.2683 14.0528L19.2684 14.0528L19.2674 14.0466C19.1963 13.5726 18.7897 13.2505 18.3406 13.2505H16.8594C16.3869 13.2505 16.0048 13.5955 15.9372 14.0466L15.9372 14.0466L15.9363 14.0528L15.8528 14.6429C15.8447 14.6476 15.8366 14.6523 15.8285 14.657L15.2738 14.434L15.2738 14.434L15.2659 14.4309C14.84 14.2652 14.3481 14.432 14.1158 14.8415L13.3772 16.1202L13.3771 16.1202L13.371 16.1311C13.1559 16.5183 13.2291 17.0298 13.6151 17.3254L14.0729 17.683C14.0728 17.6898 14.0728 17.6966 14.0728 17.7034C14.0728 17.709 14.0728 17.7146 14.0728 17.7203L13.6067 18.0844L13.6066 18.0843L13.5998 18.0898C13.2339 18.3825 13.1582 18.8829 13.3592 19.2624L13.3657 19.2747L13.3726 19.2866L14.1111 20.5651C14.359 21.003 14.8543 21.1126 15.2266 20.9885L15.2481 20.9813L15.2692 20.9728L15.8231 20.7501C15.8315 20.755 15.8399 20.7599 15.8483 20.7647L15.9317 21.3541L15.9346 21.3752L15.9388 21.3961C16.0218 21.811 16.3813 22.1564 16.8594 22.1564H18.3406C18.7757 22.1564 19.2046 21.8437 19.2651 21.3441L19.3472 20.764C19.3553 20.7593 19.3634 20.7546 19.3715 20.7498L19.9262 20.9728L19.9262 20.9729L19.9341 20.976C20.36 21.1416 20.8519 20.9748 21.0842 20.5653L21.8228 19.2866L21.8229 19.2867L21.8289 19.2757C22.0436 18.8893 21.9712 18.3791 21.5872 18.0832L21.1272 17.7195C21.1272 17.7142 21.1272 17.7088 21.1272 17.7034C21.1272 17.6978 21.1272 17.6922 21.1271 17.6866L21.5933 17.3225ZM17.6 18.342C17.2505 18.342 16.9614 18.0529 16.9614 17.7034C16.9614 17.3539 17.2505 17.0648 17.6 17.0648C17.9495 17.0648 18.2386 17.3539 18.2386 17.7034C18.2386 18.0529 17.9495 18.342 17.6 18.342Z"
                                                fill="white" stroke="#BB6BD9" stroke-width="1.5" />
                                            <circle cx="17.6" cy="17.6005" fill="white" r="0.6" />
                                        </svg>

                                    </div>
                                    <div class="text-left pr-5 py-4 flex-grow">
                                        Complete your Profile
                                    </div>
                                    <div class="pr-5 py-4">

                                        <?php if($userData['verify_confirm'] == 2 ) { ?>
                                            <div class="bg-ubuy-positiveDefault rounded p-2 text-white w-24 text-center text-xxxs">
                                                Verified
                                            </div>
                                        <?php }elseif($userData['verify_confirm'] == 1 ) { ?>
                                            <div class="bg-ubuy-warningDefault rounded p-2 text-white w-24 text-center text-xxxs">
                                                Pending
                                            </div>
                                        <?php }else{ ?>
                                            <div class="bg-ubuy-negativeDefault rounded p-2 text-white w-24 text-center text-xxxs">
                                                Not Verified
                                            </div>
                                        <?php } ?>

                                    </div>
                                </li>

                                <li class="border-b border-gray-200 cursor-pointer text-left items-center flex-row flex">
                                    <div class="px-5 py-4">
                                        <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 12V22H4V12" fill="#FB4E4E" fill-opacity="0.1" />
                                            <path d="M20 12V22H4V12" stroke="#FB4E4E" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path d="M22 7H2V12H22V7Z" fill="#FB4E4E" fill-opacity="0.1" stroke="#FB4E4E" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path d="M12 22V7" stroke="#FB4E4E" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path d="M12 7H7.5C6.83696 7 6.20107 6.73661 5.73223 6.26777C5.26339 5.79893 5 5.16304 5 4.5C5 3.83696 5.26339 3.20107 5.73223 2.73223C6.20107 2.26339 6.83696 2 7.5 2C11 2 12 7 12 7Z" fill="#FB4E4E" fill-opacity="0.1" stroke="#FB4E4E"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path d="M12 7H16.5C17.163 7 17.7989 6.73661 18.2678 6.26777C18.7366 5.79893 19 5.16304 19 4.5C19 3.83696 18.7366 3.20107 18.2678 2.73223C17.7989 2.26339 17.163 2 16.5 2C13 2 12 7 12 7Z" fill="#FB4E4E" fill-opacity="0.1" stroke="#FB4E4E"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <div class="text-left pr-5 py-4 flex-grow">
                                        Invite and Earn
                                    </div>
                                    <div class="pr-5 py-4">
                                        <a href="u-earn.php" class="bg-ubuy-negativeDefault rounded px-5 py-1 text-white w-24 text-center">Get started</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- To-do table End -->
                    </div>
                </div>
            </div>
        </main>
<?php 
    require_once("inc/pro-footer.php"); ?>

<script type="text/javascript">
        var pendingProject = {
            "url": "endpoints/pendingProject.php",
            "method": "GET",
            "timeout": 0,
        };
        $.ajax(pendingProject).done(function(response) {
            // console.log(response)
            const a = JSON.parse(response);
            $(".pendingProjectCount").html(a.count);
        });

        var completedProject = {
            "url": "endpoints/completedProject.php",
            "method": "GET",
            "timeout": 0,
        };
        $.ajax(completedProject).done(function(response) {
            // console.log(response)
            const a = JSON.parse(response);
            $(".completedProjectCount").html(a.count);
        });

        var activeProject = {
            "url": "endpoints/activeProject.php",
            "method": "GET",
            "timeout": 0,
        };
        $.ajax(activeProject).done(function(response) {
            // console.log(response)
            const a = JSON.parse(response);
            $(".activeProjectCount").html(a.count);
        });

        var archivedProject = {
            "url": "endpoints/archivedProject.php",
            "method": "GET",
            "timeout": 0,
        };
        $.ajax(archivedProject).done(function(response) {
            // console.log(response)
            const a = JSON.parse(response);
            $(".archivedProjectCount").html(a.count);
        });

        fetch("endpoints/fetchAllProjects.php").then(
        res => {
            res.json().then(
            data => {
                // console.log(data.projects);
                $("#loadLi").fadeOut().hide();
                $("#mobileLoader").fadeOut().hide();
                if (data.projects.length > 0) {
                    var temp = "";
                    var numberOfRow = data.projects.length;

                    const list = data.projects;
                    const size = 3;
                    const reducedData = list.slice(0, size);
                    //  console.log(items);
                    // console.log(i);
                    for (const itemData of reducedData) {

                        var one_day = 1000 * 60 * 60 * 24;
                        var present_date = new Date();
                        var dueDate = new Date(itemData.due_date);

                        if (present_date.getMonth() == 11 && present_date.getdate() > 25) dueDate.setFullYear(dueDate.getFullYear() + 1)
                            var Result = Math.round(dueDate.getTime() - present_date.getTime()) / (one_day);
                            var Final_Result = Result.toFixed(0);

                        if( itemData.pro_name != null){
                            var proName = itemData.pro_name;
                        }else{
                            var proName = "Not assigned";
                        }

                        var projectStatus;

                        switch(itemData.status){
                            case 0:
                                projectStatus = "Pending";
                                projectColor = "bg-ubuy-purple200";
                            break;
                            case 1:
                                projectStatus = "Open";
                                projectColor = "bg-ubuy-yellow200";
                            break;
                            case 2:
                                projectStatus = "In progress";
                                projectColor = "bg-ubuy-blue";
                            break;
                            case 3:
                                projectStatus = "Completed";
                                projectColor = "bg-ubuy-positiveDefault";
                            break;
                            case 4:
                                projectStatus = "Paused";
                                projectColor = "bg-ubuy-secondary";
                            break;
                            case 5:
                                projectStatus = "Archived";
                                projectColor = "bg-ubuy-black";
                            break;
                        };
                       
                        temp += '<tr class="border-b border-gray-200 cursor-pointer text-left">';
                        temp += '<td class="px-5 py-4">';
                        temp += '<span>'+new Date(itemData.created_at).toDateString()+'</span>';
                        temp += '</td>';
                        temp += '<td class="pr-5 py-4">'+itemData.project_title+'</td>';
                        temp += '<td class="pr-5 py-4">';
                        temp += 'Web Development';
                        temp += '</td>';
                        temp += '<td class="pr-5 py-4">';
                        temp += '<div class="'+projectColor+' rounded p-2 text-white w-full text-center text-xxxs">'+projectStatus+'</div>';
                        temp += '</td>';
                        temp += '</tr> ';
                    }
                    $('#dashboardList').html(temp);                    
                }else{
                    $('#dashboardList').html('<tr class="border-b border-gray-200 cursor-pointer text-center"><td>No record found!</td></tr>');  
                }
            })
        })

        </script>