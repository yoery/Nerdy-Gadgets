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
              <form action="">
                  <input type="text" placeholder="search" name="search">
                  <input type="image" src="images/search.png" alt="submit" height="40px" width="40px" style="filter: invert(1);">
              </form>
          </div>
          <div onclick="location.href='productoverzichtspagina.php';">Producten</div>
          <div onclick="location.href='login.php'">Login</div>
          <div2 onclick="location.href='winkelwagen.php';"><img src="images/Winkelwagen.png" style="height: 45px; object-fit:contain; border-radius: 5px;"></div2>
      </nav>
    </div>
  </center>
</section>
<?php
?>
