<?php
// view_temperature_humidity.php
include('db_connection.php');

$sql = "SELECT * FROM Temperature_Humidity";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Recorded Temperature and Humidity</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Recorded Temperature and Humidity Data</h2>
        <table>
            <tr>
                <th>Batch ID</th>
                <th>Temperature (°C)</th>
                <th>Humidity (%)</th>
                <th>Timestamp</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['batch_id']; ?></td>
                <td><?php echo $row['temperature']; ?></td>
                <td><?php echo $row['humidity']; ?></td>
                <td><?php echo $row['timestamp']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
