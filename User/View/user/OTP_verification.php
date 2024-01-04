<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OTP Verification</title>
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

  <body class="bg-primary ">
    <!-- Start Navigation -->
    <?php include '../header/header.php'   ?>
  <!-- component -->
<section  class="pb-20" >
<form action="../../Controller/otpverifyController.php" method="post" metacharset >
<div class="container mt-8">
      <p class="font-semibold ml-8 text-xl">OTP Verification Code</p>
      <p class="mt-4 ml-8">
        We sent you a One Time Password (OTP) with this email address:
      </p>
      <p class="mt-4 ml-8 font-bold">(example123@gmail.com)</p>
    </div>
    <div class="flex mt-5 ml-8 gap-3 mb-6">
      <input
        class="w-12 h-12 text-center border rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500"
        type="text"
        maxlength="1"
        pattern="[0-9]"
        inputmode="numeric"
        autocomplete="one-time-code"
        name = "otp1"
       
      />
      <input
        class="w-12 h-12 text-center border rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500"
        type="text"
        maxlength="1"
        pattern="[0-9]"
        inputmode="numeric"
        autocomplete="one-time-code"
        name = "otp2"
       
      />

      <input
        class="w-12 h-12 text-center border rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500"
        type="text"
        maxlength="1"
        pattern="[0-9]"
        inputmode="numeric"
        autocomplete="one-time-code"
        name = "otp3"
        
      />
      <input
        class="w-12 h-12 text-center border rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500"
        type="text"
        maxlength="1"
        pattern="[0-9]"
        inputmode="numeric"
        autocomplete="one-time-code"
        name = "otp4"
       
      />
    </div>
    <p  class="block ml-8 font-medium text-left text-red-500"><?= $_SESSION["otperror"] ?></p>
    <p class="ml-8 mt-3 text-gray-400 ">Didn’t received an (OTP) ?</p>
    <a  href="./OTP_verification.php" class="ml-8 mt-8 text-sm"><u>Resend OTP ?</u></a>

    <div class="flex ml-8 mt-6">
  <button
    class="text-white bg-darkGreen hover:bg-green-600 font-medium rounded-lg text-sm px-4 py-2 mr-4" 
    type="submit" name = "verify"
  >
    Verify
  </button>
 <a href="./OTP_verification.php "><button
    class="text-white bg-gray-500 hover:bg-red-600 first-line:font-medium rounded-lg text-sm px-4 py-2"
    type="button"
  >
    Cancel
  </button></a> 
</div>
</form> 

</section>
<?php include '../footer/footer.php'   ?>
</body>
</html>
<?php $_SESSION["otperror"] =""?>

