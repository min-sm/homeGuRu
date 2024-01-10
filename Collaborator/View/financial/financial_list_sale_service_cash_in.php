<?php include'../../Controller/Financial/FinancialListSaleServiceCashInController.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/css/dist/output.css" rel="stylesheet" />

    <title>Dashboard</title>

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="dark:bg-gray-400">
 <!-- heading navigation -->
 <?php include '../common/menu.php' ?>
  <!--Start  Sale Service Cash In Detail -->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center dark:text-gray-200">
        <div class=" lg:w-2/5 w-full grid grid-row-6 gap-5">
            <h1 class=" font-bold text-2xl my-7 tracking-wide ">Sale Service Cash In</h1>

            <div class="grid grid-cols-2 gap-4 ">
                <p class="font-medium text-lg">Property Code <?= $id;$value;?></p>
                <p name="p_code"  class="font-semibold text-sm"><?=$saleOne[0]["p_code"] ?></p>
            </div>
         
            <div class="grid grid-cols-2 gap-4 ">
                <p class="font-medium text-lg" > Cash Amount</p>
                <p name="pcash_amount" class="font-semibold text-alert text-sm">
                    <span><?= number_format($saleOne[0]["p_cash_amount"]); ?></span>
                                <?php
                                if ($saleOne[0]["p_cash_unit"] == 1) {
                                ?>
                                    <span>$</span>
                                <?php
                                } else {
                                ?>
                                    <span>Kyats</span>
                                <?php
                                }
                                ?></p>
            </div>
            <div class="grid grid-cols-2 gap-4 ">
                <p class="font-medium text-lg" >Payer Name</p>
                <p name="pcash_payer_name" class="font-normal text-sm"><?=$saleOne[0]["p_cash_payer_name"]?></p>
            </div>
            <div class="grid grid-cols-2 gap-4 ">
                <p class="font-medium text-lg" >Payer Phone</p>
                <p name="pcash_phone" class="font-normal text-sm"><?=$saleOne[0]["p_cash_phone"]?></p>
            </div>
            <div class="grid grid-cols-2 gap-4 ">
                <p class="font-medium text-lg" >Recipient Name</p>
                <p name="pcash_recipient_name" class="font-normal text-sm"><?=$saleOne[0]["p_cash_payer_name"]?></p>
            </div>           
            <div class="grid grid-cols-2 gap-4 ">
                <p class="font-medium text-lg" >Pay Date</p>
                <p name="created_date" class="font-bold text-sm"> <?= $saleOne[0]["created_date"]
                                    =date("d-m-Y  g:i A", strtotime($saleOne[0]["created_date"])) ?> </p>
            </div>     
        </div>
        <div class=" my-28 ">
            <a href='../../Controller/financial/FinancialListBackController.php?value=<?= $value ?>' 
                class="tracking-wider  text-white border-2 border-green-700 bg-alert opacity-80 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                Back</a>
        </div>
    </div>
 <!--End  Sale Service Cash In Detail  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>