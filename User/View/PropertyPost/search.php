<?php
session_start();
include '../../Controller/common/colorsController.php';
include '../../Controller/PropertyTypeController.php';
include '../../Controller/common/LocationListController.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search Result</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

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
    <script src="../resources/js/search_filter_btn.js" defer></script>
    <script src="../resources/js/sort_by_section.js" defer></script>
</head>

<body class="bg-[#F7F7F7] tracking-wide" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color'] ?>">
    <!-- Navigation -->
    <?php include '../header/header.php' ?>
    <!-- filter dropdown (select) boxes -->
    <div>
        <!-- Search Property Title and filter btn -->
        <div class="relative">
            <div class="flex justify-center items-center my-8">
                <h1 class="text-xl font-bold">Explore Your Properties</h1>
            </div>
            <div class="absolute top-0 right-5 lg:right-20">
                <button type="button" id="toggleFilterBtn" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                    Filter
                </button>
            </div>
        </div>

        <!-- search boxes first row -->
        <div class="flex items-center justify-evenly my-5">
            <div>
                <input type="text" id="pCode" class="bg-white border border-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block lg:w-52 w-28 p-2.5 dark:placeholder-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Property Code" />
            </div>

            <div>
                <select name="p_offer" id='pOffer' class="lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2">
                    <option value="" disabled selected>Offer Type</option>
                    <option value="0">Rent</option>
                    <option value="1">Sale</option>
                </select>
            </div>

            <div>
                <select name="p_type" id='pType' class="lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2">
                    <option value="" disabled selected>Property Type</option>

                    <?php foreach ($property_types as $p_type) : ?>
                        <option value="<?= $p_type['id']; ?>" <?php echo ($p_type['id'] == $_SESSION['type']) ? 'selected' : ''; ?>>
                            <?= $p_type['pt_name']; ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>
        </div>

        <!-- search boxes sec row -->
        <div class="flex items-center justify-evenly toggle my-5">
            <div>
                <select name="state" class=" lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2" id="pRegion">
                    <option value="" disabled selected>State</option>
                    <?php foreach ($locations as $region) : ?>
                        <option value="<?= $region['id']; ?>" <?php echo ($region['id'] == $_SESSION['region']) ? 'selected' : ''; ?>>
                            <?= $region['name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <select name="p_township" class=" lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2" id="pTownship">
                </select>
            </div>
        </div>

        <!-- search boxes third row -->

        <div class="flex items-center toggle justify-evenly mb-5">
            <div class="pt-3">
                <label class="text-sm">Price Unit : </label>
                <select id="pUnit" class=" w-16 text-center text-sm py-1 rounded-lg border-2">
                <option value="" disabled selected></option>
                    <option value="1" <?php echo ($_SESSION['price_unit'] == 1) ? 'selected' : ''; ?>>$</option>
                    <option value="2" <?php echo ($_SESSION['price_unit'] == 2) ? 'selected' : ''; ?>>Ks</option>
                </select>

            </div>
            <div>
                <label class="text-sm">Price (From) : </label>
                <input name="from_price" class="bg-white border border-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block lg:w-52 w-28 p-2.5 dark:placeholder-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="<?= $_SESSION['minimum_price'] ?>" id="minimumPrice">

            </div>
            <div>
                <label class="text-sm">Price (to) : </label>
                <input name="from_price" class="bg-white border border-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block lg:w-52 w-28 p-2.5 dark:placeholder-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="<?= $_SESSION['maximum_price'] ?>" id="minimumPrice">

            </div>


        </div>
    </div>

    <!-- sort by -->
    <div class="bg-gray-800 mt-3 text-white py-5 flex items-center">
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



    <!-- cards -->

    <div id="filteredResultsContainer">
   </div>

    <!-- pagination -->
  
    <!-- footer -->
    <?php include '../footer/footer.php' ?>
    <script >
        $(document).ready(function() {
    // Function to update filtered results
    function updateFilteredResults(page) {
        // Get selected values from select boxes
        var pOffer = $("#pOffer").val();
        var pType = $("#pType").val();
        var pUnit = $("#pUnit").val();
        var pRegion = $("#pRegion").val();
        var pTownship = $('#pTownship').val();
        var minimumPrice = $('#minimumPrice').val();
        var maximumPrice = $('#maximumPrice').val();
        var sortBy = getSelectedSortBy(); // Get the selected sort value
        var pCode = $('#pCode').val();

        // Send AJAX request to the PHP script
        $.ajax({
            type: "POST",
            url: "../../Controller/FilterAjax.php",
            data: {
                pOffer: pOffer,
                pType: pType,
                pUnit: pUnit,
                pRegion: pRegion,
                pTownship: pTownship,
                minimumPrice: minimumPrice,
                maximumPrice: maximumPrice,
                pCode: pCode,
                sortBy: sortBy,
                page:page
            },
            success: function(response) {
                // Update the filtered results div
              
                // Assuming your response is HTML content, update the container
                $("#filteredResultsContainer").html(response);
            },
            error: function(xhr, textStatus, errorThrown) {
                console.error('Error occurred: ' + textStatus, errorThrown);
            }
        });
    }

    // Attach change event handlers to select boxes and radio buttons
    $("#pCode, #pOffer, #pType, #pUnit, #pRegion, #pTownship, #minimumPrice, #maximumPrice, input[name='sort_by']").on("change", function() {
        updateFilteredResults(1);
    });

    function getSelectedSortBy() {
        // Get the selected radio button's value
        var selectedSortBy = $("input[name='sort_by']:checked").val();
        return selectedSortBy;
    }
    $("#filteredResultsContainer").on("click", ".pagination a", function (e) {
        e.preventDefault();

        var page = $(this).attr("href").split("=")[1];
        updateFilteredResults(page);
        console.log(page)
    });

    updateFilteredResults(1);

  // for toggle filter
  $('.toggle').hide();
$('#toggleFilterBtn').click(function() {
  $('.toggle').slideToggle(150);
});
});
    </script>
    <script src="../resources/js/getTownship.js"></script>

</body>

</html>