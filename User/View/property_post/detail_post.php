<?php include '../../Controller/common/colorsController.php' ?>
<?php include '../../Controller/PropertyDetailController.php' ?>
<?php include '../../Controller/RelatedPropertiesController.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Property Details</title>
  <style>
    /* The Modal (background) */
    #myModal {
      display: none;
      /* Hidden by default */
      text-align: center;
      justify-content: center;
      align-items: center;
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      top: 0;
      left: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgba(0, 0, 0, 0.8);
      /* Black w/ opacity */
    }

    /* Modal Content */
    #modal-content {
      flex-direction: column;
      background-color: rgba(255, 255, 255, 0.8);
      width: fit-content;
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
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->

  <link href="../resources/css/dist/output.css" rel="stylesheet" />

  <!-- ionic icon -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- share api -->
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=657dfb21954d790019bcd913&product=inline-share-buttons&source=platform" async="async"></script>
  <script src="../resources/js/property_detail.js" defer></script>
</head>

<body class="bg-[#F7F7F7] tracking-wide" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color']?>">
  <!-- Navigation -->
  <?php include '../header/header.php' ?>

  <!-- uploader info -->
  <div class="flex flex-row items-center w-4/5 lg:w-1/2 my-6 ms-4 lg:ms-24">
    <!-- collaborator logo -->
    <div class="basis-1/5 mr-2 sm:mr-0">
      <div class="rounded-full bg-[#D9D9D9] w-24">
      <img  src='<?php 
      if ($property_datas[0]['uploader_id']==0){
        echo "../../../Storage/admin_img/guru_logo.png";
      }else{
      echo "../../../Storage/collaborator_img/gc" . $property_datas[0]['uploader_id'] . "/" . $property_datas[0]['gc_logo'];} ?>' alt="">
      </div>
    </div>

    <div class="lg:basis-4/5 w-fit">
      <div class="flex flex-col">
        <h1 class="font-semibold text-xl w-fit">
        <?php
          if ($property_datas[0]['uploader_id']==0)
          {
       echo 'Home Guru';
          }else{
       echo $property_datas[0]['gc_company_name'];}?>
        </h1>
        <div class="flex flex-row items-center mt-3 justify-between w-1/2 text-xs">
          <p><?php
        $dateTime = new DateTime( $property_datas[0]['created_date']);

        $formattedDateTime = $dateTime->format('F j \a\t g:i A');
        
        echo $formattedDateTime;
           ?></p>
         <?php
$interestCount = $property_datas[0]['p_interest_count'];

if ($interestCount == 0) {
    // Don't show anything if the count is zero
} elseif ($interestCount == 1) {
    echo '<p>1 person interest</p>';
} else {
    echo "<p>$interestCount people interests</p>";
}
?>
        </div>
      </div>
    </div>
  </div>

  <!-- property imgs & property info  -->
  <div>
    <!-- imgs -->
    <div class="lg:w-2/3 w-full flex flex-col items-center justify-around float-left">
      <div class="w-96 lg:w-[674.86px] lg:h-96 h-56 bg-cover bg-center rounded-lg property-img" style="background-image: url('../resources/img/entrance-hall.jpg')"></div>
      <div class="flex flex-row items-center w-3/4 justify-evenly mt-7">
       <!--  images -->
       <?php
            $photos = [];
            for ($i = 1; $i <= 5; $i++) {
                if (!empty($property_datas[0]["p_photo_$i"])) {
                    $photos[] = $property_datas[0]["p_photo_$i"];
                }
            }
            ?>
            <?php foreach ($photos as $photo) : ?>
                <div class="image-label-container">
                    <div class="image-container property-img" style="background-image: url('../../../Storage/house/<?= $_GET["id"] ?>/<?= $photo ?>');"></div>
                </div>
            <?php endforeach; ?>
      </div>
    </div>

    <!-- property info -->
    <div class="mt-5 lg:mt-0 space-y-4 text-center lg:text-left w-full lg:w-1/3 lg:sticky top-0 h-fit float-left">
      <h5 class="text-xl font-semibold tracking-tight text-black">
      <?= $property_datas[0]['p_title'] ?>
      </h5>
      <div class="bg-gray-800 text-white text-center py-1.5 rounded-md text-xl font-semibold lg:mx-0 mx-5 lg:w-1/2 w-11/12">
      <?php 
        if ($property_datas[0]['p_price_unit'] == 1) {
            echo '$' . $property_datas[0]['p_price'];
        } elseif ($property_datas[0]['p_price_unit'] == 2) {
            echo $property_datas[0]['p_price'] . ' Kyat';
        }
    ?> /  <?php 
    if ($property_datas[0]['p_duration'] == 0) {
        echo 'Month';
    } elseif ($property_datas[0]['p_duration'] == 1) {
        echo 'Year';
    }
?>
      </div>
      <div>
        <span class="font-playFair font-semibold">Property ID: </span><?= $property_datas[0]['p_code'] ?>
      </div>
      <div>
        <span class="font-playFair font-semibold">Offer Type: </span>   <?php if($property_datas[0]['p_offer']==0){
              echo 'Rent'  ;
            };
            if($property_datas[0]['p_offer']==1){
              echo 'Sale'  ;
            }
            ?>
      </div>
      <div>
        <span class="font-playFair font-semibold">Property Type: </span><?= $property_datas[0]['pt_name'] ?>
      </div>
      <div>
        <span class="font-playFair font-semibold">Size: </span><?= $property_datas[0]['p_width'] ?>x<?= $property_datas[0]['p_length'] ?>
              <?php 
        if ($property_datas[0]['p_size_unit'] == 1) {
            echo 'm';
        } elseif ($property_datas[0]['p_size_unit'] == 2) {
            echo 'ft';
        }
    ?><sup>2</sup>
      </div>
      <div>
        <span class="font-playFair font-semibold">Township: </span>CD354#E
      </div>
      <div class="sharethis-inline-share-buttons pl-0"></div>
     <div class="flex h-10 items-start justify-start"> 
      <a href="tel:+959980636388"><button type="button" class="text-white bg-green-600   rounded-lg text-sm px-5 py-2 text-center inline-flex items-center me-2 mb-2">
        <ion-icon name="call" class="text-lg mr-2"></ion-icon> Contact
      </button></a>
      <a href="../interest_View/interest_view_register.php">
      <button type="button" class="text-white bg-goldYellow  rounded-lg text-sm px-5 py-2 text-center inline-flex items-center me-2 mb-2">
        <i class="fa-solid fa-file-lines text-lg mr-2"></i>
        Interest View Register
      </button>
      </a>
      </div>
     
    </div>
    <!-- The Modal -->
    <div id="myModal">
      <!-- Modal content -->
      <div id="modal-content" class="flex items-center justify-center">
        <img id="display-full-img" class="w-4/5 h-auto lg:w-auto lg:h-[80vh]" src="" />
        <span id="img-description" class="mt-4"></span>
      </div>
    </div>
    <!-- complete property details -->
    <div class="flex flex-col items-center lg:w-3/5 w-full lg:ml-10 ml-0">
      <!-- map -->
      <div class="mt-6 mx-4 relative ">
      <?= str_replace('<iframe', '<iframe class="lg:h-64 lg:w-[600px] w-full h-32  border border-black rounded-lg shadow-[rgba(6,_24,_44,_0.4)_0px_0px_0px_2px,_rgba(6,_24,_44,_0.65)_0px_4px_6px_-1px,_rgba(255,_255,_255,_0.08)_0px_1px_0px_inset]"', $property_datas[0]['p_location']); ?>
       
      </div>

      <!-- line break -->
      <hr class="my-8 w-11/12 lg:w-1/2 h-1 bg-paleGray" />

      <!-- features -->
      <div class="w-full">
                <p class="font-medium text-lg mb-2">Additional Features</p>

                <div class="grid grid-cols-3 lg:text-base text-sm px-2 sm:px-0">

                    <?php
                    $facility = explode(", ", $property_datas[0]['p_facilities']);
                    $facilitiesRatio = (count($facility) / 3);
                    $first = (int)$facilitiesRatio;
                    $last = (int)(($facilitiesRatio - $first) * 10);

                    if ($facilitiesRatio <= 1) {
                        for ($i = 0; $i < 3; $i++) {
                            if (isset($facility[$i])) {
                                echo "<div><ul class='list-disc list-inside text-start'>";
                                echo "<li>" . $facility[$i] . "</li>";
                                echo "</ul></div>";
                            }
                        }
                    } else if ($last == 0) {
                        // echo "<pre>";
                        $chunks = array_chunk($facility, $first);
                        foreach ($chunks as $chunk) {
                            echo "<div>";
                            for ($i = 0; $i < $first; $i++) {
                                if (isset($chunk)) {
                                // echo "<pre>";
                                // print_r($chunk);
                                echo "<ul class='list-disc list-inside text-start'>";
                                echo "<li>" . $chunk[$i] . "</li>";
                                echo "</ul>";
                            }
                            }
                            
                            echo "</div>";
                        }
                    } else if ($last == 3 || $last == 6) { // 16 // first 5
                        // for first column
                        echo "<div>";
                        for ($i = 0; $i < $first + 1; $i++) {
                            if (isset($facility[$i])) {
                                echo "<ul class='list-disc list-inside text-start'>";
                                echo "<li>" . $facility[$i] . "</li>";
                                echo "</ul>";
                            }
                        }
                        echo "</div>";

                        // for sec column
                        echo "<div>";
                        for ($i = $first + 1; $i < count($facility) - $first; $i++) {
                            if (isset($facility[$i])) {
                                echo "<ul class='list-disc list-inside text-start'>";
                                echo "<li>" . $facility[$i] . "</li>";
                                echo "</ul>";
                            }
                        }
                        echo "</div>";

                        // for third column 
                        echo "<div>";
                        for ($i = count($facility) - $first; $i < count($facility); $i++) {
                            if (isset($facility[$i])) {
                                echo "<ul class='list-disc list-inside text-start'>";
                                echo "<li>" . $facility[$i] . "</li>";
                                echo "</ul>";
                            }
                        }
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>

      <!-- line break -->
      <hr class="my-8 w-11/12 lg:w-1/2 h-1 bg-paleGray" />

      <!-- descriptions -->
      <div class="w-full">
        <h1 class="font-playFair text-2xl mb-3 text-center">Description</h1>

        <p class="tracking-wider leading-8 ml-2">
          <?php
          function addBRAfterFullStop($text)
          {
            return preg_replace('/\.\W/', '.<br>', $text);
          }
          // information comes from database will be given to $inputText variable
          $inputText = $property_datas[0]['p_description'];
          $processedText = addBRAfterFullStop($inputText);
          echo $processedText;
          ?>
        </p>
      </div>
    </div>
  </div>
  <!-- line break -->
  
  <hr class="my-6 w-11/12 lg:w-1/2 h-1 m-auto bg-paleGray" />
  <!-- related properties section -->

    <h1 class="text-3xl font-bold mb-20 text-center" style="font-family: 'Playfair Display';">Related Properties</h1>

    <?php
  $maxLimit = 3;
  $count = 0;

  foreach ($related_properties as $property) {
    if ($count % $maxLimit === 0) {
      // Start a new row for every $maxLimit items
      if ($count !== 0) {
        echo '</div></div>'; // Close the previous grid and flex containers
      }
      echo '<div class="flex justify-around mb-10"><div class="grid lg:grid-cols-3 grid-cols-1 gap-16">';
    }

    // Increment the counter
    $count++; ?>

    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <a href="../property_post/detail_post.php?id=<?= $property['id'] ?>&pt_id=<?= $property['pt_id'] ?>&p_offer=<?= $property['p_offer'] ?>&p_township=<?= $property['p_township'] ?>">
        <div class="relative h-56">
          <div class="bg-darkGreen text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
            <?php if ($property['p_offer'] == 0) {
              echo 'Rent';
            };
            if ($property['p_offer'] == 1) {
              echo 'Sale';
            }
            ?></div>
          <img class="pb-4 rounded-t-lg h-full w-full" src="../../../Storage/house/<?= $property["id"] ?>/<?= $property["p_photo_1"] ?>" alt="product image" />
        </div>
      </a>
      <div class="px-5 pb-5">
        <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
          <span><?php
                $dateTime = new DateTime($property['created_date']);

                $formattedDateTime = $dateTime->format('F j \a\t g:i A');

                echo $formattedDateTime;
                ?></span>
          <span>        <?php
$interestCount = $property_datas[0]['p_interest_count'];

if ($interestCount == 0) {
    // Don't show anything if the count is zero
} elseif ($interestCount == 1) {
    echo '1 person interest';
} else {
    echo "$interestCount people interests";
}
?></span>
        </div>
        <div class="my-2.5 flex items-center justify-between">
          <a href="#" class="mt-2.5 mb-5">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
              <?= $property['p_title'] ?>
            </h5>
          </a>
          <div class="rounded-full bg-gray-50 w-16">
            <img src="../resources/img/" alt="" />
          </div>
        </div>

        <div class="mt-2.5 mb-5 text-darkGreen flex items-center text-xl">
          <i class="fa-sharp fa-solid fa-money-bill pt-1"></i>
          <span class="ml-3 mt-2">
            <?php
            if ($property['p_price_unit'] == 1) {
              echo '$' . $property['p_price'];
            } elseif ($property['p_price_unit'] == 2) {
              echo $property['p_price'] . ' Kyat';
            }
            ?>
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

        <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
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
          <a href="../property_post/detail_post.php?id=<?= $property['id'] ?>&pt_id=<?= $property['pt_id'] ?>&p_offer=<?= $property['p_offer'] ?>&p_township=<?= $property['p_township'] ?>" class="text-darkGreen border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
        </div>
      </div>
    </div>


  <?php }

  // Close the last grid and flex containers if needed
  if ($count % $maxLimit !== 0) {
    echo '</div></div>';
  }
  ?>



  <!-- footer -->
  <?php include '../footer/footer.php' ?>
</body>

</html>