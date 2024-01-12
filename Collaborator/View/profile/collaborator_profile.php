
<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>


<?php 
if (!isset($_SESSION["collaboratorId"])) {
    header('Location: ../../View/errors/wrongPath.php');
    exit();
};
?>

<?php
include '../../Controller/Collaborator/CollaboratorAllDetailPreviewContorller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>
    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet" />

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/b9864528d4.js" crossorigin="anonymous"></script>

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!--JS-->
    <script src="../resources/js/collaborator_detail_post.js" defer></script>
</head>

<body class="bg-primary dark:bg-gray-700">
    <?php include '../common/menu.php' ?>
    <!--Start  Collaborator Detail-->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center  dark:text-gray-200">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Collaborator Detail</h1>
        <div class=" lg:w-1/2 w-full grid grid-row-13 gap-2">
            <img class="w-40 mb-5" src='<?php echo "../../../Storage/collaborator_img/gc" . $collaborator[0]['collaborator_id'] . "/" . $collaborator[0]['gc_logo'] ?>' alt="">

            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Collaborator Code</p>
                <p name="gc_name" class="text-sm font-bold tracking-wider">GC-<?= $collaborator[0]['gc_code']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company Name</p>
                <p name="gc_name" class="text-sm"><?= $collaborator[0]['gc_company_name']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company ID Number</p>
                <p name="gc_company_Id" class="text-sm"><?= $collaborator[0]['gc_company_id']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Owner Name</p>
                <p name="gc_owner_name" class="text-sm"><?= $collaborator[0]['gc_owner_name']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">National ID</p>
                <p name="gc_owner_nrc" class="text-sm"><?= $collaborator[0]['gc_owner_nrc']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Email Address</p>
                <p name="gc_email" class="text-sm tracking-wider"><?= $collaborator[0]['gc_email']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Phone Number</p>
                <p name="gc_phone" class="text-sm"><?= $collaborator[0]['gc_phone_num']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Address</p>
                <p name="gc_address" class="text-sm"><?= $collaborator[0]['gc_address']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Package</p>
                <p name="s_package_id" class="text-alert text-sm font-semibold"> <?= $collaborator[0]["s_package_name"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Duration</p>
                <p name="s_duration" class="text-sm"> <?= $collaborator[0]["s_duration_name"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Bought Date</p>
                <p name="s_created_date" class="text-sm font-semibold">
                    <?= $collaborator[0]["created_date"]
                        = date("d / m / Y", strtotime($collaborator[0]["created_date"])); ?>
                </p>
            </div>
            <?php
            $currentDate = new DateTime();
            $expiration = new DateTime($collaborator[0]["s_expire_date"]);
            $interval = $currentDate->diff($expiration);
            if ($currentDate < $expiration) {
                $expire_status = $interval->days . " days";
            } elseif ($currentDate > $expiration) {
                $expire_status = " Expired";
            } else {
                $expire_status = "Expires today!";
            }
            ?>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Expire Date</p>
                <p name="" class="text-goldYellow font-semibold text-sm">
                    <?= $collaborator[0]["s_expire_date"]
                        = date("d / m / Y", strtotime($collaborator[0]["s_expire_date"])); ?>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Days Left B4 Expire</p>
                <p name="gc_created_date" class="text-alert text-sm font-semibold"> <?= $expire_status; ?> </p>
            </div>
        </div>
        <div class=" flex  my-16 ">          
            <a href="" class="tracking-wider mx-10 bg-alert py-2 px-6 rounded-lg border font-bold text-white flex justify-between">
                Bak</a>
        </div>


    </div>
    <!--End  Collaborator Detail -->

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>