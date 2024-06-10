<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<script>
    let el = document.querySelector("vakantie");
</script>

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
        </ul>
        <div class="search-bar">
            <form action="searchbar.phpq" method="get">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    <br>
    <div class="form_registration">
    <form action="add_process.php" method="post">
        <div class="form-group">
            <label for="land">land</label>
            <input type="text" name="land">
        </div>
        <div class="form-group">
            <label for="omschrijving">omschrijving</label>
            <input type="text" name="omschrijving" id="omschrijving">
        </div>
        <div class="form-group">
            <label for="temperatuur">temperatuur</label>
            <input type="text" name="temperatuur" id="temperatuur">
        </div>
        <div class="form-group">
            <label for="tijdzone">tijdzone</label>
            <input type="text" name="tijdzone" id="tijdzone">
        </div>
        <div class="form-group">
            <label for="prijs">prijs</label>
            <input type="number" name="prijs" id="prijs">
        </div>
        <button type="submit" name="submit">Upload een nieuwe vakantie</button>
</div>
    </form>
</body>

</html>