<?php include '../../Controller/Financial/FinancialListFilterContorller.php' ?>

<?php if (!isset($_SESSION['start_date'])) {
    $_SESSION['start_date'] = '';
}
?>
<?php if (!isset($_SESSION['end_date'])) {
    $_SESSION['end_date'] = '';
}
?>
<?php if (!isset($_SESSION['total_rent'])) {
    $_SESSION['total_rent'] = '';
}
?>
<?php if (!isset($_SESSION['list_tag_value'])) {
    $_SESSION['list_tag_value'] = "1";
}
?>
<?php
$_SESSION['list_start_date'] = $_SESSION['start_date'];
$_SESSION['list_end_date'] = $_SESSION['end_date'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/css/dist/output.css" rel="stylesheet" />
    <link href="../resources/css/financial_list_filter.css" rel="stylesheet" />

    <title>Dashboard</title>
    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../resources/js/financial/deleteMotal.js" defer></script>
    
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<body class="dark:bg-gray-400">
    <!-- heading navigation -->
    <?php include '../common/menu.php' ?>
    <div class="pt-20 sm:ml-64">
        <!--Start  Financial Total Filter Date -->
        <div class="flex flex-col items-center justify-center tracking-wider">
            <h1 class="text-center font-bold text-5xl mt-5 mb-12">Financial List </h1>

            <form id="financial_Form" class="w-4/5" action="financial_list_filter.php" method="get" enctype="multipart/form-data">
                <div class="grid grid-cols-3 gap-20  mb-4">
                    <div class="flex flex-col lg:w-72 w-28">
                        <label for="start_date" class="block mb-2 text-xl font-semibold text-gray-500 dark:text-white">
                            Start Date
                        </label>
                        <input type="date" name="start_date" id="start_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="  " value="<?= $_SESSION['start_date'] ?>">
                    </div>
                    <div class="flex flex-col lg:w-72 w-28">
                        <label for="end_date" class="block mb-2 text-xl font-semibold text-gray-500 dark:text-white">
                            End Date
                        </label>
                        <input type="date" name="end_date" id="end_date" class="   bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="  " value="<?= $_SESSION['end_date'] ?>">
                    </div>
                    <div class="relative top-9 lg:w-72 w-28 ">
                        <button type="submit" name="search" class="lg:w-1/2 w-20 py-2  text-white bg-darkGreen hover:bg-blue-800 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg  text-center 
                    dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wider">
                            Search
                        </button>
                    </div>
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
                    <p class="text-md text-gray-400 text-left"><?= $_SESSION['start_date'] = date("d / m / Y", strtotime($_SESSION['start_date'])); ?></p>
                </div>
                <div class="grid grid-cols-2 ">
                    <p class="text-lg text-white ">To</p>
                    <p class="text-md text-gray-400 text-left "><?= $_SESSION['end_date'] =  date("d / m / Y", strtotime($_SESSION['end_date'])); ?></p>
                </div>
            </div>
            <!--End  Date Section -->

            <!--Start  Financial Type Section -->
            <div class="flex flex-col  ">
                <div class="grid grid-cols-2">
                    <p class="text-sm text-white">Rent List</p>
                    <p class="font-semibold text-right text-sm text-goldYellow"><?= $_SESSION['total_rent']; ?></p>
                </div>
                <div class="grid grid-cols-2 mt-5">
                    <p class="text-sm text-white ">Sale List</p>
                    <p class="font-semibold text-right text-sm  text-goldYellow "><?= $_SESSION['total_sale']; ?> </p>
                </div>
            </div>
            <!--End  Financial Type Total Section -->

            <!--Start  Financial All Total Section -->
            <div class="grid grid-cols-2 pl-1  ">
                <p class="text-sm text-white text-right">All Total :</p>
                <p class="right-0 font-semibold text-right text-sm text-alert "><?= $_SESSION['total_rent'] +  $_SESSION['total_sale']; ?></p>
            </div>
            <!--End  Financial All Total Section -->
        </div>
        <!--End  Financial Total View -->

        <?php if ($_SESSION['list_tag_value'] == '') {
            $_SESSION['list_tag_value'] = 1;
        } ?>
        <!--Start Financial Type Tag button -->
        <div class="flex justify-center mt-8 mb-16">
            <div class="mx-4 ">
                <?php if ($_SESSION['list_tag_value'] == 1) { ?>
                    <input checked id="rent-radio" type="radio" value="1" name="financial_type" class="hidden  w-16 h-16 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <?php } else { ?>
                    <input id="rent-radio" type="radio" value="1" name="financial_type" class="hidden w-16 h-16 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <?php } ?>
                <label for="rent-radio" class="relative px-10 py-2 text-xl  text-white font-medium rounded-lg   bg-goldYellow hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300   tracking-wider">
                    <ion-icon class="text-xl mr-2" name="pricetag"></ion-icon>
                    Rent
                </label>
            </div>
            <div class="mx-4 ">
                <?php if ($_SESSION['list_tag_value'] == 2) { ?>
                    <input checked id="sale-radio" type="radio" value="2" name="financial_type" class="hidden w-16 h-16 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <?php } else { ?>
                    <input id="sale-radio" type="radio" value="2" name="financial_type" class="hidden w-16 h-16 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <?php } ?>
                <label for="sale-radio" class="relative px-10 py-2 text-lg  text-white font-medium rounded-lg   bg-alert hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300  tracking-wider">
                    <ion-icon class="text-xl mr-2" name="pricetag"></ion-icon>
                    Sale
                </label>
            </div>
        </div>
        <!--Start Financial Type Tag button -->

    </div>

    <!--Start  Financial Rent Section -->
    <div id="rent" class="  px-10 pb-16   sm:ml-64 flex flex-col justify-center items-center">
        <!--Start  Financial All Total Section -->
        <div class="py-4">
            <span class="mr-4 font-bold text-2xl text-secondary dark:text-white text-right">Rent List :</span>
            <span class=" font-bold text-left text-xl text-alert "><?= $_SESSION['total_rent'] ?></span>
        </div>
        <!--End  Financial All Total Section -->
        <!--Start  Financial Rent  List Table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            No
                        </th>
                        <th scope="col" class="px-4 py-3 ">
                            Property Code
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Payer Name
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Cash Amount
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
                <tbody class="font-medium tracking-wide">
                    <?php
                    if ($totalrent != 0) {
                        $rentstart = 1;
                        foreach ($rents as $rent) {
                            if ($rentstart % 2 != 0) {
                    ?>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <?php } else { ?>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <?php } ?>
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $rentstart++; ?>
                                </th>
                                <td class="px-4 py-4">
                                    <?= $rent["p_code"] ?>
                                </td>
                                <td class="px-4 py-4">
                                    <?= $rent["p_cash_payer_name"] ?>
                                </td>
                                <td class="px-4 py-4  text-alert text-right">
                                    <span><?= number_format($rent["p_cash_amount"]); ?></span>
                                    <?php
                                    if ($rent["p_cash_unit"] == 1) {
                                    ?>
                                        <span>$</span>
                                    <?php
                                    } else {
                                    ?>
                                        <span>Kyats</span>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td class="px-4 py-4">
                                    <?= $rent["created_date"]
                                        = date("d-m-Y  g:i A", strtotime($rent["created_date"])) ?>
                                </td>
                                <td class="px-4 py-4 flex justify-center">
                                    <a href="./financial_list_rent_service_cash_in.php?id=<?= $rent["id"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                    </a>
                                </td>
                                <td class="px-4 py-4 text-center">
                                    <a href="#" name="delete" onclick="confirmation( '../../Controller/Financial/FinancialListRentServiceDeleteController.php?id=<?= $rent['id'] ?>&value=<?= 1 ?>')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                                    </a>
                                </td>
                                </tr>
                            <?php }
                    } else { ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" colspan="7" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    " Data Not Found!"
                                </th>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
        <!--End Financial Rent  List Table -->

    </div>
    <!--End  Financial Rent Section -->

    <!--Start  Financial Sale Section -->
    <div id="sale" class="  px-10 pb-16 sm:ml-64 flex flex-col items-center ">
        <!--Start  Financial All Total Section -->
        <!--Start  Financial All Total Section -->
        <div class="py-4">
            <span class="mr-4 font-bold text-2xl text-secondary dark:text-white text-right">Sale List :</span>
            <span class=" font-bold text-left text-xl text-alert "><?= $_SESSION['total_sale'] ?> </span>
        </div>
        <!--End  Financial All Total Section -->
        <!--Start  Financial Sale  List Table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            No
                        </th>
                        <th scope="col" class="px-4 py-3 ">
                            Property Code
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Payer Name
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Cash Amount
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
                <tbody class="font-medium tracking-wide">
                    <?php
                    if ($totalsale != 0) {
                        $salestart = 1;
                        foreach ($sales as $sale) {
                            if ($salestart % 2 != 0) {
                    ?>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <?php } else { ?>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <?php } ?>
                                <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $salestart++; ?>
                                </th>
                                <td class="px-4 py-4">
                                    <?= $sale["p_code"] ?>
                                </td>
                                <td class="px-4 py-4">
                                    <?= $sale["p_cash_payer_name"] ?>
                                </td>
                                <td class="px-4 py-4   text-alert text-right">
                                    <span><?= number_format($sale["p_cash_amount"]); ?></span>
                                    <?php
                                    if ($sale["p_cash_unit"] == 1) {
                                    ?>
                                        <span>$</span>
                                    <?php
                                    } else {
                                    ?>
                                        <span>Kyats</span>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td class="px-4 py-4">
                                    <?= $sale["created_date"]
                                        = date("d-m-Y  g:i A", strtotime($sale["created_date"])) ?>
                                </td>
                                <td class="px-4 py-4 flex justify-center">
                                    <a href="./financial_list_sale_service_cash_in.php?id=<?= $sale["id"] ?>&value=<?= $value = 2 ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                    </a>
                                </td>
                                <td class="px-4 py-4 text-center">
                                    <a href="#" name="delete" onclick="confirmation( '../../Controller/Financial/FinancialListSaleServiceDeleteController.php?id=<?= $sale['id'] ?>&value=<?= 2 ?>')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                                    </a>
                                </td>
                                </tr>
                            <?php }
                    } else { ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" colspan="7" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    " Data Not Found!"
                                </th>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
        <!--End Financial Sale  List Table -->


    </div>
    <!--End  Financial Sale Section -->

   
    <div id="deleteModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center;">
        <div style="background: white; padding: 40px; border-radius: 8px; width: 300px; text-align: center;">
            <p>Are you sure you want to delete this item?</p>
            <button class="text-white rounded hover:bg-goldYellow bg-alert p-1" onclick="confirmDelete()">Confirm Delete</button>
            <button class="text-white rounded hover:bg-goldYellow bg-darkGreen p-1 " onclick="hideModal()">Cancel</button>
        </div>
    </div>
    <!--End  Financial Collaborator Section -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="../resources/js/financial/financial_list_filter_search.js" ></script>

</body>

</html>
<?php $_SESSION['list_tag_value'] = ''; ?>