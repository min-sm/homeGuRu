<?php
session_start();


if (isset($_POST['submit'])) {
    $region = $_POST['location'];
    $type = $_POST['type'];
    $price_range=explode(',',$_POST['price']);
    $price_unit=$price_range[0];
    $minimum_price=$price_range[1];
    $maximum_price=$price_range[2];
 

  
header('Location: ' . '../../View/property_post/search.php');
   

}

$_SESSION['region']=$region;
$_SESSION['type']=$type;
$_SESSION['price_unit']=$price_unit;
$_SESSION['minimum_price']=$minimum_price;
$_SESSION['maximum_price']=$maximum_price;

?>
