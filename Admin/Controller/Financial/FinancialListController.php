<?php
// Call DB connection
include "../../Model/DBConnection.php";

$sql = $pdo->prepare(
"SELECT 
    mc.gc_code,
    mc.gc_company_name,
    sd.s_duration_name,
    sp.s_package_name,
    ccc.id,
    ccc.ccash_amt,
    ccc.ccash_unit,
    ccc.ccash_payer_name,
    ccc.ccash_phone,
    ccc.ccash_recipient_name,
    ccc.ga_id,
    ccc.del_flg,
    ccc.created_date AS cash_closed_created_date,
    ccc.updated_date AS cash_closed_updated_date
FROM 
    collaborator_cash_closed AS ccc
JOIN 
    m_collaborators AS mc ON ccc.gc_id = mc.id
JOIN 
    service_durations AS sd ON ccc.sduration_id = sd.id
JOIN 
    service_packages AS sp ON ccc.spackage_id = sp.id

WHERE  ccc.del_flg = 0
ORDER BY ccc.id
DESC LIMIT 3               
");
$sql->execute();
$collaborators = $sql->fetchAll(PDO::FETCH_ASSOC);



$sql = $pdo->prepare(
"SELECT *
FROM property_cash_closed
WHERE   p_offer = 2 AND del_flg = 0 AND uploader_id = 0
ORDER BY id 
DESC LIMIT 3               
");
$sql->execute();
$sales = $sql->fetchAll(PDO::FETCH_ASSOC);



$sql = $pdo->prepare(
    "SELECT *
    FROM property_cash_closed
    WHERE   p_offer = 1 AND del_flg = 0 AND uploader_id = 0
    ORDER BY id 
    DESC LIMIT 3               
    ");
    $sql->execute();
    $rents = $sql->fetchAll(PDO::FETCH_ASSOC);
    
?>