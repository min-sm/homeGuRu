<?php

include "../Model/DBConnection.php";
$gu_token = $_GET["token"];
$sql = $pdo->prepare(
    "SELECT * FROM m_users WHERE gu_token = :token"
);
$sql->bindValue(":token",$gu_token);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($result) !=0){
$id = $result[0]["id"];
$sql = $pdo->prepare(
    "UPDATE m_users SET
    gu_verify =1
    WHERE id = :id
    "
);
$sql->bindValue(":id" , $id);
$sql->execute();
header("Location: ../../User/View/user/user_login.php"); 

}else{
echo "Token key is wrong";
}
?>