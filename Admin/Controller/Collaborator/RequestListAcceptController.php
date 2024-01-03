<?php
include '../../Model/DBConnection.php';

$id = $_GET['id'];

$sql = $pdo->prepare(
"UPDATE m_collaborators
SET gc_status = 1
WHERE id = :id"
);
$sql->bindValue(':id',$id);
$sql->execute();

header("Location: ../../View/Collaborator/collaborator_request_list.php");

?>