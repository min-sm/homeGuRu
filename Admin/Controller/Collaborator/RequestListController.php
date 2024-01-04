<?php
// Call DB connection
include "../../Model/DBConnection.php";

$ccompany_name = isset($_GET['gc_name'])? $_GET['gc_name'] : '';
$limit = 10;//limit of show record per page
$page  = isset($_GET['page'])? $_GET['page'] : 1;//Current page of pagination
$start = ($page -1 ) * $limit;//Start number of record per page

if(!empty($ccompany_name) && isset($_GET['search'])){
    $sql_count = "SELECT 
    COUNT(*) as a
    FROM 
    m_collaborators
    WHERE  gc_status = 0 AND del_flg = 0               
    ";
    $sql_count .= " AND gc_company_name LIKE :ccompany_name";  
    $sql = $pdo->prepare($sql_count);
    $sql->bindValue('ccompany_name',  $ccompany_name.'%'   );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
    $total = $result[0]['a'];// total number of record
    $totalPages = ceil($total/$limit);//no of pages


$sql_limit = "SELECT *
    FROM  m_collaborators
    WHERE  gc_status = 0 AND del_flg = 0
    ";
    $sql_limit .= " AND gc_company_name LIKE :ccompany_name";  
    $sql = $pdo->prepare($sql_limit);
    $sql->bindValue('ccompany_name',  $ccompany_name.'%'   );
    $sql->execute();
    $collaboratorRequests = $sql->fetchAll(PDO::FETCH_ASSOC);


}else{
$sql_count = "SELECT 
    COUNT(*) as a
    FROM 
    m_collaborators
    WHERE  gc_status = 0 AND del_flg = 0               
    ";
    $sql = $pdo->prepare($sql_count);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
    $total = $result[0]['a'];// total number of record
    $totalPages = ceil($total/$limit);//no of pages


$sql_limit = "SELECT *
    FROM  m_collaborators
    WHERE  gc_status = 0 AND del_flg = 0
    ";
    $sql_limit .= "LIMIT :start , :limit";
    $sql= $pdo->prepare($sql_limit);
    $sql->bindParam(':start',$start, PDO::PARAM_INT);
    $sql->bindParam(':limit',$limit, PDO::PARAM_INT);
    $sql->execute();
    $collaboratorRequests = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>