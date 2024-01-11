<?php
session_start();


if (!isset($_SESSION["authority"])) {
    header('Location: ../../View/errors/wrongPath.php');
    exit();
};
if ($_SESSION['authority'] != 0) {
    header('Location: ../../View/errors/noPermission.php');
    exit();
}
?>
<?php include '../../Controller/admin/AdminDetailController.php' ?>

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

    <!--JS-->
    <script src="../resources/js/admin/activity_status_motal.js" defer></script>

</head>

<body class="bg-primary dark:bg-gray-700 ">
    <?php include '../commonView/menu.php' ?>
    <!--Start  Admin Detail -->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center  dark:text-gray-200">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Admin Detail</h1>
        <div class=" lg:w-1/2 w-full grid grid-row-13 gap-4">
            <img class="w-32 mb-5" src='<?php echo "../../../Storage/admin_img/ga" . $admin[0]['id'] . "/" . $admin[0]['ga_photo'] ?>' alt="">
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">ID</p>
                <p name="ga_id" class="text-sm tracking-wider">GA-<?= $admin[0]['id'] ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg"> Name</p>
                <p name="ga_name" class="text-sm"> <?= $admin[0]['ga_name'] ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Admin Status</p>
                <?php
                if ($admin[0]['ga_status'] == 0) {
                ?>
                    <p class=" text-goldYellow font-semibold ">
                        Super
                    </p>
                <?php
                } else {
                ?>
                    <p class="text-goldYellow font-bold ">
                        Normal
                    </p>
                <?php
                }
                ?>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">National ID</p>
                <p name="ga_nrc" class="text-sm"><?= $admin[0]['ga_nrc'] ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Date of Birth</p>
                <p name="ga_dob" class="text-sm">
                    <?= $admin[0]['ga_dob'] = date("d / m / Y ", strtotime($admin[0]['ga_dob'])); ?>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Gender</p>
                <?php
                if ($admin[0]['ga_gender'] == 1) {
                ?>
                    <p name="ga_nrc" class="font-semibold text-sm">
                        Male
                    </p>
                <?php
                } else {
                ?>
                    <p name="ga_nrc" class="font-semibold text-sm">
                        Female
                    </p>
                <?php
                }
                ?>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Email Address</p>
                <p name="ga_email" class="text-sm"><?= $admin[0]['ga_email'] ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Phone Number</p>
                <p name="ga_phone" class="text-sm"><?= $admin[0]['ga_phone_num'] ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Address</p>
                <p name="ga_address" class="text-sm"><?= $admin[0]['ga_address'] ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Joined Date</p>
                <p name="ga_created_date" class="text-sm">
                    <?= $admin[0]['created_date'] = date("d / m / Y ", strtotime($admin[0]['created_date'])); ?>
                </p>
            </div>
        </div>
        <div class=" flex  my-10 ">
            <a href="./admin_edit.php?id=<?= $admin[0]['id'] ?>" type="submit" class="tracking-wider text-white bg-goldYellow opacity-75 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  ">
                Edit Detail</a>
            <a href="./admin_list.php" class="tracking-wider mx-10 text-white border-2 border-green-700 bg-alert opacity-80 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                Cancle</a>
            <?php $activity = $admin[0]["ga_status"];
            $activityStatus = $activity == 0 ? "Super OFF" : "Super ON";
            $activityColor = $activity == 0 ? "bg-darkGreen" :  "bg-paleGray ";

            ?>
            <a name='activity_status' href="#" onclick="confirmation( '../../Controller/admin/AdminStatusController.php?id=<?= $admin[0]['id'] ?>')" class="tracking-wider <?= $activityColor  ?>  text-alert opacity-75 hover:opacity-100 hover:bg-darkGreen
            border-2 border-darkGreen font-semibold rounded-lg text-medium px-8 py-2 text-center ">
                <?= $activityStatus; ?>
            </a>
        </div>
    </div>
    <!--End  Admin Detail  -->


    <!-- Modal-->
    <div id="activityModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center;">
        <div style="background: white; padding: 40px; border-radius: 8px; width: 300px; text-align: center;">
            <p class="mb-5">Are you sure to
                <span class="font-semibold text-alert"> <?= $activityStatus; ?></span>?
                Admin <span class="font-semibold"> <?= $admin[0]['ga_name']; ?></span>
            </p>
            <button class="text-white rounded hover:bg-goldYellow bg-alert py-1 px-4 " onclick="confirmActivity()">Confirm</button>
            <button class="text-white rounded hover:bg-goldYellow bg-darkGreen py-1 px-4 " onclick="hideModal()">Cancel</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>