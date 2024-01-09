<?php
include "../../Model/DBConnection.php";
 $id = $_GET["id"];

 $sql = $pdo->prepare( "SELECT *
                                FROM property_cash_closed 
                                WHERE id = :id 
                                AND del_flg = 0 
                                AND uploader_id = 0
                                " );
 $sql->bindValue(":id", $id);
 $sql->execute();
 $rentOne = $sql->fetchAll(PDO::FETCH_ASSOC);
  


?>