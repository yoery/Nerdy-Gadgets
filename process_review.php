<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $review = $_POST['review'];
    $productName = $_POST['product_name'];

    // Insert the review into the database using prepared statements
    include "db_connection.php";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO product_reviews (product_name, reviewer_name, review_content) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $productName, $name, $review);

    if ($stmt->execute()) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

// Redirect back to the product page
$productName = $_POST['product_name'];
header("Location: productpagina.php?product_name=" . urlencode($productName));
exit();
?>
