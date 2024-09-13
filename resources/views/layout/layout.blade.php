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

</head>

<body>

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