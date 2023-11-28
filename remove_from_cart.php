<?php
include "db_connection.php";

if (isset($_GET['name'])) {
    $name = $_GET['name'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM shopping_cart WHERE product_name = ?");
    $stmt->bind_param("s", $name);

    if ($stmt->execute()) {
        // Product removed from the cart, redirect back to the cart page
        header("Location: winkelwagen.php");
        exit(); // Make sure to exit after a header redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Missing product name.";
}

$conn->close();
?>
