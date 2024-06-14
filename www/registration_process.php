<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
    
    if (
        !isset($_POST['voornaam']) ||
        !isset($_POST['achternaam']) ||
        !isset($_POST['email']) ||
        !isset($_POST['wachtwoord']) ||
        !isset($_POST['telefoonnummer']) ||
        !isset($_POST['geboortedatum'])
    ) {
        echo "De vereiste sleutels zijn niet aanwezig";
        exit;
    }
    
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    $geboortedatum = $_POST['geboortedatum'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $role = 'user'; // Default role
    $status = 1; // Default status, assuming 1 means active

    require 'database.php';
    
    $sql = "INSERT INTO user (voornaam, achternaam, email, wachtwoord, geboortedatum, telefoonnummer, role, is_active)
            VALUES ('$voornaam', '$achternaam', '$email', '$wachtwoord', '$geboortedatum', '$telefoonnummer', '$role', '$status')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Registratie succesvol!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>
