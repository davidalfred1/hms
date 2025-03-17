<?php 
include("includes/header.php");
include("../config/dbcon.php");

// Ensure $userId and $user are properly defined
if (isset($_GET['userid'])) {
    $userId = $_GET['userid'];

    // Fetch user details from the database
    $query = "SELECT * FROM users WHERE id = $userId";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        header('location: viewuser.php?error=User Not Found');
        exit();
    }
} else {
    header('location: viewuser.php?error=Invalid User ID');
    exit();
}
?>

<h2>Edit User</h2>
<form method="post" action="edit-usersub.php">
    <input type="hidden" name="id" value="<?= $userId; ?>">

    <label for="firstname">First Name:</label><br>
    <input type="text" id="firstname" name="firstname" value="<?= htmlspecialchars($user['firstname']); ?>" required><br><br>

    <label for="lastname">Last Name:</label><br>
    <input type="text" id="lastname" name="lastname" value="<?= htmlspecialchars($user['lastname']); ?>" required><br><br>

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" value="<?= htmlspecialchars($user['username']); ?>" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']); ?>" required><br><br>

    <label for="role">Role:</label><br>
    <select id="role" name="role">
        <option value="data_entry" <?= $user['role'] == 'data_entry' ? 'selected' : ''; ?>>Data Entry</option>
        <option value="doctor" <?= $user['role'] == 'doctor' ? 'selected' : ''; ?>>Doctor</option>
        <option value="finance" <?= $user['role'] == 'finance' ? 'selected' : ''; ?>>Finance</option>
        <option value="finance_manager" <?= $user['role'] == 'finance_manager' ? 'selected' : ''; ?>>Finance Manager</option>
        <option value="hospital_administrator" <?= $user['role'] == 'hospital_administrator' ? 'selected' : ''; ?>>Hospital Administrator</option>
        <option value="inventory_manager" <?= $user['role'] == 'inventory_manager' ? 'selected' : ''; ?>>Inventory Manager</option>
        <option value="imaging_technician" <?= $user['role'] == 'imaging_technician' ? 'selected' : ''; ?>>Imaging Technician</option>
        <option value="lab_technician" <?= $user['role'] == 'lab_technician' ? 'selected' : ''; ?>>Lab Technician</option>
        <option value="medical_records_officer" <?= $user['role'] == 'medical_records_officer' ? 'selected' : ''; ?>>Medical Records Officer</option>
        <option value="nurse" <?= $user['role'] == 'nurse' ? 'selected' : ''; ?>>Nurse</option>
        <option value="nurse_manager" <?= $user['role'] == 'nurse_manager' ? 'selected' : ''; ?>>Nurse Manager</option>
        <option value="patient_administration" <?= $user['role'] == 'patient_administration' ? 'selected' : ''; ?>>Patient Administration</option>
        <option value="pharmacist" <?= $user['role'] == 'pharmacist' ? 'selected' : ''; ?>>Pharmacist</option>
        <option value="social_worker" <?= $user['role'] == 'social_worker' ? 'selected' : ''; ?>>Social Worker</option>
        <option value="system_administrator" <?= $user['role'] == 'system_administrator' ? 'selected' : ''; ?>>System Administrator</option>
        <option value="user_administrator" <?= $user['role'] == 'user_administrator' ? 'selected' : ''; ?>>User Administrator</option>
        <option value="cashier" <?= $user['role'] == 'cashier' ? 'selected' : ''; ?>>Cashier</option>
    </select><br><br>

    <input type="submit" value="Update User" name="updateuser">
</form>

<?php 
include("includes/footer.php");
?>