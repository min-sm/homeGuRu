<?php include '../../Controller/common/colorsController.php' ?>
<?php include '../../Controller/Collaborator_profile/Collaboratorprofile.php' ?>
<?php include '../../Controller/SliderController.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collaborator Profile</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="../../../Storage/logo/<?= $resultSlider[0]["fav_icon"] ?>">
    <style>
       .collaborator{
            color:rgb(20, 184, 166 ) !important;
        }
        #imgContainer{
            width: 200px;
            height:200px;
        }
        </style>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
</head>

<body class="bg-[#F7F7F7] tracking-wide" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color']?>">
    <!-- Navigation -->
    <?php include '../header/header.php' ?>

   <!-- collaborator card -->
<div class="flex justify-center items-center mt-10">
    <div class="flex items-center border-8 p-12 w-3/4 flex-col lg:flex-row">
        <div class="rounded-full  border-gray-400 border-2 border-solid bg-[#D9D9D9] w-52 h-52 overflow-hidden flex-none" id="imgContainer">
            <img src="../../../Storage/collaborator_img/gc<?= $collaborator['id']. '/' . $collaborator['gc_logo'] ?>" alt="" class=" bg-[#D9D9D9] w-full h-full">
        </div>
        <div class="flex justify-center items-center grow ml-8">
            <div class="space-y-3.5 flex flex-col text-black">
                <h1 class="font-semibold text-xl mt-3">
                    <?= $collaborator['gc_company_name'] ?>
                </h1>
                <div class="flex items-center space-x-4">
                    <i class="fa-solid fa-location-dot text-[#DD3C4A]"></i>
                    <span><?= $collaborator['gc_address'] ?></span>
                </div>
                <div class="flex items-center space-x-4">
                    <i class="fa-solid fa-phone text-[#DD3C4A]"></i>
                    <div class="flex items-start flex-col">
                        <span><?= $collaborator['gc_phone_num'] ?></span>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <i class="fa-solid fa-envelope text-[#DD3C4A]"></i>
                    <span><?= $collaborator['gc_email'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>




    <!-- recommended section -->
    <div class="flex flex-col items-center justify-center mt-10 ">
        <h1 class="text-2xl font-bold" style="font-family: 'Playfair Display';"> <span><?= $collaborator['gc_company_name']?></span>'s Properties</h1>
        <div class="flex  justify-around   flex-wrap w-full  gap-5 mb-10 ">
  <?php foreach ($collaborator_properties as $property) {
  ?>
    <div class="w-full  mt-10 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <a href="../PropertyPost/detail_post.php?id=<?= $property['id'] ?>&pt_id=<?= $property['pt_id'] ?>&p_offer=<?= $property['p_offer'] ?>&p_township=<?= $property['p_township'] ?>">
        <div class="relative h-56">
          <div class="<?php
                      if ($property['p_after'] == 1) {
                        echo 'bg-alert';
                      } else if ($property['p_offer'] == 0) {
                        echo 'bg-darkGreen';
                      } else {
                        echo 'bg-secondary';
                      };

                      ?> text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
            <?php
            if ($property['p_after'] == 1 && $property['p_offer'] == 0) {
              echo 'Rent Out';
            } else if ($property['p_after'] == 1 && $property['p_offer'] == 1) {
              echo 'Sold Out';
            } else if ($property['p_offer'] == 0) {
              echo 'Rent';
            } else {
              echo 'Sale';
            };

            ?>
          </div>
          <img class="pb-4 rounded-t-lg w-full h-full" src="../../../Storage/house/<?= $property["id"] ?>/<?= $property['p_photo_1'] ?>" alt=" product image" />
        </div>
      </a>
      <div class="px-5 pb-5">
        <div class="flex items-center text-black dark:text-white text-xs justify-between mb-2.5">
          <span><?php
                $dateTime = new DateTime($property['created_date']);

                $formattedDateTime = $dateTime->format('F j \a\t g:i A');

                echo $formattedDateTime;
                ?></span>
          <span> <?php
                  $interestCount = $property['p_interest_count'];

                  if ($interestCount == 0) {
                    // Don't show anything if the count is zero
                  } elseif ($interestCount == 1) {
                    echo '1 person interest';
                  } else {
                    echo "$interestCount people interests";
                  }
                  ?></span>
        </div>
        <div class="mt-2 flex items-center justify-between">
          <a href="../PropertyPost/detail_post.php?id=<?= $property['id'] ?>&pt_id=<?= $property['pt_id'] ?>&p_offer=<?= $property['p_offer'] ?>&p_township=<?= $property['p_township'] ?>" class="mt-2.5 mb-5">
            <h5 class="text-xl font-medium  text-gray-900 dark:text-white">
              <?php
              $maxLen = 25;
              $property['p_title'] = ucwords(strtolower($property['p_title']));
              if (strlen($property['p_title']) > $maxLen) {
                $property['p_title'] = substr($property['p_title'], 0, $maxLen - 4) . '...';
              }
              echo $property['p_title'];

              ?>
            </h5>
          </a>
          <div class="rounded-full  border-gray-400 border-2 border-solid bg-[#D9D9D9] w-14 h-14 overflow-hidden  ">
            <?php if ($property['uploader_id']== 0) : ?>
              <img src="../../../Storage/slider/<?= $resultSlider[0]['fav_icon'] ?>" class="w-13 h-13" alt="HomeGuRu" />
            <?php else : ?>
              <img class="w-14 h-14" src="../../../Storage/collaborator_img/gc<?= $property['uploader_id'] . '/' . $property['gc_logo'] ?>" alt="<?= $property['gc_company_name']; ?>" />
            <?php endif; ?>
          </div>
        </div>

        <div class=" mb-5 text-darkGreen flex items-center text-lg">
          <i class="fa-sharp fa-solid fa-money-bill pt-1"></i>
          <span class="ml-3 mt-2 font-meduim">
            <?php if ($property['p_price_unit'] == 1) {
              echo '$' . $property['p_price'];
            } elseif ($property['p_price_unit'] == 2) {
              if ($property['p_price'] > 999999) {

                $formatted_price = substr_replace($property['p_price'], 'lakh', -5);
                echo $formatted_price;
              } else {

                echo 'Ks' . $property['p_price'];
              }
            } ?>
            /
            <?php
            if ($property['p_duration'] == 0) {
              echo 'Month';
            } elseif ($property['p_duration'] == 1) {
              echo 'Year';
            }
            ?>
          </span>
        </div>

        <div class="mt-2.5 mb-7 text-black dark:text-white tracking-wide space-y-5  text-sm">
          <div class="flex justify-between items-center">
            <div><span class="font-playFair">Property Code: </span>
              <span><?= $property['p_code'] ?></span>
            </div>
            <div><span class="font-playFair">Property Type: </span>
              <span><?= $property['pt_name'] ?></span>
            </div>
          </div>
          <div class="flex justify-between items-center mt-2">
            <div><span class="font-playFair">Township: </span>
              <span><?= $property['name'] ?></span>
            </div>
            <div>
              <span class="font-playFair">Property Size: </span>
              <span><?= $property['p_width'] ?>x<?= $property['p_length'] ?>
                <?php
                if ($property['p_size_unit'] == 1) {
                  echo 'm';
                } elseif ($property['p_size_unit'] == 2) {
                  echo 'ft';
                }
                ?><sup>2</sup></span>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-end">
          <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
          <a href="../PropertyPost/detail_post.php?id=<?= $property['id'] ?>&pt_id=<?= $property['pt_id'] ?>&p_offer=<?= $property['p_offer'] ?>&p_township=<?= $property['p_township'] ?>" class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2 text-center dark:border-slate-50">Details</a>
        </div>
      </div>
    </div>


  <?php }
  ?>
</div>

      
    </div>
    <hr class="h-1 bg-gray-400 mb-10">

    <!-- Collaborator detail section -->
    <div class="flex items-center justify-center flex-col py-20">
        <div class="rounded-full bg-[#D9D9D9] w-28 h-28 overflow-hidden border-gray-400 border-2 border-solid ">
        <img src="../../../Storage/collaborator_img/gc<?= $collaborator['id']. '/' . $collaborator['gc_logo'] ?>" alt="" class=" bg-[#D9D9D9] w-full h-full">
        </div>

        <h1 class="font-semibold text-xl text-[#DD3C4A] mt-3 mb-20">
            <?= $collaborator['gc_company_name'] ?>
        </h1>

        <!-- site stats -->
        <div class="flex items-center w-3/4 justify-evenly mb-20">
            <div class="flex flex-col justify-center items-center">
                <i class="fa-solid fa-building text-5xl"></i>
                <h1 class="font-bold text-2xl mt-3"><span class="counting"><?php $totalCount=$rentPropertiesCount+$salePropertiesCount;
                echo $totalCount ?></span><span>+</span></h1>
                <span class="text-xl text-center font-semibold">Total Property</span>
            </div>
            <div class="flex flex-col justify-center items-center">
                <i class="fa-solid fa-building text-5xl"></i>
                <h1 class="font-bold text-2xl mt-3"><span class="counting"><?=$salePropertiesCount?></span><span>+</span></h1>
                <span class="text-xl text-center font-semibold">Sale Property</span>
            </div>
            <div class="flex flex-col justify-center items-center">
                <i class="fa-solid fa-building text-5xl"></i>
                <h1 class="font-bold text-2xl mt-3"><span class="counting"><?=$rentPropertiesCount?></span><span>+</span></h1>
                <span class="text-xl text-center font-semibold">Rent Property</span>
            </div>
        </div>

        <!-- buy rent 2 cards -->
        <div class="flex mt-10 mb-16 flex-col lg:flex-row items-center w-auto justify-between ">
            <!-- buy property card -->
            <div class="w-3/4 lg:w-5/12 h-56 bg-cover flex items-center justify-center" style="background-image: url('../resources/img/pic1.png')">
                <ul class="list-disc text-white list-inside w-4/5 text-2xs lg:text-sm space-y-2.5">
                    <span class="text-xl" style="font-family: 'Playfair Display'">Buy Property</span>
                    <li>
                        Valuable expertise in pricing, marketing, negotiating.
                    </li>
                    <li>
                        Navigating the legal aspects of the transaction.
                    </li>
                    <li>
                        Advice from financial professionals regarding the financial aspects of the sale.
                    </li>
                    <li>
                        Help throughout the entire selling process.
                    </li>

                </ul>
            </div>

            <!-- rent property card -->
            <div class="w-3/4 lg:w-5/12 h-56 mt-16 lg:mt-auto bg-cover flex items-center justify-center" style="background-image: url('../resources/img/pic2.png')">
                <ul class="list-disc text-white list-inside w-4/5 lg:text-sm text-2xs space-y-2.5">
                    <span class="text-xl lg:text-xl" style="font-family: 'Playfair Display'">Rent Property</span>
                    <li>
                        Photography services to create high-quality images.
                    </li>
                    <li>
                        Identify any necessary maintenance or repairs.
                    </li>
                    <li>
                        Handle the legal and logistical aspects of the process in accordance with local laws.
                    </li>
                    <li>
                        Assist with lease renewals and ensuring a smooth transition between tenants.
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include '../footer/footer.php' ?>
    <script src="../resources/js/countUp.js"></script>
</body>

</html>