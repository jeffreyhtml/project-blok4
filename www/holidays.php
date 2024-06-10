<?php

require 'database.php';
$sql = "SELECT * FROM vakantie";
$vakantie = mysqli_query($conn, $sql);
$vakantie = mysqli_fetch_all($vakantie, MYSQLI_ASSOC);
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
    </ul>
    <div class="search-bar">
        <form action="searchbar.phpq" method="get">
            <input type="text" name="query" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
    </div>
</div>
<table>
    <thead>
    </thead>
    <tbody>
        <?php foreach ($vakantie as $vakantieId) : ?>
            <tr>
                <td><?php echo $vakantieId['land'] ?></td>
                <td><?php echo $vakantieId['prijs'] ?></td>
                <td>
                    <a href="holiday_detail.php">details</a>
                </td>
                <div class="afbeelding_vakantie">
                    <td><img src="<?php echo $vakantieId['afbeelding'] ?>" alt=""></td>
                </div>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</body>

</html>