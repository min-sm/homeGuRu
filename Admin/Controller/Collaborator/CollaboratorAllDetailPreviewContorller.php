<?php
include '../../Model/DBConnection.php';
session_start();


if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = $pdo->prepare(
        "SELECT * 
            FROM (SELECT 
                mc.id AS collaborator_id,
                mc.gc_logo,
                mc.gc_code,
                mc.gc_company_name, 
                mc.gc_company_id, 
                mc.gc_owner_name, 
                mc.gc_owner_nrc,
                mc.gc_email,
                mc.gc_phone_num,
                mc.gc_address,
                mc.gc_status,
                mc.gc_activity_ban,
                mc.del_flg, 
                ccc.s_expire_date,
                ccc.ccash_amt,
                ccc.created_date,
                sd.s_duration_name,
                sp.s_package_name 
            FROM 
                m_collaborators AS mc
            INNER JOIN 
                (SELECT gc_id, MAX(updated_date) AS latest_update
                FROM collaborator_cash_closed
                GROUP BY gc_id) AS latest_ccc 
            ON 
                mc.id = latest_ccc.gc_id
            INNER JOIN 
                collaborator_cash_closed AS ccc 
            ON 
                latest_ccc.gc_id = ccc.gc_id AND latest_ccc.latest_update = ccc.updated_date
            INNER JOIN 
                service_durations AS sd 
            ON 
                ccc.sduration_id = sd.id
            INNER JOIN 
                service_packages AS sp 
            ON 
                ccc.spackage_id = sp.id
        ) AS subquery
        WHERE subquery.del_flg = 0
        AND subquery.collaborator_id = :id 
        AND subquery.gc_status =2
        "
    );
    $sql->bindValue("id", $id);
    $sql->execute();
    $collaboratorcount = $sql->fetchAll(PDO::FETCH_ASSOC);
    if (count($collaboratorcount) != 0) {
        $collaborator = $collaboratorcount;
    } else {
        // redirect to error page
        header("Location: ../../View/errors/404.php?err=1");
    }
} else {
    // redirect to error page
    header("Location: ../../View/errors/404.php");
}

?>