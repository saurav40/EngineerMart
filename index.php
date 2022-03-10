<?php
   require'common.php';
  if(isset($_SESSION['uname'])){
	header("Location: welcome.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Engineer Mart</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css"   rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
		<script src="https://kit.fontawesome.com/6ec6c95d3a.js" crossorigin="anonymous"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap_min.js"></script>
    </head>

    <body style="padding-top: 50px;">
        <!-- Header -->
		<header>
        <?php
			  require 'header.php';?>
			 
		</header>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We share because We care</h1>
                            <h4>we sell old Engineering Product<h4>
                            <h4>Flat 60% OFF on all Products<h4>
                            <br/>
                            <a  href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
			
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="show_product.php" >
                            <div class="thumbnail">
                                <img src="img/book.jpg" alt="">
                                <div class="caption">
                                    <h3>Books</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="stationary.php" >
                            <div class="thumbnail">
                                <img src="img/stationary.jpg" alt="">
                                <div class="caption">
                                    <h3>Stationary</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="electronic.php" >
                            <div class="thumbnail">
                                <img src="img/gadgets.jpg" alt="">
                                <div class="caption">
                                    <h3>Electronic Gadgets</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        
                        
         <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="pc.php" >
                            <div class="thumbnail">
                                <img src="img/pcAndMobile.jpg" alt="">
                                <div class="caption">
                                    <h3>PC & Mobiles</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="sports.php" >
                            <div class="thumbnail">
                                <img src="img/sports.jpg" alt="">
                                <div class="caption">
                                    <h3>sports</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="other.php" >
                            <div class="thumbnail">
                                <img src="img/other.png" alt="">
                                <div class="caption">
                                    <h3>Others</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--Item categories listing end-->
        </div>
     </form>
        <!--Footer-->
           <?php
                        include 'footer.php';
                        
           ?>
        <!--Footer end-->

    </body> 
</html>