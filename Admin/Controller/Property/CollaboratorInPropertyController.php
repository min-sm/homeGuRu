<?php
include_once "../../Model/DBConnection.php";

$id = $_GET['id'];
$query = "SELECT * FROM m_collaborators WHERE id = :id";
$sql = $pdo->prepare($query);
$sql->execute();
$guruCollaborator = $sql->fetch(PDO::FETCH_ASSOC);
echo $guruCollaborator;

// used in list.php pages