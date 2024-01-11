<?php
if (!isset($_SESSION["authority"])) {
    header('Location: ../../View/errors/wrongPath.php');
    exit();
};

?>
<?php
if (!isset($_SESSION["emailerror"])) {
    $_SESSION["emailerror"] = "";
}
if (!isset($_SESSION["passworderror"])) {
    $_SESSION["passworderror"] = "";
}
if(!isset($_SESSION["email"])){
    $_SESSION["email"] = "";
}
if(!isset($_SESSION["password"])){
    $_SESSION["password"] = "";
}
?>

<?php include '../../Controller/Collaborator/CollaboratorAllCreateAccountDetailController.php' ?>


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
    <script src="../../View/resources/js/collaborator/admin_create_account_collaborator.js" defer></script>

</head>

<body class="bg-primary dark:bg-gray-700 tracking-wide">
    <?php include '../commonView/menu.php' ?>
    <!--Start  Collaborator Account Create -->
    <div class="p-4 pt-20  sm:ml-64 flex flex-col items-center dark:text-gray-200">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Create Collaborator Account </h1>
        <div class=" lg:w-1/2 w-full grid grid-row-8 gap-2">
            <img class="w-40" src='<?php echo "../../../Storage/collaborator_img/gc" . $requestOne[0]['id'] . "/" . $requestOne[0]['gc_logo'] ?>' alt="">
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company Name</p>
                <p name="gc_name text-sm"><?= $requestOne[0]['gc_company_name']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company ID Number</p>
                <p name="gc_company_Id text-sm"><?= $requestOne[0]['gc_company_id']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Owner Name</p>
                <p name="gc_owner_name text-sm"><?= $requestOne[0]['gc_owner_name']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">National ID</p>
                <p name="gc_owner_nrc text-sm"><?= $requestOne[0]['gc_owner_nrc']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Email Address</p>
                <p name="gc_email text-sm"><?= $requestOne[0]['gc_email']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Phone Number</p>
                <p name="gc_phone"><?= $requestOne[0]['gc_phone_num']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Address</p>
                <p name="gc_address text-sm"><?= $requestOne[0]['gc_address']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Requested Date</p>
                <p name="gc_created_date text-sm"><?= $requestOne[0]['created_date']
                                                        = date("d-m-Y  g:i A", strtotime($requestOne[0]['created_date'])); ?></p>
            </div>
        </div>
        <hr class="w-[35rem] border-2 text-gray-500 my-4">
        <form class="w-1/2" id="cForm" action="../../Controller/Collaborator/CreateAccountController.php" method="post" enctype="multipart/form-data">
            <input type="text" class="hidden" name="gc_id" value="<?= $requestOne[0]['id']; ?>">
            <input type="text" name="gc_email" id="gc_email" class="lg:w-72 w-28 mt-5  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" value=<?= $requestOne[0]['gc_email']; ?>>
            <div class="mb-5">   
                <small class="block  font-medium text-left text-red-600">
                <?= $_SESSION["emailerror"]; ?>
                </small>
             </div> 

            <input type="password" name="gc_password" id="gc_password" class="lg:w-72 w-28  mt-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password" >
            <div class="mb-5">   <small class="block  font-medium text-left text-red-600"><?= $_SESSION["passworderror"] ?></small> </div> 

            <div class="relative float-right">
                <button name="create_collaborator_account" type="submit" class="  my-20 text-xl font-bold text-white bg-darkGreen hover:bg-blue-800 
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-xl rounded-lg text-medium px-5 py-2 text-center 
                dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wide">
                    Create Account </button>
                <a href="./collaborator_pending_list.php" type="" class="tracking-wider mx-10 text-white border-2 border-green-700 bg-alert opacity-80 hover:opacity-100
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center 
            dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Cancel</a>
            </div>

        </form>
    </div>
    <!--End  Collaborator Account Create  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>

<?php
$_SESSION["emailerror"]= " ";
$_SESSION["passworderror"]= " ";
$_SESSION["email"]= " ";
$_SESSION["password"]= " ";


?>