<?php 

//$con = mysqli_connect("localhost","root","","ecommerce")
//  or  die(mysqli_error($con));
require'common.php';

if(isset($_POST['submit'])){
$first_name = mysqli_real_escape_string($con,$_POST['first_name']); 
$last_name = mysqli_real_escape_string($con,$_POST['last_name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$phone = $_POST['phone'];
$address = mysqli_real_escape_string($con,$_POST['address']);
$pinCode = $_POST['pinCode'];
$pass = $_POST['password'];
$user_registration_query = "insert into users (first_name,last_name,phone,email,password,address,pinCode) values ('$first_name','$last_name','$phone','$email','$pass','$address','$pinCode')";
$check="select *from users where email='$email'";
$result= mysqli_query($con,$check); 
if(mysqli_num_rows($result)==1) 
{	
    echo "User alreay Exist";
	header('location:login.php');
}                   
else{					
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
   
echo "User Registration Successfull !" ;
    
    $_SESSION['email'] = $email ;
    $_SESSION['id'] = mysqli_insert_id($con);
}
}
if(isset($_POST['save']))
{
$name = mysqli_real_escape_string($con,$_POST['name']); 
//$last_name = mysqli_real_escape_string($con,$_POST['last_name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$phone = $_POST['phone'];
$address = mysqli_real_escape_string($con,$_POST['address']);
$pinCode = $_POST['pinCode'];
$pass = $_POST['password'];
$user_registration_query = "insert into seller (name,phone,email,password,address,pinCode)values('$name','$phone','$email','$pass','$address','$pinCode')";
$check="select *from seller where email='$email'";
$result= mysqli_query($con,$check); 
if(mysqli_num_rows($result)==1) 
{	
    echo "User alreay Exist";
	header('location:seller_login_form.php');
}
else
{
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
   
echo "Seller Registration Successfull !" ;
    
    $_SESSION['email'] = $email ;
	$_SESSION['name'] = $name;
    $_SESSION['id'] = mysqli_insert_id($con);
}
}
?>