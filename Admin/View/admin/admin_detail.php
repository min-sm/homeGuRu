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
  <!--Start  Admin Detail -->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Admin Detail</h1>
        <div class=" lg:w-1/2 w-full grid grid-row-13 gap-4">
            <img class="w-30" src="../resources/img/common/profile.png" alt="">
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">ID</p>
                <p name="ga_id">GA-1</p>
            </div>
         
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" > Name</p>
                <p name="ga_name"> John </p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" >National ID</p>
                <p name="ga_nrc">12/ TaTaTa (N) 123456</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" >Date of Birth</p>
                <p name="ga_nrc">11/07/2000</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" >Gender</p>
                <p name="ga_nrc">male</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" >Email Address</p>
                <p name="ga_email">info@margaglobal.com</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" >Phone Number</p>
                <p name="ga_phone">(+95) 1 4700 111</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" >Address</p>
                <p name="ga_address">Corner of Kabar Aye Pagoda Road and Kanbe Road, Shop 5, The Central Boulevard, Yankin Township, Yangon, Myanmar.</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" >Joined Date</p>
                <p name="ga_created_date">30/ 09/ 2023 </p>
            </div>     
        </div>
        <div class=" flex  my-10 ">
            <a href="./admin_edit.php" type="submit"
                class="tracking-wider text-white bg-goldYellow opacity-75 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  ">
                Edit Detail</a>

            <button type=""
                class="tracking-wider mx-10 text-white border-2 border-green-700 bg-alert opacity-80 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                Cancel</button>
        </div>
    </div>
 <!--End  Admin Detail  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>