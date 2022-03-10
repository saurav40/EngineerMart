<?php

$con = mysqli_connect("localhost","root","","ecommerce")
    or die(mysqli_error($con));

$select_query = "select id,first_name,email from users";
$select_query_result = mysqli_query($con, $select_query)
    or die(mysqli_error($con));

//$total_rows_feteched = mysqli_num_rows($select_query_result);
//echo $total_rows_feteched;

//$row = mysqli_fetch_array($select_query_result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Login</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap_min.js"></script>
    </head>

    <body style="padding-top: 50px;">
       
      <!-- Header -->
        <?php
            
                require 'header.php';
        ?>
        <!--Header end-->
        
        <div class="container col-lg-12" >
            <?php while($row = mysqli_fetch_array($select_query_result)){ ?>
    
            <div class="container">
                
            <div class="row">
               <div class = "col-lg-12"><h4>User</h4></div>
            </div>
            
            <div class="row">
               <div class = "col-xs-2">ID</div>
               <div class = "col-xs-10"><?php echo $row['id']; ?></div> 
            </div>
            
            <div class="row">
               <div class = "col-xs-2">First Name</div>
               <div class = "col=xs-10"><?php echo $row['first_name']; ?></div>
            </div>
            
            <div class="row">
               <div class = "col-xs-2">Email</div>
               <div class = "col-xs-10"><?php echo $row['email']; ?></div>
            </div>
            
            <div class = "row">
                <div class = "col-xs-2">Products</div>
                <div class = "col-xs-10"><?php echo numbersOfProductsPurchased($con,$row['id']); ?></div>
            </div>
                
            </div>
            <hr>
            <?php } ?>
            
        
        </div>
        
    </body>
    
</html>

<?php
  function numbersOfProductsPurchased($con,$user_id)
  {
      $userProducts = "select id from users_products where user_id = '$user_id'";
      $userProductsResults = mysqli_query($con,$userProducts);
      
      $numbersOfProducts = mysqli_num_rows($userProductsResults);
      return $numbersOfProducts;
  }