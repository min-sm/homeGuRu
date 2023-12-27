<?php 
include "../../Model/DBConnection.php";
$id = $_GET['id'];
$query = 'SELECT  p.*,pt.*,mt.*,mc.*
FROM properties p
JOIN property_type pt ON p.pt_id = pt.id
JOIN m_townships mt ON p.p_township=mt.id
JOIN m_collaborators mc ON p.uploader_id=mc.id
WHERE p.del_flg = 0 AND p.id= :id
ORDER BY p.id';  
$sql = $pdo->prepare($query);
$sql->bindValue(":id", $id);
$sql->execute();
$property_datas = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($property_datas);
// ini_set('display_errors', '1');
?>