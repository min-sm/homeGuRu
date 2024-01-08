<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-700 h-screen flex items-center justify-center">
    <?php include '../commonView/menu.php'  ?>
    <div class="text-center ml-36 ">
        <h1 class="text-4xl font-bold text-white mb-14">Accessed Denied</h1>
        <p class="text-lg text-alert tracking-wide mt-4">You don't have permission to access this function.</p>
        <a href="../DashboardView/dashboard.php" class="text-blue-500 hover:underline mt-10 block">Go to Dashboard</a>
    </div>
</body>

</html>