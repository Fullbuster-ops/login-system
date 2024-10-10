<?php
include 'config/db_conn.php';
session_start();

$id = $_POST['id'];
$UnitID = $_POST['unit_id'];
$Motherboard = $_POST['mobo'];
$Processor = $_POST['cpu'];
$GPU = $_POST['gpu'];
$Memory = $_POST['memory'];
$SSD = $_POST['ssd'];
$HDD = $_POST['hdd'];
$DVDCD = $_POST['dvd_cd'];
$AVR = $_POST['avr'];
$PowerSupply = $_POST['power_supply'];
$Monitor = $_POST['monitor'];
$Keyboard = $_POST['keyboard'];
$Mouse = $_POST['mouse'];
$Camera = $_POST['camera'];
$Location = $_POST['location'];
$Status = $_POST['status'];
$Recommendation = $_POST['recommendation'];

$sql = "UPDATE `assets`
        SET 
        unit_id = ?,
        mobo = ?,
        cpu = ?,
        gpu = ?,
        memory = ?,
        ssd = ?,
        hdd = ?,
        dvd_cd = ?,
        avr = ?,
        power_supply = ?,
        monitor = ?,
        keyboard = ?,
        mouse = ?,
        camera = ?,
        location = ?,
        status = ?,
        recommendation = ?
        WHERE id = ?";

try {
    // Fetch previous location
    $sqlFetchPreviousLocation = "SELECT location FROM assets WHERE id = ?";
    $stmtFetchPreviousLocation = $conn->prepare($sqlFetchPreviousLocation);
    $stmtFetchPreviousLocation->bind_param("i", $id);
    $stmtFetchPreviousLocation->execute();
    $resultFetchPreviousLocation = $stmtFetchPreviousLocation->get_result();

    if ($resultFetchPreviousLocation && $resultFetchPreviousLocation->num_rows > 0) {
        $row = $resultFetchPreviousLocation->fetch_assoc();
        $previous_location = $row['location'];

        // Update the asset information
        updateAsset($conn, $sql, $UnitID, $Motherboard, $Processor, $GPU, $Memory, $SSD, $HDD, $DVDCD, $AVR, 
        $PowerSupply, $Monitor, $Keyboard, $Mouse, $Camera, $Location, $Status, $Recommendation, $id, $previous_location);
    } else {
        throw new Exception("Error fetching previous location: " . $stmtFetchPreviousLocation->error);
    }
} catch (Exception $e) {
    // Handle exceptions
    $_SESSION['status'] = "Error: " . $e->getMessage();
    $_SESSION['status_code'] = "error";
    header('Location: assets.php');
    exit();
}
   // Log the successful update with asset ID
   logHistory("Update Component Successfully for ID: {$id}");


// Function to update asset information
function updateAsset($conn, $sql, $UnitID, $Motherboard, $Processor, $GPU, $Memory, $SSD, $HDD, $DVDCD, $AVR, 
    $PowerSupply, $Monitor, $Keyboard, $Mouse, $Camera, $Location, $Status, $Recommendation, $id, $previous_location) {
    $stmtUpdateAsset = $conn->prepare($sql);

    // Check if the statement was prepared successfully
    if (!$stmtUpdateAsset) {
        throw new Exception("Error preparing statement: " . $conn->error);
    }

    $stmtUpdateAsset->bind_param("sssssssssssssssssi", 
        $UnitID, $Motherboard, $Processor, $GPU, $Memory, $SSD, $HDD, $DVDCD, $AVR, 
        $PowerSupply, $Monitor, $Keyboard, $Mouse, $Camera, $Location, $Status, $Recommendation, $id);

    $resultUpdateAsset = $stmtUpdateAsset->execute();

    // Check for errors
    if ($resultUpdateAsset) {
        // Fetch the new location after the update
        $sqlFetchNewLocation = "SELECT location FROM assets WHERE id = ?";
        $stmtFetchNewLocation = $conn->prepare($sqlFetchNewLocation);
        $stmtFetchNewLocation->bind_param("i", $id);
        $stmtFetchNewLocation->execute();
        $resultFetchNewLocation = $stmtFetchNewLocation->get_result();

        if ($resultFetchNewLocation && $resultFetchNewLocation->num_rows > 0) {
            $rowNew = $resultFetchNewLocation->fetch_assoc();
            $location = $rowNew['location'];

            // Check if location is changed
            if ($location != $previous_location) {
                // Log the successful update with asset ID
                logHistory("Data successfully updated  {$UnitID}");

                // Insert a new record into assetsmovements
                insertMovement($conn, $id, $previous_location, $location);
            }

            // Set session variables and redirect
            $_SESSION['status'] = "Data successfully updated.";
            $_SESSION['status_code'] = "success";
            header('Location: assets.php');
            exit();
        } else {
            throw new Exception("Error fetching new location: " . $stmtFetchNewLocation->error);
        }
    } else {
        throw new Exception("Error updating asset information: " . $stmtUpdateAsset->error);
    }
}

// Function to insert movement
function insertMovement($conn, $asset_id, $previous_location, $new_location) {
    $sqlInsertMovement = "INSERT INTO assetsmovements (asset_id, previous_location, new_location, movement_date) 
                          VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
    $stmtInsertMovement = $conn->prepare($sqlInsertMovement);
    $stmtInsertMovement->bind_param("iss", $asset_id, $previous_location, $new_location);
    $resultInsertMovement = $stmtInsertMovement->execute();

    // Check for errors
    if (!$resultInsertMovement) {
        throw new Exception("Error inserting into assetsmovements: " . $stmtInsertMovement->error);
    }

    // Close the statement
    $stmtInsertMovement->close();
}

// Function to log history
function logHistory($actionmade) {
    $logFile = 'history.log';
    $logactionmade = "[" . date('Y-m-d H:i:s') . "] " . $actionmade . PHP_EOL;
    file_put_contents($logFile, $logactionmade, FILE_APPEND | LOCK_EX);
}
?>
