<?php 
include "../../Model/DBConnection.php";
$query='SELECT * FROM slider WHERE del_flg=0';
$sql =$pdo->prepare($query);
$sql->execute();
$sliders=$sql->fetchAll(PDO::FETCH_ASSOC);
?>