<?php 
include("includes/header.php");

// Query to get all items from the inventory
$query = "SELECT * FROM inventory_items";
$result = mysqli_query($conn, $query);

   if(!$result){
    echo "<p>Error retrieving items: " . mysqli_error($conn) . "</p>";
   }else {
    if (mysqli_num_rows($result) == 0) {
        echo "<p>No items found. <a href='create-inv-item.php'>Create a new item?</a></p>";
        } 
        else {
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
            
            while ($item = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $item['id'] . "</td>
                        <td>" . $item['name'] . "</td>
                        <td>" . $item['description'] . "</td>
                        <td>" . $item['quantity'] . "</td>
                        <td><a href='edit-item.php?id=" . $item['id'] . "'>Edit</a> | <a href='delete-item.php?id=" . $item['id'] . "'>Delete</a></td>
                    </tr>";
            }
            
            echo "</table>";
        }
    }

include("includes/footer.php");
?>

