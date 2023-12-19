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

<body>
    <?php include '../commonView/menu.php' ?>
    <!--Start  Collaborator Account Create -->
    <div class="p-4 pt-20  sm:ml-64 flex flex-col items-center">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Create Collaborator  Account </h1>
        <div class=" lg:w-1/2 w-full grid grid-row-8 gap-2">
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
                <p name="gc_address">Corner of Kabar Aye Pagoda Road and Kanbe Road, Shop 5, The Central Boulevard,
                    Yankin Township, Yangon, Myanmar.</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Requested Date</p>
                <p name="gc_created_date">3/12/2023 </p>
            </div>
        </div>
        <hr class="w-[35rem] border-2 text-gray-500 my-4">
        <form class="w-1/2">
            <input type="text" name="gc_email" id="" class="lg:w-72 w-28 my-5  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email">
            <input type="text" name="gc_password" id="" class="lg:w-72 w-28  my-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password">
            <a href="./collaborator_list.php" type="submit" class=" relative float-right my-20 text-xl font-bold text-white bg-darkGreen hover:bg-blue-800 
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-xl rounded-lg text-medium px-5 py-2 text-center 
            dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wide">
                Create Account </a>
        </form>
    </div>
    <!--End  Collaborator Account Create  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>