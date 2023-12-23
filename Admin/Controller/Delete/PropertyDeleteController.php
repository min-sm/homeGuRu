<?php
ini_set('display_errors', 1);
include "../../Model/DBConnection.php";

$sent_id = $_GET["id"];

$sql = $pdo->prepare("UPDATE properties SET del_flg = 1 WHERE id= :id");
$sql->bindValue(":id", $sent_id);
$sql->execute();


header("Location: ../../View/Dashboard View/dashboard.php");