<?php
include 'connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_name = $_POST['client_name'];
    $phone_number = $_POST['phone_number'];
    $service_name = $_POST['service_name'];
    $worker_name = $_POST['worker_name'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO carts (client_name, phone_number, service_name, worker_name, date, time) 
            VALUES ('$client_name', '$phone_number', '$service_name', '$worker_name', '$date', '$time');";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location: cart.php");
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
    <title>Booking - Blush & Bloom Salon</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="booking.css">
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
        <section>
            <div class="container1">
                <div class='logo-form'>
                <img src="resourses\photos\logo.jpg" alt='logo' class='logo'>
                    <div class='content1'>
                        <form action='booking.php' method='POST'>
                            <div class='f1'>
                                <label for='client_name'>Client Name</label>
                                <input type='text' placeholder='Client Name' name='client_name' id='client_name' required>
                            </div>
                            <div class='f1'>
                                <label for='phone_number'>Phone Number</label>
                                <input type='text' placeholder='Phone Number' name='phone_number' id='phone_number' required>
                            </div>
                            <div class='f1'>
                                <label for='service_name'>Services</label>
                                <input type='text' placeholder='Services' name='service_name' id='service_name' required>
                            </div>
                            <div class='f1'>
                                <label for='worker_name'>Worker Name</label>
                                <input type='text' placeholder='Worker Name' name='worker_name' id='worker_name' required>
                            </div>
                            <div class='f1'>
                                <label for='date'>Date</label>
                                <input type='date' placeholder='Date' name='date' id='date' required>
                            </div>
                            <div class='f1'>
                                <label for='time'>Time</label>
                                <input type='time' placeholder='Time' name='time' id='time' required>
                            </div>
                            <div class='f1'>
                                <button type='submit' id='my_btn'>Book</button>
                                <p id='demo1'></p>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p>Copyright © 2024 B&B Salon</p>
    </footer>
</body>
</html>