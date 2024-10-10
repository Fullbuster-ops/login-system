<?php
include 'config/db_conn.php';
session_start(); // Start the session

if (isset($_POST['checking_viewbtn'])) {
    $id = $_POST['id'];

    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM assets WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        echo '<style>
            .asset-table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px; /* Add spacing between the table and other elements if needed */
                background-color: #f2f2f2; /* Add your desired background color */
            }

            .asset-table td {
                padding: 10px;
                border: 1px solid #ddd;
            }

            .label {
                font-weight: bold;
            }
        </style>';
        echo '<table class="asset-table">';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <tr>
            <td class="label">ID:</td>
            <td>' . $row['id'] . '</td>
        </tr>
            <tr>
                <td class="label">Unit ID:</td>
                <td>' . $row['unit_id'] . '</td>
            </tr>
            <tr>
                <td class="label">Motherboard:</td>
                <td>' . $row['mobo'] . '</td>
            </tr>
            <tr>
                <td class="label">Processor:</td>
                <td>' . $row['cpu'] . '</td>
            </tr>
            <tr>
                <td class="label">GPU:</td>
                <td>' . $row['gpu'] . '</td>
            </tr>
            <tr>
                <td class="label">Memory:</td>
                <td>' . $row['memory'] . '</td>
            </tr>
            <tr>
                <td class="label">SSD:</td>
                <td>' . $row['ssd'] . '</td>
            </tr>
            <tr>
                <td class="label">HDD:</td>
                <td>' . $row['hdd'] . '</td>
            </tr>
            <tr>
                <td class="label">DVD/CD:</td>
                <td>' . $row['dvd_cd'] . '</td>
            </tr>
            <tr>
                <td class="label">AVR:</td>
                <td>' . $row['avr'] . '</td>
            </tr>
            <tr>
                <td class="label">Power Supply:</td>
                <td>' . $row['power_supply'] . '</td>
            </tr>
            <tr>
                <td class="label">Monitor:</td>
                <td>' . $row['monitor'] . '</td>
            </tr>
            <tr>
                <td class="label">Keyboard:</td>
                <td>' . $row['keyboard'] . '</td>
            </tr>
            <tr>
                <td class="label">Mouse:</td>
                <td>' . $row['mouse'] . '</td>
            </tr>
            <tr>
                <td class="label">Camera:</td>
                <td>' . $row['camera'] . '</td>
            </tr>
            <tr>
                <td class="label">Location:</td>
                <td>' . $row['location'] . '</td>
            </tr>
            <tr>
                <td class="label">Status:</td>
                <td>' . $row['status'] . '</td>
            </tr>
            <tr>
                <td class="label">Recommendation:</td>
                <td>' . $row['recommendation'] . '</td>
            </tr>';
        }
        echo '</table>';

        // Log the successful viewing of asset details
        logHistory("Viewed Desktop Components for ID: {$id}");
    } else {
        echo 'No records found.';
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// Function to log history
function logHistory($actionmade) {
    $logFile = 'history.log';
    $logactionmade = "[" . date('Y-m-d H:i:s') . "] " . $actionmade . PHP_EOL;
    file_put_contents($logFile, $logactionmade, FILE_APPEND | LOCK_EX);
}
?>
