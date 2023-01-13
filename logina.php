<?php
$email=$_POST['n1'];
$pass=$_POST['n2'];
$role='admin';
$roles='user';
$con = mysqli_connect("localhost","root","","charts");
if($con->connect_error){
  die("Failed to connect : ".$con->connect_error);
}
else
{
	$stmt=$con->prepare("select * from loginu where email = ?");
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows > 0){
		while($data = $stmt_result->fetch_assoc())
		{
		if($data['password']==$pass and $data['role']==$role)
		{
			header("location:admin.php");
		}
	    elseif($data['password']==$pass and $data['role']==$roles)
		{
			header("location:user.php");
		}
		else{
		header("location:index.php");
	}
		}
	}
	
}

?>