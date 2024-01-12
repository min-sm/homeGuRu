<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


// Call DB connection
include "../../Model/DBConnection.php";

// check wrong access
if (isset($_POST["gc_add"])) {
    $cphoto =  $_FILES['gc_photo']['name'];
    $ccompanyName = $_POST["gc_company_name"];
    $ccompanyId = $_POST["gc_company_id"];
    $cemail = $_POST["gc_email"];
    $cpassword = $_POST["gc_password"];
    $cownerName = $_POST["gc_owner_name"];
    $cownerNrc = $_POST["gc_nrc"];
    $cphone = $_POST["gc_phone"];
    $caddress = $_POST["gc_address"];
    $cstatus = 2;
    $valid = 0;

    $_SESSION["ccompanyName"] = $ccompanyName;
    $_SESSION["ccompanyId"] = $ccompanyId;
    $_SESSION["cemail"] = $cemail;
    $_SESSION["cpassword"] = $cpassword;
    $_SESSION["cownerName"] = $cownerName;
    $_SESSION["cownerNrc"] = $cownerNrc;
    $_SESSION["cphone"] = $cphone;
    $_SESSION["caddress"] = $caddress;




    $sql_lastId = "SELECT id FROM m_collaborators ORDER BY id DESC LIMIT 1 "; // last id collaborator
    $sql = $pdo->prepare($sql_lastId);
    $sql->execute();
    $lastId = $sql->fetchAll(PDO::FETCH_ASSOC); //fetch the id
    $newId = $lastId[0]['id'] + 1; //new id to create folder

    // check the image 
    $targetDirectory = "../../../Storage/collaborator_img/gc" . $newId . "/"; // Directory where the image will be stored
    $targetFile = $targetDirectory . basename($_FILES["gc_photo"]["name"]); // Path to store the image
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Get the file extension
    // Check file size of 2MB
    if ($_FILES["gc_photo"]["size"] > 2000000) {
        $valid = 1;
        $_SESSION["photoerror"] = "Your Image Size Too Big!";
    }
    // Allow certain photo  formats 
    else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $valid = 1;
        $_SESSION["photoerror"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

    // Check password length
    if ((strlen($cpassword) < 8)) {
        $valid = 1;
        $_SESSION["passworderror"] = "Password must be at least 8 characters long";
    }
    // Check password complexity
    else if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[\w!@#$%^&*]{8,}$/', $cpassword)) {
        $valid = 1;
        $_SESSION["passworderror"] .= "Password must include of the following character types: uppercase letters (A-Z), lowercase letters (a-z), digits (0-9), and special characters (!@#$%^&*)";
    }
    // check duplicate record is exist or not
    $sql = $pdo->prepare(
        "SELECT * FROM m_collaborators WHERE gc_email = :email"
    );
    $sql->bindValue(":email", $cemail);
    $sql->execute();
    $resultemail = $sql->fetchAll(PDO::FETCH_ASSOC);


    // Validate email format
    if (!filter_var($cemail, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["emailerror"] = "Invalid email format";
        $valid = 1;
    } else if (count($resultemail) != 0) {
        $_SESSION["emailerror"] = "Email already Exit in our system!";
        $valid = 1;
    }

    if (($valid == 0) && (count($resultemail) == 0)) {
        // check gc_code is exist or not
        $sql = $pdo->prepare(
            "SELECT * FROM m_collaborators "
        );
        $sql->execute();
        $cnumber = $sql->fetchAll(PDO::FETCH_ASSOC);
        if (count($cnumber) == 0) {
            $newCode = 101;
        } else {

            $sql = $pdo->prepare(
                "SELECT MAX(gc_code) AS MAX_CODE  FROM m_collaborators
            "
            );
            $sql->execute();
            $lastCode = $sql->fetchAll(PDO::FETCH_ASSOC);
            $newCode =  $lastCode[0]["MAX_CODE"] + 1;
        }

        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0777, true); // 0777 permission; adjust permissions as needed
        }
        move_uploaded_file($_FILES["gc_photo"]["tmp_name"], $targetFile); //upload file

        // prepare sql statement
        $sql = $pdo->prepare(
            "INSERT INTO m_collaborators
        (   
            gc_code,
            gc_logo,
            gc_company_name,
            gc_company_id,
            gc_email,
            gc_password,
            gc_owner_name,
            gc_owner_nrc,
            gc_phone_num,
            gc_address,
            gc_status
        )
        VALUES
        (   :code,
            :photo,
            :company_name,
            :company_id,
            :email,
            :password,
            :owner_name,
            :owner_nrc,
            :phone,
            :address,
            :status
        )  
        "
        );
        // bind value 
        $sql->bindValue("code", $newCode);
        $sql->bindValue("photo", $cphoto);
        $sql->bindValue("company_name", $ccompanyName);
        $sql->bindValue("company_id", $ccompanyId);
        $sql->bindValue("email", $cemail);
        $sql->bindValue("password", password_hash($cpassword, PASSWORD_DEFAULT));
        $sql->bindValue("owner_name", $cownerName);
        $sql->bindValue("owner_nrc", $cownerNrc);
        $sql->bindValue("phone", $cphone);
        $sql->bindValue("address", $caddress);
        $sql->bindValue("status", $cstatus);
        // run sql statement
        $sql->execute();
        header("Location: ../../View/Collaborator/collaborator_list.php");
    } else {
        header("Location: ../../View/Collaborator/collaborator_add.php");
    }
} else {
    // redirect to error page
    header("Location: ../../View/errors/404.php");
}


?>