<?php
include "../Model/DBConnection.php";
if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["word"];
    $confirmpassword = $_POST["confirmword"];
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
    $sql->bindValue("password", $password);
    $sql->execute();
    header("Location: ../../../View/user/user_login.php");
} else {
    header("Location: ../../../View/errors/404.php");
}
