<?php
// view_affected_batches.php
include('db_connection.php');

$sql = "SELECT * FROM Affected_Batches";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Affected Batches</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Affected Product Batches</h2>
        <table>
            <tr>
                <th>Batch ID</th>
                <th>Distribution Point</th>
                <th>Issue Description</th>
                <th>Affected Date</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['batch_id']; ?></td>
                <td><?php echo $row['distribution_point']; ?></td>
                <td><?php echo $row['issue_description']; ?></td>
                <td><?php echo $row['affected_date']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
