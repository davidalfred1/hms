<?php 
include("includes/header.php");
include("../config/functions.php");

//calling the create-inv-item function
$message = ""; // Initialize the message variable
$messageClass = ""; // Initialize the message class variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];

    // Call the function to create the inventory item and capture the result
    $message = createInventoryItem($name, $description, $quantity);
    $messageClass = strpos($message, 'Error') === false ? 'alert' : 'alert error';
}
?>

<?php if ($message): ?>
    <div class="<?php echo $messageClass; ?>">
        <?php echo $message; ?>
    </div>
<?php endif; ?>

<h2>Create New Inventory Item</h2>
<form method="post" action="create-inv-item.php">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required></textarea><br><br>
    
    <label for="quantity">Quantity:</label><br>
    <input type="number" id="quantity" name="quantity" required><br><br>
    
    <input type="submit" value="Create Item">
</form>

<?php 
include("includes/footer.php");
?>