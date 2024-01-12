

<?php
// Call DB connection
include "../../Model/DBConnection.php";?>


<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>


<?php
$current_collaborator = $_SESSION["collaboratorId"];
$query = "SELECT * FROM m_collaborators WHERE del_flg = 0 AND id = :id";
$sql = $pdo->prepare($query);
$sql->bindValue(":id", $current_collaborator);
$sql->execute();
$curr_collab_detail = $sql->fetch(PDO::FETCH_ASSOC);

?>