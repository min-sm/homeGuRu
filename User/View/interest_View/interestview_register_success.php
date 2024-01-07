<?php include '../../Controller/common/colorsController.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Interest View Register Success</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="../../../Storage/logo/<?= $resultSlider[0]["fav_icon"]?>">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap"
        rel="stylesheet" />

    <style>
        * {
            font-family: "Roboto";
        }
    </style>
     <style>
        /* The Modal (background) */
        #myModal {
          display: none;
          /* Hidden by default */
          text-align: center;
          justify-content: center;
          align-items: center;
          position: fixed;
          /* Stay in place */
          z-index: 1;
          /* Sit on top */
          top: 0;
          left: 0;
          width: 100%;
          /* Full width */
          height: 100%;
          overflow: auto;
          /* Enable scroll if needed */
          background-color: rgba(0, 0, 0, 0.8);
          /* Black w/ opacity */
        }
    
        /* Modal Content */
        #modal-content {
          flex-direction: column;
          background-color: rgba(255, 255, 255, 0.8);
          width: fit-content;
        }
      </style>
    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <!-- tailwind -->
      
    <link href="../resources/css/dist/output.css" rel="stylesheet" />

    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-primary" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color']?>">
    <!-- Navigation -->
   <?php include '../header/header.php' ?>
   
    <div class="flex flex-col w-ful items-center justify-evenly mt-5 mb-5 py-10">
        <h1 class="font-semibold text-3xl text-center  tracking-wide " >
            Interest Register
        </h1>
        <ion-icon class="w-20 h-20 mt-10 text-darkGreen" name="checkmark-circle-outline"></ion-icon>
        <p class="font-semibold text-2xl tracking-wide mb-10">Success !</p>
        <p class=" tracking-wide mb-10">
            Your request has been send successfully.
        </p>
        

        <a href="../Home_page/home.php"><button type="button" class=" tracking-wide bg-darkGreen hover:bg-green-800 
                      focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium text-white px-8 py-2 text-center 
                      dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            OK</button>
            </a>
    </div>

      <!-- Start  Related Properties -->

    <!-- End  Related Properties -->
    <script src="../resources/js/property_detail.js"></script>

    <?php include '../footer/footer.php' ?>
</body>

</html>