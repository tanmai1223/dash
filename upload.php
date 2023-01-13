<!DOCTYPE html>
<html>
<head>
<style>
table
{
max-width: 64em;
   margin: auto;
   width:70%;
   box-shadow: 1px 0 10px 0 #000 ; 
   }
  table {border:2px solid}
   

</style>
</head>
<body>

<h1>Upload Data</h1>
<br><br>
<div>
<table  height=80% border="0">

  
  <tr >
  <form action="upprog.php" method="post"  enctype="multipart/form-data">
  <td><h3><center>Programs:</td>
  <td><center><h3>Filename:          <input type="text" name="rollno" ></center></td>
  <td><center><input type="file" id="myfile" name="file"></center></td>
  <td><input type="submit" value="Submit"></td>
  </form>
  </tr>
  <tr >
  <form action="upadd.php" method="post"  enctype="multipart/form-data">
  <td><h3><center>Admissions:</td>
  <td><center><h3>Filename:          <input type="text" name="rollno" ></center></td>
  <td><center><input type="file" id="myfile" name="file"></center></td>
  <td><input type="submit" value="Submit"></td>
  </form>
  </tr>
  <tr >
  <form action="upfac.php" method="post"  enctype="multipart/form-data">
  <td><h3><center>Faculty:</td>
  <td><center><h3>Filename:          <input type="text" name="rollno" ></center></td>
  <td><center><input type="file" id="myfile" name="file"></center></td>
  <td><input type="submit" value="Submit"></td>
  </form>
  </tr>
  <tr >
  <form action="upstud.php" method="post"  enctype="multipart/form-data">
  <td><h3><center>Students:</td>
  <td><center><h3>Filename:          <input type="text" name="rollno" ></center></td>
  <td><center><input type="file" id="myfile" name="file"></center></td>
  <td><input type="submit" value="Submit"></td>
  </form>
  </tr>
  <tr >
  <form action="upexam.php" method="post"  enctype="multipart/form-data">
  <td><h3><center>Exams:</td>
  <td><center><h3>Filename:          <input type="text" name="rollno" ></center></td>
  <td><center><input type="file" id="myfile" name="file"></center></td>
  <td><input type="submit" value="Submit"></td>
  </form>
  </tr>
  

  
  
</table>
</div>

</body>
</html>


