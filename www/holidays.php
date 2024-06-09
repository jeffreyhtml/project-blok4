<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
<nav>
    <ul>
        <a href="tools_index.php">Huidige pagina</a>
        <a href="tools_create.php">Tool aanmaken</a>
        <a href="registration.php"> Registratie</a>
        <a href="login.php">Login</a>
        
    </ul>
</nav>
</html>
<?php
echo "Welkom op de databse van MyHolidays";

require 'database.php';
$sql = "SELECT * FROM vakantie";
$tools = mysqli_query($conn, $sql);
$tools = mysqli_fetch_all($myholidays, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<body>
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