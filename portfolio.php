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
            <div class="flex w-full flex-col my-7 lg:pl-7 lg:pr-8 px-4 gap-y-6">
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
                                        Sort by: Date Joined
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
                        <input class="py-2 px-3 w-full" id="search" type="text" placeholder="Find post..." />
                    </div>
                </div>
                <div class="grid grid-flow-row sm:grid-cols-2 xl:grid-cols-3 grid-cols-1 gap-6 place-items-stretch" id="userPortfolioList">

                    <div class="w-full grid xl:grid-cols-1 grid-cols-1 grid-flow-row gap-6 bg-white align-center justify-center text-center py-2" id="loadNewLi">
                        <div id="">
                            <td colspan="7" class="text-center">
                                <button class="text-ubuy-blue py-2">
                                    <img src="assets/images/loader.gif" width="40" height="40" class="" /> 
                                </button>
                            </td>
                        </div>
                    </div>
                    



                    <!-- Portfolio item -->
                    <!-- <div class="flex flex-col w-full items-center justify-center p-5 rounded-2xl hover:shadow-2xl bg-white">
                        <h1 class="mb-5 text-center px-4">My New Website Landing Page Re-Design</h1>
                        <div class="mb-5 w-full">
                            <img src="assets/images/sample-portfolio.png" alt="" class="rounded-llg min-w-full h-auto" />
                        </div>
                        <div class="flex flex-row items-center w-full justify-between text-xs text-ubuy-inactive">
                            <div class="flex flex-row items-center gap-x-2">
                                <div class="flex flex-row items-center">
                                    <span class="mr-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.8401 4.60999C20.3294 4.099 19.7229 3.69364 19.0555 3.41708C18.388 3.14052 17.6726 2.99817 16.9501 2.99817C16.2276 2.99817 15.5122 3.14052 14.8448 3.41708C14.1773 3.69364 13.5709 4.099 13.0601 4.60999L12.0001 5.66999L10.9401 4.60999C9.90843 3.5783 8.50915 2.9987 7.05012 2.9987C5.59109 2.9987 4.19181 3.5783 3.16012 4.60999C2.12843 5.64169 1.54883 7.04096 1.54883 8.49999C1.54883 9.95903 2.12843 11.3583 3.16012 12.39L4.22012 13.45L12.0001 21.23L19.7801 13.45L20.8401 12.39C21.3511 11.8792 21.7565 11.2728 22.033 10.6053C22.3096 9.93789 22.4519 9.22248 22.4519 8.49999C22.4519 7.77751 22.3096 7.0621 22.033 6.39464C21.7565 5.72718 21.3511 5.12075 20.8401 4.60999Z"
                                                fill="#FB4E4E" />
                                        </svg>
                                    </span>
                                    <span>204</span>
                                </div>
                                <div class="flex flex-row items-center">
                                    <span class="mr-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 11.5C21.0034 12.8199 20.6951 14.1219 20.1 15.3C19.3944 16.7118 18.3098 17.8992 16.9674 18.7293C15.6251 19.5594 14.0782 19.9994 12.5 20C11.1801 20.0035 9.87812 19.6951 8.7 19.1L3 21L4.9 15.3C4.30493 14.1219 3.99656 12.8199 4 11.5C4.00061 9.92179 4.44061 8.37488 5.27072 7.03258C6.10083 5.69028 7.28825 4.6056 8.7 3.90003C9.87812 3.30496 11.1801 2.99659 12.5 3.00003H13C15.0843 3.11502 17.053 3.99479 18.5291 5.47089C20.0052 6.94699 20.885 8.91568 21 11V11.5Z"
                                                fill="#119AE2" />
                                        </svg>
                                    </span>
                                    <span>25</span>
                                </div>
                            </div>
                            <div>
                                <button>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13.0001C12.5523 13.0001 13 12.5524 13 12.0001C13 11.4478 12.5523 11.0001 12 11.0001C11.4477 11.0001 11 11.4478 11 12.0001C11 12.5524 11.4477 13.0001 12 13.0001Z" stroke="#52575C" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12 5.99988C12.5523 5.99988 13 5.55216 13 4.99988C13 4.44759 12.5523 3.99988 12 3.99988C11.4477 3.99988 11 4.44759 11 4.99988C11 5.55216 11.4477 5.99988 12 5.99988Z" stroke="#52575C" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div> -->
                    <!-- End Portfolio item -->





                </div>
            </div>
            <button onclick="onOpenPopup('add-portfolio')" class="flex flex-row items-center py-4 px-5 fixed right-4 bottom-5 bg-ubuy-blue text-white" style="border-radius: 30px;">
                <span class="mr-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5V19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <span>Add Portfolio</span>
            </button>
        </div>
    </main>   

        <!-- Buy U-Coin Popup -->
        <div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6" id="add-portfolio" style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
            <div class="flex flex-col items-center justify-around md:py-10 py-6 md:px-10 px-6 rounded-3xl shadow bg-white relative max-w-xl w-full">
                <button class="absolute right-5 top-5" onclick="onClosePopup('add-portfolio')">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <h1 class="font-semibold text-lg text-ubuy-black mb-16">Add New Portfolio</h1>

                <div class="flex flex-col items-center justify-center font-medium text-sm">
                    <form id="portfolio-form"  enctype="multipart/form-data">
                        <div class="w-full mb-10">
                            <label for="coin-quantity">Caption</label>
                            <input type="text" name="caption" id="caption" class="mt-1.5 rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full" />
                        </div>
                        <div class="flex flex-col w-full">
                            <label for="dispute-details" class="text-sm font-medium text-ubuy-secondary mb-2.5">
                                Tell Us about this project:
                            </label>
                            <textarea class="border bg-ubuy-gray400 border-ubuy-gray200 rounded-md p-5 resize-none text-sm h-36" type="text" name="portfolio_details" id="portfolio_details" placeholder="Enter the details of this dispute" spellcheck="false"></textarea>
                        </div>
                        <div class="flex flex-row items-center self-start my-4">
                            <label for="files" class="flex flex-row items-center border bg-ubuy-gray400 border-ubuy-gray200 rounded-llg px-4 py-3">
                                <span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.2934 7.36678L8.1667 13.4934C7.41613 14.244 6.39815 14.6657 5.3367 14.6657C4.27524 14.6657 3.25726 14.244 2.5067 13.4934C1.75613 12.7429 1.33447 11.7249 1.33447 10.6634C1.33447 9.60199 1.75613 8.584 2.5067 7.83344L8.63336 1.70678C9.13374 1.2064 9.81239 0.925293 10.52 0.925293C11.2277 0.925293 11.9063 1.2064 12.4067 1.70678C12.9071 2.20715 13.1882 2.8858 13.1882 3.59344C13.1882 4.30108 12.9071 4.97973 12.4067 5.48011L6.27336 11.6068C6.02318 11.857 5.68385 11.9975 5.33003 11.9975C4.97621 11.9975 4.63688 11.857 4.3867 11.6068C4.13651 11.3566 3.99596 11.0173 3.99596 10.6634C3.99596 10.3096 4.13651 9.9703 4.3867 9.72011L10.0467 4.06678" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="text-sm text-ubuy-secondary">Attach files</span>
                            </label>
                            <input type="file" name="files" id="files" class="hidden" multiple="">
                        </div>

                        <div class="flex flex-row w-full items-start rounded-md bg-yellow-200 py-2 px-3 text-ubuy-secondary">
                            <span class="mr-2"> Note:</span>
                            <p class="text-xxs ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec psum dolor sit amet, consectetur adipiscing </p>
                        </div>
                        <div class="mt-8 self-start">
                            <input type="hidden" name="user_id" id="user_id" value="<?php $_SESSION['access_token']; ?>" />
                            <button class="text-sm text-white rounded-lg bg-ubuy-blue py-4 px-5 font-semibold shadow-card" id="addPortfolioBtn" >
                                Add
                            </button>
                        </div>
                    </form>
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

<script type="text/javascript">
    fetch("endpoints/fetch-portfolio.php").then(
    res => {
        res.json().then(
        data => {
            console.log(data.portfolio);
            $("#loadNewLi").fadeOut().hide();
            $("#mobileNewLoader").fadeOut().hide();
            if (data.portfolio.length > 0) {
                var temp = "";
                var tempMobile = "";
                for (const itemData of data.portfolio) {

                    var one_day = 1000 * 60 * 60 * 24;
                    var present_date = new Date();
                    var dueDate = new Date(itemData.created_at);

                    if (present_date.getMonth() == 11 && present_date.getdate() > 25) dueDate.setFullYear(dueDate.getFullYear() + 1)
                        var Result = Math.round(dueDate.getTime() - present_date.getTime()) / (one_day);
                        var Final_Result = Result.toFixed(0) +" days ago";

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
                
                temp += '<div class="flex flex-col w-full items-center justify-center p-5 rounded-2xl hover:shadow-2xl bg-white">';
                temp += '<h1 class="mb-5 text-center px-4">'+itemData.caption+'</h1>';
                temp += '<div class="flex justify-center mb-5 w-full"><img src="'+itemData.public_url+'" alt="" class="rounded-llg w-auto h-60" /></div>';
                temp += '<div class="flex flex-row items-center w-full justify-between text-xs text-ubuy-inactive">';
                temp += '<div class="flex flex-row items-center gap-x-2">';
                temp += '<div class="flex flex-row items-center"><span class="mr-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.8401 4.60999C20.3294 4.099 19.7229 3.69364 19.0555 3.41708C18.388 3.14052 17.6726 2.99817 16.9501 2.99817C16.2276 2.99817 15.5122 3.14052 14.8448 3.41708C14.1773 3.69364 13.5709 4.099 13.0601 4.60999L12.0001 5.66999L10.9401 4.60999C9.90843 3.5783 8.50915 2.9987 7.05012 2.9987C5.59109 2.9987 4.19181 3.5783 3.16012 4.60999C2.12843 5.64169 1.54883 7.04096 1.54883 8.49999C1.54883 9.95903 2.12843 11.3583 3.16012 12.39L4.22012 13.45L12.0001 21.23L19.7801 13.45L20.8401 12.39C21.3511 11.8792 21.7565 11.2728 22.033 10.6053C22.3096 9.93789 22.4519 9.22248 22.4519 8.49999C22.4519 7.77751 22.3096 7.0621 22.033 6.39464C21.7565 5.72718 21.3511 5.12075 20.8401 4.60999Z" fill="#FB4E4E" /></svg></span><span>'+itemData.total_likes+'</span></div>';
                // temp += '<div class="flex flex-row items-center"><span class="mr-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 11.5C21.0034 12.8199 20.6951 14.1219 20.1 15.3C19.3944 16.7118 18.3098 17.8992 16.9674 18.7293C15.6251 19.5594 14.0782 19.9994 12.5 20C11.1801 20.0035 9.87812 19.6951 8.7 19.1L3 21L4.9 15.3C4.30493 14.1219 3.99656 12.8199 4 11.5C4.00061 9.92179 4.44061 8.37488 5.27072 7.03258C6.10083 5.69028 7.28825 4.6056 8.7 3.90003C9.87812 3.30496 11.1801 2.99659 12.5 3.00003H13C15.0843 3.11502 17.053 3.99479 18.5291 5.47089C20.0052 6.94699 20.885 8.91568 21 11V11.5Z" fill="#119AE2" /></svg></span><span>25</span></div>';
                temp += '</div>';
                temp += '<div><button><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 13.0001C12.5523 13.0001 13 12.5524 13 12.0001C13 11.4478 12.5523 11.0001 12 11.0001C11.4477 11.0001 11 11.4478 11 12.0001C11 12.5524 11.4477 13.0001 12 13.0001Z" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /><path d="M12 5.99988C12.5523 5.99988 13 5.55216 13 4.99988C13 4.44759 12.5523 3.99988 12 3.99988C11.4477 3.99988 11 4.44759 11 4.99988C11 5.55216 11.4477 5.99988 12 5.99988Z" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /><path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg></button></div>';
                temp += '</div>';
                temp += '</div>';



                // tempMobile += '<details class="bg-white rounded-llg my-2"><summary class="flex flex-col py-3.5 pl-3.5 pr-11"><div class="flex flex-row items-center justify-between text-xxxs mb-1"><div class="text-ubuy-blue">'+itemData.sub_category.name+'</div><small>'+Final_Result+'</small></div><div class="flex flex-row justify-between items-center"><div class="text-xxs text-ubuy-secondary font-medium w-2/3">'+itemData.project_title+'</div><div class="rounded text-tiny '+projectColor+' text-white px-4 py-1">'+projectStatus+'</div></div></summary><div class="p-3.5"><div class="text-xs text-ubuy-secondary mb-3" style="height: 50px; overflow: hidden;">'+itemData.project_message+'</div><div class="flex flex-row items-center justify-between"><div class="flex flex-col"><div><span class="text-xs text-ubuy-secondary">Budget:</span><span class="text-xxs text-ubuy-black">N '+itemData.budget+'</span></div><div class="flex flex-row items-center gap-y-3 mt-2.5"><span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 6.6665C14 11.3332 8 15.3332 8 15.3332C8 15.3332 2 11.3332 2 6.6665C2 5.07521 2.63214 3.54908 3.75736 2.42386C4.88258 1.29864 6.4087 0.666504 8 0.666504C9.5913 0.666504 11.1174 1.29864 12.2426 2.42386C13.3679 3.54908 14 5.07521 14 6.6665Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /><path d="M8 8.6665C9.10457 8.6665 10 7.77107 10 6.6665C10 5.56193 9.10457 4.6665 8 4.6665C6.89543 4.6665 6 5.56193 6 6.6665C6 7.77107 6.89543 8.6665 8 8.6665Z" stroke="#52575C" stroke-linecap="round" stroke-linejoin="round" /></svg></span><span class="text-xs text-ubuy-secondary ml-2">'+itemData.city+'</span></div></div><a href="bid-details.php?project_id='+itemData.id+'" class="rounded-md px-2.5 py-1 border border-ubuy-bluetext-ubuy-blue">View Task</a></div></div></details>';

                }
                $('#userPortfolioList').html(temp);                    
                // $('#proMobileNewTaskList').html(tempMobile);
            }
        })
    })
</script>