<?php
include "../../Model/DBConnection.php";
$uploader_id = $_GET['id'];

$query = "SELECT p.*, pt.pt_name, township.name AS township_name FROM properties p, property_type pt, m_townships township WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_township = township.id AND p.p_status = 2 AND p.p_after = 1 AND p.uploader_id = :uploader_id ORDER BY p.id";

$sql = $pdo->prepare($query);
$sql->bindValue('uploader_id', $uploader_id);
$sql->execute();
$properties = $sql->fetchAll(PDO::FETCH_ASSOC);
// used in allList.php & propertyReqList.php

$queryForResultCount = "SELECT COUNT(p.id) AS total_result FROM properties p WHERE p.del_flg = 0 AND p.p_status = 2 AND p.p_after = 1 AND p.uploader_id = :uploader_id";
$sqlForResultCount = $pdo->prepare($queryForResultCount);
$sqlForResultCount->bindValue('uploader_id', $uploader_id);
$sqlForResultCount->execute();
$resultCount = $sqlForResultCount->fetch(PDO::FETCH_ASSOC);
// print_r($resultCount);