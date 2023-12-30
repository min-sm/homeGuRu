<?php
include_once "../../Model/DBConnection.php";

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$recordsPerPage = 6;
$offset = ($page - 1) * $recordsPerPage;

$query = "SELECT p.*, pt.pt_name, township.name AS township_name FROM properties p, property_type pt, m_townships township WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_township = township.id ORDER BY p.id LIMIT $recordsPerPage OFFSET $offset";

$sql = $pdo->prepare($query);
$sql->execute();
$properties = $sql->fetchAll(PDO::FETCH_ASSOC);
// used in list.php 

$queryForResultCount = "SELECT COUNT(p.id) AS total_result FROM properties p WHERE p.del_flg = 0";
$sqlForResultCount = $pdo->prepare($queryForResultCount);
$sqlForResultCount->execute();
$resultCount = $sqlForResultCount->fetch(PDO::FETCH_ASSOC);
// print_r($resultCount);
