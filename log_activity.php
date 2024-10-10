<?php
require_once 'config/db_conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $assetId = $_POST['asset_id'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $sql = "INSERT INTO activity_log (asset_id, description, date) VALUES ('$assetId', '$description', '$date')";
    if (mysqli_query($conn, $sql)) {
        echo 'Activity logged successfully';
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
    }
}
?>
