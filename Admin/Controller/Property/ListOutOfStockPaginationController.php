<?php
include_once "../../Model/DBConnection.php";

// Calculate total number of pages
$totalPagesQuery = "SELECT COUNT(*) as total FROM properties WHERE del_flg = 0 AND p_after = 1";
$result = $pdo->query($totalPagesQuery)->fetch(); // query Fn - Prepares and executes an SQL statement without placeholders