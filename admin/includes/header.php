<?php 
    include("../config/dbcon.php");

    $currentPage = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    session_start();
    // Check if user is logged in
    if (!isset($_SESSION['loggedInUser'])) {
        header('Location: ../login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/HMS/admin/asset/css/main.css?v=<?php echo time();?>">
</head>
<body>

    <?php include("navbar.php"); ?>    
    <?php include("sidenav.php"); ?>
    
    <main id="main">
