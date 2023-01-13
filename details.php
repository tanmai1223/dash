<?php
$con = mysqli_connect("localhost","root","","charts");
$query="SELECT * FROM `loginu`";
$result=mysqli_query($con,$query);

?>
<html> 
    <head>
	<style>
	h2{
  margin-top: 3%;
}
	.grid-container-element { 
    display: grid; 
    grid-template-columns: 1fr 1fr; 
    grid-gap: 1px; 
    align:center;
    width: 50%; 
} 
.grid-child-element { 
    margin: 50px; 
    border: 2px solid black; 
}
table {
        margin-top: 3%;
        margin-left: 20%;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}
td{
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
    border:none;
} 

th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
    background-color: #012b5ad8;
    color:#fff;
    border:none;
}

tr:nth-child(even) {
    background-color: #dbf3f3bb;
}

</style>
</head>
 <body>
 <h1>User Details</h1>
<table border="1" class="dataframe data">
  <thead>
    <tr style="text-align: right;">
      <th>First Name</th>
      <th>Last Name</th>
	  <th>Role</th>
      <th>Email</th>
      <th>Password</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  while($rows=mysqli_fetch_assoc($result))
  {
	  ?>
  
  <tr>
      <td><?php echo $rows['firstname']; ?></td>
      <td><?php echo $rows['lastname']; ?></td>
	  <td><?php echo $rows['role']; ?></td>
      <td><?php echo $rows['email']; ?></td>
      <td><?php echo $rows['password']; ?></td>
   </tr>
   <?php 
  }
  ?>
   </tbody>
</table>