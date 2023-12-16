<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/css/dist/output.css" rel="stylesheet" />


    <title>Dashboard</title>

    <script src="../resources/js/financial_total_filter.js" defer></script>

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <!-- heading navigation -->
    <?php include '../common/menu.php' ?>
    <div class="pt-20 sm:ml-64">
        <!--Start  Financial Total Filter Date -->
        <div class="flex flex-col items-center justify-center tracking-wider">
            <h1 class="text-center font-bold text-2xl mt-5 mb-12">Financial List </h1>
            <form class="w-4/5">
                <div class="grid grid-cols-3 gap-20  mb-4">
                    <div class="flex flex-col lg:w-72 w-28">
                        <label for="start_date" class="block mb-2 text-lg font-semibold text-gray-500 dark:text-white">
                            Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="  ">
                    </div>
                    <div class="flex flex-col lg:w-72 w-28">
                        <label for="end_date" class="block mb-2 text-lg font-semibold text-gray-500 dark:text-white">
                            End Date</label>
                        <input type="date" name="start_date" id="start_date" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="  ">
                    </div>
                    <div class="relative top-9 lg:w-72 w-28 ">
                        <button type="submit" class="lg:w-1/2 w-20 py-2  text-white bg-darkGreen hover:bg-blue-800 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg  text-center 
                    dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wider">
                            Search
                        </button>
                    </div>

                </div>

            </form>
        </div>
        <!--End  Financial Total Filter Date -->

        <!--Start  Financial Total View -->
        <div class="w-full grid lg:grid-cols-3 grid-cols-1 gap-3 bg-secondary mt-5 p-5 px-20 ">
            <!--Start  Date Section -->
            <div class="flex flex-col mr-20 ">
                <div class="grid grid-cols-2 mb-3">
                    <p class="text-sm text-white">From</p>
                    <p class="text-sm text-gray-400 text-left">2020/08/01</p>
                </div>
                <div class="grid grid-cols-2 ">
                    <p class="text-sm text-white ">To</p>
                    <p class="text-sm text-gray-400 text-left ">2020/10/01</p>
                </div>
            </div>
            <!--End  Date Section -->

            <!--Start  Financial Type Section -->
            <div class="flex flex-col  ">
                <div class="grid grid-cols-2 mb-3">
                    <p class="text-sm text-white">Rent List</p>
                    <p class="font-semibold text-right text-sm text-goldYellow">30,000</p>
                </div>
                <div class="grid grid-cols-2">
                    <p class="text-sm text-white ">Sale List</p>
                    <p class="font-semibold text-right text-sm  text-goldYellow ">400,000 </p>
                </div>
            </div>
            <!--End  Financial Type Total Section -->

            <!--Start  Financial All Total Section -->
            <div class="grid grid-cols-2 pl-1  ">
                <p class="text-sm text-white text-right">All Total :</p>
                <p class="right-0 font-semibold text-right text-sm text-alert ">30,000,000,000</p>
            </div>
            <!--End  Financial All Total Section -->
        </div>
        <!--End  Financial Total View -->

        <!--Start Financial Type Tag button -->
        <div class="flex justify-center mt-8 mb-16">
            <div class="mx-4 ">
                <input checked id="rent-radio" type="radio" value="" name="financial_type" class="hidden  w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="rent-radio" class="relative px-10 py-2 text-xl  text-white font-medium rounded-lg   bg-goldYellow hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300   dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wider">
                    <ion-icon class="text-xl mr-2" name="pricetag"></ion-icon>
                    Rent
                </label>
            </div>
            <div class="mx-4 ">
                <input id="sale-radio" type="radio" value="" name="financial_type" class="hidden  w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="sale-radio" class="relative px-10 py-2 text-lg  text-white font-medium rounded-lg   bg-alert hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300   dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wider">
                    <ion-icon class="text-xl mr-2" name="pricetag"></ion-icon>
                    Sale
                </label>
            </div>
           
        </div>
        <!--Start Financial Type Tag button -->

    </div>

    <!--Start  Financial Rent Section -->
    <div id="rent" class="  px-10    sm:ml-64 flex flex-col justify-center items-center">
        <!--Start  Financial All Total Section -->
        <div class="py-4">
            <span class="mr-4 font-bold text-xl text-secondary dark:text-white text-right">Rent List :</span>
            <span class=" font-bold text-left text-xl text-alert ">30,000,000,000</span>
        </div>
        <!--End  Financial All Total Section -->
        <!--Start  Financial Rent  List Table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            No
                        </th>
                        <th scope="col" class="px-4 py-3 ">
                            Property Code
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Payer Name
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Cash Amount
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Detail
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody class="font-medium tracking-wide">
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            01
                        </th>
                        <td class="px-4 py-4">
                            GR-1
                        </td>
                        <td class="px-4 py-4">
                            Ko Ko Zay
                        </td>
                        <td class="px-4 py-4 font-semibold text-xl  text-alert">
                            <span>300,000</span>
                            <span>Kyats</span>
                        </td>
                        <td class="px-4 py-4">
                            31/12/2023
                        </td>
                        <td class="px-4 py-4 flex justify-center">
                            <a href="./rent_service_cash_in.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                            </a>
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
                            GR-2
                        </td>
                        <td class="px-4 py-4">
                            Min Soe Moe
                        </td>
                        <td class="px-4 py-4 font-semibold text-xl  text-alert">
                            <span>30,000</span>
                            <span>$</span>
                        </td>
                        <td class="px-4 py-4">
                            31/12/2023
                        </td>
                        <td class="px-4 py-4 flex justify-center">
                            <a href="./rent_service_cash_in.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                            </a>
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
                            GR-3
                        </td>
                        <td class="px-4 py-4">
                            Thi Thi Hlaing
                        </td>
                        <td class="px-4 py-4 font-semibold text-xl  text-alert">
                            <span>10,000,000</span>
                            <span>Kyats</span>
                        </td>
                        <td class="px-4 py-4">
                            31/12/2023
                        </td>
                        <td class="px-4 py-4 flex justify-center">
                            <a href="./rent_service_cash_in.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                            </a>
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
                            GR-4
                        </td>
                        <td class="px-4 py-4">
                            Tan Wadi Aung
                        </td>
                        <td class="px-4 py-4 font-semibold text-xl  text-alert">
                            <span>70,000</span>
                            <span>$</span>
                        </td>
                        <td class="px-4 py-4">
                            31/12/2023
                        </td>
                        <td class="px-4 py-4 flex justify-center">
                            <a href="./rent_service_cash_in.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                            </a>
                        </td>
                        <td class="px-4 py-4 text-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--End Financial Rent  List Table -->


    </div>
    <!--End  Financial Rent Section -->

    <!--Start  Financial Sale Section -->
    <div id="sale" class=" hidden px-10  sm:ml-64 flex flex-col items-center ">
        <!--Start  Financial All Total Section -->
        <!--Start  Financial All Total Section -->
        <div class="py-4">
            <span class="mr-4 font-bold text-xl text-secondary dark:text-white text-right">Sale List :</span>
            <span class=" font-bold text-left text-xl text-alert ">30,000,000,000 </span>
        </div>
        <!--End  Financial All Total Section -->

          <!--Start  Financial Sale  List Table -->

          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            No
                        </th>
                        <th scope="col" class="px-4 py-3 ">
                            Property Code
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Payer Name
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Cash Amount
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Detail
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody class="font-medium tracking-wide">
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            01
                        </th>
                        <td class="px-4 py-4">
                            GS-1
                        </td>
                        <td class="px-4 py-4">
                            Ko Ko Zay
                        </td>
                        <td class="px-4 py-4 font-semibold text-xl  text-alert">
                            <span>300,000</span>
                            <span>Kyats</span>
                        </td>
                        <td class="px-4 py-4">
                            31/12/2023
                        </td>
                        <td class="px-4 py-4 flex justify-center">
                            <a href="./sale_service_cash_in.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                            </a>
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
                            GS-2
                        </td>
                        <td class="px-4 py-4">
                            Min Soe Moe
                        </td>
                        <td class="px-4 py-4 font-semibold text-xl  text-alert">
                            <span>30,000</span>
                            <span>$</span>
                        </td>
                        <td class="px-4 py-4">
                            31/12/2023
                        </td>
                        <td class="px-4 py-4 flex justify-center">
                            <a href="./sale_service_cash_in.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                            </a>
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
                            GS-3
                        </td>
                        <td class="px-4 py-4">
                            Thi Thi Hlaing
                        </td>
                        <td class="px-4 py-4 font-semibold text-xl  text-alert">
                            <span>10,000,000</span>
                            <span>Kyats</span>
                        </td>
                        <td class="px-4 py-4">
                            31/12/2023
                        </td>
                        <td class="px-4 py-4 flex justify-center">
                            <a href="./sale_service_cash_in.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                            </a>
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
                            GS-4
                        </td>
                        <td class="px-4 py-4">
                            Tan Wadi Aung
                        </td>
                        <td class="px-4 py-4 font-semibold text-xl  text-alert">
                            <span>70,000</span>
                            <span>$</span>
                        </td>
                        <td class="px-4 py-4">
                            31/12/2023
                        </td>
                        <td class="px-4 py-4 flex justify-center">
                            <a href="./sale_service_cash_in.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                            </a>
                        </td>
                        <td class="px-4 py-4 text-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--End Financial Sale  List Table -->



    </div>
    <!--End  Financial Sale Section -->

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>