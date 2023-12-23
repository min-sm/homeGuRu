<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Replace this with your actual authentication logic
    // For simplicity, I'll just check if the email and password match a predefined admin credentials
    $adminEmail = "homeguru123@example.com";
    $adminPassword = "admin123";

    if ($email === $adminEmail && $password === $adminPassword) {
        // Authentication successful, redirect to the login page
        header("Location: ../../../Dashboard View/dashboard.php");
        exit();
    } else {
        // Authentication failed, redirect back to the login page with an error message
        header("Location: ../../admin login.php");
        exit();
    }
} else {
    // Redirect to the login page if accessed directly without submitting the form
    header("Location: ../../404.php");
    exit();
}
?>
