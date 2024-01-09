<?php
session_start();
include '../../Controller/Setting/SliderController.php';
if (!isset($_SESSION["authority"])) {
    header('Location: ../../View/errors/wrongPath.php ');
    exit();
}
?>
<?php include '../../Controller/Financial/FinancialListCollaboratorServiceCashInController.php' ?>
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
    <?php include '../commonView/menu.php' ?>
    <!--Start  Collaborator Service Cash In Detail -->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center dark:text-gray-200" >
        <div class=" lg:w-2/5 w-full grid grid-row-9 gap-5">
            <h1 class=" font-bold text-2xl my-7 tracking-wide ">Collaborator Service Cash In</h1>

            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">ID</p>
                <p name="gc_id" class="font-normal text-sm"><?= "GC-". $collaboratorOne[0]["gc_code"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company Name</p>
                <p name="gc" class="font-normal text-sm"><?= $collaboratorOne[0]["gc_company_name"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Duration</p>
                <p name="sduration_id" class="font-bold text-sm"><?= $collaboratorOne[0]["s_duration_name"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Package</p>
                <p name="spackage_id" class="font-bold text-sm"><?= $collaboratorOne[0]["s_package_name"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg"> Cash Amount</p>
                <p name="ccash_amount" class=" font-semibold text-sm text-alert">
                    <span> <?= number_format($collaboratorOne[0]["ccash_amt"]); ?></span>
                    <?php
                    if ($collaboratorOne[0]["ccash_unit"] == 1) {
                    ?>
                        <span>$</span>
                    <?php
                    } else {
                    ?>
                        <span>Kyats</span>
                    <?php
                    }
                    ?>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Payer Name</p>
                <p name="ccash_payer_name" class="font-normal text-sm"><?= $collaboratorOne[0]["ccash_payer_name"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Payer Phone</p>
                <p name="ccash_phone" class="font-normal text-sm"><?= $collaboratorOne[0]["ccash_phone"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Recipient Name</p>
                <p name="ccash_recipient_name" class="font-normal text-sm"><?= $collaboratorOne[0]["ccash_recipient_name"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Pay Date</p>
                <p name="created_date" class="font-bold text-sm"> <?= $collaboratorOne[0]["cash_closed_created_date"]
                                    =date("d-m-Y  g:i A", strtotime($collaboratorOne[0]["cash_closed_created_date"])) ?></p>
            </div>
        </div>
        <div class=" flex  my-20 ">
            <a href="../../Controller/financial/FinancialListBackController.php?value=<?= $value?>" type="" class="tracking-wider mx-10 text-white border-2 border-green-700 bg-alert opacity-80 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                Back</a>
        </div>
    </div>
    <!--End  Collaborator Service Cash In Detail  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>