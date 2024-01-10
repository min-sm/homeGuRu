
<?php session_start(); ?>

<?php
include '../../Model/DBConnection.php';

if (isset($_POST['a_update'])) {
    $id = $_POST['ga_id'];
    $aname = $_POST['ga_name'];
    $anrc = $_POST['ga_nrc'];
    $adob = $_POST['ga_dob'];
    $agender = $_POST['ga_gender'];
    $aphoto = $_FILES['ga_photo']['name'];
    $aphone = $_POST['ga_phone'];
    $aemail = $_POST['ga_email'];
    $apassword = $_POST['ga_password'];
    $aaddress = $_POST['ga_address'];
    $valid = 0;


    if ($aphoto != '') {
        // check the image 
        $targetDirectory = "../../../Storage/admin_img/ga" . $id . "/"; // Directory where the image will be stored
        $targetFile = $targetDirectory . basename($_FILES["ga_photo"]["name"]); // Path to store the image
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Get the file extension
        // Check file size of 2MB
        if ($_FILES["ga_photo"]["size"] > 2000000) {
            $valid = 1;
            $_SESSION["gaphotoerror_Edit"] = "Your Image Size Too Big!";
        }
        // Allow certain photo  formats 
        else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $valid = 1;
            $_SESSION["gaphotoerror_Edit"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    }

    if ($apassword != '') {
        // Check password length
        if ((strlen($apassword) < 8)) {
            $valid = 1;
            $_SESSION["gapassworderror_Edit"] = "Password must be at least 8 characters long";
        }
        // Check password complexity
        else if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[\w!@#$%^&*]{8,}$/', $cpassword)) {
            $valid = 1;
            $_SESSION["gapassworderror_Edit"] .= "Password must include of the following character types: uppercase letters (A-Z), lowercase letters (a-z), digits (0-9), and special characters (!@#$%^&*)";
        }
    }

    // check already record is exist or not
    $sql = $pdo->prepare("SELECT *
                                FROM m_admins 
                                WHERE ga_email = :email 
                                AND id = :id 
                                AND del_flg = 0 
                                "
                                );
    $sql->bindValue(":id", $id);
    $sql->bindValue(":email", $aemail);
    $sql->execute();
    $sameemail = $sql->fetchAll(PDO::FETCH_ASSOC); // check already record is exist

    if (count($sameemail) == 0) {
        $sql = $pdo->prepare("SELECT * 
                                    FROM m_admins 
                                    WHERE ga_email = :email 
                                    AND del_flg = 0 
                                    ");
        $sql->bindValue(":email", $aemail);
        $sql->execute();
        $resultemail = $sql->fetchAll(PDO::FETCH_ASSOC); // check already record is exist
        // Validate email format
        if (!filter_var($aemail, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["gaemailerror_Edit"] = "Invalid Format";
            $valid = 1;
        } else if (count($resultemail) != 0) {
            $_SESSION["gaemailerror_Edit"] = "Email already Exit in our system!";
            $valid = 1;
        }
    }

    if ($valid == 0) {
        //sql prepare
        $sql = "UPDATE m_admins 
                    SET ga_name = :aname,
                        ga_nrc = :anrc,
                        ga_dob = :adob,
                        ga_gender = :agender,                
                        ga_phone_num = :aphone,
                        ga_email = :aemail,             
                        ga_address = :aaddress,
                        updated_date    = :date
                    WHERE id =:id 
                    AND del_flg = 0
                    ";
        $sqlupdate = $pdo->prepare($sql);
        // bind value 
        $sqlupdate->bindValue("id", $id);
        $sqlupdate->bindValue("aname", $aname);
        $sqlupdate->bindValue("anrc", $anrc);
        $sqlupdate->bindValue("adob", $adob);
        $sqlupdate->bindValue("agender", $agender);
        $sqlupdate->bindValue("aphone", $aphone);
        $sqlupdate->bindValue("aemail", $aemail);
        $sqlupdate->bindValue("aaddress", $aaddress);
        $sqlupdate->bindValue("date", date('Y-m-d H:i:s'));
        // run sql statement
        $sqlupdate->execute();

        if ($aphoto != '') {

            if (!is_dir($targetDirectory)) {
                mkdir($targetDirectory, 0777, true); // 0777 permission; adjust permissions as needed
            }
            move_uploaded_file($_FILES["ga_photo"]["tmp_name"], $targetFile); //upload file

            //sql prepare
            $sql = "UPDATE m_admins 
                        SET ga_photo        = :aphoto,
                            updated_date    = :date
                        WHERE id =:id 
                        AND del_flg = 0 
                        ";
            $sqlupdate = $pdo->prepare($sql);
            // bind value 
            $sqlupdate->bindValue("id", $id);
            $sqlupdate->bindValue("cphoto", $cphoto);
            $sqlupdate->bindValue("date", date('Y-m-d H:i:s'));
            // run sql statement
            $sqlupdate->execute();
        }
        if ($apassword != '') {
            //sql prepare
            $sql = "UPDATE m_admins  
                        SET ga_password     = :apassword,
                            updated_date    = :date
                        WHERE id =:id 
                        AND del_flg = 0
                        ";
            $sqlupdate = $pdo->prepare($sql);
            // bind value 
            $sqlupdate->bindValue("id", $id);
            $sqlupdate->bindValue("cpassword", password_hash($cpassword, PASSWORD_DEFAULT));
            $sqlupdate->bindValue("date", date('Y-m-d H:i:s'));
            // run sql statement
            $sqlupdate->execute();
        }

        header("Location: ../../View/Admin/admin_detail.php?id=" . $id);
    } else {
        header("Location: ../../View/Admin/admin_edit.php?id=" . $id);
    }
} else {
    header("Location: ../../View/errors/404.php");
}
?>