<?php
session_start();
include "../../Model/DBConnection.php";

if (isset($_POST["submit"])) {
    // Validate the form data (you may want to add more validation)
    $oldPassword = $_POST['oldword'];
    $newPassword = $_POST['newword'];
    $confirmPassword = $_POST['confirmword'];

    // Check if new password and confirm password match
    if ($newPassword !== $confirmPassword) {
        $_SESSION["passworderror"] = "New password and confirm password do not match.";
        header("Location: ../../../User/View/user/change_password.php");
        exit();
    }

    // Retrieve user information from the database based on the current session
    $userId = $_SESSION["userId"];
    $sql = $pdo->prepare("SELECT gu_password FROM m_users WHERE id = :userId");
    $sql->bindValue(":userId", $userId);
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);

    // Verify old password
    if (!password_verify($oldPassword, $result['gu_password'])) {
        $_SESSION["passworderror"] = "Old password is incorrect.";
        header("Location: ../../View/user/change_password.php");
        exit();
    }

    // Hash and update the new password in the database
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    $updateSql = $pdo->prepare("UPDATE m_users SET gu_password = :hashedPassword WHERE id = :userId");
    $updateSql->bindValue(":hashedPassword", $hashedPassword);
    $updateSql->bindValue(":userId", $userId);
    $updateSql->execute();

    // Redirect to a success page or profile page
   
    header("Location: ../../View/user/password_change_success.php");
    exit();
} else {
    // If the form was not submitted, redirect to a 404 page or appropriate error page
    header("Location: ../View/errors/404.php");
    exit();
}
?>
