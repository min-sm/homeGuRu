<?php
include "../../Model/DBConnection.php";

$search_code = str_replace(' ', '', strtoupper($_GET['searchID']));
$status = $_GET['p_status'];
// echo $search_code . ' ' . $status;

$query = "SELECT p.*, pt.pt_name, township.name AS township_name FROM properties p, property_type pt, m_townships township WHERE p.del_flg = 0 AND p.pt_id = pt.id AND p.p_township = township.id AND p.p_code = :p_code ORDER BY p.id";

$sql = $pdo->prepare($query);
$sql->bindValue("p_code", $search_code);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
$currentDirectory = __DIR__;
// echo "Current directory: " . $currentDirectory;