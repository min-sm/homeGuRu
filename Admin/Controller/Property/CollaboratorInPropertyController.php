<?php
include_once "../../Model/DBConnection.php";

// $id = $_GET['id'];
$query = "SELECT * FROM m_collaborators";
$sql = $pdo->prepare($query);
$sql->execute();
$guruCollaborator = $sql->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
// print_r( $guruCollaborator);
echo "</pre>";

// used in list.php pages