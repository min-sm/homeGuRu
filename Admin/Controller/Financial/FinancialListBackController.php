<?php include '../../Model/DBConnection.php'; ?>

<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['list_tag_value']=$_GET['value'];


 header("Location: ../../View/Financial/financial_list_filter.php");
?>