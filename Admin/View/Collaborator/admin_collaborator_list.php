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
    <!--Start  Collaborator  List -->
    <div class="p-4 pt-20 sm:ml-64">
        <h1 class=" font-bold text-2xl mt-5 ">Collaborator List</h1>
        <div class=" relative ">
            <!--Start  Collaborator  List Button  -->
            <div class=" relative h-12 ">
                <div class="absolute right-10">
                    <a href="./collaborator_list.php" type="submit" class="text-white bg-goldYellow hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                        See All </a>
                    <a href="./admin_collaborator_add.php" type="submit" class="text-goldYellow bg-primary border-2 border-goldYellow hover:text-white hover:bg-darkGreen focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        + Add</a>
                </div>
            </div>
            <!--End  Collaborator  List Button  -->

            <!--Start  Collaborator  List Table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">
                                No
                            </th>
                            <th scope="col" class="px-4 py-3 text-center">
                                ID
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Company Name
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Package
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Exp Date
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Exp Day
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Detail
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                01
                            </th>
                            <td class="px-4 py-4">
                                GC-1
                            </td>
                            <td class="px-4 py-4">
                                MAGAR GROUP Co.,Ltd
                            </td>
                            <td class="px-4 py-4 font-semibold">
                                Normal
                            </td>
                            <td class="px-4 py-4">
                                31/12/2023
                            </td>
                            <td class="px-4 py-4 text-alert font-medium ">
                                23 Days
                            </td>
                            <td class="px-4 py-4 flex justify-center">
                                <a href="./admin_collaborator_detail_preview.php" class=""> <img class="w-5" src="../resources/img/icon/view-details.png" alt=""></a>

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
                                GC-2
                            </td>
                            <td class="px-4 py-4">
                                TPL Myanmar Real Estate & Service Co.,Ltd
                            </td>
                            <td class="px-4 py-4 font-semibold">
                                Premium
                            </td>
                            <td class="px-4 py-4">
                                31/12/2023
                            </td>
                            <td class="px-4 py-4 text-alert font-medium ">
                                23 Days
                            </td>
                            <td class="px-4 py-4 flex justify-center">
                                <a href="./admin_collaborator_detail_preview.php" class=""> <img class="w-5" src="../resources/img/icon/view-details.png" alt=""></a>

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
                                GC-3
                            </td>
                            <td class="px-4 py-4">
                                SHWE TAUNG Real Estate Co.,Ltd
                            </td>
                            <td class="px-4 py-4 font-semibold">
                                Normal
                            </td>
                            <td class="px-4 py-4">
                                31/12/2023
                            </td>
                            <td class="px-4 py-4 text-alert font-medium ">
                                23 Days
                            </td>
                            <td class="px-4 py-4 flex justify-center">
                                <a href="./admin_collaborator_detail_preview.php" class=""> <img class="w-5" src="../resources/img/icon/view-details.png" alt=""></a>

                            </td>
                            <td class="px-4 py-4 text-center">
                                <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!--End  Collaborator  List Table -->
        </div>
    </div>
    <!--End  Collaborator  List -->

    <!--Start  Collaborator Pending List -->
    <div class="p-4 sm:ml-64">
        <h1 class=" font-bold text-2xl mt-5 ">Collaborator Pending List</h1>

        <div class=" relative ">
            <!--Start  Collaborator  List Button  -->
            <div class=" relative h-12 ">
                <a href="./collaborator_pending_list.php" type="submit" class="absolute right-10 text-white bg-goldYellow hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All </a>

            </div>
            <!--End  Collaborator  List Button  -->


            <!--Start  Collaborator Pending List Table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">
                                No
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Company Name
                            </th>
                            <th scope="col" class="px-2 py-3 ">
                                Company ID
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Phone
                            </th>
                            <th scope="col" class="px-4 py-3">
                               Approve
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                01
                            </th>

                            <td class="px-4 py-4">
                                MAGAR GROUP Co.,Ltd
                            </td>
                            <td class="px-4 py-4 font-semibold">
                                119523249
                            </td>
                            <td class="px-4 py-4 ">
                                magargroup@gmail.com
                            </td>
                            <td class="px-4 py-4">
                                09980636388
                            </td>
                            <td class="px-4 py-4 flex justify-center">
                                <a href="./admin_create_account_collaborator.php" class="">
                                    <img class="w-5" src="../resources/img/icon/carbon_task-approved.png" alt="">
                                </a>
                            </td>
                            <td class="px-4 py-4 text-center">
                                <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                02
                            </th>

                            <td class="px-4 py-4">
                                TPL Myanmar Real Estate & Service Co.,Ltd
                            </td>
                            <td class="px-4 py-4 font-semibold">
                                693560365
                            </td>
                            <td class="px-4 py-4 ">
                                realestateservice@gmail.com
                            </td>
                            <td class="px-4 py-4">
                                09757346631
                            </td>
                            <td class="px-4 py-4 flex justify-center">
                                <a href="./admin_create_account_collaborator.php" class=""> <img class="w-5" src="../resources/img/icon/carbon_task-approved.png" alt="">
                                </a>
                            </td>
                            <td class="px-4 py-4 text-center">
                                <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                03
                            </th>

                            <td class="px-4 py-4">
                                SHWE TAUNG Real Estate Co.,Ltd
                            </td>
                            <td class="px-4 py-4 font-semibold">
                                264966324
                            </td>
                            <td class="px-4 py-4 ">
                                shwetaungrealestate@gmail.com
                            </td>
                            <td class="px-4 py-4">
                                09971536999
                            </td>
                            <td class="px-4 py-4 flex justify-center">
                                <a href="./admin_create_account_collaborator.php" class=""> <img class="w-5" src="../resources/img/icon/carbon_task-approved.png" alt="">
                                </a>
                            </td>
                            <td class="px-4 py-4 text-center">
                                <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!--Start  Collaborator Pending List Table -->

        </div>
    </div>
    <!--End  Collaborator Pending  List -->

    <!--Start  Collaborator Request List -->
    <div class="p-4 sm:ml-64">
        <h1 class=" font-bold text-2xl mt-5 ">Collaborator Request List</h1>

        <div class=" relative mb-5">
            <!--Start  Collaborator  List Button  -->
            <div class=" relative h-12 ">
                <a href="./collaborator_request_list .php" type="submit" class="absolute right-10 text-white bg-goldYellow hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All </a>

            </div>
            <!--End  Collaborator  List Button  -->

            <!--Start  Collaborator Request List Table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">
                                No
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Company Name
                            </th>
                            <th scope="col" class="px-4 py-3 ">
                                Company ID
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Email
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
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                01
                            </th>

                            <td class="px-4 py-4">
                                MAGAR GROUP Co.,Ltd
                            </td>
                            <td class="px-4 py-4 font-semibold">
                                119523249
                            </td>
                            <td class="px-4 py-4 ">
                                magargroup@gmail.com
                            </td>
                            <td class="px-4 py-4">
                                3/12/2023
                            </td>
                            <td class="px-4 py-4 flex justify-center">
                                <a href="./admin_collaborator_req_preview.php" class="">
                                    <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                </a>
                            </td>
                            <td class="px-4 py-4 text-center">
                                <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                02
                            </th>
                            <td class="px-4 py-4">
                                TPL Myanmar Real Estate & Service Co.,Ltd
                            </td>
                            <td class="px-4 py-4 font-semibold">
                                693560365
                            </td>
                            <td class="px-4 py-4 ">
                                realestateservice@gmail.com
                            </td>
                            <td class="px-4 py-4">
                                1/12/2023
                            </td>
                            <td class="px-4 py-4 flex justify-center">
                                <a href="./admin_collaborator_req_preview.php" class="">
                                    <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                </a>
                            </td>
                            <td class="px-4 py-4 text-center">
                                <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                03
                            </th>
                            <td class="px-4 py-4">
                                SHWE TAUNG Real Estate Co.,Ltd
                            </td>
                            <td class="px-4 py-4 font-semibold">
                                264966324
                            </td>
                            <td class="px-4 py-4 ">
                                shwetaungrealestate@gmail.com
                            </td>
                            <td class="px-4 py-4">
                                9/12/2023
                            </td>
                            <td class="px-4 py-4 flex justify-center">
                                <a href="./admin_collaborator_req_preview.php" class="">
                                    <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                </a>
                            </td>
                            <td class="px-4 py-4 text-center">
                                <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!--Start  Collaborator Request List Table -->


        </div>
    </div>
    <!--End  Collaborator Request  List -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>