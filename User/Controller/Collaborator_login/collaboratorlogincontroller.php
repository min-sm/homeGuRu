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

    if (!$result) {
        $_SESSION["loginerror"] = "Invalid email or password!";
        header("Location: ../../View/collaborator/collaborator_login.php");
    } else {
        // Check password and status
        if (password_verify($c_password, $result["gc_password"]) && $result["gc_status"] == 2) {
            // Correct
            $_SESSION["collaboratorId"] = $result["id"];
            header("Location: ../../collaborator/collaborator_register_success.php");
        } else {
            // Incorrect password or status
            $_SESSION["loginerror"] = "Invalid email or password or pending approval!";
            header("Location: ../View/collaborator/collaborator_login.php");
        }
    }
} else {
    header("Location: ../View/errors/404.php");
}
?>
