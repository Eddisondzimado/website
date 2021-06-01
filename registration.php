<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Welcome to DMT</title>
</head>
<body>
    
    <div>
        <img src="images/hero_1.jpg">
        <div class="signup-form">
            <form action="registration.php" method="POST">
            <?php include('errors.php') ?>
                <input type="text" name="username" id="" placeholder="Username" class="txt" required>
                <input type="email" name="email" id="" placeholder="Email" class="txt" required>
                <input type="password" name="password_1" id="" placeholder="Password" class="txt" required>
                <input type="password" name="password_2" id="" placeholder="Confirm Password" class="txt" required>
                <input type="submit" value="Create Account" class="btn" name="btn-save">
                <a href="login.php">Already have an account</a>
            </form>
    
        </div>
    </div>
    
</body>
</html>