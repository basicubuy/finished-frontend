
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
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datejs/1.0/date.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script type="text/javascript">

    
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


        $(".chosen-select").chosen({
            no_results_text: "Oops, nothing found!"
        });

        setInterval(function(){
            checkNetwork();
        }, 3000);
        
        function checkNetwork(){
            if(navigator.onLine === true){
                $(':button').prop('disabled', false);
            }else{
                $(':button').prop('disabled', true);
                toastr.error("No internet", "", {timeOut: 10000});
            }
        }

        function initializeAutocomplete2(){
            var input = document.getElementById('locator');
            var options = {
                types: ['(regions)'],
                componentRestrictions: {country: "NG"}
            };
            var autocomplete = new google.maps.places.Autocomplete(input, options);
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                // console.log(place);
                $("#lat").val(place.geometry.location.lat());
                $("#lng").val(place.geometry.location.lng());
                // var placeId = place.place_id;
                $("#city").val(place.address_components[0].long_name);
                $("#state").val(place.address_components[3].long_name);

            });
        }

        var category = {
            "url": "endpoints/fetchCategory.php",
            "method": "GET",
            "timeout": 0,
        };

        $.ajax(category).done(function(response) {
            // console.log(response)
            const a = JSON.parse(response);
            for (const item of a.categories) {
                // console.log(item.name);
                const optionObj = document.createElement("option");
                optionObj.textContent = item.name;
                optionObj.value = item.id;
                document.getElementById("project_category").appendChild(optionObj);
            }
        });

        function fetchSubCat(){
            $('#sub_category option').remove();
            // console.log($("#project_category").val())
            var categorySub = {
                "url": "endpoints/fetchSubcategoryCategory.php?category_id="+$("#project_category").val(),
                "method": "GET",
                "timeout": 0,
            };
            $.ajax(categorySub).done(function(response) {
                // console.log(response);
                const a = JSON.parse(response);
                const z = document.createElement('option'); // is a node
                z.textContent = 'Select sub-category your task falls in';
                z.value = "";
                document.getElementById("sub_category").appendChild(z);
                for (const item of a.subCategory) {
                    // console.log(item.name);
                    const optionObj = document.createElement("option");
                    optionObj.textContent = item.name;
                    optionObj.value = item.grouping_name+"~"+item.id;
                    document.getElementById("sub_category").appendChild(optionObj);
                }
            });

        }

        function dropdown() {
            return {
                options: [],
                selected: [],
                show: false,
                open() { this.show = true },
                close() { this.show = false },
                isOpen() { return this.show === true },
                select(index, event) {

                    if (!this.options[index].selected) {

                        this.options[index].selected = true;
                        this.options[index].element = event.target;
                        this.selected.push(index);

                    } else {
                        this.selected.splice(this.selected.lastIndexOf(index), 1);
                        this.options[index].selected = false
                    }
                },
                remove(index, option) {
                    this.options[option].selected = false;
                    this.selected.splice(index, 1);


                },
                loadOptions() {
                    const options = document.getElementById('skills-list').options;
                    for (let i = 0; i < options.length; i++) {
                        this.options.push({
                            value: options[i].value,
                            text: options[i].innerText,
                            selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
                        });
                    }


                },
                selectedValues(){
                    return this.selected.map((option)=>{
                        return this.options[option].value;
                    })
                }
            }
        }
        
        function fetchSkills(id){
            $("#skills-loader").show();
            var subcategory = $("#"+id).val();
            var subCat = subcategory.split("~");
            // console.log(subCat[0]);
            if(subCat[0] == "Freelancer"){
                $("#ifArtisan").hide();
            }else{
                $("#ifArtisan").show();
            }
            $("#skills-list").empty();
            var skills = {
                "url": "endpoints/fetchSkills.php?subcategory="+subCat[1],
                "method": "GET",
                "timeout": 0,
            };
            $.ajax(skills).done(function(response) {
                // console.log(response);
                
                const a = JSON.parse(response);

                if(a.length < 1){
                    $("#skills-loader").hide();
                    toastr.error("This subcategory has no skills set!", {timeOut: 5000});
                    var ul = document.getElementById("skills-list");
                    var li = document.createElement('li');
                    li.appendChild("This subcategory has not skills set!");
                    ul.appendChild(li);
                }else{
                    $("#skills-loader").hide();
                    var ul = document.getElementById("skills-list");
                    for (var i = 0; i < a.skills.length; i++) {
                        var name = a.skills[i];
                        // console.log(name.skill_title);
                        var li = document.createElement('li');
                        var input = document.createElement('input')
                        input.setAttribute("type", "checkbox");
                        input.setAttribute("id", name.id);
                        input.setAttribute("name", name.id);
                        input.setAttribute("value", name.skill_title);
                        li.appendChild(input);
                        var label = document.createElement("label");
                        label.setAttribute("for", name.id);
                        li.appendChild(label);
                        label.appendChild(document.createTextNode(name.skill_title));
                        ul.appendChild(li);
                    }
                }
            });

        }

        function submitTask(id){
            const skillsRequired = Array
            .from(document.querySelectorAll('input[type="checkbox"]'))
            .filter((checkbox) => checkbox.checked)
            .map((checkbox) => checkbox.value);
                            
            document.getElementById(id).disabled = true;
            $("#"+id).html("Please wait...");
            var url = "endpoints/post-task.php";
            $.ajax({
                type: "POST",
                url: url,
                dataType: 'json',
                data: {
                    "user_id" : "<?php echo $userData['id']; ?>",
                    "project_title" : $("#project_title").val(),
                    "project_message" : $("#project_message").val(),
                    "budget" : $("#budget").val(),
                    "project_category" : $("#project_category").val(),
                    "sub_category" : $("#sub_category").val(),
                    "skillsRequired" : skillsRequired,
                    "location" : $("#location").val(),
                    "lat" : $("#lat").val(),
                    "lng" : $("#lng").val(),
                    "state" : $("#state").val(),
                    "landmark" : $("#landmark").val(),
                    "phone_number" : "<?php echo $userData['number']; ?>",
                    "due_date" : $("#due_date").val()
                },
                success: function(data)
                {
                    console.log(data);
                    if(data.success == true){
                        toastr.success("Task posted successfully!", "Success:", {timeOut: 7000});
                        console.log(data.project);
                        console.log(data.pros);
                        window.localStorage.setItem("project_details", JSON.stringify(data.project));
                        window.localStorage.setItem("verified_pros", JSON.stringify(data.pros));
                        setTimeout(function(){
                            window.location.href = "invite-pro.php";
                            // window.location.href = "invite-pro.php?subcategory_id="+$("#sub_category").val()+"&project_id="+data.project.id;
                        }, 5000);
                    }else{
                        let p = data.error_message;
                        for (var key in p) {
                            toastr.error(p[key], "Error:", {timeOut: 8000});
                        }
                        document.getElementById(id).disabled = false;
                        $("#updateBtn").html("Post Task");
                    }
                }
            });
            return false;
        }
        
        function taskDetails(id){
            console.log(id)
        }

        function verifyPhone(id){
            $("#"+id).html("Verifying...");
            document.getElementById(id).disabled = true;
            $.ajax({
                type: "POST",
                url: "endpoints/send-phone-verification-code.php",
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                beforeSend: function(){
                    $('#'+id).attr("disabled","disabled");
                    $('#'+id).css("opacity",".5");
                },
                success: function(data)
                {
                    console.log(data);
                    if(data.success == true){
                        toastr.success(data.message, "Success:", {timeOut: 7000});
                        $("#verifyFirst").hide();
                        $("#verifyLast").show();

                    }else{
                        let p = data.error_message;
                        // for (var key in p) {
                            toastr.error(p, "Error:", {timeOut: 8000});
                        // }
                        document.getElementById(id).disabled = false;
                        $("#"+id).html("Verify");
                    }
                }
            });
            return false;
        }

        $(document).ready(function(){
            $("#verifyPhoneFinal").on("submit", function(e){
                e.preventDefault();
                var id = "phone-final-verify-btn";
                $("#"+id).html("Verifying...");
                document.getElementById(id).disabled = true;
                $.ajax({
                    type: "POST",
                    url: "endpoints/verify-phone-number.php",
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData:false,
                    data: new FormData(this),
                    beforeSend: function(){
                        $('#'+id).attr("disabled","disabled");
                        $('#'+id).css("opacity",".5");
                    },
                    success: function(data)
                    {
                        console.log(data);
                        if(data.success == true){
                            toastr.success("Phone number has been verified!", "Success:", {timeOut: 7000});
                            $("#verifyFirst").show();
                            $("#verifyLast").hide();
                            $("#verifyFirst").html("<span class='text-xxxs'>Phone number Verified!</span>");
                        }else{
                            let p = data.error;
                            // for (var key in p) {
                                toastr.error(p, "Error:", {timeOut: 8000});
                            // }
                            document.getElementById(id).disabled = false;
                            $("#"+id).html("Verify");
                        }
                    }
                });
                return false;
            });
        });


        setInterval(()=>{
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "endpoints/unread-messages.php", true);
            xhr.onload = ()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status === 200){
                        let data = xhr.response;
                        if(data > 0){
                            $("#isMessageTrue").show();
                            $("#isMessageFalse").hide();
                        }else{
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