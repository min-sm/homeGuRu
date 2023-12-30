<?php 
include "../../Model/DBConnection.php";
$query='SELECT gr.*, p.*,pt.*,mt.*,mc.*
FROM guru_recommendation gr
JOIN properties p ON gr.property_code = p.p_code
JOIN property_type pt ON p.pt_id=pt.id
JOIN m_townships mt ON p.p_township=mt.id
JOIN m_collaborators mc ON p.uploader_id=mc.id
WHERE p.del_flg = 0 AND p.p_code = gr.property_code AND p.p_status=1 AND mc.gc_activity_ban=0 ORDER BY p.id DESC';
$sql =$pdo->prepare($query);
$sql->execute();
$recommend_properties=$sql->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($rent_properties);
?>
