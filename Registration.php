<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratiepagina</title>
    <style>
        .section-registratie {width: 800px; height: 600px; margin-top: 50px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
    </style>
</head>
<body>

<?php
// Controleer of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verkrijg en sanitize de ingevoerde gegevens
    $voornaam = htmlspecialchars($_POST["voornaam"]);
    $achternaam = htmlspecialchars($_POST["achternaam"]);
    $email = htmlspecialchars($_POST["email"]);
    $wachtwoord = htmlspecialchars($_POST["wachtwoord"]);
    $herhaalWachtwoord = htmlspecialchars($_POST["herhaal_wachtwoord"]);
    $telefoonnummer = htmlspecialchars($_POST["telefoonnummer"]);
    $postcode = htmlspecialchars($_POST["postcode"]);
    $huisnummer = htmlspecialchars($_POST["huisnummer"]);

    // Controleer of wachtwoorden overeenkomen
    if ($wachtwoord == $herhaalWachtwoord) {
        // Voer hier verdere acties uit, bijvoorbeeld opslaan in een database
        echo "Registratie succesvol!";

        // Hier zou je de gegevens in een database kunnen opslaan
        // Voorbeeld: 
        // $conn = new mysqli("localhost", "gebruikersnaam", "wachtwoord", "database_naam");
        // Voer hier SQL-query uit om gegevens in te voegen
    } else {
        echo "Wachtwoorden komen niet overeen.";
    }
}
?>

<section class="section-registratie">
<h2>Registratieformulier</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Voornaam: <input type="text" name="voornaam" required><br>
    Achternaam: <input type="text" name="achternaam" required><br>
    E-mail: <input type="email" name="email" required><br>
    Wachtwoord: <input type="password" name="wachtwoord" required><br>
    Herhaal wachtwoord: <input type="password" name="herhaal_wachtwoord" required><br>
    Telefoonnummer: <input type="tel" name="telefoonnummer" required><br>
    Postcode: <input type="text" name="postcode" required><br>
    Huisnummer: <input type="text" name="huisnummer" required><br>
    <input type="submit" value="Registreren">
</form>
</section>
</body>
</html>
