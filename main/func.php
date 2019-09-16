<?php
$con=mysqli_connect("localhost","root","","abc");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM doctorapp WHERE username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("location:admin.php");
	}
	else
	{
    echo"<script>alert('Error login.')</script>";
    echo"<script>window.open('index.php','_self')</script>";
	}
}
if(isset($_POST['pat_submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$docapp=$_POST['docapp']; 
$query ="INSERT INTO doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
$result=mysqli_query($con,$query);
if($resutl)
{
 echo"<script>alert('Appoinment registered.')</script>";
 echo"<script>window.open('admin.php','_self')</script>"; }

 
}
?>