<?php
session_start();
include "../Model/DBConnection.php";

if (isset($_POST["submit"])) {
    // Validate the form data (you may want to add more validation)
    $uemail=$_SESSION['uEmail'];
    $newPassword = $_POST['newword'];
    $confirmPassword = $_POST['confirmword'];
    $sql = $pdo->prepare("SELECT * FROM m_users WHERE gu_email = :email");
    $sql->bindValue(":email", $uemail);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    $userIdMain =$result[0]['id'];

    // Check if new password and confirm password match
    if ($newPassword !== $confirmPassword) {
        $_SESSION["passworderror"] = "New password and confirm password do not match.";
        header("Location: ../View/user/change_password.php");
        exit();
    }



  
 
    // Hash and update the new password in the database
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    $updateSql = $pdo->prepare("UPDATE m_users SET gu_password = :hashedPassword WHERE id = :userId");
    $updateSql->bindValue(":hashedPassword", $hashedPassword);
    $updateSql->bindValue(":userId", $userIdMain);
    $updateSql->execute();


    
     header("Location: ../View/user/password_change_success.php");
    exit();
} else {
    // If the form was not submitted, redirect to a 404 page or appropriate error page
    header("Location: ../View/errors/404.php");
    exit();
}
?>
