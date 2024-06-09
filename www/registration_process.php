<?php
 
 
var_dump($_POST);
 
if (
    !isset($_POST['voornaam']) ||
    !isset($_POST['achternaam']) ||
    !isset($_POST['email']) ||
    !isset($_POST['wachtwoord']) ||
    !isset($_POST['telefoonnummer']) ||
    !isset($_POST['geboortedatum']) ||
    !isset($_POST['login'])
) {
    echo "De vereiste sleutels zijn niet aanwezig";
    exit;
}
 
if (
    !isset($_POST['voornaam']) ||
    !isset($_POST['achternaam']) ||
    !isset($_POST['email']) ||
    !isset($_POST['wachtwoord']) ||
    !isset($_POST['telefoonnummer']) ||
    !isset($_POST['geboortedatum']) ||
    !isset($_POST['login'])
) {
    echo "Een van de velden is leeg";
    exit;
}
 
$voornaam = $_POST['voornaam'];
$lastname = $_POST['achternaam'];
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];
$geboortedatum = $_POST['geboortedatum'];
$telefoonnummer = $_POST['telefoonnummer'];

require 'database.php';
 
$sql = "INSERT INTO user (voornaam, achternaam, email, wachtwoord, geboortedatum, telefoonnummer role, is_active)
        VALUES ('$voornaam', '$achternaam', '$email', '$wachtwoord', 'geboortedatum', 'telefoonnummer', '$status')";
 
mysqli_query($conn, $sql);
 
// DRY: DONT REPEAT YOURSELF