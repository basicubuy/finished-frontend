<?php
include_once("endpoints/constant.php");
if(isset($_SESSION['user_role'])){
    if($_SESSION['user_role'] == 'customer'){
        require_once 'inc/customer-header.php';
    }elseif($_SESSION['user_role'] == 'pro'){
        require_once 'inc/pro-header.php';
    }

    $rating = $init->fetchReviews();
    $rating = json_decode($rating, true);
    $rating = isset($rating['ratings']) ? $rating['ratings'] : "";


    // var_dump($rating);
    // return;

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
                    <div class="sm:hidden flex flex-row items-center rounded-lg bg-white p-4">
                        <div class="flex flex-col flex-1 mr-2">
                              <!-- Add the percentage value to fill -->
                              <div class="reviews-stats-wrapper text-ubuy-blue" style="--star1: 5; --star2: 5; --star3: 5; --star4: 5; --star5: 80;">
                                <div class="relative">
                                    <svg class="w-28 h-28 mobile">
                                        <circle cx="42" cy="42" r="42"></circle>
                                        <circle cx="42" cy="42" r="42"></circle>
                                        <circle cx="42" cy="42" r="42"></circle>
                                        <circle cx="42" cy="42" r="42"></circle>
                                        <circle cx="42" cy="42" r="42"></circle>
                                    </svg>
                                    <div class="absolute transform top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                                        <span class="text-2xl text-ubuy-black font-medium"><?php echo $userData['rating']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs text-ubuy-secondary whitespace-nowrap">
                                <?php echo $userData['rating']; ?> Reviews Recieved
                            </div>
                        </div>

                        <div class="flex flex-col flex-2 text-sm text-ubuy-secondary">
                            <div class="flex flex-row items-center w-full">
                                <span class="mr-2">5</span>
                                <progress class="review-progress five-star w-full" value="50" max="100" min="0"></progress>
                            </div>
                            <div class="flex flex-row items-center w-full my-1">
                                <span class="mr-2">4</span>
                                <progress class="review-progress four-star w-full" value="30" max="100" min="0"></progress>
                            </div>
                            <div class="flex flex-row items-center w-full">
                                <span class="mr-2">3</span>
                                <progress class="review-progress three-star w-full" value="10" max="100" min="0"></progress>
                            </div>
                            <div class="flex flex-row items-center w-full my-1">
                                <span class="mr-2">2</span>
                                <progress class="review-progress two-star w-full" value="8" max="100" min="0"></progress>
                            </div>
                            <div class="flex flex-row items-center w-full">
                                <span class="mr-2">1</span>
                                <progress class="review-progress one-star w-full" value="2" max="100" min="0"></progress>
                            </div>
                        </div>

                    </div>
                    <div class="hidden sm:flex flex-row flex-wrap sm:flex-nowrap xl:gap-x-6 gap-x-4">
                        <div class="flex flex-row items-center xl:w-2/3 w-full bg-white shadow-card px-9 py-5 mb-5 sm:mb-0 rounded-lg">
                            <div class="flex flex-col items-start flex-1/3 text-ubuy-secondary">
                                <div class="text-ubuy-inactive text-sm -mt-2">Ratings/Reviews</div>
                                <div class="flex-1 text-5xl mb-5 mt-7">
                                    <?php echo $userData['rating']; ?>
                                </div>
                                <div class="text-lg">
                                    Reviews Recieved
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-x-5 gap-y-6 items-start">
                                <div class="flex flex-row text-ubuy-gray500">
                                    <span class="mr-2.5 text-sm">
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 0L15.5267 7.1459L23.4127 8.2918L17.7063 13.8541L19.0534 21.7082L12 18L4.94658 21.7082L6.29366 13.8541L0.587322 8.2918L8.47329 7.1459L12 0Z" fill="#2AC769" />
                                        </svg>
                                    </span>
                                    <span class="whitespace-nowrap">
                                        5 Stars (0)
                                    </span>
                                </div>
                                <div class="flex flex-row text-ubuy-gray500">
                                    <span class="mr-2.5 text-sm">
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 0L15.5267 7.1459L23.4127 8.2918L17.7063 13.8541L19.0534 21.7082L12 18L4.94658 21.7082L6.29366 13.8541L0.587322 8.2918L8.47329 7.1459L12 0Z" fill="#FFBC1F" />
                                        </svg>

                                    </span>
                                    <span class="whitespace-nowrap">
                                        2 Stars (0)
                                    </span>
                                </div>
                                <div class="flex flex-row text-ubuy-gray500">
                                    <span class="mr-2.5 text-sm">
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 0L15.5267 7.1459L23.4127 8.2918L17.7063 13.8541L19.0534 21.7082L12 18L4.94658 21.7082L6.29366 13.8541L0.587322 8.2918L8.47329 7.1459L12 0Z" fill="#94F5BB" />
                                        </svg>
                                    </span>
                                    <span class="whitespace-nowrap">
                                        4 Stars (0)
                                    </span>
                                </div>
                                <div class="flex flex-row text-ubuy-gray500">
                                    <span class="mr-2.5 text-sm">
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 0L15.5267 7.1459L23.4127 8.2918L17.7063 13.8541L19.0534 21.7082L12 18L4.94658 21.7082L6.29366 13.8541L0.587322 8.2918L8.47329 7.1459L12 0Z" fill="#FB4E4E" />
                                        </svg>

                                    </span>
                                    <span class="whitespace-nowrap">
                                        1 Star (0)
                                    </span>
                                </div>


                                <div class="flex flex-row text-ubuy-gray500">
                                    <span class="mr-2.5 text-sm">
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 0L15.5267 7.1459L23.4127 8.2918L17.7063 13.8541L19.0534 21.7082L12 18L4.94658 21.7082L6.29366 13.8541L0.587322 8.2918L8.47329 7.1459L12 0Z" fill="#F5F542" />
                                        </svg>

                                    </span>
                                    <span class="whitespace-nowrap">
                                        3 Stars (0)
                                    </span>
                                </div>

                            </div>
                            <div class="flex flex-col items-center flex-1/3">
                                <!-- Add the percentage value to fill -->
                                <div class="reviews-stats-wrapper text-ubuy-blue" style="--star1: 5; --star2: 5; --star3: 5; --star4: 5; --star5: 80;">
                                    <div class="relative">
                                        <svg class="w-52 h-52">
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                        </svg>
                                        <div class="absolute transform top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                                            <span class="text-2xl text-ubuy-black font-medium"><?php echo $userData['average_rating']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sm:w-1/3 w-full xl:flex hidden flex-col p-2.5 items-center justify-center bg-white shadow-card rounded-lg">
                            <div class="text-ubuy-gray500 h-12 text-sm">
                                Average Rating
                            </div>
                            <div class="text-5xl text-ubuy-secondary flex-grow flex items-center">
                            <?php echo $userData['average_rating']; ?>
                            </div>
                            <div class="ratings text-3xl">
                                <div class="empty-stars mx-auto"></div>
                                <?php 
                                    $rate = ($userData['average_rating']*100)/5;
                                ?>
                                <!-- Add the ratings percentage as the width -->
                                <div class="full-stars" style="width:<?php echo $rate; ?>%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between items-center text-sm text-ubuy-secondary">
                        <div class="flex flex-row items-center gap-x-5">
                            <div class="bg-white rounded-llg py-3 px-5 flex flex-row items-center">
                                <label for="filter-review" class="flex flex-row">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.1554 0H0.84473C0.0952696 0 -0.282906 0.909351 0.248129 1.44039L6.74999 7.94324V15.1875C6.74999 15.4628 6.88433 15.7208 7.10989 15.8787L9.92239 17.8468C10.4773 18.2352 11.25 17.8415 11.25 17.1555V7.94324L17.752 1.44039C18.282 0.910406 17.9064 0 17.1554 0Z"
                                            fill="#52575C" />
                                    </svg>
                                    <span class="ml-3 sm:inline hidden">Filter By</span>
                                </label>
                                <select name="filter-review" id="filter-review" class="px-3 py-2 bg-transparent appearance-none w-0 xl:w-auto">
                                    <option value=""></option>
                                    <option value="">Recent</option>
                                </select>
                            </div>

                            <div class="bg-white rounded-llg py-3 px-5 flex flex-row items-center">
                                <label for="sort-by" class="flex flex-row">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.69285 6.40258L4.97345 3.18822C5.22971 2.93722 5.64541 2.9373 5.90151 3.18822L9.18198 6.40258C9.59501 6.80718 9.30088 7.50002 8.71793 7.50002H6.75V20.3571C6.75 20.7122 6.4562 21 6.09375 21H4.78125C4.41879 21 4.125 20.7122 4.125 20.3571V7.50002H2.1569C1.5728 7.50002 1.28069 6.80637 1.69285 6.40258ZM11.3437 5.57145H21.8438C22.2062 5.57145 22.5 5.28365 22.5 4.92859V3.64288C22.5 3.28782 22.2062 3.00002 21.8438 3.00002H11.3437C10.9813 3.00002 10.6875 3.28782 10.6875 3.64288V4.92859C10.6875 5.28365 10.9813 5.57145 11.3437 5.57145ZM10.6875 10.0714V8.78573C10.6875 8.43067 10.9813 8.14287 11.3437 8.14287H19.2188C19.5812 8.14287 19.875 8.43067 19.875 8.78573V10.0714C19.875 10.4265 19.5812 10.7143 19.2188 10.7143H11.3437C10.9813 10.7143 10.6875 10.4265 10.6875 10.0714ZM10.6875 20.3571V19.0714C10.6875 18.7164 10.9813 18.4286 11.3437 18.4286H13.9687C14.3312 18.4286 14.625 18.7164 14.625 19.0714V20.3571C14.625 20.7122 14.3312 21 13.9687 21H11.3437C10.9813 21 10.6875 20.7122 10.6875 20.3571ZM10.6875 15.2143V13.9286C10.6875 13.5735 10.9813 13.2857 11.3437 13.2857H16.5937C16.9562 13.2857 17.25 13.5735 17.25 13.9286V15.2143C17.25 15.5693 16.9562 15.8571 16.5937 15.8571H11.3437C10.9813 15.8571 10.6875 15.5693 10.6875 15.2143Z"
                                            fill="#222F54" />
                                    </svg>
                                    <span class="ml-3 sm:inline hidden"> Sort by:</span>
                                </label>
                                <select name="sort-by" id="sort-by" class="px-3 py-2 bg-transparent appearance-none w-0 xl:w-auto">
                                    <option value=""></option>
                                    <option value="">Recent</option>
                                </select>
                            </div>
                        </div>
                        <div class="bg-white relative rounded-llg py-3 px-5 max-w-md flex-2 ml-5 min-w-otpx">
                            <label for="search" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                                <button class="rounded bg-ubuy-blue p-2 shadow-card">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </label>
                            <input class="py-2 px-3 w-full" id="search" type="text" placeholder="Find review..." />
                        </div>
                    </div>
                    <div class="w-full bg-white rounded-llg shadow-card sm:block hidden">
                        <table class="table-auto text-secondary font-normal text-xxs w-full">
                            <thead>
                                <tr class="border-b border-gray-200">
                                    <th class="text-left xl:w-40 w-36 p-5">Date</th>
                                    <th class="text-left xl:w-40 w-36 py-5 pr-5 md:pl-0 pl-5">User Info</th>
                                    <th class="text-left xl:w-28 w-24 py-5 pr-5">Location</th>
                                    <th class="text-center xl:w-36 w-32 py-5 pr-5">Ratings</th>
                                    <th class="text-left py-5 pr-5 xl:w-60 w-72">Review</th>
                                </tr>
                            </thead>
                            <tbody class="h-80 overflow-y-auto">

                            <?php 
                                foreach($rating as $item){ 

                                    $cusDetails = $init->singleUser($item['cus_id']);

                                    $cusDetails = json_decode($cusDetails, true);
                                    ?>
                            
                                <tr class="border-b border-gray-200 cursor-pointer hover:bg-ubuy-gray400">
                                    <td class="text-left w-40 p-5 xl:align-top"><?php echo date('l M j, Y', strtotime($item['created_at'])); ?></td>
                                    <td class="text-left w-40 py-5 pr-5 xl:align-top"><?php echo $cusDetails['last_name'].' '.$cusDetails['first_name'][0]; ?></td>
                                    <td class="text-left w-28 py-5 pr-5 xl:align-top"><?php echo $cusDetails['city']; ?></td>
                                    <td class="text-center w-36 py-5 pr-5 xl:align-top">
                                        <div class="ratings text-xs xl:text-sm">
                                            <div class="empty-stars mx-auto"></div>
                                            <!-- Add the ratings percentage as the width -->
                                            <?php 
                                                $rate = ($item['rating']*100)/5;
                                            ?>
                                            <div class="full-stars" style="width:<?php echo $rate; ?>%"></div>
                                        </div>
                                    </td>
                                    <td class="text-left py-5 pr-5 text-ubuy-secondary">
                                        <!-- <h1 class="text-sm font-medium">Highly Recommended Artisan</h1> -->
                                        <p class="text-xxs">
                                            <?php echo $item['comment']; ?>
                                        </p>
                                    </td>
                                </tr>
                            
                            <?php } ?>
                                

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
                    <div class="sm:hidden flex flex-col mt-4 gap-y-4">
                        <details class="bg-white rounded-llg">
                            <summary class="flex flex-col py-3.5 pl-3.5 pr-11">
                                <div class="flex flex-row items-center justify-between text-xxxs mb-1">
                                    <div class="text-ubuy-blue">John Ayomide</div>
                                    <small>13min ago</small>
                                </div>
                                <div class="flex flex-row justify-between items-center">
                                    <div class="text-xxs text-ubuy-secondary font-medium w-2/3">Highly Recommended Artisan</div>
                                    <div class="rounded text-tiny text-white -mr-3">
                                        <div class="ratings">
                                            <div class="empty-stars mx-auto"></div>
                                            <!-- Add the ratings percentage as the width -->
                                            <div class="full-stars" style="width:80%"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="truncate text-tiny">
                                    I enjoyed working with john a lot. He helped me with my work with utmost professionalism. For anyone who needs a...
                                </span>
                            </summary>
                            <div class="p-3.5">
                                <div class="text-xs text-ubuy-secondary mb-3">
                                    I enjoyed working with john a lot. He helped me with my work with utmost professionalism. For anyone who needs a...
                                 </div>
                            </div>
                        </details>
                        <details class="bg-white rounded-llg">
                            <summary class="flex flex-col py-3.5 pl-3.5 pr-11">
                                <div class="flex flex-row items-center justify-between text-xxxs mb-1">
                                    <div class="text-ubuy-blue">John Ayomide</div>
                                    <small>13min ago</small>
                                </div>
                                <div class="flex flex-row justify-between items-center">
                                    <div class="text-xxs text-ubuy-secondary font-medium w-2/3">Highly Recommended Artisan</div>
                                    <div class="rounded text-tiny text-white -mr-3">
                                        <div class="ratings">
                                            <div class="empty-stars mx-auto"></div>
                                            <!-- Add the ratings percentage as the width -->
                                            <div class="full-stars" style="width:80%"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="truncate text-tiny">
                                    I enjoyed working with john a lot. He helped me with my work with utmost professionalism. For anyone who needs a...
                                </span>
                            </summary>
                            <div class="p-3.5">
                                <div class="text-xs text-ubuy-secondary mb-3">
                                    I enjoyed working with john a lot. He helped me with my work with utmost professionalism. For anyone who needs a...
                                 </div>
                            </div>
                        </details>
                        <details class="bg-white rounded-llg">
                            <summary class="flex flex-col py-3.5 pl-3.5 pr-11">
                                <div class="flex flex-row items-center justify-between text-xxxs mb-1">
                                    <div class="text-ubuy-blue">John Ayomide</div>
                                    <small>13min ago</small>
                                </div>
                                <div class="flex flex-row justify-between items-center">
                                    <div class="text-xxs text-ubuy-secondary font-medium w-2/3">Highly Recommended Artisan</div>
                                    <div class="rounded text-tiny text-white -mr-3">
                                        <div class="ratings">
                                            <div class="empty-stars mx-auto"></div>
                                            <!-- Add the ratings percentage as the width -->
                                            <div class="full-stars" style="width:80%"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="truncate text-tiny">
                                    I enjoyed working with john a lot. He helped me with my work with utmost professionalism. For anyone who needs a...
                                </span>
                            </summary>
                            <div class="p-3.5">
                                <div class="text-xs text-ubuy-secondary mb-3">
                                    I enjoyed working with john a lot. He helped me with my work with utmost professionalism. For anyone who needs a...
                                 </div>
                            </div>
                        </details>
                        <details class="bg-white rounded-llg">
                            <summary class="flex flex-col py-3.5 pl-3.5 pr-11">
                                <div class="flex flex-row items-center justify-between text-xxxs mb-1">
                                    <div class="text-ubuy-blue">John Ayomide</div>
                                    <small>13min ago</small>
                                </div>
                                <div class="flex flex-row justify-between items-center">
                                    <div class="text-xxs text-ubuy-secondary font-medium w-2/3">Highly Recommended Artisan</div>
                                    <div class="rounded text-tiny text-white -mr-3">
                                        <div class="ratings">
                                            <div class="empty-stars mx-auto"></div>
                                            <!-- Add the ratings percentage as the width -->
                                            <div class="full-stars" style="width:80%"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="truncate text-tiny">
                                    I enjoyed working with john a lot. He helped me with my work with utmost professionalism. For anyone who needs a...
                                </span>
                            </summary>
                            <div class="p-3.5">
                                <div class="text-xs text-ubuy-secondary mb-3">
                                    I enjoyed working with john a lot. He helped me with my work with utmost professionalism. For anyone who needs a...
                                 </div>
                            </div>
                        </details>
                        <details class="bg-white rounded-llg">
                            <summary class="flex flex-col py-3.5 pl-3.5 pr-11">
                                <div class="flex flex-row items-center justify-between text-xxxs mb-1">
                                    <div class="text-ubuy-blue">John Ayomide</div>
                                    <small>13min ago</small>
                                </div>
                                <div class="flex flex-row justify-between items-center">
                                    <div class="text-xxs text-ubuy-secondary font-medium w-2/3">Highly Recommended Artisan</div>
                                    <div class="rounded text-tiny text-white -mr-3">
                                        <div class="ratings">
                                            <div class="empty-stars mx-auto"></div>
                                            <!-- Add the ratings percentage as the width -->
                                            <div class="full-stars" style="width:80%"></div>
                                        </div>
                                    </div>
                                </div>
                                <span class="truncate text-tiny">
                                    I enjoyed working with john a lot. He helped me with my work with utmost professionalism. For anyone who needs a...
                                </span>
                            </summary>
                            <div class="p-3.5">
                                <div class="text-xs text-ubuy-secondary mb-3">
                                    I enjoyed working with john a lot. He helped me with my work with utmost professionalism. For anyone who needs a...
                                 </div>
                            </div>
                        </details>
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