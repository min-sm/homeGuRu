<?php
// Call DB connection
include "../../Model/DBConnection.php";



$cname = isset($_GET['c_company_name'])? $_GET['c_company_name'] : '';
$limit = 10;//limit of show record per page
$page  = isset($_GET['page'])? $_GET['page'] : 1;//Current page of pagination
$start = ($page -1 ) * $limit;//Start number of record per page

if(!empty($cname) && isset($_GET['search'])){
    $sql_count = "SELECT 
    COUNT(*) as a
    FROM 
    collaborator_cash_closed AS ccc
    JOIN 
    m_collaborators AS mc ON ccc.gc_id = mc.id
    JOIN 
    service_durations AS sd ON ccc.sduration_id = sd.id
    JOIN 
    service_packages AS sp ON ccc.spackage_id = sp.id
    WHERE  ccc.del_flg = 0              
    ";
    $sql_count .= " AND mc.gc_company_name LIKE :name";  
    $sql = $pdo->prepare($sql_count);
    $sql->bindValue(':name',  '%'.$cname.'%'   );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
    $total = $result[0]['a'];// total number of record
    $totalPages = ceil($total/$limit);//no of pages
    
    
    $sql_limit = "SELECT 
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
    ";
     $sql_limit .= " AND mc.gc_company_name LIKE :name";    
    $sql= $pdo->prepare($sql_limit);
    $sql->bindValue(':name',  '%'.$cname.'%'   );
    $sql->execute();
    $collaborators = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List record Number
    
    
}else{
    $sql_count = "SELECT 
    COUNT(*) as a
    FROM 
    collaborator_cash_closed AS ccc
    JOIN 
    m_collaborators AS mc ON ccc.gc_id = mc.id
    JOIN 
    service_durations AS sd ON ccc.sduration_id = sd.id
    JOIN 
    service_packages AS sp ON ccc.spackage_id = sp.id
    WHERE  ccc.del_flg = 0";

    $sql = $pdo->prepare($sql_count);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
    $total = $result[0]['a'];// total number of record
    $totalPages = ceil($total/$limit);//no of pages
    
    
    $sql_limit ="SELECT 
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
";
    $sql_limit .= "LIMIT :start , :limit";
    $sql= $pdo->prepare($sql_limit);
    $sql->bindValue(':start',$start, PDO::PARAM_INT);
    $sql->bindValue(':limit',$limit, PDO::PARAM_INT);
    $sql->execute();
    $collaborators = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List record Number
    
    
}

?>


