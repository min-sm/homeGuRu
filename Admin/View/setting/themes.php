<?php include '../../Controller/common/colorsController.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- tailwind -->
  <link href="../resources/css/dist/output.css" rel="stylesheet" />

  <!-- flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
  <!-- fontawsome -->
  <script src="https://kit.fontawesome.com/b9864528d4.js" crossorigin="anonymous"></script>
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
</head>

<body class="bg-primary dark:bg-gray-700 ">
  <?php include '../commonView/menu.php' ?>

  <!-- Generals Setting -->

  <div class="p-4  mt-36 sm:ml-72">
    <h1 class="text-2xl font-bold dark:text-white mb-16 ">Theme Setting</h1>
    <!-- Hero Section Photo -->
    <form action="">
      <h2 class="text-lg  font-medium dark:text-white mb-2 ">Hero Section</h2>
      <div class="w-[300px] h-[100px] mb-5">
        <label for="heroInput" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 flex items-center justify-center  rounded-md overflow-hidden">
          <img id="heroImg" src="../resources/img/home.jpg" alt="logo " height="100%" width="100%">
        </label>

        <input id="heroInput" type="file" hidden>
      </div>

      <h2 class="text-lg  font-medium dark:text-white mb-2 ">Collaborator Hero Section</h2>
      <div class="w-[300px] h-[100px] mb-5">
        <label for="collabInput" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 flex items-center justify-center  rounded-md overflow-hidden">
          <img id="collabImg" src="../resources/img/home.jpg" alt="logo " height="100%" width="100%">
        </label>

        <input id="collabInput" type="file" hidden>
      </div>
      <!-- logo setting -->
      <h2 class="text-lg  font-medium dark:text-white mb-2 ">Logos</h2>
      <div class="flex gap-10 mb-16 text-sm">
        <div class="w-20 h-20">
          <label id="logoLabel" for="logoInput" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 flex items-center justify-center  rounded-md">
            <img id="logoImg" src="../resources/img/common/logo-confirm.png" alt="logo " height="90%" width="90%">
          </label>
          <p class="dark:text-white text-secondary text-center text-sm">Logo</p>
          <input id="logoInput" type="file" hidden>
        </div>
        <div class="w-20 h-20 ">
          <label id="faviconLabel" for="faviconInput" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300  rounded-md flex items-center justify-center">
            <img id="faviconImg" accept=".svg,.jpg,.png,.jpeg" src="../resources/img/common/logo-confirm.png" alt="favicon" height="90%" width="90%">
          </label>
          <input id="faviconInput" accept=".svg,.jpg,.png,.jpeg" type="file" hidden>
          <p class="dark:text-white text-secondary text-center text-sm">Favicon</p>
        </div>
      </div>
      <!-- colors containter  -->
      <h2 class="text-lg font-medium dark:text-white mb-2 ">Color Theme</h2>
      <div class="flex gap-10 text-sm">
        <div class="w-20 h-20">
          <label id="headerLabel" for="header" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 inline-block rounded-md"></label>
          <p class="dark:text-white text-secondary text-center">header</p>
          <input id="header" type="color" hidden>
        </div>
        <div class="w-20 h-20">
          <label id="footerLabel" for="footer" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 inline-block rounded-md"></label>
          <p class="dark:text-white text-secondary text-center">footer</p>
          <input id="footer" type="color" hidden>
        </div>
        <div class="w-20 h-20">
          <label id="backgroundLabel" for="background" class="bg-primary w-full h-full border-gray-500 border dark:border-slate-300 inline-block rounded-md"></label>
          <p class="dark:text-white text-secondary text-center">background</p>
          <input id="background" type="color" hidden>
        </div>
        <div class="w-20 h-20">
          <label id="mainColorLabel" for="main_color" class="bg-darkGreen w-full h-full border-gray-500 border dark:border-slate-300 inline-block rounded-md"></label>
          <p class="dark:text-white text-secondary text-center">main-color</p>
          <input id="main_color" type="color" hidden>
        </div>
        <div class="w-20 h-20">
          <label id="textColorLabel" for="text_color" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 inline-block rounded-md"></label>
          <p class="dark:text-white text-secondary text-center">text-color</p>
          <input id="text_color" type="color" hidden>
        </div>
      </div>
      <div class="flex  justify-end  pb-5 pr-10 mt-10">
        <button type="button" class="mr-5 focus:outline-none text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-6 py-2 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
        <button type="button" class="text-darkGreen bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancel</button>
      </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="../resources/js/color_add.js"></script>
</body>

</html>