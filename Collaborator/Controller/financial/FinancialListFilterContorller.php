<?php include '../../Model/DBConnection.php'; ?>
<?php session_start(); ?>

<?php

$collaborator_id = 1;

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
                        AND uploader_id =  :collaborator_id
                        AND del_flg = 0 
                        ";
    $sql = $pdo->prepare($sql_count);
    $sql->bindValue('collaborator_id', $collaborator_id);
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
                        AND uploader_id =  :collaborator_id
                        AND del_flg = 0 
                        ";
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue('collaborator_id', $collaborator_id);
    $sql->bindValue(":start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $rents = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number


    //sale count
    $sql_count = "SELECT COUNT(*) AS a
                        FROM property_cash_closed
                        WHERE created_date BETWEEN :start_date AND :end_date 
                        AND p_offer = 1
                        AND uploader_id =  :collaborator_id 
                        AND del_flg = 0 
                        ";
    $sql = $pdo->prepare($sql_count);
    $sql->bindValue('collaborator_id', $collaborator_id);
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
                        AND uploader_id =  :collaborator_id
                        AND del_flg = 0 
                        ";
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue('collaborator_id', $collaborator_id);
    $sql->bindValue(":start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $sales = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number



} else {
    
    $_SESSION['start_date'] = $start_date;
    $_SESSION['end_date'] = $end_date;


    //rent total
    $sql_count = "SELECT COUNT(*) AS a
                        FROM property_cash_closed
                        WHERE created_date BETWEEN :start_date AND :end_date 
                        AND p_offer = 1
                        AND uploader_id =  :collaborator_id 
                        AND del_flg = 0 
                        ";

    $sql = $pdo->prepare($sql_count);
    $sql->bindValue('collaborator_id', $collaborator_id);
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
                        AND uploader_id =  :collaborator_id
                        AND del_flg = 0 
                        ";
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue('collaborator_id', $collaborator_id);
    $sql->bindValue(":start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $rents = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number



    //sale total                
    $sql_count = "SELECT COUNT(*) AS a
                        FROM property_cash_closed
                        WHERE created_date BETWEEN :start_date AND :end_date 
                        AND p_offer = 2
                        AND uploader_id =  :collaborator_id
                        AND del_flg = 0 
                        ";

    $sql = $pdo->prepare($sql_count);
    $sql->bindValue('collaborator_id', $collaborator_id);
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
                        AND uploader_id =  :collaborator_id
                        AND del_flg = 0 
                        ";
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue('collaborator_id', $collaborator_id);
    $sql->bindValue(":start_date", $start_date . ' 00:00:00');
    $sql->bindValue(":end_date", $end_date . ' 23:59:59');
    $sql->execute();
    $sales = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number

}
?>
