<?php

$con = mysqli_connect("localhost","root","","ecommerce")
    or die(mysqli_error($con));

$select_query = "select id,first_name,email from users";
$select_query_result = mysqli_query($con, $select_query)
    or die(mysqli_error($con));

//$total_rows_feteched = mysqli_num_rows($select_query_result);
//echo $total_rows_feteched;

$row = mysqli_fetch_array($select_query_result);


echo $row[0]."<br/>";
echo $row[1]."<br/>";
echo $row[2]."<br/>";

$row = mysqli_fetch_array($select_query_result);
echo $row["id"]."<br/>";
echo $row['first_name']."<br/>";
echo $row['email']."<br/>";

$row = mysqli_fetch_array($select_query_result);
echo $row["id"]."<br/>";
echo $row['first_name']."<br/>";
echo $row['email']."<br/>";

?>