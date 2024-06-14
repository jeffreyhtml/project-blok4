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
        <div class="search-bar">
            <form action="searchbar.phpq" method="get">
                <input type="text" name="query" placeholder="Search...">

            </form>
        </div>
    </div>

    <h1>Login</h1>

    <form action="login_process.php" method="post">
        <div class="login_page">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="login" name="login" id="login">
            </div>
            <div class="form-group">
                <label for="wachtwoord">Wachtwoord </label>
                <input type="wachtwoord" name="wachtwoord" id="wachtwoord">
                <button type="submit">login</button>
            </div>
        </div>
    </form>
</body>

</html>