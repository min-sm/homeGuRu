<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../../Model/DBConnection.php"; // Include the file where the database connection is established

// Check if the userID is provided in the URL

    // Retrieve the collaborator ID from the URL parameter
    if (isset($_SESSION["userId"])){
    $user_id =  $_SESSION["userId"]  ;
    // Fetch the collaborator information based on the ID from your database
    $query = "SELECT * FROM m_users WHERE id = :user_id";
    $statement = $pdo->prepare($query);
    if (!$statement) {
        die("Database query failed: " . $pdo->errorInfo()[2]);
    }
    // Bind the parameter and execute the query
    $statement->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $statement->execute();
    // Fetch the user data
    $user = $statement->fetch(PDO::FETCH_ASSOC);
}
    ?>
  
