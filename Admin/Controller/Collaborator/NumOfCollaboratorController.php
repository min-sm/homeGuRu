<?php
include "../../Model/DBConnection.php";

$query = "SELECT COUNT(*) AS num_of_collaborator FROM `m_collaborators` WHERE del_flg = 0;";
$sql = $pdo->prepare($query);
$sql->execute();
$num_of_collaborators = $sql->fetchAll(PDO::FETCH_ASSOC);
echo  json_encode($num_of_collaborators);
// used in dashboard.php