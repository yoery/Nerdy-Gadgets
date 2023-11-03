<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productoverzicht</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="searchbar.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>


<body class="body">
    <?php
    include 'navigation.php';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "nerdygadgets";
    $mysqli = new mysqli($servername, $username, $password, $database) or die("Kan niet verbinden '$servername'");
    mysqli_select_db($mysqli, $database) or die("Kon niet verbinden met '$database'");
    ?>


    <section style="width: auto; height: 800; position: center;">
        <center>
            <img src="images/nerdy_gadgets.png"
                style="width: 800px; height: 260px; margin-top: 50px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <h4 style="color: black; margin-top: 10px;">Smart Tech for Nerdy Minds</h4>
        </center>
    </section>

    <center>
        <h2 style="color: black;">Alle Producten</h2>
        <section>

        </section>
        <div>
            <button class="btn" onclick="filterProducts('alle')">Alle</button>
            <button class="btn" onclick="filterProducts('hacking')">Hacking</button>
            <button class="btn" onclick="filterProducts('vr')">Virtual Reality</button>
        </div>
        <section id="producten"
            style="width: 1300px; height: 450px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="product hacking">
                <div
                    style=" display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <img src="images/product2copy.png"
                        style="width: 260px; height: 100px; object-fit:contain; padding: 5px;" />
                    <h3 style="color: black;">Flipper Zero</h3>
                    <p style="color: black;">Flipper Zero is een draagbare multitool voor pentesters en geeks in een
                        speelgoedachtig jasje.</p>
                    <h2 style="color: black; padding: 5px;">€250,-</h2>
                    <a href="product2.php"
                        style="  display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; black; margin-top: 1px;">Meer
                        info</a>
                </div>
            </div>
            <div class="product hacking">
                <div
                    style=" display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <img src="images/product2copy.png"
                        style="width: 260px; height: 100px; object-fit:contain; padding: 5px;" />
                    <h3 style="color: black;">
                        <?php
                        $result = mysqli_query($mysqli,"SELECT Merk, Productnaam FROM producten WHERE Merk = 'Flipper'");
                        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                            printf("%s %s <br>", $row[0], $row[1]);
                        }
                        ?></h3>
                    <p style="color: black;"><?php
                        $result = mysqli_query($mysqli,"SELECT Description FROM producten WHERE Merk = 'Flipper'");
                        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                            printf("%s <br>", $row[0]);
                        }
                        ?></p>
                    <h2 style="color: black; padding: 5px;">€250,-</h2>
                    <a href="product2.php"
                        style="  display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; black; margin-top: 1px;">Meer
                        info</a>
                </div>
            </div>
            <div class="product vr">
                <div
                    style=" display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <img src="images/product3.png"
                        style="width: 260px; height: 100px; object-fit:contain; padding: 5px;">
                    <h3 style="color: black;">Meta Quest Pro</Prog>
                    </h3>
                    <p style="color: black;">De Meta Quest Pro is een mixed reality-headset ontwikkeld door Reality
                        Labs, een divisie van Meta Platforms.</p>
                    <h2 style="color: black; padding: 5px;">€1.199,-</h2>
                    <a href="product3.php"
                        style="  display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; black; margin-top: 1px;">Meer
                        info</a>
                </div>
            </div>
        </section>
    </center>

    <script>
        function filterProducts(category) {
            const producten = document.querySelectorAll('.product');

            producten.forEach(product => {
                if (category === 'alle' || product.classList.contains(category)) {
                    product.style.display = 'inline-block';
                } else {
                    product.style.display = 'none';
                }
            });
        }
        filterProducts('alle');
    </script>
</body>

</html>