<?php 
include "../../Model/DBConnection.php";
$query='SELECT p.*,mt.*,pt.*,mc.*  
FROM properties p
JOIN m_townships mt ON p.p_township = mt.id
JOIN property_type pt ON p.pt_id = pt.id
JOIN m_collaborators mc ON p.uploader_id=mc.id
WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_offer=0 ORDER BY p.id DESC ';
$sql =$pdo->prepare($query);
$sql->execute();
$rent_properties=$sql->fetchAll(PDO::FETCH_ASSOC);
?>