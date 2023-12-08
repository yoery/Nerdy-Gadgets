<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave a Review</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        body {font-family: 'Arial', sans-serif; background-color: #f8f9fa;}

        .section-reviews {width: 1000px; height: auto; margin-top: 100px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);}

        .product-reviews {text-align: center;}

        h2 {color: #007bff;}

        .review-author {margin-top: 20px;}

        form {max-width: 400px; margin: 0 auto;}

        label {display: block; margin-bottom: 5px; color: #333;}

        input, textarea {width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;}

        button {background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;}
        button:hover {background-color: #0056b3;}
    </style>
</head>
<body>
    <?php include 'navigation.php'; ?>

    <center>
        <section class="section-reviews">
            <div class="product-reviews">
                <h2>Leave a Review</h2>
                <div class="review-author">
                    <form action="process_review.php" method="post">
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="review">Your Review (up to 400 characters):</label>
                        <textarea id="review" name="review" rows="4" maxlength="400" required></textarea>

                        <input type="hidden" name="product_name" value="<?php echo $_GET['product_name']; ?>">

                        <button type="submit">Submit Review</button>
                    </form>
                </div>
            </div>
        </section>
    </center>
</body>
</html>
