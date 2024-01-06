<?php include '../../Controller/common/colorsController.php' ?>
<?php include '../../Controller/SliderController.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collaborator Registration Success</title>
    <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="../../../Storage/logo/<?= $resultSlider[0]["fav_icon"] ?>">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap"
        rel="stylesheet" />

        <style>
          .collaborator{
            color:rgb(20, 184, 166 ) !important;
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

    <div class="flex flex-col  w-full items-center justify-evenly my-20">
        <h1 class="font-bold text-3xl text-center  tracking-wide " style="font-family: 'Playfair Display';">
            Collaborator Register
        </h1>

        <ion-icon class="w-32 h-32 m-10 text-darkGreen" name="checkmark-circle-outline"></ion-icon>
        <p class="font-bold text-2xl tracking-wide mb-10">Success !</p>
        <p class="font-medium tracking-wider mb-2">
            Your company has been Registered successfully.
        </p>
        <p class="font-medium  tracking-wider mb-8">
            We will contact you later.
        </p>

        <a href="../Home_page/home.php"><button type="submit" class=" tracking-wide bg-darkGreen hover:bg-green-800 
                      focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium text-white px-5 py-2 text-center 
                      dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Go To Home</button></a>
    </div>
    <?php include '../footer/footer.php' ?>

</body>

</html>