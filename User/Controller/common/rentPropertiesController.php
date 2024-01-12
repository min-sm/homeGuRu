<?php 



include "../../Model/DBConnection.php";

//for properties  count
$sql_count = 'SELECT 
COUNT(*) as a  
FROM properties p
JOIN m_collaborators mc ON p.uploader_id=mc.id
WHERE p.del_flg = 0 AND p.p_status = 2 AND p.p_after=0 AND mc.gc_activity_ban=0  ';
$sql = $pdo->prepare($sql_count);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
$property_total = $result[0]['a'];// total number of record



$sql_limit = 'SELECT p.id as pid , p.*,mt.*,pt.*,mc.*  
FROM properties p
LEFT JOIN m_townships mt ON p.p_township = mt.id
LEFT JOIN property_type pt ON p.pt_id = pt.id
LEFT JOIN m_collaborators mc ON p.uploader_id=mc.id
LEFT JOIN (SELECT * FROM m_collaborators WHERE gc_activity_ban=0) AS collaborator_active ON collaborator_active.id=mc.id  
WHERE p.del_flg = 0 AND p.p_status = 2 AND p.p_after=0  AND p.p_offer=0 ORDER BY p.id DESC LIMIT 3';

$sql= $pdo->prepare($sql_limit);

$sql->execute();
$rent_properties = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List record Number


?>