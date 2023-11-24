<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <?php
    if (isset($_GET['product_name'])) {
      $productName = $_GET['product_name'];

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
          while ($row = $result->fetch_assoc()) {
              echo "<title>{$row['name']}</title>";
          }
      } else {
          echo "Product not found.";
      }

      $conn->close();
  } else {
      echo "Product name not specified.";
  }
    ?>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .section-logo {width: auto; height: 800; position: center;}
        .img-logo {width: 800px; height: 260px; margin-top: 50px; border-radius: 10px;}
        .h4-logo {color: black; margin-top: 10px;}

        .section-product {width: 1100px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);overflow: hidden;}
        .container {color: black;}
        .product-container {width: 600px; margin: 0 auto; color: black; min-height: 850px;}
        .product-image {float: left; height: 450px; width: 380px; margin-top: 30px;}
        .img-producten {max-width: 100%; height: auto;}
        .product-details {float: right; color: black; width: 650px; text-align: center; margin-top: -110px;}
        .h2-product {color: black; float: both; padding: 150px; display: flex; flex-direction: column; align-items: center;}
        .href-product {display: block; text-align: center; background-color: limegreen; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 10px; width: 200px;}

        .section-reviews {display: flex; flex-wrap: wrap; justify-content: center; align-items: flex-start; width: 1200px; margin: 20px auto; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .product-reviews {margin-top: 20px; color: black;}
        .review-author {display: inline-block; margin: 20px; height: 250px; width: 550px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-top: 20px;}
        .review-content {float: left; width:  400px; color: black;}
        .avatar {vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;}

        .producten {display: flex; flex-wrap: wrap; justify-content: center; align-items: flex-start; width: 1400px; margin: 20px auto; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .producten-h2 {text-align: center; width: 100%; margin-bottom: 10px;}
        .product-info1 {width: 400px; height: 450px; margin: 20px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); box-sizing: border-box; text-align: center;}
        .img-producten1 {width: 260px; height: 100px; object-fit: contain; padding: 5px; margin: 0 auto;}
        .h3-producten1 {color: black;}
        .p-producten1 {color: black;}
        .h2-producten1 {color: black; padding: 5px;}
        .link-producten1 {display: block; text-align: center; background-color: green; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 1px; margin: 10px auto;}
        .link-producten2 {display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 1px; margin: 10px auto;}
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
                
                if (isset($_GET['product_name'])) {
                    $productName = $_GET['product_name'];
            
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

    <section class="producten">
    <h2 class="producten-h2">Gerelateerde Producten</h2>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "nerdy_gadgets_start";
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sqlRelated = "SELECT * FROM product WHERE category IN ('phones', 'laptops', 'opslag') ORDER BY RAND() LIMIT 3";
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

<center>
    <section class="section-reviews">
        <div class="product-reviews">
            <h2>Reviews</h2>
            <a href='leave_review.php?product_name=<?php echo urlencode($productName); ?>' class='link-producten2'>Leave a Review</a>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "nerdy_gadgets_start";
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $productName = $_GET['product_name'];
            $sqlReviews = "SELECT * FROM product_reviews WHERE product_name = '$productName'";
            $resultReviews = $conn->query($sqlReviews);

            if ($resultReviews->num_rows > 0) {
                while ($row = $resultReviews->fetch_assoc()) {
                    echo "<div class='review-author'>";
                    echo "<h4>{$row['reviewer_name']}</h4>";
                    echo "<p>{$row['review_content']}</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No reviews yet.</p>";
            }

            $conn->close();
            ?>
        </div>
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
