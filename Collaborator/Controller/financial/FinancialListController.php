<?php
// Call DB connection
include "../../Model/DBConnection.php";?>


<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>

<?php

$collaborator_id = $_SESSION["collaboratorId"];

$sql = $pdo->prepare("SELECT *
                            FROM property_cash_closed
                            WHERE   p_offer = 2 
                            AND del_flg = 0 
                            AND uploader_id =  :collaborator_id
                            ORDER BY id 
                            DESC LIMIT 3               
                            ");
$sql->bindValue('collaborator_id', $collaborator_id);
$sql->execute();
$sales = $sql->fetchAll(PDO::FETCH_ASSOC);



$sql = $pdo->prepare( "SELECT *
                            FROM property_cash_closed
                            WHERE   p_offer = 1 
                            AND del_flg = 0 
                            AND uploader_id = :collaborator_id
                            ORDER BY id 
                            DESC LIMIT 3               
                            ");
    $sql->bindValue('collaborator_id',$collaborator_id);
    $sql->execute();
    $rents = $sql->fetchAll(PDO::FETCH_ASSOC);
    
?>