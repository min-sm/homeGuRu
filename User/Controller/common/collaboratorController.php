<?php 
include "../../Model/DBConnection.php";
$query='SELECT * FROM m_collaborators WHERE del_flg=0';
$sql =$pdo->prepare($query);
$sql->execute();
$collaborator_logos=$sql->fetchAll(PDO::FETCH_ASSOC);

?>