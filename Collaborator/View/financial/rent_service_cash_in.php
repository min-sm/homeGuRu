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
 <?php include '../common/menu.php' ?>
  <!--Start  Rent Service Cash In Detail -->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center">
        <div class=" lg:w-2/5 w-full grid grid-row-6 gap-6">
            <h1 class=" font-bold text-4xl my-7 tracking-wide ">Rent Service Cash In</h1>

            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Property Code</p>
                <p name="p_code" class="font-normal text-sm">GR-1</p>
            </div>
         
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" > Cash Amount</p>
                <p name="pcash_amount" class="font-normal text-sm">300,000 Kyats</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" >Payer Name</p>
                <p name="pcash_payer_name" class="font-normal text-sm">John</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" >Payer Phone</p>
                <p name="pcash_phone" class="font-normal text-sm">(+95) 9876543210</p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" >Recipient Name</p>
                <p name="pcash_recipient_name" class="font-normal text-sm">Mary</p>
            </div>
           
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg" >Pay Date</p>
                <p name="created_date" class="font-bold  text-sm ">30/ 09/ 2023  12:30 PM </p>
            </div>     
        </div>
        <div class=" flex  my-20 ">
            <a href="./financial_rent_edit.php" type="submit"
                class="tracking-wider text-white bg-goldYellow opacity-75 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  ">
                Edit </a>

            <a href="./financial_rent_list.php" type=""
                class="tracking-wider mx-10 text-white border-2 border-green-700 bg-alert opacity-80 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                Cancel</a>
        </div>
    </div>
 <!--End  Rent Service Cash In Detail  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>