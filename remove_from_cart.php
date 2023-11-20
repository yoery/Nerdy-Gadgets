<?php

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
