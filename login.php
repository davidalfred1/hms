<?php
include 'config/dbcon.php';
?>

<form method="POST" action="loginsub.php">
    Username: <input type="text" id="username" name="username" required><br>
    Password: <input type="password" id="password" name="password" required><br>
    <button type="submit" name="login">Login</button>
</form>