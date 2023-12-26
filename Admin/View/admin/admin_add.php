<?php
session_start();
?>

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

    <!-- JS -->
    <script src="../resources/js/profile.js"></script>
    
    <title>Home Guru</title>
</head>

<body>
    <?php include '../commonView/menu.php' ?>
    <div class="flex flex-col items-center pt-20 sm:ml-64">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Add Admin </h1>
        <!--Start Add  Admin Form  -->
        <form class=""  action="../../Controller/Admin/Add_admin_controller.php" method="Post" enctype="multipart/form-data">
            <div class="grid grid-cols-2 gap-20 ">
                <div class="grid grid-rows-5 gap-5">
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
                    <div class=" lg:w-72 w-28">
                        <label for="ga_phone" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Gender</label>
                        <select name="ga_gender" class="lg:w-72 w-28 px-5 py-2.5 rounded-lg  border-2 border-gray-300">
                            <option value="" disabled selected>Select Gender</option>
                            <option   value="Male" >Male</option>
                            <option  value="Female" >Female</option>
                            <option  value="Other" >Other</option>
                        </select>
                    </div>
                    <div class="mb-2 "><small class="block  font-medium text-left text-red-600"><?= $_SESSION["createadminerror"] ?></small> </div>
                </div>

                <div class="grid grid-rows-5 gap-5">
                    <div class="flex items-center   lg:w-72 w-28">
                        <label for="imageInput" id="imageLabel">
                            <img name="ga_photo" class="w-24 mr-10" id="preview" src="../resources/img/common/profile.png" alt="Image Preview" style="max-width: 300px; max-height: 300px; cursor: pointer;">
                        </label>
                        <span class="text-sm font-semibold text-gray-500 dark:text-white">Profile</span>
                        <input type="file" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)">
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="ga_phone" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Phone Number</label>
                        <input type="text" name="ga_phone" id="ga_phone" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="01-554369">
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="ga_email" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Email</label>
                        <input type="text" name="ga_email" id="ga_email" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="realestate777@gmail.com">
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="ga_password" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Password</label>
                        <input type="text" name="ga_password" id="ga_password" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••••••••••">
                    
                    </div>
                </div>

            </div>
            <div class="relative float-right   my-20">
            <button type="submit" name ="addadmin" class="text-white bg-darkGreen hover:bg-blue-800 
                focus:ring-4 focus:outline-none focus:ring-blue-300 f0 ont-semibold rounded-lg text-medium px-8 py-2 text-center 
                dark:bg-green-600 dark:hover:bg-green-70dark:focus:ring-green-800">
                    Create Admin</button>
                <button type=""  name = "cancel" class="ml-5  text-darkGreen border-2 border-green-700 bg-transparent hover:bg-alert hover:text-white
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center 
                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Cancel</button>
            </div>

        </form>
    </div>

</body>

</html>
<?php $_SESSION["createadminerror"]=""?>

