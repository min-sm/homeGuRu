
<?php include '../../Controller/collaborator/CollaboratorAllController.php'; ?>
<?php require_once  '../../View/commonView/ciphertext.php' ?>

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

    <!-- JS -->
    <script src="../../View/resources/js/collaborator/deleteMotal.js" defer></script>
</head>

<body class="bg-primary dark:bg-gray-700 ">
    <?php include '../commonView/menu.php' ?>
    <!--Start  Collaborator  List -->
    <div class="p-4 pt-20 sm:ml-64">
        <h1 class=" font-bold text-2xl mt-5  dark:text-gray-400">Collaborator List</h1>
        <div class=" relative ">
            <!--Start  Collaborator  List Button  -->
            <div class=" relative h-12 ">
                <div class="absolute right-10">
                    <a href="./collaborator_list.php" type="submit" class="text-white bg-goldYellow hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                        See All </a>
                    <a href="./collaborator_add.php" type="submit" class="text-goldYellow bg-primary border-2 border-goldYellow hover:text-white hover:bg-darkGreen focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        + Add</a>
                </div>
            </div>
            <!--End  Collaborator  List Button  -->

            <!--Start  Collaborator  List Table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">
                                No
                            </th>
                            <th scope="col" class="px-4 py-3 text-center">
                                ID
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Company Name
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Package
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Exp Date
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Exp Day
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
                        <?php
                        $no = 1;
                        foreach ($collaboratorlimit as $collaborator) {
                            if ($no % 2 != 0) {
                        ?>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <?php
                            } else {
                                ?>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">

                                <?php
                            }
                                ?>
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $no++; ?>
                                </th>
                                <td class="px-4 py-4">
                                    GC-<?= $collaborator["gc_code"]; ?>
                                </td>
                                <td class="px-4 py-4">
                                    <?= $collaborator["gc_company_name"]; ?>
                                </td>
                                <td class="px-4 py-4 font-semibold">
                                    <?= $collaborator["s_package_name"]; ?>
                                </td>
                                <td class="px-4 py-4">
                                    <?= $collaborator["s_expire_date"]; ?>
                                </td>
                                <?php
                                $currentDate = new DateTime();
                                $expiration = new DateTime($collaborator["s_expire_date"]);
                                $interval = $currentDate->diff($expiration);
                                if ($currentDate < $expiration) {
                                    $expire_status = $interval->days . " days";
                                } elseif ($currentDate > $expiration) {
                                    $expire_status = " Expired";
                                } else {
                                    $expire_status = "Expires today!";
                                }
                                ?>
                                <td class="px-4 py-4 text-alert font-medium ">
                                    <?= $expire_status; ?>
                                </td>
                                <td class="px-4 py-4 flex justify-center">
                                    <a href="./admin_collaborator_detail_preview.php?id=<?= $collaborator['collaborator_id'] ?>" class=""></p> <img class="w-5" src="../resources/img/icon/view-details.png" alt=""></a>
                                </td>
                                
                                <td class="px-4 py-4 text-center">
                                    <a href="#" name="delete" onclick="confirmation( '../../Controller/Collaborator/CollaboratorAllDeleteController.php?id=<?= $collaborator['collaborator_id'] ?>')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                                    </a>
                                </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
            <!--End  Collaborator  List Table -->
        </div>
    </div>
    <!--End  Collaborator  List -->

    <!--Start  Collaborator Pending List -->
    <div class="p-4 sm:ml-64">
        <h1 class=" font-bold text-2xl mt-5  dark:text-gray-400 ">Collaborator Pending List</h1>
        <div class=" relative ">
            <!--Start  Collaborator  List Button  -->
            <div class=" relative h-12 ">
                <a href="./collaborator_pending_list.php" type="submit" class="absolute right-10 text-white bg-goldYellow hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All </a>
            </div>
            <!--End  Collaborator  List Button  -->


            <!--Start  Collaborator Pending List Table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">
                                No
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Company Name
                            </th>
                            <th scope="col" class="px-2 py-3 ">
                                Company ID
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Phone
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Approve
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($collaboratorPendingLimit as $pending) {
                            if ($no % 2 != 0) {
                        ?>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <?php
                            } else {
                                ?>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <?php
                            }
                                ?>
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $no++; ?>
                                </th>
                                <td class="px-4 py-4">
                                    <?= $pending['gc_company_name']; ?>
                                </td>
                                <td class="px-4 py-4 font-semibold">
                                    <?= $pending['gc_company_id']; ?>
                                </td>
                                <td class="px-4 py-4 ">
                                    <?= $pending['gc_email']; ?>
                                </td>
                                <td class="px-4 py-4">
                                    <?= $pending['gc_phone_num']; ?>
                                </td>
                                <td class="px-4 py-4 flex justify-center">
                                    <a href="./admin_create_account_collaborator.php?id=<?= $pending['id'] ?>" class="">
                                        <img class="w-5" src="../resources/img/icon/carbon_task-approved.png" alt="">
                                    </a>
                                </td>
                                <td class="px-4 py-4 text-center">
                                    <a href="#" name="delete2" onclick="confirmation( '../../Controller/Collaborator/CollaboratorAllDeleteController.php?id=<?= $pending['id'] ?>')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                                    </a>
                                </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
            <!--Start  Collaborator Pending List Table -->

        </div>
    </div>
    <!--End  Collaborator Pending  List -->

    <!--Start  Collaborator Request List -->
    <div class="p-4 sm:ml-64">
        <h1 class=" font-bold text-2xl mt-5  dark:text-gray-400">Collaborator Request List</h1>

        <div class=" relative mb-5">
            <!--Start  Collaborator  List Button  -->
            <div class=" relative h-12 ">
                <a href="./collaborator_request_list.php" type="submit" class="absolute right-10 text-white bg-goldYellow hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All </a>

            </div>
            <!--End  Collaborator  List Button  -->

            <!--Start  Collaborator Request List Table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">
                                No
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Company Name
                            </th>
                            <th scope="col" class="px-4 py-3 ">
                                Company ID
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Date
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
                        <?php
                        $no = 1;
                        foreach ($collaboratorRequestLimit as $request) {
                            if ($no % 2 != 0) {
                        ?>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <?php
                            } else {
                                ?>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">

                                <?php
                            }
                                ?>
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $no++; ?>
                                </th>
                                <td class="px-4 py-4">
                                    <?= $request['gc_company_name']; ?>
                                </td>
                                <td class="px-4 py-4 font-semibold">
                                    <?= $request['gc_company_id'] ?>
                                </td>
                                <td class="px-4 py-4 ">
                                    <?= $request['gc_phone_num']; ?>
                                </td>
                                <td class="px-4 py-4">
                                    <?= $request['created_date']
                                        = date("d-m-Y  g:i A", strtotime($request['created_date'])) ?>
                                </td>
                                <td class="px-4 py-4 flex justify-center">
                                    <a href="./admin_collaborator_req_preview.php?id=<?= $request["id"] ?>" class="">
                                        <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                    </a>
                                </td>
                                <td class="px-4 py-4 text-center">
                                    <a href="#" name="delete3" onclick="confirmation( '../../Controller/Collaborator/CollaboratorAllDeleteController.php?id=<?= $request['id'] ?>')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                                    </a>
                                </td>
                                </tr>
                            <?php } ?>

                    </tbody>
                </table>
            </div>
            <!--Start  Collaborator Request List Table -->
        </div>
    </div>
    <!--End  Collaborator Request  List -->

    <!--Modal-->

    <div id="deleteModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center;">
        <div style="background: white; padding: 40px; border-radius: 8px; width: 300px; text-align: center;">
            <p>Are you sure you want to delete this item?</p>
            <button class="text-white rounded hover:bg-goldYellow bg-alert p-1" onclick="confirmDelete()">Confirm Delete</button>
            <button class="text-white rounded hover:bg-goldYellow bg-darkGreen p-1 " onclick="hideModal()">Cancel</button>
        </div>
    </div>

    <div id="deleteModal2" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center;">
        <div style="background: white; padding: 40px; border-radius: 8px; width: 300px; text-align: center;">
            <p>Are you sure you want to delete this item?</p>
            <button class="text-white rounded hover:bg-goldYellow bg-alert p-1" onclick="confirmDelete()">Confirm Delete</button>
            <button class="text-white rounded hover:bg-goldYellow bg-darkGreen p-1 " onclick="hideModal()">Cancel</button>
        </div>
    </div>

    <div id="deleteModal3" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center;">
        <div style="background: white; padding: 40px; border-radius: 8px; width: 300px; text-align: center;">
            <p>Are you sure you want to delete this item?</p>
            <button class="text-white rounded hover:bg-goldYellow bg-alert p-1" onclick="confirmDelete()">Confirm Delete</button>
            <button class="text-white rounded hover:bg-goldYellow bg-darkGreen p-1 " onclick="hideModal()">Cancel</button>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>