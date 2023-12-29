<?php
include "../../Model/DBConnection.php";


if (isset($_POST['submit'])) {
    $region = $_POST['location'];
    $type = $_POST['type'];
    $query = "SELECT DISTINCT p.*, pt.*,mt.*,mc.*
   FROM properties p 
   JOIN property_type pt ON p.pt_id = pt.id
   JOIN m_townships mt ON p.p_township=mt.id
   JOIN m_collaborators mc ON p.uploader_id
   WHERE p.p_status=1 
   AND mc.gc_activity_ban=0 
   AND  mt.region_id = :region 
   AND p.pt_id = :pt_id
   GROUP BY p.id
   ORDER BY p.id DESC
   ";
    $sql = $pdo->prepare($query);
    $sql->bindValue(":pt_id", $type);
    $sql->bindValue(":region", $region);
    $sql->execute();
    $search_properties = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo'<pre/>';
    
    header('Location: ' . '../../View/property_post/search.php');
   
 
}
ini_set('display_errors', 'On');
?>
