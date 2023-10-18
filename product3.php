<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product 2</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .section-logo {width: auto; height: 800; position: center;}
        .img-logo {width: 800px; height: 260px; margin-top: 50px; border-radius: 10px;}
        .h4-logo {color: black; margin-top: 10px;}
        .product-container {width: 600px; margin: 0 auto;}
        .product-image {float: left; width: 300px;}
        .product-details {float: right; width: 300px;}
        .product-reviews {clear: both; margin-top: 20px;}
        .review-author {float: left; width: 100px;}
        .review-content {float: right; width: 400px;}
    </style>

</head>
<body>
    <?php
    include 'navigation.php';
    ?>
    <section class="section-logo">
        <center>
                <img src="images/nerdy_gadgets.png" class="img-logo">   
                <h4 class="h4-logo">Smart Tech for Nerdy Minds</h4>
        </center>
    </section>
    <div class="container">
    <h1>Samsung Galaxy A53 128GB Zwart 5G</h1>
    <div class="product-info">
      <div class="product-image">
        <img src="product-image.jpg" alt="Samsung Galaxy A53 128GB Zwart 5G">
      </div>
      <div class="product-details">
        <ul>
          <li>6.5-inch Super AMOLED display</li>
          <li>128GB storage</li>
          <li>5G connectivity</li>
          <li>64MP rear camera</li>
          <li>32MP front camera</li>
          <li>5,000mAh battery</li>
        </ul>
      </div>
    </div>
    <div class="product-reviews">
      <h2>Reviews</h2>
      <ul>
        <li>
          <div class="review-author">
            <img src="reviewer-image.jpg" alt="Reviewer image">
            <span>John Doe</span>
          </div>
          <div class="review-content">
            <p>I've been using the Samsung Galaxy A53 128GB Zwart 5G for a few weeks now and I'm really impressed with it. The phone is fast, has a great camera, and a long-lasting battery. I would definitely recommend this phone to anyone looking for a new Android phone.</p>
          </div>
        </li>
 </body>
</html>