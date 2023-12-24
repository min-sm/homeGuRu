<?php

session_start();

include "../Model/DBConnection.php";

if (isset($_POST["login"])) {
    $uemail= $_POST["email"];
    $u_password = $_POST["password"];
    // step 1 , check email
$sql = $pdo->prepare(
"SELECT * FROM m_collaborators WHERE gc_email = :email"
);
$sql->bindValue(":email",$uemail);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($result) ==0){
    $_SESSION["loginerror"] = "Email not found in our system!";
    header("Location: ../View/collaborator/collaborator_login.php");
} else {
   // check  for retrieve password and user input password
    if(password_verify($u_password,$result[0]["gc_password"])){
        // correct
        $_SESSION["collaboratorId"] = $result[0]["id"] ;
        header("Location: ../View/collaborator/profile.php");
    }  else{
        // not correct
        $_SESSION["loginerror"] = "Your password is wrong!";
        header("Location: ../View/collaborator/collaborator_login.php");
    }
}

}else {
    header("Location: ../View/errors/404.php");
}
?>
