<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/css/dist/output.css" rel="stylesheet" />

    <title>Dashboard</title>

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
 <!-- heading navigation -->
 <?php include '../commonView/menu.php' ?>
    <div class=" flex flex-col items-center p-4 pt-20 sm:ml-64">
        <h1 class="  font-bold text-4xl mt-5 mb-12 tracking-wide">Edit Collaborator Payment</h1>
        <form class="relative">
            <div class="grid grid-cols-2 gap-20 ">
                <div class="grid grid-rows-4 gap-5">
                    <div class=" lg:w-72   w-28">
                        <label for="gc_id"
                            class="block  mb-2 text-lg font-semibold text-gray-500 dark:text-white">
                            Collaborator Name</label>
                        <select name="gc_id" class="lg:w-72   w-28 px-5 py-2.5 rounded-lg  border-2 border-gray-300">
                            <option value="" disabled selected>Select Company Name</option>
                            <option value="" selected>TPL Myanmar Real Estate & Service Co.,Ltd</option>
                            <option value="">SHWE TAUNG Real Estate Co.,Ltd</option>
                            <option value="">IME PROPERTY Estate Co.,Ltd</option>
                            <option value="">MAGAR GROUP Co.,Ltd</option>
                        </select>
                    </div>
                    <div class=" lg:w-72   w-28">
                        <label for="sduration_id"
                            class="block  mb-2 text-lg font-semibold text-gray-500 dark:text-white">
                            Service Duration</label>
                        <select name="sduration_id" class="lg:w-72   w-28 px-5 py-2.5 rounded-lg  border-2 border-gray-300">
                            <option value="" disabled selected>Select Duration</option>
                            <option value="" selected>6 months</option>
                            <option value="">1 year</option>
                            <option value="">3 year</option>
                        </select>
                    </div>
                    <div class=" lg:w-72   w-28">
                        <label for="spackage_id"
                            class="block mb-2 text-lg font-semibold text-gray-500 dark:text-white">
                            Service Package</label>
                        <select name="spackage_id" class="lg:w-72   w-28 px-5 py-2.5 rounded-lg  border-2 border-gray-300">
                            <option value="" disabled selected>Select Package</option>
                            <option value="" selected>Premium</option>
                            <option value="">Normal</option>
                        </select>
                    </div>
                    <div class="flex lg:w-72 w-30">
                        <div class="w-40 mr-4">
                            <label for="pcash_amount"
                                class="block mb-2 text-lg font-semibold text-gray-500 dark:text-white">
                                Cash Amount</label>
                            <input type="text" name="pcash_amount" id=""
                                class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="300000">
                        </div>
                        <div class=" relative top-8  w-28">
                            <select name="pcash_unit" class="lg:w-28 w-14 px-5 py-2.5 rounded-lg  border-2 border-gray-300">
                                <option value="" disabled selected>Unit</option>
                                <option value="">$</option>
                                <option value="" selected>Kyats</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid grid-rows-4 gap-5">
                    <div class="   lg:w-72 w-28">
                        <label for="pcash_payer_name"
                            class="block  mb-2 text-lg font-semibold text-gray-500 dark:text-white">
                            Payer Name</label>
                        <input type="text" name="pcash_payer_name" id=""
                            class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="John">
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="pcash_phone" class="block mb-2 text-lg font-semibold text-gray-500 dark:text-white">
                            Payer Phone</label>
                        <input type="text" name="pcash_phone" id=""
                            class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="09888234765">
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="pcash_recipient_name" class="block mb-2 text-lg font-semibold text-gray-500 dark:text-white">
                            Recipient Name</label>
                        <input type="text" name="pcash_recipient_name" id=""
                            class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="Mary">
                    </div>
                </div>
                <div class=" my-16">
                    <a href="./collaborator_service_cash_in.php" type="submit" class="mr-16 text-xl font-bold text-white bg-darkGreen hover:bg-blue-800 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-xl rounded-lg text-medium px-8 py-2 text-center 
                    dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wide">
                       Update </a>
                    <a href="./financial_collaborator_list.php" type="" class=" text-xl font-bold text-darkGreen border-2 border-green-700 bg-transparent hover:bg-alert hover:text-white
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-xl rounded-lg text-medium  px-7 py-2 text-center 
                    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 tracking-wide">
                        Cancle</a>
                </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>