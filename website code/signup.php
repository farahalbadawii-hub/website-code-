<?php
include 'connect.php';
session_start();

if (isset($_POST['signUp'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (first, last, email, password) VALUES ('$first', '$last', '$email', '$password');";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Blush & Bloom Salon</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <header class="header">😊 Blush & Bloom</header>
    <main>
        <nav class="name">
            <h1>BLUSH & BLOOM SALON</h1>
            <p>Where Beauty Blossoms</p>
        </nav>
        <section class="sign-up">
            <form method="post">
                <div>Sign Up</div>
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" placeholder="First Name" name="first" required>
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" placeholder="Last Name" name="last" required>
                </div>
                <div>
                    <label for="email_address">Email Address</label>
                    <input type="email" placeholder="Email Address" name="email" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div>
                    <button type="submit" name="signUp">Sign Up</button>
                </div>
            </form>
        </section>
    </main>
    <footer class="footer">
        <p>Copyright © 2024 B&B Salon</p>
    </footer>
</body>
</html>