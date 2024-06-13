<?php

require 'database.php';

// Controleer of de vakantieId is meegegeven in de URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL-query om de vakantiegegevens op te halen op basis van het meegegeven vakantieId
    $sql = "SELECT * FROM vakantie WHERE vakantieId = $id";
    $result = mysqli_query($conn, $sql);

    // Controleer of er resultaten zijn gevonden
    if ($result && mysqli_num_rows($result) > 0) {
        // Haal de vakantiegegevens op
        $vakantie = mysqli_fetch_assoc($result);
    } else {
        // Geen vakantie gevonden met het meegegeven vakantieId, doe hier iets mee, bijvoorbeeld een foutmelding tonen
        echo "Geen vakantie gevonden met het opgegeven ID.";
        exit(); // Stop de verdere uitvoering van de pagina
    }
} else {
    // Als er geen vakantieId is meegegeven, doe hier iets mee, bijvoorbeeld een foutmelding tonen
    echo "Geen vakantie ID opgegeven.";
    exit(); // Stop de verdere uitvoering van de pagina
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vakantie Detail</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Toon de vakantiegegevens -->
    <div class="vakantie-details">
        <h2><?php echo $vakantie['land'] ?></h2>
        <p>Omschrijving: <?php echo $vakantie['omschrijving'] ?></p>
        <p>Prijs: <?php echo $vakantie['prijs'] ?></p>
        <p>Tijdzone: <?php echo $vakantie['tijdzone'] ?></p>
        <p>Temperatuur: <?php echo $vakantie['temperatuur'] ?></p>
        <img src="<?php echo $vakantie['afbeelding'] ?>" alt="Afbeelding van de vakantie">
    </div>
</body>

</html>
