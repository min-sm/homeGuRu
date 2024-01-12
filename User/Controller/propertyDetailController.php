<?php 
include "../../Model/DBConnection.php";

$id = $_GET['id'];
$query = 'SELECT p.id AS pid, p.*, pt.*, mt.*, mc.*
FROM properties p
LEFT JOIN m_townships mt ON p.p_township = mt.id
LEFT JOIN property_type pt ON p.pt_id = pt.id
LEFT JOIN m_collaborators mc ON p.uploader_id=mc.id
LEFT JOIN (SELECT * FROM m_collaborators WHERE gc_activity_ban=0) AS collaborator_active ON collaborator_active.id=mc.id  
WHERE p.del_flg = 0 AND p.id = :id';
$sql = $pdo->prepare($query);
$sql->bindValue(":id", $id);
$sql->execute();
$property_datas = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

