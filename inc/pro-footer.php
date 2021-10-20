<!--Modal-->
<!-- <div x-show="isDialogOpen"  class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }" style="background-color: #000000e3; z-index: 999;">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto" x-show="isDialogOpen" @click.away="isDialogOpen = true">
      
      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>
      <div class="modal-content py-4 text-left px-6">
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">Simple Modal!</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <p>Modal content can go here</p>
        <p>...</p>
        <p>...</p>
        <p>...</p>
        <p>...</p>

        <div class="flex justify-end pt-2">
          <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
          <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
        </div>
        
      </div>
    </div>
  </div>
</div> -->
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 overflow-y-auto z-40" aria-labelledby="modal-title" role="dialog" aria-modal="true"
    id="verify-email-phone" style="display: none;">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-900 bg-opacity-90 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="w-full">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-center">
                        <div class="text-lg leading-6 font-medium text-gray-900 text-3xl text-ubuy-blue"
                            id="modal-title">
                            Let's get you verified
                        </div>
                        <p class="my-3 text-ubuy-inactive text-sm">Ubuy Services will like to verify your identity
                        <div class="mt-8">
                            <div class="text-left font-light">You have to verify your email address &amp; phone number:
                            </div>

                            <div class="flex flex-row my-12 justify-center align-content-center">
                                <button
                                    class="mt-3 w-full inline-flex justify-center rounded-md shadow-sm px-4 py-2 bg-ubuy-blue text-base font-medium text-white sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                    Verify Email
                                </button>

                                <button
                                    class="mt-3 w-full inline-flex justify-center rounded-md shadow-sm px-4 py-2 border border-ubuy-blue text-base font-medium text-ubuy-blue sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                    Verify Phone Number
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fixed z-10 inset-0 overflow-y-auto z-40" aria-labelledby="modal-title" role="dialog" aria-modal="true"
    id="verify-modal" style="display: none;">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-900 bg-opacity-90 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="w-full">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-center">
                        <div class="text-lg leading-6 font-medium text-gray-900 text-3xl text-ubuy-blue"
                            id="modal-title">
                            Let's get you verified
                        </div>
                        <p class="my-3 text-ubuy-inactive text-sm">Ubuy Services will like to verify your identity
                        <div class="mt-8">
                            <div class="text-left font-light">TO CONFIRM YOUR IDENTITY</div>

                            <?php

                if($userData["verify_confirm"] == 0 || $userData["verify_confirm"] == null){
                  $verifyer = "<span class='text-red-600'>Not Verified</span>";
                }elseif($userData["verify_confirm"] == 1){
                  $verifyer = "<span class='text-yellow-600'>Pending</span>";
                }else{
                  $verifyer = "<span class='text-green-600'>Verified!</span>";
                }

                if($userData["licence_verify"] == 0 || $userData["licence_verify"] == null){
                  $lin_verify = "<span class='text-red-600'>Not Verified</span>";
                }elseif($userData["licence_verify"] == 1){
                  $lin_verify = "<span class='text-yellow-600'>Pending</span>";
                }else{
                  $lin_verify = "<span class='text-green-600'>Verified!</span>";
                }
              ?>

                            <div class="flex grid grid-cols-3 gap-4 w-full bg-gray-50 mt-6 rounded-lg p-3 text-sm">
                                <div class="col-span-2 flex justify-start align-content-start">Verify your Email:</div>
                                <div class="text-sm">
                                    <?php echo $userData["email_verified_at"]!= null ? "<span class='bg-green-600 text-white text-xxxs rounded p-2'>Verified!</span>" : "<button id='email-verify-btn' onclick='verifyEmail(this.id)' class='rounded text-xxxs px-4 py-0.5 bg-ubuy-blue text-white'>Verify</button>"; ?>
                                </div>
                            </div>

                            <div class="flex grid grid-cols-3 gap-4 w-full bg-gray-50 mt-6 rounded-lg p-3 text-sm">
                                <div class="col-span-2 flex justify-start align-content-start">Verify your Phone number:
                                </div>
                                <div class="text-sm" id="verifyFirst">
                                    <?php echo $userData["is_phone_verified"]!= null ? "<span class='bg-green-600 text-white rounded text-xxxs p-2'>Verified</span>" : "<button id='phone-verify-btn' onclick='verifyPhone(this.id)' class='rounded text-xxxs px-4 py-0.5 bg-ubuy-blue text-white'>Verify</button>"; ?>
                                </div>
                                <div class="text-sm flex flex-row hidden" id="verifyLast">
                                    <form id="verifyPhoneFinal" method="post">
                                        <input type="number" name="verification_code_input" id="verification_code_input"
                                            class="text-xs py-1.5 px-3 border border-ubuy-gray200 bg-ubuy-gray400"
                                            style="width: 120px;">
                                        <button type="submit" id='phone-final-verify-btn'
                                            class='text-xxxs p-2 bg-ubuy-blue text-white'>Confirm</button>
                                    </form>
                                </div>
                            </div>

                            <div class="flex grid grid-cols-3 gap-4 w-full bg-gray-50 mt-6 rounded-lg p-3 text-sm">
                                <div class="col-span-2 flex justify-start align-content-start">Take a Picture of your
                                    ID:</div>
                                <div class="text-sm"><?php echo $lin_verify; ?></div>
                            </div>

                            <div class="flex grid grid-cols-3 gap-4 w-full bg-gray-50 mt-6 rounded-lg p-3 text-sm">
                                <div class="col-span-2  flex justify-start align-content-start">Take a Selfie +
                                    Confirmation Code:</div>
                                <div class="text-sm"><?php echo $verifyer; ?></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                <?php  
                if($userData["verify_image"] == null || $userData["licence_verify"] == null){
                  echo '<a href="verification.php" class="mt-3 w-full inline-flex justify-center rounded-md shadow-sm px-4 py-2 bg-ubuy-blue text-base font-medium text-white sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Start Verification</a>';
                }else{
                  echo "<span class='text-sm'>Please wait for admin to verify your account!</span>";
                }
                ?>

            </div>
        </div>
    </div>
</div>
<!-- Submit bid Failed Popup -->
<div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6" id="submit-bid-failed"
    style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
    <div
        class="flex flex-col items-center justify-around md:py-7.5 py-6 md:px-10 px-6 rounded-3xl shadow bg-white relative max-w-xl w-full">
        <button class="absolute right-5 top-5" onclick="onClosePopup('submit-bid-failed')">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <div class="mb-10">
            <img src="assets/images/bid-failed-icon.png" class="" alt="">
        </div>


        <div class="flex flex-col items-center justify-center font-medium">

            <h1 class="text-3xl font-semibold text-ubuy-negativeDefault mb-4">Ooops</h1>

            <p class="text-base text-ubuy-secondary text-center max-w-sm mx-auto">
                Sorry your bid submission was unsuccessful because u dont have enough U-Credit coins to submit a bid
            </p>

        </div>
        <div class="my-8">
            <button
                class="text-sm text-white rounded-3xl bg-ubuy-negativeDefault py-3.5 px-8 font-semibold shadow-card">
                Cancel
            </button>
        </div>
    </div>
</div>
<!-- Cancel Bid Popup -->
<div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6" id="cancel-bid"
    style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
    <div
        class="flex flex-col items-center justify-around md:py-7.5 py-6 md:px-10 px-6 rounded-3xl shadow bg-white relative max-w-xl w-full">
        <button class="absolute right-5 top-5" onclick="onClosePopup('cancel-bid')">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <div class="mb-10">
            <img src="assets/images/reject-bid-icon.png" class="" alt="">
        </div>


        <div class="flex flex-col items-center justify-center font-medium">

            <h1 class="text-3xl font-semibold text-ubuy-negativeDefault mb-4">Cancel your Bid</h1>

            <p class="text-base text-ubuy-secondary text-center max-w-sm mx-auto">
                Please confirm that you are about to cancel your bid to this task
            </p>

        </div>
        <div class="my-8">
            <button
                class="text-sm text-white rounded-3xl bg-ubuy-negativeDefault py-3.5 px-8 font-semibold shadow-card">
                Continue
            </button>
        </div>
    </div>
</div>
<!--Submit task form step 1-->
<div class="min-h-screen min-w-screen w-screen h-full fixed place-items-center hidden p-6 taskFormAll" id="LogDispute"
    style="background-color: rgba(0, 0, 0, .5); z-index: 999999">
    <!-- <form id="taskFormCompleted" class="flex-col rounded-3xl shadow bg-white" style="width: 700px; height: 700px;"> -->
    <!--Submit task form step 1-->
    <div class="ubuy-post-task-form-container hidden flex-col rounded-3xl shadow bg-white w-1/2" id="post-task-form-1">
        <header class="w-full flex flex-col relative ">
            <div class="w-full flex flex-row items-center justify-center py-7">
                <h1 class="text-lg font-bold text-center mx-12">Tell us what you want done</h1>
                <button class="absolute right-6" onclick="closeSubmitTaskForm()">
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                    </svg>
                </button>
            </div>
            <progress class="w-full text-ubuy-blue task-form-progress" max="100" value="32"></progress>
        </header>
        <div class="py-14 px-10 flex-grow flex flex-col">
            <div class="flex flex-col mb-10">
                <label class="text-lg font-medium inline-block mb-2.5" for="task-name">Task title</label>
                <input class="w-full border rounded-md py-3 px-5 text-sm task-form-input" id="project_title"
                    name="project_title" placeholder="choose a name fo your task." required />
            </div>
            <div class="flex flex-col">
                <label class="text-lg font-medium inline-block mb-2.5" for="task-details">Task Details</label>
                <textarea class="w-full task-form-input border rounded-md p-5 resize-none text-sm h-36"
                    id="project_message" name="project_message" placeholder="Tell us more about your project"
                    required></textarea>
            </div>
            <div class="flex flex-col h-full items-center justify-end pt-10">
                <button type="button" onclick="onNext(0, 1)"
                    class="rounded-lg text-white px-5 py-2 bg-ubuy-blue w-40 h-12 font-semibold">
                    Next
                </button>
            </div>
        </div>
    </div>
    <!--Submit task form step 2-->
    <div class="ubuy-post-task-form-container hidden flex-col rounded-3xl shadow bg-white w-1/2" id="post-task-form-2">
        <header class="w-full flex flex-col relative">
            <div class="w-full flex flex-row items-center justify-center py-7">
                <button onclick="onNext(1, 0)"
                    class="absolute left-6 flex flex-row items-center text-ubuy-blue gap-x-2">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6663 8H3.33301" stroke="#119AE2" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7.99967 12.6668L3.33301 8.00016L7.99967 3.3335" stroke="#119AE2" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Back</span>
                </button>
                <h1 class="text-lg font-bold text-center mx-24">Set budget and task category</h1>
                <button class="absolute right-6" onclick="closeSubmitTaskForm()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <progress value="60" max="100" class="w-full text-ubuy-blue task-form-progress"></progress>
        </header>

        <div class="py-14 px-10 flex-grow flex flex-col" style="overflow-y: scroll;">
            <div class="flex md:flex-row flex-col w-full justify-between mb-10 gap-6">
                <div class="flex flex-col md:w-1/2 w-full">
                    <label for="task-budget" class="text-lg font-medium inline-block mb-2.5">Budget (N)</label>
                    <input id="budget" name="budget" class="w-full border rounded-md py-3 px-5 text-sm task-form-input"
                        placeholder="10,000">
                </div>
                <div class="flex flex-col md:w-1/2 w-full">
                    <label for="task-category" class="text-lg font-medium inline-block mb-2.5">Category</label>
                    <select id="project_category" name="project_category"
                        class="w-full border rounded-md py-3 px-5 appearance-none text-sm task-form-input task-form-select-with-double-arrow"
                        onselect="fetchSubCat();" onchange="fetchSubCat();">
                        <option value="" selected>Select your task category</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col mb-10">
                <label for="task-sub-category" class="text-lg font-medium inline-block mb-2.5">Sub-Category</label>
                <select id="sub_category" name="sub_category"
                    class="w-full border rounded-md py-3 px-5 appearance-none text-sm task-form-input task-form-select-with-double-arrow"
                    onchange="fetchSkills(this.id)" onselect="fetchSkills(this.id)">
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
                <button type="button" onclick="onNext(1, 2)"
                    class="rounded-lg text-white text-sm px-5 py-2 bg-ubuy-blue w-40 h-12 font-semibold">
                    Next
                </button>
            </div>

        </div>

    </div>
    <!--Submit task form step 3-->
    <div class="ubuy-post-task-form-container hidden flex-col rounded-3xl shadow bg-white w-1/2" id="post-task-form-3">
        <header class="w-full flex flex-col relative">
            <div class="w-full flex flex-row items-center justify-center py-7">
                <button onclick="onNext(2, 1)"
                    class="absolute left-6 flex flex-row items-center text-ubuy-blue gap-x-2">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6663 8H3.33301" stroke="#119AE2" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7.99967 12.6668L3.33301 8.00016L7.99967 3.3335" stroke="#119AE2" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Back</span>
                </button>
                <h1 class="text-lg font-bold text-center mx-24">Tell us where and when ?</h1>
                <button class="absolute right-6" onclick="closeSubmitTaskForm()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="#25282B" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="#25282B" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

            </div>
            <progress value="100" max="100" class="w-full text-ubuy-blue task-form-progress"></progress>
        </header>

        <div class="py-14 px-10 flex-grow flex flex-col">
            <div class="flex md:flex-row flex-col w-full justify-between mb-10 gap-6" id="ifArtisan">
                <div class="flex flex-col w-full">
                    <label for="task-state" class="text-lg font-medium inline-block mb-2.5">Location</label>
                    <input type="text" id="locator" name="locator" onfocus="initializeAutocomplete2()"
                        class="w-full border border-gray-200 rounded-tr-md rounded-br-md appearance-none py-3 px-5 text-sm task-form-input" />
                    <input type="hidden" id="lat" name="lat" />
                    <input type="hidden" id="lng" name="lng" />
                    <input type="hidden" id="city" name="lat" />
                    <input type="hidden" id="state" name="state" />
                </div>
                <div class="flex flex-col w-full">
                    <label for="task-landmark" class="text-lg font-medium inline-block mb-2.5">Nearest landmark</label>
                    <input type="text" id="landmark" name="landmark"
                        class="w-full border border-gray-200 rounded-tr-md rounded-br-md appearance-none py-3 px-5 text-sm task-form-input" />
                </div>
            </div>

            <div class="flex flex-col">
                <div class="text-lg font-medium inline-block mb-2.5">Date</div>
                <label for="task-deadline" class="w-full flex flex-row">
                    <div class="border-r rounded-tl-md rounded-bl-md flex items-center py-3 px-5 task-form-date-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                stroke="#52575C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 2V6" stroke="#52575C" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8 2V6" stroke="#52575C" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M3 10H21" stroke="#52575C" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <!-- TODO: Open state of the Date select-->
                    <input type="date" name="due_date" id="due_date"
                        class="w-full border border-gray-200 rounded-tr-md rounded-br-md appearance-none py-3 px-5 text-sm task-form-input"
                        placeholder="26/10/2020">
                </label>
            </div>

            <div class="flex flex-col h-full items-center justify-end mt-4">
                <button type="button" id="taskFormCompleted" onclick="submitTask(this.id);"
                    class="rounded-lg text-white px-5 py-2 bg-ubuy-blue w-40 h-12 text-sm font-semibold">
                    Post Task
                </button>
            </div>
        </div>
    </div>
    <!-- </form> -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
<script rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"></script>
<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
<script src="assets/js/script.js" type="text/javascript"></script>
<script src="assets/js/dropdown.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datejs/1.0/date.min.js"></script>


<?php 
if(basename($_SERVER['PHP_SELF']) != "verification.php"){
  if($userData["verify_image"] == null || $userData["verify_confirm"] == 0 || $userData["licence_verify"] == null || $userData["email_verified_at"] == null ||  $userData['is_phone_verified'] == 0){

    echo "
          <script type=\"text/javascript\">
            $(\"#verify-modal\").show();
          </script>
        ";
  }
}
?>
<script>
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


var openmodal = document.querySelectorAll('.modal-open')
for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener('click', function(event) {
        event.preventDefault()
        toggleModal()
    })
}

const overlay = document.querySelector('.modal-overlay')
overlay.addEventListener('click', toggleModal)

var closemodal = document.querySelectorAll('.modal-close')
for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
}

document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
        isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
    }
};


function toggleModal() {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
}
</script>

<script type="text/javascript">
function verifyEmail(id) {
    $("#" + id).html("Verifying...");
    document.getElementById(id).disabled = true;
    $.ajax({
        type: "POST",
        url: "endpoints/email-verification.php",
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
            $('#' + id).attr("disabled", "disabled");
            $('#' + id).css("opacity", ".5");
        },
        success: function(data) {
            console.log(data);
            if (data.success == true) {
                toastr.success(data.message, "Success:", {
                    timeOut: 7000
                });
                $("#" + id).html("Verification email sent!");
            } else {
                let p = data.error_message;
                for (var key in p) {
                    toastr.error(p[key], "Error:", {
                        timeOut: 8000
                    });
                }
                document.getElementById(id).disabled = false;
                $("#" + id).html("Verify");
            }
        }
    });
    return false;
}

function verifyPhone(id) {
    $("#" + id).html("Verifying...");
    document.getElementById(id).disabled = true;
    $.ajax({
        type: "POST",
        url: "endpoints/send-phone-verification-code.php",
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
            $('#' + id).attr("disabled", "disabled");
            $('#' + id).css("opacity", ".5");
        },
        success: function(data) {
            console.log(data);
            if (data.success == true) {
                toastr.success(data.message, "Success:", {
                    timeOut: 7000
                });
                $("#verifyFirst").hide();
                $("#verifyLast").show();

            } else {
                let p = data.error_message;
                // for (var key in p) {
                toastr.error(p, "Error:", {
                    timeOut: 8000
                });
                // }
                document.getElementById(id).disabled = false;
                $("#" + id).html("Verify");
            }
        }
    });
    return false;
}

$(document).ready(function(e) {

    $("#portfolio-form").on("submit", function(e) {
        e.preventDefault();
        // var file = $('#files').prop('files')[0];
        // var formData = new FormData(this);
        // formData.append('files', file);

        // document.getElementById("addPortfolioBtn").disabled = true;
        $("#addPortfolioBtn").html("Please wait...");
        $.ajax({
            type: "POST",
            url: "endpoints/add-portfolio.php",
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            data: new FormData(this),
            beforeSend: function() {
                $('.addPortfolioBtn').attr("disabled", "disabled");
                $('#portfolio-form').css("opacity", ".5");
            },
            success: function(data) {
                console.log(data);
                if (data.success == true) {
                    toastr.success("Portfolio added successfully!", "Success:", {
                        timeOut: 7000
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 5000);
                } else {
                    let p = data.error_message;
                    for (var key in p) {
                        toastr.error(p[key], "Error:", {
                            timeOut: 8000
                        });
                    }
                    document.getElementById(id).disabled = false;
                    $("#updateBtn").html("Add");
                }
            }
        });
        return false;
    });

    $("#verifyPhoneFinal").on("submit", function(e) {
        e.preventDefault();
        var id = "phone-final-verify-btn";
        $("#" + id).html("Verifying...");
        document.getElementById(id).disabled = true;
        $.ajax({
            type: "POST",
            url: "endpoints/verify-phone-number.php",
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            data: new FormData(this),
            beforeSend: function() {
                $('#' + id).attr("disabled", "disabled");
                $('#' + id).css("opacity", ".5");
            },
            success: function(data) {
                console.log(data);
                if (data.success == true) {
                    toastr.success("Phone number has been verified!", "Success:", {
                        timeOut: 7000
                    });
                    $("#verifyFirst").show();
                    $("#verifyLast").hide();
                    $("#verifyFirst").html("Phone number Verified!");
                } else {
                    let p = data.error;
                    // for (var key in p) {
                    toastr.error(p, "Error:", {
                        timeOut: 8000
                    });
                    // }
                    document.getElementById(id).disabled = false;
                    $("#" + id).html("Verify");
                }
            }
        });
        return false;
    });

});


setInterval(function() {
    checkNetwork();
}, 3000);

function checkNetwork() {
    if (navigator.onLine === true) {
        $(':button').prop('disabled', false);
    } else {
        $(':button').prop('disabled', true);
        toastr.error("No internet", "", {
            timeOut: 10000
        });
    }
}




setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "endpoints/unread-messages.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data > 0) {
                    $("#isMessageTrue").show();
                    $("#isMessageFalse").hide();
                } else {
                    $("#isMessageTrue").hide();
                    $("#isMessageFalse").show();
                }
                $('.unread-box').html(data);
            }
        }
    }
    xhr.send();
}, 500);
</script>
</body>

</html>