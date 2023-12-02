<!DOCTYPE html>
<html lang="en">
    <?php include 'navigation.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {font-family: Arial, sans-serif; background-color: #f8f9fa;}

        section {margin: 20px; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);}

        h2 {color: #007bff;}

        .cart-item {border: 1px solid #dee2e6; margin-bottom: 15px; padding: 15px; border-radius: 5px;}

        p {margin: 0;}

        a {color: #dc3545; text-decoration: none; margin-left: 10px; cursor: pointer;}

        a:hover {text-decoration: underline;}

        .empty-cart-message {color: #6c757d;}
    </style>
</head>

<body>

    <section>
        <h2>Winkelwagen</h2>

        <section class="winkelwagen">
            <?php
            // Include your database connection script
            include "db_connection.php";

            // Retrieve cart items from the database
            $sql = "SELECT product_name, product_price, quantity FROM shopping_cart";
            $result = $conn->query($sql);

            // Initialize total price variable
            $totalPrice = 0;

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='cart-item'>";
                    echo "<p>{$row['product_name']}</p>";
                    echo "<p>Price: €{$row['product_price']}</p>";
                    echo "<p>Quantity: {$row['quantity']}</p>";
                    echo "<a href='remove_from_cart.php?name={$row['product_name']}'>Remove</a>";
                    echo "</div>";

                    // Update total price
                    $totalPrice += ($row['product_price'] * $row['quantity']);
                }

                // Display total price
                echo "<p>Total Price: €{$totalPrice}</p>";

                // Add "Verder" button
                echo "<a href='credentials_page.php' class='btn btn-primary' style='background-color: blue;'>Verder</a>";
            } else {
                echo "<p class='empty-cart-message'>Geen items in de winkelwagen</p>";
            }

            $conn->close();
            ?>
        </section>
    </section>
</body>

</html>
