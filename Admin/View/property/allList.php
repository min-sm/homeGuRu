<?php
include_once "../../Controller/Property/PropertyListController.php";
include "../../Controller/Property/PropertyReqController.php";
include "../../Controller/Property/PropertyPendingController.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet" />

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/b9864528d4.js" crossorigin="anonymous"></script>
    <!-- dark mode -->
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

    <!-- delete btn -->
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .delete-modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .delete-modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .delete-close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .delete-close:hover,
        .delete-close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- JS -->
    <script src="../resources/js/sort_by.js" defer></script>
    <title>Property List</title>
</head>

<body class="bg-primary dark:bg-gray-700">
    <!-- heading navigation -->
    <?php include '../commonView/menu.php' ?>

    <!-- main body -->
    <div class="p-4 pt-20 sm:ml-64">
        <!-- all property list -->
        <div>
            <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">All Property List</h1>
            <div class="flex justify-end">
                <a href="listAllStock.php" class="bg-goldYellow py-2 px-6 rounded-lg border text-sm sm:text-base text-white flex justify-between w-fit mb-4 float-right">See All</a>
            </div>

            <!-- table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg" id='table'>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Code
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Property
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Offer
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Size
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Township
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Details
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = (isset($_GET['page'])) ? (1 + (6 * ($_GET['page'] - 1))) : 1;

                        foreach ($properties as $property) {
                        ?>
                            <!-- 1st row -->
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $counter ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?= $property['p_code'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $property['pt_name'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $property['p_offer'] == '0' ? 'Rent' : 'Sale'; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= number_format($property['p_width'] * $property['p_length']); ?> <?= $property['p_size_unit'] == '1' ? 'm' : 'ft'; ?><sup>2</sup>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $property['p_price_unit'] == '1' ? '$' . number_format($property['p_price']) : number_format($property['p_price']) . ' Kyats';
                                    ?> / <?= $property['p_duration'] == '0' ? 'Per Month' : 'Per Year'; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $property["township_name"] ?>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <a href="detail.php?id=<?= $property['id'] ?>">
                                        <ion-icon name="document-text-outline" class="text-lg font-medium cursor-pointer text-blue-500"></ion-icon>
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button id="deleteBtn" onclick="deleteBxShow()">
                                        <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                                    </button>
                                </td>
                            </tr>
                        <?php
                            $counter++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <hr class="my-12">
        <!-- property request list -->
        <div>
            <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">Property Request List</h1>
            <div class="flex justify-end">
                <a href="propertyReqList.php" class="bg-goldYellow py-2 px-6 rounded-lg border text-sm sm:text-base text-white flex justify-between w-fit mb-4 float-right">See All</a>
            </div>

            <!-- table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg" id='table'>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Code
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Property
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Offer
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Size
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Township
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Details
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = (isset($_GET['page'])) ? (1 + (6 * ($_GET['page'] - 1))) : 1;

                        foreach ($properties_req as $property) {
                        ?>
                            <!-- 1st row -->
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $counter ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?= $property['p_code'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $property['pt_name'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $property['p_offer'] == '0' ? 'Rent' : 'Sale'; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= number_format($property['p_width'] * $property['p_length']); ?> <?= $property['p_size_unit'] == '1' ? 'm' : 'ft'; ?><sup>2</sup>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $property['p_price_unit'] == '1' ? '$' . number_format($property['p_price']) : number_format($property['p_price']) . ' Kyats';
                                    ?> / <?= $property['p_duration'] == '0' ? 'Per Month' : 'Per Year'; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $property["township_name"] ?>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <a href="detail.php?id=<?= $property['id'] ?>">
                                        <ion-icon name="document-text-outline" class="text-lg font-medium cursor-pointer text-blue-500"></ion-icon>
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button id="deleteBtn" onclick="deleteBxShow()">
                                        <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                                    </button>
                                </td>
                            </tr>
                        <?php
                            $counter++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <hr class="my-12">
        <!-- pending list -->
        <div>
            <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">Property Pending List</h1>
            <div class="flex justify-end">
                <a href="pendingList.php" class="bg-goldYellow py-2 px-6 rounded-lg border text-sm sm:text-base text-white flex justify-between w-fit mb-4 float-right">See All</a>
            </div>

            <!-- table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg" id='table'>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Code
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Property
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Offer
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Size
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Township
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Details
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = (isset($_GET['page'])) ? (1 + (6 * ($_GET['page'] - 1))) : 1;

                        foreach ($properties_pending as $property) {
                        ?>
                            <!-- 1st row -->
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $counter ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?= $property['p_code'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $property['pt_name'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $property['p_offer'] == '0' ? 'Rent' : 'Sale'; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= number_format($property['p_width'] * $property['p_length']); ?> <?= $property['p_size_unit'] == '1' ? 'm' : 'ft'; ?><sup>2</sup>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $property['p_price_unit'] == '1' ? '$' . number_format($property['p_price']) : number_format($property['p_price']) . ' Kyats';
                                    ?> / <?= $property['p_duration'] == '0' ? 'Per Month' : 'Per Year'; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $property["township_name"] ?>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <a href="detail.php?id=<?= $property['id'] ?>">
                                        <ion-icon name="document-text-outline" class="text-lg font-medium cursor-pointer text-blue-500"></ion-icon>
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button id="deleteBtn" onclick="deleteBxShow()">
                                        <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                                    </button>
                                </td>
                            </tr>
                        <?php
                            $counter++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- The Modal -->
    <div id="delConfirmBx" class="hidden fixed top-0 left-0 z-50 w-full h-full overflow-auto bg-black bg-opacity-75 justify-center items-center">
        <!-- Modal content -->
        <div class="bg-paleGray p-10 border border-black border-solid w-3/4 flex gap-8 flex-col items-center rounded-lg">
            <p class="text-xl">Are you sure you want to delete?</p>
            <div class="flex gap-4">
                <button onclick="noBtnClick()" class="py-2 px-8 bg-darkGreen text-white rounded-xl cursor-pointer">No</button>
                <a href="../../Controller/Property/PropertyDeleteController.php?id=<?= $property['id'] ?>" class="py-2 px-8 bg-alert text-white rounded-xl cursor-pointer">Delete</a>
            </div>
        </div>
    </div>

    <script>
        let delConfirmBx = document.getElementById('delConfirmBx');

        function deleteBxShow() {
            delConfirmBx.classList.remove("hidden");
            delConfirmBx.classList.add("flex");
        }

        function noBtnClick() {
            delConfirmBx.classList.remove("flex");
            delConfirmBx.classList.add("hidden");
        }

        window.onclick = function(event) {
            if (event.target == delConfirmBx) {
                noBtnClick();
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>