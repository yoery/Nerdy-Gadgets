<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nerdy Gadgets</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>

        .section-logo {width: auto; height: 800; margin-bottom: 25px; margin-top:25px; position: center; background-color: #23232f;}
        .img-logo {width: 800px; height: 260px; margin-top: 25px; border-radius: 10px;}
        .h4-logo {color: white; margin-top: -20px; margin-bottom: 50px; background-color: #23232f;}

        .section-info {width: 800px; height: 600px; margin-top: 50px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .img-info {width: 500px; height: 250px; margin-top: 30px; border-radius: 10px;}
        .h5-info {color: black; margin-top: 20px; width: 700px;}

        .section-ervaring {width: 900px; height: 650px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .h2-ervaring {color: black; margin-bottom: 20px;}
        .div-ervaring {display: inline-block; margin: 20px; width: 350px; height: 250px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px; padding: 10px; background-color: white;}
        .img-ervaring {width: 75px; height: 75px;}
        .h3-ervaring {color: black;}
        .p-ervaring {color: black;}

        .producten {display: flex; flex-wrap: wrap; justify-content: center; align-items: flex-start; width: 1400px; margin: 20px auto; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .producten-h2 {text-align: center; width: 100%; margin-bottom: 10px;}
        .product-info1 {width: 400px; height: 450px; margin: 20px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); box-sizing: border-box; text-align: center;}
        .img-producten1 {width: 260px; height: 100px; object-fit: contain; padding: 5px; margin: 0 auto;}
        .h3-producten1 {color: black;}
        .p-producten1 {color: black;}
        .h2-producten1 {color: black; padding: 5px;}
        .link-producten1 {display: block; text-align: center; background-color: green; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 1px; margin: 10px auto;}
        .link-producten2 {display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 1px; margin: 10px auto;}

        .section-footer {width: 900px; height: 50px; margin-top: 50px;}
        .h6-footer {color: black;}

    </style>
</head>
<body>
    <?php
    include 'navigation.php';
    ?>
    <section class="section-logo">
        <center>
                <img src="images/nerdy_gadgets.png" class="img-logo">   
                <h4 class="h4-logo">Smart Tech for Nerdy Minds</h4>
        </center>
    </section>

    <center>
        <section class="section-info">
        <img src="images/infopic.png" class="img-info">
        <h5 class="h5-info">De missie van Nerdy Gadgets is om innovatieve technologieën en slimme gadgets toegankelijk te maken voor iedereen, ongeacht hun niveau van technische kennis. 
            Ons merk streeft ernaar om de nieuwsgierigheid en passie voor technologie te stimuleren, terwijl we de brug slaan tussen geeks en gadget-enthousiastelingen. 
            We geloven in de kracht van technologie om levens te verbeteren en streven ernaar om hoogwaardige, praktische, en soms speelse gadgets te bieden die het dagelijkse leven verrijken. 
            Onze waarden omvatten innovatie, kwaliteit, klantgerichtheid en een gezonde dosis nerdiness in alles wat we doen. 
            Bij Nerdy Gadgets geloven we dat technologie niet alleen krachtig, maar ook leuk kan zijn.</h5>
        </section>
    </center>

    <center>
        <section class="section-ervaring">
        <h2 class="h2-ervaring">Winkelervaring bij Nerdy Gadgets</h2>
        <div class="div-ervaring">
            <img src="images/klantenrecensies.png" class="img-ervaring">
            <h3 class="h3-ervaring">Klantrecensies</h3>
            <p class="p-ervaring">Ontdek wat onze klanten te zeggen hebben over hun Nerdy Gadgets-ervaring.</p>
        </div>

        <div class="div-ervaring">
            <img src="images/navigatie.png" class="img-ervaring">
            <h3 class="h3-ervaring">Eenvoudige Navigatie</h3>
            <p class="p-ervaring">Vind gemakkelijk de gadgets die je zoekt met onze intuïtieve navigatie.</p>
        </div>

        <div class="div-ervaring">
            <img src="images/betaling.png" class="img-ervaring">
            <h3 class="h3-ervaring">Veilige Betaling</h3>
            <p class="p-ervaring">Betaal met vertrouwen dankzij onze veilige betalingsmethoden.</p>
        </div>

        <div class="div-ervaring">
            <img src="images/snelle-levering.png" class="img-ervaring">
            <h3 class="h3-ervaring">Snelle Levering</h3>
            <p class="p-ervaring">Ontvang je bestelling snel en efficiënt, zodat je snel kunt genieten van je gadgets.</p>
        </div>
        </section>
    </center>


    <center>
    <section class="producten">
            <h2 class="producten-h2">Voorgestelde Producten</h2>
            <div class="product-info1">
                    <img src="images/product1.png" class="img-producten1"/>
                    <h3 class="h3-producten1">Samsung A53</h3>
                    <p class="p-producten1">Samsung A53 is een mooie goeie telefoon gemaakt door Samung en gedesigned door Samsung</p>
                    <h2 class="h2-producten1">€250,-</h2>
                    <button class="link-producten2"><a href="product3.php" style="color: black;">More info</a></button>
                    <button class="link-producten1" onclick="addToCart">Voeg toe aan winkelwagen</button>
                </div>

                <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "nerdy_gadgets_start";
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sqlRelated = "SELECT * FROM product WHERE category IN ('phones', 'laptops', 'opslag') ORDER BY RAND() LIMIT 5";
    $resultRelated = $conn->query($sqlRelated);

    if ($resultRelated->num_rows > 0) {
        $imagePath = '/Nerdy-Gadgets/product_images/';
        while ($row = $resultRelated->fetch_assoc()) {
            $shortDescription = substr($row["description"], 0, 150);
            $shortName = substr($row["name"], 0, 17);
            $imageName = $row["image"];

            echo "<div class='product-info1'>";
            echo "<img src='$imagePath/$imageName.jpg' alt='Productafbeelding' class='img-producten1'>";
            echo "<h2 class='h3-producten1'>" . $shortName . " <a href='#' onclick='redirectToProduct(\"{$row["name"]}\")'>...</a></h2>";
            echo "<p class='p-producten1'>" . $shortDescription . " <a href='#' onclick='redirectToProduct(\"{$row["name"]}\")'>Lees meer</a></p>";
            echo "<p class='h2-producten1'>Price: €" . $row["price"] . "</p>";
            echo "<button type='button' class='link-producten2' onclick='redirectToProduct(\"{$row["name"]}\")'> More info</button>";
            echo "<button type='button' class='link-producten1' onclick='addToCart(\"{$row["name"]}\", {$row["price"]})'>Voeg toe aan winkelwagen</button>";
            echo "</div>";
        }
    } else {
        echo "Geen resultaten gevonden";
    }

    $conn->close();
    ?>
        </section>
    </center>

    <center>
        <section class="section-footer">
            <h6 class="h6-footer">@Nerdy gadget 2023</h6>
        </section>
    </center>
    <script>
        function addToCart(productName, productPrice) {
            var quantity = prompt("Enter quantity:", 1);

            if (quantity === null || isNaN(quantity) || quantity <= 0) {
                alert("Invalid quantity.");
                return;
            }

            const xhr = new XMLHttpRequest();
            xhr.open("GET", `addToCart.php?productName=${encodeURIComponent(productName)}&productPrice=${productPrice}&quantity=${quantity}`, true);
            xhr.onload = function () {
                if (xhr.status == 200) {
                    alert(xhr.responseText);
                } else {
                    alert("Error adding to cart.");
                }
            };
            xhr.send();
        }

        function redirectToProduct(productName) {
          window.location.href = "productpagina.php?product_name=" + encodeURIComponent(productName);
        }
    </script>
 </body>
</html>
