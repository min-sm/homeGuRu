<?php
// Call DB connection
include "../../Model/DBConnection.php";

$ccompany_name = isset($_GET['gc_name'])? $_GET['gc_name'] : '';
$limit = 10;//limit of show record per page
$page  = isset($_GET['page'])? $_GET['page'] : 1;//Current page of pagination
$start = ($page -1 ) * $limit;//Start number of record per page

if(!empty($ccompany_name) && isset($_GET['search'])){
    $sql_count = "SELECT COUNT(*) AS a
                        FROM (
                            SELECT 
                                mc.id AS collaborator_id,
                                mc.gc_code,
                                mc.gc_company_name, 
                                mc.gc_company_id, 
                                mc.gc_owner_name, 
                                mc.gc_owner_nrc,
                                mc.gc_status,
                                mc.del_flg AS collaborator_del_flg, 
                                ccc.s_expire_date,
                                ccc.ccash_amt,
                                ccc.del_flg AS cash_closed_del_flg, 
                                sd.s_duration_name,
                                sp.s_package_name 
                                FROM 
                                    m_collaborators AS mc
                                LEFT JOIN 
                                    (SELECT gc_id,del_flg, MAX(updated_date) AS latest_update
                                    FROM collaborator_cash_closed
                                    WHERE del_flg = 0
                                    GROUP BY gc_id
                                    ) AS latest_ccc 
                                ON 
                                    mc.id = latest_ccc.gc_id
                                LEFT JOIN 
                                    collaborator_cash_closed AS ccc 
                                ON 
                                    latest_ccc.gc_id = ccc.gc_id AND latest_ccc.latest_update = ccc.updated_date
                                LEFT JOIN 
                                    service_durations AS sd 
                                ON 
                                    ccc.sduration_id = sd.id
                                LEFT JOIN 
                                    service_packages AS sp 
                                ON 
                                    ccc.spackage_id = sp.id
                            ) AS subquery
                            WHERE gc_status = 2 
                            AND collaborator_del_flg = 0                           
                            ";
    $sql_count .= " AND gc_company_name LIKE :ccompany_name";  
    $sql = $pdo->prepare($sql_count);
    $sql->bindValue('ccompany_name',  $ccompany_name.'%'   );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
    $total = $result[0]['a'];// total number of record
    $totalPages = ceil($total/$limit);//no of pages


$sql_limit =    "SELECT * 
                    FROM (
                        SELECT 
                            mc.id AS collaborator_id,
                            mc.gc_code,
                            mc.gc_company_name, 
                            mc.gc_company_id, 
                            mc.gc_owner_name, 
                            mc.gc_owner_nrc,
                            mc.gc_status,
                            mc.del_flg AS collaborator_del_flg, 
                            ccc.s_expire_date,
                            ccc.ccash_amt,
                            ccc.del_flg AS cash_closed_del_flg, 
                            sd.s_duration_name,
                            sp.s_package_name 
                            FROM 
                                    m_collaborators AS mc
                                LEFT JOIN 
                                    (SELECT gc_id,del_flg, MAX(updated_date) AS latest_update
                                    FROM collaborator_cash_closed
                                    WHERE del_flg = 0
                                    GROUP BY gc_id
                                    ) AS latest_ccc 
                                ON 
                                    mc.id = latest_ccc.gc_id
                                LEFT JOIN 
                                    collaborator_cash_closed AS ccc 
                                ON 
                                    latest_ccc.gc_id = ccc.gc_id AND latest_ccc.latest_update = ccc.updated_date
                                LEFT JOIN 
                                    service_durations AS sd 
                                ON 
                                    ccc.sduration_id = sd.id
                                LEFT JOIN 
                                    service_packages AS sp 
                                ON 
                                    ccc.spackage_id = sp.id
                            ) AS subquery
                            WHERE gc_status = 2 
                            AND collaborator_del_flg = 0
                            ";
    $sql_limit .= " AND gc_company_name LIKE :ccompany_name";  
    $sql_limit .= " ORDER BY s_expire_date ASC ";  
    $sql_limit .= "LIMIT :start , :limit";    
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue('ccompany_name',  $ccompany_name.'%'   );
    $sql->bindParam(':start',$start, PDO::PARAM_INT);
    $sql->bindParam(':limit',$limit, PDO::PARAM_INT);
    $sql->execute();
    $collaborators = $sql->fetchAll(PDO::FETCH_ASSOC);


}else{
$sql_count = "SELECT COUNT(*) AS a
                    FROM (
                        SELECT 
                            mc.id AS collaborator_id,
                            mc.gc_code,
                            mc.gc_company_name, 
                            mc.gc_company_id, 
                            mc.gc_owner_name, 
                            mc.gc_owner_nrc,
                            mc.gc_status,
                            mc.del_flg AS collaborator_del_flg, 
                            ccc.s_expire_date,
                            ccc.ccash_amt,
                            ccc.del_flg AS cash_closed_del_flg, 
                            sd.s_duration_name,
                            sp.s_package_name 
                            FROM 
                                    m_collaborators AS mc
                                LEFT JOIN 
                                    (SELECT gc_id,del_flg, MAX(updated_date) AS latest_update
                                    FROM collaborator_cash_closed
                                    WHERE del_flg = 0
                                    GROUP BY gc_id
                                    ) AS latest_ccc 
                                ON 
                                    mc.id = latest_ccc.gc_id
                                LEFT JOIN 
                                    collaborator_cash_closed AS ccc 
                                ON 
                                    latest_ccc.gc_id = ccc.gc_id AND latest_ccc.latest_update = ccc.updated_date
                                LEFT JOIN 
                                    service_durations AS sd 
                                ON 
                                    ccc.sduration_id = sd.id
                                LEFT JOIN 
                                    service_packages AS sp 
                                ON 
                                    ccc.spackage_id = sp.id
                            ) AS subquery
                            WHERE gc_status = 2 
                            AND collaborator_del_flg = 0                          
                            ";
    $sql = $pdo->prepare($sql_count);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
    $total = $result[0]['a'];// total number of record
    $totalPages = ceil($total/$limit);//no of pages


$sql_limit = "SELECT * 
                    FROM (
                        SELECT 
                            mc.id AS collaborator_id,
                            mc.gc_code,
                            mc.gc_company_name, 
                            mc.gc_company_id, 
                            mc.gc_owner_name, 
                            mc.gc_owner_nrc,
                            mc.gc_status,
                            mc.del_flg AS collaborator_del_flg, 
                            ccc.s_expire_date,
                            ccc.ccash_amt,
                            ccc.del_flg AS cash_closed_del_flg, 
                            sd.s_duration_name,
                            sp.s_package_name 
                            FROM 
                                    m_collaborators AS mc
                                LEFT JOIN 
                                    (SELECT gc_id,del_flg, MAX(updated_date) AS latest_update
                                    FROM collaborator_cash_closed
                                    WHERE del_flg = 0
                                    GROUP BY gc_id
                                    ) AS latest_ccc 
                                ON 
                                    mc.id = latest_ccc.gc_id
                                LEFT JOIN 
                                    collaborator_cash_closed AS ccc 
                                ON 
                                    latest_ccc.gc_id = ccc.gc_id AND latest_ccc.latest_update = ccc.updated_date
                                LEFT JOIN 
                                    service_durations AS sd 
                                ON 
                                    ccc.sduration_id = sd.id
                                LEFT JOIN 
                                    service_packages AS sp 
                                ON 
                                    ccc.spackage_id = sp.id
                            ) AS subquery
                            WHERE gc_status = 2 
                            AND collaborator_del_flg = 0
                            ORDER BY s_expire_date ASC
                            ";
    $sql_limit .= "LIMIT :start , :limit";
    $sql= $pdo->prepare($sql_limit);
    $sql->bindParam(':start',$start, PDO::PARAM_INT);
    $sql->bindParam(':limit',$limit, PDO::PARAM_INT);
    $sql->execute();
    $collaborators = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>