<?php
if (!isset($_SESSION["authority"])) {
    header('Location: ../../View/errors/wrongPath.php');
    exit();
};

?>
<?php
session_start();
if (!isset($_SESSION["photoerror"])) {
    $_SESSION["photoerror"] = "";
}
if (!isset($_SESSION["emailerror"])) {
    $_SESSION["emailerror"] = "";
}
if (!isset($_SESSION["passworderror"])) {
    $_SESSION["passworderror"] = "";
}
if( (!isset($_SESSION["ccompanyName"])) || (!isset($_SESSION["ccompanyId"])) 
|| (!isset($_SESSION["cemail"])) || (!isset($_SESSION["cpassword"])) 
|| (!isset($_SESSION["cownerName"])) || (!isset($_SESSION["cownerNrc"])) 
|| (!isset($_SESSION["cphone"])) || (!isset($_SESSION["caddress"])) 
){
    $_SESSION["ccompanyName"] = "";
    $_SESSION["ccompanyId"] = "";
    $_SESSION["cemail"] = "";
    $_SESSION["cpassword"] = "";
    $_SESSION["cownerName"] = "";
    $_SESSION["cownerNrc"] = "";
    $_SESSION["cphone"] = "";
    $_SESSION["caddress"] = "";
}

?>
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

    <!-- JS -->
    <script src="../resources/js/profile.js"></script>
    <script src="../resources/js/collaborator/collaborator_add.js" defer></script>

</head>

<body class="bg-primary dark:bg-gray-700 tracking-wide">
    <?php include '../commonView/menu.php' ?>
    <!--Start  Collaborator  Add-->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center">
        <h1 class="text-center font-bold text-3xl  dark:text-gray-400 m-7 tracking-wide ">Collaborator Add </h1>
        <form id="aForm" class="lg:w-3/5 w-full" action="../../Controller/collaborator/CollaboratorAllAddController.php" method="post" enctype="multipart/form-data">
            <div class="grid grid-cols-2 gap-20  mb-5">
                <div class="flex items-center   lg:w-72 w-28">
                    <label for="imageInput" id="imageLabel">
                        <img class="w-40 mr-10" id="preview" src="../resources/img/common/blank photo.png" alt="Image Preview" style="max-width: 300px; max-height: 300px; cursor: pointer;">
                    </label>
                    <span class="text-sm font-semibold text-gray-500 dark:text-white">Company Logo</span>
                    <input type="file" name="gc_photo" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(event)" >
                </div>
            </div>
            <div class="mb-2">
                <small class="text-alert text-sm"><?= $_SESSION["photoerror"] ?></small>
            </div>
            <div class="grid grid-cols-2 gap-20">
                <!--Start  Company Info -->
                <div class="grid grid-rows-4 gap-2">
                    
                    <div class="lg:w-72 w-28">
                        <label for="gc_company_name" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            Company Name
                        </label>
                        <input type="text" name="gc_company_name" id="gc_company_name" class=" g-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" Home GuRu Co.,Ltd" value= '<?= $_SESSION["ccompanyName"]; ?>' >
                    </div>
                    <div class="lg:w-72 w-28">
                        <label for="gc_company_id " class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            Company ID Number
                        </label>
                        <input type="text" name="gc_company_id" id="gc_company_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="23457" value= '<?= $_SESSION["ccompanyId"]; ?>' >
                    </div>
                    <div class="lg:w-72 w-28">
                        <label for="gc_email" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            Email
                        </label>
                        <input type="text" name="gc_email" id="gc_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="johnsmith@gmail.com" value= '<?= $_SESSION["cemail"]; ?>' >
                        <div class="mb-2">
                            <small class="text-alert text-sm"><?= $_SESSION["emailerror"] ?></small>
                        </div>
                    </div>
                    <div class="lg:w-72 w-28">
                        <label for="gc_password" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            Password
                        </label>
                        <input type="password" name="gc_password" id="gc_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        <div class="mb-2">
                            <small class="text-alert text-sm"><?= $_SESSION["passworderror"] ?></small>
                        </div>
                    </div>
                </div>
                <!--End  Company Info -->

                <!--Start  Company Owner Info -->
                <div class="grid grid-rows-4 gap-2">
                    <div class=" lg:w-72 w-28">
                        <label for="gc_owner_name" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            Owner Name
                        </label>
                        <input type="text" name="gc_owner_name" id="gc_owner_name" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="U John Smith" value='<?= $_SESSION["cownerName"]; ?>' >
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="gc_nrc" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            National ID
                        </label>
                        <input type="text" name="gc_nrc" id="gc_nrc" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12/ TaTaTa (N) 123456" value='<?= $_SESSION["cownerNrc"]; ?>' >
                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="gc_phone" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                            Phone Number
                        </label>
                        <input type="text" name="gc_phone" id="gc_phone" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="(+95) 9123456789" value='<?= $_SESSION["cphone"]; ?>' >
                    </div>
                </div>
                <!--End  Company Owner Info -->

            </div>
            <div class="">
                <div class="my-5 lg:w-full w-40 ">
                    <label for="gc_address" class="block mb-2 text-md font-semibold text-gray-500 dark:text-white">
                        Address
                    </label>
                    <textarea name="gc_address" id="gc_address" rows="4" class="block p-2.5 lg:w-full lg:h-20  h-40 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1096 Shwe Taung Gyar St, Yangon" > <?= $_SESSION["caddress"]; ?> </textarea>
                </div>
            </div>
            <div class=" flex float-right  my-10 ">
                <button type="submit" name="gc_add" class="tracking-wider text-white bg-goldYellow opacity-75 hover:opacity-100
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  ">
                    Add
                </button>
                <a href="./admin_collaborator_list.php" class="tracking-wider ml-10 text-white  bg-alert opacity-80 hover:opacity-100
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                    Cancel
                </a>
            </div>
        </form>
    </div>
    <!--End  Collaborator  Add  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>

<?php 
    $_SESSION["photoerror"] = ""; 
    $_SESSION["emailerror"] = ""; 
    $_SESSION["passworderror"] = ""; 
    $_SESSION["photo"] = "";
    $_SESSION["ccompanyName"] = "";
    $_SESSION["ccompanyId"] = "";
    $_SESSION["cemail"] = "";
    $_SESSION["cpassword"] = "";
    $_SESSION["cownerName"] = "";
    $_SESSION["cownerNrc"] = "";
    $_SESSION["cphone"] = "";
    $_SESSION["caddress"] = "";

?>