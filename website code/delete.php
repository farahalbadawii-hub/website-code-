<?php
include 'connect.php';

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    
    // delete the serviece from the database
    $sql = "DELETE FROM carts WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location: cart.php?message=deleted");
    } else {
        echo "Error deleting serviece: " . mysqli_error($con);
    }
}
?>
