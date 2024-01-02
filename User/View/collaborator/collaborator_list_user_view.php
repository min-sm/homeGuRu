<?php include '../../Controller/sliderController.php' ?>
<?php include '../../Controller/common/colorsController.php' ?>
<?php include '../../Controller/collaboratorListController.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collaborator Profile</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />

    <style>
        .collaborator {
            color: rgb(20, 184, 166) !important;
        }


        .typing {


            border-right: 2px solid gray;
            overflow: hidden;
            animation: type 3s steps(30), blink 0.8s linear infinite;


        }

        @keyframes type {
            from {
                width: 0;
            }
        }

        @keyframes blink {
            from {
                border-right-color: transparent;
            }
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

<body class="bg-primary " style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color'] ?>">
    <!-- Navigation -->
    <?php include '../header/header.php' ?>
    <!-- Start Collaborator Hero Section  -->
    <div class="w-full relative mb-20">
        <img class="w-full" src="../../../Storage/slider/<?= $resultSlider[0]['collaborator_slider'] ?>" alt="collaboratorHero.pngs" />
        <p class="text-white  w-[225px] lg:w-[600px] text-sm sm:text-xl lg:text-3xl font-playFair whitespace-nowrap font-bold overflow-hidden typing absolute top-14 sm:top-16 left-5 lg:top-52 lg:left-24 xl:left-20">Unlock Potential; Build The Future</p>
    </div>
    <!-- End Collaborator Hero Section  -->

    <!-- Start Partanership List Section  -->
    <div class=" mb-28 overflow-hidden whitespace-nowrap  ">
        <h1 class="tracking-wider font-playFair text-3xl font-extrabold text-center mb-14">Our Partners</h1>
        <div class="inline-block space-x-10 animate-slide bg-transparent  px-0 ">
            <?php

            foreach ($collaborators as $collaborator) {
            ?>

                <img src="../../../Storage/collaborator_img/gc<?= $collaborator['id'] . '/' . $collaborator['gc_logo'] ?>" alt="<?= $collaborator['gc_company_name']; ?>" class="inline h-20 bg-transparent  lg:h-48 " alt="logo">
          <?php } ?>
        </div>
    </div>
        <!-- End Partanership List Section  -->

        <!-- Start Collaborator register Section  -->
        <div class="w-full relative mt-10">
            <img class="w-full" src="../resources/img/collaboratorRegister.png" alt="collaboratorHero.png" />
            <div class="w-1/2 text-white top-1 left-2 xl:left-36 xl:top-20  absolute lg:top-10 lg:left-10 tracking-wide ">
                <h1 class="font-medium font-playFair text-xs lg:text-3xl mb-2 lg:mb-5  ">Collaborator Requirement</h1>
                <div class="lg:space-y-4 space-y-1 text-2xs lg:text-lg  tracking-wide font-light">
                    <p>. Real estate licensing </p>
                    <p>. Understanding of tax implications</p>
                    <p>. Networking for property listings </p>
                    <p>. In-depth knowledge of the local market.</p>
                </div>
            </div>
            <div class=" text-white bottom-10 right-5 xl:right-40  absolute lg:bottom-2/4 lg:right-16 tracking-wide ">
                <h1 class="font-bold text-sm lg:text-3xl mb-2 tracking-wide lg:px-5 font-playFair">To Be Our
                    Partner</h1>
                <button class="absolute text-xs h-7 w-full lg:h-16 bg-darkGreen  lg:text-lg  lg:my-10 rounded-md hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Collaborator Register
                </button>
            </div>
        </div>

        <!-- End Collaborator register Section  -->

        <!-- Start Search Company name Section  -->

        <div class="flex flex-col w-full items-center justify-evenly my-8">
            <h1 class="font-bold text-3xl text-center " style="font-family: 'Playfair Display';">Property Contact</h1>

            <div class="w-full my-16 flex gap-5 justify-center">
                <input type="text" name="collaboratorName" placeholder="Company Name" class=" sm:w-1/4 px-5 py-3 rounded-lg  border-2 ">
                <button class="sm:w-32 w-20 text-lg lg:h-12 font-medium sm:text-xl text-white rounded-lg bg-darkGreen 
            hover:bg-white-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Search
                </button>
            </div>


            <!-- Start  Company profile info Section  -->

            <!-- Start  Company profile info Section  -->
            <?php

            foreach ($collaborators as $collaborator) {
            ?>
                <div class="sm:w-3/4 w-11/12 sm:py-10 bg-gray-800 border-gray-200 rounded my-5 flex justify-around flex-col sm:flex-row items-center ">
                    <div class="w-2/6">
                        <div class="w-46 h-46  bg-[#F7F7F7] my-5">
                            <img class=" w-40 h-40" src="../../../Storage/collaborator_img/gc<?= $collaborator['id'] . '/' . $collaborator['gc_logo'] ?>" alt="<?= $collaborator['gc_company_name']; ?>" alt="company Logo" />
                        </div>
                    </div>
                    <div class=" text-center whitespace-normal space-y-4  sm:text-left h-46  my-5 text-white w-1/2  ">
                        <div class="font-bold  sm:text-xl mb-8 ">
                            <?= $collaborator['gc_company_name'] ?>
                        </div>
                        <div class="mb-2 flex ">
                            <ion-icon class="mr-2  shrink-0" name="person-outline"></ion-icon>
                            <p class="whitespace-normal"> <?= $collaborator['gc_address'] ?></p>
                        </div>
                        <div class="mb-2">
                            <ion-icon class="mr-2" name="call-outline"></ion-icon>
                            <a href="tel:<?= $collaborator['gc_phone_num'] ?>"> <?= $collaborator['gc_phone_num'] ?></a>
                        </div>
                        <div class="mb-2 whitespace-nowrap">
                            <ion-icon class="mr-2" name="mail-outline"></ion-icon>
                            <a href="mailto:<?= $collaborator['gc_email'] ?>"><?= $collaborator['gc_email'] ?></a>
                        </div>
                    </div>


                </div>
                <!-- Start  Company profile info Section  -->
            <?php } ?>
        </div>

        <!-- End Search Company name Section  -->



        <?php include '../footer/footer.php' ?>
</body>

</html>