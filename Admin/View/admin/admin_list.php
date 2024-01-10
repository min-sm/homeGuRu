<?php
session_start();
include '../../Controller/Setting/SliderController.php';
if (!isset($_SESSION["authority"])) {
    header('Location: ../../View/errors/wrongPath.php');
    exit();
};
if ($_SESSION['authority'] != 0) {
    header('Location: ../../View/errors/noPermission.php');
    exit();
}
?>

<?php include '../../Controller/admin/AdminListController.php' ?>

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
    <script src="../resources/js/financial/deleteMotal.js" defer></script>
</head>

<body class="bg-primary dark:bg-gray-700 ">
    <?php include '../commonView/menu.php' ?>
    <!--Start  Admin List  -->
    <div class="p-4 pt-20 sm:ml-64">
        <h1 class="text-center font-bold text-2xl mt-5 mb-8 dark:text-white">Admin List</h1>

        <div class=" relative mb-5">
            <!--Start  Search Company Name  -->
            <form class=" flex mb-3" action="admin_list.php" method="get">
                <input type="text" name="ga_id" id="" class="w-2/5 mr-16  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search By ID Code Number">
                <button type="submit" name="search" class="text-white  bg-darkGreen hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2.5 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Search</button>
                <a href="./admin_add.php" type="submit" class="absolute right-0 text-black bg-white border-4 border-goldYellow hover:text-white hover:bg-goldYellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-6 py-2 text-center ">
                    + Add New</a>
            </form>
            <!--End  Search Company Name  -->

            <!--Start Admin List  Table -->
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
                                Status
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
                        if ($totalPages != 0) {
                            $start += 1;
                            foreach ($admins as $admin) {
                                if ($start % 2 != 0) {
                        ?>
                                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <?php
                                } else {
                                    ?>
                                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <?php
                                }
                                    ?>
                                    <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $start++; ?>
                                    </th>
                                    <td class="px-6 py-4 tracking-wider">
                                        GA-<?= $admin['id'] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $admin['ga_name'] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $admin['ga_phone_num'] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $admin['ga_email'] ?>
                                    </td>
                                    <?php
                                    if ($admin['ga_status'] == 0) {
                                    ?>
                                        <td class="px-6 py-4 text-goldYellow font-semibold">
                                            Super
                                        </td> <?php
                                            } else {
                                                ?>
                                        <td class="px-6 py-4 text-darkGreen font-semibold">
                                            Normal
                                        </td> <?php
                                            }
                                                ?>
                                    <td class="px-4 py-4 flex justify-center">
                                        <a href="./admin_detail.php?id=<?= $admin['id'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                        </a>
                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        <a href="#" name="delete" onclick="confirmation( '../../Controller/admin/AdminDeleteController.php?id=<?= $admin['id'] ?>')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                                        </a>
                                    </td>
                                    </tr>

                                <?php }
                        } else { ?>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" colspan="8" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        " Data Not Found!"
                                    </th>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
            <!--End  Admin List   Table -->
        </div>
        <!--Start  pagination -->
        <div class="flex justify-center my-16">
            <nav aria-label="Page navigation example">
                <ul class="flex items-center -space-x-px h-10 text-base">
                    <li>
                        <a href="?page=<?= $page == $page > 1 ? $page - 1 : 1 ?>" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </a>
                    </li>
                    <?php
                    for ($i = 1; $i <= $totalPages; $i++) {
                        if ($page == $i) {
                    ?>
                            <li>
                                <a href="?page=<?= $i ?>" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                                    <?= $i ?>
                                </a>
                            </li>
                        <?php } else {
                        ?>
                            <li>
                                <a href="?page=<?= $i ?>" class="  flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <?= $i ?>
                                </a>
                            </li>
                    <?php }
                    }
                    ?>
                    <li>
                        <a href="?page=<?= $page == $page < $totalPages ? $page + 1 : $totalPages ?>" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
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
    <!--End Admin  List -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <!--delete Modal -->
    <div id="deleteModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center;">
        <div style="background: white; padding: 40px; border-radius: 8px; width: 300px; text-align: center;">
            <p>Are you sure you want to delete this item?</p>
            <button class="text-white rounded hover:bg-goldYellow bg-alert p-1" onclick="confirmDelete()">Confirm Delete</button>
            <button class="text-white rounded hover:bg-goldYellow bg-darkGreen p-1 " onclick="hideModal()">Cancel</button>
        </div>
    </div>
</body>

</html>