<?php
include('db_connection.php');

$sql = "SELECT * FROM Products";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Origin</th>
            <th>Variety</th>
            <th>Harvest Date</th>
            <th>Certifications</th>
            <th>Actions</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['origin']; ?></td>
            <td><?php echo $row['variety']; ?></td>
            <td><?php echo $row['harvest_date']; ?></td>
            <td><?php echo $row['certifications']; ?></td>
            <td>
                <a href="edit_product.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete_product.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>