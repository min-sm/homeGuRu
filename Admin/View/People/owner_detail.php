<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>
    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet" />

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/b9864528d4.js" crossorigin="anonymous"></script>

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!--JS-->
    <script src="../resources/js/collaborator_detail_post.js" defer></script>
</head>

<body class="bg-primary dark:bg-gray-700">
    <?php include '../commonView/menu.php' ?>
    <!--Start  Owner Detail-->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Property Owner Detail</h1>
        <div class=" lg:w-1/2 w-full grid grid-row-13 gap-4">
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Owner Name</p>
                <p name="go_owner_name">U John Smith</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">National ID</p>
                <p name="go_owner_nrc">12/ TaTaTa (N) 123456</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Email Address</p>
                <p name="go_email">info@margaglobal.com</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Phone Number</p>
                <p name="go_phone">(+95) 1 4700 111</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Joined Date</p>
                <p name="">01/ 12/ 2023 </p>
            </div>
        </div>
        <div class=" flex  my-16 ">
            <a href="./owner_list.php" type="submit" class="tracking-wider text-white bg-goldYellow opacity-75 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  ">
                Back </a>

            <button type="" class="tracking-wider mx-10 text-white border-2 border-green-700 bg-alert opacity-80 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                Delete</button>
        </div>
        <hr class="w-[35rem] border-2 text-gray-500">
    </div>
    <!--End  Owner Detail -->

    <div class="p-4  sm:ml-64">
        <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">Properties of John</h1>

        <!-- results found -->
        <div class="pt-4 pb-8 flex items-center">
            <!-- 100 found -->
            <span class="lg:ms-16 sm:ms-8 me-8 lg:text-2xl text-base text-black dark:text-white"><span>100</span> Found</span>
            <!-- in stock / out of stock -->
            <div class="lg:space-x-8 space-x-4 lg:text-base text-xs">
                <label for="allStock" class="text-white cursor-pointer label ">All Stocks</label>
                <label for="outStock" class="text-gray-500 cursor-pointer label ">Out of Stock</label>
                <label for="inStock" class="text-gray-500 cursor-pointer label ">In Stock</label>
                <input type="radio" id="allStock" name="sort_by" value="" class="hidden" />
                <input type="radio" id="outStock" name="sort_by" value="" class="hidden" />
                <input type="radio" id="inStock" name="sort_by" value="" class="hidden" />
            </div>

            <!-- 2 view options -->
            <div class="flex-1 flex justify-end w-full">
                <!-- in stock / out of stock -->
                <div class="flex lg:space-x-8 space-x-4">
                    <label for="table-view" class="text-white cursor-pointer label1 text-center"><i class="fa-solid fa-bars w-8 lg:text-4xl text-lg"></i></label>
                    <label for="card-view" class="text-gray-500 cursor-pointer label1 "><i class="fa-solid fa-table-cells w-8 lg:text-4xl text-lg"></i></label>
                    <!-- <label for="outStock" class=" cursor-pointer label "><img src="../resources/img/icon/list_format.svg" alt="" class="w-8 h-8 text-alert"></label> -->
                    <input type="radio" id="table-view" name="view_option" value="" class="hidden" checked />
                    <input type="radio" id="card-view" name="view_option" value="" class="hidden" />
                </div>
            </div>
        </div>
        <!-- table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" id='table'>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            No
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Code
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Property
                        </th>
                        <th scope="col" class="px-4 py-3 ">
                            Offer
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Township
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Detail
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            01
                        </th>
                        <td class="px-4 py-4">
                            GRC-2001
                        </td>

                        <td class="px-4 py-4">
                            Condo
                        </td>
                        <td class="px-4 py-4 text-goldYellow font-semibold">
                            Rent
                        </td>

                        <td class="px-4 py-4 text-left">
                            <span class="text-alert font-semibold">30,000,000</span><span>kyats</span> <span>/permonth</span>
                        </td>
                        <td class="px-4 py-4  font-bold tracking-wide">
                            Bahan
                        </td>

                        <td class="px-4 py-4 flex justify-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                        </td>
                        <td class="px-4 py-4 text-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            02
                        </th>
                        <td class="px-4 py-4">
                            GSH-3092
                        </td>

                        <td class="px-4 py-4">
                            House
                        </td>
                        <td class="px-4 py-4 text-alert font-semibold">
                            Sale
                        </td>

                        <td class="px-4 py-4 text-left">
                            <span class="text-alert font-semibold">30,000,000</span><span>$</span>
                        </td>
                        <td class="px-4 py-4  font-bold tracking-wide">
                            Kamayut
                        </td>

                        <td class="px-4 py-4 flex justify-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                        </td>
                        <td class="px-4 py-4 text-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            03
                        </th>
                        <td class="px-4 py-4">
                            GRC-2005
                        </td>
                        <td class="px-4 py-4">
                            Condo
                        </td>
                        <td class="px-4 py-4 text-goldYellow font-semibold">
                            Rent
                        </td>

                        <td class="px-4 py-4 text-left">
                            <span class="text-alert font-semibold">30,000,000</span><span>kyats</span> <span>/permonth</span>
                        </td>
                        <td class="px-4 py-4  font-bold tracking-wide">
                            Bahan
                        </td>

                        <td class="px-4 py-4 flex justify-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                        </td>
                        <td class="px-4 py-4 text-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            04
                        </th>
                        <td class="px-4 py-4">
                            GSH-3098
                        </td>
                        <td class="px-4 py-4">
                            House
                        </td>
                        <td class="px-4 py-4 text-alert font-semibold">
                            Sale
                        </td>

                        <td class="px-4 py-4 text-left">
                            <span class="text-alert font-semibold">30,000,000</span><span>Kyats</span>
                        </td>
                        <td class="px-4 py-4  font-bold tracking-wide">
                            Kamayut
                        </td>

                        <td class="px-4 py-4 flex justify-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                        </td>
                        <td class="px-4 py-4 text-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- cards -->
        <div class="hidden" id="cards">
            <div class="grid grid-rows-3 gap-16">
                <div class="flex justify-around">
                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-16">
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <div class="relative">
                                    <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Rent
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
                                    <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Rent
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
                                    <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Rent
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
                <div class="flex justify-around">
                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-16">
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <div class="relative">
                                    <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Rent
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
                                    <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Rent
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
                                    <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Rent
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
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>