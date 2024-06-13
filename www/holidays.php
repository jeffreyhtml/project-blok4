<?php

require 'database.php';
$sql = "SELECT * FROM vakantie";
$vakantie = mysqli_query($conn, $sql);
$vakanties = mysqli_fetch_all($vakantie, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

</body>
<div class="header">
    <div class="logo">
        <a href="holidays.php">
            <img src="images/banner.png" alt="logo">
        </a>
    </div>

    <ul class="navbar">
        <li><a href="holidays.php">Vakanties</a></li>
        <li><a href="login.php">Inloggen</a></li>
        <li><a href="registration.php">Registratie</a></li>
        <li><a href="holiday_add.php">Vakantie toevoegen</a></li>
        <li><a href="statistics.php">statistieken</a></li>
        <li><a href="user.php">Gebruiker</a></li>
    </ul>
    <div class="search-bar">
        <form action="searchbar.phpq" method="get">
            <input type="text" name="query" placeholder="Search...">
        </form>
    </div>
</div>
<table>
    <thead>
    </thead>
    <tbody>
        <div class="slider-container">
            <div class="slider">
                <div class="slides">
                    <div class="slider">
                        <a href="holiday_detail.php">
                            <div class="slide"><img src="images/rialto.jpg" alt="$vakantieId"></div>
                        </a>
                    </div>
                </div>
                <button class="prev" onclick="moveSlide(1)">&#10094;</button>
                <button class="next" onclick="moveSlide(-1)">&#10095;</button>
            </div>
        </div>
        <script src="script.js"></script>
        <!-- 
        <?php foreach ($vakanties as $vakantie) : ?>
            <tr>
                <div class="afbeelding_vakantie">
                    <td><a href="holiday_detail.php?id=<?php echo $vakantie['vakantieId'] ?>"><img src=" <?php echo $vakantie['afbeelding'] ?>" alt="Picture"></a></td>
                </div>
            </tr>
        <?php endforeach; ?> -->

    </tbody>
</table>
</body>

</html>