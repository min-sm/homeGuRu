<?php
include_once "../../Model/DBConnection.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$current_collaborator = $_SESSION["collaboratorId"];
//$current_collaborator = 1; // to comment this line of code
// Calculate total number of pages
$totalPagesQuery = "SELECT COUNT(go.id) as total FROM owners go, properties p WHERE go.del_flg = 0 AND go.id = p.go_id AND p.uploader_id = :uploader_id";
$sql = $pdo->prepare($totalPagesQuery);
$sql->bindValue('uploader_id', $current_collaborator);
$sql->execute();

$result = $sql->fetch(PDO::FETCH_ASSOC); // query Fn - Prepares and executes an SQL statement without placeholders