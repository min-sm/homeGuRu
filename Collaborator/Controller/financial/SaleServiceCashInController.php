<?php
// Call DB connection
include "../../Model/DBConnection.php";?>


<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>


<?php
$collaborator_id = $_SESSION["collaboratorId"];

$id = $_GET["id"];
$sql = $pdo->prepare(
                        "SELECT *
                            FROM property_cash_closed 
                            WHERE id = :id  AND uploader_id =  :collaborator_id
                            AND del_flg = 0 " 
                    );
$sql->bindValue(":id", $id);
$sql->bindValue("collaborator_id", $collaborator_id);
$sql->execute();
$saleOne = $sql->fetchAll(PDO::FETCH_ASSOC);



?>