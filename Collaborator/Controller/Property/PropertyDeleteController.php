<?php
ini_set('display_errors', 1);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../../Model/DBConnection.php";

$sent_id = $_GET["id"];
 $current_collaborator = $_SESSION['collaboratorId'];
//$current_collaborator = 1;


$sql = $pdo->prepare("UPDATE properties SET del_flg = 1 WHERE id= :id AND uploader_id = :uploader_id");
$sql->bindValue(":id", $sent_id);
$sql->bindValue(":uploader_id", $current_collaborator);
$querySuccess = $sql->execute();

if ($querySuccess) {
    // echo "The query executed successfully. Rows affected: " . $sql->rowCount();
    echo $uploader_id;
    header("Location: ../../View/DashboardView/dashboard.php");
} else {
    $err = print_r($pdo->errorInfo(), true);
    header("Location: ../../View/errors/404.php?error = $err");
}


// used in detail.php & list.php