<?php 
include "../../Model/DBConnection.php";
$query='SELECT p.*, pt.pt_name AS pt_name FROM properties p, property_type pt WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_offer=1  ORDER BY p.id';
$sql =$pdo->prepare($query);
$sql->execute();
$sale_properties=$sql->fetchAll(PDO::FETCH_ASSOC);
?>