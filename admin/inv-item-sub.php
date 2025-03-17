<?php
include("../config/dbcon.php");


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create-inv'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];

    if (empty($name) || empty($description) || empty($quantity)) {
        header('location: create-inv-item.php?error=All fields are required');
        exit();
    }

    if (!is_numeric($quantity) || $quantity < 0) {
        header('location: create-inv-item.php?error=Quantity must be a non-negative number');
        exit();
    }

    $sql = "INSERT INTO inventory_items (name, description, quantity) VALUES ('$name', '$description', '$quantity')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location: inv-item.php?success=User Created Successfully');
        return false;
    }else {
        header('location: create-inv-item.php?error=Unable to create user');
        return false;
    }

}
   
