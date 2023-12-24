<?php
include "../Model/DBConnection.php";

if (isset($_POST["submit"])) {
    $cname         = $_POST["cname"];
    $cemail        = $_POST["cemail"];
    $cphNo         = $_POST["cphNo"];
    $cCompanyName  = $_POST["cCompanyName"];
    $cCompanyId    = $_POST["cCompanyId"];
    $caddress      = $_POST["caddress"];
    $cmessage      = $_POST["cmessage"];

    // Passwords match, proceed with database insertion
    $sql = $pdo->prepare(
        "INSERT INTO m_collaborators
        (
            gc_logo,
            gc_owner_name,
            gc_email,
            gc_phone_num,
            gc_company_name,
            gc_company_id,
            gc_address,
            gc_message
        )
        VALUES(
            :logo,
            :name,
            :email,
            :phone,
            :company_name,
            :company_id,
            :address,
            :message
        )"
    );

    $sql->bindValue(":logo", $clogo);
    $sql->bindValue(":name", $cname);
    $sql->bindValue(":email", $cemail);
    $sql->bindValue(":phone", $cphNo);
    $sql->bindValue(":company_name", $cCompanyName);
    $sql->bindValue(":company_id", $cCompanyId);
    $sql->bindValue(":address", $caddress);
    $sql->bindValue(":message", $cmessage);
    $sql->execute();

    // Redirect to the login page after successful registration
    // header("Location: ../View/collaborator/collaborator_login.php");
} else {
    header("Location: ../../../View/errors/404.php");
}
?>
