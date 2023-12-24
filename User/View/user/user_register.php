<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Register</title>
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

<body class="bg-primary ">
  <!-- Start Navigation -->

  <!-- component -->
  <section class="pb-20">
    <div class="container px-4 mx-auto">
      <h2 class="text-xl text-left md:text-3xl font-bold my-10 ml-10 sm:ml-20 md:ml-24 lg:ml-28">Register for faster contact</h2>

      <form class="w-3/4 max-w-sm  m-auto text-center " action="../../Controller/UserRegisterController.php" method="Post" metacharset>
        <div class="mb-6">
          <label class="block mb-2 font-medium text-left text-secondary" for="username">User Name</label>
          <input name="username" class="inline-block w-full  p-4 leading-6 text-sm placeholder-gray-400 bg-white shadow  border-gray-400 rounded h-12" type="name" placeholder="John Smith" required />
        </div>
        <div class="mb-6">
          <label class="block mb-2 font-medium text-left text-secondary" for="email">Email</label>
          <input name="email" class="inline-block w-full  p-4 leading-6 text-sm placeholder-gray-400 bg-white shadow  border-gray-400 rounded h-12" type="email" placeholder="example123@gmail.com"required />
        </div>
        <div class="mb-10">
          <label class="text-left block mb-2 font-medium text-secondary" for="password">Password</label>
          <input name="word" class="inline-block w-full p-4 leading-6 text-lg  placeholder-gray-400 bg-white shadow border-gray-400 rounded h-12" type="password" placeholder="•••••••••••••••••" required/>
        </div>
        <div class="mb-10">
          <label class="text-left block mb-2 font-medium text-secondary" for="confirmpassword">Confirm Password</label>
          <input name="confirmword" class="inline-block w-full p-4 leading-6 text-lg  placeholder-gray-400 bg-white shadow border-gray-400 rounded h-12" type="password" placeholder="•••••••••••••••••" required />
        </div>
        <div class="mb-3">   <small class="block  font-medium text-left text-red-600"><?= $_SESSION["registererror"] ?></small> </div> 
        <a href="" class="text-center">
          <button type="submit" name="register" class="inline-block tracking-wider m-auto  py-2 w-28 mb-6 text-center  leading-6 text-white font-medium bg-darkGreen hover:bg-darkGreen border-3 border-darkGreen shadow rounded transition duration-200">
            Register
          </button>
        </a>
        <p type="submit" name="login" class="text-sm tracking-wide mb-16" >Already have an account ? <a href="./user_login.php" class="text-blue-700 text-sm tracking-wide">Log in</a></p>
      </form>
    </div>
    </div>
  </section>
 
</body>
</html>
<?php $_SESSION["registererror"]=""?>
