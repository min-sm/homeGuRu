<?php 
include "../../Model/DBConnection.php";
$query='SELECT pt.*
FROM property_type pt
WHERE pt.del_flg = 0 
ORDER BY pt.id';
$sql =$pdo->prepare($query);
$sql->execute();
$property_types=$sql->fetchAll(PDO::FETCH_ASSOC);

?>