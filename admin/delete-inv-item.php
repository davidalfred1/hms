<?php
include("../config/dbcon.php");

if (isset($_GET['delete_item_id'])) {
    $itemId = $_GET['delete_item_id'];
    $deleteQuery = "DELETE FROM inventory_items WHERE id='$itemId'";
    $result = mysqli_query($conn, $deleteQuery);

    if ($result) {
        header('location: inv-item.php?success=Inventory Item Successfully Deleted!');
        exit();
    } else {
        header('location: inv-item.php?error=Failed to Delete Inventory Item!');
        exit();
    }
}
?>