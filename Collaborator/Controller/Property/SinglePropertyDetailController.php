<?php
include "../../Model/DBConnection.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$current_collaborator = $_SESSION['collaboratorID'];
//$current_collaborator = 1;

if (isset($_GET['id'])) {
    $sent_id = $_GET["id"];

    $sql = $pdo->prepare("SELECT p.*, pt.pt_name, go.*, township.name AS township_name FROM properties p, property_type pt, owners go, m_townships township WHERE p.id= :id AND p.pt_id = pt.id AND p.go_id = go.id AND township.id = p.p_township AND p.uploader_id = :uploader_id;");
    $sql->bindValue(":id", $sent_id);
    $sql->bindValue(":uploader_id", $current_collaborator);
    $sql->execute();
    $property = $sql->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($property)) {
        $property = $property[0];
        $isCollaborator = $property['uploader_id'] == $current_collaborator; // double checking
        if (!$isCollaborator) { // to prevent this collaborator to not view other collaborators' properties details 
            // Redirect to error page
            $err = "Unauthorize Access! You are trying to view the property detail page of not yours.";
            header("Location: ../../View/errors/404.php?error=$err");
        }
    } else {
        // Redirect to error page
        $err = "Can't find your property. Or you are just trying to view the property detail page of not yours.";
        header("Location: ../../View/errors/404.php?error=$err");
    }
} else {
    // Redirect to error page
    $err = "Wrong URL. You are trying to access detail page without id in the url.";
    header("Location: ../../View/errors/404.php?error=$err");
}

// used in detail.php