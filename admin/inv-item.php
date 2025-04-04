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
    echo "<p>No items found. <a href='create-inv-item.php'>Create a new request?</a></p>";
} else {
    echo "<div class='newitem'>";
    echo "<h2>Inventory Items</h2>";
    echo "<p  class='newa'><a href='create-inv-item.php'>Add Item</a></p>";
    echo "<table class='title'>
            <tr>
                <th>ID</th>
                <th>Inventory Item</th>
                <th>Quantity</th>
                <th>Delievery Location</th>
                <th>Delievery Aisle</th>
                <th>Bill To</th>
                <th>Action</th>
                
            </tr>";

    foreach ($items as $item) {
        echo "
        <tr>
                <td>" . $item['id'] . "</td>
                <td>" . $item['inventoryitem'] . "</td>
                <td>" . $item['quantity'] . "</td>
                <td>" . $item['delieveryloc'] . "</td>
                <td>" . $item['delieveryais'] . "</td>
                <td>" . $item['billto'] . "</td>
                <td><a class='bod' href='edit-inv-item.php?id=". $item['id'] . "'>Edit</a>  <a class='bode' href='delete-inv-item.php?delete_item_id=" . $item['id'] . "'>Delete</a></td>
            </tr>
            </div>";
            
    }

    echo "</table>";
    
}

include("includes/footer.php");
