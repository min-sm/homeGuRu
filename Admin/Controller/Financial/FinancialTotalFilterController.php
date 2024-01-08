<?php include '../../Model/DBConnection.php'; ?>
<?php session_start(); ?>

<?php
$dollar = 900;

if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
    $start_date = $_GET['start_date'];
    $end_date = $_GET['end_date'];
} else {
    $start_date = date('Y-m-') . "01";
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



//rent total
$sql_rent = "SELECT p_cash_amount AS amount,
  p_cash_unit AS unit,
  created_date
  FROM property_cash_closed
  WHERE created_date BETWEEN :start_date AND :end_date 
  AND p_offer = 1
  AND uploader_id = 0 
  AND del_flg = 0 
  ";
$sql = $pdo->prepare($sql_rent);
$sql->bindValue("start_date", $start_date . ' 00:00:00');
$sql->bindValue("end_date", $end_date . ' 23:59:59');
$sql->execute();
$rentData = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List  Number
$totalrent = count($rentData);


//sale total
$sql_sale = "SELECT  p_cash_amount AS amount,
      p_cash_unit AS unit,
      created_date
  FROM property_cash_closed
  WHERE created_date BETWEEN :start_date AND :end_date 
  AND p_offer = 2
  AND uploader_id = 0 
  AND del_flg = 0 
  ";
$sql = $pdo->prepare($sql_sale);
$sql->bindValue("start_date", $start_date . ' 00:00:00');
$sql->bindValue("end_date", $end_date . ' 23:59:59');
$sql->execute();
$saleData = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List  Number
$totalsale = count($saleData);


$sql_limit = "SELECT ccash_amt AS amount,
  ccash_unit AS unit,
  created_date
  FROM collaborator_cash_closed 
  WHERE created_date BETWEEN :start_date AND :end_date 
  AND del_flg = 0 
  ";
$sql = $pdo->prepare($sql_limit);
$sql->bindValue(":start_date", $start_date . ' 00:00:00');
$sql->bindValue(":end_date", $end_date . ' 23:59:59');
$sql->execute();
$collaboratorData = $sql->fetchAll(PDO::FETCH_ASSOC); //Fetch total List record Number
$totalcollaborator = count($collaboratorData);

if (isset($_GET['search']) && isset($_GET['duration'])) {

    $duration =  $_GET['duration'];
    $_SESSION['duration'] = $duration;
    echo $duration;
    if ($duration == 1) {
        $CashTotal = [];
        // Initialize an empty array to store daily totals
        $RentCashTotal =  Daily($rentData, $CashTotal);
        $SaleCashTotal =  Daily($saleData, $CashTotal);
        $CollaboratorCashTotal =  Daily($collaboratorData, $CashTotal);
    }else if ($duration == 2) {
        $CashTotal = [];
        // Initialize an empty array to store monthly totals
        $RentCashTotal =  Monthly($rentData, $CashTotal);
        $SaleCashTotal =  Monthly($saleData, $CashTotal);
        $CollaboratorCashTotal =  Monthly($collaboratorData, $CashTotal);
    }else if($duration == 3){
        $CashTotal = [];
        // Initialize an empty array to store yearly totals
        $RentCashTotal =  Yearly($rentData, $CashTotal);
        $SaleCashTotal =  Yearly($saleData, $CashTotal);
        $CollaboratorCashTotal =  Yearly($collaboratorData, $CashTotal);
    }
} else {
    $CashTotal = [];
    // Initialize an empty array to store daily totals
    $RentCashTotal =  Daily($rentData, $CashTotal);
    $SaleCashTotal =  Daily($saleData, $CashTotal);
    $CollaboratorCashTotal =  Daily($collaboratorData, $CashTotal);

}

function Daily($data, $DailyCashTotal)
{
    global $dollar;

    // Loop through the data array to calculate daily cash totals
    foreach ($data as $record) {

        $date = substr($record['created_date'], 0, 10); // Extracting YYYY-MM-DD from the datetime
        if (!isset($DailyCashTotal[$date])) {
            $DailyCashTotal[$date] = 0; // Initialize daily total to 0 if not set
        }
        $record['unit'] == 2
            ?  $DailyCashTotal[$date] += $record['amount']
            :  $DailyCashTotal[$date] += ($record['amount'] * $dollar);
    }
    return $DailyCashTotal;
}


function Monthly($data, $MonthlyCashTotal)
{
    global $dollar;
    // Loop through the data array to calculate daily cash totals
    foreach ($data as $record) {

        $durationDate = substr($record['created_date'], 0, 7); // Extracting YYYY-MM-DD from the datetime
        if (!isset($MonthlyCashTotal[$durationDate])) {
            $MonthlyCashTotal[$durationDate] = 0; // Initialize daily total to 0 if not set
        }
        $record['unit'] == 2
            ?  $MonthlyCashTotal[$durationDate] += $record['amount']
            :  $MonthlyCashTotal[$durationDate] += ($record['amount'] * $dollar);
    }
    return $MonthlyCashTotal;
}


function Yearly($data, $YearlyCashTotal)
{
    global $dollar;
    // Loop through the data array to calculate daily cash totals
    foreach ($data as $record) {

        $durationDate = substr($record['created_date'], 0, 4); // Extracting YYYY-MM-DD from the datetime
        if (!isset($YearlyCashTotal[$durationDate])) {
            $YearlyCashTotal[$durationDate] = 0; // Initialize daily total to 0 if not set
        }
        $record['unit'] == 2
            ?  $YearlyCashTotal[$durationDate] += $record['amount']
            :  $YearlyCashTotal[$durationDate] += ($record['amount'] * $dollar);
    }
    return $YearlyCashTotal;
}




?>