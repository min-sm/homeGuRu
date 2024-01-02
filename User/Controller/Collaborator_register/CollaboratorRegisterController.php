<?php
session_start();
include "../../Model/DBConnection.php";

// Check if form is submitted
if (isset($_POST["submit"])) {
    $photo        = $_FILES["clogo"];
    $name         = $_POST["cname"];
    $email        = $_POST["cemail"];
    $phone        = $_POST["cphNo"];
    $companyname  = $_POST["cCompanyName"];
    $companyid    = $_POST["cCompanyId"];
    $address      = $_POST["caddress"];
    $message      = $_POST["cmessage"];
    $status       = 0;

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
                    "INSERT INTO m_collaborators
                    (
                        gc_logo,
                        gc_company_name,
                        gc_company_id,
                        gc_owner_name,
                        gc_phone_num,
                        gc_email,
                        gc_address,
                        gc_note,
                        gc_status,
                        created_date
                    ) VALUES (
                        :logo,         
                        :company_name,
                        :company_id,
                        :name,
                        :phone,
                        :email,
                        :address,
                        :message,
                        :status,
                        :date
                    )"
                );

                // Bind values
                $sql->bindValue(":logo", $photo["name"]);
                $sql->bindValue(":name", $name);
                $sql->bindValue(":email", $email);
                $sql->bindValue(":phone", $phone);
                $sql->bindValue(":company_name", $companyname);
                $sql->bindValue(":company_id", $companyid);
                $sql->bindValue(":address", $address);
                $sql->bindValue(":message", $message);
                $sql->bindValue(":status", $status);
                $sql->bindValue(":date", date("Y/m/d"));
                $sql->execute();

                // Get the last inserted ID
                $collaboratorId = $pdo->lastInsertId();
                $collaboratorFolder = "../../../User/storage/collaborator_img/gc{$collaboratorId}";

                if (!file_exists($collaboratorFolder)) {
                    mkdir($collaboratorFolder, 0777, true);
                }

                // Upload photo to the admin's folder
                $uploadDir = $collaboratorFolder . '/';
                $uploadFile = $uploadDir . basename($photo["name"]);

                if (move_uploaded_file($photo["tmp_name"], $uploadFile)) {
                    echo "Photo has been uploaded successfully.";
                } else {
                    echo "Failed to upload photo.";
                }

                // Redirect to the login page after successful registration
                header("Location: ../../View/collaborator/collaborator_register_success.php");
                exit();
            } else {
                $_SESSION["createadminerror"] = "File size exceeds the maximum allowed limit (2 MB).";
                header("Location: ../../View/collaborator/collaborator_register.php"); // Redirect to the form page with the error message
                exit();
            }
        } else {
            $_SESSION["createcollaboratorerror"] = "Invalid file format. Only JPG, JPEG, PNG, and GIF files are allowed.";
            header("Location:../../View/collaborator/collaborator_register.php "); // Redirect to the form page with the error message
            exit();
        }
    } else {
        $_SESSION["createcollaboratorerror"] = "Error uploading file.";
        header("Location:../../View/collaborator/collaborator_register.php"); // Redirect to the form page with the error message
        exit();
    }
}
?>
