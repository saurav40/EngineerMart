<?php
    require 'common.php';
	if($_POST['submit'])
	{
	    $image = $_FILES['file']['name'];
		$target = "images/".$image;
		move_uploaded_file($_FILES['file']['tmp_name'], $target);
		$id=$_POST['id'];
		$sql = "INSERT INTO products (image) VALUES ('$target') where id='$id'";
        mysqli_query($con, $sql);
	    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
           $msg = "Dataset uploaded Successfully";
       }
       else
       {
           $msg = "There was a Problem in uploading Dataset";
       }
	}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>User Registration</title>

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
                    <h3>Image Upload</h3>
                </div>
                <div class="panel-body">
                    <p class="text-warning">Upload the dataset for sell</p>
                       <form  action="change_product_image.php" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="size" value="1000000">
                            <div class="form-group">
                                <lebel for="product_nam">Your Id</lebel>
                                <input type="number_format" class="form-control"  name="id" required>
                            </div>
                            <div class="form-group">
                                <lebel for="file">Product Image</lebel>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                            
                           
<!--                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>-->
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