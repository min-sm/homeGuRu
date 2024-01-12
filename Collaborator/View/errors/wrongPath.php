<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-700 h-screen flex items-center justify-center">
<div class="text-center">
        <h1 class="text-6xl font-bold text-white mb-14">403</h1>
        <p class="text-2xl text-red-500 mt-4"><?= isset($_GET['error']) ? $_GET['error'] : "Forbidden"; ?></p>
        <p class="text-blue-600 mt-6">You are not allowed.</p>
</div>
</body>
</html>