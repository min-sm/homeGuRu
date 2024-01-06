<?php 
include "../../Model/DBConnection.php";
$query='SELECT *
FROM guru_recommendation 
WHERE del_flg = 0 ';
$sql =$pdo->prepare($query);
$sql->execute();
$recommend_properties=$sql->fetchAll(PDO::FETCH_ASSOC);

?>

