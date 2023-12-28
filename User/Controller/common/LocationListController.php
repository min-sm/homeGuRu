<?php 
include "../../Model/DBConnection.php";
$query='SELECT rg.*
FROM m_regions rg
WHERE rg.del_flg = 0 
ORDER BY rg.id';
$sql =$pdo->prepare($query);
$sql->execute();
$locations=$sql->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($locations);
?>