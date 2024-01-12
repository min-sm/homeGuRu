<?php 
session_start();
include '../../Controller/Setting/SliderController.php';
if (!isset($_SESSION["authority"])) {
     header('Location: ../../View/errors/wrongPath.php ');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- tailwind -->
    <link href="../resources/css/dist/output.css" rel="stylesheet" />

    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/b9864528d4.js" crossorigin="anonymous"></script>
    <script>
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>

    <title>Admin List</title>
</head>

<body class="bg-primary dark:bg-gray-700">
    <?php include '../commonView/menu.php' ?>
    <!-- main body -->
    <div class="p-4 pt-20 sm:ml-64">
        <h1 class="text-center font-bold text-2xl mb-8 text-black dark:text-white">Admin List</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base text-gray-700 uppercase bg-primary dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Joined date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            01
                        </th>
                        <td class="px-6 py-4">
                            GU-1
                        </td>
                        <td class="px-6 py-4">
                            Ko Ko Zay
                        </td>
                        <td class="px-6 py-4">
                            09980636388
                        </td>
                        <td class="px-6 py-4">
                            kkzedn99@gmail.com
                        </td>
                        <td class="px-6 py-4">
                            2023/12/03
                        </td>
                        <td class="px-6 py-4">
                            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            02
                        </th>
                        <td class="px-6 py-4">
                            GU-2
                        </td>
                        <td class="px-6 py-4">
                            Min Soe Moe
                        </td>
                        <td class="px-6 py-4">
                            09757346631
                        </td>
                        <td class="px-6 py-4">
                            minsoemoe999@gmail.com
                        </td>
                        <td class="px-6 py-4">
                            2023/12/03
                        </td>
                        <td class="px-6 py-4">
                            <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            03
                        </th>
                        <td class="px-6 py-4">
                            GU-3
                        </td>
                        <td class="px-6 py-4">
                            Thi Thi Hlaing
                        </td>
                        <td class="px-6 py-4">
                            09971536999
                        </td>
                        <td class="px-6 py-4">
                            thithihlaing9999@gmail.com
                        </td>
                        <td class="px-6 py-4">
                            2023/12/03
                        </td>
                        <td class="px-6 py-4">
                            <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            04
                        </th>
                        <td class="px-6 py-4">
                            GU-4
                        </td>
                        <td class="px-6 py-4">
                            Tan Wadi Aung
                        </td>
                        <td class="px-6 py-4">
                            09980636388
                        </td>
                        <td class="px-6 py-4">
                            tanwadiaung23@gmail.com
                        </td>
                        <td class="px-6 py-4">
                            2023/12/03
                        </td>
                        <td class="px-6 py-4">
                            <ion-icon name="trash-bin" class="text-lg font-medium cursor-pointer text-alert"></ion-icon>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>