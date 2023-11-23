<!DOCTYPE html>
<html lang="en">
<head>

</head>
<style>
    table,th,tr{
        border: 1px solid black;
    }
</style>

<table>


    <thead>
    <tr>
        <th>
            name
        </th>
        <th> desciption</th>
        <th>price</th>
        <th>image</th>
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
        $filterdata = "SELECT * FROM product WHERE CONCAT(name,description,price,image) LIKE '%$filtervalue%'";
        $filterdata_run = mysqli_query($connection, $filterdata);

        if (mysqli_num_rows($filterdata_run) > 0)
        {
            foreach ($filterdata_run as $data)
            {
                ?>
                <tr>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo $data['description']?></td>
                    <td><?php echo $data['price']?></td>
                    <td><?php echo $data['image']?></td>
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

