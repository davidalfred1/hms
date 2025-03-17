<?php
include("../config/dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit-inv'])) {
    $itemId = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];

    $query = "UPDATE inventory_items SET 
        name = '$name', 
        description = '$description', 
        quantity = $quantity 
        WHERE id = $itemId";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header('location: view-inventory.php?success=Inventory Item Updated Successfully');
        exit();
    } else {
        header('location: edit-inventory.php?error=Unable to Update Inventory Item');
        exit();
    }
}
?>