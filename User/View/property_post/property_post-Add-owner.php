<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Property Post Form</title>
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

      
        .sell{
            color:rgb(20, 184, 166 ) !important;
        }
        
    </style>
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
    <link href="../resources/css/dist/output.css" rel="stylesheet">

    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-[#F7F7F7]">
    <!-- Navigation -->
    <?php include '../header/header.php' ?>
    <!-- Navigation -->
    <!-- Start Property Post Add Form -->
    <div class="flex flex-col w-full items-center justify-evenly my-10">
        <h1 class="mb-16 font-semibold text-5xl text-center " style="font-family: 'Playfair Display';">
            Add Property Post
        </h1>

        <form class="w-3/5 mx-auto  my-10 ">
            <!-- Start Property Select photo -->
            <div class=" mb-5">


            </div>
            <!-- End Property Select photo -->

            <div class="grid md:grid-cols-2 md:gap-12 ">
                <!-- Start Property Info form -->
                <div class="flex flex-col   ">
                    <!-- Start Property Type-->
                    <div class="mb-5">
                        <label for="p_type" class="w-full block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Property Type</label>
                        <select name="p_type" class="lg:w-72 w-28 px-5 py-2.5 rounded-lg  border-2 border-gray-300">
                            <option value="" disabled selected>Select Property Type</option>
                            <option value="">Apartment</option>
                            <option value="">Commercial</option>
                            <option value="">Condo</option>
                            <option value="">House</option>
                            <option value="">Other</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="p_floor_level" class="w-full block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Floor Level</label>
                        <select name="p_floor_level" class="lg:w-72 w-28 px-5 py-2.5 rounded-lg border-2 border-gray-300">
                            <option value="" disabled selected>Select Floor Level</option>
                            <option value="">1st floor</option>
                            <option value="">2nd floor</option>
                            <option value="">3rd floor</option>
                            <option value="">4th floor</option>
                            <option value="">5th floor</option>
                            <option value="">Over 6th floor</option>
                            <option value="">Over 8th floor</option>
                            <option value="">Over 10th floor</option>
                        </select>
                    </div>
                    <!-- End Property Type-->

                    <!-- Start Offer  Type-->
                    <div class="mb-3 lg:w-72 w-28 ">
                        <div class="  mb-4">
                            <label for="p_offer" class="w-full block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                                Offer Type</label>
                            <fieldset class="flex  my-4">
                                <div class="flex ">
                                    <input id="offer-option-1" type="radio" name="offer" value="" class="w-3 h-3 border-gray-300 focus:ring-2 focus:ring-green-300 dark:focus:ring-green-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                                    <label for="offer-option-1" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Rent
                                    </label>
                                </div>

                                <div class="flex mx-10">
                                    <input id="offer-option-2" type="radio" name="offer" value="Germany" class="w-3 h-3 border-gray-300 focus:ring-2 focus:ring-green-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="country-option-2" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Sale
                                    </label>
                                </div>

                            </fieldset>

                        </div>
                        <div class=" mb-4">
                            <label for="p_duration" class="w-full block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                                Duration</label>
                            <fieldset class="flex my-4">

                                <div class="flex mr-4">
                                    <input id="duration-option-1" type="radio" name="duration" value="" class="w-3 h-3 border-gray-300 focus:ring-2 focus:ring-green-300 dark:focus:ring-green-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                                    <label for="duration-option-1" class=" block ms-2  text-sm font-thin text-gray-900 dark:text-gray-300">
                                        Per day
                                    </label>
                                </div>

                                <div class="flex mr-4">
                                    <input id="duration-option-2" type="radio" name="duration" value="" class="w-3 h-3 border-gray-300 focus:ring-2 focus:ring-green-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="duration-option-2" class="block ms-2 text-sm font-thin text-gray-900 dark:text-gray-300">
                                        Per month
                                    </label>
                                </div>
                                <div class="flex ">
                                    <input id="duration-option-3" type="radio" name="duration" value="" class="w-3 h-3 border-gray-300 focus:ring-2 focus:ring-green-300 dark:focus:ring-green-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                                    <label for="duration-option-3" class="w-20 block ms-2  text-sm font-thin text-gray-900 dark:text-gray-300">
                                        Per year
                                    </label>
                                </div>

                            </fieldset>

                        </div>
                    </div>
                    <!-- Start Offer  Type-->

                    <!-- Start Price-->
                    <div class="flex lg:w-72 w-42  mb-5">

                        <div class="lg:w-40 w-28 lg:mr-10 mr-4">
                            <label for="p_price" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                                Price</label>
                            <input type="text" name="p_price" class="w-full    bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                            block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="30,000,000">
                        </div>
                        <div class="lg:w-30 w-16">
                            <label for="p_price_unit" class=" block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                                Unit</label>
                            <select name="p_price_unit" class="lg:w-30 w-24 px-2.5 py-2.5 rounded-lg  border-2 border-gray-300">
                                <option value="" disabled selected>Price Unit</option>
                                <option value="">Kyats</option>
                                <option value="">$</option>
                            </select>
                        </div>

                    </div>
                    <!-- End Price-->
                    <!-- Start Bedroom-->
                    <div class="mb-5">
                        <label for="p_bedroom" class="w-full block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Bedroom</label>
                        <select name="p_bedroom" class="lg:w-72 w-28 px-5 py-2.5 rounded-lg  border-2 border-gray-300">
                            <option value="" disabled selected>Select No. of Bedroom</option>
                            <option value="">1 Bedroom</option>
                            <option value="">2 Bedrooms</option>
                            <option value="">3 Bedrooms</option>
                            <option value="">4 Bedrooms</option>
                            <option value="">5 Bedrooms</option>
                            <option value="">Over 6 Bedrooms</option>
                            <option value="">Over 8 Bedrooms</option>
                            <option value="">Over 10 Bedrooms</option>
                        </select>
                    </div>
                    <!-- End Bedroom-->

                    <!-- Start Property Size Area-->
                    <div class=" lg:w-72 w-40 justify-evenly mb-5">
                        <label for="p_size" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Size</label>

                        <div class=" flex lg:w-72  mb-4">
                            <input type="text" name="p_width" id="" class=" w-24  lg:mr-10 mr-4  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                            block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" width">
                            <input type="text" name="p_length" id="" class="  w-24    bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" length">
                        </div>
                        <select name="p_size_unit" class="lg:w-72 w-28 px-2.5 py-2.5 rounded-lg  border-2 border-gray-300">
                            <option value="" disabled selected>Select Area Unit</option>
                            <option value="">Square Feet</option>
                            <option value="">Meter Square</option>
                        </select>
                    </div>

                    <!-- End Property Size Area-->

                    <!-- Start Property Township -->
                    <div class="mb-5">
                        <label for="p_township" class="w-full block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Township</label>
                        <select name="p_township" class="lg:w-72 w-28 px-5 py-2.5 rounded-lg  border-2 border-gray-300">
                            <option value="" disabled selected>Select Township</option>
                            <option value="">Yangon>KyiMyinTie</option>
                            <option value="">Yangon>South Oakalapa</option>
                            <option value="">Yangon>North Oakalapa</option>
                            <option value="">Mandalay>Chan Mya Tharzi</option>
                            <option value="">Mandalay>Pyi Gyi Tagon</option>
                            <option value="">Shan State>Naung Cho</option>
                            <option value="">Shan State> Kalaw</option>

                        </select>
                    </div>
                    <!-- End Property Township -->

                    <!-- End Property Info form -->

                </div>
                <!-- Start Owner Info form -->
                <div class="flex flex-col  ">

                    <div class="mb-5 lg:w-72 w-28">
                        <label for="p_owner_name" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Owner Name</label>
                        <input type="text" name="p_owner_name" id="oName" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" Enter your Name">
                    </div>
                    <div class="mb-5 lg:w-72 w-28">
                        <label for="p_owner_nrc" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            National ID</label>
                        <input type="text" name="p_owner_nrc" id="" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" Enter your NRC Number">
                    </div>
                    <div class="mb-5 lg:w-72 w-28">
                        <label for="p_owner_phone" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Phone Number</label>
                        <input type="text" name="p_owner_phone" id="" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" 09 888777123">
                    </div>
                    <div class="mb-5 lg:w-72 w-28">
                        <label for="p_owner_email" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Phone Number</label>
                        <input type="text" name="p_owner_email" id="" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" youremailname@gmail.com">
                    </div>
                    <div class="mb-5 lg:w-72 w-28">
                        <label for="caddress" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Your
                            Note</label>
                        <textarea name="caddress" id="caddress" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write note Here....."></textarea>
                    </div>


                </div>
                <!-- End Owner Info form -->

            </div>


            <div class="mb-2 w-full flex flex-col  relative">
                <div class="w-5/6 relative mt-7 mb-2">
                    <label for="p_map_location" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                        Location Map</label>
                    <div class=" flex ">
                        <input type="text" name="p_map_location" id="" class="w-3/5 mr-16  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for NearBy Name ">
                        <button type="submit" class="text-white bg-green-700 hover:bg-green-800 
                            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center 
                            dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Search</button>
                    </div>
                </div>
                <div class="w-5/6 mb-5 items-center justify-center ">
                   
                    <!-- map -->
                    <div class="h-32 w-full lg:w-[700px] lg:h-72 top-3.5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30549.300087395244!2d96.17693643476562!3d16.8430906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193f51faa68ff%3A0x72868c60b69532c4!2sEx%3BbraiN%20Office!5e0!3m2!1sen!2smm!4v1702148429176!5m2!1sen!2smm" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
                                    class="h-32 w-full lg:w-[680px] lg:h-72 border border-black rounded-lg shadow-[rgba(6,_24,_44,_0.4)_0px_0px_0px_2px,_rgba(6,_24,_44,_0.65)_0px_4px_6px_-1px,_rgba(255,_255,_255,_0.08)_0px_1px_0px_inset]"></iframe>
                            </div>
                </div>
                <!-- End Map Location  -->



                <!-- Start Facilities  -->
                <div class="w-5/6 relative mb-2">
                    <label for="p_map_location" class="block mb-5 text-sm font-semibold text-gray-900 dark:text-white">
                        Additional Facilities</label>
                    <div class="grid md:grid-cols-3 md:gap-2 ">
                        <div class="flex items-center mb-2">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Air-con</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Washing Machine</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Refrigerator</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                24-hours security</label>
                        </div>
                        <div class="flex items-center ">
                            <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Car Parking</label>
                        </div>
                        <div class="flex items-center ">
                            <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Swimming Pool</label>
                        </div>
                        <div class="flex items-center ">
                            <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Lift</label>
                        </div>
                        <div class="flex items-center ">
                            <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Generator</label>
                        </div>
                        <div class="flex items-center ">
                            <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Shopping Center</label>
                        </div>
                    </div>
                </div>
                <!-- End Facilities  -->

                <div class="w-5/6 relative my-5">
                    <div class="mb-5 lg:w-full w-40">
                        <label for="p_detail" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Detail Description</label>
                        <textarea name="p_detail" id="" rows="4" class="block p-2.5 lg:w-full  h-40 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write note Here....."></textarea>
                    </div>
                </div>

                <div class="w-5/6 relative my-5">
                    <button type="submit" class="text-white bg-green-600 hover:bg-green-800 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium
                    px-2 lg:px-8 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Submit</button>
                    <button type="" class="mx-16 text-green-700 border-2 border-green-700 bg-transparent hover:bg-green-800 hover:text-black
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium 
                    px-2 lg:px-7 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Cancle</button>

                    <button type="" class="absolute right-0 bg-red-600 hover:bg-red-800 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium text-white 
                    px-2 lg:px-8 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Test View</button>
                </div>
            </div>
        </form>
<?php include '../footer/footer.php' ?>
<script src="../resources/js/photo_add.js"></script>
</body>

</html>