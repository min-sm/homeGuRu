<?php 
include "../../Model/DBConnection.php";
$query='SELECT gr.*,p.id as pid, p.*,pt.*,mt.*,mc.*
FROM guru_recommendation gr
LEFT JOIN properties p ON gr.property_code = p.p_code
LEFT JOIN property_type pt ON p.pt_id=pt.id
LEFT JOIN m_townships mt ON p.p_township=mt.id
LEFT JOIN m_collaborators mc ON p.uploader_id=mc.id
LEFT JOIN (SELECT * FROM m_collaborators WHERE gc_activity_ban=0)AS collaborator_active ON collaborator_active.id=mc.id  
WHERE p.del_flg = 0 AND p.p_status = 2 AND p.p_after=0';
$sql =$pdo->prepare($query);
$sql->execute();
$recommend_properties=$sql->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($rent_properties);
?>
