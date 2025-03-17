<?php
include('../config/dbcon.php');

if (isset($_POST['updateuser'])) {
    // Ensure the user ID is retrieved correctly
    $userId = $_POST['id'];

    // Retrieve form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    // Update query
    $query = "UPDATE users SET 
    firstname='$firstname', 
    lastname='$lastname', 
    username='$username', 
    email='$email', 
    role='$role' WHERE id=$userId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('location: viewuser.php?success=User Updated Successfully');
        exit();
    } else {
        header('location: useradd.php?error=Unable to Update User');
        exit();
    }
}
?>