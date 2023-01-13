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
      <td>Information Technology</td>
      <td>250</td>
      <td>190</td>
      <td>20</td>
	  <td>210</td> 
      
    </tr>
	<tr>
      <td>2</td>
      <td>Computer Science </td>
      <td>290</td>
      <td>261</td>
      <td>24</td>
      <td>285</td>
    </tr>
	<tr>
      <td>3</td>
      <td>Electronics & Communication</td>
      <td>270</td>
      <td>240</td>
      <td>25</td>
      <td>265</td>
    </tr>
	<tr>
      <td>4</td>
      <td>Electrical & Electronics</td>
      <td>280</td>
      <td>258</td>
      <td>12</td>
	  <td>270</td>
      
    </tr>
	<tr>
      <td>5</td>
      <td>Mechanical</td>
      <td>290</td>
      <td>240</td>
      <td>18</td>
      <td>268</td>
    </tr>
	<tr>
      <td>6</td>
      <td>Civil</td>
      <td>285</td>
      <td>236</td>
      <td>14</td>
	  <td>250</td>
      
    </tr>
	<tr>
      <td>7</td>
      <td>Chemical</td>
      <td>150</td>
      <td>112</td>
      <td>18</td>
      <td>130</td>
    </tr>
	<tr>
      <td>8</td>
      <td>Artificial Intelligence</td>
      <td>80</td>
      <td>54</td>
      <td>6</td>
      <td>60</td>
    </tr>
	<tr>
      <td>9</td>
      <td>Computer Science(Cyber Security)</td>
      <td>60</td>
      <td>44</td>
      <td>0</td>
      <td>44</td>
    </tr>
	<tr>
      <td>10</td>
      <td>Computer Science(Data Science)</td>
      <td>50</td>
      <td>32</td>
      <td>4</td>
      <td>36</td>
    </tr>
	</tbody>
</table>