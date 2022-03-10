<?php
 require 'common.php';
if(isset($_SESSION['uname']))
{	
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
       // print_r($_SESSION['cart']);
    }
 
}
}
else
{
	echo "<script>alert('You have to login first to add item in cart..!')</script>";
   echo "<script>window.location = 'login.php'</script>";
}

?>
<html>
<head>
<script>
       function goBack() {
       window.history.go();
       }
     </script>
</head>
<body>
     <div> <button onclick="goBack()">Go back</button>
</body>
</html>