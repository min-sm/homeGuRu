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
  <!--Start Add Interest People Form  -->
    <div class=" flex flex-col items-center p-4 sm:ml-64">
        <h1 class="  font-bold text-4xl mt-5 mb-12">Add Interest People</h1>
        <form class="relative">
            <div class="grid grid-cols-2 gap-20 ">
                <div class="grid grid-rows-3 gap-5">
                    <div class="lg:w-72 w-28">
                        <label for="ilf_name" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                           Name</label>
                        <input type="text" name="ilf_name" id=""
                            class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder=" ">
                    </div>
                    <div class="lg:w-72 w-28">
                        <label for="ilf_email" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                           Email</label>
                        <input type="text" name="ilf_email" id=""
                            class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder=" ">
                    </div>
                    <div class="lg:w-72 w-28">
                        <label for="ilf_phone" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                           Phone Number</label>
                        <input type="text" name="ilf_phone" id=""
                            class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder=" ">
                    </div>
                </div>

                <div class="grid grid-rows-3 gap-5">
                    <div class="   lg:w-72 w-28">
                        <label for="ilf_appointment_date"
                            class="block ml-5 mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                           View Date</label>
                        <input type="date" name="ilf_appointment_date" id=""
                            class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="">

                    </div>
                    <div class=" lg:w-72 w-28">
                        <label for="ilf_appointment_time" class="block mb-2 text-sm font-semibold text-gray-500 dark:text-white">
                            View Time</label>
                        <input type="text" name="ilf_appointment_time" id=""
                            class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="">
                    </div>
                   
                </div>
                
            </div>
            <div class="">
                <label for="ilf_note"
                    class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                    Note</label>
                <textarea name="ilf_note" id="ilf_note" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write note Here....."></textarea>
            </div>

            <div class=" relative float-right my-5">
                <button type="submit" class="mr-4 text-white bg-darkGreen hover:bg-blue-800 
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-xl rounded-lg text-medium px-8 py-2 text-center 
                dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wide">
                   Add </button>
                <button type="" class=" text-darkGreen border-2 border-green-700 bg-transparent hover:bg-alert hover:text-white
                focus:ring-4 focus:outline-none focus:ring-blue-300 font-xl rounded-lg text-medium  px-7 py-2 text-center 
                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 tracking-wide">
                    Cancle</button>
            </div>
         
        </form>
        



    </div>
    <!--End Add Interest People Form  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>