<?php

include '../../Model/DBConnection.php';
if (isset($_POST['submit'])) {
   $companyName = isset($_POST['company_name']) ? $_POST['company_name'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $mapLink = isset($_POST['map_link']) ? $_POST['map_link'] : '';
    $slogan = isset($_POST['solgan']) ? $_POST['solgan'] : '';
    $viberLink = isset($_POST['viber_link']) ? $_POST['viber_link'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phoneNumber1 = isset($_POST['phone_1']) ? $_POST['phone_1'] : '';
    $phoneNumber2 = isset($_POST['phone_2']) ? $_POST['phone_2'] : '';
    $fbLink = isset($_POST['fb_link']) ? $_POST['fb_link'] : '';
    $telegramLink = isset($_POST['tg_link']) ? $_POST['tg_link'] : '';

    // Update the guru_data table
$sql = "UPDATE guru_data SET
gd_company_name = :companyName,
gd_address = :address,
gd_maplink = :mapLink,
gd_solgan = :slogan,
gd_viber = :viberLink,
gd_email = :email,
gd_phone_num = :phoneNumber1,
gd_phone_2 = :phoneNumber2,
gd_facebook = :fbLink,
gd_telegram = :telegramLink
WHERE id = 1";

// Prepare the SQL statement
$stmt = $pdo->prepare($sql);

// Bind parameters
$stmt->bindValue(':companyName', $companyName);
$stmt->bindValue(':address', $address);
$stmt->bindValue(':mapLink', $mapLink);
$stmt->bindValue(':slogan', $slogan);
$stmt->bindValue(':viberLink', $viberLink);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':phoneNumber1', $phoneNumber1);
$stmt->bindValue(':phoneNumber2', $phoneNumber2);
$stmt->bindValue(':fbLink', $fbLink);
$stmt->bindValue(':telegramLink', $telegramLink);

// Execute the statement
$stmt->execute();

header("Location: ../../View/setting/generals.php");
    
 
}else{

}
?>
