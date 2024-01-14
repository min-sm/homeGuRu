<?php
include "../../Model/DBConnection.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$current_collaborator = $_SESSION["collaboratorId"];
//$current_collaborator = 1; // to comment this line of code

$page = isset($_GET['page']) ? $_GET['page'] : 1;
if (isset($the_called_file)) {
    if ($the_called_file == 'owner_list.php') {
        $recordsPerPage = 12;
    } else if ($the_called_file == 'people_list.php') {
        $recordsPerPage = 6;
    }
}
$offset = ($page - 1) * $recordsPerPage;

$query = "SELECT DISTINCT go.go_nrc, go.* FROM owners go, properties p WHERE go.del_flg = 0 AND go.id = p.go_id AND p.uploader_id = :uploader_id ORDER BY go.id LIMIT $recordsPerPage OFFSET $offset";

$sql = $pdo->prepare($query);
$sql->bindValue("uploader_id", $current_collaborator);
$sql->execute();
$owners = $sql->fetchAll(PDO::FETCH_ASSOC);

$queryForResultCount = "SELECT  COUNT(DISTINCT go.go_nrc) AS total_result FROM owners go, properties p WHERE go.del_flg = 0 AND go.id = p.go_id AND p.uploader_id = :uploader_id";
$sqlForResultCount = $pdo->prepare($queryForResultCount);
$sqlForResultCount->bindValue("uploader_id", $current_collaborator);
$sqlForResultCount->execute();
$resultCount = $sqlForResultCount->fetch(PDO::FETCH_ASSOC);
