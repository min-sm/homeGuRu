<?php
session_start();
include '../../Controller/Setting/SliderController.php';
if (!isset($_SESSION["authority"])) {
  header('Location: ../../View/errors/wrongPath.php ');
  exit();
}
?>
<?php
include "../../Controller/Property/CategoryListController.php";
// include "../../Controller/Property/NumOfPropertyController.php";
// include "../../Controller/User/NumOfUserController.php";
// include "../../Controller/Owner/NumOfOwnerController.php";
// include "../../Controller/Collaborator/NumOfCollaboratorController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
  <!-- css -->
  <!-- odometer -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-minimal.min.css" />
  <!-- fontawsome -->
  <script src="https://kit.fontawesome.com/b9864528d4.js" crossorigin="anonymous"></script>
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    if (
      localStorage.getItem("color-theme") === "dark" ||
      (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
      document.documentElement.classList.add("dark");
      // document.getElementsByTagName("text").style.fill = "white";
    } else {
      document.documentElement.classList.remove("dark");
      // document.getElementsByTagName("text").style.fill = "black";
    }
  </script>
  <!-- odometer -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js" defer></script>
  <!-- ionic icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- CSS -->
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <title>Dashboard</title>

  <!-- tailwind -->
  <link href="../resources/css/dist/output.css" rel="stylesheet" />

  <!-- JS -->

</head>

<body class="bg-primary dark:bg-gray-700 tracking-wide">
  <!-- heading navigation -->
  <?php include '../commonView/menu.php' ?>
  <!-- main body -->
  <div class="p-4 pt-20 sm:ml-64">
    <div class="flex lg:flex-row flex-col w-full justify-around gap-10 dark:text-white text-black mt-8 mb-16 items-center">
      <div class="flex flex-col bg-paleGray dark:bg-gray-800 w-40 h-40 rounded-lg justify-around items-center border-2 border-black dark:border-white">
        <div class="flex flex-col gap-2 items-center">
          <i class="text-2xl fa-solid fa-building"></i>
          <p>Property</p>
        </div>
        <p class="text-3xl font-medium odometer" id="odometer_properties"></p>
      </div>
      <div class="flex flex-col bg-paleGray dark:bg-gray-800 w-40 h-40 rounded-lg justify-around items-center border-2 border-black dark:border-white">
        <div class="flex flex-col gap-2 items-center">
          <i class="text-2xl fa-solid fa-users "></i>
          <p>Users</p>
        </div>
        <p class="text-3xl font-medium odometer" id="odometer_users"></p>
      </div>
      <div class="flex flex-col bg-paleGray dark:bg-gray-800 w-40 h-40 rounded-lg justify-around items-center border-2 border-black dark:border-white">
        <div class="flex flex-col gap-2 items-center">
          <i class="text-2xl fa-solid fa-house-chimney-user"></i>
          <p>Property Owners</p>
        </div>
        <p class="text-3xl font-medium odometer" id="odometer_owners"></p>
      </div>
      <div class="flex flex-col bg-paleGray dark:bg-gray-800 w-40 h-40 rounded-lg justify-around items-center border-2 border-black dark:border-white">
        <div class="flex flex-col gap-2 items-center">
          <i class="text-2xl fa-solid fa-user-tie"></i>
          <p>Collaborator</p>
        </div>
        <p class="text-3xl font-medium odometer" id="odometer_collaborators"></p>
      </div>
    </div>


    <div class="flex gap-5 sm:flex-row flex-col">
      <div class="bg-paleGray w-full rounded-2xl m-auto  border-2 border-black  flex items-center justify-center">
        <div id="piechart" class="w-11/12 h-96"></div>
      </div>
      <div class="bg-paleGray w-full rounded-2xl m-auto  border-2 border-black flex items-center justify-center">
        <div id="curve_chart" class="w-11/12 h-96"></div>
      </div>
    </div>
  </div>
  <script>
    //for property
    $(document).ready(function() {
   function propertyOdometer(){
      $.ajax({
    url: "../../Controller/Property/NumOfPropertyController.php",
    type: "GET",
    dataType: "json",
    success: function(dataProperties) {
        console.log(dataProperties);
        $('#odometer_properties').html(dataProperties[0].num_of_property);
    }
});
}
setInterval(propertyOdometer,1000)

// for collaborators
function collaboratorOdometer(){
      $.ajax({
    url: "../../Controller/collaborator/NumOfCollaboratorController.php",
    type: "GET",
    dataType: "json",
    success: function(dataCollab) {
        console.log(dataCollab[0].num_of_collaborator);
        $('#odometer_collaborators').html(dataCollab[0].num_of_collaborator);
    }
});
}

setInterval(collaboratorOdometer,1000)

//for owners
function ownerOdometer(){
      $.ajax({
    url: "../../Controller/owner/NumOfOwnerController.php",
    type: "GET",
    dataType: "json",
    success: function(dataOwner) {
        console.log(dataOwner[0].num_of_owner);
        $('#odometer_owners').html(dataOwner[0].num_of_owner);
    }
});
}

setInterval(ownerOdometer,1000)

})

function userOdometer(){
      $.ajax({
    url: "../../Controller/user/NumOfuserController.php",
    type: "GET",
    dataType: "json",
    success: function(datauser) {
        console.log(datauser[0].num_of_user);
        $('#odometer_users').html(datauser[0].num_of_user);
    }
});
}

setInterval(userOdometer,1000)






  </script>

</body>

</html>