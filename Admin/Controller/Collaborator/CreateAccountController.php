<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


?>

<?php
include '../../Model/DBConnection.php';

if(isset($_POST['create_collaborator_account'])){
$id = $_POST['gc_id'];
$cemail = $_POST['gc_email'];
$cpassword = $_POST['gc_password'];
$valid = 0;

$_SESSION["email"] = $cemail;
$_SESSION["password"] = $cpassword;


$sql = $pdo->prepare(
    "SELECT * 
    FROM m_collaborators 
    WHERE id = :id 
    AND gc_email = :email 
    AND gc_status = 1 "
    );
    $sql->bindValue(":id",$id);
    $sql->bindValue(":email",$cemail);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    // Validate email format
    if (!filter_var($cemail, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["emailerror"] = " Invalid email format and Registration Email Not Match in our system!";
        $valid = 1;
        header("Location: ../../View/Collaborator/create_account_collaborator.php?id=" . $id);
    }else if(count($result) == 0){
        $_SESSION["emailerror"] = "  Registration Email Not Match in our system!";
        $valid = 1;
        header("Location: ../../View/Collaborator/create_account_collaborator.php?id=" . $id);
    }
    // Check password length
     if ((strlen($cpassword) < 8)) {
        $_SESSION["passworderror"] = "Password must be at least 8 characters long";
        $valid = 1;
        header("Location: ../../View/Collaborator/create_account_collaborator.php?id=" . $id);
    }
    // Check password complexity
    else if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[\w!@#$%^&*]{8,}$/', $cpassword)) {
        $_SESSION["passworderror"] .= "Password must include of the following character types: uppercase letters (A-Z), lowercase letters (a-z), digits (0-9), and special characters (!@#$%^&*)";
        $valid = 1;
        header("Location: ../../View/Collaborator/create_account_collaborator.php?id=" . $id);
       
    }

    if($valid == 0){
    // check gc_code is exist or not
    $sql = $pdo->prepare(
        "SELECT * FROM m_collaborators "
    );
    $sql->execute();
    $cnumber = $sql->fetchAll(PDO::FETCH_ASSOC);
    if (count($cnumber) == 0) {
        $newCode = 101;
    } else {

        $sql = $pdo->prepare(
            "SELECT MAX(gc_code) AS MAX_CODE  FROM m_collaborators
            "
        );
        $sql->execute();
        $lastCode = $sql->fetchAll(PDO::FETCH_ASSOC);
        $newCode =  $lastCode[0]["MAX_CODE"] + 1;
    }

    $sql = $pdo->prepare( 
        "UPDATE m_collaborators 
    SET
    gc_status = 2,
    gc_code = :ccode,
    gc_password = :cpassword,
    updated_date = :cdate
    WHERE id = :id
    AND gc_status = 1
    ");
    $sql->bindValue("id",$id);
    $sql->bindValue("ccode",$newCode);
    $sql->bindValue("cpassword", password_hash($cpassword, PASSWORD_DEFAULT));
    $sql->bindValue("cdate", date("Y-m-d H:i:s"));
    $sql->execute();
    $result =  $sql->fetchAll(PDO::FETCH_ASSOC);
     header("Location: ../../View/Collaborator/collaborator_pending_list.php");
    }

}else{
    header("Location: ../../View/errors/404.php");

}





?>