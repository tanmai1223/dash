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
 <h1>Programs</h1>
<table border="1" class="dataframe data">
  <thead>
    <tr style="text-align: right;">
      <th>Sno</th>
      <th>Branch</th>
      <th>Intake</th>
      <th>Admitted</th>
	  <th>Lateral</th>
      <th>Total</th>
    </tr>
	</thead>
  <tbody>
	<tr>
      <td>1</td>
      <td>Data Science</td>
      <td>60</td>
      <td>42</td>
      <td>0</td>
	  <td>42</td> 
      
    </tr>
	<tr>
      <td>2</td>
      <td>Artificial Intelligence  </td>
      <td>60</td>
      <td>36</td>
      <td>0</td>
      <td>36</td>
    </tr>
	
	</tbody>
</table>