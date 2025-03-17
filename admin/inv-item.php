<?php 
include("includes/header.php");


// Fetch inventory items from the database
$query = "SELECT * FROM inventory_items";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$items = mysqli_fetch_all($result, MYSQLI_ASSOC); 

if (empty($items)) {
    echo "<p>No items found. <a href='create-inv-item.php'>Create a new item?</a></p>";
} else {
    echo "<h2>Inventory Items</h2>";
    echo "<p><a href='create-inv-item.php'>Add Item</a></p>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>";
    
    foreach ($items as $item) {
        echo "<tr>
                <td>" . $item['id'] . "</td>
                <td>" . $item['name'] . "</td>
                <td>" . $item['description'] . "</td>
                <td>" . $item['quantity'] . "</td>
                <td><a href='edit-inv-item.php?id=" . $item['id'] . "'>Edit</a> | <a href='delete-inv-item.php?delete_item_id=" . $item['id'] . "'>Delete</a></td>
            </tr>";
    }
    
    echo "</table>";
}

include("includes/footer.php");
