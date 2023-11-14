<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
<?php
include 'navigation.php';
?>
<center>
    <section >
        <form method="post">
            <h4>Login</h4><br>
            <label>Gebruikersnaam</label><br>
            <input type="text" placeholder="gebruikersnaam"><br>
            <label>Wachtwoord</label><br>
            <input type="password" placeholder="wachtwoord"><br>
            <input type="submit" name="Bevestigen">
        </form>
    </section>
</center>
</body>
</html>