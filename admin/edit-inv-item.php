<?php 
include("includes/header.php");


if (isset($_GET['id'])) {
    $itemId = $_GET['id'];

    $query = "SELECT * FROM inventory_items WHERE id = $itemId";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $item = mysqli_fetch_assoc($result);
    } else {
        header('location: view-inventory.php?error=Item Not Found');
        exit();
    }
} else {
    header('location: view-inventory.php?error=Invalid Item ID');
    exit();
}
?>

<h2>Edit Inventory Item</h2>
<form method="post" action="edit-inv-sub.php">
    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
    
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo ($item['name']); ?>" required><br><br>

    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required><?php echo ($item['description']); ?></textarea><br><br>

    <label for="quantity">Quantity:</label><br>
    <input type="number" id="quantity" name="quantity" value="<?php echo ($item['quantity']); ?>" required><br><br>

    <input type="submit" value="Update Item" name="edit-inv">
</form>

<?php 
include("includes/footer.php");
?>