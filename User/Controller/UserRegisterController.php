
<?php
session_start();
include "./common/mailSender.php";
include "./common/commonFunction.php";

include "../Model/DBConnection.php";
if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["word"];
    $confirmpassword = $_POST["confirmword"];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["registererror"] = "Invalid email format";
        header("Location: ../View/user/user_register.php");
        exit(); // Stop further execution
    }
    // Check password length
    if (strlen($password) < 8) {
        $_SESSION["registererror"] = "Password must be at least 8 characters long";
        header("Location: ../View/user/user_register.php");
        exit(); // Stop further execution
    }
   // Check password complexity
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[\w!@#$%^&*]{8,}$/', $password)) {
        $_SESSION["registererror"] = "Password must include of the following character types: uppercase letters (A-Z), lowercase letters (a-z), digits (0-9), and special characters (!@#$%^&*)";
        header("Location: ../View/user/user_register.php");
        exit(); // Stop further execution
    }
    
    // Check if password and confirm password match
    if ($password !== $confirmpassword) {
        $_SESSION["registererror"] = "Please ensure that the passwords match";
        header("Location: ../View/user/user_register.php");
        exit(); // Stop further execution
    }
    // Check duplicate record is exist or not
    $sql = $pdo->prepare("SELECT * FROM m_users WHERE gu_email = :email");
    $sql->bindValue(":email", $email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    // Check if the result is empty
    if (count($result) == 0) {
       $gu_token= gettoken();
        $sql = $pdo->prepare(
            "INSERT INTO m_users
            (
                gu_name,
                gu_email,
                gu_token,
                gu_password
            )
            VALUES(
                :name,
                :email,
                :token,
                :password
            )"
        );
        $sql->bindValue(":name", $username);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":token", $gu_token);
        $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
        // run sql statement
        $sql->execute();

        $domain = $_SERVER["SERVER_NAME"];

      //send verify mail
        $mail = new SendMail();
        $mail->sendMail(
             $email,
            "Secure your Home GuRu account with Login Verification ",
            "
            <p>Dear User,</p>
            <p>Thank you for choosing Home GuRu. To complete your login, please click on the button below:</p>
            <button style='inline-block; tracking-wider; m-auto; py-2; w-40; mb-6; text-center; leading-6; text-black; font-medium; bg-blue; border-3; border-blue; shadow; rounded; transition; duration-200;'>
                <a href='http://$domain/homeGuRu/homeGuRu/User/Controller/VerifyController.php?token=$gu_token' style='color: black; text-decoration: none;'>Login</a>
            </button>
        
            <p>If you have any questions or concerns regarding the verification process, please do not hesitate to contact our customer support team at homeguru@gmail.com</p>
            <p>Best regards,<br>Your Home GuRu Team</p>
             "
        );

        // redirect to login
        header("Location: ../View/user/user_register_success.php");
    } else {
        $_SESSION["registererror"] = "Your email is already in our system";
        header("Location: ../View/user/user_register.php");
    }
} else {
    header("Location: ../View/errors/404.php");
}
