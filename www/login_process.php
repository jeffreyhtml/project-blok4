<?php
// Start the session
session_start();

// Display posted data for debugging purposes


// Check if 'wachtwoord' exists in the POST request
if (!isset($_POST['wachtwoord'])) {
    echo "Deze sleutel bestaat niet";
    exit;
}

// Check if 'login' is empty
if (empty($_POST['login'])) {
    echo "Gebruikersnaam is leeg";
    exit;
}

// Check if 'wachtwoord' is empty
if (empty($_POST['wachtwoord'])) {
    echo "Wachtwoord is leeg";
    exit;
}

$login = $_POST['login'];
$wachtwoord = $_POST['wachtwoord'];

// Include database connection file
require 'database.php';

// Sanitize inputs to prevent SQL injection
$login = mysqli_real_escape_string($conn, $login);
$wachtwoord = mysqli_real_escape_string($conn, $wachtwoord);

// Prepare and execute SQL query to fetch user data based on login
$sql = "SELECT * FROM `user` JOIN account ON account.accountId = user.userId WHERE account.login = '$login'";
$result = mysqli_query($conn, $sql);

// Fetch the user data
$dbUser = mysqli_fetch_assoc($result);

// Check if user exists
if ($dbUser) {
    // Verify the password
    if ($wachtwoord === $dbUser['wachtwoord']) {
        // Set session variables
        $_SESSION['user_id'] = $dbUser['userId'];
        $_SESSION['login'] = $dbUser['login'];
        // Redirect to holidays.php
        header("Location: holidays.php");
        exit();
    } else {
        echo "Ongeldig wachtwoord";
    }
} else {
    echo "Gebruiker niet gevonden";
}

// Close the connection
mysqli_close($conn);
exit;
