<?php
include "../../Model/DBConnection.php";

$sent_id = $_GET["id"];
if (isset($the_called_file)) {
    if ($the_called_file == 'edit.php') {
        $p_status = 2;
        $txtForErr = 'yet posted';
    } else if ($the_called_file == 'pending.php') {
        $p_status = 1;
        $txtForErr = "in the pending stage";
    }
}

$sql = $pdo->prepare("SELECT p.*, go.*, pt.pt_status, region.id AS region_id FROM properties p, owners go, property_type pt, m_townships township, m_regions region WHERE p.id= :id AND p.go_id = go.id AND p.pt_id = pt.id AND p.p_township = township.id AND township.region_id = region.id AND p.p_status = :p_status");
$sql->bindValue(":id", $sent_id);
$sql->bindValue(":p_status", $p_status);
$sql->execute();
$properties = $sql->fetchAll(PDO::FETCH_ASSOC);
if (!empty($properties)) {
    $property = $properties[0];
    if ($property['uploader_id'] != 0) {
        $err = "Unauthorise Access.";
        header("Location: ../../View/errors/404.php?error=$err&err_code=401");
    }
    // You can continue processing with $property
} else {
    $err = "The property you are trying to access is not $txtForErr.";
    header("Location: ../../View/errors/404.php?error=$err");
}

// used in edit.php