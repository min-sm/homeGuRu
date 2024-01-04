<?php
include "../Model/DBConnection.php";

if(isset($_POST['submit'])){
 
$name=$_POST['name'];
$email=$_POST['email'];
$phone= $_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$note=$_POST['note'];
$post_id=$_POST['post_id'];


$query="INSERT INTO interest_list_form (ilf_name, ilf_email, ilf_phone_num,ilf_appointment_date,ilf_appointment_datetime,ilf_note,p_id)
VALUES (
 :name,
 :email , 
:phone,
:date,
:time,
:note, 
:post_id);";
$sql= $pdo->prepare($query);
$sql->bindValue(':name',$name);
$sql->bindValue(':email',$email);
$sql->bindValue(':phone',$phone);
$sql->bindValue(':date',$date);
$sql->bindValue(':time',$time);
$sql->bindValue(':note',$note);
$sql->bindValue(':post_id',$post_id);
$sql->execute();
ini_set('display_errors', 1);

header('Location: ' . '../PropertyPost/detail_post.php');
}else{

}

?>
