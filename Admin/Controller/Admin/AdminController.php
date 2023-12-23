<?php

include "../../Model/DBConnection.php";
// Check if form is submitted
if (isset($_POST["login"])) {
    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Invalid email format, redirect to error page
        header("Location: ../../../../../Admin/View/errors/404.php");
        exit();
    }

    $sql = $pdo->prepare(
        "INSERT INTO m_admins
        (
            
            ga_email,
            ga_password
        )
        VALUES(
            :email,
            :password
        )"
    );
    $sql->bindValue("email", $email);
    $sql->bindValue("password", password_hash($password, PASSWORD_DEFAULT));
    $sql->execute();
    header("Location: ../View/Dashboard_View/dashboard.php");
   
    header("Location:  ../../View/errors/404.php");

}
?>
