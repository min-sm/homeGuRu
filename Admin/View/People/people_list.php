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
    
   <!--Start  User  List -->
   <div class="p-4 pt-20 sm:ml-64">
        <h1 class=" text-center font-bold text-2xl mt-5 ">User List</h1>

        <div class=" relative mb-5">
            <!--Start   User  List Button  -->
            <div class=" relative h-12 ">
                <a href="./user_list.php" type="submit" class="absolute right-10 text-white bg-goldYellow hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All </a>

            </div>
            <!--End   User List Button  -->
            <!--Start User List  Table -->
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
                                GU-1
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
                                GU-2
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
                            <td class="px-6 py-4">
                                <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                03
                            </th>
                            <td class="px-6 py-4">
                                GU-3
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
                            <td class="px-6 py-4">
                                <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                            </td>
                        </tr>
                      
                    </tbody>
                </table>
            </div>
            <!--End   User List   Table -->
        </div>
    </div>
    <!--End   User  List -->

    <!--Start  Owner List -->
    <div class="p-4 py-7 sm:ml-64">
        <h1 class=" text-center font-bold text-2xl mt-5 ">Owner List</h1>

        <div class=" relative mb-5">
            <!--Start  Owner  List Button  -->
            <div class=" relative h-12 ">
                <a href="./owner_list.php" type="submit" class="absolute right-10 text-white bg-goldYellow hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All </a>

            </div>
            <!--End  Owner  List Button  -->
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
                     
                    </tbody>
                </table>
            </div>
            <!--End  Owner List   Table -->
        </div>
    </div>
    <!--End  Owner  List -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>