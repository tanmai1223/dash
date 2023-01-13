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
      <td>VLSI System Design</td>
      <td>60</td>
      <td>28</td>
      <td>2</td>
	  <td>30</td> 
      
    </tr>
	<tr>
      <td>2</td>
      <td>Computer Science </td>
      <td>70</td>
      <td>52</td>
      <td>8</td>
      <td>60</td>
    </tr>
	<tr>
      <td>3</td>
      <td>Structural Engineering</td>
      <td>50</td>
      <td>20</td>
      <td>5</td>
      <td>25</td>
    </tr>
	<tr>
      <td>4</td>
      <td>Cyber Security</td>
      <td>60</td>
      <td>48</td>
      <td>2</td>
	  <td>50</td>
      
    </tr>
	<tr>
      <td>5</td>
      <td>Embedded Systems</td>
      <td>50</td>
      <td>22</td>
      <td>4</td>
      <td>26</td>
    </tr>
	<tr>
      <td>6</td>
      <td>Artificial Intelligence</td>
      <td>50</td>
      <td>31</td>
      <td>1</td>
	  <td>32</td>
      
    </tr>
	<tr>
      <td>7</td>
      <td>Data Science</td>
      <td>50</td>
      <td>12</td>
      <td>8</td>
      <td>20</td>
    </tr>
	
	</tbody>
</table>