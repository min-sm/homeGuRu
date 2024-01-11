<?php
session_start();
include "./common/mailSender.php";
include "./common/commonFunction.php";
include "../Model/DBConnection.php";

function generateOTP() {
    // Generate a 4-digit OTP code
    return str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
}

if (isset($_POST["sendOTP"])) {
    $email = $_POST["email"];
  $_SESSION['uEmail']=$email;
    // Check if the email exists in the database
    $stmt = $pdo->prepare("SELECT * FROM m_users WHERE gu_email = :email");
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (count($result) > 0) {
        $user = $result[0];
        $gu_token = generateOTP();

        // Update the user's token in the database
        $updateTokenStmt = $pdo->prepare("UPDATE m_users SET gu_token = :token WHERE gu_email = :email");
        $updateTokenStmt->bindValue(":token", $gu_token);
        $updateTokenStmt->bindValue(":email", $email);
        $updateTokenStmt->execute();

        // Update the user's password with the generated OTP
        $updatePasswordStmt = $pdo->prepare("UPDATE m_users SET gu_password = :password WHERE gu_email = :email");
        $updatePasswordStmt->bindValue(":password", password_hash($gu_token, PASSWORD_DEFAULT)); // Hash the OTP for security
        $updatePasswordStmt->bindValue(":email", $email);
        $updatePasswordStmt->execute();

        // Store the generated OTP in the session
        $_SESSION["generatedOTP"] = $gu_token;

        $domain = $_SERVER["SERVER_NAME"];

        // Include OTP code in the email
        $mail = new SendMail();
        $mail->sendMail(
            $email,
            " Reset Your Account Password",
            "
            <p>Dear User,</p>
            <p>Thank you for choosing Home GuRu. Your OTP code for password reset is: <strong>$gu_token</strong></p>
        
            <p>If you have any questions or concerns, please do not hesitate to contact our customer support team at homeguru@gmail.com</p>
        
            <p>Thank you for your cooperation in maintaining the security of your account.</p>
            <p>Best regards,<br>Your Home GuRu Team</p>
            "
        );

        // Redirect to a page for entering OTP
        header("Location: ../../View/user/OTP_verification.php");
        exit();
    } else {
        // Email not found in the database
        header("Location: ../View/user/forget_password.php");
        $_SESSION['emailnotfound']='Your Email not fond.';
        exit();
    }
} else {
    // Redirect to 404 page for invalid request
    header("Location: ../View/errors/404.php");
    exit();
}
?>
