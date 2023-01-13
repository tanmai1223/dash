<!DOCTYPE>
<html>
<head>
<title>upload</title>
</head>
<body>
<form action="up.php" method="post"  enctype="multipart/form-data">
ID:<input type="number" name="rollno" >
<br>
<label for="myfile">Select</label>
<input type="file" id="myfile" name="file">
<br>
<input type="submit" name="submit" value="upload">
</form>
</body>
</html>