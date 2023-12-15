<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/b9864528d4.js" crossorigin="anonymous"></script>
    <script>
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../resources/css/property_post_add_form.css">
    <title>Property Detail</title>

    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet" />

    <!-- JS -->
    <script src="../resources/js/modal.js" defer></script>
    <script src="../resources/js/detail.js" defer></script>
</head>

<body class="bg-primary dark:bg-gray-700 tracking-wide">
    <!-- heading navigation -->
    <?php include '../commonView/menu.php' ?>

    <!-- main body -->
    <div class="p-4 pt-20 sm:ml-64">
        <!-- add property post -->
        <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">Property Details</h1>

        <!-- image section -->
        <div class="flex flex-col lg:flex-row items-center sm:items-start gap-4 text-black dark:text-white overflow-x-auto">
            <!--  images -->
            <div class="image-label-container">
                <div class="image-container property-img" style="background-image: url('../resources/img/house/entrance-hall.jpg');"></div>
                <p>entrance-hall.jpg</p>
            </div>
            <div class="image-label-container">
                <div class="image-container property-img" style="background-image: url('../resources/img/house/dining-room.jpg');"></div>
                <p>dining-room.jpg</p>
            </div>
            <div class="image-label-container">
                <div class="image-container property-img" style="background-image: url('../resources/img/house/kitchen.jpg');"></div>
                <p>kitchen.jpg</p>
            </div>
            <div class="image-label-container">
                <div class="image-container property-img" style="background-image: url('../resources/img/house/living-room.jpg');"></div>
                <p>living-room.jpg</p>
            </div>
            <div class="image-label-container">
                <div class="image-container property-img" style="background-image: url('../resources/img/house/study-room.jpg');"></div>
                <p>study-room.jpg</p>
            </div>
        </div>

        <!-- detailed information -->
        <div class="flex items-center justify-center mt-4 flex-col space-y-4">
            <!-- property type -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Property Type</span>
                    <span>Condo</span>
                </div>
            </div>
            <!-- Floor level -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Floor Level</span>
                    <span>10</span>
                </div>
            </div>
            <!-- Offer Type -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Offer Type</span>
                    <span>Rent</span>
                </div>
            </div>
            <!-- Duration -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Duration</span>
                    <span>per Year</span>
                </div>
            </div>
            <!-- Price -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Price</span>
                    <span>4</span>
                </div>
            </div>
            <!-- Price Type -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Price Type</span>
                    <span>Dollar $</span>
                </div>
            </div>
            <!-- Size Unit -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Size Unit</span>
                    <span>foot (ft)</span>
                </div>
            </div>
            <!-- Size -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Size</span>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center flex-col">
                            <p class="text-sm font-thin">Width</p>
                            <p>60'</p>
                        </div>
                        <div class="flex items-center flex-col">
                            <p class="text-sm font-thin">Length</p>
                            <p>220'</p>
                        </div>
                        <p>13200 ft<sup>2</sup></p>
                    </div>
                </div>
            </div>
            <!-- Township -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Township</span>
                    <span>Bahan</span>
                </div>
            </div>
            <!-- Location -->
            <div class="flex w-80 lg:w-3/4 text-black dark:text-white unimportant-detail ">
                <span class="bolder text-lg">Location</span>
            </div>
            <!-- map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30549.300087395244!2d96.17693643476562!3d16.8430906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193f51faa68ff%3A0x72868c60b69532c4!2sEx%3BbraiN%20Office!5e0!3m2!1sen!2smm!4v1702575912329!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-3/4 h-72 unimportant-detail  block-unimportant"></iframe>
            <!-- features -->
            <div class="w-80 lg:w-3/4 text-black dark:text-white unimportant-detail  block-unimportant">
                <p class="bolder text-lg mb-2">Additional Features</p>

                <div class="grid grid-cols-3 lg:text-base text-sm px-2 sm:px-0">
                    <div>
                        <ul class="list-disc list-inside text-start">
                            <li>24 hours security</li>
                            <li>Air con</li>
                            <li>Lift</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="list-disc list-inside text-start">
                            <li>Washing Machine</li>
                            <li>Car parking</li>
                            <li>Generator</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="list-disc list-inside text-start">
                            <li>Refrigerator</li>
                            <li>Swimming Pool</li>
                            <li>Shopping Center</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- detailed description -->
            <div class=" w-80 lg:w-3/4 text-black dark:text-white space-y-2 unimportant-detail  block-unimportant">
                <p class="bolder text-lg">Detailed Description</p>
                <p class="tracking-wider leading-6">This is a 5 Bed House in Kamayut. The asking price is 4800 lakhs per month, and the square feet is 3200. Inside the property, there are three bedrooms with ensuites and two single bedrooms. The property will come unfurnished or furnished with all essentials for daily living. This includes items such as a TV, sofa set, coffee table, dining table, chairs, beds, mattresses, washing machine & a fridge freezer. This house comes with access car parking and a backup generator for 24-hour electricity. For more information about Myanmar Real Estate contact us; Phone, Viber & telegram : +959-980636388 Email : myanmarproperties3@gmail.com</p>
            </div>

            <!-- line break -->
            <div id="line-break-section" class="w-11/12 lg:w-3/4 flex justify-evenly items-center cursor-pointer transition-all duration-1000">
                <hr class="w-16 lg:w-64 h-1 bg-paleGray  my-3">
                <i id="line-break-arrow" class="fa-solid fa-circle-up text-black dark:text-white text-base lg:text-2xl transform transition duration-300"></i>
                <hr class="w-16 lg:w-64 h-1 bg-paleGray  my-3">
            </div>

            <!-- Owner Name -->
            <div class="flex w-80 lg:w-3/4 flex-col">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Owner Name</span>
                    <span>Min Soe Moe</span>
                </div>
            </div>
            <!-- National ID -->
            <div class="flex w-80 lg:w-3/4 flex-col">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Naitonal ID</span>
                    <span>12/ TaTaTa(N) 123456</span>
                </div>
            </div>
            <!-- Phone Number -->
            <div class="flex w-80 lg:w-3/4 flex-col">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Phone Number</span>
                    <span>09123456678</span>
                </div>
            </div>
            <!-- Email Address -->
            <div class="flex w-80 lg:w-3/4 flex-col">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="bolder text-lg">Email Address</span>
                    <span>minsoemoe999@gmail.com</span>
                </div>
            </div>
            <!-- notes -->
            <div class=" w-80 lg:w-3/4 text-black dark:text-white space-y-2">
                <p class="bolder text-lg">Note</p>
                <p class="tracking-wider leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus dolores facilis quasi? Mollitia velit ut enim ratione doloribus doloremque dolorem.</p>
            </div>

            <!-- buttons -->
            <div class="w-3/4 flex gap-5">
                <button class="bg-darkGreen py-2 px-6 rounded-lg border text-sm sm:text-base text-white">Make Appointment</button>
                <button class="bg-alert py-2 px-6 rounded-lg border text-sm sm:text-base text-white ">Decline</button>
                <button class="bg-goldYellow py-2 px-6 rounded-lg border text-sm sm:text-base text-white flex justify-between"><span class="inline-flex items-center justify-center mr-3 w-3 h-3 p-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">13</span>Interest</button>
            </div>
        </div>

        <!--Start  Interest People  List -->
        <div class="pt-4">
            <h1 class="text-center font-bold text-2xl mt-5 text-black dark:text-white">Interest People List</h1>

            <div class=" relative mb-5">
                <!--Start  Interest People Button  -->
                <div class=" relative h-12 ">
                    <a href="./interest_people_add.php" type="submit" class="absolute right-10 text-goldYellow bg-primary border-2 border-goldYellow hover:text-white hover:bg-darkGreen focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        + Add New</a>
                </div>
                <!--End Interest People Button  -->

                <!--Start Interest People  List Table -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Phone
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Detail
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    01
                                </th>
                                <td class="px-6 py-4">
                                    Ko Ko Zay
                                </td>
                                <td class="px-6 py-4">
                                    09980636388
                                </td>
                                <td class="px-6 py-4">
                                    kkzedn99@gmail.com
                                </td>
                                <td class="px-6 py-4">
                                    2023/12/03 12:20 PM
                                </td>
                                <td class="px-4 py-4 flex justify-center">
                                    <a href="./interest_people_detail.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                    <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                                </td>
                            </tr>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    02
                                </th>
                                <td class="px-6 py-4">
                                    Min Soe Moe
                                </td>
                                <td class="px-6 py-4">
                                    09757346631
                                </td>
                                <td class="px-6 py-4">
                                    minsoemoe999@gmail.com
                                </td>
                                <td class="px-6 py-4">
                                    2023/12/03 1:00 PM
                                </td>
                                <td class="px-4 py-4 flex justify-center">
                                    <a href="./interest_people_detail.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                                </td>
                            </tr>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    03
                                </th>
                                <td class="px-6 py-4">
                                    Thi Thi Hlaing
                                </td>
                                <td class="px-6 py-4">
                                    09971536999
                                </td>
                                <td class="px-6 py-4">
                                    thithihlaing9999@gmail.com
                                </td>
                                <td class="px-6 py-4">
                                    2023/12/03 3:15PM
                                </td>
                                <td class="px-4 py-4 flex justify-center">
                                    <a href="./interest_people_detail.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                                </td>
                            </tr>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    04
                                </th>
                                <td class="px-6 py-4">
                                    Tan Wadi Aung
                                </td>
                                <td class="px-6 py-4">
                                    09980636388
                                </td>
                                <td class="px-6 py-4">
                                    tanwadiaung23@gmail.com
                                </td>
                                <td class="px-6 py-4">
                                    2023/12/03 05:00 PM
                                </td>
                                <td class="px-4 py-4 flex justify-center">
                                    <a href="./interest_people_detail.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--End  Interest People  List Table -->
            </div>
            <!--Start  pagination -->
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
            <!--End  pagination -->
        </div>
        <!--End  Interest People  List -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

        <!-- The Modal -->
        <div id="myModal">
            <!-- Modal content -->
            <div id="modal-content" class="flex items-center justify-center">
                <img id="display-full-img" class="w-4/5 h-auto lg:w-auto lg:h-[80vh]" src="" />
                <span id="img-description" class="mt-4"></span>
            </div>
        </div>
</body>

</html>