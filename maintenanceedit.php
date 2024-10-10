<?php
session_start(); // Start the session

include 'config/db_conn.php';

// Define an array to store validation errors
$errors = array();

// Sanitize and validate user inputs
$TaskID = isset($_POST['task_id']) ? $_POST['task_id'] : '';
$ID = isset($_POST['id']) ? $_POST['id'] : '';
$TaskType = isset($_POST['task_type']) ? $_POST['task_type'] : '';
$TaskDescription = isset($_POST['task_description']) ? $_POST['task_description'] : '';
$TaskDate = isset($_POST['task_date']) ? $_POST['task_date'] : '';
$AssignTo = isset($_POST['assignto']) ? $_POST['assignto'] : '';

// Validate required fields (customize as needed)
if (empty($TaskID) || empty($ID) || empty($TaskType) || empty($TaskDescription) || empty($TaskDate) || empty($AssignTo)) {
    $errors[] = "All fields are required.";
}

if (empty($errors)) {
    // Prepare and bind the SQL statement
    $sql = "UPDATE maintenancetasks
            SET 
            task_type = ?,
            task_description = ?,
            task_date = ?,
            assignto = ?
            WHERE task_id = ? AND id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssssss", $TaskType, $TaskDescription, $TaskDate, $AssignTo, $TaskID, $ID);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['status'] = "Data successfully updated.";
            $_SESSION['status_code'] = "success";
            header('Location: maintenance.php');
            exit();
        } else {
            $_SESSION['status'] = "Error updating data: " . mysqli_error($conn);
            $_SESSION['status_code'] = "error";
            header('Location: maintenance.php');
            exit();
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['status'] = "Error preparing statement: " . mysqli_error($conn);
        $_SESSION['status_code'] = "error";
        header('Location: maintenance.php');
        exit();
    }
} else {
    // Handle validation errors
    $_SESSION['status'] = "Validation errors: " . implode(", ", $errors);
    $_SESSION['status_code'] = "error";
    header('Location: maintenance.php');
    exit();
}

// Close the database connection
mysqli_close($conn);
?>
