<?php
    require 'common.php';
	
	$oldpasswd = $_POST['old_password'];
	$new = $_POST['new'];
	$confirm = $_POST['confirm'];
	//$u_email=$_POST['email'];;
	//$u_id=2;
	if(isset($_POST['save'])){
	$select="select *from users where email='$u_email'";
	
	$query=mysqli_query($con,$select);
	
	$pass=mysqli_fetch_assoc($query);
	//echo $pass;
	$ans=$pass['password'];
	echo $pass['password']."<br>".$oldpasswd."<br><br>";
	if($oldpasswd===$ans)
	{
	     if($new==$confirm)
		 {
		      
			      $update="update users set password='$new' where id='$_SESSION['u_id']'";// or id='u_id'";
				 if(mysqli_query($con,$update))
				 {
					 echo "Password has changed successfully";
				 }
				 else
				 {
					 echo "Serevr Error";
				 }
			
		 }
		 else
		 {
		    echo "Password is not matched";
		 }
	}
	else
	{
	  echo "you have entered wrong password!";
	}
	}
	if(isset($_POST['sub']))
	{
		$select="select *from seller where email='$u_email'";
	
	$query=mysqli_query($con,$select);
	
	$pass=mysqli_fetch_assoc($query);
	//echo $pass;
	$ans=$pass['password'];
	//echo $pass['password']."<br>".$oldpasswd."<br><br>";
	if($oldpasswd===$ans)
	{
	     if($new==$confirm)
		 {
		      
			      $update="update users set password='$new' where email='$u_email'";// or id='u_id'";
				 if(mysqli_query($con,$update))
				 {
					 echo "Password has changed successfully";
				 }
				 else
				 {
					 echo "Serevr Error";
				 }
			
		 }
		 else
		 {
		    echo "Password is not matched";
		 }
	}
	else
	{
	  echo "you have entered wrong password!";
	}
		   
	}
?>
