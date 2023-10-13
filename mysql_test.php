<html>
<head>
    <title>Test PHP Connection Script</title>
</head>
<body>

<h3>Welcome to the PHP Connect Test</h3>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nerdygadgets";
$mysqli = new mysqli($servername, $username, $password, $database) or die("Unable to connect to '$servername'");
mysqli_select_db($mysqli, $database) or die("Could not open the database '$database'");
$result = mysqli_query($mysqli,"SELECT * FROM producten");
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    printf("ID: %s  Name: %s <br>", $row[0], $row[1]);
}
?>

</body>
</html>