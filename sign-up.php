<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="assets/styles/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxn3W8DfQNKyYX6gh-5ftWRhYceRm0OO0&v=3.exp&libraries=places"></script>
    <script type="text/javascript">
        // function onLoadGoogleCallback(){
        //     gapi.load('auth2', function() {
        //         auth2 = gapi.auth2.init({
        //             client_id: '1008573228086-r09odti2mfaqnsekh2ssdmmq50njpvde.apps.googleusercontent.com',
        //             cookiepolicy: 'single_host_origin',
        //             scope: 'profile'
        //         });

        //     auth2.attachClickHandler(element, {},
        //             function(googleUser) {
        //                 console.log('Signed in: ' + googleUser.getBasicProfile());
        //             }, function(error) {
        //                 console.log('Sign-in error', error);
        //             }
        //         );
        //     });

        //     element = document.getElementById('googleSigninBtn');
        // }
    </script>
    

    <style type="text/css">
        .dropdown-menu{
            position: absolute !important;
            border: #e5e7eb solid 1px !important;
            padding: 12px 25px !important;
            box-shadow: 1px 1px 1px #e5e7eb !important;
            z-index: 999999 !important;
            background-color: white !important;
        }
        .dropdown-menu > li{
            font-size: 13px;
            padding: 5px 0px;
            border-bottom: 1px solid #efefef;
        }
    </style>
</head>

<body class="min-h-screen h-full">
    <div class="flex flex-row max-w-5xl w-full mx-auto font-poppins shadow-card h-full">
        <section class="xl:w-1/2 xl:block hidden justify-center bg-no-repeat bg-left bg-cover" style="background-image: url('assets/images/black-sisters-holding-cleaning-stuff-and-smiling.jpeg');background-position: left center;">
            <div class=" w-full p-8 grid h-full place-items-center" style="background-color: rgba(0, 0, 0, .3);">
                <div class="flex flex-col items-center review-wrapper relative">
                    <div class="flex flex-col justify-between bg-white review-item p-7 z-10 max-w-xs">
                        <div>
                            <img src="assets/images/avatar-small-rounded.png" alt="" class=" w-10 rounded-full border-2 border-ubuy-blue" />
                        </div>
                        <div class="flex-grow text-normal text-center my-12 text-ubuy-secondary font-normal italic">
                            “I found a good electrician in less than five minutes”
                        </div>
                        <div class="flex flex-row justify-between items-center">
                            <div class="text-2xl text-ubuy-black font-normal italic">Authur K.</div>
                            <div>
                                <svg width="100" height="16" viewBox="0 0 100 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0654 9.79511L12.995 16L7.98706 12.1402L3.00431 16L4.93386 9.79511L0 6.00935H6.13156L7.98778 0L9.86844 6.00935H16L11.0654 9.79511Z" fill="url(#paint0_linear)" />
                                    <path d="M32.0654 9.79511L33.995 16L28.9871 12.1402L24.0043 16L25.9339 9.79511L21 6.00935H27.1316L28.9878 0L30.8684 6.00935H37L32.0654 9.79511Z" fill="url(#paint1_linear)" />
                                    <path d="M53.0654 9.79511L54.995 16L49.9871 12.1402L45.0043 16L46.9339 9.79511L42 6.00935H48.1316L49.9878 0L51.8684 6.00935H58L53.0654 9.79511Z" fill="url(#paint2_linear)" />
                                    <path
                                        d="M73.7611 9.39841L73.4844 9.61064L73.588 9.94358L75.0481 14.6389L71.2923 11.7442L70.9863 11.5083L70.6809 11.7449L66.9532 14.6325L68.4113 9.94358L68.5148 9.61067L68.2382 9.39843L64.473 6.50935H69.1316H69.5004L69.6093 6.15691L70.9909 1.68406L72.3913 6.15868L72.501 6.50935H72.8684H77.5268L73.7611 9.39841Z"
                                        stroke="#CACCCF" />
                                    <path
                                        d="M94.7611 9.39841L94.4844 9.61064L94.588 9.94358L96.0481 14.6389L92.2923 11.7442L91.9863 11.5083L91.6809 11.7449L87.9532 14.6325L89.4113 9.94358L89.5148 9.61067L89.2382 9.39843L85.473 6.50935H90.1316H90.5004L90.6093 6.15691L91.9909 1.68406L93.3913 6.15868L93.501 6.50935H93.8684H98.5268L94.7611 9.39841Z"
                                        stroke="#CACCCF" />
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="8" y1="0" x2="8" y2="16" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFDD00" />
                                            <stop offset="1" stop-color="#FBB034" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear" x1="29" y1="0" x2="29" y2="16" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFDD00" />
                                            <stop offset="1" stop-color="#FBB034" />
                                        </linearGradient>
                                        <linearGradient id="paint2_linear" x1="50" y1="0" x2="50" y2="16" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFDD00" />
                                            <stop offset="1" stop-color="#FBB034" />
                                        </linearGradient>
                                    </defs>
                                </svg>

                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center self-end px-3 mt-5 gap-x-2">
                        <div class="bg-ubuy-gray600 rounded-full w-2 h-2"></div>
                        <div class="bg-white rounded-full w-3 h-3"></div>
                        <div class="bg-ubuy-gray600 rounded-full w-2 h-2"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="xl:w-1/2 w-full bg-white flex-auto sm:p-14 p-5">
            <div class="w-full flex flex-col items-center mx-auto" style="max-width: 500px;">
                <div class="text-ubuy-black font-medium ">
                    <a href="index.php"><img class="mx-auto sm:mb-5 mb-3" src="assets/images/logo.png" alt="logo"></a>
                    <h1 class="sm:text-2xl text-lg mb-4 text-center">Create an Account</h1>
                </div>
                <div class="w-full mb-4">
                    <p class="sm:text-lg text-sm text-center mb-2.5 text-ubuy-secondary">I want to </p>
                    <button class="text-white bg-ubuy-blue px-3 py-1 my-2 hidden" id="go-back-btn" onclick="goBack(this.id)"><</button>
                    <div class="flex flex-row w-full rounded-llg border border-ubuy-gray200">
                        <button id="toggle-customer-form" onclick="switchForm('customer')" class="focus:outline-none w-1/2 py-3 px-4 rounded-l-llg text-sm active">
                            Hire for a project
                        </button>
                        <button id="toggle-pro-form" onclick="switchForm('pro')" class="focus:outline-none w-1/2 py-3 px-4 rounded-r-llg inactive text-sm">
                            Work as a professional
                        </button>
                    </div>
                </div>
                <div class="flex-col w-full items-center mx-auto flex" id="customer-form">
                    <form id="sign-up-form" class="w-full flex flex-col gap-y-4">
                        <label for="phone" id="phone-label" class="w-full relative">
                            <input type="tel" name="cus_phone" id="cus_phone" placeholder="Phone Number" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full" required/>
                        </label>
                        <label for="email" id="email-label" class="w-full relative">
                            <input type="email" name="cus_email" id="cus_email" placeholder="Email" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full" required/>
                        </label>
                        <div class="flex sm:flex-row flex-col w-full sm:gap-x-5 gap-x-0 sm:gap-y-0 gap-y-4">
                            <!-- <label for="password" id="password-label" class="w-full sm:w-1/2 relative">
                                <input type="password" name="cus_password" id="cus_password" placeholder="Password" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full"  required/>
                            </label> -->
                            <label for="password" id="password-label" class="w-full relative" x-data="{ show: true }">
                                <input name="cus_password" id="cus_password" placeholder="Password" :type="show ? 'password' : 'text'" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-sm w-full">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5" style="z-index: 99999999999999999999;">

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
                            <label for="password" id="password-label" class="w-full relative" x-data="{ show: true }">
                                <input name="cus_passwordconfirmation" id="cus_passwordconfirmation" placeholder="Password" :type="show ? 'password' : 'text'" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-sm w-full">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5"  style="z-index: 99999999999999999999;">

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
                            <!-- <label for="password" id="password-label" class="w-full sm:w-1/2 relative">
                                <input type="password" name="cus_passwordconfirmation" id="cus_passwordconfirmation" placeholder="Confirm Password" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full"  required/>
                            </label> -->
                        </div>
                        <div class="flex flex-row items-center">
                            <input type="checkbox" name="cus_agree_terms" id="cus_agree_terms" class="w-5 h-5 bg-ubuy-blue mr-5" required/>
                            <div class="text-xs text-ubuy-black">
                                <span>I agree to the</span>
                                <a href="/" class="text-ubuy-blue font-bold">Terms & Conditions</a>
                                <span>and</span>
                                <a href="/" class="text-ubuy-blue font-bold">Privacy Policy</a>
                            </div>
                        </div>
                        <input name="user_role" value="customer" type="hidden" />
                        <button type="submit" class="w-full bg-ubuy-blue rounded-llg py-3 text-sm text-white font-normal mt-6 focus:outline-none" id="customerSignupBtn">Become a Customer</button>
                    </form>
                    <div class="flex flex-col gap-y-4 mt-10 w-full hidden">
                        <button class="w-full rounded-llg relative flex items-center py-3 justify-center google-btn text-ubuy-secondary focus:outline-none text-sm"  id="googleSigninCusBtn" onclick="googleSignin(this.id)">
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
                            <span>Sign in with Google</span>
                        </button>
                        <button class="w-full rounded-llg relative flex items-center py-3 justify-center facebook-btn text-ubuy-secondary focus:outline-none text-sm"id="facebookSigninBtn" onclick="facebookSignin(this.id)">
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
                </div>
                <div class="hidden flex-col w-full items-center mx-auto" id="pro-form">
                    <form class="w-full" id="signup-pro-form">
                        <div class="w-full flex flex-col gap-y-4" id="startProForm">
                            <input name="user_role" value="pro" type="hidden" />                        
                            <label for="phone" id="phone-label" class="w-full relative">
                                <input type="tel" name="pro_phone" id="pro_phone" placeholder="Phone Number" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-3 py-3 focus:outline-none text-sm w-full"  required/>
                            </label>

                            <label for="email" id="email-label" class="w-full relative">
                                <input type="email" name="email" id="pro_email" placeholder="Email" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-3 py-3 focus:outline-none text-sm w-full"  required/>
                            </label>
                            <div class="flex sm:flex-row flex-col w-full sm:gap-x-5 gap-x-0 sm:gap-y-0 gap-y-4">
                            <label for="password" id="password-label" class="w-full relative" x-data="{ show: true }">
                                <input name="password" id="pro_password" placeholder="Password" :type="show ? 'password' : 'text'" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-sm w-full">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5" style="z-index: 99999999999999999999;">

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
                            <label for="password" id="password-label" class="w-full relative" x-data="{ show: true }">
                                <input name="password_confirmation" id="pro_confirmpassword" placeholder="Password" :type="show ? 'password' : 'text'" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-sm w-full">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5" style="z-index: 99999999999999999999;">

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
                                <!-- <label for="password" id="password-label" class="w-full sm:w-1/2 relative">
                                    <input type="password" name="password" id="pro_password" placeholder="Password" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-3 py-3 focus:outline-none text-sm w-full"  required/>
                                </label>
                                <label for="password" id="password-label" class="w-full sm:w-1/2 relative">
                                    <input type="password" name="password_confirmation" id="pro_confirmpassword" placeholder="Confirm Password" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-3 py-3 focus:outline-none text-sm w-full"  required/>
                                </label> -->
                            </div>
                            <div class="flex flex-row items-center">
                                <input type="checkbox" name="agree_terms" id="agree_terms" class="w-5 h-5 bg-ubuy-blue mr-5" required/>
                                <div class="text-xs text-ubuy-black">
                                    <span>I agree to the</span>
                                    <a href="/" class="text-ubuy-blue font-bold">Terms & Conditions</a>
                                    <span>and</span>
                                    <a href="/" class="text-ubuy-blue font-bold">Privacy Policy</a>
                                </div>
                            </div>
                            <button type="button" class="w-full bg-ubuy-blue rounded-llg py-3 text-sm text-white font-normal mt-6 focus:outline-none" id="startProBtn" onclick="continuePro(this.id);">Continue as a professional</button>
                        </div>
                        <!-- This is the second pro form -->
                        <div class="w-full flex flex-col gap-y-4"   id="finalProForm" style="display: none;">
                            <div class="flex sm:flex-row flex-col w-full sm:gap-x-5 gap-x-0 sm:gap-y-0 gap-y-4">
                                <label for="first-name" id="first-name" class="w-full sm:w-1/2 relative">
                                    <input type="text" name="first_name" id="pro_first-name" placeholder="First Name" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full" />
                                </label>
                                <label for="last-name" id="last-name-label" class="w-full sm:w-1/2 relative">
                                    <input type="text" name="last_name" id="pro_last-name" placeholder="Last Name" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full" />
                                </label>
                            </div>
                            <label for="service" id="service-label" class="w-full relative">
                                <input type="text" name="service_name" id="pro_service"  class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full" placeholder="Service you render:" autocomplete="off"/>
                                <span id="serviceList"></span>
                                <p class="text-red-600 text-tinyer" style="font-size: 10px;">*Select from options that best describes your service.</p>

                            </label>
                            <label for="locality" id="location-label" class="w-full relative">
                                <input type="text" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full" onFocus="initializeAutocomplete()" id="locality" name="locality" placeholder="What's your nearest location" autocomplete="off"/>
                                <p class="text-red-600 text-tinyer" style="font-size: 10px;">*Select current city (e.g: Wuse, Ikoyi, Ifite etc).</p>
                            </label>
                            <input type="hidden" name="city" id="city" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full" />
                            <input type="hidden" name="state" id="state" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full" />
                            <input type="hidden" name="lat" id="lat" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full" />
                            <input type="hidden" name="lng" id="lng" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full" />
                            <label for="business-name" id="business-name-label" class="w-full relative">
                                <input type="text" name="business_name" id="pro_business-name" placeholder="Business Name" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full" />
                            </label>

                            <label for="business-description" id="business-description-label" class="w-full relative">
                                <textarea rows="5" name="about_profile" id="pro_business-description" placeholder="Business Description..." class="resize-none rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-5 py-3 focus:outline-none text-sm w-full"></textarea>
                            </label>

                            <button type="submit" class="w-full bg-ubuy-blue rounded-llg py-3 text-sm text-white font-normal focus:outline-none mt-2" id="pro-signup">Complete Sign Up</button>
                        </div>
                    </form>
                    <div class="flex flex-col gap-y-4 mt-10 w-full hidden">
                        <!-- Temp for routing Demo -->
                            <button class="w-full rounded-llg relative flex py-3 items-center justify-center google-btn text-ubuy-secondary focus:outline-none text-sm" id="googleSigninBtnPro" onclick="googleSignin(this.id)">
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
                                <span>Sign in with Google</span>
                            </button>
                        <button class="w-full rounded-llg relative flex py-3 items-center justify-center facebook-btn text-ubuy-secondary focus:outline-none text-sm" id="facebookSigninBtn" onclick="facebookSignin(this.id)">
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
                            <span  id="facebookSigninText">
                                Sign in with Facebook
                            </span>
                        </button>
                    </div>
                </div>
                <div class="mt-10">
                    <span>Already have an account?</span>
                    <a href="sign-in.php" class="text-ubuy-blue">Sign In</a>
                </div>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

        function googleSignin(id){

            document.getElementById(id).disabled = true;
            $("#"+id).html("Please wait...");
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

        function continuePro(id){
            if($("#pro_phone").val() == ""){
                toastr.error("Phone number field is empty!", {timeOut: 7000});
                return;
            }else if($("#pro_email").val() == ""){
                toastr.error("Email field is empty!", {timeOut: 7000});
                return;
            }else if($("#pro_password").val() == ""){
                toastr.error("Password field is empty!", {timeOut: 7000});
                return;
            }else if($("#pro_confirmpassword").val() == ""){
                toastr.error("Confirm password field is empty!", {timeOut: 7000});
                return;
            }else if($("#pro_password").val() != $("#pro_confirmpassword").val()){
                toastr.error("Password does not match!", {timeOut: 7000});
                return;
            }else{
                $("#startProForm").hide();
                $("#finalProForm").show();
                $("#go-back-btn").show();
            }
        }

        function goBack(id){
            $("#startProForm").show();
            $("#finalProForm").hide();
            $("#go-back-btn").hide();
        }

        $(document).ready(function(){
            $('#pro_service').keydown(function(){ 
                var query = $(this).val();
                if(query != '')
                {
                    $.ajax({
                        url:"endpoints/sub-category.php",
                        method:"POST",
                        data:{query:query},
                        success:function(data){
                            $('#serviceList').fadeIn();  
                            $('#serviceList').html(data);
                        }
                    });
                }
            });
            
            $(document).on('click', 'li', function(){  
                $('#pro_service').val($(this).text());  
                $('#serviceList').hide();  
            }); 

            $("#sign-up-form").on("submit", function(e){
                e.preventDefault();

                if(navigator.onLine === false){
                    toastr.error("Please check your internet!", {timeOut: 7000});
                    return;
                }else{
                    if($("#cus_phone").val() == ""){
                        toastr.error("Phone number field is empty!", {timeOut: 7000});
                        return;
                    }
                    if($("#cus_email").val() == ""){
                        toastr.error("Email field is empty!", {timeOut: 7000});
                        return;
                    }
                    if($("#cus_password").val() == ""){
                        toastr.error("Password field is empty!", {timeOut: 7000});
                        return;
                    }
                    if($("#cus_passwordconfirmation").val() == ""){
                        toastr.error("Confirm Password field is empty!", {timeOut: 7000});
                        return;
                    }
                    if($("#cus_passwordconfirmation").val() != $("#cus_passwordconfirmation").val()){
                        toastr.error("Password does not match!", {timeOut: 7000});
                        return;
                    }
                    document.getElementById("customerSignupBtn").disabled = true;
                    $("#customerSignupBtn").html("Please wait...");
                    var url = "endpoints/signup.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        dataType: 'json',
                        data: $("#sign-up-form").serialize(),
                        success: function(data)
                        {
                            // console.log(data);
                            if(data.error == "Validation Exception"){
                                let p = data.error_message;
                                for (var key in p) {
                                    toastr.error(p[key], "Error:", {timeOut: 8000});
                                }
                                document.getElementById("customerSignupBtn").disabled = false;
                                $("#customerSignupBtn").html("Create a  customer account");
                            }else{
                                toastr.success(data.message, "Success:", {timeOut: 7000});
                                setTimeout(function(){
                                    window.location = "signup-confirmation.php?success=1";
                                }, 5000);
                            }
                        }
                    });
                    return false;
                }
            });
            
            $("#signup-pro-form").on("submit", function(e){
                e.preventDefault();

                if(navigator.onLine === false){
                    toastr.error("Please check your internet!", {timeOut: 7000});
                    return;
                }else{

                    if($("#pro_phone").val() == ""){
                        toastr.error("Phone number field is empty!", {timeOut: 7000});
                        return;
                    }
                    if($("#pro_email").val() == ""){
                        toastr.error("Email address field is empty!", {timeOut: 7000});
                        return;
                    }
                    if($("#pro_password").val() == ""){
                        toastr.error("Password field is empty!", {timeOut: 7000});
                        return;
                    }
                    if($("#pro_service").val() == ""){
                        toastr.error("Service field is empty!", {timeOut: 7000});
                        return;
                    }
                    if($("#state").val() == ""){
                        toastr.error("State field is empty!", {timeOut: 7000});
                        return;
                    }
                    if($("#business-name").val() == ""){
                        toastr.error("Business name field is empty!", {timeOut: 7000});
                        return;
                    }
                    if($("#business-description").val() == ""){
                        toastr.error("Business description cannot be empty!!", {timeOut: 7000});
                        return;
                    }
                    document.getElementById("pro-signup").disabled = true;
                    $("#pro-signup").html("Please wait...");
                    var url = "endpoints/signup.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        dataType: 'json',
                        data: $("#signup-pro-form").serialize(),
                        success: function(data)
                        {
                            // console.log(data);
                            if(data.success == true){
                                toastr.success(data.message, "Success:", {timeOut: 7000});
                                setTimeout(function(){
                                    window.location = "signup-confirmation.php?success=2";
                                }, 5000);
                            }else{
                                let p = data.error_message;
                                for (var key in p) {
                                    toastr.error(p[key], "Error:", {timeOut: 8000});
                                }
                                document.getElementById("pro-signup").disabled = false;
                                $("#pro-signup").html("Create an account");
                            }
                        }
                    });
                    return false;
                }
            });
        });

        function initializeAutocomplete(){
            var input = document.getElementById('locality');
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

    </script>
</body>

</html>

