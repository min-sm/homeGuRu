<?php 
include "../../Model/DBConnection.php";
$query='SELECT p.*, pt.pt_name AS pt_name FROM properties p, property_type pt WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_offer=0 ORDER BY p.id ';
$sql =$pdo->prepare($query);
$sql->execute();
$rent_properties=$sql->fetchAll(PDO::FETCH_ASSOC);

// print_r($rent_properties);
?>