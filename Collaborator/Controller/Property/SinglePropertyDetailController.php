<?php
include "../../Model/DBConnection.php";
session_start();
$current_collaborator = $_SESSION['collaboratorID'];

if (isset($_GET['id'])) {
    $sent_id = $_GET["id"];

    $sql = $pdo->prepare("SELECT p.*, pt.pt_name, go.*, township.name AS township_name FROM properties p, property_type pt, owners go, m_townships township WHERE p.id= :id AND p.pt_id = pt.id AND p.go_id = go.id AND township.id = p.p_township;");
    $sql->bindValue(":id", $sent_id);
    $sql->execute();
    $property = $sql->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($property)) {
        $property = $property[0];
        $isCollaborator = $property['uploader_id'] == $current_collaborator;
        if (!$isCollaborator) { // to prevent this collaborator to not view other collaborators' properties details 
            // Redirect to error page
            $err = "Unauthorize Access";
            header("Location: ../../View/errors/404.php?error=$err");
        }
    } else {
        // Redirect to error page
        header("Location: ../../View/errors/404.php");
    }
} else {
    // Redirect to error page
    header("Location: ../../View/errors/404.php");
}

// used in detail.php