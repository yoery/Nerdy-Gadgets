<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product 3</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .section-logo {width: auto; height: 800; position: center;}
        .img-logo {width: 800px; height: 260px; margin-top: 50px; border-radius: 10px;}
        .h4-logo {color: black; margin-top: 10px;}

        .section-product {width: 1100px; height: 850px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .container {color: black;}
        .product-container {width: 600px; margin: 0 auto; color: black;}
        .product-image {float: left; height: 450px; width: 380px; margin-top: 30px;}
        .product-details {float: right; color: black; width: 900px;}
        .h2-product {color: black; float: both; padding: 150px; display: flex; flex-direction: column; align-items: center;}
        .href-product {display: block; text-align: center; background-color: limegreen; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 1px; width: 200px;}

        .section-reviews {width: 1300px; height: 650px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); position: center;}
        .product-reviews {margin-top: 20px; color: black;}
        .review-author {display: inline-block; margin: 20px; height: 250px; width: 550px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-top: 20px;}
        .review-content {float: left; width:  400px; color: black;}
        .avatar {vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;}
        
        .section-voorgesteld {width: 1200px; height: 450px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .h2-titel-voorgesteld {color: black;}
        .div-margin-voorgesteld {display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-top: 20px;}
        .img-voorgesteld {width: 260px; height: 100px; object-fit:contain; padding: 5px;}
        .h3-voorgesteld {color: black;}
        .p-voorgesteld {color: black;}
        .h2-voorgesteld {color: black; padding: 5px;}
        .href-voorgesteld {display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 1px;}
        a:hover{text-decoration: none; color: white;}
        .div-voorgesteld {display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        
        .section-footer {width: 900px; height: 50px; margin-top: 50px;}
        .h6-footer {color: black;}
        .href-more-info {display: block; text-align: center; background-color: limegreen; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 1px; width: 200px;}
        .div-margin-voorgesteld {display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-top: 20px;}
        .href-product {display: block; text-align: center; background-color: limegreen; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 1px; width: 200px;}
    </style>

</head>
<body>
<?php include 'navigation.php'; ?>

<section class="section-logo">
    <center>
        <img src="images/nerdy_gadgets.png" class="img-logo">   
        <h4 class="h4-logo">Smart Tech for Nerdy Minds</h4>
    </center>
</section>

<center>
    <section class="section-product">
        <div class="container">
            <?php
            // Check if the product_name is set in the URL
            if (isset($_GET['product_name'])) {
                $productName = $_GET['product_name'];

                // Fetch product details from the database using the product name
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "nerdy_gadgets_start";
                $conn = new mysqli($servername, $username, $password, $database);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM product WHERE name = '$productName'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $imagePath = '/Nerdy-Gadgets/product_images/';
                    while ($row = $result->fetch_assoc()) {
                        // Display product information
                        echo "<h1>{$row['name']}</h1>";
                        echo "<div class='product-info'>";
                        echo "<div class='product-image'>";
                        echo "<img src='$imagePath/{$row["image"]}.jpg' alt='Productafbeelding' class='img-producten'>";
                        echo "</div>";
                        echo "<div class='h2-product'>";
                        echo "<h2>€{$row['price']},-</h2>";
                        echo "<button type='button' class='href-product' onclick='addToCart(\"{$row["name"]}\", {$row["price"]})'>Voeg toe aan winkelwagen</button>";
                        echo "</div>";
                        echo "<div class='product-details'>";
                        echo "<h5>{$row['description']}</h5>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "Product not found.";
                }

                $conn->close();
            } else {
                echo "Product name not specified.";
            }
            ?>
            </div>
        </section>
    </center>

    <center>
        <section class="section-voorgesteld">
            <h2 class="h2-titel-voorgesteld">Gerelateerde Producten</h2>
            <?php
            // Fetch related products from the database (you can modify this based on your database structure)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "nerdy_gadgets_start";
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Example query to fetch related products (you may need to modify this based on your database structure)
            $sqlRelated = "SELECT * FROM product WHERE category = 'phones' LIMIT 3";
            $resultRelated = $conn->query($sqlRelated);

            if ($resultRelated->num_rows > 0) {
                while ($rowRelated = $resultRelated->fetch_assoc()) {
                    // Display related product information
                    echo "<div class='div-margin-voorgesteld'>";
                    echo "<img src='images/{$rowRelated['image']}' class='img-voorgesteld'/>";
                    echo "<h3 class='h3-voorgesteld'>{$rowRelated['name']}</h3>";
                    echo "<p class='p-voorgesteld'>{$rowRelated['description']}</p>";
                    echo "<h2 class='h2-voorgesteld'>€{$rowRelated['price']},-</h2>";
                    // Link to the productpagina.php page with the product name in the URL
                    echo "<a href='productpagina.php?product_name={$rowRelated['name']}' class='href-voorgesteld'>Meer info</a>";
                    echo "</div>";
                }
            }

            $conn->close();
            ?>
        </section>
    </center>


<center>
    <section class="section-reviews">
    <div class="product-reviews">
      <h2>Reviews</h2>
          <div class="review-author">
            <img src="images/John_doe_reset.png" alt="Reviewer image" class="avatar">
            <h4>John Doe</h4>
            <p>I've been using the Samsung Galaxy A53 128GB Zwart 5G for a few weeks now and I'm really impressed with it. The phone is fast, has a great camera, and a long-lasting battery. I would definitely recommend this phone to anyone looking for a new Android phone.</p>
          </div>

          <div class="review-author">
            <img src="images/John_doe_reset.png" alt="Reviewer image" class="avatar">
            <h4>John Doe</h4>
            <p>I've been using the Samsung Galaxy A53 128GB Zwart 5G for a few weeks now and I'm really impressed with it. The phone is fast, has a great camera, and a long-lasting battery. I would definitely recommend this phone to anyone looking for a new Android phone.</p>
          </div>

          <div class="review-author">
            <img src="images/John_doe_reset.png" alt="Reviewer image" class="avatar">
            <h4>John Doe</h4>
            <p>I've been using the Samsung Galaxy A53 128GB Zwart 5G for a few weeks now and I'm really impressed with it. The phone is fast, has a great camera, and a long-lasting battery. I would definitely recommend this phone to anyone looking for a new Android phone.</p>
          </div>

          <div class="review-author">
            <img src="images/John_doe_reset.png" alt="Reviewer image" class="avatar">
            <h4>John Doe</h4>
            <p>I've been using the Samsung Galaxy A53 128GB Zwart 5G for a few weeks now and I'm really impressed with it. The phone is fast, has a great camera, and a long-lasting battery. I would definitely recommend this phone to anyone looking for a new Android phone.</p>
          </div>
</section>
</center>

<center>
        <section class="section-footer">
            <h6 class="h6-footer">@Nerdy gadget 2023</h6>
        </section>
    </center>

    <script>

         function filterProducts(category) {
            window.location.href = "?sort=" + document.getElementById("sort").value + "&category=" + category;
        }

        function addToCart(productName, productPrice) {
    // Use prompt to ask for the quantity, default is 1
    var quantity = prompt("Enter quantity:", 1);

    // Validate quantity
    if (quantity === null || isNaN(quantity) || quantity <= 0) {
        alert("Invalid quantity.");
        return;
    }

    // Send the data to addToCart.php using AJAX
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
    </script>
 </body>
</html>