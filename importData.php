<?php

session_start();
include 'config/db_conn2.php';

if(isset($_POST['importSubmit'])){
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 
    'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            rewind($csvFile);
            
            // Skip the first line (header)
            fgetcsv($csvFile);

            while(($line = fgetcsv($csvFile)) !== FALSE){
                $UnitID         = $line[0];
                $Motherboard    = $line[1];
                $Processor      = $line[2];
                $GPU            = $line[3];
                $Memory         = $line[4];
                $SSD            = $line[5];
                $HDD            = $line[6];
                $DVDCD          = $line[7];
                $AVR            = $line[8];
                $PowerSupply    = $line[9];
                $Monitor        = $line[10];
                $Keyboard       = $line[11];
                $Mouse          = $line[12];
                $Camera         = $line[13];
                $Location       = $line[14];
                $Status         = $line[15];
                $Recommendation = $line[16];
                
                $prevQuery = "SELECT id FROM assets WHERE unit_id = '".$UnitID."'";
                $prevResult = $db->query($prevQuery);
                
                if($prevResult->num_rows > 0){
                    // Update asset data in the database
                    $db->query("UPDATE assets SET mobo = '".$Motherboard."', cpu = '".$Processor."', gpu = '".$GPU."', 
                    memory = '".$Memory."', ssd = '".$SSD."', hdd = '".$HDD."', dvd_cd = '".$DVDCD."', avr = '".$AVR."', 
                    power_supply = '".$PowerSupply."', monitor = '".$Monitor."', keyboard = '".$Keyboard."', mouse = '".$Mouse."', 
                    camera = '".$Camera."', location = '".$Location."', status = '".$Status."', recommendation = '".$Recommendation."'
                    WHERE unit_id = '".$UnitID."'");
                }else{
                    // Insert asset data in the database
                    $db->query("INSERT INTO assets (unit_id, mobo, cpu, gpu, memory, ssd, hdd, dvd_cd, avr, power_supply, 
                    monitor, keyboard, mouse, camera, location, status, recommendation) VALUES ('".$UnitID."', 
                    '".$Motherboard."', '".$Processor."', '".$GPU."', '".$Memory."', '".$SSD."', '".$HDD."', '".$DVDCD."', '".$AVR."', 
                    '".$PowerSupply."', '".$Monitor."', '".$Keyboard."', '".$Mouse."', '".$Camera."', '".$Location."', '".$Status."', 
                    '".$Recommendation."')");
                }
            }
            
            fclose($csvFile);
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

header("Location: assets.php".$qstring);
exit();

// Function to log history
function logHistory($actionmade) {
    date_default_timezone_set('Asia/Manila');

    $logFile = 'history.log';
    $logactionmade = "[" . date('Y-m-d H:i:s') . "] " . $actionmade . PHP_EOL;
    file_put_contents($logFile, $logactionmade, FILE_APPEND | LOCK_EX);
}
?>
