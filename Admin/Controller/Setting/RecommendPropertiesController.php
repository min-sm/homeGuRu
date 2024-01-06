<?php 
include "../../Model/DBConnection.php";



// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Loop through the posted values based on the counter
    $counter = 1;
    while (isset($_POST["recommend_$counter"])) {
        $propertyCode = $_POST["recommend_$counter"];

        // Assuming you have a database connection, update guru_recommendation table
        $query = "UPDATE guru_recommendation SET property_code = :propertyCode WHERE id = :counter";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':propertyCode', $propertyCode);
        $stmt->bindValue(':counter', $counter);
        $stmt->execute();

        // Increment the counter
        $counter++;
    }
    header("Location: ../../View/setting/recommendedProperties.php");
}
?>


