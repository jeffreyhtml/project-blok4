<?php session_start(); ?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vakantie aangemaakt!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Er is geen POST verzoek";
    exit;
}

// Land ingevult?
if (!isset($_POST['land'])) {
    var_dump($_POST);
    echo "Land is belangrijk!";
    exit;
}

// Omschrijving ingevult?
if (!isset($_POST['omschrijving'])) {
    var_dump($_POST);
    echo "Omschrijving is belangrijk!";
    exit;
}

// Temperatuur ingevult?
if (!isset($_POST['temperatuur'])) {
    var_dump($_POST);
    echo "Temperatuur is belangrijk!";
    exit;
}

// Tijdzone ingevult?
if (!isset($_POST['tijdzone'])) {
    var_dump($_POST);
    echo "Tijdzone is belangrijk!";
    exit;
}

// prijs ingevult?
if (!isset($_POST['prijs'])) {
    var_dump($_POST);
    echo "Prijs is belangrijk!";
    exit;
}

// Extra controle
if (!isset($_POST['land']) || !isset($_POST['omschrijving']) || !isset($_POST['temperatuur']) || !isset($_POST['tijdzone']) || !isset($_POST['prijs'])) {
    echo "Iets van de informatie klopt niet, vul het opnieuw in.";
    exit;
}

$land = $_POST['land'];
$omschrijving = $_POST['omschrijving'];
$temperatuur = $_POST['temperatuur'];
$tijdzone = $_POST['tijdzone'];
$prijs = $_POST['prijs'];

require 'database.php'; //$conn

$sql = "INSERT INTO vakantie (land, omschrijving, temperatuur, tijdzone, prijs)
VALUES ('$land', '$omschrijving', '$temperatuur', '$tijdzone', '$prijs')";

echo "Je hebt de nieuwe vakantie aangemaakt!";
exit;
?>