<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="index.css">
    <!-- Link to Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="background">
            <img src="anya.jpeg" alt="Background Image">
        </div>
        <div class="login-box">
            <h1>Log In Or Sign Up</h1>
            <p>Please select your preferred method to continue setting up your account</p>
            <form action="php/process_login.php" method="POST">
                <button type="submit" name="method" value="email">Continue with Email</button>
                <button type="submit" name="method" value="phone">Continue with Phone</button>
            </form>
            <div class="social-login">
                <button class="google-btn">G</button>
                <button class="apple-btn"></button>
            </div>
            <p>If you are creating a new account, <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a> will apply.</p>
        </div>
    </div>
</body>
</html>
