<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" media="screen" href="navigation.css" />
    <link rel="stylesheet" href="searchbar.css">
    <style>
        .nav_bar {
            position: relative;
            z-index: 900;
        }

        .welcome-container {
            position: relative;
            display: inline-block;
        }

        .logout-link {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #fff;
        }

        .welcome-container:hover .logout-link {
            display: block;
            color: #fff;
        }
    </style>
</head>

<body>
    <section class="background" style="background-color: #23232f; padding:20px">
        <section class="nav_bar_background">
            <center>
                <div>
                    <nav class="nav_bar">
                        <icon onclick="location.href='index.php';"><img src="images/Square_logo-transparant.png"
                                style="height: 44px; object-fit:contain; border-radius: 5px;"></icon>
                        <search>
                            <form action="backup%20searchpage.php?searching=true" method="POST">
                                <input type="text" name="searchcategory" value=" "
                                    style="
                                    object-fit:contain;
                                    height: 45px;
                                    width:100%;
                                    background-color:#b9b9b9;
                                    border-radius:7px;">
                                <!-- <input type="reset" value="X" alt="Clear the search form"> -->
                                <!--    <input type="image" src="images/search.png" alt="submit" height="40px" width="40px"
                                   style="filter: invert(1);">  -->
                            </form>
                        </search>
                        <div onclick="location.href='productoverzichtspagina.php';">Producten</div>

                        <?php

                        if (isset($_SESSION['user_email'])) {
                            // User is logged in
                            $firstName = $_SESSION['first_name'];
                            echo '<div class="welcome-container">';
                            echo '<div>Welcome, ' . $firstName . '</div>';
                            echo '<div class="logout-link"><a href="logout.php">Logout</a></div>';
                            echo '</div>';
                        } else {
                            // User is not logged in
                            echo '<div onclick="location.href=\'login.php\'">Login</div>';
                        }
                        ?>

                        <icon onclick="location.href='winkelwagen.php';"><img src="images/Winkelwagen-transparant.png"
                                style="height: 44px; object-fit:contain; border-radius: 5px;"></icon>
                    </nav>
                </div>
            </center>
        </section>
    </section>
</body>

</html>