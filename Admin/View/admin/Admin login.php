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
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-primary h-screen w-full flex flex-col justify-center items-center">
  <!-- Start Navigation -->
  <!-- component -->
  <div class="text-center mb-7">
    <div class="inline-block w-40 bg-secondary rounded-lg">
      <img src="./logo.png" width="100%" alt="" />
    </div>
    <h2 class="text-xl font-bold mt-6 mb-2">Home GuRu</h2>
  </div>
  <form action="../../Controller/AdminController/AdminController.php" method="post" class="w-3/4 max-w-sm flex flex-col justify-center text-center">
    <div class="mb-6">
      <label class="block mb-2 ml-8 font-medium text-left text-secondary" for="email">Email</label>
      <input name="email" class="inline-block w-80 p-4 leading-6 text-sm placeholder-gray-400 bg-white shadow border-gray-400 rounded h-12" type="email" placeholder="example123@gmail.com" />
    </div>
    <div class="mb-10">
      <label class="text-left ml-8 block mb-2 font-medium text-secondary" for="password">Password</label>
      <input name="password" class="inline-block w-80 p-4 leading-6 text-lg placeholder-gray-400 bg-white shadow border-gray-400 rounded h-12" type="password" placeholder="•••••••••••••••••" />
    </div>
    <button  name="login" class="inline-block tracking-wider mx-auto  py-2 w-28 mb-6 text-center  leading-6 text-white font-medium bg-darkGreen hover:bg-darkGreen border-3 border-darkGreen shadow rounded transition duration-200">
      Log in
    </button>
  </form>
</body>
</html>