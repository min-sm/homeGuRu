<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../resources/css/dist/output.css" rel="stylesheet" />
  <!-- google fonts -->


  <!-- ionic icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="index.js"></script>
  <!-- flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
  <!-- tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class='bg-primary
  '>
  <!-- start hero -->
  <div class="relative mb-20">
    <img src="../resources/img/home.jpg" width="100%" alt="" />
    <!--start search bar -->

    <div class="w-11/12 lg:w-1/2 h-10 md:h-14 bg-secondary rounded-md absolute -bottom-5 md:-bottom-8 left-5 md:left-10 lg:left-1/4 py-2 px-2 flex text-sm lg:text-base">
      <!-- location -->
      <div class="flex w-1/4 items-center border-r">
        <ion-icon name="location" class="text-alert pr-2"></ion-icon>
        <div>
          <select name="location" class="bg-secondary text-primary w-20 lg:w-28 2xl:w-40 border-none">
            <option value="" disabled selected>Location</option>
            <option value="">Kamayut</option>
            <option value="">Thar Kay Tha</option>
            <option value="">Mayangone</option>
            <option value="">Golden Valley</option>
          </select>
        </div>
      </div>
      <!-- type -->
      <div class="flex w-1/4 items-center border-r pr-1">
        <ion-icon name="business" class="text-primary px-2"></ion-icon>
        <div>
          <select name="type" class="bg-secondary text-primary w-20 border-none lg:w-28 2xl:w-40">
            <option value="" disabled selected>Type</option>
            <option value="">Apartment</option>
            <option value="">Commercial</option>
            <option value="">Condo</option>
            <option value="">House</option>
          </select>
        </div>
      </div>
      <!-- price -->
      <div class="flex w-1/4 items-center pr-1 border-r">
        <ion-icon name="cash-outline" class="text-darkGreen px-2"></ion-icon>
        <div>
          <select name="price" class="bg-secondary text-primary w-20 lg:w-28 2xl:w-40 border-none">
            <option value="" disabled selected>Price</option>
            <option value="">below 1000lakhs</option>
            <option value="">below 5000lakhs</option>
            <option value="">below 10000lakhs</option>
            <option value="">over 10000lakhs</option>
          </select>
        </div>
      </div>
      <!-- search btn -->
      <div class="flex justify-center items-center w-1/4">
        <button class="text-primary bg-darkGreen h-6 md:h-8 rounded-md px-4 text-sm">
          Search
        </button>
      </div>

      <!-- end search bar -->
    </div>
  </div>
  <!-- end hero -->
  <!-- Recommended Properties -->
  <h1 class="font-playFair text-2xl font-extrabold ml-7 mb-7">
    Recommended Properties
  </h1>
  <div class="py-2 border-b-gray-500 mb-28">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out m-auto bg-white" data-carousel-item>
          <div class="absolute flex justify-between items-center h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 px-10 lg:px-14 ">
            <div class="w-1/2 h-5/6 rounded-md overflow-hidden flex  items-center">
              <img src="../resources/img/recommended-section-img.jpg" width="100%" height="100%" alt="" />
            </div>
            <div class="space-y-5 flex flex-col  mt-7 ml-5">
              <!-- title  -->
              <h1 class="font-bold text-xl">3 Beds Condo in Kamayut</h1>
              <!-- price -->
              <div>
                <ion-icon name="cash-outline" class="text-darkGreen pl-2"></ion-icon>
                <span class="text-darkGreen ml-1 font-bold text-xl">2,000 Lakhs</span>
              </div>
              <!-- Description -->
              <p class="tracking-wide">
                This is a 3 bed Condo available for rent in Kamayut Township.
                The asking price is 200000 Lakhs....
              </p>
              <!-- facts -->
              <div class="space-y-5">
                <div class="flex justify-between">
                  <div>
                    <span class="font-semibold">Property ID:</span>
                    <span>CD354#E</span>
                  </div>
                  <div>
                    <span class="font-semibold">Property Type:</span>
                    <span>Condo</span>
                  </div>
                </div>
                <div class="flex justify-between">
                  <div>
                    <span class="font-semibold">Size:</span>
                    <span>17000 ft<sup>2</sup> </span>
                  </div>
                  <div>
                    <span class="font-semibold">Offer Type:</span>
                    <span>Rent</span>
                  </div>
                </div>
              </div>
              <!-- time -->
              <p class="text-gray-400">3 months ago</p>
              <div class="w-full flex justify-end">
                <button class="text-primary bg-darkGreen h-6 md:h-8 rounded-md px-4 text-sm">
                  Details
                </button>
              </div>
            </div>
          </div>
        </div>
       

        <!-- item 5 -->
        <div class="hidden duration-700 ease-in-out m-auto bg-white" data-carousel-item>
          <div class="absolute flex justify-between items-center h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 px-10 lg:px-14 ">
            <div class="w-1/2 h-5/6 rounded-md overflow-hidden flex  items-center">
              <img src="../resources/img/recommended-section-img.jpg" width="100%" height="100%" alt="" />
            </div>
            <div class="space-y-5 flex flex-col  mt-7 ml-5">
              <!-- title  -->
              <h1 class="font-bold text-xl">3 Beds Condo in Kamayut</h1>
              <!-- price -->
              <div>
                <ion-icon name="cash-outline" class="text-darkGreen pl-2"></ion-icon>
                <span class="text-darkGreen ml-1 font-bold text-xl">2,000 Lakhs</span>
              </div>
              <!-- Description -->
              <p class="tracking-wide">
                This is a 3 bed Condo available for rent in Kamayut Township.
                The asking price is 200000 Lakhs....
              </p>
              <!-- facts -->
              <div class="space-y-5">
                <div class="flex justify-between">
                  <div>
                    <span class="font-semibold">Property ID:</span>
                    <span>CD354#E</span>
                  </div>
                  <div>
                    <span class="font-semibold">Property Type:</span>
                    <span>Condo</span>
                  </div>
                </div>
                <div class="flex justify-between">
                  <div>
                    <span class="font-semibold">Size:</span>
                    <span>17000 ft<sup>2</sup> </span>
                  </div>
                  <div>
                    <span class="font-semibold">Offer Type:</span>
                    <span>Rent</span>
                  </div>
                </div>
              </div>
              <!-- time -->
              <p class="text-gray-400">3 months ago</p>
              <div class="w-full flex justify-end">
                <button class="text-primary bg-darkGreen h-6 md:h-8 rounded-md px-4 text-sm">
                  Details
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute -bottom-10 z-30 flex -translate-x-1/2 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full text-darkGreen" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-darkGreen" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-darkGreen" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-darkGreen" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-darkGreen" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-darkGreen dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-darkGreen dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>
  </div>
  <!-- card container 1  -->

  <h1 class="font-playFair text-2xl font-extrabold ml-7 mb-10">
    Latest Rent Properties
  </h1>
  <div class="flex w-full flex-col content-stretch  space-y-2 items-center lg:flex-row lg:justify-around">

  </div>


  <!-- card container 2  -->
  <h1 class="font-playFair text-2xl font-extrabold ml-7 mb-10">
    Latest Sale Properties
  </h1>
  <div class="flex w-full flex-col content-stretch  space-y-2 items-center lg:flex-row lg:justify-around">

  </div>

  <!-- Testimonials -->

  <div>
    <!-- title -->
   <h1>Testimonials</h1>
   <!-- maincontainer -->
   <div>
   <!-- left side -->
   <div>
    <!-- quote -->
   <p>Exceptional service, exceeded expectation. Highly recommend for their professionalism and dedication</p>
   <!--start profile -->
    <div>
      <div><img src="" alt="profile"></div>
      <div><h3>Susan</h3><p>Satisfied Customer</p></div>
    </div>
    <!-- end profile -->
   </div>
   <!-- icons -->
   <div>
    <div></div>
    <div></div>
    <div></div>
   </div>
   </div>
   <!-- end of main container -->
  </div>
  <!-- fl                        r rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   5rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr    rrrrrrrrrrrrrrrrrrrrrrrrrrrr rrrrrrrrrrrrrrrrrow bite -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>