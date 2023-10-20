<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nerdy Gadgets</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>

        .section-logo {width: auto; height: 800; position: center;}
        .img-logo {width: 800px; height: 260px; margin-top: 50px; border-radius: 10px;}
        .h4-logo {color: black; margin-top: 10px;}

        .section-info {width: 800px; height: 600px; margin-top: 50px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .img-info {width: 500px; height: 250px; margin-top: 30px; border-radius: 10px;}
        .h5-info {color: black; margin-top: 20px; width: 700px;}

        .section-ervaring {width: 900px; height: 650px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .h2-ervaring {color: black; margin-bottom: 20px;}
        .div-ervaring {display: inline-block; margin: 20px; width: 350px; height: 250px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px; padding: 10px; background-color: white;}
        .img-ervaring {width: 75px; height: 75px;}
        .h3-ervaring {color: black;}
        .p-ervaring {color: black;}

        .section-voorgesteld {width: 900px; height: 850px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
        .h2-titel-voorgesteld {color: black;}
        .div-margin-voorgesteld {display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-top: 20px;}
        .img-voorgesteld {width: 260px; height: 100px; object-fit:contain; padding: 5px;}
        .h3-voorgesteld {color: black;}
        .p-voorgesteld {color: black;}
        .h2-voorgesteld {color: black; padding: 5px;}
        .href-voorgesteld {display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 1px;}
         a:hover{text-decoration: none; color: white;}
        .div-voorgesteld {display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}

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
        <section class="section-info">
        <img src="images/infopic.png" class="img-info">
        <h5 class="h5-info">De missie van Nerdy Gadgets is om innovatieve technologieën en slimme gadgets toegankelijk te maken voor iedereen, ongeacht hun niveau van technische kennis. 
            Ons merk streeft ernaar om de nieuwsgierigheid en passie voor technologie te stimuleren, terwijl we de brug slaan tussen geeks en gadget-enthousiastelingen. 
            We geloven in de kracht van technologie om levens te verbeteren en streven ernaar om hoogwaardige, praktische, en soms speelse gadgets te bieden die het dagelijkse leven verrijken. 
            Onze waarden omvatten innovatie, kwaliteit, klantgerichtheid en een gezonde dosis nerdiness in alles wat we doen. 
            Bij Nerdy Gadgets geloven we dat technologie niet alleen krachtig, maar ook leuk kan zijn.</h5>
        </section>
    </center>

    <center>
        <section class="section-ervaring">
        <h2 class="h2-ervaring">Winkelervaring bij Nerdy Gadgets</h2>
        <div class="div-ervaring">
            <img src="images/klantenrecensies.png" class="img-ervaring">
            <h3 class="h3-ervaring">Klantrecensies</h3>
            <p class="p-ervaring">Ontdek wat onze klanten te zeggen hebben over hun Nerdy Gadgets-ervaring.</p>
        </div>

        <div class="div-ervaring">
            <img src="images/navigatie.png" class="img-ervaring">
            <h3 class="h3-ervaring">Eenvoudige Navigatie</h3>
            <p class="p-ervaring">Vind gemakkelijk de gadgets die je zoekt met onze intuïtieve navigatie.</p>
        </div>

        <div class="div-ervaring">
            <img src="images/betaling.png" class="img-ervaring">
            <h3 class="h3-ervaring">Veilige Betaling</h3>
            <p class="p-ervaring">Betaal met vertrouwen dankzij onze veilige betalingsmethoden.</p>
        </div>

        <div class="div-ervaring">
            <img src="images/snelle-levering.png" class="img-ervaring">
            <h3 class="h3-ervaring">Snelle Levering</h3>
            <p class="p-ervaring">Ontvang je bestelling snel en efficiënt, zodat je snel kunt genieten van je gadgets.</p>
        </div>
        </section>
    </center>


    <center>
    <section class="section-voorgesteld">
            <h2 class="h2-titel-voorgesteld">Voorgestelde Producten</h2>
            <div class="div-margin-voorgesteld">
                    <img src="images/product1.png" class="img-voorgesteld"/>
                    <h3 class="h3-voorgesteld">Samsung A53</h3>
                    <p class="p-voorgesteld">Samsung A53 is een mooie goeie telefoon gemaakt door Samung en gedesigned door Samsung</p>
                    <h2 class="h2-voorgesteld">€250,-</h2>
                    <a href="product3.php" class="href-voorgesteld">Meer info</a>
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
        <section class="section-footer">
            <h6 class="h6-footer">@Nerdy gadget 2023</h6>
        </section>
    </center>
 </body>
</html>
