<?php include '../../Model/DBConnection.php'; 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}



$_SESSION['convert_amount']=$_POST['convert_amount'];

header('Location:../../View/financial/financial_total_filter.php');
?>


