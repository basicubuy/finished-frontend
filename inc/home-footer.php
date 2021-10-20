<!--Submit task form step 1-->
<div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6 taskFormAll" id="submit-task-form" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
<!-- <form id="taskFormCompleted" class="flex-col rounded-3xl shadow bg-white" style="width: 700px; height: 700px;"> -->
    <!--Submit task form step 1-->
    <div class="ubuy-post-task-form-container hidden flex-col rounded-3xl shadow bg-white w-1/2" id="post-task-form-1">
        <header class="w-full flex flex-col relative ">
            <div class="w-full flex flex-row items-center justify-center py-7">
                <h1 class="text-lg font-bold text-center mx-12">Tell us what you want done</h1>
                <button class="absolute right-6" onclick="closeSubmitTaskForm()">
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>
            <progress class="w-full text-ubuy-blue task-form-progress" max="100" value="32"></progress>
        </header>
        <div class="py-14 px-10 flex-grow flex flex-col">
            <div class="flex flex-col mb-10">
                <label class="text-lg font-medium inline-block mb-2.5" for="task-name">Task title</label>
                <input class="w-full border rounded-md py-3 px-5 text-sm task-form-input" id="project_title" name="project_title" placeholder="choose a name fo your task." required/>
            </div>
            <div class="flex flex-col">
                <label class="text-lg font-medium inline-block mb-2.5" for="task-details">Task Details</label>
                <textarea class="w-full task-form-input border rounded-md p-5 resize-none text-sm h-36" id="project_message" name="project_message" placeholder="Tell us more about your project" required></textarea>
            </div>
            <div class="flex flex-col h-full items-center justify-end pt-10">
                <button type="button" onclick="onNext(0, 1)" class="rounded-lg text-white px-5 py-2 bg-ubuy-blue w-40 h-12 font-semibold">
                    Next
                </button>
            </div>
        </div>
    </div>
    <!--Submit task form step 2-->
    <div class="ubuy-post-task-form-container hidden flex-col rounded-3xl shadow bg-white w-1/2" id="post-task-form-2">
        <header class="w-full flex flex-col relative">
            <div class="w-full flex flex-row items-center justify-center py-7">
                <button onclick="onNext(1, 0)" class="absolute left-6 flex flex-row items-center text-ubuy-blue gap-x-2">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6663 8H3.33301" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7.99967 12.6668L3.33301 8.00016L7.99967 3.3335" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Back</span>
                </button>
                <h1 class="text-lg font-bold text-center mx-24">Set budget and task category</h1>
                <button class="absolute right-6"  onclick="closeSubmitTaskForm()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <progress value="60" max="100" class="w-full text-ubuy-blue task-form-progress"></progress>
        </header>

        <div class="py-14 px-10 flex-grow flex flex-col" style="overflow-y: scroll;">
            <div class="flex md:flex-row flex-col w-full justify-between mb-10 gap-6">
                <div class="flex flex-col md:w-1/2 w-full">
                    <label for="task-budget" class="text-lg font-medium inline-block mb-2.5">Budget (N)</label>
                    <input id="budget" name="budget" class="w-full border rounded-md py-3 px-5 text-sm task-form-input" placeholder="10,000">
                </div>
                <div class="flex flex-col md:w-1/2 w-full">
                    <label for="task-category" class="text-lg font-medium inline-block mb-2.5">Category</label>
                    <select id="project_category" name="project_category" class="w-full border rounded-md py-3 px-5 appearance-none text-sm task-form-input task-form-select-with-double-arrow" onselect="fetchSubCat();" onchange="fetchSubCat();">
                        <option value="" selected>Select your task category</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col mb-10">
                <label for="task-sub-category" class="text-lg font-medium inline-block mb-2.5">Sub-Category</label>
                <select id="sub_category" name="sub_category" class="w-full border rounded-md py-3 px-5 appearance-none text-sm task-form-input task-form-select-with-double-arrow" onchange="fetchSkills(this.id)" onselect="fetchSkills(this.id)">
                    <option value="" selected>Select sub-category your task falls in</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="task-sub-category" class="text-lg font-medium inline-block mb-2.5">Select Skills:</label>
                <div class="container">
                    <div class="flex w-full items-center justify-center hidden" id="skills-loader">
                        <img src="assets/images/loader.gif" width="40" height="40" class="" />
                    </div>
                    <ul class="ks-cboxtags" id="skills-list">
                        
                    </ul>

                </div>


            </div>
            <div class="flex flex-col h-full items-center justify-end mt-4">
                <button type="button" onclick="onNext(1, 2)" class="rounded-lg text-white text-sm px-5 py-2 bg-ubuy-blue w-40 h-12 font-semibold">
                    Next
                </button>
            </div>

        </div>

    </div>
    <!--Submit task form step 3-->
    <div class="ubuy-post-task-form-container hidden flex-col rounded-3xl shadow bg-white w-1/2" id="post-task-form-3">
        <header class="w-full flex flex-col relative">
            <div class="w-full flex flex-row items-center justify-center py-7">
                <button onclick="onNext(2, 1)" class="absolute left-6 flex flex-row items-center text-ubuy-blue gap-x-2">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6663 8H3.33301" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7.99967 12.6668L3.33301 8.00016L7.99967 3.3335" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Back</span>
                </button>
                <h1 class="text-lg font-bold text-center mx-24">Tell us where and when ?</h1>
                <button class="absolute right-6"  onclick="closeSubmitTaskForm()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

            </div>
            <progress value="100" max="100" class="w-full text-ubuy-blue task-form-progress"></progress>
        </header>

        <div class="py-14 px-10 flex-grow flex flex-col">
            <div class="flex md:flex-row flex-col w-full justify-between mb-10 gap-6" id="ifArtisan">
                <div class="flex flex-col w-full">
                    <label for="task-state" class="text-lg font-medium inline-block mb-2.5">Location</label>
                    <input type="text" id="locator" name="locator" onfocus="initializeAutocomplete2()" class="w-full border border-gray-200 rounded-tr-md rounded-br-md appearance-none py-3 px-5 text-sm task-form-input" />
                    <input type="hidden" id="lat" name="lat"/>
                    <input type="hidden" id="lng" name="lng"/>
                    <input type="hidden" id="city" name="lat"/>
                    <input type="hidden" id="state" name="state"/>
                </div>
                <div class="flex flex-col w-full">
                    <label for="task-landmark" class="text-lg font-medium inline-block mb-2.5">Nearest landmark</label>
                    <input type="text" id="landmark" name="landmark" class="w-full border border-gray-200 rounded-tr-md rounded-br-md appearance-none py-3 px-5 text-sm task-form-input" />
                </div>
            </div>

            <div class="flex flex-col">
                <div class="text-lg font-medium inline-block mb-2.5">Date</div>
                <label for="task-deadline" class="w-full flex flex-row">
                    <div class="border-r rounded-tl-md rounded-bl-md flex items-center py-3 px-5 task-form-date-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 2V6" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 2V6" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 10H21" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <!-- TODO: Open state of the Date select-->
                    <input type="date" name="due_date" id="due_date" class="w-full border border-gray-200 rounded-tr-md rounded-br-md appearance-none py-3 px-5 text-sm task-form-input" placeholder="26/10/2020">
                </label>
            </div>

            <div class="flex flex-col h-full items-center justify-end mt-4">
                <button type="button" id="taskFormCompleted" onclick="submitTask(this.id);" class="rounded-lg text-white px-5 py-2 bg-ubuy-blue w-40 h-12 text-sm font-semibold">
                    Post Task
                </button>
            </div>
        </div>
    </div>
<!-- </form> -->
</div>

<footer class="w-full bg-ubuy-blue900 text-white text-xxs">
        <div class="border-b border-white w-full py-4 sm:block hidden">
            <div class="flex flex-row items-center wrapper mx-auto">
                <img src="assets/images/logo.png" alt="ubuy logo" class="sm:mr-10" />
                <div class="flex-1 flex flex-row items-center gap-x-4">
                    <a href="">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.2969 2H15.2969C13.9708 2 12.699 2.52678 11.7613 3.46447C10.8237 4.40215 10.2969 5.67392 10.2969 7V10H7.29688V14H10.2969V22H14.2969V14H17.2969L18.2969 10H14.2969V7C14.2969 6.73478 14.4022 6.48043 14.5898 6.29289C14.7773 6.10536 15.0317 6 15.2969 6H18.2969V2Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M23.2969 2.9998C22.3393 3.67528 21.279 4.19191 20.1569 4.5298C19.5546 3.83731 18.7542 3.34649 17.8639 3.12373C16.9736 2.90096 16.0364 2.957 15.179 3.28426C14.3215 3.61151 13.5853 4.1942 13.0699 4.95352C12.5544 5.71283 12.2846 6.61214 12.2969 7.5298V8.5298C10.5395 8.57537 8.79815 8.18561 7.22788 7.39525C5.65762 6.60488 4.30719 5.43844 3.29688 3.9998C3.29688 3.9998 -0.703125 12.9998 8.29688 16.9998C6.2374 18.3978 3.78403 19.0987 1.29688 18.9998C10.2969 23.9998 21.2969 18.9998 21.2969 7.4998C21.296 7.22126 21.2692 6.9434 21.2169 6.6698C22.2375 5.6633 22.9577 4.39251 23.2969 2.9998Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(0.296875)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.2969 2H7.29688C4.53545 2 2.29688 4.23858 2.29688 7V17C2.29688 19.7614 4.53545 22 7.29688 22H17.2969C20.0583 22 22.2969 19.7614 22.2969 17V7C22.2969 4.23858 20.0583 2 17.2969 2Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M16.2971 11.3698C16.4205 12.2021 16.2783 13.052 15.8908 13.7988C15.5033 14.5456 14.8902 15.1512 14.1387 15.5295C13.3872 15.9077 12.5355 16.0394 11.7049 15.9057C10.8742 15.7721 10.1068 15.3799 9.51191 14.785C8.91699 14.1901 8.5248 13.4227 8.39114 12.592C8.25747 11.7614 8.38914 10.9097 8.7674 10.1582C9.14566 9.40667 9.75126 8.79355 10.4981 8.40605C11.2449 8.01856 12.0948 7.8764 12.9271 7.99981C13.776 8.1257 14.5619 8.52128 15.1688 9.12812C15.7756 9.73496 16.1712 10.5209 16.2971 11.3698Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.7969 6.5H17.8069" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.2969 8C17.8882 8 19.4143 8.63214 20.5395 9.75736C21.6647 10.8826 22.2969 12.4087 22.2969 14V21H18.2969V14C18.2969 13.4696 18.0862 12.9609 17.7111 12.5858C17.336 12.2107 16.8273 12 16.2969 12C15.7664 12 15.2577 12.2107 14.8827 12.5858C14.5076 12.9609 14.2969 13.4696 14.2969 14V21H10.2969V14C10.2969 12.4087 10.929 10.8826 12.0542 9.75736C13.1795 8.63214 14.7056 8 16.2969 8V8Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.29688 9H2.29688V21H6.29688V9Z" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M4.29688 6C5.40144 6 6.29688 5.10457 6.29688 4C6.29688 2.89543 5.40144 2 4.29688 2C3.19231 2 2.29688 2.89543 2.29688 4C2.29688 5.10457 3.19231 6 4.29688 6Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M22.837 6.42C22.7182 5.94541 22.4762 5.51057 22.1356 5.15941C21.795 4.80824 21.3677 4.55318 20.897 4.42C19.177 4 12.297 4 12.297 4C12.297 4 5.41696 4 3.69696 4.46C3.22621 4.59318 2.79894 4.84824 2.45831 5.19941C2.11767 5.55057 1.87575 5.98541 1.75696 6.46C1.44217 8.20556 1.28819 9.97631 1.29696 11.75C1.28574 13.537 1.43973 15.3213 1.75696 17.08C1.88792 17.5398 2.13526 17.9581 2.4751 18.2945C2.81494 18.6308 3.23578 18.8738 3.69696 19C5.41696 19.46 12.297 19.46 12.297 19.46C12.297 19.46 19.177 19.46 20.897 19C21.3677 18.8668 21.795 18.6118 22.1356 18.2606C22.4762 17.9094 22.7182 17.4746 22.837 17C23.1493 15.2676 23.3033 13.5103 23.297 11.75C23.3082 9.96295 23.1542 8.1787 22.837 6.42V6.42Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.0469 15.02L15.7969 11.75L10.0469 8.47998V15.02Z" stroke="white"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(0.296875)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div>
                    <div class="flex flex-row">
                        <a href=""
                            class="flex flex-row items-center rounded-llg text-white px-4 py-1 mr-12 border border-ubuy-gray450"
                            style="background-color :rgba(255, 255, 255, 0.1);">
                            <span class="mr-2">
                                <img src="assets/images/playstore-icon.svg" />
                            </span>
                            <div class="flex flex-col">
                                <span class="text-tiny">GET IT ON</span>
                                <span class="md:text-base text-sm font-semibold">Google Play</span>
                            </div>
                        </a>
                        <a href=""
                            class="flex flex-row items-center rounded-llg bg-ubuy-black text-white px-4 py-1 border border-ubuy-gray450"
                            style="background-color :rgba(255, 255, 255, 0.1);">
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
                                <span class="md:text-base text-sm font-semibold">App Store</span>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>
        <!-- Nav mobile -->
        <div class="sm:hidden flex flex-col w-full mobile-footer text-white">
            <details class="w-full">
                <summary class="border-b wrapper mx-auto py-2">
                    Company
                </summary>
                <div>
                    <ul class="grid grid-cols-1 gap-y-5 items-start">
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="careers.php">Careers</a>
                        </li>
                        <li>
                            <a href="contact.php">Contacts</a>
                        </li>
                        <li>
                            <a href="privacy.php">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="">Terms of Use</a>
                        </li>
                        <li>
                            <a href="blog/">Blog</a>
                        </li>
                    </ul>
                </div>
            </details>

            <details class="w-full">
                <summary class="border-b wrapper mx-auto py-2">
                    Customers
                </summary>
                <div>
                    <ul class="grid grid-cols-1 gap-y-5 items-start">
                        <li>
                            <a href="category.php?category_id=1">Categories</a>
                        </li>
                        <li>
                            <a href="contact.php">U-Assistant</a>
                        </li>
                        <li>
                            <a href="sign-in.php">Login / Sign Up</a>
                        </li>
                        <li>
                            <a href="how-it-work.php">Hire a pro</a>
                        </li>
                        <li>
                            <a href="states.php">Popular projects</a>
                        </li>
                        <li>
                            <a href="#">Get Customer App</a>
                        </li>
                    </ul>
                </div>
            </details>

            <details class="w-full">
                <summary class="border-b wrapper mx-auto py-2">
                    Professionals
                </summary>
                <div>
                    <ul class="grid grid-cols-1 gap-y-5 items-start">
                        <li>
                            <a href="category.php?category_id=1">Categories</a>
                        </li>
                        <li>
                            <a href="contact.php">U-Assistant</a>
                        </li>
                        <li>
                            <a href="sign-in.php">Login / Sign Up</a>
                        </li>
                        <li>
                            <a href="how-it-work.php">Hiring, Hire  professional</a>
                        </li>
                        <li>
                            <a href="states.php">Popular projects</a>
                        </li>
                        <li>
                            <a href="#">Get Customer App</a>
                        </li>
                    </ul>
                </div>
            </details>

            <details class="w-full">
                <summary class="border-b wrapper mx-auto py-2">
                    Company
                </summary>
                <div>
                    <ul class="grid grid-cols-1 gap-y-5 items-start">
                        <li>
                            <a href="guidelines.php">Pro Guidelines</a>
                        </li>
                        <li>
                            <a href="guidelines.php">Bidding for task</a>
                        </li>
                        <li>
                            <a href="sign-in.php">Login / Become a Pro</a>
                        </li>
                        <li>
                            <a href="#">Success Stories</a>
                        </li>
                        <li>
                            <a href="#">Get Pro App</a>
                        </li>
                    </ul>
                </div>
            </details>

            <details class="w-full">
                <summary class="border-b wrapper mx-auto py-2">
                    Resources
                </summary>
                <div>
                    <ul class="grid grid-cols-1 gap-y-5 items-start">
                        <li>
                            <a href="faq.php">FAQs</a>
                        </li>
                        <li>
                            <a href="contact.php">Customer Support</a>
                        </li>
                        <li>
                            <a href="guidelines.php">Safety Guidelines</a>
                        </li>
                        <li>
                            <a href="#">Testimonies</a>
                        </li>
                        <li>
                            <a href="guidelines.php">Community Guidelines</a>
                        </li>
                        <li>
                            <a href="help.php">Help</a>
                        </li>
                    </ul>
                </div>
            </details>
        </div>
        <div class="border-b border-white w-full pt-4 pb-4">
            <div class="wrapper mx-auto flex flex-col md:flex-row pb-1">
                <!-- Nav Desktop and Tablet -->
                <div class="sm:grid hidden grid-cols-4 gap-4 flex-2">
                    <div class="flex flex-col">
                        <h1 class="text-lg font-medium mb-5">Company</h1>
                        <ul class="grid grid-cols-1 gap-y-5">
                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            <li>
                                <a href="careers.php">Careers</a>
                            </li>
                            <li>
                                <a href="contact.php">Contacts</a>
                            </li>
                            <li>
                                <a href="privacy.php">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Terms of Use</a>
                            </li>
                            <li>
                                <a href="blog/">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg font-medium mb-5">Customers</h1>
                        <ul class="grid grid-cols-1 gap-y-5">
                            <li>
                                <a href="category.php?category_id=1">Categories</a>
                            </li>
                            <li>
                                <a href="contact.php">U-Assistant</a>
                            </li>
                            <li>
                                <a href="sign-in.php">Login / Sign Up</a>
                            </li>
                            <li>
                                <a href="how-it-work.php">Hire a pro</a>
                            </li>
                            <li>
                                <a href="states.php">Popular projects</a>
                            </li>
                            <li>
                                <a href="#">Get Customer App</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg font-medium mb-5">Professionals</h1>
                        <ul class="grid grid-cols-1 gap-y-5">
                            <li>
                                <a href="guidelines.php">Pro Guidelines</a>
                            </li>
                            <li>
                                <a href="#">Bidding for task</a>
                            </li>
                            <li>
                                <a href="sign-in.php">Login / Become a Pro</a>
                            </li>
                            <li>
                                <a href="#">Success Stories</a>
                            </li>
                            <li>
                                <a href="#">Get Pro App</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg font-medium mb-5">Resources</h1>
                        <ul class="grid grid-cols-1 gap-y-5">
                            <li>
                                <a href="faq.php">FAQs</a>
                            </li>
                            <li>
                                <a href="contact.php">Customer Support</a>
                            </li>
                            <li>
                                <a href="guidelines.php">Safety Guidelines</a>
                            </li>
                            <li>
                                <a href="#">Testimonies</a>
                            </li>
                            <li>
                                <a href="guidelines.php">Community Guidelines</a>
                            </li>
                            <li>
                                <a href="help.php">Help</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col max-w-md flex-1 lg:min-w-xs mx-auto w-full text-center lg:text-left">
                    <!-- <h4 class="lg:text-lg text-sm font-medium mb-5">Register and claim your reward!</h4>
                    <h5 class="lg:mb-16 mb-8 text-xs md:text-base">Get 10% off on the first task you post!</h5> -->
                    <div class="my-8">
                        <img src="assets/images/promo-green.png" />
                        <!-- <img src="assets/images/promo-blue.png" /> -->
                    </div>
                    <div>
                        <div class="bg-white relative rounded-llg py-3 px-5 w-full flex flex-row items-center mb-5">
                            <label for="search" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                <button class="rounded bg-ubuy-blue p-2 shadow-card">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </label>
                            <input class="py-2 px-3 w-full focus:outline-none" id="search" type="text"
                                placeholder="Enter email address" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row items-center justify-center py-8">
            © <?php echo date("Y"); ?> Ubuy Services. All Rights Reserved.
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"></script>
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datejs/1.0/date.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/script-two.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>


        var typingTimer;
        var doneTypingInterval = 5000;
        var $input = $(".search-subcategory");

        $input.on('keyup', function(){
            $("#checker-identifyer").html("Please wait...");
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });

        $input.on('keydown', function(){
            clearTimeout(typingTimer);
        });

        function doneTyping(){
            var query1 = $("#search-subcategory-one").val();
            var query2 = $("#search-subcategory-two").val();
            if(query1 != ''){
                var query = query1;
            }else{
                var query = query2
            }
            $.ajax({
                url:"endpoints/sub-category.php",
                method:"POST",
                data:{query:query},
                success:function(data){
                    console.log(data)
                    $('.serviceList').fadeIn();  
                    $('.serviceList').html(data);
                }
            });
        }

        $(document).on('click', 'li', function(){  
            $('#search-subcategory-one').val($(this).text());  
            $('#search-subcategory-two').val($(this).text());  
            $('.serviceList').hide();  
            document.getElementById("search-link-one").setAttribute("href", "sub-category.php?subcategory_id="+this.id);
            document.getElementById("search-link-two").setAttribute("href", "sub-category.php?subcategory_id="+this.id);
        }); 

        var loader;
        function loadNow(opacity) {
            if (opacity <= 0) {
                displayContent();
            } else {
                loader.style.opacity = opacity;
                window.setTimeout(function() {
                    loadNow(opacity - 0.05);
                }, 50);
            }
        }

        function displayContent() {
            loader.style.display = 'none';
            document.getElementById('main-content').style.display = 'block';
        }

        document.addEventListener("DOMContentLoaded", function() {
            loader = document.getElementById('loader');
            loadNow(1);
        });

        // function Start(timeout) {
        //     myVar = setTimeout(ChangeImages, timeout);
        // }
        // var Images = ["promo-green.png", "promo-blue.png"];
        // var image = document.getElementById("promoImages");
        // function ChangeImages(){
        //     if (image.src.match(Images[0])){
        //         image.src = Images[1];
        //         Start(1000);
        //     }
        //     else if (image.src.match(Images[1])){
        //         image.src = Images[2];
        //         Start(2000);
        //     }
        //     else if (image.src.match(Images[3])){
        //         image.src = Images[0];
        //         Start(3000);
        //     }
        // }


        document.addEventListener('DOMContentLoaded', () => {
            new Splide('.hero-slider', {
                focus: 'center',
                autoplay: true,
                pauseOnHover: true,
            }).mount();

            new Splide('.category-slider', {
                type: 'loop',
                perPage: 4,
                height: '15rem',
                focus: 'center',
                autoplay: true,
                pauseOnHover: true,
            }).mount();

            new Splide('.apps-slider', {
                type: 'loop',
                perPage: 1,
                height: '25rem',
                focus: 'center',
                autoplay: true,
                pauseOnHover: true,
            }).mount();

            new Splide('.project-slider', {
                type: 'loop',
                perPage: 3,
                focus: 'center',
                autoplay: true,
                pauseOnHover: true,
            }).mount();

            new Splide('.testimonial-slider', {
                type: 'loop',
                perPage: 3,
                focus: 'center',
                autoplay: true,
                pauseOnHover: true,
            }).mount();
            new Splide('.blog-post-slider', {
                type: 'loop',
                perPage: 3,
                focus: 'center',
                autoplay: true,
                pauseOnHover: true,
            }).mount();

        });
        const textArray = [ "Find the right|Artisans" ];
        const textArray2 = [ "Find the right|Freelancers" ];
        const typer1 = new Typer("typer1", textArray);
        const typer2 = new Typer("typer2", textArray2);
       
        typer1.typeWriter();
        typer2.typeWriter();

        fetch("endpoints/fetchCategory.php").then(
        res => {
            res.json().then(
            data => {
                // console.log(data.categories);
                $("#loadNewLi").fadeOut().hide();
                $("#mobileNewLoader").fadeOut().hide();
                if (data.categories.length > 0) {
                    var item = "";
                    var tempMobile = "";
                    for (const itemData of data.categories) {
                        

                        // item += '<div class="splide__slide">';
                        // item += '<div class="splide__slide__container h-60 bg-no-repeat bg-cover bg-center category-item relative flex items-start justify-end flex-col px-5 py-7 text-white" style="background-image: url(assets/images/dj-service.png);">';
                        // item += '<h1 class="text-2xl font-semibold">DJ Service</h1>';
                        // item += '<div class="flex flex-row items-center">';
                        // item += '<span class="text-sm font-medium mr-2">See Pros near you</span>';
                        // item += '<span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /><path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg></span>';
                        // item += '</div>';
                        // item += '</div>';
                        // item += '</div>';

                    }
                    $('#homeCategory').html(item);                    
                }
            })
        });


        // function fetchSubCategories(){
        //     var query = $(this).val();
        //     console.log(query);
        //     return;
        //     if(query != '')
        //     {
        //         $.ajax({
        //             url:"endpoints/sub-category.php",
        //             method:"POST",
        //             data:{query:query},
        //             success:function(data){
        //                 $('#serviceList').fadeIn();  
        //                 $('#serviceList').html(data);
        //             }
        //         });
        //     }
        // }

        $('#pro_service').keydown(function(){ 
            var query = $(this).val();
            if(query != '')
            {
                $.ajax({
                    url:"endpoints/sub-category.php",
                    method:"POST",
                    data:{query:query},
                    success:function(data){
                        $('.serviceList').fadeIn();  
                        $('.serviceList').html(data);
                    }
                });
            }
        });
        $(document).on('click', 'li', function(){  
            $('#pro_service').val($(this).text());  
            $('.serviceList').hide();  
        }); 
    </script>

</body>

</html>
</body>

</html>