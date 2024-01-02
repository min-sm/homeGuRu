<?php 
include "../../Model/DBConnection.php";
$query='SELECT * FROM m_collaborators WHERE del_flg=0 AND gc_activity_ban=0  ' ;
$sql =$pdo->prepare($query);
$sql->execute();
$collaborators=$sql->fetchAll(PDO::FETCH_ASSOC);

?>