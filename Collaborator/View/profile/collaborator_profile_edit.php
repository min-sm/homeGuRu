<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/css/dist/output.css" rel="stylesheet" />
    <title>Dashboard</title>
    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet" />

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/b9864528d4.js" crossorigin="anonymous"></script>

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- JS -->
    <script src="../resources/js/profile.js"></script>


</head>

<body>
    <?php include '../common/menu.php' ?>

    <!--Start  Collaborator Detail Edit-->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Company Name Edit Profile</h1>
        <form class="lg:w-3/5 w-full">
            <!--Start  Company Info -->
            <div class="grid grid-cols-2 gap-20  mb-5">
                <div class="flex items-center   lg:w-72 w-28">
                    <label for="imageInput" id="imageLabel">
                        <img name="gc_photo" class="w-24 mr-10" id="preview" src="../resources/img/common/profile.png" alt="Image Preview" style="max-width: 300px; max-height: 300px; cursor: pointer;">
                    </label>
                    <span class="text-sm font-semibold text-gray-500 dark:text-white">Company Logo</span>
                    <input type="file" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-20 ">
                <div class="lg:w-72 w-28">
                    <label for="gc_email" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                        Email</label>
                    <input type="text" name="gc_email" id="" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="johnsmith@gmail.com">
                </div>
                <div class=" lg:w-72 w-28">
                    <label for="gc_phone" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                        Phone Number</label>
                    <input type="text" name="gc_phone" id="" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="(+95) 9123456789">
                </div>
            </div>
            <div class="">
                <div class="my-5 lg:w-full w-40 ">
                    <label for="gc_address" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                        Address</label>
                    <textarea name="gc_address" id="" rows="4" class="block p-2.5 lg:w-full lg:h-20  h-40 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="1096 Shwe Taung Gyar St, Yangon"></textarea>
                </div>
            </div>
            <!--End  Company Info -->
            <div class=" flex float-right  my-10 ">
                <a href="./collaborator_profile.php" type="submit" class="tracking-wider text-white bg-goldYellow opacity-75 hover:opacity-100
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  ">
                    Update</a>
                <a href="./collaborator_profile.php" type="" class="tracking-wider ml-10 text-white  bg-alert opacity-80 hover:opacity-100
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                    Cancel</a>
            </div>

        </form>
    </div>
    <!--End  Collaborator Request Preview  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>