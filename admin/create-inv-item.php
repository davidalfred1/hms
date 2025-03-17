<?php 
include("includes/header.php");
?>


<h2>Create New Inventory Item</h2>
<form method="post" action="inv-item-sub.php">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required></textarea><br><br>
    
    <label for="quantity">Quantity:</label><br>
    <input type="number" id="quantity" name="quantity" required><br><br>
    
    <input type="submit" value="Create Item" name="create-inv">
</form>

<?php 
include("includes/footer.php");
?>