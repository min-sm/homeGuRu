<?php 
include "../../Model/DBConnection.php";
$query='SELECT p.*,mt.*,pt.*,mc.*  
FROM properties p
JOIN m_townships mt ON p.p_township = mt.id
JOIN property_type pt ON p.pt_id = pt.id
JOIN m_collaborators mc ON p.uploader_id=mc.id
WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_offer=1 ORDER BY p.id DESC ';
$sql =$pdo->prepare($query);
$sql->execute();
$sale_properties=$sql->fetchAll(PDO::FETCH_ASSOC);

$sql_count = "SELECT 
COUNT(*) as a
FROM 
property_cash_closed 
WHERE  del_flg = 0
AND p_offer = 1                
";
$sql = $pdo->prepare($sql_count);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
$total = $result[0]['a'];// total number of record
$totalPages = ceil($total/$limit);//no of pages


$sql_limit = "SELECT *
FROM  property_cash_closed
WHERE del_flg = 0 
AND p_offer = 1
";
$sql_limit .= "LIMIT :start , :limit";
$sql= $pdo->prepare($sql_limit);
$sql->bindParam(':start',$start, PDO::PARAM_INT);
$sql->bindParam(':limit',$limit, PDO::PARAM_INT);
$sql->execute();
$rents = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List record Number


?>