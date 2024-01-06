<?php
include_once "../../Model/DBConnection.php";

// Calculate total number of pages
$totalPagesQuery = "SELECT COUNT(*) as total FROM m_users WHERE del_flg = 0 AND verify = 1";
$result = $pdo->query($totalPagesQuery)->fetch(); // query Fn - Prepares and executes an SQL statement without placeholders