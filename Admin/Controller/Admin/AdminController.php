<?php
 session_start();
include "../../Model/DBConnection.php";

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Step 1: Check email, password, and status
    $sql = $pdo->prepare("SELECT * FROM m_admins WHERE ga_email = :email AND del_flg = 0 ");
    $sql->bindValue(":email", $email);
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // Check password and status
        if (password_verify($password, $result["ga_password"]) ) {
            // Correct credentials and approved status
            $_SESSION["adminId"] = $result["id"];
            $_SESSION['authority']=$result['ga_status'];
            header("Location: ../../View/DashboardView/dashboard.php");
            exit(); // Make sure to exit after redirection
        } else {
            // Incorrect password or inactive account
            $_SESSION["loginerror"] = "Check your password!";
            header("Location: ../../View/login/admin_login.php");
            exit(); // Make sure to exit after redirection
        }
    } else {
        // Invalid email
        $_SESSION["loginerror"] = "Invalid email and password!";
        header("Location: ../../View/login/admin_login.php");
        exit(); // Make sure to exit after redirection
    }
} else {
    // Invalid request
    header("Location: ../../View/errors/404.php");
    exit(); // Make sure to exit after redirection
}
?>
