<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include '../../Controller/Setting/SliderController.php';
if (!isset($_SESSION["authority"])) {
    header('Location: ../../View/errors/wrongPath.php ');
    exit();
}
include_once "../../Controller/Property/PropertySearchResultController.php";
include "../../Controller/Property/CollaboratorInPropertyController.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet" />
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="../../../Storage/logo/<?= $sliders[0]["fav_icon"] ?>">
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

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- JS -->
    <script src="../resources/js/sort_by.js" defer></script>
    <title>All Stock List</title>
</head>

<body class="bg-primary dark:bg-gray-700">
    <!-- heading navigation -->
    <?php include '../commonView/menu.php' ?>

    <!-- main body -->
    <div class="p-4 pt-20 sm:ml-64">
        <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">Search Result</h1>

        <!-- search by id -->
        <div class="my-8 flex items-center justify-evenly w-full">
            <input type="text" id="propertyID" placeholder="Property ID" class="rounded-lg text-black dark:text-white dark:bg-gray-800 bg-white">
            <a href="#" onclick="submitSearch()" type="submit" class="bg-darkGreen px-6 py-1.5 text-white rounded-lg border border-black">Search</a>
        </div>

        <?php
        $noRes = count($result) > 0 ? '' : 'hidden';
        ?>

        <p class="<?= count($result) > 0 ? 'hidden' : '' ?> text-black dark:text-white text-3xl text-center">
            <?= "No result found for $search_code."; ?>
        </p>

        <!-- 2 view options -->
        <div class="<?= $noRes; ?> flex-1 flex justify-end w-full my-4">
            <!-- in stock / out of stock -->
            <div class="flex lg:space-x-8 space-x-4">
                <label for="table-view" class="text-goldYellow  cursor-pointer label1 text-center"><i class="fa-solid fa-bars w-8 lg:text-4xl text-lg"></i></label>
                <label for="card-view" class="text-gray-500 cursor-pointer label1 "><i class="fa-solid fa-table-cells w-8 lg:text-4xl text-lg"></i></label>
                <input type="radio" id="table-view" name="view_option" value="" class="hidden" checked />
                <input type="radio" id="card-view" name="view_option" value="" class="hidden" />
            </div>
        </div>

        <!-- table -->
        <div class="<?= $noRes; ?> relative overflow-x-auto shadow-md sm:rounded-lg" id='table'>
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

                    foreach ($result as $property) {
                        if ($property['p_status'] == 2) {
                            $directoryToDetail = '../Property/detail.php';
                        } else if ($property['p_status'] == 1) {
                            $directoryToDetail = '../Property/pending.php';
                        } else if ($property['p_status'] == 0) {
                            $directoryToDetail = '../Property/req_detail.php';
                        }
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
                                <a href="<?= $directoryToDetail; ?>?id=<?= $property['id'] ?>">
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
            <div class="flex s justify-around gap-5  flex-wrap w-full  mb-10 ">
                <?php
                foreach ($result as $property) {
                    if ($property['p_status'] == 2) {
                        $directoryToDetail = '../Property/detail.php';
                    } else if ($property['p_status'] == 1) {
                        $directoryToDetail = '../Property/pending.php';
                    } else if ($property['p_status'] == 0) {
                        $directoryToDetail = '../Property/req_detail.php';
                    }
                ?>
                    <div class="w-full  max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="../Property/detail.php?id=<?= $property['id'] ?>">
                            <div class="relative h-56">
                                <div class="<?php
                                            if ($property['p_after'] == 1) {
                                                echo 'bg-alert';
                                            } else if ($property['p_offer'] == 0) {
                                                echo 'bg-darkGreen';
                                            } else {
                                                echo 'bg-secondary';
                                            };

                                            ?> text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                    <?php
                                    if ($property['p_after'] == 1 && $property['p_offer'] == 0) {
                                        echo 'Rent Out';
                                    } else if ($property['p_after'] == 1 && $property['p_offer'] == 1) {
                                        echo 'Sold Out';
                                    } else if ($property['p_offer'] == 0) {
                                        echo 'Rent';
                                    } else {
                                        echo 'Sale';
                                    };

                                    ?>
                                </div>
                                <img class="pb-4 rounded-t-lg w-full h-full object-cover" src="../../../Storage/house/<?= $property["id"] ?>/<?= $property['p_photo_1'] ?>" alt=" product image" />
                            </div>
                        </a>
                        <div class="px-5 pb-5">
                            <div class="flex items-center text-black dark:text-white text-xs justify-between mb-2.5">
                                <span><?php
                                        $dateTime = new DateTime($property['created_date']);

                                        $formattedDateTime = $dateTime->format('F j \a\t g:i A');

                                        echo $formattedDateTime;
                                        ?></span>
                                <span> <?php
                                        $interestCount = $property['p_interest_count'];

                                        if ($interestCount == 0) {
                                            // Don't show anything if the count is zero
                                        } elseif ($interestCount == 1) {
                                            echo '1 person interest';
                                        } else {
                                            echo "$interestCount people interests";
                                        }
                                        ?></span>
                            </div>
                            <div class="mt-2 flex items-center justify-between">
                                <a href="<?= $directoryToDetail; ?>?id=<?= $property['id'] ?>" class="mt-2.5 mb-5">
                                    <h5 class="text-xl font-medium  text-gray-900 dark:text-white">
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
                                <div class="rounded-full bg-[#D9D9D9] w-14 h-14 overflow-hidden  ">
                                    <?php if ($property['uploader_id'] == 0) : ?>
                                        <img src="../../../Storage/homeGuru_logo/dark/logo.png" class="w-16 h-16" alt="HomeGuRu" />
                                    <?php else : ?>
                                        <img class="w-14 h-14" src="../../../Storage/collaborator_img/gc<?= $property['uploader_id'] . '/' . $guruCollaborator[$property['uploader_id'] - 1]['gc_logo'] ?>" alt="<?= $guruCollaborator[$property['uploader_id'] - 1]['gc_company_name']; ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class=" mb-5 text-darkGreen dark:text-green-500 flex items-center text-lg">
                                <i class="fa-sharp fa-solid fa-money-bill pt-1"></i>
                                <span class="ml-3 mt-2 font-meduim">
                                    <?php if ($property['p_price_unit'] == 1) {
                                        echo '$' . number_format($property['p_price']);
                                    } elseif ($property['p_price_unit'] == 2) {
                                        if ($property['p_price'] > 999999) {

                                            $formatted_price = substr_replace($property['p_price'], 'lakh', -5);
                                            echo $formatted_price;
                                        } else {

                                            echo ' Ks' . $property['p_price'];
                                        }
                                    } ?>
                                    /
                                    <?php
                                    if ($property['p_duration'] == 0) {
                                        echo 'Month';
                                    } elseif ($property['p_duration'] == 1) {
                                        echo 'Year';
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="mt-2.5 mb-7 text-black dark:text-white tracking-wide space-y-5  text-sm">
                                <div class="flex justify-between items-center">
                                    <div><span class="font-playFair">Property Code: </span>
                                        <span><?= $property['p_code'] ?></span>
                                    </div>
                                    <div><span class="font-playFair">Property Type: </span>
                                        <span><?= $property['pt_name'] ?></span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <!-- township in card -->
                                    <div><span class="font-playFair">Township: </span>
                                        <span><?= $property['township_name'] ?></span>
                                    </div>
                                    <!-- property size in card -->
                                    <div>
                                        <span class="font-playFair">Property Size: </span>
                                        <span><?= $property['p_width'] ?> x <?= $property['p_length'] ?>
                                            <?php
                                            if ($property['p_size_unit'] == 1) {
                                                echo 'm';
                                            } elseif ($property['p_size_unit'] == 2) {
                                                echo 'ft';
                                            }
                                            ?><sup>2</sup></span>
                                    </div>
                                </div>
                            </div>
                            <!-- detail in card -->
                            <div class="flex items-center justify-end">
                                <a href="<?= $directoryToDetail; ?>?id=<?= $property['id'] ?>" class="text-darkGreen dark:text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2 text-center dark:border-slate-50">Details</a>
                            </div>
                        </div>
                    </div>


                <?php }
                ?>
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

        function submitSearch() {
            var propertyID = document.getElementById("propertyID").value;
            window.location.href = `propertySearchResult.php?searchID=${propertyID}&p_status=2`;
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>