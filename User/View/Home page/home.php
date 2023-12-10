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
  <script src="https://kit.fontawesome.com/b9864528d4.js" crossorigin="anonymous"></script>
  <script src="index.js"></script>
  <!-- flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
  <!-- tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <title>home</title>
</head>

<body class='bg-primary
  '>
<?php 
include '../header/header.html'
?>
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
  <h1 class="font-playFair text-2xl font-extrabold ml-10 sm:ml-14 mb-7 tracking-wider">
    Recommended Properties
  </h1>
  <div class="py-2 border-b-gray-500 mb-28">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out m-auto bg-white" data-carousel-item>
          <div class="absolute flex  justify-between items-center h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 px-10 lg:px-14 ">
            <div class="w-1/2 h-5/6 rounded-md overflow-hidden flex  items-center relative">
            <div class="bg-darkGreen text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                Rent</div>
              <img src="../resources/img/recommended-section-img.jpg" width="100%" height="100%" alt=""  />
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
              <p class="tracking-wider whitespace-normal">
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
      <div class="absolute -bottom-10 z-30 flex -translate-x-1/2 left-1/2 space-x-3 rtl:space-x-reverse px-3 py-2 rounded-lg bg-teal-100 ">
        <button type="button" class="w-3 h-3 rounded-full bg-paleGray" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-paleGray" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-paleGray" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-paleGray" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-paleGray" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
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

  <h1 class="font-playFair text-2xl font-extrabold ml-14 mb-10 tracking-wider">
    Latest Rent Properties
  </h1>
  <div class="flex w-full flex-col content-stretch  space-y-2 items-center lg:flex-row lg:justify-around mb-20">

  <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <div class="relative">
                            <div
                                class="bg-darkGreen text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                Rent</div>
                            <img class="pb-4 rounded-t-lg" src="../resources/img/recommended-section-img.jpg"
                                alt="product image" />
                        </div>
                    </a>
                    <div class="px-5 pb-5">
                        <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                            <span>November 11 at 12:30</span>
                            <span>13 people interests</span>
                        </div>
                        <div class="my-2.5 flex items-center justify-between">
                            <a href="#" class="mt-2.5 mb-5">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                    4 Bed House in Golden Valley
                                </h5>
                            </a>
                            <div class="rounded-full bg-gray-50 w-16">
                                <img src="../resources/img/logo.png" alt="" />
                            </div>
                        </div>

                        <div class="mt-2.5 mb-5 text-darkGreen flex items-center text-xl">
                            <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                            <span class="ml-3">7,000 Lakhs / Month</span>
                        </div>

                        <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                            <div class="flex justify-between items-center">
                                <div><span class="font-playFair">Property ID: </span>
                                    <span>1456</span>
                                </div>
                                <div><span class="font-playFair">Property Type: </span>
                                    <span>House</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-2">
                                <div><span class="font-playFair">Township: </span>
                                    <span>Bahan</span>
                                </div>
                                <div>
                                    <span class="font-playFair">Property Size: </span>
                                    <span>5,000
                                        ft<sup>2</sup></span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end">
                            <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                            <a href="#"
                                class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                        </div>
                    </div>
                </div>
<!-- card 2 -->
<div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <div class="relative">
                            <div
                                class="bg-darkGreen text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                Rent</div>
                            <img class="pb-4 rounded-t-lg" src="../resources/img/recommended-section-img.jpg"
                                alt="product image" />
                        </div>
                    </a>
                    <div class="px-5 pb-5">
                        <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                            <span>November 11 at 12:30</span>
                            <span>13 people interests</span>
                        </div>
                        <div class="my-2.5 flex items-center justify-between">
                            <a href="#" class="mt-2.5 mb-5">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                    4 Bed House in Golden Valley
                                </h5>
                            </a>
                            <div class="rounded-full bg-gray-50 w-16">
                                <img src="../resources/img/logo.png" alt="" />
                            </div>
                        </div>

                        <div class="mt-2.5 mb-5 text-darkGreen flex items-center text-xl">
                            <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                            <span class="ml-3">7,000 Lakhs / Month</span>
                        </div>

                        <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                            <div class="flex justify-between items-center">
                                <div><span class="font-playFair">Property ID: </span>
                                    <span>1456</span>
                                </div>
                                <div><span class="font-playFair">Property Type: </span>
                                    <span>House</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-2">
                                <div><span class="font-playFair">Township: </span>
                                    <span>Bahan</span>
                                </div>
                                <div>
                                    <span class="font-playFair">Property Size: </span>
                                    <span>5,000
                                        ft<sup>2</sup></span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end">
                            <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                            <a href="#"
                                class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                        </div>
                    </div>
                </div>
<!-- card 3 -->
<div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <div class="relative">
                            <div
                                class="bg-darkGreen text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                Rent</div>
                            <img class="pb-4 rounded-t-lg" src="../resources/img/recommended-section-img.jpg"
                                alt="product image" />
                        </div>
                    </a>
                    <div class="px-5 pb-5">
                        <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                            <span>November 11 at 12:30</span>
                            <span>13 people interests</span>
                        </div>
                        <div class="my-2.5 flex items-center justify-between">
                            <a href="#" class="mt-2.5 mb-5">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                    4 Bed House in Golden Valley
                                </h5>
                            </a>
                            <div class="rounded-full bg-gray-50 w-16">
                                <img src="../resources/img/logo.png" alt="" />
                            </div>
                        </div>

                        <div class="mt-2.5 mb-5 text-darkGreen flex items-center text-xl">
                            <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                            <span class="ml-3">7,000 Lakhs / Month</span>
                        </div>

                        <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                            <div class="flex justify-between items-center">
                                <div><span class="font-playFair">Property ID: </span>
                                    <span>1456</span>
                                </div>
                                <div><span class="font-playFair">Property Type: </span>
                                    <span>House</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-2">
                                <div><span class="font-playFair">Township: </span>
                                    <span>Bahan</span>
                                </div>
                                <div>
                                    <span class="font-playFair">Property Size: </span>
                                    <span>5,000
                                        ft<sup>2</sup></span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end">
                            <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                            <a href="#"
                                class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                        </div>
                    </div>
                </div>

  </div>


  <!-- card container 2  -->
  <h1 class="font-playFair text-2xl font-extrabold ml-14 mb-10 tracking-wider">
    Latest Sale Properties
  </h1>
  <div class="flex w-full flex-col content-stretch  space-y-2 items-center lg:flex-row lg:justify-around mb-28">

<div
                  class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <div class="relative">
                          <div
                              class="bg-goldYellow text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                             Sale</div>
                          <img class="pb-4 rounded-t-lg" src="../resources/img/recommended-section-img.jpg"
                              alt="product image" />
                      </div>
                  </a>
                  <div class="px-5 pb-5">
                      <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                          <span>November 11 at 12:30</span>
                          <span>13 people interests</span>
                      </div>
                      <div class="my-2.5 flex items-center justify-between">
                          <a href="#" class="mt-2.5 mb-5">
                              <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                  4 Bed House in Golden Valley
                              </h5>
                          </a>
                          <div class="rounded-full bg-gray-50 w-16">
                              <img src="../resources/img/logo.png" alt="" />
                          </div>
                      </div>

                      <div class="mt-2.5 mb-5 text-darkGreen flex items-center text-xl">
                          <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                          <span class="ml-3">7,000 Lakhs / Month</span>
                      </div>

                      <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                          <div class="flex justify-between items-center">
                              <div><span class="font-playFair">Property ID: </span>
                                  <span>1456</span>
                              </div>
                              <div><span class="font-playFair">Property Type: </span>
                                  <span>House</span>
                              </div>
                          </div>
                          <div class="flex justify-between items-center mt-2">
                              <div><span class="font-playFair">Township: </span>
                                  <span>Bahan</span>
                              </div>
                              <div>
                                  <span class="font-playFair">Property Size: </span>
                                  <span>5,000
                                      ft<sup>2</sup></span>
                              </div>
                          </div>
                      </div>

                      <div class="flex items-center justify-end">
                          <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                          <a href="#"
                              class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                      </div>
                  </div>
              </div>
<!-- card 2 -->
<div
                  class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <div class="relative">
                          <div
                              class="bg-darkGreen text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                              Rent</div>
                          <img class="pb-4 rounded-t-lg" src="../resources/img/recommended-section-img.jpg"
                              alt="product image" />
                      </div>
                  </a>
                  <div class="px-5 pb-5">
                      <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                          <span>November 11 at 12:30</span>
                          <span>13 people interests</span>
                      </div>
                      <div class="my-2.5 flex items-center justify-between">
                          <a href="#" class="mt-2.5 mb-5">
                              <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                  4 Bed House in Golden Valley
                              </h5>
                          </a>
                          <div class="rounded-full bg-gray-50 w-16">
                              <img src="../resources/img/logo.png" alt="" />
                          </div>
                      </div>

                      <div class="mt-2.5 mb-5 text-darkGreen flex items-center text-xl">
                          <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                          <span class="ml-3">7,000 Lakhs / Month</span>
                      </div>

                      <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                          <div class="flex justify-between items-center">
                              <div><span class="font-playFair">Property ID: </span>
                                  <span>1456</span>
                              </div>
                              <div><span class="font-playFair">Property Type: </span>
                                  <span>House</span>
                              </div>
                          </div>
                          <div class="flex justify-between items-center mt-2">
                              <div><span class="font-playFair">Township: </span>
                                  <span>Bahan</span>
                              </div>
                              <div>
                                  <span class="font-playFair">Property Size: </span>
                                  <span>5,000
                                      ft<sup>2</sup></span>
                              </div>
                          </div>
                      </div>

                      <div class="flex items-center justify-end">
                          <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                          <a href="#"
                              class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                      </div>
                  </div>
              </div>
<!-- card 3 -->
<div
                  class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <div class="relative">
                          <div
                              class="bg-darkGreen text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                              Rent</div>
                          <img class="pb-4 rounded-t-lg" src="../resources/img/recommended-section-img.jpg"
                              alt="product image" />
                      </div>
                  </a>
                  <div class="px-5 pb-5">
                      <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                          <span>November 11 at 12:30</span>
                          <span>13 people interests</span>
                      </div>
                      <div class="my-2.5 flex items-center justify-between">
                          <a href="#" class="mt-2.5 mb-5">
                              <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                  4 Bed House in Golden Valley
                              </h5>
                          </a>
                          <div class="rounded-full bg-gray-50 w-16">
                              <img src="../resources/img/logo.png" alt="" />
                          </div>
                      </div>

                      <div class="mt-2.5 mb-5 text-darkGreen flex items-center text-xl">
                          <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                          <span class="ml-3">7,000 Lakhs / Month</span>
                      </div>

                      <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                          <div class="flex justify-between items-center">
                              <div><span class="font-playFair">Property ID: </span>
                                  <span>1456</span>
                              </div>
                              <div><span class="font-playFair">Property Type: </span>
                                  <span>House</span>
                              </div>
                          </div>
                          <div class="flex justify-between items-center mt-2">
                              <div><span class="font-playFair">Township: </span>
                                  <span>Bahan</span>
                              </div>
                              <div>
                                  <span class="font-playFair">Property Size: </span>
                                  <span>5,000
                                      ft<sup>2</sup></span>
                              </div>
                          </div>
                      </div>

                      <div class="flex items-center justify-end">
                          <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                          <a href="#"
                              class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                      </div>
                  </div>
              </div>

</div>

  <!-- Testimonials -->

  <div class="mb-28 bg-white rounded-md pt-10 w-11/12 m-auto pb-14">
    <!-- title -->
    <h1 class="font-playFair text-2xl font-extrabold ml-20 mb-7 tracking-wider">Testimonials</h1>
    <!-- maincontainer -->
    <div class="flex flex-col justify-center items-center  w-full gap-5 sm:flex-row  sm:justify-evenly ">
      <!-- left side -->
      <div class=" w-1/3">
        <!-- quote -->
        <p class="  tracking-widest whitespace-pre-warp font-semibold text-2xl font-playFair w-full  mb-5"><span class="text-5xl font-extrabold">"</span> Exceptional service, exceeded expectation. Highly recommend for their professionalism and dedication<span class="text-5xl font-extrabold">"</span></p>
        <!--start profile -->
        <div class="flex gap-4 items-center  h-20">
          <div class="h-20 w-20"><img src="../resources/img/susan-img.png" height="100%" width="100%" alt="profile"></div>
          <div >
            <h3 class="text-lg font-semibold">Susan</h3>
            <p>Satisfied Customer</p>
          </div>
        </div>
        <!-- end profile -->
      </div>
      <!-- icons -->
      <div class="flex flex-col justify-center  w-full gap-5 sm:flex-row  sm:justify-evenly sm:w-1/3 items-center">
        <div class="flex flex-col justify-center w-16 space-y-2">
          <ion-icon name="business" class="text-5xl text-center text-secondary"></ion-icon>
          <p class="text-xl font-semibold text-center">500+</p>
          <p class="text-center font-medium">Properties</p>
        </div>
        <div class="flex flex-col justify-center w-16 space-y-2">
          <ion-icon name="people" class="text-5xl text-secondary "></ion-icon>
          <p class="text-xl font-semibold text-center">150+</p>
          <p class="text-center font-medium">Collaborators</p>
        </div>
        <div class="flex flex-col justify-center w-16 space-y-2"><i class="fa-solid fa-map-location-dot text-5xl text-center text-secondary"></i>
          <p class="text-xl font-semibold text-center">50+</p>
          <p class="text-center font-medium">Townships</p>
        </div>
      </div>
    </div>
  </div>
  <!-- our services -->

  <div class=" mb-28 ">
  <h1 class="tracking-wider font-playFair text-2xl font-extrabold text-center mb-10">Our Services</h1>
  <p class="whitespace-pre-warp text-center tracking-wider">At Home GuRu, experience seamless property transactions. From listing to closing deals, our expert team ensures satisfaction, making your real estate journey effortless and rewarding. Trust the experts.</p>
  <div class="flex justify-evenly mt-16">
    <div class="w-32 "><img src="../resources/img/rentlogo.png" height="100%" width="100%" alt=""><p class="text-center font-semibold">Rent service</p></div>
    <div class="w-32 relative"><img src="../resources/img/Sale logo.png" height="100%" width="100%" alt=""><p class="text-center font-semibold absolute left-5 -bottom-1">Sale service</p> </div>
  </div>
  </div>
  <!-- end our services -->
  <!-- our partners -->
  <div class=" mb-28 ">
  <h1 class="tracking-wider font-playFair text-2xl font-extrabold text-center mb-14">Our Partners</h1>
 
  <div class="flex flex-col justify-center items-center  w-full gap-3 sm:flex-row  sm:justify-evenly  ">
    <div class="w-32  h-32 "><img src="../resources/img/ImeLogo.png" height="100%" width="100%" alt=""></div>
    <div class="w-32 h-32"><img src="../resources/img/maga Logo.png" height="100%" width="100%" alt=""></div>
    <div class="w-32  h-32 "><img src="../resources/img/TpjLogo.png" height="100%" width="100%" alt=""></div>
    <div class="w-32 h-32"><img src="../resources/img/ShweTaungLogo.png" height="100%" width="100%" alt=""></div>
  </div>
  </div>

  <!-- buy rent 2 cards -->
  <div class="flex mt-6 mb-10 flex-col lg:flex-row items-center w-auto justify-around">
            <!-- buy property card -->
            <div class="w-3/4 lg:w-5/12 h-56 bg-cover flex items-center justify-center"
                style="background-image: url('../resources/img/pic1.png')">
                <ul class="list-disc text-white list-inside w-4/5 text-2xs lg:text-sm space-y-2.5">
                    <span class="text-xl" style="font-family: 'Playfair Display'">Buy Property</span>
                    <li>
                        Valuable expertise in pricing, marketing, negotiating.
                    </li>
                    <li>
                        Navigating the legal aspects of the transaction.
                    </li>
                    <li>
                        Advice from financial professionals regarding the financial aspects of the sale.
                    </li>
                    <li>
                        Help throughout the entire selling process.
                    </li>

                </ul>
            </div>

            <!-- rent property card -->
            <div class="w-3/4 lg:w-5/12 h-56 mt-16 lg:mt-auto bg-cover flex items-center justify-center"
                style="background-image: url('../resources/img/pic2.png')">
                <ul class="list-disc text-white list-inside w-4/5 lg:text-sm text-2xs space-y-2.5">
                    <span class="text-xl lg:text-xl" style="font-family: 'Playfair Display'">Rent Property</span>
                    <li>
                        Photography services to create high-quality images.
                    </li>
                    <li>
                        Identify any necessary maintenance or repairs.
                    </li>
                    <li>
                        Handle the legal and logistical aspects of the process in accordance with local laws.
                    </li>
                    <li>
                        Assist with lease renewals and ensuring a smooth transition between tenants.
                    </li>

                </ul>
            </div>
        </div>
    </div>
      <!-- flow bite-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>