<?php include 'header.php';

require 'connectie.php';

$id = $_GET['id'];
$sql = "SELECT * FROM recepten WHERE id = $id";

$result = mysqli_query($conn, $sql);

$receptenboek = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    Naam <br> <?php echo $vakantie['naam'] ?> <br> <br>
    Menugang <br> <?php echo $vakantie['land'] ?> <br> <br>
    Aantal Ingrediënten <br> <?php echo $vakantie['omschrijving'] ?> <br> <br>
    Kosten <br> <?php echo $vakantie['prijs'] ?> <br> <br>
    Recept <br> <?php echo $vakantie['tijdzone'] ?> <br> <br>
    moeilijkheidsgraad <br> <?php echo $vakantie['temperatuur'] ?> <br> <br>
    <br> <img src="images/<?php echo $vakantie['afbeelding'] ?>" alt="recept-image"> <br>
</body>
</html>