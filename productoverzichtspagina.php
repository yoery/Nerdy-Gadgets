<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productoverzicht</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="searchbar.css">
</head>
<body class="body">
    <?php
    include 'navigation.php';
    ?>
    <section>
        <div class="search_bar_location">
            <form action="" class="search_bar">
                <input type="text" placeholder="search anything" name="q">
                <button type="submit"><img src="images/search.png"></button>
            </form>
        </div>
    </section>

    <section style="width: auto; height: 800; position: center;">
        <center>
                <img src="images/nerdy_gadgets.png" style="width: 800px; height: 260px; margin-top: 50px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">   
                <h4 style="color: black; margin-top: 10px;">Smart Tech for Nerdy Minds</h4>
        </center>
    </section>

    <center>
        <section style="width: 1300px; height: 450px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <h2 style="color: black;">Alle Producten</h2>
            <div style=" display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <img src="images/product2copy.png" style="width: 260px; height: 100px; object-fit:contain; padding: 5px;"/>
                    <h3 style="color: black;">Flipper Zero</h3>
                    <p style="color: black;">Flipper Zero is een draagbare multitool voor pentesters en geeks in een speelgoedachtig jasje.</p>
                    <h2 style="color: black; padding: 5px;">€250,-</h2>
                    <a href="product2.php" style="  display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; black; margin-top: 1px;">Meer info</a>
                </div>

                <div style=" display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <img src="images/product2copy.png" style="width: 260px; height: 100px; object-fit: contain; padding: 5px;" />
                    <h3 style="color: black;">Flipper Zero</h3>
                    <p style="color: black;">Flipper Zero is een draagbare multitool voor pentesters en geeks in een speelgoedachtig jasje.</p>
                    <h2 style="color: black; padding: 5px;">€250,-</h2>
                    <a href="product2.php" style="display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; margin-top: 10px;">Meer info</a>
                </div>

                <div style=" display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <img src="images/product3.png" style="width: 260px; height: 100px; object-fit:contain; padding: 5px;">
                    <h3 style="color: black;">Meta Quest Pro</Prog></h3>
                    <p style="color: black;">De Meta Quest Pro is een mixed reality-headset ontwikkeld door Reality Labs, een divisie van Meta Platforms.</p>
                    <h2 style="color: black; padding: 5px;">€1.199,-</h2>
                    <a href="product3.php" style="  display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; black; margin-top: 1px;">Meer info</a>
        </section>
    </center>

 </body>
</html>