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
    <div class='flex h-screen max-h-screen'>
        <section class='remove-scrollbar container'>
            
            <div class="sub-container max-w-[860px] flex-1 flex-col py-10">

                <a href="/">
                    <img src="assets/img/footer logo.png" alt="" class="mb-12 w-[200px]">
                </a>

                <!-- patient form -->
                <form action="" class="flex-1 space-y-12">
                    <section class="mb-5 space-y-4">
                        <h1 class="header text-black font-bold">Hey there 👋🏿👋🏿👋🏿</h1>
                        <p class="text-dark-700">Request a new appointment in 10 seconds</p>
                    </section>

                    <!-- Personal Information -->
                    <section class="space-y-6">
                        <div>
                            <label for="" class="text-black font-bold">Doctor:</label>
                            <div class='flex mt-2 text-secondary'>
                                <select name="" id="" class='w-full px-2 py-2 border-grey bg-grey rounded-md border '>
                                    <option value="" class='flex cursor-pointer items-center gap-2'>
                                        <p>Dr. Peter</p>
                                    </option>
                                    <option value="" class='flex cursor-pointer items-center gap-2'>
                                        <p>Dr. Cameroon</p>
                                    </option>
                                    <option value="" class='flex cursor-pointer items-center gap-2'>
                                        <p>Dr. LivingStone</p>
                                    </option>
                                    <option value="" class='flex cursor-pointer items-center gap-2'>
                                        <p>Dr. Green Nevalinz</p>
                                    </option>
                                    <option value="" class='flex cursor-pointer items-center gap-2'>
                                        <p>Dr. Sharma</p>
                                    </option>
                                    <option value="" class='flex cursor-pointer items-center gap-2'>
                                        <p>Dr. Remirez</p>
                                    </option>
                                    <option value="" class='flex cursor-pointer items-center gap-2'>
                                        <p>Dr. Powell</p>
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-col gap-6 xl:flex-row">
                            <div class="flex-1">
                                <label for="" class="text-black font-bold">Reason for appointment:</label>
                                <div class='flex text-left text-[#f1f1f1] mt-2 border-grey bg-grey rounded-md border py-2'>
                                    <textarea name="" id="" rows='4' class='w-full border-0 outline-none bg-grey px-1 placeholder:text-secondary text-black' placeholder='ex: Peanuts, penicillin, pollen'>
                                    </textarea>
                                </div>
                            </div>

                            <div class="flex-1">
                                <label for="" class="text-black font-bold">Additional Comments/Notes:</label>
                                <div class='flex text-dark-700 mt-2 border-grey bg-grey rounded-md border py-2'>
                                    <textarea name="" id="" rows='4' class='w-full border-0 outline-none bg-grey px-2 flex-1 placeholder:text-secondary' placeholder='ex: Ibuprofen 200mg, Levothyroxine 50mcg'>
                                    </textarea>
                                </div>
                            </div>
                        </div>


                        <div>
                            <label for="" class="text-black font-bold">Expected appointment Date:</label>
                            <div class='flex mt-2 border-grey bg-grey rounded-md border py-2'>
                                <input type="date" placeholder='Aaron Nevalinz' class='border-0 mx-10 text-base outline-none bg-grey px-1 flex-1 placeholder:text-secondary'>
                                <img src="icons/user.svg" alt="" class="mx-2">
                            </div>
                        </div>
                        
                    </section>
                    <!-- End Personal Information -->


                    <div class="flex justify-center items-center">
                        <button type="submit" name="submit" class="bg-primary font-bold text-xl text-black w-full rounded-md py-3">Submit and Continue</button>
                    </div>
                </form>

                <p class="copyright py-12">
                    © 2024 CarePulse
                </p>
            </div>

        </section>
        

        <img src="assets/img/register-img.png" height='1000' width="1000" class="side-img max-w-[390px]" alt="Patient">
    </div>

</body>
</html>