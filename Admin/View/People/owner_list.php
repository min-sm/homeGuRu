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
    <?php include '../commonView/menu.php' ?>
    <!--Start  Owner List  -->
    <div class="p-4 pt-20 sm:ml-64">
        <h1 class="text-center font-bold text-2xl py-7">Owner List</h1>
        <div class=" relative mb-5">
            <!--Start Owner List  Table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ID
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
                                GO-1
                            </td>
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
                                <a href="./owner_detail.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
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
                                GO-2
                            </td>
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
                                <a href="./owner_detail.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
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
                                GO-3
                            </td>
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
                                <a href="./owner_detail.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
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
                                GO-4
                            </td>
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
                                <a href="./owner_detail.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
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
            <!--End  Owner List   Table -->
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
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
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
    <!--End  Owner   List -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>