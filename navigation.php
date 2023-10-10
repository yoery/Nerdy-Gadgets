<!DOCTYPE html> 
<html>
<head>
  <link rel="stylesheet" type="text/css" media="screen" href="navigation.css" />
  <style>
    .nav_bar {
      position: relative;
      z-index: 900;
    }
  </style>
</head>
<body>
<section>
  <center>
    <div>
      <nav class="nav_bar">
        <div onclick="location.href='index.php';">Home</div>
        <div class="dropdown">
          <div class="hover-button">Producten</div>
          <div class="dropdown-content">
            <a href="productoverzichtspagina.php">Productoverzicht</a>
          </div>
        </div>
        <div onclick="location.href='winkelwagen.php';">Winkelwagen</div>
          <div>Registreren</div>
      </nav>
    </div>
  </center>
</section>
<?php
?>
