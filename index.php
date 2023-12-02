<!DOCTYPE html>
<html lang="en">
<?php
include 'navigation.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nerdy Gadgets</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #23232f;
        }

        /* logo  */
        .section-logo {
            width: auto;
            height: 350px;
            margin-bottom: 25px;
            position: center;
            background-color: #23232f;
        }

        .img-logo {
            width: 800px;
            height: 260px;
            border-radius: 10px;
        }

        .h4-logo {
            color: white;
            margin-top: -20px;
            margin-bottom: 50px;
            background-color: #23232f;
        }

        /* over ons */
        .section-info {
            width: 95%;
            margin-top: 20px;
            border-radius: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            background-color: #cfcfdc;
        }

        .h2-info {
            text-align: center;
            width: 100%;
            color: black;
            margin-bottom: 10px;
            margin-top: 10px
        }

        .img-info {
            width: 500px;
            height: 250px;
            margin-top: 30px;
            border-radius: 10px;
        }

        .h5-info {
            color: black;
            margin-top: 10px;
            margin-bottom: 10px;
            width: 90%;
        }

        /* reviews */
        .section-reviews {
            width: 95%;
            margin-top: 20px;
            border-radius: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            background-color: #cfcfdc;
        }

        .h2-reviews {
            text-align: center;
            width: 100%;
            color: black;
            margin-bottom: 20px;
        }

        .div-reviews {
            display: inline-block;
            margin: 20px;
            width: 350px;
            height: 100px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 10px;
            padding: 10px;
            background-color: #23232f;
        }

        .p-reviews {
            color: white;
        }

        /* winkelervaring */
        .section-ervaring {
            width: 95%;
            margin-top: 20px;
            border-radius: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            background-color: #cfcfdc;
        }

        .h2-ervaring {
            text-align: center;
            width: 100%;
            color: black;
            margin-bottom: 20px;
        }

        .div-ervaring {
            display: inline-block;
            margin: 20px;
            width: 350px;
            height: 250px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 10px;
            padding: 10px;
            background-color: #23232f;
        }

        .img-ervaring {
            width: 75px;
            height: 75px;
        }

        .h3-ervaring {
            color: white;
        }

        .p-ervaring {
            color: white;
        }

        /* voorgestelde prodcuten */
        .producten {
            width: 95%;
            margin-top: 20px;
            border-radius: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            background-color: #cfcfdc;
        }

        .h2-producten1 {
            text-align: center;
            width: 100%;
            margin-bottom: 10px;
        }

        .product-info1 {
            width: 400px;
            height: 450px;
            margin: 20px;
            padding: 10px;
            border-radius: 10px;
            background-color: #23232f;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            box-sizing: border-box;
        }

        .img-producten1 {
            width: 260px;
            height: 100px;
            object-fit: contain;
            padding: 5px;
            margin: 0 auto;
        }

        .h3-producten1 {
            color: white;
        }

        .p-producten1 {
            color: white;
        }

        .h2-producten2 {
            color: white;
            padding: 5px;
        }

        .link-producten1 {
            display: block;
            text-align: center;
            background-color: #cfcfdc;
            color: black;
            padding: 5px;
            border-radius: 5px;
            margin-top: 1px;
        }

        .link-producten2 {
            display: block;
            text-align: center;
            background-color: #cfcfdc;
            color: black;
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 1px;
        }

        .link-producten1:hover {
            transition: all 0.5s ease;
            background-color: #3d3d54;
        }

        .link-producten2:hover {
            transition: all 0.5s ease;
            background-color: #3d3d54;
        }

        /* footer */
        .section-footer {
            width: 900px;
            height: 50px;
            margin-top: 50px;
        }

        .h6-footer {
            color: white;
        }
    </style>
</head>

<body>
    <?php
    include 'printstars.php';
    ?>
    <!-- logo -->
    <section class="section-logo">
        <center>
            <img src="images/nerdy_gadgets.png" class="img-logo">
            <h4 class="h4-logo">Smart Tech for Nerdy Minds</h4>
        </center>
    </section>

    <!-- over ons -->
    <center>
        <section class="section-info">
            <h2 class="h2-info">Over Nerdy-Gadgets</h2>
            <h5 class="h5-info">De missie van Nerdy Gadgets is om innovatieve technologieën en slimme gadgets
                toegankelijk te maken voor iedereen, ongeacht hun niveau van technische kennis.
                Ons merk streeft ernaar om de nieuwsgierigheid en passie voor technologie te stimuleren, terwijl we de
                brug slaan tussen geeks en gadget-enthousiastelingen.
                We geloven in de kracht van technologie om levens te verbeteren en streven ernaar om hoogwaardige,
                praktische, en soms speelse gadgets te bieden die het dagelijkse leven verrijken.
                Onze waarden omvatten innovatie, kwaliteit, klantgerichtheid en een gezonde dosis nerdiness in alles wat
                we doen.
                Bij Nerdy Gadgets geloven we dat technologie niet alleen krachtig, maar ook leuk kan zijn.</h5>
        </section>
    </center>

    <!-- reviews -->
    <center>
        <?php
        $rating1 = 7;
        $review1 = "Snelle levering";
        $rating2 = 6;
        $review2 = "Klein aanbod, goede service";
        $rating3 = 10;
        $review3 = "Goedkoop";
        ?>
        <section class="section-reviews">
            <h2 class="h2-reviews">Wat klanten van ons vinden</h2>
            <div class="div-reviews">
                <?php printstars($rating1); ?>
                <p class="p-reviews">
                    <?php print('"' . $review1 . '"'); ?>
                </p>
            </div>
            <div class="div-reviews">
                <?php printstars($rating2); ?>
                <p class="p-reviews">
                    <?php print('"' . $review2 . '"'); ?>
                </p>
            </div>
            <div class="div-reviews">
                <?php printstars($rating3); ?>
                <p class="p-reviews">
                    <?php print('"' . $review3 . '"'); ?>
                </p>
            </div>
        </section>
    </center>



    <!-- winkelervaring -->
    <center>
        <section class="section-ervaring">
            <h2 class="h2-ervaring">Winkelervaring bij Nerdy Gadgets</h2>

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
                <p class="p-ervaring">Ontvang je bestelling snel en efficiënt, zodat je snel kunt genieten van je
                    gadgets.</p>
            </div>
        </section>
    </center>

    <!-- voorgestelde producten -->
    <center>
        <section class="producten">
            <h2 class="h2-producten1">Voorgestelde Producten</h2>
            <div class="product-info1">
                <img src="images/product1.png" class="img-producten1" />
                <h3 class="h3-producten1">Samsung A53</h3>
                <p class="p-producten1">Samsung A53 is een mooie goeie telefoon gemaakt door Samung en gedesigned door
                    Samsung</p>
                <h2 class="h2-producten2">€250,-</h2>
                <button class="link-producten2"><a href="product3.php" style="color: black;">More info</a></button>
                <button class="link-producten1" onclick="addToCart">Voeg toe aan winkelwagen</button>
            </div>

            <?php
            include "db_connection.php";

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
                    echo "<p class='h2-producten2'>Price: €" . $row["price"] . "</p>";
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

    <!-- footer -->
    <center>
        <section class="section-footer">
            <h6 class="h6-footer">@Nerdy-Gadgets 2023</h6>
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