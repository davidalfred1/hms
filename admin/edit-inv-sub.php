<?php
include("../config/dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit-inv'])) {
    $itemId = $_POST['id'];
    $inventoryitem = $_POST['inventoryitem'];
    $quantity = $_POST['quantity'];
    $delieveryloc = $_POST['delieveryloc'];
    $delieveryais = $_POST['delieveryais'];
    $billto = $_POST['billto'];

    $query = "UPDATE inventory_items SET 
        inventoryitem = '$inventoryitem', 
        quantity =  '$quantity', 
        delieveryloc = '$delieveryloc', 
        delieveryais = '$delieveryais', 
        billto = '$billto'
        WHERE id = $itemId";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header('location: inv-item.php?success=Inventory Item Updated Successfully');
        exit();
    } else {
        header('location: edit-inv-item.php?error=Unable to Update Inventory Item');
        exit();
    }
}
