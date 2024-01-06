<?php
include '../../Model/DBConnection.php';
include './SliderController.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "not submit";
    // Check if the form was submitted
    if (isset($_POST['submit'])){
        echo "submit";
        // Access the values using $_POST
       
        $headerColor = $_POST["header"];
        $footerColor = $_POST["footer"];
        $backgroundColor = $_POST["background"];
        $textColor = $_POST["textColor"];
        $HFtextColor = $_POST["HFtextColor"];
        echo 'empty';
        if (!empty($_FILES["homeHero"]["name"])) {
            // File was uploaded, process it
            echo "start";
            $uploadedFileName = $_FILES["homeHero"]["name"];
            $uploadDirectory = '../../../Storage/slider/';
            $targetFilePath = $uploadDirectory . $uploadedFileName;
    
            // Move the uploaded file to the destination directory
            if (move_uploaded_file($_FILES["homeHero"]["tmp_name"], $targetFilePath)) {
                 $homeHero = $uploadedFileName;
                 echo "start";
            } else {
                // Error moving the file, handle it as needed
                $em = "Failed to upload file";
                header("Location: ../../View/errors/404.php?error=$em");
                exit; // Stop execution after encountering an error
            }
        } else{
            $homeHero=$sliders[0]["hero_slider"];
        }

        if (!empty($_FILES["collabHero"]["name"])) {
            // File was uploaded, process it
            $uploadedFileName = $_FILES["collabHero"]["name"];
            $uploadDirectory = '../../../Storage/slider/';
            $targetFilePath = $uploadDirectory . $uploadedFileName;
    
            // Move the uploaded file to the destination directory
            if (move_uploaded_file($_FILES["collabHero"]["tmp_name"], $targetFilePath)) {
                 $collabHero = $uploadedFileName;
            } else {
                // Error moving the file, handle it as needed
                $em = "Failed to upload file";
                header("Location: ../../View/errors/404.php?error=$em");
                exit; // Stop execution after encountering an error
            }
        }else{
            $collabHero=$sliders[0]["collaborator_slider"];
        }
    
        if (!empty($_FILES["logo"]["name"])) {
            $uploadedFileName = $_FILES["logo"]["name"];
            $uploadDirectory = '../../../Storage/logo/';
            $targetFilePath = $uploadDirectory . $uploadedFileName;
    
            // Move the uploaded file to the destination directory
            if (move_uploaded_file($_FILES["logo"]["tmp_name"], $targetFilePath)) {
                $logo = $uploadedFileName;
                echo "Logo file uploaded successfully <br>";
            } else {
                // Error moving the file, handle it as needed
                $em = "Failed to upload logo file";
                header("Location: ../../View/errors/404.php?error=$em");
                exit;
            }
        } else {
            $logo = $sliders[0]["logo"]; // If no file was uploaded, use the existing value
        }
    
        // Check if a file was uploaded for favIcon
        if (!empty($_FILES["favIcon"]["name"])) {
            $uploadedFileName = $_FILES["favIcon"]["name"];
            $uploadDirectory = '../../../Storage/logo/';
            $targetFilePath = $uploadDirectory . $uploadedFileName;
    
            // Move the uploaded file to the destination directory
            if (move_uploaded_file($_FILES["favIcon"]["tmp_name"], $targetFilePath)) {
                $favIcon = $uploadedFileName;
               
            } else {
                // Error moving the file, handle it as needed
                $em = "Failed to upload FavIcon file";
                header("Location: ../../View/errors/404.php?error=$em");
                exit;
            }
        } else {
            $favIcon = $sliders[0]["fav_icon"]; // If no file was uploaded, use the existing value
        }

   
     
        // Update Slider table
        $sliderUpdateQuery = "UPDATE slider SET 
            hero_slider = :homeHero,
            collaborator_slider = :collabHero,
            logo = :logo,
            fav_icon = :favIcon
            WHERE id = 1"; // Assuming there's only one row in the slider table

        $sliderStatement = $pdo->prepare($sliderUpdateQuery);
        $sliderStatement->bindValue(":homeHero", $homeHero);
        $sliderStatement->bindValue(":collabHero", $collabHero);
        $sliderStatement->bindValue(":logo", $logo);
        $sliderStatement->bindValue(":favIcon", $favIcon);
        $sliderStatement->execute();

        // Update Color table
        $colorUpdateQuery = "UPDATE colors SET 
            header = :headerColor,
            footer = :footerColor,
            background = :backgroundColor,
            bd_text_color = :textColor,
            hf_text_color = :HFtextColor
            WHERE id = 1"; // Assuming there's only one row in the color table

        $colorStatement = $pdo->prepare($colorUpdateQuery);
        $colorStatement->bindValue(":headerColor", $headerColor);
        $colorStatement->bindValue(":footerColor", $footerColor);
        $colorStatement->bindValue(":backgroundColor", $backgroundColor);
        $colorStatement->bindValue(":textColor", $textColor);
        $colorStatement->bindValue(":HFtextColor", $HFtextColor);
        $colorStatement->execute();
        header("Location: ../../View/setting/themes.php");
       
    }


?>
