<?php
session_start();
// Controleer of 'wachtwoord' aanwezig is.
if (!isset($_POST['wachtwoord'])) {
    echo "Deze sleutel bestaat niet";
    exit;
}
if (empty($_POST['login'])) {
    echo "Gebruikersnaam is leeg";
    exit;
}
if (empty($_POST['wachtwoord'])) {
    echo "Wachtwoord is leeg";
    exit;
}


$login = $_POST['login'];
$wachtwoord = $_POST['wachtwoord'];


require 'database.php';


$login = mysqli_real_escape_string($conn, $login);
$wachtwoord = mysqli_real_escape_string($conn, $wachtwoord);


$sql = "SELECT * FROM `user` JOIN account ON account.accountId = user.userId WHERE account.login = '$login'";
$result = mysqli_query($conn, $sql);


$dbUser = mysqli_fetch_assoc($result);

// Controleert of de gebruiker bestaat
if ($dbUser) {

    if ($wachtwoord === $dbUser['wachtwoord']) {

        $_SESSION['user_id'] = $dbUser['userId'];
        $_SESSION['login'] = $dbUser['login'];

        header("Location: holidays.php");
        exit();
    } else {
        echo "Ongeldig wachtwoord";
    }
} else {
    echo "Gebruiker niet gevonden";
}

mysqli_close($conn);
exit;
