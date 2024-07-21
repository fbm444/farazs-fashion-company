<?php
// Faraz Merchant, 3/01/24, IT202 002, Phase 02, fbm@njit.edu //

$env = parse_ini_file('../.env');
$dbName = $env['DATABASE_NAME'];
$port = $env['DATABASE_PORT'];
$username = $env['DATABASE_USER'];
$pass = $env['DATABASE_PASSWORD'];
$host = $env['DATABASE_HOST'];
$dsn = "mysql:host={$host};port={$port};dbname={$dbName}";


try {
    $db = new PDO($dsn, $username, $pass);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('error_page.php');
    exit();
}

function getDatabase()
{
    $env = parse_ini_file('../.env');
    $dbName = $env['DATABASE_NAME'];
    $username = $env['DATABASE_USER'];
    $pass = $env['DATABASE_PASSWORD'];
    $port = $env['DATABASE_PORT'];
    $host = $env['DATABASE_HOST'];
    $dsn = "mysql:host={$host};port={$port};dbname={$dbName}";

    try {
        $db = new PDO($dsn, $username, $pass);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('error_page.php');
        exit();
    }

    return $db;
}


?>