<?php
   require'common.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Seller Registration</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="css/style.css" rel="stylesheet">
        
       
        
    </head>

    <body>
        <!-- Header -->
        <?php
            
                require 'header.php';
        ?>
        <!--Header end-->
      
                
<!-- sign up content -->
<br><br><br><br><br>
<div id="content">
 <div class="container-fluid decor_bg" id="login-panel">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    <h3>SELLER REGISTRATION</h3>
                </div>
                <div class="panel-body">
                    <p class="text-warning">Sign-Up to make a purchase</p>
                       <form  action="signup_script.php" method="POST" >
                            <div class="form-group">
                                <level for="name">Full Name</level>
                                <input type="test" class="form-control" name="name" required>
                            </div>
                            <!--<div class="form-group">
                                <lebel for="last_name">Last Name</lebel>
                                <input type="text" class="form-control" name="last_name">
                            </div>-->
                            <div class="form-group">
                                <lebel for="phone">Phone Number</lebel>
                                <input type="text" class="form-control" maxlength="10" size="10" name="phone" required>
                            </div>
                             <div class="form-group">
                                <lebel for="email">Email</lebel>
                                <input type="email" class="form-control"  name="email" required>
                            </div>
							<div class="form-group">
                                <lebel for="password">Password</lebel>
                                <input type="password" class="form-control"  name="password" required>
                            </div>
                            <div class="form-group">
                                <lebel for="address">Address</lebel>
                                <input type="text" class="form-control" placeholder="NIT Patna, Bihar, India" name="address">
                            </div>
                            <div class="form-group">
                                <lebel for="pinCode">Pin Code</lebel>
                                <input type="text" class="form-control" maxlength="6" size="6" name="pinCode" placeholder="800006">
                            </div>
                            
                           
                            <button type="submit" name="save" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>    
        </div>
    </div>
</div>
</div>
        <br><br><br>
        
         <?php
        
        require 'footer.php';
        
        ?>

</body>
</html>



