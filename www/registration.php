<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<nav>
    <ul>

        
    </ul>
</nav>
    <form action="registration_procces.php" method="post">
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>

        <div>
            <label for="wachwoord">Wachtwoord</label>
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
            <input type="text" name="telefoonnummer" id="telefoonummer">
        </div>
        <div>
            <button type="submit" name="submit">Registreer</button>
        </div>
    </form>
</body>

</html>