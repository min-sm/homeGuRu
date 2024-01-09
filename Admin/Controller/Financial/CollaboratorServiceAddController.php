<?php
// Call DB connection
include "../../Model/DBConnection.php";


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
?>



<?php
// check wrong access
if (isset($_POST["cash_closed"])) {
    $gcId = $_POST["collaboratorSelect"];
    $duration = $_POST["durationSelect"];
    $package = $_POST["packageSelect"];
    $amount = $_POST["amount"];
    $unit = $_POST["unit"];
    $payer = $_POST["payer_name"];
    $phone = $_POST["phone"];
    $recipient = $_POST["recipient_name"];
    //To get the already Expire date
    $sql = $pdo->prepare(
        "SELECT s_expire_date FROM collaborator_cash_closed WHERE gc_id = :id ORDER BY id DESC LIMIT 1"
    );
    $sql->bindValue('id',$gcId);
    $sql->execute();
    $result_expire_date = $sql->fetchAll(PDO::FETCH_ASSOC);
    $exit_date = count($result_expire_date) == 0 ? 0 : $result_expire_date[0]['s_expire_date'];
    $expire_date = $exit_date == 0 ? new DateTime() : new DateTime($exit_date);
    
    $currentDate = new DateTime();
    $interval = $currentDate->diff($expire_date);
    if ($currentDate < $expire_date) {
      $currentDate = $expire_date;
    }
    switch($duration){
        case '1':  $currentDate->modify('+6 months');// Add duration to the current date
            break;
        case '2':  $currentDate->modify('+1 year');// Add duration to the current date
            break;
        case '3':  $currentDate->modify('+2 year');// Add duration to the current date
            break;
        
    }
    $newDate = $currentDate->format('Y-m-d');


       // prepare sql statement to insert the new collaborator cash closed
       $sql = $pdo->prepare(
        "INSERT INTO collaborator_cash_closed
    (   
        gc_id,
        sduration_id,
        spackage_id,
        ccash_amt,
        ccash_unit,
        ccash_payer_name,
        ccash_phone,
        ccash_recipient_name,
        s_expire_date
    )
    VALUES
    (   :gc_id,
        :duration,
        :package,
        :amount,
        :unit,
        :payer,
        :phone,
        :recipient,
        :expire_date

    )  
    "
    );
    // bind value 
    $sql->bindValue("gc_id", $gcId);
    $sql->bindValue("duration", $duration);
    $sql->bindValue("package", $package);
    $sql->bindValue("amount", $amount);
    $sql->bindValue("unit", $unit);
    $sql->bindValue("payer", $payer);
    $sql->bindValue("phone", $phone);
    $sql->bindValue("recipient", $recipient);
    $sql->bindValue("expire_date", $newDate);

    // run sql statement
    $sql->execute();


     // redirect to error page
 header("Location: ../../View/Financial/financial_collaborator_list.php");



}else{
 // redirect to error page
 header("Location: ../View/errors/404.php");
}

 ?>