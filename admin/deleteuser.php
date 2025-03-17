<?php
include('../config/dbcon.php');


if (isset($_GET['delete_user_id'])) {
    $userId = $_GET['delete_user_id'];
    $sql = "DELETE FROM users WHERE id=$userId";
    $query = mysqli_query($conn, $sql);
    if($query){
        header('location: viewuser.php?success=User Successfully Deleted!');
        exit();
    }
}