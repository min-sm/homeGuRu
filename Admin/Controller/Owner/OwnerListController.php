<?php
include "../../Model/DBConnection.php";

$page = isset($_GET['page']) ? $_GET['page'] : 1;
if (isset($the_called_file)) {
    if ($the_called_file == 'owner_list.php') {
        $recordsPerPage = 12;
    } else if ($the_called_file == 'people_list.php') {
        $recordsPerPage = 6;
    }
}
$offset = ($page - 1) * $recordsPerPage;

$query = "SELECT * FROM owners WHERE del_flg = 0 ORDER BY id LIMIT $recordsPerPage OFFSET $offset";

$sql = $pdo->prepare($query);
$sql->execute();
$owners = $sql->fetchAll(PDO::FETCH_ASSOC);

$queryForResultCount = "SELECT COUNT(id) AS total_result FROM owners WHERE del_flg = 0";
$sqlForResultCount = $pdo->prepare($queryForResultCount);
$sqlForResultCount->execute();
$resultCount = $sqlForResultCount->fetch(PDO::FETCH_ASSOC);
