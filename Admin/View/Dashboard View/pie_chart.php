<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
      // document.getElementsByTagName("text").style.fill = "white";
    } else {
      document.documentElement.classList.remove("dark");
      // document.getElementsByTagName("text").style.fill = "black";
    }
  </script>

  <!-- ionic icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="style.css" />
  <title>Property Detail</title>

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
        ["Condo", 100],
        ["Apartment", 300],
        ["House", 150],
        ["Penthouse", 90],
        ["Commercial", 50],
        ["Land", 25],
      ]);

      var options = {
        title: "Categories",
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
        <p class="text-3xl font-medium">20,000</p>
      </div>
      <div class="flex flex-col bg-paleGray dark:bg-gray-800 w-40 h-40 rounded-lg justify-around items-center border-2 border-black dark:border-white">
        <div class="flex flex-col gap-2 items-center">
          <i class="text-2xl fa-solid fa-users "></i>
          <p>Users</p>
        </div>
        <p class="text-3xl font-medium">20,000</p>
      </div>
      <div class="flex flex-col bg-paleGray dark:bg-gray-800 w-40 h-40 rounded-lg justify-around items-center border-2 border-black dark:border-white">
        <div class="flex flex-col gap-2 items-center">
          <i class="text-2xl fa-solid fa-house-chimney-user"></i>
          <p>Property Owners</p>
        </div>
        <p class="text-3xl font-medium">20,000</p>
      </div>
      <div class="flex flex-col bg-paleGray dark:bg-gray-800 w-40 h-40 rounded-lg justify-around items-center border-2 border-black dark:border-white">
        <div class="flex flex-col gap-2 items-center">
          <i class="text-2xl fa-solid fa-user-tie"></i>
          <p>Collaborator</p>
        </div>
        <p class="text-3xl font-medium">20,000</p>
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
</body>

</html>