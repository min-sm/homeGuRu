


<?php session_start();?>

<?php
include '../../Model/DBConnection.php';

if (isset($_POST['c_update'])) {
    $id = $_POST['gc_id'];
    $cphoto = $_FILES['gc_photo']['name'];
    $ccompany_name = $_POST['gc_company_name'];
    $ccompany_id = $_POST['gc_company_id'];
    $cemail = $_POST['gc_email'];
    $cpassword = $_POST['gc_password'];
    $cowner_name = $_POST['gc_owner_name'];
    $cowner_nrc = $_POST['gc_owner_nrc'];
    $cphone = $_POST['gc_phone'];
    $caddress = $_POST['gc_address'];


    $valid = 0;


    if ($cphoto != '') {
        // check the image 
        $targetDirectory = "../../../Storage/collaborator_img/gc" . $id . "/"; // Directory where the image will be stored
        $targetFile = $targetDirectory . basename($_FILES["gc_photo"]["name"]); // Path to store the image
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Get the file extension
        // Check file size of 2MB
        if ($_FILES["gc_photo"]["size"] > 2000000) {
            $valid = 1;
            $_SESSION["cphotoerror_Edit"] = "Your Image Size Too Big!";
        }
        // Allow certain photo  formats 
        else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $valid = 1;
            $_SESSION["cphotoerror_Edit"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    }

    if ($cpassword != '') {
        // Check password length
        if ((strlen($cpassword) < 8)) {
            $valid = 1;
            $_SESSION["cpassworderror_Edit"] = "Password must be at least 8 characters long";
        }
        // Check password complexity
        else if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[\w!@#$%^&*]{8,}$/', $cpassword)) {
            $valid = 1;
            $_SESSION["cpassworderror_Edit"] .= "Password must include of the following character types: uppercase letters (A-Z), lowercase letters (a-z), digits (0-9), and special characters (!@#$%^&*)";
        }
    }

    // check already record is exist or not
    $sql = $pdo->prepare("SELECT * FROM m_collaborators WHERE gc_email = :email AND id = :id AND gc_status=2 AND del_flg=0 ");
    $sql->bindValue(":id", $id);
    $sql->bindValue(":email", $cemail);
    $sql->execute();
    $sameemail = $sql->fetchAll(PDO::FETCH_ASSOC); // check already record is exist

    if (count($sameemail) == 0) {
        $sql = $pdo->prepare("SELECT * FROM m_collaborators WHERE gc_email = :email AND gc_status = 2 AND del_flg=0");
        $sql->bindValue(":email", $cemail);
        $sql->execute();
        $resultemail = $sql->fetchAll(PDO::FETCH_ASSOC); // check already record is exist
        // Validate email format
        if (!filter_var($cemail, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["cemailerror_Edit"] = "Invalid Format";
            $valid = 1;
        } else if (count($resultemail) != 0) {
            $_SESSION["cemailerror_Edit"] = "Email already Exit in our system!";
            $valid = 1;
        }
    }

    if ($valid == 0) {
        //sql prepare
        $sql = "UPDATE m_collaborators 
                SET gc_company_name = :ccompany_name,
                    gc_company_id   = :ccompany_id,
                    gc_email        = :cemail,
                    gc_owner_name   = :cowner_name,
                    gc_owner_nrc    = :cowner_nrc,
                    gc_phone_num    = :cphone,
                    gc_address      = :caddress,
                    updated_date    = :date
                WHERE id =:id AND gc_status = 2";
        $sqlupdate = $pdo->prepare($sql);
        // bind value 
        $sqlupdate->bindValue("id", $id);
        $sqlupdate->bindValue("ccompany_name", $ccompany_name);
        $sqlupdate->bindValue("ccompany_id", $ccompany_id);
        $sqlupdate->bindValue("cemail", $cemail);
        $sqlupdate->bindValue("cowner_name", $cowner_name);
        $sqlupdate->bindValue("cowner_nrc", $cowner_nrc);
        $sqlupdate->bindValue("cphone", $cphone);
        $sqlupdate->bindValue("caddress", $caddress);
        $sqlupdate->bindValue("date", date('Y-m-d H:i:s'));
        // run sql statement
        $sqlupdate->execute();

        if ($cphoto != '') {

            if (!is_dir($targetDirectory)) {
                mkdir($targetDirectory, 0777, true); // 0777 permission; adjust permissions as needed
            }
            move_uploaded_file($_FILES["gc_photo"]["tmp_name"], $targetFile); //upload file

            //sql prepare
            $sql = "UPDATE m_collaborators 
            SET gc_logo         = :cphoto,
                updated_date    = :date
            WHERE id =:id AND gc_status = 2";
            $sqlupdate = $pdo->prepare($sql);
            // bind value 
            $sqlupdate->bindValue("id", $id);
            $sqlupdate->bindValue("cphoto", $cphoto);
            $sqlupdate->bindValue("date", date('Y-m-d H:i:s'));
            // run sql statement
            $sqlupdate->execute();
        }
        if($cpassword != ''){
            //sql prepare
            $sql = "UPDATE m_collaborators 
            SET gc_password         = :cpassword,
                updated_date    = :date
            WHERE id =:id AND gc_status = 2";
            $sqlupdate = $pdo->prepare($sql);
            // bind value 
            $sqlupdate->bindValue("id", $id);
            $sqlupdate->bindValue("cpassword", password_hash($cpassword, PASSWORD_DEFAULT) );
            $sqlupdate->bindValue("date", date('Y-m-d H:i:s'));
            // run sql statement
            $sqlupdate->execute();
        }

        header("Location: ../../View/Collaborator/admin_collaborator_detail_preview.php?id=" . $id);
    } else {
        header("Location: ../../View/Collaborator/admin_collaborator_detail_edit.php?id=" . $id);
    }
} else {
    header("Location: ../../View/errors/404.php");
}
?>