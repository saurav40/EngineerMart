<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
			  <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> <b>Engineer Mart</b></a>    
                </div>
			    
			      <div class="search-box">
				  <form action="#" method="post">
                      <input class="search-txt" type="text" name="find" placeholder="Type to search" required> 
					</form>    
                  </div>
				  <div onclick="submitform()" style="color:blue;"></div>
                <div class="collapse navbar-collapse" id="myNavbar"> 
                    <ul class="nav navbar-nav navbar-right">
					    
                       <!-- <li><a href="upload.php"> Database Insert</a></li>-->
                        <li><a href="seller_login_form.php"> SaleOnEngMart</a></li>
                       <li><a href="user_registration.php"><span class="glyphicon glyphicon-user"></span> Create an Account</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>sign in</a></li>
                        <li><a href="temp.php"><span class="glyphicon glyphicoin-shopping-cart"></span> Cart
						   <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
							echo"(";
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
							echo")";
							
                        }else{
							echo "(";
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
							echo")";
                        }

                        ?>
						</a></li>
						
                    </ul>
                </div>
				</div>
            </div>
    </div>
  
        