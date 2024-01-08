<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include '../../Controller/Setting/SliderController.php';
// if (!isset($_SESSION["authority"])) {
//     header('Location: ../../View/errors/wrongPath.php ');
//     exit();
// }
include "../../Controller/Property/SinglePropertyDetailController.php";
include "../../Controller/InterestForm/SinglePropertyInterestListController.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/b9864528d4.js" crossorigin="anonymous"></script>
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

    <!-- CSS -->
    <link rel="stylesheet" href="../resources/css/property_post_add_form.css">
    <title>Property Detail</title>

    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet" />

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="../../../Storage/logo/<?= $sliders[0]["fav_icon"] ?>">

    <!-- JS -->
    <script src="../resources/js/modal.js" defer></script>
    <script src="../resources/js/detail.js" defer></script>
</head>

<body class="bg-primary dark:bg-gray-700 tracking-wide">
    <!-- heading navigation -->
    <?php include '../commonView/menu.php' ?>

    <!-- main body -->
    <div class="p-4 pt-20 sm:ml-64">
        <!-- add property post -->
        <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">Property Details</h1>
        <!-- image section -->
        <div class="flex flex-col lg:flex-row items-center sm:items-start gap-4 text-black dark:text-white overflow-x-auto">
            <!--  images -->
            <?php
            $photos = [];
            for ($i = 1; $i <= 5; $i++) {
                if (!empty($property["p_photo_$i"])) {
                    $photos[] = $property["p_photo_$i"];
                }
            }
            ?>
            <?php foreach ($photos as $photo) : ?>
                <div class="image-label-container">
                    <div class="image-container property-img" style="background-image: url('../../../Storage/house/<?= $_GET["id"] ?>/<?= $photo ?>');"></div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- detailed information -->
        <div class="flex items-center justify-center mt-4 flex-col space-y-4">
            <!-- property code -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Property Code</span>
                    <!-- <span><?php echo "<pre>";
                                var_dump($property); ?></span> -->
                    <span><?= $property["p_code"] ?></span>
                </div>
            </div>
            <!-- property type -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Property Type</span>
                    <span><?= $property["pt_name"]; ?></span>
                </div>
            </div>
            <!-- Floor level -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Floor Level</span>
                    <span>
                        <?php
                        if ($property["p_floor"] == '6') {
                            echo "Over 6";
                        } else if ($property["p_floor"] == 7) {
                            echo "Over 8";
                        } else if ($property["p_floor"] == 8) {
                            echo "Over 10";
                        } else {
                            echo $property["p_floor"];
                        }
                        ?>
                    </span>
                </div>
            </div>
            <!-- Offer Type -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Offer Type</span>
                    <span><?= $property["p_offer"] == '0' ? 'Rent' : 'Sale'; ?></span>
                </div>
            </div>
            <!-- Duration -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Duration</span>
                    <span><?php if ($property["p_duration"] == '0') {
                                echo 'Per Month';
                            } else if ($property["p_duration"] == '1') {
                                echo 'Per Year';
                            } else {
                                echo $property['p_duration'];
                            } ?></span>
                </div>
            </div>
            <!-- Price -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Price</span>
                    <span><?= number_format($property['p_price']); ?></span>
                </div>
            </div>
            <!-- Price Type -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Price Type</span>
                    <span><?= $property['p_price_unit'] == '1' ? 'Dollar' : 'Kyat'; ?></span>
                </div>
            </div>
            <!-- Size Unit -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Size Unit</span>
                    <span><?= $property['p_size_unit'] == '1' ? 'm (meter)' : 'ft (foot)'; ?></span>
                </div>
            </div>
            <!-- Size -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Size</span>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center flex-col">
                            <p class="text-sm font-thin">Width</p>
                            <p><?= number_format($property['p_width']); ?><?= $property['p_size_unit'] == '1' ? 'm' : "'"; ?></p>
                        </div>
                        <div class="flex items-center flex-col">
                            <p class="text-sm font-thin">Length</p>
                            <p><?= number_format($property['p_length']); ?><?= $property['p_size_unit'] == '1' ? 'm' : "'"; ?></p>
                        </div>
                        <p><?= number_format($property['p_width'] * $property['p_length']); ?> <?= $property['p_size_unit'] == '1' ? 'm' : 'ft'; ?><sup>2</sup></p>
                    </div>
                </div>
            </div>
            <!-- Township -->
            <div class="flex w-80 lg:w-3/4 flex-col unimportant-detail ">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Township</span>
                    <span><?= $property['township_name']; ?></span>
                </div>
            </div>
            <!-- Location -->
            <div class="flex w-80 lg:w-3/4 text-black dark:text-white unimportant-detail ">
                <span class="font-medium text-lg">Location</span>
            </div>
            <!-- map -->
            <?= str_replace('<iframe', '<iframe class="w-3/4 h-72 unimportant-detail block-unimportant"', $property['p_location']); ?>

            <!-- features -->
            <div class="w-80 lg:w-3/4 text-black dark:text-white unimportant-detail  block-unimportant">
                <p class="font-medium text-lg mb-2">Additional Features</p>

                <div class="grid grid-cols-3 lg:text-base text-sm px-2 sm:px-0">

                    <?php
                    $facility = explode(", ", $property['p_facilities']);
                    $facilitiesRatio = (count($facility) / 3);
                    $first = (int)$facilitiesRatio;
                    $last = (int)(($facilitiesRatio - $first) * 10);

                    if ($facilitiesRatio <= 1) {
                        for ($i = 0; $i < 3; $i++) {
                            if (isset($facility[$i])) {
                                echo "<div><ul class='list-disc list-inside text-start'>";
                                echo "<li>" . $facility[$i] . "</li>";
                                echo "</ul></div>";
                            }
                        }
                    } else if ($last == 0) {
                        // echo "<pre>";
                        $chunks = array_chunk($facility, $first);
                        foreach ($chunks as $chunk) {
                            echo "<div>";
                            for ($i = 0; $i < $first; $i++) {
                                if (isset($chunk)) {
                                    // echo "<pre>";
                                    // print_r($chunk);
                                    echo "<ul class='list-disc list-inside text-start'>";
                                    echo "<li>" . $chunk[$i] . "</li>";
                                    echo "</ul>";
                                }
                            }

                            echo "</div>";
                        }
                    } else if ($last == 3 || $last == 6) { // 16 // first 5
                        // for first column
                        echo "<div>";
                        for ($i = 0; $i < $first + 1; $i++) {
                            if (isset($facility[$i])) {
                                echo "<ul class='list-disc list-inside text-start'>";
                                echo "<li>" . $facility[$i] . "</li>";
                                echo "</ul>";
                            }
                        }
                        echo "</div>";

                        // for sec column
                        echo "<div>";
                        for ($i = $first + 1; $i < count($facility) - $first; $i++) {
                            if (isset($facility[$i])) {
                                echo "<ul class='list-disc list-inside text-start'>";
                                echo "<li>" . $facility[$i] . "</li>";
                                echo "</ul>";
                            }
                        }
                        echo "</div>";

                        // for third column 
                        echo "<div>";
                        for ($i = count($facility) - $first; $i < count($facility); $i++) {
                            if (isset($facility[$i])) {
                                echo "<ul class='list-disc list-inside text-start'>";
                                echo "<li>" . $facility[$i] . "</li>";
                                echo "</ul>";
                            }
                        }
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>

            <!-- detailed description -->
            <div class=" w-80 lg:w-3/4 text-black dark:text-white space-y-2 unimportant-detail  block-unimportant">
                <p class="font-medium text-lg">Detailed Description</p>
                <p class="tracking-wider leading-6"><?= $property['p_description']; ?></p>
            </div>

            <!-- line break -->
            <div id="line-break-section" class="w-11/12 lg:w-3/4 flex justify-evenly items-center cursor-pointer transition-all duration-1000">
                <hr class="w-16 lg:w-64 h-1 bg-paleGray  my-3">
                <i id="line-break-arrow" class="fa-solid fa-circle-up text-black dark:text-white text-base lg:text-2xl transform transition duration-300"></i>
                <hr class="w-16 lg:w-64 h-1 bg-paleGray  my-3">
            </div>

            <!-- Uploader -->
            <div class="<?= !$isCollaborator  ? 'hidden' : ''; ?> flex w-80 lg:w-3/4 flex-col">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Uploader</span>
                    <span class="cursor-pointer text-blue-500 dark:text-blue-400 underline"><a href="../Collaborator/admin_collaborator_detail_preview.php?id=<?= $property['uploader_id']  ?>"><?= $property['gc_company_name']; ?></a></span>
                </div>
            </div>
            <!-- Owner Name -->
            <div class="flex w-80 lg:w-3/4 flex-col">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Owner Name</span>
                    <span><?= $property['go_name']; ?></span>
                </div>
            </div>
            <!-- National ID -->
            <div class="flex w-80 lg:w-3/4 flex-col">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Naitonal ID</span>
                    <span><?= $property['go_nrc']; ?></span>
                </div>
            </div>
            <!-- Phone Number -->
            <div class="flex w-80 lg:w-3/4 flex-col">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Phone Number</span>
                    <span><?= $property['go_phone_num']; ?></span>
                </div>
            </div>
            <!-- Email Address -->
            <div class="flex w-80 lg:w-3/4 flex-col">
                <div class="flex items-center justify-between text-black dark:text-white">
                    <span class="font-medium text-lg">Email Address</span>
                    <span><?= $property['go_email']; ?></span>
                </div>
            </div>
            <!-- notes -->
            <div class=" w-80 lg:w-3/4 text-black dark:text-white space-y-2">
                <p class="font-medium text-lg">Note</p>
                <p class="tracking-wider leading-6"><?= $property['p_note']; ?></p>
            </div>

            <!-- buttons -->
            <div class="w-3/4 flex gap-5">
                <a href="edit.php?id=<?= $_GET['id']; ?>" class="<?= $property['uploader_id'] == 0 ? '' : 'hidden'; ?> bg-darkGreen py-2 px-6 rounded-lg border text-sm sm:text-base text-white">Edit</a>
                <button id="deleteBtn" class="bg-alert py-2 px-6 rounded-lg border text-sm sm:text-base text-white" onclick="deleteBxShow()">Delete</button>
                <button class="bg-goldYellow py-2 px-6 rounded-lg border text-sm sm:text-base text-white flex justify-between"><span class="inline-flex items-center justify-center mr-3 w-3 h-3 p-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300"><?= $property['p_interest_count']; ?></span>Interest</button>
            </div>
        </div>

        <!--Start  Interest People  List -->
        <div class="pt-4">
            <h1 class="text-center font-bold text-2xl mt-5 text-black dark:text-white">Interest People List</h1>

            <div class=" relative mb-5">
                <!--Start  Interest People Button  -->
                <div class=" relative h-12 ">
                    <a href="./interest_people_add.php" type="submit" class="absolute right-10 text-goldYellow bg-primary border-2 border-goldYellow hover:text-white hover:bg-darkGreen focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        + Add New</a>
                </div>
                <!--End Interest People Button  -->

                <!--Start Interest People  List Table -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
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
                            foreach ($interest_list as $interest) {
                            ?>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $counter ?>
                                    </th>
                                    <td class="px-6 py-4">
                                        <?= $interest['ilf_name']; ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $interest['ilf_phone_num']; ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $interest['ilf_email']; ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?php
                                        $date = new DateTime($interest['created_date']);
                                        $formattedDate = $date->format('Y/m/d h:i A');
                                        echo $formattedDate;
                                        ?>
                                    </td>
                                    <td class="px-4 py-4 flex justify-center">
                                        <a href="../InterestView/interest_people_detail.php">
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
                <!--End  Interest People  List Table -->
            </div>
        </div>
        <!--End  Interest People  List -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

        <!-- The Modal -->
        <div id="myModal">
            <!-- Modal content -->
            <div id="modal-content" class="flex items-center justify-center">
                <img id="display-full-img" class="w-4/5 h-auto lg:w-auto lg:h-[80vh]" src="" />
                <span id="img-description" class="mt-4"></span>
            </div>
        </div>

        <!-- Delete Box Modal -->
        <div id="delConfirmBx" class="hidden fixed top-0 left-0 z-50 w-full h-full overflow-auto bg-black bg-opacity-75 justify-center items-center">
            <!-- Modal content -->
            <div id="delBxContent" class="bg-paleGray p-10 border border-black border-solid w-3/4 flex gap-8 flex-col items-center rounded-lg">
                <p class="text-xl">Are you sure you want to delete?</p>
                <div class="flex gap-4">
                    <button onclick="noBtnClick()" class="py-2 px-8 bg-darkGreen text-white rounded-xl cursor-pointer">No</button>
                    <a href="../../Controller/Property/PropertyDeleteController.php?id=<?= $property['id'] ?>" class="py-2 px-8 bg-alert text-white rounded-xl cursor-pointer">Delete</a>
                </div>
            </div>
        </div>
</body>

</html>