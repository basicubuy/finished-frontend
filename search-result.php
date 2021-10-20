<?php require_once 'inc/home-header.php'; ?>
    <main class="w-full overflow-hidden">
        <section class="px-8 pb-24 w-full bg-white">
            <div class="w-full mx-auto max-w-7xl mb-1 rounded-llg contact-hero px-8 py-16 xl:py-44 xl:px-14 relative flex flex-col justify-center items-center bg-ubuy-shade100">
                <h1 class="text-2xl md:text-32 xl:text-44 text-center xl:leading-relaxed mb-3">
                    Find the best professionals for your needs
                </h1>
                <div class="lg:text-2xl text-sm text-center mb-10">
                    120 skilled professionals found in your location
                </div>
                <div class="flex flex-row rounded-lg max-w-2xl w-full mx-auto bg-white" style="border: 1px solid rgba(229, 229, 229, 0.4); box-shadow: 0px 0px 77px rgba(0, 0, 0, 0.05)">
                    <label for="category" class="flex flex-row items-center py-4 px-6">
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21 21.0004L16.65 16.6504" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 9L12 15L18 9" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </label>
                    <select name="category" id="category" class="text-ubuy-black text-base appearance-none focus:outline-none border-r border-ubuy-gray450 bg-white pr-6 w-1/2">
                        <option value="Photograhers" selected>Photograhers</option>
                    </select>
                    <label for="location" class="self-center relative flex flex-row w-1/2">
                        <span class="ml-6 flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <input type="text" name="location" id="location" class="rounded-llg focus:outline-none w-full px-3 py-4" value="Lagos" />
                        <button class="rounded bg-ubuy-blue p-2 shadow-card absolute right-4 top-1/2 transform -translate-y-1/2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </label>
                </div>
            </div>
        </section>
        <section class="w-full bg-ubuy-shadee py-16">
            <div class="wrapper mx-auto">
                <div class="mb-10 text-center max-w-3xl mx-auto">
                    <h1 class="text-32 font-semibold text-ubuy-dark mb-2.5">
                        Photographers in Lagos
                    </h1>
                    <p class="text-base text-ubuy-secondary text-center ">
                        120 skilled Photographers found around Lagos
                    </p>
                </div>
                <div class="mb-10">
                    <div class="flex flex-row justify-between items-center text-sm text-ubuy-secondary border-b border-ubuy-gray200 pb-10">
                        <div class="bg-white rounded-llg py-2 px-5 flex flex-row items-center sm:w-52 border border-ubuy-gray450">
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
                                        Sort by: Date Joined
                                    </span>
                                </div>

                                <select name="sort-by" id="sort-by" class="bg-transparent text-ubuy-black py-2 px-3 appearance-none w-full">
                                    <option value=""></option>
                                </select>
                            </label>

                        </div>
                        <div class="bg-white py-3 px-5  flex flex-row items-center rounded-llg border border-ubuy-gray450">
                            <label for="filter-pros" class="flex flex-row">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.1554 0H0.84473C0.0952696 0 -0.282906 0.909351 0.248129 1.44039L6.74999 7.94324V15.1875C6.74999 15.4628 6.88433 15.7208 7.10989 15.8787L9.92239 17.8468C10.4773 18.2352 11.25 17.8415 11.25 17.1555V7.94324L17.752 1.44039C18.282 0.910406 17.9064 0 17.1554 0Z"
                                        fill="#52575C" />
                                </svg>
                                <span class="ml-3 sm:inline hidden">Filter</span>
                            </label>
                            <select name="filter-pro" id="filter-pro" class="px-3 py-2 bg-transparent appearance-none">
                                <option value=""></option>
                            </select>

                        </div>

                    </div>


                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5 lg:gap-6 w-full">
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-8 flex flex-col items-center justify-center">
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center">
                                <div class="w-16 h-16 bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png');"></div>
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
                                “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                            </p>
                            <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2">
                                Contact Pro
                            </button>
                        </div>
                    </div>
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-8 flex flex-col items-center justify-center">
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center">
                                <div class="w-16 h-16 bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png');"></div>
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
                                                <path
                                                    d="M10.7611 9.39841L10.4844 9.61064L10.588 9.94358L12.0481 14.6389L8.29229 11.7442L7.98629 11.5083L7.68086 11.7449L3.95318 14.6325L5.41131 9.94358L5.51484 9.61067L5.23823 9.39843L1.47299 6.50935H6.13156H6.50043L6.60929 6.15691L7.9909 1.68406L9.39126 6.15868L9.501 6.50935H9.86844H14.5268L10.7611 9.39841Z"
                                                    stroke="#CACCCF" />
                                            </svg>

                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.7611 9.39841L10.4844 9.61064L10.588 9.94358L12.0481 14.6389L8.29229 11.7442L7.98629 11.5083L7.68086 11.7449L3.95318 14.6325L5.41131 9.94358L5.51484 9.61067L5.23823 9.39843L1.47299 6.50935H6.13156H6.50043L6.60929 6.15691L7.9909 1.68406L9.39126 6.15868L9.501 6.50935H9.86844H14.5268L10.7611 9.39841Z"
                                                    stroke="#CACCCF" />
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
                                “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                            </p>
                            <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2">
                                Contact Pro
                            </button>
                        </div>
                    </div>
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-8 flex flex-col items-center justify-center">
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center">
                                <div class="w-16 h-16 bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png');"></div>
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
                                “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                            </p>
                            <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2">
                                Contact Pro
                            </button>
                        </div>
                    </div>
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-8 flex flex-col items-center justify-center">
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center">
                                <div class="w-16 h-16 bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png');"></div>
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
                                                <path
                                                    d="M10.7611 9.39841L10.4844 9.61064L10.588 9.94358L12.0481 14.6389L8.29229 11.7442L7.98629 11.5083L7.68086 11.7449L3.95318 14.6325L5.41131 9.94358L5.51484 9.61067L5.23823 9.39843L1.47299 6.50935H6.13156H6.50043L6.60929 6.15691L7.9909 1.68406L9.39126 6.15868L9.501 6.50935H9.86844H14.5268L10.7611 9.39841Z"
                                                    stroke="#CACCCF" />
                                            </svg>

                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.7611 9.39841L10.4844 9.61064L10.588 9.94358L12.0481 14.6389L8.29229 11.7442L7.98629 11.5083L7.68086 11.7449L3.95318 14.6325L5.41131 9.94358L5.51484 9.61067L5.23823 9.39843L1.47299 6.50935H6.13156H6.50043L6.60929 6.15691L7.9909 1.68406L9.39126 6.15868L9.501 6.50935H9.86844H14.5268L10.7611 9.39841Z"
                                                    stroke="#CACCCF" />
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
                                “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                            </p>
                            <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2">
                                Contact Pro
                            </button>
                        </div>
                    </div>
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-8 flex flex-col items-center justify-center">
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center">
                                <div class="w-16 h-16 bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png');"></div>
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
                                “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                            </p>
                            <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2">
                                Contact Pro
                            </button>
                        </div>
                    </div>
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-8 flex flex-col items-center justify-center">
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center">
                                <div class="w-16 h-16 bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png');"></div>
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
                                                <path
                                                    d="M10.7611 9.39841L10.4844 9.61064L10.588 9.94358L12.0481 14.6389L8.29229 11.7442L7.98629 11.5083L7.68086 11.7449L3.95318 14.6325L5.41131 9.94358L5.51484 9.61067L5.23823 9.39843L1.47299 6.50935H6.13156H6.50043L6.60929 6.15691L7.9909 1.68406L9.39126 6.15868L9.501 6.50935H9.86844H14.5268L10.7611 9.39841Z"
                                                    stroke="#CACCCF" />
                                            </svg>

                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.7611 9.39841L10.4844 9.61064L10.588 9.94358L12.0481 14.6389L8.29229 11.7442L7.98629 11.5083L7.68086 11.7449L3.95318 14.6325L5.41131 9.94358L5.51484 9.61067L5.23823 9.39843L1.47299 6.50935H6.13156H6.50043L6.60929 6.15691L7.9909 1.68406L9.39126 6.15868L9.501 6.50935H9.86844H14.5268L10.7611 9.39841Z"
                                                    stroke="#CACCCF" />
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
                                “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                            </p>
                            <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2">
                                Contact Pro
                            </button>
                        </div>
                    </div>
                </div>
                <div class="my-10 flex flow-row items-center justify-center">
                    <a href="" class="text-center text-ubuy-blue flex flex-row items-center border border-ubuy-blue px-9 py-4 shadow-card" style="border-radius: 30px;">
                        <span class="mr-4">See More</span>
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 9L12 15L18 9" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>


    </main>
    <main class="w-full overflow-hidden" style="display: none;">
        <section class="px-8 pb-24 w-full bg-white">
            <div class="w-full mx-auto max-w-7xl mb-1 rounded-llg contact-hero px-8 py-16 xl:py-44 xl:px-14 relative flex flex-col justify-center items-center bg-ubuy-shade100">
                <h1 class="text-2xl md:text-32 xl:text-44 text-center xl:leading-relaxed mb-3">
                    Find the best professionals for your needs
                </h1>
                <div class="lg:text-2xl text-sm text-center mb-10">
                    120 skilled professionals found in your location
                </div>
                <div class="flex flex-row rounded-lg max-w-2xl w-full mx-auto bg-white" style="border: 1px solid rgba(229, 229, 229, 0.4); box-shadow: 0px 0px 77px rgba(0, 0, 0, 0.05)">
                    <label for="category" class="flex flex-row items-center py-4 px-6">
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21 21.0004L16.65 16.6504" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 9L12 15L18 9" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </label>
                    <select name="category" id="category" class="text-ubuy-black text-base appearance-none focus:outline-none border-r border-ubuy-gray450 bg-white pr-6 w-1/2">
                        <option value="Photograhers" selected>Photograhers</option>
                    </select>
                    <label for="location" class="self-center relative flex flex-row w-1/2">
                        <span class="ml-6 flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <input type="text" name="location" id="location" class="rounded-llg focus:outline-none w-full px-3 py-4" value="Lagos" />
                        <button class="rounded bg-ubuy-blue p-2 shadow-card absolute right-4 top-1/2 transform -translate-y-1/2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </label>
                </div>
            </div>
        </section>
        <section class="w-full bg-ubuy-shadee py-16">
            <div class="wrapper mx-auto">
                <div class="mb-10 text-center max-w-3xl mx-auto">
                    <h1 class="text-32 font-semibold text-ubuy-dark mb-2.5">
                        Photographers in Lagos
                    </h1>
                    <p class="text-base text-ubuy-secondary text-center ">
                        120 skilled Photographers found around Lagos
                    </p>
                </div>
                <div class="mb-10">
                    <div class="flex flex-row justify-between items-center text-sm text-ubuy-secondary border-b border-ubuy-gray200 pb-10">

                        <div class="bg-white rounded-llg py-2 px-5 flex flex-row items-center sm:w-52 border border-ubuy-gray450">
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
                                        Sort by: Date Joined
                                    </span>
                                </div>

                                <select name="sort-by" id="sort-by" class="bg-transparent text-ubuy-black py-2 px-3 appearance-none w-full">
                                    <option value=""></option>
                                </select>
                            </label>

                        </div>
                        <div class="bg-white py-3 px-5  flex flex-row items-center rounded-llg border border-ubuy-gray450">
                            <label for="filter-pros" class="flex flex-row">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.1554 0H0.84473C0.0952696 0 -0.282906 0.909351 0.248129 1.44039L6.74999 7.94324V15.1875C6.74999 15.4628 6.88433 15.7208 7.10989 15.8787L9.92239 17.8468C10.4773 18.2352 11.25 17.8415 11.25 17.1555V7.94324L17.752 1.44039C18.282 0.910406 17.9064 0 17.1554 0Z"
                                        fill="#52575C" />
                                </svg>
                                <span class="ml-3 sm:inline hidden">Filter</span>
                            </label>
                            <select name="filter-pro" id="filter-pro" class="px-3 py-2 bg-transparent appearance-none">
                                <option value=""></option>
                            </select>

                        </div>

                    </div>


                </div>
                <div class="grid grid-cols-1 gap-4 w-full">
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-6 flex flex-row items-center justify-center w-full">
                        <div>
                            <div class="bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png'); width: 140px; height: 140px;"></div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center w-full">
                                <div class="flex flex-row text-ubuy-black w-full justify-between">
                                    <div class="flex flex-row items-center">
                                        <h2 class="text-2xl font-medium mr-5">
                                            Dwayne Alade
                                        </h2>
                                        <div class="flex flex-row">
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
                                            <div class="flex flex-row items-center justify-center mx-3">
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
                            <div class="flex flex-row items-center justify-between w-full">
                                <h3 class="text-base">
                                    House Cleaner
                                </h3>
                                <div class="text-xs flex flow-row items-center">
                                    <span class="mr-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54926 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54926 14 5.07539 14 6.66669Z"
                                                stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Lagos
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between items-start my-3">
                                <p class="text-left text-sm text-ubuy-secondary flex-auto">
                                    “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                                </p>
                                <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2 whitespace-nowrap">
                                    Contact Pro
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-6 flex flex-row items-center justify-center w-full">
                        <div>
                            <div class="bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png'); width: 140px; height: 140px;"></div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center w-full">
                                <div class="flex flex-row text-ubuy-black w-full justify-between">
                                    <div class="flex flex-row items-center">
                                        <h2 class="text-2xl font-medium mr-5">
                                            Dwayne Alade
                                        </h2>
                                        <div class="flex flex-row">
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
                                            <div class="flex flex-row items-center justify-center mx-3">
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
                            <div class="flex flex-row items-center justify-between w-full">
                                <h3 class="text-base">
                                    House Cleaner
                                </h3>
                                <div class="text-xs flex flow-row items-center">
                                    <span class="mr-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54926 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54926 14 5.07539 14 6.66669Z"
                                                stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Lagos
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between items-start my-3">
                                <p class="text-left text-sm text-ubuy-secondary flex-auto">
                                    “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                                </p>
                                <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2 whitespace-nowrap">
                                    Contact Pro
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-6 flex flex-row items-center justify-center w-full">
                        <div>
                            <div class="bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png'); width: 140px; height: 140px;"></div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center w-full">
                                <div class="flex flex-row text-ubuy-black w-full justify-between">
                                    <div class="flex flex-row items-center">
                                        <h2 class="text-2xl font-medium mr-5">
                                            Dwayne Alade
                                        </h2>
                                        <div class="flex flex-row">
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
                                            <div class="flex flex-row items-center justify-center mx-3">
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
                            <div class="flex flex-row items-center justify-between w-full">
                                <h3 class="text-base">
                                    House Cleaner
                                </h3>
                                <div class="text-xs flex flow-row items-center">
                                    <span class="mr-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54926 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54926 14 5.07539 14 6.66669Z"
                                                stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Lagos
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between items-start my-3">
                                <p class="text-left text-sm text-ubuy-secondary flex-auto">
                                    “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                                </p>
                                <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2 whitespace-nowrap">
                                    Contact Pro
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-6 flex flex-row items-center justify-center w-full">
                        <div>
                            <div class="bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png'); width: 140px; height: 140px;"></div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center w-full">
                                <div class="flex flex-row text-ubuy-black w-full justify-between">
                                    <div class="flex flex-row items-center">
                                        <h2 class="text-2xl font-medium mr-5">
                                            Dwayne Alade
                                        </h2>
                                        <div class="flex flex-row">
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
                                            <div class="flex flex-row items-center justify-center mx-3">
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
                            <div class="flex flex-row items-center justify-between w-full">
                                <h3 class="text-base">
                                    House Cleaner
                                </h3>
                                <div class="text-xs flex flow-row items-center">
                                    <span class="mr-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54926 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54926 14 5.07539 14 6.66669Z"
                                                stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Lagos
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between items-start my-3">
                                <p class="text-left text-sm text-ubuy-secondary flex-auto">
                                    “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                                </p>
                                <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2 whitespace-nowrap">
                                    Contact Pro
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-6 flex flex-row items-center justify-center w-full">
                        <div>
                            <div class="bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png'); width: 140px; height: 140px;"></div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center w-full">
                                <div class="flex flex-row text-ubuy-black w-full justify-between">
                                    <div class="flex flex-row items-center">
                                        <h2 class="text-2xl font-medium mr-5">
                                            Dwayne Alade
                                        </h2>
                                        <div class="flex flex-row">
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
                                            <div class="flex flex-row items-center justify-center mx-3">
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
                            <div class="flex flex-row items-center justify-between w-full">
                                <h3 class="text-base">
                                    House Cleaner
                                </h3>
                                <div class="text-xs flex flow-row items-center">
                                    <span class="mr-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54926 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54926 14 5.07539 14 6.66669Z"
                                                stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Lagos
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between items-start my-3">
                                <p class="text-left text-sm text-ubuy-secondary flex-auto">
                                    “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                                </p>
                                <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2 whitespace-nowrap">
                                    Contact Pro
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-6 flex flex-row items-center justify-center w-full">
                        <div>
                            <div class="bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png'); width: 140px; height: 140px;"></div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center w-full">
                                <div class="flex flex-row text-ubuy-black w-full justify-between">
                                    <div class="flex flex-row items-center">
                                        <h2 class="text-2xl font-medium mr-5">
                                            Dwayne Alade
                                        </h2>
                                        <div class="flex flex-row">
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
                                            <div class="flex flex-row items-center justify-center mx-3">
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
                            <div class="flex flex-row items-center justify-between w-full">
                                <h3 class="text-base">
                                    House Cleaner
                                </h3>
                                <div class="text-xs flex flow-row items-center">
                                    <span class="mr-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54926 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54926 14 5.07539 14 6.66669Z"
                                                stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Lagos
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between items-start my-3">
                                <p class="text-left text-sm text-ubuy-secondary flex-auto">
                                    “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                                </p>
                                <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2 whitespace-nowrap">
                                    Contact Pro
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-6 flex flex-row items-center justify-center w-full">
                        <div>
                            <div class="bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png'); width: 140px; height: 140px;"></div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center w-full">
                                <div class="flex flex-row text-ubuy-black w-full justify-between">
                                    <div class="flex flex-row items-center">
                                        <h2 class="text-2xl font-medium mr-5">
                                            Dwayne Alade
                                        </h2>
                                        <div class="flex flex-row">
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
                                            <div class="flex flex-row items-center justify-center mx-3">
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
                            <div class="flex flex-row items-center justify-between w-full">
                                <h3 class="text-base">
                                    House Cleaner
                                </h3>
                                <div class="text-xs flex flow-row items-center">
                                    <span class="mr-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54926 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54926 14 5.07539 14 6.66669Z"
                                                stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Lagos
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between items-start my-3">
                                <p class="text-left text-sm text-ubuy-secondary flex-auto">
                                    “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                                </p>
                                <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2 whitespace-nowrap">
                                    Contact Pro
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-20 shadow-hw lg:px-6 px-5 py-6 flex flex-row items-center justify-center w-full">
                        <div>
                            <div class="bg-no-repeat bg-contain rounded-full mr-4" style="background-image: url('../../assets/images/profile.png'); width: 140px; height: 140px;"></div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center w-full">
                                <div class="flex flex-row text-ubuy-black w-full justify-between">
                                    <div class="flex flex-row items-center">
                                        <h2 class="text-2xl font-medium mr-5">
                                            Dwayne Alade
                                        </h2>
                                        <div class="flex flex-row">
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
                                            <div class="flex flex-row items-center justify-center mx-3">
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
                            <div class="flex flex-row items-center justify-between w-full">
                                <h3 class="text-base">
                                    House Cleaner
                                </h3>
                                <div class="text-xs flex flow-row items-center">
                                    <span class="mr-3">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 6.66669C14 11.3334 8 15.3334 8 15.3334C8 15.3334 2 11.3334 2 6.66669C2 5.07539 2.63214 3.54926 3.75736 2.42405C4.88258 1.29883 6.4087 0.666687 8 0.666687C9.5913 0.666687 11.1174 1.29883 12.2426 2.42405C13.3679 3.54926 14 5.07539 14 6.66669Z"
                                                stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 8.66669C9.10457 8.66669 10 7.77126 10 6.66669C10 5.56212 9.10457 4.66669 8 4.66669C6.89543 4.66669 6 5.56212 6 6.66669C6 7.77126 6.89543 8.66669 8 8.66669Z" stroke="#707683" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span>
                                        Lagos
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between items-start my-3">
                                <p class="text-left text-sm text-ubuy-secondary flex-auto">
                                    “Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non nisi convallis viverra. Proin in nunc varius lorem mattis dictum. ”
                                </p>
                                <button class="rounded-llg text-white font-medium text-center bg-ubuy-blue px-5 py-2 whitespace-nowrap">
                                    Contact Pro
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-10 flex flow-row items-center justify-center">
                    <a href="" class="text-center text-ubuy-blue flex flex-row items-center border border-ubuy-blue px-9 py-4 shadow-card" style="border-radius: 30px;">
                        <span class="mr-4">See More</span>
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 9L12 15L18 9" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>
    </main>
<?php require_once 'inc/home-footer.php'; ?>