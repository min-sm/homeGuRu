<?php 

include "../../Model/DBConnection.php";

$id = $_GET["id"];
$sql=$pdo->prepare( " UPDATE m_admins
                            SET del_flg = 1
                            WHERE id = :id
                            ");
$sql->bindValue("id",$id);
$sql-> execute();

header("Location: ../../View/admin/admin_list.php");

?>