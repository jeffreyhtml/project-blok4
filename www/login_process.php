<?php
print_r($_POST);

    if (
        !isset($_POST['wachtwoord'])) {
            echo "Deze sleutel bestaat niet";
            exit;
        }

        if (
            (empty($_POST['login']))) {
                echo "Email is leeg";
                exit;
            }

            if (
                (empty($_POST['wachtwoord']))) {
                    echo "Wachtwoord is leeg";
                    exit;
                }
                if (
                    (empty($_POST['login']))) {
                        echo "Login is leeg";
                        exit;
                    }

                $wachtwoord = $_POST['password'];
                $login = $_POST['login'];

                require 'database.php';

            $sql = "SELECT * FROM account WHERE email = email";
            $result = mysqli_query($conn, $sql);
            $dbUser = mysqli_fetch_assoc($result);
            var_dump($dbUser);

            echo "Je bent ingelogd.. YIPPEEE!";
            exit;