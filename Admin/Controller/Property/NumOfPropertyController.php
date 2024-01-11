<?php
include "../../Model/DBConnection.php";

$query = "SELECT COUNT(*) AS num_of_property FROM `properties` WHERE del_flg = 0;";
$sql = $pdo->prepare($query);
$sql->execute();
$num_of_properties = $sql->fetchAll(PDO::FETCH_ASSOC);
echo  json_encode($num_of_properties);
// used in dashboard.php