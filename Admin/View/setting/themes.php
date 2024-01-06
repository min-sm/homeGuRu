<?php include '../../Controller/Setting/colorsController.php' ?>
<?php include '../../Controller/Setting/SliderController.php' ?>
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
  <form action="../../Controller/Setting/ThemeController.php" enctype="multipart/form-data"  method="post">
    <div class="p-4  mt-28 sm:ml-72">
      <h1 class="text-2xl font-bold dark:text-white mb-16 ">Theme Setting</h1>
      <!-- Hero Section Photo -->

      <h2 class="text-lg  font-medium dark:text-white mb-2 ">Hero Section</h2>
      <div class="w-[300px] h-[100px] mb-5">
        <label for="heroInput" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 flex items-center justify-center  rounded-md overflow-hidden">
          <img id="heroImg" src="../../../Storage/slider/<?= $sliders[0]['hero_slider'] ?>" alt="logo " height="100%" width="100%">
        </label>

        <input id="heroInput" accept=".svg,.jpg,.png,.jpeg" name="homeHero" type="file" hidden>
      </div>

      <h2 class="text-lg  font-medium dark:text-white mb-2 ">Collaborator Hero Section</h2>
      <div class="w-[300px] h-[100px] mb-5">
        <label for="collabInput" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 flex items-center justify-center  rounded-md overflow-hidden">
          <img id="collabImg" src="../../../Storage/slider/<?= $sliders[0]['collaborator_slider'] ?>" alt="logo " height="100%" width="100%">
        </label>

        <input id="collabInput" accept=".svg,.jpg,.png,.jpeg" name="collabHero" type="file" hidden>
      </div>
      <!-- logo setting -->
      <h2 class="text-lg  font-medium dark:text-white mb-2 ">Logos</h2>
      <div class="flex gap-10 mb-16 text-sm">
        <div class="w-20 h-20">
          <label id="logoLabel" for="logoInput" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 flex items-center justify-center  rounded-md">
            <img id="logoImg" src="../../../Storage/logo/<?= $sliders[0]['logo'] ?>" alt="logo " height="90%" width="90%">
          </label>
          <p class="dark:text-white text-secondary text-center text-sm">Logo</p>
          <input id="logoInput" accept=".svg,.jpg,.png,.jpeg" name="logo" type="file" hidden>
        </div>
        <div class="w-20 h-20 ">
          <label id="faviconLabel" for="faviconInput" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300  rounded-md flex items-center justify-center">
            <img id="faviconImg"  src="../../../Storage/logo/<?= $sliders[0]['fav_icon'] ?>" alt="favicon" height="90%" width="90%">
          </label>
          <input id="faviconInput" name="favIcon" accept=".svg,.jpg,.png,.jpeg" type="file" hidden>
          <p class="dark:text-white text-secondary text-center text-sm">Favicon</p>
        </div>
      </div>
      <!-- colors containter  -->
      <h2 class="text-lg font-medium dark:text-white mb-2 ">Color Theme</h2>
      <div class="flex gap-10 text-sm">
        <div class="w-20 h-20">
          <label id="headerLabel" for="header" class=" w-full h-full border-gray-500 border dark:border-slate-300 inline-block rounded-md"></label>
          <p class="dark:text-white text-secondary text-center">header</p>
          <input id="header" name="header" value="<?= $colors[0]['header']  ?>" type="color" width="0" height="0" class="opacity-0">
        </div>
        <div class="w-20 h-20">
          <label id="footerLabel" for="footer" class=" w-full h-full border-gray-500 border dark:border-slate-300 inline-block rounded-md"></label>
          <p class="dark:text-white text-secondary text-center">footer</p>
          <input id="footer" name="footer" value="<?= $colors[0]['footer']  ?>" type="color" width="0" height="0" class="opacity-0">
        </div>
        <div class="w-20 h-20">
          <label id="backgroundLabel" for="background" class=" w-full h-full border-gray-500 border dark:border-slate-300 inline-block rounded-md"></label>
          <p class="dark:text-white text-secondary text-center">background</p>
          <input id="background" value="<?= $colors[0]['background']  ?>" name="background" type="color" width="0" height="0" class="opacity-0">
        </div>
        <div class="w-20 h-20">
          <label id="textColorLabel" for="text_color" class=" w-full h-full border-gray-500 border dark:border-slate-300 inline-block rounded-md"></label>
          <p class="dark:text-white text-secondary text-center">text-color</p>
          <input id="text_color" value="<?= $colors[0]['bd_text_color']  ?>" name="textColor" type="color" width="0" height="0" class="opacity-0">
        </div>
        <div class="w-20 h-20">
          <label id="HFtextColorLabel" for="HF_text_color" class=" w-full h-full border-gray-500 border dark:border-slate-300 inline-block rounded-md"></label>
          <p class="dark:text-white text-secondary text-center">second-text-color</p>
          <input value="<?= $colors[0]['hf_text_color']  ?>" id="HF_text_color" name="HFtextColor" type="color" width="0" height="0" class="opacity-0">
        </div>

      </div>
      <div class="flex  justify-end  pb-5 pr-10 mt-10">
        <button type="submit" name="submit" class="mr-5 focus:outline-none text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-6 py-2 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
        <label for="cancel" class="text-darkGreen bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancel</label>
        <input type="reset" name="cancel" id="cancel" hidden>
      </div>
  </form>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
  <script>
    
    const headerInput = document.getElementById("header");
    const footerInput = document.getElementById("footer");
    const backgroundInput = document.getElementById("background");
    const mainColorInput = document.getElementById("HF_text_color");
    const textColorInput = document.getElementById("text_color");

    const headerLabel = document.getElementById("headerLabel");
    const footerLabel = document.getElementById("footerLabel");
    const backgroundLabel = document.getElementById("backgroundLabel");
    const mainColorLabel = document.getElementById("HFtextColorLabel");
    const textColorLabel = document.getElementById("textColorLabel");

    // Getting input values of logos
    const logoInput = document.getElementById("logoInput");
    const faviconInput = document.getElementById("faviconInput");

    const logoImg = document.getElementById('logoImg');
    const faviconImg = document.getElementById('faviconImg');

    // Getting input values of heros
    const heroInput = document.getElementById("heroInput");
    const collabInput = document.getElementById("collabInput");

    const heroImg = document.getElementById('heroImg');
    const collabImg = document.getElementById('collabImg');
    document.addEventListener('DOMContentLoaded', function() {
      // Getting color input values and labels
      console.log("ok")


      function setInitialValues() {
        console.log("ok")
        headerLabel.style.background = headerInput.value;
        footerLabel.style.background = footerInput.value;
        backgroundLabel.style.background = backgroundInput.value;
        mainColorLabel.style.background = mainColorInput.value;
        textColorLabel.style.background = textColorInput.value;

        // Set initial image sources

      }

      // Call setInitialValues function to set initial values
      setInitialValues();
    });
    //Function of handling color changes
    function handleColorChange(inputElement, labelElement) {
      console.log('Input Element:', inputElement);
      console.log('Label Element:', labelElement);
      inputElement.addEventListener('input', function() {
        console.log(this.value);


        labelElement.style.background = this.value;
      });
    }

    // Function of handling img changes
    function handleImgChange(inputElement, imgElement) {
      inputElement.addEventListener('change', function() {
        const file = this.files[0];

        if (file) {
          const reader = new FileReader();

          reader.onload = function(e) {
            imgElement.src = e.target.result;
          };

          reader.readAsDataURL(file);
        }
      });
    }

    // Call functions to run initially
    handleColorChange(headerInput, headerLabel);
    handleColorChange(footerInput, footerLabel);
    handleColorChange(backgroundInput, backgroundLabel);
    handleColorChange(mainColorInput, mainColorLabel);
    handleColorChange(textColorInput, textColorLabel);
    handleImgChange(logoInput, logoImg);
    handleImgChange(faviconInput, faviconImg);
    handleImgChange(heroInput, heroImg);
    handleImgChange(collabInput, collabImg);

  </script>
</body>

</html>