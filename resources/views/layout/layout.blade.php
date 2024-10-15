<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clinica</title>
  @vite('resources/css/app.css')
  <!-- CSS -->
  <link rel="stylesheet" href="dist/output.css">
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
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="text-grey">

  <!-- HEADER -->
  <header class="py-8 lg:pt-6 lg:pb-14 bg-primary lg:fixed w-full z-10">
    <div class="container mx-auto lg:relative flex flex-col lg:flex-row lg:justify-between gap-y-4 lg:gap-y-0">
      <!-- LOGO -->
      <div class="flex justify-center lg:justify-normal">
        <a href="{{route('home')}}">
          <img src="assets/img/logo small.png" class="w-[200px]" alt="">
        </a>
      </div>
      <div class="flex flex-col gap-y-4  lg:flex-row lg:gap-x-5 lg:gap-y-0 items-center">
        <!-- LOCATION -->
        <div class="flex gap-x-2">
          <i class="ri-map-pin-2-fill text-2xl text-accent"></i>
          <div class="text-white">123 Bukasa, Entebbe, UG</div>
        </div>
        <!-- PHONE -->
        <div class="flex gap-x-2">
          <i class="ri-phone-fill text-2xl text-accent"></i>
          <div class="text-white">(+256) 777 306 662</div>
        </div>
        <!-- BOOK NOW BUTTON -->
        <a href="{{route('appointment.index')}}" class="btn btn-sm btn-outline w-[240px] 
        lg:2-auto mx-auto lg:mx-0 font-bold">Book now</a>
        <!-- MOBILE NAV -->
        <nav class="mnav fixed top-0 -left-[300px] h-full w-[300px] 
        bg-[#ECBBC8] lg:hidden shadow-2xl transition-all duration-300 z-20">
          <div class="mnav_close_btn bg-primary w-8 lg:w-[45px] 
          relative -right-full lg:-right-[45px] top-8 
          flex justify-center items-center rounded-tr-lg rounded-br-lg cursor-pointer
          transition-all">
            <i class="mnav_close_btn_icon ri-arrow-right-s-line text-black text-2xl"></i>
          </div>
          <!-- LOGO, LIST, FORM -->
          <div class="px-12 flex flex-col gap-y-12 h-full">
            <!-- LOGO -->
            <a href="#">
              <div class="flex justify-center lg:justify-normal">
                <h1 class="text-5xl lg:text-left font-bold relative">In<b class="text-accent">sove</b><br />
                  <small
                    class="text-secondary text-[12px] font-normal absolute top-[2.7rem] left-0 lg:text-[12px]">Medical
                    Healthcare</small>
                </h1>
              </div>
            </a>
            <!-- LIST -->
            <ul>
              <li>
                <a href="#home" class="text-secondary hover:text-accent transition-all
                  duration-300">
                  Home
                </a>
              </li>
              <li>
                <a href="#doctors" class="text-secondary hover:text-accent transition-all
                  duration-300">
                  Doctors
                </a>
              </li>
              <li>
                <a href="#" class="text-secondary hover:text-accent transition-all
                  duration-300">
                  Department
                </a>
              </li>
              <li>
                <a href="#" class="text-secondary hover:text-accent transition-all
                  duration-300">
                  Services
                </a>
              </li>
              <li>
                <a href="#" class="text-secondary hover:text-accent transition-all
                  duration-300">
                  Blog
                </a>
              </li>
              <li>
                <a href="#" class="text-secondary hover:text-accent transition-all
                  duration-300">
                  Contact
                </a>
              </li>
            </ul>
            <!-- FORM -->
            <form action="#" class="relative flex gap-x-[10px]">
              <label for="mnav-search-input">
                <i class="ri-search-line text-accent text-2xl"></i>
              </label>
              <input type="text" id="mnav-search-input" placeholder="Search..."
                class="outline-none w-[160px] border-b-2 focus:border-b-2 focus:border-accent placeholder:italic">
            </form>
          </div>
        </nav>
        <!-- DESKTOP NAV -->
        <nav class="bg-white  absolute w-full left-0 -bottom-[86px] shadow-md
        h-16 rounded-[10px] hidden lg:flex lg:items-center lg:justify-between lg:px-[50px]">
          <!-- LIST -->
          <ul class="flex gap-x-4 text-black font-bold">
            <li>
              <a href="{{route('home')}}" class="border-r pr-4  hover:text-primary transition-all
                duration-300">
                Home
              </a>
            </li>
            <li>
              <a href="#doctors" class="border-r pr-4  hover:text-primary transition-all
                duration-300">
                Doctors
              </a>
            </li>
            <li>
              <a href="#" class="border-r pr-4  hover:text-primary transition-all
                duration-300">
                Department
              </a>
            </li>
            <li>
              <a href="#" class="border-r pr-4  hover:text-primary transition-all
                duration-300">
                Services
              </a>
            </li>
            <li>
              <a href="#" class="border-r pr-4  hover:text-primary transition-all
                duration-300">
                Blog
              </a>
            </li>
            <li>
              <a href="" class=" hover:text-primary transition-all
                duration-300">
                Contact
              </a>
            </li>
          </ul>
          <!-- FORM -->
          <div class="flex gap-x-[10px]">
            @auth
              <div class="relative grid place-items-center" x-data='{ open: false}'>
                 {{-- drop down menu button --}}
                 <button class="round-btn" @click='open =! open'>
                  <img src="https://picsum.photos/200"  alt="">
                 </button>

                 {{-- drop down menu --}}
                 <div x-show='open' @click.outside='open = false' class="bg-primary shadow-lg absolute top-10 right-0 rounded-lg overflow-hidden text-white">
                  <p class="p-2 text-xs">{{auth()->user()->fullname}}</p>
                  <hr>
                  <a href="{{route('dasboard')}}" class="block hover:bg-red-100 pl-4 pr-8 py-2 mb-1 hover:text-black">Dashboard</a>
                  <a href="{{route('appointment.index')}}" class="block hover:bg-red-100 pl-4 pr-8 py-2 mb-1 hover:text-black">Book</a>
                  <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="block hover:bg-red-100 pl-4 pr-8 py-2 mb-1 hover:text-black" type="submit">Logout</button>
                  </form>
                 </div>
              </div>
            @endauth
            @guest
              <h1 class="underline">
                <a href="/login">Login</a>
              </h1>
              <h1 class="underline">
                <a href="/register">Register</a>
              </h1>
            @endguest
            </div>
        </nav>
      </div>
    </div>
  </header>

    @yield('content')


<!-- FOOTER -->
  <footer class="footer pt-12 lg:pt-[150px]">
    <div class="container mx-auto pb-12 lg:pb-[100px]">
      <div class="flex flex-col lg:flex-row gap-x-5 gap-y-10">
        <!-- FOOTER CONTACT SECTION -->
        <div class="footer_item flex-1">
          <!-- LOGO -->
          <a href="#">
            <div class="flex justify-center lg:justify-normal">
              <img src="assets/img/footer logo.png" class="w-[200px]" alt="">
            </div>
          </a>
          <!-- DESCRIPTION -->
          <p class="mb-[20px] mt-[30px]">
            We place a high priority on providing Comfortable, durable and natural look dental products, and our denture offering is no exception
          </p>
          <!-- LOCATION, EMAIL & PHONE -->
          <div class="flex flex-col gap-y-3 mb-10 ">
            <div class="flex items-center gap-x-[6px]">
              <i class="ri-map-pin-fill text-[24px] text-primary"></i>
              <div>123 Bukasa, Entebbe, UG</div>
            </div>
            <div class="flex items-center gap-x-[6px]">
              <i class="ri-mail-fill text-[24px] text-primary"></i>
              <div>office@clinica.com</div>
            </div>
            <div class="flex items-center gap-x-[6px]">
              <i class="ri-phone-fill text-[24px] text-primary"></i>
              <div>(+256) 777 306 662</div>
            </div>
          </div>
          <!-- SOCIALS -->
          <div class="flex gap-[14px] text-[30px]">
            <div class="p-[10px] rounded-[10px] shadow-custom2 text-black
          hover:text-primary cursor-pointer transition-all">
              <i class="ri-facebook-circle-fill"></i>
            </div>
            <div class="p-[10px] rounded-[10px] shadow-custom2 text-black
          hover:text-primary cursor-pointer transition-all">
              <i class="ri-instagram-line"></i>
            </div>
            <div class="p-[10px] rounded-[10px] shadow-custom2 text-black
          hover:text-primary cursor-pointer transition-all">
              <i class="ri-twitter-fill"></i>
            </div>
            <div class="p-[10px] rounded-[10px] shadow-custom2 text-black
          hover:text-primary cursor-pointer transition-all">
              <i class="ri-linkedin-box-fill"></i>
            </div>
          </div>
        </div>
        <!-- FOOTER QUICK SECTION -->
        <div class="footer_item flex-1">
          <h4 class="h4 mb-5">Quick Links</h4>
          <div class="flex gap-x-5">
            <!-- LIST 1 -->
            <ul class="flex-1 flex flex-col gap-y-5">
              <li><a href="#home" class="hover:text-primary text-black font-medium transition-all">Home</a></li>
              <li><a href="#doctors" class="hover:text-primary text-black font-medium transition-all">Doctors</a></li>
              <li><a href="#" class="hover:text-primary text-black font-medium transition-all">Department</a></li>
              <li><a href="#" class="hover:text-primary text-black font-medium transition-all">Services</a></li>
              <li><a href="#" class="hover:text-primary text-black font-medium transition-all">Blog</a></li>
            </ul>
            <!-- LIST 2 -->
            <ul class="flex-1 flex flex-col gap-y-5">
              <li><a href="#" class="hover:text-primary text-black font-medium transition-all">Our Pricing</a></li>
              <li><a href="#" class="hover:text-primary text-black font-medium transition-all">Contact</a></li>
              <li><a href="#" class="hover:text-primary text-black font-medium transition-all">Careers</a></li>
              <li><a href="#" class="hover:text-primary text-black font-medium transition-all">Faqs</a></li>
              <li><a href="#" class="hover:text-primary text-black font-medium transition-all">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <!-- FOOTER OPENING HOURS SECTION -->
        <div class="footer_item flex-1">
          <h4 class="h4 mb-5">Opening Hours</h4>
          <!-- LIST -->
          <div class="flex flex-col gap-5">
            <!-- ITEM -->
            <div class="flex-1">
              <div class="flex justify-between items-center border-b pb-[10px]">
                <div>Monday - Thursday</div>
                <div class="text-primary font-medium">8:00 Am - 6:00 Pm</div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="flex-1">
              <div class="flex justify-between items-center border-b pb-[10px]">
                <div>Friday - saturday</div>
                <div class="text-primary font-medium">10:00 Am - 4:00 Pm</div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="flex-1">
              <div class="flex justify-between items-center border-b pb-[10px]">
                <div>Sunday</div>
                <div class="text-primary font-medium">Emergency Only</div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="flex-1">
              <div class="flex justify-between items-center border-b pb-[10px]">
                <div>Personal</div>
                <div class="text-primary font-medium">7:00 Am - 9:00 Pm</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- COPYRIGHT -->
    <div class="py-[30px] border-t">
      <div class="container mx-auto text-center">
        <div class="font-light text-base">&copy; 2023 Clinica -All rights reserved.</div>
      </div>
    </div>
  </footer>
  <!-- END FOOTER -->
  
  <!-- SCRIPTS -->
  <!-- SWIPPER -->
  <script src="src/js/swiper-bundle.min.js"></script>
  <script src="src/js/main.js"></script>

</body>

</html>