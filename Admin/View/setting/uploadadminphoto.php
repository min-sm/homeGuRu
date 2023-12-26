<?php
$targetDirectory = "../../../Storage/admin_img"; // Directory where the image will be stored
$targetFile = $targetDirectory . basename($_FILES["admin_img"]); // Path to store the image

$uploadOk = 1; // Flag to check if the upload is successful
$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION)); // Get the file extension

// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["admin_img"]["tmp_name"]);
if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size (optional)
if ($_FILES["admin_img"]["size"] > 5000000) { // Adjust as per your requirements
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats (optional)
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["admin_img"]["tmp_name"], $targetFile)) {
        echo "The file ". basename( $_FILES["admin_img"]["name"]). " has been uploaded.";

        // Save the image path to the database (you can use mysqli or PDO)
        $servername = "your_servername";
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_dbname";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $imagePath = $targetFile; // This is the path you will save to your database

        // Here, you would typically insert $imagePath into your database table
        // For demonstration, we'll just print the path
        echo "<br>Image Path: " . $imagePath;

        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>