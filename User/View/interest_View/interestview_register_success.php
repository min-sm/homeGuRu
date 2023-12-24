<?php include '../../Controller/common/colorsController.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Interest View Register Success</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap"
        rel="stylesheet" />

    <style>
        * {
            font-family: "Roboto";
        }
    </style>
     <style>
        /* The Modal (background) */
        #myModal {
          display: none;
          /* Hidden by default */
          text-align: center;
          justify-content: center;
          align-items: center;
          position: fixed;
          /* Stay in place */
          z-index: 1;
          /* Sit on top */
          top: 0;
          left: 0;
          width: 100%;
          /* Full width */
          height: 100%;
          overflow: auto;
          /* Enable scroll if needed */
          background-color: rgba(0, 0, 0, 0.8);
          /* Black w/ opacity */
        }
    
        /* Modal Content */
        #modal-content {
          flex-direction: column;
          background-color: rgba(255, 255, 255, 0.8);
          width: fit-content;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-primary" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color']?>">
    <!-- Navigation -->
   <?php include '../header/header.php' ?>
       <!-- uploader info -->
       <div class="flex flex-row items-center w-4/5 lg:w-1/2 my-6 ms-4 lg:ms-24 mt-5">
        <!-- collaborator logo -->
        <div class="basis-1/5">
            <div class="rounded-full bg-[#D9D9D9] w-24">
                <img src="../resources/img/logo.png" alt="test2" />
            </div>
        </div>

        <div class="lg:basis-4/5 w-fit">
            <div class="flex flex-col">
                <h1 class="font-semibold text-xl w-fit">
                    Real Estate & Service Co., Ltd
                </h1>
                <div class="flex flex-row items-center mt-3 justify-between w-1/2 text-xs">
                    <p>Feb 23 2023/ 5:00 PM</p>
                    <p>13 people interest</p>
                </div>
            </div>
        </div>
    </div>

    <!-- property imgs & property info  -->
    <div class="flex flex-col lg:flex-row justify-between w-full lg:w-11/12">
        <!-- imgs -->
        <div class="w-full flex flex-col items-center justify-around">
            <div class="w-96 lg:w-[674.86px] lg:h-96 h-56 bg-cover bg-center rounded-lg property-img"
                style="background-image: url('../resources/img/entrance-hall.jpg')"></div>
            <div class="flex flex-row items-center w-3/4 justify-evenly mt-7">
                <div class="w-20 lg:w-40 h-12 lg:h-24 bg-cover bg-center rounded-lg property-img"
                    style="background-image: url('../resources/img/study-room.jpg')"></div>
                <div class="w-20 lg:w-40 h-12 lg:h-24 bg-cover bg-center rounded-lg property-img"
                    style="background-image: url('../resources/img/living-room.jpg')"></div>
                <div class="w-20 lg:w-40 h-12 lg:h-24 bg-cover bg-center rounded-lg property-img"
                    style="background-image: url('../resources/img/dining-room.jpg')"></div>
                <div class="w-20 lg:w-40 h-12 lg:h-24 bg-cover bg-center rounded-lg property-img"
                    style="background-image: url('../resources/img/kitchen.jpg')"></div>
            </div>
        </div>

        <!-- property info -->
        <div class="mt-5 lg:mt-0 space-y-4 text-center lg:text-left w-full lg:w-2/5">
            <h5 class="text-xl font-semibold tracking-tight text-black">
                4 Bed House in Golden Valley
            </h5>
            <div class="bg-gray-800 text-white text-center py-1.5 rounded-md text-xl font-semibold lg:mx-0 mx-5">
                1500 lakhs / month
            </div>
            <div>
                <span class="font-playFair font-semibold">Property ID: </span>CD354#E
            </div>
            <div>
                <span class="font-playFair font-semibold">Offer Type: </span>CD354#E
            </div>
            <div>
                <span class="font-playFair font-semibold">Property Type: </span>CD354#E
            </div>
            <div>
                <span class="font-playFair font-semibold">Size: </span>CD354#E
            </div>
            <div>
                <span class="font-playFair font-semibold">Township: </span>CD354#E
            </div>

            <button type="button"
                class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                <ion-icon name="logo-facebook" class="text-lg mr-2"></ion-icon> Share
            </button>
            <button type="button"
                class="text-white bg-green-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                <ion-icon name="call" class="text-lg mr-2"></ion-icon> Contact
            </button>

        </div>
    </div>
    <!-- The Modal -->
    <div id="myModal">
        <!-- Modal content -->
        <div id="modal-content" class="flex items-center justify-center">
            <img id="display-full-img" class="w-4/5 h-auto lg:w-auto lg:h-[80vh]" src="" />
            <span id="img-description" class="mt-4"></span>
        </div>
    </div>
  
    
    <div class="flex flex-col w-full bg-white items-center justify-evenly mt-5 py-10">
        <h1 class="font-semibold text-3xl text-center  tracking-wide " >
            Interest View Register
        </h1>
        <ion-icon class="w-36 h-36 m-10 text-darkGreen" name="checkmark-circle-outline"></ion-icon>
        <p class="font-bold text-3xl tracking-wide mb-10">Success !</p>
        <p class="font-medium text-xl tracking-wide mb-2">
            Your account has been Send successfully.
        </p>
        

        <button type="submit" class=" tracking-wide bg-darkGreen hover:bg-green-800 
                      focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium text-white px-8 py-2 text-center 
                      dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            OK</button>
    </div>

      <!-- Start  Related Properties -->

      <div class="flex flex-col w-full items-center justify-evenly my-10">
        <h1 class="font-semibold text-3xl text-center mb-16 " style="font-family: 'Playfair Display';">Related Properties
        </h1>
         <!-- cards -->
    <div class="grid grid-rows-2 gap-16">
        <div class="flex justify-around">
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-16">
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <div class="relative">
                            <div
                                class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                Rent</div>
                            <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg"
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
                            <a href="#"
                                class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <div class="relative">
                            <div
                                class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                Rent</div>
                            <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg"
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
                            <a href="#"
                                class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <div class="relative">
                            <div
                                class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                Rent</div>
                            <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg"
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
                            <a href="#"
                                class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-around">
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-16">
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <div class="relative">
                            <div
                                class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                Sale</div>
                            <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg"
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
                            <a href="#"
                                class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <div class="relative">
                            <div
                                class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                Sale</div>
                            <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg"
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
                            <a href="#"
                                class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <div class="relative">
                            <div
                                class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                Sale</div>
                            <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg"
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
                            <a href="#"
                                class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <hr class="w-full my-6 h-1 bg-paleGray" />

    <!-- pagination -->
    <div class="flex justify-center my-16">
        <nav aria-label="Page navigation example">
            <ul class="flex items-center -space-x-px h-10 text-base">
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page"
                        class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    </div>
    <!-- End  Related Properties -->
    <script src="../resources/js/property_detail.js"></script>

    <?php include '../footer/footer.php' ?>
</body>

</html>