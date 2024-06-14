<?php
session_start();

//echo "Welcome " . $_SESSION['login'] . "! This is the holidays page.";
require 'database.php';
$sql = "SELECT * FROM vakantie";
$vakantie = mysqli_query($conn, $sql);
$vakanties = mysqli_fetch_all($vakantie, MYSQLI_ASSOC);
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
            <li><a href="over_ons.php">Over ons</a></li>
        </ul>
        <div class="search-bar">
            <form action="searchbar.phpq" method="get">
                <input type="text" name="query" placeholder="Search...">
            </form>
        </div>
    </div>
    <table>
        <thead>
        </thead>
        <tbody>
            <br>
            <div class="slider-container">
                <div class="slider">
                    <div class="slides">
                        <div class="slider">
                            <?php foreach ($vakanties as $vakantie_data) : ?>
                                <a href="holiday_detail.php?id=<?php echo $vakantie_data['vakantieId'] ?>">
                                    <img class="slide" src="<?php echo $vakantie_data['afbeelding'] ?>" alt="plaatje van <?php echo $vakantie_data['land'] ?>">
                                </a>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <button class="prev" onclick="moveSlide(1)">&#10094;</button>
                    <button class="next" onclick="moveSlide(-1)">&#10095;</button>
                </div>
            </div>
            <div class="lorum_ipsum">
                <p>Lorem ipsum dolor sit amet. Vel deserunt molestiae ut corporis neque id dolorum odio. Est debitis itaque At quasi illum qui galisum alias At commodi rerum est natus accusantium ab molestiae sint! Et veritatis itaque ut omnis error ea tempora amet in consequatur expedita rem earum fugit. Nam tempore officiis sit aperiam rerum et laboriosam temporibus ex consequatur voluptas eum repudiandae voluptate cum impedit alias? </p>
                <p>Vel consequatur dolor et recusandae odio in similique culpa. In beatae iste qui veniam quam qui cumque autem ea illo quibusdam id dicta inventore in quasi internos? </p>
                <p>Sed libero dolor ut magni officia ex quia doloremque qui autem voluptatum rem galisum fuga aut praesentium necessitatibus. Ut dignissimos omnis ut voluptate corporis et eaque praesentium. Sed accusamus illum ea quos officiis eum velit voluptatum et necessitatibus necessitatibus id voluptas iste ut perspiciatis fugit qui dolores eius. </p>
            </div>
            <script src="script.js"></script>
            <!-- 
        <?php foreach ($vakanties as $vakantie) : ?>
            <tr>
                <div class="afbeelding_vakantie">
                    <td><a href="holiday_detail.php?id=<?php echo $vakantie['vakantieId'] ?>"><img src=" <?php echo $vakantie['afbeelding'] ?>" alt="Picture"></a></td>
                </div>
            </tr>
        <?php endforeach; ?> -->

        </tbody>
    </table>
</body>

</html>