<?php
include '../../Model/DBConnection.php';

// $current_collaborator = $_SESSION['collaboratorID'];
$current_collaborator = 1;
$query = "SELECT * FROM m_collaborators WHERE del_flg = 0 AND id = :id";
$sql = $pdo->prepare($query);
$sql->bindValue(":id", $current_collaborator);
$sql->execute();
$curr_collab_detail = $sql->fetch(PDO::FETCH_ASSOC);

