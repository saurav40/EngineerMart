<?php
//     $con = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
     require'common.php';
    
     session_start();

     $first_name = $_GET['first_name'];
     $user_id = $_SESSION['id'];
     $update_first_name_query = "UPDATE users SET first_name = '$first_name' WHERE id = '$user_id'";
     $update_first_name_result = mysqli_query($con, $update_first_name_query)
         or die(mysqli_error($con));

     echo "Name Updated";
?>