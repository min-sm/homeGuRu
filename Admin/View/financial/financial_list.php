<?php
session_start();
include '../../Controller/Setting/SliderController.php';
if (!isset($_SESSION["authority"])) {
    header('Location: ../../View/errors/wrongPath.php ');
    exit();
}
?>

<?php include '../../Controller/Financial/FinancialListController.php' ?>

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
    <script src="../resources/js/financial/deleteMotal.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    let apiKey = "15a80b84fdd30a6dcc2f768d";
    let api = `https://v6.exchangerate-api.com/v6/${apiKey}/latest/USD`
    const amount = '1'
    const fromCurrency = "USD"
    const toCurrency = 'MMK'
    let convertedAmount = 0;

    fetch(api)
        .then(resp => resp.json())
        .then((data) => {
            let fromExchangeRate = data.conversion_rates[fromCurrency];
            let toExchangeRate = data.conversion_rates[toCurrency];
            convertedAmount = amount * toExchangeRate;
            console.log(convertedAmount);
            document.getElementById("convert_amount").value = convertedAmount;

        });
</script>
</head>

<body class="dark:bg-gray-400">
    <!-- heading navigation -->
    <?php include '../commonView/menu.php' ?>

    <div class="p-4 pt-20 sm:ml-64">

        <!--Start  Financial Filter Tag -->
        <div class="flex flex-col items-center justify-center tracking-wider">
            <h1 class=" font-bold text-5xl mt-5 mb-12">Financial Filter </h1>
            <div class="flex">
                <a href="./financial_list_filter.php" type="submit" class="lg:mr-20 mr-10  text-white bg-darkGreen hover:bg-blue-800 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl lg:px-14 px-8 py-2 text-center 
                    dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wider">
                    Financial List
                </a>
                <form action="../../Controller/financial/ConvertAmountController.php" method="post">
                    <input type="text" id="convert_amount" name="convert_amount" class="hidden">
                <button href="#" type="submit" class="text-white bg-darkGreen hover:bg-blue-800 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl lg:px-14 px-8 py-2 text-center 
                    dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 tracking-wider">
                    Financial Total
                </button>
                </form>
            </div>
        </div>
        <!--End  Financial Filter Tag -->


        <!--Start  Financial Sale  List Table -->
        <h1 class=" text-center font-bold text-4xl  mt-20 mb-2">Sale Service Cash In</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div id="deleteModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center;">
                <div style="background: white; padding: 40px; border-radius: 8px; width: 300px; text-align: center;">
                    <p>Are you sure you want to delete this item?</p>
                    <button class="text-white rounded hover:bg-goldYellow bg-alert p-1" onclick="confirmDelete()">Confirm Delete</button>
                    <button class="text-white rounded hover:bg-goldYellow bg-darkGreen p-1 " onclick="hideModal()">Cancel</button>
                </div>
            </div>
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
                    $no = 1;
                    foreach ($sales as $sale) {
                        if ($no % 2 != 0) {
                    ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <?php } else { ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <?php } ?>
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $no++; ?>
                            </th>

                            <td class="px-4 py-4">
                                <?= $sale["p_code"] ?>
                            </td>
                            <td class="px-4 py-4">
                                <?= $sale["p_cash_payer_name"] ?>
                            </td>
                            <td class="px-4 py-4 font-semibold text-xl  text-alert text-right">
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
                                    =date("d-m-Y  g:i A", strtotime($sale["created_date"])) ?>
                            </td>
                            <td class="px-4 py-4 flex justify-center">
                                <a href="./sale_service_cash_in.php?id=<?= $sale["id"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                </a>
                            </td>
                            <td class="px-4 py-4 text-center">
                                <a href="#" name="delete" onclick="confirmation( '../../Controller/Financial/PropertyServiceDeleteController.php?id=<?= $sale['id'] ?>')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                                </a>

                            </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>

        <div class=" relative h-20 mb-2">
            <div class=" flex mb-3 absolute top-7 right-0 ">
                <a href="./financial_sale_list.php" type="submit" class="mr-5 text-white bg-blue-800 opacity-70 hover:opacity-100  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2.5 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All</a>
                <a href="./financial_property_add.php" type="submit" class=" text-goldYellow bg-primary border-4 border-goldYellow hover:text-white hover:bg-goldYellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    + Add New</a>
            </div>
        </div>

        <!--End Financial Sale  List Table -->

        <!--Start  Financial Rent  List Table -->
        <h1 class=" text-center font-bold text-4xl  mt-20 mb-2">Rent Service Cash In</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div id="deleteModal2" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center;">
                <div style="background: white; padding: 40px; border-radius: 8px; width: 300px; text-align: center;">
                    <p>Are you sure you want to delete this item?</p>
                    <button class="text-white rounded hover:bg-goldYellow bg-alert p-1" onclick="confirmDelete()">Confirm Delete</button>
                    <button class="text-white rounded hover:bg-goldYellow bg-darkGreen p-1 " onclick="hideModal()">Cancel</button>
                </div>
            </div>

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
                    $no = 1;
                    foreach ($rents as $rent) {
                        if ($no % 2 != 0) {
                    ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <?php } else { ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <?php } ?>
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $no++; ?>
                            </th>

                            <td class="px-4 py-4">
                                <?= $rent["p_code"] ?>
                            </td>
                            <td class="px-4 py-4">
                                <?= $rent["p_cash_payer_name"] ?>
                            </td>
                            <td class="px-4 py-4 font-semibold text-xl  text-alert text-left">
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
                                    =date("d-m-Y  g:i A", strtotime($rent["created_date"])) ?>
                            </td>
                            <td class="px-4 py-4 flex justify-center">
                                <a href="./rent_service_cash_in.php?id=<?= $rent["id"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                </a>
                            </td>
                            <td class="px-4 py-4 text-center">
                                <a href="#" name="delete2" onclick="confirmation( '../../Controller/Financial/PropertyServiceDeleteController.php?id=<?= $rent['id'] ?>')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                                </a>
                            </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
        <div class=" relative h-20 mb-2">
            <div class=" flex mb-3 absolute top-7 right-0 ">
                <a href="./financial_rent_list.php" type="submit" class="mr-5 text-white bg-blue-800 opacity-70 hover:opacity-100  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2.5 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All</a>
                <a href="./financial_property_add.php" type="submit" class=" text-goldYellow bg-primary border-4 border-goldYellow hover:text-white hover:bg-goldYellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    + Add New</a>
            </div>
        </div>
        <!--End Financial Rent  List Table -->

        <!--Start Financial Collaborator  List Table -->

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h1 class=" text-center font-bold text-4xl  mt-20 mb-2">Collaborator Service Cash In</h1>
            <div id="deleteModal3" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center;">
                <div style="background: white; padding: 40px; border-radius: 8px; width: 300px; text-align: center;">
                    <p>Are you sure you want to delete this item?</p>
                    <button class="text-white rounded hover:bg-goldYellow bg-alert p-1" onclick="confirmDelete()">Confirm Delete</button>
                    <button class="text-white rounded hover:bg-goldYellow bg-darkGreen p-1" onclick="hideModal()">Cancel</button>
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            No
                        </th>
                        <th scope="col" class="px-4 py-3 ">
                            Company Name
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
                    $no = 1;
                    foreach ($collaborators as $collaborator) {
                        if ($no % 2 != 0) {
                    ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <?php } else { ?>
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <?php } ?>
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $no++; ?>
                            </th>
                            <td class="px-4 py-4">
                                <?= $collaborator["gc_company_name"]; ?>
                            </td>
                            <td class="px-4 py-4">
                                <?= $collaborator["ccash_payer_name"]; ?>
                            </td>
                            <td class="px-4 py-4 font-semibold text-xl  text-alert text-right">
                                <span><?= number_format($collaborator["ccash_amt"]); ?></span>
                                <?php
                                if ($collaborator["ccash_unit"] == 1) {
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
                                <?= $collaborator["cash_closed_created_date"]
                                    =date("d-m-Y  g:i A", strtotime($collaborator["cash_closed_created_date"])) ?>
                            </td>
                            <td class="px-4 py-4 flex justify-center">
                                <a href="./collaborator_service_cash_in.php?id=<?= $collaborator["id"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <img class="w-5" src="../resources/img/icon/view-details.png" alt="">
                                </a>
                            </td>                           
                            <td class="px-4 py-4 text-center">
                                <a href="#" name="delete3" onclick="confirmation( '../../Controller/Financial/CollaboratorServiceDeleteController.php?id=<?= $collaborator['id'] ?>')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <ion-icon name="trash-bin" class="text-xl font-medium cursor-pointer text-alert"></ion-icon>
                                </a>
                            </td>
                        <?php } ?>
                </tbody>
            </table>
        </div>
        <div class=" relative h-20 mb-2">
            <div class=" flex mb-3 absolute top-7 right-0 ">
                <a href="./financial_collaborator_list.php" type="submit" class="mr-5 text-white bg-blue-800 opacity-70 hover:opacity-100  focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2.5 text-center  dark:bg- dark:hover:bg-green-700 dark:focus:ring-green-800">
                    See All</a>
                <a href="./financial_collaborator_add.php" type="submit" class=" text-goldYellow bg-primary border-4 border-goldYellow hover:text-white hover:bg-goldYellow focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-medium px-8 py-2 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    + Add New</a>
            </div>
        </div>
        <!--End Financial Collaborator List Table -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>