<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collaborator Profile</title>
    <style>
       .collaborator{
            color:rgb(20, 184, 166 ) !important;
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
    <link href="../resources/css/dist/output.css" rel="stylesheet">

    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-[#F7F7F7] tracking-wide">
    <!-- Navigation -->
    <?php include '../header/header.php' ?>

    <!-- collaborator card -->
    <div class="flex justify-center items-center mt-10">
        <div class="flex items-center border-8 p-12 w-3/4 flex-col lg:flex-row">
            <div class="rounded-full bg-[#D9D9D9] w-52 flex-none">
                <img src="../resources/img/collaborator-tpj-logo.png" alt="" />
            </div>
            <div class="flex justify-center items-center grow">
                <div class="space-y-3.5 flex flex-col ">
                    <h1 class="font-semibold text-xl text-[#DD3C4A] mt-3 ">
                        Real Estate & Service Co., Ltd
                    </h1>
                    <div class="flex items-center space-x-4">
                        <i class="fa-solid fa-location-dot text-[#DD3C4A]"></i>
                        <span>No. 18, Yangon, Myanmar</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="fa-solid fa-phone text-[#DD3C4A]"></i>
                        <div class="flex items-start flex-col">
                            <span>01 — 554369</span>
                            <span>09 — 699915350</span>
                        </div>

                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="fa-solid fa-envelope text-[#DD3C4A]"></i>
                        <span>realestateservice@gmail.com</span>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- recommended section -->
    <div class="flex flex-col items-center justify-center mt-10">
        <h1 class="text-3xl font-bold" style="font-family: 'Playfair Display';">Recommended</h1>


        <!-- cards -->
        <div class="grid grid-rows-2 gap-16 my-20">
            <div class="flex justify-around">
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-16">
                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <div class="relative">
                                <div class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                    Sale</div>
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
                                <div class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                    Sale</div>
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
    </div>
    <hr class="h-1 bg-black mb-10">

    <!-- Collaborator detail section -->
    <div class="flex items-center justify-center flex-col">
        <div class="rounded-full bg-[#D9D9D9] w-28">
            <img src="../resources/img/logo.png" alt="" />
        </div>

        <h1 class="font-semibold text-xl text-[#DD3C4A] mt-3">
            Real Estate & Service Co., Ltd
        </h1>

        <!-- site stats -->
        <div class="flex items-center w-3/4 justify-evenly mt-6">
            <div class="flex flex-col justify-center items-center">
                <i class="fa-solid fa-building text-5xl"></i>
                <h1 class="font-semibold text-2xl mt-3">500+</h1>
                <span class="text-xl text-center">Total Property</span>
            </div>
            <div class="flex flex-col justify-center items-center">
                <i class="fa-solid fa-building text-5xl"></i>
                <h1 class="font-semibold text-2xl mt-3">800+</h1>
                <span class="text-xl text-center">Sale Property</span>
            </div>
            <div class="flex flex-col justify-center items-center">
                <i class="fa-solid fa-building text-5xl"></i>
                <h1 class="font-semibold text-2xl mt-3">600+</h1>
                <span class="text-xl text-center">Rent Property</span>
            </div>
        </div>

        <!-- buy rent 2 cards -->
        <div class="flex mt-6 mb-10 flex-col lg:flex-row items-center w-auto justify-between">
            <!-- buy property card -->
            <div class="w-3/4 lg:w-5/12 h-56 bg-cover flex items-center justify-center" style="background-image: url('../resources/img/pic1.png')">
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
            <div class="w-3/4 lg:w-5/12 h-56 mt-16 lg:mt-auto bg-cover flex items-center justify-center" style="background-image: url('../resources/img/pic2.png')">
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
    <!-- footer -->
    <?php include '../footer/footer.php' ?>
</body>

</html>