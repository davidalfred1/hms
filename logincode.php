<?php
include ("config/dbcon.php");
session_start();

//Registration
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "INSERT INTO users (firstname, lastname, username, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        header('location: login.php?ok=Registration successful!');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


//Login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['loggedInUser'] = $user;
            header('Location: admin/index.php');
            exit();
        } else {
            header('Location: login.php?error=Invalid Password');
        }
    } else {
        header('Location: login.php?error=User not found');
    }
}

//Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php?ok=Logout Successful');
    exit();
}

