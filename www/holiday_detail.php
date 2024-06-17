<?php session_start();

require 'database.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

 
    $sql = "SELECT * FROM vakantie WHERE vakantieId = $id";
    $result = mysqli_query($conn, $sql);

    // Controleert of er resultaten zijn gevonden
    if ($result && mysqli_num_rows($result) > 0) {
        // Haalt de vakantiegegevens op
        $vakantie = mysqli_fetch_assoc($result);
    } else {

        echo "Geen vakantie gevonden met het opgegeven ID.";
        exit(); 
    }
} else {

    echo "Geen vakantie ID opgegeven.";
    exit(); 
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
