<?php
include 'connect.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $new_service_name = $_POST['new_service_name']; // Service name to update

    // Update the service in the database
    $sql = "UPDATE carts SET service_name = '$new_service_name' WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Redirect back to the cart page with a success message
        header("Location: cart.php?message=update");
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>