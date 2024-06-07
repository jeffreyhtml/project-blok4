<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<script>
    let el = document.querySelector("vakantie");
</script>

<body>
<nav>
    <ul>
    </ul>
</nav>

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
    </form>
</body>

</html>