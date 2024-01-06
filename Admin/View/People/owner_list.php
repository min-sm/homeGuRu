<?php
$the_called_file = "owner_list.php";
include "../../Controller/Owner/OwnerListController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet" />

    <title>Owner List</title>

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-primary dark:bg-gray-700">
    <?php include '../commonView/menu.php' ?>
    <!-- main body -->
    <div class="p-4 pt-20 sm:ml-64 ">
        <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">Owner List</h1>
        <!-- 100 found -->
        <p class="lg:ms-16 sm:ms-8 me-8 lg:text-2xl text-base text-black dark:text-white my-4"><span><?= $resultCount['total_result'] ?></span> Found</p>
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
                                <?= $counter ?>
                            </th>
                            <td class="px-6 py-4">
                                GO-<?= $owner['id']; ?>
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
                                <?= $owner['updated_date']; ?>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="../People/owner_detail.php?id=<?= $owner['id']; ?>">
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

        <!-- pagination -->
        <?php include_once "../../Controller/Owner/OwnerListPaginationController.php";

        $totalRecords = $result['total'];
        $totalPages = ceil($totalRecords / $recordsPerPage);
        ?>
        <div class="flex justify-center my-16">
            <nav aria-label="Page navigation example">
                <ul class="flex items-center -space-x-px h-10 text-base">

                    <!-- previous -->
                    <li>
                        <a href="<?= $_SERVER['PHP_SELF']; ?>?page=<?= ($page == 1) ? 1 : $page - 1; ?>" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </a>
                    </li>
                    <!-- all the pages -->
                    <?php
                    for ($i = 1; $i <= $totalPages; $i++) :
                        $theCurrentPgCondition =  $i == $page;
                    ?>
                        <li>
                            <a href='<?= $_SERVER['PHP_SELF']; ?>?page=<?= $i ?>' class="<?= $theCurrentPgCondition ? 'z-10' : ''; ?> flex items-center justify-center px-4 h-10 leading-tight <?= $theCurrentPgCondition ? 'text-blue-600' : 'text-gray-500'; ?> border border-<?= $theCurrentPgCondition ? 'blue' : 'gray'; ?>-300 bg-<?= $theCurrentPgCondition ? 'blue-50' : 'white'; ?> hover:bg-<?= $theCurrentPgCondition ? 'blue' : 'gray'; ?>-100 hover:text-<?= $theCurrentPgCondition ? 'blue' : 'gray'; ?>-700 dark:border-gray-700 dark:bg-gray-<?= $theCurrentPgCondition ? '700' : '800'; ?> dark:text-<?= $theCurrentPgCondition ? 'white' : 'gray-400 dark:hover:bg-gray-700 dark:hover:text-white'; ?>"><?= $i; ?></a>
                        </li>
                    <?php endfor ?>
                    <!-- Next -->
                    <li>
                        <a href="<?= $_SERVER['PHP_SELF']; ?>?page=<?php if ($page < $totalPages) {
                                                                        echo $page + 1;
                                                                    } else if ($page == $totalPages) {
                                                                        echo $totalPages;
                                                                    }
                                                                    ?>" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

    <!-- DELETE The Modal -->
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <!-- delete modal -->
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
</body>

</html>