<?php
session_start(); // Start the session

include 'config/db_conn.php';

// Sanitize and validate user inputs

$UnitID = isset($_POST['unit_id']) ? mysqli_real_escape_string($conn, $_POST['unit_id']) : '';
$Motherboard = isset($_POST['mobo']) ? mysqli_real_escape_string($conn, $_POST['mobo']) : '';
$Processor = isset($_POST['cpu']) ? mysqli_real_escape_string($conn, $_POST['cpu']) : '';
$GPU = isset($_POST['gpu']) ? mysqli_real_escape_string($conn, $_POST['gpu']) : '';
$Memory = isset($_POST['memory']) ? mysqli_real_escape_string($conn, $_POST['memory']) : '';
$SSD = isset($_POST['ssd']) ? mysqli_real_escape_string($conn, $_POST['ssd']) : '';
$HDD = isset($_POST['hdd']) ? mysqli_real_escape_string($conn, $_POST['hdd']) : '';
$DVDCD = isset($_POST['dvd/cd']) ? mysqli_real_escape_string($conn, $_POST['dvd/cd']) : '';
$AVR = isset($_POST['avr']) ? mysqli_real_escape_string($conn, $_POST['avr']) : '';
$PowerSupply = isset($_POST['power_supply']) ? mysqli_real_escape_string($conn, $_POST['power_supply']) : '';
$Monitor = isset($_POST['monitor']) ? mysqli_real_escape_string($conn, $_POST['monitor']) : '';
$Keyboard = isset($_POST['keyboard']) ? mysqli_real_escape_string($conn, $_POST['keyboard']) : '';
$Mouse = isset($_POST['mouse']) ? mysqli_real_escape_string($conn, $_POST['mouse']) : '';
$Camera = isset($_POST['camera']) ? mysqli_real_escape_string($conn, $_POST['camera']) : '';
$Location = isset($_POST['location']) ? mysqli_real_escape_string($conn, $_POST['location']) : '';
$Status = isset($_POST['status']) ? mysqli_real_escape_string($conn, $_POST['status']) : '';
$Recommendation = isset($_POST['recommendation']) ? mysqli_real_escape_string($conn, $_POST['recommendation']) : '';

// Validate required fields
$errors = [];

if (empty($UnitID)) {
    $errors[] = "Unit ID is required.";
}

// Insert into 'assets' table
if (empty($errors)) {
    $sql = "INSERT INTO `assets` (unit_id, mobo, cpu, gpu, memory, ssd, hdd, `dvd/cd`, avr, power_supply, monitor, keyboard, mouse, camera, location, status, recommendation)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssssssssssssss", $UnitID, $Motherboard, $Processor, $GPU, $Memory, $SSD, $HDD, $DVDCD, $AVR, $PowerSupply, $Monitor, $Keyboard, $Mouse, $Camera, $Location, $Status, $Recommendation);


        if (mysqli_stmt_execute($stmt)) {
            logHistory("Data Inserted Successfully for ID: {$id}");
            $_SESSION['status'] = "Data Inserted Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: assets.php');
            exit();
        } else {
            $errorMessage = "Error: " . mysqli_error($conn);
            logHistory($errorMessage);
            $_SESSION['status'] = $errorMessage;
            $_SESSION['status_code'] = "error";
        }

        mysqli_stmt_close($stmt);
    } else {
        $errorMessage = "Error: " . mysqli_error($conn);
        logHistory($errorMessage);
        $_SESSION['status'] = $errorMessage;
        $_SESSION['status_code'] = "error";
    }
} else {
    $validationErrors = "Validation errors: " . implode(", ", $errors);
    logHistory($validationErrors);
    $_SESSION['status'] = $validationErrors;
    $_SESSION['status_code'] = "error";
}

header('Location: assets.php');
exit();

// Function to log history
function logHistory($actionmade) {
    date_default_timezone_set('Asia/Manila');

    $logFile = 'history.log';
    $logactionmade = "[" . date('Y-m-d H:i:s') . "] " . $actionmade . PHP_EOL;
    file_put_contents($logFile, $logactionmade, FILE_APPEND | LOCK_EX);
}
?>
