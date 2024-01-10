<?php 
include "../../Model/DBConnection.php";
$query='SELECT * FROM m_collaborators WHERE del_flg=0 AND gc_activity_ban=0 ';
$sql =$pdo->prepare($query);
$sql->execute();
$collaborator_logos=$sql->fetchAll(PDO::FETCH_ASSOC);

//for collab count
$sql_count = 'SELECT 
COUNT(*) as a  
FROM m_collaborators WHERE del_flg=0 AND gc_activity_ban=0 ';
$sql = $pdo->prepare($sql_count);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
$collab_total = $result[0]['a'];// total number of record


?>