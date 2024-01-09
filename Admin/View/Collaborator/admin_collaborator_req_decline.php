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
    <!--Start  Collaborator Request Decline -->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide ">Collaborator Request Decline</h1>
        <ion-icon class="text-alert text-[5rem] m-10" name="close-circle-outline"></ion-icon>
        <div class="tracking-wide w-2/5 lg:h-24 h-48 mb-10 p-3 bg-gray-50 border-2 border-gray-300 rounded-lg ">
            Your request for to be our collaborator is declined. The information for `Company Name` and `Logo` are not complete.
        </div>
        
        <button type="submit" class="tracking-wider text-white bg-darkGreen hover:bg-blue-800 
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center 
            dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Send
        </button>
        <a href="" class="text-blue-500 m-20 underline underline-offset-2">Go Back To Dashboard</a>

    </div>
    <!--End  Collaborator Request Decline  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>