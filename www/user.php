<?php 
session_start();
require 'database.php';

// Haal de login informatie op uit de sessie
$login = $_SESSION['login'];

// SQL query om gegevens op te halen van de gebruiker
$sql = "SELECT * FROM `user` JOIN account ON account.accountId = user.userId WHERE account.login = '$login'";

// Voert de query uit
$result = mysqli_query($conn, $sql);

$dbUser = mysqli_fetch_assoc($result);
?>
<ul>
    <li>Gebruikersnaam Login: <?php echo $dbUser['login'] ?></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
x    // De rest invullen
</ul>
