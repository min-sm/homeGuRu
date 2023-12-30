<?php

session_start();?>


<?php include '../../Controller/common/colorsController.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="../resources/js/collaboratorprofile.js"></script>
    <title>Collaborator Registration</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />
    <style>
         .collaborator{
            color:rgb(20, 184, 166 ) !important;
        }
    </style>
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
</head>
<body class="bg-[#F7F7F7]">
    <!-- Navigation -->
    <?php include '../header/header.php' ?>

    <div class="flex flex-col w-full items-center justify-evenly my-10">
        <h1 class="font-semibold text-5xl text-center " style="font-family: 'Playfair Display';">Collaborator Register
        </h1>
        <form class="w-3/5 mx-auto  my-16"  action="../../Controller/Collaborator_register/CollaboratorRegisterController.php" method="Post"  enctype="multipart/form-data">
            <div class="grid md:grid-cols-2 md:gap-16 ">
                <div class="">
                    <div class=" mb-5">
                    <label for="clogo" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
    Company Logo
</label>
<input type="file" name="clogo" id="clogo" class="hidden" onchange="previewFile()">
<label for="clogo" class="cursor-pointer">
    <img  id="previewImage" class="h-40 mb-2" src="../resources/img/common/blank photo.png" alt="">
</label>
<div class="mb-2 "><small class="block  font-medium text-left text-red-600">
 <?= $_SESSION["createcollaboratorerror"] ?></small> </div>
                    </div>
                    <div class="mb-5">
                        <label for="cname" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Full Name</label>
                        <input type="text" name="cname" id="cname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Owner Name">
                    </div>
                    <div class="mb-5">
                        <label for="cemail" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Email</label>
                        <input type="text" name="cemail" id="cname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="youremailname@gmail.com">
                    </div>
                    <div class="mb-5">
                        <label for="cphNo" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Phone Number</label>
                        <input type="text" name="cphNo" id="cphNo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="09 888777123">
                    </div>
                </div>
                <div class="">
                    <div class="mb-5">
                        <label for="cCompanyName" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Company Name</label>
                        <input type="text" name="cCompanyName" id="cCompanyName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" Enter your Company Name">
                    </div>

                    <div class="mb-5">
                        <label for="cCompanyId" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                            Company ID</label>
                        <input type="text" name="cCompanyId" id="cCompanyId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your Company Register ID Number">
                    </div>

                    <div class="mb-5">
                        <label for="caddress" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Your
                            Address</label>
                        <textarea name="caddress" id="caddress" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your Company Address"></textarea>

                    </div>
                    <div class="mb-5">
                        <label for="caddress" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Your
                            Message</label>
                        <textarea name="cmessage" id="cmessage" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write note Here....."></textarea>
                    </div>
                    <div class="flex items-end m-16 mb-3">

                        <button type="submit"  name= "submit" class="text-white border-2  bg-darkGreen
                      focus:ring-4 focus:outline-none font-semibold rounded-lg text-medium px-8 py-2 text-center 
                      dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Submit</button>
                        <button type="submit" href="./collaborator_register.php"  name= "cancel" class="mx-16 text-darkGreen border-2 border-darkGreen bg-transparent hover:bg-green-800 hover:text-black
                      focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center  
                      dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Cancel</button>
                    </div>
                </div>
            </div>

        </form>
        <div class="flex items-center h-5 mb-16">
    <label for="terms" class="text-medium text-gray-900 dark:text-gray-300">
        Already have an account? <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Log in</a>
    </label>
</div>
        <?php include '../footer/footer.php' ?>
</body>

</html>
<?php $_SESSION["createcollaboratorerror"]=""?>