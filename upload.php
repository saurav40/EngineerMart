<?php

   require 'common.php';

   $msg="";
   
   if(isset($_POST['submit']))
   {
       
       
//       $name = $_POST['name'];
//       $image = $_FILES['file'];
//       $category = $_POST['category'];
//       $price = $_POST['price'];
//       
//       
////       print_r($name);
////       echo "<br>";
//       
//       $image_name = $image['name'];
//       $image_erro = $image['error'];
//       $image_temp = $image['tmp_name'];
//       
//       $image_ext = explode('.',$image_name);
//       $image_check = strtolower(end($image_ext));
//       $image_ext_stored = array('png','jpg','jpeg');
//       
//       if(in_array($image_check,$image_ext_stored))
//       {
//           $destination_image = "images/".$image_name;
//           move_uploaded_file($image_temp, $destination_image);
//       }
//      // print_r($image_name);
//       
//       die;
       
        //$target = "images/".basename($_FILES['file']['name']);
       
       $name = $_POST['name'];
       $image = $_FILES['file']['name'];
       $category = $_POST['category'];
       $price = $_POST['price'];

       $target = "images/".$image;
      move_uploaded_file($_FILES['file']['tmp_name'], $target);
       
       $sql = "INSERT INTO products (name,image,category,price) VALUES ('$name', '$target', '$category', '$price')";
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
                    <h3>Dataset Upload</h3>
                </div>
                <div class="panel-body">
                    <p class="text-warning">Upload the dataset for sell</p>
                       <form  action="upload.php" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="size" value="1000000">
                            <div class="form-group">
                                <level for="product_name">Name</level>
                                <input type="test" class="form-control" id="product_name" name="name" required>
                            </div>
                            <div class="form-group">
                                <lebel for="file">Product Image</lebel>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                            <div class="form-group">
                                <lebel for="category">Category</lebel>
                                <input type="text" class="form-control" name="category" required>
                            </div>
							 <div class="form-group">
                                <lebel for="title">Title</lebel>
                                <input type="text" class="form-control" name="title" required>
                            </div>
							 <div class="form-group">
                                <lebel for="description">Description</lebel>
                                <textarea rows = "5" cols="50" name="description" placeholde="Enter Your product description..." required>
					
								</textarea>
                            </div>
                             <div class="form-group">
                                <lebel for="price">Product Price</lebel>
                                <input type="text" class="form-control"  name="price" required>
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