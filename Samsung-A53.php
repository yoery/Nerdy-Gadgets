<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung A53</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .section-logo {width: auto; height: 800; position: center;}
        .img-logo {width: 800px; height: 260px; margin-top: 50px; border-radius: 10px;}
        .h4-logo {color: black; margin-top: 10px;}
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
        <section style="width: 1200px; height: 850px; margin-top: 50px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <nav>
                <h5 style="color: #222222; font-size: 40px">
                    Galaxy A53 5G Zwart
                </h5>
            </nav>
            <div class="samsung-container">

                <div class="mySlides">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/1715465.jpg">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 3</div>
                    <img src="images/1857490.jpg">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 3</div>
                    <img src="images/1748730.jpg">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(+1)">&#10095;</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="row">
                    <div class="column" style="color: #222222">
                        <img class="demo cursor" src="images/1715465.jpg" style="width:20%"  onclick="currentSlide(1)" alt="Achterkant">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/1857490.jpg" style="width:20%" onclick="currentSlide(2)" alt="Voorkant">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/1748730.jpg" style="width:20%" onclick="currentSlide(3)" alt="Voor- en achterkant">
                    </div>
                </div>
            </div>
            
            <div style="text-align: center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <article>
                <h5 style="color: black;">De Galaxy A-serie heeft er een nieuwe ster bij: de Galaxy A53 5G Zwart.
                    Deze waterbestendige 128GB-smartphone valt op door zijn kleurrijke, antireflecterende 6.6-inch-Infinity-V Display en het minimalistische design met een afwerking van glas.
                    De grote 5.000mAh-batterij gaat dagenlang mee, zodat je genoeg tijd hebt om prachtige beelden vast te leggen met het krachtige camerasysteem dat over optische beeldstabilisatie beschikt.</h5>
            </article>
        </section>
    </center>

    <section>

    </section>


    <center>
        <section>
            <h2 style="color: black; margin-bottom: 20px;">Samsung A53 Klantrecensies</h2>
            <div style=" display: inline-block; margin: 20px; width: 350px; height: 250px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px; padding: 10px; background-color: white;">
                <img src="images/klantenrecensies.png" style="width: 75px; height: 75px;">
                <h3 style="color: black;">Klantrecensies</h3>
                <p style="color: black;">Ontdek wat onze klanten te zeggen hebben over het samsung A53.</p>
            </div>
        </section>
        <section></section>
            <div style=" display: inline-block; margin: 20px; width: 350px; height: 450px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px; padding: 10px; background-color: white;">
                <h2 style="color: black; margin-bottom: 20px;"> Plus/Min punten</h2>
                <img src="images/Galaxy-A-Unpacked_press-release_main1.jpg" style="width: 75px; height: 75px;">
                <h3 style="color: black;">Productinformatie</h3>
                <p style="color: black;"><b>Plus:</b> Je laadt je nieuwe A53 in iets meer dan uur helemaal op met de meegeleverde oplader.</p>
                <p style="color: black;"><b>Plus:</b> Met de grote 5.000 mAh batterij raakt je smartphone niet snel leeg.</p>
                <p style="color: black;"><b>Plus:</b> Je bekijkt films en series in hoge kwaliteit op het scherpe full hd scherm.</p>
                <p style="color: black;"><b>Min:</b>  Je bedient het grote 6,5 inch scherm moeilijk met één hand.</p>
            </div>


        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

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
 </body>
</html>
