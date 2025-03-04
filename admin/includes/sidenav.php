    <?php session_start(); ?>
    <nav id="sidenav" class="sidenav">
        <a id="close" onclick="closeSidenav()">x</a>
        <!-- Sidenav Links and Dropdowns -->
       <a onclick="toggleDropdown('inventory')">Inventory</a>
       <div id="inventory" class="dropdown-content">
            <a href="inventoryrequests.php">Requests</a>
            <a href="inventory-item.php">Items</a>
            <a href="inventoryreceived.php">Inventory Received</a>
            <a href="inventoryreports.php">Reports</a>
       </div>

       <a onclick="toggleDropdown('medication')">Medication</a>
       <div id="medication" 
       value="" 
       class="dropdown-content">
            <a href="inventoryrequests.php">
            Inventory Requests</a>
            <a href="inventoryrequests.php">
            Inventory Requests</a>
       </div>
       
       <a onclick="toggleDropdown('patients')">Patients</a>
       <div id="patients" class="dropdown-content">
            <a href="inventoryrequests.php">
            Inventory Requests</a>
            <a href="inventoryrequests.php">
            Inventory Requests</a>
       </div>
       <a onclick="toggleDropdown('imaging')">Imaging</a>
       <div id="imaging" class="dropdown-content">
            <a href="inventoryrequests.php">
            Inventory Requests</a>
            <a href="inventoryrequests.php">
            Inventory Requests</a>
       </div>
       <div class="loggedin">
          <div>Logged in as: <?php echo $_SESSION['loggedInUser']['username']; ?></div>
       </div>
    </nav>
    

        