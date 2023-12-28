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
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Company Name Profile</h1>
        <div class=" lg:w-1/2 w-full grid grid-row-13 gap-2">
            <img class="w-40" src="../resources/img/marga.png" alt="">
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company Name</p>
                <p name="gc_name">MARGA GROUP Co.,Ltd</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company ID Number</p>
                <p name="gc_company_Id">123456</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Owner Name</p>
                <p name="gc_owner_name">U John Smith</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">National ID</p>
                <p name="gc_owner_nrc">12/ TaTaTa (N) 123456</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Email Address</p>
                <p name="gc_email">info@margaglobal.com</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Phone Number</p>
                <p name="gc_phone">(+95) 1 4700 111</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Address</p>
                <p name="gc_address">Corner of Kabar Aye Pagoda Road and Kanbe Road, Shop 5, The Central Boulevard, Yankin Township, Yangon, Myanmar.</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Package</p>
                <p name="s_package_id" class="text-alert">Expired</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Duration</p>
                <p name="s_duration">3months </p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Bought Date</p>
                <p name="s_created_date">30/ 09/ 2023 </p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Expire Date</p>
                <p name="">01/ 12/ 2023 </p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Days Left B4 Expire</p>
                <p name="gc_created_date" class="text-alert">30days </p>
            </div>
        </div>
        <div class=" flex  my-16 ">
            <a href="./collaborator_profile_edit.php" type="submit" class="tracking-wider text-white bg-goldYellow opacity-75 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  ">
                Edit </a>

            <button type="" class="tracking-wider mx-10 text-white border-2 border-green-700 bg-alert opacity-80 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                Cancel</button>

        </div>
        <hr class="w-[35rem] border-2 text-gray-500">

    </div>
    <!--End  Collaborator Detail -->

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>