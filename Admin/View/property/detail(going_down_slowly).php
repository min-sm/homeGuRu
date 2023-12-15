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
    <script src="../resources/js/property_detail.js" defer></script>
    <script src="../resources/js/detail(going_down_slowly).js" defer></script>
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
            <div class="flex items-center justify-center flex-col space-y-4 w-full" id="unimportant-details">
                <!-- property type -->
                <div class="flex w-80 lg:w-3/4 flex-col">
                    <div class="flex items-center justify-between text-black dark:text-white">
                        <span class="bolder text-lg">Property Type</span>
                        <span>Condo</span>
                    </div>
                </div>
                <!-- Floor level -->
                <div class="flex w-80 lg:w-3/4 flex-col">
                    <div class="flex items-center justify-between text-black dark:text-white">
                        <span class="bolder text-lg">Floor Level</span>
                        <span>10</span>
                    </div>
                </div>
                <!-- Offer Type -->
                <div class="flex w-80 lg:w-3/4 flex-col">
                    <div class="flex items-center justify-between text-black dark:text-white">
                        <span class="bolder text-lg">Offer Type</span>
                        <span>Rent</span>
                    </div>
                </div>
                <!-- Duration -->
                <div class="flex w-80 lg:w-3/4 flex-col">
                    <div class="flex items-center justify-between text-black dark:text-white">
                        <span class="bolder text-lg">Duration</span>
                        <span>per Year</span>
                    </div>
                </div>
                <!-- Price -->
                <div class="flex w-80 lg:w-3/4 flex-col">
                    <div class="flex items-center justify-between text-black dark:text-white">
                        <span class="bolder text-lg">Price</span>
                        <span>4</span>
                    </div>
                </div>
                <!-- Price Type -->
                <div class="flex w-80 lg:w-3/4 flex-col">
                    <div class="flex items-center justify-between text-black dark:text-white">
                        <span class="bolder text-lg">Price Type</span>
                        <span>Dollar $</span>
                    </div>
                </div>
                <!-- Size Unit -->
                <div class="flex w-80 lg:w-3/4 flex-col">
                    <div class="flex items-center justify-between text-black dark:text-white">
                        <span class="bolder text-lg">Size Unit</span>
                        <span>foot (ft)</span>
                    </div>
                </div>
                <!-- Size -->
                <div class="flex w-80 lg:w-3/4 flex-col">
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
                <div class="flex w-80 lg:w-3/4 flex-col">
                    <div class="flex items-center justify-between text-black dark:text-white">
                        <span class="bolder text-lg">Township</span>
                        <span>Bahan</span>
                    </div>
                </div>
                <!-- Location -->
                <div class="flex w-80 lg:w-3/4 text-black dark:text-white">
                    <span class="bolder text-lg">Location</span>
                </div>
                <!-- map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30549.300087395244!2d96.17693643476562!3d16.8430906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193f51faa68ff%3A0x72868c60b69532c4!2sEx%3BbraiN%20Office!5e0!3m2!1sen!2smm!4v1702575912329!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-3/4 h-72"></iframe>
                <!-- features -->
                <div class="w-80 lg:w-3/4 text-black dark:text-white">
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
                <div class=" w-80 lg:w-3/4 text-black dark:text-white space-y-2">
                    <p class="bolder text-lg">Detailed Description</p>
                    <p class="tracking-wider leading-6">This is a 5 Bed House in Kamayut. The asking price is 4800 lakhs per month, and the square feet is 3200. Inside the property, there are three bedrooms with ensuites and two single bedrooms. The property will come unfurnished or furnished with all essentials for daily living. This includes items such as a TV, sofa set, coffee table, dining table, chairs, beds, mattresses, washing machine & a fridge freezer. This house comes with access car parking and a backup generator for 24-hour electricity. For more information about Myanmar Real Estate contact us; Phone, Viber & telegram : +959-980636388 Email : myanmarproperties3@gmail.com</p>
                </div>
            </div>

            <!-- line break -->
            <div id="line-break-section" class="w-11/12 lg:w-3/4 flex justify-evenly items-center cursor-pointer transition-all duration-1000">
                <hr class="w-16 lg:w-64 h-1 bg-paleGray my-3">
                <i id="line-break-arrow" class="fa-solid fa-circle-up text-black dark:text-white text-base lg:text-2xl transform transition duration-300"></i>
                <!-- <div id="line-break-arrow" class="triangle"></div> -->

                <hr class="w-16 lg:w-64 h-1 bg-paleGray my-3">
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
            </div>
        </div>
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