<?php
include("../config/dbcon.php");


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create-inv'])) {
    $inventoryitem = $_POST['inventoryitem'];
    $quantity = $_POST['quantity'];
    $delieveryloc = $_POST['delieveryloc'];
    $delieveryais = $_POST['delieveryais'];
    $billto = $_POST['billto'];


    if (empty($inventoryitem) || empty($quantity) || empty($delieveryloc) || empty($delieveryais) || empty($billto)) {
        header('location: create-inv-item.php?error=All fields are required');
        exit();
    }

    if (!is_numeric($quantity) || $quantity < 0) {
        header('location: create-inv-item.php?error=Quantity must be a non-negative number');
        exit();
    }

    $sql = "INSERT INTO inventory_items (inventoryitem, quantity, delieveryloc, delieveryais, billto) VALUES ('$inventoryitem', '$quantity', '$delieveryloc', '$delieveryais', '$billto')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location: inv-item.php?success=User Created Successfully');
        return false;
    }else {
        header('location: create-inv-item.php?error=Unable to create user');
        return false;
    }

}
   
