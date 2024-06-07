<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vakantie aangemaakt!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    Klik op de onderstaande link om terug te gaan naar de homepagina,
    <a href="holidays.php"></a>
</body>
</html><?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Er is geen POST request";
    exit;
    die;
}


if (!isset($_POST['land'])) {
    var_dump($_POST);
    echo "Land is belangerijk he!";
    exit;
}
if (!isset($_POST['omschrijving'])) {
    var_dump($_POST);
    echo "Omschrijving is belangerijk he!";
    exit;
}
if (!isset($_POST['temperatuur'])) {
    var_dump($_POST);
    echo "Temperatuur is belangerijk he!";
    exit;
}
if (!isset($_POST['tijdzone'])) {
    var_dump($_POST);
    echo "Tijdzone is belangerijk he!";
    exit;
}
if (!isset($_POST['prijs'])) {
    var_dump($_POST);
    echo "prijs";
    exit;
}

if (!isset($_POST['land'])  ||  !isset($_POST['omschrijving']) || !isset($_POST['temperatuur']) || !isset($_POST['tijdzone'])|| !isset($_POST['prijs'])) {
    echo "Iets van de informatie klopt niet, vul het opnieuw in.";
    exit;
}

$vakantie= $_POST['land'];

$vakantie = $_POST['omschrijving'];

$vakantie = $_POST['temperatuur'];

$vakantie = $_POST['tijdzone'];

$vakantie= $_POST['prijs'];


require 'database.php'; //$conn
$sql = "INSERT INTO vakantie (land, omschrijving, temperatuur, tijdzone, prijs)
VALUES ('land, omschrijving, temperatuur, tijdzone, prijs')";

echo "Je hebt de nieuwe vakantie aangemaakt!";
exit;
