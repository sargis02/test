<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $origin = $_POST['origin'];
    $variety = $_POST['variety'];
    $harvest_date = $_POST['harvest_date'];
    $certifications = $_POST['certifications'];

    $sql = "INSERT INTO Products (name, origin, variety, harvest_date, certifications)
            VALUES ('$name', '$origin', '$variety', '$harvest_date', '$certifications')";
    
    if (mysqli_query($conn, $sql)) {
        header('Location: manage_products.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>