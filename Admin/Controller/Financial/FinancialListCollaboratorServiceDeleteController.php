<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include "../../Model/DBConnection.php";

$id = $_GET["id"];
$_SESSION['list_tag_value']= $_GET['value'];

$sql=$pdo->prepare( " UPDATE collaborator_cash_closed
                        SET del_flg = 1
                        WHERE id = :id
                        "
                    );
$sql->bindValue("id",$id);
$sql-> execute();

header("Location: ../../View/Financial/financial_list_filter.php");
?>