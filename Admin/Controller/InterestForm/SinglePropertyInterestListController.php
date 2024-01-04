<?php
include "../../Model/DBConnection.php";

$sent_ID = $_GET['id'];
$query = "SELECT * FROM interest_list_form WHERE p_id = :p_id AND del_flg = 0 ORDER BY created_date DESC;";
$sql = $pdo->prepare($query);
$sql->bindValue('p_id', $sent_ID);
$sql->execute();
$interest_list = $sql->fetchAll(PDO::FETCH_ASSOC);
// used in dashboard.php