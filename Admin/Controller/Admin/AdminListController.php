<?php
// Call DB connection
include "../../Model/DBConnection.php";

$ga_id = isset($_GET['ga_id'])? $_GET['ga_id'] : '';
$id = filter_var($ga_id, FILTER_SANITIZE_NUMBER_INT);
$limit = 10;//limit of show record per page
$page  = isset($_GET['page'])? $_GET['page'] : 1;//Current page of pagination
$start = ($page -1 ) * $limit;//Start number of record per page
echo $id;
if(!empty($ga_id) && isset($_GET['search'])){
    $sql_count = "SELECT COUNT(*) AS a
                        FROM m_admins
                        WHERE del_flg = 0
                        AND id= :id    
                        ";
    $sql = $pdo->prepare($sql_count);
    $sql->bindParam(':id',$id);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
    $total = $result[0]['a'];// total number of record
    $totalPages = ceil($total/$limit);//no of pages


    $sql_limit ="SELECT *
                        FROM m_admins
                        WHERE del_flg = 0
                        AND id= :id 
                        ORDER BY ga_status ASC
                        ";
    $sql_limit .= "LIMIT :start , :limit";    
    $sql = $pdo->prepare($sql_limit);
    $sql->bindParam(':id',$id);
    $sql->bindParam(':start',$start, PDO::PARAM_INT);
    $sql->bindParam(':limit',$limit, PDO::PARAM_INT);
    $sql->execute();
    $admins = $sql->fetchAll(PDO::FETCH_ASSOC);


}else{
    $sql_count = " SELECT COUNT(*) AS a
                        FROM m_admins
                        WHERE del_flg = 0 
                        ";
    $sql = $pdo->prepare($sql_count);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
    $total = $result[0]['a'];// total number of record
    $totalPages = ceil($total/$limit);//no of pages


    $sql_limit = "SELECT *
                        FROM m_admins
                        WHERE del_flg = 0
                        ORDER BY ga_status ASC
                        ";
    $sql_limit .= "LIMIT :start , :limit";
    $sql= $pdo->prepare($sql_limit);
    $sql->bindParam(':start',$start, PDO::PARAM_INT);
    $sql->bindParam(':limit',$limit, PDO::PARAM_INT);
    $sql->execute();
    $admins = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>