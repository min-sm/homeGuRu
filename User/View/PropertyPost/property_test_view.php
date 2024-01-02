<?php include '../../Controller/common/colorsController.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Property Details</title>
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
<<<<<<< HEAD

    .sell {
      color: rgb(20, 184, 166) !important;
    }
  </style>
=======
  </style>
 <style>
        .sell{
          color:rgb(20, 184, 166 ) !important;
        }
        </style>
>>>>>>> cb21674bc937154fbe4f4f2cf5cfda26dcd4b64f
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

  <!-- JS -->
  <script src="../resources/js/property_detail.js" defer></script>

</head>

<body class="bg-[#F7F7F7] tracking-wide" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color']?>">
  <!-- Navigation -->
  <?php include '../header/header.php' ?>

  <!-- uploader info -->
  <div class="flex flex-row items-center w-4/5 lg:w-1/2 my-6 ms-4 lg:ms-24">
    <!-- collaborator logo -->
    <div class="basis-1/5">
      <div class="rounded-full bg-[#D9D9D9] w-24">
        <img src="../resources/img/collaborator-tpj-logo.png" alt="test2" />
      </div>
    </div>

    <div class="lg:basis-4/5 w-fit">
      <div class="flex flex-col">
        <h1 class="font-semibold text-xl w-fit">
          Real Estate & Service Co., Ltd
        </h1>
        <div class="flex flex-row items-center mt-3 justify-between w-1/2 text-xs">
          <p>Feb 23 2023/ 5:00 PM</p>
          <p>13 people interest</p>
        </div>
      </div>
    </div>
  </div>

  <!-- property imgs & property info  -->
  <div class="flex flex-col lg:flex-row justify-between w-full lg:w-11/12">
    <!-- imgs -->
    <div class="w-full flex flex-col items-center justify-around">
      <div class="w-96 lg:w-[674.86px] lg:h-96 h-56 bg-cover bg-center rounded-lg property-img" style="background-image: url('../resources/img/entrance-hall.jpg')"></div>
      <div class="flex flex-row items-center w-3/4 justify-evenly mt-7">
        <div class="w-20 lg:w-40 h-12 lg:h-24 bg-cover bg-center rounded-lg property-img" style="background-image: url('../resources/img/study-room.jpg')"></div>
        <div class="w-20 lg:w-40 h-12 lg:h-24 bg-cover bg-center rounded-lg property-img" style="background-image: url('../resources/img/living-room.jpg')"></div>
        <div class="w-20 lg:w-40 h-12 lg:h-24 bg-cover bg-center rounded-lg property-img" style="background-image: url('../resources/img/dining-room.jpg')"></div>
        <div class="w-20 lg:w-40 h-12 lg:h-24 bg-cover bg-center rounded-lg property-img" style="background-image: url('../resources/img/kitchen.jpg')"></div>
      </div>
    </div>

    <!-- property info -->
    <div class="mt-5 lg:mt-0 space-y-4 text-center lg:text-left w-full lg:w-2/5">
      <h5 class="text-xl font-semibold tracking-tight text-black">
        4 Bed House in Golden Valley
      </h5>
      <div class="bg-gray-800 text-white text-center py-1.5 rounded-md text-xl font-semibold lg:mx-0 mx-5">
        1500 lakhs / month
      </div>
      <div>
        <span class="font-playFair font-semibold">Property ID: </span>CD354#E
      </div>
      <div>
        <span class="font-playFair font-semibold">Offer Type: </span>CD354#E
      </div>
      <div>
        <span class="font-playFair font-semibold">Property Type: </span>CD354#E
      </div>
      <div>
        <span class="font-playFair font-semibold">Size: </span>CD354#E
      </div>
      <div>
        <span class="font-playFair font-semibold">Township: </span>CD354#E
      </div>

      <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
        <ion-icon name="logo-facebook" class="text-lg mr-2"></ion-icon> Share
      </button>
      <button type="button" class="text-white bg-green-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
        <ion-icon name="call" class="text-lg mr-2"></ion-icon> Contact
      </button>
      <button type="button" class="text-white bg-goldYellow font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
        <i class="fa-solid fa-file-lines text-lg mr-2"></i>
        Interest View Register
      </button>
    </div>
  </div>

  <!-- The Modal -->
  <div id="myModal">
    <!-- Modal content -->
    <div id="modal-content" class="flex items-center justify-center">
      <img id="display-full-img" class="w-4/5 h-auto lg:w-auto lg:h-[80vh]" src="" />
      <span id="img-description" class="mt-4"></span>
    </div>
  </div>
  <!-- complete property details -->
  <div class="flex flex-col items-center lg:w-3/5 w-full lg:ml-10 ml-0">
    <!-- map -->
    <div class="mt-6 mx-4 relative ">
      <div class="h-32 w-full lg:w-[896px] lg:h-72 top-3.5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30549.300087395244!2d96.17693643476562!3d16.8430906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193f51faa68ff%3A0x72868c60b69532c4!2sEx%3BbraiN%20Office!5e0!3m2!1sen!2smm!4v1702148429176!5m2!1sen!2smm" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="h-32 w-full lg:w-[896px] lg:h-72 border border-black rounded-lg shadow-[rgba(6,_24,_44,_0.4)_0px_0px_0px_2px,_rgba(6,_24,_44,_0.65)_0px_4px_6px_-1px,_rgba(255,_255,_255,_0.08)_0px_1px_0px_inset]"></iframe>
      </div>
    </div>

    <!-- line break -->
    <hr class="my-6 w-11/12 lg:w-1/2 h-1 bg-paleGray" />

    <!-- features -->
    <div class="text-center w-full">
      <h1 class="font-playFair text-2xl mb-3">Features</h1>

      <div class="grid grid-cols-3 lg:text-base text-sm">
        <div>
          <ul class="list-disc list-inside text-start">
            <li>24 hours security</li>
            <li>Air con</li>
            <li>Lift</li>
          </ul>
        </div>
        <div>
          <ul class="list-disc list-inside text-start">
            <li>Washing Machine</li>
            <li>Car parking</li>
            <li>Generator</li>
          </ul>
        </div>
        <div>
          <ul class="list-disc list-inside text-start">
            <li>Refrigerator</li>
            <li>Swimming Pool</li>
            <li>Shopping Center</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- line break -->
    <hr class="my-6 w-11/12 lg:w-1/2 h-1 bg-paleGray" />

    <!-- descriptions -->
    <div class="w-full">
      <h1 class="font-playFair text-2xl mb-3 text-center">Description</h1>

      <p class="tracking-wider leading-8">
        <?php
        function addBRAfterFullStop($text)
        {
          return preg_replace('/\.\W/', '.<br>', $text);
        }

        // information comes from database will be given to $inputText variable
        $inputText = "This is a 5 Bed House in Kamayut. The asking price is 4800 lakhs per month, and the square feet is 3200. Inside the property, there are three bedrooms with ensuites and two single bedrooms. The property will come unfurnished or furnished with all essentials for daily living. This includes items such as a TV, sofa set, coffee table, dining table, chairs, beds, mattresses, washing machine & a fridge freezer. This house comes with access car parking and a backup generator for 24-hour electricity. For more information about Myanmar Real Estate contact us; Phone, Viber & telegram : +959-980636388 Email : myanmarproperties3@gmail.com";
        $processedText = addBRAfterFullStop($inputText);
        echo $processedText;
        ?>
      </p>
    </div>
  </div>
  <!-- line break -->
  <hr class="w-full my-6 h-1 bg-paleGray" />

  <!-- stop view btn -->
  <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-6 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 block relative lg:left-3/4 left-12">Stop Test View</button>

  <!-- footer -->
  <?php include '../footer/footer.php' ?>

</body>

</html>