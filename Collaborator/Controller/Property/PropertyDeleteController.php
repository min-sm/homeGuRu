<?php
ini_set('display_errors', 1);
session_start();
include "../../Model/DBConnection.php";

$sent_id = $_GET["id"];
$uploader_id = $_SESSION['collaboratorID'];

$sql = $pdo->prepare("UPDATE properties SET del_flg = 1 WHERE id= :id AND uploader_id = :uploader_id");
$sql->bindValue(":id", $sent_id);
$sql->bindValue(":uploader_id", $uploader_id);
$sql->execute();


header("Location: ../../View/DashboardView/dashboard.php");
// used in detail.php & list.php