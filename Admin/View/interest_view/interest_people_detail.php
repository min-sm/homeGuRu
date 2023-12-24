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
 <!-- heading navigation -->
 <?php include '../commonView/menu.php' ?>
    <!--Start Interest People Detail -->
    <div class="p-4 sm:ml-64 flex flex-col items-center">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Interest People Detail</h1>
        <div class=" lg:w-1/2 w-full grid grid-row-13 gap-4">
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg"> Name</p>
                <p name="ga_name"> John </p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Email </p>
                <p name="ga_email">info@margaglobal.com</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Phone </p>
                <p name="ga_phone">(+95) 1 4700 111</p>
            </div>
           
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">View Date</p>
                <p name="ga_nrc">11/01/2024</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">View Time</p>
                <p name="ga_nrc">02:00PM</p>
            </div>
                      
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Note</p>
                <p name="ga_address">
                    I hope this message finds you well.I recently came across your listing for the room available for rent on your website.
                    Iam very interested in moving forward with the rental process and please let me know your availability for a discussion or if there are specific times that work best for you.
                    </p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Joined Date</p>
                <p name="ga_created_date">30/ 09/ 2023 </p>
            </div>
        </div>
        <div class=" flex  my-10 ">
            <a href="./interest_people_edit.php" type="submit"
                class="tracking-wider text-white bg-goldYellow opacity-75 hover:opacity-100
                first-letter:focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  ">
                Edit Detail</a>

            <a href="./interest_people_list.php" type=""
                class="tracking-wider mx-10 text-white border-2 border-green-700 bg-alert opacity-80 hover:opacity-100
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                Cancle</a>
        </div>
    </div>
    <!--End Interest People Detail  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>