

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Login</title>
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
  <h2 class="text-xl text-left md:text-3xl font-bold my-10 ml-10 sm:ml-20 md:ml-24 lg:ml-28">Log in for faster contact</h2>
   
          <form action="../../Controller/UserLoginController.php" method="post" metacharset class="w-3/4 max-w-sm  m-auto text-center ">
            
          <div class="mb-6">
    <label class="block mb-2 font-medium text-left text-secondary" for="">Email</label>
  
    <input name="email" class="inline-block w-full p-4 leading-6 text-sm placeholder-gray-400 bg-white shadow border-gray-400 rounded h-12" type="email" placeholder="example123@gmail.com" />
</div>
<div class="mb-10">
    <label class="text-left block mb-2 font-medium text-secondary" for="">Password</label>
    <input name="password" class="inline-block w-full p-4 leading-6 text-lg placeholder-gray-400 bg-white shadow border-gray-400 rounded h-12" type="password" placeholder="•••••••••••••••••" />
    <!-- Error message display -->
<p id="error-message" class="block mb-5 font-medium text-left text-red-500"><?php  if($_SESSION["loginerror"]){ echo $_SESSION['loginerror'];} ?></p>

</div> 
<a href="" class="text-center">
            <button name = "login" type="submit"
              class="inline-block tracking-wider m-auto  py-2 w-28 mb-6 text-center  leading-6 text-white font-medium bg-darkGreen hover:bg-darkGreen border-3 border-darkGreen shadow rounded transition duration-200"
            >
              Log in
            </button>
         </a>
  <div class="flex items-center justify-center mt-5 mb-4">
      <input checked id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 rounded focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
      <label for="checkbox-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember Me</label>
  </div>
  <div class="text-center pl-1 mb-3">
  <a href="./forget_password.php"  class="text-blue-700 text-sm tracking-wide">Forgot password?</a>
</div>
<p class="text-sm tracking-wide mb-16">Don't have account ? <a href="./user_register.php" class="text-blue-700 text-sm tracking-wide">Register</a></p>
          </form>  
         </div>
  </div>
</section>
<?php include '../footer/footer.php'   ?>
</body>
</html>
<?php $_SESSION["loginerror"] =""?>
