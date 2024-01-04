<?php
include "../../Model/DBConnection.php";

$id = $_GET["id"];
 
$sql= $pdo->prepare(
"SELECT *
FROM m_collaborators
WHERE   del_flg = 0
AND gc_status = 0
AND id = :id
");
$sql->bindValue(":id",$id);
$sql->execute();
$request= $sql->fetchAll(PDO::FETCH_ASSOC);
if(count($request)!=0){
    $requestOne= $request;
}else{
    // redirect to error page
    header("Location: ../../View/errors/404.php");
}


?>