<?php include("server.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Welcome to BET</title>
</head>
<body>
    
    <div>
        <img src="images/hero_1.jpg">
        <div class="signup-form">
            <form action="login.php" method="POST">
                <input type="email" name="email" id="" placeholder="Email" class="txt" required>
                <input type="password" name="password_1" id="" placeholder="Password" class="txt" required>
                <input type="submit" value="Log In" class="btn" name="btn_login">
                <a href="#">Forgot Password?</a>
            </form>
    
        </div>
    </div>
    
</body>
</html>