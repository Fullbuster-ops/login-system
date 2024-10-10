<?php
include "auth.php";
include "getuserrole.php";
// The rest of your page content goes here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assets</title>
    <link rel="stylesheet" href="css/assets.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/4.0.0/material-components-web.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.material.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>

<!-- Edit Asset Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Asset</h5>
                </div>
                <form action="edit.php" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                          <input type="text" class="form-control" id="id" name="id" readonly style="background-color: #f0f0f0;">
                        </div>
                        <div class="mb-3">
                            <label for="unit_id" class="form-label">Unit ID</label>
                            <input type="text" class="form-control" id="unit_id" name="unit_id" placeholder="Enter new Unit ID">
                        </div>
                        <div class="mb-3">
                            <label for="mobo" class="form-label">Motherboard</label>
                            <input type="text" class="form-control" id="mobo" name="mobo" placeholder="Enter new Motherboard">
                        </div>
                        <div class="mb-3">
                            <label for="cpu" class="form-label">Processor</label>
                            <input type="text" class="form-control" id="cpu" name="cpu" placeholder="Enter new Processor">
                        </div>
                        <div class="mb-3">
                            <label for="gpu" class="form-label">GPU</label>
                            <input type="text" class="form-control" id="gpu" name="gpu" placeholder="Enter new GPU">
                        </div>
                        <div class="mb-3">
                            <label for="memory" class="form-label">Memory</label>
                            <input type="text" class="form-control" id="memory" name="memory" placeholder="Enter new Memory">
                        </div>
                        <div class="mb-3">
                            <label for="ssd" class="form-label">SSD</label>
                            <input type="text" class="form-control" id="ssd" name="ssd" placeholder="Enter new SSD">
                        </div>
                        <div class="mb-3">
                            <label for="hdd" class="form-label">HDD</label>
                            <input type="text" class="form-control" id="hdd" name="hdd" placeholder="Enter new HDD">
                        </div>
                        <div class="mb-3">
                            <label for="dvd_cd" class="form-label">DVD/CD</label>
                            <input type="text" class="form-control" id="dvd_cd" name="dvd_cd" placeholder="Enter new DVD/CD">
                        </div>
                        <div class="mb-3">
                            <label for="avr" class="form-label">AVR</label>
                            <input type="text" class="form-control" id="avr" name="avr" placeholder="Enter new AVR">
                        </div>
                        <div class="mb-3">
                            <label for="power_supply" class="form-label">Power Supply</label>
                            <input type="text" class="form-control" id="power_supply" name="power_supply" placeholder="Enter new Power Supply">
                        </div>
                        <div class="mb-3">
                            <label for="monitor" class="form-label">Monitor</label>
                            <input type="text" class="form-control" id="monitor" name="monitor" placeholder="Enter new Monitor">
                        </div>
                        <div class="mb-3">
                            <label for="keyboard" class="form-label">Keyboard</label>
                            <input type="text" class="form-control" id="keyboard" name="keyboard" placeholder="Enter new Keyboard">
                        </div>
                        <div class="mb-3">
                            <label for="mouse" class="form-label">Mouse</label>
                            <input type="text" class="form-control" id="mouse" name="mouse" placeholder="Enter new Mouse">
                        </div>
                        <div class="mb-3">
                            <label for="camera" class="form-label">Camera</label>
                            <input type="text" class="form-control" id="camera" name="camera" placeholder="Enter new Camera">
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <select name="location" id="location" class="form-select" required>
                                <option value="" disabled selected>Select an option</option>
                                <option value="LR1">LR1</option>
                                <option value="LR2">LR2</option>
                                <option value="MM3">MM3</option>
                                <option value="LR4">LR4</option>
                            </select>
                        </div> 
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="" disabled selected>Select an option</option>
                                <option value="Unavailable">Unavailable</option>
                                <option value="In Use">In Use</option>
                                <option value="Under Maintenance">Under Maintenance</option>
                            </select>
                        </div>    
                        <div class="mb-3">
                            <label for="recommendation" class="form-label">Recommendation</label>
                            <input type="text" class="form-control" id="recommendation" name="recommendation" placeholder="Enter Recommendation">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="cancel-button">Cancel</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
        </div>
    </div>
</div>

<!-- LogOut Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
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

<!-- Delete Modal -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="deletemodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deletemodalLabel">Confirm Delete</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this record?</p>
                </div>
                <div class="modal-footer">
                    <a href="assets.php" class="btn btn-secondary <?php echo $page == 'assets.php' ? 'active' : ''; ?>" id="Cancel-buttons">Cancel</a>
                    <button type="button" class="btn btn-danger" id="confirm-delete">Delete</button>
                </div>
            </div>
        </div>
    </div>

<!-- Success Modal -->
    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="success-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="success-modal-label">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="success-message"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="okModal()">Ok</button>
                </div>
            </div>
        </div>
    </div>

<!-- Error Modal -->
    <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="error-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="error-modal-label">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="error-message"></p>
                </div>
            </div>
        </div>
    </div>

<!-- View Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="asset_viewing"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                </div>
            </div>
        </div>
    </div>

<!-- Status Modal -->
    <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="statusModalLabel">Status</h5>
             
                </div>
                <div class="modal-body">
                    <p>Status: <span id="modalStatus"></span></p>
                    <p>Proceed into a maintenance task?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="showSecondModal()">Proceed</button>
                </div>
            </div>
        </div>
    </div>



<!-- Add Asset Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Asset</h5>
                 
                </div>
                <form action="addasset.php" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id" name="id" readonly style="background-color: #f0f0f0;">
                        </div>
                        <div class="mb-3">
                            <label for="unit_id" class="form-label">Unit ID</label>
                            <input type="text" class="form-control" id="unit_id" name="unit_id" placeholder="Enter Unit ID">
                        </div>
                        <div class="mb-3">
                            <label for="mobo" class="form-label">Motherboard</label>
                            <input type="text" class="form-control" id="mobo" name="mobo" placeholder="Enter Motherboard">
                        </div>
                        <div class="mb-3">
                            <label for="cpu" class="form-label">Processor</label>
                            <input type="text" class="form-control" id="cpu" name="cpu" placeholder="Enter Processor">
                        </div>
                        <div class="mb-3">
                            <label for="gpu" class="form-label">GPU</label>
                            <input type="text" class="form-control" id="gpu" name="gpu" placeholder="Enter GPU">
                        </div>
                        <div class="mb-3">
                            <label for="memory" class="form-label">Memory</label>
                            <input type="text" class="form-control" id="memory" name="memory" placeholder="Enter Memory">
                        </div>
                        <div class="mb-3">
                            <label for="ssd" class="form-label">SSD</label>
                            <input type="text" class="form-control" id="ssd" name="ssd" placeholder="Enter SSD">
                        </div>
                        <div class="mb-3">
                            <label for="hdd" class="form-label">HDD</label>
                            <input type="text" class="form-control" id="hdd" name="hdd" placeholder="Enter HDD">
                        </div>
                        <div class="mb-3">
                            <label for="dvd_cd" class="form-label">DVD/CD</label>
                            <input type="text" class="form-control" id="dvd_cd" name="dvd_cd" placeholder="Enter DVD/CD">
                        </div>
                        <div class="mb-3">
                            <label for="avr" class="form-label">AVR</label>
                            <input type="text" class="form-control" id="avr" name="avr" placeholder="Enter AVR">
                        </div>
                        <div class="mb-3">
                            <label for="power_supply" class="form-label">Power Supply</label>
                            <input type="text" class="form-control" id="power_supply" name="power_supply" placeholder="Enter Power Supply">
                        </div>
                        <div class="mb-3">
                            <label for="monitor" class="form-label">Monitor</label>
                            <input type="text" class="form-control" id="monitor" name="monitor" placeholder="Enter Monitor">
                        </div>
                        <div class="mb-3">
                            <label for="keyboard" class="form-label">Keyboard</label>
                            <input type="text" class="form-control" id="keyboard" name="keyboard" placeholder="Enter Keyboard">
                        </div>
                        <div class="mb-3">
                            <label for="mouse" class="form-label">Mouse</label>
                            <input type="text" class="form-control" id="mouse" name="mouse" placeholder="Enter Mouse">
                        </div>
                        <div class="mb-3">
                            <label for="camera" class="form-label">Camera</label>
                            <input type="text" class="form-control" id="camera" name="camera" placeholder="Enter Camera">
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <select name="location" id="location" class="form-select" required>
                                <option value="" disabled selected>Select an option</option>
                                <option value="LR1">LR1</option>
                                <option value="LR2">LR2</option>
                                <option value="MM3">MM3</option>
                                <option value="LR4">LR4</option>
                            </select>
                        </div> 
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="" disabled selected>Select an option</option>
                                <option value="Unavailable">Unavailable</option>
                                <option value="In Use">In Use</option>
                                <option value="Under Maintenance">Under Maintenance</option>
                            </select>
                        </div>    
                        <div class="mb-3">
                            <label for="recommendation" class="form-label">Recommendation</label>
                            <input type="text" class="form-control" id="recommendation" name="recommendation" placeholder="Enter Recommendation">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="adddata" class="btn btn-primary">Add Unit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Maintenance Modal -->
    <div class="modal fade" id="secondModal" tabindex="-1" role="dialog" aria-labelledby="maintenanceModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="maintenanceModalLabel">Maintenance Task</h5>
                </div>
                <form action="maintenanceupdate.php" method="POST">
                    <div class="modal-body">
                    <div class="mb-3">
    <label for="task_id" class="form-label">Task ID</label>
    <select class="form-control" id="task_id" name="task_id" disabled style="background-color: #f0f0f0;">
    </select>
</div>




                        <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <select class="form-control" id="id" name="id">
    <option value="" selected disabled>Select ID</option>
    <?php
    for ($i = 1; $i <= 10000; $i++) { // Change the range as needed
        echo "<option value='$i'>$i</option>";
    }
    ?>
</select>

                    </div>

                        <div class="mb-3">
                            <label for="task_type" class="form-label">Task Type</label>
                            <select name="task_type">
                                <option value=""selected disabled>Select an option</option>
                                <option value="Repair">Repair</option>
                                <option value="Maintenance Check">Maintenance Check</option>
                                <option value="Repaste">Repaste</option>
                                <option value="Clean">Clean</option>
                                <option value="Reformat">Reformat</option>
                                <option value="Software Update">Software Update</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="task_description" class="form-label">Task Description</label>
                            <input type="text" class="form-control" id="task_description" name="task_description" placeholder="Enter Description">
                        </div>
                        <div class="mb-3">
                            <label for="task_date" class="form-label">Task Date</label>
                            <input type="date" class="form-control" id="task_date" name="task_date">
                        </div>
                        <div class="mb-3">
                            <label for="assignto" class="form-label">Assign to:</label>
                            <input type="text" class="form-control" id="assignto" name="assignto" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- SIDEBAR -->
    <div class="sidebar">
        <div class="logo-details">
            <div>
                <div class="logo_name">AssetTrack<br><span class="role"><?= getUserRole(); ?></span></div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="dashboard.php" class="<?= $page == 'dashboard.php' ? 'active' : ''; ?>">
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
                        <a href="assetmovement.php" class="<?= $page == 'assetmovement.php' ? 'active' : ''; ?>">
                            <span class="links_name">Asset Movement</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="maintenance.php" class="<?= $page == 'maintenance.php' ? 'active' : ''; ?>">
                    <i class='bx bx-wrench'></i>
                    <span class="links_name">Maintenance</span>
                </a>
                <span class="tooltip">Maintenance</span>
            </li>
            <li>
                <a href="checkinout.php" class="<?= $page == 'checkinout.php' ? 'active' : ''; ?>">
                    <i class='bx bx-transfer'></i>
                    <span class="links_name">Check In/Check Out</span>
                </a>
                <span class="tooltip">Check In/Check Out</span>
            </li>
            <li>
                <a href="reports.php" class="<?= $page == 'reports.php' ? 'active' : ''; ?>">
                    <i class='bx bx-file'></i>
                    <span class="links_name">Reports</span>
                </a>
                <span class="tooltip">Reports</span>
            </li>
            <li>
                <a href="backnres.php" class="<?= $page == 'backnres.php' ? 'active' : ''; ?>">
                    <i class='bx bx-cloud-upload'></i>
                    <span class="links_name">Backup & Restore</span>
                </a>
                <span class="tooltip">Backup & Restore</span>
            </li>
            <li>
                <a href="settings.php" class="<?= $page == 'settings.php' ? 'active' : ''; ?>">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Settings</span>
                </a>
                <span class="tooltip">Settings</span>
            </li>
            <li>
                <a href="quickstart.php" class="<?= $page == 'quickstart.php' ? 'active' : ''; ?>">
                    <i class='bx bx-help-circle'></i>
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
                <a href="#" class="<?= $page == 'logout.php' ? 'active' : ''; ?>" onclick="openLogoutModal()">
                    <i class='bx bx-log-out' id="log_out"></i>
                </a>
            </li>
        </ul>
    </div>

<!-- HOME SECTION -->
    <section class="home-section">
        <header class="header">
            <div class="header-left">
                <div class="main-container">
                    <div class="main-title">
                        <p class="font-weight-bold">ASSET INVENTORY</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="card">
            <div class="card-header">
                <div class="row"> 
                    <button id="print-button">
                        <i class="material-icons">printer</i>
                    </button>
                    <?php
                        // Conditionally render the "Add Asset" button for Admin users
                        if ($isUserAdmin) {
                            echo '
                            <button class="btn btn-primary add-asset-btn" data-toggle="modal" data-target="#addModal">
                                Add Asset
                            </button>';
                        }
                    ?><br>
                    <!-- Import link -->
                    <div class="col-md-12 head">
                        <div class="float-right">
                            <a href="javascript:void(0);" class="btn btn-primary" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
                        </div>
                    </div>
                    <!-- CSV file upload form -->
                    <div class="col-md-12" id="importFrm" style="display: none;">
                        <form action="importData.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="file" />
                            <input type="submit" class="btn btn-primary" name="importSubmit" value="Upload">
                        </form>
                    </div>
                </div>
            </div>
                <div class="panel-body">
                    <b>Location:</b>
                    <select class="btn btn-default" id="locationFilter">
                        <option value="all">All</option>
                        <option value="LR1">LR1</option>
                        <option value="LR2">LR2</option>
                        <option value="MM3">MM3</option>
                        <option value="LR4">LR4</option>
                    </select>
                    <b>Status:</b>
                    <select class="btn btn-default" id="statusFilter">
                        <option value="all">All</option>
                        <option value="Unavailable">Unavailable</option>
                        <option value="In Use">In Use</option>
                        <option value="Under Maintenance">Under Maintenance</option>
                    </select>
                    <button class="btn btn-default clear-filters-btn" id=clearFilters>Clear</button>
                    <div id="column-toggles">
                            <label><input type="checkbox" class="toggle-column" data-column="0" checked>ID</label>
                            <label><input type="checkbox" class="toggle-column" data-column="1" checked>Unit ID</label>
                            <label><input type="checkbox" class="toggle-column" data-column="2" checked>Motherboard</label>
                            <label><input type="checkbox" class="toggle-column" data-column="3" checked>Processor</label>
                            <label><input type="checkbox" class="toggle-column" data-column="4" checked>GPU</label>
                            <label><input type="checkbox" class="toggle-column" data-column="5" checked>Memory</label>
                            <label><input type="checkbox" class="toggle-column" data-column="6" checked>SSD</label>
                            <label><input type="checkbox" class="toggle-column" data-column="7" checked>HDD</label>
                            <label><input type="checkbox" class="toggle-column" data-column="8" checked>DVD/CD</label>
                            <label><input type="checkbox" class="toggle-column" data-column="9" checked>AVR</label>
                            <label><input type="checkbox" class="toggle-column" data-column="10" checked>Power Supply</label>
                            <label><input type="checkbox" class="toggle-column" data-column="11" checked>Monitor</label>
                            <label><input type="checkbox" class="toggle-column" data-column="12" checked>Keyboard</label>
                            <label><input type="checkbox" class="toggle-column" data-column="13" checked>Mouse</label>
                            <label><input type="checkbox" class="toggle-column" data-column="14" checked>Camera</label>
                            <label><input type="checkbox" class="toggle-column" data-column="15" checked>Location</label>
                            <label><input type="checkbox" class="toggle-column" data-column="16" checked>Status</label>
                            <label><input type="checkbox" class="toggle-column" data-column="17" checked>Recommendation</label>
                            <label><input type="checkbox" class="toggle-column" data-column="18" checked>Actions</label>
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

                            $result = dispaly_data(); // Fixed function name
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
                        </tbody>
                    </table>
                </div> 
        </div>
    </section>
<!--JS-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.material.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
<!--status/maintenance-->
<script>
  // Add a click event listener to the clickable status cell
  $(document).ready(function() {
    // Attach a click event listener to all elements with the class 'clickable-status'
    $('.clickable-status').each(function() {
      $(this).on('click', function() {
        // Get the status text from the clicked cell
        var status = $(this).text().trim();

        // Show the first modal with the corresponding status
        showModal(status);
      });
    });

  // Function to show the second modal
  function showSecondModal() {
    // Close the first modal
    $('#statusModal').modal('hide');

    // Show the second modal
    $('#secondModal').modal('show');
  }

  // Function to show the first modal
  function showModal(status) {
    // Set the status in the modal
    $('#modalStatus').text(status);

    // Show the first modal
    $('#statusModal').modal('show');
  }
  $(document).on('click', '.clickable-status', function() {
    // Show the modal
    $('#statusModal').modal('show');
  });

  // Document ready function
  function closeModal() {
    // Hide the modal
    $('#statusModal').modal('hide');
  }

    // Attach a click event listener to the "Proceed" button in the first modal
    $('#statusModal').on('click', '.btn-primary', function() {
      // Show the second modal
      showSecondModal();
    });
  });
</script>
<!-- Show/hide CSV upload form -->
<script>
    function formToggle(ID){
        var element = document.getElementById(ID);
        if(element.style.display === "none"){
            element.style.display = "block";
        }else{
            element.style.display = "none";
        }
    }
</script>
<!--filter-->
<script>
    $(document).ready(function () {
        // Event listener for filter dropdowns
        $('#locationFilter, #statusFilter').on('change', function () {
            filterTable();
        });

        // Event listener for the "Clear Filters" button
        $('#clearFilters').on('click', function () {
            // Reset the values of all filter dropdowns
            $('#locationFilter, #statusFilter').val('all');

            // Reset all checkboxes in the column toggles
            $('#column-toggles input[type="checkbox"]').prop('checked', true);

            // Trigger the column visibility toggle function to update the table columns
            toggleColumns();

            // Trigger the filter function to update the table rows
            filterTable();
        });

        // Function to filter the table based on selected filters
        function filterTable() {
            var selectedLocation = $('#locationFilter').val();
            var selectedStatus = $('#statusFilter').val();

            $('#datatableid tbody tr').hide(); // Hide all rows initially

            $('#datatableid tbody tr').filter(function () {
                var rowLocation = $(this).find('td:nth-child(16)').text(); // Assuming location is in the sixteenth column
                var rowStatus = $(this).find('td:nth-child(17)').text(); // Assuming status is in the seventeenth column

                // Modify the conditions to use the JavaScript variables for filtering
                var locationMatch = selectedLocation === 'all' || rowLocation === selectedLocation;
                var statusMatch = selectedStatus === 'all' || rowStatus === selectedStatus;

                // Show rows that match all selected filters
                return locationMatch && statusMatch;
            }).show();
        }

        // Function to toggle column visibility based on the checkboxes
        function toggleColumns() {
            $('#column-toggles input[type="checkbox"]').each(function () {
                var column = $(this).data('column');
                var isChecked = $(this).is(':checked');
                $('#datatableid td:nth-child(' + (column + 1) + '), #datatableid th:nth-child(' + (column + 1) + ')')
                    .toggle(isChecked);
            });
        }

        // Event listener for the column toggles
        $('#column-toggles input[type="checkbox"]').on('change', function () {
            toggleColumns();
        });

        // Initial call to set the column visibility based on the default checkboxes state
        toggleColumns();
    });
</script>



<!--print-->
<script>
document.getElementById("print-button").addEventListener("click", function () {
    var fileName = prompt("Enter the file name:");

    if (fileName === null) {
        return;
    }

    var headerTitle = prompt("Enter the header (title) name:");

    if (headerTitle === null) {
        return;
    }

    var filePath = prompt("Choose the file path:") || "D:/Downloads";

    var tableToPrint = document.getElementById("datatableid").cloneNode(true);

    var actionsColumn = tableToPrint.querySelectorAll("th:nth-child(19), td:nth-child(19)");
    actionsColumn.forEach(function (element) {
        element.remove();
    });

    var serialNumberColumn = tableToPrint.querySelectorAll("th:nth-child(1), td:nth-child(1)");
    serialNumberColumn.forEach(function (element) {
        element.remove();
    });

    var purchaseDateColumn = tableToPrint.querySelectorAll("th:nth-child(3), td:nth-child(3)");
    purchaseDateColumn.forEach(function (element) {
        element.remove();
    });

    var printWindow = window.open("", "", "width=800, height=600");
    printWindow.document.open();

    printWindow.document.write("<html><head><title>Print</title>");
    printWindow.document.write("<style>");
    printWindow.document.write("body { font-family: 'Arial', sans-serif; margin: 20px; }");
    printWindow.document.write("h1 { font-size: 24px; text-align: center; margin-bottom: 20px; }");
    printWindow.document.write("table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }");
    printWindow.document.write("th, td { border: 1px solid #000; padding: 8px; text-align: center; }");
    printWindow.document.write("</style>");
    printWindow.document.write("</head><body>");

    printWindow.document.write("<h1>" + headerTitle + "</h1>");
    printWindow.document.write(tableToPrint.outerHTML);

    printWindow.document.write("</body></html>");
    printWindow.document.close();

    logPrintOperation(fileName, filePath, getCurrentDateTime());

    // Use the setTimeout function to allow the printWindow to finish rendering
    setTimeout(function () {
        downloadFileAsPDF(printWindow.document.body.innerHTML, fileName);
    }, 1000);
});


    function logPrintOperation(fileName, filePath, generatedDateTime) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "log-print.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log("Print operation logged successfully.");
            }
        };
        xhr.send("fileName=" + fileName + "&filePath=" + filePath + "&generatedDateTime=" + generatedDateTime);
    }

    function downloadFileAsPDF(content, fileName) {
        var element = document.createElement("div");
        element.innerHTML = content;

        html2pdf(element, {
            margin: 10,
            filename: fileName,
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: [1130.2, 315.9], orientation: 'landscape' }
        }).then(function (pdf) {
            pdf.save(fileName + ".pdf");
        });
    }

    function getCurrentDateTime() {
        var today = new Date();
        var year = today.getFullYear();
        var month = ("0" + (today.getMonth() + 1)).slice(-2);
        var day = ("0" + today.getDate()).slice(-2);
        var hours = ("0" + today.getHours()).slice(-2);
        var minutes = ("0" + today.getMinutes()).slice(-2);
        var seconds = ("0" + today.getSeconds()).slice(-2);

        return year + "-" + month + "-" + day + " " + hours + ":" + minutes + ":" + seconds;
    }
</script>
<!--datatable-->
<script>
  $(document).ready(function() {
    $('#datatableid').DataTable({
      lengthMenu: [
        [-1, 10, 25, 50],
        ['All', 10, 25, 50]
      ],
      columnDefs: [
        {
          targets: '_all',
          render: function(data, type, row) {
            // Add a custom class to the cell if it contains "Functional" or "Non-Functional"
            if (data === 'Unavailable') {
              return '<span class="unavailable-cell">' + data + '</span>';
            } else if (data === 'In Use') {
              return '<span class="inuse-cell">' + data + '</span>';
            } else if (data === 'Under Maintenance') {
              return '<span class="maintenance-cell">' + data + '</span>';
            } else {
              return data;
            }
          }
        }
      ]
    });
  });
</script>
<!--view-->
<script>
    $(document).ready(function() {
    var currentPage; // Variable to store the current page number

    // Add a click event handler for the "Cancel" button
    $(document).on('click', '.view-btn', function(e) {
        e.preventDefault(); // Prevent the default link behavior

        // Store the current page number
        currentPage = $('#datatableid').DataTable().page.info().page;

        // Get the asset_id from the closest table row
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
        return $(this).text();
        }).get();
        console.log(data);

        // Send an AJAX request to view.php
        $.ajax({
        type: 'POST',
        url: 'assetview.php',
        data: {
            'checking_viewbtn': true,
            'id': data[0], // Assuming the id is in the first column
        },
        success: function(response) {
            // Update the content of the asset_viewing div with the response
            $('.asset_viewing').html(response);

            // Show the viewModal
            $('#viewModal').modal('show');
        },
        error: function(error) {
            // Handle any errors here
            console.error('Error:', error);
        }
        });
    });

    // Event handler for when the modal is closed
    $('#viewModal').on('hidden.bs.modal', function () {
        // Reinitialize DataTables for the dynamically loaded content
        if (!$.fn.DataTable.isDataTable('#datatableid')) {
  $('#datatableid').DataTable();
}


        $('#datatableid').DataTable().page(currentPage).draw('page'); // Go back to the stored page
    });
    });
</script>
<!--CloseView-->
<script>
    function closeModal() {
        // Assuming you're using Bootstrap, you can use jQuery to close the modal
        // If you're not using jQuery, you may need to use a different method to close the modal
        $('#viewModal').modal('hide');
    }
</script>
<!--OkView-->
<script>
    function okModal() {
        // Assuming you're using Bootstrap, you can use jQuery to close the modal
        // If you're not using jQuery, you may need to use a different method to close the modal
        $('#success-modal').modal('hide');
    }
</script>
<!--logout-->
<script>
    // Function to open the logout modal
    function openLogoutModal() {
        $('#logoutModal').modal('show');
    }

    // Function to close the logout modal
    function closeLogoutModal() {
        $('#logoutModal').modal('hide');
    }
</script>
<!--editModal-->
<script>
    $(document).ready(function() {
        $("#openModalButton").click(function () {
            // Show the modal by targeting its ID
            $("#myModal").modal("show");
        });
        $(document).ready(function() {
    // Add a click event handler for the "Cancel" button
    $('#cancel-button').click(function(e) {
            e.preventDefault(); // Prevent the default link behavior
            $('#editmodal').modal('hide'); // Close the modal
        });
    });


    $(document).ready(function() {
    var currentPage; // Variable to store the current page number

    // Add a click event handler for the "Edit" button
    $(document).on('click', '.edit-btn', function() {
   
        // Store the current page number
        currentPage = $('#datatableid').DataTable().page.info().page;

        $('#editmodal').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
        return $(this).text();
    }).get();
    console.log(data);


          // Populate the form fields with the data
          $('#id').val(data[0]); // Start from index 0
          $('#unit_id').val(data[1]); // Start from index 0
        $('#mobo').val(data[2]);
        $('#cpu').val(data[3]);
        $('#gpu').val(data[4]);
        $('#memory').val(data[5]);
        $('#ssd').val(data[6]);
        $('#hdd').val(data[7]);
        $('#dvd_cd').val(data[8]); // Corrected the ID for 'dvd/cd'
        $('#avr').val(data[9]);
        $('#power_supply').val(data[10]);
        $('#monitor').val(data[11]);
        $('#keyboard').val(data[12]);
        $('#mouse').val(data[13]); // Corrected the index for 'mouse'
        $('#camera').val(data[14]); // Corrected the index for 'camera'
        $('#location').val(data[15]); // Corrected the index for 'location'
        $('#status').val(data[16]); // Corrected the index for 'status'
        $('#recommendation').val(data[17]); // Corrected the index for 'recommendation'
    });
});
    // Event handler for when the edit modal is closed
    $('#editmodal').on('hidden.bs.modal', function () {
        // Reinitialize DataTables for the dynamically loaded content
        if (!$.fn.DataTable.isDataTable('#datatableid')) {
  $('#datatableid').DataTable();
}

   
        $('#datatableid').DataTable().page(currentPage).draw('page'); // Go back to the stored page
    });
});


       $(document).ready(function() {
    // Add a click event handler for the "Cancel" button
    $('#Cancel-buttons').click(function(e) {
        e.preventDefault(); // Prevent the default link behavior
        $('#deletemodal').modal('hide'); // Close the modal
         });
    });

    $(document).ready(function() {
        $(document).on('click', '.delete-btn', function() {
            $('#deletemodal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            // Get the value of asset_id for delete
            var assetIdForDelete = data[0];

            $('#confirm-delete').off('click').on('click', function() {
                $.ajax({
                    type: 'POST',
                    url: 'delete.php',
                    data: { id: assetIdForDelete },
                    success: function(response) {
                        // Handle the success response here
                        $('#deletemodal').modal('hide');
                        var responseData = JSON.parse(response); // Parse JSON response

                        if (responseData.status === 'success') {
                            // If the deletion was successful, show success modal
                            $('#success-message').text('Record deleted successfully');
                            $('#success-modal').modal('show');
                            $tr.remove(); // Remove the row from the table
                        } else {
                            // If the deletion failed, show error modal
                            $('#error-message').text('Failed to delete record');
                            $('#error-modal').modal('show');
                        }
                    },
                    error: function() {
                        // Handle AJAX request error
                        $('#deletemodal').modal('hide');
                        $('#error-message').text('An error occurred while processing the request.');
                        $('#error-modal').modal('show');
                    }
                });
            });
        });
    });


</script>
<!--sidebar-->
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

    <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] != '')
    {
        ?>
    <script>
    swal({
    title: "<?php echo $_SESSION['status']; ?>",
    //text: "Data Inserted!",
    icon: "<?php echo $_SESSION['status_code']; ?>",
    button: "Ok!",
    });
    </script>
    <?php
    unset($_SESSION['status']); // Corrected syntax
    }
    ?>
</script>

<!--toggle boxes-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.toggle-column');
        const table = document.getElementById('datatableid');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const column = this.dataset.column;
                const isChecked = this.checked;

                Array.from(table.rows).forEach(row => {
                    if (isChecked) {
                        row.cells[column].style.display = '';
                    } else {
                        row.cells[column].style.display = 'none';
                    }
                });
            });
        });
    });
</script>

</body>
</html>


    

  








        


     