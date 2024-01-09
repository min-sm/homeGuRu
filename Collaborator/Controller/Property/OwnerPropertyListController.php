<?php
include "../../Model/DBConnection.php";

// $page = isset($_GET['page']) ? $_GET['page'] : 1;
// $recordsPerPage = 6;
// $offset = ($page - 1) * $recordsPerPage;
$owner_id = $_GET['id'];
if (isset($the_called_file)) {
    switch ($the_called_file) {
        case 'owner_detail_out_of_stock.php':
            $p_after = 1;
            break;
        case 'owner_detail_in_stock.php':
            $p_after = 0;
            break;
        default: // owner_detail.php
            $p_after = '0, 1';
            break;
    }
}
if ($the_called_file == 'owner_detail.php') {
    $query = "SELECT p.*, pt.pt_name, township.name AS township_name FROM properties p, property_type pt, m_townships township WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_after IN (0,1) AND p.p_township = township.id AND p.go_id = :go_id AND p.uploader_id = :uploader_id ORDER BY p.id";
    $sql = $pdo->prepare($query);
    $sql->bindValue('go_id', $owner_id);
    $sql->bindValue('uploader_id', $current_collaborator);

    $queryForResultCount = "SELECT COUNT(p.id) AS total_result FROM properties p, property_type pt, m_townships township WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_after IN (0,1) AND p.p_township = township.id AND  p.go_id = :go_id AND p.uploader_id = :uploader_id ORDER BY p.id";
    $sqlForResultCount = $pdo->prepare($queryForResultCount);
    $sqlForResultCount->bindValue('go_id', $owner_id);
    $sqlForResultCount->bindValue('go_id', $owner_id);
    $sqlForResultCount->bindValue('uploader_id', $current_collaborator);
} else {
    $query = "SELECT p.*, pt.pt_name, township.name AS township_name FROM properties p, property_type pt, m_townships township WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_after = :p_after AND p.p_township = township.id AND p.go_id = :go_id AND p.uploader_id = :uploader_id ORDER BY p.id";
    $sql = $pdo->prepare($query);
    $sql->bindValue('go_id', $owner_id);
    $sql->bindValue('uploader_id', $current_collaborator);
    $sql->bindValue('p_after', $p_after);

    $queryForResultCount = "SELECT COUNT(p.id) AS total_result FROM properties p, property_type pt, m_townships township WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_after = :p_after AND p.p_township = township.id AND p.go_id = :go_id  AND p.uploader_id = :uploader_id ORDER BY p.id";
    $sqlForResultCount = $pdo->prepare($queryForResultCount);
    $sqlForResultCount->bindValue('go_id', $owner_id);
    $sqlForResultCount->bindValue('uploader_id', $current_collaborator);
    $sqlForResultCount->bindValue('p_after', $p_after);
}

$sql->execute();
$properties = $sql->fetchAll(PDO::FETCH_ASSOC);
// used in allList.php & propertyReqList.php

$sqlForResultCount->execute();
$resultCount = $sqlForResultCount->fetch(PDO::FETCH_ASSOC);
// print_r($resultCount);
