<?php
include "../../Model/DBConnection.php";

$collaborator_id = 1;

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
$rentOne = $sql->fetchAll(PDO::FETCH_ASSOC);

?>