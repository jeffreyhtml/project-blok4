<?php

$host = 'mariadb';
$user = 'root';
$password = 'password';
$databaseName = 'myholidays';

$conn = mysqli_connect($host, $user, $password, $databaseName);

if (mysqli_connect_error()) {
    // echo "Connection establishing failed!";
}
else{
    // echo "Connection established Succesfully.";
}
?>
