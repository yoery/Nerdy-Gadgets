<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productoverzicht</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>

        .section-logo {width: auto; height: 350px; margin-bottom: 25px; position: center; background-color: #23232f;}
        .img-logo {width: 800px; height: 260px; border-radius: 10px;}
        .h4-logo {color: white; margin-top: -20px;}

        .producten { width: 1500px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start; }
        .product-info { width: 400px; height: 450px; margin: 20px; padding: 10px; border-radius: 10px; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); box-sizing: border-box; }
        .img-producten { width: 260px; height: 100px; object-fit: contain; padding: 5px; }
        .h3-producten { color: black; }
        .p-producten { color: black; }
        .h2-producten { color: black; padding: 5px; }
        .link-producten { display: block; text-align: center; background-color: green; color: black; text-decoration: none; padding: 5px; border-radius: 5px; color: black; margin-top: 1px; }
        .link-producten2 { display: block; text-align: center; background-color: #007bff; color: black; text-decoration: none; padding: 5px; border-radius: 5px; color: black; margin-top: 1px; }
        .dropdown { display: inline-block; margin-right: 10px; }
        .dropdown select { padding: 5px; border-radius: 5px; border: 1px solid #ccc; cursor: pointer; }

    </style>
</head>
<body>
<body class="body">
<?php include 'navigation.php'; ?>

<section class="section-logo">
    <center>
        <img src="images/nerdy_gadgets.png" class="img-logo">
        <h4 class="h4-logo">Smart Tech for Nerdy Minds</h4>
    </center>
</section>
<table style="max-width: 100%"; border="solid black">
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
        $filterdata = "SELECT * FROM product WHERE lower(name) LIKE LOWER('%$filtervalue%')";
        $filterdata_run = mysqli_query($connection, $filterdata);
        $imagePath = '/Nerdy-Gadgets/product_images/';
        if (mysqli_num_rows($filterdata_run) > 0)
        {
            ?>
            <thead>
            <tr>
                <th>name</th>
                <th>desciption</th>
                <th>price</th>
                <th>image</th>
            </tr>
            </thead>
            <?php
            foreach ($filterdata_run as $data)
            {
                $image = $data['image'];
                ?>
                <tr>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo substr($data['description'], 0, 251)."..."?><a href="">lees meer</a></td>
                    <td><?php echo $data['price']?></td>
                    <td><?php echo "<img src=$imagePath/$image.jpg style='width: 50%'>"?></td>
                    <td><?php echo "<button type='button' class='link-producten2' onclick='redirectToProduct(\"{$data["name"]}\")'> More info</button>"; ?></td>
                </tr>
                <?php
            }
        }
        else{
            echo"<h1>no results</h1>";
        }
    }
    ?>
    </tbody>
</table>
</body>
