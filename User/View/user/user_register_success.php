<?php include '../../Controller/common/colorsController.php' ?>
<?php include '../../Controller/SliderController.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Register Success</title>
  <!--favicon -->
  <link rel="icon" type="image/x-icon" href="../../../Storage/logo/<?= $resultSlider[0]["fav_icon"]?>">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />
  <style>
    * {
      font-family: "Roboto";
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-[#F7F7F7]" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color'] ?>">
<?php include '../header/header.php'   ?>
  <!-- Start Navigation -->
  <!-- component -->

  <div class="flex flex-col w-full items-center justify-evenly my-10">
        <h1 class="font-semibold text-3xl text-center  tracking-wide " style="font-family: 'Playfair Display';">
            User Register
        </h1>

        <ion-icon class="w-20 h-20 m-10 text-darkGreen" name="checkmark-circle-outline"></ion-icon>
        <p class="font-bold text-2xl tracking-wide mb-10">Success !</p>
        <p class="font-medium tracking-wide mb-2">
            You has been Registered successfully.
        </p>
        <p class="font-medium  tracking-wide mb-5">
            We will send verify message to your Email.
        </p>

        <a href="https://mail.google.com/mail/u/0/#inbox"><button type="submit" class=" tracking-wide bg-darkGreen hover:bg-green-800 
                      focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium text-white px-8 py-2 text-center 
                      dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Go To Mail</button></a>
    </div>
  <?php include '../footer/footer.php'   ?>
</body>
</html>

