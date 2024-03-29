<?php
include "../../Model/DBConnection.php";
if (isset($_GET['id'])) {
    $sent_id = $_GET["id"];

    $sql = $pdo->prepare("SELECT p.*, pt.pt_name, go.*, township.name AS township_name FROM properties p, property_type pt, owners go, m_townships township WHERE p.id= :id AND p.pt_id = pt.id AND p.go_id = go.id AND township.id = p.p_township;");
    $sql->bindValue(":id", $sent_id);
    $sql->execute();
    $property = $sql->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($property)) {
        $property = $property[0];
        $isCollaborator = $property['uploader_id'] != 0;
        // if the property is posted by collaborator
        if ($isCollaborator) {
            $sql = $pdo->prepare("SELECT p.*, pt.pt_name, go.*, township.name AS township_name, collaborator.gc_company_name FROM properties p, property_type pt, owners go, m_townships township, m_collaborators collaborator WHERE p.id= :id AND p.pt_id = pt.id AND p.go_id = go.id AND township.id = p.p_township AND collaborator.id = p.uploader_id;");
            $sql->bindValue(":id", $sent_id);
            $sql->execute();
            $property = $sql->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($property)) {
                $property = $property[0];
            } else {
                // Redirect to error page
                // can't find ur page, 0 result from db
                header("Location: ../../View/errors/404.php");
            }
        }
    } else {
        // Redirect to error page
        // can't find ur page, 0 result from db
        header("Location: ../../View/errors/404.php");
    }
} else {
    // Redirect to error page
    // trying to access page without id in url
    header("Location: ../../View/errors/404.php");
}

// used in detail.php