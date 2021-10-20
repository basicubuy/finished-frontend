<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="assets/styles/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhol0N_wyb0oZqcKjaU7afqPRFMfz7X80&v=3.exp&libraries=places"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-scope" content="profile email" />
    <meta name="google-signin-client_id" content="637779005926-ic6j3no78uc24ie2t8u43nhjmmk2f9ba.apps.googleusercontent.com" />
</head>

<body class="min-h-screen h-full grid place-items-center">
    <div class="flex flex-row max-w-5xl w-full mx-auto font-poppins shadow-card">
        <section class="xl:w-1/2 xl:block hidden justify-center bg-no-repeat min-h-screen bg-left bg-cover" style="background-image: url('assets/images/black-sisters-holding-cleaning-stuff-and-smiling.jpeg');background-position: left center;">
            <div class="h-full w-full p-8 grid place-items-center" style="background-color: rgba(0, 0, 0, .3);">
                <div class="flex flex-col items-center justify-start text-white text-left text-44px">
                    <h1 class="text-5xl font-semibold">Signup Completed</h1>
                    <!-- <h2></h2> -->
                </div>
            </div>
        </section>
        <?php if(isset($_GET['success'])){ 

            if($_GET['success'] == 1){
            
            ?>
            
            <section class="xl:w-1/2 w-full bg-white flex-auto sm:p-14 p-4">
                <div class="w-full flex flex-col items-center justify-center">
                    <div class="xl:mb-10 sm:mb-5 mb-2">
                        <a href="index.php"><img class="mx-auto sm:mb-5 mb-3" src="assets/images/logo.png" alt="logo"></a>
                        <h1 class="text-lg sm:text-4xl lg:hidden">Welcome back, sign in.</h1>
                    </div>
                    <div class="flex flex-col w-full items-center mx-auto" style="max-width: 500px;">
                        <div class="w-full flex flex-col gap-y-4" >
                            You have successfully create a customer account.
                        </div>
                        <div class="w-full flex flex-col gap-y-4 my-5" >
                            Verify your email and phone number to enjoy our various services.
                        </div>
                        <div class="w-full flex flex-col gap-y-4 text-2xl" >
                            - Ubuy.ng
                        </div>
                        <div class="mt-10">
                            <a href="index.php" class="rounded-md text-sm text-white bg-ubuy-blue font-medium px-12 py-4 sm:mb-0 mb-5">
                                Sign in now
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        <?php }elseif($_GET['success'] == 2){ ?> 
            <section class="xl:w-1/2 w-full bg-white flex-auto sm:p-14 p-4">
                <div class="w-full flex flex-col items-center justify-center">
                    <div class="xl:mb-10 sm:mb-5 mb-2">
                        <a href="index.php"><img class="mx-auto sm:mb-5 mb-3" src="assets/images/logo.png" alt="logo"></a>
                        <h1 class="text-lg sm:text-4xl lg:hidden">Welcome back, sign in.</h1>
                    </div>
                    <div class="flex flex-col w-full items-center mx-auto" style="max-width: 500px;">
                        <div class="w-full flex flex-col gap-y-4" >
                            You have successfully created your professional account!
                        </div>
                        <div class="w-full flex flex-col gap-y-4 my-5" >
                            Verify your account and get ucoin worth N5,000 to bid for free!
                        </div>
                        <div class="w-full flex flex-col gap-y-4" >
                            - Ubuy.ng
                        </div>
                        <div class="mt-10">
                            <a href="index.php" class="rounded-md text-sm text-white bg-ubuy-blue font-medium px-12 py-4 sm:mb-0 mb-5">
                                Sign in to start verification
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            
        <?php } } ?>
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
                if($("#email").val() == "" || $("#password").val() == ""){
                    toastr.error("Field(s) empty!", "Warning:", {timeOut: 8000});
                    // swal("Oops!", "Field(s) empty!", "warning");
                    return;
                }else{
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
                }
            });
        });
    </script>
</body>
</html>