<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/css/dist/output.css" rel="stylesheet" />


    <title>Dashboard</title>

    <script src="../resources/js/financial_total_filter.js" defer></script>

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
 <!-- heading navigation -->
 <?php include '../commonView/menu.php' ?>
    <div class="pt-20 sm:ml-64">
        <!--Start  Financial Total Filter Date -->
        <div class="flex flex-col items-center justify-center tracking-wider">
            <h1 class="text-center font-bold text-5xl mt-5 mb-12">Financial Total </h1>
            <form class="w-3/5">
                <div class="grid grid-cols-2 gap-20  mb-4">
                    <div class="flex flex-col lg:w-72 w-28">
                        <label for="start_date" class="block mb-2 text-xl font-semibold text-gray-500 dark:text-white">
                            Start Date</label>
                        <input type="date" name="start_date" id="start_date"
                            class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="  ">
                    </div>
                    <div class="flex flex-col lg:w-72 w-28">
                        <label for="end_date" class="block mb-2 text-xl font-semibold text-gray-500 dark:text-white">
                            End Date</label>
                        <input type="date" name="start_date" id="start_date"
                            class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="  ">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-20 ">
                    <div class="flex flex-col lg:w-72 w-28">
                        <label for="end_date" class="block mb-2 text-xl font-semibold text-gray-500 dark:text-white">
                            Duration</label>
                        <div class="flex">
                            <div class="flex items-center me-4">
                                <input checked id="inline-radio" type="radio" value="" name="inline-radio-group"
                                    class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-radio"
                                    class="ms-2 text-medium font-medium text-gray-900 dark:text-gray-300">Daily</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-2-radio" type="radio" value="" name="inline-radio-group"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-2-radio"
                                    class="ms-2 text-medium font-medium text-gray-900 dark:text-gray-300">Monthly</label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-checked-radio" type="radio" value="" name="inline-radio-group"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-checked-radio"
                                    class="ms-2 text-medium font-medium text-gray-900 dark:text-gray-300">Yearly</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="lg:w-1/2 w-20 h-10 text-white bg-darkGreen hover:bg-blue-800 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg mt-2 text-center 
                    dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wider">
                        Search
                    </button>
                </div>
            </form>
        </div>
        <!--End  Financial Total Filter Date -->

        <!--Start  Financial Total View -->
        <div class="w-full grid lg:grid-cols-3 grid-cols-1 gap-3 bg-secondary mt-5 p-5 px-20 ">
            <!--Start  Date Section -->
            <div class="flex flex-col mr-20 ">
                <div class="grid grid-cols-2 ">
                    <p class="text-lg text-white">From</p>
                    <p class="text-lg text-gray-400 text-left">2020/08/01</p>
                </div>
                <div class="grid grid-cols-2 ">
                    <p class="text-lg text-white ">To</p>
                    <p class="text-lg text-gray-400 text-left ">2020/10/01</p>
                </div>
            </div>
            <!--End  Date Section -->

            <!--Start  Financial Type Section -->
            <div class="flex flex-col  ">
                <div class="grid grid-cols-2">
                    <p class="text-sm text-white">Rent Total :</p>
                    <p class="font-semibold text-right text-sm text-goldYellow">30,000,000,000 <span
                            class="font-normal text-sm text-gray-200 tracking-wider">Kyats</span></p>
                </div>
                <div class="grid grid-cols-2">
                    <p class="text-sm text-white ">Sale Total :</p>
                    <p class="font-semibold text-right text-sm  text-goldYellow ">400,000 <span
                            class="font-normal text-sm text-gray-200 tracking-wider">Kyats</span></p>
                </div>
                <div class="grid grid-cols-2 ">
                    <p class="text-sm text-white ">Collaborator Total :</p>
                    <p class="right-0 font-semibold text-right text-sm text-goldYellow ">300,000 <span
                            class="font-normal text-sm text-gray-200 tracking-wider">Kyats</span></p>
                </div>
            </div>
            <!--End  Financial Type Total Section -->

            <!--Start  Financial All Total Section -->
            <div class="grid grid-cols-2 pl-1  ">
                <p class="text-sm text-white text-right">All Total :</p>
                <p class="right-0 font-semibold text-right text-sm text-alert ">30,000,000,000 <span
                        class="font-normal text-sm text-gray-200 tracking-wider">Kyats</span></p>
            </div>
            <!--End  Financial All Total Section -->
        </div>
        <!--End  Financial Total View -->

        <!--Start Financial Type Tag button -->
        <div class="flex justify-center mt-8 mb-16">
            <div class="mx-4 ">
                <input checked id="rent-radio" type="radio" value="" name="financial_type"
                class="hidden  w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="rent-radio"
                    class="relative px-10 py-2 text-xl  text-white font-medium rounded-lg   bg-goldYellow hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300   dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wider">
                    <ion-icon class="text-xl mr-2" name="pricetag"></ion-icon>
                    Rent
                </label>
            </div>
            <div class="mx-4 ">
                <input id="sale-radio" type="radio" value="" name="financial_type"
                class="hidden  w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="sale-radio"
                    class="relative px-10 py-2 text-lg  text-white font-medium rounded-lg   bg-alert hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300   dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wider">
                    <ion-icon class="text-xl mr-2" name="pricetag"></ion-icon>
                    Sale
                </label>
            </div>
            <div class="mx-4 ">
                <input id="collaborator-radio" type="radio" value="" name="financial_type"
                class="hidden  w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="collaborator-radio"
                    class="relative px-5 py-2 text-lg text-center  text-white font-medium rounded-lg   bg-darkGreen hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300   dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wider">
                    <ion-icon class="text-xl mr-2" name="pricetag"></ion-icon>
                    Collaborator
                </label>
            </div>
        </div>
        <!--Start Financial Type Tag button -->
        
    </div>

    <!--Start  Financial Rent Section -->
    <div id="rent" class="  px-10    sm:ml-64 flex flex-col justify-center items-center">
        <!--Start  Financial All Total Section -->
        <div class="py-4">
            <span class="mr-4 font-bold text-xl text-secondary dark:text-white text-right">Rent Total :</span>
            <span class=" font-bold text-left text-xl text-alert ">30,000,000,000 <span
                    class="font-semibold text-lg text-gray-500 tracking-wider">Kyats</span></span>
        </div>
        <!--End  Financial All Total Section -->

        <!--Start  Financial Rent  List Table -->
        <div class="relative lg:w-4/5 w-full overflow-x-auto   shadow-md sm:rounded-lg">
            <table class=" w-full text-xl text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-10 py-3">
                            No
                        </th>
                        <th scope="col" class="px-10 py-3 ">
                            Date
                        </th>
                        <th scope="col" class="pr-20 py-3 text-center">
                            Total
                        </th>

                    </tr>
                </thead>
                <tbody class="font-medium tracking-wide">
                    <tr
                        class="font-xl odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-10 py-4 font-normal  text-gray-900 whitespace-nowrap dark:text-white">
                            01
                        </th>
                        <td class="px-10 py-4">
                            2023/December/01
                        </td>
                        <td class="pr-20 py-4">
                            <p class=" font-bold text-right text-lg text-goldYellow">30,000,000,000,000,000,000 <span
                                    class=" text-gray-500 tracking-wider">Kyats</span></p>
                        </td>

                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-10 py-4 font-normal  text-gray-900 whitespace-nowrap dark:text-white">
                            02
                        </th>
                        <td class="px-10 py-4">
                            2023/December/02
                        </td>
                        <td class="pr-20 py-4">
                            <p class=" font-bold text-right text-lg text-goldYellow">30,000,000 <span
                                    class=" text-gray-500 tracking-wider">Kyats</span></p>
                        </td>
                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-10 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            03
                        </th>
                        <td class="px-10 py-4">
                            2023/December/03
                        </td>
                        <td class="pr-20 py-4">
                            <p class=" font-bold text-right text-lg text-goldYellow">30,000,000 <span
                                    class=" text-gray-500 tracking-wider">Kyats</span></p>
                        </td>

                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-10 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            04
                        </th>
                        <td class="px-10 py-4">
                            2023/December/04
                        </td>
                        <td class="pr-20 py-4">
                            <p class=" font-bold text-right text-lg text-goldYellow">30,000,000 <span
                                    class=" text-gray-500 tracking-wider">Kyats</span></p>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        <!--End Financial Rent  List Table -->

    </div>
    <!--End  Financial Rent Section -->



    <!--Start  Financial Sale Section -->
    <div id="sale" class=" hidden px-10  sm:ml-64 flex flex-col items-center ">
        <!--Start  Financial All Total Section -->
           <!--Start  Financial All Total Section -->
           <div class="py-4">
            <span class="mr-4 font-bold text-xl text-secondary dark:text-white text-right">Sale Total :</span>
            <span class=" font-bold text-left text-xl text-alert ">30,000,000,000 <span
                    class="font-semibold text-lg text-gray-500 tracking-wider">Kyats</span></span>
        </div>
        <!--End  Financial All Total Section -->

        <!--Start  Financial Sale  List Table -->
        <div class="relative lg:w-4/5 w-full overflow-x-auto   shadow-md sm:rounded-lg">
            <table class=" w-full text-xl text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-10 py-3">
                            No
                        </th>
                        <th scope="col" class="px-10 py-3 ">
                            Date
                        </th>
                        <th scope="col" class="pr-20 py-3 text-center">
                            Total
                        </th>

                    </tr>
                </thead>
                <tbody class="font-medium tracking-wide">
                    <tr
                        class="font-xl odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-10 py-4 font-normal  text-gray-900 whitespace-nowrap dark:text-white">
                            01
                        </th>
                        <td class="px-10 py-4">
                            2023/December/01
                        </td>
                        <td class="pr-20 py-4">
                            <p class=" font-bold text-right text-lg text-goldYellow">30,000,000,000,000,000,000 <span
                                    class=" text-gray-500 tracking-wider">Kyats</span></p>
                        </td>

                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-10 py-4 font-normal  text-gray-900 whitespace-nowrap dark:text-white">
                            02
                        </th>
                        <td class="px-10 py-4">
                            2023/December/02
                        </td>
                        <td class="pr-20 py-4">
                            <p class=" font-bold text-right text-lg text-goldYellow">30,000,000 <span
                                    class=" text-gray-500 tracking-wider">Kyats</span></p>
                        </td>
                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-10 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            03
                        </th>
                        <td class="px-10 py-4">
                            2023/December/03
                        </td>
                        <td class="pr-20 py-4">
                            <p class=" font-bold text-right text-lg text-goldYellow">30,000,000 <span
                                    class=" text-gray-500 tracking-wider">Kyats</span></p>
                        </td>

                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-10 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            04
                        </th>
                        <td class="px-10 py-4">
                            2023/December/04
                        </td>
                        <td class="pr-20 py-4">
                            <p class=" font-bold text-right text-lg text-goldYellow">30,000,000 <span
                                    class=" text-gray-500 tracking-wider">Kyats</span></p>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        <!--End Financial Sale  List Table -->



    </div>
    <!--End  Financial Sale Section -->

    <!--Start  Financial Collaborator Section -->
   
    <div id="collaborator" class=" hidden px-10 sm:ml-64 flex flex-col items-center ">
        <!--Start  Financial All Total Section -->
        <div class="py-4">
            <span class="mr-4 font-bold text-xl text-secondary dark:text-white text-right">Collaborator Total :</span>
            <span class=" font-bold text-left text-xl text-alert ">30,000,000,000 <span
                    class="font-semibold text-lg text-gray-500 tracking-wider">Kyats</span></span>
        </div>
        <!--End  Financial All Total Section -->

        <!--Start  Financial Collaborator  List Table -->
        <div class="relative lg:w-4/5 w-full overflow-x-auto   shadow-md sm:rounded-lg">
            <table class=" w-full text-xl text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-10 py-3">
                            No
                        </th>
                        <th scope="col" class="px-10 py-3 ">
                            Date
                        </th>
                        <th scope="col" class="pr-20 py-3 text-center">
                            Total
                        </th>

                    </tr>
                </thead>
                <tbody class="font-medium tracking-wide">
                    <tr
                        class="font-xl odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-10 py-4 font-normal  text-gray-900 whitespace-nowrap dark:text-white">
                            01
                        </th>
                        <td class="px-10 py-4">
                            2023/December/01
                        </td>
                        <td class="pr-20 py-4">
                            <p class=" font-bold text-right text-lg text-goldYellow">30,000,000,000,000,000,000 <span
                                    class=" text-gray-500 tracking-wider">Kyats</span></p>
                        </td>

                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-10 py-4 font-normal  text-gray-900 whitespace-nowrap dark:text-white">
                            02
                        </th>
                        <td class="px-10 py-4">
                            2023/December/02
                        </td>
                        <td class="pr-20 py-4">
                            <p class=" font-bold text-right text-lg text-goldYellow">30,000,000 <span
                                    class=" text-gray-500 tracking-wider">Kyats</span></p>
                        </td>
                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-10 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            03
                        </th>
                        <td class="px-10 py-4">
                            2023/December/03
                        </td>
                        <td class="pr-20 py-4">
                            <p class=" font-bold text-right text-lg text-goldYellow">30,000,000 <span
                                    class=" text-gray-500 tracking-wider">Kyats</span></p>
                        </td>

                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-10 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            04
                        </th>
                        <td class="px-10 py-4">
                            2023/December/04
                        </td>
                        <td class="pr-20 py-4">
                            <p class=" font-bold text-right text-lg text-goldYellow">30,000,000 <span
                                    class=" text-gray-500 tracking-wider">Kyats</span></p>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        <!--End Financial Collaborator  List Table -->

    </div>
    <!--End  Financial Collaborator Section -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>