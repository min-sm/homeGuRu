
<?php
 include '../../Model/DBConnection.php';


if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql= $pdo->prepare("SELECT * FROM m_collaborators WHERE gc_status=2 AND del_flg=0 AND id = :id ");
    $sql->bindValue("id",$id);
    $sql->execute();
    $collaborator = $sql->fetchAll(PDO::FETCH_ASSOC);
    if(count($collaborator)!=0){
        $collaboratorOne = $collaborator;
    }else{
        // redirect to error page
        header("Location: ../../View/errors/404.php");
    }
}else{
    header("Location: ../../View/errors/404.php");

}
