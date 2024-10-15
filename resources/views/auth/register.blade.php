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

                    <img src="assets/img/footer logo.png" alt="" class="mb-10 w-[200px]">

                    <!-- patient form -->
                    <form action="/register" method='POST' class="flex-1 space-y-2">
                        @csrf
                        <section class="mb-6">
                            <h1 class="header text-black text-xl">Hi there 👋🏿</h1>
                            <p class="text-grey">Get started with appointments.</p>
                    
                        </section>

                        <div>
                            <label for="" class="text-black font-semibold">Full name:</label>
                            <div class='flex mt-2 text-black border-grey bg-grey rounded-md border py-2'>
                                <img src="assets/icons/user.svg" alt="" class="mx-2">
                                <input  name='fullname' value="{{old('fullname')}}" type="text" placeholder='Eg: Aaron Nevalinz' class="border-0 text-base outline-none bg-grey text-black px-1 flex-1 placeholder:text-secondary @error('fullname') ring-primary @enderror">
                            </div>
                            @error('fullname')
                                <p class="text-primary">{{ $message}}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="" class="text-black font-semibold">Email Address:</label>:</label>
                            <div class='flex text-dark-700 mt-2 border-grey bg-grey rounded-md border py-2'>
                                <img src="assets/icons/email.svg" alt="" class="mx-2">
                                <input name='email' value="{{old('email')}}" type="text" placeholder='Eg: nevalinz@encoretechnologies.com' class='border-0 outline-none text-black bg-grey px-1 flex-1 placeholder:text-secondary'>
                            </div>
                            @error('email')
                                <p class="text-primary">{{ $message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="" class="text-black font-semibold">Password:</label>:</label>
                            <div class='flex text-dark-700 mt-2 border-grey bg-grey rounded-md border py-2'>
                                <input name='password' type="password" class='border-0 outline-none text-black bg-grey px-4 flex-1 placeholder:text-secondary'>
                            </div>
                            @error('password')
                                <p class="text-primary">{{ $message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="" class="text-black font-semibold">Confirm Password:</label>:</label>
                            <div class='flex text-dark-700 mt-2 border-grey bg-grey rounded-md border py-2'>
                                <input name='password_confirmation' value="" type="password"  class='border-0 outline-none text-black bg-grey px-4 flex-1 placeholder:text-secondary'>
                            </div>
                            @error('password')
                                <p class="text-primary">{{ $message}}</p>
                            @enderror
                        </div>

                        <div>
                            <input class='border-0 outline-none px-1 flex-1 placeholder:text-dark-700 py-2 mt-5 rounded-md text-black font-bold text-xl cursor-pointer text-center bg-primary w-full'  type="submit" value="Register">
                        </div>
                    </form>

                    <div class="text-14-regular mt-10 flex justify-between">
                        <p class="justify-items-end text-dark-600 xl:text-left">
                            © 2024 Clinica
                        </p>
                        <p class="text-primary font-medium text-base underline">
                            <a href="/login">Login</a>
                        </p>
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