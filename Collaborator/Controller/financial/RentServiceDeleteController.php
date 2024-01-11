<?php 

include "../../Model/DBConnection.php";
$collaborator_id = 1;

$id = $_GET["id"];
$sql=$pdo->prepare(
    " UPDATE property_cash_closed
    SET del_flg = 1
    WHERE id = :id AND uploader_id =  :collaborator_id
    "
);
$sql->bindValue("id",$id);
$sql->bindValue("collaborator_id", $collaborator_id);
$sql-> execute();

header("Location: ../../View/Financial/financial_rent_list.php");
?>