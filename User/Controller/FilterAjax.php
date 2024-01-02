<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start(); 
}
include '../Model/DBConnection.php'; 

// Get selected values from AJAX request
$pOffer = isset($_POST['pOffer']) ? $_POST['pOffer'] : null;
$pType = isset($_POST['pType']) ? $_POST['pType'] : null;
$pUnit = isset($_POST['pUnit']) ? $_POST['pUnit'] : null;
$pRegion = isset($_POST['pRegion']) ? $_POST['pRegion'] : null;
$pTownship = isset($_POST['pTownship']) ? $_POST['pTownship'] : null;
$minimumPrice = isset($_POST['minimumPrice']) ? $_POST['minimumPrice'] : null;
$maximumPrice = isset($_POST['maximumPrice']) ? $_POST['maximumPrice'] : null;

// Prepare and execute the SQL query for properties
$sql = "SELECT p.*,mt.*,pt.*,mc.*  
FROM properties p
JOIN m_townships mt ON p.p_township = mt.id
JOIN property_type pt ON p.pt_id = pt.id
JOIN m_collaborators mc ON p.uploader_id=mc.id
WHERE p.del_flg = 0 AND p.p_status = 2 AND p.p_after=0 AND mc.gc_activity_ban=0";

// Include conditions based on selected values for properties
if ($pOffer !== null) {
    $sql .= " AND p_offer = :pOffer";
}

if ($pType !== null) {
    $sql .= " AND pt_id = :pType";
}

if ($pUnit !== null) {
    $sql .= " AND p_price_unit = :pUnit";
}

if ($pRegion !== null) {
    $sql .= " AND mt.region_id = :pRegion";
}

if ($pTownship !== null) {
    $sql .= " AND p_township = :pTownship";
}

if ($minimumPrice !== null) {
    $sql .= " AND p_price >= :minimumPrice";
}

if ($maximumPrice !== null) {
    $sql .= " AND p_price <= :maximumPrice";
}

$stmt = $pdo->prepare($sql);

// Bind parameters for properties
if ($pOffer !== null) {
    $stmt->bindValue(':pOffer', $pOffer);
}

if ($pType !== null) {
    $stmt->bindValue(':pType', $pType);
}

if ($pUnit !== null) {
    $stmt->bindValue(':pUnit', $pUnit);
}

if ($pRegion !== null) {
    $stmt->bindValue(':pRegion', $pRegion);
}

if ($pTownship !== null) {
    $stmt->bindValue(':pTownship', $pTownship);
}

if ($minimumPrice !== null) {
    $stmt->bindValue(':minimumPrice', $minimumPrice);
}

if ($maximumPrice !== null) {
    $stmt->bindValue(':maximumPrice', $maximumPrice);
}

$stmt->execute();

// Fetch the filtered properties
$filteredProperties = $stmt->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['filteredProperties']= $filteredProperties;
print_r($filteredProperties);