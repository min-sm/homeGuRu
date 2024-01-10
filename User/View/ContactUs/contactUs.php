<?php include '../../Controller/common/colorsController.php' ?>
<?php include '../../Controller/SliderController.php' ?>
<?php include '../../Controller/common/CompanyDataController.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="../../../Storage/logo/<?= $resultSlider[0]["fav_icon"] ?>">
    <style>
        nav {
            background-color: rgba(33, 33, 33, 0.5) !important;
            border-bottom: 1px solid slategray !important;
          
        }

        .trans {
            background: transparent !important;
        }

        .video {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: -1;
        }
        body{
            margin: 0;
            padding:0;
            overflow: hidden !important;
            background:linear-gradient(180deg,#DACC99 30%,#AE6738 70%,#1f2935 100% );
        }

        #body {
            background-color: rgba(33, 33, 33, 0.3) !important;
            
        }

        @media(min-aspect-ratio){
            .video{
                width: 100%;
                height: auto;
            }
        }
        
        @media(max-aspect-ratio){
            .video{
                width: auto;
                height: 100%;
            }
        }

        @media only screen and (max-width: 1024px) {
  .video {
    display: none;
  }
  #body {
            background:linear-gradient(180deg,#1f2935 30%,#AE6738 70%, #DACC99 100%);
        
            
        }
        nav {
            background-color:#1f2937 !important;
           
        }

        .trans {
            background: #1f2937  !important;
            border: none;
        }
     
}
       
    </style>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />



    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet">

    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="w-screen h-screen tracking-wide " style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color'] ?>">
    <!-- Navigation -->
    <?php include '../header/header.php' ?>
    <div class="">
        <video class="w-screen video" autoplay muted loop>
            <source src="../resources/img/VideoEditor_bagan.mp4" type="video/mp4">

            Your browser does not support HTML video.
        </video>
    </div>
    <div class="flex flex-col justify-center items-center w-screen h-screen overflow-y-hidden text-white" id='body'>
        <h1 class="font-playFair text-4xl font-bold mb-14 ">Contact Us</h1>
        <p class="lg:w-5/6 w-11/12 tracking-wider font-thin  whitespace-pre-wrap pb-10 text-center">Thank you for your interest in Home GuRu Real Estate. We are here to help you with all your real estate needs, whether you're looking to buy, sell, or rent a property. Please don't hesitate to contact us with any questions or inquiries you may have.</p>

        <div class="w-full flex justify-evenly flex-wrap gap-5">
            <div class=" w-48 lg:w-96">

                <div class="space-y-6 ">
                    <a href="<?= $guru_data[0]['gd_maplink']  ?>">
                        <div class="flex items-center gap-3 whitespace-break-spaces text-left ">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <p><?= $guru_data[0]['gd_address']  ?>
                            </p>
                        </div>
                    </a>
                    <a href="tel:<?= $guru_data[0]['gd_phone_num']  ?>">
                        <div class="flex items-center gap-3 mt-5 ">
                            <i class="fa-solid fa-phone self-start pt-1 "></i>
                            <div>
                                <p><?= $guru_data[0]['gd_phone_num']  ?></p>
                                <p><?= $guru_data[0]['gd_phone_2']  ?></p>
                            </div>
                        </div>
                    </a>
                    <a href="mailto:<?= $guru_data[0]['gd_email']  ?>">
                        <div class="flex items-center gap-3 mt-5">
                            <i class="fa-solid fa-envelope"></i>
                            <p> <?= $guru_data[0]['gd_email']  ?></p>
                        </div>
                    </a>

                </div>

            </div>
            <!-- section 2 -->
            <div class=" w-48 lg:w-96">

                <div >
                <a href=<?= $guru_data[0]['gd_facebook']  ?>>
                        <div class="flex items-center gap-3 whitespace-break-spaces ">
                       <i class="fa-brands fa-facebook fa-beat text-2xl" style="color: #1877f2;"></i>
                            <p class="pt-5">Home Guru Property Myanmar
                            </p>
                        </div>
                    </a>
                    <a href="viber://chat/?number=%2B<?= $guru_data[0]['gd_viber'] ?>"> 
                        <div class="flex items-center gap-3 mt-3  ">
                        <i class="fa-brands fa-viber fa-beat text-2xl" style="color: #7360f2;"></i>
                            <div>
                                <p>Guru</p>
                                
                            </div>
                        </div>
                    </a>
                    <a href="<?= $guru_data[0]['gd_telegram']  ?>">
                        <div class="flex items-center gap-3 mt-8  ">
                        <i class="fa-brands fa-telegram fa-beat text-2xl" style="color: #229ed9;"></i>
                            <p>Guru's Space</p>
                        </div>
                    </a>

                </div>

            </div>
        </div>
    </div>

</body>

</html>
