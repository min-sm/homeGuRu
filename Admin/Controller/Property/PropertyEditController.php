<?php
include "../../Model/DBConnection.php";

$sent_id = $_GET["id"];

$sql = $pdo->prepare("SELECT p.*, go.*, pt.pt_status, region.id AS region_id FROM properties p, owners go, property_type pt, m_townships township, m_regions region WHERE p.id= :id AND p.go_id = go.id AND p.pt_id = pt.id AND p.p_township = township.id AND township.region_id = region.id");
$sql->bindValue(":id", $sent_id);
$sql->execute();
$properties = $sql->fetchAll(PDO::FETCH_ASSOC);
$property = $properties[0];
if ($property['uploader_id'] != 0) {
    $err = "Unauthorise Access.";
    header("Location: ../../View/errors/404.php?error=$err&err_code=401");
}
// used in edit.php