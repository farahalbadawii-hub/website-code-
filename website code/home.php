<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Blush & Bloom Salon</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="home.style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li class="nc"><a href="home.php" class="items">Home</a></li>
                <li class="nc"><a href="services.php" class="items">Services</a></li>
                <li class="nc"><a href="booking.php" class="items">Book</a></li>
                <li class="nc"><a href="cart.php" class="items">Cart</a></li>
                <?php if(isset($_SESSION['email'])): ?>
                    <li class="nc"><a href="signout.php" class="items">Sign Out</a></li>
                <?php else: ?>
                    <li class="nc"><a href="login.php" class="items">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main>
        <div class="content23">
        <img src="resourses/photos/logo.jpg" alt="logo" class="img2" width="300" height="300">
            <h1>Blush & Bloom Salon</h1>
            <p>Where Beauty Blossoms</p>
        </div>
       
        <section>
            <h2>our staf</h2>
            <div class="staff-container">

                <div class="staff-member">
                    <img src="resourses/photos/staf1.jpg" alt="" class="staff-photo">
                    <h3>lana</h3>
                    <p>makeup artist</p>
                </div>

                <div class="staff-member">
                    <img src="resourses/photos/staf2.jpg" alt="" class="staff-photo">
                    <h3>hana</h3>
                    <p>hair stylist</p>
                </div>

                <div class="staff-member">
                    <img src="resourses/photos/staf3.jpg" alt="" class="staff-photo">
                    <h3>noor</h3>
                    <p>hair stylist</p>
                </div>
                <div class="staff-member">
                    <img src="resourses/photos/staf4.jpg" alt="" class="staff-photo">
                    <h3>layan</h3>
                    <p>hair stylist</p>
                </div>

                <div class="staff-member">
                    <img src="resourses/photos/staf5.jpg" alt="" class="staff-photo">
                    <h3>mira</h3>
                    <p>makeup artist</p>
                </div>

                <div class="staff-member">
                    <img src="resourses/photos/staf6.jpg" alt="" class="staff-photo">
                    <h3>heba</h3>
                    <p>nail artist</p>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p>Copyright © 2024 B&B Salon</p>
    </footer>
</body>
</html>