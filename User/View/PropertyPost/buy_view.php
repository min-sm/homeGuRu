<?php include '../../Controller/common/colorsController.php' ?>
<?php include '../../Controller/PropertyTypeController.php' ?>
<?php include '../../Controller/common/LocationListController.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rent</title>

    <style>
        .buy {
            color: rgb(20, 184, 166) !important;
        }
    </style>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js" defer></script>

    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- JS -->
    <script src="../resources/js/sort_by_section.js" defer></script>
</head>

<body class="bg-[#F7F7F7]" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color'] ?>">
    <!-- Navigation -->
    <?php include '../header/header.php' ?>

    <!-- filter dropdown (select) boxes -->
    <div class="flex  justify-center flex-wrap  items-center gap-8 my-8 w-full  ">
        <div class="flex gap-8">
            <div>
                <select name="p_type" id='pType' class="lg:w-52 w-20 text-sm sm:text-base px-1 py-2 rounded-lg border-2">
                    <option value="" disabled selected>Property Type</option>

                    <?php foreach ($property_types as $p_type) : ?>
                        <option value="<?= $p_type['id']; ?>">
                            <?= $p_type['pt_name']; ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>

            <div>
                <select name="state" class="lg:w-52 w-20 sm:text-base text-sm  px-1 py-2 rounded-lg border-2" id="pRegion">
                    <option value="" disabled selected>State</option>
                    <?php foreach ($locations as $region) : ?>
                        <option value="<?= $region['id']; ?>">
                            <?= $region['name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <select name="p_township" class="lg:w-52 w-20 sm:text-base text-sm  px-1 py-2 rounded-lg border-2" id="pTownship">

                </select>
            </div>
        </div>
        <div class="flex sm:space-x-5 space-x-2 flex-wrap">
            <div>
                <select id="pUnit" class=" w-20  text-center text-sm py-1 rounded-lg border-2">
                    <option value="" disabled selected>Unit</option>
                    <option value="1">$</option>
                    <option value="2">Ks</option>
                </select>

            </div>
            <div>

                <input name="from_price" class="bg-white border border-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block lg:w-52 w-28 p-2.5 dark:placeholder-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Price (From)" id="minimumPrice">

            </div>
            <div>

                <input name="from_price" class="bg-white border border-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block lg:w-52 w-28 p-2.5 dark:placeholder-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Price (to)" id="maximumPrice">

            </div>
        </div>
    </div>
    </div>

    <!-- sort by -->
    <div class="bg-gray-800 mt-3 text-white py-5 flex items-center flex-wrap">
        <span class="flex-none ms-16">Sort by</span>
        <div class="flex items-center flex-1 lg:ms-32 ms-8">
            <label for="newest" class=" cursor-pointer label ms-3">Newest</label>
            <label for="price_l_t_h" class="text-gray-500 cursor-pointer label ms-8">Price (Low to High)</label>
            <label for="price_h_t_l" class="text-gray-500 cursor-pointer label ms-8">Price (High to Low)</label>
            <input type="radio" id="newest" name="sort_by" value="newest" class="hidden" checked />
            <input type="radio" id="price_l_t_h" name="sort_by" value="lth" class="hidden" />
            <input type="radio" id="price_h_t_l" name="sort_by" value='htl' class="hidden" />
        </div>
    </div>

    <div id="filteredResultsContainer"></div>









    <!-- footer -->
    <?php include '../footer/footer.php' ?>
    <script src="../resources/js/getTownship.js"></script>
    <script src="../resources/js/buyAjax.js"></script>
</body>

</html>