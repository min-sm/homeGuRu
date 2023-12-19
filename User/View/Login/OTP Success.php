<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OTP Success</title>
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
  <?php include '../Home_page/header.php'   ?>
  <!-- component -->

  <section  class="pb-20" >
  <div class="container px-4 mx-auto ">
  <div class="flex flex-col items-center space-y-7 mt-11">
      <svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 w-28 h-28" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <h1 class="text-3xl font-bold">Success!</h1>
      <p>Your account has been verified successfully</p>
          <form action="" class="w-3/4 max-w-sm  m-auto text-center ">
            
        
<a href="" class="text-center">
            <button
              class="inline-block tracking-wider m-auto  py-2 w-28 mb-6 text-center  leading-6 text-white font-medium bg-darkGreen hover:bg-green-900 first-letter:border-3 border-darkGreen shadow rounded transition duration-200"
            >
              Go to Home
            </button>
         </a>

          </form>  
         </div>
  </div>
</section>
  <?php include '../Home_page/footer.php'   ?>
</body>

</html>