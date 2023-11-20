<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "nerdy_gadgets_start";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
