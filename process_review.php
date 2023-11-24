<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $review = $_POST['review'];
    $productName = $_POST['product_name'];

    // Insert the review into the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "nerdy_gadgets_start";
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO product_reviews (product_name, reviewer_name, review_content) VALUES ('$productName', '$name', '$review')";

    if ($conn->query($sql) === TRUE) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

$productName = $_POST['product_name'];
header("Location: productpagina.php?product_name=" . urlencode($productName));
exit();
?>
