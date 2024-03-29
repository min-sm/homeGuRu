<?php
// Call DB connection
include "../../Model/DBConnection.php";


// check wrong access
if (isset($_POST["pcash_closed"])) {
    $code = $_POST["p_code"];
    $offer = $_POST["offer"];
    $amount = $_POST["amount"];
    $unit = $_POST["unit"];
    $payer = $_POST["payer_name"];
    $phone = $_POST["phone"];
    $recipient = $_POST["recipient_name"];

       // prepare sql statement
       $sql = $pdo->prepare(
        "INSERT INTO property_cash_closed
    (   
        p_code,
        p_offer,
        p_cash_amount,
        p_cash_unit,
        p_cash_payer_name,
        p_cash_phone,
        p_cash_recipient_name
        
    )
    VALUES
    (   :code,
        :offer,
        :amount,
        :unit,
        :payer,
        :phone,
        :recipient
        
    )  
    "
    );
    // bind value 
    $sql->bindValue("code", $code);
    $sql->bindValue("offer", $offer);
    $sql->bindValue("amount", $amount);
    $sql->bindValue("unit", $unit);
    $sql->bindValue("payer", $payer);
    $sql->bindValue("phone", $phone);
    $sql->bindValue("recipient", $recipient);
    // run sql statement
    $sql->execute();
     // redirect to error page
 header("Location: ../../View/Financial/financial_list.php");

}else{
 // redirect to error page
 header("Location: ../../View/errors/404.php");
}


 ?>