<?php
// Call DB connection
include "../../Model/DBConnection.php";?>


<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>


<?php
$collaborator_id = $_SESSION["collaboratorId"];

$id = $_GET["id"];

$sql=$pdo->prepare(
    " UPDATE property_cash_closed
    SET del_flg = 1
    WHERE id = :id AND uploader_id =  :collaborator_id"
);
$sql->bindValue("id",$id);
$sql->bindValue('collaborator_id', $collaborator_id);
$sql-> execute();

header("Location: ../../View/Financial/financial_list.php");
?>