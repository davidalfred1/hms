<?php
require("dbcon.php");


//create-inventory-item function
function createInventoryItem($name, $description, $quantity) {
    global $conn; 
    $sql = "INSERT INTO inventory_items (name, description, quantity) VALUES ('$name', '$description', $quantity)";

   
    if (mysqli_query($conn, $sql)) {
        $message = "New inventory item created successfully";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    return $message; 
}
?>
