<?php
session_start();
include '../../Controller/Setting/SliderController.php';
if (!isset($_SESSION["authority"])) {
    header('Location: ../../View/errors/wrongPath.php');
    exit();
};
if ($_SESSION['authority'] != 0) {
    header('Location: ../../View/errors/noPermission.php');
    exit();
}
?>
<?php include '../../Controller/admin/AdminEditController.php' ?>



<?php session_start();
if (!isset($_SESSION['gaphotoerror_Edit'])) {
    $_SESSION['gaphotoerror_Edit'] = '';
}

if (!isset($_SESSION["gapassworderror_Edit"])) {
    $_SESSION["gapassworderror_Edit"] = '';
}

if (!isset($_SESSION["gaemailerror_Edit"])) {
    $_SESSION["gaemailerror_Edit"] = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet" />

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet">

    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <script src="../resources/js/profile.js"></script>

    <title>Home Guru</title>
</head>

<body class="bg-primary dark:bg-gray-700 ">
    <?php include '../commonView/menu.php' ?>
    <div class="flex flex-col items-center pt-20 sm:ml-64">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide  dark:text-white">Edit Admin </h1>
        <!--Start Add  Admin Form  -->
        <form class="" action="../../Controller/admin/AdminUpdateController.php" method="post">
            <input type="text" class="hidden" name="ga_id" value="<?= $adminOne[0]['id'] ?>">
            <div class="grid grid-cols-2 gap-20 ">
                <div class="grid grid-rows-4 gap-5">
                    <div class="lg:w-72 w-28">
                        <label for="ga_name" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Full Name
                        </label>
                        <input type="text" name="ga_name" id="ga_name" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $adminOne[0]['ga_name']; ?>">
                    </div>
                    <div class="lg:w-72 w-28">
                        <label for="ga_nrc" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            National ID
                        </label>
                        <input type="text" name="ga_nrc" id="ga_nrc" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $adminOne[0]['ga_nrc']; ?>">
                    </div>
                    <div class="lg:w-72 w-28">
                        <label for="ga_dob" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Date of Birth</label>
                        <input type="date" name="ga_dob" id="ga_dob" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $adminOne[0]['ga_dob']; ?>">
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="ga_gender" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Gender</label>
                        <select name="ga_gender" class="lg:w-72 w-28 px-5 py-2.5 rounded-lg  border-2  bg-gray-50 border-gray-300  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Select Gender</option>
                            <?php if ($admin[0]['ga_gender'] == 1) { ?>
                                <option selected value="1">Male</option>
                            <?php } else { ?>
                                <option value="1">Male</option>
                            <?php } ?>
                            <?php if ($admin[0]['ga_gender'] == 2) { ?>
                                <option selected value="2">Female</option>
                            <?php } else { ?>
                                <option value="2">Female</option>
                            <?php } ?>
                            <?php if ($admin[0]['ga_gender'] == 3) { ?>
                                <option selected value="3">Other</option>
                            <?php } else { ?>
                                <option value="3">Other</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="grid grid-rows-4 gap-5">
                    <div class="flex items-center   lg:w-72 w-28">
                        <label for="imageInput" id="imageLabel">
                            <img name="photo" class="w-24 mr-10" id="preview" src='<?= "../../../Storage/admin_img/ga" . $adminOne[0]['id'] . "/" . $adminOne[0]['ga_photo'] ?>' alt="Image Preview" style="max-width: 300px; max-height: 300px; cursor: pointer;">
                        </label>
                        <span class="text-sm font-semibold text-gray-500 dark:text-white">Profile</span>
                        <input type="file" name="ga_photo" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)">
                        <div class="mb-2">
                            <small class="text-alert text-sm">
                                <?= $_SESSION["gaphotoerror_Edit"]; ?>
                            </small>
                        </div>
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="ga_phone" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Phone Number
                        </label>
                        <input type="text" name="ga_phone" id="ga_phone" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $adminOne[0]['ga_phone_num']; ?>">
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="ga_email" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Email
                        </label>
                        <input type="text" name="ga_email" id="ga_email" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $adminOne[0]['ga_email']; ?>">
                        <div class="mb-2">
                            <small class="text-alert text-sm">
                                <?= $_SESSION["gaemailerror_Edit"]; ?>
                            </small>
                        </div>
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="ga_password" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            Password
                        </label>
                        <input type="text" name="ga_password" id="ga_password" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="* * * * * * * *">
                        <div class="mb-2">
                            <small class="text-alert text-sm">
                                <?= $_SESSION["gapassworderror_Edit"]; ?>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-72 w-28">
                <label for="ga_address" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                    Address
                </label>
                <textarea name="ga_address" id="ga_address" rows="4" class="block p-2.5 lg:w-full lg:h-32  h-40 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><?= $adminOne[0]['ga_address']; ?>
                </textarea>
            </div>
            <div class="relative float-right   my-20">
                <button href="#" name="a_update" type="submit" class="text-white bg-darkGreen hover:bg-blue-800 
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center 
                dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Update</button>
                <a href="./admin_detail.php?id=<?= $adminOne[0]['id'] ?>" type="" class="ml-5 text-darkGreen border-2 border-green-700 bg-transparent hover:bg-alert hover:text-white
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center 
                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Cancle</a>
            </div>

        </form>
        <!--End Add  Admin Form  -->

    </div>

</body>

</html>

<?php
$_SESSION['gaphotoerror_Edit'] = "";
$_SESSION["gapassworderror_Edit"] = "";
$_SESSION["gaemailerror_Edit"] = "";
?>