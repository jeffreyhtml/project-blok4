<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">

    <?php include 'holiday.php'; ?>
</head>

<body>
    <div class="search-css">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="search" placeholder="Zoek naar vakantie" required>
            <input type="submit" value="Zoeken">
        </form>



        <?php

        require 'database.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST['search'];

            if (strlen($search) < 3) {
                echo "<p>Voer minimaal 3 tekens in.</p>";
            } else {
                $sql = mysqli_prepare($conn, "SELECT * FROM Film WHERE title LIKE ?");
                $result1 = "%" . $search . "%";


                mysqli_stmt_bind_param($sql, "s", $result1);
                mysqli_stmt_execute($sql);
                $result = mysqli_stmt_get_result($sql);

                if (mysqli_num_rows($result) > 0) {
                
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<li>Naam: " . htmlspecialchars($row['title']) . "<br>" . htmlspecialchars($row['genre']) . "<br>" . htmlspecialchars($row['duration']) . htmlspecialchars($row['director']) . htmlspecialchars($row['added_at']) . htmlspecialchars($row['image']) . "</li>";
                    }
                   
                } else {
                    echo "<center><p>Geen resultaten gevonden.</p></center>";
                }
            }
        }
        ?>
    </div>

</body>

</html>