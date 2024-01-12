<?php
include '../../Model/DBConnection.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$id = $_SESSION["adminId"];
$sql = $pdo->prepare(   "SELECT *  
                                FROM m_admins  
                                WHERE id = :id 
                                AND del_flg = 0 
                                ");
$sql->bindValue("id", $id);
$sql->execute();
$adminProfile = $sql->fetchAll(PDO::FETCH_ASSOC);


?>