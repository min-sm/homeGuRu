<?php
$the_called_file = "people_list.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include '../../Controller/Setting/SliderController.php';
// if (!isset($_SESSION["authority"])) {
//     header('Location: ../../View/errors/wrongPath.php ');
//     exit();
// }
include "../../Controller/User/UserListController.php";
include "../../Controller/Owner/OwnerListController.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/css/dist/output.css" rel="stylesheet" />
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="../../../Storage/logo/<?= $sliders[0]["fav_icon"] ?>">
    <title>People List</title>

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-primary dark:bg-gray-700">
    <?php include '../commonView/menu.php' ?>

    <!--Start  User  List -->
    <div class="p-4 pt-20 sm:ml-64">
        <h1 class="text-black dark:text-white text-center font-bold text-2xl mt-5 ">User List</h1>

        <div class=" relative mb-5">
            <!--Start   User  List Button  -->
            <div class=" relative h-12 ">
                <a href="./user_list.php" type="submit" class="absolute right-10 text-white bg-goldYellow hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All </a>

            </div>
            <!--End   User List Button  -->
            <!-- <pre><?php print_r($users) ?></pre> -->
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
                        <?php
                        $counter = (isset($_GET['page'])) ? (1 + (6 * ($_GET['page'] - 1))) : 1;

                        foreach ($users as $user) {
                        ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $counter ?>
                                </th>
                                <td class="px-6 py-4">
                                    GU-<?= $user['id']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $user['gu_name']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $user['gu_phone']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $user['gu_email']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $user['updated_date']; ?>
                                </td>
                                <td class="px-6 py-4">
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
            <!--End   User List   Table -->
        </div>
    </div>
    <!--End   User  List -->

    <!--Start  Owner List -->
    <div class="p-4 py-7 sm:ml-64">
        <h1 class="text-black dark:text-white text-center font-bold text-2xl mt-5 ">Owner List</h1>

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
                        <?php
                        $counter = (isset($_GET['page'])) ? (1 + (6 * ($_GET['page'] - 1))) : 1;

                        foreach ($owners as $owner) {
                        ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $counter; ?>
                                </th>
                                <td class="px-6 py-4">
                                    GO-<?= $owner["id"]; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $owner['go_name']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $owner['go_phone_num']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $owner['go_email']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    2023/12/03 12:20 PM
                                </td>
                                <td class="px-4 py-4 flex justify-center">
                                    <a href="../People/owner_detail.php?id=<?= $owner['id']; ?>">
                                        <ion-icon name="document-text-outline" class="text-lg font-medium cursor-pointer text-blue-500"></ion-icon>
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                                </td>
                            </tr>
                        <?php
                            $counter++;
                        }
                        ?>
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