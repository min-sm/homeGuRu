<?php
session_start();


include "../../Model/DBConnection.php";

// Check if form is submitted
if (isset($_POST["addadmin"])) {
    $photo = $_FILES["ga_photo"]['name'];
    $email = $_POST["ga_email"];
    $password = $_POST["ga_password"];
    $name = $_POST["ga_name"];
    $nrc = $_POST["ga_nrc"];
    $dob = $_POST["ga_dob"];
    $password = $_POST["ga_password"];
    $gender = $_POST["ga_gender"];
    $phone = $_POST["ga_phone"];
    $address = $_POST["ga_address"];
    $status = 1;


    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["emailerror"] = "Invalid email format";
        header("Location: ../../View/admin/admin_add.php");
        exit(); // Stop further execution
    }

   // Password complexity validation
if (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*])/', $password)) {
    $_SESSION["passworderror"] = "Password must include at least one uppercase letter, one lowercase letter, one digit, and one special character (!@#$%^&*).";
    header("Location: ../../View/admin/admin_add.php"); // Redirect to the form page with the error message
    exit();
}

// Password length validation
if (strlen($password) < 8) {
    $_SESSION["passworderror"] = "Password must be at least 8 characters long.";
    header("Location: ../../View/admin/admin_add.php"); // Redirect to the form page with the error message
    exit();
}


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
                $sql = $pdo->prepare(
                    "INSERT INTO m_admins
                    (
                        ga_photo,
                        ga_name,
                        ga_email,
                        ga_password,
                        ga_dob,
                        ga_nrc,
                        ga_gender,
                        ga_phone_num,
                        ga_address,
                        ga_status,
                        created_date

                    ) VALUES (
                        :photo,
                        :name,
                        :email,
                        :password,
                        :dob,
                        :nrc,
                        :gender,
                        :phone,
                        :address,
                        :status,
                        :date
                    )"
                );
                // Bind values
                $sql->bindValue("photo", $photo["name"]);
                $sql->bindValue("name", $name);
                $sql->bindValue("email", $email);
                $sql->bindValue("password", password_hash($password, PASSWORD_DEFAULT));
                $sql->bindValue("dob", $dob);
                $sql->bindValue("nrc", $nrc);
                $sql->bindValue("gender", $gender);
                $sql->bindValue("phone", $phone);
                $sql->bindValue("address", $address);
                $sql->bindValue("status", $status);
                $sql->bindValue("date", date("Y/m/d"));
                $sql->execute();

                // Get the last inserted ID
                $adminId = $pdo->lastInsertId();
                // Create folder for admin if it doesn't exist
                $adminFolder = "../../../Storage/admin_img/ga{$adminId}";
                if (!file_exists($adminFolder)) {
                    mkdir($adminFolder, 0777, true);
                }
                // Upload photo to the admin's folder
                $uploadDir = $adminFolder . '/';
                $uploadFile = $uploadDir . basename($photo["name"]);

                if (move_uploaded_file($photo["tmp_name"], $uploadFile)) {
                    echo "Photo has been uploaded successfully.";
                } else {
                    echo "Failed to upload photo.";
                }
                // Redirect to the login page after successful registration
                header("Location: ../../View/admin/admin_list.php");
                exit();
            } else {
                $_SESSION["createadminerror"] = "File size exceeds the maximum allowed limit (2 MB).";
                header("Location: ../../View/admin/admin_add.php"); // Redirect to the form page with the error message
                exit();
            }
        } else {
            $_SESSION["createadminerror"] = "Invalid file format. Only JPG, JPEG, PNG, and GIF files are allowed.";
            header("Location: ../../View/errors/404.php"); // Redirect to the form page with the error message
            exit();
        }
    } else {
        $_SESSION["createadminerror"] = "Error uploading file.";
        header("Location: ../../View/errors/404.php"); // Redirect to the form page with the error message
        exit();
    }
}
