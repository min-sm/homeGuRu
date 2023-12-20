<?php
include "../Model/DBConnection.php";

if(isset($_POST["register"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    $sql = $pdo->prepare(
        "INSERT INTO m_users
    (
          gu_name,
          gu_email,
          gu_password,
          created_date
        )
    VALUES(
          :name,
          :email,
          :password,
          :date
    )
"
    );
    $sql->bindValue("gu_name", $username);
    $sql->bindValue("gu_email", $email);
    $sql->bindValue("gu_password", $password);
    $sql->bindValue("date", date("Y/m/d"));
    $sql->execute();

    header("Location: ../../../View/user/user_login.php");


} else{
    header("Location: ../../../View/errors/404.php");
}


?>
