<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productoverzicht</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        .section-logo {width: auto; height: 800; position: center;}
        .img-logo {width: 800px; height: 260px; margin-top: 50px; border-radius: 10px;}
        .h4-logo {color: black; margin-top: 10px;}

        .producten {width: 1300px; height: 450px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .product-info {display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .img-producten {width: 260px; height: 100px; object-fit:contain; padding: 5px;}
        .h3-producten {color: black;}
        .p-producten {color: black;}
        .h2-producten {color: black; padding: 5px;}
        .link-producten{ display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; black; margin-top: 1px;}
    </style>
</head>


<body class="body">
    <?php
    include 'navigation.php';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "nerdy_gadgets_start";
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Controleren op verbinding
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Query om gegevens op te halen
    $sql = "SELECT name, description, price, image FROM product";
    $result = $conn->query($sql);

    // Controleren op resultaten
    if ($result->num_rows > 0) {
        // Resultaten verwerken in een for each loop
        while ($row = $result->fetch_assoc()) {
            // Beschrijving inkorten tot 50 tekens
            $shortDescription = substr($row["description"], 0, 150);
            $shortName = substr($row["name"], 0, 17);

            echo "<div class='product-info'>";
            echo "<img src='" . $row["image"] . "' alt='Productafbeelding' class='img-producten'>";
            echo "<h2 class='h3-producten'>" . $shortName . " <a href='#'>...</a></h2>";
            echo "<p class='p-producten'>" . $shortDescription . " <a href='#'>Lees meer</a></p>";
            echo "<p class='h2-producten'>Price: $" . $row["price"] . "</p>";
            echo "<button type='button' class='link-producten'>Voeg toe aan winkelwagen</button>";
            echo "</div>";
        }
    } else {
        echo "Geen resultaten gevonden";
    }

    $conn->close();
    ?>


    <section class="section-logo">
        <center>
            <img src="images/nerdy_gadgets.png" class="img-logo">
            <h4 class="h4-logo">Smart Tech for Nerdy Minds</h4>
        </center>
    </section>

    <center>
        <h2 style="color: black;">Alle Producten</h2>

        <div>
            <button class="btn" onclick="filterProducts('alle')">Alle</button>
            <button class="btn" onclick="filterProducts('hacking')">Hacking</button>
            <button class="btn" onclick="filterProducts('vr')">Virtual Reality</button>
        </div>
        <section class="producten">
            <div class="product-info">
                    <img src="images/product2copy.png" class="img-producten">
                    <h3 class="h3-producten">Flipper Zero</h3>
                    <p class="p-producten">Flipper Zero is een draagbare multitool voor pentesters en geeks in een
                        speelgoedachtig jasje.</p>
                    <h2 class="h2-producten">€250,-</h2>
                    <a href="#" class="link-producten">Meer info</a>
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