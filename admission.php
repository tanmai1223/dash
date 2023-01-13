
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
tr:last-child{
  font-weight: bold;
}
</style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['program', 'totaladmitted'],
		  <?php
		  $sql="SELECT * from admissions";
		  $fire = mysqli_query($con,$sql);
		  while($result = mysqli_fetch_assoc($fire)){
			  echo "['".$result['program']."',".$result['totaladmitted']."],";
		  }
		  ?>
          
        ]);

        var options = {
          title: 'Program wise admitted count'
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
          ['program', 'intake','admitted'],
          <?php
		  $sql="SELECT * from admissions";
		  $fire = mysqli_query($con,$sql);
		  while($result = mysqli_fetch_assoc($fire)){
			  echo "['".$result['program']."',".$result['intake'].",".$result['admitted']."],";
		  }
		  ?>
        ]);

        var options = {
          chart: {
            title: 'Program wise intake and admitted count',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
 <body>
 <h1>Admission Data for the year 2021-22</h1>
<table border="1" class="dataframe data">
  <thead>
    <tr style="text-align: right;">
      <th>S.No</th>
      <th>Program</th>
      <th>Year</th>
      <th>Intake</th>
      <th>Admitted</th>
      <th>LE Admitted</th>
      <th>Total Admitted</th>
      <th>Admitted %</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>B.Tech</td>
      <td>2021-22</td>
      <td>1460</td>
      <td>1240</td>
      <td>120</td>
      <td>1360</td>
      <td>84.93</td>
    </tr>
    <tr>
      <td>2</td>
      <td>B.sc</td>
      <td>2021-22</td>
      <td>200</td>
      <td>160</td>
      <td>30</td>
      <td>190</td>
      <td>80.00</td>
    </tr>
    <tr>
      <td>3</td>
      <td>B.pharm</td>
      <td>2021-22</td>
      <td>170</td>
      <td>112</td>
      <td>25</td>
      <td>137</td>
      <td>65.88</td>
    </tr>
    <tr>
      <td>4</td>
      <td>BBA</td>
      <td>2021-22</td>
      <td>70</td>
      <td>55</td>
      <td>10</td>
      <td>65</td>
      <td>78.57</td>
    </tr>
    <tr>
      <td>5</td>
      <td>B.com</td>
      <td>2021-22</td>
      <td>80</td>
      <td>54</td>
      <td>8</td>
      <td>62</td>
      <td>67.50</td>
    </tr>
    <tr>
      <td>6</td>
      <td>B.J</td>
      <td>2021-22</td>
      <td>81</td>
      <td>56</td>
      <td>12</td>
      <td>68</td>
      <td>69.14</td>
    </tr>
    <tr>
      <td>7</td>
      <td>B.A</td>
      <td>2021-22</td>
      <td>82</td>
      <td>51</td>
      <td>15</td>
      <td>66</td>
      <td>62.20</td>
    </tr>
    <tr>
      <td>8</td>
      <td>M.Tech</td>
      <td>2021-22</td>
      <td>394</td>
      <td>290</td>
      <td>50</td>
      <td>340</td>
      <td>73.60</td>
    </tr>
    <tr>
      <td>9</td>
      <td>M.Pharm</td>
      <td>2021-22</td>
      <td>79</td>
      <td>60</td>
      <td>10</td>
      <td>70</td>
      <td>75.95</td>
    </tr>
    <tr>
      <td>10</td>
      <td>MBA</td>
      <td>2021-22</td>
      <td>40</td>
      <td>25</td>
      <td>7</td>
      <td>32</td>
      <td>62.50</td>
    </tr>
    <tr>
      <td>11</td>
      <td>Ph.D</td>
      <td>2021-22</td>
      <td>123</td>
      <td>85</td>
      <td>20</td>
      <td>105</td>
      <td>69.11</td>
    </tr>
    <tr>
      <td>Total</td>
      <td></td>
      <td></td>
      <td>2779</td>
      <td></td>
      <td></td>
      <td>2495</td>
      <td>89.78</td>
    </tr>
  </tbody>
</table>
<div class="grid-container-element">
    <div class="grid-child-element purple" id="piechart" style="width: 500px; height: 300px;"></div>
    <div class="grid-child-element green" id="barchart_material" style="width: 500px; height: 300px;"></div>
</div>
</body>
</html>
