<?php include'../../Controller/Collaborator/CollaboratorALLRequestPreviewController.php'?>
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

<body class="bg-primary dark:bg-gray-700">
    <?php include '../commonView/menu.php' ?>
    <!--Start  Collaborator Request Preview -->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center  dark:text-gray-200">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Collaborator Request Preview</h1>
        <div class=" lg:w-1/2 w-full grid grid-row-8 gap-2">
            <img class="w-40" src='<?php echo"../../../Storage/collaborator_img/gc".$requestOne[0]['id']."/".$requestOne[0]['gc_logo']?>' alt="">
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company Name</p>
                <p name="gc_name text-sm"><?=$requestOne[0]['gc_company_name'];?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company ID Number</p>
                <p name="gc_company_Id text-sm"><?=$requestOne[0]['gc_company_id'];?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Owner Name</p>
                <p name="gc_owner_name text-sm"><?=$requestOne[0]['gc_owner_name'];?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">National ID</p>
                <p name="gc_owner_nrc text-sm"><?=$requestOne[0]['gc_owner_nrc'];?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Email Address</p>
                <p name="gc_email text-sm"><?=$requestOne[0]['gc_email'];?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Phone Number</p>
                <p name="gc_phone"><?=$requestOne[0]['gc_phone_num'];?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Address</p>
                <p name="gc_address text-sm"><?=$requestOne[0]['gc_address'];?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Requested Date</p>
                <p name="gc_created_date text-sm"><?=$requestOne[0]['created_date']
                =date("d-m-Y  g:i A", strtotime($requestOne[0]['created_date'])) ;?></p>
            </div>
        </div>
        <div class=" flex  my-5 ">
            <a href="../../Controller/Collaborator/RequestListAcceptController.php?id=<?= $requestOne[0]['id'] ?>" class="tracking-wider text-white bg-darkGreen hover:bg-blue-800 
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center 
            dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Make Appointment</a>
            <a href="./collaborator_request_list.php" type="" class="tracking-wider mx-10 text-white border-2 border-green-700 bg-alert opacity-80 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center 
            dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Decline</a>
        </div>
    </div>
    <!--End  Collaborator Request Preview  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>