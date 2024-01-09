<?php 

include "../../Model/DBConnection.php";

$id = $_GET["id"];
$sql=$pdo->prepare( " UPDATE property_cash_closed
                        SET del_flg = 1
                        WHERE id = :id
                        AND uploader_id = 0
                        ");
$sql->bindValue("id",$id);
$sql-> execute();

header("Location: ../../View/Financial/financial_sale_list.php");
?>