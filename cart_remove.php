<?php
    require 'db.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $delete_query="delete from users_items where user_id='$user_id' and prod_id='$item_id'";
    //echo $delete_query;
    $delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
    header('location: cart2.php');
?>