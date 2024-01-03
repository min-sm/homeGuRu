<?php include "../../Model/DBConnection.php";?>


<?php
if (isset($_GET['id'])) {

    $id = $_GET["id"];
    $sql = $pdo->prepare("SELECT *  FROM m_collaborators  WHERE id = :id AND del_flg = 0 AND gc_status = 2 ");
    $sql->bindValue("id", $id);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) != 0) {
        $activity = $result[0]['gc_activity_ban'];
        $activity_ban = $result[0]['gc_activity_ban'] == 0 ? 1 : 0;
        $sql = $pdo->prepare(
            "UPDATE m_collaborators 
                SET gc_activity_ban = :activity
                WHERE id = :id
                AND del_flg = 0
                AND gc_status =2
            "
        );
        $sql->bindValue("id", $id);
        $sql->bindValue("activity", $activity_ban);
        $sql->execute();

        header("Location: ../../View/Collaborator/collaborator_detail_preview.php?id=" . $id);
    } else {
        // redirect to error page
        header("Location: ../../View/errors/404.php");
    }
} else {
    // redirect to error page
    header("Location: ../../View/errors/404.php");
}
