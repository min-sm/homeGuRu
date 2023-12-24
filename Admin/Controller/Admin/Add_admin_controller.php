<?php
session_start();
include "../../Model/DBConnection.php";
// Check if form is submitted
if (isset($_POST["createadmin"])) {
    $fullname = $_POST["ga_name"];
    $password = $_POST["password"];
    $address = $_POST["ga_address"];
    $nrc = $_POST["ga_nrc"];
    $dob = $_POST["ga_dob"];
    $email = $_POST["ga_email"];
    $phone= $_POST["ga_phone"];
    $gender = $_POST["gender"];
    $ga_status =1;


// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["registererror"] = "Invalid email format";
    header("Location: ../View/admin/admin_add.php");
    exit(); // Stop further execution
}

// Check duplicate record is exist or not
$sql = $pdo->prepare("SELECT * FROM m_admins WHERE ga_email = :email");
$sql->bindValue(":email", $email);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

    // Check if the result is empty
    if (count($result) == 0) {
        $sql = $pdo->prepare(
            "INSERT INTO m_admins
            (
                ga_name,
                ga_address,
                ga_nrc,
                ga_dob,
                gu_email,
                ga_phone_num,
                ga_gender,
                gu_password
            )
            VALUES(
                :name,
                :address,
                :nrc,
                :date,
                :email,
                :phone number,
                gender,
                password
            )"
        );
        $sql->bindValue(":name", $fullname);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":address", $address);
        $sql->bindValue(":nrc", $nrc);
        $sql->bindValue(":phone number", $phone);
        $sql->bindValue(":date", $dob);
        $sql->bindValue(":gender", $gender);
        $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
        $sql->execute();
        header("Location: ../View/admin/admin_login.php");
    } else {
        $_SESSION["createadminerror"] = "Your email is already in our system";
        header("Location: ../View/admin/admin_add.php");
    }
} else {
    header("Location: ../View/errors/404.php");
}
?>
