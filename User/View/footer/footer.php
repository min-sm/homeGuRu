<?php include '../../Controller/common/colorsController.php' ?>
<?php include '../../Controller/common/CompanyDataController.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Guru</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet">

    <style >
        a:active{
            color: teal;
        }
    </style>
    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="w-full">
    <footer class="bg-secondary text-primary pt-10 md:pt-16 pb-10 w-full" style=" background-color: <?= $colors[0]['footer'] ?>; color: <?= $colors[0]['hf_text_color']  ?>">
        <div class="flex justify-around md:flex-row flex-col md:gap-0 gap-12 items-center md:items-start">
            <!-- Address -->
            <div class=" w-48 lg:w-96">
                <h1 class="md:text-2xl text-xl text-center mb-7"><u>Address</u></h1>
                <div class="space-y-6 text-paleGray ">
                <a href="<?= $guru_data[0]['gd_maplink']  ?>"><div class="flex items-center gap-3 whitespace-pre-wrap ">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <p><?= $guru_data[0]['gd_address']  ?>
                        </p>
                    </div>
                </a>
                    <a href="tel:<?= $guru_data[0]['gd_phone_num']  ?>">
                        <div class="flex items-center gap-3 mt-5 ">
                        <i class="fa-solid fa-phone self-start pt-1 "></i>
                        <div >
                        <p><?= $guru_data[0]['gd_phone_num']  ?></p>
                        <p><?= $guru_data[0]['gd_phone_2']  ?></p>
                        </div>
                    </div>
                </a>
                 <a href="mailto:<?= $guru_data[0]['gd_email']  ?>">
                    <div class="flex items-center gap-3 mt-5">
                        <i class="fa-solid fa-envelope"></i>
                        <p>   <?= $guru_data[0]['gd_email']  ?></p>
                    </div>
                    </a>
                    <p class="text- opacity-50 pt-2 hidden md:block">Copyright &#169 2023. All Rights Reserved</p>
                </div>

            </div>
            <!-- Help & Support -->
            <div>
                <h1 class="md:text-2xl text-xl mb-7 md:text-left text-center "><u>Help & Support</u></h1>
                <div class="flex flex-col gap-4 md:text-left text-center text-paleGray">
                    <a href=""><u>Privacy and Policy</u></a>
                    <a href="#ourservices"><u>Our Services</u></a>
                    <a href=""><u>FAQ</u></a>
                    <a href=""><u>Guide</u></a>
                    <a href="../ContactUs/contactUs.php"><u>Contact Us</u></a>
                </div>

            </div>
            <!-- Navigation -->
            <div>
                <h1 class="md:text-2xl text-xl mb-7 md:text-left text-center "><u>Navigation</u></h1>
                <div class="flex flex-col gap-4 md:text-left text-center text-paleGray">

                    <a href="../Home_page/home.php"><u>Home</u></a>
                    <a href="../PropertyPost/buy_view.php"><u>Buy</u></a>
                    <a href="../PropertyPost/rent_view.php"><u>Rent</u></a>
                    <a href="../PropertyPost/PropertyPost-Add-owner.php"><u>Sell</u></a>
                    <a href="../collaborator/collaborator_list_user_view.php"><u>Collaborator</u></a>
                    <div class="text-2xl flex space-x-6 md:pt-2 pt-5 ">
                        <a href=<?= $guru_data[0]['gd_facebook']  ?>><i class="fa-brands fa-facebook fa-beat" style="color: #1877f2;"></i></a>
                        <a href="viber://chat/?number=%2B<?= $guru_data[0]['gd_viber'] ?>"> <i class="fa-brands fa-viber fa-beat" style="color: #7360f2;"></i></a>
                        <a href="<?= $guru_data[0]['gd_telegram']  ?>"><i class="fa-brands fa-telegram fa-beat" style="color: #229ed9;"></i></a>

                    </div>
                </div>
            </div>
            <p class="text- opacity-50 pt-2  md:hidden">Copyright &#169 2023. All Rights Reserved</p>
        </div>

    </footer>
</body>

</html>