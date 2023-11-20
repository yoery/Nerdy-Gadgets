<?php
include "db_connection.php";

// Initialize variables
$email = $password = "";
$emailErr = $passwordErr = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate email
    $email = ($_POST["email"]);
    if (empty($email)) {
        $emailErr = "Email is required";
    }

    // Validate password
    $password = ($_POST["password"]);
    if (empty($password)) {
        $passwordErr = "Password is required";
    }

    // If there are no validation errors, proceed with authentication
    if (empty($emailErr) && empty($passwordErr)) {
        // Perform authentication, replace this with your actual authentication logic
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Authentication successful, redirect to index.php
            header("Location: index.php");
            exit();
        } else {
            // Authentication failed, display an error message
            $loginError = "Invalid email or password";
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <center>
        <section>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h4>Login</h4><br>
                <label>E-mail</label><br>
                <input type="email" name="email" placeholder="e-mail" required>
                <span class="error"><?php echo $emailErr; ?></span><br>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="password" required>
                <span class="error"><?php echo $passwordErr; ?></span><br>
                <p>Don't have an account? </p><a href="registratie.php">Register</a>
                <span class="error"><?php echo isset($loginError) ? $loginError : ''; ?></span><br>
                <input type="submit" name="submit">
            </form>
        </section>
    </center>
</body>
</html>
