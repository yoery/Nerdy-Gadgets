<div class="product hacking">
    <div
            style=" display: inline-block; margin: 20px; height: 350px; width: 350px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <img src="images/product2copy.png"
             style="width: 260px; height: 100px; object-fit:contain; padding: 5px;" />
        <h3 style="color: black;"><?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "nerdygadgets";
            $mysqli = new mysqli($servername, $username, $password, $database) or die("Kan niet verbinden '$servername'");
            mysqli_select_db($mysqli, $database) or die("Kon niet verbinden met '$database'");
            $result = mysqli_query($mysqli,"SELECT Merk, Productnaam FROM producten WHERE Merk = 'Flipper'");
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                printf("%s %s <br>", $row[0], $row[1]);
            }
            ?></h3>
        <p style="color: black;">Flipper Zero is een draagbare multitool voor pentesters en geeks in een
            speelgoedachtig jasje.</p>
        <h2 style="color: black; padding: 5px;">€250,-</h2>
        <a href="product2.php"
           style="  display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; black; margin-top: 1px;">Meer
            info</a>
    </div>
</div>

