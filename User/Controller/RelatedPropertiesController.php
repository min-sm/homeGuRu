<?php



include "../../Model/DBConnection.php";
$limit = 12;//limit of show record per page
$page  = isset($_GET['page'])? $_GET['page'] : 1;//Current page of pagination
$start = ($page -1 ) * $limit;//Start number of record per page

$id = $_GET['id'];
$pt_id = $_GET['pt_id'];
$p_offer = $_GET['p_offer'];
$p_township = $_GET['p_township'];

$sql_count = 'SELECT DISTINCT Count(*) as counts
FROM properties p 
LEFT JOIN property_type pt ON p.pt_id = pt.id
LEFT JOIN m_townships mt ON p.p_township=mt.id
LEFT JOIN m_collaborators mc ON p.uploader_id
WHERE p.p_status=2
AND mc.gc_activity_ban=0 
AND (pt_id = :pt_id 
OR p_offer = :p_offer 
OR p_township = :p_township)
GROUP BY p.id
 ';
$sql = $pdo->prepare($sql_count);
$sql->bindValue(":pt_id", $pt_id);
$sql->bindValue(":p_offer", $p_offer);
$sql->bindValue(":p_township", $p_township);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
$total = $result[0]['counts'];// total number of record
$totalPages = ceil($total/$limit);//no of pages

// Your SQL query with placeholders for each parameter
$sql_limit = "SELECT DISTINCT p.*, pt.*,mt.*,mc.*
FROM properties p 
LEFT JOIN m_townships mt ON p.p_township = mt.id
LEFT JOIN property_type pt ON p.pt_id = pt.id
LEFT JOIN m_collaborators mc ON p.uploader_id=mc.id
WHERE p.p_status=2
AND mc.gc_activity_ban=0 
AND (pt_id = :pt_id 
OR p_offer = :p_offer 
OR p_township = :p_township)
GROUP BY p.id
ORDER BY p.id DESC
";
$sql_limit .= "LIMIT :start , :limit";
$sql= $pdo->prepare($sql_limit);
// Bind the values to the placeholders
$sql->bindParam(':start',$start, PDO::PARAM_INT);
$sql->bindParam(':limit',$limit, PDO::PARAM_INT);
$sql->bindValue(":pt_id", $pt_id);
$sql->bindValue(":p_offer", $p_offer);
$sql->bindValue(":p_township", $p_township);

// Execute the query
$sql->execute();




// Fetch the result or perform other operations
$related_properties = $sql->fetchAll(PDO::FETCH_ASSOC);
