<?php
include_once "../../Model/DBConnection.php";
// Query for regions 
$regions_query = "SELECT * FROM m_regions";
// $regions_result = $db->query($regions_query);
$regions_sql = $pdo->prepare($regions_query);
$regions_sql->execute();
$regions_result = $regions_sql->fetchAll(PDO::FETCH_ASSOC);

// Query for townships
$townships_query = "SELECT * FROM m_townships WHERE region_id = {region_id}";
