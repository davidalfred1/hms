<?php 
include('config/dbcon.php');

// Logout User
    unset($_SESSION["loggedInUser"]);
    session_destroy("loggedInUser");
    header('Location: login.php?ok=Logout Successful');
    exit();
