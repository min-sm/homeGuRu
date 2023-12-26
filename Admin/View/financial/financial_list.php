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

<body class="bg-primary dark:bg-gray-600">
    <!-- heading navigation -->
    <?php include '../commonView/menu.php' ?>
    <div class="p-4 pt-20 sm:ml-64">
        <!--Start  Financial Filter Tag -->
        <div class="flex flex-col items-center justify-center tracking-wider">
            <h1 class=" font-bold text-5xl mt-5 mb-12">Financial Filter </h1>
            <div class="flex">
                <a href="./financial_list_filter.php" type="submit" class="lg:mr-20 mr-10  text-white bg-darkGreen hover:bg-blue-800 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl lg:px-14 px-8 py-2 text-center 
                    dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wider">
                    Financial List
                </a>
                <a href="./financial_total_filter.php" type="submit" class="text-white bg-darkGreen hover:bg-blue-800 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl lg:px-14 px-8 py-2 text-center 
                    dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wider">
                    Financial Total
                </a>
            </div>
        </div>
        <!--End  Financial Filter Tag -->


        <!--Start  Financial Sale  List Table -->
        <h1 class=" text-center font-bold text-4xl  mt-20 mb-2">Sale Service Cash In</h1>
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
                        </td>>
                        <td class="px-4 py-4 text-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class=" relative h-20 mb-2">
            <div class=" flex mb-3 absolute top-7 right-0 ">
                <a href="./financial_sale_list.php" type="submit" class="mr-5 text-white bg-blue-800 opacity-70 hover:opacity-100  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2.5 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All</a>
                <a href="./financial_sale_add.php" type="submit" class=" text-goldYellow bg-primary border-4 border-goldYellow hover:text-white hover:bg-goldYellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    + Add New</a>
            </div>
        </div>

        <!--End Financial Sale  List Table -->

        <!--Start  Financial Rent  List Table -->
        <h1 class=" text-center font-bold text-4xl  mt-20 mb-2">Rent Service Cash In</h1>
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
                </tbody>
            </table>
        </div>
        <div class=" relative h-20 mb-2">
            <div class=" flex mb-3 absolute top-7 right-0 ">
                <a href="./financial_rent_list.php" type="submit" class="mr-5 text-white bg-blue-800 opacity-70 hover:opacity-100  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2.5 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All</a>
                <a href="./financial_sale_add.php" type="submit" class=" text-goldYellow bg-primary border-4 border-goldYellow hover:text-white hover:bg-goldYellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    + Add New</a>
            </div>
        </div>
        <!--End Financial Rent  List Table -->

        <!--Start Financial Collaborator  List Table -->

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h1 class=" text-center font-bold text-4xl  mt-20 mb-2">Collaborator Service Cash In</h1>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            No
                        </th>
                        <th scope="col" class="px-4 py-3 ">
                            Company Name
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
                            TPL Myanmar Real Estate & Service Co.,Ltd
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
                            <a href="./collaborator_service_cash_in.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
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
                            SHWE TAUNG Real Estate Co.,Ltd
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
                            <a href="./collaborator_service_cash_in.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
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
                            IME PROPERTY Estate Co.,Ltd-3
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
                            <a href="./collaborator_service_cash_in.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
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
        <div class=" relative h-20 mb-2">
            <div class=" flex mb-3 absolute top-7 right-0 ">
                <a href="./financial_collaborator_list.php" type="submit" class="mr-5 text-white bg-blue-800 opacity-70 hover:opacity-100  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2.5 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All</a>
                <a href="./financial_collaborator_add.php" type="submit" class=" text-goldYellow bg-primary border-4 border-goldYellow hover:text-white hover:bg-goldYellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    + Add New</a>
            </div>
        </div>
        <!--End Financial Collaborator List Table -->


    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>