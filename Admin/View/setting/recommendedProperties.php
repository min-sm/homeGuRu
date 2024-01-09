<?php
session_start(); 
include '../../Controller/Setting/SliderController.php';
if (!isset($_SESSION["authority"])) {
     header('Location: ../../View/errors/wrongPath.php');
    exit();
};
if( $_SESSION['authority']!=0){
    header('Location: ../../View/errors/noPermission.php');
    exit();
}
?>
<?php include '../../Controller/Setting/RecommendListShowController.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <!-- favicon -->
        <link rel="icon" type="image/x-icon" href="../../../Storage/logo/<?=$sliders[0]["fav_icon"]?>">
    <title>Dashboard</title>
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
</head>

<body class="bg-primary dark:bg-gray-700 ">
    <?php include '../commonView/menu.php' ?>
<form action="../../Controller/Setting//RecommendPropertiesController.php" method="post">
    <div class="p-4 w-64 mt-36 sm:ml-96">
        <h1 class="text-2xl font-bold dark:text-white mb-16 whitespace-nowrap ">Recommendation Setting</h1>
        <div>
        <?php
$counter = 1; // initialize a counter variable

foreach ($recommend_properties as $property) {
    ?>
    <div class="mb-5">
        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Property Code : </label>
        <input name="recommend_<?php echo $counter; ?>" value="<?= $property['property_code'] ?>" type="text" id="default-input" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <?php
    $counter++; // increment the counter variable
}?>

        </div>
    </div>
    <div class="flex w-full justify-end  pb-5 pr-10">
        <button type="submit" name="submit" class="mr-5 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-6 py-2 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
        <!-- <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:focus:ring-yellow-900">Yellow</button> -->
        <label for="cancel" class="text-darkGreen bg-white border border-gray-500 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancel</label>
        <input type="reset" name="cancel" id="cancel" hidden>
    </div>
  </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>
