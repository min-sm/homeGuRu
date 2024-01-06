<?php
session_start();
include "../../Model/DBConnection.php";

if (isset($_POST["login"])) {
    $a_email = $_POST["email"];
    $a_password = $_POST["password"];

    // Step 1: Check email, password, and status
    $sql = $pdo->prepare("SELECT * FROM m_admins WHERE ga_email = :email");
    $sql->bindValue(":email", $a_email);
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // Check password and status
        if (password_verify($a_password, $result["ga_password"]) && $result["ga_status"] == 1) {
            // Correct credentials and approved status
            $_SESSION["adminId"] = $result["id"];
            header("Location: ../../View/DashboardView/dashboard.php");
            exit(); // Make sure to exit after redirection
        } else {
            // Incorrect password or inactive account
            $_SESSION["loginerror"] = "Check your password!";
            header("Location: ../../View/admin/admin_login.php");
            exit(); // Make sure to exit after redirection
        }
    } else {
        // Invalid email
        $_SESSION["loginerror"] = "Invalid email and password!";
        header("Location: ../../View/admin/admin_login.php");
        exit(); // Make sure to exit after redirection
    }
} else {
    // Invalid request
    header("Location: ../../View/errors/404.php");
    exit(); // Make sure to exit after redirection
}
?>
