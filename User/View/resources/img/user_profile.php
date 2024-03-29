<?php
session_start();
?>
<?php include '../../Controller/Township/Userprofile.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="../../../User/Controller/lib/userprofile.js"></script>
    <title>user profile</title>
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

<body class="bg-primary">
    <!-- Start Navigation -->
    <?php include '../header/header.php'   ?>
    <!-- component -->
    <!-- Start  User Info -->
    <div class="bg-white  py-14 ">
        <form action="../../../User/Controller/Township/UserProfileController.php" method="POST" enctype="multipart/form-data">
            <div class="grid grid-cols-2  gap-16 mx-20 border-2 border-blue-700">
                <div class="flex flex-col items-center">
                    <div class="w-1/4 relative">
                        <label id="imageLabel" for="imageInput">
                            <img id="preview" name="gu_photo" class="rounded-full" src="../resources/img/default.png" alt="">
                        </label>
                        <input type="file" name="gu_photo" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)">
                        <div class="absolute  h-9 bg-primary  opacity-50 py-2 bottom-0 ">
                        </div>
                    </div>
                    <p class="font-semibold text-lg"><?= $user['gu_name'] ?></p>
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center  mb-5">
                        <label for="gu_name" class="font-semibold text-md tracking-wide pr-20">Name:</label>                      
                        <span><?= $user['gu_name'] ?></span>
                    </div>
                    <div class="flex items-center  mb-5">
                        <label for="gu_email" class="font-semibold text-md tracking-wide pr-20">Email:</label>
                        <span><?= $user['gu_email'] ?></span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" name="save" class="relative left-2/4  text-white border-2 bg-darkGreen  hover:bg-blue-800
                focus:ring-4 focus:outline-none font-semibold rounded-lg text-medium px-8 py-1 mr-8 text-center 
                dark:bg-blue-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Save</button>
                        <a href="./user_profile.php "> <button name="cancel" type="submit" class="relative left-2/4  text-darkGreen border-2 border-darkGreen bg-transparent hover:bg-alert hover:text-white
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-1 text-center 
                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Cancel</button></a>

                    </div>
                    <p class="block  mb-5 font-medium  text-red-500"><?= $_SESSION["createusererror"] ?></p>
                </div>
            </div>
        </form>
    </div>

    <!-- End  User Info -->
    <?php include '../footer/footer.php'   ?>
</body>

</html>

<?php $_SESSION["createusererror"] = "" ?>