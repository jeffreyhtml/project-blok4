<?php
// File to store the visit count
$data_file = 'stats.txt';

// Function to get the current visit statistics
function get_stats($file) {
    // Initialize statistics
    $stats = [
        'total_visits' => 0,
        'daily_visits' => []
    ];

    // Check if the data file exists and is readable
    if (file_exists($file) && is_readable($file)) {
        // Read the data from the file
        $data = file_get_contents($file);
        // Decode the JSON data into an associative array
        $stats = json_decode($data, true);
    }

    return $stats;
}

// Function to update the visit statistics
function update_stats($file, $stats) {
    // Increment the total visits count
    $stats['total_visits']++;

    // Get the current date
    $current_date = date('Y-m-d');

    // Increment the visit count for today
    if (isset($stats['daily_visits'][$current_date])) {
        $stats['daily_visits'][$current_date]++;
    } else {
        $stats['daily_visits'][$current_date] = 1;
    }

    // Save the updated statistics back to the file
    file_put_contents($file, json_encode($stats));
}

// Statistieken verzamelen.
$stats = get_stats($data_file);

// Statistieken dagelijks updaten
update_stats($data_file, $stats);

// Display the statistics
echo "<h1>Website Statistieken</h1>";
echo "<p>Aantal keer bezocht: " . $stats['total_visits'] . "</p>";
echo "<h2>Website bezocht vandaag</h2>";
echo "<ul>";
foreach ($stats['daily_visits'] as $date => $count) {
    echo "<li>$date: $count visits</li>";
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
        <li><a href="statistics.php">statistieken</a></li>
        <li><a href="user.php">Gebruiker</a></li>
        </ul>
        <div class="search-bar">
            <form action="searchbar.phpq" method="get">
                <input type="text" name="query" placeholder="Search...">
            </form>
        </div>
    </div>
    
</body>
</html>