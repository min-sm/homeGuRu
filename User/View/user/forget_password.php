<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forget Password</title>
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
  <div class="container px-4 mx-auto">
          <form action="../../Controller//getOTPController.php" method="post" metacharset >
            
          <div class="flex flex-col items-start mt-9">
      <span class="text-gray-800 font-bold text-xl mb-1 ml-9">Forgot Password</span>
    
<span class="text-gray-500 ml-9 mt-3 mb-2">Enter your account email address and we’ll send you a One Time Password (OTP) to reset your password.</span>

      <input type="text" id="email" name="email" placeholder="" class="p-1 mt-8 ml-8 border border-gray-300 rounded-md w-64">

      <!-- Tailwind CSS classes for the "Send OTP" button -->
      <button class="bg-darkGreen text-white px-4 py-2 rounded-md mt-8 ml-8" name = "sendOTP">Send OTP</button>
  </div>
  <div class="container mx-auto flex items-center justify-center pt-8">
  <a href="#" class="text-gray-500 text-center">
    Go back to
  </a>
  <span class="text-blue-500 mx-1"></span> <!-- Add a separator, adjust styling as needed -->
        <a href="./user_login.php" class="text-blue-500 text-center">
          Log in
        </a>




          </form>  
         </div>
  </div>
</section>
 
<?php include '../footer/footer.php'   ?>
</body>
</html>

