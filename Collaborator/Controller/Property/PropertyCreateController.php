<?php
echo "<pre>";
var_dump(isset($_POST["submit"]));
var_dump(isset($_POST["go_email"]));
print_r($_POST);
print_r($_FILES);
echo "</pre>";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$current_collaborator = $_SESSION['collaboratorID'];
//$current_collaborator = 1;

if (isset($_POST["submit"])) {

    # firstly, check if p_location link is valid
    if (
        strpos($_POST['p_location'], '<iframe') !== false &&
        strpos($_POST['p_location'], 'src="https://www.google.com/maps/embed') !== false &&
        strpos($_POST['p_location'], '/maps/embed') !== false
    ) {
        $p_location = $_POST["p_location"];
    } else {
        $em = "Google map embed link is incorrect.";
        header("Location: ../../View/errors/404.php?error=$em");
        exit; // Stop execution after encountering an error
    }

    # Owner Related
    $go_name = $_POST["go_name"];
    $go_nrc = $_POST["go_nrc"];
    $go_phone_num = $_POST["go_phone_num"];
    $go_email = $_POST["go_email"];

    // to check if owner already exists 
    include "../../Model/DBConnection.php";

    $ownerAlreadyCheckQuery = "SELECT * FROM owners WHERE del_flg = 0";
    $ownerAlreadyCheckStmt = $pdo->prepare($ownerAlreadyCheckQuery);
    $ownerAlreadyCheckStmt->execute();
    $owners = $ownerAlreadyCheckStmt->fetchAll(PDO::FETCH_ASSOC);
    $ownerAlready = false;
    $ownerAlreadyID = null;
    // checking owner's nrc one by one
    foreach ($owners as $owner) {
        echo "1 " . str_replace(' ', '', strtolower($go_nrc));
        echo "<br>";
        echo "2 " . strtolower($owner['go_nrc']);
        echo "<br>";
        if (str_replace(' ', '', strtolower($go_nrc)) == strtolower($owner['go_nrc'])) {

            $ownerAlready = true;
            $ownerAlreadyID = $owner['id'];
            break;
        }
    }
    $go_id = null;

    // if owner is new 
    if (!$ownerAlready) {
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

        // inputted owner's nrc 
        $pattern = "/([A-Za-z]+)/";
        $result = '';
        $go_nrc = str_replace(' ', '', $go_nrc);
        // first check if it's in Burmese ID format
        if (!preg_match("/^[0-9]{1,2}\/[a-zA-Z]+\([a-zA-Z]\)[0-9]{6}$/", $go_nrc)) {
            $em = "NRC Pattern Invalid 1";
            header("Location: ../../View/errors/404.php?error=$em");
            exit; // Stop execution after encountering an error
        } else if (preg_match($pattern, $go_nrc, $matches)) { // second checking is to take township code in nrc
            $result = $matches[1]; // Extracting the matched substring
            echo $result; // Output: TaMaNa
        } else { // if inputted owner's nrc pattern is invalid
            $em = "NRC Pattern Invalid";
            header("Location: ../../View/errors/404.php?error=$em");
            exit; // Stop execution after encountering an error
        }

        // Convert to uppercase
        $go_nrc = strtoupper($go_nrc);
        $pattern = "/[A-Za-z]{2,}/";

        $go_nrc = preg_replace($pattern, $result, $go_nrc);
        $sql->bindValue(":go_nrc", $go_nrc);
        $sql->bindValue(":go_phone_num", $go_phone_num);
        $sql->bindValue(":go_email", $go_email);
        $sql->execute();

        // After inserting owner details, retrieve the last inserted ID
        $lastInsertIdQuery = "SELECT id FROM owners WHERE del_flg = 0 ORDER BY id DESC LIMIT 1";
        $lastInsertIdStmt = $pdo->prepare($lastInsertIdQuery);
        $lastInsertIdStmt->execute();
        $go_id = $lastInsertIdStmt->fetch(PDO::FETCH_ASSOC)['id'];
    } else {
        $go_id = $ownerAlreadyID;
    }

    $p_title = ucwords(strtolower($_POST["p_title"]));
    $pt_id = $_POST["pt_id"];
    $p_offer = $_POST["p_offer"];
    $p_floor = isset($_POST["p_floor"]) && $_POST["p_floor"] !== '' ? $_POST["p_floor"] : NULL;
    $p_duration = isset($_POST["p_duration"]) && $_POST["p_duration"] !== '' ? $_POST["p_duration"] : NULL;
    $p_price = $_POST["p_price"];
    $p_price_unit = $_POST["p_price_unit"];
    $p_bed = $_POST["p_bed"];
    $p_width = $_POST["p_width"];
    $p_length = $_POST["p_length"];
    $p_size_unit = $_POST["p_size_unit"];
    $p_township = isset($_POST["p_township"]) ? $_POST['p_township']  : '';
    $p_note = $_POST["p_note"];
    $p_description = $_POST["p_description"];

    // Image Related
    $p_photo_1 = '';
    $p_photo_2 = NULL;
    $p_photo_3 = NULL;
    $p_photo_4 = NULL;
    $p_photo_5 = NULL;

    $images = $_FILES['p_photos'];
    # Number of images
    $num_of_imgs = count($images['name']);

    # Creation of Currently Creating Property ID
    $lastPropertyIdQuery = "SELECT id FROM properties WHERE del_flg = 0 ORDER BY id DESC LIMIT 1";
    $lastInsertIdStmt = $pdo->prepare($lastPropertyIdQuery);
    $lastInsertIdStmt->execute();
    $lastPropertyId = $lastInsertIdStmt->fetch(PDO::FETCH_ASSOC)['id'];
    $currentlyCreatingPropertyID = $lastPropertyId + 1;

    $img_upload_path = '../../../Storage/house/' . $currentlyCreatingPropertyID;

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
                $em = "You can't upload files of this type " . $i;
                header("Location: ../../View/errors/404.php?error=$em");
            }
        } else {
            # error message
            $em = "Unknown Error Occurred while uploading";
            header("Location: ../../View/errors/404.php?error=$em");
        }
    }

    // p code related
    $p_code = 'G' . ($p_offer === '0' ? 'R' : 'S') . 'C' . $currentlyCreatingPropertyID;

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
        go_id,
        uploader_id
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
        :go_id,
        :uploader_id)"; // default 0 for admin 

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
    $propertyInsertStmt->bindValue("uploader_id", $current_collaborator);
    $propertyInsertStmt->execute();


    header("Location: ../../View/Property/detail.php?id=$currentlyCreatingPropertyID");
}

// used in add_form.php