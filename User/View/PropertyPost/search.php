User
<?php
session_start();
 include '../../Controller/common/colorsController.php' ?>

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

<body class="bg-[#F7F7F7] tracking-wide" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color']?>">
  <!-- Navigation -->
  <?php include '../header/header.php' ?>
  <!-- filter dropdown (select) boxes -->
  <div>
    <!-- Search Property Title and filter btn -->
    <div class="relative">
      <div class="flex justify-center items-center my-8">
        <h1 class="text-2xl">Search Property</h1>
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
        <input type="text" class="bg-white border border-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block lg:w-52 w-28 p-2.5 dark:placeholder-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Property ID" />
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
          <option value="1">Apartment</option>
          <option value="2">Commercial</option>
          <option value="3">Condo</option>
          <option value="4">House</option>
        </select>
      </div>
    </div>

    <!-- search boxes sec row -->
    <div class="flex items-center justify-evenly my-5">
      <div>
        <select name="state"  class="hidden lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2" id="pRegion">
          <option value="" disabled selected>State</option>
          <option value="1">Kachin</option>
          <option value="2">Kayah</option>
        </select>
      </div>
      <div>
        <select name="p_township" class="hidden lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2" id="pTownship">
          <option value="" disabled selected>Township</option>
          <option value="1">Bahan</option>
          <option value="2">Tamwe</option>
        </select>
      </div>
    </div>

    <!-- search boxes third row -->
    <div class="flex items-center justify-evenly my-5">
      <div>
        <select name="from_price" class="hidden lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2" id="minimumPrice">
          <option value="" disabled selected>Price (From)</option>
          <option value="">100</option>
          <option value="">200</option>
        </select>
      </div>

      <div>
        <select name="from_price" class="hidden lg:w-52 w-28 px-5 py-2.5 rounded-lg border-2" id="maximumPrice">
          <option value="" disabled selected>Price (To)</option>
          <option value="">100</option>
          <option value="">200</option>
        </select>
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
      <input type="radio" id="newest" name="sort_by" value="" class="hidden" checked />
      <input type="radio" id="price_l_t_h" name="sort_by" value="" class="hidden" />
      <input type="radio" id="price_h_t_l" name="sort_by" value="" class="hidden" />
    </div>
  </div>

  <!-- results found -->
  <div class="py-8">
    <span class="ms-16 me-8 sm:text-2xl <?php if(empty($_SESSION)){
      echo 'text-alert';
    }else{
      echo 'text-darkGreen';
    } ;?>"><span><?php if(!empty($_SESSION)){
      echo count($_SESSION);
    }else{
    echo 'Nothing';
    } ;?></span> Found</span>
    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
      Condo <i class="fa-solid fa-xmark ms-3" style="color: #ff0000"></i>
    </button>
    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
      Rent <i class="fa-solid fa-xmark ms-3" style="color: #ff0000"></i>
    </button>
  </div>

  <!-- cards -->
  

  <!-- pagination -->
  <div class="flex justify-center my-16">
    <nav aria-label="Page navigation example">
      <ul class="flex items-center -space-x-px h-10 text-base">
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Previous</span>
            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
          </a>
        </li>
        <li>
          <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">1</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Next</span>
            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <script>
    $(document).ready(function() {
      // Function to update filtered results
      function updateFilteredResults() {
        // Get selected values from select boxes
        var pOffer = $("#pOffer").val();
        var pType = $("#pType").val();
        var pUnit= $("#pUnit").val();
        var pRegion=$("#pRegion").val();
        var pTownship=$('#pTownship').val();
        var minimumPrice=$('#minimumPrice').val();
        var maximumPrice=$('#maximumPrice').val();
          

        // Send AJAX request to the PHP script
        $.ajax({
          type: "POST",
          url: "../../Controller/FilterAjax.php", 
          data: {
            pOffer: pOffer,
            pType: pType,
            pUnit: pUnit,
            pRegion: pRegion,
            pTownship:pTownship,
         minimumPrice:minimumPrice,
         maximumPrice:maximumPrice
            },
          success: function(response) {
            // Update the filtered results div
            console.log("AJAX request successful!");
            alert("Response: " + response);

            $("#filteredResults").html(response);
          },
        });
      }
      updateFilteredResults();
      // Attach change event handlers to select boxes
      $("#pOffer, #pType, #pUnit, #pRegion, #pTownship, #minimumPrice, #maximumPrice").on("change", function() {
    updateFilteredResults();
  });
    });
  </script>
  <!-- footer -->
  <?php include '../footer/footer.php' ?>
</body>

</html>