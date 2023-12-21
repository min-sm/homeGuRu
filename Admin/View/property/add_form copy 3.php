<?php
include "../../Controller/Read/PropertyTypeListController.php";
include "../../Controller/Read/FacilityListController.php";
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
    <script src="../resources/js/show-img.js" defer></script>
    <script src="../resources/js/modal (add).js" defer></script>
    <script src="../resources/js/selectBx.js" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../resources/css/property_post_add_form.css">
    <title>Property Post Add Form</title>
</head>

<body class="bg-primary dark:bg-gray-700 tracking-wide">
    <!-- heading navigation -->
    <?php include '../commonView/menu.php' ?>

    <!-- main body -->
    <div class="p-4 pt-20 sm:ml-64">
        <!-- add property post -->
        <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">Add Property Post</h1>

        <!-- add image section -->
        <div class="flex flex-col lg:flex-row items-center sm:items-start gap-4 overflow-x-auto">
            <!-- add photo button -->
            <div>
                <label for="add_img" class="flex items-center justify-center w-96 h-56 bg-white dark:bg-gray-800 text-black dark:text-white rounded-lg border dark:border-white border-black"><span>+ Add Photo</span></label>
                <input type="file" multiple class=" hidden" id="add_img" accept=".jpg, .jpeg" />
            </div>


            <!-- selected images -->
            <div id="imageList" class="flex flex-col lg:flex-row items-center gap-4 text-black dark:text-white"></div>
        </div>

        <!-- form text boxes -->
        <div class="flex flex-col gap-8 items-center mt-8 text-black dark:text-white">

            <div class="flex w-3/4 justify-between ">
                <!-- property type -->
                <div class="flex flex-col ">
                    <label for="p_type" class="font-medium">Property Type</label>
                    <select id="p_type" name="pt_id" class="lg:w-96 w-28 px-5 py-2.5 rounded-lg border-2 text-black bg-white dark:bg-gray-800 dark:text-white" required>
                        <option disabled selected>Select Property Type</option>
                        <?php
                        foreach ($property_types as $p_type) {
                        ?>
                            <option value="<?= $p_type["id"] ?>" <?= ($p_type["pt_status"] == 1) ? 'data-floor-level="true"' : '' ?>><?= $p_type["pt_name"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <!-- owner name -->
                <div class="flex flex-col">
                    <label for="owner_name" class="font-medium">Owner Name</label>
                    <input type="text" placeholder="Min Soe Moe" id="owner_name" name="go_name" class="lg:w-96 w-28 px-5 py-2.5 rounded-lg border-2 text-black bg-white dark:bg-gray-800 dark:text-white">
                </div>
            </div>
            <div class="flex w-3/4 justify-between">
                <!-- floor level -->
                <div class="flex flex-col hidden" id="floor_lvl_section_element">
                    <label for="floor_lvl" class="font-medium">Floor Level</label>
                    <select id="floor_lvl" name="p_floor" class="lg:w-96 w-28 px-5 py-2.5 rounded-lg border-2 text-black bg-white dark:bg-gray-800 dark:text-white">
                        <option disabled selected>Select Floor Level</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">Over 6</option>
                        <option value="7">Over 8</option>
                        <option value="8">Over 10</option>
                    </select>
                </div>
                <!-- national_ID -->
                <div class="flex flex-col">
                    <label for="national_ID" class="font-medium">National ID</label>
                    <input type="text" placeholder="12/TaTaTa(N)123456" id="national_ID" name="go_nrc" class="lg:w-96 w-28 px-5 py-2.5 text-black bg-white dark:bg-gray-800 dark:text-white rounded-lg border-2">
                </div>
            </div>
            <div class="flex w-3/4 justify-between">
                <!-- Offer type -->
                <div class="flex flex-col">
                    <label class="font-medium">Offer Type</label>
                    <div class="flex flex-col">
                        <div>
                            <input type="radio" id="rent" name="p_offer" value="0" required />
                            <label for="rent">Rent</label>
                        </div>
                        <div>
                            <input type="radio" id="sale" name="p_offer" value="1" required />
                            <label for="sale">Sale</label>
                        </div>
                    </div>
                </div>
                <!-- phone number -->
                <div class="flex flex-col">
                    <label for="ph_num" class="font-medium">Phone number</label>
                    <input type="text" placeholder="09757346631" id="ph_num" name="go_phone_num" class="lg:w-96 w-28 px-5 py-2.5 text-black bg-white dark:bg-gray-800 dark:text-white rounded-lg border-2" required>
                </div>
            </div>
            <div class="flex w-3/4 justify-between">
                <!-- Duration -->
                <div class="flex flex-col hidden" id="duration">
                    <label class="font-medium">Duration</label>
                    <div class="flex flex-col">
                        <div>
                            <input type="radio" id="per_mth" name="p_duration" value="0" />
                            <label for="per_mth">Per month</label>
                        </div>
                        <div>
                            <input type="radio" id="per_yr" name="p_duration" value="1" />
                            <label for="per_yr">Per Year</label>
                        </div>
                    </div>
                </div>
                <!-- email -->
                <div class="flex flex-col">
                    <label for="email" class="font-medium">Email</label>
                    <input type="text" placeholder="blahblah@gmail.com" id="email" name="go_email" class="lg:w-96 w-28 px-5 py-2.5 text-black bg-white dark:bg-gray-800 dark:text-white rounded-lg border-2">
                </div>
            </div>

            <div class="flex w-3/4 justify-between ">
                <!-- price & bedrooms -->
                <div class="flex flex-col gap-16">
                    <!-- Price -->
                    <div class="flex flex-col ">
                        <label>Price</label>
                        <div class="flex justify-between">
                            <!-- price -->
                            <input type="number" placeholder="300,000" id="price" name="" class="lg:w-48 w-28 px-5 py-2.5 text-black bg-white dark:bg-gray-800 dark:text-white rounded-lg border-2">
                            <!-- price unit -->
                            <select id="property_type" name="" class="lg:w-32 w-8 px-5 py-2.5 rounded-lg border-2 text-black bg-white dark:bg-gray-800 dark:text-white" required>
                                <option disabled selected>Unit</option>
                                <option value="0">Kyat</option>
                                <option value="1">Dollar</option>
                            </select>

                        </div>
                    </div>

                    <!-- bedroom -->
                    <div class="flex flex-col ">
                        <label for="bedroom" class="font-medium">Bedroom</label>
                        <select id="bedroom" name="p_bed" class="lg:w-96 w-28 px-5 py-2.5 rounded-lg border-2 text-black bg-white dark:bg-gray-800 dark:text-white">
                            <option disabled selected>Select Number</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">Over 6</option>
                            <option value="7">Over 8</option>
                            <option value="8">Over 10</option>
                        </select>
                    </div>
                </div>

                <!-- note -->
                <div class="flex flex-col ">
                    <label for="note" class="font-medium">Note</label>
                    <textarea id="email" name="p_note" class="lg:w-96 w-28 h-full px-5 py-2.5 text-black bg-white dark:bg-gray-800 dark:text-white rounded-lg border-2 overflow-x-hidden"></textarea>
                </div>
            </div>

            <div class="flex w-3/4 justify-between ">
                <!-- size & unit -->
                <div class="flex flex-col gap-4">
                    <!-- width & length -->
                    <div class="flex flex-col ">
                        <label>Size</label>
                        <div class="flex flex-col ">
                            <div class="flex justify-between">
                                <!-- width -->
                                <input type="number" placeholder="Width" id="price" name="p_width" class="w-28 px-5 py-2.5 text-black bg-white dark:bg-gray-800 dark:text-white rounded-lg border-2" required>
                                <!-- length -->
                                <input type="number" placeholder="Length" id="price" name="p_length" class="w-28 px-5 py-2.5 text-black bg-white dark:bg-gray-800 dark:text-white rounded-lg border-2 " required>
                            </div>
                        </div>
                    </div>

                    <!-- unit -->
                    <div class="flex flex-col ">
                        <select name="p_unit" class="lg:w-96 w-28 px-5 py-2.5 rounded-lg border-2 text-black bg-white dark:bg-gray-800 dark:text-white" required>
                            <option disabled selected>Unit</option>
                            <option value="0">feet</option>
                            <option value="1">meter</option>
                        </select>
                    </div>
                </div>
                <!-- Township -->
                <div class="flex flex-col">
                    <label for="township" class="font-medium">Township</label>
                    <select id="township" name="" class="lg:w-96 w-28 px-5 py-2.5 rounded-lg border-2 text-black bg-white dark:bg-gray-800 dark:text-white">
                        <option value="" disabled selected>Select Township</option>
                        <option value="">Bahan</option>
                        <option value="">Tamwe</option>
                    </select>
                </div>
            </div>

            <div class="w-3/4">
                <label for="location_map" class="font-medium">Location Map</label>
                <input type="text" placeholder="Enter google map's embed share link" id="location_map" name="" class="w-full px-5 py-2.5 text-black bg-white dark:bg-gray-800 dark:text-white rounded-lg border-2">
            </div>

            <div class="w-3/4">
                <label class="mb-4 font-medium" for="additional_features">Additional Features</label>
                <?php

                $numFacilities = count($facilities);
                $cols = 3;
                $rows = ceil($numFacilities / $cols);

                echo '<div class="w-full grid grid-cols-3 lg:text-base text-sm">';

                for ($i = 0; $i < $cols; $i++) {

                    echo '<div class="space-y-4">';

                    for ($j = $i * $rows; $j < ($i + 1) * $rows && $j < $numFacilities; $j++) {

                        $facility = $facilities[$j];

                        echo '<div>';
                        echo '<input type="checkbox" id="chbx-' . $facility['id'] . '" name="p_facilities" value="chbx-' . $facility['facility_type'] . '">';
                        echo '<label for="chbx-' . $facility['id'] . '">' . $facility['facility_type'] . '</label><br>';
                        echo '</div>';
                    }

                    echo '</div>';
                }

                echo '</div>';

                ?>

            </div>

            <div class="w-3/4">
                <label for="description" class="font-medium">Detailed Description</label>
                <textarea name="" id="description" class="w-full h-96 px-5 py-2.5 text-black bg-white dark:bg-gray-800 dark:text-white rounded-lg border-2 overflow-x-hidden"></textarea>
            </div>

            <div class="w-3/4 flex justify-between">
                <button class="bg-darkGreen py-2 px-6 rounded-lg border border-black dark:border-white text-white">Submit</button>
                <button class="bg-goldYellow py-2 px-6 rounded-lg border border-black dark:border-white">Test View</button>
            </div>
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
</body>

</html>