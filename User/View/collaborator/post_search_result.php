<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Collaborator Profile</title>
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />

  <!-- flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

  <!-- tailwind -->
  <link href="../resources/css/dist/output.css" rel="stylesheet" />

  <!-- ionic icon -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- JS -->
  <script src="../resources/js/search_filter_btn.js" defer></script>
  <script src="../resources/js/sort_by_section.js" defer></script>
</head>

<body class="bg-[#F7F7F7] tracking-wide">
  <!-- Navigation -->
  <nav class="bg-gray-800 border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="../resources/img/common/logo-confirm.png" class="h-16" alt="HomeGuRu Logo" />
      </a>
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Login
        </button>
        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-700 rounded-lg bg-gray-800 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-gray-800">
          <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-blue-500 hover:text-white border-gray-700">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-blue-500 hover:text-white border-gray-700">Buy</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-blue-500 hover:text-white border-gray-700">Rent</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-blue-500 hover:text-white border-gray-700">Sell</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-500">Collaborator</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-blue-500 hover:text-white border-gray-700">Our Services</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- filter dropdown (select) boxes -->
  <div>
    <!-- Search Property Title and filter btn -->
    <div class="relative">
      <div class="flex justify-center items-center my-8">
        <h1 class="text-2xl">Search Property</h1>
      </div>
      <div class="absolute top-0 right-5 lg:right-20">
        <button type="button" id="toggleFilterBtn" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
          Filter
        </button>
      </div>
    </div>

    <!-- search boxes first row -->
    <div class="flex items-center justify-evenly my-5">
      <div>
        <input type="text" class="bg-white border border-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block lg:w-52 w-28 p-2.5 dark:placeholder-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company Name" />
      </div>

      <div>
        <select name="p_offer" class="lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2">
          <option value="" disabled selected>Offer Type</option>
          <option value="">Rent</option>
          <option value="">Sale</option>
        </select>
      </div>

      <div>
        <select name="p_type" class="lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2">
          <option value="" disabled selected>Property Type</option>
          <option value="">Apartment</option>
          <option value="">Commercial</option>
          <option value="">Condo</option>
          <option value="">House</option>
        </select>
      </div>
    </div>

    <!-- search boxes sec row -->
    <div class="flex items-center justify-evenly my-5">
      <div>
        <select name="state" class="hidden lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2" id="filterState">
          <option value="" disabled selected>State</option>
          <option value="">Yangon</option>
          <option value="">Mandalay</option>
        </select>
      </div>
      <div>
        <select name="p_township" class="hidden lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2" id="filterTownship">
          <option value="" disabled selected>Township</option>
          <option value="">Bahan</option>
          <option value="">Tamwe</option>
        </select>
      </div>
    </div>

    <!-- search boxes third row -->
    <div class="flex items-center justify-evenly my-5">
      <div>
        <select name="from_price" class="hidden lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2" id="filterPriceFrom">
          <option value="" disabled selected>Price (From)</option>
          <option value="">100</option>
          <option value="">200</option>
        </select>
      </div>

      <div>
        <select name="from_price" class="hidden lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2" id="filterPriceTo">
          <option value="" disabled selected>Price (To)</option>
          <option value="">100</option>
          <option value="">200</option>
        </select>
      </div>
    </div>
  </div>

  <!-- sort by -->
  <div class="bg-gray-800 mt-3 text-white py-5 flex items-center">
    <span class="flex-none ms-16">Sort by</span>
    <div class="flex items-center flex-1 lg:ms-32 ms-8">
      <label for="newest" class="text-gray-500 cursor-pointer label ms-3">Newest</label>
      <label for="price_l_t_h" class="text-gray-500 cursor-pointer label ms-8">Price (Low to High)</label>
      <label for="price_h_t_l" class="text-gray-500 cursor-pointer label ms-8">Price (High to Low)</label>
      <input type="radio" id="newest" name="sort_by" value="" class="hidden" />
      <input type="radio" id="price_l_t_h" name="sort_by" value="" class="hidden" />
      <input type="radio" id="price_h_t_l" name="sort_by" value="" class="hidden" />
    </div>
  </div>

  <!-- results found -->
  <div class="py-8">
    <span class="ms-16 me-8 text-2xl"><span>100</span> Found</span>
    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
      Condo <i class="fa-solid fa-xmark ms-3" style="color: #ff0000"></i>
    </button>
    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
      Rent <i class="fa-solid fa-xmark ms-3" style="color: #ff0000"></i>
    </button>
  </div>

  <!-- recommended section -->
  <div class="flex flex-col items-center justify-center mt-10">
    <!-- <h1 class="text-3xl font-bold" style="font-family: 'Playfair Display';">Recommended</h1> -->
    <div class="flex items-center justify-center flex-col">
      <div class="rounded-full bg-[#D9D9D9] w-28">
        <img src="../resources/img/logo.png" alt="" />
      </div>

      <h1 class="font-semibold text-xl text-[#DD3C4A] mt-3">
        Real Estate & Service Co., Ltd
      </h1>
    </div>

    <!-- cards -->
    <div class="grid grid-rows-2 gap-16 my-20">
      <div class="flex justify-around">
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-16">
          <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
              <div class="relative">
                <div class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                  Sale
                </div>
                <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
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

              <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                <span class="ml-3">7,000 Lakhs / Month</span>
              </div>

              <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                <div class="flex justify-between items-center">
                  <div>
                    <span style="font-family: 'Playfair Display'">Property ID:
                    </span>
                    <span>1456</span>
                  </div>
                  <div>
                    <span style="font-family: 'Playfair Display'">Property Type:
                    </span>
                    <span>House</span>
                  </div>
                </div>
                <div class="flex justify-between items-center mt-2">
                  <div>
                    <span style="font-family: 'Playfair Display'">Township:
                    </span>
                    <span>Bahan</span>
                  </div>
                  <div>
                    <span style="font-family: 'Playfair Display'">Property Size:
                    </span>
                    <span>5,000 ft<sup>2</sup></span>
                  </div>
                </div>
              </div>

              <div class="flex items-center justify-end">
                <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
              </div>
            </div>
          </div>
          <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
              <div class="relative">
                <div class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                  Sale
                </div>
                <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
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

              <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                <span class="ml-3">7,000 Lakhs / Month</span>
              </div>

              <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                <div class="flex justify-between items-center">
                  <div>
                    <span style="font-family: 'Playfair Display'">Property ID:
                    </span>
                    <span>1456</span>
                  </div>
                  <div>
                    <span style="font-family: 'Playfair Display'">Property Type:
                    </span>
                    <span>House</span>
                  </div>
                </div>
                <div class="flex justify-between items-center mt-2">
                  <div>
                    <span style="font-family: 'Playfair Display'">Township:
                    </span>
                    <span>Bahan</span>
                  </div>
                  <div>
                    <span style="font-family: 'Playfair Display'">Property Size:
                    </span>
                    <span>5,000 ft<sup>2</sup></span>
                  </div>
                </div>
              </div>

              <div class="flex items-center justify-end">
                <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
              </div>
            </div>
          </div>
          <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
              <div class="relative">
                <div class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                  Sale
                </div>
                <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
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

              <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                <span class="ml-3">7,000 Lakhs / Month</span>
              </div>

              <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                <div class="flex justify-between items-center">
                  <div>
                    <span style="font-family: 'Playfair Display'">Property ID:
                    </span>
                    <span>1456</span>
                  </div>
                  <div>
                    <span style="font-family: 'Playfair Display'">Property Type:
                    </span>
                    <span>House</span>
                  </div>
                </div>
                <div class="flex justify-between items-center mt-2">
                  <div>
                    <span style="font-family: 'Playfair Display'">Township:
                    </span>
                    <span>Bahan</span>
                  </div>
                  <div>
                    <span style="font-family: 'Playfair Display'">Property Size:
                    </span>
                    <span>5,000 ft<sup>2</sup></span>
                  </div>
                </div>
              </div>

              <div class="flex items-center justify-end">
                <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-around">
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-16">
          <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
              <div class="relative">
                <div class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                  Sale
                </div>
                <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
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

              <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                <span class="ml-3">7,000 Lakhs / Month</span>
              </div>

              <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                <div class="flex justify-between items-center">
                  <div>
                    <span style="font-family: 'Playfair Display'">Property ID:
                    </span>
                    <span>1456</span>
                  </div>
                  <div>
                    <span style="font-family: 'Playfair Display'">Property Type:
                    </span>
                    <span>House</span>
                  </div>
                </div>
                <div class="flex justify-between items-center mt-2">
                  <div>
                    <span style="font-family: 'Playfair Display'">Township:
                    </span>
                    <span>Bahan</span>
                  </div>
                  <div>
                    <span style="font-family: 'Playfair Display'">Property Size:
                    </span>
                    <span>5,000 ft<sup>2</sup></span>
                  </div>
                </div>
              </div>

              <div class="flex items-center justify-end">
                <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
              </div>
            </div>
          </div>
          <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
              <div class="relative">
                <div class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                  Sale
                </div>
                <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
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

              <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                <span class="ml-3">7,000 Lakhs / Month</span>
              </div>

              <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                <div class="flex justify-between items-center">
                  <div>
                    <span style="font-family: 'Playfair Display'">Property ID:
                    </span>
                    <span>1456</span>
                  </div>
                  <div>
                    <span style="font-family: 'Playfair Display'">Property Type:
                    </span>
                    <span>House</span>
                  </div>
                </div>
                <div class="flex justify-between items-center mt-2">
                  <div>
                    <span style="font-family: 'Playfair Display'">Township:
                    </span>
                    <span>Bahan</span>
                  </div>
                  <div>
                    <span style="font-family: 'Playfair Display'">Property Size:
                    </span>
                    <span>5,000 ft<sup>2</sup></span>
                  </div>
                </div>
              </div>

              <div class="flex items-center justify-end">
                <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
              </div>
            </div>
          </div>
          <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
              <div class="relative">
                <div class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                  Sale
                </div>
                <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
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

              <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                <span class="ml-3">7,000 Lakhs / Month</span>
              </div>

              <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                <div class="flex justify-between items-center">
                  <div>
                    <span style="font-family: 'Playfair Display'">Property ID:
                    </span>
                    <span>1456</span>
                  </div>
                  <div>
                    <span style="font-family: 'Playfair Display'">Property Type:
                    </span>
                    <span>House</span>
                  </div>
                </div>
                <div class="flex justify-between items-center mt-2">
                  <div>
                    <span style="font-family: 'Playfair Display'">Township:
                    </span>
                    <span>Bahan</span>
                  </div>
                  <div>
                    <span style="font-family: 'Playfair Display'">Property Size:
                    </span>
                    <span>5,000 ft<sup>2</sup></span>
                  </div>
                </div>
              </div>

              <div class="flex items-center justify-end">
                <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php include '../footer/footer.php' ?>

</body>

</html>