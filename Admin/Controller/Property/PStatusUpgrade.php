<?php
include "../../Model/DBConnection.php";

$sent_id = $_GET['id'];
$sent_p_status = $_GET['p_status'];
$query = "UPDATE properties SET p_status = :p_status WHERE id = :id";
$sql = $pdo->prepare($query);
$sql->bindValue(":id", $sent_id);
$sql->bindValue(":p_status", $sent_p_status);
$sql->execute();

header("Location: ../../View/DashboardView/dashboard.php");
// used in req_detail.php