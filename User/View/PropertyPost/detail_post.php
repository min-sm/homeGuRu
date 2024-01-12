<?php include '../../Controller/common/colorsController.php' ?>
<?php include '../../Controller/PropertyDetailController.php' ?>
<?php include '../../Controller/RelatedPropertiesController.php' ?>
<?php include '../../Controller/SliderController.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Property Details</title>
  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="../../../Storage/logo/<?= $resultSlider[0]["fav_icon"] ?>">
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
  <!-- ionic icon -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- share api -->
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=657dfb21954d790019bcd913&product=inline-share-buttons&source=platform" async="async"></script>
  <!-- tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- phone number library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/libphonenumber-js/1.7.50/libphonenumber-js.min.js"></script>
  <link href="../resources/css/dist/output.css" rel="stylesheet" />
</head>

<body class="bg-[#F7F7F7] tracking-wide" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color'] ?>">
  <!-- Navigation -->
  <?php include '../header/header.php' ?>

  <!-- uploader info -->
  <div class="flex flex-row items-center gap-3 w-4/5 lg:w-1/2 my-6  ms-4 lg:ms-24">
    <!-- collaborator logo -->
    <div class=" mr-2 sm:mr-0">
      <a href="
      <?php
      if ($property_datas[0]['uploader_id'] == 0) {

        echo '../ContactUs/contactUs.php';
      } else {
        echo '../collaborator/profile.php?collaborator_id=' . $property_datas[0]['uploader_id'];
      }
      ?>">
        <div class="rounded-full border-gray-500 border hover:opacity-50 bg-[#D9D9D9] w-20 h-20 overflow-hidden">
          <img class="w-full h-full" src='<?php
                                          if ($property_datas[0]['uploader_id'] == 0) {
                                            echo "../../../Storage/logo/" . $resultSlider['fav_icon'];
                                          } else {
                                            echo "../../../Storage/collaborator_img/gc" . $property_datas[0]['uploader_id'] . "/" . $property_datas[0]['gc_logo'];
                                          } ?>' alt="">
        </div>
      </a>
    </div>

    <div class=" w-fit">
      <div class="flex flex-col">
        <h1 class="font-semibold text-xl w-fit">
          <?php
          if ($property_datas[0]['uploader_id'] == 0) {
            echo 'Home Guru';
          } else {
            echo $property_datas[0]['gc_company_name'];
          } ?>
        </h1>
        <div class="flex flex-row items-center mt-3 justify-between w-1/2 text-xs whitespace-nowrap ">
          <p><?php
              $dateTime = new DateTime($property_datas[0]['updated_date']);

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
      <div id="slider" class="w-96 lg:w-[674.86px] lg:h-96 h-56 bg-cover bg-center rounded-lg property-img" style="background-image: url('../../../Storage/house/<?= $property_datas[0]["id"] ?>/<?= $property_datas[0]["p_photo_1"] ?>')"></div>


      <!--  images -->

      <div class="flex flex-row items-center w-full lg:w-5/6 justify-evenly mt-7">
        <?php
        $photos = [];
        for ($i = 1; $i <= 5; $i++) {
          if (!empty($property_datas[0]["p_photo_$i"])) {
            $photos[] = $property_datas[0]["p_photo_$i"];
          }
        }
        ?>
        <?php foreach ($photos as $photo) : ?>
          <div class="w-20 lg:w-36 h-12 mb-5 lg:h-24 bg-cover bg-center rounded-lg property-imgs" style="background-image:url('../../../Storage/house/<?= $property_datas[0]["id"] ?>/<?= $photo ?>')"></div>
        <?php endforeach; ?>
      </div>

    </div>


    <!-- property info -->
    <div class="mt-5 lg:mt-0 space-y-4 text-center lg:text-left w-full lg:w-1/3 lg:sticky top-0 h-fit float-left">
      <h5 class="text-xl font-semibold tracking-tight text-black">
        <?= $property_datas[0]['p_title'] ?>
      </h5>
      <div class="bg-gray-800 text-white text-center py-1.5 rounded-md text-xl font-semibold lg:mx-0 mx-5 lg:w-1/2 w-11/12">
      <?php if ($property_datas[0]['p_price_unit'] == 1) {
                echo '$' . number_format($property_datas[0]['p_price']);
              } elseif ($property_datas[0]['p_price_unit'] == 2) {
                if ($property_datas[0]['p_price'] > 999999) {

                  $formatted_price = substr_replace(number_format($property_datas[0]['p_price']), 'lakh', -5);
                  echo $formatted_price;
                } else {

                  echo 'Ks' . $property_datas[0]['p_price'];
                }
              } ?> / <?php
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
        <span class="font-playFair font-semibold">Offer Type: </span> <?php if ($property_datas[0]['p_offer'] == 0) {
                                                                        echo 'Rent';
                                                                      };
                                                                      if ($property_datas[0]['p_offer'] == 1) {
                                                                        echo 'Sale';
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
        <span class="font-playFair font-semibold">Township: </span><?= $property_datas[0]['name'] ?>
      </div>
      <div class="flex pl-16 lg:pl-0 ">
        <div class="sharethis-inline-share-buttons "></div>
      </div>
      <div class="flex h-10 items-start  justify-start pl-16 lg:pl-0 ">
        <a href="tel:<?= $property_datas[0]['gc_phone_num']  ?>"><button type="button" class="text-white bg-green-600 hover:opacity-60    rounded-lg text-sm px-5 py-2 text-center inline-flex items-center me-2 mb-2">
            <ion-icon name="call" class="text-lg mr-2"></ion-icon> Contact
          </button></a>
        <a href="mailto:<?= $property_datas[0]['gc_email']  ?>"><button type="button" class="text-white bg-blue-500 hover:opacity-60    rounded-lg text-sm px-5 py-2 text-center inline-flex items-center me-2 mb-2">
            <i class="fa-solid fa-envelope" class="text-lg "></i> <span class="ml-2">Mail</span>
          </button></a>
      </div>
      <div class="">
        <button id="interestRegister" type="button" class="text-white bg-goldYellow hover:opacity-60  rounded-lg text-sm px-5 py-2 text-center inline-flex items-center me-2 mb-2">
          <i class="fa-solid fa-file-lines text-lg mr-2"></i>
          Interest Register
        </button>
      </div>

    </div>

    <!-- The Modal -->
    <div id="myModal">
      <!-- Modal content -->
      <div id="modal-content" class="flex items-center relative justify-center">
        <img id="display-full-img" class="w-4/5 h-auto lg:w-auto lg:h-[80vh]" src="" />
        <div id="prevButton" class="px-2 py-1 bg-gray-400 rounded-lg opacity-60 hover:bg-gray-600 hover:right-3 absolute bottom-1/2 right-5"><i class="fa-solid text-3xl fa-greater-than "></i></div>
        <div id="nextButton" class="px-2 py-1 bg-gray-400 rounded-lg opacity-60 hover:bg-gray-600 hover:left-3 absolute bottom-1/2 left-5"><i class="fa-solid text-3xl fa-less-than "></i></div>
        <span id="img-description" class="mt-4"></span>
      </div>
    </div>
    <!-- complete property details -->
    <!-- toggle 1 -->
    <div class="flex flex-col items-center lg:w-3/5 w-full lg:ml-10 ml-0" id="info">
      <!-- map -->
      <div class="mt-6 mx-4 relative ">
        <?= str_replace('<iframe', '<iframe class="lg:h-64 lg:w-[600px] w-full h-32  border border-black rounded-lg shadow-[rgba(6,_24,_44,_0.4)_0px_0px_0px_2px,_rgba(6,_24,_44,_0.65)_0px_4px_6px_-1px,_rgba(255,_255,_255,_0.08)_0px_1px_0px_inset]"', $property_datas[0]['p_location']); ?>
      </div>

      <!-- line break -->
      <hr class="my-8 w-11/12 lg:w-1/2 h-1 bg-paleGray
      <?php if ($property_datas[0]['p_description'] == null) {
        echo 'hidden';
      }; ?>" />

      <!-- features -->
      <div class="w-full <?php if ($property_datas[0]['p_facilities'] == null) {
                            echo 'hidden';
                          }; ?>">
        <p class="font-medium text-lg mb-5 text-center">Additional Facilities</p>

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
      <hr class="my-8 w-11/12 lg:w-1/2 h-1 bg-paleGray <?php if ($property_datas[0]['p_description'] == null) {
                                                          echo 'hidden';
                                                        }; ?>" />

      <!-- descriptions -->
      <div class="w-full <?php if ($property_datas[0]['p_description'] == null) {
                            echo 'hidden';
                          }; ?>">
        <h1 class="font-playFair text-2xl mb-5 text-center">Description</h1>

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
    <!-- end toggle1 -->
    <!-- toggle 2 -->
    <div class="flex flex-col  bg-white pt-8 rounded-lg  items-center lg:w-3/5 lg:ml-10 ml-0  w-full justify-evenly " id="form">

      <h1 class="font-semibold text-2xl   text-center tracking-wide mb-5 ">
        Interest Register Form
      </h1>
      <p class="w-4/5  text-center text-sm tracking-wide ">
        Alternatively, you can fill out the contact form below and we will get back to you . We contact with email
        and phone to Look the Propety house of Location & Date .
      </p>
      <form method="post" action="../../Controller/InterestFormController.php" id="ilfForm" class="w-3/5 my-10">
        <input type="text" required name="name" id="name" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name">
        <div class="grid md:grid-cols-2 md:gap-16 ">
          <div>

            <input type="text" required name="email" id="email" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email">
            <p id="errorEmail" class="text-alert text-xs mb-5"></p>
            <input type="text" required name="phone" id="phone" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Phone">
            <p id="errorPhone" class="text-alert text-xs mb-5 whitespace-nowrap"></p>
          </div>
          <div>
            <h1 class="text-sm font-medium  mb-2">Appointment Date</h1>
            <input type="date" required name="date" id="date" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="date">
          </div>
        </div>

        <textarea name="note" id="note" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write note Here....."></textarea>
        <div class="w-full flex items-center relative mt-5 mb-10">
          <input id="link-checkbox" required name="aggree" type="checkbox" value="" class=" absolute left-0  w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="link-checkbox" class=" px-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 tracking-wide">
            I consent to having this website store my submitted information
          </label>
        </div>

        <input type="hidden" name="post_id" value="<?= $property_datas[0]['id'] ?>">
        <div class="w-full flex items-end justify-end space-x-5  ">
          <button type="submit" name="submit" class=" text-white border-2 bg-darkGreen  hover:bg-teal-500
    focus:ring-4 focus:outline-none font-semibold rounded-lg  px-5 py-2 text-center 
    dark:bg-blue-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Submit
          </button>
          <button type="button" class="text-darkGreen border-2 border-darkGreen bg-transparent hover:text-alert 
    focus:ring-4 focus:outline-none focus:ring-green-300 font-semibold rounded-lg  px-5 py-2 text-center 
    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="cancel">
            Cancel</button>

        </div>
      </form>



    </div>
    <!-- toggle 2 end -->
  </div>
  <!-- line break -->

  <hr class="my-6 w-11/12 lg:w-1/2 h-1 m-auto bg-paleGray" />
  <!-- related properties section -->

  <h1 class="text-2xl font-bold mb-16 text-center" style="font-family: 'Playfair Display';">Related Properties</h1>
  <div class="flex  justify-around   flex-wrap w-full  gap-5 mb-10 ">
    <?php
    foreach ($related_properties as $property) {
    ?>
      <div class="w-full    max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="../PropertyPost/detail_post.php?id=<?= $property['pid'] ?>&pt_id=<?= $property['pt_id'] ?>&p_offer=<?= $property['p_offer'] ?>&p_township=<?= $property['p_township'] ?>">
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
            <img class="pb-4 rounded-t-lg w-full h-full" src="../../../Storage/house/<?= $property["pid"] ?>/<?= $property['p_photo_1'] ?>" alt=" product image" />
          </div>
        </a>
        <div class="px-5 pb-5">
          <div class="flex items-center text-black dark:text-white text-xs justify-between mb-2.5">
            <span><?php
                  $dateTime = new DateTime($property['updated_date']);

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
            <a href="../PropertyPost/detail_post.php?id=<?= $property['pid'] ?>&pt_id=<?= $property['pt_id'] ?>&p_offer=<?= $property['p_offer'] ?>&p_township=<?= $property['p_township'] ?>" class="mt-2.5 mb-5">
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
            <a href="
      <?php
      if ($property['uploader_id'] == 0) {

        echo '../ContactUs/contactUs.php';
      } else {
        echo '../collaborator/profile.php?collaborator_id=' . $property['uploader_id'];
      }
      ?>">
              <div class="rounded-full border-gray-500 border hover:opacity-50 bg-[#D9D9D9] w-14 h-14 overflow-hidden  ">
                <?php if ($property['uploader_id'] == 0) : ?>
                  <img src="../../../Storage/slider/<?= $resultSlider[0]['fav_icon'] ?>" class="w-13 h-13" alt="HomeGuRu" />
                <?php else : ?>
                  <img class="w-14 h-14" src="../../../Storage/collaborator_img/gc<?= $property['uploader_id'] . '/' . $property['gc_logo'] ?>" alt="<?= $property['gc_company_name']; ?>" />
                <?php endif; ?>
              </div>
            </a>

          </div>

          <div class=" mb-5 text-darkGreen flex items-center text-lg">
            <i class="fa-sharp fa-solid fa-money-bill pt-1"></i>
            <span class="ml-3 mt-2 font-meduim">
            <?php if ($property['p_price_unit'] == 1) {
                echo '$' . number_format($property['p_price']);
              } elseif ($property['p_price_unit'] == 2) {
                if ($property['p_price'] > 999999) {

                  $formatted_price = substr_replace(number_format($property['p_price']), 'lakh', -5);
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
            <a href="../PropertyPost/detail_post.php?id=<?= $property['pid'] ?>&pt_id=<?= $property['pt_id'] ?>&p_offer=<?= $property['p_offer'] ?>&p_township=<?= $property['p_township'] ?>" class="text-darkGreen border-2 border-slate-500 hover:opacity-50 bg-transparent font-medium rounded-lg text-sm px-5 py-2 text-center dark:border-slate-50">Details</a>
          </div>
        </div>
      </div>


    <?php }


    ?>
  </div>

  <!-- pagination -->
  <div class="flex justify-center my-16">
    <nav aria-label="Page navigation example">
      <ul class="flex items-center -space-x-px h-10 text-base">
        <li>
          <a href="?page=<?= $page == $page > 1 ? $page - 1 : 1 ?>&id=<?= $property_datas[0]['id'] ?>&id=<?= $property_datas[0]['id'] ?>&pt_id=<?= $property_datas[0]['pt_id'] ?>&p_offer=<?= $property_datas[0]['p_offer'] ?>&p_township=<?= $property_datas[0]['p_township'] ?>" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Previous</span>
            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
          </a>
        </li>
        <?php
        for ($i = 1; $i <= $totalPages; $i++) {
          if ($page == $i) {
        ?>
            <li>
              <a href="?page=<?= $i ?>&id=<?= $property_datas[0]['id'] ?>&pt_id=<?= $property_datas[0]['pt_id'] ?>&p_offer=<?= $property_datas[0]['p_offer'] ?>&p_township=<?= $property_datas[0]['p_township'] ?>" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                <?= $i ?>
              </a>
            </li>
          <?php } else {
          ?>
            <li>
              <a href="?page=<?= $i ?>&id=<?= $property_datas[0]['id'] ?>&pt_id=<?= $property_datas[0]['pt_id'] ?>&p_offer=<?= $property_datas[0]['p_offer'] ?>&p_township=<?= $property_datas[0]['p_township'] ?>" class="  flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <?= $i ?>
              </a>
            </li>
        <?php }
        }
        ?>
        <li>
          <a href="?page=<?= $page == $page < $totalPages ? $page + 1 : $totalPages ?>&id=<?= $property_datas[0]['id'] ?>&pt_id=<?= $property_datas[0]['pt_id'] ?>&p_offer=<?= $property_datas[0]['p_offer'] ?>&p_township=<?= $property_datas[0]['p_township'] ?>" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Next</span>
            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <!-- footer -->
  <?php include '../footer/footer.php' ?>
  <!-- interest form script -->
  <script>
    $(document).ready(function() {
      $("#form").hide();

      // Button click event
      $("#interestRegister").click(function() {

        $(this).fadeOut(200);
        $("#info").fadeOut(200);
        $("#form").delay(200).fadeIn(400);
      });


      // Cancel button click event inside the form
      $("#cancel").click(function(event) {
        event.preventDefault();
        // Show the interestRegister button and hide the form with fadeOut animation (200ms duration)
        $("#interestRegister").delay(200).fadeIn(400); // Add a 200ms delay and set fadeIn duration to 400ms
        $("#info").delay(200).fadeIn(400); // Add a 200ms delay and set fadeIn duration to 400ms
        $("#form").fadeOut(200);
      });

      // email input check
      function isValidEmail(email) {
        // Regular expression for a basic email validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
      }

      function isValidPhoneNumber(phoneNumber) {
        var phoneNumberRegex = /^\+\d{1,4}\d{7,14}$/;
        return phoneNumberRegex.test(phoneNumber);
      }
      $("#ilfForm").submit(function(event) {
        var userEmail = $("#email").val();
        var userPhoneNumber = $("#phone").val();
        if (!isValidEmail(userEmail)) {
          $('#errorEmail').html("Email is not valid.")
          event.preventDefault();
        }
        if (!isValidPhoneNumber(userPhoneNumber)) {
          $('#errorPhone').html("Phone number is not valid. Please Enter with country code( i.e +959980636388 )");
          event.preventDefault();
        }

      });
    });
  </script>
  <!--image modal script -->
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    const slider = document.getElementById('slider');

    let smalls = document.getElementsByClassName("property-imgs");
    let fullImg = document.getElementById("display-full-img");

    // Previous and Next buttons
    const prevButton = document.getElementById("prevButton");
    const nextButton = document.getElementById("nextButton");

    let currentIndex = 0;

    // Function to update the slider background image based on the current index
    function updateSlider(index) {
      const inputString = smalls[index].style.backgroundImage;
      slider.style.backgroundImage = inputString;
    }

    // Function to update the fullImg src based on the current index
    function updateFullImgSrc(index) {
      const inputString = smalls[index].style.backgroundImage;
      const regex = /url\("([^"]+)"\)/;
      const match = inputString.match(regex);

      const extractedURL = match ? match[1] : null;
      const filename = extractedURL
        .split("/")
        .pop()
        .replace(/\.[^/.]+$/, "");
      const extractedText = filename.replace(/[-_]/g, " ");
      fullImg.src = extractedURL;
      document.getElementById("img-description").innerText =
        extractedText.replace(/\b\w/g, (char) => char.toUpperCase());
    }

    // Event listener for the Previous button
    prevButton.addEventListener("click", () => {
      currentIndex = (currentIndex - 1 + smalls.length) % smalls.length;
      updateSlider(currentIndex);
      updateFullImgSrc(currentIndex);
    });

    // Event listener for the Next button
    nextButton.addEventListener("click", () => {
      currentIndex = (currentIndex + 1) % smalls.length;
      updateSlider(currentIndex);
      updateFullImgSrc(currentIndex);
    });

    // Event listeners for small images
    for (const small of smalls) {
      small.addEventListener("click", () => {
        currentIndex = Array.from(smalls).indexOf(small);
        updateSlider(currentIndex);
        updateFullImgSrc(currentIndex);
      });
    }

    // Event listener for the slider
    slider.addEventListener("click", () => {
      const inputString = slider.style.backgroundImage;
      const regex = /url\("([^"]+)"\)/;
      const match = inputString.match(regex);
      const extractedURL = match ? match[1] : null;
      const filename = extractedURL
        .split("/")
        .pop()
        .replace(/\.[^/.]+$/, "");
      modal.style.display = "flex";
      const extractedText = filename.replace(/[-_]/g, " ");
      fullImg.src = extractedURL;
      document.getElementById("img-description").innerText =
        extractedText.replace(/\b\w/g, (char) => char.toUpperCase());
    });

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };
  </script>


</body>

</html>