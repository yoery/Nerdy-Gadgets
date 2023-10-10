<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product 2</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .section-logo {width: auto; height: 800; position: center;}
        .img-logo {width: 800px; height: 260px; margin-top: 50px; border-radius: 10px;}
        .h4-logo {color: black; margin-top: 10px;}

        .flexy {display: flex; justify-content: center;}
        .inputBox {width: 250px; position: relative; padding-top: 50px;}
        .inputBox input {width: 250px; height: 50px; padding: 10px; border: 2px solid gray; background-color: yellow; border-radius: 5px; outline: none; color: black; font-size: 20px; transition: 0.5s;}
        .inputBox span {position: absolute; left: 0; padding: 10px; pointer-events: none; font-size: 20px; color: gray; text-transform: uppercase; transition: 0.5s;}
        .inputBox input:valid ~ span, .inputBox input:focus ~ span{color: darkcyan; transform: translateX(10px) translateY(-7px); font-size: 11px; padding: 0 10px; background: yellow; border-left: 2px solid darkcyan; border-right: 2px solid darkcyan; letter-spacing: 0.2em;}
        .inputBox input:valid, .inputBox input:focus{border: 2px solid darkcyan;}
        .border{display: flex; justify-content: center; padding: 20px; white-space: nowrap;}
        .buttons{background-color: yellow; color: black; border: 3px solid orangered; height: 50px; width: 200px; font-size: large; cursor: pointer; font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif; text-align: center; line-height: 40px;}
        .buttons:active{background-color: orchid;}
        a:link{text-decoration: none; color: black;}
        a:visited{text-decoration: none; color: black;}
        a:hover{text-decoration: none; color: black;}
        a:active{text-decoration: none; color: black;}
    </style>
</head>
<body>
    <?php
    include 'navigation.php';
    ?>
    <section class="section-logo">
        <center>
                <img src="images/nerdy_gadgets.png" class="img-logo">   
                <h4 class="h4-logo">Smart Tech for Nerdy Minds</h4>
        </center>
    </section>
    
    <section>
        <div class="flexy"><div class="inputBox">
            <input type="text" required="required">
            <span>First and Last Name</span>
        </div>
        <div class="inputBox">
            <input type="text" required="required">
            <span>Email</span>
        </div>
        <div class="inputBox">
                <input type="text" required="required">
                <span>PHONENUMBER</span>
            </div>
        </div>
        <div class="border"><a href="index.php" class="buttons">SUBMIT</a></div>    
    <section

 </body>
</html>