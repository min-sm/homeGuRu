<?php 
include "../../Model/DBConnection.php";
$query='SELECT * FROM colors WHERE del_flg=0';
$sql =$pdo->prepare($query);
$sql->execute();
$colors = $sql->fetchAll(PDO::FETCH_ASSOC);

?>