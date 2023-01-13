
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
$username = $_POST['n1'];
$password = $_POST['n2'];
$con = mysqli_connect("localhost","root","","charts");
$sql= "SELECT * FROM loginu WHERE username = '$username' AND password = '$password' AND role='admin' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
}
?>