<!DOCTYPE html>
<html lang="en">

<head>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet">

    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Home Guru</title>
</head>

<body>

    <?php include '../commonView/menu.php' ?>

    <div class="flex flex-col items-center pt-16 sm:ml-64">
      <form class="">
            <div class="grid grid-cols-2 gap-20 ">
                <div class="grid grid-rows-4 gap-5">
                    <div class="lg:w-72 w-28">
                        <label for="ga_name" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Full Name</label>
                        <input type="text" name="ga_name" id="ga_name" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" Aung Aung">
                    </div>
           <div class="lg:w-72 w-28">
                        <label for="ga_address" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Address</label>
                        <input type="text" name="ga_address" id="ga_address" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No.1, Yangon, Myanmar">
                    </div>
                    <div class="lg:w-72 w-28">
                        <label for="ga_nrc" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            National ID</label>
                        <input type="text" name="ga_nrc" id="ga_nrc" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" 12/TGG(N)123567">
                    </div>
                    <div class="lg:w-72 w-28">
                        <label for="ga_dob" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Date of Birth</label>
                        <input type="text" name="ga_dob" id="ga_dob" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" 12/TGG(N)123567">
                    </div>
                </div>

                <div class="grid grid-rows-4 gap-5">
                    <div class="flex items-center   lg:w-72 w-28">
                        <img class="w-24" src="../resources/img/common/blank photo.png" alt="">
                        <label for="ga_photo" class="block ml-5 mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Profile</label>
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="ga_email" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Email</label>
                        <input type="text" name="ga_email" id="ga_email" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="realestate777@gmail.com">
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="ga_phone" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Phone Number</label>
                        <input type="text" name="ga_phone" id="ga_phone" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="01-554369">
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="ga_phone" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Gender</label>
                        <select name="ga_phone" class="lg:w-72 w-28 px-5 py-2.5 rounded-lg  border-2 border-gray-300">
                            <option value="" disabled selected>Select Gender</option>
                            <option value="">Male</option>
                            <option value="">Female</option>
                            <option value="">Other</option>
                        </select>
                    </div>

                </div>

                <div class=" flex  my-5">
                    <button type="submit" class="text-white bg-darkGreen hover:bg-blue-800 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center 
                    dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Create Admin</button>
                    <button type="" class="mx-10 text-darkGreen border-2 border-green-700 bg-transparent hover:bg-alert hover:text-white
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center 
                    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Cancel</button>
                </div>

        </form>

    </div>




</body>

</html>