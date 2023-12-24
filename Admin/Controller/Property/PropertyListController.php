<?php
include "../../Model/DBConnection.php";

$query = "SELECT p.*, pt.pt_name AS pt_name FROM properties p, property_type pt WHERE p.del_flg = 0 AND p.pt_id = pt.id ORDER BY p.id LIMIT 12";
$sql = $pdo->prepare($query);
$sql->execute();
$properties = $sql->fetchAll(PDO::FETCH_ASSOC);
// used in list.php 