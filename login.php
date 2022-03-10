<?php
   require'common.php';
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
       
        <div id="content" style="margin-top:120px;">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form role="form" action="login_script.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z]{2,3}$" required>
<!--                                       <div><?php echo $_GET['email_error'];  ?></div>-->
                                    </div>
                                    
                                    <div class="form-group"><!--pattern=".{6,}"-->
                                        <input type="password" class="form-control" placeholder="Password" name="password"  required>
<!--                                        <div><?php echo $_GET['password_error']; ?></div>-->
                                    </div>
									
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br>
									<div><a href="change_passwd_form.php"><b>forgot password ?</b></a></div>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="user_registration.php">Register</a></p></div>
                        </div>
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