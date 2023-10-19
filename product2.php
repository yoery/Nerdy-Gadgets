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
        .slide-show{box-sizing: border-box; width: 600px;}
        .container {position: relative;}
        .mySlides {display: none;}
        .cursor {cursor: pointer;}
        .prev, .next {cursor: pointer; position: absolute; top: 40%; width: auto; padding: 16px; margin-top: -50px; color: white; font-weight: bold; font-size: 20px; border-radius: 0 3px 3px 0; user-select: none; -webkit-user-select: none;}
        .next {right: 0; border-radius: 3px 0 0 3px;}
        .prev:hover, .next:hover {background-color: rgba(0, 0, 0, 0.8);}
        .numbertext {color: #f2f2f2; font-size: 12px; padding: 8px 12px; position: absolute; top: 0;}
        .caption-container {text-align: center; background-color: #222; padding: 2px 16px; color: white;}
        .row:after {content: ""; display: table; clear: both;}
        .column {float: left; width: 100px;}
        .demo {opacity: 0.6;}
        .active, .demo:hover {opacity: 1;}
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
    <section class="slide-show">
        <div class="container">
            <div class="mySlides">
                <div class="numbertext">1 / 4</div>
                <img src="images/1748730.jpg" style="width:100px; height: 150px;">
            </div>
            
            <div class="mySlides">
                <div class="numbertext">2 / 4</div>
                <img src="images/1857490.jpg" style="width:100px; height: 150px;">
            </div>
            
            <div class="mySlides">
                <div class="numbertext">3 / 4</div>
                <img src="images/1715465.jpg" style="width:100px; height: 150px;">
            </div>
            
            <div class="mySlides">
                <div class="numbertext">4 / 4</div>
                <img src="images/product1.png" style="width:100px; height: 150px;">
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            <div class="caption-container">
                <p id="caption"></p>
            </div>
            
            <div class="row">
                <div class="column">
                    <img class="demo cursor" src="images/1748730.jpg" style="width:100px; height: 150px;" onclick="currentSlide(1)" alt="Samsung">
                </div>
                
                <div class="column">
                    <img class="demo cursor" src="images/1857490.jpg" style="width:100px; height: 150px;" onclick="currentSlide(2)" alt="Samsung">
                </div>
                
                <div class="column">
                    <img class="demo cursor" src="images/1715465.jpg" style="width:100px; height: 150px;" onclick="currentSlide(3)" alt="Samsung">
                </div>
                
                <div class="column">
                    <img class="demo cursor" src="images/product1.png" style="width:100px; height: 150px;" onclick="currentSlide(4)" alt="Telefoon">
                </div>
            </div>
        </section>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
            showSlides(slideIndex += n);}
            
            function currentSlide(n) {
                showSlides(slideIndex = n);}
                
                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("demo");
                    let captionText = document.getElementById("caption");
                    if (n > slides.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        
                        slides[i].style.display = "none";
                    }
                    
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
                    captionText.innerHTML = dots[slideIndex-1].alt;
                }
        </script>
        </center>
    </body>
</html>