<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .section-logo {width: auto; height: 400; position: center;}
        .img-logo {width: 500px; height: 160px; margin-top: 50px; border-radius: 10px;}
        .h4-logo {color: black; margin-top: 10px;}

        .section-winkelwagen {width: auto; height: 800; position: center;}
        .h1-winkelwagen-titel {color: black;}
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

    <section class="section-winkelwagen">
        <center>
            <h1 class="h1-winkelwagen-titel">Je winkelwagen</h1>
        </center>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Prijs</th>
                        <th>Verwijderen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Productnaam 1</td>
                        <td>€20.00</td>
                        <td><button class="btn btn-danger">Verwijderen</button></td>
                    </tr>
                    <tr>
                        <td>Productnaam 2</td>
                        <td>€15.00</td>
                        <td><button class="btn btn-danger">Verwijderen</button></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-right">
                <h4>Totaalprijs: €35.00</h4>
                <a href="adresgegevens.php" class="btn btn-primary">Doorgaan naar betalen</a>
            </div>
        </div>
    </section>
</body>
</html>