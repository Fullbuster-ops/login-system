<?php
session_start(); // Start the session

include 'config/db_conn.php';

// Define an array to store validation errors
$errors = array();

// Sanitize and validate user inputs
$TaskID = isset($_POST['task_id']) ? mysqli_real_escape_string($conn, $_POST['task_id']) : '';
$ID = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) : '';
$TaskType = isset($_POST['task_type']) ? mysqli_real_escape_string($conn, $_POST['task_type']) : '';
$TaskDescription = isset($_POST['task_description']) ? mysqli_real_escape_string($conn, $_POST['task_description']) : '';
$TaskDate = isset($_POST['task_date']) ? mysqli_real_escape_string($conn, $_POST['task_date']) : '';
$AssignTo = isset($_POST['assignto']) ? mysqli_real_escape_string($conn, $_POST['assignto']) : '';

if (empty($ID)) {
    $errors[] = "ID is required.";
}
if (empty($TaskType)) {
    $errors[] = "Task Type is required.";
}
if (empty($TaskDescription)) {
    $errors[] = "Description is required.";
}
if (empty($TaskDate)) {
    $errors[] = "Task Date is required.";
}
if (empty($AssignTo)) {
    $errors[] = "AssignTo is required.";
}

if (empty($errors)) {
    // Assuming the table name is 'maintenancetasks'
    $sql = "INSERT INTO `maintenancetasks` (task_id, id, task_type, task_description, task_date, assignto)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssss", $TaskID, $ID, $TaskType, $TaskDescription, $TaskDate, $AssignTo);

        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['status'] = "Data Inserted Successfully";
            $_SESSION['status_code'] = "success";
        } else {
            $_SESSION['status'] = "Error: " . mysqli_error($conn);
            $_SESSION['status_code'] = "error";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn); // Close the database connection

        header('Location: maintenance.php');
        exit();
    } else {
        $_SESSION['status'] = "Error: " . mysqli_error($conn);
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
?>
