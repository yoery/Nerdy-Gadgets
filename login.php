<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['Email'];
    $password = $_POST['Wachtwoord'];

    // Your database connection code here
    require_once 'db_connection_pdo.php';

    $sql = "SELECT * FROM user WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $user['password'])) {
            // Successful login
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['AccountID'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_name'] = $user['Naam'];

            header("Location: index.php");
            exit();
        } else {
            $error = "Incorrect password. Please try again.";
        }
    } else {
        $error = "User not found. Please check your email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, label {
            color: #333;
            text-align: center;
        }
        p.error {
            color: red;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
        }
        .register-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form action="login.php" method="post">
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="text" class="form-control" name="Email" id="Email" required>
            </div>

            <div class="form-group">
                <label for="Wachtwoord">Wachtwoord:</label>
                <input type="password" class="form-control" name="Wachtwoord" id="Wachtwoord" required>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" id="login" value="Login">
            </div>
        </form>

        <div class="register-link">
            <p>Don't have an account? <a href="Registration.php">Register here</a>.</p>
        </div>
    </div>
</body>
</html>
