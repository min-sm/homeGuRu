<?php include '../../Controller/common/colorsController.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Buy</title>

  <style>
    .buy {
      color: rgb(20, 184, 166) !important;
    }
  </style>
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
  <script src="../resources/js/sort_by_section.js" defer></script>
</head>

<body class="bg-[#F7F7F7]" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color']?>">
  <!-- Navigation -->
  <?php include '../header/header.php' ?>

  <!-- filter dropdown (select) boxes -->
  <div class="flex sm:flex-row flex-col justify-center  items-center gap-8 my-8 ">
    <div class="flex gap-8">
      <div>
        <select name="p_type" class="lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2">
          <option value="" disabled selected>Property Type</option>
          <option value="">Apartment</option>
          <option value="">Commercial</option>
          <option value="">Condo</option>
          <option value="">House</option>
        </select>
      </div>
      <div>
        <select name="p_township" class="lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2">
          <option value="" disabled selected>Township</option>
          <option value="">Bahan</option>
          <option value="">Tamwe</option>
        </select>
      </div>
    </div>
    <div class="flex gap-8">
      <div>
        <select name="price_min" class="lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2">
          <option value="" disabled selected>Minimum Price</option>
          <option value="">100</option>
          <option value="">200</option>
        </select>
      </div>
      <div>
        <select name="p_type" class="lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2">
          <option value="" disabled selected>Maximum Price</option>
          <option value="">100</option>
          <option value="">200</option>
        </select>
      </div>
    </div>
  </div>

  <!-- sort by -->
  <div class="bg-gray-800 mb-8 text-white py-5 flex items-center">
    <span class="flex-none ms-16">Sort by</span>
    <div class="flex items-center flex-1 lg:ms-32 ms-8">
      <label for="newest" class=" cursor-pointer label ms-3">Newest</label>
      <label for="price_l_t_h" class="text-gray-500 cursor-pointer label ms-8">Price (Low to High)</label>
      <label for="price_h_t_l" class="text-gray-500 cursor-pointer label ms-8">Price (High to Low)</label>
      <input type="radio" id="newest" name="sort_by" value="" class="hidden" checked />
      <input type="radio" id="price_l_t_h" name="sort_by" value="" class="hidden" />
      <input type="radio" id="price_h_t_l" name="sort_by" value="" class="hidden" />
    </div>
  </div>

  <!-- cards -->
  <div class="px-2 grid grid-rows-3 gap-16">
    <div class="flex justify-around">
      <div class="grid lg:grid-cols-3 grid-cols-1 gap-16">
        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
            <div class="relative">
              <div class="bg-goldYellow text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
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

            <div class="mt-2.5 mb-5 text-darkGreen flex items-center text-xl">
              <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
              <span class="ml-3">7,000 Lakhs / Month</span>
            </div>

            <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
              <div class="flex justify-between items-center">
                <div>
                  <span class="font-playFair">Property ID: </span>
                  <span>1456</span>
                </div>
                <div>
                  <span class="font-playFair">Property Type: </span>
                  <span>House</span>
                </div>
              </div>
              <div class="flex justify-between items-center mt-2">
                <div>
                  <span class="font-playFair">Township: </span>
                  <span>Bahan</span>
                </div>
                <div>
                  <span class="font-playFair">Property Size: </span>
                  <span>5,000 ft<sup>2</sup></span>
                </div>
              </div>
            </div>

            <div class="flex items-center justify-end">
              <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
              <a href="#" class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
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
              <a href="#" class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
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
              <a href="#" class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
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
              <a href="#" class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
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
              <a href="#" class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
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
              <a href="#" class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
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
              <a href="#" class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
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
              <a href="#" class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
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
              <a href="#" class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- pagination -->
  <div class="flex justify-center my-16">
    <nav aria-label="Page navigation example">
      <ul class="flex items-center -space-x-px h-10 text-base">
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Previous</span>
            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
          </a>
        </li>
        <li>
          <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">1</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Next</span>
            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <!-- footer -->
  <?php include '../footer/footer.php' ?>

</body>

</html>