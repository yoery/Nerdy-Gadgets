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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $familyName = $_POST['family_name'];
    $postcode = $_POST['postcode'];
    $housenumber = $_POST['housenumber'];
    $streetname = $_POST['streetname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO orders (name, family_name, postcode, housenumber, streetname, email, phone_number) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $familyName, $postcode, $housenumber, $streetname, $email, $phoneNumber);

    if ($stmt->execute()) {
        // Order placed successfully, now clear the shopping cart
        $clearCartSql = "DELETE FROM shopping_cart";
        if ($conn->query($clearCartSql) === TRUE) {
            echo "Order placed successfully! Shopping cart cleared. Redirecting in 5 seconds...";
            // Delay for 5 seconds and then redirect
            header("refresh:5;url=index.php");
        } else {
            echo "Error clearing shopping cart: " . $conn->error;
        }
    } else {
        echo "Error placing order: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();
?>
