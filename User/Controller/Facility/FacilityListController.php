<?php
include "../../Model/DBConnection.php";

$query = "SELECT * FROM facilities WHERE del_flg = 0 ORDER BY facility_type;";
$sql = $pdo->prepare($query);
$sql->execute();
$facilities = $sql->fetchAll(PDO::FETCH_ASSOC);
