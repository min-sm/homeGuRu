<?php

include "../../Model/DBConnection.php";
// Check if form is submitted
if (isset($_POST["login"])) {
    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];
    $adminEmail = "homeguru123@example.com";
    $adminPassword = "admin123";

    if ($email === $adminEmail && $password === $adminPassword) {
        // Authentication successful, redirect to the login page
        header("Location: ../../../../View/Dashboard View/dashboard.php");
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

    // Redirect to the login page after successful registration
    header("Location:  ../../.././../View/errors/404.php");

}
?>
