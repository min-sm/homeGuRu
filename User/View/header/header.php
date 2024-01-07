<?php include '../../Controller/common/colorsController.php' ?>
<?php include '../../Controller/SliderController.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet">

    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="bg-[#F7F7F7]">
    <!-- Navigation -->
    <nav class=" border-gray-200" style=" background-color: <?= $colors[0]['header'] ?>; color: <?= $colors[0]['hf_text_color']  ?>">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="../Home_page/home.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../../../Storage/logo/<?= $resultSlider[0]['logo'] ?>" class="md:h-12  h-11" alt="HomeGuRu Logo" />
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="../Login/user_login.php"><button type="button" class="text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800">
                        Login
                    </button></a>
                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" style=" background-color: <?= $colors[0]['header'] ?>; color: <?= $colors[0]['hf_text_color']  ?>" id="navbar-cta">
                <ul style=" background-color: <?= $colors[0]['header'] ?>; color: <?= $colors[0]['hf_text_color']  ?>" class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-700 rounded-lg bg-gray-800 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-gray-800">
                    <li>
                        <a href="../Home_page/home.php" class="home item block py-2 px-3 md:p-0 md:bg-transparent text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-teal-500 hover:text-white border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="../PropertyPost/buy_view.php" class="buy item block py-2 px-3 md:p-0 md:bg-transparent text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-teal-500 hover:text-white border-gray-700">Buy</a>
                    </li>
                    <li>
                        <a href="../PropertyPost/rent_view.php" class="rent item block py-2 px-3 md:p-0 md:bg-transparent text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-teal-500 hover:text-white border-gray-700">Rent</a>
                    </li>
                    <li>
                        <a href="../PropertyPost/property_post-Add-owner.php" class="sell item block py-2 px-3 md:p-0 md:bg-transparent text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-teal-500 hover:text-white border-gray-700">Sell</a>
                    </li>
                    <li>
                        <a href="../collaborator/collaborator_list_user_view.php" class="item collaborator block py-2 px-3 md:p-0 text-white rounded md:bg-transparent  hover:bg-gray-700 md:hover:bg-transparent md:hover:text-teal-500 hover:text-white border-gray-700 ">Collaborator</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- <script src="../resources/js/headerSelect.js"></script> -->
</body>

</html>