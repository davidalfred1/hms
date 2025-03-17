<?php 
include("includes/header.php");
include("../config/dbcon.php"); 


$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn)); 
}

if (mysqli_num_rows($result) == 0) {
    echo "<p>No users found. <a href='useradd.php'>Add a new user?</a></p>";
} else {
    echo "<h2>Users</h2>";
    echo "<p><a href='useradd.php'>Add User</a></p>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>";
    
    while ($user = mysqli_fetch_assoc($result)) { // Use while loop to fetch rows
        echo "<tr>
                <td>" . $user['id'] . "</td>
                <td>" . $user['firstname'] . "</td>
                <td>" . $user['lastname'] . "</td>
                <td>" . $user['username'] . "</td>
                <td>" . $user['email'] . "</td>
                <td>" . $user['role'] . "</td>
                <td><a href='edit-user.php?userid=" . $user['id'] . "'>Edit</a> | <a href='deleteuser.php?delete_user_id=" . $user['id'] . "'>Delete</a></td>
            </tr>";
    }
    
    echo "</table>";
}

include("includes/footer.php");