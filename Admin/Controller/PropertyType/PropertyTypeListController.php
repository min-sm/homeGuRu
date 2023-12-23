<?php
include "../../Model/DBConnection.php";

$query = "SELECT * FROM property_type WHERE del_flg = 0 ORDER BY pt_name;";
$sql = $pdo->prepare($query);
$sql->execute();
$property_types = $sql->fetchAll(PDO::FETCH_ASSOC);
// used in add_form.php & edit.php