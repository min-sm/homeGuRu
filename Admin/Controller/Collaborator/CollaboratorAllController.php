<?php
// Call DB connection
include "../../Model/DBConnection.php";


$sql = $pdo->prepare("SELECT * 
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
                            LIMIT 3
                            ;
                            ");
$sql->execute();
$collaboratorlimit = $sql->fetchAll(PDO::FETCH_ASSOC);




$sql = $pdo->prepare("
                        SELECT * 
                        FROM m_collaborators
                        WHERE del_flg = 0 
                        AND gc_status = 1
                        ORDER BY ID
                        LIMIT 3
");
$sql->execute();
$collaboratorPendingLimit = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $pdo->prepare("
                        SELECT * 
                        FROM m_collaborators
                        WHERE del_flg = 0 
                        AND gc_status = 0
                        ORDER BY ID
                        LIMIT 3
");
$sql->execute();
$collaboratorRequestLimit = $sql->fetchAll(PDO::FETCH_ASSOC);





$sql = $pdo->prepare("
                        SELECT * 
                        FROM m_collaborators 
                        WHERE del_flg = 0  
                       
");
$sql->execute();
$collaborators = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $pdo->prepare("
                        SELECT * 
                        FROM service_durations
                        WHERE del_flg = 0  
                       
");
$sql->execute();
$durations = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $pdo->prepare("
                        SELECT * 
                        FROM service_packages 
                        WHERE del_flg = 0  
                       
");
$sql->execute();
$packages = $sql->fetchAll(PDO::FETCH_ASSOC);