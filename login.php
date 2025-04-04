<?php
include 'config/dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/HMS/admin/asset/css/login.css?v=<?php echo time();?>">
</head>
<body>
<div class= "container1">
    
    <div class="form-box">
    
    <h1>Sign Up</h1>
    
    <form method="POST" action="loginsub.php">
        <div class="input-group">

            <div class="input-feild">
                <i class="fa-solid fa-user"></i>
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
    
            <div class=input-feild>
            <i class="fa-solid fa-envelope"></i>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
   
            <button type="submit" class="btn" name="login">Login</button>
    </form>

</div>
</div>
</div>
</body>
</html>



