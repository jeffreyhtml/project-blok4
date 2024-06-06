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
        <a href="">Overzicht tools</a>
        <a href="">Huidige pagina</a>
        <a href=""> Registratie</a>
        <a href="">Login</a>
        
    </ul>
</nav>
    <h1>Login</h1>

    <form action="login_process.php" method="post">

    <div class="form-group">
<label for="login">Login</label>
<input type="login" name="login" id="login">
    </div>
    <div class="form-group">    

<label for="wachtwoord">Wachtwoord </label>
<input type="wachtwoord" name="wachtwoord" id="wachtwoord">
</div>
<button type="submit">Inloggen</button>

</body>
</html>