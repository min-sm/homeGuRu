<?php
session_start();

include '../Model/DBConnection.php';
//calling slider for logo
$query1='SELECT * FROM slider WHERE del_flg=0';
$sql1 =$pdo->prepare($query1);
$sql1->execute();
$resultSlider=$sql1->fetchAll(PDO::FETCH_ASSOC);
// Pagination parameters
$page = isset($_POST['page']) ? $_POST['page'] : 1;
$recordsPerPage = 12;
// Get selected values from AJAX request
$pOffer = isset($_POST['pOffer']) ? $_POST['pOffer'] : "";
$pType = isset($_POST['pType']) ? $_POST['pType'] : "";
$pUnit = isset($_POST['pUnit']) ? $_POST['pUnit'] : "";
$pRegion = isset($_POST['pRegion']) ? $_POST['pRegion'] : "";
$pTownship = isset($_POST['pTownship']) ? $_POST['pTownship'] : "";
$minimumPrice = isset($_POST['minimumPrice']) ? $_POST['minimumPrice'] : "";
$maximumPrice = isset($_POST['maximumPrice']) ? $_POST['maximumPrice'] : "";
$sortBy = isset($_POST['sortBy']) ? $_POST['sortBy'] : "";
$pCode = isset($_POST['pCode']) ? $_POST['pCode'] : "";

// Prepare and execute the SQL query for properties
$sql = "SELECT p.id as pid , p.*,mt.*,pt.*,mc.*  
FROM properties p
LEFT JOIN m_townships mt ON p.p_township = mt.id
LEFT JOIN property_type pt ON p.pt_id = pt.id
LEFT JOIN m_collaborators mc ON p.uploader_id=mc.id
WHERE p.del_flg = 0 AND p.p_status = 2 AND p.p_after=0 AND mc.gc_activity_ban=0";


// Include conditions based on selected values for properties
if ($pOffer !== "") {
  $sql .= " AND p_offer = :pOffer";
}

if ($pCode !== "") {
  $sql .= " AND p_code = :pCode";
}

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
} else if ($sortBy == "lth") {
  $sql .= " ORDER BY p.p_price ";
} else if ($sortBy = "htl") {
  $sql .= " ORDER BY p.p_price DESC";
}
$offset = ($page - 1) * $recordsPerPage;

$sql .= " LIMIT :offset, :recordsPerPage";

$stmt = $pdo->prepare($sql);

// Bind parameters for properties
if ($pOffer !== "") {
  $stmt->bindValue(':pOffer', $pOffer);
}

if ($pCode !== "") {
  $stmt->bindValue(':pCode', $pCode);
}

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

$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->bindValue(':recordsPerPage', $recordsPerPage, PDO::PARAM_INT);

$stmt->execute();

// Fetch the filtered properties
$filteredProperties = $stmt->fetchAll(PDO::FETCH_ASSOC);
$limit_query = "SELECT COUNT(*)
 FROM properties p
LEFT JOIN m_townships mt ON p.p_township = mt.id
LEFT JOIN property_type pt ON p.pt_id = pt.id
LEFT JOIN m_collaborators mc ON p.uploader_id=mc.id
WHERE p.del_flg = 0 AND p.p_status = 2 AND p.p_after=0 AND mc.gc_activity_ban=0";
// Include conditions based on selected values for properties
if ($pOffer !== "") {
  $limit_query .= " AND p_offer = :pOffer";
}




if ($pCode !== "") {
  $limit_query .= " AND p_code = :pCode";
}

if ($pType !== "") {
  $limit_query .= " AND pt_id = :pType";
}

if ($pUnit !== "") {
  $limit_query .= " AND p_price_unit = :pUnit";
}

if ($pRegion !== "") {
  $limit_query .= " AND mt.region_id = :pRegion";
}

if ($pTownship !== "") {
  $limit_query .= " AND p_township = :pTownship";
}

if ($minimumPrice !== "") {
  $limit_query .= " AND p_price >= :minimumPrice";
}

if ($maximumPrice !== "") {
  $limit_query .= " AND p_price <= :maximumPrice";
}
// Fetch the total number of records for pagination
$totalRecordsStmt = $pdo->prepare($limit_query);
if ($pOffer !== "") {
  $totalRecordsStmt->bindValue(':pOffer', $pOffer);
}

if ($pCode !== "") {
  $totalRecordsStmt->bindValue(':pCode', $pCode);
}

if ($pType !== "") {
  $totalRecordsStmt->bindValue(':pType', $pType);
}

if ($pUnit !== "") {
  $totalRecordsStmt->bindValue(':pUnit', $pUnit);
}

if ($pRegion !== "") {
  $totalRecordsStmt->bindValue(':pRegion', $pRegion);
}

if ($pTownship !== "") {
  $totalRecordsStmt->bindValue(':pTownship', $pTownship);
}

if ($minimumPrice !== "") {
  $totalRecordsStmt->bindValue(':minimumPrice', $minimumPrice);
}

if ($maximumPrice !== "") {
  $totalRecordsStmt->bindValue(':maximumPrice', $maximumPrice);
}
$totalRecordsStmt->execute();
$totalRecords = $totalRecordsStmt->fetchColumn();

// Calculate the total number of pages
$totalPages = ceil($totalRecords / $recordsPerPage);

$totalPages = ceil($totalRecords / $recordsPerPage);
?>
<div class="ml-2 my-7">
  <span class="ms-10  text-base sm:text-xl font-bold <?php if ($totalRecords == 0) {
                                                        echo 'text-alert';
                                                      } else {
                                                        echo 'text-darkGreen';
                                                      }; ?>"><span><?php if ($totalRecords == 0) {
                                                        echo 'No';
                                                      } else {
                                                        echo $totalRecords;
                                                      }; ?> </span>Properties Found</span>

</div>
<div class="flex  justify-around   flex-wrap w-full  gap-5 mb-10 ">
  <?php foreach ($filteredProperties as $property) {
  ?>
    <div class="w-full  max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
      }else{
      echo '../collaborator/profile.php?collaborator_id='.$property['uploader_id'];
      }
      ?>">
          <div class="rounded-full border-gray-500 border hover:opacity-50 bg-[#D9D9D9] w-14 h-14 overflow-hidden  ">
          <?php if ($property['uploader_id']== 0) : ?>
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
          <a href="../PropertyPost/detail_post.php?id=<?= $property['pid'] ?>&pt_id=<?= $property['pt_id'] ?>&p_offer=<?= $property['p_offer'] ?>&p_township=<?= $property['p_township'] ?>" class="text-darkGreen border-2 hover:opacity-50 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2 text-center dark:border-slate-50">Details</a>
        </div>
      </div>
    </div>


  <?php }
  ?>
</div>
<!-- pagination -->
<div class="flex justify-center my-16">
  <nav aria-label="Page navigation example">
    <ul class="flex items-center -space-x-px h-10 text-base pagination">
      <li class="swiper-button-prev">
        <a href="?page=<?= $page == $page > 1 ? $page - 1 : 1 ?>" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
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
            <a href="?page=<?= $i ?>" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
              <?= $i ?>
            </a>
          </li>
        <?php } else {
        ?>
          <li>
            <a href="?page=<?= $i ?>" class="  flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
              <?= $i ?>
            </a>
          </li>
      <?php }
      }
      ?>
      <li class="swiper-button-next">
        <a href="?page=<?= $page == $page < $totalPages ? $page + 1 : $totalPages ?>" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          <span class="sr-only">Next</span>
          <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
        </a>
      </li>
    </ul>
  </nav>
</div>