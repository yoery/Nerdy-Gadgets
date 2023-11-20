<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratiepagina</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .section-registratie {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-color: white;
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        input {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php
include "db_connection.php";

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
    $streetName = htmlspecialchars($_POST["street_name"]);
    $apartmentNr = htmlspecialchars($_POST["apartment_nr"]);
    $city = htmlspecialchars($_POST["city"]);

    // Controleer of wachtwoorden overeenkomen
    if ($wachtwoord == $herhaalWachtwoord) {
        // Voer hier verdere acties uit, bijvoorbeeld opslaan in een database
        $hashedPassword = password_hash($wachtwoord, PASSWORD_DEFAULT);

        // Invoegen van gegevens in de "user" tabel
        $stmt = $conn->prepare("INSERT INTO user (email, password, first_name, surname, street_name, apartment_nr, postal_code, city) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $email, $hashedPassword, $voornaam, $achternaam, $streetName, $apartmentNr, $postcode, $city);

        if ($stmt->execute()) {
            // Registratie succesvol, doorsturen naar loginpagina
            echo "<script>window.location.href = 'login.php';</script>";
            exit();
        } else {
            echo "Fout bij het registreren: " . $stmt->error;
        }

        $stmt->close();
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
        Straatnaam: <input type="text" name="street_name" required><br>
        Huisnummer: <input type="text" name="apartment_nr"><br>
        Stad: <input type="text" name="city" required><br>
        <input type="submit" value="Registreren">
    </form>
</section>
</body>
</html>
