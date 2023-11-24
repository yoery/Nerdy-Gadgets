<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nerdy_gadgets_start";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the query parameters
$productName = $_GET['productName'];
$productPrice = $_GET['productPrice'];
$quantity = 1; // Default quantity is 1

// Log the parameters for debugging
error_log("Product Name: " . $productName);
error_log("Product Price: " . $productPrice);
error_log("Quantity: " . $quantity);

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO shopping_cart (product_name, product_price, quantity) VALUES (?, ?, ?)");
$stmt->bind_param("sdi", $productName, $productPrice, $quantity);

if ($stmt->execute()) {
    echo "Product added to the cart!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
