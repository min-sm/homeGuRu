<?php 

$limit = 12;//limit of show record per page
$page  = isset($_GET['page'])? $_GET['page'] : 1;//Current page of pagination
$start = ($page -1 ) * $limit;//Start number of record per page

include "../../Model/DBConnection.php";


$sql_count = 'SELECT 
COUNT(*) as a  
FROM properties p
WHERE p.del_flg = 0 AND p.p_status = 1 AND p.p_offer=1 ORDER BY p.id DESC ';
$sql = $pdo->prepare($sql_count);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
$total = $result[0]['a'];// total number of record
$totalPages = ceil($total/$limit);//no of pages


$sql_limit = 'SELECT p.*,mt.*,pt.*,mc.*  
FROM properties p
JOIN m_townships mt ON p.p_township = mt.id
JOIN property_type pt ON p.pt_id = pt.id
JOIN m_collaborators mc ON p.uploader_id=mc.id
WHERE p.del_flg = 0 AND p.p_status = 2 AND p.p_after=0 AND mc.gc_activity_ban=0 AND p.p_offer=1 ORDER BY p.id DESC ';
$sql_limit .= "LIMIT :start , :limit";
$sql= $pdo->prepare($sql_limit);
$sql->bindParam(':start',$start, PDO::PARAM_INT);
$sql->bindParam(':limit',$limit, PDO::PARAM_INT);
$sql->execute();
$sale_properties = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List record Number


?>