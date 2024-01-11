<?php
include "../../Model/DBConnection.php";

$query = "SELECT COUNT(*) AS num_of_owner FROM `owners` WHERE del_flg = 0;";
$sql = $pdo->prepare($query);
$sql->execute();
$num_of_owners = $sql->fetchAll(PDO::FETCH_ASSOC);
echo  json_encode($num_of_owners);
// used in dashboard.php