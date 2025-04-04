<?php
include("includes/header.php");
?>





<div class="newitem">
    <h2>Create New Inventory Item</h2> <br>
    <form method="post" action="inv-item-sub.php">

        <div class="inventory">
            <div class="invent">
                <label for="Inventory Item">Inventory Item:</label> <br> <br>
                <input type="text" id="inventoryitem" name="inventoryitem" required>
            </div>

            <div class="invente">
                <label for="quantity">Quantity:</label> <br> <br>
                <input type="number" id="quantity" name="quantity" required>
            </div>

        </div> <br> <br>


        <!-- <div>
            <input type="checkbox">
            <span>Fulfill Request</span>
        </div> <br> -->

        <div class="dlocation">

            <div>
                <label for="Delievery Location">Delievery Location:</label> <br> <br>
                <input type="text" id="delieveryloc" name="delieveryloc" required>
            </div> <br>

            <div>
                <label for="Delievery Aisle">Delievery Aisle:</label> <br> <br>
                <input type="text" id="delieveryais" name="delieveryais" required>
            </div> <br>

            <div>
                <label for="Bill To">Bill To:</label> <br> <br>
                <input type="text" id="billto" name="billto" required>
            </div>

        </div>

        
        <div class="invest">
            <input type="submit" value="Create Item" name="create-inv">
        </div>
    </form>

</div>
<?php
include("includes/footer.php");
?>