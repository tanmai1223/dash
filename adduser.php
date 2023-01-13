<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 70%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  
  padding: 20px;
}
form {
   max-width: 42em;
   margin: auto;
 }

</style>
<body>

<h1>Add User</h1>

<div>
  <form method="post" action="adding.php">
    First Name<br>
    <input type="text" id="fname" name="firstname" placeholder="xyz">
<br>
<br>
    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Designation">
<br>
<br>
    <label for="role">Role</label><br>
    <input type="text" id="lname" name="role" placeholder="admin/user">
<br>
<br>
    <label for="lname">Email</label><br>
    <input type="text" id="lname" name="email" placeholder="xyz@cvsr.ac.in">
<br>
<br>
    <label for="lname">Password</label><br>
    <input type="password" id="lname" name="password" >
<br>
<br>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>


