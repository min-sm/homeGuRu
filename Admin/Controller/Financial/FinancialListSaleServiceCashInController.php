<?php
include "../../Model/DBConnection.php";
 $id = $_GET["id"];
 $value = $_GET["value"];

 $sql = $pdo->prepare( "SELECT *
                        FROM property_cash_closed 
                        WHERE id = :id AND uploader_id = 0
                        AND del_flg = 0 
                        " );
 $sql->bindValue(":id", $id);
 $sql->execute();
 $saleOne = $sql->fetchAll(PDO::FETCH_ASSOC);
  


?>