<?php

include '../../Controller/Setting/SliderController.php';


if (!isset($_SESSION["loginerror"])) {
  $_SESSION["loginerror"] = "";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login</title>
  
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
  <script>
    if (
      localStorage.getItem("color-theme") === "dark" ||
      (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
      document.documentElement.classList.add("dark");
    } else {
      document.documentElement.classList.remove("dark");
    }
  
  </script>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-primary dark:bg-secondary h-screen w-full flex flex-col justify-center items-center">
  <!-- Start Navigation -->
  <!-- component -->
  <div class="text-center mb-8">
    <div class="inline-block w-16 bg-secondary rounded-full">
      <img src="../../../Storage/logo/<?= $sliders[0]['fav_icon']?>" width="100%" alt="" />
    </div>
    <h2 class="text-2xl font-bold mt-2 mb-2 text-secondary dark:text-primary">Home GuRu</h2>
  </div>
  <form action="../../Controller/Admin/AdminController.php" method="post"  enctype="multipart/form-data" class="w-3/4 max-w-sm flex flex-col justify-center text-center">
    <div class="mb-6">
      <label class="block mb-2 ml-8 font-medium text-left  text-secondary dark:text-primary" for="email">Email</label>
      <input name="email" class="inline-block w-80 p-4 leading-6 text-sm placeholder-gray-400 bg-white dark:bg-gray-600 shadow border-gray-400 rounded h-12" type="email" placeholder="example123@gmail.com" />
    </div>
    <div class="mb-5">
      <label class="text-left ml-8 block mb-2 font-medium text-secondary" for="password">Password</label>
      <input name="password" class="inline-block w-80 p-4 leading-6 text-lg placeholder-gray-400 bg-white dark:bg-gray-600 shadow border-gray-400 rounded h-12" type="password" placeholder="•••••••••••••••••" />
</div>
<p class="mb-5"><?php $_SESSION["loginerror"] =""?></p>
<div class="block mb-2 ml-8 font-medium text-left text-red-500"><?= $_SESSION["loginerror"] ?></div>
    <button  name="login"  type = "submit"class="inline-block tracking-wider mx-auto  py-2 w-28 mb-6 text-center  leading-6 text-white font-medium bg-darkGreen hover:bg-darkGreen border-3 border-darkGreen shadow rounded transition duration-200">
      Log in
    </button>
  </form>
</body>
</html>
