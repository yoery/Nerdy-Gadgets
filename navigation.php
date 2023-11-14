<!DOCTYPE html> 
<html>
<head>
  <link rel="stylesheet" type="text/css" media="screen" href="navigation.css" />
    <link rel="stylesheet" href="searchbar.css">
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
          <div class="search_bar_location">
              <form action="" class="search_bar">
                  <input type="text" placeholder="search" name="search">
                  <input type="submit">
              </form>
          </div>
          <div onclick="location.href='productoverzichtspagina.php';">Producten</div>
          <div onclick="location.href='winkelwagen.php';">Winkelwagen</div>
          <div onclick="location.href='login.php'">Login</div>
      </nav>
    </div>
  </center>
</section>
<?php
?>
