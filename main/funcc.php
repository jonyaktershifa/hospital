<?php
$con=mysqli_connect("localhost","root","","abc");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM logintb WHERE username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("location:admin.php");
	
	}

	else {

	      // echo "window.open('index.php')";
		  echo "<script> alert('Enter correct details.');</script";
}
 }
?>