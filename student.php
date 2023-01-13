
<?php
$con = mysqli_connect("localhost","root","","charts");

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
        margin-left: 3.5%;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 95%;
}
td{
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border:none;
} 

th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    background-color: #012b5ad8;
    color:#fff;
    border:none;
}

tr:nth-child(even) {
    background-color: #dbf3f3bb;
}

</style>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
		['branch', 'total'],
          <?php
		  $sql="SELECT * from students";
		  $fire = mysqli_query($con,$sql);
		  while($result = mysqli_fetch_assoc($fire)){
			  echo "['".$result['branch']."',".$result['total']."],";
		  }
		  ?>
          
        ]);

        var options = {
          title: 'Department Strength',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
	  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['branch', 'placed', 'total'],
          <?php
		  $sql="SELECT * from students";
		  $fire = mysqli_query($con,$sql);
		  while($result = mysqli_fetch_assoc($fire)){
			 echo "['".$result['branch']."',".$result['placed'].",".$result['total']."],";
		  }
		  ?>
        ]);

        var options = {
          title: 'Placement Data',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
 <body>
 <h1>Student Details</h1>
<table border="1" class="dataframe data">
  <thead>
    <tr style="text-align: right;">
      <th>S.No</th>
      <th>Branch</th>
	  <th>Placed</th>
      <th>Male</th>
      <th>Female</th>
      <th>Total</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Information Technology</td>
      <td>123</td>
      <td>120</td>
	  <td>80</td>
      <td>200</td>
      
      
    </tr>
    <tr>
      <td>2</td>
      <td>Computer Science </td>
      <td>156</td>
      <td>180</td>
	  <td>170</td>
      <td>270</td>
      
      
    </tr>
    <tr>
      <td>3</td>
      <td>Electronics & Communication</td>
      <td>145</td>
	  <td>160</td>
      <td>100</td>
      <td>260</td>
      
    </tr>
    <tr>
      <td>4</td>
      <td>Electrical & Electronics</td>
      <td>124</td>
      <td>200</td>
	  <td>80</td>
      <td>280</td>
      
    </tr>
    <tr>
      <td>5</td>
      <td>Civil</td>
      <td>125</td>
      <td>190</td>
	  <td>85</td>
      <td>275</td>
      
    </tr>
    <tr>
      <td>6</td>
      <td>Mechanical</td>
      <td>110</td>
      <td>250</td>
	  <td>40</td>
      <td>290</td>
      
    </tr>
    <tr>
      <td>7</td>
      <td>Artificial Intelligence</td>
      <td>25</td>
      <td>35</td>
	  <td>30</td>
      <td>65</td>
      
    </tr>
    <tr>
      <td>8</td>
      <td>Chemical</td>
      <td>49</td>
	  <td>72</td>
      <td>54</td>
      <td>126</td>
      
    </tr>
   </tbody>
</table>
<div class="grid-container-element">
 <div class="grid-child-element purple" id="donutchart" style="width: 500px; height: 300px;"></div>
<div class="grid-child-element green" id="chart_div" style="width: 500px; height: 300px;"></div>
   
    
</div>
</body>
</html>
