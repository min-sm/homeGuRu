<?php
session_start();
// Call DB connection
include "../../Model/DBConnection.php";

// check wrong access
if (isset($_POST["addadmin"])) {
    $ga_photo =  $_FILES["ga_photo"];
    $ga_name = $_POST["ga_name"];
    $ga_nrc = $_POST["ga_nrc"];
    $ga_dob = $_POST["ga_dob"];
    $ga_password = $_POST["ga_password"];
    $ga_gender = $_POST["ga_gender"];
    $ga_phone = $_POST["ga_phone"];
    $ga_address = $_POST["ga_address"];
    $ga_status = 1;

    // check the image is exist or not
    $targetDirectory = "../../../Storage/admin_img"; // Directory where the image will be stored
    $targetFile = $targetDirectory . basename($_FILES["ga_photo"]); // Path to store the image
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Get the file extension
    $imageCorrect = 0;
    // Check file size (optional)
    if ($_FILES["ga_photo"]["size"] > 500000) { // Adjust as per your requirements
        $imageCorrect = 1;
        $_SESSION["dataerror"] = "Your Image Size Too Big!";
        header("Location: ../../View/admin/admin_add.php");
    }
    // Allow certain file formats 
    else if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $imageCorrect = 1;
        $_SESSION["dataerror"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        header("Location: ../../View/admin/admin_add.php");
    }

    
    // check duplicate record is exist or not
    $sql = $pdo->prepare(
        "SELECT * FROM m_admins WHERE ga_email = :email"
    );
    $sql->bindValue(":email", $ga_email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);

    // check result is exist or not
    if (count($result) == 0) {
        if ($imageCorrect == 0) {
            move_uploaded_file($_FILES["ga_photo"]["tmp_name"], $targetFile); //upload file

            // prepare sql statement
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
            )
            VALUES
            (   
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
            )  
            "
            );
            // bind value 
            $sql->bindValue("photo", $ga_photo);
            $sql->bindValue("name", $ga_name);
            $sql->bindValue("email", $ga_email);
            $sql->bindValue("password", password_hash($cpassword, PASSWORD_DEFAULT));
            $sql->bindValue("dob", $ga_dob("Y/m/d"));
            $sql->bindValue("nrc", $ga_nrc);
            $sql->bindValue("gender", $ga_gender);
            $sql->bindValue("phone", $ga_phone_num);
            $sql->bindValue("address", $ga_address);
            $sql->bindValue("status", $ga_status);
            $sql->bindValue("date", date("Y/m/d"));
            // run sql statement
            $sql->execute();
        }
        // redirect to login
        header("Location: ../../View/admin/admin_list.php");
    } else {
        $_SESSION["email"] = "Your email is ready in our system";
        header("Location: ../../View/admin/admin_add.php");
    }
} else {
    // redirect to error page
    header("Location: ../../../../View/errors/404.php");
}
