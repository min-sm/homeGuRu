<?php

$hostname = "localhost";
$port = 3307;
$dbname = "";
$username = "root";
$password = "";

//Initial Connection
$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$dbname", $username, $password);

//Error Exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>


