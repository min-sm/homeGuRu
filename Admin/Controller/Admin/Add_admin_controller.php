<?php

include "../../Model/DBConnection.php";
// Check if form is submitted
if (isset($_POST["addadmin"])) {
    $email = $_POST["ga_email"];
    $password = $_POST["ga_password"];
    $name = $_POST["ga_name"];
    $nrc = $_POST["ga_nrc"];
    $dob = $_POST["ga_dob"];
    $password = $_POST["ga_password"];
    $gender = $_POST["ga_gender"];
    $phone = $_POST["ga_phone"];
    $address = $_POST["ga_address"];
    $status = 1; 

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
        ) VALUES (
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
    $sql->bindValue("password", password_hash($password, PASSWORD_DEFAULT));
    $sql->bindValue("dob", $dob);
    $sql->bindValue("nrc", $nrc);
    $sql->bindValue("gender", $gender);
    $sql->bindValue("phone", $phone);
    $sql->bindValue("address", $address);
    $sql->bindValue("status", $status);
    $sql->bindValue("date", date("Y/m/d"));
    $sql->execute();

    // Redirect to the login page after successful registration
    header("Location:  ../../.././../View/errors/404.php");

}
?>
