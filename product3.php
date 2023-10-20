<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product 3</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .section-logo {width: auto; height: 800; position: center;}
        .img-logo {width: 800px; height: 260px; margin-top: 50px; border-radius: 10px;}
        .h4-logo {color: black; margin-top: 10px;}

        .section-product {width: 1100px; height: 850px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .container {color: black;}
        .product-container {width: 600px; margin: 0 auto; color: black;}
        .product-image {float: left; height: 450px; width: 380px; margin-top: 30px;}
        .product-details {float: right; color: black; width: 900px;}
        .h2-product {color: black; float: both; padding: 150px; display: flex; flex-direction: column; align-items: center;}
        .href-product {display: block; text-align: center; background-color: limegreen; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 1px; width: 200px;}

        .section-reviews {width: 1300px; height: 650px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); position: center;}
        .product-reviews {margin-top: 20px; color: black;}
        .review-author {display: inline-block; margin: 20px; height: 250px; width: 550px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-top: 20px;}
        .review-content {float: left; width:  400px; color: black;}
        .avatar {vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;}
        
        .section-voorgesteld {width: 1200px; height: 450px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .h2-titel-voorgesteld {color: black;}
        .div-margin-voorgesteld {display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-top: 20px;}
        .img-voorgesteld {width: 260px; height: 100px; object-fit:contain; padding: 5px;}
        .h3-voorgesteld {color: black;}
        .p-voorgesteld {color: black;}
        .h2-voorgesteld {color: black; padding: 5px;}
        .href-voorgesteld {display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 1px;}
         a:hover{text-decoration: none; color: white;}
        .div-voorgesteld {display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        
        .section-gallery {width: 1350px; height: 450px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .container {width: 90%; padding: 20px;}
        .colum {float: left; width: 25%;}
        .row {display: grid; grid-template-columns: 25vw 25vw 25vw 25vw;}
        @media screen and (max-width: 900px) { .row { /* width: 50%; */ grid-template-columns: 33vw 33vw 33vw;}}
        @media screen and (max-width: 600px) { .row { /* width: 100%; */ grid-template-columns: 50vw 50vw;}}
        @media screen and (max-width: 300px) { .row { /* width: 100%; */ grid-template-columns: 100vw;}}
        .box {width: 250px; margin: 0 10px; box-shadow: 0 0 20px 2px rgba(0, 0, 0, .1); transition: 1s;}
        .box img {display: block; width: 300px; height: 350px; border-radius: 5px;}
        .box:hover {transform: scale(1.3); z-index: 2;}
        .h1-gallery {color: black;}
        
        .section-winkelwagen {width: 1200px; height: 450px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .h2-titel-winkelwagen {color: black;}
        
        .section-footer {width: 900px; height: 50px; margin-top: 50px;}
        .h6-footer {color: black;}
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

    <center>
    <section class="section-product">
    <div class="container">
      <h1>Samsung Galaxy A53 128GB Zwart 5G</h1>
      <div class="product-info">
        <div class="product-image">
          <img src="images/product1.png" style="width: 300px; height: 400px;">
        </div>
        <div class="h2-product">
          <h2>€250,-</h2>
          <a href="winkelwagen.php" class="href-product">Toevoegen aan winkelwagen</a>
      </div>

      <div class="product-details">
        <h5>De Samsung Galaxy A53 128GB Zwart 5G is een middenklasse smartphone met een grote batterij.
           Bij gemiddeld gebruik gaat de 5.000 mAh batterij ruim een dag mee. Met de apart verkrijgbare Samsung 25 watt snellader zit de batterij in iets meer dan een uur weer helemaal vol.
           Samsung levert geen oplader mee. De Samsung A53 is geschikt voor gemiddeld gebruik. 
           Je schakelt soepel tussen apps als Instagram, YouTube en lichte spellen als Wordfeud. 
           Op het 6,5 inch full hd scherm zie je veel details. 
           De Samsung A53 heeft achterop 3 camera's en een dieptesensor die diepte meet. 
           Hierdoor krijg je een scherptediepte effect bij portretfoto's. 
           De standaard camera heeft optische beeldstabilisatie. 
           Hierdoor zijn je foto's minder snel bewogen en dus scherper. 
           Je bewaart je foto's samen met al je apps op het 128 GB opslaggeheugen. 
           Dit breid je eventueel uit met een geheugenkaart van maximaal 1 TB.
</h5>
      </div>
    </div>
    </div>
</section>
</center>

<center>
<section class="section-winkelwagen">
            <h2 class="h2-titel-winkelwagen">Specificaties</h2>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Productspecificaties</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td><li>6.5-inch Super AMOLED display</li></td>
                    </tr>
                    <tr>
                      <td><li>128GB storage</li></td>
                    </tr>
                    <tr>
                      <td><li>5G connectivity</li></td>
                    </tr>
                    <tr>
                      <td><li>64MP rear camera</li></td>
                    </tr>
                    <tr>
                      <td><li>32MP front camera</li></td>
                    </tr>
                    <tr>
                      <td><li>5,000mAh battery</li></td>
                    </tr>
                </tbody>
            </table>
        </div>
</section>
</center>

<center>
<section class="section-gallery">
<h1 class="h1-gallery">Photo Gallery</h1>
    <div class="row">
        <div class="container">
            <div class="colum">
                <div class="box">
                <img src="images/1748730.jpg">
                </div>
            </div>
        </div>
    
        <div class="container">
            <div class="colum">
                <div class="box">
                <img src="images/1748730.jpg">
                </div>
            </div>
        </div>
    
        <div class="container">
            <div class="colum">
                <div class="box">
                <img src="images/1748730.jpg">
                </div>
            </div>
        </div>
</section>
</center>

<center>
<section class="section-voorgesteld">
            <h2 class="h2-titel-voorgesteld">Gerelateerde Producten</h2>
            <div class="div-margin-voorgesteld">
                    <img src="images/product1.png" class="img-voorgesteld"/>
                    <h3 class="h3-voorgesteld">Samsung A53</h3>
                    <p class="p-voorgesteld">Samsung A53 is een mooie goeie telefoon gemaakt door Samung en gedesigned door Samsung</p>
                    <h2 class="h2-voorgesteld">€250,-</h2>
                    <a href="Samsung-A53.php" class="href-voorgesteld">Meer info</a>
                </div>

                <div class="div-voorgesteld">
                    <img src="images/product2copy.png" class="img-voorgesteld"/>
                    <h3 class="h3-voorgesteld">Flipper Zero</h3>
                    <p class="p-voorgesteld">Flipper Zero is een draagbare multitool voor pentesters en geeks in een speelgoedachtig jasje.</p>
                    <h2 class="h2-voorgesteld">€250,-</h2>
                    <a href="product2.php" class="href-voorgesteld">Meer info</a>
                </div>

                <div class="div-voorgesteld">
                    <img src="images/product2copy.png" class="img-voorgesteld"/>
                    <h3 class="h3-voorgesteld">Flipper Zero</h3>
                    <p class="p-voorgesteld">Flipper Zero is een draagbare multitool voor pentesters en geeks in een speelgoedachtig jasje.</p>
                    <h2 class="h2-voorgesteld">€250,-</h2>
                    <a href="product2.php" class="href-voorgesteld">Meer info</a>
                </div>
</section>
</center>

<center>
    <section class="section-reviews">
    <div class="product-reviews">
      <h2>Reviews</h2>
          <div class="review-author">
            <img src="images/John_doe_reset.png" alt="Reviewer image" class="avatar">
            <h4>John Doe</h4>
            <p>I've been using the Samsung Galaxy A53 128GB Zwart 5G for a few weeks now and I'm really impressed with it. The phone is fast, has a great camera, and a long-lasting battery. I would definitely recommend this phone to anyone looking for a new Android phone.</p>
          </div>

          <div class="review-author">
            <img src="images/John_doe_reset.png" alt="Reviewer image" class="avatar">
            <h4>John Doe</h4>
            <p>I've been using the Samsung Galaxy A53 128GB Zwart 5G for a few weeks now and I'm really impressed with it. The phone is fast, has a great camera, and a long-lasting battery. I would definitely recommend this phone to anyone looking for a new Android phone.</p>
          </div>

          <div class="review-author">
            <img src="images/John_doe_reset.png" alt="Reviewer image" class="avatar">
            <h4>John Doe</h4>
            <p>I've been using the Samsung Galaxy A53 128GB Zwart 5G for a few weeks now and I'm really impressed with it. The phone is fast, has a great camera, and a long-lasting battery. I would definitely recommend this phone to anyone looking for a new Android phone.</p>
          </div>

          <div class="review-author">
            <img src="images/John_doe_reset.png" alt="Reviewer image" class="avatar">
            <h4>John Doe</h4>
            <p>I've been using the Samsung Galaxy A53 128GB Zwart 5G for a few weeks now and I'm really impressed with it. The phone is fast, has a great camera, and a long-lasting battery. I would definitely recommend this phone to anyone looking for a new Android phone.</p>
          </div>
</section>
</center>

<center>
        <section class="section-footer">
            <h6 class="h6-footer">@Nerdy gadget 2023</h6>
        </section>
    </center>
 </body>
</html>