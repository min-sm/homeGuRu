<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- odometer -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-minimal.min.css"/>
    <!-- odometer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js" defer></script>
    <title>Document</title>
</head>
<body>
<p class="text-3xl font-medium odometer" id="odometer"></p>
</body>
<script>
    let value = 50000;
    setInterval(()=>{
        odometer.innerHTML =value;
    },3000)
 
</script>
</html>