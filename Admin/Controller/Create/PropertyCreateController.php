<?php
echo "<pre>";
var_dump(isset($_POST["submit"]));
var_dump(isset($_POST["go_email"]));
print_r($_POST);
print_r($_FILES);
echo "</pre>";
/*
if (isset($_POST["add_drug"])) {

    $drug_name = $_POST["drug_name"];
    $drug_amt = $_POST["drug_amt"];
    $drug_amt_unit = $_POST["drug_amt_unit"];
    $drug_stock = $_POST["drug_stock"];
    $drug_price = $_POST["drug_price"];

    include "../../Model/DBConnection.php";

    $query = "INSERT INTO drug(
        drug_name,
        drug_amt,
        drug_amt_unit,
        drug_stock,
        drug_price
    )
    VALUES(
        :name,
        :amount,
        :drug_amt_unit,
        :stock,
        :price
    )";
    $sql = $pdo->prepare($query);
    $sql->bindValue(":name", $drug_name);
    $sql->bindValue(":amount", $drug_amt);
    $sql->bindValue(":drug_amt_unit", $drug_amt_unit);
    $sql->bindValue(":stock", $drug_stock);
    $sql->bindValue(":price", $drug_price);

    $sql->execute();

    header("Location: ../../View/property/list.php"); 
} else {
    header("Location: ../../View/erors/404.php");
}
*/

if (isset($_POST["submit"])) {
    $go_name = $_POST["go_name"];
    $go_nrc = $_POST["go_nrc"];
    $go_phone_num = $_POST["go_phone_num"];
    $go_email = $_POST["go_email"];

    include "../../Model/DBConnection.php";

    $query = "INSERT INTO owners(
        go_name,
        go_nrc, 
        go_phone_num,
        go_email
        )
        VALUES(
        :go_name,
        :go_nrc,
        :go_phone_num,
        :go_email)";

    $sql = $pdo->prepare($query);
    $sql->bindValue(":go_name", $go_name);
    $sql->bindValue(":go_nrc", $go_nrc);
    $sql->bindValue(":go_phone_num", $go_phone_num);
    $sql->bindValue(":go_email", $go_email);
    $sql->execute();

    $p_title = $_POST["p_title"];
    $pt_id = $_POST["pt_id"];
    $p_floor = $_POST["p_floor"];
    $p_offer = $_POST["p_offer"];
    $p_duration = $_POST["p_duration"];
    $p_price = $_POST["p_price"];
    $p_price_unit = $_POST["p_price_unit"];
    $p_bed = $_POST["p_bed"];
    $p_width = $_POST["p_width"];
    $p_length = $_POST["p_length"];
    $p_size_unit = $_POST["p_size_unit"];
    $p_location = $_POST["p_location"];
    $p_township = $_POST["p_township"];
    $p_note = $_POST["p_note"];
    $p_description = $_POST["p_description"];
    // After inserting owner details, retrieve the last inserted ID
    $lastInsertIdQuery = "SELECT id FROM owners WHERE del_flg = 0 ORDER BY id DESC LIMIT 1";
    $lastInsertIdStmt = $pdo->prepare($lastInsertIdQuery);
    $lastInsertIdStmt->execute();
    $go_id = $lastInsertIdStmt->fetch(PDO::FETCH_ASSOC)['id'];



    // Image Related
    $p_photo_1 = '';
    $p_photo_2 = '';
    $p_photo_3 = '';
    $p_photo_4 = '';
    $p_photo_5 = '';

    $images = $_FILES['p_photos'];
    # Number of images
    $num_of_imgs = count($images['name']);

    # Creation of Currently Creating Property ID
    $lastPropertyIdQuery = "SELECT id FROM properties WHERE del_flg = 0 ORDER BY id DESC LIMIT 1";
    $lastInsertIdStmt = $pdo->prepare($lastPropertyIdQuery);
    $lastInsertIdStmt->execute();
    $lastPropertyId = $lastInsertIdStmt->fetch(PDO::FETCH_ASSOC)['id'];
    $currentlyCreatingPropertyID = $lastPropertyId + 1;

    $img_upload_path = '../../storage/house/' . $currentlyCreatingPropertyID;

    // creating img folder related to property id
    if (!file_exists($img_upload_path) || !is_dir($img_upload_path)) {
        if (!mkdir($img_upload_path, 0777, true)) {
            // If directory creation fails, handle the error
            $em = "Failed to create directory";
            header("Location: ../../View/errors/404.php?error=$em");
            exit; // Stop execution after encountering an error
        }
    }

    for ($i = 0; $i < $num_of_imgs; $i++) {
        # get the image info and store them in var
        $image_name = $images['name'][$i];
        $tmp_name   = $images['tmp_name'][$i];
        $error      = $images['error'][$i];
        # if there is not error occurred while uploading
        if ($error === 0) {
            # get image extension store it in var
            $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
            $new_img_name_making = str_replace(['_', ' '], '-', strtolower(pathinfo($image_name, PATHINFO_FILENAME)));
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array('jpg', 'jpeg', 'png');
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = $new_img_name_making . '.' . $img_ex_lc;

                # inserting imge name into relevant $p_photo_ variable
                if ($i == 0) {
                    $p_photo_1 = $new_img_name;
                } else if ($i == 1) {
                    $p_photo_2 = $new_img_name;
                } else if ($i == 2) {
                    $p_photo_3 = $new_img_name;
                } else if ($i == 3) {
                    $p_photo_4 = $new_img_name;
                } else {
                    $p_photo_5 = $new_img_name;
                }

                # crating upload path on root directory
                $img_upload_path_dynamic = $img_upload_path . '/' . $new_img_name;
                // $img_upload_path = $img_upload_path . '/';
                move_uploaded_file($tmp_name, $img_upload_path_dynamic);
                // $img_upload_path_dynamic = $img_upload_path;
            } else {
                # error message
                $em = "You can't upload files of this type";
                header("Location: ../../View/errors/404.php?error=$em");
            }
        } else {
            # error message
            $em = "Unknown Error Occurred while uploading";
            header("Location: ../../View/errors/404.php?error=$em");
        }
    }

    // p code related
    $p_code = 'G' . ($p_offer === '0' ? 'R' : 'S') . 'A' . $currentlyCreatingPropertyID;

    // facility
    $checked_values = $_POST['p_facilities'];
    $p_facilities = implode(', ', $checked_values);
    $queryForProperty = "INSERT INTO properties(
        p_code,
        p_title,
        pt_id,
        p_floor,
        p_offer,
        p_duration,
        p_price,
        p_price_unit,
        p_bed,
        p_width,
        p_length,
        p_size_unit,
        p_location,
        p_township,
        p_photo_1,
        p_photo_2,
        p_photo_3,
        p_photo_4,
        p_photo_5,
        p_note,
        p_description,
        p_facilities,
        go_id
        )
        VALUES(
            :p_code,
        :p_title,
        :pt_id,
        :p_floor,
        :p_offer,
        :p_duration,
        :p_price,
        :p_price_unit,
        :p_bed,
        :p_width,
        :p_length,
        :p_size_unit,
        :p_location,
        :p_township,
        :p_photo_1,
        :p_photo_2,
        :p_photo_3,
        :p_photo_4,
        :p_photo_5,
        :p_note,
        :p_description,
        :p_facilities,
        :go_id)";

    $propertyInsertStmt = $pdo->prepare($queryForProperty);
    $propertyInsertStmt->bindValue("p_code", $p_code);
    $propertyInsertStmt->bindValue("p_title", $p_title);
    $propertyInsertStmt->bindValue("pt_id", $pt_id);
    $propertyInsertStmt->bindValue("p_floor", $p_floor);
    $propertyInsertStmt->bindValue("p_offer", $p_offer);
    $propertyInsertStmt->bindValue("p_duration", $p_duration);
    $propertyInsertStmt->bindValue("p_price", $p_price);
    $propertyInsertStmt->bindValue("p_price_unit", $p_price_unit);
    $propertyInsertStmt->bindValue("p_bed", $p_bed);
    $propertyInsertStmt->bindValue("p_width", $p_width);
    $propertyInsertStmt->bindValue("p_length", $p_length);
    $propertyInsertStmt->bindValue("p_size_unit", $p_size_unit);
    $propertyInsertStmt->bindValue("p_location", $p_location);
    $propertyInsertStmt->bindValue("p_township", $p_township);
    $propertyInsertStmt->bindValue("p_photo_1", $p_photo_1);
    $propertyInsertStmt->bindValue("p_photo_2", $p_photo_2);
    $propertyInsertStmt->bindValue("p_photo_3", $p_photo_3);
    $propertyInsertStmt->bindValue("p_photo_4", $p_photo_4);
    $propertyInsertStmt->bindValue("p_photo_5", $p_photo_5);
    $propertyInsertStmt->bindValue("p_note", $p_note);
    $propertyInsertStmt->bindValue("p_description", $p_description);
    $propertyInsertStmt->bindValue("p_facilities", $p_facilities);
    $propertyInsertStmt->bindValue("go_id", $go_id);
    $propertyInsertStmt->execute();


    header("Location: ../../View/Dashboard View/dashboard.php");
}
