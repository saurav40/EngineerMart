<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> <b>Engineer Mart</b></a>    
                </div>
				
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href = "settings.html"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
						<li><a href="profile.php"><?php echo $_SESSION['uname']." ".$_SESSION['lname'];?></a></li>
                        <li><a href = "destroy.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
						<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart 
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