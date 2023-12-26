<?php

include "../../Model/DBConnection.php";
// Check if form is submitted
if (isset($_POST["addadmin"])) {
    // Get user input
    $email = $_POST["ga_email"];
    $password = $_POST["ga_password"];
    $ga_name = $_POST["ga_name"];
    $ga_nrc = $_POST["ga_nrc"];
    $ga_dob = $_POST["ga_dob"];
    $ga_password = $_POST["ga_password"];
    $ga_gender = $_POST["ga_gender"];
    $ga_phone = $_POST["ga_phone"];
    $ga_address = $_POST["ga_address"];
    $ga_status = 1;
   

    $sql = $pdo->prepare(
        "INSERT INTO m_admins
        (
                ga_name,
                ga_email,
                ga_password,
                ga_dob,
                ga_nrc,
                ga_gender,
                ga_phone_num,
                ga_address,
                ga_status,
                created_date
        VALUES(

                :name,  
                :email,
                :password,
                :dob,
                :nrc,
                :gender,
                :phone,
                :address,
                :status,
                :date
        )"
    );
    $sql->bindValue("name", $name);
    $sql->bindValue("email", $email);
    $sql->bindValue("password", password_hash($ga_password, PASSWORD_DEFAULT));
    $sql->bindValue("dob", $dob);
    $sql->bindValue("nrc", $nrc);
    $sql->bindValue("gender", $gender);
    $sql->bindValue("phone", $phone_num);
    $sql->bindValue("address", $address);
    $sql->bindValue("status", $status);
    $sql->bindValue("date", date("Y/m/d"));
    $sql->bindValue("password", password_hash($password, PASSWORD_DEFAULT));
    $sql->execute();

    // Redirect to the login page after successful registration
    header("Location:  ../../.././../View/errors/404.php");

}
?>
