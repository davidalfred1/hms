<?php 
    include("../config/dbcon.php");
    $currentPage = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HMS</title>
        <link rel="stylesheet" href="/HMS/admin/asset/css/main.css?v=<?php echo time();?>">
    </head>
    <body>
    <?php 
        session_start();
        if (!isset($_SESSION['loggedInUser'])) {
            header('Location: ../login.php');
            exit();
        }
    ?>
    <?php include("navbar.php"); ?>    
    <?php include("sidenav.php"); ?>
    
    <main id="main">
        