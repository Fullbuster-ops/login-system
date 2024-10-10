<?php
session_start();
include "config/db_conn.php";

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['uname']) && isset($_POST['password'])) {

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname) || empty($pass)) {
        header("Location: index.php?error=Username and password are required");
        exit();
    }

    $sql = "SELECT id, user_name, name, password, role_id
            FROM users
            WHERE user_name = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $uname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && $row = mysqli_fetch_assoc($result)) {
            if (password_verify($pass, $row['password'])) {
                // Password is correct
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['role_id'] = $row['role_id'];

                // Update online status to 1 (user logged in)
                $onlineValue = 1;
                $auditSql = "INSERT INTO login_audits (user_name, online_status) VALUES (?, ?)
                             ON DUPLICATE KEY UPDATE online_status = VALUES(online_status)";
                $stmtAudit = mysqli_prepare($conn, $auditSql);
                if ($stmtAudit) {
                    mysqli_stmt_bind_param($stmtAudit, "si", $uname, $onlineValue);
                    mysqli_stmt_execute($stmtAudit);
                    mysqli_stmt_close($stmtAudit);
                }

                // Log successful login
                $successValue = 1;
                $auditSql = "INSERT INTO login_audit (user_name, success) VALUES (?, ?)";
                $stmtAudit = mysqli_prepare($conn, $auditSql);
                if ($stmtAudit) {
                    mysqli_stmt_bind_param($stmtAudit, "si", $uname, $successValue);
                    mysqli_stmt_execute($stmtAudit);
                    mysqli_stmt_close($stmtAudit);
                }

                header("Location: dashboard.php");
                exit();
            } else {
                // Log unsuccessful login
                $successValue = 0;
                $auditSql = "INSERT INTO login_audit (user_name, success) VALUES (?, ?)";
                $stmtAudit = mysqli_prepare($conn, $auditSql);
                if ($stmtAudit) {
                    mysqli_stmt_bind_param($stmtAudit, "si", $uname, $successValue);
                    mysqli_stmt_execute($stmtAudit);
                    mysqli_stmt_close($stmtAudit);
                }

                header("Location: index.php?error=Incorrect username or password");
                exit();
            }
        } else {
            // Log unsuccessful login
            $successValue = 0;
            $auditSql = "INSERT INTO login_audit (user_name, success) VALUES (?, ?)";
            $stmtAudit = mysqli_prepare($conn, $auditSql);
            if ($stmtAudit) {
                mysqli_stmt_bind_param($stmtAudit, "si", $uname, $successValue);
                mysqli_stmt_execute($stmtAudit);
                mysqli_stmt_close($stmtAudit);
            }

            header("Location: index.php?error=Incorrect username or password");
            exit();
        }
    } else {
        header("Location: index.php?error=Database error");
        exit();
    }

} elseif (isset($_POST['logout'])) {

    if (!isset($_SESSION['user_name'])) {
        header("Location: index.php");
        exit();
    }

    $onlineValue = 0;
    $uname = $_SESSION['user_name'];
    $auditSql = "UPDATE login_audits SET online_status = ? WHERE user_name = ?";
    $stmtAudit = mysqli_prepare($conn, $auditSql);

    if ($stmtAudit) {
        mysqli_stmt_bind_param($stmtAudit, "is", $onlineValue, $uname);
        if (mysqli_stmt_execute($stmtAudit)) {
            mysqli_stmt_close($stmtAudit);

            // Insert into the login_audit table
            $successValue = 1;
            $auditSql = "INSERT INTO login_audit (user_name, success) VALUES (?, ?)";
            $stmtAudit = mysqli_prepare($conn, $auditSql);
            if ($stmtAudit) {
                mysqli_stmt_bind_param($stmtAudit, "si", $uname, $successValue);
                mysqli_stmt_execute($stmtAudit);
                mysqli_stmt_close($stmtAudit);
            }
        } else {
            // Error during update, handle it (optional logging)
            mysqli_stmt_close($stmtAudit);
            header("Location: index.php?error=Database error");
            exit();
        }
    }

    session_unset();
    session_destroy();

    header("Location: index.php");
    exit();

} else {
    header("Location: index.php");
    exit();
}
?>
