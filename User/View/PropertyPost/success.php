<?php
session_start();
?>
<?php include '../../Controller/SliderController.php'?>
<?php include '../../Controller/common/colorsController.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Property Add Success</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap"
      rel="stylesheet"
    />

    <style>
      * {
        font-family: "Roboto";
      }
    </style>
    <!-- flowbite -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <!-- tailwind -->

    <link href="../resources/css/dist/output.css" rel="stylesheet" />
<!--favicon -->
    <link rel="icon" type="image/x-icon" href="../../../Storage/logo/<?= $resultSlider[0]["fav_icon"]?>">

    <!-- ionic icon -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body class="bg-[#F7F7F7]" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color'] ?>">
    <!-- Start Navigation -->
    <?php include '../header/header.php'   ?>

     <!-- component -->
<section  class="pb-20" >
  <div class="container px-4 mx-auto">
          <form action="" method="post" metacharset >
            
          <div class="mt-7">
      <div class="flex flex-col items-center space-y-7">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="text-darkGreen w-28 h-28"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="1"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
        <h1 class="text-4xl font-bold">Success!</h1>
        <p class="w-5/6 whitespace-pre-wrap">Thank you for submitting your property to homeGuru. We will promptly process and verify the information before adding your listing to the website.</p>
        <a
        href="../Home_page/home.php"
          class="inline-flex items-center px-4 py-2 text-white bg-darkGreen border border-darkGreen rounded-full hover:bg-teal-500 focus:outline-none focus:ring"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-3 h-3 mr-2"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M7 16l-4-4m0 0l4-4m-4 4h18"
            />
          </svg>
          <span class="text-sm font-medium"> Go to Home </span>
        </a>
      </div>

      
    </div>

          </form>  
         </div>
  </div>
</section>
 
<?php include '../footer/footer.php'   ?>
</body>
</html>

