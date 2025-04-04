<?php 
include("includes/header.php");


if (isset($_GET['id'])) {
    $itemId = $_GET['id'];

    $query = "SELECT * FROM inventory_items WHERE id = $itemId";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $item = mysqli_fetch_assoc($result);
    } else {
        header('location: inv-item.php?error=Item Not Found');
        exit();
    }
} else {
    header('location: inv-item.php?error=Invalid Item ID');
    exit();
}
?>

<h2>Edit Inventory Item</h2>
<form method="post" action="edit-inv-sub.php">
    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
    
    <label for="Inventory Item">Inventory Item:</label><br>
    <input type="text" id="inventoryitem" name="inventoryitem" value="<?php echo ($item['inventoryitem']); ?>" required><br><br>

    <!-- <label for="description">Description:</label><br>
    <textarea id="quantity" name="quantity" required><?php echo ($item['description']); ?></textarea><br><br> -->

    <label for="quantity">Quantity:</label><br>
    <input type="number" id="quantity" name="quantity" value="<?php echo ($item['quantity']); ?>" required><br><br>

    <label for="Delievery Location">Delievery Location:</label><br>
    <input type="text" id="delieveryloc" name="delieveryloc" value="<?php echo ($item['delieveryloc']); ?>" required><br><br>

    <label for="Delievery Aisle">Delievery Aisle:</label><br>
    <input type="text" id="delieveryais" name="delieveryais" value="<?php echo ($item['delieveryais']); ?>" required><br><br>

    <label for="Billto">Bill To:</label><br>
    <input type="text" id="billto" name="billto" value="<?php echo ($item['billto']); ?>" required><br><br>

    <input type="submit" value="Update Item" name="edit-inv">
</form>

<?php 
include("includes/footer.php");
?>