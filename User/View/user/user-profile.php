<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>user profile</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />
    <style>
        * {
            font-family: "Roboto";
        }
    </style>
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
</head>

<body class="bg-primary">
    <!-- Start Navigation -->
    <?php include '../Home_page/header.php'   ?>
    <!-- component -->

    <!-- Start  User Info -->

    <div class="bg-white  py-14 ">
        <div class="grid grid-cols-2  gap-16 mx-20 border-2 border-blue-700">
            <div class="flex flex-col items-center">
                <div class="w-1/4 relative">
                    <img class=" rounded-full" src="../resources/img/user profile.png" alt="">
                    <div class="absolute  h-9 bg-primary  opacity-50 py-2 bottom-0 ">
                    </div>
                    <img class=" absolute bottom-3 right-8 text-black" src="../resources/img/user edit icon.png" alt="">

                </div>
                <p class="font-semibold text-lg">Kim Hana</p>
            </div>
            <div class="flex flex-col">
                <div class="flex items-center  mb-5">
                    <label for="gu_name" class="font-semibold text-md tracking-wide pr-20">Name:</label>
                    <input type="text" name="gu_name" id="" class="ml-20  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" value="Kim Hana">
                </div>
                <div class="flex items-center  mb-5">
                    <label for="gu_email" class="font-semibold text-md tracking-wide pr-20">Email:</label>
                    <input type="email" name="gu_email" id="" class="ml-20  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" value="hanna7923@gmail.com">
                </div>
                <div class="flex items-center  mb-5">
                    <label for="gu_phone" class="font-semibold text-md tracking-wide pr-20">Phone:</label>
                    <input type="email" name="gu_phone" id="" class="ml-20  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" value="+959980636388">
                </div>

                <div class="mt-5">

                    <button type="submit" class="relative left-2/4  text-white border-2 bg-darkGreen  hover:bg-blue-800
                focus:ring-4 focus:outline-none font-semibold rounded-lg text-medium px-8 py-1 mr-8 text-center 
                dark:bg-blue-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Save</button>
                    <button type="" class="relative left-2/4  text-darkGreen border-2 border-darkGreen bg-transparent hover:bg-alert hover:text-white
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-1 text-center 
                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Cancel</button>

                </div>

            </div>
        </div>
    </div>
    <!-- End  User Info -->

    <!-- Start  Favourite Properties -->

    <div class="flex flex-col w-full items-center justify-evenly my-10">
        <h1 class="font-semibold text-3xl  mb-16 " style="font-family: 'Playfair Display';">
            Favourite Properties
        </h1>
        <!-- cards -->
        <div class="grid grid-rows-2 gap-16">

            <div class="flex justify-around">
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-16">
                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <div class="relative">
                                <div class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                    Sale</div>
                                <img class="flex items-center justify-center  rounded-bl-lg w-10  absolute right-3 bottom-7" src="../resources/img/fav red.png" alt="product image" />

                                <img class="pb-4 rounded-t-lg" src="../resources/img/recommended-section-img.jpg" alt="product image" />
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
                                    <div><span style="font-family: 'Playfair Display';">Property ID: </span>
                                        <span>1456</span>
                                    </div>
                                    <div><span style="font-family: 'Playfair Display';">Property Type: </span>
                                        <span>House</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <div><span style="font-family: 'Playfair Display';">Township: </span>
                                        <span>Bahan</span>
                                    </div>
                                    <div>
                                        <span style="font-family: 'Playfair Display';">Property Size: </span>
                                        <span>5,000
                                            ft<sup>2</sup></span>
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
                                    Sale</div>
                                <img class="flex items-center justify-center  rounded-bl-lg w-10  absolute right-3 bottom-7" src="../resources/img/fav red.png" alt="product image" />

                                <img class="pb-4 rounded-t-lg" src="../resources/img/recommended-section-img.jpg" alt="product image" />
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
                                    <div><span style="font-family: 'Playfair Display';">Property ID: </span>
                                        <span>1456</span>
                                    </div>
                                    <div><span style="font-family: 'Playfair Display';">Property Type: </span>
                                        <span>House</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <div><span style="font-family: 'Playfair Display';">Township: </span>
                                        <span>Bahan</span>
                                    </div>
                                    <div>
                                        <span style="font-family: 'Playfair Display';">Property Size: </span>
                                        <span>5,000
                                            ft<sup>2</sup></span>
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
                                    Sale</div>
                                <img class="flex items-center justify-center  rounded-bl-lg w-10  absolute right-3 bottom-7" src="../resources/img/fav red.png" alt="product image" />

                                <img class="pb-4 rounded-t-lg" src="../resources/img/recommended-section-img.jpg" alt="product image" />
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
                                    <div><span style="font-family: 'Playfair Display';">Property ID: </span>
                                        <span>1456</span>
                                    </div>
                                    <div><span style="font-family: 'Playfair Display';">Property Type: </span>
                                        <span>House</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <div><span style="font-family: 'Playfair Display';">Township: </span>
                                        <span>Bahan</span>
                                    </div>
                                    <div>
                                        <span style="font-family: 'Playfair Display';">Property Size: </span>
                                        <span>5,000
                                            ft<sup>2</sup></span>
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
                                <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                    Rent</div>
                                <img class="pb-4 rounded-t-lg" src="../resources/img/recommended-section-img.jpg" alt="product image" />
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
                                    <div><span style="font-family: 'Playfair Display';">Property ID: </span>
                                        <span>1456</span>
                                    </div>
                                    <div><span style="font-family: 'Playfair Display';">Property Type: </span>
                                        <span>House</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <div><span style="font-family: 'Playfair Display';">Township: </span>
                                        <span>Bahan</span>
                                    </div>
                                    <div>
                                        <span style="font-family: 'Playfair Display';">Property Size: </span>
                                        <span>5,000
                                            ft<sup>2</sup></span>
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
                                <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                    Rent</div>
                                <img class="pb-4 rounded-t-lg" src="../resources/img/recommended-section-img.jpg" alt="product image" />
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
                                    <div><span style="font-family: 'Playfair Display';">Property ID: </span>
                                        <span>1456</span>
                                    </div>
                                    <div><span style="font-family: 'Playfair Display';">Property Type: </span>
                                        <span>House</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <div><span style="font-family: 'Playfair Display';">Township: </span>
                                        <span>Bahan</span>
                                    </div>
                                    <div>
                                        <span style="font-family: 'Playfair Display';">Property Size: </span>
                                        <span>5,000
                                            ft<sup>2</sup></span>
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
                                <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                    Rent</div>
                                <img class="pb-4 rounded-t-lg" src="../resources/img/recommended-section-img.jpg" alt="product image" />
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
                                    <div><span style="font-family: 'Playfair Display';">Property ID: </span>
                                        <span>1456</span>
                                    </div>
                                    <div><span style="font-family: 'Playfair Display';">Property Type: </span>
                                        <span>House</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <div><span style="font-family: 'Playfair Display';">Township: </span>
                                        <span>Bahan</span>
                                    </div>
                                    <div>
                                        <span style="font-family: 'Playfair Display';">Property Size: </span>
                                        <span>5,000
                                            ft<sup>2</sup></span>
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
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
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
    </div>
    <!-- End  Favoutite Properties -->
    <?php include '../Home_page/footer.php'   ?>
</body>

</html>