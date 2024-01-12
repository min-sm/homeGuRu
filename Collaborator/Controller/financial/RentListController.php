<?php
// Call DB connection
include "../../Model/DBConnection.php";?>


<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>


<?php
$collaborator_id = $_SESSION["collaboratorId"];

$pcode = isset($_GET['p_code'])? $_GET['p_code'] : '';
$limit = 10;//limit of show record per page
$page  = isset($_GET['page'])? $_GET['page'] : 1;//Current page of pagination
$start = ($page -1 ) * $limit;//Start number of record per page

if(!empty($pcode) && isset($_GET['search'])){
    $sql_count = "SELECT 
    COUNT(*) as a
    FROM 
    property_cash_closed 
    WHERE  del_flg = 0
    AND p_offer = 1  AND uploader_id =  :collaborator_id                 
    ";
    $sql_count .= " AND p_code LIKE :code";  
    $sql = $pdo->prepare($sql_count);
    $sql->bindValue("collaborator_id", $collaborator_id);
    $sql->bindValue(':code',  '%'.$pcode.'%'   );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
    $total = $result[0]['a'];// total number of record
    $totalPages = ceil($total/$limit);//no of pages
    
    
    $sql_limit = "SELECT *
    FROM  property_cash_closed
    WHERE del_flg = 0 
    AND p_offer = 1   AND uploader_id =  :collaborator_id   
    ";
    $sql_limit .= "AND p_code LIKE :code";    
    $sql= $pdo->prepare($sql_limit);
    $sql->bindValue("collaborator_id", $collaborator_id);
    $sql->bindValue(':code',  '%'.$pcode.'%'   );
    $sql->execute();
    $rents = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List record Number
    
    
}else{
    $sql_count = "SELECT 
    COUNT(*) as a
    FROM 
    property_cash_closed 
    WHERE  del_flg = 0
    AND p_offer = 1    AND uploader_id =  :collaborator_id               
    ";
    $sql = $pdo->prepare($sql_count);
    $sql->bindValue("collaborator_id", $collaborator_id);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
    $total = $result[0]['a'];// total number of record
    $totalPages = ceil($total/$limit);//no of pages
    
    
    $sql_limit = "SELECT *
    FROM  property_cash_closed
    WHERE del_flg = 0 
    AND p_offer = 1  AND uploader_id =  :collaborator_id   
    ";
    $sql_limit .= "LIMIT :start , :limit";
    $sql= $pdo->prepare($sql_limit);
    $sql->bindValue("collaborator_id", $collaborator_id);
    $sql->bindParam(':start',$start, PDO::PARAM_INT);
    $sql->bindParam(':limit',$limit, PDO::PARAM_INT);
    $sql->execute();
    $rents = $sql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List record Number
    
    
}

?>

