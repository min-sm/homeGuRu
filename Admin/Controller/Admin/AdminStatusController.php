
<?php include "../../Model/DBConnection.php";?>


<?php
if (isset($_GET['id'])) {

    $id = $_GET["id"];
    $sql = $pdo->prepare(   "SELECT *  
                                    FROM m_admins  
                                    WHERE id = :id 
                                    AND del_flg = 0 
                                    ");
    $sql->bindValue("id", $id);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) != 0) {
        $activity = $result[0]['ga_status'];
        $activity_status = $result[0]['ga_status'] == 0 ? 1 : 0;
        $sql = $pdo->prepare(   "UPDATE m_admins
                                        SET ga_status = :ga_status 
                                        WHERE id = :id
                                        AND del_flg = 0
                                        ");
        $sql->bindValue("id", $id);
        $sql->bindValue("ga_status",  $activity_status);
        $sql->execute();

        header("Location: ../../View/admin/admin_detail.php?id=" . $id);
    } else {
        // redirect to error page
        header("Location: ../../View/errors/404.php");
    }
} else {
    // redirect to error page
    header("Location: ../../View/errors/404.php");
}
