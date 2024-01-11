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
include "../../Controller/Property/NumOfPropertyController.php";
include "../../Controller/User/NumOfUserController.php";
include "../../Controller/Owner/NumOfOwnerController.php";
include "../../Controller/Collaborator/NumOfCollaboratorController.php";
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-minimal.min.css"/>
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

  <!-- Google Charts -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <!-- line charts -->
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Year", "Sale", "Rent"],
        ["Jan", 1000, 400],
        ["Feb", 1170, 460],
        ["Mar", 660, 1120],
        ["Apr", 1030, 540],
      ]);

      var options = {
        title: "Financial",
        titleTextStyle: {
          fontSize: 18, // Set your desired font size in pixels
          fontName: 'Roboto' // Set your desired font family        
        },
        curveType: "function",
        legend: {
          position: "bottom"
        },
        backgroundColor: "transparent",
        chartArea: {
          width: "80%",
          height: "80%"
        },
      };

      var chart = new google.visualization.LineChart(
        document.getElementById("curve_chart")
      );

      chart.draw(data, options);
    }
  </script>
  <!-- pie chart -->
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"],
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Property Type", "Count"],
        <?php
        for ($i = 0; $i < 4; $i++) {
        ?>["<?= $pt_name_and_count[$i]["pt_name"] ?>", <?= $pt_name_and_count[$i]["num_of"] ?>],
        <?php } ?>

        <?php
        $numOfRestOfCategory = 0;
        for ($j = 4; $j < count($pt_name_and_count); $j++) {
          $numOfRestOfCategory += $pt_name_and_count[$j]["num_of"];
        }
        ?>
        ["Others", <?= $numOfRestOfCategory ?>],
      ]);

      var options = {
        title: "Categories",
        titleTextStyle: {
          fontSize: 18, // Set your desired font size in pixels
          fontName: 'Roboto' // Set your desired font family        
        },
        legend: {
          textStyle: {
            fontSize: 14,
            fontName: 'Arial, sans-serif',
            color: '#555' // Legend text color
          }
        },
        is3D: true,
        backgroundColor: "transparent",
        chartArea: {
          width: "100%",
          height: "80%"
        },
      };

      var chart = new google.visualization.PieChart(
        document.getElementById("piechart")
      );

      chart.draw(data, options);
    }
  </script>
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
        <p class="text-3xl font-medium odometer" id="odometer_properties"><?= number_format($num_of_properties[0]['num_of_property']) ?></p>
      </div>
      <div class="flex flex-col bg-paleGray dark:bg-gray-800 w-40 h-40 rounded-lg justify-around items-center border-2 border-black dark:border-white">
        <div class="flex flex-col gap-2 items-center">
          <i class="text-2xl fa-solid fa-users "></i>
          <p>Users</p>
        </div>
        <p class="text-3xl font-medium odometer" id="odometer_users"><?= number_format($num_of_users[0]['num_of_user']) ?></p>
      </div>
      <div class="flex flex-col bg-paleGray dark:bg-gray-800 w-40 h-40 rounded-lg justify-around items-center border-2 border-black dark:border-white">
        <div class="flex flex-col gap-2 items-center">
          <i class="text-2xl fa-solid fa-house-chimney-user"></i>
          <p>Property Owners</p>
        </div>
        <p class="text-3xl font-medium odometer" id="odometer_owners"><?= number_format($num_of_owners[0]['num_of_owner']) ?></p>
      </div>
      <div class="flex flex-col bg-paleGray dark:bg-gray-800 w-40 h-40 rounded-lg justify-around items-center border-2 border-black dark:border-white">
        <div class="flex flex-col gap-2 items-center">
          <i class="text-2xl fa-solid fa-user-tie"></i>
          <p>Collaborator</p>
        </div>
        <p class="text-3xl font-medium odometer" id="odometer_collaborators"><?= number_format($num_of_collaborators[0]['num_of_collaborator']) ?></p>
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
  $(document).ready(function () {
    // Request to Num of User
    $.ajax({
      url: "../../Controller/User/NumOfUserController.php",
      type: "GET",
      success: function(dataUser) {
        var numOfUsers = dataUser.num_of_users;
        $('#odometer_users').val(numOfUsers);
      },
      error: function(errorUser) {
        console.error("Error from User controller:", errorUser);
      }
    });

    // Request to NumOfOwnerController.php
    $.ajax({
      url: "../../Controller/Owner/NumOfOwnerController.php",
      type: "GET",
      success: function(dataOwner) {
        var numOfOwners = dataOwner.num_of_owners;
        $('#odometer_owners').val(numOfOwners);
      },
      error: function(errorOwner) {
        console.error("Error from Owner controller:", errorOwner);
      }
    });

    // Request to NumOfCollaboratorController.php
    $.ajax({
      url: "../../Controller/Collaborator/NumOfCollaboratorController.php",
      type: "GET",
      success: function(dataCollaborator) {
        var numOfCollaborators = dataCollaborator.num_of_collaborators;
        $('#odometer_collaborators').val(numOfCollaborators);
      },
      error: function(errorCollaborator) {
        console.error("Error from Collaborator controller:", errorCollaborator);
      }
    });

    // Request to NumOfPropertiesController.php
    $.ajax({
      url: "../../Controller/Collaborator/NumOfPropertyController.php",
      type: "GET",
      success: function(dataProperties) {
        var numOfProperties = dataProperties.num_of_properties;
        $('#odometer_properties').val(numOfProperties);
      },
      error: function(errorProperties) {
        console.error("Error from Properties controller:", errorProperties);
      }
    });
  });
</script>

  </body>

</html>