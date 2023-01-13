<?php
$con = mysqli_connect("localhost","root","","charts");
if(!$con){
  die("Failed to connect : ".$con->connect_error);
}
if(isset($_POST['submit']))
{
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$role = $_POST['role'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$sql="INSERT INTO `loginu`(`firstname`, `lastname`, `role`, `email`, `password`) VALUES ('$fname','$lname','$role','$email','$pass')";
	$run=mysqli_query($con,$sql);
	if($run)
	{
		header("location:alert.php");
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
	
}
?>
