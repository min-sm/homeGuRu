<?php
include "../../Model/DBConnection.php";
 $id = $_GET["id"];

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

WHERE ccc.id = :id 
AND ccc.del_flg = 0 " );
 $sql->bindValue(":id", $id);
 $sql->execute();
 $collaboratorOne = $sql->fetchAll(PDO::FETCH_ASSOC);
  


?>