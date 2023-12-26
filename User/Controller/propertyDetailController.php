<?php 
include "../../Model/DBConnection.php";
$id = $_GET['id'];
$query = 'SELECT  p.*,pt.*
FROM properties p
JOIN property_type pt ON p.pt_id = pt.id

WHERE p.del_flg = 0 AND p.id= :id
ORDER BY p.id';  // Removed the semicolon before ORDER BY
$sql = $pdo->prepare($query);
$sql->bindValue(":id", $id);
$sql->execute();
$property_datas = $sql->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($property_datas);
ini_set('display_errors', '1');
?>