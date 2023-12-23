<?php
include "../../Model/DBConnection.php";

$sent_id = $_GET["id"];

$sql = $pdo->prepare("SELECT p.*, pt.pt_name, go.* FROM properties p, property_type pt, owners go WHERE p.id= :id AND p.pt_id = pt.id AND p.go_id = go.id;");
$sql->bindValue(":id", $sent_id);
$sql->execute();
$property = $sql->fetchAll(PDO::FETCH_ASSOC);
$property = $property[0];
// used in detail.php