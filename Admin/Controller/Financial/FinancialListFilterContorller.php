<?php include '../../Model/DBConnection.php'; ?>
<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


<?php

if(isset($_GET['start_date']) && isset($_GET['end_date'])){
    $start_date = $_GET['start_date'];
    $end_date = $_GET['end_date'];
}else if($_SESSION['list_start_date']!='' && $_SESSION['list_end_date']!=''){
    $start_date = $_SESSION['list_start_date'];
    $end_date = $_SESSION['list_end_date'];
}else{
    $start_date = date('Y-m-d');
    $end_date = date('Y-m-d');
}


if ($start_date > $end_date) {
    $temp = $start_date;
    $temp2 = $end_date;
    $start_date = $temp2;
    $end_date = $temp;
}

$_SESSION['start_date'] = $start_date;
$_SESSION['end_date'] = $end_date;
if (($start_date != date('Y-m-d')) && ($end_date != date('Y-m-d')) &&
    (isset($_GET['search']))
) {
   
    //rent total
    $sql_count = "SELECT COUNT(*) AS a
        FROM property_cash_closed
        WHERE created_date BETWEEN :start_date AND :end_date 
        AND p_offer = 1
        AND uploader_id = 0 
        AND del_flg = 0 
        ";
    $sql = $pdo->prepare($sql_count);
    $sql->bindValue("start_date", $start_date . ' 00:00:00');
    $sql->bindValue("end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List  Number
    $totalrent = $result[0]['a']; // total number of record
    $_SESSION['total_rent'] = $totalrent;

    //rent fetch
    $sql_limit = "SELECT *
        FROM property_cash_closed
        WHERE created_date BETWEEN :start_date AND :end_date 
        AND p_offer = 1
        AND uploader_id = 0 
        AND del_flg = 0 
        ";
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue(":start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $rents = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number


    //sale count
    $sql_count = "SELECT COUNT(*) AS a
        FROM property_cash_closed
        WHERE created_date BETWEEN :start_date AND :end_date 
        AND p_offer = 1
        AND uploader_id = 0 
        AND del_flg = 0 
        ";
    $sql = $pdo->prepare($sql_count);
    $sql->bindValue("start_date", $start_date . ' 00:00:00');
    $sql->bindValue("end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List  Number
    $totalsale = $result[0]['a']; // total number of record
    $_SESSION['total_sale'] = $totalsale;

    //sale fetch
    $sql_limit = "SELECT *
        FROM property_cash_closed
        WHERE created_date BETWEEN :start_date AND :end_date 
        AND p_offer = 2
        AND uploader_id = 0 
        AND del_flg = 0 
        ";
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue(":start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $sales = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number


    //collaborator total        
    $sql_limit = "SELECT COUNT(*) AS a
    FROM 
        collaborator_cash_closed AS ccc
    JOIN 
        m_collaborators AS mc ON ccc.gc_id = mc.id
    JOIN 
        service_durations AS sd ON ccc.sduration_id = sd.id
    JOIN 
        service_packages AS sp ON ccc.spackage_id = sp.id   
        WHERE ccc.created_date BETWEEN :start_date AND :end_date 
        AND ccc.del_flg = 0 
        ";
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue(":start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number
    $totalcollaborator = $result[0]['a']; // total number of record
    $_SESSION['total_collaborator'] = $totalcollaborator;

    //collaborator fetch        
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
        WHERE ccc.created_date BETWEEN :start_date AND :end_date 
        AND ccc.del_flg = 0 
        ";
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue(":start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $collaborators = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number







} else {
    
    $_SESSION['start_date'] = $start_date;
    $_SESSION['end_date'] = $end_date;


    //rent total
    $sql_count = "SELECT COUNT(*) AS a
        FROM property_cash_closed
        WHERE created_date BETWEEN :start_date AND :end_date 
        AND p_offer = 1
        AND uploader_id = 0 
        AND del_flg = 0 
        ";

    $sql = $pdo->prepare($sql_count);
    $sql->bindValue("start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List  Number
    $totalrent = $result[0]['a']; // total number of record
    $_SESSION['total_rent'] = $totalrent;

    //rent fetch        
    $sql_limit = "SELECT *
        FROM property_cash_closed
        WHERE created_date BETWEEN :start_date AND :end_date 
        AND p_offer = 1
        AND uploader_id = 0 
        AND del_flg = 0 
        ";
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue(":start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $rents = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number



    //sale total
    $sql_count = "SELECT COUNT(*) AS a
        FROM property_cash_closed
        WHERE created_date BETWEEN :start_date AND :end_date 
        AND p_offer = 2
        AND uploader_id = 0 
        AND del_flg = 0 
        ";

    $sql = $pdo->prepare($sql_count);
    $sql->bindValue("start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List  Number
    $totalsale = $result[0]['a']; // total number of record
    $_SESSION['total_sale'] = $totalsale;

    //sale fetch        
    $sql_limit = "SELECT *
        FROM property_cash_closed
        WHERE created_date BETWEEN :start_date AND :end_date 
        AND p_offer = 2
        AND uploader_id = 0 
        AND del_flg = 0 
        ";
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue(":start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $sales = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number


    //collaborator total        
    $sql_limit = "SELECT COUNT(*) AS a
    FROM 
        collaborator_cash_closed AS ccc
    JOIN 
        m_collaborators AS mc ON ccc.gc_id = mc.id
    JOIN 
        service_durations AS sd ON ccc.sduration_id = sd.id
    JOIN 
        service_packages AS sp ON ccc.spackage_id = sp.id   
        WHERE ccc.created_date BETWEEN :start_date AND :end_date 
        AND ccc.del_flg = 0 
        ";
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue(":start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number
    $totalcollaborator = $result[0]['a']; // total number of record
    $_SESSION['total_collaborator'] = $totalcollaborator;

    //collaborator fetch        
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
        WHERE ccc.created_date BETWEEN :start_date AND :end_date 
        AND ccc.del_flg = 0 
        ";
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue(":start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $collaborators = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number




}
?>
