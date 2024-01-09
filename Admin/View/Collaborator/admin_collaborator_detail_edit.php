<?php include '../../Controller/Collaborator/CollaboratorAllEditController.php' ?>

<?php session_start();
if (!isset($_SESSION['cphotoerror_Edit'])) {
    $_SESSION['cphotoerror_Edit'] = '';
}

if (!isset($_SESSION["cpassworderror_Edit"])) {
    $_SESSION["cpassworderror_Edit"] = '';
}

if (!isset($_SESSION["cemailerror_Edit"])) {
    $_SESSION["cemailerror_Edit"] = '';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/css/dist/output.css" rel="stylesheet" />
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

    <!-- JS -->
    <script src="../resources/js/profile.js"></script>
</head>

<body class="bg-primary dark:bg-gray-700">
    <?php include '../commonView/menu.php' ?>

    <!--Start  Collaborator Detail Edit-->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center  dark:text-white ">
        <h1 class=" text-center font-bold   text-2xl m-7 tracking-wide ">Collaborator Edit Detail</h1>
        <form class="lg:w-3/5 w-full" action="../../Controller/Collaborator/CollaboratorAllUpdateController.php" method="post" enctype="multipart/form-data">
            <input type="text" class="hidden" name="gc_id" value="<?= $collaboratorOne[0]['id']; ?>">
            <div class="grid grid-cols-2 gap-20  mb-5">
                <div class="flex items-center   lg:w-72 w-28">
                    <label for="imageInput" id="imageLabel">
                        <img class="w-36 mr-10" id="preview" src='<?= "../../../Storage/collaborator_img/gc" . $collaboratorOne[0]['id'] . "/" . $collaboratorOne[0]['gc_logo'] ?>' alt="Image Preview" style="max-width: 300px; max-height: 300px; cursor: pointer;">
                    </label>
                    <span class="text-sm font-semibold text-gray-500 dark:text-white">Company Logo</span>
                    <input type="file" name="gc_photo" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)">
                </div>
            </div>
            <div class="mb-2">
                <small class="text-alert text-sm">
                    <?= $_SESSION["cphotoerror_Edit"]; ?>
                </small>
            </div>
            <div class="grid grid-cols-2 gap-20 ">
                <!--Start  Company Info -->
                <div class="grid grid-rows-4 gap-5">
                    <div class="lg:w-72 w-28">
                        <label for="gc_company_name" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            Company Name
                        </label>
                        <input type="text" name="gc_company_name" id="gc_company_name" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value='<?= $collaboratorOne[0]['gc_company_name']; ?>'>
                    </div>

                    <div class="lg:w-72 w-28">
                        <label for="gc_company_id " class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            Company ID Number
                        </label>
                        <input type="text" name="gc_company_id" id="gc_company_id" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value='<?= $collaboratorOne[0]['gc_company_id']; ?>'>
                    </div>
                    <div class="lg:w-72 w-28">
                        <label for="gc_email" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            Email
                        </label>
                        <input type="text" name="gc_email" id="gc_email" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value='<?= $collaboratorOne[0]['gc_email']; ?>'>
                        <div class="mb-2">
                            <small class="text-alert text-sm">
                                <?= $_SESSION["cemailerror_Edit"]; ?>
                            </small>
                        </div>
                    </div>
                    <div class="lg:w-72 w-28">
                        <label for="gc_password" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            Password
                        </label>
                        <input type="password" name="gc_password" id="gc_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="* * * * * * * *" value=''>
                        <div class="mb-2">
                            <small class="text-alert text-sm">
                                <?= $_SESSION["cpassworderror_Edit"]; ?>
                            </small>
                        </div>
                    </div>

                </div>
                <!--End  Company Info -->

                <!--Start  Company Owner Info -->
                <div class="grid grid-rows-4 gap-5">
                    <div class=" lg:w-72 w-28">
                        <label for="gc_owner_name" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            Owner Name</label>
                        <input type="text" name="gc_owner_name" id="gc_owner_name" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value='<?= $collaboratorOne[0]['gc_owner_name']; ?>'>
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="gc_owner_nrc" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            National ID</label>
                        <input type="text" name="gc_owner_nrc" id="gc_nrc" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value='<?= $collaboratorOne[0]['gc_owner_nrc']; ?>'>
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="gc_phone" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            Phone Number</label>
                        <input type="text" name="gc_phone" id="gc_phone" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value='<?= $collaboratorOne[0]['gc_phone_num']; ?>'>
                    </div>
                </div>
                <!--End  Company Owner Info -->
            </div>

            <div class="">
                <div class="my-5 lg:w-full w-40 ">
                    <label for="gc_address" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                        Address</label>
                    <textarea name="gc_address" id="gc_address" rows="4" class="block p-2.5 lg:w-full lg:h-20  h-40 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><?= $collaboratorOne[0]['gc_address']; ?>
                    </textarea>
                </div>
            </div>
            <div class=" flex float-right  my-10 ">
                <button type="submit" name="c_update" class="tracking-wider text-white bg-goldYellow opacity-75 hover:opacity-100
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  ">
                    Update</button>

                <a href="../../View/Collaborator/admin_collaborator_detail_preview.php?id=<?= $collaboratorOne[0]['id']; ?>" class="tracking-wider ml-10 text-white  bg-alert opacity-80 hover:opacity-100
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                    Cancel</a>
            </div>

        </form>




    </div>
    <!--End  Collaborator Request Preview  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>
<?php
$_SESSION['cphotoerror_Edit'] = "";
$_SESSION["cpassworderror_Edit"] = "";
$_SESSION["cemailerror_Edit"] = "";
?>