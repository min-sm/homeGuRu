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
    <script src="../resources/js/collaborator_detail_post.js" defer></script>

</head>


<body>
    <!-- heading navigation -->
    <?php include '../common/menu.php' ?>

    <!--Start  Property  List -->
    <div class="p-4 pt-20 sm:ml-64">
        <h1 class=" font-bold text-2xl mt-5 ">Property List</h1>

        <div class=" relative ">
            <!--Start  Property  List Button  -->
            <div class=" relative h-12 ">
                <div class="absolute right-10">
                    <a href="./property_list.php" class=" text-white bg-goldYellow hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2.5 mr-2 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                        See All </a>
                    <a href="./property_post_add_form.php" type="submit" class="text-goldYellow bg-primary border-2 border-goldYellow hover:text-white hover:bg-darkGreen focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        + Add New</a>
                </div>

            </div>
            <!--End  Property  List Button  -->

            <!--Start  Property  List Table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">
                                No
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Code
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Property
                            </th>
                            <th scope="col" class="px-4 py-3 ">
                                Offer
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Township
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
                                GRC-2001
                            </td>

                            <td class="px-4 py-4">
                                Condo
                            </td>
                            <td class="px-4 py-4 text-goldYellow font-semibold">
                                Rent
                            </td>

                            <td class="px-4 py-4 text-left">
                                <span class="text-alert font-semibold">30,000,000</span><span>kyats</span> <span>/permonth</span>
                            </td>
                            <td class="px-4 py-4  font-bold tracking-wide">
                                Bahan
                            </td>

                            <td class="px-4 py-4 flex justify-center">
                                <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
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
                                GSH-3092
                            </td>

                            <td class="px-4 py-4">
                                House
                            </td>
                            <td class="px-4 py-4 text-alert font-semibold">
                                Sale
                            </td>

                            <td class="px-4 py-4 text-left">
                                <span class="text-alert font-semibold">30,000,000</span><span>$</span>
                            </td>
                            <td class="px-4 py-4  font-bold tracking-wide">
                                Kamayut
                            </td>

                            <td class="px-4 py-4 flex justify-center">
                                <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
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
                                GRC-2005
                            </td>
                            <td class="px-4 py-4">
                                Condo
                            </td>
                            <td class="px-4 py-4 text-goldYellow font-semibold">
                                Rent
                            </td>

                            <td class="px-4 py-4 text-left">
                                <span class="text-alert font-semibold">30,000,000</span><span>kyats</span> <span>/permonth</span>
                            </td>
                            <td class="px-4 py-4  font-bold tracking-wide">
                                Bahan
                            </td>

                            <td class="px-4 py-4 flex justify-center">
                                <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
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
                                GSH-3098
                            </td>
                            <td class="px-4 py-4">
                                House
                            </td>
                            <td class="px-4 py-4 text-alert font-semibold">
                                Sale
                            </td>

                            <td class="px-4 py-4 text-left">
                                <span class="text-alert font-semibold">30,000,000</span><span>Kyats</span>
                            </td>
                            <td class="px-4 py-4  font-bold tracking-wide">
                                Kamayut
                            </td>

                            <td class="px-4 py-4 flex justify-center">
                                <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                            </td>
                            <td class="px-4 py-4 text-center">
                                <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Start  Property  List Table -->

        </div>
    </div>
    <!--End  Property  List -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>