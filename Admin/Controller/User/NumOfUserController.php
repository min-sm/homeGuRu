<?php
include "../../Model/DBConnection.php";

$query = "SELECT COUNT(*) AS num_of_user FROM `m_users` WHERE del_flg = 0;";
$sql = $pdo->prepare($query);
$sql->execute();
$num_of_users = $sql->fetchAll(PDO::FETCH_ASSOC);
// Encode data as JSON
$response = json_encode($num_of_users);

// Output the JSON-encoded data
die($response);
// used in dashboard.php