<?php 

include "../../Model/DBConnection.php";

$id = $_GET["id"];
$sql=$pdo->prepare(
    " UPDATE collaborator_cash_closed
    SET del_flg = 1
    WHERE id = :id
    "
);
$sql->bindValue("id",$id);
$sql-> execute();

header("Location: ../../View/Financial/financial_collaborator_list.php");
?>