   
    <nav id="sidenav" class="sidenav">
        <a id="close" onclick="closeSidenav()">x</a>
        <!-- Sidenav Links and Dropdowns -->
       <a onclick="toggleDropdown('inventory')">Inventory</a>
       <div id="inventory" class="dropdown-content">
            <a href="inv-item.php">Items</a>
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
       <a onclick="toggleDropdown('administration')">Administration</a>
       <div id="administration" class="dropdown-content">
            <a href="useradd.php">
            New User</a>
            <a href="viewuser.php">
            View Users</a>
       </div>
       <div class="loggedin">
         <a href="../logout.php">Logout</a>
          <div>Logged in as: <?php echo $_SESSION['loggedInUser']['username']; ?></div>
       </div>
    </nav>
    

        