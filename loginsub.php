<?php 
session_start();
include('config/dbcon.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
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
            header('Location: ../login.php?error=Invalid Password');
            exit();
        }
    } else {
        header('Location: ../login.php?error=User not found');
        exit();
    }
}