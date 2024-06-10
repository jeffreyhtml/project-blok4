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
</html>
<?php
echo "Welkom op de databse van MyHolidays";

require 'database.php';
$sql = "SELECT * FROM vakantie";
$vakantie = mysqli_query($conn, $sql);
$vakantie = mysqli_fetch_all($myholidays, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<body>
<div class="header">
        <div class="logo"><img src="images/banner.png" alt="logo"></div>
        <ul class="navbar">
            <li><a href="holidays.php">Vakanties</a></li>
            <li><a href="login.php">Inloggen</a></li>
            <li><a href="registration.php">Registratie</a></li>
            <li><a href="holiday_add.php">Vakantie Toevoegen</a></li>
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
        <tr>
            <th>Land</th>
            <th>Omschrijving</th>
            <th>Prijs</th>
            <th>Temperatuur</th>
            <th>Tijdzone</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tools as $toolid) : ?>
            <tr>
                <td><?php echo $toolid['tool_name'] ?></td>
                <td><?php echo $toolid['tool_category'] ?></td>
                <td><?php echo $toolid['tool_price'] ?></td>
                <td>
                <a href="detail.php?id=<?php echo $tool['tool_id'] ?>">details</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</body>

</html>