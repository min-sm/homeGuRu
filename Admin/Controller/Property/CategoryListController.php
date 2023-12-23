<?php
include "../../Model/DBConnection.php";

$query = "SELECT pt.pt_name AS pt_name, COUNT(p.pt_id) AS num_of, pt.pt_status AS pt_status FROM property_type pt, properties p WHERE pt.id = p.pt_id AND p.del_flg = 0 GROUP BY p.pt_id ORDER BY num_of DESC LIMIT 5;";
$sql = $pdo->prepare($query);
$sql->execute();
$pt_name_and_count = $sql->fetchAll(PDO::FETCH_ASSOC);
// used in dashboard.php