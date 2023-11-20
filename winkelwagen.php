<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add your styles here */
    </style>
</head>

<body>
    <?php include 'navigation.php'; ?>

    <section>
        <h2>Winkelwagen</h2>

        <section class="winkelwagen">
            <?php
            // Include your database connection script
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "nerdy_gadgets_start";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve cart items from the database
            $sql = "SELECT product_name, product_price, quantity FROM shopping_cart";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='cart-item'>";
                    echo "<p>{$row['product_name']}</p>";
                    echo "<p>Price: €{$row['product_price']}</p>";
                    echo "<p>Quantity: {$row['quantity']}</p>";
                    echo "<a href='remove_from_cart.php?name={$row['product_name']}'>Remove</a>";
                    echo "</div>";
                }
            } else {
                echo "<p>Geen items in de winkelwagen</p>";
            }

            $conn->close();
            ?>
        </section>
    </section>
</body>

</html>
