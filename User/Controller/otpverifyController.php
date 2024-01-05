<?php
session_start();
include "../Model/DBConnection.php";

if (isset($_POST["verify"])) {
    $otp1 = $_POST["otp1"];
    $otp2 = $_POST["otp2"];
    $otp3 = $_POST["otp3"];
    $otp4 = $_POST["otp4"];

    $enteredOTP = $otp1 . $otp2 . $otp3 . $otp4; // Combine individual OTP digits

    // Retrieve stored OTP from the session (assuming it's set during the OTP generation)
    $gu_token = $_SESSION["generatedOTP"];

    if ($enteredOTP == $gu_token) {
        // OTP is correct, show success page
        header("Location: ../View/user/OTP_success.php");
    } else {
        // OTP is incorrect, set error message and redirect back to the OTP verification page
        $_SESSION["otperror"] = "Incorrect OTP. Please try again.";
        header("Location: ../View/user/OTP_verification.php");
    }
} else {
    // Redirect to a 404 error page if accessed without proper POST data
    header("Location: ../View/errors/404.php");
}
?>
