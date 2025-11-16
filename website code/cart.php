<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Blush & Bloom Salon</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="cart.css">
    <script src="alertt.js" defer></script>
</head>
<body>
    <header class="header">
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
        <h1 class="h1">Your Salon Cart</h1>

        <?php
        if (isset($_GET['message']) && $_GET['message'] == 'update') {
            echo "<p class='success'>Service updated successfully!</p>";
        }
        ?>

        <table class="table">
            <thead>
                <tr class="th">
                    <th>Client Name</th>
                    <th>Phone Number</th>
                    <th>Service Name</th>
                    <th>Worker Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>:)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM carts";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $client_name = $row['client_name'];
                        $phone_number = $row['phone_number'];
                        $service_name = $row['service_name'];
                        $worker_name = $row['worker_name'];
                        $date = $row['date'];
                        $time = $row['time'];
                        $id = $row['id'];

                        echo "<tr>
                            <td class='td'>$client_name</td>
                            <td class='td'>$phone_number</td>
                            <td class='td'>
                                <form action='update.php' method='post'>
                                    <input type='hidden' name='id' value='$id'>
                                    <input type='text' name='new_service_name' value='$service_name'>
                                    <button type='submit' name='update'>Update</button>
                                </form>
                            </td>
                            <td class='td'>$worker_name</td>
                            <td class='td'>$date</td>
                            <td class='td'>$time</td>
                            <td class='td'>
                                <form action='delete.php' method='post' style='display:inline;'>
                                    <input type='hidden' name='id' value='$id'>
                                    <button type='submit' onclick='popAlert(event)' name='delete'>Delete</button>
                                </form>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr>No bookings found</tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
    <footer class="footer">
        <p>Copyright © 2024 B&B Salon</p>
    </footer>
</body>
</html>