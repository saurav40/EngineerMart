<?php
require 'common.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(isset($_POST['submit']))
{
$u_email=$_POST['email'];
$pass=$_POST['password'];
$q="select *from users where email='$u_email' AND password='$pass'";
$result=mysqli_query($con,$q);
$a=mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)==1)
{ 
	$_SESSION['uname']=$a['first_name'];
    $_SESSION['lname']=$a['last_name'];	
	$_SESSION['u_id']=$a['id'];
}
else
{
echo "<script>alert('Wrong Email/Password..!')</script>";
            echo "<script>window.location = 'login.php'</script>";
 }
}
if(isset($_SESSION['uname'])){

   echo $_SESSION['uname'];
	$uname=$_SESSION['uname'];
	if($uname=='admin@example.com'){
	header("Location: upload.php");
	}
	else
	header("Location: welcome.php");
}
}
if(isset($_POST['save']))
{
$u_email=$_POST['email'];
$pass=$_POST['password'];
$q="select *from seller where email='$u_email' AND password='$pass'";
$result=mysqli_query($con,$q);
$a=mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)==1)
{ 
	$_SESSION['uname']=$a['name'];
   // $_SESSION['lname']=$a['last_name'];	
}
else
{
  
 echo "<script>alert('Wrong Email/Password..!')</script>";
            echo "<script>window.location = 'seller_login_form.php'</script>";
 }
}
/*$email = $_POST['email'];
$regex_email = "[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z]{2,3}$";
//"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

if(!preg_match($regex_email, $email)){
    
    header ('location: index.php ? email_error = enter correct email');
    //echo "Incomplete email";
}

$password = $_POST['password'];
if(strlen($password)<6)
{
    header ('location: index.php ? password_error = enter correct password');
    //echo "Password should have at-least 6 characters";
}

$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password)*/
    
?>