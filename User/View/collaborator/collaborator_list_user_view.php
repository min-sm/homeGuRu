<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collaborator Profile</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap"
        rel="stylesheet" />

    <style>
        * {
            font-family: 'Roboto';
        }
    </style>
    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

     <!-- tailwind -->
     <link href="../resources/css/dist/output.css" rel="stylesheet">

    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<div class="bg-[#F7F7F7]">
    <!-- Navigation -->
    <nav class="bg-gray-800 border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../resources/img/common/logo-confirm.png" class="h-16" alt="HomeGuRu Logo" />
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Login
                </button>
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Buy</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Rent</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sell</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500">Collaborator</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 d:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Our
                            Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Start Collaborator Hero Section  -->
    <div class="w-full relative">
        <img class="w-full" src="../resources/img/collaboratorHero.png" alt="collaboratorHero.pngs" />
        <h1 class="font-black text-5xl absolute top-32 left-1/3">Grow your New Network</h1>
        <div class="w-full absolute bottom-0 ">
            <div class="mx-auto font-black text-3xl  w-2/3 h-56  bg-white rounded-t-lg opacity-50">
            </div>
        </div>
        <div class="w-full absolute bottom-0 ">
            <div class="mx-auto font-black text-3xl  w-2/3 h-56   rounded-t-lg ">
                <div class="absolute font-black text-3xl  rounded-t-lg ">
                    <p class="mx-10 mt-16 tracking-wide ">Faster Work Flow</p>
                    <p class="mx-28 my-5 tracking-wide ">Easy to connect with client</p>
                    <p class="mx-[11rem] tracking-wide ">Easily to Control your list of property Data</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Collaborator Hero Section  -->

    <!-- Start Partanership List Section  -->
    <div class="flex flex-col items-center justify-center my-20">
        <h1 class="text-5xl font-bold" style="font-family: 'Playfair Display';">Our Partanership</h1>
        <div class="grid lg:grid-cols-4 grid-cols-1 gap-16">
           
            <img class="w-50 h-50 hover:bg-gray-100 " src="../resources/img/common/company Logo/IME PROPERTY.png" alt="company Logo" />
            <img class="w-50 h-50 hover:bg-gray-100 " src="../resources/img/common/company Logo/MAGAR GROUP.png" alt="company Logo" />
            <img class="w-50 h-50 hover:bg-gray-100 " src="../resources/img/common/company Logo/SHWE TAUNG.png" alt="company Logo" />
            <img class="w-50 h-50 hover:bg-gray-100 " src="../resources/img/common/company Logo/TPL Myanmar.png" alt="company Logo" />
        </div>
    </div>
    <!-- End Partanership List Section  -->

    <!-- Start Collaborator register Section  -->
    <div class="w-full relative">
        <img class="w-full" src="../resources/img/collaboratorRegister.png" alt="collaboratorHero.png" />
        <div class="w-1/2 text-white   absolute top-14 left-20 tracking-wide ">
            <h1 class="font-medium text-5xl  " style="font-family: 'Playfair Display';">Collaborator Requirement</h1>
            <div class="absolute  text-2xl  my-14 tracking-wide">
                <p class=" mb-4 ">. Real estate licensing (as required by local regulations).</p>
                <p class=" mb-4 ">. Understanding of tax implications in real estate transactions.</p>
                <p class=" mb-4 ">. Networking for property listings and client acquisition.</p>
                <p class=" mb-4 ">. In-depth knowledge of the local real estate market.</p>
            </div>
        </div>
        <div class=" text-white   absolute bottom-2/4 right-16 tracking-wide ">
            <h1 class="font-bold text-5xl tracking-wide px-5 " style="font-family: 'Playfair Display';">To Be Our
                Partner</h1>
            <button class="absolute w-full h-20 bg-blue-800  text-2xl  my-10 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Collaborator Register
            </button>
        </div>
    </div>

    <!-- End Collaborator register Section  -->

    <!-- Start Search Company name Section  -->

    <div class="flex flex-col w-full items-center justify-evenly my-8">
        <h1 class="font-bold text-5xl text-center " style="font-family: 'Playfair Display';">Property Contact</h1>

        <div class="w-3/5 my-16">
            <input type="text" name="collaboratorName" placeholder="Company Name"
                class=" w-2/4 px-5 py-3 rounded-lg border border-2 mx-20">
            <button class="w-1/4 h-12 font-medium text-2xl text-white rounded-lg bg-green-600 
            hover:bg-white-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Search
            </button>
        </div>
        <!-- Start  Company profile info Section  -->
        <div class="w-3/4 h-64 bg-gray-800 border-gray-200 rounded my-5  hover:p-2">
            <div class="absolute w-46 h-46  bg-[#F7F7F7] mx-16 my-12">
                <img class=" w-40 h-40" src="../resources/img/common/company Logo/TPL Myanmar.png" alt="company Logo" />
            </div>
            <div class="absolute w-2/4 h-46 left-1/4 mx-40 my-12 text-white font-medium">
                <div class="font-bold text-2xl mb-8">
                    TPL Myanmar Real Estate & Service Co.,Ltd
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="person-outline"></ion-icon>
                    <span>319, Rm 4, Yan Aung Lane (2), Ward (2), Yankin, Yangon , Myanmar</span>
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="call-outline"></ion-icon>
                    <span>(+95) 95198105</span>
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="mail-outline"></ion-icon>
                    <span>tplmyanmar@gmail.coms</span>
                </div>
            </div>


        </div>
        <!-- Start  Company profile info Section  -->

        <!-- Start  Company profile info Section  -->
        <div class="w-3/4 h-64 bg-gray-800 border-gray-200 rounded my-5 hover:p-2">
            <div class="absolute w-46 h-46  bg-[#F7F7F7] mx-16 my-12">
                <img class=" w-40 h-40" src="../resources/img/common/company Logo/SHWE TAUNG.png" alt="company Logo" />
            </div>
            <div class="absolute w-2/4 h-46 left-1/4 mx-40 my-12 text-white font-medium">
                <div class="font-bold text-2xl mb-8">
                    SHWE TAUNG Real Estate Co.,Ltd </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="person-outline"></ion-icon>
                    <span>River View Garden HousingStrand Road, Ahlone TownshipYangon, Myanmar</span>
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="call-outline"></ion-icon>
                    <span>(+95) 2314567</span>
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="mail-outline"></ion-icon>
                    <span>info@shwetaunggroup.com</span>
                </div>
            </div>


        </div>
        <!-- Start  Company profile info Section  -->

        <!-- Start  Company profile info Section  -->
        <div class="w-3/4 h-64 bg-gray-800 border-gray-200 rounded my-5 hover:p-2">
            <div class="absolute w-46 h-46  bg-[#F7F7F7] mx-16 my-12">
                <img class=" w-40 h-40" src="../resources/img/common/company Logo/IME PROPERTY.png"
                    alt="company Logo" />
            </div>
            <div class="absolute w-2/4 h-46 left-1/4 mx-40 my-12 text-white font-medium">
                <div class="font-bold text-2xl mb-8">
                    IME PROPERTY Estate Co.,Ltd
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="person-outline"></ion-icon>
                    <span>No.204, Dhamma Thukha Kyaung Street, Hlaing Tsp, 11051</span>
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="call-outline"></ion-icon>
                    <span>(+95) 97770003</span>
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="mail-outline"></ion-icon>
                    <span></span>
                </div>
            </div>


        </div>
        <!-- Start  Company profile info Section  -->

        <div class="w-3/4 h-64 bg-gray-800 border-gray-200 rounded my-5">
            <div class="absolute w-46 h-46  bg-[#F7F7F7] mx-16 my-12">
                <img class=" w-40 h-40" src="../resources/img/common/company Logo/MAGAR GROUP.png" alt="company Logo" />
            </div>
            <div class="absolute w-2/4 h-46 left-1/4 mx-40 my-12 text-white font-medium">
                <div class="font-bold text-2xl mb-8">
                    IME PROPERTY Estate Co.,Ltd
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="person-outline"></ion-icon>
                    <span>Corner of Kabar Aye Pagoda Road and Kanbe Road, Shop 5, The Central Boulevard, Yankin
                        Township, Yangon, Myanmar.</span>
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="call-outline"></ion-icon>
                    <span>(+95) 1 4700 111</span>
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="mail-outline"></ion-icon>
                    <span>
                        info@margaglobal.com
                    </span>
                </div>
            </div>


        </div>
        <!-- Start  Company profile info Section  -->

    </div>

    <!-- End Search Company name Section  -->
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






    </body>

</html>