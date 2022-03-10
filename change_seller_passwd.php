<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Change Password</title>

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
		<br><br><br><br><br>
		<form method="POST" action="change_passwd.php">
		    <div class="form-group">
                <lebel for="old_password">Old Password</lebell>
                <input type="password" class="form-control" name="old_password" required>
            </div>
            <div class="form-group">
                 <lebel for="new">New Password</lebel>
                 <input type="password" class="form-control" name="new">
            </div>
            <div class="form-group">
                <lebel for="confirm">Confirm Password</lebel>
                <input type="text" class="form-control" name="confirm" required>
            </div>
			<button type="submit" name="sub" class="btn btn-primary">Submit</button>
		</form>
	</body>
		
</html>