


<table>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "nerdy_gadgets_start";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

    $sql=$conn->prepare('SELECT * FROM product WHERE name=:category');
    $sql->execute(array(':category'=>$_REQUEST['searchcategory']));

    while($row=$sql->fetch()){
        echo "<tr><td>$row[name]</td><td>$row[price]</td><td>$row[category]</td><tr/>";
    }
    ?>
</table>

