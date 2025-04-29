<?php
include('db_connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM Products WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $origin = $_POST['origin'];
    $variety = $_POST['variety'];
    $harvest_date = $_POST['harvest_date'];
    $certifications = $_POST['certifications'];

    $sql = "UPDATE Products SET name='$name', origin='$origin', variety='$variety', harvest_date='$harvest_date', certifications='$certifications' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header('Location: manage_products.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form action="edit_product.php?id=<?php echo $product['id']; ?>" method="POST">
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" required>
    <label for="origin">Origin:</label>
    <input type="text" id="origin" name="origin" value="<?php echo $product['origin']; ?>" required>
    <label for="variety">Variety:</label>
    <input type="text" id="variety" name="variety" value="<?php echo $product['variety']; ?>" required>
    <label for="harvest_date">Harvest Date:</label>
    <input type="date" id="harvest_date" name="harvest_date" value="<?php echo $product['harvest_date']; ?>" required>
    <label for="certifications">Certifications:</label>
    <input type="text" id="certifications" name="certifications" value="<?php echo $product['certifications']; ?>" required>
    <button type="submit">Update Product</button>
</form>