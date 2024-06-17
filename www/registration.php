<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
            <li><a href="over_ons.php">Over ons</a></li>
        </ul>
    </div>
    <div class="form_registration">
        <form action="registration_procces.php" method="post">
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="wachtwoord">Wachtwoord</label>
                <input type="text" name="wachtwoord" id="wachtwoord">
            </div>
            <div>
                <label for="voornaam">Voornaam</label>
                <input type="text" name="voornaam" id="voornaam">
            </div>
            <div>
                <label for="achternaam">Achternaam</label>
                <input type="text" name="achternaam" id="achternaam">
            </div>
            <div>
                <label for="geboortedatum">Geboortedatum</label>
                <input type="text" name="geboortedatum" id="geboortedatum">
            </div>
            <div>
                <label for="telefoonnummer">Telefoonnummer</label>
                <input type="text" name="telefoonnummer" id="telefoonnummer">
            </div>
            <div>
                <button type="submit" name="submit">Registreer</button>
            </div>
        </form>
    </div>
</body>

</html>