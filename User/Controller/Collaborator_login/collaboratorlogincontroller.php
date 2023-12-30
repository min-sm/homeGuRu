<?php
session_start();

// Check if the form is submitted
if (isset($_POST['login'])) {
    // Retrieve email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the email and password (you should implement your validation)

    // Authenticate the user (you should implement your authentication logic)

    // Assuming you have a database connection
    $dbHost = "your_database_host";
    $dbUser = "your_database_user";
    $dbPassword = "your_database_password";
    $dbName = "your_database_name";

    $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Sanitize input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Check if the collaborator exists with the given email and gc_status = 2
    $query = "SELECT * FROM m_collaborators WHERE email = '$email' AND gc_status = 2";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Collaborator with approved status found, perform login
        $_SESSION['collaborator_email'] = $email;
        // Redirect to the collaborator's dashboard or any other page
        header("Location: collaborator_dashboard.php");
        exit();
    } else {
        // Collaborator not found or not approved
        $_SESSION['loginerror'] = "Invalid login credentials or pending approval.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
