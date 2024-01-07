<?php
include "../../Model/DBConnection.php";

$sent_id = $_GET["id"];
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// $current_collaborator = $_SESSION['collaboratorID'];
$current_collaborator = 1;
$p_status = 2; // all the p_status of posts of collaborators are gonna be 2, but wrote this just in case

// not necessarily needed, since all the posts are gonna be accepted stage and there will be no req stage & pending stage
// if (isset($the_called_file)) { 
//     if ($the_called_file == 'edit.php') {
//         $p_status = 2;
//         $txtForErr = 'yet posted';
//     } else if ($the_called_file == 'pending.php') {  
//         $p_status = 1;
//         $txtForErr = "in the pending stage";
//     }
// }

$sql = $pdo->prepare("SELECT p.*, go.*, pt.pt_status, region.id AS region_id FROM properties p, owners go, property_type pt, m_townships township, m_regions region WHERE p.id= :id AND p.go_id = go.id AND p.pt_id = pt.id AND p.p_township = township.id AND township.region_id = region.id AND p.p_status = :p_status AND p.uploader_id = :uploader_id");
$sql->bindValue(":id", $sent_id);
$sql->bindValue(":p_status", $p_status);
$sql->bindValue(":uploader_id", $current_collaborator);
$sql->execute();
$properties = $sql->fetchAll(PDO::FETCH_ASSOC);
if (!empty($properties)) {
    $property = $properties[0];
    if ($property['uploader_id'] != $current_collaborator) {
        $err = "Unauthorise Access.";
        header("Location: ../../View/errors/404.php?error=$err");
    }
    // You can continue processing with $property
} else {
    $err = "The property you are trying to access is not yours.";
    header("Location: ../../View/errors/404.php?error=$err");
}

// used in edit.php