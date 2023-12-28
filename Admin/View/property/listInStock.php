<?php
include_once "../../Controller/Property/ListInStockController.php";

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
        <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">Property List</h1>

        <!-- results found -->
        <div class="pt-4 pb-8 flex items-center">
            <!-- 100 found -->
            <span class="lg:ms-16 sm:ms-8 me-8 lg:text-2xl text-base text-black dark:text-white"><span><?= $resultCount['total_result'] ?></span> Found</span>
            <!-- in stock / out of stock -->
            <div class="lg:space-x-8 space-x-4 lg:text-base text-xs">
                <label for="allStock" class="text-gray-500 cursor-pointer label "><a href="list.php">All Stocks</a></label>
                <label for="outStock" class="text-gray-500 cursor-pointer label "><a href="listOutOfStock.php">Out of Stock</a>
                </label>
                <label for="inStock" class="text-goldYellow cursor-pointer label "><a href="listInStock.php">In Stock</a></label>
                <input type="radio" id="allStock" name="sort_by" value="" class="hidden" />
                <input type="radio" id="outStock" name="sort_by" value="" class="hidden" />
                <input type="radio" id="inStock" name="sort_by" value="" class="hidden" />
            </div>

            <!-- 2 view options -->
            <div class="flex-1 flex justify-end w-full">
                <!-- in stock / out of stock -->
                <div class="flex lg:space-x-8 space-x-4">
                    <label for="table-view" class="text-goldYellow  cursor-pointer label1 text-center"><i class="fa-solid fa-bars w-8 lg:text-4xl text-lg"></i></label>
                    <label for="card-view" class="text-gray-500 cursor-pointer label1 "><i class="fa-solid fa-table-cells w-8 lg:text-4xl text-lg"></i></label>
                    <input type="radio" id="table-view" name="view_option" value="" class="hidden" checked />
                    <input type="radio" id="card-view" name="view_option" value="" class="hidden" />
                </div>
            </div>
        </div>

        <!-- search by id -->
        <div class="my-8 flex items-center justify-evenly w-full">
            <input type="text" placeholder="Property ID" class="rounded-lg dark:bg-gray-800 bg-white">
            <button type="submit" class="bg-darkGreen px-6 py-1.5 text-white rounded-lg border border-black">Search</button>

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
                    // if (isset($_GET['page'])) {
                    //     $counter = 1 + (6 * ($_GET['page'] - 1));
                    // } else {
                    //     $counter = 1;
                    // }
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
                                <?= $property["p_township"] ?>
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

        <!-- cards -->
        <div class="hidden" id="cards">
            <div class="grid grid-cols-3 gap-16">
                <?php
                function formatTimestamp($timestamp)
                {
                    $now = time();
                    $time = strtotime($timestamp); // Parse about any English textual datetime description into a Unix timestamp (measures time by the number of seconds that have elapsed since 00:00:00 UTC on 1 January 1970)
                    $diff = $now - $time;

                    if ($diff < 60) {
                        return 'Just now';
                    } elseif ($diff < 3600) {
                        $minutes = round($diff / 60);
                        return $minutes . ' minutes ago';
                    } elseif ($diff < 86400) {
                        $hours = round($diff / 3600);
                        return $hours == 1 ? 'An hour ago' : $hours . ' hours ago';
                    } elseif ($diff < 172800) {
                        return 'Yesterday ' . date('h:i A', $time);
                    } elseif ($diff < 604800) {
                        $days = round($diff / 86400);
                        return $days . ' days ago';
                    } elseif ($diff < 31536000) {
                        return date('F d \a\t h:i A', $time);
                    } else {
                        return date('Y, F d \a\t h:i A', $time);
                    }
                }
                foreach ($properties as $property) : ?>
                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="detail.php?id=<?= $property['id']; ?>">
                            <div class="relative">
                                <div class="<?= $property['p_offer'] == '0' ? 'bg-darkGreen text-white' : 'bg-goldYellow text-black'; ?> flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                    <?= $property['p_offer'] == '0' ? 'Rent' : 'Sale'; ?>
                                </div>
                                <img class="pb-4 rounded-t-lg" src="../../../Storage/house/<?= $property['id'] . '/' . $property['p_photo_1'] ?>" alt="<?= $property['p_photo_1']; ?>" />
                            </div>
                        </a>
                        <div class="px-5 pb-5">
                            <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                                <span>
                                    <?php
                                    $timestamp = $property['created_date'];
                                    $formattedTimestamp = formatTimestamp($timestamp);
                                    echo $formattedTimestamp;
                                    ?>
                                </span>
                                <span><?= $property['p_interest_count'] ?> <?= $property['p_interest_count'] == '1' ? 'person interests' : 'people interest'; ?></span>
                            </div>
                            <!-- p_title & logo -->
                            <div class="my-2.5 flex items-center justify-between">
                                <a href="detail.php?id=<?= $property['id']; ?>" class="mt-2.5 mb-5">
                                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                        <?php
                                        $maxLen = 25;
                                        $property['p_title'] = ucwords(strtolower($property['p_title']));
                                        if (strlen($property['p_title']) > $maxLen) {
                                            $property['p_title'] = substr($property['p_title'], 0, $maxLen - 4) . '...';
                                        }
                                        echo $property['p_title'];

                                        ?>
                                    </h5>
                                </a>
                                <div class="rounded-full bg-gray-50 w-16">
                                    <?php if ($property['uploader_id'] == 0) : ?>
                                        <img src="../../../Storage/homeGuru_logo/dark/logo.png" alt="HomeGuRu" />
                                    <?php else : include_once "../../Controller/Property/CollaboratorInPropertyController.php?id=" . $property['uploader_id']; ?>

                                        <img src="../../../Storage/collaborator_img/gc<?= $property['uploader_id'] . '/' . $guruCollaborator['gc_logo'] ?>" alt="<?= $guruCollaborator['gc_logo']; ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- money -->
                            <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                                <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                                <span class="ml-3"><?= $property['p_price_unit'] == '1' ? '$' . number_format($property['p_price']) : number_format($property['p_price']) . ' Kyats';
                                                    ?> / <?= $property['p_duration'] == '0' ? 'Month' : 'Year'; ?></span>
                            </div>

                            <!-- p_code & details -->
                            <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="font-playFair">Property ID:
                                        </span>
                                        <span><?= $property['p_code'] ?></span>
                                    </div>
                                    <div>
                                        <span class="font-playFair">Property Type:
                                        </span>
                                        <span><?= $property['pt_name']; ?></span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <div>
                                        <span class="font-playFair">Township:
                                        </span>
                                        <span><?= $property['p_township']; ?></span>
                                    </div>
                                    <div>
                                        <span class="font-playFair">Property Size:
                                        </span>
                                        <span><?= number_format($property['p_width'] * $property['p_length']); ?> <?= $property['p_size_unit'] == '1' ? 'm' : 'ft'; ?><sup>2</sup></span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-end">
                                <a href="detail.php?id=<?= $property['id'] ?>" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- pagination -->
        <?php include_once "../../Controller/Property/ListInStockPaginationController.php";

        $totalRecords = $result['total'];
        $totalPages = ceil($totalRecords / $recordsPerPage);
        ?>
        <div class="flex justify-center my-16">
            <nav aria-label="Page navigation example">
                <ul class="flex items-center -space-x-px h-10 text-base">

                    <!-- previous -->
                    <li>
                        <a href="listOutOfStock.php?page=<?= ($page == 1) ? 1 : $page - 1; ?>" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
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
                            <a href='listOutOfStock.php?page=<?= $i ?>' class="<?= $theCurrentPgCondition ? 'z-10' : ''; ?> flex items-center justify-center px-4 h-10 leading-tight <?= $theCurrentPgCondition ? 'text-blue-600' : 'text-gray-500'; ?> border border-<?= $theCurrentPgCondition ? 'blue' : 'gray'; ?>-300 bg-<?= $theCurrentPgCondition ? 'blue-50' : 'white'; ?> hover:bg-<?= $theCurrentPgCondition ? 'blue' : 'gray'; ?>-100 hover:text-<?= $theCurrentPgCondition ? 'blue' : 'gray'; ?>-700 dark:border-gray-700 dark:bg-gray-<?= $theCurrentPgCondition ? '700' : '800'; ?> dark:text-<?= $theCurrentPgCondition ? 'white' : 'gray-400 dark:hover:bg-gray-700 dark:hover:text-white'; ?>"><?= $i; ?></a>
                        </li>
                    <?php endfor ?>
                    <!-- Next -->
                    <li>
                        <a href="listOutOfStock.php?page=<?php if ($page < $totalPages) {
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

    <!-- The Modal -->
    <div id="delConfirmBx" class="hidden fixed top-0 left-0 z-50 w-full h-full overflow-auto bg-black bg-opacity-75 justify-center items-center">
        <!-- Modal content -->
        <div class="bg-paleGray p-10 border border-black border-solid w-3/4 flex gap-8 flex-col items-center rounded-lg">
            <p class="text-xl">Are you sure you want to delete?</p>
            <div class="flex gap-4">
                <a href="list.php?id=<?= $page ?>" class="py-2 px-8 bg-darkGreen text-white rounded-xl cursor-pointer">No</a>
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

        window.onclick = function(event) {
            if (event.target == delConfirmBx) {
                delConfirmBx.classList.remove("flex");
                delConfirmBx.classList.add("hidden");
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>