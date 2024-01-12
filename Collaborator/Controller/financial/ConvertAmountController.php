<?php
// Call DB connection
include "../../Model/DBConnection.php";?>


<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>


<?php

$converted = isset($_POST['convert_amount'])?$_POST['convert_amount']: 2700 ;
$_SESSION['convert_amount'] = $converted;

header('Location:../../View/financial/financial_total_filter.php');
?>


