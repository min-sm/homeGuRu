<?php include '../../Model/DBConnection.php'; 

session_start();


$_SESSION['convert_amount']=$_POST['convert_amount'];

header('Location:../../View/financial/financial_total_filter.php');
?>


