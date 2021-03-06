<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="assets/styles/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxn3W8DfQNKyYX6gh-5ftWRhYceRm0OO0&libraries=places&callback=initMap"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-scope" content="profile email" />
    <meta name="google-signin-client_id" content="637779005926-ic6j3no78uc24ie2t8u43nhjmmk2f9ba.apps.googleusercontent.com" />
</head>

<body class="min-h-screen h-full grid place-items-center">
    <div class="flex flex-row max-w-5xl w-full mx-auto font-poppins shadow-card">
        <section class="xl:w-1/2 xl:block hidden justify-center bg-no-repeat min-h-screen bg-left bg-cover" style="background-image: url('assets/images/black-sisters-holding-cleaning-stuff-and-smiling.jpeg');background-position: left center;">
            <div class="h-full w-full p-8 grid place-items-center" style="background-color: rgba(0, 0, 0, .3);">
                <div class="flex flex-col items-center justify-start text-white text-left text-44px">
                    <h1 class="text-5xl font-semibold">Welcome back!</h1>
                    <h2>Sign In to continue</h2>
                </div>
            </div>
        </section>
        <section class="xl:w-1/2 w-full bg-white flex-auto sm:p-14 p-4">
            <div class="w-full flex flex-col items-center">
                <div class="xl:mb-10 sm:mb-5 mb-2">
                <a href="index.php"><img class="mx-auto sm:mb-5 mb-3" src="assets/images/logo.png" alt="logo"></a>
                    <h1 class="text-lg sm:text-4xl lg:hidden">Welcome back, sign in.</h1>
                </div>
                <div class="flex flex-col w-full items-center mx-auto" style="max-width: 500px;">
                    <form id="signin-form" class="w-full flex flex-col gap-y-4" >
                        <label for="email" id="email-label" class="w-full relative">
                            <input type="email" name="email" id="email" placeholder="Email" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-sm w-full" />
                        </label>
                        <label for="password" id="password-label" class="w-full relative" x-data="{ show: true }">
                            <!-- <input type="password" name="password" id="password" placeholder="Password" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-sm w-full" /> -->
                                <input name="password" id="password" placeholder="Password" :type="show ? 'password' : 'text'" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-sm w-full">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5" style="z-index: 99999999 !important;">
                                    <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                    :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 576 512" style="color: #a8acb0 !important;">
                                    <path fill="currentColor"
                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                    </path>
                                    </svg>

                                    <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                    :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 640 512" style="color: #a8acb0 !important;">
                                    <path fill="currentColor"
                                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                    </path>
                                    </svg>

                                </div>
                        </label>
                        <input type="hidden" id="device_name" name="device_name" />
                        <a href="" class="w-full text-right text-sm text-ubuy-blue">Forgot Password ?</a>
                        <button type="submit" class="w-full bg-ubuy-blue rounded-llg py-3 text-sm text-white font-normal mt-6 focus:outline-none" id="signinBtn">Sign In</button>
                    </form>
                    <div class="flex flex-col gap-y-4 mt-10 w-full">
                        <button class="w-full rounded-llg relative flex py-2 items-center justify-center google-btn text-ubuy-secondary focus:outline-none" id="googleSigninBtn" onclick="googleSignin(this.id)">
                            <span class="absolute left-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.625 12C5.625 10.811 5.95261 9.69706 6.52177 8.74329V4.69761H2.47608C0.870375 6.78298 0 9.3245 0 12C0 14.6756 0.870375 17.2171 2.47608 19.3025H6.52177V15.2568C5.95261 14.303 5.625 13.1891 5.625 12Z" fill="#FBBD00" />
                                    <path d="M12 18.3751L9.1875 21.1876L12 24.0001C14.6756 24.0001 17.217 23.1297 19.3024 21.524V17.4826H15.261C14.2989 18.0538 13.1804 18.3751 12 18.3751Z" fill="#0F9D58" />
                                    <path d="M6.52176 15.2567L2.47607 19.3024C2.79398 19.7152 3.14015 20.1106 3.51473 20.4853C5.78123 22.7517 8.79468 23.9999 12 23.9999V18.3749C9.67387 18.3749 7.63514 17.1224 6.52176 15.2567Z" fill="#31AA52" />
                                    <path d="M24 12C24 11.27 23.9339 10.5385 23.8035 9.82611L23.698 9.24959H12V14.8746H17.6931C17.1402 15.9743 16.2902 16.8716 15.261 17.4826L19.3024 21.524C19.7153 21.2061 20.1106 20.8599 20.4853 20.4853C22.7518 18.2188 24 15.2053 24 12Z" fill="#3C79E6" />
                                    <path d="M16.5078 7.49217L17.005 7.98933L20.9825 4.01189L20.4853 3.51473C18.2188 1.24823 15.2054 0 12 0L9.1875 2.8125L12 5.625C13.7028 5.625 15.3037 6.28809 16.5078 7.49217Z" fill="#CF2D48" />
                                    <path d="M12 5.625V0C8.79473 0 5.78128 1.24823 3.51473 3.51469C3.14015 3.88927 2.79398 4.28466 2.47607 4.69758L6.52176 8.74327C7.63518 6.8775 9.67392 5.625 12 5.625Z" fill="#EB4132" />
                                </svg>
                            </span>
                            <span id="googleSigninText">Sign in with Google</span>
                        </button>
                        <button class="w-full rounded-llg relative flex py-2 items-center justify-center facebook-btn text-ubuy-secondary focus:outline-none" id="facebookSigninBtn" onclick="facebookSignin(this.id)">
                            <span class="absolute left-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M17.9988 0.00503175L14.8866 3.8147e-05C11.3901 3.8147e-05 9.13054 2.31832 9.13054 5.90647V8.62973H6.00133C5.73093 8.62973 5.51196 8.84895 5.51196 9.11935V13.065C5.51196 13.3355 5.73118 13.5544 6.00133 13.5544H9.13054V23.5107C9.13054 23.7811 9.34951 24 9.61991 24H13.7026C13.973 24 14.192 23.7808 14.192 23.5107V13.5544H17.8508C18.1212 13.5544 18.3401 13.3355 18.3401 13.065L18.3416 9.11935C18.3416 8.98952 18.29 8.86518 18.1983 8.7733C18.1067 8.68141 17.9819 8.62973 17.852 8.62973H14.192V6.32119C14.192 5.21161 14.4564 4.64833 15.9018 4.64833L17.9983 4.64758C18.2685 4.64758 18.4875 4.42836 18.4875 4.15821V0.494405C18.4875 0.224501 18.2687 0.00553111 17.9988 0.00503175Z"
                                            fill="#2F80ED" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <span id="facebookSigninText">
                                Sign in with Facebook
                            </span>
                        </button>
                    </div>
                    <div class="mt-10">
                        <span>Dont have an account? </span>
                        <a href="sign-up.php" class="text-ubuy-blue">Sign Up</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script type="text/javascript">

        checkNetwork();
        function checkNetwork(){
            if(navigator.onLine === true){
                $(':button').prop('disabled', false);
            }else{
                $(':button').prop('disabled', true);
                toastr.error("No internet");
            }
        }

        $("#device_name").val(checkDevice());
        function checkDevice(){
            if( /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                return "mobile";
            }else{
                return "desktop";
            }
        }

        function googleSignin(id){
            document.getElementById(id).disabled = true;
            $("#googleSigninText").html("Please wait...");
            var url = "endpoints/google-signin.php";
            $.ajax({
                type: "POST",
                url: url,
                dataType: 'json',
                success: function(data)
                {
                    setTimeout(()=>{
                        window.location.href = data.url;
                    }, 5000);
                }
            });
            return false;
        }

        function facebookSignin(id){
            document.getElementById(id).disabled = true;
            $("#facebookSigninText").html("Please wait...");
            var url = "endpoints/facebook-signin.php";
            $.ajax({
                type: "POST",
                url: url,
                dataType: 'json',
                success: function(data)
                {
                    setTimeout(()=>{
                        window.location.href = data.url;
                    }, 5000);
                }
            });
            return false;
        }

        $(document).ready(function(){
            $("#signin-form").on("submit", function(e){
                e.preventDefault();
                if($("#email").val() == ""){
                    toastr.error("Email field is empty!", "Warning:", {timeOut: 8000});
                    return;
                }
                if($("#password").val() == ""){
                    toastr.error("Password field is empty!", "Warning:", {timeOut: 8000});
                    return;
                }
                document.getElementById("signinBtn").disabled = true;
                $("#signinBtn").html("Please wait...");
                var url = "endpoints/signin.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: 'json',
                    data: $("#signin-form").serialize(),
                    success: function(data)
                    {
                        console.log(data);
                        if(data.error == "Validation Error"){
                            let p = data.error_message;
                            for (var key in p) {
                                toastr.error(p[key], "Error:", {timeOut: 8000});
                            }
                            document.getElementById("signinBtn").disabled = false;
                            $("#signinBtn").html("Sign In");
                        }else{
                            toastr.success(data.message, "Success:", {timeOut: 7000});
                            setTimeout(function(){
                                window.location = "dashboard.php?success=1";
                            }, 5000);
                        }
                    }
                });
                return false;
                
            });
        });
    </script>
</body>
</html>