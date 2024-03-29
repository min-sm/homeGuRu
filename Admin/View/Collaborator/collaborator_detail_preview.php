<?php
session_start();
if (!isset($_SESSION["authority"])) {
    header('Location: ../../View/errors/wrongPath.php');
    exit();
};

?>
<?php include '../../Controller/Collaborator/CollaboratorAllDetailPreviewContorller.php' ?>

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
    <script src="../resources/js/collaborator/activity_on_off_motal.js" defer></script>

</head>

<body class="bg-primary dark:bg-gray-700 tracking-wider">
    <?php include '../commonView/menu.php' ?>
    <!--Start  Collaborator Detail-->
    <div class="p-4 pt-20 sm:ml-64 flex flex-col items-center  dark:text-gray-200">
        <h1 class=" text-center font-bold text-2xl m-7 tracking-wide  ">Collaborator Detail</h1>
        <div class=" lg:w-1/2 w-full grid grid-row-13 gap-2">
            <img class="w-40 mb-5" src='<?php echo "../../../Storage/collaborator_img/gc" . $collaborator[0]['collaborator_id'] . "/" . $collaborator[0]['gc_logo'] ?>' alt="">

            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Collaborator Code</p>
                <p name="gc_name" class="text-sm font-bold tracking-wider">GC-<?= $collaborator[0]['gc_code']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company Name</p>
                <p name="gc_name" class="text-sm"><?= $collaborator[0]['gc_company_name']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Company ID Number</p>
                <p name="gc_company_Id" class="text-sm"><?= $collaborator[0]['gc_company_id']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Owner Name</p>
                <p name="gc_owner_name" class="text-sm"><?= $collaborator[0]['gc_owner_name']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">National ID</p>
                <p name="gc_owner_nrc" class="text-sm"><?= $collaborator[0]['gc_owner_nrc']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Email Address</p>
                <p name="gc_email" class="text-sm tracking-wider"><?= $collaborator[0]['gc_email']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Phone Number</p>
                <p name="gc_phone" class="text-sm"><?= $collaborator[0]['gc_phone_num']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Address</p>
                <p name="gc_address" class="text-sm"><?= $collaborator[0]['gc_address']; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Package</p>
                <p name="s_package_id" class="text-alert text-sm font-semibold"> <?= $collaborator[0]["s_package_name"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Duration</p>
                <p name="s_duration" class="text-sm"> <?= $collaborator[0]["s_duration_name"]; ?></p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Service Bought Date</p>
                <p name="s_created_date" class="text-sm font-semibold">
                    <?= $collaborator[0]["created_date"]
                        = date("d / m / Y", strtotime($collaborator[0]["created_date"])); ?>
                </p>
            </div>
            <?php
            $currentDate = new DateTime();
            $expiration = new DateTime($collaborator[0]["s_expire_date"]);
            $interval = $currentDate->diff($expiration);
            if ($currentDate < $expiration) {
                $expire_status = $interval->days . " days";
            } elseif ($currentDate > $expiration) {
                $expire_status = " Expired";
            } else {
                $expire_status = "Expires today!";
            }
            ?>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Expire Date</p>
                <p name="" class="text-goldYellow font-semibold text-sm">
                    <?= $collaborator[0]["s_expire_date"]
                        = date("d / m / Y", strtotime($collaborator[0]["s_expire_date"])); ?>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-7 ">
                <p class="font-medium text-lg">Days Left B4 Expire</p>
                <p name="gc_created_date" class="text-alert text-sm font-semibold"> <?= $expire_status; ?> </p>
            </div>
        </div>
        <div class=" flex  my-16 ">
            <a href="./collaborator_detail_edit.php?id=<?= $collaborator[0]['collaborator_id']  ?>" class="tracking-wider text-white bg-goldYellow opacity-75 hover:opacity-100
            focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  ">
                Edit Detail</a>

            <a href="./collaborator_list.php" class="tracking-wider mx-10 text-white bg-alert opacity-80 hover:opacity-100
            focus:ring-4 focus:outline-none  focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                Cancel</a>

            <?php $activity = $collaborator[0]["gc_activity_ban"];
            $activityStatus = $activity == 0 ? "Activity OFF" : "Activity ON";
            $activityColor = $activity == 0 ? "bg-darkGreen" :  "bg-paleGray ";

            ?>
            <a name='activity_ban' href="#" onclick="confirmation( '../../Controller/Collaborator/CollaboratorListActivityOnOffController.php?id=<?= $collaborator[0]['collaborator_id'] ?>')" class="tracking-wider <?= $activityColor  ?>  text-alert opacity-75 hover:opacity-100 hover:bg-darkGreen
             border-2 border-darkGreen font-semibold rounded-lg text-medium px-8 py-2 text-center ">
                <?= $activityStatus; ?>
            </a>
        </div>
        <hr class="w-[35rem] border-2 text-gray-500">

    </div>
    
    <!--End  Collaborator Detail -->

    <div class="p-4 pt-20 sm:ml-64">
        <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">Property List</h1>

        <!-- results found -->
        <div class="pt-4 pb-8 flex items-center">
            <!-- 100 found -->
            <span class="lg:ms-16 sm:ms-8 me-8 lg:text-2xl text-base text-black dark:text-white"><span>100</span> Found</span>
            <!-- in stock / out of stock -->
            <div class="lg:space-x-8 space-x-4 lg:text-base text-xs">
                <label for="all" class="text-white cursor-pointer label ">All </label>
                <label for="new" class="text-gray-500 cursor-pointer label ">New</label>
                <label for="old" class="text-gray-500 cursor-pointer label ">Old</label>
                <input type="radio" id="all" name="sort_by" value="" class="hidden" />
                <input type="radio" id="new" name="sort_by" value="" class="hidden" />
                <input type="radio" id="old" name="sort_by" value="" class="hidden" />
            </div>

            <!-- 2 view options -->
            <div class="flex-1 flex justify-end w-full">
                <!-- in stock / out of stock -->
                <div class="flex lg:space-x-8 space-x-4">
                    <label for="table-view" class="text-white cursor-pointer label1 text-center"><i class="fa-solid fa-bars w-8 lg:text-4xl text-lg"></i></label>
                    <label for="card-view" class="text-gray-500 cursor-pointer label1 "><i class="fa-solid fa-table-cells w-8 lg:text-4xl text-lg"></i></label>
                    <!-- <label for="outStock" class=" cursor-pointer label "><img src="../resources/img/icon/list_format.svg" alt="" class="w-8 h-8 text-alert"></label> -->
                    <input type="radio" id="table-view" name="view_option" value="" class="hidden" checked />
                    <input type="radio" id="card-view" name="view_option" value="" class="hidden" />
                </div>
            </div>
        </div>

        <!-- search by id -->
        <div class="my-8 flex items-center justify-evenly w-full">
            <input type="text" placeholder="Property ID" class="rounded-lg">
            <button type="submit" class="bg-darkGreen px-6 py-1.5 text-white rounded-lg border border-black">Search</button>

        </div>

        <!-- table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" id='table'>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            No
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Code
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Property
                        </th>
                        <th scope="col" class="px-4 py-3 ">
                            Offer
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Township
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Detail
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            01
                        </th>
                        <td class="px-4 py-4">
                            GRC-2001
                        </td>

                        <td class="px-4 py-4">
                            Condo
                        </td>
                        <td class="px-4 py-4 text-goldYellow font-semibold">
                            Rent
                        </td>

                        <td class="px-4 py-4 text-left">
                            <span class="text-alert font-semibold">30,000,000</span><span>kyats</span> <span>/permonth</span>
                        </td>
                        <td class="px-4 py-4  font-bold tracking-wide">
                            Bahan
                        </td>

                        <td class="px-4 py-4 flex justify-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                        </td>
                        <td class="px-4 py-4 text-center">
                            
            <a href="./admin_collaborator_all.php" class="tracking-wider mx-10 text-white bg-alert opacity-80 hover:opacity-100
            focus:ring-4 focus:outline-none  focus:ring-blue-300 font-semibold rounded-lg text-medium  px-7 py-2 text-center ">
                Cancel</a>
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            02
                        </th>
                        <td class="px-4 py-4">
                            GSH-3092
                        </td>

                        <td class="px-4 py-4">
                            House
                        </td>
                        <td class="px-4 py-4 text-alert font-semibold">
                            Sale
                        </td>

                        <td class="px-4 py-4 text-left">
                            <span class="text-alert font-semibold">30,000,000</span><span>$</span>
                        </td>
                        <td class="px-4 py-4  font-bold tracking-wide">
                            Kamayut
                        </td>

                        <td class="px-4 py-4 flex justify-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                        </td>
                        <td class="px-4 py-4 text-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            03
                        </th>
                        <td class="px-4 py-4">
                            GRC-2005
                        </td>
                        <td class="px-4 py-4">
                            Condo
                        </td>
                        <td class="px-4 py-4 text-goldYellow font-semibold">
                            Rent
                        </td>

                        <td class="px-4 py-4 text-left">
                            <span class="text-alert font-semibold">30,000,000</span><span>kyats</span> <span>/permonth</span>
                        </td>
                        <td class="px-4 py-4  font-bold tracking-wide">
                            Bahan
                        </td>

                        <td class="px-4 py-4 flex justify-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                        </td>
                        <td class="px-4 py-4 text-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            04
                        </th>
                        <td class="px-4 py-4">
                            GSH-3098
                        </td>
                        <td class="px-4 py-4">
                            House
                        </td>
                        <td class="px-4 py-4 text-alert font-semibold">
                            Sale
                        </td>

                        <td class="px-4 py-4 text-left">
                            <span class="text-alert font-semibold">30,000,000</span><span>Kyats</span>
                        </td>
                        <td class="px-4 py-4  font-bold tracking-wide">
                            Kamayut
                        </td>

                        <td class="px-4 py-4 flex justify-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                        </td>
                        <td class="px-4 py-4 text-center">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- cards -->
        <div class="hidden" id="cards">
            <div class="grid grid-rows-3 gap-16">
                <div class="flex justify-around">
                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-16">
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <div class="relative">
                                    <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Rent
                                    </div>
                                    <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
                                </div>
                            </a>
                            <div class="px-5 pb-5">
                                <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                                    <span>November 11 at 12:30</span>
                                    <span>13 people interests</span>
                                </div>
                                <div class="my-2.5 flex items-center justify-between">
                                    <a href="#" class="mt-2.5 mb-5">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            4 Bed House in Golden Valley
                                        </h5>
                                    </a>
                                    <div class="rounded-full bg-gray-50 w-16">
                                        <img src="../resources/img/logo.png" alt="" />
                                    </div>
                                </div>

                                <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                                    <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                                    <span class="ml-3">7,000 Lakhs / Month</span>
                                </div>

                                <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property ID:
                                            </span>
                                            <span>1456</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Type:
                                            </span>
                                            <span>House</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-2">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Township:
                                            </span>
                                            <span>Bahan</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Size:
                                            </span>
                                            <span>5,000 ft<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                                    <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <div class="relative">
                                    <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Rent
                                    </div>
                                    <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
                                </div>
                            </a>
                            <div class="px-5 pb-5">
                                <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                                    <span>November 11 at 12:30</span>
                                    <span>13 people interests</span>
                                </div>
                                <div class="my-2.5 flex items-center justify-between">
                                    <a href="#" class="mt-2.5 mb-5">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            4 Bed House in Golden Valley
                                        </h5>
                                    </a>
                                    <div class="rounded-full bg-gray-50 w-16">
                                        <img src="../resources/img/logo.png" alt="" />
                                    </div>
                                </div>

                                <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                                    <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                                    <span class="ml-3">7,000 Lakhs / Month</span>
                                </div>

                                <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property ID:
                                            </span>
                                            <span>1456</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Type:
                                            </span>
                                            <span>House</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-2">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Township:
                                            </span>
                                            <span>Bahan</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Size:
                                            </span>
                                            <span>5,000 ft<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                                    <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <div class="relative">
                                    <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Rent
                                    </div>
                                    <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
                                </div>
                            </a>
                            <div class="px-5 pb-5">
                                <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                                    <span>November 11 at 12:30</span>
                                    <span>13 people interests</span>
                                </div>
                                <div class="my-2.5 flex items-center justify-between">
                                    <a href="#" class="mt-2.5 mb-5">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            4 Bed House in Golden Valley
                                        </h5>
                                    </a>
                                    <div class="rounded-full bg-gray-50 w-16">
                                        <img src="../resources/img/logo.png" alt="" />
                                    </div>
                                </div>

                                <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                                    <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                                    <span class="ml-3">7,000 Lakhs / Month</span>
                                </div>

                                <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property ID:
                                            </span>
                                            <span>1456</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Type:
                                            </span>
                                            <span>House</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-2">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Township:
                                            </span>
                                            <span>Bahan</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Size:
                                            </span>
                                            <span>5,000 ft<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                                    <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-around">
                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-16">
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <div class="relative">
                                    <div class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Sale
                                    </div>
                                    <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
                                </div>
                            </a>
                            <div class="px-5 pb-5">
                                <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                                    <span>November 11 at 12:30</span>
                                    <span>13 people interests</span>
                                </div>
                                <div class="my-2.5 flex items-center justify-between">
                                    <a href="#" class="mt-2.5 mb-5">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            4 Bed House in Golden Valley
                                        </h5>
                                    </a>
                                    <div class="rounded-full bg-gray-50 w-16">
                                        <img src="../resources/img/logo.png" alt="" />
                                    </div>
                                </div>

                                <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                                    <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                                    <span class="ml-3">7,000 Lakhs / Month</span>
                                </div>

                                <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property ID:
                                            </span>
                                            <span>1456</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Type:
                                            </span>
                                            <span>House</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-2">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Township:
                                            </span>
                                            <span>Bahan</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Size:
                                            </span>
                                            <span>5,000 ft<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                                    <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <div class="relative">
                                    <div class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Sale
                                    </div>
                                    <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
                                </div>
                            </a>
                            <div class="px-5 pb-5">
                                <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                                    <span>November 11 at 12:30</span>
                                    <span>13 people interests</span>
                                </div>
                                <div class="my-2.5 flex items-center justify-between">
                                    <a href="#" class="mt-2.5 mb-5">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            4 Bed House in Golden Valley
                                        </h5>
                                    </a>
                                    <div class="rounded-full bg-gray-50 w-16">
                                        <img src="../resources/img/logo.png" alt="" />
                                    </div>
                                </div>

                                <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                                    <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                                    <span class="ml-3">7,000 Lakhs / Month</span>
                                </div>

                                <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property ID:
                                            </span>
                                            <span>1456</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Type:
                                            </span>
                                            <span>House</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-2">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Township:
                                            </span>
                                            <span>Bahan</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Size:
                                            </span>
                                            <span>5,000 ft<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                                    <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <div class="relative">
                                    <div class="bg-[#FBAA45] text-black flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Sale
                                    </div>
                                    <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
                                </div>
                            </a>
                            <div class="px-5 pb-5">
                                <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                                    <span>November 11 at 12:30</span>
                                    <span>13 people interests</span>
                                </div>
                                <div class="my-2.5 flex items-center justify-between">
                                    <a href="#" class="mt-2.5 mb-5">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            4 Bed House in Golden Valley
                                        </h5>
                                    </a>
                                    <div class="rounded-full bg-gray-50 w-16">
                                        <img src="../resources/img/logo.png" alt="" />
                                    </div>
                                </div>

                                <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                                    <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                                    <span class="ml-3">7,000 Lakhs / Month</span>
                                </div>

                                <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property ID:
                                            </span>
                                            <span>1456</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Type:
                                            </span>
                                            <span>House</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-2">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Township:
                                            </span>
                                            <span>Bahan</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Size:
                                            </span>
                                            <span>5,000 ft<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                                    <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-around">
                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-16">
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <div class="relative">
                                    <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Rent
                                    </div>
                                    <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
                                </div>
                            </a>
                            <div class="px-5 pb-5">
                                <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                                    <span>November 11 at 12:30</span>
                                    <span>13 people interests</span>
                                </div>
                                <div class="my-2.5 flex items-center justify-between">
                                    <a href="#" class="mt-2.5 mb-5">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            4 Bed House in Golden Valley
                                        </h5>
                                    </a>
                                    <div class="rounded-full bg-gray-50 w-16">
                                        <img src="../resources/img/logo.png" alt="" />
                                    </div>
                                </div>

                                <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                                    <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                                    <span class="ml-3">7,000 Lakhs / Month</span>
                                </div>

                                <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property ID:
                                            </span>
                                            <span>1456</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Type:
                                            </span>
                                            <span>House</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-2">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Township:
                                            </span>
                                            <span>Bahan</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Size:
                                            </span>
                                            <span>5,000 ft<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                                    <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <div class="relative">
                                    <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Rent
                                    </div>
                                    <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
                                </div>
                            </a>
                            <div class="px-5 pb-5">
                                <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                                    <span>November 11 at 12:30</span>
                                    <span>13 people interests</span>
                                </div>
                                <div class="my-2.5 flex items-center justify-between">
                                    <a href="#" class="mt-2.5 mb-5">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            4 Bed House in Golden Valley
                                        </h5>
                                    </a>
                                    <div class="rounded-full bg-gray-50 w-16">
                                        <img src="../resources/img/logo.png" alt="" />
                                    </div>
                                </div>

                                <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                                    <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                                    <span class="ml-3">7,000 Lakhs / Month</span>
                                </div>

                                <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property ID:
                                            </span>
                                            <span>1456</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Type:
                                            </span>
                                            <span>House</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-2">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Township:
                                            </span>
                                            <span>Bahan</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Size:
                                            </span>
                                            <span>5,000 ft<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                                    <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <div class="relative">
                                    <div class="bg-[#00534F] text-white flex items-center justify-center rounded-tl-lg rounded-bl-lg w-20 h-8 absolute right-0 top-8">
                                        Rent
                                    </div>
                                    <img class="pb-4 rounded-t-lg" src="../resources/img/kitchen.jpg" alt="product image" />
                                </div>
                            </a>
                            <div class="px-5 pb-5">
                                <div class="flex items-center text-black dark:text-white text-sm justify-between mb-2.5">
                                    <span>November 11 at 12:30</span>
                                    <span>13 people interests</span>
                                </div>
                                <div class="my-2.5 flex items-center justify-between">
                                    <a href="#" class="mt-2.5 mb-5">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            4 Bed House in Golden Valley
                                        </h5>
                                    </a>
                                    <div class="rounded-full bg-gray-50 w-16">
                                        <img src="../resources/img/logo.png" alt="" />
                                    </div>
                                </div>

                                <div class="mt-2.5 mb-5 text-green-700 flex items-center text-xl">
                                    <i class="fa-sharp fa-solid fa-money-bill mt-1.5"></i>
                                    <span class="ml-3">7,000 Lakhs / Month</span>
                                </div>

                                <div class="mt-2.5 mb-5 text-black dark:text-white font-thin">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property ID:
                                            </span>
                                            <span>1456</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Type:
                                            </span>
                                            <span>House</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-2">
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Township:
                                            </span>
                                            <span>Bahan</span>
                                        </div>
                                        <div>
                                            <span style="font-family: 'Playfair Display'">Property Size:
                                            </span>
                                            <span>5,000 ft<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end">
                                    <!-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> -->
                                    <a href="#" class="text-green-500 border-2 border-slate-500 bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-slate-50">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal-->
    <div id="activityModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center;">
                <div style="background: white; padding: 40px; border-radius: 8px; width: 300px; text-align: center;">
                    <p class="mb-5">Are you sure to
                        <span class="font-semibold text-alert"> <?= $activityStatus; ?></span>? 
                        this <span class="font-semibold"> <?= $collaborator[0]['gc_company_name']; ?></span>
                    </p>
                    <button class="text-white rounded hover:bg-goldYellow bg-alert py-1 px-4 " onclick="confirmActivity()">Confirm</button>
                    <button class="text-white rounded hover:bg-goldYellow bg-darkGreen py-1 px-4 " onclick="hideModal()">Cancel</button>
                </div>
            </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>