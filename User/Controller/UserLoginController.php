<?php

session_start();

include "../Model/DBConnection.php";

if (isset($_POST["login"])) {
    $uemail= $_POST["email"];
    $u_password = $_POST["password"];
    // step 1 , check email
$sql = $pdo->prepare(
"SELECT * FROM m_users WHERE gu_email = :email"
);
$sql->bindValue(":email",$uemail);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($result) ==0){
    $_SESSION["loginerror"] = "Email not found in our system!";
    header("Location: ../View/user/user_login.php");
} else {
   // check  for retrieve password and user input password
    if(password_verify($u_password,$result[0]["gu_password"])){
        // correct
        $_SESSION["userId"] = $result[0]["id"] ;
        header("Location: ../View/user/user-profile.php");
    }  else{
        // not correct
        $_SESSION["loginerror"] = "Your password is wrong!";
        header("Location: ../View/user/user_login.php");

    }




}

 
}else {
    header("Location: ../View/errors/404.php");
}
?>
