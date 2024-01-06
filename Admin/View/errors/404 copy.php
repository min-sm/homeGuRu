<?php

$errCode = $_GET['err_code'];
$isErrCode = isset($errCode);
$bodyTxt = 'The page you are looking for might be in another castle.';
if ($isErrCode) {
    switch ($errCode) {
        case "401":
            $bodyTxt = "Apologies, the page you're attempting to access is restricted from your current permissions.";
            break;
    }
}

$err = $_GET['error'];
$isErr = isset($err);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $isErrCode ? $errCode : "404"; echo $isErr ? $err : 'Not Found'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="text-center">
        <h1 class="text-6xl font-bold text-gray-800"><?= $isErrCode ? $errCode : "404"; ?></h1>
        <p class="text-2xl text-gray-600 mt-4"><?= $isErr ? $err : "Oops! Page not found."; ?></p>
        <p class="text-gray-500 mt-2"><?= $bodyTxt; ?></p>
        <a href="../DashboardView/dashboard.php" class="text-blue-500 hover:underline mt-4 block">Go back home</a>
    </div>
</body>

</html>