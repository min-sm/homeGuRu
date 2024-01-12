<?php
session_start(); // Start the session

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other page after logout
header("Location: ../../View/login/admin_login.php"); // Change 'login.php' to the page where you want to redirect after logout
exit();
?>