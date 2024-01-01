<?php include '../../Controller/common/RentPropertiesController.php' ?>
<?php include '../../Controller/common/SalePropertiesController.php' ?>
<?php include '../../Controller/common/RecommendController.php' ?>
<?php include '../../Controller/SliderController.php' ?>
<?php include '../../Controller/common/colorsController.php' ?>
<?php include '../../Controller/common/LocationListController.php' ?>
<?php include '../../Controller/PropertyTypeController.php' ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    .home {
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

    a {
      cursor: pointer;

    }
  </style>
  <!-- Aos animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- ionic icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/b9864528d4.js" crossorigin="anonymous"></script>
  <script src="index.js"></script>
  <!-- flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
  <!-- tailwind -->
  <link href="../resources/css/dist/output.css" rel="stylesheet" />
  <title>home</title>
</head>

<body class=' w-screen overflow-x-hidden bg-primary' style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color'] ?>">
  <?php include '../header/header.php' ?>

  <!-- start hero -->
  <div class="relative mb-20">
    <img src="../../../Storage/slider/<?= $resultSlider[0]['hero_slider'] ?>" width="100%" alt="" />

    <!--Decription-->
    <p class="text-white w-[160px] lg:w-[343px] sm:w-[200px] text-sm sm:text-xl lg:text-3xl font-playFair whitespace-nowrap font-bold overflow-hidden typing absolute top-14 sm:top-16 left-5 lg:top-52 lg:left-24 xl:left-20">Guru knows every house</p>
    <!-- start search Bar -->
    <form action="../../Controller/common/SearchPropertiesController.php" method="post">
    <div class="w-11/12 lg:w-3/4 h-8 sm:h-10 md:h-12 lg:h-14   bg-secondary rounded-md absolute -bottom-5 md:-bottom-8 left-4 md:left-10 lg:left-28 xl:left-44 2xl:left-72 py-2 px-2 flex text-xs lg:text-base">
      <!-- location -->
      <div class="flex w-1/4 items-center border-r">
        <ion-icon name="location" class="text-alert mr-1 lg:mx-2"></ion-icon>
        <div>
          <select name="location" class="bg-secondary text-primary w-16 sm:w-20 md:w-28 lg:w-36 xl:w-48 2xl:w-52 border-none text-2xs sm:text-sm lg:text-base focus:ring-0">
            <option value="12" disabled selected>Location</option>
            <?php foreach ($locations as $region) : ?>
              <option value="<?php echo $region['id']; ?>"><?php echo $region['name']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <!-- type -->
      <div class="flex w-1/4 items-center border-r pr-1">
        <ion-icon name="business" class="text-primary ml-1 sm:mx-2 lg:mx-3"></ion-icon>
        <div>
          <select name="type" class="bg-secondary text-primary w-16 sm:w-20 md:w-28 lg:w-36 xl:w-48 2xl:w-52 border-none text-2xs sm:text-small lg:text-base focus:ring-0">
            <option value="" disabled selected>Type</option>
            <?php foreach ($property_types as $property_type) : ?>
              <option value="<?php echo $property_type['id']; ?>"><?php echo $property_type['pt_name']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <!-- price -->
      <div class="flex w-1/4 items-center mr-1 border-r">
        <ion-icon name="cash-outline" class="text-darkGreen mx-1 sm:mx-2 lg:mx-3"></ion-icon>
        <div>
          <select name="price" class="bg-secondary text-primary w-16 sm:w-20 md:w-28 lg:w-36 xl:w-48 2xl:w-52 border-none text-2xs sm:text-small lg:text-base focus:ring-0">
            <option value="" disabled selected>Price</option>
            <option value="<$10000">
              < $10000</option>
            <option value=""> > $10000 </option>
            <option value="">
              < $100000 </option>
            <option value=""> > $100000 </option>
            <option value="">
              < 500000kyat</option>
            <option value=""> >Ks500000</option>
            <option value="">
              < 100,000,000kyat </option>
            <option value=""> > Ks100,000,000 </option>
          </select>
        </div>
      </div>
    
      <!-- search btn -->
      <div class=" w-1/4  flex justify-center items-center text-center">
<button type="submit" name="submit" class="text-primary cursor-pointer  focus:outline-none bg-darkGreen hover:bg-teal-500 focus:ring-2 focus:ring-teal-400  h-5 md:h-8 rounded-md px-4 text-2xs md:text-sm">
            Search
          </button>
      </div>
    </div>
    </form>
    <!-- end search bar -->

  </div>
  <!-- end hero -->
  <!-- Recommended Properties -->
  <h1 class="font-playFair text-2xl font-extrabold ml-10 sm:ml-14 mb-7 tracking-wider">
    Recommended Properties
  </h1>
  <div class="py-2 border-b-gray-500 mb-28">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <?php foreach ($recommend_properties as $property) {

        ?>
          <div class="hidden duration-700 ease-in-out m-auto bg-white" data-carousel-item>
            <h1 class="font-bold text-sm  sm:hidden sm:text-xl text-center mt-5"><?= $property['p_title'] ?></h1>
            <div class="absolute flex  justify-around items-center gap-2 sm:gap-0  h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 px-10 lg:px-14  ">

              <div class="relative w-1/2 sm:h-5/6  rounded-md overflow-hidden flex  items-center  sm:mb-0 ">

                <img src="../../../Storage/house/<?= $property["id"] ?>/<?= $property['p_photo_1'] ?>" width="100%" height="100%" alt="" />
                <div class="  <?php
                              if ($property['p_after'] == 1) {
                                echo 'bg-alert';
                              } else if ($property['p_offer'] == 0) {
                                echo 'bg-darkGreen';
                              } else {
                                echo 'bg-secondary';
                              };

                              ?> text-white flex items-center  justify-center rounded-tl-lg rounded-bl-lg px-2  h-4  sm:w-20 sm:h-8 text-2xs sm:text-base absolute right-0 top-2 sm:top-8 md:top-[110px] lg:top-14 xl:top-10">
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
              </div>
              <div class="space-y-0 sm:space-y-5  flex flex-col mt-1 ml-1  sm:mt-7 sm:ml-5 w-2/5 sm:w-1/2">
                <!-- title  -->
                <h1 class="font-bold text-sm hidden sm:block sm:text-xl"><?= $property['p_title'] ?></h1>
                <!-- price -->
                <div class="sm:block hidden">
                  <ion-icon name="cash-outline" class="text-darkGreen pl-0 sm:pl-2"></ion-icon>
                  <span class="text-darkGreen ml-1 font-bold text-xs sm:text-xl"> <?php if ($property['p_price_unit'] == 1) {
                                                                                    echo '$' . $property['p_price'];
                                                                                  } elseif ($property['p_price_unit'] == 2) {
                                                                                    if ($property['p_price'] > 999999) {

                                                                                      $formatted_price = substr_replace($property['p_price'], 'lakh', -5);
                                                                                      echo $formatted_price;
                                                                                    } else {

                                                                                      echo 'Ks' . $property['p_price'];
                                                                                    }
                                                                                  }
                                                                                  ?> / <?php if ($property['p_duration'] == 0) {
                                                                                          echo 'Month';
                                                                                        } elseif ($property['p_duration'] == 1) {
                                                                                          echo 'Year';
                                                                                        } ?></span>
                </div>
                <!-- Description -->
                <p class="tracking-wide text-2xs sm:text-base hidden sm:block">
                  <?php
                  $limitedDescription = substr($property['p_description'], 0, 120);
                  echo strlen($property['p_description']) > 100 ? $limitedDescription . '...' : $limitedDescription;
                  ?>

                </p>
                <!-- facts -->
                <div class="space-y-1 sm:space-y-5  ">
                  <div class="flex justify-between sm:gap-0 gap-1 flex-col sm:flex-row">
                    <div>
                      <span class="font-semibold text-2xs sm:text-base">Property ID:</span>
                      <span class="text-2xs sm:text-base"><?= $property['p_code'] ?></span>
                    </div>
                    <div class="text-2xs sm:text-base ">
                      <span class="font-semibold">Property Type:</span>
                      <span><?= $property['pt_name'] ?></span>
                    </div>
                  </div>
                  <div class="flex justify-between text-2xs sm:gap-5 gap-1 sm:text-base flex-col sm:flex-row">
                    <div>
                      <span class="font-semibold">Size:</span>
                      <span><?= $property['p_width'] ?>x<?= $property['p_length'] ?>
                        <?php
                        if ($property['p_size_unit'] == 1) {
                          echo 'm';
                        } elseif ($property['p_size_unit'] == 2) {
                          echo 'ft';
                        }
                        ?><sup>2</sup></span>
                    </div>
                    <div>
                      <span class="font-semibold">Township:</span>
                      <span><?= $property['name'] ?></span>
                    </div>
                  </div>
                </div>

                <div class="sm:hidden flex pt-1 ">
                  <i class="fa-sharp fa-solid fa-money-bill mt-1.5 text-darkGreen text-sm pl-0  sm:pl-2"></i>
                  <span class="text-darkGreen ml-1 font-bold text-2xs pt-1  sm:text-xl"> <?php if ($property['p_price_unit'] == 1) {
                                                                                            echo '$' . $property['p_price'];
                                                                                          } elseif ($property['p_price_unit'] == 2) {
                                                                                            if ($property['p_price'] > 999999) {

                                                                                              $formatted_price = substr_replace($property['p_price'], 'lakh', -5);
                                                                                              echo $formatted_price;
                                                                                            } else {

                                                                                              echo 'Ks' . $property['p_price'];
                                                                                            }
                                                                                          } ?> / <?php if ($property['p_duration'] == 0) {
                                                                                          echo 'Month';
                                                                                        } elseif ($property['p_duration'] == 1) {
                                                                                          echo 'Year';
                                                                                        } ?></span>
                </div>
                <p class="text-gray-400 text-2xs sm:text-sm text-right hidden sm:block "> <?php
                                                                                          $dateTime = new DateTime($property['created_date']);

                                                                                          $formattedDateTime = $dateTime->format('F j \a\t g:i A');

                                                                                          echo $formattedDateTime;
                                                                                          ?></p>
                <div class="sm:hidden h-2"></div>
                <div class="w-full flex justify-end ">
                  <a href="../PropertyPost/detail_post.php?id=<?= $property['id'] ?>&pt_id=<?= $property['pt_id'] ?>&p_offer=<?= $property['p_offer'] ?>&p_township=<?= $property['p_township'] ?>">
                    <button class="cursor-pointer focus:outline-none hover:bg-teal-400 focus:ring-2 focus:ring-teal-300 text-primary bg-darkGreen h-5 text-2xs px-2 sm:h-6 md:h-8 rounded-md sm:px-4 sm:text-sm sm-static">
                      Details
                    </button>
                  </a>

                </div>
              </div>
            </div>
          </div>

        <?php } ?>
      </div>
      <!-- Slider indicators -->
      <div class="absolute -bottom-10 z-30 flex -translate-x-1/2 left-1/2 space-x-3 rtl:space-x-reverse px-3 py-2 rounded-lg bg-gray-100 ">
        <button type="button" class="w-3 h-3 rounded-full bg-paleGray" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-paleGray" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-paleGray" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-paleGray" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-paleGray" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-darkGreen dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-darkGreen dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>
  </div>
  <!-- card container 1  -->

  <h1 class="font-playFair text-2xl font-extrabold ml-12 mb-10 tracking-wider">
    Lastest Rent Properties
  </h1>
  <div class=" px-2 flex w-full flex-col content-stretch  space-y-2 items-center lg:flex-row lg:justify-around mb-20">
    <?php
    $maxItems = 3;
    $itemCount = 0;
    foreach ($rent_properties as $property) {
      if ($itemCount >= $maxItems) {
        // If reached, exit the loop
        break;
      }

      // Increment the counter
      $itemCount++;
    ?>
      <div class="w-full  max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
          <div class="flex items-center  dark:text-white text-xs justify-between mb-2.5">
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
                                <div class="rounded-full bg-[#D9D9D9] w-14 h-14 overflow-hidden  ">
                                    <?php if ($property['uploader_id'] == 0) : ?>
                                        <img src="../../../Storage/homeGuru_logo/dark/logo.png" class="w-16 h-16" alt="HomeGuRu" />
                                    <?php else : ?>
                                          <img class="w-14 h-14"  src="../../../Storage/collaborator_img/gc<?= $property['uploader_id'] . '/' . $property['gc_logo'] ?>" alt="<?= $property['gc_company_name']; ?>" />
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
                <span ><?= $property['p_code'] ?></span>
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
    <?php } ?>


  </div>


  <!-- card container 2  -->
  <h1 class="font-playFair text-2xl font-extrabold ml-12 mb-10 tracking-wider">
    Lastest Sale Properties
  </h1>
  <div class=" px-2 flex w-full flex-col content-stretch  space-y-2 items-center lg:flex-row lg:justify-around mb-20">
    <?php
    $maxLimit = 3;
    $count = 0;
    foreach ($sale_properties as $property) {
      if ($count >= $maxLimit) {
        // If reached, exit the loop
        break;
      }

      // Increment the counter
      $count++;
    ?>
       <div class="w-full  max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
                                <div class="rounded-full bg-[#D9D9D9] w-14 h-14 overflow-hidden  ">
                                    <?php if ($property['uploader_id'] == 0) : ?>
                                        <img src="../../../Storage/homeGuru_logo/dark/logo.png" class="w-16 h-16" alt="HomeGuRu" />
                                    <?php else : ?>
                                          <img class="w-14 h-14"  src="../../../Storage/collaborator_img/gc<?= $property['uploader_id'] . '/' . $property['gc_logo'] ?>" alt="<?= $property['gc_company_name']; ?>" />
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
                <span ><?= $property['p_code'] ?></span>
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
    <?php } ?>
  </div>
  <!-- Testimonials -->

  <div data-aos="fade-right" data-aos-duration="700" class=" mb-28 bg-white rounded-md pt-10 w-11/12 m-auto pb-14">
    <!-- title -->
    <h1 class="font-playFair text-2xl font-extrabold ml-20 mb-7 tracking-wider">Testimonials</h1>
    <!-- maincontainer -->
    <div class="flex flex-col justify-center items-center  w-full gap-5 sm:flex-row  sm:justify-evenly ">
      <!-- left side -->
      <div class=" w-1/3">
        <!-- quote -->
        <p class="  tracking-widest whitespace-pre-warp font-semibold text-2xl font-playFair w-full  mb-5"><span class="text-5xl font-extrabold">"</span> Exceptional service, exceeded expectation. Highly recommend for their professionalism and dedication<span class="text-5xl font-extrabold">"</span></p>
        <!--start profile -->
        <div class="flex gap-4 items-center  h-20">
          <div class="h-20 w-20"><img src="../resources/img/susan-img.png" height="100%" width="100%" alt="profile"></div>
          <div>
            <h3 class="text-lg font-semibold">Susan</h3>
            <p>Satisfied Customer</p>
          </div>
        </div>
        <!-- end profile -->
      </div>
      <!-- icons -->
      <div class="flex flex-col justify-center  w-full gap-5 sm:flex-row  sm:justify-evenly sm:w-1/3 items-center">
        <div class="flex flex-col justify-center w-16 space-y-2">
          <ion-icon name="business" class="text-5xl text-center text-secondary"></ion-icon>
          <p class="text-xl font-semibold text-center">500+</p>
          <p class="text-center font-medium">Properties</p>
        </div>
        <div class="flex flex-col justify-center w-16 space-y-2">
          <ion-icon name="people" class="text-5xl text-secondary "></ion-icon>
          <p class="text-xl font-semibold text-center">150+</p>
          <p class="text-center font-medium">Collaborators</p>
        </div>
        <div class="flex flex-col justify-center w-16 space-y-2"><i class="fa-solid fa-map-location-dot text-5xl text-center text-secondary"></i>
          <p class="text-xl font-semibold text-center">50+</p>
          <p class="text-center font-medium">Townships</p>
        </div>
      </div>
    </div>
  </div>

  <!-- our services -->

  <div class="mb-28" id='ourservices'>
    <h1 data-aos="zoom-in" data-aos-duration="700" class="tracking-wider font-playFair text-2xl font-extrabold text-center mb-9">Our Services</h1>
    <p data-aos="fade-right" data-aos-duration="700" class="whitespace-pre-warp text-center tracking-wider px-5">At Home GuRu, experience seamless property transactions. From listing to closing deals, our expert team ensures satisfaction, making your real estate journey effortless and rewarding. Trust the experts.</p>
    <div class="flex justify-evenly mt-10">
      <div>
        <p data-aos-duration="700" data-aos="zoom-in-up" class="text-center font-semibold mb-2">Rent service</p>
        <div data-aos="zoom-in-up" data-aos-duration="700" class="w-40 sm:w-72 overflow-hidden rounded-md ">
          <img src="../resources/img/forrent.jpg" width="100%" alt="">
        </div>
      </div>
      <div>
        <p data-aos-duration="700" data-aos="zoom-in-up" class="  text-center font-semibold mb-2 ">Sale service</p>
        <div data-aos-duration="700" data-aos="zoom-in-up" class="w-40 sm:w-72 overflow-hidden rounded-md">

          <img src="../resources/img/forsale.jpg" width="100%" alt="">

        </div>
      </div>
    </div>
  </div>
  <!-- end our services -->
  <!-- our partners -->
  <div class=" mb-28  overflow-hidden whitespace-nowrap ">
    <h1 class="tracking-wider font-playFair text-2xl font-extrabold text-center mb-14">Our Partners</h1>

    <div class="inline-block space-x-10 animate-slide  px-0 ">
      <img src="../resources/img/ImeLogo.png" class="inline h-20 lg:h-48 " alt="logo">
      <img src="../resources/img/maga Logo.png" class="inline h-20 lg:h-48" alt="logo">
      <img src="../resources/img/collaborator-tpj-logo.png" class="inline h-20 lg:h-48" alt="logo">
      <img src="../resources/img/ShweTaungLogo.png" class="hidden h-20 lg:h-48  lg:inline" alt="logo">
      <img src="../resources/img/maga Logo.png" class="hidden h-20 lg:h-48  xl:inline" alt="logo">
    </div>
    <div class="inline-block space-x-10 animate-slide  px-0 ">
      <img src="../resources/img/ImeLogo.png" class="inline h-20 lg:h-48" alt="logo">
      <img src="../resources/img/maga Logo.png" class="inline h-20 lg:h-48" alt="logo">
      <img src="../resources/img/collaborator-tpj-logo.png" class="inline h-20 lg:h-48" alt="logo">
      <img src="../resources/img/ShweTaungLogo.png" class="hidden h-20 lg:h-48 lg:inline" alt="logo">
      <img src="../resources/img/maga Logo.png" class="hidden h-20 lg:h-48  xl:inline" alt="logo">
    </div>
  </div>
  <!-- buy rent 2 cards -->
  <div class="flex mt-6 mb-10 flex-col lg:flex-row items-center w-auto justify-around">
    <!-- buy property card -->
    <div data-aos="fade-up-right" data-aos-duration="700" class="w-3/4 lg:w-5/12 h-56 bg-cover flex items-center justify-center hover:opacity-80" style="background-image: url('../resources/img/pic1.png')">
      <ul class="list-disc text-white list-inside w-4/5 text-2xs lg:text-sm space-y-2.5">
        <span class="text-xl" style="font-family: 'Playfair Display'">Buy Property Requirements</span>
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
    <div data-aos="fade-up-left" data-aos-duration="700" class="w-3/4 lg:w-5/12 h-56 mt-16 lg:mt-auto bg-cover flex items-center justify-center hover:opacity-80" style="background-image: url('../resources/img/pic2.png')">
      <ul class="list-disc text-white list-inside w-4/5 lg:text-sm text-2xs space-y-2.5">
        <span class="text-xl lg:text-xl" style="font-family: 'Playfair Display'">Rent Property Requirements</span>
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
  <?php include '../footer/footer.php' ?>
  <!-- flow bite-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


</body>

</html>