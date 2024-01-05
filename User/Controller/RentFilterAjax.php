<?php
session_start();
include '../Model/DBConnection.php'; 
$limit = 12;//limit of show record per page
$page  = isset($_GET['page'])? $_GET['page'] : 1;//Current page of pagination
$start = ($page -1 ) * $limit;//Start number of record per page
// Get selected values from AJAX request

$pType = isset($_POST['pType']) ? $_POST['pType'] : "";
$pUnit = isset($_POST['pUnit']) ? $_POST['pUnit'] : "";
$pRegion = isset($_POST['pRegion']) ? $_POST['pRegion'] : "";
$pTownship = isset($_POST['pTownship']) ? $_POST['pTownship'] : "";
$minimumPrice = isset($_POST['minimumPrice']) ? $_POST['minimumPrice'] : "";
$maximumPrice = isset($_POST['maximumPrice']) ? $_POST['maximumPrice'] : "";
$sortBy=isset($_POST['sortBy']) ? $_POST['sortBy'] : "";


// Prepare and execute the SQL query for properties
$sql = "SELECT p.*,mt.*,pt.*,mc.*  
FROM properties p
LEFT JOIN m_townships mt ON p.p_township = mt.id
LEFT JOIN property_type pt ON p.pt_id = pt.id
LEFT JOIN m_collaborators mc ON p.uploader_id=mc.id
WHERE p.del_flg = 0 AND p.p_status = 2 AND p.p_after=0 AND mc.gc_activity_ban=0 AND p.p_offer=0";


// Include conditions based on selected values for properties




if ($pType !== "") {
    $sql .= " AND pt_id = :pType";
}

if ($pUnit !== "") {
    $sql .= " AND p_price_unit = :pUnit";
}

if ($pRegion !== "") {
    $sql .= " AND mt.region_id = :pRegion";
}

if ($pTownship !== "") {
    $sql .= " AND p_township = :pTownship";
}

if ($minimumPrice !== "") {
    $sql .= " AND p_price >= :minimumPrice";
}

if ($maximumPrice !== "") {
    $sql .= " AND p_price <= :maximumPrice";
}

if ($sortBy == "newest") {
  $sql .= " ORDER BY p.created_date DESC";
}else if($sortBy=="lth"){
  $sql .= " ORDER BY p.p_price ";
}else if($sortBy="htl"){
  $sql .= " ORDER BY p.p_price DESC";
}


$stmt = $pdo->prepare($sql);

// Bind parameters for properties


if ($pType !== "") {
    $stmt->bindValue(':pType', $pType);
}

if ($pUnit !== "") {
    $stmt->bindValue(':pUnit', $pUnit);
}

if ($pRegion !== "") {
    $stmt->bindValue(':pRegion', $pRegion);
}

if ($pTownship !== "") {
    $stmt->bindValue(':pTownship', $pTownship);
}

if ($minimumPrice !== "") {
    $stmt->bindValue(':minimumPrice', $minimumPrice);
}

if ($maximumPrice !== "") {
    $stmt->bindValue(':maximumPrice', $maximumPrice);
}

$stmt->execute();

// Fetch the filtered properties
$filteredProperties = $stmt->fetchAll(PDO::FETCH_ASSOC);
$propertyCount=count($filteredProperties);
?>
<div class="py-7">
    <span class="ms-10  text-base sm:text-xl font-bold <?php if ($propertyCount ==0) {
                                            echo 'text-alert';
                                        } else {
                                            echo 'text-darkGreen';
                                        }; ?>"><span><?php if ($propertyCount==0) {
                                                         echo 'No';
                                                        } else {
                                                            echo $propertyCount;
                                                        }; ?> </span>Properties Found</span>
   
</div>
<div class="flex  justify-around   flex-wrap w-full  gap-5 mb-10 " >
<?php foreach ($filteredProperties as $property) {
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


    <?php }


    ?>
</div>



