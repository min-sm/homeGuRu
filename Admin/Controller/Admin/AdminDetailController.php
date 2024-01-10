<?php
include '../../Model/DBConnection.php';
session_start();


if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = $pdo->prepare(" SELECT *
                                FROM m_admins
                                WHERE del_flg = 0
                                AND id = :id                               
                                "
                                );
    $sql->bindValue("id", $id);
    $sql->execute();
    $admincount = $sql->fetchAll(PDO::FETCH_ASSOC);
    if (count($admincount) != 0) {
        $admin = $admincount;
    } else {
        // redirect to error page
        header("Location: ../../View/errors/404.php");
    }
} else {
    // redirect to error page
    header("Location: ../../View/errors/404.php");
}

?>