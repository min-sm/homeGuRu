<?php 
include "../../Model/DBConnection.php";
$query='SELECT gr.*, p.*,pt.*
FROM guru_recommendation gr
JOIN properties p ON gr.property_code = p.p_code
JOIN property_type pt ON p.pt_id=pt.id
WHERE p.del_flg = 0 AND p.p_offer = 0
ORDER BY p.id';
$sql =$pdo->prepare($query);
$sql->execute();
$recommend_properties=$sql->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($rent_properties);
?>