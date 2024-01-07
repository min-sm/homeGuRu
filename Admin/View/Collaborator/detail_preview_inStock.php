<?php
include '../../Controller/Collaborator/CollaboratorAllDetailPreviewContorller.php';
include "../../Controller/Property/CollaboratorPropertyInStockListController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $collaborator[0]['gc_company_name'];  ?>'s Details</title>
    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet" />

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/b9864528d4.js" crossorigin="anonymous"></script>

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!--JS-->
    <script src="../resources/js/collaborator/activity_on_off_motal.js" defer></script>
    <script src="../resources/js/sort_by.js" defer></script>
    <script src="../resources/js/search_Fn.js" defer></script>

</head>

<body class="bg-primary dark:bg-gray-700 tracking-wider">
    <?php include '../commonView/menu.php' ?>
    <!--Start  Collaborator Detail-->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center  dark:text-gray-200">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Collaborator Detail</h1>
        <div class=" lg:w-1/2 w-full grid grid-row-13 gap-2">
            <img class="w-40 mb-5" src='<?php echo "../../../Storage/collaborator_img/gc" . $collaborator[0]['collaborator_id'] . "/" . $collaborator[0]['gc_logo'] ?>' alt="">

            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Collaborator Code</p>
                <p name="gc_name" class="text-sm font-bold tracking-wider">GC-<?= $collaborator[0]['gc_code']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company Name</p>
                <p name="gc_name" class="text-sm"><?= $collaborator[0]['gc_company_name']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company ID Number</p>
                <p name="gc_company_Id" class="text-sm"><?= $collaborator[0]['gc_company_id']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Owner Name</p>
                <p name="gc_owner_name" class="text-sm"><?= $collaborator[0]['gc_owner_name']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">National ID</p>
                <p name="gc_owner_nrc" class="text-sm"><?= $collaborator[0]['gc_owner_nrc']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Email Address</p>
                <p name="gc_email" class="text-sm tracking-wider"><?= $collaborator[0]['gc_email']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Phone Number</p>
                <p name="gc_phone" class="text-sm"><?= $collaborator[0]['gc_phone_num']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Address</p>
                <p name="gc_address" class="text-sm"><?= $collaborator[0]['gc_address']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Package</p>
                <p name="s_package_id" class="text-alert text-sm font-semibold"> <?= $collaborator[0]["s_package_name"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Duration</p>
                <p name="s_duration" class="text-sm"> <?= $collaborator[0]["s_duration_name"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Bought Date</p>
                <p name="s_created_date" class="text-sm font-semibold">
                    <?= $collaborator[0]["created_date"]
                        = date("d / m / Y", strtotime($collaborator[0]["created_date"])); ?>
                </p>
            </div>
            <?php
            $currentDate = new DateTime();
            $expiration = new DateTime($collaborator[0]["s_expire_date"]);
            $interval = $currentDate->diff($expiration);
            if ($currentDate < $expiration) {
                $expire_status = $interval->days . " days";
            } elseif ($currentDate > $expiration) {
                $expire_status = " Expired";
            } else {
                $expire_status = "Expires today!";
            }
            ?>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Expire Date</p>
                <p name="" class="text-goldYellow font-semibold text-sm">
                    <?= $collaborator[0]["s_expire_date"]
                        = date("d / m / Y", strtotime($collaborator[0]["s_expire_date"])); ?>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Days Left B4 Expire</p>
                <p name="gc_created_date" class="text-alert text-sm font-semibold"> <?= $expire_status; ?> </p>
            </div>
        </div>
        <div class=" flex  my-16 ">
            <a href="./admin_collaborator_detail_edit.php?id=<?= $collaborator[0]['collaborator_id']  ?>" class="tracking-wider text-white bg-goldYellow opacity-75 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  ">
                Edit Detail</a>

            <a href="./admin_collaborator_all.php" class="tracking-wider mx-10 text-white bg-alert opacity-80 hover:opacity-100
            focus:ring-4 focus:outline-none  focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                Cancel</a>

            <?php $activity = $collaborator[0]["gc_activity_ban"];
            $activityStatus = $activity == 0 ? "Activity OFF" : "Activity ON";
            $activityColor = $activity == 0 ? "bg-darkGreen" :  "bg-paleGray ";

            ?>
            <a name='activity_ban' href="#" onclick="confirmation( '../../Controller/Collaborator/CollaboratorAllActivityOnOffController.php?id=<?= $collaborator[0]['collaborator_id'] ?>')" class="tracking-wider <?= $activityColor  ?>  text-alert opacity-75 hover:opacity-100 hover:bg-darkGreen
            border-2 border-darkGreen font-semibold rounded-lg text-medium px-8 py-2 text-center ">
                <?= $activityStatus; ?>
            </a>
        </div>
        <hr class="w-[35rem] border-2 text-gray-500">

    </div>

    <!--End  Collaborator Detail -->

    <div class="p-4 pt-20 sm:ml-64">
        <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">Property List</h1>

        <!-- results found -->
        <div class="pt-4 pb-8 flex items-center">
            <!-- 100 found -->
            <span class="lg:ms-16 sm:ms-8 me-8 lg:text-2xl text-base text-black dark:text-white"><span><?= $resultCount['total_result'] ?></span> Found</span>
            <!-- in stock / out of stock -->
            <div class="lg:space-x-8 space-x-4 lg:text-base text-xs">
                <label for="allStock" class="text-gray-500 cursor-pointer label "><a href="../Collaborator/admin_collaborator_detail_preview.php?id=<?= $_GET['id'] ?>">All Stocks</a></label>
                <label for="outStock" class="text-gray-500 cursor-pointer label "><a href="../Collaborator/detail_preview_outStock.php?id=<?= $_GET['id']; ?>">Out of Stock</a>
                </label>
                <label for="inStock" class="text-goldYellow  cursor-pointer label "><a href="../Collaborator/detail_preview_inStock.php?id=<?= $_GET['id']; ?>">In Stock</a></label>
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
            <input type="text" id="propertyID" placeholder="Property ID" class="rounded-lg text-black dark:text-white dark:bg-gray-800 bg-white">
            <a href="#" onclick="submitSearch()" type="submit" class="bg-darkGreen px-6 py-1.5 text-white rounded-lg border border-black">Search</a>
        </div>

        <!-- table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" id='table'>
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
                    <?php
                    $counter = (isset($_GET['page'])) ? (1 + (6 * ($_GET['page'] - 1))) : 1;

                    foreach ($properties as $property) {
                    ?>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $counter ?>
                            </th>
                            <td class="px-4 py-4">
                                <?= $property['p_code'] ?>
                            </td>
                            <td class="px-4 py-4">
                                <?= $property['pt_name'] ?>
                            </td>
                            <?php
                            $property_type = $property['p_offer'] == '0';
                            ?>
                            <td class="px-6 py-4 <?= $property_type ? 'text-goldYellow' : 'text-alert'; ?> font-semibold">
                                <?= $property_type ? 'Rent' : 'Sale'; ?>
                            </td>
                            <td class="px-4 py-4 text-left">
                                <span class="text-green-500 font-semibold"><?= $property['p_price_unit'] == '1' ? '$' . number_format($property['p_price']) : number_format($property['p_price']) . ' Kyats'; ?> / <?= $property['p_duration'] == '0' ? 'Per Month' : 'Per Year'; ?>
                                </span>
                            </td>
                            <td class="px-4 py-4  font-bold tracking-wide">
                                <?= $property["township_name"] ?>
                            </td>

                            <td class="px-4 py-4 flex justify-center">
                                <a href="../Property/detail.php?id=<?= $property['id'] ?>">
                                    <ion-icon name="document-text-outline" class="text-lg font-medium cursor-pointer text-blue-500"></ion-icon>
                                </a>
                            </td>
                            <td class="px-4 py-4 text-center">
                                <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
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
                foreach ($properties as $property) {
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
                                <a href="../Property/detail.php?id=<?= $property['id'] ?>" class="mt-2.5 mb-5">
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
                                        <img class="w-14 h-14" src="../../../Storage/collaborator_img/gc<?= $property['uploader_id'] . '/' . $collaborator[0]['gc_logo'] ?>" alt="<?= $guruCollaborator[$property['uploader_id'] - 1]['gc_company_name']; ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class=" mb-5 text-darkGreen dark:text-green-500 flex items-center text-lg">
                                <i class="fa-sharp fa-solid fa-money-bill pt-1"></i>
                                <span class="ml-3 mt-2 font-meduim">
                                    <?php if ($property['p_price_unit'] == 1) {
                                        echo '$ ' . number_format($property['p_price']);
                                    } elseif ($property['p_price_unit'] == 2) {
                                        if ($property['p_price'] > 999_999) {

                                            $formatted_price = substr_replace($property['p_price'], ' lakh', -5);
                                            echo $formatted_price;
                                        } else {

                                            echo 'Ks ' . number_format($property['p_price']);
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
                                    <div><span class="font-playFair">Township: </span>
                                        <span><?= $property['township_name'] ?></span>
                                    </div>
                                    <div>
                                        <span class="font-playFair">Property Size: </span>
                                        <span><?= number_format($property['p_width']) ?> x <?= number_format($property['p_length']) ?>
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

                            <div class="flex items-center justify-end">
                                <a href="../Property/detail.php?id=<?= $property['id'] ?>" class="text-darkGreen dark:text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2 text-center dark:border-slate-50">Details</a>
                            </div>
                        </div>
                    </div>


                <?php }
                ?>
            </div>
        </div>
    </div>

    <!-- Modal-->
    <div id="activityModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center;">
        <div style="background: white; padding: 40px; border-radius: 8px; width: 300px; text-align: center;">
            <p class="mb-5">Are you sure to
                <span class="font-semibold text-alert"> <?= $activityStatus; ?></span>?
                this <span class="font-semibold"> <?= $collaborator[0]['gc_company_name']; ?></span>
            </p>
            <button class="text-white rounded hover:bg-goldYellow bg-alert py-1 px-4 " onclick="confirmActivity()">Confirm</button>
            <button class="text-white rounded hover:bg-goldYellow bg-darkGreen py-1 px-4 " onclick="hideModal()">Cancel</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>