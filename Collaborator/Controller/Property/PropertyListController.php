<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once "../../Model/DBConnection.php";

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$recordsPerPage = 6;
$offset = ($page - 1) * $recordsPerPage;
$current_collaborator = $_SESSION["collaboratorId"];
echo $current_collaborator;

if (isset($the_called_file)) {
    switch ($the_called_file) {
        case 'listOutOfStock.php':
            $p_after = 1;
            break;
        case 'listInStock.php':
            $p_after = 0;
            break;
        default: // owner_detail.php
            $p_after = '0, 1';
            break;
    }
}

if ($the_called_file == 'listAllStock.php') {
    $query = "SELECT p.*, pt.pt_name, township.name AS township_name
     FROM properties p, property_type pt, m_townships township
      WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_township = township.id
       AND p.p_status = 2 AND p.uploader_id = :uploader_id 
       ORDER BY p.id LIMIT $recordsPerPage OFFSET $offset";

    $sql = $pdo->prepare($query);
    $sql->bindValue("uploader_id", $current_collaborator);

    $queryForResultCount = "SELECT COUNT(p.id) AS total_result FROM properties p WHERE p.del_flg = 0 AND p.p_status = 2 AND p.uploader_id = :uploader_id";
    $sqlForResultCount = $pdo->prepare($queryForResultCount);
    $sqlForResultCount->bindValue("uploader_id", $current_collaborator);
} else {
    $query = "SELECT p.*, pt.pt_name, township.name AS township_name FROM properties p, property_type pt, m_townships township WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_township = township.id AND p.p_status = 2 AND p.uploader_id = :uploader_id AND p.p_after = :p_after ORDER BY p.id LIMIT $recordsPerPage OFFSET $offset";

    $sql = $pdo->prepare($query);
    $sql->bindValue("p_after", $p_after);
    $sql->bindValue("uploader_id", $current_collaborator);

    $queryForResultCount = "SELECT COUNT(p.id) AS total_result FROM properties p WHERE p.del_flg = 0 AND p.p_status = 2 AND p.uploader_id = :uploader_id AND p.p_after = :p_after ";
    $sqlForResultCount = $pdo->prepare($queryForResultCount);
    $sqlForResultCount->bindValue("uploader_id", $current_collaborator);
    $sqlForResultCount->bindValue("p_after", $p_after);
}


$sql->execute();
$properties = $sql->fetchAll(PDO::FETCH_ASSOC);
// used in allList.php & propertyReqList.php


$sqlForResultCount->execute();
$resultCount = $sqlForResultCount->fetch(PDO::FETCH_ASSOC);
// print_r($resultCount);
