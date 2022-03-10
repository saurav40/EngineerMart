<?php
   require'common.php';
   require_once ('component.php');
    if(isset($_POST['find']))
	{ $s=mysqli_real_escape_string($con,$_POST['find']);
	 $s=$_POST['find'];
	 $q="select *from products where category LIKE '%$s%' OR title LIKE '%$s%' OR description LIKE '%$s%' OR Author_name LIKE  '%$s%'";
	 $result=mysqli_query($con,$q)  or die(mysqli_error($con));
	}
	else{
   $select_query = "select id,name,image,price from products";
   $result = mysqli_query($con, $select_query)
    or die(mysqli_error($con)); 
	}	

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Engineer Mart Products</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap_min.js"></script>
        
    <!-- <link href="css/product.css" rel="stylesheet">-->
		
		<script>
function submitform()
{
document.getElementById("myForm").submit();
alert("your form submitted");
}
</script>
    </head>

    <body style="padding-top: 50px;">
       
      <!-- Header -->
        <?php
		       if(isset($_SESSION['uname'])){
				include 'header2.php';
			   }
			   else
			   {
				   include 'header.php';
			   }
        ?>
        <!--Header end-->
        
        
        <div class="container" id="content">

            <!-- Jumbotron Header -->
            <br><br><br>
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Engineer Mart Store!</h1>
                <p>We have the best Books, Stationery, Electronics Gadgets, Sports, PC & Mobiles and others for you. No need to hunt around, we have all in one place.</p>

            </div>
        </div>
        <div class="container-fluid bg-gray">
            <div class="container mt-5">
                <div class="row">
                    <?php while($row=mysqli_fetch_assoc($result))
                        component($row['name'], $row['price'], $row['image'], $row['id']);
                    ?>
                </div>
            </div>
       </div>
        
        
        
        
        
        
        
         <!-- Footer -->
       <?php
        
        require 'footer.php';
        
        ?>
        
    </body>
</html>