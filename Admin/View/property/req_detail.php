<?php
include "../../Controller/Property/SinglePropertyDetailController.php";
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
                <a href="../../Controller/Property/PStatusUpgrade.php?id=<?= $_GET['id']; ?>&p_status=1" class="bg-darkGreen py-2 px-6 rounded-lg border text-sm sm:text-base text-white">Move to pending list</a>
                <button id="deleteBtn" class="bg-alert py-2 px-6 rounded-lg border text-sm sm:text-base text-white" onclick="deleteBxShow()">Decline</button>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

        <!-- The Modal -->
        <div id="myModal">
            <!-- Modal content -->
            <div id="modal-content" class="flex items-center justify-center">
                <img id="display-full-img" class="w-4/5 h-auto lg:w-auto lg:h-[80vh]" src="" />
                <span id="img-description" class="mt-4"></span>
            </div>
        </div>

        <!-- Delete Box Modal Overlay -->
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