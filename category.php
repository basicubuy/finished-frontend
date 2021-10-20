<?php require_once 'inc/home-header.php'; ?>
<?php
$subCat = $init->getSubcategoryCategory($_GET['cat-id']);
$subCat = json_decode($subCat, true);
$subCat = !empty($subCat['subCategory']) ? $subCat['subCategory'] : "";

// var_dump($subCat[0]);
// return;

$singleCat = $init->fetchSingleCategory($_GET['cat-id']);
$singleCat = json_decode($singleCat, true);
$singleCat = $singleCat['category'];

?>
    <main class="w-full overflow-hidden">
        <section class="bg-white">
            <div class="max-w-7xl mx-auto p-5 w-full">
                <div class="w-full rounded-llg overlay category-hero p-8 xl:py-24 xl:px-24 text-white relative flex flex-col justify-center items-center bg-center bg-no-repeat bg-cover" style="background-image: url('assets/images/careers-hero.jpeg');">
                    <h1 class=" text-2xl md:text-32 xl:text-44 text-center xl:leading-relaxed mb-8">
                        Find the Best Professional Service in Abuja
                    </h1>
                    <p class="text-center px-1 mb-14 text-sm">
                    There is nothing more frustrating than endless internet searches for someone to help you complete a task. 
From big cities to small towns, we’ve got professionals all across Nigeria.
                    </p>
                    <div class="bg-white relative rounded-llg py-3 px-5 w-full flex flex-row items-center mb-5 max-w-2xl">
                        <button class="flex flex-row items-center focus:outline-none">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20.9999 21L16.6499 16.65" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 9L12 15L18 9" stroke="#119AE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <label for="search" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                            <button class="rounded bg-ubuy-blue p-2 shadow-card">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21.0004 20.9999L16.6504 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </label>
                        <input class="py-2 px-3 w-full focus:outline-none" id="search" type="text" placeholder="Find Professional service..." />
                    </div>

                </div>
            </div>

        </section>

        <section class="w-full bg-white mb-24">
            <div class="max-w-7xl mx-auto flex  md:flex-row flex-col-reverse relative w-full px-4">
                <div class="flex flex-col sticky top-2 mr-8 w-full flex-1">



                <?php 
                    foreach($category as $cat){
                ?>
                    <a href="category.php?cat-id=<?php echo $cat['id']; ?>" class="rounded flex flex-row p-2 items-center justify-between <?php echo $cat['id']==$_GET['cat-id'] ? "border border-current text-ubuy-blue" : "text-ubuy-black bg-ubuy-gray460"; ?> mb-2.5 w-full">
                        <div class="flex flex-row items-center">
                            <span class="mr-3">
                                <img src="<?php echo $cat['public_icon']; ?>" width="24" height="24" >
                            </span>
                            <span><?php echo $cat['name']; ?></span>
                        </div>
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>

                <?php
                    }
                ?>


                </div>
                <div class="flex-2 mb-5 md:mb-0">
                    <div class="grid grid-cols-4 gap-4">
                        <div class="col-span-4 row-span-1 h-48 bg-no-repeat bg-cover w-full overlay z-1 py-12 px-10 text-center relative rounded-llg text-white flex flex-col items-center justify-center" style="background-image: url(<?php echo $singleCat['public_image']; ?>);">
                            <h1 class="md:text-32 text-2xl font-semibold"><?php echo $singleCat['name']; ?></h1>
                            <p class="md:text-sm text-xs mt-3"><?php echo $singleCat['description']; ?></p>
                        </div>

                        <!-- <div class="h-48 col-span-2 bg-no-repeat bg-cover overlay z-1 lg:text-center text-left p-4 relative rounded-llg text-white flex flex-col lg:items-center lg:justify-center items-start justify-end" style="background-image: url(assets/images/appliance-category.jpeg);">
                            <h1 class="lg:text-2xl text-base font-medium">Appliance Installation</h1>
                            <div class="flex flex-row items-center">
                                <span class="mr-2 text-sm">
                                    See Pros near you
                                </span>
                                <span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.33398 8H12.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8 3.33331L12.6667 7.99998L8 12.6666" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div> -->

                        <?php
                            foreach($subCat as $item){ ?>


                            <div class="h-48 lg:col-span-1 col-span-2 bg-no-repeat bg-cover overlay z-1 p-4 text-left relative rounded-llg text-white flex flex-col items-start justify-end w-full" style="background-image: url(<?php echo $item['public_bg_image']; ?>);">
                                <h1 class="text-base font-medium"><?php echo $item['name']; ?></h1>
                                <a href="sub-category.php?subcat-id=<?php echo $item["id"]; ?>"><div class="flex flex-row items-center">
                                    <span class="mr-2 text-sm">
                                        See Pros near you
                                    </span>
                                    <span>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.33398 8H12.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 3.33331L12.6667 7.99998L8 12.6666" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div></a>
                            </div>

                        <?php } ?>
                        
                    </div>
                </div>
              
            </div>
        </section>
    </main>
<?php require_once 'inc/home-footer.php'; ?>