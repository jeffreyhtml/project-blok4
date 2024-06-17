<?php
session_start();

// Bestand om het aantal bezoeken op te slaan
$data_file = 'stats.txt';

function get_stats($file)
{
    $stats = [
        'total_visits' => 0,
        'daily_visits' => []
    ];

    // Controleer of het bestand bestaat
    if (file_exists($file) && is_readable($file)) {
        $data = file_get_contents($file);
        $stats = json_decode($data, true);
    }

    return $stats;
}

// Dit update de statistieken om het automatisch te maken
function update_stats($file, $stats)
{
    // ++ voegt extra bezoeken toe
    $stats['total_visits']++;

    // Haalt de datum op
    $current_date = date('Y-m-d');

    // Voegt extra bezoeken toe vandaag
    if (isset($stats['daily_visits'][$current_date])) {
        $stats['daily_visits'][$current_date]++;
    } else {
        $stats['daily_visits'][$current_date] = 1;
    }
    file_put_contents($file, json_encode($stats));
}
$stats = get_stats($data_file);

// Werkt het bij
update_stats($data_file, $stats);

echo "<h1>Website Statistieken</h1>";
echo "<p>Aantal keer bezocht: " . $stats['total_visits'] . "</p>";
echo "<h2>Website bezocht vandaag</h2>";
echo "<ul>";
foreach ($stats['daily_visits'] as $date => $count) {
    echo "<li>$date: $count bezoeken</li>";
}
echo "</ul>";
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
            <li><a href="statistics.php">Statistieken</a></li>
            <li><a href="user.php">Gebruiker</a></li>
        </ul>
    </div>

</body>

</html>