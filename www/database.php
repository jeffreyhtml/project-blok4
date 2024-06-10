<?php
$host = 'mariadb';
$user = 'root';
$password = 'password';
$databaseName = 'myholidays';

$conn = mysqli_connect($host, $user, $password, $databaseName);

if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
