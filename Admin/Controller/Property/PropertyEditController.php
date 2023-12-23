<?php
include "../../Model/DBConnection.php";

$sent_id = $_GET["id"];

$sql = $pdo->prepare("SELECT p.*, go.*, pt.pt_status FROM properties p, owners go, property_type pt WHERE p.id= :id AND p.go_id = go.id AND p.pt_id = pt.id");
$sql->bindValue(":id", $sent_id);
$sql->execute();
$properties = $sql->fetchAll(PDO::FETCH_ASSOC);
$property = $properties[0];
// used in edit.php