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
   <?php if($_SESSION['user_role'] == 'customer'){ ?>
        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-64 pl-0 pb-10 max-w-full">
        
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <!-- Task Status cards -->
                <div class="grid grid-cols-2 sm:grid-cols-2 xl:grid-cols-4 px-4 gap-4 py-4">
                    <!-- Active Tasks -->
                    <div class="rounded-llg flex-1 bg-white text-ubuy-warningDefault sm:flex-1/2 md:flex-1/4 flex flex-row items-center justify-between sm:p-5 p-3 cursor-pointer">
                        <div class="rounded-full sm:p-4 p-2 bg-ubuy-warningDefault active-task-icon-wrapper flex-shrink transform sm:scale-100 scale-75">
                            <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.5 10.5H6.5C4.84315 10.5 3.5 11.8431 3.5 13.5V28.5C3.5 30.1569 4.84315 31.5 6.5 31.5H30.5C32.1569 31.5 33.5 30.1569 33.5 28.5V13.5C33.5 11.8431 32.1569 10.5 30.5 10.5Z" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M24.5 10.5V7.5C24.5 6.70435 24.1839 5.94129 23.6213 5.37868C23.0587 4.81607 22.2956 4.5 21.5 4.5H15.5C14.7044 4.5 13.9413 4.81607 13.3787 5.37868C12.8161 5.94129 12.5 6.70435 12.5 7.5V10.5" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M3.5 18H32.75" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="flex flex-col items-center justify-center md:gap-y-4 gap-y-2 flex-grow md:w-auto w-16">
                            <span class="md:text-3xl text-2xl font-medium pendingProjectCount">-</span>
                            <span class="text-ubuy-secondary md:text-sm text-xs font-normal text-center">Pending Tasks</span>
                        </div>
                    </div>
                    <!-- Tasks In Progress -->
                    <div class="rounded-llg flex-1 text-ubuy-blue bg-white sm:flex-1/2 md:flex-1/4 flex flex-row items-center justify-between sm:p-5 p-3 cursor-pointer completed-task">
                        <div class="rounded-full sm:p-4 p-2 task-inprogress-icon-wrapper flex-shrink transform sm:scale-100 scale-75">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30 10.5H6C4.34315 10.5 3 11.8431 3 13.5V28.5C3 30.1569 4.34315 31.5 6 31.5H30C31.6569 31.5 33 30.1569 33 28.5V13.5C33 11.8431 31.6569 10.5 30 10.5Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M24 10.5V7.5C24 6.70435 23.6839 5.94129 23.1213 5.37868C22.5587 4.81607 21.7956 4.5 21 4.5H15C14.2044 4.5 13.4413 4.81607 12.8787 5.37868C12.3161 5.94129 12 6.70435 12 7.5V10.5" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M3 18H32.25" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="flex flex-col items-center justify-center md:gap-y-4 gap-y-2 flex-grow md:w-auto w-16">
                            <span class="font-medium md:text-3xl text-2xl activeProjectCount">-</span>
                            <span class="text-ubuy-secondary md:text-sm text-xs font-normal text-center">Tasks In Progress</span>
                        </div>
                    </div>
                    <!-- Completed Tasks -->
                    <div class="rounded-llg flex-1 text-ubuy-positiveLight bg-white sm:flex-1/2 md:flex-1/4 flex flex-row items-center sm:p-5 p-3 justify-between cursor-pointer active-bid">
                        <div class="rounded-full sm:p-4 p-2 completed-task-icon-wrapper flex-shrink transform sm:scale-100 scale-75">
                            <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.5 10.5H6.5C4.84315 10.5 3.5 11.8431 3.5 13.5V28.5C3.5 30.1569 4.84315 31.5 6.5 31.5H30.5C32.1569 31.5 33.5 30.1569 33.5 28.5V13.5C33.5 11.8431 32.1569 10.5 30.5 10.5Z" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M24.5 10.5V7.5C24.5 6.70435 24.1839 5.94129 23.6213 5.37868C23.0587 4.81607 22.2956 4.5 21.5 4.5H15.5C14.7044 4.5 13.9413 4.81607 13.3787 5.37868C12.8161 5.94129 12.5 6.70435 12.5 7.5V10.5" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M3.5 18H32.75" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="flex flex-col items-center justify-center md:gap-y-4 gap-y-2 flex-grow md:w-auto w-16">
                            <span class="font-medium md:text-3xl text-2xl completedProjectCount">-</span>
                            <span class="text-ubuy-secondary md:text-sm text-xs font-normal text-center">Completed Tasks</span>
                        </div>
                    </div>
                    <!-- Archived Tasks -->
                    <div class="rounded-llg flex-1 text-ubuy-inactive bg-white sm:flex-1/2 md:flex-1/4 flex flex-row items-center justify-between sm:p-5 p-3 cursor-pointer">
                        <div class="rounded-full sm:p-4 p-2 archieved-task-icon-wrapper flex-shrink transform sm:scale-100 scale-75">
                            <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.5 10.5H6.5C4.84315 10.5 3.5 11.8431 3.5 13.5V28.5C3.5 30.1569 4.84315 31.5 6.5 31.5H30.5C32.1569 31.5 33.5 30.1569 33.5 28.5V13.5C33.5 11.8431 32.1569 10.5 30.5 10.5Z" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M24.5 10.5V7.5C24.5 6.70435 24.1839 5.94129 23.6213 5.37868C23.0587 4.81607 22.2956 4.5 21.5 4.5H15.5C14.7044 4.5 13.9413 4.81607 13.3787 5.37868C12.8161 5.94129 12.5 6.70435 12.5 7.5V10.5" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M3.5 18H32.75" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="flex flex-col items-center justify-center md:gap-y-4 gap-y-2 flex-grow md:w-auto w-16">
                            <span class=" font-medium md:text-3xl text-2xl archivedProjectCount">-</span>
                            <span class="text-ubuy-secondary md:text-sm text-xs font-normal text-center">Archived Tasks</span>
                        </div>
                    </div>
                </div>
                <!-- Task Status cards End-->
                <div class="w-full flex flex-col p-5">
                    <div class="mb-5 text-xs md:text-base lg:text-lg text-ubuy-black">
                        <label>Showing:</label>
                        <select class="rounded-lg bg-white font-normal ml-2 px-2 py-1">
                            <option class="" value="" selected>
                                All Tasks
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
                    <div class="w-full bg-white rounded-xl hidden sm:block">
                        <table class="table-auto text-secondary font-normal text-xxs w-full">
                            <thead>
                            <tr class="border-b border-gray-200">
                                <th class="text-left w-48 p-5 hidden xl:table-cell">Date Posted</th>
                                <th class="text-left w-52 py-5 pr-5 xl:pl-0 pl-5">Title</th>
                                <th class="text-left w-40 py-5 pr-5">Hired Professional</th>
                                <th class="text-left w-28 py-5 pr-5">Budget/Fee</th>
                                <th class="text-left w-28 py-5 pr-5 hidden xl:table-cell">Due Time</th>
                                <th class="text-left w-32 py-5 pr-5 hidden xl:table-cell">Progress</th>
                                <th class="text-left w-24 py-5 pr-5">Status</th>
                                <th class="text-left w-10 py-5 pr-5 table-cell xl:hidden"></th>
                            </tr>
                            </thead>
                            <tbody id="taskList">

                            <tr id="loadLi">
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
                        <div class="flex flex-col gap-y-4" id="taskListMobile">
                            <!-- Task -->

                            <div class="flex flex-col w-full items-center flex-nowrap justify-center rounded-lg px-4 py-20" id="mobileLoader">
                                <button class="text-ubuy-blue py-2">
                                    <img src="assets/images/loader.gif" width="40" height="40" class="" /> 
                                </button>
                            </div>
                            
                            <!-- Task end-->
                        </div>
                    </div>
                </div>
            </div>
            <button class="sm:flex flex-row items-center xl:hidden hidden rounded-3xl bg-ubuy-blue text-white py-3 px-5 fixed bottom-4 right-4 shadow-lg">
                <span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5V19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <span>Post New Task</span>
            </button>

        </main>
    <?php }elseif($_SESSION['user_role'] == 'pro'){ ?>
        <main class="flex-1 overflow-auto pt-24 flex items-stretch md:pl-60 pl-0 max-w-full">
            <div class="relative min-w-0 max-w-full w-full bg-ubuy-gray-400 h-full">
                <nav class="flex flex-row bg-white w-full items-center sm:justify-start justify-around pl-3 h-20 shadow-card sm:text-sm text-base">
                    <button onclick="openTab(event, 'new-tasks')" class="h-0 pt-0 px-7 pb-2 task-menu-item task-menu-active focus:outline-none" id="">New Tasks</button>
                    <button onclick="openTab(event, 'active-tasks')" class="h-0 pt-0 px-7 pb-2 task-menu-item focus:outline-none" id="">Active</button>
                    <button onclick="openTab(event, 'completed-tasks')" class="h-0 pt-0 px-7 pb-2 task-menu-item focus:outline-none" id="">Completed</button>
                </nav>

                <section id="new-tasks" class="task-tab animate-left xl:px-8 px-4 sm:mt-4 mt-5 flex-col">
                    <div class="flex flex-row justify-between items-center text-sm text-ubuy-secondary">
                        <div class="flex flex-row items-center gap-x-5">
                            <div class="bg-white rounded-llg py-3 px-5 flex flex-row items-center">
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

                                    <select name="sort-by" id="sort-by" class="bg-transparent text-ubuy-black py-2 px-3 appearance-none w-full">
                                        <option value=""></option>
                                    </select>
                                </label>

                            </div>
                        </div>
                        <div class="bg-white relative rounded-llg py-3 max-w-md flex-auto ml-5">
                            <label for="search" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                <button class="rounded bg-ubuy-blue p-2 shadow-card">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </label>
                            <input class="py-2 px-3 w-full focus:outline-none" id="search" type="text" placeholder="Find post..." />
                        </div>
                    </div>
                    <!-- Desktop views -->
                    <div class="sm:flex hidden flex-col pb-5 gap-y-6 mt-5">
                        <div class="w-full grid xl:grid-cols-1 grid-cols-1 grid-flow-row gap-6 bg-white align-center justify-center text-center py-2" id="loadNewLi">
                            <div id="">
                                <td colspan="7" class="text-center">
                                    <button class="text-ubuy-blue py-2">
                                        <img src="assets/images/loader.gif" width="40" height="40" class="" /> 
                                    </button>
                                </td>
                            </div>
                        </div>
                        <div class="w-full grid xl:grid-cols-2 grid-cols-1 grid-flow-row gap-6" id="proNewTaskList">

                            <!-- Task Card -->

                        </div>
                    </div>
                    <!-- Mobile views -->
                    <div class="sm:hidden flex flex-col mt-4" id="proMobileNewTaskList">
                        <div class="flex flex-col w-full items-center flex-nowrap justify-center rounded-lg px-4 py-20" id="mobileNewLoader">
                            <button class="text-ubuy-blue py-2">
                                <img src="assets/images/loader.gif" width="40" height="40" class="" /> 
                            </button>
                        </div>

                    </div>
                </section>

                <section id="active-tasks" class="lg:px-5 xl:px-8 px-4 mt-5 task-tab animate-left hidden flex-col">
                    <!-- Statistic cards -->
                    <div class="lg:grid hidden grid-cols-2 sm:grid-cols-2 xl:grid-cols-4 xl:gap-4 sm:gap-3 gap-2.5">
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
                                <span class="md:text-3xl text-2xl text-ubuy-blue300 font-medium activeProjectCount">-</span>
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
                                <span class="text-ubuy-purple200 md:text-3xl text-2xl font-medium activeBids">-</span>
                                <span class="text-ubuy-secondary md:text-sm text-xs font-normal text-center">Active Bids</span>

                            </div>
                        </div>
                        <!-- Completed Task -->
                        <div class="rounded-llg flex-1 bg-white sm:flex-1/2 md:flex-1/4 flex flex-row items-center justify-between sm:p-5 p-3 cursor-pointer border hover:border-ubuy-positiveDefault">
                            <div class="rounded-full flex-shrink">
                                <svg class="w-12 sm:w-16" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="35" cy="35" r="35" fill="#40DD7F" />
                                    <path d="M47 27.5H23C21.3431 27.5 20 28.8431 20 30.5V45.5C20 47.1569 21.3431 48.5 23 48.5H47C48.6569 48.5 50 47.1569 50 45.5V30.5C50 28.8431 48.6569 27.5 47 27.5Z" stroke="#40DD7F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M41 27.5V24.5C41 23.7044 40.6839 22.9413 40.1213 22.3787C39.5587 21.8161 38.7956 21.5 38 21.5H32C31.2044 21.5 30.4413 21.8161 29.8787 22.3787C29.3161 22.9413 29 23.7044 29 24.5V27.5" stroke="#40DD7F" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M20 35H49.25" stroke="#40DD7F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="flex flex-col items-center justify-center gap-y-4">
                                <span class="md:text-3xl text-2xl text-ubuy-positiveDefault font-medium completedProjectCount">0</span>
                                <span class="text-ubuy-secondary md:text-sm text-xs font-normal text-center">Completed Tasks</span>
                            </div>
                        </div>
                    </div>
                    <!-- Task Table Desktop View -->
                    <div class="mt-5 lg:block hidden">
                        <div class="w-full bg-white rounded-xl">
                            <div class="border-b border-gray-200 flex flex-row items-center">
                                <div class="text-left w-48 p-5 font-medium text-base">Active Tasks</div>
                                <div class="flex justify-between flex-auto">
                                    <div class=" relative py-3 px-5 max-w-md flex-auto ml-5">
                                        <label for="search" class="absolute right-7 top-1/2 transform -translate-y-1/2">
                                            <button class="rounded bg-ubuy-blue p-2 shadow-card w-7 h-7 flex items-center justify-center">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </label>
                                        <input class="py-2 px-3 w-full focus:outline-none bg-ubuy-gray400 rounded-llg " id="search" type="text" placeholder="Search" />
                                    </div>

                                    <div class="flex flex-row items-center gap-x-5 text-sm">
                                        <div class="bg-white rounded-llg py-3 px-5 flex flex-row items-center">
                                            <label for="filter" class="flex flex-row">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.1554 0H0.84473C0.0952696 0 -0.282906 0.909351 0.248129 1.44039L6.74999 7.94324V15.1875C6.74999 15.4628 6.88433 15.7208 7.10989 15.8787L9.92239 17.8468C10.4773 18.2352 11.25 17.8415 11.25 17.1555V7.94324L17.752 1.44039C18.282 0.910406 17.9064 0 17.1554 0Z"
                                                        fill="#52575C" />
                                                </svg>
                                                <span class="ml-3 sm:inline hidden">Filter</span>
                                            </label>
                                            <select name="filter" id="filter" class="px-3 py-2 bg-transparent appearance-none">
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

                                                <select name="sort-by" id="sort-by" class="bg-transparent text-ubuy-black py-2 px-3 appearance-none w-full">
                                                    <option value=""></option>
                                                </select>
                                            </label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table-auto text-secondary font-normal text-xxs w-full">
                                <thead>
                                    <tr class="border-b border-gray-200">
                                        <th class="text-left w-48 font-normal p-4">Started</th>
                                        <th class="text-left w-52 font-normal py-4 pr-4">Title</th>
                                        <th class="text-left w-40 font-normal py-4 pr-4">Category</th>
                                        <th class="text-left w-28 font-normal py-4 pr-4">Owner Info</th>
                                        <th class="text-left w-28 font-normal py-4 pr-4">Location</th>
                                        <th class="text-left w-32 font-normal py-4 pr-4">Task Fee</th>
                                        <th class="text-left w-24 font-normal py-4 pr-4">Due time</th>
                                    </tr>
                                </thead>
                                <tbody id="proActiveTask">

                                    <!-- <tr class="border-b border-gray-200 cursor-pointer hover:bg-ubuy-gray400">
                                        <td class="text-left w-48 p-4">Wed | May 6, 2020 8.45AM</td>
                                        <td class="text-left w-52 py-4 pr-4">My Website Redesign and Redevelopment</td>
                                        <td class="text-left w-40 py-4 pr-4">Web Development</td>
                                        <td class="text-left w-28 py-4 pr-4">John Ayomide</td>
                                        <td class="text-left w-28 py-4 pr-4">Lagos</td>
                                        <td class="text-left w-32 py-4 pr-4">N 45,000.00</td>
                                        <td class="text-left w-24 py-4 pr-4">5 days</td>
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
                    </div>
                    <!-- End Task Table Desktop View -->
                    <div class="w-full">        
                        <div class="lg:hidden flex flex-row justify-between items-center text-sm text-ubuy-secondary sm:mt-4 mt-5">
                            <div class="flex flex-row items-center gap-x-5">
                                <div class="bg-white rounded-llg py-3 px-5 flex flex-row items-center">
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

                                        <select name="sort-by" id="sort-by" class="bg-transparent text-ubuy-black py-2 px-3 appearance-none w-full">
                                            <option value=""></option>
                                        </select>
                                    </label>

                                </div>
                            </div>
                            <div class="bg-white relative rounded-llg py-3 px-5 max-w-md flex-auto ml-5">
                                <label for="search" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                    <button class="rounded bg-ubuy-blue p-2 shadow-card">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </label>
                                <input class="py-2 px-3 w-full focus:outline-none" id="search" type="text" placeholder="Find post..." />
                            </div>
                        </div>
                        <!-- Task Tablet view -->
                        <div class="sm:flex lg:hidden hidden flex-col gap-y-6 mt-5" id="proActiveTaskTablet">
                            <!-- Task Card -->
                            
                            <!--End Task Card -->

                        </div>
                        <!-- End Task Tablet view -->
                        <!-- Task Mobile View -->
                        <div class="sm:hidden flex flex-col mt-4 gap-y-4" id="proActiveTaskMobile">

                            
                        </div>
                        <!-- End Task Mobile View -->
                    </div>
                </section>

                <section id="completed-tasks" class="lg:px-5 xl:px-8 px-4 mt-5 task-tab animate-left hidden flex-col">
                    <!-- Statistic cards -->
                    <div class="lg:grid hidden grid-cols-2 sm:grid-cols-2 xl:grid-cols-4 xl:gap-4 sm:gap-3 gap-2.5">
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
                                <span class="md:text-3xl text-2xl text-ubuy-blue300 font-medium activeProjectCount">-</span>
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
                                <span class="text-ubuy-purple200 md:text-3xl text-2xl font-medium activeBids">-</span>
                                <span class="text-ubuy-secondary md:text-sm text-xs font-normal text-center">Active Bids</span>

                            </div>
                        </div>
                        <!-- Completed Task -->
                        <div class="rounded-llg flex-1 bg-white sm:flex-1/2 md:flex-1/4 flex flex-row items-center justify-between sm:p-5 p-3 cursor-pointer border hover:border-ubuy-positiveDefault">
                            <div class="rounded-full flex-shrink">
                                <svg class="w-12 sm:w-16" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="35" cy="35" r="35" fill="#40DD7F" />
                                    <path d="M47 27.5H23C21.3431 27.5 20 28.8431 20 30.5V45.5C20 47.1569 21.3431 48.5 23 48.5H47C48.6569 48.5 50 47.1569 50 45.5V30.5C50 28.8431 48.6569 27.5 47 27.5Z" stroke="#40DD7F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M41 27.5V24.5C41 23.7044 40.6839 22.9413 40.1213 22.3787C39.5587 21.8161 38.7956 21.5 38 21.5H32C31.2044 21.5 30.4413 21.8161 29.8787 22.3787C29.3161 22.9413 29 23.7044 29 24.5V27.5" stroke="#40DD7F" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M20 35H49.25" stroke="#40DD7F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="flex flex-col items-center justify-center gap-y-4">
                                <span class="md:text-3xl text-2xl text-ubuy-positiveDefault font-medium completedProjectCount">-</span>
                                <span class="text-ubuy-secondary md:text-sm text-xs font-normal text-center">Completed Tasks</span>
                            </div>
                        </div>
                    </div>
                    <!-- Task Table Desktop View -->
                    <div class="mt-5 lg:block hidden">
                        <div class="w-full bg-white rounded-xl">
                            <div class="border-b border-gray-200 flex flex-row items-center">
                                <div class="text-left w-48 p-5 font-medium text-base">Completed Tasks</div>
                                <div class="flex justify-between flex-auto">
                                    <div class=" relative py-3 px-5 max-w-md flex-auto ml-5">
                                        <label for="search" class="absolute right-7 top-1/2 transform -translate-y-1/2">
                                            <button class="rounded bg-ubuy-blue p-2 shadow-card w-7 h-7 flex items-center justify-center">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </label>
                                        <input class="py-2 px-3 w-full focus:outline-none bg-ubuy-gray400 rounded-llg " id="search" type="text" placeholder="Search" />
                                    </div>

                                    <div class="flex flex-row items-center gap-x-5 text-sm">
                                        <div class="bg-white rounded-llg py-3 px-5 flex flex-row items-center">
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

                                                <select name="sort-by" id="sort-by" class="bg-transparent text-ubuy-black py-2 px-3 appearance-none w-full">
                                                    <option value=""></option>
                                                </select>
                                            </label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table-auto text-secondary font-normal text-xxs w-full">
                                <thead>
                                    <tr class="border-b border-gray-200">
                                        <th class="text-left w-48 font-normal p-4">Started</th>
                                        <th class="text-left w-52 font-normal py-4 pr-4">Title</th>
                                        <th class="text-left w-40 font-normal py-4 pr-4">Category</th>
                                        <th class="text-left w-28 font-normal py-4 pr-4">Owner Info</th>
                                        <th class="text-left w-28 font-normal py-4 pr-4">Location</th>
                                        <th class="text-left w-32 font-normal py-4 pr-4">Task Fee</th>
                                        <th class="text-left w-24 font-normal py-4 pr-4">Due time</th>
                                    </tr>
                                </thead>
                                <tbody id="proCompleteTask">
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
                    </div>
                    <!-- End Task Table Desktop View -->
                    <div class="sm:flex lg:hidden hidden flex-col pb-5 gap-y-6 mt-5">
                        <div class="w-full grid xl:grid-cols-2 grid-cols-1 grid-flow-row gap-6" id="proCompleteTaskTablet">
                            <!-- Task Card -->
                            
                            <!--End Task Card -->
                        </div>
                    </div>
                    <!-- Task Mobile View -->
                    <div class="sm:hidden flex flex-col">
                        <div class="flex flex-row justify-between items-center text-sm text-ubuy-secondary">
                            <div class="flex flex-row items-center gap-x-5">
                                <div class="bg-white rounded-llg py-3 px-5 flex flex-row items-center">
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

                                        <select name="sort-by" id="sort-by" class="bg-transparent text-ubuy-black py-2 px-3 appearance-none w-full">
                                            <option value=""></option>
                                        </select>
                                    </label>

                                </div>
                            </div>
                            <div class="bg-white relative rounded-llg py-3 px-5 max-w-md flex-auto ml-5">
                                <label for="search" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                    <button class="rounded bg-ubuy-blue p-2 shadow-card">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </label>
                                <input class="py-2 px-3 w-full focus:outline-none" id="search" type="text" placeholder="Find post..." />
                            </div>
                        </div>
                        <div class="flex flex-col mt-4 gap-y-4" id="proCompleteTaskMobile">
                        </div>
                    </div>
                    <!-- End Task Mobile View -->
                </section>
            </div>
        </main>
    <?php } ?>

        
<?php
if($_SESSION['user_role'] == 'customer'){
    require_once 'inc/customer-footer.php';
}elseif($_SESSION['user_role'] == 'pro'){
    require_once 'inc/pro-footer.php';
}
?>

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
            // console.log(a.count);
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


        var activeBids = {
            "url": "endpoints/activeBids.php",
            "method": "GET",
            "timeout": 0,
        };
        $.ajax(activeBids).done(function(response) {
            // console.log(response)
            const a = JSON.parse(response);
            $(".activeBids").html(a.count);
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
                    var tempMobile = "";
                    for (const itemData of data.projects) {

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
                       
                        temp += '<tr class="border-b border-gray-200 cursor-pointer hover:bg-ubuy-gray400" onclick="taskDetails('+itemData.id+')">';
                        temp += '<td class="text-left w-48 p-5 hidden xl:table-cell">'+new Date(itemData.created_at).toDateString()+'</td>';
                        temp += '<td class="text-left w-52 py-5 pr-5 xl:pl-0 pl-5">'+itemData.project_title+'</td>';
                        temp += '<td class="text-left w-40 py-5 pr-5">'+proName+'</td>';
                        temp += '<td class="text-left w-28 py-5 pr-5">N '+formatter.format(itemData.budget)+'</td>';
                        temp += '<td class="text-left w-28 py-5 pr-5 hidden xl:table-cell">'+ Final_Result +' Days</td>';
                        temp += '<td class="text-left w-32 py-5 pr-5 hidden xl:table-cell">'+itemData.progress+'% completed</td>';
                        temp += '<td class="text-left w-24 py-5 pr-5"><a href="task-details.php?project_id='+itemData.id+'"><div class="'+projectColor+' rounded text-xs px-5 py-1 text-white w-full text-center">'+projectStatus+'</div></a></td>';
                        temp += '<td class="text-left w-10 py-5 pr-5 table-cell xl:hidden"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /><path d="M12 5L19 12L12 19" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg></td>';
                        temp += '</tr> ';



                        tempMobile += '<div class="flex flex-col w-full items-start flex-nowrap justify-start bg-white rounded-lg px-4 py-2"><div class="text-xs text-ubuy-blue300">'+proName+'</div><button class="focus:outline-none flex flex-row w-full items-start justify-end -mt-2"><span class="whitespace-nowrap text-xxxs mr-1">N '+formatter.format(itemData.budget)+'</span><svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M6 9L12 15L18 9" stroke="#222F54" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /></svg></button><div class="text-xxs w-full flex flex-row justify-between"><div class="w-2/3">'+itemData.project_title+'</div><a href="task-details.php?project_id='+itemData.id+'" class="w-1/3 text-xxxs '+projectColor+' rounded px-5 py-1 text-white text-center self-center">'+projectStatus+'</a></div></div>';
                    }
                    $('#taskList').html(temp);                    
                    $('#taskListMobile').html(tempMobile);
                }
            })
        })

        fetch("endpoints/fetchProProject.php?type=0").then(
        res => {
            res.json().then(
            data => {
                console.log(data.projects);
                $("#loadNewLi").fadeOut().hide();
                $("#mobileNewLoader").fadeOut().hide();
                if (data.projects.length > 0) {
                    var temp = "";
                    var tempMobile = "";
                    for (const itemData of data.projects) {

                        var one_day = 1000 * 60 * 60 * 24;
                        var present_date = new Date();
                        var dueDate = new Date(itemData.created_at);

                        if (present_date.getMonth() == 11 && present_date.getdate() > 25) dueDate.setFullYear(dueDate.getFullYear() + 1)
                            var Result = Math.round(dueDate.getTime() - present_date.getTime()) / (one_day);
                            var Final_Result = -(Result.toFixed(0)) +" days ago";

                        if( itemData.pro_name != null){
                            var proName = itemData.pro_name;
                        }else{
                            var proName = "Not assigned";
                        }

                        var projectStatus;
                        var projectColor;

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

                        var newCity;

                        if(itemData.city == null){
                            newCity = "Invalid";
                        }else{
                            newCity = itemData.city;
                        }
                    
                    temp += '<div class="flex flex-col p-5 rounded-llg items-start justify-start bg-white text-ubuy-secondary gap-y-3">';
                    temp += '<div class="flex flex-row w-full items-center"><div class="w-24 text-xs">Task:</div><div class="flex-1 text-ubuy-black text-sm">#'+itemData.id+'</div><div class="flex flex-row items-center"><div class="text-tiny mr-1">Status:</div><div class="rounded text-center text-white font-medium '+projectColor+' py-1 px-2 text-xxxs">'+projectStatus+'</div></div></div>';
                    temp += '<div class="flex flex-row items-center w-full">';
                    temp += '<div class="w-24 text-xs">Task Title:</div>';
                    temp += '<div class="flex-1 text-sm"><h2 class="w-64">'+itemData.project_title+'</h2></div>';
                    temp += '<div class="flex flex-col gap-y-2.5">';
                    temp += '<div class="flex flex-row">';
                    temp += '<div class="flex flex-row items-center">';
                    temp += '<span class="mr-1"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.99968 14.6668C11.6816 14.6668 14.6663 11.6821 14.6663 8.00016C14.6663 4.31826 11.6816 1.3335 7.99968 1.3335C4.31778 1.3335 1.33301 4.31826 1.33301 8.00016C1.33301 11.6821 4.31778 14.6668 7.99968 14.6668Z" stroke="#52575C"stroke-linecap="round" stroke-linejoin="round" /><path d="M8 4V8L10.6667 9.33333" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /></svg></span>';

                    temp += '<span class="text-xs mr-1">Time:</span>';
                    temp += '</div>';
                    temp += '<div class="text-xs">'+Final_Result+'</div>';
                    temp += '</div>';
                    temp += '<div class="flex flex-row">';
                    temp += '<div class="flex flex-row items-center ">';
                    temp += '<span class="mr-1">';
                    
                    temp += '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 6.6665C14 11.3332 8 15.3332 8 15.3332C8 15.3332 2 11.3332 2 6.6665C2 5.07521 2.63214 3.54908 3.75736 2.42386C4.88258 1.29864 6.4087 0.666504 8 0.666504C9.5913 0.666504 11.1174 1.29864 12.2426 2.42386C13.3679 3.54908 14 5.07521 14 6.6665Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /><path d="M8 8.6665C9.10457 8.6665 10 7.77107 10 6.6665C10 5.56193 9.10457 4.6665 8 4.6665C6.89543 4.6665 6 5.56193 6 6.6665C6 7.77107 6.89543 8.6665 8 8.6665Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /></svg>';
                    temp += '</span>';
                    temp += '<span class="text-xs mr-1">Location:</span>';
                    temp += '</div>';
                    temp += '<div class="text-xs">'+newCity+'</div>';
                    temp += '</div>';
                    temp += '</div>';
                    temp += '</div>';
                    temp += '<div class="flex flex-row w-full">';
                    temp += '<div class="w-24 text-xs">Details:</div>';
                    temp += '<div class="flex-1 text-xs" style="max-height: min-content; height: 60px; overflow: hidden;">'+itemData.project_message+'</div>';
                    temp += '</div>';
                    temp += '<div class="flex flex-row w-full items-center">';
                    temp += '<div class="w-24 text-xs">Budget:</div>';
                    temp += '<div class="flex-1 flex flex-row">N '+formatter.format(itemData.budget)+'</div>';
                    temp += '<div class="flex flex-row gap-x-5 text-xs font-medium">';
                    temp += '<a href="bid-details.php?project_id='+itemData.id+'"><!-- Temp for routing --><button class="rounded-md text-white px-2.5 py-1 bg-ubuy-blue">Task Details</button></a> ';
                    // temp += '<button onclick="onOpenPopup(\'submit-bid\')" class="bg-ubuy-blue rounded-md py-1 px-3 text-white">Submit Bid</button>';
                    temp += '</div>';
                    temp += '</div>';
                    temp += '</div>';



                    tempMobile += '<details class="bg-white rounded-llg my-2"><summary class="flex flex-col py-3.5 pl-3.5 pr-11"><div class="flex flex-row items-center justify-between text-xxxs mb-1"><div class="text-ubuy-blue">'+itemData.sub_category.name+'</div><small>'+Final_Result+'</small></div><div class="flex flex-row justify-between items-center"><div class="text-xxs text-ubuy-secondary font-medium w-2/3">'+itemData.project_title+'</div><div class="rounded text-tiny '+projectColor+' text-white px-4 py-1">'+projectStatus+'</div></div></summary><div class="p-3.5"><div class="text-xs text-ubuy-secondary mb-3" style="height: 50px; overflow: hidden;">'+itemData.project_message+'</div><div class="flex flex-row items-center justify-between"><div class="flex flex-col"><div><span class="text-xs text-ubuy-secondary">Budget:</span><span class="text-xxs text-ubuy-black">N '+formatter.format(itemData.budget)+'</span></div><div class="flex flex-row items-center gap-y-3 mt-2.5"><span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 6.6665C14 11.3332 8 15.3332 8 15.3332C8 15.3332 2 11.3332 2 6.6665C2 5.07521 2.63214 3.54908 3.75736 2.42386C4.88258 1.29864 6.4087 0.666504 8 0.666504C9.5913 0.666504 11.1174 1.29864 12.2426 2.42386C13.3679 3.54908 14 5.07521 14 6.6665Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /><path d="M8 8.6665C9.10457 8.6665 10 7.77107 10 6.6665C10 5.56193 9.10457 4.6665 8 4.6665C6.89543 4.6665 6 5.56193 6 6.6665C6 7.77107 6.89543 8.6665 8 8.6665Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /></svg></span><span class="text-xs text-ubuy-secondary ml-2">'+itemData.city+'</span></div></div><a href="bid-details.php?project_id='+itemData.id+'" class="rounded-md px-2.5 py-1 border border-ubuy-bluetext-ubuy-blue">View Task</a></div></div></details>';

                    }
                    $('#proNewTaskList').html(temp);                    
                    $('#proMobileNewTaskList').html(tempMobile);
                }
            })
        })


        // Create our number formatter.
        var formatter = new Intl.NumberFormat('en-US', {
        // style: 'currency',
        // currency: 'NGN',

        // These options are needed to round to whole numbers if that's what you want.
        //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
        //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
        });

        fetch("endpoints/fetchProProject.php?type=2").then(
        res => {
            res.json().then(
            data => {
                console.log(data.projects);
                $("#loadNewLi").fadeOut().hide();
                $("#mobileNewLoader").fadeOut().hide();
                if (data.projects.length > 0) {
                    var temp = "";
                    var tempMobile = "";
                    var tempTablet = "";
                    for (const itemData of data.projects) {

                        var one_day = 1000 * 60 * 60 * 24;
                        var present_date = new Date();
                        var dueDate = new Date(itemData.created_at);

                        if (present_date.getMonth() == 11 && present_date.getdate() > 25) dueDate.setFullYear(dueDate.getFullYear() + 1)
                            var Result = Math.round(dueDate.getTime() - present_date.getTime()) / (one_day);
                            var Final_Result = -(Result.toFixed(0)) +" days ago";
                        if( itemData.pro_name != null){
                            var proName = itemData.pro_name;
                        }else{
                            var proName = "Not assigned";
                        }

                        var projectStatus;
                        var projectColor;

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

                        var newCity;

                        if(itemData.city == null){
                            newCity = "Invalid";
                        }else{
                            newCity = itemData.city;
                        }
                    
                    temp += '<tr class="border-b border-gray-200 cursor-pointer hover:bg-ubuy-gray400" onclick="window.location.href = \'task-details.php?project_id='+itemData.id+'\'">';
                    temp += '<td class="text-left w-48 p-4">'+new Date(itemData.created_at).toDateString()+'</td>';
                    temp += '<td class="text-left w-52 py-4 pr-4">'+itemData.project_title+'</td>';
                    temp += '<td class="text-left w-40 py-4 pr-4">'+itemData.sub_category_name+'</td>';
                    temp += '<td class="text-left w-28 py-4 pr-4">'+itemData.user.last_name+' '+itemData.user.first_name+'</td>';
                    temp += '<td class="text-left w-28 py-4 pr-4">'+itemData.city+'</td>';
                    temp += '<td class="text-left w-32 py-4 pr-4">N '+formatter.format(itemData.budget)+'</td>';
                    temp += '<td class="text-left w-24 py-4 pr-4">'+Final_Result+'</td>';
                    temp += '</tr>';
                    
                    tempTablet += '<div class="flex flex-col p-5 rounded-llg items-start justify-start bg-white text-ubuy-secondary gap-y-3">';
                    tempTablet += '<div class="flex flex-row w-full items-center">';
                    tempTablet += '<div class="w-24 text-xs">Task:</div>';
                    tempTablet += '<div class="flex-1 text-ubuy-black text-sm">#'+itemData.id+'</div>';
                    tempTablet += '<div class="flex flex-row items-center">';
                    tempTablet += '<div class="text-tiny mr-1">Status:</div>';
                    tempTablet += '<div class="rounded text-center text-white font-medium '+projectColor+' py-1 px-2 text-xxxs">'+projectStatus+'</div>';
                    tempTablet += '</div>';
                    tempTablet += '</div>';
                    tempTablet += '<div class="flex flex-row items-center w-full">';
                    tempTablet += '<div class="w-24 text-xs">Task Title:</div>';
                    tempTablet += '<div class="flex-1 text-sm"><h2 class="w-64">'+itemData.project_title+'</h2>';
                    tempTablet += '</div>';
                    tempTablet += '<div class="flex flex-col gap-y-2.5">';
                    tempTablet += '<div class="flex flex-row">';
                    tempTablet += '<div class="flex flex-row items-center">';
                    tempTablet += '<span class="mr-1"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.99968 14.6668C11.6816 14.6668 14.6663 11.6821 14.6663 8.00016C14.6663 4.31826 11.6816 1.3335 7.99968 1.3335C4.31778 1.3335 1.33301 4.31826 1.33301 8.00016C1.33301 11.6821 4.31778 14.6668 7.99968 14.6668Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /><path d="M8 4V8L10.6667 9.33333" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /></svg></span>';
                    tempTablet += '<span class="text-xs mr-1">Time:</span>';
                    tempTablet += '</div>';
                    tempTablet += '<div class="text-xs">'+Final_Result+'</div>';
                    tempTablet += '</div>';
                    tempTablet += '<div class="flex flex-row"><div class="flex flex-row items-center ">';
                    tempTablet += '<span class="mr-1"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 6.6665C14 11.3332 8 15.3332 8 15.3332C8 15.3332 2 11.3332 2 6.6665C2 5.07521 2.63214 3.54908 3.75736 2.42386C4.88258 1.29864 6.4087 0.666504 8 0.666504C9.5913 0.666504 11.1174 1.29864 12.2426 2.42386C13.3679 3.54908 14 5.07521 14 6.6665Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /><path d="M8 8.6665C9.10457 8.6665 10 7.77107 10 6.6665C10 5.56193 9.10457 4.6665 8 4.6665C6.89543 4.6665 6 5.56193 6 6.6665C6 7.77107 6.89543 8.6665 8 8.6665Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /></svg></span>';
                    tempTablet += '<span class="text-xs mr-1">Location:</span>';
                    tempTablet += '</div>';
                    tempTablet += '<div class="text-xs">'+itemData.city+'</div></div></div></div>';
                    tempTablet += '<div class="flex flex-row w-full">';
                    tempTablet += '<div class="w-24 text-xs">Details:</div><div class="flex-1 text-xs">'+itemData.project_message+'</div>';
                    tempTablet += '</div>';
                    tempTablet += '<div class="flex flex-row w-full items-center">';
                    tempTablet += '<div class="w-24 text-xs">Budget:</div>';
                    tempTablet += '<div class="flex-1 flex flex-row">N '+formatter.format(itemData.budget)+'</div>';
                    tempTablet += '<div class="flex flex-row text-xs font-medium"><button class="bg-ubuy-blue rounded-md py-1 px-3 text-white">Open Task</button></div></div></div>';


                    tempMobile += '<details class="bg-white rounded-llg"><summary class="flex flex-col py-3.5 pl-3.5 pr-11"><div class="flex flex-row items-center justify-between text-xxxs mb-1"><div class="text-ubuy-blue">'+itemData.sub_category_name+'</div><small>'+Final_Result+'</small></div><div class="flex flex-row justify-between items-center"><div class="text-xxs text-ubuy-secondary font-medium w-2/3">'+itemData.project_title+'</div><div class="rounded text-tiny '+projectColor+' text-white px-4 py-1">'+projectStatus+'</div></div></summary><div class="p-3.5"><div class="text-xs text-ubuy-secondary mb-3">'+itemData.project_message+'</div><div class="flex flex-row items-center justify-between"><div class="flex flex-col"><div><span class="text-xs text-ubuy-secondary">Budget:</span><span class="text-xxs text-ubuy-black">N '+formatter.format(itemData.budget)+'</span></div><div class="flex flex-row items-center gap-y-3 mt-2.5"><span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 6.6665C14 11.3332 8 15.3332 8 15.3332C8 15.3332 2 11.3332 2 6.6665C2 5.07521 2.63214 3.54908 3.75736 2.42386C4.88258 1.29864 6.4087 0.666504 8 0.666504C9.5913 0.666504 11.1174 1.29864 12.2426 2.42386C13.3679 3.54908 14 5.07521 14 6.6665Z"stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /><path d="M8 8.6665C9.10457 8.6665 10 7.77107 10 6.6665C10 5.56193 9.10457 4.6665 8 4.6665C6.89543 4.6665 6 5.56193 6 6.6665C6 7.77107 6.89543 8.6665 8 8.6665Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /></svg></span><span class="text-xs text-ubuy-secondary ml-2">'+itemData.city+'</span></div></div><button class="text-xs bg-ubuy-gray400 text-ubuy-blue rounded-md border border-ubuy-blue px-2.5 py-1">Open Task</button></div></div></details>'

                    }
                    $('#proActiveTask').html(temp);                    
                    $('#proActiveTaskTablet').html(tempTablet);
                    $('#proActiveTaskMobile').html(tempMobile);
                }
            })
        })

        fetch("endpoints/fetchProProject.php?type=3").then(
        res => {
            res.json().then(
            data => {
                console.log(data.projects);
                $("#loadNewLi").fadeOut().hide();
                $("#mobileNewLoader").fadeOut().hide();
                if (data.projects.length > 0) {
                    var temp = "";
                    var tempMobile = "";
                    var tempTablet = "";
                    for (const itemData of data.projects) {

                        var one_day = 1000 * 60 * 60 * 24;
                        var present_date = new Date();
                        var dueDate = new Date(itemData.created_at);

                        if (present_date.getMonth() == 11 && present_date.getdate() > 25) dueDate.setFullYear(dueDate.getFullYear() + 1)
                            var Result = Math.round(dueDate.getTime() - present_date.getTime()) / (one_day);
                            var Final_Result = -(Result.toFixed(0)) +" days ago";

                        if( itemData.pro_name != null){
                            var proName = itemData.pro_name;
                        }else{
                            var proName = "Not assigned";
                        }

                        var projectStatus;
                        var projectColor;

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

                        var newCity;

                        if(itemData.city == null){
                            newCity = "Not set";
                        }else{
                            newCity = itemData.city;
                        }
                    
                    temp += '<tr class="border-b border-gray-200 cursor-pointer hover:bg-ubuy-gray400" onclick="window.location.href = \'task-details.php?project_id='+itemData.id+'\'">';
                    temp += '<td class="text-left w-48 p-4">'+new Date(itemData.created_at).toDateString()+'</td>';
                    temp += '<td class="text-left w-52 py-4 pr-4">'+itemData.project_title+'</td>';
                    temp += '<td class="text-left w-40 py-4 pr-4">'+itemData.sub_category_name+'</td>';
                    temp += '<td class="text-left w-28 py-4 pr-4">'+itemData.user.last_name+' '+itemData.user.first_name+'</td>';
                    temp += '<td class="text-left w-28 py-4 pr-4">'+itemData.city+'</td>';
                    temp += '<td class="text-left w-32 py-4 pr-4">N '+formatter.format(itemData.budget)+'</td>';
                    temp += '<td class="text-left w-24 py-4 pr-4">'+Final_Result+'</td>';
                    temp += '</tr>';
                    
                    tempTablet += '<div class="flex flex-col p-5 rounded-llg items-start justify-start bg-white text-ubuy-secondary gap-y-3">';
                    tempTablet += '<div class="flex flex-row w-full items-center">';
                    tempTablet += '<div class="w-24 text-xs">Task:</div>';
                    tempTablet += '<div class="flex-1 text-ubuy-black text-sm">#'+itemData.id+'</div>';
                    tempTablet += '<div class="flex flex-row items-center">';
                    tempTablet += '<div class="text-tiny mr-1">Status:</div>';
                    tempTablet += '<div class="rounded text-center text-white font-medium '+projectColor+' py-1 px-2 text-xxxs">'+projectStatus+'</div>';
                    tempTablet += '</div>';
                    tempTablet += '</div>';
                    tempTablet += '<div class="flex flex-row items-center w-full">';
                    tempTablet += '<div class="w-24 text-xs">Task Title:</div>';
                    tempTablet += '<div class="flex-1 text-sm"><h2 class="w-64">'+itemData.project_title+'</h2>';
                    tempTablet += '</div>';
                    tempTablet += '<div class="flex flex-col gap-y-2.5">';
                    tempTablet += '<div class="flex flex-row">';
                    tempTablet += '<div class="flex flex-row items-center">';
                    tempTablet += '<span class="mr-1"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.99968 14.6668C11.6816 14.6668 14.6663 11.6821 14.6663 8.00016C14.6663 4.31826 11.6816 1.3335 7.99968 1.3335C4.31778 1.3335 1.33301 4.31826 1.33301 8.00016C1.33301 11.6821 4.31778 14.6668 7.99968 14.6668Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /><path d="M8 4V8L10.6667 9.33333" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /></svg></span>';
                    tempTablet += '<span class="text-xs mr-1">Time:</span>';
                    tempTablet += '</div>';
                    tempTablet += '<div class="text-xs">'+Final_Result+'</div>';
                    tempTablet += '</div>';
                    tempTablet += '<div class="flex flex-row"><div class="flex flex-row items-center ">';
                    tempTablet += '<span class="mr-1"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 6.6665C14 11.3332 8 15.3332 8 15.3332C8 15.3332 2 11.3332 2 6.6665C2 5.07521 2.63214 3.54908 3.75736 2.42386C4.88258 1.29864 6.4087 0.666504 8 0.666504C9.5913 0.666504 11.1174 1.29864 12.2426 2.42386C13.3679 3.54908 14 5.07521 14 6.6665Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /><path d="M8 8.6665C9.10457 8.6665 10 7.77107 10 6.6665C10 5.56193 9.10457 4.6665 8 4.6665C6.89543 4.6665 6 5.56193 6 6.6665C6 7.77107 6.89543 8.6665 8 8.6665Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /></svg></span>';
                    tempTablet += '<span class="text-xs mr-1">Location:</span>';
                    tempTablet += '</div>';
                    tempTablet += '<div class="text-xs">'+newCity+'</div></div></div></div>';
                    tempTablet += '<div class="flex flex-row w-full">';
                    tempTablet += '<div class="w-24 text-xs">Details:</div><div class="flex-1 text-xs">'+itemData.project_message+'</div>';
                    tempTablet += '</div>';
                    tempTablet += '<div class="flex flex-row w-full items-center">';
                    tempTablet += '<div class="w-24 text-xs">Budget:</div>';
                    tempTablet += '<div class="flex-1 flex flex-row">N '+formatter.format(itemData.budget)+'</div>';
                    tempTablet += '<div class="flex flex-row text-xs font-medium"><button onclick="window.location.href = \'task-details.php?project_id='+itemData.id+'\'" class="bg-ubuy-blue rounded-md py-1 px-3 text-white">Open Task</button></div></div></div>';


                    tempMobile += '<details class="bg-white rounded-llg"><summary class="flex flex-col py-3.5 pl-3.5 pr-11"><div class="flex flex-row items-center justify-between text-xxxs mb-1"><div class="text-ubuy-blue">'+itemData.sub_category_name+'</div><small>'+Final_Result+'</small></div><div class="flex flex-row justify-between items-center"><div class="text-xxs text-ubuy-secondary font-medium w-2/3">'+itemData.project_title+'</div><div class="rounded text-tiny '+projectColor+' text-white px-4 py-1">'+projectStatus+'</div></div></summary><div class="p-3.5"><div class="text-xs text-ubuy-secondary mb-3">'+itemData.project_message+'</div><div class="flex flex-row items-center justify-between"><div class="flex flex-col"><div><span class="text-xs text-ubuy-secondary">Budget:</span><span class="text-xxs text-ubuy-black">N '+formatter.format(itemData.budget)+'</span></div><div class="flex flex-row items-center gap-y-3 mt-2.5"><span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 6.6665C14 11.3332 8 15.3332 8 15.3332C8 15.3332 2 11.3332 2 6.6665C2 5.07521 2.63214 3.54908 3.75736 2.42386C4.88258 1.29864 6.4087 0.666504 8 0.666504C9.5913 0.666504 11.1174 1.29864 12.2426 2.42386C13.3679 3.54908 14 5.07521 14 6.6665Z"stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /><path d="M8 8.6665C9.10457 8.6665 10 7.77107 10 6.6665C10 5.56193 9.10457 4.6665 8 4.6665C6.89543 4.6665 6 5.56193 6 6.6665C6 7.77107 6.89543 8.6665 8 8.6665Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /></svg></span><span class="text-xs text-ubuy-secondary ml-2">'+itemData.city+'</span></div></div><button  onclick="window.location.href = \'task-details.php?project_id='+itemData.id+'\'" class="text-xs bg-ubuy-gray400 text-ubuy-blue rounded-md border border-ubuy-blue px-2.5 py-1">Open Task</button></div></div></details>'

                    }
                    $('#proCompleteTask').html(temp);                    
                    $('#proCompleteTaskTablet').html(tempTablet);
                    $('#proCompleteTaskMobile').html(tempMobile);
                }
            })
        })

</script>