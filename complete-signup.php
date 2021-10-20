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
</head>

<body class="min-h-screen h-full">
    <div class="flex flex-row max-w-5xl w-full mx-auto font-poppins shadow-card">
        <section class="xl:w-1/2 xl:block hidden justify-center bg-no-repeat bg-left bg-cover" style="background-image: url('assets/images/black-sisters-holding-cleaning-stuff-and-smiling.jpeg');background-position: left center;">
            <div class="w-full p-8 grid h-full place-items-center" style="background-color: rgba(0, 0, 0, .3);">
                <div class="flex flex-col items-center review-wrapper relative">
                    <div class="flex flex-col justify-between bg-white review-item p-7 z-10 max-w-xs">
                        <div>
                            <img src="../../../assets/images/avatar-small-rounded.png" alt="" class=" w-10 rounded-full border-2 border-ubuy-blue" />
                        </div>
                        <div class="flex-grow text-2xl text-center my-12 text-ubuy-secondary font-medium italic">
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
        <section class="xl:w-1/2 w-full bg-white flex-auto sm:p-14 p-4 ">
            <div class="w-full flex flex-col items-center mx-auto" style="max-width: 500px;">
                <div class="text-ubuy-secondary font-medium ">
                    <img class="mx-auto sm:mb-10 mb-5" src="assets/images/logo.png" alt="logo">
                    <h1 class="sm:text-3xl text-lg sm:mb-10 mb-14 text-center">Set up your Professional Profile</h1>
                </div>
                <div class="flex flex-col w-full items-center mx-auto">
                    <form action="" class="w-full flex flex-col gap-y-4">
                        <div class="flex sm:flex-row flex-col w-full sm:gap-x-5 gap-x-0 sm:gap-y-0 gap-y-4">
                            <label for="first-name" id="first-name" class="w-full sm:w-1/2 relative">
                                <input type="text" name="first-name" id="first-name" placeholder="First Name" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full" />
                            </label>
                            <label for="last-name" id="last-name-label" class="w-full sm:w-1/2 relative">
                                <input type="text" name="last-name" id="last-name" placeholder="Last Name" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full" />
                            </label>
                        </div>
                        <label for="service" id="service-label" class="w-full relative">
                            <select name="service" id="service" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full text-ubuy-inactive appearance-none relative">
                                <option value="" selected>Service </option>
                            </select>
                        </label>
                        <div class="flex flex-row w-full gap-x-5">
                            <label for="state" id="state-label" class="w-1/2 relative inline-block">
                                <select name="state" id="state" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full text-ubuy-inactive appearance-none relative">
                                    <option value="" selected>State</option>
                                </select>
                            </label>
                            <label for="city" id="city-label" class="w-1/2 relative">
                                <input type="text" name="city" id="city" placeholder="City" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full" />
                            </label>
                        </div>

                        <label for="business-name" id="business-name-label" class="w-full relative">
                            <input type="text" name="business-name" id="business-name" placeholder="Business Name" class="rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full" />
                        </label>

                        <label for="business-description" id="business-description-label" class="w-full relative">
                            <textarea rows="5" name="business-description" id="business-description" placeholder="Business Description..." class="resize-none rounded-llg border border-ubuy-gray200 bg-ubuy-gray400 px-7 py-4 focus:outline-none text-base w-full"></textarea>
                        </label>

                        <button type="submit" class="w-full bg-ubuy-blue rounded-llg py-4 text-lg text-white font-semibold focus:outline-none mt-14">Complete Sign Up</button>
                    </form>

                    <div class="mt-10">
                        <span>Already have an account?</span>
                        <a href="../signup/index.html" class="text-ubuy-blue">Login</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>