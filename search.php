<?php
  require 'common.php';
  require 'component.php';
	
 
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
            <hr>
            
       
         <div class="container">
        <div class="row text-center py-5">
            <?php
			    $c=0;
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['name'], $row['price'], $row['image'], $row['id']);
					$c=$c+1;
					if($c>6)
					{
						echo "<br><br>";
						$c=0;
					}	
                }
            ?>
        </div>
</div>
        
        </div>
            
            

            
        </div>
        
        
        
        
        
        
        
         <!-- Footer -->
       <?php
        
        require 'footer.php';
        
        ?>
        
    </body>
	</html> 