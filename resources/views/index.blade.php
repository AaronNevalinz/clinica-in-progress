@extends('layout.layout')

@section('content')
  <!-- HEADER -->
  <header class="py-8 lg:pt-6 lg:pb-14 bg-primary lg:fixed w-full z-10">
    <div class="container mx-auto lg:relative flex flex-col lg:flex-row lg:justify-between gap-y-4 lg:gap-y-0">
      <!-- LOGO -->
      <div class="flex justify-center lg:justify-normal">
        <img src="assets/img/logo small.png" class="w-[200px]" alt="">
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
        <a href="/patientReg" target="_blank" class="btn btn-sm btn-outline w-[240px] 
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
              <a href="#home" class="border-r pr-4  hover:text-primary transition-all
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
          <form action="#" class="relative flex gap-x-[10px]">
            <label for="mnav-search-input" class="flex justify-center group">
              <i class="ri-search-line text-black text-2xl"></i>
            </label>
            <input type="text" id="mnav-search-input" placeholder="Search..." class="outline-none w-[100px] focus:w-[180px] focus:border-b-2 
            focus:border-black placeholder:italic placeholder:text-base 
            transition-all duration-150">
          </form>
        </nav>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero bg-[#ECBBC8] lg:relative top-36 py-12 xl:pt-12 xl:pb-0 overflow-hidden" id="home">
    <!-- TEXT & IMAGE -->
    <div class="container mx-auto gap-y-2 lg:flex lg:justify-around h-full">
      <!-- TEXT -->
      <div class="hero_text xl:w-[48%] flex flex-col text-center lg:justify-start lg:text-left xl:text-left ">
        <!-- BADGE -->
        <div class="flex items-center bg-white py-[10px] px-[20px] w-max gap-x-2 mb-[26px]
        rounded-full mx-auto lg:mx-0 lg:mt-9">
          <i class="ri-heart-pulse-line text-2xl text-primary"></i>
          <div class="uppercase text-base font-medium text-[#1c1e1f] tracking-24px]">A Reason to smile</div>
        </div>
        <!-- TITLE -->
        <h1 class="h2 mb-6 font-bold">We take pride in only offering the best.</h1>
        <!-- DESCRIPTION -->
        <P class="mb-[42px] md:max-w-xl text-xl mx-auto text-black">
          Every denture that you place represents your practice. We understand that when your reputation is on the line, you want top quality from a trusted dental Laboratory.
        </P>
        <!-- BTN -->
        <a href="/patientReg" target="_blank" class="btn btn-sm lg:w-[320px] btn-accent 
        mx-auto lg:mx-0">Book an Appointment</a>
      </div>
      <!-- IMAGE -->
      <div class="hero_img hidden lg:flex xl:flex max-w-[814px] self-end">
        <img src="./assets/img/islamic-girl-doctor.png" class="w-[400px]" alt="elham">
      </div>
    </div>
  </section>
  <!-- HERO END -->
  <!-- STATE -->
  <section class="stats section lg:mt-28">
    <div class="container mx-auto">
      <!-- WRAPPER -->
      <div class="flex flex-col lg:flex-row gap-y-6 justify-between">
        <!-- ITEM -->
        <div class="stats_item flex-1 xl:border-r flex flex-col items-center lg:border-r-2">
          <div class="text-4xl xl:text-[64px] font-semibold 
          text-black xl:mb-2">+5120</div>
          <div>Happy Patients</div>
        </div>
        <!-- ITEM -->
        <div class="stats_item flex-1 xl:border-r flex flex-col items-center lg:border-r-2">
          <div class="text-4xl xl:text-[64px] font-semibold 
          text-black xl:mb-2">+16</div>
          <div>Total Branches</div>
        </div>
        <!-- ITEM -->
        <div class="stats_item flex-1 xl:border-r flex flex-col items-center lg:border-r-2">
          <div class="text-4xl xl:text-[64px] font-semibold 
          text-black xl:mb-2">+10</div>
          <div>Years Experience</div>
        </div>
        <!-- ITEM -->
        <div class="stats_item flex-1 xl:border-r flex flex-col items-center">
          <div class="text-4xl xl:text-[64px] font-semibold 
          text-black xl:mb-2">+36</div>
          <div>Senior Doctors</div>
        </div>
      </div>
    </div>
  </section>
  <!-- STATE END -->
  <!-- SERVICES -->
  <section class="services">
    <div class="bg-[#ECBBC8] max-w-[1466px] mx-4 lg:mx-auto rounded-[20px] 
    lg:pt-[70px] px-6 lg:px-0 relative h-[368px] flex items-center lg:items-start -z-10">
      <div class="container mx-auto">
        <div class="services_top flex items-center flex-col lg:flex-row lg:mb-[60px] ">
          <h2 class="h2 text-black flex-1 mb-4 lg:mb-0 text-center lg:text-left ">It's all about the details
          </h2>
          <p class="text-secondary flex-1 text-center lg:text-left
        ">
          We provide top-of-the-line dentures to exceed patient expectations on comfort, satisfaction & compatibility
        </p>
        </div>
      </div>
    </div>
  </section>
  <!-- END SERVICES -->
  <!-- GRID CONTAINER -->
  <div class="container mx-auto mt-8 lg:-mt-[144px]">
    <div class="grid lg:grid-cols-4 gap-5 px-8 lg:px-0">
      <div class="services_item bg-white p-[30px] rounded-[10px] 
        shadow-md min-h-[288px] flex flex-col items-center text-center">
        <div class="mb-[15px]">
          <i class="ri-home-8-fill text-6xl text-primary"></i>
        </div>
        <h3 class="h3 mb-[10px]">Aesthetic</h3>
        <p class="leading-normal max-w-[300px]">
          Translucent, imperceptible and finely natural look.
        </p>
      </div>
      <div class="services_item bg-white p-[30px] rounded-[10px] 
        shadow-md min-h-[288px] flex flex-col items-center text-center">
        <div class="mb-[15px]">
          <i class="ri-nurse-fill text-6xl text-primary"></i>
        </div>
        <h3 class="h3 mb-[10px]">Comfortable</h3>
        <p class="leading-normal max-w-[300px]">
          Light weight and exceptional fit, occlusal support
        </p>
      </div>
      <div class="services_item bg-white p-[30px] rounded-[10px] 
        shadow-md min-h-[288px] flex flex-col items-center text-center">
        <div class="mb-[15px]">
          <i class="ri-article-fill text-6xl text-primary"></i>
        </div>
        <h3 class="h3 mb-[10px]">Reliable</h3>
        <p class="leading-normal max-w-[300px]">
          They last for years when properly used
        </p>
      </div>
      <div class="services_item bg-white p-[30px] rounded-[10px] 
        shadow-md min-h-[288px] flex flex-col items-center text-center">
        <div class="mb-[15px]">
          <i class="ri-first-aid-kit-fill text-6xl text-primary"></i>
        </div>
        <h3 class="h3 mb-[10px]">Hypoallergenic</h3>
        <p class=" leading-normal max-w-[300px]">
          Monomer free, they do not produce allergic reactions
        </p>
      </div>
      
    </div>
  </div>
  

  <section>
    <!-- free teeth whitening -->
    <div class="relative w-full h-[550px] space-y-8 py-20">
      <img class="w-full object-cover" src="assets/img/teeth whitening.jpg" alt="">
      <!-- Right section (offer) -->
      <div class="bg-gray-50 container absolute top-20 left-28 rounded-lg shadow-lg p-8 max-w-4xl">
          <h3 class="text-gray-600 text-sm font-semibold uppercase">Free Whitening</h3>
          <h2 class="text-5xl font-bold text-gray-800 my-8">Whitening for life</h2>
          <ul class="list-none space-y-2 my-6">
              <li class="flex items-start">
              <i class="ri-check-double-fill text-primary font-black text-xl mr-2"></i>
              <span>Visit clinica for a new patient cleaning & exam</span>
              </li>
              <li class="flex items-start">
              <i class="ri-check-double-fill text-primary font-black text-xl mr-2"></i>
              <span>Take home a complimentary custom whitening kit</span>
              </li>
              <li class="flex items-start">
              <i class="ri-check-double-fill text-primary font-black text-xl mr-2"></i>
              <span>Book a cleaning every 6 months and we'll refill your whitening gel</span>
              </li>
          </ul>
          <a href="#" class="bg-primary mt-6 text-white font-bold text-xl py-5 px-10 rounded-full hover:bg-[#ECBBC8] hover:text-black">
              Book Appointment
          </a>
      </div>
  </div>
<!-- Free teeth whitening -->
  </section>

  <!-- TESTIMONIALS -->
  <section class="testimonial flex bg-accent-quaternary py-12 lg:min-h-[595px] lg:py-0">
    <div class="testimonial_container flex lg:justify-center xl:bg-services 
    lg:bg-none xl:bg-no-repeat xl:bg-cover xl:justify-end items-center container 
    mx-auto">
      <!-- SLIDER -->
      <div class="max-w-[98%] lg:max-w-[710px]">
        <!-- Slider main container -->
        <div class="swiper h-[450px]">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slide1 -->
            <div class="swiper-slide">
              <div class="h-full  flex flex-col justify-center items-start">
                <div class="max-w-[680px] mx-auto text-center lg:text-left">
                  <!-- MESSAGE -->
                  <p class="font-light relative text-[22px] text-[#4c5354]
                    leading-[190%] text-center lg:text-left before:bg-quoteLeft
                    before:bg-contain before:bg-bottom before:inline-block
                    before:top-0 before:w-10 before:h-10 before:bg-no-repeat
                    after:bg-quoteRight
                    after:bg-contain after:bg-bottom after:inline-block
                    after:top-0 after:w-10 after:h-10 after:bg-no-repeat mb-7">
                    <span class="mx-2">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Iure cumque deserunt, quis ratione provident molestiae sit
                      vero vel impedit quibusdam tenetur! Consequuntur quisquam test your code
                    </span>
                  </p>
                  <!-- NAME -->
                  <div class="text-[26px] text-[#4c5354] font-semibold">James Surengia</div>
                  <!-- JOB -->
                  <div class="text-[#9ab4b7] font-medium uppercase tracking-[2.24px]">Customer</div>
                </div>
              </div>
            </div>
            <!-- Slide2 -->
            <div class="swiper-slide">
              <div class="h-full  flex flex-col justify-center items-start">
                <div class="max-w-[680px] mx-auto text-center lg:text-left">
                  <!-- MESSAGE -->
                  <p class="font-light relative text-[22px] text-[#4c5354]
                    leading-[190%] text-center lg:text-left before:bg-quoteLeft
                    before:bg-contain before:bg-bottom before:inline-block
                    before:top-0 before:w-10 before:h-10 before:bg-no-repeat
                    after:bg-quoteRight
                    after:bg-contain after:bg-bottom after:inline-block
                    after:top-0 after:w-10 after:h-10 after:bg-no-repeat mb-7">
                    <span class="mx-2">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Iure cumque deserunt, quis ratione provident molestiae sit
                      vero vel impedit quibusdam tenetur! Consequuntur quisquam test your code
                    </span>
                  </p>
                  <!-- NAME -->
                  <div class="text-[26px] text-[#4c5354] font-semibold">James Surengia</div>
                  <!-- JOB -->
                  <div class="text-[#9ab4b7] font-medium uppercase tracking-[2.24px]">Customer</div>
                </div>
              </div>
            </div>
            <!-- Slide3 -->
            <div class="swiper-slide">
              <div class="h-full  flex flex-col justify-center items-start">
                <div class="max-w-[680px] mx-auto text-center lg:text-left">
                  <!-- MESSAGE -->
                  <p class="font-light relative text-[22px] text-[#4c5354]
                    leading-[190%] text-center lg:text-left before:bg-quoteLeft
                    before:bg-contain before:bg-bottom before:inline-block
                    before:top-0 before:w-10 before:h-10 before:bg-no-repeat
                    after:bg-quoteRight
                    after:bg-contain after:bg-bottom after:inline-block
                    after:top-0 after:w-10 after:h-10 after:bg-no-repeat mb-7">
                    <span class="mx-2">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Iure cumque deserunt, quis ratione provident molestiae sit
                      vero vel impedit quibusdam tenetur! Consequuntur quisquam test your code
                    </span>
                  </p>
                  <!-- NAME -->
                  <div class="text-[26px] text-[#4c5354] font-semibold">James Surengia</div>
                  <!-- JOB -->
                  <div class="text-[#9ab4b7] font-medium uppercase tracking-[2.24px]">Customer</div>
                </div>
              </div>
            </div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- END TESTIMONIALS -->

  <!-- TEAM -->
  <section class="team section" id="doctors">
    <div class="container mx-auto">
      <!-- TITLE -->
      <h2 class="team_title h2 mb-[50px] text-center lg:text-left">
        Our Team
      </h2>
      <!-- SWIPER -->
      <div class="team_slider swiper min-h-[400px]">
        <div class="swiper-wrapper">
          <!-- Slide1 -->
          <div class="swiper-slide">
            <div class="flex flex-col md:flex-row gap-9">
              <!-- ITEM 1-->
              <div class="flex-1 flex flex-col lg:flex-row">
                <div class="flex flex-col lg:flex-row items-center gap-[30px]">
                  <!-- IMG -->
                  <div class="flex-1">
                    <img
                      src="https://images.unsplash.com/photo-1651008376811-b90baee60c1f?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZG9jdG9yfGVufDB8fDB8fHww"
                      alt="">
                  </div>
                  <!-- INFO -->
                  <div class="flex-1 flex flex-col">
                    <!-- NAME -->
                    <h4 class="h4 mb-[10px]">Dr. Priscilla Abix</h4>
                    <!-- JOB -->
                    <div class="font-medium uppercase tracking-[2.24px] 
                      text-black mb-[20px]">Pediatrician</div>
                    <!-- DESCRIPTION -->
                    <p class="mb-[26px] max-2-[320px]">
                      I’m a dentist because it has always been my desire to help people in a healthcare environment. Growing up in my dad’s and uncle’s dental office, I learned early on that dentistry was going to be my path.</p>
                    <!-- SOCIAL -->
                    <div class="flex items-center text-[30px] gap-x-5 text-black">
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-youtube-fill"></i>
                      </a>
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-facebook-circle-fill"></i>
                      </a>
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-instagram-fill"></i>
                      </a>
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-pinterest-fill"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ITEM 2-->
              <div class="flex-1 flex flex-col lg:flex-row">
                <div class="flex flex-col lg:flex-row items-center gap-[30px]">
                  <!-- IMG -->
                  <div class="flex-1">
                    <img
                      src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjJ8fGRvY3RvcnxlbnwwfHwwfHx8MA%3D%3D"
                      alt="">
                  </div>
                  <!-- INFO -->
                  <div class="flex-1 flex flex-col">
                    <!-- NAME -->
                    <h4 class="h4 mb-[10px]">Dr. Anna</h4>
                    <!-- JOB -->
                    <div class="font-medium uppercase tracking-[2.24px] 
                      text-black mb-[20px]">Pediatrician</div>
                    <!-- DESCRIPTION -->
                    <p class="font mb-[26px] max-2-[320px]">
                      I chose dentistry because I wanted to follow in my parents’ footsteps. Growing up in their office, I came to see how dentistry blends art and science in such a beautiful way, and how it can make a huge impact on people’s health and wellbeing.</p>
                    <!-- SOCIAL -->
                    <div class="flex items-center text-[30px] gap-x-5 text-black">
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-youtube-fill"></i>
                      </a>
                      <a href="#" class="cursor-pointer hover:text-primaryprimary transition-all">
                        <i class="ri-facebook-circle-fill"></i>
                      </a>
                      <a href="#" class="cursor-pointer hover:text-primaryprimary transition-all">
                        <i class="ri-instagram-fill"></i>
                      </a>
                      <a href="#" class="cursor-pointer hover:text-primaryprimary transition-all">
                        <i class="ri-pinterest-fill"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide2 -->
          <div class="swiper-slide">
            <div class="flex flex-col md:flex-row gap-9">
              <!-- ITEM 1-->
              <div class="flex-1 flex flex-col lg:flex-row">
                <div class="flex flex-col lg:flex-row items-center gap-[30px]">
                  <!-- IMG -->
                  <div class="flex-1">
                    <img
                      src="https://plus.unsplash.com/premium_photo-1661757221486-183030ef8670?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGRvY3RvcnxlbnwwfDF8MHx8fDA%3D"
                      alt="">
                  </div>
                  <!-- INFO -->
                  <div class="flex-1 flex flex-col">
                    <!-- NAME -->
                    <h4 class="h4 mb-[10px]">Dr. Nura</h4>
                    <!-- JOB -->
                    <div class="font-medium uppercase tracking-[2.24px] 
                      text-black mb-[20px]">Pediatrician</div>
                    <!-- DESCRIPTION -->
                    <p class="font mb-[26px] max-2-[320px]">
                      Dentistry has always been dear to me, as I was exposed to it at a very young age watching my grandfather treat patients in rural Oklahoma. Dentistry offers the unique opportunity to build lifelong relationships, while also providing a service that improves people’s quality of life.</p>
                    <!-- SOCIAL -->
                    <div class="flex items-center text-[30px] gap-x-5 text-black">
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-youtube-fill"></i>
                      </a>
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-facebook-circle-fill"></i>
                      </a>
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-instagram-fill"></i>
                      </a>
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-pinterest-fill"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ITEM 2-->
              <div class="flex-1 flex flex-col lg:flex-row">
                <div class="flex flex-col lg:flex-row items-center gap-[30px]">
                  <!-- IMG -->
                  <div class="flex-1">
                    <img
                      src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzh8fGRvY3RvcnxlbnwwfHwwfHx8MA%3D%3D"
                      alt="">
                  </div>
                  <!-- INFO -->
                  <div class="flex-1 flex flex-col">
                    <!-- NAME -->
                    <h4 class="h4 mb-[10px]">Dr. Aaron Nevalinz</h4>
                    <!-- JOB -->
                    <div class="font-medium uppercase tracking-[2.24px] 
                      text-black mb-[20px]">Pediatrician</div>
                    <!-- DESCRIPTION -->
                    <p class="font mb-[26px] max-2-[320px]">
                      My passion for dentistry started with a life-changing mission trip to Panama. Since then, I’ve volunteered in many countries, deepening my skills and love for the field. With roots in Central and South America, I’m excited to serve our community as a bilingual speaker.
                    </p>
                    <!-- SOCIAL -->
                    <div class="flex items-center text-[30px] gap-x-5 text-black">
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-youtube-fill"></i>
                      </a>
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-facebook-circle-fill"></i>
                      </a>
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-instagram-fill"></i>
                      </a>
                      <a href="#" class="cursor-pointer hover:text-primary transition-all">
                        <i class="ri-pinterest-fill"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <!-- END TEAM -->
  
  <!-- FAQ -->
  <section class="faq">
    <div class="container mx-auto">
      <h2 class="faq_title h2 text-center mb-[50px]">
        Frequently Asked Questions
      </h2>
      <!-- ITEM WRAPPER -->
      <div class="max-w-5xl mx-auto">
        <!-- ITEM -->
        <div class="faq_item px-[30px] pt-7 border-b mb-4 cursor-pointer select-none">
          <!-- TITLE & ICON -->
          <div class="flex items-center justify-between mb-[10px]">
            <!-- TITLE -->
            <h4 class="h4">How do I book an appointment online</h4>
            <!-- ICON -->
            <div class="faq_btn text-accent">
              <i class="ri-add-fill text-2xl"></i>
            </div>
          </div>
          <!-- ANSWER TEXT -->
          <div class="faq_answer h-0 overflow-hidden">
            <p class="">
              To book an appointment online, simply select your prefered date and time from the calender on our website. Fill in your contact details and submit the booking request. Our staff will call your to confirm the appointment shortly.
            </p>
          </div>
        </div>
        <!-- ITEM -->
        <div class="faq_item px-[30px] pt-7 border-b mb-4 cursor-pointer select-none">
          <!-- TITLE & ICON -->
          <div class="flex items-center justify-between mb-[10px]">
            <!-- TITLE -->
            <h4 class="h4">Will We Get Healthcare Updates After Surgery?</h4>
            <!-- ICON -->
            <div class="faq_btn text-accent">
              <i class="ri-add-fill text-2xl"></i>
            </div>
          </div>
          <!-- ANSWER TEXT -->
          <div class="faq_answer h-0 overflow-hidden">
            <p class="font-light">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Rerum molestiae delectus architecto, at cum aliquid consectetur
              quos eius, exercitationem sapiente voluptas, doloribus tenetur.
              Porro dolor quo neque consequatur nemo! Architecto?
            </p>
          </div>
        </div>
        <!-- ITEM -->
        <div class="faq_item px-[30px] pt-7 border-b mb-4 cursor-pointer select-none">
          <!-- TITLE & ICON -->
          <div class="flex items-center justify-between mb-[10px]">
            <!-- TITLE -->
            <h4 class="h4">How Long Will It Take To Recover After The Surgery?</h4>
            <!-- ICON -->
            <div class="faq_btn text-accent">
              <i class="ri-add-fill text-2xl"></i>
            </div>
          </div>
          <!-- ANSWER TEXT -->
          <div class="faq_answer h-0 overflow-hidden">
            <p class="font-light">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Rerum molestiae delectus architecto, at cum aliquid consectetur
              quos eius, exercitationem sapiente voluptas, doloribus tenetur.
              Porro dolor quo neque consequatur nemo! Architecto?
            </p>
          </div>
        </div>
        <!-- ITEM -->
        <div class="faq_item px-[30px] pt-7 border-b mb-4 cursor-pointer select-none">
          <!-- TITLE & ICON -->
          <div class="flex items-center justify-between mb-[10px]">
            <!-- TITLE -->
            <h4 class="h4">What Preparations Are Necessary Before Undergoing Surgery?</h4>
            <!-- ICON -->
            <div class="faq_btn text-accent">
              <i class="ri-add-fill text-2xl"></i>
            </div>
          </div>
          <!-- ANSWER TEXT -->
          <div class="faq_answer h-0 overflow-hidden">
            <p class="font-light">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Rerum molestiae delectus architecto, at cum aliquid consectetur
              quos eius, exercitationem sapiente voluptas, doloribus tenetur.
              Porro dolor quo neque consequatur nemo! Architecto?
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END FAQ -->
  <!-- DEPARTMENT -->
  <section class="departments section">
    <div class="departments_bg bg-[#ECBBC8] max-w-[1466px] mx-4 lg:mx-auto 
      rounded-[20px] px-6 lg:px-0 py-12 lg:pt-[80px] lg:pb-[90px] relative min-h-[588px] 
      flex items-center">
      <div class="departments_container container mx-auto">
        <div class="flex flex-col lg:flex-row gap-x-5 lg:justify-around">
          <div class="lg:w-[210px] flex flex-col gap-y-[30px] lg:gap-y-[40px] 
          font-medium uppercase text-center lg:text-left text-base">
            <div class="cursor-pointer hover:text-primary text-black font-bold  transition-all">
              Acrylic Full Denture
            </div>
            <div class="cursor-pointer hover:text-primary text-black font-bold transition-all">
              Acrylic Partial
            </div>
            <div class="cursor-pointer hover:text-primary text-black font-bold transition-all">
              Flexible Partial
            </div>
            <div class="cursor-pointer hover:text-primary text-black font-bold transition-all">
              Bite Block
            </div>
            <div class="cursor-pointer hover:text-primary text-black font-bold transition-all">
              Bleaching Tray
            </div>
            <div class="cursor-pointer hover:text-primary text-black font-bold transition-all">
              Custom Tray
            </div>
          </div>
          <div class="lg:w-[840px] mt-5 lg:mt-0">
            <!-- TITLE -->
            <h2 class="h2 mb-[20px] text-center lg:text-left">Acrylic Full Denture</h2>
            <!-- TEXT -->
            <p class="mb-[30px] text-black text-center lg:text-left">
              Acrylic full dentures offer a durable and cost-effective solution for replacing missing teeth, helping to restore your smile and improve oral function. Made from high-quality acrylic, these dentures are custom-designed to fit comfortably and blend seamlessly with your natural teeth.
              <br> <br>
              At our clinic, we focus on providing dentures that are not only aesthetically pleasing but also designed for optimal comfort and functionality. Experience the benefits of a beautiful, natural-looking smile and improved quality of life with our expertly crafted acrylic dentures.
            </p>
            <button class="btn btn-lg btn-accent mx-auto lg:mx-0">Learn more</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END DEPARTMENT -->
  <!-- BLOG -->
  <section class="blog">
    <div class="container mx-auto">
      <h2 class="blog_title h2 mb-[50px] text-center lg:text-left">
        Our Recents Posts
      </h2>
      <!-- BLOG POST -->
      <div class="flex flex-col lg:flex-row pag-y-6 lg:gap-y-0 items-center
        lg:justify-between mb-[50px]">
        <!-- POST 1 -->
        <div class="blog_post max-w-[420px] shadow-md rounded-[10px]
          overflow-hidden cursor-pointer group">
          <!-- IMG -->
          <div class="relative overflow-hidden">
            <img class="group-hover:scale-110 transition-all duration-500"
              src="https://images.unsplash.com/photo-1585421514738-01798e348b17?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDZ8fHxlbnwwfHx8fHw%3D"
              alt="hands" />
            <!-- BADGE -->
            <div class="bg-primary absolute bottom-0 left-0 text-white
              text-base tracking-[2.24px] font-medium uppercase py-[6px] px-[18px]">
              Bleaching Tray
            </div>
          </div>
          <!-- TEXT -->
          <div class="px-5 py-6">
            <!-- DATE -->
            <div class="mb-4 text-black font-semibold">Jan 2, 2023</div>
            <!-- TITLE -->
            <h4 class="h4 mb-[10px]">10 foods to avoid for your heart health</h4>
            <!-- DECRIPTION -->
            <p class="text-black">It's normal to feel anxiety, worry and grief any time you're
              diagnossed with a condition that's certainly true...
              <a href="#" class="italic underline text-[#4c5354">Read more</a>
            </p>
          </div>
        </div>
        <!-- POST 2 -->
        <div class="blog_post max-w-[420px] shadow-md rounded-[10px]
          overflow-hidden cursor-pointer group">
          <!-- IMG -->
          <div class="relative overflow-hidden">
            <img class="group-hover:scale-110 transition-all duration-500"
              src="https://media.istockphoto.com/id/1465572914/photo/doctor-listening-to-patients-heart-with-stethoscope.webp?b=1&s=170667a&w=0&k=20&c=ORUYpkW8NSGBDYMJQRDSY-pNiXvnYfqi2qZQHliSm_w="
              alt="hands" />
            <!-- BADGE -->
            <div class="bg-primary absolute bottom-0 left-0 text-white
              text-base tracking-[2.24px] font-medium uppercase py-[6px] px-[18px]">
              Whitening
            </div>
          </div>
          <!-- TEXT -->
          <div class="px-5 py-6">
            <!-- DATE -->
            <div class="mb-4 font-semibold text-black">Jan 2, 2023</div>
            <!-- TITLE -->
            <h4 class="h4 mb-[10px]">How to Choose a Cosmetic Dentist in Greenwood Village</h4>
            <!-- DECRIPTION -->
            <p class="text-black">It's normal to feel anxiety, worry and grief any time you're
              diagnossed with a condition that's certainly true...
              <a href="#" class="italic underline text-[#4c5354">Read more</a>
            </p>
          </div>
        </div>
        <!-- POST 3 -->
        <div class="blog_post max-w-[420px] shadow-md rounded-[10px]
          overflow-hidden cursor-pointer group">
          <!-- IMG -->
          <div class="relative overflow-hidden">
            <img class="group-hover:scale-110 transition-all duration-500"
              src="https://media.istockphoto.com/id/1447289800/photo/happy-doctor-talking-to-a-senior-woman-on-a-house-call.webp?b=1&s=170667a&w=0&k=20&c=Gv7UWNSCTI5Y8WDj9sBm04L1Gs-08SYqMOAQe0geBKY="
              alt="hands" />
            <!-- BADGE -->
            <div class="bg-primary absolute bottom-0 left-0 text-white
              text-base tracking-[2.24px] font-medium uppercase py-[6px] px-[18px]">
              Acrylic dentures
            </div>
          </div>
          <!-- TEXT -->
          <div class="px-5 py-6">
            <!-- DATE -->
            <div class="mb-4 text-black font-semibold">Jan 2, 2023</div>
            <!-- TITLE -->
            <h4 class="h4 mb-[10px]">10 foods to avoid for your heart health</h4>
            <!-- DECRIPTION -->
            <p class="text-black">It's normal to feel anxiety, worry and grief any time you're
              diagnossed with a condition that's certainly true...
              <a href="#" class="italic underline text-[#4c5354">Read more</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END BLOG -->
  <!-- BRAND -->
  <section class="brands section">
    <div class="container mx-auto">
      <div class="flex flex-col lg:flex-row gap-y-12 lg:gap-y-0 justify-around items-center">
        <h2 class="text-primary text-2xl font-bold ">LIFETRACE</h2>
        <h2 class="text-primary text-2xl font-bold ">medcare</h2>
        <h2 class="text-primary text-2xl font-bold ">BETAEL</h2>
        <h2 class="text-primary text-2xl font-bold ">Healer</h2>
        <h2 class="text-primary text-2xl font-bold ">SOVEN</h2>
      </div>
    </div>
  </section>
  <!-- END BRAND -->
  <!-- NEWS LETTER -->
  <section class="newsletter bg-[#ECBBC8] md:h-[444px] py-12  flex items-center relative
  overflow-hidden">
    <!-- PATTENR -->
    <!-- CONTAINER -->
    <div class="newsletter_container container mx-auto">
      <!-- WRAPPER -->
      <div class="flex flex-col lg:flex-row lg:items-center lg:gap-x-[58px]">
        <!-- TEXT -->
        <div class="flex-1 z-10 text-center lg:text-left">
          <div class="text-base uppercase text-primary tracking-[2.24px] font-medium">Our newsletter</div>
          <h1 class="h1 mb-4 text-black">Subscribe to get more update</h1>
        </div>
        <!-- FORM -->
        <form class="flex-1">
          <div class="flex flex-col md:flex-row relative gap-y-4">
            <input type="text" placeholder="Your email address" class="rounded-full
            w-full h-[66px] outline-none bg-transparent border-2 border-primary pl-[30px]
            placeholder:text-white focus:text-white" />
            <button class="btn btn-lg bg-primary text-black md:absolute right-0">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- END NEWS LETTER -->

  @endsection
