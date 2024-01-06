<?php
include "../../Model/DBConnection.php";

if (isset($_GET['id'])) {
    $sent_id = $_GET["id"];
    $query = "SELECT * FROM owners WHERE del_flg = 0 AND id = :id";

    $sql = $pdo->prepare($query);
    $sql->bindValue("id", $sent_id);
    $sql->execute();
    $owner = $sql->fetch(PDO::FETCH_ASSOC);
} else {
    // Redirect to error page
    header("Location: ../../View/errors/404.php");
}
