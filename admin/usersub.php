<?php 
include('../config/dbcon.php');


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Adduser'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql = "INSERT INTO users (firstname, lastname, username, email, password, role) VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$role')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location: viewuser.php?success=User Created Successfully');
        return false;
    }else {
        header('location: useradd.php?error=Unable to create user');
        return false;
    }

}