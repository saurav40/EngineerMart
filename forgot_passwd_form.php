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
		<form method="POST" action="forgot.php">
		    <div class="form-group">
                <lebel for="email">Email</lebell>
                <input type="emai" class="form-control" name="email" required>
            </div>
			<button type="submit" name="save" class="btn btn-primary">Submit</button>
		</form>
	</body>
		
</html>