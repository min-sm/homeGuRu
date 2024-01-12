<?php
session_start();
include "../../Model/DBConnection.php";

if (isset($_POST["login"])) {
    $c_email = $_POST["email"];
    $c_password = $_POST["password"];

    // Step 1: Check email, password, and status
    $sql = $pdo->prepare("SELECT * FROM m_collaborators WHERE gc_email = :email");
    $sql->bindValue(":email", $c_email);
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        if (password_verify($c_password, $result["gc_password"]) && $result["gc_status"] == 2) {
            // Correct credentials and approved status
            $_SESSION["collaboratorId"] = $result["id"];
            header("Location: ../../View/Property/listAllStock.php");
        } else {
            // Incorrect password
            $_SESSION["loginerror"] = "Check your password!";
            header("Location: ../../View/Login/collaborator_login.php");
        }
    } else {
        // Invalid email and password
        $_SESSION["loginerror"] = "Invalid email and password!";
        header("Location: ../../View/Login/collaborator_login.php");
    }
} else {
    header("Location: ../../View/errors/404.php");
}
?>
