<?php



function connectToDbAndGetPdo()
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "power_of_memorys";
$dsn = "mysql:dbname=$dbname;host=$host;charset=utf8";


$driver_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
];

$pdo = new PDO($dsn, $dbusername, $dbpassword, $driver_options);
    return $pdo;

}




?>