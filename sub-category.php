<?php require_once 'inc/home-header.php'; ?>
<?php

$singleSub = $init->fetchSingleSubcategory($_GET['subcat-id']);
$singleSub = json_decode($singleSub, true);
$singleSub = $singleSub['subCategory'];

?>
    <main class="w-full overflow-hidden">
        <section class="bg-white">
            <div class="max-w-7xl mx-auto py-8 w-full">
                <div class="w-full rounded-llg overlay category-hero px-8 py-16 xl:py-24 xl:px-14 text-white relative flex flex-col justify-center items-center bg-center bg-no-repeat bg-cover" style="background-image: url('<?php echo $singleSub['public_bg_image']; ?>');">
                    <h1 class=" text-2xl md:text-32 xl:text-44 text-center xl:leading-relaxed mb-8">
                        Hire <?php echo $singleSub['name']; ?> Near you
                    </h1>
                    <p class="text-center px-1 mb-14 text-sm">
                        <?php echo $singleSub['content_description']; ?>
                    </p>
                    <a href="dashboard.php?post-task=1" class="flex flex-row rounded-llg shadow-card py-5 px-8 bg-ubuy-blue">
                        <span class="mr-2">Submit Task</span>
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <section class="pt-16 bg-white">
            <div class="wrapper mx-auto">
                <div class="max-w-3xl mx-auto mb-10">
                    <h1 class="text-ubuy-dark font-semibold text-center text-32 mb-2.5">
                        Featured House Cleaning Jobs
                    </h1>
                    <p class="text-ubuy-secondary text-center lg:text-xl text-sm">
                        Proud cleaning jobs by some of our Top Professional Cleaners
                    </p>
                </div>
            
                <div class="featured-jobs-slider relative">
                    <div class="splide__track min-w-ttft">
                        <div class="flex flex-row max-w-6xl mx-auto splide__list">
                            <div class="splide__slide">
                                <div class="flex flex-col rounded-llg border border-ubuy-gray450 max-w-tsh w-full">
                                    <div class="h-60 bg-no-repeat bg-cover bg-center rounded-t-llg relative flex items-start justify-end flex-col px-5 py-7 text-white" style="background-image: url('assets/images/house-cleaning.png');">
                                    </div>
                                    <div class="flex flex-row p-5 items-center">
                                        <div class="w-16 h-16 bg-center bg-no-repeat mr-4" style="background-image: url('assets/images/profile.png');"></div>
                                        <div class="flex flex-col">
                                            <span class="text-base text-ubuy-black">New Home Cleaning</span>
                                            <span class="text-sm text-ubuy-secondary">by John Ayomide</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="flex flex-col rounded-llg border border-ubuy-gray450 max-w-tsh w-full">
                                    <div class="h-60 bg-no-repeat bg-cover bg-center rounded-t-llg relative flex items-start justify-end flex-col px-5 py-7 text-white" style="background-image: url('assets/images/house-cleaning.png');">
                                    </div>
                                    <div class="flex flex-row p-5 items-center">
                                        <div class="w-16 h-16 bg-center bg-no-repeat mr-4" style="background-image: url('assets/images/profile.png');"></div>
                                        <div class="flex flex-col">
                                            <span class="text-base text-ubuy-black">New Home Cleaning</span>
                                            <span class="text-sm text-ubuy-secondary">by John Ayomide</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="flex flex-col rounded-llg border border-ubuy-gray450 max-w-tsh w-full">
                                    <div class="h-60 bg-no-repeat bg-cover bg-center rounded-t-llg relative flex items-start justify-end flex-col px-5 py-7 text-white" style="background-image: url('assets/images/house-cleaning.png');">
                                    </div>
                                    <div class="flex flex-row p-5 items-center">
                                        <div class="w-16 h-16 bg-center bg-no-repeat mr-4" style="background-image: url('assets/images/profile.png');"></div>
                                        <div class="flex flex-col">
                                            <span class="text-base text-ubuy-black">New Home Cleaning</span>
                                            <span class="text-sm text-ubuy-secondary">by John Ayomide</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row items-center text-sm font-medium justify-center mt-10">
                    <span>Still not convinced ?</span>
                    <a href="/" class="text-ubuy-blue ml-1"> See all</a>
                </div>

            </div>
        </section>
        <section class="bg-ubuy-gray400 py-16">
            <div class="w-full wrapper mx-auto">
                <div class="max-w-3xl mx-auto mb-10">
                    <h1 class="text-ubuy-dark font-semibold text-center text-32 mb-2.5">
                        Top Rated House cleaners Near you
                    </h1>
                    <p class="text-ubuy-secondary text-center text-sm">
                        Torquem detraxit hosti et quidem faciunt, ut et negent satis esse appetendum, alterum. Si sine causa? quae fuerit causa, mox videro; interea hoc epicurus in liberos.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5 lg:gap-6 w-full">

                
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-8 flex flex-col items-center justify-center">
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center">
                                <div class="w-16 h-16 bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('assets/images/profile.png');"></div>
                                <div class="flex flex-col text-ubuy-black">
                                    <h2 class="text-2xl font-medium ">
                                        Dwayne Alade
                                    </h2>
                                    <h3 class="text-base">
                                        House Cleaner
                                    </h3>
                                    <div class="flex flex-row items-center">
                                        <div class="flex flex-row items-center">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                            </svg>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                            </svg>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                            </svg>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                            </svg>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="#FFDD00" />
                                            </svg>
                                        </div>
                                        <span class="text-sm ml-1.5">
                                            (15)
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-between my-3">
                                <div class="flex flex-row items-center justify-center">
                                    <span class="mr-2">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#2AC769" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <span class="text-tinyer">Identity Verified</span>
                                </div>
                                <div class="flex flex-row items-center justify-center mx-2">
                                    <span class="mr-2">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#119AE2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <span class="text-tinyer">Phone Verified</span>
                                </div>
                                <div class="flex flex-row items-center justify-center">
                                    <span class="mr-2">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.16683 4.61677V5.00011C9.16632 5.89862 8.87537 6.77289 8.33738 7.49253C7.7994 8.21218 7.0432 8.73864 6.18156 8.9934C5.31993 9.24816 4.39902 9.21757 3.55619 8.90618C2.71336 8.5948 1.99377 8.01931 1.50473 7.26555C1.01569 6.51179 0.783409 5.62013 0.842528 4.72357C0.901647 3.82701 1.249 2.97358 1.83278 2.29055C2.41656 1.60753 3.20549 1.13152 4.08191 0.9335C4.95833 0.735485 5.87527 0.82608 6.696 1.19177"
                                                stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M9.16667 1.6665L5 5.83734L3.75 4.58734" stroke="#F6A609" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <span class="text-tinyer">Email Verified</span>
                                </div>
                            </div>
                        </div>
                        <hr style="border-color:rgba(17, 154, 226, 0.4); width: 248px;" class="my-5" />

                        <div class="flex flex-col items-center">
                            <h5 class="text-ubuy-inactive font-semibold text-base text-center mb-2.5">Latest Review</h5>
                            <p class="text-center text-base text-ubuy-secondary mb-6">
                                ???Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ???
                            </p>
                            <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2">
                                Contact Pro
                            </button>
                        </div>
                    </div>
                    

                </div>
                <div class="my-10 flex flow-row items-center justify-center">
                    <a href="" class="text-center text-ubuy-blue text-sm">See all House Cleaners in Abuja</a>
                </div>
            </div>
        </section>

        <section class="pb-10 bg-white">
            <div class="pt-10 wrapper mx-auto flex flex-col">
                <div class="w-full mb-12">
                    <h1 class="text-32 font-semibold text-ubuy-black text-center mb-2.5">Get Started</h1>
                    <h2 class="text-sm text-ubuy-secondary text-center">Find the best Professional service for your job now</h2>
                </div>
                <div class="flex md:flex-row flex-col items-stretch">
                    <div class="shadow-hw bg-white flex flex-col items-start sm:w-1/3 w-full p-7 rounded-20">
                        <div class="h-20 flex flex-row items-center justify-start mb-6">
                            <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.1" width="76" height="76" rx="38" fill="#119AE2" />
                                <path d="M50 30.5H26C24.3431 30.5 23 31.8431 23 33.5V48.5C23 50.1569 24.3431 51.5 26 51.5H50C51.6569 51.5 53 50.1569 53 48.5V33.5C53 31.8431 51.6569 30.5 50 30.5Z" stroke="#2F80ED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M44 30.5V27.5C44 26.7044 43.6839 25.9413 43.1213 25.3787C42.5587 24.8161 41.7956 24.5 41 24.5H35C34.2044 24.5 33.4413 24.8161 32.8787 25.3787C32.3161 25.9413 32 26.7044 32 27.5V30.5" stroke="#2F80ED" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M23 38H52.25" stroke="#2F80ED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl font-semibold text-black mb-2.5">Post Task</h1>
                            <div class="text-sm text-ubuy-secondary mb-7 w-11/12">
                                List tasks on Ubuy without paying service charges and get connected with top skilled professionals near you
                            </div>
                            <button class="flex flex-row items-center text-ubuy-blue font-bold text-lg">
                                <span>Post Task</span>
                                <span>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.20898 13.7692H16.379L11.499 18.6492C11.109 19.0392 11.109 19.6792 11.499 20.0692C11.889 20.4592 12.519 20.4592 12.909 20.0692L19.499 13.4792C19.889 13.0892 19.889 12.4592 19.499 12.0692L12.919 5.46924C12.7322 5.28199 12.4785 5.17676 12.214 5.17676C11.9495 5.17676 11.6958 5.28199 11.509 5.46924C11.119 5.85924 11.119 6.48924 11.509 6.87924L16.379 11.7692H5.20898C4.65898 11.7692 4.20898 12.2192 4.20898 12.7692C4.20898 13.3192 4.65898 13.7692 5.20898 13.7692Z"
                                            fill="#2D9CDB" />
                                        <path
                                            d="M5.20898 13.7692H16.379L11.499 18.6492C11.109 19.0392 11.109 19.6792 11.499 20.0692C11.889 20.4592 12.519 20.4592 12.909 20.0692L19.499 13.4792C19.889 13.0892 19.889 12.4592 19.499 12.0692L12.919 5.46924C12.7322 5.28199 12.4785 5.17676 12.214 5.17676C11.9495 5.17676 11.6958 5.28199 11.509 5.46924C11.119 5.85924 11.119 6.48924 11.509 6.87924L16.379 11.7692H5.20898C4.65898 11.7692 4.20898 12.2192 4.20898 12.7692C4.20898 13.3192 4.65898 13.7692 5.20898 13.7692Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="shadow-hw bg-white flex flex-col items-start sm:w-1/3 w-full p-7 sm:mx-5 rounded-20">
                        <div class="h-20 flex flex-row items-center justify-start mb-6">
                            <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.1" width="76" height="76" rx="38" fill="#FFBC1F" />
                                <path d="M41 23H29C28.2044 23 27.4413 23.3161 26.8787 23.8787C26.3161 24.4413 26 25.2044 26 26V50C26 50.7956 26.3161 51.5587 26.8787 52.1213C27.4413 52.6839 28.2044 53 29 53H47C47.7956 53 48.5587 52.6839 49.1213 52.1213C49.6839 51.5587 50 50.7956 50 50V32L41 23Z"
                                    stroke="#E89806" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M41 23V32H50" stroke="#E89806" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M44 39.5H32" stroke="#E89806" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M44 45.5H32" stroke="#E89806" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M35 33.5H33.5H32" stroke="#E89806" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl font-semibold text-black mb-2.5">Recieve and Accept Bid</h1>
                            <div class="text-sm text-ubuy-secondary mb-7 w-11/12">
                                Choose among the multiple bids one that best suits your budget and requirement.
                            </div>
                        </div>
                    </div>
                    <div class="shadow-hw bg-white flex flex-col items-start sm:w-1/3 w-full p-7 rounded-20">
                        <div class="h-20 flex flex-row items-center justify-start mb-6">
                            <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.1" width="76" height="76" rx="38" fill="#40DD7F" />
                                <path d="M51.5 26H24.5C22.8431 26 21.5 27.3431 21.5 29V47C21.5 48.6569 22.8431 50 24.5 50H51.5C53.1569 50 54.5 48.6569 54.5 47V29C54.5 27.3431 53.1569 26 51.5 26Z" stroke="#219653" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21.5 35H54.5" stroke="#219653" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M41.4615 46H40.3415L38.8197 43.851H35.8369V46H34.7169V43.851H33V42.7765H34.7169V41.702H33V40.6275H34.7169V38H35.8369L37.701 40.6275H40.3415V38H41.4615V40.6275H43V41.702H41.4615V42.7765H43V43.851H41.4615V46ZM35.8369 42.7765H38.0588L37.2979 41.702H35.8369V42.7765ZM39.9878 43.851L40.3415 44.3496V43.851H39.9878ZM40.3415 42.7765H39.2255L38.4633 41.702H40.3415V42.7765ZM35.8369 39.639L36.537 40.6275H35.8369V39.639Z"
                                    fill="#219653" />
                                <rect x="42" y="30" width="8" height="2" fill="#219653" />
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl font-semibold text-black mb-2.5">Pay Safely</h1>
                            <div class="text-sm text-ubuy-secondary mb-7 w-11/12">
                                Make payment safely to hired Professionals when job is done and satisfactory.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center text-sm text-ubuy-black sm:flex hidden flex-row items-center justify-center mt-10 mb-20">
                <span>Or</span>
                <a class="text-ubuy-blue mx-1">contact U-Assistant </a>
                <span> to help you hire the best Professional Service near you</span>
            </div>
        </section>

        <section class="md:block hidden w-full mb-12 h-full apps-slider relative">
            <div class="splide__track">
                <div class="splide__list min-w-full flex flex-row">
                    <div class="splide__slide">
                        <div class="bg-no-repeat bg-cover"
                            style="background-image: url('assets/images/bg-app-section.jpeg');">
                            <div class="wrapper mx-auto w-full flex flex-row items-center justify-between">
                                <div class="w-2/3 mr-6">
                                    <h2 class="lg:text-32  mb-2.5 text-base font-semibold text-ubuy-blue">
                                        Download our APP
                                    </h2>
                                    <h1 class="lg:text-44 text-2xl font-bold text-ubuy-blue mb-2.5">
                                        Double your Experience
                                    </h1>
                                    <p class="lg:text-sm text-xs text-ubuy-black mb-5">
                                        Find and hire skilled professionals easily and enjoy our amazing promotions and
                                        loyalty bonus on the Ubuy Services mobile app. Also collaborate effectively with our
                                        real-time messaging and file sharing system
                                    </p>
                                    <div class="flex flex-row">
                                        <a href=""
                                            class="flex flex-row items-center rounded-llg bg-ubuy-black text-white w-44 px-1.5 py-1 mr-12">
                                            <span class="mr-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0 11.8974V1.12821C0 0.512821 0.547945 0 1.09589 0C1.64384 0 1.86301 0.102563 2.19178 0.307692L23.3425 11.1795C23.7808 11.3846 24 11.6923 24 12C24 12.3077 23.7808 12.6154 23.3425 12.8205L2.19178 23.6923C1.9726 23.7949 1.64384 24 1.09589 24C0.547945 24 0 23.4872 0 22.8718V11.8974Z"
                                                        fill="url(#paint0_linear)" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.6964 12L0.874512 0C0.984101 0 0.984097 0 1.09369 0C1.64163 0 1.86081 0.102563 2.18958 0.307692L17.7512 8.30769L13.6964 12Z"
                                                        fill="url(#paint1_linear)" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.6434 15.5897L13.6982 11.8974L17.753 8.10254L23.3421 10.9743C23.7804 11.1795 23.9996 11.4872 23.9996 11.7948C23.9996 12.1025 23.7804 12.4102 23.3421 12.6154L17.6434 15.5897Z"
                                                        fill="url(#paint2_linear)" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0.983887 23.7951L13.6962 11.8977L17.6414 15.59L2.18937 23.4874C1.86061 23.6926 1.64142 23.7951 0.983887 23.7951C1.09348 23.7951 1.09348 23.7951 0.983887 23.7951Z"
                                                        fill="url(#paint3_linear)" />
                                                    <defs>
                                                        <linearGradient id="paint0_linear" x1="7.08756" y1="-1.46297"
                                                            x2="12.4988" y2="22.2824" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#006884" />
                                                            <stop offset="1" stop-color="#8AD1D0" />
                                                        </linearGradient>
                                                        <linearGradient id="paint1_linear" x1="-0.395954" y1="1.89108"
                                                            x2="15.8039" y2="11.2487" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#24BBB6" />
                                                            <stop offset="1" stop-color="#DBE692" />
                                                        </linearGradient>
                                                        <linearGradient id="paint2_linear" x1="18.8428" y1="16.0206"
                                                            x2="18.8428" y2="7.86839" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#FCC072" />
                                                            <stop offset="1" stop-color="#F58A5B" />
                                                        </linearGradient>
                                                        <linearGradient id="paint3_linear" x1="2.84109" y1="25.9173"
                                                            x2="15.1604" y2="12.521" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#712B8F" />
                                                            <stop offset="1" stop-color="#EA1D27" />
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <div class="flex flex-col">
                                                <span class="text-tiny">GET IT ON</span>
                                                <span class="text-base font-semibold">Google Play</span>
                                            </div>
                                        </a>
                                        <a href=""
                                            class="flex flex-row items-center rounded-llg bg-ubuy-black text-white w-44 px-1.5 py-1">
                                            <span class="mr-2">
                                                <svg width="20" height="24" viewBox="0 0 20 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.2783 12.8237C16.2783 9.81205 18.8042 8.35481 18.9013 8.25766C17.4441 6.21751 15.3068 5.92607 14.5296 5.82892C12.6837 5.63462 10.8379 6.89756 9.96354 6.89756C8.99205 6.89756 7.5348 5.82892 5.9804 5.82892C3.94026 5.82892 2.09442 6.99471 1.02577 8.84056C-1.11152 12.5322 0.442872 17.9726 2.48302 20.9843C3.55166 22.4415 4.71746 24.0931 6.27186 23.9959C7.82625 23.8988 8.40915 23.0244 10.255 23.0244C12.1008 23.0244 12.5866 23.9959 14.2381 23.9959C15.8897 23.9959 16.9583 22.5387 17.9298 21.0814C19.0956 19.4299 19.5814 17.7783 19.5814 17.6812C19.4842 17.584 16.2783 16.4182 16.2783 12.8237Z"
                                                        fill="white" />
                                                    <path
                                                        d="M13.2668 3.88599C14.044 2.81734 14.6269 1.45725 14.5297 0C13.3639 0.0971497 11.8095 0.777198 11.0323 1.84584C10.2551 2.72019 9.57508 4.17744 9.76938 5.53753C11.0323 5.63468 12.3924 4.85749 13.2668 3.88599Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                            <div class="flex flex-col">
                                                <span class="text-tiny">Download on the </span>
                                                <span class="text-base font-semibold">App Store</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="w-1/3 py-3">
                                    <img src="assets/images/phone-mockup.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div style="background: rgba(17, 154, 226, 0.03);">
                            <div class="wrapper mx-auto py-7">
                                <div class="flex flex-row items-center">
                                    <div class="w-1/2">
                                        <div>
                                            <img src="assets/images/assistant-icon.png" alt="" />
                                        </div>
                                        <div class="mt-7 mb-5">
                                            <div class="text-32 uppercase text-ubuy-black">
                                                <span>HOW MAY </span>
                                                <span class="text-ubuy-blue font-medium"> WE ASSIST YOU</span>
                                                <span> ?</span>
                                            </div>
                                            <p class="text-sm text-ubuy-black">
                                                Reach out to us via Whatsapp to get connected to skilled professionals
                                                easily and also share your concerns and feedbacks.
                                            </p>
                                        </div>

                                        <button
                                            class="flex flex-row items-center justify-center text-white rounded-llg bg-ubuy-blue py-2.5 px-5">
                                            <span class="mr-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0)">
                                                        <path
                                                            d="M20.5037 3.48769C18.2475 1.23993 15.2475 0.00137141 12.0513 0C5.46482 0 0.104787 5.33475 0.10215 11.8919C0.101383 13.9879 0.651466 16.034 1.69703 17.8375L0.00183105 24L6.33619 22.3464C8.08143 23.294 10.0465 23.7933 12.0461 23.7941H12.0512H12.0513C18.6366 23.7941 23.9975 18.4584 24.0003 11.9016C24.0014 8.72364 22.7595 5.73561 20.5037 3.48769ZM12.0513 21.7855H12.0474C10.265 21.7846 8.51708 21.3081 6.9925 20.4075L6.62967 20.1933L2.87073 21.1745L3.87432 17.527L3.63792 17.1531C2.64368 15.5792 2.11881 13.7603 2.11956 11.8927C2.12174 6.44257 6.5768 2.00867 12.055 2.00867C14.7079 2.00976 17.2012 3.03926 19.0765 4.90753C20.9516 6.77579 21.9835 9.25937 21.9827 11.9007C21.9804 17.351 17.5252 21.7855 12.0513 21.7855Z"
                                                            fill="#E0E0E0" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9.09753 6.84272C8.87647 6.35338 8.64371 6.34359 8.43339 6.33503C8.26137 6.32768 8.06443 6.32813 7.8678 6.32813C7.67102 6.32813 7.35125 6.40176 7.08083 6.69579C6.81026 6.98982 6.04773 7.70062 6.04773 9.14626C6.04773 10.5921 7.10543 11.989 7.25286 12.1852C7.40045 12.3812 9.29463 15.4427 12.2945 16.6204C14.7876 17.5993 15.2949 17.4046 15.8361 17.3556C16.3772 17.3066 17.5822 16.6449 17.8282 15.9588C18.0742 15.2727 18.0742 14.6847 18.0004 14.5618C17.9266 14.4393 17.7298 14.3659 17.4346 14.2189C17.1394 14.072 15.6885 13.361 15.4179 13.2631C15.1473 13.1651 14.9506 13.1161 14.7538 13.4103C14.557 13.7042 13.9917 14.3659 13.8195 14.5618C13.6473 14.7582 13.4752 14.7826 13.18 14.6357C12.8848 14.4883 11.9343 14.1784 10.8066 13.1773C9.92925 12.3986 9.33689 11.4368 9.16471 11.1426C8.99253 10.8487 9.14625 10.6895 9.29431 10.543C9.42682 10.4114 9.58948 10.2 9.73707 10.0285C9.88434 9.85687 9.93354 9.73442 10.0319 9.5385C10.1303 9.34227 10.0811 9.17071 10.0073 9.02377C9.93354 8.87684 9.35996 7.42373 9.09753 6.84272Z"
                                                            fill="white" />
                                                        <path
                                                            d="M20.406 3.44962C18.1758 1.22766 15.2102 0.00334413 12.0507 0.00195312C5.5398 0.00195312 0.241302 5.27546 0.238685 11.7574C0.237917 13.8293 0.781684 15.8519 1.81524 17.6347L0.139526 23.7264L6.40118 22.0918C8.1264 23.0285 10.0689 23.5221 12.0456 23.5229H12.0506H12.0507C18.5604 23.5229 23.8597 18.2484 23.8625 11.7668C23.8636 8.62546 22.636 5.67174 20.406 3.44962ZM12.0507 21.5374H12.0468C10.2849 21.5365 8.55702 21.0655 7.04995 20.1752L6.69127 19.9635L2.97548 20.9334L3.96754 17.3278L3.73386 16.9582C2.75104 15.4023 2.23218 13.6043 2.23295 11.7581C2.23509 6.37061 6.63901 1.9876 12.0544 1.9876C14.6768 1.98868 17.1415 3.00636 18.9952 4.85318C20.8488 6.7 21.8688 9.15506 21.8681 11.7661C21.8658 17.1538 17.4617 21.5374 12.0507 21.5374Z"
                                                            fill="white" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span>
                                                Chat now
                                            </span>
                                        </button>
                                    </div>
                                    <div class="w-1/2 flex justify-end">
                                        <img src="assets/images/uassistant-phone.png" class="w-80 h-auto" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full bg-white py-16">
            <div class="wrapper mx-auto flex flex-col items-center">
                <h1 class="text-32 text-ubuy-black font-medium mb-10">
                    FAQs
                </h1>
                <div class="w-full ">
                    <details class="mb-8">
                        <summary>
                            Is it safe to hire house cleaners on Ubuy Services ?
                        </summary>
                        <div>
                            Fugiat aute esse aliquip adipisicing laboris exercitation. Dolor id aute duis ex sunt. Ipsum aute qui laboris in irure aliquip quis nisi mollit ex dolor nisi id. Nostrud ipsum consectetur eiusmod nulla mollit laboris do veniam consequat ipsum qui aliqua culpa minim.
                            Deserunt laborum enim ullamco tempor esse mollit adipisicing in consequat. Ad anim ad enim consectetur excepteur officia nisi ea. Ullamco eu occaecat in occaecat ad proident occaecat sunt. Reprehenderit sit sint irure ex aute non in reprehenderit laborum magna fugiat.
                            Velit ex mollit ex laborum. Dolor anim cillum occaecat sint ex minim excepteur proident nisi sint.
                        </div>
                    </details>
                    <details class="mb-8">
                        <summary>
                            How long does it take to hire a house cleaner on Ubuy Services ?
                        </summary>
                        <div>
                            Fugiat aute esse aliquip adipisicing laboris exercitation. Dolor id aute duis ex sunt. Ipsum aute qui laboris in irure aliquip quis nisi mollit ex dolor nisi id. Nostrud ipsum consectetur eiusmod nulla mollit laboris do veniam consequat ipsum qui aliqua culpa minim.
                            Deserunt laborum enim ullamco tempor esse mollit adipisicing in consequat. Ad anim ad enim consectetur excepteur officia nisi ea. Ullamco eu occaecat in occaecat ad proident occaecat sunt. Reprehenderit sit sint irure ex aute non in reprehenderit laborum magna fugiat.
                            Velit ex mollit ex laborum. Dolor anim cillum occaecat sint ex minim excepteur proident nisi sint.
                        </div>
                    </details>
                    <details class="mb-8">
                        <summary>
                            How much does it cost to hire a house cleaner on Ubuy Services ?
                        </summary>
                        <div>
                            Fugiat aute esse aliquip adipisicing laboris exercitation. Dolor id aute duis ex sunt. Ipsum aute qui laboris in irure aliquip quis nisi mollit ex dolor nisi id. Nostrud ipsum consectetur eiusmod nulla mollit laboris do veniam consequat ipsum qui aliqua culpa minim.
                            Deserunt laborum enim ullamco tempor esse mollit adipisicing in consequat. Ad anim ad enim consectetur excepteur officia nisi ea. Ullamco eu occaecat in occaecat ad proident occaecat sunt. Reprehenderit sit sint irure ex aute non in reprehenderit laborum magna fugiat.
                            Velit ex mollit ex laborum. Dolor anim cillum occaecat sint ex minim excepteur proident nisi sint.
                        </div>
                    </details>
                    <details class="mb-8">
                        <summary>
                            What if I find the work unsatisfactory ?
                        </summary>
                        <div>
                            Fugiat aute esse aliquip adipisicing laboris exercitation. Dolor id aute duis ex sunt. Ipsum aute qui laboris in irure aliquip quis nisi mollit ex dolor nisi id. Nostrud ipsum consectetur eiusmod nulla mollit laboris do veniam consequat ipsum qui aliqua culpa minim.
                            Deserunt laborum enim ullamco tempor esse mollit adipisicing in consequat. Ad anim ad enim consectetur excepteur officia nisi ea. Ullamco eu occaecat in occaecat ad proident occaecat sunt. Reprehenderit sit sint irure ex aute non in reprehenderit laborum magna fugiat.
                            Velit ex mollit ex laborum. Dolor anim cillum occaecat sint ex minim excepteur proident nisi sint.
                        </div>
                    </details>
                </div>

            </div>
        </section>

        <section class="w-full bg-no-repeat bg-cover bg-left" style="background-image: url('assets/images/bottom-section-bg.png');">
            <div class="wrapper mx-auto">
                <div class="flex flex-col items-center justify-center py-9">
                    <h1 class="text-2xl text-ubuy-black font-medium text-center mb-5">
                        Ready to hire a Professional House Cleaner ?
                    </h1>
                    <button class="flex flex-row items-center rounded-md bg-ubuy-blue text-white px-5 py-4">
                        <span class="mr-2">Submit Task</span>
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </section>
    </main>
<?php require_once 'inc/home-footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
        new Splide('.featured-jobs-slider', {
            type: 'loop',
            perPage: 3,
            focus  : 'center',
        }).mount();

        new Splide('.apps-slider', {
                focus: 'center',
                autoplay: true,
                pauseOnHover: true,
            }).mount();

</script>