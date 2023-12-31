<!DOCTYPE html>
<html lang="en">
    <?php include 'navigation.php'; ?>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productoverzicht</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="productoverzichtspagina.css" rel="stylesheet">
</head>

<body class="body" style="background-color: #23232f">

<section class="section-logo">
    <center style="text-align: center;">
        <img src="images/nerdy_gadgets.png" class="img-logo" alt="">
        <h4 class="h4-logo">Smart Tech for Nerdy Minds</h4>
    </center>
</section>

<center>
    <h2 style="color: white;">Alle Producten</h2>

    <div class="dropdown">
        <label for="sort">Sorteer op:</label>
        <select id="sort" onchange="sortProducts(this.value)">
            <option value="name_asc">Naam (A-Z)</option>
            <option value="name_desc">Naam (Z-A)</option>
            <option value="price_asc">Prijs (Laag naar hoog)</option>
            <option value="price_desc">Prijs (Hoog naar laag)</option>
        </select>
    </div>


    <div class="dropdown">
        <label for="category">Categorie:</label>
        <select id="category" onchange="filterProducts(this.value)">
            <option value="alle">Alle</option>
            <option value="laptops">Laptops</option>
            <option value="phones">Phones</option>
            <option value="opslag">Opslag</option>
            <option value="routers">Routers</option>
            <option value="componenten">Componenten</option>
            <option value="desktops">Desktops</option>
        </select>
    </div>

    <section class="producten">
        <?php
        include "db_connection.php";
        $sortOption = isset($_GET['sort']) ? $_GET['sort'] : 'name_asc';
        $category = isset($_GET['category']) ? $_GET['category'] : 'alle';

        $sql = "SELECT name, description, price, image FROM product";
        if ($category !== 'alle') {
            $sql .= " WHERE category = '$category'";
        }
        switch ($sortOption) {
            case 'name_asc':
                $sql .= " ORDER BY name ASC";
                break;
            case 'name_desc':
                $sql .= " ORDER BY name DESC";
                break;
            case 'price_asc':
                $sql .= " ORDER BY price ASC";
                break;
            case 'price_desc':
                $sql .= " ORDER BY price DESC";
                break;
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $imagePath = '/Nerdy-Gadgets/product_images/';
            while ($row = $result->fetch_assoc()) {
                $shortDescription = substr($row["description"], 0, 150);
                $shortName = substr($row["name"], 0, 17);
                $imageName = $row["image"];

                echo "<div class='product-info'>";
                echo "<img src='$imagePath/$imageName.jpg' alt='Productafbeelding' class='img-producten'>";
                echo "<h2 class='h3-producten'>" . $shortName . " <a href='#' onclick='redirectToProduct(\"{$row["name"]}\")'>...</a></h2>";
                echo "<p class='p-producten'>" . $shortDescription . " <a href='#' onclick='redirectToProduct(\"{$row["name"]}\")'>Lees meer</a></p>";
                echo "<p class='h2-producten'>Price: €" . $row["price"] . "</p>";
                echo "<button type='button' class='link-producten2' onclick='redirectToProduct(\"{$row["name"]}\")'> More info</button>";
                echo "<button type='button' class='link-producten' onclick='addToCart(\"{$row["name"]}\", {$row["price"]})'>Voeg toe aan winkelwagen</button>";
                echo "</div>";
            }
        } else {
            echo "Geen resultaten gevonden";
        }

        $conn->close();
        ?>
    </section>
</center>

<script>
    function sortProducts(option) {
        window.location.href = "?sort=" + option + "&category=" + document.getElementById("category").value;
    }

    function filterProducts(category) {
        window.location.href = "?sort=" + document.getElementById("sort").value + "&category=" + category;
    }

    function addToCart(productName, productPrice) {
        var quantity = prompt("Enter quantity:", 1);

        if (quantity === null || isNaN(quantity) || quantity <= 0) {
            alert("Invalid quantity.");
            return;
        }

        const xhr = new XMLHttpRequest();
        xhr.open("GET", `addToCart.php?productName=${encodeURIComponent(productName)}&productPrice=${productPrice}&quantity=${quantity}`, true);
        xhr.onload = function () {
            if (xhr.status === 200) {
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
