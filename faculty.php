
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
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['branch', 'phds'],
		  <?php
		  $sql="SELECT * from faculty";
		  $fire = mysqli_query($con,$sql);
		  while($result = mysqli_fetch_assoc($fire)){
			  echo "['".$result['branch']."',".$result['phds']."],";
		  }
		  ?>
          
        ]);

        var options = {
          title: 'Department wise Doctrate Count'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
	  </script>
	  <script>
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['branch', 'male', 'female'],
          <?php
		  $sql="SELECT * from faculty";
		  $fire = mysqli_query($con,$sql);
		  while($result = mysqli_fetch_assoc($fire)){
			  echo "['".$result['branch']."',".$result['male'].",".$result['female']."],";
		  }
		  ?>
        ]);

        var options = {
          chart: {
            title: 'Department wise gender ration',
            
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
 <body>
 <h1>Faculty Details</h1>
<table border="1" class="dataframe data">
  <thead>
    <tr style="text-align: right;">
      <th>S.No</th>
      <th>Branch</th>
      <th>Male</th>
      <th>Female</th>
      <th>Total</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Information Technology</td>
      <td>18</td>
      <td>10</td>
      <td>28</td>
      
      
    </tr>
    <tr>
      <td>2</td>
      <td>Computer Science </td>
      <td>24</td>
      <td>26</td>
      <td>50</td>
      
      
    </tr>
    <tr>
      <td>3</td>
      <td>Electronics & Communication</td>
      <td>28</td>
      <td>18</td>
      <td>46</td>
      
    </tr>
    <tr>
      <td>4</td>
      <td>Electrical & Electronics</td>
      <td>32</td>
      <td>7</td>
      <td>39</td>
      
    </tr>
    <tr>
      <td>5</td>
      <td>Civil</td>
      <td>25</td>
      <td>5</td>
      <td>30</td>
      
    </tr>
    <tr>
      <td>6</td>
      <td>Mechanical</td>
      <td>23</td>
      <td>7</td>
      <td>30</td>
      
    </tr>
    <tr>
      <td>7</td>
      <td>Artificial Intelligence</td>
      <td>8</td>
      <td>4</td>
      <td>12</td>
      
    </tr>
    <tr>
      <td>8</td>
      <td>Chemical</td>
      <td>2</td>
      <td>5</td>
      <td>7</td>
      
    </tr>
   </tbody>
</table>
<div class="grid-container-element">
<div class="grid-child-element green" id="columnchart_material" style="width: 500px; height: 300px;"></div>
    <div class="grid-child-element purple" id="piechart" style="width: 500px; height: 300px;"></div>
    
</div>
</body>
</html>
