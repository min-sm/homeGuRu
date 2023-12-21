<?php
include "../Model/DBConnection.php";

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["word"];
    $confirmpassword = $_POST["confirmword"];

    // Compare the password and confirm password
    if ($password !== $confirmpassword) {
        header("Location: ../../../View/errors/404.php");
        exit(); // Stop further execution
    }

    // Passwords match, proceed with database insertion
    $sql = $pdo->prepare(
        "INSERT INTO m_users
        (
            gu_name,
            gu_email,
            gu_password
        )
        VALUES(
            :name,
            :email,
            :password
        )"
    );

    $sql->bindValue("name", $username);
    $sql->bindValue("email", $email);
    $sql->bindValue("password", password_hash($password, PASSWORD_DEFAULT));
    $sql->execute();

    // Redirect to the login page after successful registration
    header("Location: ../View/user/user_login.php");
} 
else {
    header("Location: ../../../View/errors/404.php");
}
?>
