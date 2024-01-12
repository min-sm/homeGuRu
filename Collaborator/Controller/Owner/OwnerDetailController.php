<?php
include "../../Model/DBConnection.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$current_collaborator = $_SESSION["collaboratorId"];
//$current_collaborator = 1; // to comment this line of code

if (isset($_GET['id'])) {
    $sent_id = $_GET["id"];
    $query = "SELECT go.* FROM owners go, properties p WHERE go.del_flg = 0 AND go.id = p.go_id AND p.uploader_id = :uploader_id AND go.id = :id";
    
    $sql = $pdo->prepare($query);
    $sql->bindValue("id", $sent_id);
    $sql->bindValue("uploader_id", $current_collaborator);
    $sql->execute();
    $owner = $sql->fetch(PDO::FETCH_ASSOC);
} else {
    // Redirect to error page
    header("Location: ../../View/errors/404.php");
}
