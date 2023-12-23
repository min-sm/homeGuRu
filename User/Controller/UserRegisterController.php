<?php

session_start();


include "../Model/DBConnection.php";

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["word"];
    $confirmpassword = $_POST["confirmword"];
//Check duplicate record is exist or not
    $sql = $pdo->prepare(
"SELECT * FROM m_users WHERE gu_email =:email"

    );
    $sql ->bindValue(":email",$email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
// check result is exist or not
    if(count($result) == 0){
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
    header("Location: ../View/user/user_login.php");
    } else{
$_SESSION["registererror"] = "Register error";
header("Location: ../View/user/user_register.php");
    }
} 
else {
    header("Location: ../View/errors/404.php");
}
?>
