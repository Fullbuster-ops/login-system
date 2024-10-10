<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "assettrack";

$db = new mysqli($sname, $uname, $password, $db_name);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>
