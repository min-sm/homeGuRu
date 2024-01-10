<?php
// Call DB connection
include "../../Model/DBConnection.php";


if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql_admin = "SELECT *
                        FROM m_admins
                        WHERE del_flg = 0
                        AND id = :id
                        ";
    $sql = $pdo->prepare($sql_admin);
    $sql->bindValue(':id', $id );
    $sql->execute();
    $admin = $sql->fetchAll(PDO::FETCH_ASSOC);
    if(count($admin)!=0){
        $adminOne = $admin;
    }else{
        // redirect to error page
        header("Location: ../../View/errors/404.php");
    }
}else{
    header("Location: ../../View/errors/404.php");

}