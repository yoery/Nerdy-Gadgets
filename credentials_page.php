<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credentials</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'navigation.php'; ?>

    <div class="container mt-4">
        <h2>Fill in Your Credentials</h2>
        <form action="process_order.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="family_name">Family Name:</label>
                <input type="text" class="form-control" name="family_name" required>
            </div>
            <div class="form-group">
                <label for="postcode">Postcode:</label>
                <input type="text" class="form-control" name="postcode" required>
            </div>
            <div class="form-group">
                <label for="housenumber">Housenumber:</label>
                <input type="text" class="form-control" name="housenumber" required>
            </div>
            <div class="form-group">
                <label for="streetname">Streetname:</label>
                <input type="text" class="form-control" name="streetname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="tel" class="form-control" name="phone_number" required>
            </div>
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>
</body>

</html>
