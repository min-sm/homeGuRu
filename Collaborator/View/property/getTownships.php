<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>


<?php 
if (!isset($_SESSION["collaboratorId"])) {
    header('Location: ../../View/errors/wrongPath.php');
    exit();
};
?>
<?php
include_once "../../Model/DBConnection.php";

if (isset($_GET['region_id'])) {
    $region_id = $_GET['region_id'];

    $townships_query = "SELECT * FROM m_townships WHERE region_id = :region_id";
    $townships_sql = $pdo->prepare($townships_query);
    $townships_sql->bindValue('region_id', $region_id);
    $townships_sql->execute();
    $townships_result = $townships_sql->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($townships_result);
} else {
    // Handle error if region_id is not set
    echo json_encode(array('error' => 'Region ID is missing'));
}
?>
