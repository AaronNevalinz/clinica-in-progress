<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>
    @vite('resources/css/app.css')
    <!-- CSS -->
    <link rel="stylesheet" href="src/css/input.css">
    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.min.css">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="src/css/swiper-bundle.min.css">
    <!-- SCROLL REVEAL -->
    <script src="src/js/scrollreveal.min.js"></script>
</head>
    <body class='min-h-screen bg-secondary antialiased'>
        <section class='flex h-screen max-h-screen'>
            <div class='remove-scrollbar container my-auto'>
                
                <div class="sub-container max-w-[496px]">

                    <img src="assets/img/footer logo.png" alt="" class="mb-12 w-[200px]">

                    <!-- patient form -->
                    <form action="/patientInfo" method='POST' class="flex-1 space-y-4">
                        <section class="mb-6 space-y-4">
                            <h1 class="header text-black text-3xl">Hi there 👋🏿</h1>
                            <p class="text-grey">Get started with appointments.</p>
                        </section>

                        <div>
                            <label for="" class="text-black font-semibold">Full name:</label>
                            <div class='flex mt-2 text-black border-grey bg-grey rounded-md border py-2'>
                                <img src="assets/icons/user.svg" alt="" class="mx-2">
                                <input  name='fname' type="text" placeholder='Eg: Aaron Nevalinz' class='border-0 text-base outline-none bg-grey text-black px-1 flex-1 placeholder:text-secondary'>
                            </div>
                        </div>

                        <div>
                            <label for="" class="text-black font-semibold">Email Address:</label>:</label>
                            <div class='flex text-dark-700 mt-2 border-grey bg-grey rounded-md border py-2'>
                                <img src="assets/icons/email.svg" alt="" class="mx-2">
                                <input name='email' type="text" placeholder='Eg: nevalinz@encoretechnologies.com' class='border-0 outline-none text-black bg-grey px-1 flex-1 placeholder:text-secondary'>
                            </div>
                        </div>
                        
                        <div>
                            <label for="" class="text-black font-semibold">Phone Number:</label>:</label>
                            <div class='flex text-dark-700 mt-2 border-grey bg-grey rounded-md border py-2'>
                                <!-- <img src="./assets/icons/phone.svg" alt="" class="mx-2 w-2 h-2"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-2 mx-2 fill-black" width="22">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                                
                                <input name='phone' type="text" placeholder='Eg: +256-777-306-662' class='border-0 outline-none bg-grey px-1 text-black flex-1 placeholder:text-secondary'>
                            </div>
                        </div>

                        <div>
                            <a href="/patientInfo">
                                <input class='border-0 outline-none px-1 flex-1 placeholder:text-dark-700 py-2 mt-10 rounded-md text-black font-bold text-xl cursor-pointer text-center bg-primary w-full'  type="submit" value="Get Started">
                            </a>
                        </div>
                    </form>

                    <div class="text-14-regular mt-8 flex justify-between">
                        <p class="justify-items-end text-dark-600 xl:text-left">
                            © 2024 CarePulse
                        </p>
                        <p href="" id="admin" class="text-primary font-bold">Admin</p>
                    </div>
                </div>

            </div>
            
            <div class="flex-1">
                <img src="assets/img/onboarding-img.png" height='1000' width="1000" class="side-img max-w-full" alt="Patient">
            </div>
        </section>

        <!-- admin password pop up window -->
         <section class="bg-transParent hidden w-full h-full fixed top-0 right-0 z-50 flex justify-center items-center" id="bg-pop">
            <div class="bg-black py-5 px-10 rounded-lg">
                <h1 class="text-xl font-bold">Access Verification</h1>
                <p class="my-5">To access the admin page, please enter the passkey......</p>
                <div class="flex justify-between">
                    <input class="w-14 h-14 text-black  text-3xl text-center border-2 border-grey rounded-md" type="text" maxlength="1" id="digit1" oninput="moveToNext(this, 'digit2')">
                    <input class="w-14 h-14 text-black  text-3xl text-center border-2 border-grey rounded-md" type="text" maxlength="1" id="digit2" oninput="moveToNext(this, 'digit3')" onkeydown="moveToPrevious(event, 'digit1')">
                    <input class="w-14 h-14  text-black text-3xl text-center border-2 border-grey rounded-md" type="text" maxlength="1" id="digit3" oninput="moveToNext(this, 'digit4')" onkeydown="moveToPrevious(event, 'digit2')">
                    <input class="w-14 h-14 text-black  text-3xl text-center border-2 border-grey rounded-md" type="text" maxlength="1" id="digit4" oninput="moveToNext(this, 'digit5')" onkeydown="moveToPrevious(event, 'digit3')">
                    <input class="w-14 h-14 text-black text-3xl text-center border-2 border-grey rounded-md" type="text" maxlength="1" id="digit5" oninput="moveToNext(this, 'digit6')" onkeydown="moveToPrevious(event, 'digit4')">
                    <input class="w-14 h-14 text-black  text-3xl text-center border-2 border-grey rounded-md" type="text" maxlength="1" id="digit6" onkeydown="moveToPrevious(event, 'digit5')">
                </div>
                <button class="text-center bg-primary w-full mt-5 py-2 rounded-lg">Enter Admin Panel</button>
            </div>
         </section>
    </body>
    <script>
        function moveToNext(current, nextId) {
            if (current.value.length === 1) {
                document.getElementById(nextId).focus();
            }
        }

        function moveToPrevious(event, prevId) {
            if (event.key === 'Backspace' && event.target.value === '') {
                document.getElementById(prevId).focus();
            }
        }
        var bgPop = document.getElementById('bg-pop');
        bgPop.addEventListener('click', function(){
            bgPop.classList.add('hidden');
        });
        var admin = document.getElementById('admin');
        admin.addEventListener('click', function(){
            bgPop.classList.remove('hidden');
        });
    </script>
</html>