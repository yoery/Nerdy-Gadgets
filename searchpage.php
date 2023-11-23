<!DOCTYPE html>
<html lang="en">
<head>

</head>
<style>
    table,th,tr{
        border: 1px solid black;
    }
</style>

<table style="max-width: 100%">


    <thead>
    <tr>
        <th style="width: 25%">
            name
        </th>
        <th style="width: 25%"> desciption</th>
        <th style="width: 25%">price</th>
        <th style="width: 25%">image</th>
    </tr>
    </thead>

    <tbody>
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
//    $sql=$conn->prepare('SELECT name, description, price, image FROM product WHERE name=:category');
//    $sql->execute(array(':category'=>$_REQUEST['searchcategory']));
//
//    while($row=$sql->fetch()){
//        echo "<tr><td>$row[name]</td><td>$row[price]</td><td>$row[category]</td><tr/>";
//    }
    if (isset($_POST['searchcategory'])){

        $connection = mysqli_connect("localhost", "root", "", "nerdy_gadgets_start");
        $filtervalue = $_POST['searchcategory'];
        $filterdata = "SELECT * FROM product WHERE lower(CONCAT(name,description,price,image)) LIKE LOWER('%$filtervalue%')";
        $filterdata_run = mysqli_query($connection, $filterdata);
        $imagePath = '/Nerdy-Gadgets/product_images/';
        if (mysqli_num_rows($filterdata_run) > 0)
        {
            foreach ($filterdata_run as $data)
            {
                $image = $data['image'];
                ?>
                <tr>
                    <td style="width: 25%"><?php echo $data['name']?></td>
                    <td style="width: 25%"><?php echo substr($data['description'], 0, 50)?></td>
                    <td style="width: 25%"><?php echo $data['price']?></td>
                    <td style="width: 25%"><?php echo "<img src=$imagePath/$image.jpg style='width: 25%'>"?></td>
                </tr>
                <?php
            }
        }
        else{
            echo"<tr><td colspan='4'>no results</td></tr>";
        }
    }
    ?>
    <tr>
        <td>

        </td>
    </tr>
    </tbody>
</table>

