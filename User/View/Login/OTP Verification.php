<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OTP Verification</title>
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
  <section class="pb-20">
    <div class="container px-4 mx-auto">
      <h2 class="text-xl text-left md:text-3xl font-bold my-10 ml-10 sm:ml-20 md:ml-8 lg:ml-8">OTP Verification Code</h2>
      <p class="mt-4 ml-8 text-sm">
        We sent you a One Time Password (OTP) with this email address:
      </p>
      <p class="mt-8 ml-8 text-sm font-bold">(example123@gmail.com)</p>
      <form action="" class="w-3/4 max-w-sm  ml-8 text-left ">
        <div class="flex mt-7  gap-3 mb-6">
          <input class="w-12  h-12 text-center border rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500" type="text" maxlength="1" pattern="[0-9]" inputmode="numeric" autocomplete="one-time-code" required />
          <input class="w-12 h-12 text-center border rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500" type="text" maxlength="1" pattern="[0-9]" inputmode="numeric" autocomplete="one-time-code" required />
          <input class="w-12 h-12 text-center border rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500" type="text" maxlength="1" pattern="[0-9]" inputmode="numeric" autocomplete="one-time-code" required />
          <input class="w-12 h-12 text-center border rounded-md shadow-sm focus:border-teal-500 focus:ring-teal-500" type="text" maxlength="1" pattern="[0-9]" inputmode="numeric" autocomplete="one-time-code" required />
        </div>
        <p class="mt-8 ml-0 text-sm">OTP auto resend in 10 secs</p>
        <p class="mt-5 ml-0 text-sm text-gray-400">Didn’t received an (OTP) ?</p>
        <p class=" mt-5 ml-0ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"><u>Resend OTP ?</u></p>
        <div class="flex mt-8 ">
          <button class="inline-block ml-0 tracking-wider m-auto  py-2 w-28 mb-6 text-center  leading-6 text-white font-medium bg-darkGreen hover:bg-green-900
           border-3 border-darkGreen shadow rounded transition duration-200" type="button">
            Verify
          </button>
          <button class="inline-block tracking-wider m-auto  ml-0 py-2 w-28 mb-6 text-center  leading-6 text-white font-medium  bg-gray-500 hover:bg-red-600 border-3 border-darkGreen shadow rounded transition duration-200" type="button">
            Cancel
          </button>
        </div>

      </form>
    </div>
    </div>
  </section>
  <?php include '../Home_page/footer.php'   ?>
</body>

</html>