<?php 
include "../../Model/DBConnection.php";
$query='SELECT * FROM guru_data WHERE del_flag=0';
$sql =$pdo->prepare($query);
$sql->execute();
$guru_data = $sql->fetchAll(PDO::FETCH_ASSOC);
?>