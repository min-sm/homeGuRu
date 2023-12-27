<?php

include "../../Model/DBConnection.php";
// Check if form is submitted
if (isset($_POST["addadmin"])) {
    $photo = $_FILES["ga_photo"]["name"];
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
            ga_photo,
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
            :photo,
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
    $sql->bindValue("photo", $photo);
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
    
    // Get the last inserted ID
    $adminId = $pdo->lastInsertId();

    // Create folder for admin if it doesn't exist
    $adminFolder = "../../../Storage/admin_img/ga{$adminId}";
   
    if (!file_exists($adminFolder)) {
        mkdir($adminFolder, 0777, true);
    }

    // Upload photo to the admin's folder
    $uploadDir = $adminFolder . '/';
    $uploadFile = $uploadDir . basename($_FILES['ga_photo']['name']);

    if (move_uploaded_file($_FILES['ga_photo']['tmp_name'], $uploadFile)) {
        echo "Photo has been uploaded successfully.";
    } else {
        echo "Failed to upload photo.";
    }


    // Redirect to the login page after successful registration
    header("Location:  ../../.././../View/errors/404.php");

}
?>
