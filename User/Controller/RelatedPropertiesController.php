<?php



include "../../Model/DBConnection.php";

$id = $_GET['id'];
$pt_id = $_GET['pt_id'];
$p_offer = $_GET['p_offer'];
$p_township = $_GET['p_township'];



// Your SQL query with placeholders for each parameter
$sql = $pdo->prepare("SELECT p.*, pt.*,mt.*,mc.*
FROM properties p 
JOIN property_type pt ON p.pt_id = pt.id
JOIN m_townships mt ON p.p_township=mt.id
JOIN m_collaborators mc ON p.uploader_id
WHERE pt_id = :pt_id 
OR p_offer = :p_offer 
OR p_township = :p_township
AND p.p_status=1 
AND mc.gc_activity_ban=0 
ORDER BY p.id DESC
");

// Bind the values to the placeholders
$sql->bindValue(":pt_id", $pt_id);
$sql->bindValue(":p_offer", $p_offer);
$sql->bindValue(":p_township", $p_township);

// Execute the query
$sql->execute();




// Fetch the result or perform other operations
$related_properties = $sql->fetchAll(PDO::FETCH_ASSOC);
