<?php
include("includes/header.php");
?>

<h2>Add New User</h2>
<form method="post" action="usersub.php">
    <label for="firstname">First Name:</label><br>
    <input type="text" id="firstname" name="firstname" required><br><br>

    <label for="lastname">Last Name:</label><br>
    <input type="text" id="lastname" name="lastname" required><br><br>

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    
    
    <label for="password">Password:</label><br>
    <div class="input-box">
        <input type="password" id="passd" name="password" required>
        <i class="fa-solid fa-eye-slash" id="eyeicon"></i>
    </div>


    <!-- <i class="fa-solid fa-eye-slash"></i> -->


    <!-- <i class="fa-solid fa-eye"></i> -->
    <label for="role">Role:</label><br>
    <select id="role" name="role">
        <option value="data_entry">Data Entry</option>
        <option value="doctor">Doctor</option>
        <option value="finance">Finance</option>
        <option value="finance_manager">Finance Manager</option>
        <option value="hospital_administrator">Hospital Administrator</option>
        <option value="inventory_manager">Inventory Manager</option>
        <option value="imaging_technician">Imaging Technician</option>
        <option value="lab_technician">Lab Technician</option>
        <option value="medical_records_officer">Medical Records Officer</option>
        <option value="nurse">Nurse</option>
        <option value="nurse_manager">Nurse Manager</option>
        <option value="patient_administration">Patient Administration</option>
        <option value="pharmacist">Pharmacist</option>
        <option value="social_worker">Social Worker</option>
        <option value="system_administrator">System Administrator</option>
        <option value="user_administrator">User Administrator</option>
        <option value="cashier">Cashier</option>
    </select><br><br>

    <input type="submit" value="Add User" name="Adduser">
</form>

<script>
let eyeicon = document.getElementById("eyeicon");
let passd = document.getElementById("passd");

eyeicon.onclick = function(){
    if(passd.type == 'password'){
        passd.type = 'text';
        this.classList.toggle('fa-solid fa-eye-slash');
        
        
    }else{
        passd.type = 'password';
        this.classList.toggle('fa-solid fa-eye');
    }
}
</script>
<?php
include("includes/footer.php");
?>