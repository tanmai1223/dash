<?php
$con = mysqli_connect("localhost","root","","charts");
if(!$con){
die('could not connect: '.mysqli_connect_error());
}
$file=$_FILES ['file']['name'];
$filename=$_POST["rollno"];
echo "Filename: " . $_FILES['file']['name']."<br>";
move_uploaded_file($_FILES['file']['tmp_name'],$file);
rename($file,$filename.".ods");
$add="/".$filename .".ods";
$query=mysqli_query($con,"INSERT INTO `upload` VALUES ('$filename','$add')");
?>