<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include "../Model/DBConnection.php";

// Check if form is submitted
if (isset($_POST["save"])) {
    $photo = $_FILES["gu_photo"];
    // Check if a file is selected
    if ($photo["error"] == UPLOAD_ERR_OK) {
        // Get the file extension
        $fileExtension = strtolower(pathinfo($photo["name"], PATHINFO_EXTENSION));
        // Allowed file formats
        $allowedFormats = ["jpg", "jpeg", "png", "gif"];

        // Check if the file format is allowed
        if (in_array($fileExtension, $allowedFormats)) {
            // Check if the file size is within a specified limit (e.g., 2 MB)
            $maxFileSize = 2 * 1024 * 1024; // 2 MB in bytes
            $photoSize = $photo["size"];
            if ($photoSize <= $maxFileSize) {
                // Get the last inserted ID
                $userId = $_SESSION["userId"]; // Assuming you have stored user ID in the session
                echo $userId;
                // Create folder for user if it doesn't exist
                $userFolder = "../../Storage/userProfile/gu". $userId;

                if (!file_exists($userFolder)) {
                    mkdir($userFolder, 0777, true);
                }

                // Upload photo to the user's folder
                $uploadDir = $userFolder . '/';
                $uploadFile = $uploadDir . basename($photo["name"]);
                $fileName= basename($photo["name"]);

                if (move_uploaded_file($photo["tmp_name"], $uploadFile)) {
                    // Update the database with the path to the stored photo
                    $updateSql = $pdo->prepare("UPDATE m_users SET gu_photo = :photo WHERE id = :user_id");
                    $updateSql->bindValue(":photo", $fileName);
                    $updateSql->bindValue(":user_id", $userId);
                    $updateSql->execute();

                    // Echo JavaScript to update the image source and hide the button
                    echo '<script>
                            document.getElementById("preview").src = "' . $uploadFile . '";
                            document.getElementById("saveButton").style.display = "none";
                          </script>';
                          
                       // Redirect to the user profile page
                     header("Location: ../View/user/user_profile.php?user_id=" . $userId);

                    exit();
                } else {
                    echo "Failed to upload photo.";
                    // Redirect to an error page or handle the error as needed
                }
            } else {
                $_SESSION["createusererror"] = "File size exceeds the maximum allowed limit (2 MB).";
                header("Location: ../../View/user/user_profile.php"); // Redirect to the form page with the error message
                exit();
            }
        } else {
            $_SESSION["createusererror"] = "Invalid file format. Only JPG, JPEG, PNG, and GIF files are allowed.";
            header("Location: ../../View/errors/404.php"); // Redirect to the form page with the error message
            exit();
        }
    } else {
        $_SESSION["createusererror"] = "Error uploading file.";
        header("Location: ../../View/errors/404.php"); // Redirect to the form page with the error message
        exit();
    }
}
?>
