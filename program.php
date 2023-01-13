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
    width: 90%; 
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
      <th>Program</th>
      <th>Intake</th>
      <th>Admitted</th>
	  <th>Lateral</th>
      <th>Total</th>
    </tr>
	</thead>
  <tbody>
	<tr>
      <td>1</td>
      <td><a style="font-size:15px;text-decoration: none;color:black;" href="btech.php" target="des_page">B.Tech</a></td>
      <td>8000</td>
      <td>7856</td>
      <td>500</td>
	  <td>8356</td> 
      
    </tr>
	<tr>
      <td>2</td>
      <td><a style="font-size:15px;text-decoration: none;color:black;" href="bpharm.php" target="des_page">B.Pharm</a></td>
      <td>230</td>
      <td>185</td>
      <td>15</td>
      <td>200</td>
    </tr>
	<tr>
      <td>3</td>
      <td><a style="font-size:15px;text-decoration: none;color:black;" href="bba.php" target="des_page">Business</a></td>
      <td>100</td>
      <td>88</td>
      <td>6</td>
      <td>94</td>
    </tr>
	<tr>
      <td>4</td>
      <td><a style="font-size:15px;text-decoration: none;color:black;" href="bse.php" target="des_page">B.Sc</a></td>
      <td>50</td>
      <td>44</td>
      <td>1</td>
	  <td>45</td>
      
    </tr>
	<tr>
      <td>5</td>
      <td><a style="font-size:15px;text-decoration: none;color:black;" href="mtech.php" target="des_page">M.Tech</a></td>
      <td>60</td>
      <td>48</td>
      <td>6</td>
      <td>54</td>
    </tr>
	<tr>
      <td>6</td>
      <td><a style="font-size:15px;text-decoration: none;color:black;" href="mpharm.php" target="des_page">M.Pharm</a></td>
      <td>50</td>
      <td>26</td>
      <td>2</td>
	  <td>28</td>
      
    </tr>
	<tr>
      <td>7</td>
      <td><a style="font-size:15px;text-decoration: none;color:black;" href="phd.php" target="des_page">Phd</a></td>
      <td>50</td>
      <td>32</td>
      <td>4</td>
      <td>36</td>
    </tr>
	</tbody>
</table>