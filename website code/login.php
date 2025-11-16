<?php
include 'connect.php';
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password';";
    $result = mysqli_query($con, $sql);
    $userDetails = mysqli_fetch_assoc($result);

    if ($userDetails) {
        $_SESSION['email'] = $email;
        header("Location: home.php");
        exit();
    } else {
        echo "Sorry, your password or email is incorrect!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Blush & Bloom Salon</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header class="header">😊 Blush & Bloom</header>
    <main>
        <nav class="name">
            <h1>BLUSH & BLOOM SALON</h1>
            <p>Where Beauty Blossoms</p>
        </nav>
        <form method="post">
            <nav class="login">
                <label for="email_address">Email Address</label>
                <input type="text" placeholder="Email Address" name="email" required>
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" name="login">Login</button>
                <li><a href="signup.php">Sign Up</a></li>
            </nav>
        </form>
    </main>
    <footer class="footer">
        <p>Copyright © 2024 B&B Salon</p>
    </footer>
</body>
</html>