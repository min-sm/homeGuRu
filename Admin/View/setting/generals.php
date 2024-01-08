<?php
session_start();
include '../../Controller/Setting/CompanyDataController.php'?>
<?php 
include '../../Controller/Setting/SliderController.php';
if (!isset($_SESSION["authority"]) && $_SESSION['authority']!=0) {
     header('Location: ../../View/errors/wrongPath.php ');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <!-- favicon -->
      <link rel="icon" type="image/x-icon" href="../../../Storage/logo/<?=$sliders[0]["fav_icon"]?>">
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
  <form action="../../Controller/Setting/GeneralController.php" method="post">
    <div class="p-4  mt-36 sm:ml-64">
      <h1 class="text-2xl ml-32 font-bold dark:text-white mb-16 ">General setting</h1>

      <!-- main containter  -->
      <div class="flex justify-evenly">
        <!-- container1 -->
        <div class="w-56">
          <!-- company name -->
          <div class="mb-5">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company name</label>
            <input value="<?= $guru_data[0]['gd_company_name']?>" placeholder="<?= $guru_data[0]['gd_company_name']?>" name="company_name" type="text" id="default-input" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <!-- Address -->
          <div class="mb-5">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
            <input name="address" value="<?= $guru_data[0]['gd_address']?>" placeholder="<?= $guru_data[0]['gd_address']?>" type="text" id="default-input" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <!-- Map link -->
          <div class="mb-5">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Map Link</label>
            <input name="map_link" value="<?= $guru_data[0]['gd_maplink']?>"  placeholder="<?= $guru_data[0]['gd_maplink']?>" type="text" id="default-input" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <!-- solgan -->
          <div class="mb-5">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Solgan</label>
            <input name="solgan" maxlength="22" value="<?= $guru_data[0]['gd_solgan']?>" placeholder="<?= $guru_data[0]['gd_solgan']?>" type="text" id="default-input" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>

          <!-- viber link -->
          <div class="mb-5">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Viber Link</label>
            <input name="viber_link" value="<?= $guru_data[0]['gd_viber']?>" placeholder="<?= $guru_data[0]['gd_viber']?>" type="text" id="default-input" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
        </div>
        <!-- container2 -->
        <div class="w-56">
          <!-- Email -->
          <div class="mb-5">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input name="email" maxlength="100" value="<?= $guru_data[0]['gd_email']?>" placeholder="<?= $guru_data[0]['gd_email']?>" type="text" id="default-input" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <!-- Phone Number1 -->
          <div class="mb-5">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Main Phonenumber</label>
            <input name="phone_1" maxlength="15" value="<?= $guru_data[0]['gd_phone_num']?>" placeholder="<?= $guru_data[0]['gd_phone_num']?>" type="text" id="default-input" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <!-- Phone Number2 -->
          <div class="mb-5">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Secondary Phonenumber</label>
            <input name="phone_2" maxlength="15" value="<?= $guru_data[0]['gd_phone_2']?>" placeholder="<?= $guru_data[0]['gd_phone_num']?>" type="text" id="default-input" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <!-- fblink -->
          <div class="mb-5">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facebook Link</label>
            <input name="fb_link" value="<?= $guru_data[0]['gd_facebook']?>" placeholder="<?= $guru_data[0]['gd_facebook']?>" type="text" id="default-input" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <!-- telegramlink -->
          <div class="mb-5">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telegram Link</label>
            <input name="tg_link" value="<?= $guru_data[0]['gd_telegram']?>" placeholder="<?= $guru_data[0]['gd_telegram']?>" type="text" id="default-input" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>

        </div>
      </div>

    </div>
    <div class="flex  justify-end  pb-5 pr-10">
      <button type="submit" name="submit" class="mr-5 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-6 py-2 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
      <!-- <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900">Yellow</button> -->
      <label for="cancel" class="text-darkGreen bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancel</label>
        <input type="reset" name="cancel" id="cancel" hidden>
    </div>
  </form>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>