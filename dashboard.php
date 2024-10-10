
<?php
include "auth.php";
include "getuserrole.php";
// The rest of your page content goes here
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    
    <meta charset="UTF-8">
    <title>DASHBOARD</title>
    <link rel="stylesheet" type="text/css" href="css/sidebars1.css">
    <link rel="stylesheet" href="css/dashboards.css">
    <link rel="stylesheet" href="css/chart.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/4.0.0/material-components-web.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.material.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- You can add a close button here if needed -->
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                <p>Are you sure you want to log out?</p>
            </div>
            <div class="modal-footer">
                <a href="logout.php" class="btn btn-primary">Yes, Log Out</a>
                <button type="button" class="btn btn-secondary" onclick="closeLogoutModal()">Cancel</button>
            </div>
        </div>
    </div>
</div>

  <div class="sidebar">
  <div class="logo-details">
    <div>
        <div class="logo_name">AssetTrack<br><span class="role"><?= getUserRole(); ?></span></div>

    </div>
    <i class='bx bx-menu' id="btn"></i>
</div>

    <ul class="nav-list">
      <li>
      <a href="dashboard.php" class="<?php echo $page == 'dashboard.php' ? 'active' : ''; ?>">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
      <a href="assets.php" class="<?php echo $page == 'assets.php' ? 'active' : ''; ?>">
         <i class='bx bx-building' ></i>
         <span class="links_name">Assets</span>

       </a>
         <ul class="submenu">
    <li>
    
             <span class="tooltip">Assets</span>
        
      </a>
    </li>
    <li>
      <a href="assetmovement.php" class="<?php echo $page == 'assetmovement.php' ? 'active' : ''; ?>">
        <span class="links_name">Asset Movement</span>
         
      </a>
    </li>
  </ul>
</li>
     <li>
       <a href="maintenance.php" class="<?php echo $page == 'maintenance.php' ? 'active' : ''; ?>">
         <i class='bx bx-wrench' ></i>
         <span class="links_name">Maintenance</span>
       </a>
       <span class="tooltip">Maintenance</span>
     </li>
     <li>
       <a href="checkinout.php" class="<?php echo $page == 'checkinout.php' ? 'active' : ''; ?>">
         <i class='bx bx-transfer' ></i>
         <span class="links_name">Check In/Check Out</span>
       </a>
       <span class="tooltip">Check In/Check Out</span>
     </li>

     <li>
       <a href="reports.php" class="<?php echo $page == 'reports.php' ? 'active' : ''; ?>">
         <i class='bx bx-file' ></i>
         <span class="links_name">Reports</span>
       </a>
       <span class="tooltip">Reports</span>
     </li>
     <li>
       <a href="backnres.php" class="<?php echo $page == 'backnres.php' ? 'active' : ''; ?>">
         <i class='bx bx-cloud-upload' ></i>
         <span class="links_name">Backup & Restore</span>
       </a>
       <span class="tooltip">Backup & Restore</span>
     </li>
     <li>
       <a href="settings.php" class="<?php echo $page == 'settings.php' ? 'active' : ''; ?>">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Settings</span>
       </a>
       <span class="tooltip">Settings</span>
     </li>
     <li>
       <a href="quickstart.php" class="<?php echo $page == 'quickstart.php' ? 'active' : ''; ?>">
         <i class='bx bx-help-circle' ></i>
         <span class="links_name">Help & Support</span>
       </a>
       <span class="tooltip">Help & Support</span>
     </li>
    <li class="profile">
         <div class="profile-details">
        <a href="dashboard.php">
      <img src="image/logo111.png" class="<?= $page == 'dashboard.php' ? 'active' : ''; ?>" alt="logo1Img">
    </a>
        </div>
       <a href="#" class="<?php echo $page == 'logout.php' ? 'active' : ''; ?>" onclick="openLogoutModal()">
    <i class='bx bx-log-out' id="log_out"></i>
</a>
     </li>
    </ul>
  </div>
  <section class="home-section">
  <header class="header">
    <div class="header-left">
   <main class="title-container">
        <div class="main-title">
       <p class="font-weight-bold">DASHBOARD</p>
      </div>

  
    
      </header>
    </div>
     
        <!-- Main -->

        <div class="dashboard">
    <div class="cardse">
        <div class="cardse-body">
            <h2>Activity Logs</h2>
            <table class="table table-bordered">
            <thead>
                <tr>
                   
                    <th>Action Made</th>
                    <th>Date and Time</th>
                 
                </tr>
            </thead>
            <tbody>

    <?php
    // Read history log file if it exists
    $logFile = 'history.log';

    if (file_exists($logFile)) {
        $logContent = file_get_contents($logFile);

        // Split log content into array by newline
        $logLines = explode(PHP_EOL, $logContent);

        // Filter logs based on asset ID search query
        $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
        $filteredLogs = [];

        foreach ($logLines as $logLine) {
            // Split each log entry into timestamp and message
            $logEntryParts = explode("] ", $logLine, 2);

            // Check if both timestamp and message exist
            if (count($logEntryParts) == 2) {
                list($timestamp, $actionmade) = $logEntryParts;
                $timestamp = trim($timestamp, "[]");

                // Extract asset ID from the message if it exists
                preg_match("/ID: (\w+)/", $actionmade, $matches);
                $UnitID = isset($matches[1]) ? $matches[1] : '';

                // Check if the asset ID matches the search query
                if (stripos($UnitID, $searchQuery) !== false) {
                    $filteredLogs[] = compact( 'actionmade', 'timestamp');
                }
            }
        }

        // Display logs in reverse order (most recent first)
        foreach (array_reverse($filteredLogs) as $log) {
            echo "<tr>";
        
            echo "<td>{$log['actionmade']}</td>";
            echo "<td>{$log['timestamp']}</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No history logs found</td></tr>";
    }
    
    ?>
    
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="cardses">
    <div class="cardses-body">
        <h2>Login Status</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Last Seen</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config/db_conn.php";

                // Update last_seen timestamp and online_status for users who are still logged in
                $currentTime = date("Y-m-d H:i:s");
                $logoutTimeThreshold = date("Y-m-d H:i:s", strtotime('-5 minutes')); // Considered offline after 5 minutes of inactivity
                $logoutSql = "UPDATE login_audits SET online_status = 0 WHERE last_seen < ?";
                $stmtLogout = mysqli_prepare($conn, $logoutSql);

                if ($stmtLogout) {
                    mysqli_stmt_bind_param($stmtLogout, "s", $logoutTimeThreshold);
                    mysqli_stmt_execute($stmtLogout);
                    mysqli_stmt_close($stmtLogout);
                } else {
                    echo "Error preparing statement for updating online status: " . mysqli_error($conn);
                }

                // Fetch updated login status
                $query = "SELECT * FROM login_audits ORDER BY last_seen DESC";
                $result = mysqli_query($conn, $query);

                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['user_name'] . "</td>";
                    echo "<td>" . $row['last_seen'] . "</td>";
                    echo "<td>" . ($row['online_status'] ? 'Online' : 'Offline') . "</td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</div>



      <main class="main-container">
     

        <div class="main-cards">

    <div class="card" id="assets-card">
    <div class="card-inner">
        <p class="">ASSETS</p>
        <span class="material-icons-outlined text-blue">inventory_2</span>
    </div>
    <span class="" id="assets-count">0</span>

</div><div class="card" id="checkinout-card">
    <div class="card-inner">
        <p class="">CHECK IN / CHECK OUT</p>
        <span class="material-icons-outlined text-orange">transfer_within_a_station</span>
    </div>
    <span class="" id="checkinout-count">0</span>
</div>

<div class="card" id="maintenance-card">
            <div class="card-inner">
              <p class=""> SCHEDULED MAINTENANCE</p>
              <span class="material-icons-outlined text-green">engineering</span>
            </div>
            <span class="" id="maintenance-count">0</span>
          </div>

<div class="card" id="reports-card">
    <div class="card-inner">
        <p class="">REPORTS</p>
        <span class="material-icons-outlined text-red">report</span>
    </div>
    <span class="" id="reports-count">0</span>
</div>
        </div>

      
      <!-- End Main -->
      
  <table id="task-table" class="table table-bordered">
  <thead>
    <tr>
   
    <th scope="col">Task ID</th>
    <th scope="col">ID</th>
    <th scope="col">Task Type</th>
    <th scope="col">Task Description</th>
    <th scope="col">Task Date</th>
    <th scope="col">Assignto</th>
    <th scope="col">Actions</th>


    </tr>
  </thead>
  <tbody>
    <?php
    require_once 'config/db_conn.php';
    require_once 'config/functions.php';

    $result = dispaly_data(); // Corrected the function name
    $sql = "SELECT * FROM maintenancetasks";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $TaskID = $row['task_id'];
          $ID = $row['id'];
          $TaskType = $row['task_type'];
          $TaskDescription = $row['task_description'];
          $TaskDate = $row['task_date'];
          $AssignTo = $row['assignto'];
  
          // Assuming you have variables for new location and movement date
          echo '<tr>';
          echo '<td>' . $TaskID . '</td>';
          echo '<td>' . $ID . '</td>';
          echo '<td>' . $TaskType . '</td>';
          echo '<td>' . $TaskDescription . '</td>';
          echo '<td>' . $TaskDate . '</td>';
          echo '<td>' . $AssignTo. '</td>';
          // Place the buttons in a new cell
          echo '<td>';
          if($isUserAdminOrTechnician){
            echo '<button class="view-btn" id="' . $ID . '"><i class="fa fa-eye"></i></button>
               <button class="edit-btn" id="' . $ID . '"><i class="fa fa-pencil"></i></button>
             <button class="delete-btn" id="' . $ID . '"><i class="fa fa-trash"></i></button>';
              }
  
          echo '</tr>';
        }
      }
      
    ?>

          <div class ="data">
         <canvas id="myChart"></canvas>
         </div>
        
     <table id="dataid" class="table table-bordered">
     <thead>
                <tr>
                    <th scope="col">Checkinout ID</th>
                    <th scope="col">Asset ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Checkin Date</th>
                    <th scope="col">Checkout Date</th>
                    <th scope="col">Expected Return Date</th>
                       <th scope="col">Actions</th>
                </tr>
                </div>
            </thead>
            <tbody>

   
           
                           <?php
                            
                require_once 'config/db_conn.php';
                require_once 'config/functions.php';

                $data = array(); // An array to store the data for the chart

  $result = dispaly_data();
$sql = "SELECT * FROM checkinout";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $CheckinoutID = $row['checkinout_id'];
        $AssetID = $row['asset_id'];
        $UserID = $row['user_id'];
        $CheckinDate = $row['checkin_date'];
        $CheckoutDate = $row['checkout_date'];
        $ExpectedReturnDate = $row['expected_return_date'];
             
        $data[] = [
          'CheckinoutID' =>  $CheckinoutID ,
          'AssetID' => $AssetID,
          'UserID' => $UserID,
          'CheckinDate' => $CheckinDate,
          'CheckoutDate' => $CheckoutDate,
          'ExpectedReturnDate' => $ExpectedReturnDate
      ];


        
         echo '<tr>';
         echo '<td>' . $CheckinoutID. '</td>';
        echo '<td>' .   $AssetID . '</td>';
        echo '<td>' . $UserID . '</td>';
        echo '<td>' . $CheckinDate . '</td>';
        echo '<td>' . $CheckoutDate . '</td>';
        echo '<td>' .  $ExpectedReturnDate . '</td>';
        echo '<td>';
        echo '<button class="view-btn" data-asset-id="' . $AssetID . '"><i class="fa fa-eye"></i></button>
      <button class="edit-btn" data-asset-id="' . $AssetID . '"><i class="fa fa-pencil"></i></button>
      <button class="delete-btn" data-asset-id="' . $AssetID . '"><i class="fa fa-trash"></i></button>';
        echo '</td>';
        echo '</tr>';
    }
}
  
?>



     
<table id="reports-table" class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Report ID</th>
            <th scope="col">Report Name</th>
            <th scope="col">Report Path</th>
            <th scope="col">Generated Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Table data goes here -->
        <?php
        require_once 'config/db_conn.php';
        require_once 'config/functions.php';
        
        $result = dispaly_data();
        $sql = "SELECT * FROM reports"; // Corrected SQL query
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Check if the keys exist in the $row array before accessing them
                $report_id = isset($row['report_id']) ? $row['report_id'] : '';
                $report_name = isset($row['report_name']) ? $row['report_name'] : '';
                $report_path = isset($row['report_path']) ? $row['report_path'] : '';
                $generatedDate = isset($row['generated_date']) ? $row['generated_date'] : '';
        
                echo '<tr>';
                echo '<td>' . $report_id . '</td>';
                echo '<td>' . $report_name . '</td>';
                echo '<td>' . $report_path . '</td>';
                echo '<td>' . $generatedDate . '</td>';
                echo '<td>';
                echo '<button class="view-btn" data-report-id="' . $report_id . '"><i class="fa fa-eye"></i></button>';
                echo '<button class="edit-btn" data-report-id="' . $report_id . '"><i class="fa fa-pencil"></i></button>';
                echo '<button class="delete-btn" data-report-id="' . $report_id . '"><i class="fa fa-trash"></i></button>';
                echo '</td>';
                echo '</tr>';
            }
        }
        ?>
        


  <!-- Header -->
  <div class="dashboard">
        <div class="chart chart1">
            <div class="cards-body">
                <canvas id="Chart"></canvas>
            </div>
        </div>

        <div class="chart chart2">
            <div class="cards-body">
                <canvas id="UnitChart"></canvas>
            </div>
        </div>

        <div class="chart chart3">
            <div class="cards-body">
                <canvas id="ComponentChart"></canvas>
            </div>
    </div>

        <table id="datatableid" class="table table-bordered">
            <thead>
                <tr>
                             <th scope="col">ID</th>
                                <th scope="col">Unit ID</th>
                                <th scope="col">Motherboard</th>
                                <th scope="col">Processor</th>
                                <th scope="col">GPU</th>
                                <th scope="col">Memory</th>
                                <th scope="col">SSD</th>
                                <th scope="col">HDD</th>
                                <th scope="col">DVD/CD</th>
                                <th scope="col">AVR</th>
                                <th scope="col">Power Supply</th>
                                <th scope="col">Monitor</th>
                                <th scope="col">Keyboard</th>
                                <th scope="col">Mouse</th>
                                <th scope="col">Camera</th>
                                <th scope="col">Location</th>
                                <th scope="col">Status</th>
                                <th scope="col">Recommendation</th>
                                <th scope="col">Actions</th>
                      
                </tr>
            </thead>
            <tbody>
            <?php
require_once 'config/db_conn.php';
require_once 'config/functions.php';

$assetChartData = array();
$result = dispaly_data(); // Assuming dispaly_data() is a function that sets up the database connection

$sql = "SELECT * FROM assets";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $ID = $row['id'];
        $UnitID = $row['unit_id'];
        $Motherboard = $row['mobo'];
        $Processor = $row['cpu'];
        $GPU = $row['gpu'];
        $Memory = $row['memory'];
        $SSD = $row['ssd'];
        $HDD = $row['hdd'];
        $DVDCD = $row['dvd_cd'];
        $AVR = $row['avr'];
        $PowerSupply = $row['power_supply'];
        $Monitor = $row['monitor'];
        $Keyboard = $row['keyboard'];
        $Mouse = $row['mouse'];
        $Camera = $row['camera'];
        $Location = $row['location'];
        $Status = $row['status'];
        $Recommendation = $row['recommendation'];


        $assetChartData[] = [
            'id' => $ID,
            'location' => $Location,
            'status' => $Status,
            'unit_id' => $UnitID
];


echo '<tr>';
echo '<td>' . $ID . '</td>';
echo '<td>' . $UnitID . '</td>';
echo '<td>' . $Motherboard . '</td>';
echo '<td>' . $Processor . '</td>';
echo '<td>' . $GPU . '</td>';
echo '<td>' . $Memory . '</td>';
echo '<td>' . $SSD . '</td>';
echo '<td>' . $HDD . '</td>';
echo '<td>' . $DVDCD . '</td>';
echo '<td>' . $AVR . '</td>';
echo '<td>' . $PowerSupply . '</td>';
echo '<td>' . $Monitor . '</td>';
echo '<td>' . $Keyboard . '</td>';
echo '<td>' . $Mouse . '</td>';
echo '<td>' . $Camera . '</td>';
echo '<td>' . $Location . '</td>';
// Check if the user is a guest
if ($isUserGuest) {
    // For guest users, do not make the cell clickable
    echo '<td>' . $Status . '</td>';
} else {
    // For other users, make the cell clickable
    echo '<td class="clickable-status" data-toggle="modal" data-target="#statusModal">' . $Status . '</td>';
}
echo '<td>' . $Recommendation . '</td>';

echo '<td>';
if ($isUserAdmin) {
    echo '<button class="view-btn" id="' . $ID . '"><i class="fa fa-eye"></i></button>
        <button class="edit-btn" id="' . $ID . '"><i class="fa fa-pencil"></i></button>
        <button class="delete-btn" id="' . $ID . '"><i class="fa fa-trash"></i></button>';
}
echo '</td>';
echo '</tr>';
}
}
?>

<?php
require_once 'config/db_conn.php';
require_once 'config/functions.php';

$assetChartData = array();
$componentsData = array(); // Data structure to store component count per location

$result = dispaly_data(); // Assuming dispaly_data() is a function that sets up the database connection

$sql = "SELECT * FROM assets";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $ID = $row['id'];
        $UnitID = $row['unit_id'];
        $Motherboard = $row['mobo'];
        $Processor = $row['cpu'];
        $GPU = $row['gpu'];
        $Memory = $row['memory'];
        $SSD = $row['ssd'];
        $HDD = $row['hdd'];
        $DVDCD = $row['dvd_cd'];
        $AVR = $row['avr'];
        $PowerSupply = $row['power_supply'];
        $Monitor = $row['monitor'];
        $Keyboard = $row['keyboard'];
        $Mouse = $row['mouse'];
        $Camera = $row['camera'];
        $Location = $row['location'];
        $Status = $row['status'];
        $Recommendation = $row['recommendation'];

        // Store asset data for later use
        $assetChartData[] = [
            'id' => $ID,
            'location' => $Location,
            'status' => $Status,
            'unit_id' => $UnitID
        ];

        // Count components per location
        if (!isset($componentsData[$Location])) {
            $componentsData[$Location] = array(
                'Motherboard' => 0,
                'Processor' => 0,
                'GPU' => 0,
                'Memory' => 0,
                'SSD' => 0,
                'HDD' => 0,
                'DVD/CD' => 0,
                'AVR' => 0,
                'PowerSupply' => 0,
                'Monitor' => 0,
                'Keyboard' => 0,
                'Mouse' => 0,
                'Camera' => 0
            );
        }

        // Increment component count
        $componentsData[$Location]['Motherboard'] += $Motherboard ? 1 : 0;
        $componentsData[$Location]['Processor'] += $Processor ? 1 : 0;
        $componentsData[$Location]['GPU'] += $GPU ? 1 : 0;
        $componentsData[$Location]['Memory'] += $Memory ? 1 : 0;
        $componentsData[$Location]['SSD'] += $SSD ? 1 : 0;
        $componentsData[$Location]['HDD'] += $HDD ? 1 : 0;
        $componentsData[$Location]['DVD/CD'] += $DVDCD ? 1 : 0;
        $componentsData[$Location]['AVR'] += $AVR ? 1 : 0;
        $componentsData[$Location]['PowerSupply'] += $PowerSupply ? 1 : 0;
        $componentsData[$Location]['Monitor'] += $Monitor ? 1 : 0;
        $componentsData[$Location]['Keyboard'] += $Keyboard ? 1 : 0;
        $componentsData[$Location]['Mouse'] += $Mouse ? 1 : 0;
        $componentsData[$Location]['Camera'] += $Camera ? 1 : 0;
    }
}
?>
  
                
                
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>

        
    <script>
    // Function to open the logout modal
    function openLogoutModal() {
        $('#logoutModal').modal('show');
    }

    // Function to close the logout modal
    function closeLogoutModal() {
        $('#logoutModal').modal('hide');
    }

    $(document).ready(function() {
        // Initialize DataTable for ASSETS
      
        var assetsDataTable = $('#datatableid').DataTable({
            autoWidth: false,
            columnDefs: [
                {
                    targets: '_all',
                    className: 'mdc-data-table__cell',
                },
            ],
        });

        // Initialize DataTable for CHECK IN / CHECK OUT
        var checkInOutDataTable = $('#dataid').DataTable({
            autoWidth: false,
            columnDefs: [
                {
                    targets: '_all',
                    className: 'mdc-data-table__cell',
                },
            ],
        });

        // Initialize DataTable for MAINTENANCE
        var maintenanceDataTable = $('#task-table').DataTable({
            autoWidth: false,
            columnDefs: [
                {
                    targets: '_all',
                    className: 'mdc-data-table__cell',
                },
            ],
        });

        // Initialize DataTable for REPORTS
        var reportsDataTable = $('#reports-table').DataTable({
            autoWidth: false,
            columnDefs: [
                {
                    targets: '_all',
                    className: 'mdc-data-table__cell',
                },
            ],
        });

        // Function to update the count on the "ASSETS" card
        function updateAssetsCount() {
            var rowCount = assetsDataTable.rows().count();
            $('#assets-count').text(rowCount);
        }

        // Function to update the count on the "CHECK IN / CHECK OUT" card
        function updateCheckInOutCount() {
            var rowCount = checkInOutDataTable.rows().count();
            $('#checkinout-count').text(rowCount);
        }

        // Function to update the count on the "MAINTENANCE" card
        function updateMaintenanceCount() {
            var rowCount = maintenanceDataTable.rows().count();
            $('#maintenance-count').text(rowCount);
        }

        // Function to update the count on the "REPORTS" card
        function updateReportsCount() {
            var rowCount = reportsDataTable.rows().count();
            $('#reports-count').text(rowCount);
        }

        // Hide the tables initially
        $('#datatableid').hide();
        $('#dataid').hide();
        $('#task-table').hide();
        $('#reports-table').hide();

        // Add click events to toggle table visibility and update counts
        $('#assets-card').on('click', function() {
            $('#datatableid').toggle();
            updateAssetsCount();
        });

        // Add click events to toggle table visibility and update counts for "CHECK IN / CHECK OUT" card
        $('#checkinout-card').on('click', function() {
            $('#dataid').toggle();
            updateCheckInOutCount();
        });

        // Add click events to toggle table visibility and update counts for "MAINTENANCE" card
        $('#maintenance-card').on('click', function() {
            $('#task-table').toggle();
            updateMaintenanceCount();
        });

        // Add click events to toggle table visibility and update counts for "REPORTS" card
        $('#reports-card').on('click', function() {
            $('#reports-table').toggle();
            updateReportsCount();
        });

        // Initial count updates
        updateAssetsCount();
        updateCheckInOutCount();
        updateReportsCount();
        updateMaintenanceCount();
    });
    </script>
      


      <script>
        $(document).ready(function() {
            // Initialize DataTables for all three tables
            var dataidTable = $('#dataid').DataTable();
            var reportsTable = $('#reports-table').DataTable();
            var datatableidTable = $('#datatableid').DataTable();
            var taskTable  = $('#task-table').DataTable();

            // Hide the DataTables tables
            dataidTable.destroy(); // Destroy the DataTables instance for dataid
            reportsTable.destroy(); // Destroy the DataTables instance for reports-table
            datatableidTable.destroy(); // Destroy the DataTables instance for datatableid
            taskTable.destroy(); 

            $('#dataid, #reports-table,#task-table, #datatableid').hide(); // Hide the tables using CSS

            // You can show the tables again if needed
            // $('#dataid, #reports-table, #datatableid').show(); // Show the tables using CSS
            // dataidTable = $('#dataid').DataTable(); // Reinitialize DataTables for dataid
            // reportsTable = $('#reports-table').DataTable(); // Reinitialize DataTables for reports-table
            // datatableidTable = $('#datatableid').DataTable(); // Reinitialize DataTables for datatableid
        });
    </script>

      
      <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });


  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>

<script>
const data = <?php //echo json_encode($data); ?>;
const checkinoutIds = data.map(item => item.CheckinoutID);
const assetIds = data.map(item => item.AssetID);
const userIds = data.map(item => item.UserID);
const checkinDates = data.map(item => item.CheckinDate);
const expectedReturnDates = data.map(item => item.ExpectedReturnDate);

const barColors = ["red", "green", "blue", "orange"];

// Count occurrences of checkin, checkout, and return dates by checkinout ID
const checkinCount = {};
const checkoutCount = {};
const returnDateCount = {};

data.forEach(item => {
    if (checkinCount[item.CheckinoutID]) {
        checkinCount[item.CheckinoutID]++;
    } else {
        checkinCount[item.CheckinoutID] = 1;
    }

    if (checkoutCount[item.CheckinoutID]) {
        checkoutCount[item.CheckinoutID]++;
    } else {
        checkoutCount[item.CheckinoutID] = 1;
    }

    if (item.ReturnDate) {
        if (returnDateCount[item.CheckinoutID]) {
            returnDateCount[item.CheckinoutID]++;
        } else {
            returnDateCount[item.CheckinoutID] = 1;
        }
    }
});

const combinedChart = new Chart("myChart", {
    type: "bar",
    data: {
        labels: checkinoutIds.map(id => `Checkinout ID ${id}`),
        datasets: [
            {
                label: 'Checkin Count',
                backgroundColor: barColors[0],
                data: checkinoutIds.map(id => checkinCount[id] || 0),
            },
            {
                label: 'Checkout Count',
                backgroundColor: barColors[1],
                data: checkinoutIds.map(id => checkoutCount[id] || 0),
            },
            {
                label: 'Return Date Count',
                backgroundColor: barColors[2],
                data: checkinoutIds.map(id => returnDateCount[id] || 0),
            }
        ]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: "Check in and Check out", // Your title here
                font: {
                    size: 16 // Adjust the font size as needed
                }
            },
            legend: {
                display: true,
                position: 'bottom'
            }
        },
        scales: {
            y: {
                display: true, // This line removes the Y-axis labels
            }
        },
        onClick: (event, activeElements) => {
            // Your click event handling
        }
    }
});
</script>
<script>
    // JavaScript code to create and update the charts
    document.addEventListener("DOMContentLoaded", function () {
        var ctx = document.getElementById('Chart').getContext('2d');
        var ctxUnit = document.getElementById('UnitChart').getContext('2d');

        // Prepare data for the chart
        var assetChartData = <?php echo json_encode($assetChartData); ?>;

        // Function to get counts based on status
        function getStatusCounts(status) {
            return assetChartData.filter(item => item.status === status).length;
        }

        // Create the total status chart
        var totalStatusChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['In Use', 'Under Maintenance', 'Unavailable'],
                datasets: [{
                    data: [
                        getStatusCounts('In Use'),
                        getStatusCounts('Under Maintenance'),
                        getStatusCounts('Unavailable')
                    ],
                    backgroundColor: ['#008000', '#FFAE42', '#FF0000'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: true,
                    text: 'Total Asset Status',
                },
                legend: {
                    position: 'left',
                    labels: {
                        fontSize: 16,
                    },
                },
            }
        });

        // Function to update the unit chart based on the selected status
        function updateUnitChart(status) {
            var filteredData = assetChartData.filter(item => item.status === status);
            var unitCounts = filteredData.reduce((acc, item) => {
                acc[item.unit_id] = (acc[item.unit_id] || 0) + 1;
                return acc;
            }, {});

            var unitLabels = Object.keys(unitCounts);
            var unitData = Object.values(unitCounts);

            // Update the Unit Chart
            unitChart.data.labels = unitLabels;
            unitChart.data.datasets[0].data = unitData;
            unitChart.update();
        }

        // Create the initial unit chart
        var unitChart = new Chart(ctxUnit, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: 'Number of Assets per Unit',
                    data: [],
                    backgroundColor: '#4CAF50',
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: true,
                    text: 'Assets per Unit',
                },
                scales: {
                    xAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Unit ID',
                        }
                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Number of Assets',
                        }
                    }]
                }
            }
        });

        // Attach event listener to update the unit chart when a status is selected
        document.getElementById('datatableid').addEventListener('click', function (event) {
            if (event.target.tagName === 'TD' && event.target.cellIndex === 17) { // Assuming "Status" is the 17th column
                var selectedStatus = event.target.innerText.trim();
                updateUnitChart(selectedStatus);
            }
        });
    });
</script>



<script>
    var unitChartData = <?php echo json_encode($assetChartData); ?>;
    var unitData = {};

    unitChartData.forEach(item => {
        if (item.location in unitData) {
            unitData[item.location]++;
        } else {
            unitData[item.location] = 1;
        }
    });

    // Function to generate a random color
    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    var ctxUnitChart = document.getElementById('UnitChart').getContext('2d');
    var barColors = Object.keys(unitData).map(() => getRandomColor());

    var unitChart = new Chart(ctxUnitChart, {
        type: 'pie',
        data: {
            labels: Object.keys(unitData),
            datasets: [{
                label: 'Units per Location',
                data: Object.values(unitData),
                backgroundColor: barColors,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'Total Units per Location'
                }
            }
        }
    });
</script>


<script>
    // Process components data to calculate percentages
    var componentData = <?php echo json_encode($componentsData); ?>;
    var locations = Object.keys(componentData);
    var componentLabels = Object.keys(componentData[locations[0]]);
    var datasets = [];

    locations.forEach(location => {
        var componentCount = componentData[location];
        var totalUnits = Object.values(componentCount).reduce((a, b) => a + b, 0);

        datasets.push({
            label: location,
            data: Object.values(componentCount),
            backgroundColor: getRandomColor(),
            borderWidth: 1
        });
    });

    // Function to generate a random color
    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // Create the chart using chart.js
    var ctxComponentChart = document.getElementById('ComponentChart').getContext('2d');
    var componentChart = new Chart(ctxComponentChart, {
        type: 'bar',
        data: {
            labels: componentLabels,
            datasets: datasets
        },
        options: {
            plugins: {
                legend: {
                    position: 'top'
                },
                title: {
                    display: true,
                    text: 'Total number of each type of component'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            var location = context.dataset.label;
                            var label = context.label || '';
                            var number = context.dataset.data[context.dataIndex];
                            return `${label} (${number}) - ${location}`;
                        }
                    }
                }
            },
            responsive: true, // Make the chart responsive
            maintainAspectRatio: false, // Disable aspect ratio for responsiveness
            scales: {
                x: {
                    stacked: true, // Stack bars horizontally
                    grid: {
                        display: true,
                        drawBorder: true
                    }
                },
                y: {
                    stacked: true, // Stack bars vertically
                    grid: {
                        display: true,
                        drawBorder: true
                    }
                }
            },
            interaction: {
                intersect: false,
                mode: 'index'
            },
            animation: {
                tension: {
                    duration: 1000,
                    easing: 'easeOutElastic',
                    from: 1,
                    to: 0,
                    loop: true
                }
            }
        }
    });
</script>

</body>
</html>










