<?php
include "../../Model/DBConnection.php";

if(isset($_GET['id'])){

    $id = $_GET["id"];
 
    $sql= $pdo->prepare(
    "SELECT *
    FROM m_collaborators
    WHERE   del_flg = 0
    AND gc_status = 1
    AND id = :id
    ");
    $sql->bindValue(":id",$id);
    $sql->execute();
    $requestOne= $sql->fetchAll(PDO::FETCH_ASSOC);
   
    
}else{
 // redirect to error page
 header("Location: ../../View/errors/404.php");
}


?>