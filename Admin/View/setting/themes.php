<?php include '../../Controller/common/colorsController.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- tailwind -->
  <link href="../resources/css/dist/output.css" rel="stylesheet" />
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
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
        <li class="items rounded-md">
          <a
            href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
          >
            <svg
              class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 22 21"
            >
              <path
                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"
              />
              <path
                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"
              />
            </svg>
            <span class="ms-3 whitespace-nowrap">Dashboard</span>
          </a>
        </li>
        <li class="items rounded-md">
          <a
            href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
          >
            <i
              class="fa-solid fa-bell flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            ></i>
            <span class="flex-1 ms-3 whitespace-nowrap">Notification</span>
            <span
              class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300"
              >3</span
            >
          </a>
        </li>
        <li class="items rounded-md">
          <a
            href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
          >
            <svg
              class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"
              />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
            <span
              class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300"
              >3</span
            >
          </a>
        </li>
        <li class="items rounded-md">
          <a
            href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
          >
            <svg
              class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 20 18"
            >
              <path
                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"
              />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
          </a>
        </li>
        <li class="items rounded-md">
          <a
            href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
          >
            <i
              class="fa-solid fa-user-tie flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            ></i>
            <span class="flex-1 ms-3 whitespace-nowrap pb-1"
              >Collaborators</span
            >
          </a>
        </li>
        <li class="items rounded-md">
          <a
            href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
          >
            <i
              class="fa-solid fa-user flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            ></i>
            <span class="flex-1 ms-3 whitespace-nowrap pb-1">Admins</span>
          </a>
        </li>
        <li class="items rounded-md">
          <a
            href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
          >
            <i
              class="fa-solid fa-building flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            ></i>

            <span class="flex-1 pb-1 ms-3 whitespace-nowrap">Properties</span>
          </a>
        </li>
        <li class="items rounded-md">
          <a
            href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
          >
            <i
              class="fa-brands fa-blogger-b flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            ></i>
            <span class="flex-1 ms-3 pb-1 whitespace-nowrap">Blog</span>
          </a>
        </li>
       
        <li class="items rounded-md">
          <a
            href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
          >
            <i
              class="fa-solid fa-coins flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            ></i>

            <span class="flex-1 pb-1 ms-3 whitespace-nowrap">Finance</span>
          </a>
        </li>
        <li class="rounded-md">
          <button
            id="dropdownDefaultButton"
            data-dropdown-toggle="dropdown"
            class="w-full flex items-center p-2 text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"
            type="button"
          >
            <i
              class="fa-solid fa-gear flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            ></i>
            <span class="ms-3 pb-1">Setting</span
            ><svg
              class="w-2.5 h-2.5 ms-3"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 10 6"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m1 1 4 4 4-4"
              />
            </svg>
          </button>
        </li>
      </ul>
      <!-- Dropdown menu -->
      <div
        id="dropdown"
        class="z-10 hidden divide-y divide-gray-100 bg-white w-full px-3 dark:bg-gray-800"
      >
        <ul
          class="py-2 text-sm text-gray-700 dark:text-gray-200"
          aria-labelledby="dropdownDefaultButton"
        >
          <li class="items rounded-md">
            <a
              href="#"
              class="flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
              <span class="flex-1 pb-1 ms-3 whitespace-nowrap">Theme</span>
            </a>
          </li>
          <li class="items rounded-md">
            <a
              href="#"
              class="flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
              <span class="flex-1 pb-1 ms-3 whitespace-nowrap">Generals</span>
            </a>
          </li>
          <li class="items rounded-md">
            <a
              href="#"
              class="flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
              <span class="flex-1 pb-1 ms-3 whitespace-nowrap">Recommendation</span>
            </a>
          </li>
          <li class="items rounded-md">
            <a
              href="#"
              class="flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
              <span class="flex-1 pb-1 ms-3 whitespace-nowrap">Our Services</span>
            </a>
          </li>
          <li class="items rounded-md">
            <a
              href="#"
              class="flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
              <span class="flex-1 pb-1 ms-3 whitespace-nowrap">Privacy & Policy</span>
            </a>
          </li>
           
          <li class="items rounded-md">
            <a
              href="#"
              class="flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
              <span class="flex-1 pb-1 ms-3 whitespace-nowrap">FAQ</span>
            </a>
          </li>
         
          <li class="items rounded-md">
            <a
              href="#"
              class="flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            >
              <span class="flex-1 pb-1 ms-3 whitespace-nowrap">Guide</span>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
  </aside>
<!-- Generals Setting -->

  <div class="p-4  mt-36 sm:ml-72">
    <h1 class="text-2xl font-bold dark:text-white mb-16 ">Theme Setting</h1>
    <!-- Hero Section Photo -->
    <h2 class="text-lg  font-medium dark:text-white mb-2 ">Hero Section</h2>
    <div class="w-[300px] h-[100px] mb-5">
      <label  for="heroInput" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 flex items-center justify-center  rounded-md overflow-hidden">
        <img id="heroImg" src="../resources/img/home.jpg" alt="logo " height="100%" width="100%">
      </label>

        <input id="heroInput" type="file" hidden>
      </div>

    <h2 class="text-lg  font-medium dark:text-white mb-2 ">Collaborator Hero Section</h2>
    <div class="w-[300px] h-[100px] mb-5">
      <label  for="collabInput" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 flex items-center justify-center  rounded-md overflow-hidden">
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
        <input id="faviconInput" accept=".svg,.jpg,.png,.jpeg"  type="file" hidden>
        <p class="dark:text-white text-secondary text-center text-sm">Favicon</p>
      </div>
    </div>
     <!-- colors containter  -->
     <h2 class="text-lg font-medium dark:text-white mb-2 ">Color Theme</h2>
        <div class="flex gap-10 text-sm">
   <div class="w-20 h-20">
        <label id="headerLabel" for="header" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 inline-block rounded-md"></label>
        <p class="dark:text-white text-secondary text-center">header</p>
        <input id="header"  type="color" hidden>
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
    </div> <div class="w-20 h-20">
        <label id="textColorLabel" for="text_color" class="bg-secondary w-full h-full border-gray-500 border dark:border-slate-300 inline-block rounded-md"></label>
        <p class="dark:text-white text-secondary text-center">text-color</p>
        <input id="text_color" type="color" hidden>
    </div>
</div>
</div>
<div class="flex  justify-end  pb-5 pr-10 mt-10">
    <button type="button" class="mr-5 focus:outline-none text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-6 py-2 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
    <!-- <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900">Yellow</button> -->
    <button type="button" class="text-darkGreen bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancel</button>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="../resources/js/color_add.js"></script>
</body>

</html>