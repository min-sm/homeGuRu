<?php 
include "../../Model/DBConnection.php";
$query='SELECT rg.*
FROM m_regions rg
WHERE rg.del_flg = 0 
ORDER BY rg.id';
$sql =$pdo->prepare($query);
$sql->execute();
$locations=$sql->fetchAll(PDO::FETCH_ASSOC);

//for town count
$sql_count = 'SELECT 
COUNT(*) as a  
FROM m_townships mt
LEFT JOIN properties p ON p.p_township = mt.id
WHERE p.p_township = mt.id AND mt.del_flg=0 ';
$sql = $pdo->prepare($sql_count);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
$town_total = $result[0]['a'];// total number of record

?>