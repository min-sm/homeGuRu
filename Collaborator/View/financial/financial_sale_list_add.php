<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>


<?php 
if (!isset($_SESSION["collaboratorId"])) {
    header('Location: ../../View/errors/wrongPath.php');
    exit();
};
?>

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

     <!-- JS -->
     <script src="../../View/resources/js/financial/financial_property_add.js" defer></script>
</head>

<body class="dark:bg-gray-400">
    <!-- heading navigation -->
    <?php include '../common/menu.php' ?>
    <div class=" flex flex-col items-center p-4 pt-20 sm:ml-64">
        <h1 class="  font-bold text-4xl mt-5 mb-12">Sale Payment</h1>
        <form id="pForm" class="relative" action="../../Controller/Financial/SaleListAddController.php" method="post" enctype="multipart/form-data">
            <div class="grid grid-cols-2 gap-20 ">
                <div class="grid grid-rows-4 gap-5">
                    <div class="lg:w-72 w-28">
                        <label for="p_code" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Property Code</label>
                        <input type="text" name="p_code" id="p_code" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" ">
                    </div>
                    <div class="lg:w-72 w-28">
                    <label for="offer" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                        Offer Type</label>
                        <select name="offer" id="offer" class="lg:w-72 w-28 px-5 py-2.5 rounded-lg  border-2 border-gray-300  dark:text-white  dark:bg-gray-600 dark:border-gray-600">
                            <option value="" disabled selected>Select Offer</option>
                            <option   value="1">Rent</option>
                            <option selected value="2">Sale</option>
                        </select>
                    </div>
                    <div class="flex lg:w-72 w-30">
                        <div class="w-40 mr-4">
                            <label for="amount" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                                Cash Amount</label>
                            <input type="text" name="amount" id="amount" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                        </div>

                        <div class=" relative top-7  w-28">
                            <select name="unit" id="unit" class="lg:w-28 w-14 px-5 py-2.5 rounded-lg  border-2 border-gray-300  dark:text-white  dark:bg-gray-600 dark:border-gray-600">
                                <option value="" disabled selected>Unit</option>
                                <option value="1">$</option>
                                <option value="2">Kyats</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid grid-rows-4 gap-5">
                    <div class="   lg:w-72 w-28">
                        <label for="payer_name" class="block ml-5 mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Payer Name</label>
                        <input type="text" name="payer_name" id="payer_name" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="pcash_phone" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Payer Phone</label>
                        <input type="text" name="phone" id="phone" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="recipient_name" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Recipient Name</label>
                        <input type="text" name="recipient_name" id="recipient_name" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    </div>
                </div>
                <div class=" absolute bottom-0 right-0  my-5">
                    <button name="pcash_closed" type="submit" class="mr-4 text-white bg-darkGreen hover:bg-blue-800 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-xl rounded-lg text-medium px-8 py-2 text-center 
                    dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wide">
                        Add </button>
                    <a href="./financial_sale_list.php" type="" class=" text-darkGreen border-2 border-green-700 bg-transparent hover:bg-alert hover:text-white
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-xl rounded-lg text-medium  px-7 py-2 text-center 
                    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 tracking-wide">
                        Cancle</a>
                </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>