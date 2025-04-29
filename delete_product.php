<?php
include('db_connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM Products WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header('Location: manage_products.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>