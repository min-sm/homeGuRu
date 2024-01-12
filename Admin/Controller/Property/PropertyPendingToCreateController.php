<?php


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

    include "../../Model/DBConnection.php";
    # second check if p_photos are changed
    if ($_FILES['p_photos']['error'][0] === UPLOAD_ERR_NO_FILE) {
        // No file was uploaded
        echo "no file uploaded" . "<br>";
        // query run to get original photos
        $queryToGetOrgPhotos = "SELECT p_photo_1, p_photo_2, p_photo_3, p_photo_4, p_photo_5 FROM `properties` WHERE id = :id;";
        $stmtToGetOrgPhotos = $pdo->prepare($queryToGetOrgPhotos);
        $stmtToGetOrgPhotos->bindValue(":id", $_GET['id']);
        $stmtToGetOrgPhotos->execute();
        $orgPhotos = $stmtToGetOrgPhotos->fetchAll(PDO::FETCH_ASSOC);

        foreach ($orgPhotos as $photo) :
            for ($i = 1; $i <= 5; $i++) {
                $photoExist = isset($photo["p_photo_$i"]);
                $photoNotNull = $photo["p_photo_$i"] != NULL;
                $photoNameBlank = strlen($photo["p_photo_$i"]) != 0;
                if ($photoExist && $photoNameBlank && $photoNotNull) {
                    $p_photos[$i] = $photo["p_photo_$i"];
                } else {
                    $p_photos[$i] = NULL;
                }
            }
        endforeach;
        $p_photo_1 = $p_photos[1];
        $p_photo_2 = $p_photos[2];
        $p_photo_3 = $p_photos[3];
        $p_photo_4 = $p_photos[4];
        $p_photo_5 = $p_photos[5];

        echo "<pre>";
        var_dump($p_photos);
        echo "<br>";
        var_dump($p_photo_1);
        echo "<br>";
        var_dump($p_photo_2);
        echo "<br>";
        var_dump($p_photo_3);
        echo "<br>";
        var_dump($p_photo_4);
        echo "<br>";
        var_dump($p_photo_5);
        echo "<br>";
        echo "</pre>";
    } else {
        // new photos are selected
        echo "changed";
        $images = $_FILES['p_photos'];
        // Number of images
        $num_of_imgs = count($images['name']);
        $img_upload_path = '../../../Storage/house/' . $_GET['id'];

        for ($i = 0; $i < $num_of_imgs; $i++) {
            # get the image info and store them in var
            $image_name = $images['name'][$i];
            $tmp_name   = $images['tmp_name'][$i];
            $error      = $images['error'][$i];
            if ($error === 0) {
                # get image extension store it in var
                $img_ex = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                $new_img_name_making = str_replace(['_', ' '], '-', strtolower(pathinfo($image_name, PATHINFO_FILENAME)));
                $allowed_exs = array('jpg', 'jpeg', 'png');
                if (in_array($img_ex, $allowed_exs)) {
                    $new_img_name = $new_img_name_making . '.' . $img_ex;
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
    }

    # Owner Related
    $go_name = $_POST["go_name"];
    $go_nrc = $_POST["go_nrc"];
    $go_phone_num = $_POST["go_phone_num"];
    $go_email = $_POST["go_email"];

    // to check if owner already exists 
    $ownerAlreadyCheckQuery = "SELECT * FROM owners WHERE del_flg = 0";
    $ownerAlreadyCheckStmt = $pdo->prepare($ownerAlreadyCheckQuery);
    $ownerAlreadyCheckStmt->execute();
    $owners = $ownerAlreadyCheckStmt->fetchAll(PDO::FETCH_ASSOC);
    $ownerAlready = false;
    $ownerAlreadyID = null;
    // checking owner's nrc one by one
    foreach ($owners as $owner) {
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
            $em = "NRC Pattern Invalid";
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
    // p code related
    $p_code = 'G' . ($p_offer === '0' ? 'R' : 'S') . 'A' . $_GET['id'];
    // facility
    $checked_values = $_POST['p_facilities'];
    $p_facilities = implode(', ', $checked_values);
    $queryForProperty = "UPDATE properties
    SET 
        p_title = :p_title,
        p_code = :p_code,
        pt_id = :pt_id,
        p_floor = :p_floor,
        p_offer = :p_offer,
        p_duration = :p_duration,
        p_price = :p_price,
        p_price_unit = :p_price_unit,
        p_bed = :p_bed,
        p_width = :p_width,
        p_length = :p_length,
        p_size_unit = :p_size_unit,
        p_location = :p_location,
        p_township = :p_township,
        p_photo_1 = :p_photo_1,
        p_photo_2 = :p_photo_2,
        p_photo_3 = :p_photo_3,
        p_photo_4 = :p_photo_4,
        p_photo_5 = :p_photo_5,
        p_note = :p_note,
        p_description = :p_description,
        p_facilities = :p_facilities,
        go_id = :go_id
    WHERE p_code = :p_code;
    ";
    $propertyUpdateStmt = $pdo->prepare($queryForProperty);
    $propertyUpdateStmt->bindValue("p_code", $p_code);
    $propertyUpdateStmt->bindValue("p_title", $p_title);
    $propertyUpdateStmt->bindValue("pt_id", $pt_id);
    $propertyUpdateStmt->bindValue("p_floor", $p_floor);
    $propertyUpdateStmt->bindValue("p_offer", $p_offer);
    $propertyUpdateStmt->bindValue("p_duration", $p_duration);
    $propertyUpdateStmt->bindValue("p_price", $p_price);
    $propertyUpdateStmt->bindValue("p_price_unit", $p_price_unit);
    $propertyUpdateStmt->bindValue("p_bed", $p_bed);
    $propertyUpdateStmt->bindValue("p_width", $p_width);
    $propertyUpdateStmt->bindValue("p_length", $p_length);
    $propertyUpdateStmt->bindValue("p_size_unit", $p_size_unit);
    $propertyUpdateStmt->bindValue("p_location", $p_location);
    $propertyUpdateStmt->bindValue("p_township", $p_township);
    $propertyUpdateStmt->bindValue("p_photo_1", $p_photo_1);
    $propertyUpdateStmt->bindValue("p_photo_2", $p_photo_2);
    $propertyUpdateStmt->bindValue("p_photo_3", $p_photo_3);
    $propertyUpdateStmt->bindValue("p_photo_4", $p_photo_4);
    $propertyUpdateStmt->bindValue("p_photo_5", $p_photo_5);
    $propertyUpdateStmt->bindValue("p_note", $p_note);
    $propertyUpdateStmt->bindValue("p_description", $p_description);
    $propertyUpdateStmt->bindValue("p_facilities", $p_facilities);
    $propertyUpdateStmt->bindValue("go_id", $go_id);
    $propertyUpdateStmt->bindValue("id", $_GET['id']);
    $propertyUpdateStmt->execute();

    $propertyID = $_GET['id'];
    header("Location: PStatusUpgrade.php?id=$propertyID&p_status=2");
    header("Location: ../../View/Property/detail.php?id=$propertyID");
}
